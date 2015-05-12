<?php


/**
 * Description of participantes_model
 *
 * @author Thais
 */
class Participantes_model  extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }
    
    public function SalvarParticipante($participantes){
        
        return $this->db->insert ('participantes', $participantes);
    }
    
    public function getEstados(){
        $this->db->select('*');
        $this->db->from('estados');
        return $this->db->get()->result();
        
    }
    
     public function getCidades(){
        $this->db->select('*');
        $this->db->from('cidades');
        return $this->db->get()->result();
    }
    
    public function editar($login){
        $this->db->select('*');
        $this->db->from('participantes');
        $this->db->where('login',$login);
        return $this->db->get()->row();
    }
    
    public function atualizar($dados){
       $this->db->where('login',$dados['login']);
       return $this->db->update('participantes',$dados);
       
     
    }
  
    public function getDados($login){
        $this->db->select('participantes.arquivoFoto,
                           participantes.login,
                           participantes.senha,
                           participantes.nomeCompleto,
                           participantes.cidade,
                           participantes.email,
                           participantes.descricao,
                           cidades.CODIGO_CIDADE,
                           cidades.CODIGO_ESTADO,
                           cidades.NOME as nomecid,
                           estados.CODIGO_ESTADO,
                           estados.SIGLA,
                           estados.NOME as nomeest');
        $this->db->from('participantes');
        $this->db->join('cidades','cidades.CODIGO_CIDADE = participantes.cidade');
        $this->db->join('estados','estados.CODIGO_ESTADO = cidades.CODIGO_CIDADE');
        $this->db->where('login',$login);
        return $this->db->get()->row();
    }
}
