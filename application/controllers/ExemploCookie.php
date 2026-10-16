<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExemploCookie extends CI_Controller 
{
    
    public function index()
    {
        echo "<h1>Criou o Cookie <h1>";
       
        set_cookie("cor","FF0000",3600); //vem do helper do codeigniter

        setcookie("nome","José da Silva",time()+3600);  //nativo do PHP
	}

    public function mostrar()
    {
        
         echo "<h1>Valor do Cookie <h1>";

         $cor = get_cookie("cor");

         echo "<p> A sua cor escolhida é = [$cor]  </p>";

         echo "<p> Ou pegar o nome pelo array global = [".$_COOKIE["nome"]."] </p>";


    }

    public function apagar()
    {

        echo "<h1>Apagou o Cookie <h1>";

        delete_cookie("cor");


    }



}