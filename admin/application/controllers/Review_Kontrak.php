<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review_Kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataReviewKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiPenandatanganKontrak'] = $this->MSudi->GetDataWhere('informasi_penandatangan_kontrak', 'status_id', 1)->result();
            $data['MasterPerjanjianKontrak'] = $this->MSudi->GetDataWhere('master_perjanjian_kontrak', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('review_kontrak', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_penandatangan_kontrak_id'] = $tampil->informasi_penandatangan_kontrak_id;
            $data['detail']['perjanjian_kontrak_id'] = $tampil->perjanjian_kontrak_id;
            $data['detail']['flag_menyetujui'] = $tampil->flag_menyetujui;
            $data['content'] = 'VFormUpdateReviewKontrak';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " informasi_penandatangan_kontrak.id = review_kontrak.informasi_penandatangan_kontrak_id";
            $join1 = "master_perjanjian_kontrak.id = review_kontrak.perjanjian_kontrak_id";
            $this->db->select('review_kontrak.id,
            informasi_penandatangan_kontrak.nama_lengkap,
            master_perjanjian_kontrak.deskripsi,
            review_kontrak.flag_menyetujui, 
            review_kontrak.status_id');
            $this->db->from('review_kontrak');
            $this->db->join('informasi_penandatangan_kontrak', $join);
            $this->db->join('master_perjanjian_kontrak', $join1);
            $this->db->where('review_kontrak.status_id', 1);
            $data['ReviewKontrak'] = $this->db->get()->result();
            $data['content'] = 'VReviewKontrak';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddReviewKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiPenandatanganKontrak'] = $this->MSudi->GetDataWhere('informasi_penandatangan_kontrak', 'status_id', 1)->result();
        $data['MasterPerjanjianKontrak'] = $this->MSudi->GetDataWhere('master_perjanjian_kontrak', 'status_id', 1)->result();
        $data['content'] = 'VFormAddReviewKontrak';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataReviewKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_penandatangan_kontrak_id'] = $this->input->post('informasi_penandatangan_kontrak_id');
        $add['perjanjian_kontrak_id'] = $this->input->post('perjanjian_kontrak_id');
        $add['flag_menyetujui'] = $this->input->post('flag_menyetujui');
        $add['status_id'] = 1;


        $this->MSudi->AddData('review_kontrak', $add);
        redirect(site_url('Review_Kontrak/DataReviewKontrak'));
    }
    public function UpdateDataReviewKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['informasi_penandatangan_kontrak_id'] = $this->input->post('informasi_penandatangan_kontrak_id');
        $update['perjanjian_kontrak_id'] = $this->input->post('perjanjian_kontrak_id');
        $update['flag_menyetujui'] = $this->input->post('flag_menyetujui');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('review_kontrak', 'id', $id, $update);
        redirect(site_url('Review_Kontrak/DataReviewKontrak'));
    }


    public function DeleteDataReviewKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('review_kontrak', 'id', $id, $update);
        redirect(site_url('Review_Kontrak/DataReviewKontrak'));
    }
}
