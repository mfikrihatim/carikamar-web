<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_tipe extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataFotoTipe()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('foto_tipe', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama_tipe_foto'] = $tampil->nama_tipe_foto;
            $data['detail']['flag_foto'] = $tampil->flag_foto;
            $data['content'] = 'VFormUpdateFotoTipe';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['FotoTipe'] = $this->MSudi->GetDataWhere('foto_tipe', 'status_id', 1)->result();
            $data['content'] = 'VFotoTipe';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddFotoTipe()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddFotoTipe';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataFotoTipe()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['nama_tipe_foto'] = $this->input->post('nama_tipe_foto');
        $add['flag_foto'] = $this->input->post('flag_foto');
        $add['status_id'] = 1;


        $this->MSudi->AddData('foto_tipe', $add);
        redirect(site_url('Foto_tipe/DataFotoTipe'));
    }
    public function UpdateDataFotoTipe()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama_tipe_foto'] = $this->input->post('nama_tipe_foto');
        $update['flag_foto'] = $this->input->post('flag_foto');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('foto_tipe', 'id', $id, $update);
        redirect(site_url('Foto_tipe/DataFotoTipe'));
    }


    public function DeleteDataFotoTipe()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('foto_tipe', 'id', $id, $update);
        redirect(site_url('Foto_tipe/DataFotoTipe'));
    }
}