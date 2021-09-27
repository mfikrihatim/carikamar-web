<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contract extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
        if (!$this->session->userdata('OnLogin')) {
            redirect('Welcome/Logout');
		}
    }

    public function index($id_general_information = null){
        if (!empty($id_general_information)) {
            
            $data['CurrentUrl']   = $id_general_information;
            $current_session      = $this->session->userdata('id_user');
            $check_review_contract = $this->MSudi->getWhereGeneralInformation($current_session,$id_general_information);
        }else{
            $data['CurrentUrl']   = null;
        }

        $data['content'] = 'review-contract';
        $this->load->view('welcome_message', $data);
    }
}