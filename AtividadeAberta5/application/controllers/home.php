<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }

   public function inicio($login){
       $this->load->model('participantes_model');
       $dados['dados'] = $this->participantes_model->getDados($login);
       $this->load->view('partes/cabecalho',$dados);
       $this->load->view('index',$dados);
   }
 
   public function logout(){
       redirect($uri='http://localhost/AtividadeAberta5/');
   }

}
