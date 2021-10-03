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

    public function SignatoryInformation($id_general_information = null)
    {
        if (!empty($id_general_information)) {
            
            $data['CurrentUrl']   = $id_general_information;
            $current_session      = $this->session->userdata('id_user');
            $data['check_review_contract'] = $this->MSudi->getWhereGeneralInformation($current_session,$id_general_information);
            $data['check_users'] = $this->MSudi->GetDataWhere('master_user', 'id', $current_session)->row_object();
            $data['MasterPerjanjianKontrak'] = $this->MSudi->GetData('master_perjanjian_kontrak');
            $data['MasterRoleKontrak'] = $this->MSudi->GetData('master_role_kontrak');
            $data['InformasiPenjanjianKontrak'] = $this->MSudi->GetDataWhere('informasi_penandatangan_kontrak', 'informasi_umum_detail_id', $id_general_information)->row_object();

        }else{
            $data['CurrentUrl']   = null;
        }

        $data['content'] = 'signatory-contract';
        $this->load->view('welcome_message', $data);
    }

    public function index($id_general_information = null){
        if (!empty($id_general_information)) {
            
            $data['CurrentUrl']   = $id_general_information;
            $current_session      = $this->session->userdata('id_user');
            $data['MasterRoleKontrak'] = $this->MSudi->GetData('master_role_kontrak');
            $data['check_review_contract'] = $this->MSudi->getWhereGeneralInformation($current_session,$id_general_information);
            $data['check_users'] = $this->MSudi->GetDataWhere('master_user', 'id', $current_session)->row_object();
            $data['MasterPerjanjianKontrak'] = $this->MSudi->GetData('master_perjanjian_kontrak');
            $data['InformasiPenjanjianKontrak'] = $this->MSudi->GetDataWhere('informasi_penandatangan_kontrak', 'informasi_umum_detail_id', $id_general_information)->row_object();

            /* Role Kontak */
            $data['role_kontak'] = '';
            foreach ($data['MasterRoleKontrak'] as $key) {
                $data['role_kontak'] .= !empty($data['InformasiPenjanjianKontrak']) ? $data['InformasiPenjanjianKontrak']->role_kontrak_id == $key->id ? $key->nama_role_kontrak : "" : "";
            }

        }else{
            $data['CurrentUrl']   = null;
        }

        $data['content'] = 'review-contract';
        $this->load->view('welcome_message', $data);
    }

    public function PendatangananKontrakProses()
    {
        if ($this->input->post()) {
            $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
            $id_current = $this->input->post('id');
            // print_r($id_current); die;
            $insert = array(
                'informasi_umum_detail_id' => $this->input->post('id'), 
                'nama_lengkap' => $this->input->post('nama_lengkap'), 
                'role_kontrak_id' => $this->input->post('role_kontrak_id'), 
                'email' => $this->input->post('email'), 
                'no_hp' => $this->input->post('no_hp'), 
                'flag_menyetujui' => $this->input->post('flag_menyetujui'), 
                'status_id' => 1, 
                'created_by' => 1, 
                'created_date' => date('Y-m-d H:s:i'), 
            );

            // print_r($insert); die;
            if ($informasi_umum_detail_id != NULL ||  $informasi_umum_detail_id != "") {
                # code...
                $this->MSudi->UpdateData('informasi_penandatangan_kontrak', 'informasi_umum_detail_id', $informasi_umum_detail_id, $insert);       
                return redirect(site_url('Contract/SignatoryInformation/'.$id_current));
            
            }else{

                $this->MSudi->AddData('informasi_penandatangan_kontrak', $insert);
                return redirect(site_url('Contract/SignatoryInformation/'.$id_current));
            }

            
        }
    }
}