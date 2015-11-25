<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $usu vem do controller
    public function insert(Usuario $usu){
        
        // insere seu registro no banco de dados
        $this->db->insert('Usuario',$usu);
    }
    
    
    public function getUser($login,$senha){
        $this->db->where('nm_usuario',$login);
		$this->db->where('nm_senha',$senha);
		$a = $this->db->get('Usuario');
		if ($a->num_rows() > 0){
			if($a->res()->nm_usuario === "root@hotmail.com"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
}
    public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from Usuario");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    

}