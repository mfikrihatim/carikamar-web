<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_Information extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MSudi');
    }
    public function index()
    {
        // if ($this->session->userdata('Login')) {
        // 	$data['nama'] = $this->session->userdata('nama');
        // 	$data['level'] = $this->session->userdata('level');
        $data['DataMasterBank'] = $this->MSudi->GetDataWhere('master_bank', 'status_id', 1)->result();
        $data['content'] = 'list-payment-information';
        $this->load->view('welcome_message', $data);
        // } else {
        // 	redirect(site_url('Login'));
        // }
    }

    public function SavePaymentInformation()
	{
		$informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
		$informasi_pembayaran_id = $this->input->post('id');
		$add['pilihan_metode'] = $this->input->post('pilihan_metode');
		$add['master_bank_id'] = $this->input->post('master_bank_id');
		$add['nomor_akun'] = $this->input->post('nomor_akun');
        $add['pemilik_akun'] = $this->input->post('pemilik_akun');
		$add['rencana_pembayaran'] = $this->input->post('rencana_pembayaran');
		$add['created_by'] = 1;
		$add['created_date'] = date("Y-m-d H:i:s");
		$add['updated_by'] = null;
		$add['updated_date'] = null;
		$add['deleted_by'] = null;
		$add['deleted_date'] = null;
		$add['status_id'] = 1;


		if($informasi_pembayaran_id == null || $informasi_pembayaran_id == ''){
            $informasi_pembayaran_id = $this->MSudi->AddData('informasi_pembayaran', $add);
        }else{
           $this->MSudi->UpdateData('informasi_pembayaran', 'id', $informasi_pembayaran_id, $add);       
        }

		$result = array(
            'informasi_umum_detail_id' => $informasi_umum_detail_id,
            'id' => $informasi_pembayaran_id
        );
        echo json_encode($result);

	}
}