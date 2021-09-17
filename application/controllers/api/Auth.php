<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Auth extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImZhZWE3Y2Q2YWFhYjM1YmIyYmE4MjE3ZTgyNWNkODE5I';
        $this->load->model('MSudi');
    }
    public function index_get()
    {
        $query = $this->MSudi->GetData('tbl_lap_kerusakan');
        $this->response([
            'result' => $query
        ], 200);
    }

    public function index_post()
    {
        if(isset($_GET['master_user'])){
            $userLogin = array(
                'nama' => $this->input->post('nama'),
                'password' => $this->input->post('password'),
                'type' => '0'
            );
    
            $query = $this->MSudi->GetDataLogin('master_user',
            'nama',
            $userLogin['nama'],
            'password',
            $userLogin['password']
            )->row();
        }else{
            $userLogin = array(
                'nama' => $this->input->post('nama'),
                'password' => $this->input->post('password'),
            );
    
            $query = $this->MSudi->GetDataLogin1('master_user',
            'nama',
            $userLogin['nama'],
            'password',
            $userLogin['password']
            )->row();
        }
        
        
        if($query != null){
            $data=new stdClass();
            $data->id = $query->id;
            $data->nama = $query->nama;
            // $data->email = $query->email;
            // $data->id_level = $query->id_level;
            $data->token = $this->token;
            $result = new stdClass();
            $result->status = 200;
            $result->message = 'success';            
            $result->data = $data;
           
            $this->response(
                $result
            , 200); 
        }else{
            $this->response([
                'status' => 401,
                'message' => 'Invalid Username And Password',
                'data' => new stdClass()
            ], 401);    
        }
    }
}