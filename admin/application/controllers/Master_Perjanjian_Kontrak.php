<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Perjanjian_Kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataPerjanjianKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_perjanjian_kontrak', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['detail_perjanjian_kontrak'] = $tampil->detail_perjanjian_kontrak;
            $data['detail']['deskripsi'] = $tampil->deskripsi;
            $data['content'] = 'VFormUpdateMasterPerjanjian';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataPerjanjianKontrak'] = $this->MSudi->GetDataWhere('master_perjanjian_kontrak', 'status_id', 1)->result();
            $data['content'] = 'VMasterPerjanjian';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterPerjanjianKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterPerjanjian';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterPerjanjianKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['detail_perjanjian_kontrak'] = $this->input->post('detail_perjanjian_kontrak');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['status_id'] = 1;


        $this->MSudi->AddData('master_perjanjian_kontrak', $add);
        redirect(site_url('Master_Perjanjian_Kontrak/DataPerjanjianKontrak'));
    }
    public function UpdateDataMasterPerjanjianKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama'] = $this->input->post('nama');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('master_perjanjian_kontrak', 'id', $id, $update);
        redirect(site_url('Master_Perjanjian_Kontrak/DataPerjanjianKontrak'));
    }


    public function DeleteDataMasterPerjanjianKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_perjanjian_kontrak', 'id', $id, $update);
        redirect(site_url('Master_Perjanjian_Kontrak/DataPerjanjianKontrak'));
    }
}