<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller

{
	function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }
	public function index(){
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
		
		$this->load->view('VHome', $data);
		
	}

	public function property(){

	}

	public function VAkomodasi()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		// $data['content'] = 'list-general-information';
		$this->load->view('VAkomodasi');
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function Logout()
	{
		$data['email'] = $this->session->userdata('email');
		$data['foto'] = $this->session->userdata('foto');
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}