<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function IniSendEmail()
    {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'mail',
            'smtp_host' => '',
            'smtp_user' => '',  // Email gmail
            'smtp_pass'   => '',  // Password gmail
            'smtp_crypto' => 'tls',
            'smtp_port'   => 587,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

         $this->load->library('email', $config);
    }

    public function index()
    {
		$this->load->view('VForgotPassword');
    }

    public function ProcessCheckEmail()
    {
        if ($this->input->post()) {
            
            $email_input = $this->input->post('email');
            $check_email = $this->MSudi->GetDataWhere("master_user", 'email', $email_input)->row_object();
            if (!empty($check_email)) {
                $current_session = $this->session->userdata('id_user');
                $check_token_email = $this->MSudi->query_manual("SELECT * FROM token_forgot_password WHERE email = '$email_input'")->row_object();

                $this->IniSendEmail();
                $this->email->from('carikamar@carikamar.com', 'Admin Cari Kamar');
                $this->email->to($email_input); 
                $this->email->subject('Verification Forgot Password');
                $this->email->message("Test Send Email");

                /*$date_now = date('Y-m-d H:s:i');
                if ($date_now < $check_token_email->created_date) { }*/
                if (empty($check_token_email)) {
                    $add_token = ['id_users' => $current_session, 'email' => $email_input, 'token' => 'ini_token', 'created_date' => date('Y-m-d H:s:i')];
                    $this->MSudi->AddData('token_forgot_password', $add_token);
                }else{
                    $update_token = ['id_users' => $current_session, 'email' => $email_input, 'token' => 'ini_token', 'created_date' => date('Y-m-d H:s:i')];
                    $this->MSudi->UpdateData('token_forgot_password', 'email', $email_input, $update_token);
                }

                $this->session->set_flashdata(['code' => 400, 'msg' => 'success', 'pesan' => 'Silahkan cek email anda !']);
                return redirect(site_url("ForgotPassword"));
            }else{

                $this->session->set_flashdata(['code' => 400, 'msg' => 'error', 'pesan' => 'Opps!, Email Anda Belum Terdaftar !']);
                return redirect(site_url("ForgotPassword"));
                // echo "email tidak ditemukan";
            }
        }
    }

    public function ViewForgotPasswordToken($token = null)
    {
        if ($token) {
            $check_token = $this->MSudi->GetDataWhere('token_forgot_password', 'token', $token)->row_object();
            
            if (!empty($check_token)) {
                $add['token'] = $check_token->token;
                $this->load->view('VForgotPasswordToken', $add);
            }else{

                echo "token_tidak_ditemukan";
            }
        }else{
            echo "paremeter salah";
        }
    }

    public function ViewForgotPasswordTokenProcess($token)
    {
        if ($this->input->post() || $token) {
            $password_new = $this->input->post('password_new');
            $password_confirmation = $this->input->post('password_confirmation');

            if ($password_new != $password_confirmation) {
                
                echo "password tidak cocok";
            }else{

                $tokenPass = $this->MSudi->GetDataWhere('token_forgot_password', 'token', $token)->row_object();
                $userEmail = $this->MSudi->GetDataWhere('master_user', 'email', $tokenPass->email)->row_object();

                if (!empty($userEmail)) {
                    $data_update_pw = ['password' => $password_new];
                    $this->MSudi->UpdateData('master_user', 'email', $userEmail->email, $data_update_pw);
                    $this->session->set_flashdata(['code' => 400, 'msg' => 'success', 'pesan' => 'Berhasil Reset Password, Silahkan Login !']);
                    return redirect(site_url('Login'));
                }else{
                    echo "gagal email tidak di temukan";
                }
            }
        }else{
            echo "internal error";
        }
    }
}
