<?php
    class UsuarioDAO extends CI_Model{
        public function insert($cadastro){
            
		    
		    if($cadastro instanceof Aluno){
		        
		        $inserirUSUARIO = array('nm_usuario' => $cadastro->email,
                'nm_senha' => $cadastro->senha);
             
             	$this->db->insert('Usuario',$inserirUSUARIO);
		        
		        $inserirALUNO = array('nm_aluno' => $cadastro->nome,
		        'nm_sobrenome' => $cadastro->sobrenome,
		        'ds_curso' => $cadastro->curso);
		        
		        $this->db->insert('Aluno',$inserirALUNO);
		        
		    }
		    
		    if($cadastro instanceof Professor){
		        
		        $inserirUSUARIO = array('nm_usuario' => $cadastro->email,
                'nm_senha' => $cadastro->senha);
            
		        $this->db->insert('Usuario',$inserirUSUARIO);
		        
		        $inserirPROFESSOR = array('nm_professor' => $cadastro->nome,
		        'nm_sobrenome' => $cadastro->sobrenome,
		        'ds_curso' => $cadastro->curso);
		        
		        $this->db->insert('Professor',$inserirPROFESSOR);
		    }
		    
		    if($cadastro instanceof Coordenador){
		        
		        $inserirUSUARIO = array('nm_usuario' => $cadastro->email,
                'nm_senha' => $cadastro->senha);
            
		        $this->db->insert('Usuario',$inserirUSUARIO);
		        
		        $inserirCOORDENADOR = array('nm_coordenador' => $cadastro->nome,
		        'nm_sobrenome' => $cadastro->sobrenome,
		        'ds_curso' => $cadastro->curso);
		        
		        $this->db->insert('Coordenador',$inserirCOORDENADOR);
		    }
	    }
	    
	    public function queryAll(){
	        $res = $this->db->query("Select * from Usuario");
	        return $res->result();
	    }
	    
	        public function listarAlunos(){
        
        $query = $this->db->query("Select * from Aluno");
        
        return $query->result();
    }
    
    
           public function listarProfessores(){
        
        $query = $this->db->query("Select * from Professor");
        
        return $query->result();
    }
    
      public function listarCoordenadores(){
        
        $query = $this->db->query("Select * from Coordenador");
        
        return $query->result();
    }
    
    
    }