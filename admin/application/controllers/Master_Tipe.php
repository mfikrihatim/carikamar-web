<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Tipe extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$this->load->model('MSudi');
	}
	public function index()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/carikamar-web/index.php/api/Master_Tipe_Properti/Master_Tipe_Properti";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'];
		$data['content'] = 'VMasterTipe';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormAddMasterTipe()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['content'] = 'VFormAddMasterTipe';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddMasterTipe()
	{

		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_POST['userlogin'])) {
			if ($_POST['userlogin'] != null && $_POST['userlogin'] != '') {
				$url = "http://localhost/carikamar-web/index.php/api/Master_Tipe_Properti/Master_Tipe_Properti";

				$context =
					array(
						'nama_tipe'	=> $this->input->post('nama_tipe'),
						'deskripsi'		=> $this->input->post('deskripsi'),
					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);

				if ($content['status'] == 200) {
					$this->load->helper('url');

					/*Redirect the user to some site*/
					redirect(site_url('Welcome/DataMasterTipe'));
				} else {
					$this->load->helper('url');
					/*Redirect the user to some site*/
					// redirect(site_url('Welcome/VFormAddUser'));
					$message = $content['message'];
					$redirect = site_url("Welcome/VFormAddMasterTipe");
					echo "<script>
							alert('$message');
							window.location.href='$redirect';
						  </script>";

					// echo "<script type='text/javascript'>alert('$message');</script>";
				}
			} else {
				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome'));
			}
		} else {
			$this->load->helper('url');

			/*Redirect the user to some site*/
			redirect(site_url('Welcome'));
		}
	}

}