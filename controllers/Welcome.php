<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function teste(){
		echo $this->session->userdata("_ID");
		
	}
	
	public function sess(){
		$this->session->set_userdata("_ID"."123");
		echo "Session setada com sucesso";
	}

	public function index()
	{
		$this->load->view('home');
	}
	
	
}
