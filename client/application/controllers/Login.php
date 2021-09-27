<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');
		$this->load->model('MSudi');
		// if ($this->session->userdata('OnLogin') === 'OnLogin') {
		// 	redirect('Welcome');
		// } else {
		// 	redirect('Login');
			
		// }
	}

	public function index(){
		if (isset($_POST['login'])){
			$email 	  = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->MLogin->getUserByid($email);
			if ($user) {
				if ($user->password == $password) {
					$this->session->set_userdata([
						'id_user' => $user->id,
						'email'   => $user->email,
						'nama'    => $user->nama,
						'Login'   => 'Login',
						'OnLogin' => 'OnLogin'
					]);
					redirect(site_url('Welcome'));	
				}else{
					$this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Email Dan Passowrd Salah']);
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			} else {
				$this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Email Dan Passowrd Salah']);
				$this->load->library('session');
				$this->session->unset_userdata('Login');
				redirect(site_url('Login'));
			}
		} else {
			$this->load->view('VLogin');
		}

	}
	public function register()
	{
		
		$this->load->view('VRegister');
	
	
	}
	public function buat_akun_baru()
	{
		
		$add['nama'] = $this->input->post('nama');
		$add['email'] = $this->input->post('email');
		$add['password'] = $this->input->post('password');
		$add['password'] = $this->input->post('retype_password');
		$add['created_by'] = $this->input->post('nama');
		$add['created_date'] = date("Y-m-d H:i:s");
		$add['updated_by'] = null;
		$add['updated_date'] = null;
		$add['deleted_by'] = null;
		$add['deleted_date'] = null;
		$add['status_id'] = 1;
		$add['role_id'] = 1;
		if ($_POST['password'] == $_POST['retype_password']) {
			$this->MSudi->AddData('master_user', $add);
			$this->session->set_flashdata(['code' => 400, 'msg' => 'success', 'pesan' => 'Yeay, Registrasi Succcess']);
			redirect(site_url('Login/register'));
		} else {
			$this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Password yang Anda Masukan Tidak Sama']);
			redirect(site_url('Login/register'));
			// echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
		}
	
	
	}
}