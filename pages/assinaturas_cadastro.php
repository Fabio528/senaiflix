
<?php
    include('config.php');


    $sql = "SELECT * FROM clientes" ;
    $resultado_clientes = $conn->query($sql);

?>

<form method="post" action="pages/assinaturas_cadastro_salvar.php" class="row">

<div class="form-group">
      <label for="plano" class="form-label">Plano</label>
      <input type="text"  class="form-control" id="plano" name="plano">
</div>

<div class="form-group">
      <label for="id_cliente" class="form-label">Cliente</label>
    <select name="id_cliente">
        <?php
        while($linha = $resultado_clientes->fetch_assoc()){
        ?>
        <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
        <?php
        }
        ?>

    </select>
</div>

<div class="form-group">
    <label for="data_inicio" class="form-control">Data Inicio</label>
    <input id="data_inicio"  class="form-control" type="date" name="data_inicio">
</div>

<div class="form-group">
  <label for="inputAddress" class="form-label">Data Fim</label>
  <input type="date" class="form-control" id="data_fim" name="data_fim">
</div>


<div class="form-group">
  <button type="submit" class="btn btn-primary">Registrar</button>
</div>

</form>
<button type="submit" id="listar" class="btn btn-light"><a href="index.php?pagina=assinaturas_listar">Listar assinaturas</a></button>
