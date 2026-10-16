<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$dados["arquivo"] = "";
		$dados["titulo"]  = "";

		$this->load->view("view_principal",$dados);
	}


	
}
