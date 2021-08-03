<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property_detail extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('MSudi');
	}
	public function index($informasi_umum_detail_id)
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['DataInformationDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
		if(count($data['DataInformationDetail']) == 0){
		
		}
		$data['DataPropertiMasterCancel'] = $this->MSudi->GetDataWhere('properti_detail_master_cancel', 'status_id', 1)->result();
		$data['DataPropertiMasterStyle'] = $this->MSudi->GetDataWhere('properti_detail_master_style', 'status_id', 1)->result();
		$data['content'] = 'list-property-detail';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function AddPropertyDetail()
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