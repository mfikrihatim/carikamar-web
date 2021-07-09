<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_fasilitas_kamar_detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function DataMasterFasilitasKamarDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('master_fasilitas_kamar_detail', 'id', $id)->row();
            $data['detail']['id'] = $tampil->id;
            $data['detail']['fasilitas_kamar_header_id'] = $tampil->fasilitas_kamar_header_id;
            $data['detail']['nama'] = $tampil->nama;

            $data['content'] = 'VFormUpdateMasterFasilitasKamarDetail';
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $join = " master_fasilitas_kamar_header.id = master_fasilitas_kamar_detail.fasilitas_kamar_header_id";
			$this->db->select('master_fasilitas_kamar_detail.id, master_fasilitas_kamar_header.nama as nama_fasilitas_header, master_fasilitas_kamar_detail.nama as nama_fasilitas_detail, master_fasilitas_kamar_detail.status_id');
			$this->db->from('master_fasilitas_kamar_detail');
			$this->db->join('master_fasilitas_kamar_header', $join);
			$this->db->where('master_fasilitas_kamar_detail.status_id', 1);
			$data['DataFasilitasKamarDetail'] = $this->db->get()->result();
            $data['content'] = 'VMasterFasilitasKamarDetail';
        }


        $this->load->view('welcome_message', $data);
    }
    public function VFormAddMasterFasilitasKamarDetail()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['foto'] = $this->session->userdata('foto');
        $data['content'] = 'VFormAddMasterFasilitasKamarDetail';
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
        redirect(site_url('Master_fasilitas_kamar_header/DataMasterFasilitasKamarHeader'));
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
        redirect(site_url('Master_fasilitas_kamar_header/DataMasterFasilitasKamarHeader'));
    }


    public function DeleteDataMasterFasilitasKamarDetail()
    {
        $data['id'] = $this->session->userdata('id');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $id = $this->uri->segment('3');

        $update['status_id'] = 0;


        $this->MSudi->UpdateData('master_fasilitas_kamar_detail', 'id', $id, $update);
        redirect(site_url('Master_fasilitas_kamar_detail/DataMasterFasilitasKamarDetail'));
    }
}
