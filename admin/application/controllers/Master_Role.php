<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Role extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataRole()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['foto'] = $this->session->userdata('foto');
        $data['email'] = $this->session->userdata('email');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_user', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_role'] = $tampil->nama_role;
            $data['detail']['deskripsi'] = $tampil->deskripsi;

            $data['content'] = 'VFormUpdateMasterRole';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataUser'] = $this->MSudi->GetDataWhere('master_role', 'status_id', 1)->result();
            $data['content'] = 'VMasterRole';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterRole()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterRole';
        $this->load->view('welcome_message', $data);
    }
    public function AddMasterRole()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama_role'] = $this->input->post('nama_role');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        $this->MSudi->AddData('master_role', $add);
        redirect(site_url('Master_Role/DataRole'));
    }
    public function UpdateDataMasterRole()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $id = $this->input->post('id');
        $update['nama_role'] = $this->input->post('nama_role');
        $update['deskripsi'] = $this->input->post('deskripsi');
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");


        $this->MSudi->UpdateData('master_role', 'id', $id, $update);
        redirect(site_url('Master_Role/DataRole'));
    }


    public function DeleteDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_user', 'id', $id, $update);
        redirect(site_url('Master_user/index'));
    }
}