<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $usu vem do controller
    public function insert(Usuario $usu){
        
        // insere seu registro no banco de dados
        $this->db->insert('Usuario',$usu);
    }
    
    public function searchAll(){
        // faz a consulta no banco de dados
        $query =  $this->db->query("Select * from Usuario");
        
        // manda o resultado da consulta (query) para o controller
        return $query->result();
    }
    
}