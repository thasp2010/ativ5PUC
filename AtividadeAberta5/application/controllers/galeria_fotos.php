<?php

class Galeria_fotos extends CI_Controller {

    function Upload() {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('galeria_fotos/index', array('error' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = './assets/';
        $config['file_name'] = '';   
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('galeria_fotos', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            redirect('index', $data);
        }
    }

}
