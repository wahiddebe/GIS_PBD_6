<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './template/assets/geojson/';
                $config['allowed_types']        = 'geojson';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                       
                        $this->load->view('home', $error);

                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $geojson = $this->upload->data('file_name');
                        
                        $datadb = array (
                            'geojson' => $geojson
                        );

                        $this->db->insert('geojson',$datadb);
                        redirect('home');
                }
        }
}
?>