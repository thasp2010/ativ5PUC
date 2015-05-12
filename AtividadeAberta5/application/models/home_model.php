<?php



/**
 * Description of home_model
 *
 * @author Thais
 */
class Home_model extends CI_Model{
    
    public function autentica($dados){
        
       
        
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
        $this->db->join('estados','estados.CODIGO_ESTADO = cidades.CODIGO_ESTADO');
        $this->db->where('login',$dados['login']);
        $this->db->where('senha',$dados['senha']);
        return $this->db->get()->row();
        
    }
    
   
}
