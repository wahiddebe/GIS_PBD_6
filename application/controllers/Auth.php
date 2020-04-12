<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Login',
            'isi'   => 'v_login'
        );

        $this->load->view('layout/v_wrapper', $data);
    }

    public function action()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $username= $this->input->post('username');
            $password= $this->input->post('password');
            $this->admin_login->action($username,$password);
            redirect('home');
        } else {
            $data = array(
                'title' => 'Login',
                'isi'   => 'v_login'
            );
    
            $this->load->view('layout/v_wrapper', $data);
        }

    }

    public function logout()
    {
        $this->admin_login->logout();
    }


}

/* End of file Auth.php */
