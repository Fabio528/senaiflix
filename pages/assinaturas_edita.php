<?php 
include('config.php');

$id= $_GET['id'];
$query = "SELECT * FROM assinaturas WHERE id='$id'";
$resultado = $conn->query($query);
$linha= $resultado->fetch_assoc();

?>

<h1>Atualizar registros</h1>

<form method="post"  action="pages/assinaturas_edita_salvar.php?id=<?php echo $linha['id']?>" class="row g-3">
<div class="form-group">
      <label for="plano" class="form-label">Plano</label>
      <input type="text"  class="form-control" id="plano" name="plano" value="<?php echo $linha['plano']; ?>">
</div>

<div class="form-group">
      <label for="id_cliente" class="form-label">Cliente</label>
    <select name="id_cliente">
        <?php
            $sql = "SELECT * FROM clientes" ;
            $resultado_clientes = $conn->query($sql);
        while($linha_cliente = $resultado_clientes->fetch_assoc()){
        ?>
        <option value="<?php echo $linha_cliente['id']; ?>" <?php echo $linha_cliente['id']==$linha['id_cliente'] ?  'selected="selected"' : '' ?>><?php echo $linha_cliente['nome']; ?></option>
        <?php
        }
        ?>

    </select>
</div>


<div class="form-group">
    <label for="data_inicio" class="form-control">Data Inicio</label>
    <input id="data_inicio"  class="form-control" type="date" name="data_inicio" value="<?php echo $linha['data_inicio']; ?>">
</div>

<div class="form-group">
  <label for="inputAddress" class="form-label">Data Fim</label>
  <input type="date" class="form-control" id="data_fim" name="data_fim" value="<?php echo $linha['data_fim']; ?>">
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>

<a href="index.php?pagina=assinaturas_listar">Listar Planos</a>
    

