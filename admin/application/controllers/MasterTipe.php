<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$this->load->model('MSudi');
	}
	public function index()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		// $data['content'] = 'VFormAddUser';
		$this->load->view('VLogin');
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function DataMasterTipe()
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


	public function VFormAddInfo()
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

	public function VFormUpdateInfo()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		$url = "http://localhost/smart-city-ci/index.php/api/Info/Info?id=" . $id;

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'][0];
		$data['content'] = 'VFormUpdateInfo';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function EditInfo()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_REQUEST['userlogin'])) {
			if ($_REQUEST['userlogin'] != null && $_REQUEST['userlogin'] != '') {
				$url = "http://localhost/smart-city-ci/index.php/api/Info/Info";

				$context =
					array(
						'id' => $_REQUEST['id'],
						'nama_info'	=> $_REQUEST('nama_info'),
						'deskripsi_info'		=> $_REQUEST('deskripsi_info'),
						'foto' => $_REQUEST('foto'),
						'alamat_lengkap'		=> $_REQUEST('alamat_lengkap'),
						'alamat_lat'		=> $_REQUEST('alamat_lat'),
						'alamat_longitude'		=> $_REQUEST('alamat_longitude'),
						'userlogin'		=> $_REQUEST['userlogin'],
					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);

				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataInfo'));
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


	public function DeleteInfo()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		if (isset($_POST['username'])) {
			if ($_POST['username'] != null && $_POST['username'] != '') {
				$user = $_POST['username'];
				$url = "http://localhost/smart-city-ci/index.php/api/Info/Info?id=" . $id . "&userlogin=" . $user;


				$content = $this->MSudi->CallAPI("DELETE", $url, null, $token);
				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataInfo'));
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