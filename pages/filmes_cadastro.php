<form method="post" action="pages/filmes_cadastro_salvar.php" class="row">

    <div class="form-group">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text"  class="form-control" id="titulo" name="titulo">
    </div>

    <div class="form-group">
        <label for="descricao "  class="form-label">Descrição</label>
        <input id="descricao "  class="form-label" type="text" name="descricao">
    </div>

    <div class="form-group">
      <label for="ano_lancamento" class="form-label">Ano de lançamento</label>
      <input type="text" class="form-control" id="ano_lancamento " name="ano_lancamento">
    </div>

    <div class="form-group">
      <label for="ano_lancamento" class="form-label">Genêro</label>
      <input type="text" class="form-control" id="ano_lancamento " name="genero" >
    </div>

    <div class="form-group">
      <label for="classificacao" class="form-label">Classificação</label>
      <input type="text" class="form-control" id="classificacao " name="classificacao">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>

</form>
  <button type="submit" id="listar" class="btn btn-light"><a href="index.php?pagina=filmes_listar">Listar clientes</a></button>
