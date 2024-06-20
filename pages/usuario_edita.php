<?php 
include('config.php');

$id= $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id='$id'";
$resultado = $conn->query($query);
$linha= $resultado->fetch_assoc();

?>

<h1>Atualizar registros</h1>

<form method="post"  action="pages/usuario_edita_salvar.php?id=<?php echo $linha['id']?>" class="row g-3" enctype="multipart/form-data">
  <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome']?>">
  </div>

  <div class="input-box">
        <label for="usuario">usuario</label>
        <input id="usuario" type="text" name="usuario"  value="<?php echo $linha['usuario']?>">
  </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">usuario</label>
      <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $linha['senha']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $linha['email']?>">
    </div>

    <div class="form-group">
    <label for="permissao" class="form-label">Permissão</label>
    <select name="permissao" id="permissao" value="<?php echo $linha['permissao']?>">
    <option value="0">Usuario </option>
    <option value="1">Administrador </option>
    </select>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>

<a href="index.php?pagina=usuario_listar">Listar usuários</a>