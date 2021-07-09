<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_umum_detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataInformasiUmumDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['DataTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('informasi_umum_detail', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['tipe_properti_id'] = $tampil->tipe_properti_id;
            $data['detail']['nama_properti'] = $tampil->nama_properti;
            $data['detail']['nama_badan_hukum'] = $tampil->nama_badan_hukum;
            $data['detail']['lokasi_maps'] = $tampil->lokasi_maps;
            $data['detail']['alamat_jalan'] = $tampil->alamat_jalan;
            $data['detail']['kode_pos'] = $tampil->kode_pos;
            $data['detail']['no_telp'] = $tampil->no_telp;
            $data['detail']['jumlah_kamar'] = $tampil->jumlah_kamar;
            $data['detail']['flag_chanel_manager'] = $tampil->flag_chanel_manager;
            $data['content'] = 'VFormUpdateInformasiUmumDetail';
        } else {
            $join = " master_tipe_properti.id = informasi_umum_detail.tipe_properti_id";
            $this->db->select('informasi_umum_detail.id, master_tipe_properti.nama_tipe as nama_tipe, informasi_umum_detail.nama_properti as nama_properti, informasi_umum_detail.nama_badan_hukum,informasi_umum_detail.lokasi_maps,informasi_umum_detail.alamat_jalan,informasi_umum_detail.kode_pos,informasi_umum_detail.no_telp,informasi_umum_detail.jumlah_kamar,informasi_umum_detail.flag_chanel_manager,informasi_umum_detail.status_id');
            $this->db->from('informasi_umum_detail');
            $this->db->join('master_tipe_properti', $join);
            $this->db->where('informasi_umum_detail.status_id', 1);
            $data['InformasiUmumDetail'] = $this->db->get()->result();

            $data['content'] = 'VInformasiUmumDetail';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddInformasiUmumDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['DataTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
        $data['content'] = 'VFormAddInformasiUmumDetail';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataInformasiUmumDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['tipe_properti_id'] = $this->input->post('tipe_properti_id');
        $add['nama_properti'] = $this->input->post('nama_properti');
        $add['nama_badan_hukum'] = $this->input->post('nama_badan_hukum');
        $add['lokasi_maps'] = $this->input->post('lokasi_maps');
        $add['alamat_jalan'] = $this->input->post('alamat_jalan');
        $add['kode_pos'] = $this->input->post('kode_pos');
        $add['no_telp'] = $this->input->post('no_telp');
        $add['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $add['flag_chanel_manager'] = $this->input->post('flag_chanel_manager');
        $add['status_id'] = 1;


        $this->MSudi->AddData('informasi_umum_detail', $add);
        redirect(site_url('Informasi_umum_detail/DataInformasiUmumDetail'));
    }
    public function UpdateDataInformasiUmumDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['tipe_properti_id'] = $this->input->post('tipe_properti_id');
        $update['nama_properti'] = $this->input->post('nama_properti');
        $update['nama_badan_hukum'] = $this->input->post('nama_badan_hukum');
        $update['lokasi_maps'] = $this->input->post('lokasi_maps');
        $update['alamat_jalan'] = $this->input->post('alamat_jalan');
        $update['kode_pos'] = $this->input->post('kode_pos');
        $update['no_telp'] = $this->input->post('no_telp');
        $update['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $update['flag_chanel_manager'] = $this->input->post('flag_chanel_manager');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('informasi_umum_detail', 'id', $id, $update);
        redirect(site_url('Informasi_umum_detail/DataInformasiUmumDetail'));
    }


    public function DeleteDataInformasiUmumDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('informasi_umum_detail', 'id', $id, $update);
        redirect(site_url('Informasi_umum_detail/DataInformasiUmumDetail'));
    }
}
