<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Tipe_kamar extends RestController
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
                    $query = $this->MSudi->GetDataWhere2('tipe_kamar', 'status_id', 1, 'id', $_GET['id'])->result();
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else if (isset($_GET['count'])) {
                    $query = $this->MSudi->GetDataWhereCount('tipe_kamar', 'status_id', 1);
                    $this->response([
                        'status' => 200,
                        'message' => 'success',
                        'data' => $query
                    ], 200);
                } else {
                    $query = $this->MSudi->GetDataWhere('tipe_kamar', 'status_id', 1)->result();
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
                        'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                        'nama_kamar' => $this->input->post('nama_kamar'),
                        'master_tipe_kamar_id' => $this->input->post('master_tipe_kamar_id'),
                        'master_tipe_kasur_id' => $this->input->post('master_tipe_kasur_id'),
                        'maksimum_kapasitas' => $this->input->post('maksimum_kapasitas'),
                        'maksimum_extra_bed' => $this->input->post('maksimum_extra_bed'),
                        'harga_extra_bed' => $this->input->post('harga_extra_bed'),
                        'ukuran_kamar_lebar' => $this->input->post('ukuran_kamar_lebar'),
                        'ukuran_kamar_panjang' => $this->input->post('ukuran_kamar_panjang'),
                        'harga_kamar' => $this->input->post('harga_kamar'),
                        'flag_included_breakfast' => $this->input->post('flag_included_breakfast'),
                        'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                        'created_by' => $this->input->post('userlogin'),
                        'created_date' => date("Y-m-d H:i:s"),
                        'updated_by' => null,
                        'updated_date' => null,
                        'deleted_by' => null,
                        'deleted_date' => null,
                        'status_id' => 1
                    );

                    $query = $this->MSudi->AddData('tipe_kamar', $insert);
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
                    'informasi_umum_detail_id' => $this->input->post('informasi_umum_detail_id'),
                    'nama_kamar' => $this->input->post('nama_kamar'),
                    'master_tipe_kamar_id' => $this->input->post('master_tipe_kamar_id'),
                    'master_tipe_kasur_id' => $this->input->post('master_tipe_kasur_id'),
                    'maksimum_kapasitas' => $this->input->post('maksimum_kapasitas'),
                    'maksimum_extra_bed' => $this->input->post('maksimum_extra_bed'),
                    'harga_extra_bed' => $this->input->post('harga_extra_bed'),
                    'ukuran_kamar_lebar' => $this->input->post('ukuran_kamar_lebar'),
                    'ukuran_kamar_panjang' => $this->input->post('ukuran_kamar_panjang'),
                    'harga_kamar' => $this->input->post('harga_kamar'),
                    'flag_included_breakfast' => $this->input->post('flag_included_breakfast'),
                    'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                    'updated_by' => $this->input->post('userlogin'),
                    'updated_date' => date("Y-m-d H:i:s"),
                    'status_id' => 1
                );

                $query = $this->MSudi->UpdateData('tipe_kamar', 'id', $update['id'], $update);
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

                $query = $this->MSudi->UpdateData('tipe_kamar', 'id', $delete['id'], $delete);
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
