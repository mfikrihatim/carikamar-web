<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneralInformation extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$this->load->model('MSudi');
	}
	public function index()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'list-general-information';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddGeneralInformation()
	{

		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		// if (isset($_POST['userlogin'])) {
		// 	if ($_POST['userlogin'] != null && $_POST['userlogin'] != '') {
		$url = "http://localhost/carikamar-web/index.php/api/Informasi_Umum_Detail/Informasi_Umum_Detail";

		$context =
			array(
				'tipe_properti_id'	=> 1,
				'nama_properti'	=> $this->input->post('nama_properti'),
				'nama_badan_hukum'	=> $this->input->post('nama_badan_hukum'),
				'lokasi_maps'	=> 123,
				'alamat_jalan'	=> 234,
				'kode_pos'	=> 456,
				'no_telp'	=> 45674,
				'jumlah_kamar'	=> 2,
				'flag_chanel_manager'	=> 2,
			);

		$content = $this->MSudi->CallAPI("POST", $url, $context, $token);


		// $data['content'] = 'VLaporanKerusakan';
		// $this->load->view('welcome_message', $data);

		if ($content['status'] == 200) {
			$this->load->helper('url');

			/*Redirect the user to some site*/
			redirect(site_url('generalinformation'));
		} else {
			$this->load->helper('url');
			/*Redirect the user to some site*/
			// redirect(site_url('Welcome/VFormAddUser'));
			$message = $content['message'];
			$redirect = site_url("generalinformation");
			echo "<script>
							alert('$message');
							window.location.href='$redirect';
						  </script>";

			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
		// 	} else {
		// 		$this->load->helper('url');

		// 		/*Redirect the user to some site*/
		// 		redirect(site_url('Welcome'));
		// 	}
		// } else {
		// 	$this->load->helper('url');

		// 	/*Redirect the user to some site*/
		// 	redirect(site_url('Welcome'));
		// }
	}
}
