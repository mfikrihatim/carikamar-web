<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_umum_kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataInformasiUmumKontak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('informasi_umum_kontak', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['jenis_kontak'] = $tampil->jenis_kontak;
            $data['detail']['nama_lengkap'] = $tampil->nama_lengkap;
            $data['detail']['email'] = $tampil->email;
            $data['detail']['no_hp'] = $tampil->no_hp;
            $data['detail']['no_telp_kantor'] = $tampil->no_telp_kantor;
            $data['detail']['extension'] = $tampil->extension;
            $data['detail']['jabatan'] = $tampil->jabatan;
            $data['detail']['flag_fullday'] = $tampil->flag_fullday;
            $data['content'] = 'VFormUpdateInformasiUmumKontak';
        } else {
            $join = " informasi_umum_detail.id = informasi_umum_kontak.informasi_umum_detail_id";
            $this->db->select('informasi_umum_kontak.id, 
            informasi_umum_detail.nama_properti, 
            informasi_umum_kontak.jenis_kontak,
             informasi_umum_kontak.nama_lengkap,
             informasi_umum_kontak.email,
             informasi_umum_kontak.no_hp,
             informasi_umum_kontak.no_telp_kantor,
             informasi_umum_kontak.extension,
             informasi_umum_kontak.jabatan,
             informasi_umum_kontak.flag_fullday,
             informasi_umum_kontak.status_id');
            $this->db->from('informasi_umum_kontak');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->where('informasi_umum_kontak.status_id', 1);
            $data['InformasiUmumKontak'] = $this->db->get()->result();

            $data['content'] = 'VInformasiUmumKontak';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddInformasiUmumKontak()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['content'] = 'VFormAddInformasiUmumKontak';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataInformasiUmumKontak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['jenis_kontak'] = $this->input->post('jenis_kontak');
        $add['nama_lengkap'] = $this->input->post('nama_lengkap');
        $add['email'] = $this->input->post('email');
        $add['no_hp'] = $this->input->post('no_hp');
        $add['no_telp_kantor'] = $this->input->post('no_telp_kantor');
        $add['extension'] = $this->input->post('extension');
        $add['jabatan'] = $this->input->post('jabatan');
        $add['flag_fullday'] = $this->input->post('flag_fullday');
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('informasi_umum_kontak', $add);
        redirect(site_url('Informasi_umum_kontak/DataInformasiUmumKontak'));
    }
    public function UpdateDataInformasiUmumKontak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['jenis_kontak'] = $this->input->post('jenis_kontak');
        $update['nama_lengkap'] = $this->input->post('nama_lengkap');
        $update['email'] = $this->input->post('email');
        $update['no_hp'] = $this->input->post('no_hp');
        $update['no_telp_kantor'] = $this->input->post('no_telp_kantor');
        $update['extension'] = $this->input->post('extension');
        $update['jabatan'] = $this->input->post('jabatan');
        $update['flag_fullday'] = $this->input->post('flag_fullday');
        $update['status_id'] = 1;
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('informasi_umum_kontak', 'id', $id, $update);
        redirect(site_url('Informasi_umum_kontak/DataInformasiUmumKontak'));
    }


    public function DeleteDataInformasiUmumKontak()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('informasi_umum_kontak', 'id', $id, $update);
        redirect(site_url('Informasi_umum_kontak/DataInformasiUmumKontak'));
    }
}
