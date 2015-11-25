<?php
    abstract class UsuarioM{
        public $nome, $preco;
        
        public function __construct($nome, $sobrenome,$email,$senha,$curso){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->email = $email;
            $this->senha = $senha;
            $this->curso = $curso;
        }
        
        abstract public function tipo();
    }
    
    class Aluno extends UsuarioM{
       
       public function  tipo(){
            echo "Aluno";
       }
    }
    
    class Professor extends UsuarioM{
        public function  tipo(){
            echo "Professor";
       }
       
    }
    
    class Coordenador extends UsuarioM{
       public function  tipo(){
            echo "Coordenador";
       }
    }
    
  //Fabrica
    class Fabrica{
        public function registrar($cargo, $nome, $sobrenome, $email, $senha, $curso){
            if($cargo === "aluno"){
                return new Aluno($nome, $sobrenome, $email, $senha, $curso);
            }  
            if($cargo === "professor"){
                return new Professor($nome, $sobrenome, $email, $senha, $curso);
            }
            
             if($cargo === "coordenador"){
                return new Coordenador($nome, $sobrenome, $email, $senha, $curso);
            }
        }
    }