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

	public function VDashboard()
	{
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$login = $this->LoginUser($nama, $password);
		if ($login['status'] == 200) {
			$data['content'] = 'VDashboard';
			$countService = $this->GetCountService();
			$countPanicButton = $this->GetCountPanicButton();
			$datas = array(
				'count_service' => $countService,
				'count_panic_button' => $countPanicButton,
			);
			$data['datas'] = $datas;
			$data['userlogin'] = $login['data'];
			$this->load->view('welcome_message', $data);
		} else {
			$this->load->view('VLogin');
		}
	}

	public function DataDashboard()
	{
		$data['content'] = 'VDashboard';
		$countService = $this->GetCountService();
		$countPanicButton = $this->GetCountPanicButton();

		$datas = array(
			'count_service' => $countService,
			'count_panic_button' => $countPanicButton,
		);
		$data['datas'] = $datas;
		$this->load->view('welcome_message', $data);
	}

	public function GetCountService()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Service/Service?count";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);

		return $content['data'];
	}

	public function GetCountPanicButton()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Panic_Button/Panic_Button?count";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);

		return $content['data'];
	}

	public function LoginUser($nama, $password)
	{
		$url = "http://localhost/carikamar-web/index.php/api/Auth/Auth";

		$context =
			array(
				'nama'	=> $nama,
				'password'		=> $password,
				'type' => 1
			);

		$content = $this->MSudi->CallAPI("POST", $url, $context, '');

		return $content;
	}

	public function DataUser()
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



	public function GetPekerjaan()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/carikamar-api/index.php/api/Pekerjaan/Pekerjaan";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function GetProvinsi()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Province/Province";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function GetKota()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/City/City";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function GetKecamatan()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Kecamatan/Kecamatan";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}
	public function GetKelurahan()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Kelurahan/Kelurahan";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}
	public function GetKodePos()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/KodePos/KodePos";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function GetCountries()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Countries/Countries";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function VFormAddUser()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['provinsi'] = $this->GetProvinsi();
		$data['pekerjaan'] = $this->GetPekerjaan();
		$data['kota'] = $this->GetKota();
		$data['kecamatan'] = $this->GetKecamatan();
		$data['kelurahan'] = $this->GetKelurahan();
		$data['kodepos'] = $this->GetKodePos();

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
				$url = "http://localhost/smart-city-ci/index.php/api/User/User";

				$context =
					array(
						'username'	=> $this->input->post('username'),
						'password'		=> $this->input->post('password'),
						'fullname' => $this->input->post('fullname'),
						'id_level'		=> $this->input->post('id_level'),
						'nohp'		=> $this->input->post('nohp'),
						'email'		=> $this->input->post('email'),
						'status'		=> $this->input->post('status'),
						'prov_id'		=> $this->input->post('prov_id'),
						'city_id'		=> $this->input->post('city_id'),
						'dis_id'		=> $this->input->post('dis_id'),
						'subdis_id'		=> $this->input->post('subdis_id'),
						'postal_id'		=> $this->input->post('postal_id'),
						'foto'		=> $this->input->post('foto'),
						'alamat_lengkap'		=> $this->input->post('alamat_lengkap'),
						'nik'		=> $this->input->post('nik'),
						'tgl_lahir'		=> $this->input->post('tgl_lahir'),
						'no_rumah'		=> $this->input->post('no_rumah'),
						'blok'		=> $this->input->post('blok'),
						'rw'		=> $this->input->post('rw'),
						'jnskel'		=> $this->input->post('jnskel'),
						'id_city_tempat_lahir'		=> $this->input->post('id_city_tempat_lahir'),
						'id_pendidikan'		=> $this->input->post('id_pendidikan'),
						'id_status_pernikahan'		=> $this->input->post('id_status_pernikahan'),
						'id_status_tinggal'		=> $this->input->post('id_status_tinggal'),
						'id_agama'		=> $this->input->post('id_agama'),
						'id_jenis_pekerjaan'		=> $this->input->post('id_jenis_pekerjaan'),
						'nama_jenis_pekerjaan'		=> $this->input->post('nama_jenis_pekerjaan'),
						'userlogin'		=> $_POST['userlogin'],
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
		$data['provinsi'] = $this->GetProvinsi();
		$data['pekerjaan'] = $this->GetPekerjaan();
		$data['kota'] = $this->GetKota();
		$data['kecamatan'] = $this->GetKecamatan();
		$data['kelurahan'] = $this->GetKelurahan();
		$data['kodepos'] = $this->GetKodePos();
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


	public function DataPengurusRt()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/pengurus_rt/pengurus_rt";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'];
		$data['content'] = 'VPengurusrt';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function GetJabatan()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Jabatan_RT/Jabatan_RT";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function GetPeriode()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/periode_rt/periode_rt";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		return $content['data'];
	}

	public function DataMasterStyle()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/carikamar-web/index.php/api/Properti_Detail_Master_Style/Properti_Detail_Master_Style";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'];
		$data['content'] = 'VMasterStyle';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	
	public function DataMasterCancel()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/carikamar-web/index.php/api/Properti_Detail_Master_Cancel/Properti_Detail_Master_Cancel";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'];
		$data['content'] = 'VMasterCancel';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormAddMasterCancel()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['content'] = 'VFormAddMasterCancel';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddMasterCancel()
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

		// if (isset($_POST['userlogin'])) {
		// 	if ($_POST['userlogin'] != null && $_POST['userlogin'] != '') {
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

	public function DataAnggotaKeluarga()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$url = "http://localhost/smart-city-ci/index.php/api/Anggota_Keluarga/Anggota_Keluarga";

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['datas'] = $content['data'];
		$data['content'] = 'VAnggotaKeluarga';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormAddAnggotaKeluarga()
	{
		$data['kota'] = $this->GetKota();
		$data['negara'] = $this->GetCountries();
		$data['content'] = 'VFormAddAnggotaKeluarga';
		$this->load->view('welcome_message', $data);
	}

	public function AddAnggotaKeluarga()
	{

		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_POST['userlogin'])) {
			if ($_POST['userlogin'] != null && $_POST['userlogin'] != '') {
				$url = "http://localhost/smart-city-ci/index.php/api/Anggota_Keluarga/Anggota_Keluarga";

				$context =
					array(
						'id_user'	=> $this->input->post('id_user'),
						'no_urut'	=> $this->input->post('no_urut'),
						'jumlah_keluarga'	=> $this->input->post('jumlah_keluarga'),
						'nama_anggota_keluarga'	=> $this->input->post('nama_anggota_keluarga'),
						'kewarganegaraan'	=> $this->input->post('kewarganegaraan'),
						'id_agama'	=> $this->input->post('id_agama'),
						'nik'	=> $this->input->post('nik'),
						'kitap'	=> $this->input->post('kitap'),
						'id_countries'	=> $this->input->post('id_countries'),
						'id_city_tempat_lahir'	=> $this->input->post('id_city_tempat_lahir'),
						'id_status_dalam_kk'	=> $this->input->post('id_status_dalam_kk'),
						'id_pendidikan'	=> $this->input->post('id_pendidikan'),
						'id_jenis_pekerjaan'	=> $this->input->post('id_jenis_pekerjaan'),
						'nama_jenis_pekerjaan'	=> $this->input->post('nama_jenis_pekerjaan'),

					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);


				// $data['content'] = 'VLaporanKerusakan';
				// $this->load->view('welcome_message', $data);

				if ($content['status'] == 200) {
					$this->load->helper('url');

					/*Redirect the user to some site*/
					redirect(site_url('Welcome/DataAnggotaKeluarga'));
				} else {
					$this->load->helper('url');
					/*Redirect the user to some site*/
					// redirect(site_url('Welcome/VFormAddUser'));
					$message = $content['message'];
					$redirect = site_url("Welcome/VFormAddAnggotaKeluarga");
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

	public function VFormUpdateAnggotaKeluarga()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		$url = "http://localhost/smart-city-ci/index.php/api/Anggota_Keluarga/Anggota_Keluarga?id=" . $id;

		$content = $this->MSudi->CallAPI("GET", $url, null, $token);
		$data['kota'] = $this->GetKota();
		$data['datas'] = $content['data'][0];
		$data['content'] = 'VFormUpdateAnggotaKeluarga';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function EditAnggotaKeluarga()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';

		if (isset($_REQUEST['userlogin'])) {
			if ($_REQUEST['userlogin'] != null && $_REQUEST['userlogin'] != '') {
				$url = "http://localhost/smart-city-ci/index.php/api/Anggota_Keluarga/Anggota_Keluarga";

				$context =
					array(
						'id' => $_REQUEST['id'],
						'id_user'	=> $_REQUEST('id_user'),
						'no_urut'	=> $_REQUEST('no_urut'),
						'jumlah_keluarga'	=> $_REQUEST('jumlah_keluarga'),
						'nama_anggota_keluarga'	=> $_REQUEST('nama_anggota_keluarga'),
						'kewarganegaraan'	=> $_REQUEST('kewarganegaraan'),
						'id_agama'	=> $_REQUEST('id_agama'),
						'nik'	=> $_REQUEST('nik'),
						'kitap'	=> $_REQUEST('kitap'),
						'id_countries'	=> $_REQUEST('id_countries'),
						'id_city_tempat_lahir'	=> $_REQUEST('id_city_tempat_lahir'),
						'id_status_dalam_kk'	=> $_REQUEST('id_status_dalam_kk'),
						'id_pendidikan'	=> $_REQUEST('id_pendidikan'),
						'id_jenis_pekerjaan'	=> $_REQUEST('id_jenis_pekerjaan'),
						'nama_jenis_pekerjaan'	=> $_REQUEST('nama_jenis_pekerjaan'),
						'userlogin'		=> $_REQUEST['userlogin'],
					);

				$content = $this->MSudi->CallAPI("POST", $url, $context, $token);

				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataAnggotaKeluarga'));
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

	public function DeleteAnggotaKeluarga()
	{
		$token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
		$id = $_GET['id'];
		if (isset($_POST['username'])) {
			if ($_POST['username'] != null && $_POST['username'] != '') {
				$user = $_POST['username'];
				$url = "http://localhost/smart-city-ci/index.php/api/Anggota_Keluarga/Anggota_Keluarga?id=" . $id . "&userlogin=" . $user;


				$content = $this->MSudi->CallAPI("DELETE", $url, null, $token);
				$this->load->helper('url');

				/*Redirect the user to some site*/
				redirect(site_url('Welcome/DataAnggotaKeluarga'));
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



	public function Logout()
	{
		$this->load->helper('url');

		/*Redirect the user to some site*/
		redirect(site_url('Welcome'));
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
}