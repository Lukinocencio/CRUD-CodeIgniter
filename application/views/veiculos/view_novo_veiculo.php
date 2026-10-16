<div class="card">
  <div class="card-header">Formulario de Veiculos
  <a href="<?php echo base_url("veiculos/consulta");?>">
  <i class="fa fa-search-plus" style="font-size:36px"></i> Pesquisar </a>

  </div>
  <div class="card-body">

  <form action="<?php echo base_url("/veiculos/confirma");?>" method="post">
  
  <p>Placa
      <input class="form-control" type="text" name="placa">
  </p>

  <p>Marca
      <input class="form-control" type="text" name="marca">
  </p>

  <p>Modelo
      <input class="form-control" type="text" name="modelo">
  </p>

  <p>Ano
      <input class="form-control" type="text" name="ano">
  </p>

  <p>Cor
      <input class="form-control" type="text" name="cor">
  </p>
  


  </div>
  <div class="card-footer">
      
    <button type="submit" class='btn btn-success'>Confirma</button>
  </div>
  </form>
</div>