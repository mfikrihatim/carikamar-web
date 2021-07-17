<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General_information extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MSudi');
    }
    public function index()
    {
        // if ($this->session->userdata('Login')) {
        // 	$data['nama'] = $this->session->userdata('nama');
        // 	$data['level'] = $this->session->userdata('level');
        $data['DataMasterTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
        $data['content'] = 'list-general-information';
        $this->load->view('welcome_message', $data);
        // } else {
        // 	redirect(site_url('Login'));
        // }
    }

    public function AddGeneralInformation()
    {

        $add['tipe_properti_id'] = $this->input->post('tipe_properti_id');
        $add['nama_properti'] = $this->input->post('nama_properti');
        $add['nama_badan_hukum'] = $this->input->post('nama_badan_hukum');
        $add['alamat_jalan'] = $this->input->post('alamat_jalan');
        $add['kode_pos'] = $this->input->post('kode_pos');
        $add['no_telp'] = $this->input->post('no_telp');
        $add['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $add['flag_chanel_manager'] = $this->input->post('flag_chanel_manager');
        $add['created_by'] = 1;
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;


        $informasi_umum_detail_id = $this->MSudi->AddData('informasi_umum_detail', $add);
        $add1['informasi_umum_detail_id'] = $informasi_umum_detail_id;
        $add1['jenis_kontak'] = $this->input->post('jenis_kontak');
        $add1['nama_lengkap'] = $this->input->post('nama_lengkap');
        $add1['email'] = $this->input->post('email');
        $add1['no_hp'] = $this->input->post('no_hp');
        $add1['no_telp_kantor'] = $this->input->post('no_telp_kantor');
        $add1['extension'] = $this->input->post('extension');
        $add1['jabatan'] = $this->input->post('jabatan');
        $add1['flag_fullday'] = $this->input->post('flag_fullday');
        $add1['created_by'] = 1;
        $add1['created_date'] = date("Y-m-d H:i:s");
        $add1['updated_by'] = null;
        $add1['updated_date'] = null;
        $add1['deleted_by'] = null;
        $add1['deleted_date'] = null;
        $add1['status_id'] = 1;
        $this->MSudi->AddData('informasi_umum_kontak', $add1);
        redirect(site_url('General_information/index'));
    }
}
