<?php

/**
 * Description of cadastro_participantes
 *
 * @author Thais
 */
class cadastro_participantes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('participantes_model');
        $this->load->model('home_model');
    }

    public function index() {
        $data['estados'] = $this->participantes_model->getEstados();
        $data['cidades'] = $this->participantes_model->getCidades();
        $this->load->view('participantes/cadastro_participantes', $data);
    }

    public function salvarParticipante() {

        $participante = array(
            "login" => $this->input->POST('Login'),
            "senha" => $this->input->POST('Senha'),
            "nomeCompleto" => $this->input->POST('Nome'),
            "arquivoFoto" => $this->input->POST('imagem'),
            "cidade" => $this->input->POST('Cidade'),
            "email" => $this->input->POST('Email'),
            "descricao" => $this->input->POST('descricao'),
        );

        $resultado = $this->participantes_model->salvarParticipante($participante);


        if ($resultado) {
            $dados['msg'] = " Salvo com sucesso";
        } else {
            $dados['erro'] = "Erro ao salvar ";
        }

        $this->load->view('participantes/cadastro_participantes');
    }

    public function editar($login) {
        $data['estados'] = $this->participantes_model->getEstados();
        $data['cidades'] = $this->participantes_model->getCidades();
        $data['info'] = $this->participantes_model->editar($login);
        $this->load->view('participantes/atualizar', $data);
    }

    public function atualizar() {
        $dados = array(
        'login' => $this->input->POST('Login'),   
        'senha' => $this->input->POST('Senha'),
        "nomeCompleto" => $this->input->POST('Nome'),
        "cidade" => $this->input->POST('Cidade'),
        "email" => $this->input->POST('Email'),
        "descricao" => $this->input->POST('descricao'),
        );
        
        $this->participantes_model->atualizar($dados);
        redirect($uri='http://localhost/atividadeaberta5');
       
        
    }

}
