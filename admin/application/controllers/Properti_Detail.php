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
            $data['DataInformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('properti_detail', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['mata_uang'] = $tampil->mata_uang;
            $data['detail']['flag_kawasan'] = $tampil->flag_kawasan;
            $data['detail']['waktu_checkin'] = $tampil->waktu_checkin;
            $data['detail']['waktu_checkout'] = $tampil->waktu_checkout;
            $data['detail']['jarak_ke_kota'] = $tampil->jarak_ke_kota;
            $data['detail']['jumlah_lantai'] = $tampil->jumlah_lantai;
            $data['detail']['biaya_sarapan_tambahan'] = $tampil->biaya_sarapan_tambahan;
            // $data['detail']['master_cancel_id'] = $tampil->master_cancel_id;
            // $data['detail']['master_style_id'] = $tampil->master_style_id;
            $data['content'] = 'VFormUpdatePropertiDetail';
        } else {
            $join = "informasi_umum_detail.id = properti_detail.informasi_umum_detail_id";
            $join1 = "properti_detail_master_cancel.id = properti_detail.master_cancel_id";
            $join2 = "properti_detail_master_style.id = properti_detail.master_style_id";

            $this->db->select('properti_detail.id, informasi_umum_detail.nama_properti as nama_properti, properti_detail.mata_uang, properti_detail.flag_kawasan, properti_detail.waktu_checkin, properti_detail.waktu_checkout,
            properti_detail.jarak_ke_kota, properti_detail.jumlah_lantai, properti_detail.biaya_sarapan_tambahan, properti_detail_master_cancel.nama as nama_cancel, properti_detail_master_style.nama as nama_style , properti_detail.status_id');
            $this->db->from('properti_detail');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('properti_detail_master_cancel', $join1);
            $this->db->join('properti_detail_master_style', $join2);
            $this->db->where('properti_detail.status_id', 1);
            $data['DataPropertiDetail'] = $this->db->get()->result();

            $data['content'] = 'VPropertiDetail';
        }

        $this->load->view('welcome_message', $data);
    }
    public function VFormAddPropertiDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['DataInformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['DataPropertiDetailMasterCancel'] = $this->MSudi->GetDataWhere('properti_detail_master_cancel', 'status_id', 1)->result();
        $data['DataPropertiDetailMasterStyle'] = $this->MSudi->GetDataWhere('properti_detail_master_style', 'status_id', 1)->result();
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