<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Informasi_Umum_Detail extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('informasi_umum_detail', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('informasi_umum_detail', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
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
                        'tipe_properti_id' => $this->input->post('tipe_properti_id'),
                        'nama_properti' => $this->input->post('nama_properti'),
                        'nama_badan_hukum' => $this->input->post('nama_badan_hukum'),
                        'lokasi_maps' => $this->input->post('lokasi_maps'),
                        'alamat_jalan' => $this->input->post('alamat_jalan'),
                        'kode_pos' => $this->input->post('kode_pos'),
                        'no_telp' => $this->input->post('no_telp'),
                        'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                        'flag_chanel_manager' => $this->input->post('flag_chanel_manager'),
                        // 'password' => $this->input->post('password'),
                        'status_id' => 1
                    );

                    $query = $this->MSudi->AddData('informasi_umum_detail', $insert);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
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
                    'tipe_properti_id' => $this->input->post('tipe_properti_id'),
                    'nama_properti' => $this->input->post('nama_properti'),
                    'nama_badan_hukum' => $this->input->post('nama_badan_hukum'),
                    'lokasi_maps' => $this->input->post('lokasi_maps'),
                    'alamat_jalan' => $this->input->post('alamat_jalan'),
                    'kode_pos' => $this->input->post('kode_pos'),
                    'no_telp' => $this->input->post('no_telp'),
                    'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                    'flag_chanel_manager' => $this->input->post('flag_chanel_manager'),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('informasi_umum_detail', 'id', $update['id'], $update);
                $this->response([
                    'status' => 200,
                    'message' => 'success',
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
                    'id' => $_GET['id']
                );

                $query = $this->MSudi->UpdateData('informasi_umum_detail', 'id', $delete['id'], $delete);
                $this->response([
                    'status' => 200,
                    'message' => 'success',
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