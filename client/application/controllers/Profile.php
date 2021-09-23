<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
        if (!$this->session->userdata('OnLogin')) {
            redirect('Welcome/Logout');
		}
    }

    public function index()
    {
    	$current_session = $this->session->userdata('id_user');

    	if (!empty($current_session)) {
    		$data['CurrentUrl']             = null;
			$data['DataMasterProperti']     = null;
			$data['DataMasterKontak']       = null;
			$data['DataUser'] = $this->MSudi->GetDataWhere('master_user', 'id', $current_session)->row_object();

    		$data['content'] = 'v_profile';
    		$this->load->view('welcome_message', $data);
    	}else{

    		return redirect(site_url('Login'));
    	}
    }

    public function ChangeProfile()
    {
    	if ($this->input->post()) {
    		
    		$id_user_session = $this->session->userdata('id_user');
			$check_email = $this->MSudi->GetDataWhere('master_user', 'id', $id_user_session)->row_object();
    		$email = $this->input->post('email');
    		$nama = $this->input->post('nama');

    		if (!empty($id_user_session)) {

    			// Check Validation Email
	    		/*$get_email = $this->MSudi->query_manual("SELECT email FROM master_user ORDER BY email DESC")->result();
	    		$tampung_check_email = [];
	    		foreach ($get_email as $key) { $tampung_check_email[] = $key->email; }
    			if ($email) {    				
    				if (in_array($email, $tampung_check_email)) {
	    				$this->session->set_flashdata(['code' => 200, 'msg' => 'error', 'pesan' => 'Opss, Email Sudah Tersedia !']);
						return redirect(site_url('Profile'));
					}
    			}*/

    			$data_update = ['email' => $email, 'nama' => $nama];
				$this->MSudi->UpdateData('master_user', 'id', $id_user_session, $data_update);

				$this->session->set_flashdata(['code' => 200, 'msg' => 'success', 'pesan' => 'Success Berhasil Update Data']);
				return redirect(site_url('Profile'));
    		}
    	}
    }

    public function ChangePassword()
    {
    	if ($this->input->post()) {
    		$email_session = $this->session->userdata('email');
    		$current_password = $this->input->post('current_password');
    		$new_password = $this->input->post('new_password');
    		$confirm_password = $this->input->post('confirm_password');

    		if (!empty($email_session)) {
    			
    			$check_user = $this->MSudi->GetDataWhere('master_user', 'email', $email_session)->row_object();
    			// print_r($check_user->password); die;
    			if ($check_user->password != $current_password) {
    				
    				$this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Password lama tidak sesuai']);
					return redirect(site_url('Profile'));
    			}else{

    				if ($new_password != $confirm_password) {
    					
    					$this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Confirm Password Tidak Sesuai']);
    					return redirect(site_url('Profile'));

    				}else{

    					$data_password = array(
    						'password' => $new_password
    					);
    					$this->MSudi->UpdateData('master_user', 'email', $email_session, $data_password);
    					$this->session->set_flashdata(['code' => 200, 'msg' => 'success', 'pesan' => 'Success Berhasil Update Data']);
    					return redirect(site_url('Profile'));
    				}
    			}
    			
    		}
    	}else{

    	}
    }
}
