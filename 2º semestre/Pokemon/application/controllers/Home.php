<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		if($this->session->has_userdata("logado")){
			echo "home";
		}
		else{
			redirect(base_url("Login"));
		}
	}
}
