<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property_facilities extends CI_Controller
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
		$data['DataMasterFasilitasPropertiHeader'] = $this->MSudi->GetDataWhere('master_fasilitas_properti_header', 'status_id', 1)->result();
		$join = " master_fasilitas_properti_header.id = master_fasilitas_properti_detail.fasilitas_properti_header_id";
		$this->db->select('master_fasilitas_properti_detail.id, 
		master_fasilitas_properti_header.nama as nama_header,
		 master_fasilitas_properti_detail.nama,
		  master_fasilitas_properti_detail.flag_free,
		  master_fasilitas_properti_detail.flag_fullday,
		  master_fasilitas_properti_detail.status_id');
		$this->db->from('master_fasilitas_properti_detail');
		$this->db->join('master_fasilitas_properti_header', $join);
		$this->db->where('master_fasilitas_properti_detail.status_id', 1);
		$data['FasilitasProperti'] = $this->db->get()->result();
		$data['content'] = 'list-property-facilities';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function AddPropertyFasilitas()
	{

		$add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
		$add['mata_uang'] = $this->input->post('mata_uang');
		$add['flag_kawasan'] = $this->input->post('flag_kawasan');
		$add['waktu_checkin'] = $this->input->post('waktu_checkin');
		$add['waktu_checkout'] = $this->input->post('waktu_checkout');
		$add['jarak_ke_kota'] = $this->input->post('jarak_ke_kota');
		$add['jumlah_lantai'] = $this->input->post('jumlah_lantai');
		$add['biaya_sarapan_tambahan'] = $this->input->post('biaya_sarapan_tambahan');
		$add['master_cancel_id'] = $this->input->post('master_cancel_id');

		$master_style_id = $this->input->post("master_style_id");
		if ($master_style_id == null)
			$master_style_id =  [];
		$add['master_style_id'] = json_encode($master_style_id);
		$add['created_by'] = 1;
		$add['created_date'] = date("Y-m-d H:i:s");
		$add['updated_by'] = null;
		$add['updated_date'] = null;
		$add['deleted_by'] = null;
		$add['deleted_date'] = null;
		$add['status_id'] = 1;


		$this->MSudi->AddData('properti_detail', $add);
		redirect(site_url('Property_detail/index'));
	}
}
