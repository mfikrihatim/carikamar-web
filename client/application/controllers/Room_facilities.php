<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_facilities extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MSudi');
    }
    public function index()
    {
        // if ($this->session->userdata('Login')) {
        // 	$data['nama'] = $this->session->userdata('nama');
        // 	$data['level'] = $this->session->userdata('level');
        $data['CurrentUrl']             = null;
        $data['DataMasterProperti']     = null;
        $data['DataMasterKontak']       = null;
        $data['DataInformationDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
        $data['DataFasilitasKamarHeader'] = $this->MSudi->GetDataWhere('master_fasilitas_kamar_header', 'status_id', 1)->result();

        $join = " master_fasilitas_kamar_header.id = master_fasilitas_kamar_detail.fasilitas_kamar_header_id";
        $this->db->select('master_fasilitas_kamar_detail.id, 
		master_fasilitas_kamar_header.nama as nama_header,
		 master_fasilitas_kamar_detail.nama,
		  master_fasilitas_kamar_detail.status_id');
        $this->db->from('master_fasilitas_kamar_detail');
        $this->db->join('master_fasilitas_kamar_header', $join);
        $this->db->where('master_fasilitas_kamar_detail.status_id', 1);
        $data['FasilitasKamar'] = $this->db->get()->result();
        $data['content'] = 'list-room-fasilitas';
        $this->load->view('welcome_message', $data);
        // } else {
        // 	redirect(site_url('Login'));
        // }
    }
    public function AddFasilitasKamar()
    {

        $add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
        $add['fasilitas_kamar_detail_id'] = $this->input->post('fasilitas_kamar_detail_id');

        $availability_tipe_kamar_id = $this->input->post("availability_tipe_kamar_id");
        if ($availability_tipe_kamar_id == null)
            $availability_tipe_kamar_id =  [];
        $add['availability_tipe_kamar_id'] = json_encode($availability_tipe_kamar_id);
        $add['created_by'] = 1;
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;


        $this->MSudi->AddData('fasilitas_kamar', $add);
        redirect(site_url('Room_facilities/index'));
    }
}
