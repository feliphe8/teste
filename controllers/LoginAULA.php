<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAULA extends CI_Controller {

  public function entrar(){
      $this->load->view("formlogin");
  }
  
  public function auth(){
      $nome = $_POST["login"]; //Pega dados do formulário do campo nome
      $senha = $_POST["senha"];
      
        if($nome === "root@hotmail.com" && $senha === "root"){
	    	$this->session->set_userdata("_ID","Admin");
	    	redirect("/login/admin");

    	}else{
	    	$this->session->set_userdata("_ID","Comum");
	    	$this->session->set_userdata("_NOME",$nome);
	    	redirect("/login/comum");
    	}
    
      
 }
 
 public function admin(){
     $a = $this->session->userdata("_ID");
     if($a === "Admin"){
         echo "<h1> BEM-VINDO EU MESMO </h1>";
     }else{
         echo "<h1> VOCE NAO ESTA AUTORIZADO PARA VER ESTA PAGINA </h1>";
     }
 }
 
 public function comum(){
     $nome = $this->session->userdata("_NOME");
     echo "<h1>Bem vindo " . $nome . "</h1>";
 }
 
 public function page(){
    if($this->session->userdata("_NOME") != null){
    echo "<h1>PAGINA DO USUARIO</h1>";
        
    }else{
    redirect("/login/entrar");
    }
 }

 public function logout(){
    $this->session->unset_userdata("_ID");
    $this->session->unset_userdata("_NOME");
    echo "<h1>Ate logo</h1>";
 }
 
 public function nova(){
      $data['nome'] = $this->session->userdata("_NOME");
      if($this->session->userdata("_NOME") != null){
         $this->load->view("comumview",$data);
      }else{
         $this->load->view("visitanteview"); 
      }
 }
	
 }
?>