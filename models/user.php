<?php

// Classe do banco de dados
class Usuario{
    
    // atributo nome
    public $nome,$idade,$email;
    
    // construtor
    public function __construct($nome,$email,$idade){
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }
}
