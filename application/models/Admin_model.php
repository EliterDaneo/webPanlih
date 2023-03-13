<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

  public function daftarCalonPanlih()
	{
		$this->db->select('*');
		$this->db->from('tbl_panlih');
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
	}

	public function addCalonPanlih($data)
	{
		$this->db->insert('tbl_panlih', $data);
	}

	public function detaiCalonPanlih($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_panlih');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}

	public function editCalonPanlih($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tbl_panlih', $data);
	}

	public function deleteCalonPanlih($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('tbl_panlih', $data);
	}
}