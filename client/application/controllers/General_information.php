<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General_information extends CI_Controller
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
        $current_session      = $this->session->userdata('id_user');
        $check_data_informasi = $this->MSudi->getWhereGeneralInformation($current_session,$id_general_information);

        if (!empty($check_data_informasi)) {
            $data['CurrentUrl']             = $id_general_information;
            $data['DataMasterProperti']     = $this->MSudi->getWhereGeneralInformation($current_session,$id_general_information);
            $data['DataMasterKontak']       = $this->MSudi->GetDataWhere('informasi_umum_kontak', 'fk_id_users', $current_session)->row_object();
            $data['DataMasterTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
            $data['CountSidebarGeneralInformation'] = $this->MSudi->query_manual("SELECT COUNT(*) as ttl_count FROM informasi_umum_detail WHERE fk_id_users = '$current_session' ")->row_object();
            
            // Check Location Lat Long
            if (!empty($data['DataMasterProperti']->lokasi_maps) || $data['DataMasterProperti']->lokasi_maps != "") {
                $data['lat_long']  = $data['DataMasterProperti']->lokasi_maps;
                $ex_lat_lng = explode(",", $data['lat_long']);
                $data['lat'] = $ex_lat_lng[0]; 
                $data['lng'] = $ex_lat_lng[1]; 
            }else{
                $lat = "40.714224"; $lng = "-73.961452";
                $data['lat'] = floatval($lat); 
                $data['lng'] = floatval($lng);
            }
        } else { 
            $data['CurrentUrl']             = null;
            $data['DataMasterProperti']     = null;
            $data['DataMasterKontak']       = null;
            $data['DataMasterTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
        }
        
        $data['content'] = 'list-general-information';
        $this->load->view('welcome_message', $data);
    }

    public function AddAkomodasi(){
        $data['CurrentUrl']             = null;
        $data['DataMasterProperti']     = null;
        $data['DataMasterKontak']       = null;
        $lat = "40.714224"; $lng = "-73.961452";
        $data['lat'] = floatval($lat); 
        $data['lng'] = floatval($lng);
        $data['DataMasterTipeProperti'] = $this->MSudi->GetDataWhere('master_tipe_properti', 'status_id', 1)->result();
        $data['content'] = 'v_add_general_information';
        $this->load->view('welcome_message', $data);

    }
    
    public function SaveGeneralInformation()
    {
        $user_id = $this->session->userdata('id');
        $current_session      = $this->session->userdata('id_user');
        $lat_lng = $this->input->post('lat_maps').','.$this->input->post('lng_maps');
        $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');

        $add['tipe_properti_id'] = $this->input->post('tipe_properti_id');
        $add['fk_id_users'] = $current_session;
        $add['nama_properti'] = $this->input->post('nama_properti');
        $add['nama_badan_hukum'] = $this->input->post('nama_badan_hukum');
        $add['lokasi_maps'] = $lat_lng;
        $add['alamat_jalan'] = $this->input->post('alamat_jalan');
        $add['kode_pos'] = $this->input->post('kode_pos');
        $add['no_telp'] = $this->input->post('no_telp');
        $add['jumlah_kamar'] = $this->input->post('jumlah_kamar');
        $add['flag_chanel_manager'] = $this->input->post('flag_chanel_manager');
        $add['user_id'] = $user_id;
        $add['created_by'] = 1;
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        if($informasi_umum_detail_id == null || $informasi_umum_detail_id == ''){
            $informasi_umum_detail_id = $this->MSudi->AddData('informasi_umum_detail', $add);
        } else {
           $this->MSudi->UpdateData('informasi_umum_detail', 'id', $informasi_umum_detail_id, $add);       
        }
        $date_now = date('Y-m-d H:i:s');
        $check_data_informasi = $this->MSudi->GetDataWhereDouble('informasi_umum_detail', 'nama_properti', $add['nama_properti'], 'fk_id_users', $current_session)->row_object(); 
        
        if (!empty($check_data_informasi)) {
            
            $informasi_umum_kontak_id = $this->input->post('informasi_umum_kontak_id');
            $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id') != "" ? $this->input->post('informasi_umum_kontak_id') : $check_data_informasi->id ;

            $add1['informasi_umum_detail_id'] = $informasi_umum_detail_id;
            $add1['jenis_kontak'] = $this->input->post('jenis_kontak');
            $add1['fk_id_users'] = $current_session;
            $add1['nama_lengkap'] = $this->input->post('nama_lengkap');
            $add1['email'] = $this->input->post('email');
            $add1['no_hp'] = $this->input->post('no_hp');
            $add1['no_telp_kantor'] = $this->input->post('no_telp_kantor');
            $add1['extension'] = $this->input->post('extension');
            $add1['jabatan'] = $this->input->post('jabatan');
            $add1['flag_fullday'] = $this->input->post('flag_fullday');
            $add1['created_by'] = 1;
            $add1['created_date'] = date("Y-m-d H:i:s");
            $add1['updated_by'] = null;
            $add1['updated_date'] = null;
            $add1['deleted_by'] = null;
            $add1['deleted_date'] = null;
            $add1['status_id'] = 1;

            if($informasi_umum_kontak_id == null || $informasi_umum_kontak_id == ''){
                $informasi_umum_kontak_id = $this->MSudi->AddData('informasi_umum_kontak', $add1);
            }else{
                $this->MSudi->UpdateData('informasi_umum_kontak', 'id', $informasi_umum_kontak_id, $add1);       
            }
        }



        $result = array(
            'informasi_umum_detail_id' => $informasi_umum_detail_id,
            'informasi_umum_kontak_id' => $informasi_umum_kontak_id
        );
        echo json_encode($result);
        // redirect(site_url('General_information/index'));
       
    }

    public function UpdateGeneralInformation()
    {
        $data['id'] = $this->session->userdata('id');
        // $data['nama'] = $this->session->userdata('nama');
        // $data['email'] = $this->session->userdata('email');
        // $data['foto'] = $this->session->userdata('foto');


        $id = $this->input->post('id');
        $update['nama_properti'] = $this->input->post('nama_properti');
        $update['status_id'] = 1;
        $this->MSudi->UpdateData('informasi_umum_detail', 'id', $id, $update);
        redirect(site_url('Welcome/Index'));
    }
}