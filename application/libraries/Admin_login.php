<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_auth');
    }

    public function action($username,$password)
    {
        $cek = $this->ci->m_auth->action($username,$password);

        if ($cek) {
            $username = $cek->username;
            $nama_user = $cek->nama_user;

            
            $this->ci->session->set_userdata('username',$username);
            $this->ci->session->set_userdata('nama_user',$nama_user);
            
            redirect('home');
        }
        else {
            $this->ci->session->set_flashdata('pesan', 'username dan password salah');
            redirect('auth');
        }
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username')=="") {
            $this->ci->session->set_flashdata('pesan','Anda Belum Login');
            redirect('auth');
        }

        
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('password');
        $this->ci->session->set_flashdata('pesan','Logout Succes');
        redirect('auth');

    }

}

/* End of file User_login.php */
