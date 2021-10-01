<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Photos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MSudi');
    }

    public function imageConf() {
        $config['upload_path'] = './../uploads/foto_properti';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $config['max_size']  = '20000000';
        $config['overwrite']  = true;
        $config['encrypt_name']  = true;
        return $this->load->library('upload', $config);
    }

    function getLastPathSegment($url) {
        $path = parse_url($url, PHP_URL_PATH); // to get the path from a whole URL
        $pathTrimmed = trim($path, '/'); // normalise with no leading or trailing slash
        $pathTokens = explode('/', $pathTrimmed); // get segments delimited by a slash

        if (substr($path, -23) !== '/') {
            array_pop($pathTokens);
        }
        return end($pathTokens); // get the last segment
    }

    public function index($id_general_information = null)
    {
        if ($this->session->userdata('Login')) {
        	$data['nama'] = $this->session->userdata('nama');
        	$data['level'] = $this->session->userdata('level');
            $data['DataFotoProperty'] = $this->MSudi->GetDataWhere('foto_properti', 'informasi_umum_detail_id', $id_general_information)->row_object();
            $data['TipeKamar'] = $this->MSudi->GetData('foto_tipe');

            // $data['CurrentUrl']             = null;
            $data['CurrentUrl']             = $id_general_information;
            $data['DataMasterProperti']     = null;
            $data['DataMasterKontak']       = null;
            $data['content'] = 'list-photos';
            $this->load->view('welcome_message', $data);
        } else {
        	redirect(site_url('Login'));
        }
    }

    public function AddPhotos()
    {
        $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id'); 
        $foto_tipe_id = $this->input->post('tipe_kamar_id');
        if ($_FILES['files']) {
            
            $checkImage = $this->MSudi->GetDataWhere('foto_properti', 'informasi_umum_detail_id', $informasi_umum_detail_id)->row_object();
            
            /* Check Gambar Di Storange */
            if (!empty($checkImage)) {
                foreach ((array) json_decode($checkImage->foto) as $key) {
                    $image_path = './../uploads/foto_properti/';
                    unlink($image_path.basename($key));
                }
            }

            $files = $_FILES;
            $cpt = count($_FILES['files']['name']);
            $data = array();
            $arr_foto_tipe = array();
            
            /* Loop Multiple Foto */
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['files']['name']      =   $files['files']['name'][$i];
                $_FILES['files']['type']      =   $files['files']['type'][$i];
                $_FILES['files']['tmp_name']  =   $files['files']['tmp_name'][$i];
                $_FILES['files']['error']     =   $files['files']['error'][$i];
                $_FILES['files']['size']      =   $files['files']['size'][$i];   

                $this->imageConf();
                if (!$this->upload->do_upload('files')){
                    // $this->setMessages('Oooppsss','error',strip_tags($this->upload->display_errors()));
                    // redirect('pages/inputcontent');
                    echo strip_tags($this->upload->display_errors());
                }else{

                    $gambar = $this->upload->data('file_name');
                    // $data[] = $gambar;
                    /*$filename = site_url('uploads/foto_properti/') . $gambar;
                    $filename = "http://localhost/carikamar-web/uploads/foto_properti/" . $gambar;*/
                    $dynamic_url = site_url();
                    $arr = explode('/', $dynamic_url);
                    // $url_local = "https://".$_SERVER['SERVER_NAME']."/".$arr[count($arr) - 3]."/uploads/foto_properti/";
                    $url_hosting = "https://".$_SERVER['SERVER_NAME']."/uploads/foto_properti/";
                    $filename = $url_hosting.$gambar;
                    
                    $replcate = str_replace("index.php/", "", $filename);
                    $data[]   = $replcate;
                    $arr_foto_tipe[] = $foto_tipe_id[$i]; 
                }

            }

            $parsedataImage = json_encode($data);
            $replace_character = str_replace("\/", "/", $parsedataImage);
            $image_upload = $replace_character;
            
            $insert = array(
                'informasi_umum_detail_id' => $informasi_umum_detail_id,
                'foto' => $image_upload,
                'foto_tipe_id' => json_encode($arr_foto_tipe),
                'status_id'  => 0,
                'created_by' => $this->session->userdata('id_user'),
                'created_date' => date("Y-m-d H:i:s"),
                'updated_by' => null,
                'updated_date' => null,
                'deleted_by' => null,
                'deleted_date' => null,
                'status_id' => 1
            );
            
            // var_dump($insert); die;

            if (!empty($checkImage)) {
                $this->MSudi->UpdateData('foto_properti', 'informasi_umum_detail_id', $informasi_umum_detail_id, $insert);       
                redirect(site_url('Photos/index/').$informasi_umum_detail_id);
            }else{
                $result = $this->MSudi->AddData('foto_properti', $insert);
                redirect(site_url('Photos/index/').$informasi_umum_detail_id);
            }
        }

    }

    public function AddPhotosKamar()
    {
        $informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id'); 
        $tipe_kamar_id = $this->input->post('tipe_kamar_id'); 
        
        if ($_FILES['files']) {
            
            $checkImage = $this->MSudi->GetDataWhere('foto_kamar', 'informasi_umum_detail_id', $informasi_umum_detail_id)->row_object();
            
            /* Check Gambar Di Storange */
            if (!empty($checkImage)) {
                foreach ((array) json_decode($checkImage->foto) as $key) {
                    $image_path = './../uploads/foto_kamar/';
                    unlink($image_path.basename($key));
                }
            }

            $files = $_FILES;
            $cpt = count($_FILES['files']['name']);
            $data = array();
            
            /* Loop Multiple Foto */
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['files']['name']      =   $files['files']['name'][$i];
                $_FILES['files']['type']      =   $files['files']['type'][$i];
                $_FILES['files']['tmp_name']  =   $files['files']['tmp_name'][$i];
                $_FILES['files']['error']     =   $files['files']['error'][$i];
                $_FILES['files']['size']      =   $files['files']['size'][$i];    
                $this->imageConf();
                if (!$this->upload->do_upload('files')){
                    // $this->setMessages('Oooppsss','error',strip_tags($this->upload->display_errors()));
                    // redirect('pages/inputcontent');
                    echo strip_tags($this->upload->display_errors());
                }else{

                    $gambar = $this->upload->data('file_name');
                    // $data[] = $gambar;
                    /*$filename = site_url('uploads/foto_properti/') . $gambar;
                    $filename = "http://localhost/carikamar-web/uploads/foto_properti/" . $gambar;*/
                    $dynamic_url = site_url();
                    $arr = explode('/', $dynamic_url);
                    $url = "http://".$_SERVER['SERVER_NAME']."/".$arr[count($arr) - 3]."/uploads/foto_kamar/";
                    $filename = $url.$gambar;
                    
                    $replcate = str_replace("index.php/", "", $filename);
                    $data[]   = $replcate;

                }

            }

            $parsedataImage = json_encode($data);
            $replace_character = str_replace("\/", "/", $parsedataImage);
            $image_upload = $replace_character;
            
            $insert = array(
                'tipe_kamar_id' => $tipe_kamar_id,
                'foto' => $image_upload,
                'foto_tipe_id' => 2,
                'status_id'  => 0,
                'created_by' => $this->session->userdata('id_user'),
                'created_date' => date("Y-m-d H:i:s"),
                'updated_by' => null,
                'updated_date' => null,
                'deleted_by' => null,
                'deleted_date' => null,
                'status_id' => 1
            );
            
            if (!empty($checkImage)) {
                $this->MSudi->UpdateData('foto_kamar', 'informasi_umum_detail_id', $informasi_umum_detail_id, $insert);       
                redirect(site_url('Photos/index/').$informasi_umum_detail_id);
            }else{
                $result = $this->MSudi->AddData('foto_kamar', $insert);
                redirect(site_url('Photos/index/').$informasi_umum_detail_id);
            }
        }
    }

    // public function AddGeneralInformation()
    // {

    //     $add['tipe_properti_id'] = $this->input->post('tipe_properti_id');
    //     $add['nama_properti'] = $this->input->post('nama_properti');
    //     $add['nama_badan_hukum'] = $this->input->post('nama_badan_hukum');
    //     $add['alamat_jalan'] = $this->input->post('alamat_jalan');
    //     $add['kode_pos'] = $this->input->post('kode_pos');
    //     $add['no_telp'] = $this->input->post('no_telp');
    //     $add['jumlah_kamar'] = $this->input->post('jumlah_kamar');
    //     $add['flag_chanel_manager'] = $this->input->post('flag_chanel_manager');
    //     $add['created_by'] = 1;
    //     $add['created_date'] = date("Y-m-d H:i:s");
    //     $add['updated_by'] = null;
    //     $add['updated_date'] = null;
    //     $add['deleted_by'] = null;
    //     $add['deleted_date'] = null;
    //     $add['status_id'] = 1;


    //     $informasi_umum_detail_id = $this->MSudi->AddData('informasi_umum_detail', $add);
    //     $add1['informasi_umum_detail_id'] = $informasi_umum_detail_id;
    //     $add1['jenis_kontak'] = $this->input->post('jenis_kontak');
    //     $add1['nama_lengkap'] = $this->input->post('nama_lengkap');
    //     $add1['email'] = $this->input->post('email');
    //     $add1['no_hp'] = $this->input->post('no_hp');
    //     $add1['no_telp_kantor'] = $this->input->post('no_telp_kantor');
    //     $add1['extension'] = $this->input->post('extension');
    //     $add1['jabatan'] = $this->input->post('jabatan');
    //     $add1['flag_fullday'] = $this->input->post('flag_fullday');
    //     $add1['created_by'] = 1;
    //     $add1['created_date'] = date("Y-m-d H:i:s");
    //     $add1['updated_by'] = null;
    //     $add1['updated_date'] = null;
    //     $add1['deleted_by'] = null;
    //     $add1['deleted_date'] = null;
    //     $add1['status_id'] = 1;
    //     $this->MSudi->AddData('informasi_umum_kontak', $add1);
    //     redirect(site_url('General_information/index'));
    // }
}