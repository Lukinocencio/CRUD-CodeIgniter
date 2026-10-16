<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller 
{
    private $link = "veiculos/";
    private $tabela = "veiculos";


    public function index()
    {
        $dados["arquivo"] = $this->link."view_novo_veiculo";
		$dados["titulo"]  = "Adicionar Veiculos";

		$this->load->view("view_principal",$dados);
	}

    public function confirma()
    {
        if($this->input->post("placa") != NULL)
        {
    	    $placa = $this->input->post("placa");
            $marca = $this->input->post("marca");
            $modelo = $this->input->post("modelo");
            $ano = $this->input->post("ano");
            $cor = $this->input->post("cor");

            $dados = array("placa"  => $placa,
                               "marca"  => $marca,
                               "modelo" => $modelo,
                               "ano"    => $ano,
                               "cor"    => $cor);

            $resultado = $this->db->insert($this->tabela,$dados);
            
            if($resultado == true)
            {
                redirect($this->link."consulta");
            }
            else
            {
                $this->load->view($this->link."/view_erro_cadastro");
            }
            
        }
        else
        {
            $dados["arquivo"] = $this->link."/view_erro_cadastro";
            $dados["titulo"]  = "Adicionar Veiculos";
            $this->load->view("view_principal",$dados);
        }

    }

    public function consulta()
    {
        $dados["arquivo"] = $this->link."view_consulta_veiculos";
        
        $dados["titulo"]  = "Relação de veiculos";

        $dados["resultado"] = $this->db->get($this->tabela)->result();

        $this->load->view("view_principal",$dados);

    }


    public function excluir($placa)
    {
          $this->db->where("placa","$placa")->delete("veiculos");  

          //ou
          //$sql = "delete from veiculos where placa='$placa'";
          //$this->db->query($sql);

          redirect($this->link."consulta");

    }
   
   public function editar($placa)
    {
          
        $dados["arquivo"] = $this->link."view_edita_veiculos";
        
        $dados["titulo"]  = "Editar veiculo - placa: $placa";

        $dados["resultado"] = $this->db->where("placa","$placa")->get($this->tabela);


        $this->load->view("view_principal",$dados);  

    }
}