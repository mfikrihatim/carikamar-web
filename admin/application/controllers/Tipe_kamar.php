<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipe_kamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataTipeKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['MasterTipeKamar'] = $this->MSudi->GetDataWhere('master_tipe_kamar', 'status_id', 1)->result();
            $data['MasterTipeKasur'] = $this->MSudi->GetDataWhere('master_tipe_kasur', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('tipe_kamar', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['nama_kamar'] = $tampil->nama_kamar;
            $data['detail']['master_tipe_kasur_id'] = $tampil->master_tipe_kasur_id;
            $data['detail']['master_tipe_kamar_id'] = $tampil->master_tipe_kamar_id;
            $data['detail']['maksimum_kapasitas'] = $tampil->maksimum_kapasitas;
            $data['detail']['maksimum_extra_bed'] = $tampil->maksimum_extra_bed;
            $data['detail']['harga_extra_bed'] = $tampil->harga_extra_bed;
            $data['detail']['ukuran_kamar_lebar'] = $tampil->ukuran_kamar_lebar;
            $data['detail']['ukuran_kamar_panjang'] = $tampil->ukuran_kamar_panjang;
            $data['detail']['harga_kamar'] = $tampil->harga_kamar;
            $data['detail']['flag_included_breakfast'] = $tampil->flag_included_breakfast;
            $data['detail']['jumlah_kamar'] = $tampil->jumlah_kamar;
            $data['content'] = 'VFormUpdateTipeKamar';
        } else {
            $join = " informasi_umum_detail.id = tipe_kamar.informasi_umum_detail_id";
            $join1 = " master_tipe_kamar.id = tipe_kamar.master_tipe_kamar_id";
            $join2 = " master_tipe_kasur.id = tipe_kamar.master_tipe_kasur_id";
            $this->db->select('tipe_kamar.id, informasi_umum_detail.nama_properti,
            tipe_kamar.nama_kamar, 
             master_tipe_kamar.nama_tipe_kamar,
             master_tipe_kasur.nama_tipe_kasur,
             tipe_kamar.maksimum_kapasitas,
             tipe_kamar.maksimum_extra_bed,
             tipe_kamar.harga_extra_bed,
             tipe_kamar.ukuran_kamar_lebar,
             tipe_kamar.ukuran_kamar_panjang,
             tipe_kamar.harga_kamar,
             tipe_kamar.flag_included_breakfast,
             tipe_kamar.jumlah_kamar,
             tipe_kamar.status_id');
            $this->db->from('tipe_kamar');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('master_tipe_kamar', $join1);
            $this->db->join('master_tipe_kasur', $join2);
            $this->db->where('tipe_kamar.status_id', 1);
            $data['TipeKamar'] = $this->db->get()->result();

            $data['content'] = 'VTipeKamar';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddTipeKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['MasterTipeKamar'] = $this->MSudi->GetDataWhere('master_tipe_kamar', 'status_id', 1)->result();
        $data['MasterTipeKasur'] = $this->MSudi->GetDataWhere('master_tipe_kasur', 'status_id', 1)->result();
        $data['content'] = 'VFormAddTipeKamar';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataTipeKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['nama_kamar'] = $this->input->post('nama_kamar');
        $add['master_tipe_kamar_id'] = $this->input->post('master_tipe_kamar_id');
        $add['master_tipe_kasur_id'] = $this->input->post('master_tipe_kasur_id');
        $add['maksimum_kapasitas'] = $this->input->post('maksimum_kapasitas');
        $add['maksimum_extra_bed'] = $this->input->post('maksimum_extra_bed');
        $add['harga_extra_bed'] = $this->input->post('harga_extra_bed');
        $add['ukuran_kamar_lebar'] = $this->input->post('ukuran_kamar_lebar');
        $add['ukuran_kamar_panjang'] = $this->input->post('ukuran_kamar_panjang');
        $add['harga_kamar'] = $this->input->post('harga_kamar');
        $add['flag_included_breakfast'] = $this->input->post('flag_included_breakfast');
        $add['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('tipe_kamar', $add);
        redirect(site_url('Tipe_kamar/DataTipeKamar'));
    }
    public function UpdateDataTipeKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['nama_kamar'] = $this->input->post('nama_kamar');
        $update['master_tipe_kamar_id'] = $this->input->post('master_tipe_kamar_id');
        $update['master_tipe_kasur_id'] = $this->input->post('master_tipe_kasur_id');
        $update['maksimum_kapasitas'] = $this->input->post('maksimum_kapasitas');
        $update['maksimum_extra_bed'] = $this->input->post('maksimum_extra_bed');
        $update['harga_extra_bed'] = $this->input->post('harga_extra_bed');
        $update['ukuran_kamar_lebar'] = $this->input->post('ukuran_kamar_lebar');
        $update['ukuran_kamar_panjang'] = $this->input->post('ukuran_kamar_panjang');
        $update['harga_kamar'] = $this->input->post('harga_kamar');
        $update['flag_included_breakfast'] = $this->input->post('flag_included_breakfast');
        $update['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $update['status_id'] = 1;
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('tipe_kamar', 'id', $id, $update);
        redirect(site_url('Tipe_kamar/DataTipeKamar'));
    }


    public function DeleteDataTipeKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');
        $update['deleted_by'] = $data['id'];
        $update['deleted_date'] = date("Y-m-d H:i:s");
        $update['status_id'] = 0;


        $this->MSudi->UpdateData('tipe_kamar', 'id', $id, $update);
        redirect(site_url('Tipe_kamar/DataTipeKamar'));
    }
}
