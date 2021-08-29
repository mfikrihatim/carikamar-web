<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property_detail extends CI_Controller
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
		// if(count($data['DataInformationDetail']) == 0){

		// }
		$data['DataPropertiMasterCancel'] = $this->MSudi->GetDataWhere('properti_detail_master_cancel', 'status_id', 1)->result();
		$data['DataPropertiMasterStyle'] = $this->MSudi->GetDataWhere('properti_detail_master_style', 'status_id', 1)->result();
		$data['content'] = 'list-property-detail';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function PropertyLive(){
		$config['base_url'] = 'http://localhost/carikamar-web/client/index.php/Welcome/index/';
		$config['total_rows'] = 10;
		$config['per_page'] = 3;
		// ini adalah styling utk pagination yah
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		
		$start = $this->uri->segment(3);
		$this->pagination->initialize($config);

		
		if ($this->uri->segment(4) == 'view') {
            $id = $this->uri->segment(3);
            $tampil = $this->MSudi->GetDataWhere('informasi_umum_detail', 'fk_id_users', $this->session->userdata('id_user'))->row(3);
            $data['detail']['id'] 			 = $tampil->id;
            $data['detail']['nama_properti'] = $tampil->nama_properti;
            $data['content'] = 'update-general-information';
			$this->load->view('welcome_message', $data);
        } else {
            // $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
            // $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
            $data['DataInformasiDetail'] = $this->MSudi->GetDataMax('informasi_umum_detail', $config['per_page'], $start);
            $data['content'] = 'VHome';
        }
		
		$this->load->view('v_property_live', $data);
	}

	public function editPropertyLive(){
		$this->load->view('v_edit_property_live');
	}

	public function AddPropertyDetail()
	{

		
        $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
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
	public function SavePropertyDetail()
	{
		$informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
		$properti_detail_id = $this->input->post('id');
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
		
		if($properti_detail_id == null || $properti_detail_id == ''){
            $properti_detail_id = $this->MSudi->AddData('properti_detail', $add);
        }else{
           $this->MSudi->UpdateData('properti_detail', 'id', $properti_detail_id, $add);       
        }

		$result = array(
            'informasi_umum_detail_id' => $informasi_umum_detail_id,
            'id' => $properti_detail_id
        );
        echo json_encode($result);
	}
}