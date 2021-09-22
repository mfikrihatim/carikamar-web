<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_Properti extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataFasilitasProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['DataInformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['DataFasilitasPropertiDetail'] = $this->MSudi->GetDataWhere('master_fasilitas_properti_detail', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('fasilitas_properti', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['fasilitas_properti_detail_id'] = $tampil->fasilitas_properti_detail_id;
            $data['detail']['flag_free'] = $tampil->flag_free;
            $data['detail']['flag_fullday'] = $tampil->flag_fullday;
            $data['content'] = 'VFormUpdateFasilitasProperti';
        } else {
            $join = "informasi_umum_detail.id = fasilitas_properti.informasi_umum_detail_id";
            $join1 = "master_fasilitas_properti_detail.id = fasilitas_properti.fasilitas_properti_detail_id";

            $this->db->select('fasilitas_properti.id, informasi_umum_detail.nama_properti as nama_properti, master_fasilitas_properti_detail.nama as nama_fasilitas, 
            fasilitas_properti.flag_free, fasilitas_properti.flag_fullday, fasilitas_properti.status_id');
            $this->db->from('fasilitas_properti');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('master_fasilitas_properti_detail', $join1);
            $this->db->where('fasilitas_properti.status_id', 1);
            $data['DataFasilitasPropertiDetail'] = $this->db->get()->result();
            // $data['DataInformasiUmumDetail'] = $this->db->get()->result();

            $data['content'] = 'VFasilitasProperti';
        }

        $this->load->view('welcome_message', $data);
    }
    public function VFormAddFasilitasProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['DataInformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['DataFasilitasPropertiDetail'] = $this->MSudi->GetDataWhere('master_fasilitas_properti_detail', 'status_id', 1)->result();
        $data['content'] = 'VFormAddFasilitasProperti';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataFasilitasProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['fasilitas_properti_detail_id'] = $this->input->post('fasilitas_properti_detail_id');
        $add['flag_free'] = $this->input->post('flag_free');
        $add['flag_fullday'] = $this->input->post('flag_fullday');
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        $this->MSudi->AddData('fasilitas_properti', $add);
        redirect(site_url('Fasilitas_Properti/DataFasilitasProperti'));
    }
    public function UpdateDataFasilitasProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['fasilitas_properti_detail_id'] = $this->input->post('fasilitas_properti_detail_id');
        $update['flag_free'] = (array_key_exists('flag_free', $_POST)) ? $_POST['flag_free'] : 0;
        $update['flag_fullday'] = (array_key_exists('flag_fullday', $_POST)) ? $_POST['flag_fullday'] : 0;

        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");


        $this->MSudi->UpdateData('fasilitas_properti', 'id', $id, $update);
        redirect(site_url('Fasilitas_Properti/DataFasilitasProperti'));
    }


    public function DeleteDataFasilitasProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $id = $this->uri->segment('3');

        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('fasilitas_properti', 'id', $id, $update);
        redirect(site_url('Fasilitas_Properti/DataFasilitasProperti'));
    }
}
