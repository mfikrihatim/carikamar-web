<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
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
		$data['DataInformationDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
		$data['DataMasterTipeKamar'] = $this->MSudi->GetDataWhere('master_tipe_kamar', 'status_id', 1)->result();
		$data['DataMasterTipeKasur'] = $this->MSudi->GetDataWhere('master_tipe_kasur', 'status_id', 1)->result();

		$data['content'] = 'list-rooms';
		$this->load->view('welcome_message', $data);

		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function AddTipeKamar()
	{

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
		$add['created_by'] = 1;
		$add['created_date'] = date("Y-m-d H:i:s");
		$add['updated_by'] = null;
		$add['updated_date'] = null;
		$add['deleted_by'] = null;
		$add['deleted_date'] = null;
		$add['status_id'] = 1;


		$this->MSudi->AddData('tipe_kamar', $add);
		redirect(site_url('Room/index'));
	}
}
