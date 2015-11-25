<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller extends CI_Controller { 
        
        
        function __construct(){
        parent::__construct();
    }
        
        
        public function home() {
            $this->load->view('home'); } 
            
            
        public function escola(){
            $this->load->view('escola');
        }
        
        public function noticias(){
            $this->load->view('noticias');
        }
        
        public function cadastro(){
            $this->load->view('cadastro');
        }
        
         public function cursos(){
            $this->load->view('cursos'); 
        }
        
        public function login(){
            $this->load->view('login');
        }
        
        public function hiper() {
            $this->load->view('hiper'); } 
            
        public function aquarela() {
            $this->load->view('aquarela'); }
            
        public function pintura() {
            $this->load->view('pintura'); }  
            
        public function manga() {
            $this->load->view('manga'); } 
            
        public function sucesso(){
            $this->load->view('sucess');
        }
        
        public function mostrar(){
            $this->load->model('UsuarioDAO');
            $m = $this->UsuarioDAO;
            $q = $m->queryAll();
            $data['lista'] = $q;
            $this->load->view('lista',$data);
        }
        
        
        public function listarALUNOS(){
            $this->load->model('UsuarioDAO');
            $m = $this->UsuarioDAO;
            $q = $m->listarAlunos();
            $data['lista'] = $q;
            $this->load->view('listalunos',$data);
        }
        
         public function listarprofessor(){
            $this->load->model('UsuarioDAO');
            $m = $this->UsuarioDAO;
            $q = $m->listarProfessores();
            $data['lista'] = $q;
            $this->load->view('listaprofessor',$data);
        }
        
        
          public function listarcoordenador(){
            $this->load->model('UsuarioDAO');
            $m = $this->UsuarioDAO;
            $q = $m->listarCoordenadores();
            $data['lista'] = $q;
            $this->load->view('listacoordenador',$data);
        }
        
        
        
        public function doPost(){
        	require_once APPPATH."models/UsuarioM.php";
		    $this->load->model('UsuarioDAO');
		    $m = $this->UsuarioDAO;
		    $nome = $_POST["nome"];
		    $sobrenome = $_POST["sobrenome"];
		    $email = $_POST["email"];
		    $senha = $_POST["senha"];
		    $curso = $_POST["curso"];
		    $cargo = $_POST["cargo"];
		    $f = new Fabrica();
		    $cadastro = $f->registrar($cargo, $nome, $sobrenome, $email, $senha, $curso);
		    $m->insert($cadastro);
		    redirect("/controller/sucesso");
	}
        
        
       
    }
?>

