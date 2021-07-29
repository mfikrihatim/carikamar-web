<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_properti extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataFotoProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('foto_properti', 'id', $id)->row();
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['FotoTipe'] = $this->MSudi->GetDataWhere('foto_tipe', 'status_id', 1)->result();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $arrayFotoProperti = json_decode($tampil->foto, TRUE);
            $data['detail']['foto'] = $arrayFotoProperti;
            $data['detail']['foto_tipe_id'] = $tampil->foto_tipe_id;
            $data['content'] = 'VFormUpdateFotoProperti';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " informasi_umum_detail.id = foto_properti.informasi_umum_detail_id";
            $join1 = " foto_tipe.id = foto_properti.foto_tipe_id";
            $this->db->select('foto_properti.id,
            foto_properti.informasi_umum_detail_id,
            informasi_umum_detail.nama_properti,
            foto_properti.foto,
             foto_tipe.nama_tipe_foto, 
             foto_properti.status_id');
            $this->db->from('foto_properti');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('foto_tipe', $join1);
            $this->db->where('foto_properti.status_id', 1);
            $data['FotoProperti'] = $this->db->get()->result();
            $data['content'] = 'VFotoProperti';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddFotoProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $data['content'] = 'VFormAddFotoProperti';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataFotoProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');

        $data = array();
        $data['filenames'] = [];
        $files = (isset($_FILES['fotoProperti'])) ? $_FILES['fotoProperti'] : array();

        if (isset($files['name'])) {
            if (isset($_FILES['fotoProperti'])) {

                $data = array();
                $data['filenames'] = [];
                // Count total files
                $countfiles = count($_FILES['fotoProperti']['name']);

                // Looping all files
                for ($i = 0; $i < $countfiles; $i++) {

                    if (!empty($_FILES['fotoProperti']['name'][$i])) {

                        // Define new $_FILES array - $_FILES['file']
                        $_FILES['file']['name'] = $_FILES['fotoProperti']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['fotoProperti']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['fotoProperti']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['fotoProperti']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['fotoProperti']['size'][$i];

                        // Set preference
                        $config['upload_path'] = '././upload/properti';
                        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png|gif|JPG';
                        // $config['max_size'] = '500000000'; // max_size in kb
                        $config['file_name'] = $_FILES['fotoProperti']['name'][$i];

                        //Load upload library
                        $this->load->library('upload', $config);

                        try {

                            // File upload
                            if ($this->upload->do_upload('file')) {
                                // Get data about the file
                                $uploadData = $this->upload->data();
                                $filename = site_url('upload/') . 'properti/' . $uploadData['file_name'];
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

        $this->MSudi->AddData('foto_properti', $add);
        redirect(site_url('Foto_properti/DataFotoProperti'));
    }
    public function UpdateDataFotoProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $data = array();
        $data['filenames'] = [];
        $files = (isset($_FILES['fotoProperti'])) ? $_FILES['fotoProperti'] : array();

        if (isset($files['name'])) {
            if (isset($_FILES['fotoProperti'])) {

                $data = array();
                $data['filenames'] = [];
                // Count total files
                $countfiles = count($_FILES['fotoProperti']['name']);

                // Looping all files
                for ($i = 0; $i < $countfiles; $i++) {

                    if (!empty($_FILES['fotoProperti']['name'][$i])) {

                        // Define new $_FILES array - $_FILES['file']
                        $_FILES['file']['name'] = $_FILES['fotoProperti']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['fotoProperti']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['fotoProperti']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['fotoProperti']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['fotoProperti']['size'][$i];

                        // Set preference
                        $config['upload_path'] = '././upload/properti/';
                        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png|gif|JPG';
                        // $config['max_size'] = '500000000'; // max_size in kb
                        $config['file_name'] = $_FILES['fotoProperti']['name'][$i];

                        //Load upload library
                        $this->load->library('upload', $config);

                        try {

                            // File upload
                            if ($this->upload->do_upload('file')) {
                                // Get data about the file
                                $uploadData = $this->upload->data();
                                $filename = site_url('upload/') . 'properti/' . $uploadData['file_name'];
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
        $this->MSudi->UpdateData('foto_properti', 'id', $id, $update);
        redirect(site_url('Foto_properti/DataFotoProperti'));
    }


    public function DeleteDataFotoproperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");

        $this->MSudi->UpdateData('foto_properti', 'id', $id, $update);
        redirect(site_url('Foto_properti/DataFotoProperti'));
    }
}
