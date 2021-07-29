<?php
class MLogin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GoLogin($email, $password)
	{
		$this->db->select('*');
		$this->db->from('master_user');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('role_id', 2);
		$this->db->where('status_id', 1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			$row = $query->row();
			$this->load->library('session');
			$this->session->set_userdata('id', $row->id);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('nama', $row->nama);
			$this->session->set_userdata('role_id', $row->role_id);
			$this->session->set_userdata('foto', $row->foto);
			return $row->id;
		} else {
			return false;
		}
	}
}