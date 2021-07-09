<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properti_Detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataPropertiDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_tipe_properti', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['mata_uang'] = $tampil->mata_uang;
            $data['detail']['flag_kawasan'] = $tampil->flag_kawasan;
            $data['detail']['waktu_checkin'] = $tampil->waktu_checkin;
            $data['detail']['waktu_checkout'] = $tampil->waktu_checkout;
            $data['detail']['jarak_kekota'] = $tampil->jarak_kekota;
            $data['detail']['jumlah_lantai'] = $tampil->jumlah_lantai;
            $data['detail']['biaya_sarapan_tambahan'] = $tampil->biaya_sarapan_tambahan;
            $data['detail']['master_cancel_id'] = $tampil->master_cancel_id;
            $data['detail']['master_style_id'] = $tampil->master_style_id;
            $data['content'] = 'VFormUpdatePropertiDetail';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataPropertiDetail'] = $this->MSudi->GetDataWhere('properti_detail', 'status_id', 1)->result();
            $data['content'] = 'VPropertiDetail';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddPropertiDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $data['content'] = 'VFormAddPropertiDetail';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataPropertiDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['mata_uang'] = $this->input->post('mata_uang');
        $add['flag_kawasan'] = $this->input->post('flag_kawasan');
        $add['waktu_checkin'] = $this->input->post('waktu_checkin');
        $add['waktu_checkout'] = $this->input->post('waktu_checkout');
        $add['jarak_ke_kota'] = $this->input->post('jarak_ke_kota');
        $add['jumlah_lantai'] = $this->input->post('jumlah_lantai');
        $add['biaya_sarapan_tambahan'] = $this->input->post('biaya_sarapan_tambahan');
        $add['master_cancel_id'] = $this->input->post('master_cancel_id');
        $add['master_style_id'] = $this->input->post('master_style_id');
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        $this->MSudi->AddData('properti_detail', $add);
        redirect(site_url('Properti_Detail/DataPropertiDetail'));
    }
    public function UpdateDataPropertiDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['mata_uang'] = $this->input->post('mata_uang');
        $update['flag_kawasan'] = $this->input->post('flag_kawasan');
        $update['waktu_checkin'] = $this->input->post('waktu_checkin');
        $update['waktu_checkout'] = $this->input->post('waktu_checkout');
        $update['jarak_ke_kota'] = $this->input->post('jarak_ke_kota');
        $update['jumlah_lantai'] = $this->input->post('jumlah_lantai');
        $update['biaya_sarapan_tambahan'] = $this->input->post('biaya_sarapan_tambahan');
        $update['master_cancel_id'] = $this->input->post('master_cancel_id');
        $update['master_style_id'] = $this->input->post('master_style_id');


        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");


        $this->MSudi->UpdateData('properti_detail', 'id', $id, $update);
        redirect(site_url('Properti_Detail/DataPropertiDetail'));
    }


    public function DeleteDataPropertiDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $id = $this->uri->segment('3');
        
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('properti_detail', 'id', $id, $update);
        redirect(site_url('Properti_Detail/DataPropertiDetail'));
    }
}