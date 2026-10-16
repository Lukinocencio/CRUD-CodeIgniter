
<br>

<div class="card">
  <div class="card-header">Veiculos | <a href="<?php echo base_url("veiculos");?>">
  <i class="fa fa-plus-circle" style="font-size:36px"></i> Novo veiculo </a></div>
  <div class="card-body">
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Cor</th>
        <th>Excluir</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($resultado as $linha)
        {
            echo "<tr>
                <td>$linha->placa</td>
                <td>$linha->marca</td>
                <td>$linha->modelo</td>
                <td>$linha->ano</td>
                <td>$linha->cor</td>
                <td><a href='".base_url("veiculos/excluir/".$linha->placa)."' class='btn btn-danger'>Excluir</a></td>

                <td><a href='".base_url("veiculos/editar/".$linha->placa)."' class='btn btn-warning'>Editar</a></td>
            </tr>";
        }
    ?>
    </tbody>
    </table>


  </div>
  <div class="card-footer">
      
    <a href="<?php echo base_url("veiculos");?>" class='btn btn-success'>Voltar</a>
  </div>
  </form>
</div>