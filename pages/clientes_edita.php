<?php 
include('config.php');

$id= $_GET['id'];
$query = "SELECT * FROM clientes WHERE id='$id'";
$resultado = $conn->query($query);
$linha= $resultado->fetch_assoc();

?>

<h1>Atualizar registros</h1>

<form method="post"  action="pages/clientes_edita_salvar.php?id=<?php echo $linha['id']?>" class="row g-3">
  <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $linha['nome']?>">
  </div>

  <div class="input-box">
        <label for="cpf">CPF</label>
        <input id="cpf" type="text" name="cpf"  placeholder="000.000.000-00" value="<?php echo $linha['cpf']?>">
  </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $linha['endereco']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $linha['bairro']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $linha['cidade']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $linha['estado']?>">
    </div>

    <div class="input-box">
      <label for="inputAddress" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $linha['cep']?>">
    </div>

    <div class="input-box">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="<?php echo $linha['email']?>">
    </div>

    <div class="input-box">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $linha['telefone']?>">
    </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>

<a href="index.php?pagina=clientes_listar">Listar usuários</a>
    