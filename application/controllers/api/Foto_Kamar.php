<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Foto_Kamar extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('foto_kamar', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('foto_kamar', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('foto_kamar', 'status_id', 1)->result();
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
                    // Check form submit or not
                    if (isset($_POST['image'])) {
                        $data['filenames'] = $_POST['image'];
                        // array_push( $data['filenames'],$_POST['image']);
                    }
                    if (isset($_FILES['files'])) {

                        $data = array();
                        $data['filenames'] = [];
                        // Count total files
                        $countfiles = count($_FILES['files']['name']);

                        // Looping all files
                        for ($i = 0; $i < $countfiles; $i++) {

                            if (!empty($_FILES['files']['name'][$i])) {

                                // Define new $_FILES array - $_FILES['file']
                                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                                // Set preference
                                $config['upload_path'] = 'uploads/foto_kamar/';
                                $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG';
                                // $config['max_size'] = '500000000'; // max_size in kb
                                $config['file_name'] = $_FILES['files']['name'][$i];

                                //Load upload library
                                $this->load->library('upload', $config);

                                try {

                                    // File upload
                                    if ($this->upload->do_upload('file')) {
                                        // Get data about the file
                                        $uploadData = $this->upload->data();
                                        $filename = site_url('uploads/foto_kamar/') . $uploadData['file_name'];
                                        $replcate = str_replace("index.php/", "", $filename);
                                        $filename = $replcate;

                                        // Initialize array
                                        array_push($data['filenames'], $filename);
                                    }
                                }

                                //catch exception
                                catch (Exception $e) {
                                    echo 'Message: ' . $e->getMessage();
                                }
                            }
                        }
                    }
                    if (isset($_FILES['files'])) {
                        $image = json_encode($data['filenames']);
                        $replcate = str_replace("\/", "/", $image);
                        $data['filenames'] = $replcate;
                    } else if (isset($_POST['image'])) {
                    } else {
                        $data['filenames'] = "[]";
                    }

                    $insert = array(
                        'tipe_kamar_id' => $this->input->post('tipe_kamar_id'),
                        'foto' => $data['filenames'],
                        'foto_tipe_id' => $this->input->post('foto_tipe_id'),
                        // 'created_by' => $this->input->post('userlogin'),
                        'created_date' => date("Y-m-d H:i:s"),
                        'updated_by' => null,
                        'updated_date' => null,
                        'deleted_by' => null,
                        'deleted_date' => null,
                        'status_id' => 1
                    );
                    
                    $query = $this->MSudi->AddData('foto_kamar', $insert);
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
                 // Check form submit or not
                 if (isset($_FILES['files'])) {

                    $data = array();
                    $data['filenames'] = [];
                    // Count total files
                    $countfiles = count($_FILES['files']['name']);

                    // Looping all files
                    for ($i = 0; $i < $countfiles; $i++) {

                        if (!empty($_FILES['files']['name'][$i])) {

                            // Define new $_FILES array - $_FILES['file']
                            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                            $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                            // Set preference
                            $config['upload_path'] = 'uploads/foto_kamar/';
                            $config['allowed_types'] = 'jpg|jpeg|png|gif';
                            // $config['max_size'] = '500000000'; // max_size in kb
                            $config['file_name'] = $_FILES['files']['name'][$i];

                            //Load upload library
                            $this->load->library('upload', $config);

                            // File upload
                            if ($this->upload->do_upload('file')) {
                                // Get data about the file
                                $uploadData = $this->upload->data();
                                $filename = site_url('uploads/foto_kamar/') . $uploadData['file_name'];
                                $replcate = str_replace("index.php/", "", $filename);
                                $filename = $replcate;

                                // Initialize array
                                array_push($data['filenames'], $filename);
                            }
                        }
                    }
                }
                if (isset($_FILES['files'])) {

                    $image = json_encode($data['filenames']);
                    $replcate = str_replace("\/", "/", $image);
                    $data['filenames'] = $replcate;
                } else {
                    $data['filenames'] = "[]";
                }
                $update = array(
                    'id' => $this->input->post('id'),
                    'tipe_kamar_id' => $this->input->post('tipe_kamar_id'),
                    'foto' => $data['filenames'],
                    'foto_tipe_id' => $this->input->post('foto_tipe_id'),
                    'updated_by' => $this->input->post('userlogin'),
                    'updated_date' => date("Y-m-d H:i:s"),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('foto_kamar', 'id', $update['id'], $update);
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
                    'deleted_date' => date("Y-m-d H:i:s"),
                    'id' => $_GET['id']
                );

                $query = $this->MSudi->UpdateData('foto_kamar', 'id', $delete['id'], $delete);
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