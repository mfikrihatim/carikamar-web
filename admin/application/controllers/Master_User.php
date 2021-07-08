<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$this->load->model('MSudi');
		form_open('Welcome/VDashboard');
		form_open('Welcome/LoginUser');
		

		// $this->load->library('encrypt');
	}
	public function index()
	{
		
        $token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/carikamar-web/index.php/api/Master_User/Master_User";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);

		$data['datas'] = $content['data'];
		
		$data['content'] = 'VUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}



	public function VFormAddUser()
	{
		// if ($this->session->userdata('Login')) {
		// $data['nama'] = $this->session->userdata('nama');
		// $data['password'] = $this->session->userdata('password');
		$data['content'] = 'VFormAddUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddUser()
	{

		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_POST['userlogin'])) {
			if ($_POST['userlogin'] != null && $_POST['userlogin'] != '') {
				$url = "http://localhost/carikamar-web/index.php/api/Master_User/Master_User";

				$context =
					array(
						'nama'	=> $this->input->post('nama'),
						'email' => $this->input->post('email'),
						'password'		=> $this->input->post('password'),
						'foto'		=> $this->input->post('foto'),
						'status_id'		=> $this->input->post('status_id'),
						// 'userlogin'		=> $_POST['userlogin'],
					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);


				// $data['content'] = 'VLaporanKerusakan';
				// $this->load->view('welcome_message', $data);

				if ($content['status'] == 200) {
					$this->load->helper('url');

					/*Redirect the user to some site*/
					redirect(site_url('Welcome/DataUser'));
				} else {
					$this->load->helper('url');
					/*Redirect the user to some site*/
					// redirect(site_url('Welcome/VFormAddUser'));
					$message = $content['message'];
					$redirect = site_url("Welcome/VFormAddUser");
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

	public function VFormUpdateUser()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		$url = "http://localhost/smart-city-ci/index.php/api/User/User?id=" . $id;

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		
		$data['datas'] = $content['data'][0];
		$data['content'] = 'VFormUpdateUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function EditUser()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_REQUEST['userlogin'])) {
			if ($_REQUEST['userlogin'] != null && $_REQUEST['userlogin'] != '') {
				$url = "http://localhost/smart-city-ci/index.php/api/User/User";

				$context =
					array(
						'id' => $_REQUEST['id'],
						'username'	=> $_REQUEST('username'),
						'password'		=> $_REQUEST('password'),
						'fullname' => $_REQUEST('fullname'),
						'id_level'		=> $_REQUEST('id_level'),
						'nohp'		=> $_REQUEST('nohp'),
						'email'		=> $_REQUEST('email'),
						'status'		=> $_REQUEST('status'),
						'prov_id'		=> $_REQUEST('prov_id'),
						'city_id'		=> $_REQUEST('city_id'),
						'dis_id'		=> $_REQUEST('dis_id'),
						'subdis_id'		=> $_REQUEST('subdis_id'),
						'postal_id'		=> $_REQUEST('postal_id'),
						'foto'		=> $_REQUEST('foto'),
						'alamat_lengkap'		=> $_REQUEST('alamat_lengkap'),
						'nik'		=> $_REQUEST('nik'),
						'tgl_lahir'		=> $_REQUEST('tgl_lahir'),
						'no_rumah'		=> $_REQUEST('no_rumah'),
						'blok'		=> $_REQUEST('blok'),
						'rw'		=> $_REQUEST('rw'),
						'jnskel'		=> $_REQUEST('jnskel'),
						'id_city_tempat_lahir'		=> $_REQUEST('id_city_tempat_lahir'),
						'id_pendidikan'		=> $_REQUEST('id_pendidikan'),
						'id_status_pernikahan'		=> $_REQUEST('id_status_pernikahan'),
						'id_status_tinggal'		=> $_REQUEST('id_status_tinggal'),
						'id_agama'		=> $_REQUEST('id_agama'),
						'id_jenis_pekerjaan'		=> $_REQUEST('id_jenis_pekerjaan'),
						'nama_jenis_pekerjaan'		=> $_REQUEST('nama_jenis_pekerjaan'),
						'userlogin'		=> $_REQUEST['userlogin'],
					);

				$content = $this->MSudi->CallAPI("PUT", $url, $context, $token);

				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataUser'));
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


	public function DeleteUser()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		if (isset($_POST['username'])) {
			if ($_POST['username'] != null && $_POST['username'] != '') {
				$user = $_POST['username'];
				$url = "http://localhost/smart-city-ci/index.php/api/User/User?id=" . $id . "&userlogin=" . $user;


				$content = $this->MSudi->CallAPI("DELETE", $url, null, $token);
				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataUser'));
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