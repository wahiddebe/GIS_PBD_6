<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_export extends CI_Model {
  public function view(){
    return $this->db->get('tbl_penyebaran')->result();
  }
}