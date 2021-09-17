<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Informasi_pembayaran extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->token = 'Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
        $this->load->model('MSudi');
    }
    public function index_get()
    {
        $header = $this->input->request_headers();
        if (isset($header['Authorization'])) {
            if ($header['Authorization'] == $this->token) {
                if (isset($_GET['id'])) {
                    $this->db->select('informasi_pembayaran.id, 
                    informasi_pembayaran.informasi_umum_detail_id, 
                    informasi_umum_detail.nama_properti, 
                    informasi_pembayaran.pilihan_metode,
                    informasi_pembayaran.master_bank_id,
                    master_bank.nama_bank,
                    informasi_pembayaran.nomor_akun,
                    informasi_pembayaran.pemilik_akun,
                    informasi_pembayaran.rencana_pembayaran,
                    informasi_pembayaran.status_id');
                    $this->db->from('informasi_pembayaran');
                    $this->db->join('informasi_umum_detail', 'informasi_umum_detail.id = informasi_pembayaran.informasi_umum_detail_id');
                    $this->db->join('master_bank', 'master_bank.id = informasi_pembayaran.master_bank_id');
                    $this->db->where('informasi_pembayaran.status_id', 1);
                    $this->db->where('informasi_pembayaran.id', $_GET['id']);

                    $query = $this->db->get()->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('informasi_pembayaran', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $this->db->select('informasi_pembayaran.id, 
                    informasi_pembayaran.informasi_umum_detail_id, 
                    informasi_umum_detail.nama_properti, 
                    informasi_pembayaran.pilihan_metode,
                    informasi_pembayaran.master_bank_id,
                    master_bank.nama_bank,
                    informasi_pembayaran.nomor_akun,
                    informasi_pembayaran.pemilik_akun,
                    informasi_pembayaran.rencana_pembayaran,
                    informasi_pembayaran.status_id');
                    $this->db->from('informasi_pembayaran');
                    $this->db->join('informasi_umum_detail', 'informasi_umum_detail.id = informasi_pembayaran.informasi_umum_detail_id');
                    $this->db->join('master_bank', 'master_bank.id = informasi_pembayaran.master_bank_id');
                    $this->db->where('informasi_pembayaran.status_id', 1);

                    $query = $this->db->get()->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'get data success',
                        'data' => $query
                    ], 200);
                }
            } else {
                $this->response([
                    'status' => 401,
                    'message' => 'UnAuthorize',
                    'data' => []
                ], 401);
            }
        } else {
            $this->response([
                'status' => 401,
                'message' => 'UnAuthorize',
                'data' => []
            ], 401);
        }
    }

    public function index_post()
    {
        if (isset($_POST['id'])) {
            $result = $this->update();
        } else {
            $header = $this->input->request_headers();
            if (isset($header['Authorization'])) {
                if ($header['Authorization'] == $this->token) {
                    $insert = array(
                        'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                        'pilihan_metode' => $this->input->post('pilihan_metode'),
                        'master_bank_id' => $this->input->post('master_bank_id'),
                        'nomor_akun' => $this->input->post('nomor_akun'),
                        'pemilik_akun' => $this->input->post('pemilik_akun'),
                        'rencana_pembayaran' => $this->input->post('rencana_pembayaran'),
                        'status_id' => 1,
                        'created_by' => $this->input->post('userlogin'),
                        'created_date' => date("Y-m-d H:i:s"),
                        'updated_by' => null,
                        'updated_date' => null,
                        'deleted_by' => null,
                        'deleted_date' => null
                    );

                    $query = $this->MSudi->AddData('informasi_pembayaran', $insert);
                    $this->response([
                        'status' => 200,
                        'message' => 'input data success',
                        'data' => $query
                    ], 200);
                } else {
                    $this->response([
                        'status' => 401,
                        'message' => 'UnAuthorize',
                        'data' => []
                    ], 401);
                }
            } else {
                $this->response([
                    'status' => 401,
                    'message' => 'UnAuthorize',
                    'data' => []
                ], 401);
            }
        }
    }

  
    public function update()
    {
        $header = $this->input->request_headers();
        if (isset($header['Authorization'])) {
            if ($header['Authorization'] == $this->token) {
                $update = array(
                    'id' => $this->input->post('id'),
                    'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                    'pilihan_metode' => $this->input->post('pilihan_metode'),
                    'master_bank_id' => $this->input->post('master_bank_id'),
                    'nomor_akun' => $this->input->post('nomor_akun'),
                    'pemilik_akun' => $this->input->post('pemilik_akun'),
                    'rencana_pembayaran' => $this->input->post('rencana_pembayaran'),
                    'status_id' => 1,
                    'updated_by' => $this->input->post('userlogin'),
                    'updated_date' => date("Y-m-d H:i:s"),
                );

                $query = $this->MSudi->UpdateData('informasi_pembayaran', 'id', $update['id'], $update);
                $this->response([
                    'status' => 200,
                    'message' => 'Update success',
                    'data' => $query
                ], 200);
            } else {
                $this->response([
                    'status' => 401,
                    'message' => 'UnAuthorize',
                    'data' => []
                ], 401);
            }
        } else {
            $this->response([
                'status' => 401,
                'message' => 'UnAuthorize',
                'data' => []
            ], 401);
        }
    }

    public function index_delete()
    {
        $header = $this->input->request_headers();
        if (isset($header['Authorization'])) {
            if ($header['Authorization'] == $this->token) {
                $delete = array(
                    'status_id' => 0,
                    'deleted_by' => $_GET['userlogin'],
                    'deleted_date' => date("Y-m-d H:i:s"),
                    'id' => $_GET['id']
                );

                $query = $this->MSudi->UpdateData('informasi_pembayaran', 'id', $delete['id'], $delete);
                $this->response([
                    'status' => 200,
                    'message' => 'delete data success',
                    'data' => $query
                ], 200);
            } else {
                $this->response([
                    'status' => 401,
                    'message' => 'UnAuthorize',
                    'data' => []
                ], 401);
            }
        } else {
            $this->response([
                'status' => 401,
                'message' => 'UnAuthorize',
                'data' => []
            ], 401);
        }
    }
}
