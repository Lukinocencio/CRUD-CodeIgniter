<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	
	public function index()
	{
		$dados["arquivo"] = "/clientes/view_clientes";
		$dados["titulo"]  = "Relação de Clientes";

		$this->load->view("view_admin",$dados);
	}


	
}
