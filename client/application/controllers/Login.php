<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	$this->load->model('MSudi');
	}

	public function index()
	{
		if (isset($_POST['login'])){
				$email = $_POST['email'];
				$password = $_POST['password'];
				$notif = $this->MLogin->GoLogin($email, $password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('Welcome'));
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}

		$this->load->view('VLogin');
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
		if ($_POST['password'] == $_POST['retype_password']) {

		}
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
		redirect(site_url('Login/register'));
		}
		else {
			echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
			}
	
	
	}
}