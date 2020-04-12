<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_home');
        
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan Gunung Aktif di Pulau Jawa ',
            'pemetaan' => $this->m_home->tampil(),
            'isi' => 'v_home'
        );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


    public function input()
    {
             
        $this->form_validation->set_rules('nama_gunung', 'Nama Gunung', 'required');
        

        
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data',
                'isi' => 'v_input'
            );
    
            $this->load->view('layout/v_wrapper', $data, FALSE);
            
        } else {

            if ( $this->input->post('status') == "Normal Aktif") {
                $radius=300;
                $warna='blue';
            }
            if ( $this->input->post('status') == "Waspada") {
                $radius=3000;
                $warna='green';
            }
            if ( $this->input->post('status') == "Siaga") {
                $radius=10000;
                $warna='yellow';
            }
            if ( $this->input->post('status') == "Awas") {
                $radius=20000;
                $warna='red';
            }

            $data = array(
                'nama_gunung' =>  $this->input->post('nama_gunung'),
                'keterangan' =>  $this->input->post('keterangan'),
                'radius' =>  $radius,
                'latitude' =>  $this->input->post('latitude'),
                'longitude' =>  $this->input->post('longitude'),
                'warna' => $warna,
                'status' =>  $this->input->post('status')

            );

            $this->m_home->input($data);
            
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan :)');
            
            redirect('home/input');
            
            
        }
    }

    public function tampil()
    {
        $data = array(
            'title' => 'Data Gunung',
            'penyebaran' => $this->m_home->tampil(),
            'isi' => 'v_data_penyebaran'
        );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function edit($id)
    {

            
        $this->form_validation->set_rules('nama_gunung', 'Nama Gunung', 'required');
        

        
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data',
                'data' => $this->m_home->detail($id),
                'isi' => 'v_edit'
            );
    
            $this->load->view('layout/v_wrapper', $data, FALSE);
            
        } else {

            if ( $this->input->post('status') == "Normal Aktif") {
                $radius=300;
                $warna='blue';
            }
            if ( $this->input->post('status') == "Waspada") {
                $radius=3000;
                $warna='green';
            }
            if ( $this->input->post('status') == "Siaga") {
                $radius=10000;
                $warna='yellow';
            }
            if ( $this->input->post('status') == "Awas") {
                $radius=20000;
                $warna='red';
            }

            $data = array(
                'id' => $id,
                'nama_gunung' =>  $this->input->post('nama_gunung'),
                'keterangan' =>  $this->input->post('keterangan'),
                'radius' =>  $radius,
                'latitude' =>  $this->input->post('latitude'),
                'longitude' =>  $this->input->post('longitude'),
                'warna' =>  $warna,
                'status' => $this->input->post('status')
                

            );

            $this->m_home->update($data);
            
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit :)');
            
            redirect('home/tampil');
            
            
        }
    }

    public function delete($id)
    {

        $this->m_home->delete($id);
            
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus :(');
        
        redirect('home/tampil');
    }

    
}

/* End of file Home.php */
