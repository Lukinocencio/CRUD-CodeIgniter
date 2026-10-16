<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExemploSessao extends CI_Controller 
{
    
    public function index()
    {
        echo "<h1>Criou uma Sessão </h1>";
       
        $this->session->set_userdata('nome','José da Silva');
        $this->session->set_userdata('idade','30');
	}

    public function mostrar()
    {
        
         echo "<h1>Valor da Sessão </h1>";

         $nome = $this->session->userdata("nome");

         echo "<h2> Seu nome é $nome </h2>";


    }

    public function apagar()
    {

        echo "<h1>Apagou a Sessão </h1>";

        $this->session->unset_userdata("nome");
    }



}