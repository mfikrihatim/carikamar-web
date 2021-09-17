<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Style extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataStyle()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('properti_detail_master_style', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama'] = $tampil->nama;
            $data['content'] = 'VFormUpdateMasterStyle';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataStyle'] = $this->MSudi->GetDataWhere('properti_detail_master_style', 'status_id', 1)->result();
            $data['content'] = 'VMasterStyle';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterStyle()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterStyle';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterStyle()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama'] = $this->input->post('nama');
        $add['status_id'] = 1;


        $this->MSudi->AddData('properti_detail_master_style', $add);
        redirect(site_url('Master_Style/DataStyle'));
    }
    public function UpdateDataMasterStyle()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama'] = $this->input->post('nama');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('properti_detail_master_style', 'id', $id, $update);
        redirect(site_url('Master_Style/DataStyle'));
    }


    public function DeleteDataMasterStyle()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('properti_detail_master_style', 'id', $id, $update);
        redirect(site_url('Master_Style/DataStyle'));
    }
}