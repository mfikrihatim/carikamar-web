<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Tipe_Properti extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataTipeProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_tipe_properti', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_tipe'] = $tampil->nama_tipe;
            $data['detail']['deskripsi'] = $tampil->deskripsi;
            $data['content'] = 'VFormUpdateMasterTipeProperti';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataMasterTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
            $data['content'] = 'VMasterTipeProperti';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterTipeProperti()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $data['content'] = 'VFormAddMasterTipeProperti';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterTipeProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $add['nama_tipe'] = $this->input->post('nama_tipe');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        $this->MSudi->AddData('master_tipe_properti', $add);
        redirect(site_url('Master_Tipe_Properti/DataTipeProperti'));
    }
    public function UpdateDataMasterTipeProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');



        $id = $this->input->post('id');
        $update['nama_tipe'] = $this->input->post('nama_tipe');
        $update['deskripsi'] = $this->input->post('deskripsi');


        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");


        $this->MSudi->UpdateData('master_tipe_properti', 'id', $id, $update);
        redirect(site_url('Master_tipe_properti/index'));
    }


    public function DeleteDataMasterTipeProperti()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $id = $this->uri->segment('3');
        
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_tipe_properti', 'id', $id, $update);
        redirect(site_url('Master_Tipe_Properti/DataTipeProperti'));
    }
}