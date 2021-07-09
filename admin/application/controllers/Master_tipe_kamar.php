<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_tipe_kamar extends CI_Controller
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
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_tipe_kamar', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_tipe_kamar'] = $tampil->nama_tipe_kamar;
            $data['detail']['deskripsi'] = $tampil->deskripsi;

            $data['content'] = 'VFormUpdateMasterTipeKamar';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataTipeKamar'] = $this->MSudi->GetDataWhere('master_tipe_kamar', 'status_id', 1)->result();
            $data['content'] = 'VMasterTipeKamar';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterTipeKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterTipeKamar';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataMasterTipeKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama_tipe_kamar'] = $this->input->post('nama_tipe_kamar');
        $add['deskripsi'] = $this->input->post('deskripsi');
        $add['status_id'] = 1;


        $this->MSudi->AddData('master_tipe_kamar', $add);
        redirect(site_url('Master_tipe_kamar/index'));
    }
    public function UpdateDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['nama_tipe_kamar'] = $this->input->post('nama_tipe_kamar');
        $update['deskripsi'] = $this->input->post('deskripsi');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('master_tipe_kamar', 'id', $id, $update);
        redirect(site_url('Master_tipe_kamar/index'));
    }


    public function DeleteDataUser()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_tipe_kamar', 'id', $id, $update);
        redirect(site_url('Master_tipe_kamar/index'));
    }
}
