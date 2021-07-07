<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Properti_Detail extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('properti_detail', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('properti_detail', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('properti_detail', 'status_id', 1)->result();
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
                        'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                        'mata_uang' => $this->input->post('mata_uang'),
                        'flag_kawasan' => $this->input->post('flag_kawasan'),
                        'waktu_checkin' => $this->input->post('waktu_checkin'),
                        'waktu_checkout' => $this->input->post('waktu_checkout'),
                        'jarak_ke_kota' => $this->input->post('jarak_ke_kota'),
                        'jumlah_lantai' => $this->input->post('jumlah_lantai'),
                        'biaya_sarapan_tambahan' => $this->input->post('biaya_sarapan_tambahan'),
                        'master_cancel_id' => $this->input->post('master_cancel_id'),
                        'master_style_id' => $this->input->post('master_style_id'),
                        'status_id' => 1
                    );

                    $query = $this->MSudi->AddData('properti_detail', $insert);
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
                    'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                    'mata_uang' => $this->input->post('mata_uang'),
                    'flag_kawasan' => $this->input->post('flag_kawasan'),
                    'waktu_checkin' => $this->input->post('waktu_checkin'),
                    'waktu_checkout' => $this->input->post('waktu_checkout'),
                    'jarak_ke_kota' => $this->input->post('jarak_ke_kota'),
                    'jumlah_lantai' => $this->input->post('jumlah_lantai'),
                    'biaya_sarapan_tambahan' => $this->input->post('biaya_sarapan_tambahan'),
                    'master_cancel_id' => $this->input->post('master_cancel_id'),
                    'master_style_id' => $this->input->post('master_style_id'),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('properti_detail', 'id', $update['id'], $update);
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

                $query = $this->MSudi->UpdateData('properti_detail', 'id', $delete['id'], $delete);
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