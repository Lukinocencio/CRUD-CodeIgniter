<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>CRUD de Veiculos</title>
  <meta charset="utf-8">

  <meta http-equiv="refresh" content="30">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url("home");?>">Sistema</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("veiculos");?>">Veiculos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("clientes");?>">Clientes</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="#">Funcionarios</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  

  <h3>Bem vindos ao Sistema em CodeIgniter</h3>
    
  <?php
      echo "<h2>$titulo</h2>";

       if($arquivo !="")
       {
           $this->load->view($arquivo);
       }
       else
       {
           echo "colocar o logo aqui...";
       }
  ?>
</div>

</body>
</html>
