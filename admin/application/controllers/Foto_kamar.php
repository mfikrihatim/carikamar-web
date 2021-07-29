<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_kamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataFotoKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('foto_kamar', 'id', $id)->row();
            $data['TipeKamar'] = $this->MSudi->GetDataWhere('tipe_kamar', 'status_id', 1)->result();
            $data['FotoTipe'] = $this->MSudi->GetDataWhere('foto_tipe', 'status_id', 1)->result();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['tipe_kamar_id'] = $tampil->tipe_kamar_id;
            $arrayFotoKamar = json_decode($tampil->foto, TRUE);
            $data['detail']['foto'] = $arrayFotoKamar;
            $data['detail']['foto_tipe_id'] = $tampil->foto_tipe_id;
            $data['content'] = 'VFormUpdateFotoKamar';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " tipe_kamar.id = foto_kamar.tipe_kamar_id";
            $join1 = " foto_tipe.id = foto_kamar.foto_tipe_id";
            $this->db->select('foto_kamar.id,
            foto_kamar.tipe_kamar_id,
            tipe_kamar.nama_kamar,
            foto_kamar.foto,
             foto_tipe.nama_tipe_foto, 
             foto_kamar.status_id');
            $this->db->from('foto_kamar');
            $this->db->join('tipe_kamar', $join);
            $this->db->join('foto_tipe', $join1);
            $this->db->where('foto_kamar.status_id', 1);
            $data['FotoKamar'] = $this->db->get()->result();
            $data['content'] = 'VFotoKamar';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddFotoKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['TipeKamar'] = $this->MSudi->GetDataWhere('tipe_kamar', 'status_id', 1)->result();
        $data['FotoTipe'] = $this->MSudi->GetDataWhere('foto_tipe', 'status_id', 1)->result();
        $data['content'] = 'VFormAddFotoKamar';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataFotoKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['tipe_kamar_id'] = $this->input->post('tipe_kamar_id');

        $data = array();
        $data['filenames'] = [];
        $files = (isset($_FILES['fotoKamar'])) ? $_FILES['fotoKamar'] : array();

        if (isset($files['name'])) {
            if (isset($_FILES['fotoKamar'])) {

                $data = array();
                $data['filenames'] = [];
                // Count total files
                $countfiles = count($_FILES['fotoKamar']['name']);

                // Looping all files
                for ($i = 0; $i < $countfiles; $i++) {

                    if (!empty($_FILES['fotoKamar']['name'][$i])) {

                        // Define new $_FILES array - $_FILES['file']
                        $_FILES['file']['name'] = $_FILES['fotoKamar']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['fotoKamar']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['fotoKamar']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['fotoKamar']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['fotoKamar']['size'][$i];

                        // Set preference
                        $config['upload_path'] = '././upload/kamar';
                        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png|gif|JPG';
                        // $config['max_size'] = '500000000'; // max_size in kb
                        $config['file_name'] = $_FILES['fotoKamar']['name'][$i];

                        //Load upload library
                        $this->load->library('upload', $config);

                        try {

                            // File upload
                            if ($this->upload->do_upload('file')) {
                                // Get data about the file
                                $uploadData = $this->upload->data();
                                $filename = site_url('upload/') . 'kamar/' . $uploadData['file_name'];
                                $replcate = str_replace("index.php/", "", $filename);
                                $filename = $replcate;

                                // Initialize array
                                array_push($data['filenames'], $filename);
                            }
                        }

                        //catch exception
                        catch (Exception $e) {
                            echo 'Message: ' . $e->getMessage();
                        }
                    }
                }
            }
        }

        if (count($data['filenames']) > 0) {

            $image = json_encode($data['filenames']);
            $replcate = str_replace("\/", "/", $image);
            $data['filenames'] = $replcate;
            $add['foto'] = $data['filenames'];
        } else {
            $add['foto'] = "[]";
        }


        $add['foto_tipe_id'] = $this->input->post('foto_tipe_id');
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('foto_kamar', $add);
        redirect(site_url('Foto_kamar/DataFotoKamar'));
    }
    public function UpdateDataFotoKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['tipe_kamar_id'] = $this->input->post('tipe_kamar_id');
        $data = array();
        $data['filenames'] = [];
        $files = (isset($_FILES['fotoKamar'])) ? $_FILES['fotoKamar'] : array();

        if (isset($files['name'])) {
            if (isset($_FILES['fotoKamar'])) {

                $data = array();
                $data['filenames'] = [];
                // Count total files
                $countfiles = count($_FILES['fotoKamar']['name']);

                // Looping all files
                for ($i = 0; $i < $countfiles; $i++) {

                    if (!empty($_FILES['fotoKamar']['name'][$i])) {

                        // Define new $_FILES array - $_FILES['file']
                        $_FILES['file']['name'] = $_FILES['fotoKamar']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['fotoKamar']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['fotoKamar']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['fotoKamar']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['fotoKamar']['size'][$i];

                        // Set preference
                        $config['upload_path'] = '././upload/kamar/';
                        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png|gif|JPG';
                        // $config['max_size'] = '500000000'; // max_size in kb
                        $config['file_name'] = $_FILES['fotoKamar']['name'][$i];

                        //Load upload library
                        $this->load->library('upload', $config);

                        try {

                            // File upload
                            if ($this->upload->do_upload('file')) {
                                // Get data about the file
                                $uploadData = $this->upload->data();
                                $filename = site_url('upload/') . 'kamar/' . $uploadData['file_name'];
                                $replcate = str_replace("index.php/", "", $filename);
                                $filename = $replcate;

                                // Initialize array
                                array_push($data['filenames'], $filename);
                            }
                        }

                        //catch exception
                        catch (Exception $e) {
                            echo 'Message: ' . $e->getMessage();
                        }
                    }
                }
            }
        }

        if (count($data['filenames']) > 0) {

            $image = json_encode($data['filenames']);
            $replcate = str_replace("\/", "/", $image);
            $data['filenames'] = $replcate;
            $update['foto'] = $data['filenames'];
        } else {
            $data['foto'] = "[]";
        }
        $update['status_id'] = 1;
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('foto_kamar', 'id', $id, $update);
        redirect(site_url('Foto_kamar/DataFotoKamar'));
    }


    public function DeleteDataFotoKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");

        $this->MSudi->UpdateData('foto_kamar', 'id', $id, $update);
        redirect(site_url('Foto_kamar/DataFotoKamar'));
    }
}
