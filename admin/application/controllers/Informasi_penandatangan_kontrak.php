<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_penandatangan_kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataInformasiPenandatanganKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['MasterRoleKontrak'] = $this->MSudi->GetDataWhere('master_role_kontrak', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('informasi_penandatangan_kontrak', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['nama_lengkap'] = $tampil->nama_lengkap;
            $data['detail']['role_kontrak_id'] = $tampil->role_kontrak_id;
            $data['detail']['email'] = $tampil->email;
            $data['detail']['no_hp'] = $tampil->no_hp;
            $data['detail']['flag_menyetujui'] = $tampil->flag_menyetujui;
            $data['detail']['status_id'] = $tampil->status_id;
            $data['content'] = 'VFormUpdateInformasiPenandatanganKontrak';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " informasi_umum_detail.id = informasi_penandatangan_kontrak.informasi_umum_detail_id";
            $join1 = " master_role_kontrak.id = informasi_penandatangan_kontrak.role_kontrak_id";
            $this->db->select('informasi_penandatangan_kontrak.id,informasi_penandatangan_kontrak.informasi_umum_detail_id,
             informasi_umum_detail.nama_properti,
             informasi_penandatangan_kontrak.nama_lengkap, 
             informasi_penandatangan_kontrak.role_kontrak_id,
             master_role_kontrak.nama_role_kontrak,
             informasi_penandatangan_kontrak.email,
             informasi_penandatangan_kontrak.no_hp,
             informasi_penandatangan_kontrak.flag_menyetujui,
             informasi_penandatangan_kontrak.status_id');
            $this->db->from('informasi_penandatangan_kontrak');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('master_role_kontrak', $join1);
            $this->db->where('informasi_penandatangan_kontrak.status_id', 1);
            $data['InformasiPenandatanganKontrak'] = $this->db->get()->result();
            $data['content'] = 'VInformasiPenandatanganKontrak';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddInformasiPenandatanganKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['MasterRoleKontrak'] = $this->MSudi->GetDataWhere('master_role_kontrak', 'status_id', 1)->result();
        $data['content'] = 'VFormAddInformasiPenandatanganKontrak';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataInformasiPenandatanganKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['nama_lengkap'] = $this->input->post('nama_lengkap');
        $add['role_kontrak_id'] = $this->input->post('role_kontrak_id');
        $add['email'] = $this->input->post('email');
        $add['no_hp'] = $this->input->post('no_hp');
        $add['flag_menyetujui'] = $this->input->post('flag_menyetujui');
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('informasi_penandatangan_kontrak', $add);
        redirect(site_url('Informasi_penandatangan_kontrak/DataInformasiPenandatanganKontrak'));
    }
    public function UpdateDataInformasiPenandatanganKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['nama_lengkap'] = $this->input->post('nama_lengkap');
        $update['role_kontrak_id'] = $this->input->post('role_kontrak_id');
        $update['email'] = $this->input->post('email');
        $update['no_hp'] = $this->input->post('no_hp');
        $update['flag_menyetujui'] = $this->input->post('flag_menyetujui');
        $update['status_id'] = 1;

        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('informasi_penandatangan_kontrak', 'id', $id, $update);
        redirect(site_url('Informasi_penandatangan_kontrak/DataInformasiPenandatanganKontrak'));
    }


    public function DeleteDataInformasiPenandatanganKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");

        $this->MSudi->UpdateData('informasi_penandatangan_kontrak', 'id', $id, $update);
        redirect(site_url('Informasi_penandatangan_kontrak/DataInformasiPenandatanganKontrak'));
    }
}
