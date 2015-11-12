<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Outroimg extends CI_Controller { 
        
        
        function __construct(){
        parent::__construct();
    }
        
        
        public function ola() {
            $this->load->view('testeimg'); } 
            
        
    }
?>