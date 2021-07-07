<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneralInformation extends CI_Controller
{
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
				$url = "http://localhost/carikamar-web/index.php/api/Properti_Detail_Master_Cancel/Properti_Detail_Master_Cancel";

				$context =
					array(
						'nama'	=> $this->input->post('nama'),
						// 'deskripsi'		=> $this->input->post('deskripsi'),
						// 'foto' => $this->input->post('foto'),
						// 'alamat_lengkap'		=> $this->input->post('alamat_lengkap'),
						// 'alamat_lat'		=> $this->input->post('alamat_lat'),
						// 'alamat_longitude'		=> $this->input->post('alamat_longitude'),
						// 'userlogin'		=> $_POST['userlogin'],
					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);


				// $data['content'] = 'VLaporanKerusakan';
				// $this->load->view('welcome_message', $data);

				if ($content['status'] == 200) {
					$this->load->helper('url');

					/*Redirect the user to some site*/
					redirect(site_url('Welcome/DataMasterCancel'));
				} else {
					$this->load->helper('url');
					/*Redirect the user to some site*/
					// redirect(site_url('Welcome/VFormAddUser'));
					$message = $content['message'];
					$redirect = site_url("Welcome/VFormAddMasterCancel");
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