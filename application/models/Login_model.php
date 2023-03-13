<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($email)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('email', $email);
		return $this->db->get()->row();
	}
}