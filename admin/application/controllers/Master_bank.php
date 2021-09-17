<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_bank extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataMasterBank()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_bank', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_bank'] = $tampil->nama_bank;
            $data['detail']['deskripsi'] = $tampil->deskripsi;
            $data['content'] = 'VFormUpdateMasterBank';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['MasterBank'] = $this->MSudi->GetDataWhere('master_bank', 'status_id', 1)->result();
            $data['content'] = 'VMasterBank';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterBank()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterBank';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterBank()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama_bank'] = $this->input->post('nama_bank');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['status_id'] = 1;


        $this->MSudi->AddData('master_bank', $add);
        redirect(site_url('Master_bank/DataMasterBank'));
    }
    public function UpdateDataMasterBank()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama_bank'] = $this->input->post('nama_bank');
        $update['deskripsi'] = $this->input->post('deskripsi');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('master_bank', 'id', $id, $update);
        redirect(site_url('Master_bank/DataMasterBank'));
    }


    public function DeleteDataMasterBank()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_bank', 'id', $id, $update);
        redirect(site_url('Master_bank/DataMasterBank'));
    }
}