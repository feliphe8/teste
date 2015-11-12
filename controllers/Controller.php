<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller extends CI_Controller { 
        
        
        function __construct(){
        parent::__construct();
    }
        
        
        public function index() {
            $this->load->view('home'); } 
            
            
        public function empresa(){
            $this->load->view('pag1');
        }
        
        public function noticias(){
            $this->load->view('pag2');
        }
        
        public function contato(){
            $this->load->view('form');
        }
        
         public function ola(){
            $this->load->view('testeimg'); 
        }
        
        public function test(){
            $this->load->view('lista');
        }
        
        
        
        
        public function doPost(){
		// controller enxergar o model
		// APPPATH onde esta o codeIgnitor
		require_once APPPATH."models/user.php";
		// 'model' eh o Model, aqui passa com letra minuscula
		$this->load->model('model');
		$m = $this->model;
		// "nome" eh o nome do campo do formulario que estou extraindo a informacao para gravar no banco
		$m->insert(new Usuario($_POST["nome"],$_POST["email"],$_POST["idade"]));
		// new Usuario eh a classe Usuario de user.php
	}
        
        
        public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuarios = $m->searchAll();
		$data['usuarios'] = $usuarios;
		$this->load->view('lista',$data);
	//	print_r($usuarios);
		
		
	}
    }
?>

