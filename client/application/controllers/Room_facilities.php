<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_facilities extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MSudi');
    }
    public function index($id_general_information = null)
    {
        if ($this->session->userdata('Login')) {
        	$data['nama'] = $this->session->userdata('nama');
        	$data['level'] = $this->session->userdata('level');
            $data['CurrentUrl']             = $id_general_information;
            $data['DataMasterProperti']     = null;
            $data['DataMasterKontak']       = null;
            $data['DataInformationDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
            $data['DataFasilitasKamarHeader'] = $this->MSudi->GetDataWhere('master_fasilitas_kamar_header', 'status_id', 1)->result();
            $data['DataFasilitasKamar']   = $this->MSudi->GetDataWhere('fasilitas_kamar', 'informasi_umum_detail_id', $id_general_information)->row_object();

            $join = " master_fasilitas_kamar_header.id = master_fasilitas_kamar_detail.fasilitas_kamar_header_id";
            $this->db->select('master_fasilitas_kamar_detail.id, 
    		master_fasilitas_kamar_header.nama as nama_header,
    		 master_fasilitas_kamar_detail.nama,
    		  master_fasilitas_kamar_detail.status_id');
            $this->db->from('master_fasilitas_kamar_detail');
            $this->db->join('master_fasilitas_kamar_header', $join);
            $this->db->where('master_fasilitas_kamar_detail.status_id', 1);
            $data['FasilitasKamar'] = $this->db->get()->result();

            $data['content'] = 'list-room-fasilitas';
            $this->load->view('welcome_message', $data);
        } else {
        	redirect(site_url('Login'));
        }
    }
    public function AddFasilitasKamar()
    {

        $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
        $availability_tipe_kamar_id = $this->input->post("availability_tipe_kamar_id");
        $fasilitas_kamar_detail_id = $this->input->post("fasilitas_kamar_detail_id");
        $id_fasilitas_kamar = $this->input->post('id_fasilitas_kamar');

        if ($availability_tipe_kamar_id == null) $availability_tipe_kamar_id =  [];
        // if ($fasilitas_kamar_detail_id == null) $fasilitas_kamar_detail_id =  [];
        $add['informasi_umum_detail_id']   = $informasi_umum_detail_id;
        $add['availability_tipe_kamar_id'] = json_encode($availability_tipe_kamar_id);
        // $add['fasilitas_kamar_detail_id'] = json_encode($fasilitas_kamar_detail_id);
        $add['fasilitas_kamar_detail_id'] = $fasilitas_kamar_detail_id;
        $add['created_by'] = 1;
        $add['created_date'] = date("Y-m-d H:i:s");
        $add['updated_by'] = null;
        $add['updated_date'] = null;
        $add['deleted_by'] = null;
        $add['deleted_date'] = null;
        $add['status_id'] = 1;

        // var_dump($fasilitas_kamar_detail_id); die;

        if ($id_fasilitas_kamar != "" || $id_fasilitas_kamar != NULL) {
            echo "update";
            $this->MSudi->UpdateData('fasilitas_kamar', 'informasi_umum_detail_id', $informasi_umum_detail_id, $add);       
            redirect(site_url('Room_facilities/index/').$informasi_umum_detail_id);
        }else{
            echo "insert";
            $this->MSudi->AddData('fasilitas_kamar', $add);
            redirect(site_url('Room_facilities/index/'.$informasi_umum_detail_id));
        }

    }
}
