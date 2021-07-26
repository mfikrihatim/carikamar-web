<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Review_Kontrak extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('review_kontrak', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('review_kontrak', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('review_kontrak', 'status_id', 1)->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'Get Data success',
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
                        'informasi_penandatangan_kontrak_id' => $this->input->post('informasi_penandatangan_kontrak_id'),
                        'perjanjian_kontrak_id' => $this->input->post('perjanjian_kontrak_id'),
                        'flag_menyetujui' => $this->input->post('flag_menyetujui'),
                        // 'created_by' => $this->input->post('userlogin'),
                        // 'created_date' => date("Y-m-d H:i:s"),
                        // 'updated_by' => null,
                        // 'updated_date' => null,
                        // 'deleted_by' => null,
                        // 'deleted_date' => null,
                        'status_id' => 1
                    );

                    $query = $this->MSudi->AddData('review_kontrak', $insert);
                    $this->response([
                        'status' => 200,
                        'message' => 'Input success',
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
                    'informasi_penandatangan_kontrak_id' => $this->input->post('informasi_penandatangan_kontrak_id'),
                    'flag_menyetujui' => $this->input->post('flag_menyetujui'),
                    'perjanjian_kontrak_id' => $this->input->post('perjanjian_kontrak_id'),
                    // 'updated_by' => $this->input->post('userlogin'),
                    // 'updated_date' => date("Y-m-d H:i:s"),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('review_kontrak', 'id', $update['id'], $update);
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
                    // 'deleted_by' => $_GET['userlogin'],
                    // 'deleted_date' => date("Y-m-d H:i:s"),
                    'id' => $_GET['id']
                );

                $query = $this->MSudi->UpdateData('review_kontrak', 'id', $delete['id'], $delete);
                $this->response([
                    'status' => 200,
                    'message' => 'Delete success',
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