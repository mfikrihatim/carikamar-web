<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_role_kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataMasterRoleKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_role_kontrak', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_role_kontrak'] = $tampil->nama_role_kontrak;
            $data['detail']['deskripsi'] = $tampil->deskripsi;
            $data['content'] = 'VFormUpdateMasterRoleKontrak';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['MasterRoleKontrak'] = $this->MSudi->GetDataWhere('master_role_kontrak', 'status_id', 1)->result();
            $data['content'] = 'VMasterRoleKontrak';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterRoleKontrak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterRoleKontrak';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterRoleKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama_role_kontrak'] = $this->input->post('nama_role_kontrak');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['status_id'] = 1;


        $this->MSudi->AddData('master_role_kontrak', $add);
        redirect(site_url('Master_role_kontrak/DataMasterRoleKontrak'));
    }
    public function UpdateDataMasterRoleKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama_role_kontrak'] = $this->input->post('nama_role_kontrak');
        $update['deskripsi'] = $this->input->post('deskripsi');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('master_role_kontrak', 'id', $id, $update);
        redirect(site_url('Master_role_kontrak/DataMasterRoleKontrak'));
    }


    public function DeleteDataMasterRoleKontrak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_role_kontrak', 'id', $id, $update);
        redirect(site_url('Master_role_kontrak/DataMasterRoleKontrak'));
    }
}