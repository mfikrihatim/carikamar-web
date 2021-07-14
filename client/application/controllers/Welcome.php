<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		// $data['content'] = 'list-general-information';
		$this->load->view('VHome');
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
}