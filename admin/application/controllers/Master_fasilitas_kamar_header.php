<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_fasilitas_kamar_header extends CI_Controller
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
            $tampil = $this->MSudi->GetDataWhere('master_fasilitas_kamar_header', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['nama'] = $tampil->nama;
            $data['detail']['urutan'] = $tampil->urutan;

            $data['content'] = 'VFormUpdateMasterFasilitasKamarHeader';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataFasilitasKamarHeader'] = $this->MSudi->GetDataWhere('master_fasilitas_kamar_header', 'status_id', 1)->result();
            $data['content'] = 'VMasterFasilitasKamarHeader';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterFasilitasKamarHeader()
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


        $this->MSudi->AddData('master_fasilitas_kamar_header', $add);
        redirect(site_url('Master_fasilitas_kamar_header/index'));
    }
    public function UpdateDataMasterFasilitasKamarHeader()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['nama'] = $this->input->post('nama');
        $update['urutan'] = $this->input->post('urutan');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('master_fasilitas_kamar_header', 'id', $id, $update);
        redirect(site_url('Master_fasilitas_kamar_header/index'));
    }


    public function DeleteDataMasterFasilitasKamarHeader()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_fasilitas_kamar_header', 'id', $id, $update);
        redirect(site_url('Master_fasilitas_kamar_header/index'));
    }
}
