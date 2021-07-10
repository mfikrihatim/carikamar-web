<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_kamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataFasilitasKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['MasterFasilitasKamarDetail'] = $this->MSudi->GetDataWhere('master_fasilitas_kamar_detail', 'status_id', 1)->result();
            $data['TipeKamar'] = $this->MSudi->GetDataWhere('tipe_kamar', 'status_id', 1)->result();
            $tampil = $this->MSudi->GetDataWhere('fasilitas_kamar', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['informasi_umum_detail_id'] = $tampil->informasi_umum_detail_id;
            $data['detail']['fasilitas_kamar_detail_id'] = $tampil->fasilitas_kamar_detail_id;
            $arrayTipeKamar = json_decode($tampil->availability_tipe_kamar_id, TRUE);
			$data['detail']['availability_tipe_kamar_id'] = $arrayTipeKamar;
            $data['content'] = 'VFormUpdateFasilitasKamar';
        } else {
            $join = " informasi_umum_detail.id = fasilitas_kamar.informasi_umum_detail_id";
            $join1 = " master_fasilitas_kamar_detail.id = fasilitas_kamar.fasilitas_kamar_detail_id";
            $join2 = " tipe_kamar.id = fasilitas_kamar.availability_tipe_kamar_id";
            $this->db->select('fasilitas_kamar.id,
            informasi_umum_detail.nama_properti,
            master_fasilitas_kamar_detail.nama as nama_fasilitas_kamar_detail, 
            tipe_kamar.nama_kamar,
            fasilitas_kamar.status_id');
            $this->db->from('fasilitas_kamar');
            $this->db->join('informasi_umum_detail', $join);
            $this->db->join('master_fasilitas_kamar_detail', $join1);
            $this->db->join('tipe_kamar', $join2);
            $this->db->where('fasilitas_kamar.status_id', 1);
            $data['FasilitasKamar'] = $this->db->get()->result();

            $data['content'] = 'VFasilitasKamar';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddFasilitasKamar()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['InformasiUmumDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['MasterFasilitasKamarDetail'] = $this->MSudi->GetDataWhere('master_fasilitas_kamar_detail', 'status_id', 1)->result();
        $data['TipeKamar'] = $this->MSudi->GetDataWhere('tipe_kamar', 'status_id', 1)->result();
        $data['content'] = 'VFormAddFasilitasKamar';
        $this->load->view('welcome_message', $data);
    }
    public function AddDataFasilitasKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['fasilitas_kamar_detail_id'] = $this->input->post('fasilitas_kamar_detail_id');
        $add['availability_tipe_kamar_id'] = json_encode($this->input->post('availability_tipe_kamar_id[]'));
        $add['status_id'] = 1;
        $add['created_by'] = $data['id'];
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;

        $this->MSudi->AddData('fasilitas_kamar', $add);
        redirect(site_url('Fasilitas_kamar/DataFasilitasKamar'));
    }
    public function UpdateDataFasilitasKamar()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');


        $id = $this->input->post('id');
        $update['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $update['fasilitas_kamar_detail_id'] = $this->input->post('fasilitas_kamar_detail_id');
        $update['availability_tipe_kamar_id'] = json_encode($this->input->post('availability_tipe_kamar_id[]'));
        $update['status_id'] = 1;
        $update['updated_by'] = $data['id'];
        $update['updated_date'] = date("Y-m-d H:i:s");
        $this->MSudi->UpdateData('fasilitas_kamar', 'id', $id, $update);
        redirect(site_url('Fasilitas_kamar/DataFasilitasKamar'));
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


        $this->MSudi->UpdateData('fasilitas_kamar', 'id', $id, $update);
        redirect(site_url('Fasilitas_kamar/DataFasilitasKamar'));
    }
}
