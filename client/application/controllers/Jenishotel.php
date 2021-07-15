<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenishotel extends CI_Controller
{
	public function index()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content1'] = 'list-jenis';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
}
