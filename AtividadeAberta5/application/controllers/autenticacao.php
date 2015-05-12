<?php

/**
 * Description of autenticacao
 *
 * @author Thais
 */
class autenticacao extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index() {

        if(isset($_POST['login'])){
        $login = array(
            "login" => $this->input->POST('login'),
            "senha" => $this->input->POST('senha'),
        );
        setcookie("login",$login['login'], time()+60*60*24*30);
        }
        if (isset($login)) {
            $autentica= $this->home_model->autentica($login);
            
            
            if ($autentica) {
                $dados['dados'] = $autentica;
                $this->load->view('partes/cabecalho',$dados);
                $this->load->view('index',$dados);
                 
                
                 
                
            } else {
                $msg['erro'] = "Usuário ou senha inválidos";
                $this->load->view('login', $msg);
            }
        } else {
                $msg['erro'] = "Usuário ou senha inválidos";
                $this->load->view('login', $msg);
            }
    }
    
    public function inicio(){
        $this->load->view('index');
    }

}
