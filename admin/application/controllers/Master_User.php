<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_user', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama'] = $tampil->nama;
            $data['detail']['email'] = $tampil->email;
            $data['detail']['password'] = $tampil->password;
            $data['detail']['foto'] = $tampil->foto;

            $data['content'] = 'VFormUpdateUser';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataUser'] = $this->MSudi->GetDataWhere('master_user', 'status_id', 1)->result();
            $data['content'] = 'VUser';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddUser()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['content'] = 'VFormAddUser';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $add['nama'] = $this->input->post('nama');
        $add['password'] = $this->input->post('password');
        $add['email'] = $this->input->post('email');
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        $config['upload_path'] = '././upload/user';
        $config['allowed_types'] = 'gif|jpg|png|JPG';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            redirect(site_url('Master_user/VFormAddUser'));
        } else {
            $data = array('upload_data' => $this->upload->data());
            $add['foto'] = implode($this->upload->data());
            $filename = site_url('upload/') . 'user/' . $add['foto'];
            $replcate = str_replace("index.php/", "", $filename);
            $replcate = str_replace("\/", "/", $replcate);
            $add['foto'] = $replcate;
        }
        $this->MSudi->AddData('master_user', $add);
        redirect(site_url('Master_user/index'));
    }
    public function UpdateDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['nama'] = $this->input->post('nama');
        $update['password'] = $this->input->post('password');

        $update['email'] = $this->input->post('email');

        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");

        $config['upload_path'] = '././upload/user';
        $config['allowed_types'] = 'gif|jpg|png|JPG';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            redirect(site_url('Master_user/index'));
        } else {
            $data = array('upload_data' => $this->upload->data());
            $update['foto'] = implode($this->upload->data());
            $filename = site_url('upload/') . 'user/' . $update['foto'];
            $replcate = str_replace("index.php/", "", $filename);
            $replcate = str_replace("\/", "/", $replcate);
            $update['foto'] = $replcate;
        }

        $this->MSudi->UpdateData('master_user', 'id', $id, $update);
        redirect(site_url('Master_user/index'));
    }


    public function DeleteDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_user', 'id', $id, $update);
        redirect(site_url('Master_user/index'));
    }
}
