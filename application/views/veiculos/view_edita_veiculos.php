<div class="card">
  <div class="card-header">Formulario de Veiculos
  <a href="<?php echo base_url("veiculos/consulta");?>">
  <i class="fa fa-search-plus" style="font-size:36px"></i> Pesquisar </a>

  </div>
  <div class="card-body">


  <form action="<?php echo base_url("/veiculos/altera");?>" method="post">
  
  <p>Placa
      <input class="form-control" type="text" name="placa" 
      value="<?php echo $resultado->row()->placa;?>">
  </p>

  <p>Marca
      <input class="form-control" type="text" name="marca" value="<?php echo $resultado->row()->marca;?>">
  </p>

  <p>Modelo
      <input class="form-control" type="text" name="modelo" value="<?php echo $resultado->row()->modelo;?>">
  </p>

  <p>Ano
      <input class="form-control" type="text" name="ano" value="<?php echo $resultado->row()->ano;?>">
  </p>

  <p>Cor
      <input class="form-control" type="text" name="cor" value="<?php echo $resultado->row()->cor;?>">
  </p>
  


  </div>
  <div class="card-footer">
      
    <button type="submit" class='btn btn-success'>Confirma</button>
  </div>
  </form>
</div>