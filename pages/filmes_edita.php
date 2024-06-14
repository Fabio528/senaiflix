<?php 
include('config.php');

$id= $_GET['id'];
$query = "SELECT * FROM filmes WHERE id='$id'";
$resultado = $conn->query($query);
$linha= $resultado->fetch_assoc();

?>

<h1>Atualizar registros</h1>

<form method="post"  action="pages/filmes_edita_salvar.php?id=<?php echo $linha['id']?>" class="row g-3">
  <div class="col-md-6">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $linha['titulo']?>">
  </div>

  <div class="input-box">
        <label for="inputAddress"  class="form-label">Descrição</label>
        <input id="descricao"   class="form-label" type="text" name="descricao"  value="<?php echo $linha['descricao']?>">
  </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Ano de lançamento</label>
      <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Genêro</label>
      <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $linha['genero']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Clasificação</label>
      <input type="text" class="form-control" id="classificacao" name="classificacao" value="<?php echo $linha['classificacao']?>">
    </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>

<a href="index.php?pagina=filmes_listar">Listar Filmes</a>
    