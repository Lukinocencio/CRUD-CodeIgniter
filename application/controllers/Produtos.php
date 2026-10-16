<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_produtos');

	}

	public function novo()
	{
		$this->load->view('view_novo_produtos');
	}

	public function confirma()
	{
		echo "Confirma cadastro";

		$dados = array("nome" => $this->input->post("nome"),
	 					"valor" => $this->input->post("valor"),
					    "foto" => $this->input->post("foto"));
		
		$this->db->insert("produtos",$dados);

		echo "<br>Cadastrado com sucesso!";
	}

	public function excluir()
	{
		echo "Excluir cadastro";
	}

	public function consulta()
	{
		//$resultado = $this->db->where("id","3")->get('produtos')->result();
        
		$sql = "select * from produtos where id=2;";

		$resultado = $this->db->query($sql)->result();
		
		foreach($resultado as $linha)
		{
			echo " $linha->nome <br>";
		}
	}


}