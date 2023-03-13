<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
  public function daftarCalonPanlih()
  {
    $this->db->select('*');
    $this->db->from('tbl_panlih');
    $this->db->order_by('id', 'asc');
    $this->db->limit(3);
    return $this->db->get()->result();
  }

  public function allDaftarCalonPanlih()
  {
    $this->db->select('*');
    $this->db->from('tbl_panlih');
    $this->db->order_by('id', 'asc');
    return $this->db->get()->result();
  }

  public function detailCalonPanlih($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_panlih');
      $this->db->where('id', $id);
      return $this->db->get()->result();
    }
}