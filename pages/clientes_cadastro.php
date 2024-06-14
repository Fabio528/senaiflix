
  <form method="post" action="pages/clientes_cadastro_salvar.php" class="row">

    <div class="form-group">
          <label for="nome" class="form-label">Nome</label>
          <input type="text"  class="form-control" id="nome" name="nome">
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input id="cpf" type="text" name="cpf" placeholder="000.000.000-00">
    </div>

    <div class="form-group">
      <label for="inputAddress" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua X, 0">
    </div>

    <div class="form-group">
      <label for="inputAddress" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro X, 0">
    </div>

    <div class="form-group">
      <label for="inputAddress" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade Belo Horizonte">
    </div>

    <div class="form-group">
      <label for="inputAddress" class="form-label">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" placeholder="exemplo = MG">
    </div>

    <div class="form-group">
      <label for="inputAddress" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" placeholder="30577-190">
    </div>

    <div class="form-group">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>

    <div class="form-group">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx) 9xxxx-xxxx">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>

</form>
  <button type="submit" id="listar" class="btn btn-light"><a href="index.php?pagina=clientes_listar">Listar clientes</a></button>
