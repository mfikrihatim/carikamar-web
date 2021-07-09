<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Cancel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataCancel()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('properti_detail_master_cancel', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama'] = $tampil->nama;
            $data['content'] = 'VFormUpdateMasterCancel';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataCancel'] = $this->MSudi->GetDataWhere('properti_detail_master_cancel', 'status_id', 1)->result();
            $data['content'] = 'VMasterCancel';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterCancel()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterFasilitasKamarHeader';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterFasilitasKamarHeader()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama'] = $this->input->post('nama');
        $add['urutan'] = $this->input->post('urutan');
        $add['status_id'] = 1;


        $this->MSudi->AddData('properti_detail_master_cancel', $add);
        redirect(site_url('properti_detail_master_cancel/index'));
    }
    public function UpdateDataMasterFasilitasKamarHeader()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama'] = $this->input->post('nama');
        $update['urutan'] = $this->input->post('urutan');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('properti_detail_master_cancel', 'id', $id, $update);
        redirect(site_url('properti_detail_master_cancel/index'));
    }


    public function DeleteDataMasterCancel()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('properti_detail_master_cancel', 'id', $id, $update);
        redirect(site_url('Master_Cancel/DataCancel'));
    }
}