<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataInformasiPembayaran()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['MasterBank'] = $this->MSudi->GetDataWhere('master_bank', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('informasi_pembayaran', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['pilihan_metode'] = $tampil->pilihan_metode;
            $data['detail']['master_bank_id'] = $tampil->master_bank_id;
            $data['detail']['nomor_akun'] = $tampil->nomor_akun;
            $data['detail']['pemilik_akun'] = $tampil->pemilik_akun;
            $data['detail']['rencana_pembayaran'] = $tampil->rencana_pembayaran;
            $data['detail']['status_id'] = $tampil->status_id;
            $data['content'] = 'VFormUpdateInformasiPembayaran';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " informasi_umum_detail.id = informasi_pembayaran.informasi_umum_detail_id";
            $join1 = " master_bank.id = informasi_pembayaran.master_bank_id";
            $this->db->select('informasi_pembayaran.id,informasi_pembayaran.informasi_umum_detail_id,
             informasi_umum_detail.nama_properti,
             informasi_pembayaran.pilihan_metode, 
             informasi_pembayaran.master_bank_id,
             master_bank.nama_bank,
             informasi_pembayaran.nomor_akun,
             informasi_pembayaran.pemilik_akun,
             informasi_pembayaran.rencana_pembayaran,
             informasi_pembayaran.status_id');
            $this->db->from('informasi_pembayaran');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('master_bank', $join1);
            $this->db->where('informasi_pembayaran.status_id', 1);
            $data['InformasiPembayaran'] = $this->db->get()->result();
            $data['content'] = 'VInformasiPembayaran';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddInformasiPembayaran()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['MasterBank'] = $this->MSudi->GetDataWhere('master_bank', 'status_id', 1)->result();
        $data['content'] = 'VFormAddInformasiPembayaran';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataInformasiPembayaran()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['pilihan_metode'] = $this->input->post('pilihan_metode');
        $add['master_bank_id'] = $this->input->post('master_bank_id');
        $add['nomor_akun'] = $this->input->post('nomor_akun');
        $add['pemilik_akun'] = $this->input->post('pemilik_akun');
        $add['rencana_pembayaran'] = $this->input->post('rencana_pembayaran');
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('informasi_pembayaran', $add);
        redirect(site_url('Informasi_pembayaran/DataInformasiPembayaran'));
    }
    public function UpdateDataInformasiPembayaran()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['pilihan_metode'] = $this->input->post('pilihan_metode');
        $update['master_bank_id'] = $this->input->post('master_bank_id');
        $update['nomor_akun'] = $this->input->post('nomor_akun');
        $update['pemilik_akun'] = $this->input->post('pemilik_akun');
        $update['rencana_pembayaran'] = $this->input->post('rencana_pembayaran');
        $update['status_id'] = 1;
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('informasi_pembayaran', 'id', $id, $update);
        redirect(site_url('Informasi_pembayaran/DataInformasiPembayaran'));
    }


    public function DeleteDataInformasiPembayaran()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");

        $this->MSudi->UpdateData('informasi_pembayaran', 'id', $id, $update);
        redirect(site_url('Informasi_pembayaran/DataInformasiPembayaran'));
    }
}
