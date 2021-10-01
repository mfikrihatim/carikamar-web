<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('MSudi');
	}
	public function index($id_general_information = null)
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		// $data['CurrentUrl']             = null;
	    $data['CurrentUrl']             = $id_general_information;
		$data['DataMasterProperti']     = null;
		$data['DataMasterKontak']       = null;
		$data['DataInformationDetail'] = $this->MSudi->GetDataWhere('informasi_umum_detail', 'status_id', 1)->result();
		$data['DataInformationDetailEdit'] = $this->MSudi->query_manual("SELECT * FROM tipe_kamar WHERE status_id = 1 AND informasi_umum_detail_id = '$id_general_information'")->result();
		$data['DataMasterTipeKamar'] = $this->MSudi->GetDataWhere('master_tipe_kamar', 'status_id', 1)->result();
		$data['DataMasterTipeKasur'] = $this->MSudi->GetDataWhere('master_tipe_kasur', 'status_id', 1)->result();
		// print_r($data['DataInformationDetailEdit']); die;
		$data['content'] = 'list-rooms';
		$this->load->view('welcome_message', $data);

		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddTipeKamar()
	{

		$add['informasi_umum_detail_id'] = $this->input->post('informasi_umum_detail_id');
		$add['nama_kamar'] = $this->input->post('nama_kamar');
		$add['master_tipe_kamar_id'] = $this->input->post('master_tipe_kamar_id');
		$add['master_tipe_kasur_id'] = $this->input->post('master_tipe_kasur_id');
		$add['maksimum_kapasitas'] = $this->input->post('maksimum_kapasitas');
		$add['maksimum_extra_bed'] = $this->input->post('maksimum_extra_bed');
		$add['harga_extra_bed'] = $this->input->post('harga_extra_bed');
		$add['ukuran_kamar_lebar'] = $this->input->post('ukuran_kamar_lebar');
		$add['ukuran_kamar_panjang'] = $this->input->post('ukuran_kamar_panjang');
		$add['harga_kamar'] = $this->input->post('harga_kamar');
		$add['flag_included_breakfast'] = $this->input->post('flag_included_breakfast');
		$add['jumlah_kamar'] = $this->input->post('jumlah_kamar');


		foreach ($add['nama_kamar'] as $index => $data) {
			$insert = array(
				'informasi_umum_detail_id' => $add['informasi_umum_detail_id'][$index],
				'nama_kamar' => $add['nama_kamar'][$index],
				'master_tipe_kamar_id' => $add['master_tipe_kamar_id'][$index],
				'master_tipe_kasur_id' => $add['master_tipe_kasur_id'][$index],
				'maksimum_kapasitas' => $add['maksimum_kapasitas'][$index],
				'maksimum_extra_bed' => $add['maksimum_extra_bed'][$index],
				'harga_extra_bed' => $add['harga_extra_bed'][$index],
				'ukuran_kamar_lebar' => $add['ukuran_kamar_lebar'][$index],
				'ukuran_kamar_panjang' => $add['ukuran_kamar_panjang'][$index],
				'harga_kamar' => $add['harga_kamar'][$index],
				'flag_included_breakfast' => $add['flag_included_breakfast'][$index],
				'jumlah_kamar' => $add['jumlah_kamar'][$index],
				'created_by' => 1,
				'created_date' => date("Y-m-d H:i:s"),
				'updated_by' => null,
				'updated_date' => null,
				'deleted_by' => null,
				'deleted_date' => null,
				'status_id' => 1,
			);
			$this->MSudi->AddData('tipe_kamar', $insert);
		}

		redirect(site_url('Room/index'));
	}

	public function SaveTipeKamar()
	{

		$informasi_umum_detail_id = $this->input->post('informasi_umum_detail_id');
		$tipe_kamar_id = $this->input->post('id');
		$add['id'] = $this->input->post('id');
		$add['nama_kamar'] = $this->input->post('nama_kamar');
		$add['master_tipe_kamar_id'] = $this->input->post('master_tipe_kamar_id');
		$add['master_tipe_kasur_id'] = $this->input->post('master_tipe_kasur_id');
		$add['maksimum_kapasitas'] = $this->input->post('maksimum_kapasitas');
		$add['maksimum_extra_bed'] = $this->input->post('maksimum_extra_bed');
		$add['harga_extra_bed'] = $this->input->post('harga_extra_bed');
		$add['ukuran_kamar_lebar'] = $this->input->post('ukuran_kamar_lebar');
		$add['ukuran_kamar_panjang'] = $this->input->post('ukuran_kamar_panjang');
		$add['harga_kamar'] = $this->input->post('harga_kamar');
		$add['flag_included_breakfast'] = $this->input->post('flag_included_breakfast');
		$add['jumlah_kamar'] = $this->input->post('jumlah_kamar');


		foreach ($add['nama_kamar'] as $index => $data) {
			$insert = array(
				// 'id' => $tipe_kamar_id[$index],
				'informasi_umum_detail_id' => $informasi_umum_detail_id[$index],
				'nama_kamar' => $add['nama_kamar'][$index],
				'master_tipe_kamar_id' => $add['master_tipe_kamar_id'][$index],
				'master_tipe_kasur_id' => $add['master_tipe_kasur_id'][$index],
				'maksimum_kapasitas' => $add['maksimum_kapasitas'][$index],
				'maksimum_extra_bed' => $add['maksimum_extra_bed'][$index],
				'harga_extra_bed' => $add['harga_extra_bed'][$index],
				'ukuran_kamar_lebar' => $add['ukuran_kamar_lebar'][$index],
				'ukuran_kamar_panjang' => $add['ukuran_kamar_panjang'][$index],
				'harga_kamar' => $add['harga_kamar'][$index],
				'flag_included_breakfast' => $add['flag_included_breakfast'][$index],
				'jumlah_kamar' => $add['jumlah_kamar'][$index],
				'created_by' => 1,
				'created_date' => date("Y-m-d H:i:s"),
				'updated_by' => null,
				'updated_date' => null,
				'deleted_by' => null,
				'deleted_date' => null,
				'status_id' => 1,
			);
			
			// print_r($add['flag_included_breakfast'][$index]);

			// Jika tipe kamar id nya kosong maka akan insert kamar baru
			if($tipe_kamar_id[$index] == null || $tipe_kamar_id[$index] == ''){
				$this->MSudi->AddData('tipe_kamar', $insert);
			}else{
			   $this->MSudi->UpdateData('tipe_kamar', 'id', $add['id'][$index], $insert);       
			}

			// $this->MSudi->AddData('tipe_kamar', $insert);
		}
		$result = array(
			'informasi_umum_detail_id' => $informasi_umum_detail_id,
			'id' => $tipe_kamar_id
		);
		echo json_encode($result);
		// redirect(site_url('Room/index'));
	}
}
