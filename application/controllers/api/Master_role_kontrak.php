<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Master_role_kontrak extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('master_role_kontrak', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('master_role_kontrak', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('master_role_kontrak', 'status_id', 1)->result();
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
                        'nama_role_kontrak' => $this->input->post('nama_role_kontrak'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status_id' => 1
                    );

                    $query = $this->MSudi->AddData('master_role_kontrak', $insert);
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
                    'nama_role_kontrak' => $this->input->post('nama_role_kontrak'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('master_role_kontrak', 'id', $update['id'], $update);
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
                    'id' => $_GET['id']
                );

                $query = $this->MSudi->UpdateData('master_role_kontrak', 'id', $delete['id'], $delete);
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
