<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    public function action($username,$password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where( array(
            'username' => $username,
            'password' => md5($password)

        ) );

        return $this->db->get()->row();
        
        
        
    }

}

/* End of file M_auth.php */
