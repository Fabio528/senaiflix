<form method="post" action="pages/usuario_cadastro_salvar.php" class="row">

<div class="form-group">
      <label for="nome" class="form-label">Nome</label>
      <input type="text"  class="form-control" id="nome" name="nome" required>
</div>

<div class="form-group">
  <label for="inputAddress" class="form-label">Usuario</label>
  <input type="text" class="form-control" id="usuario" name="usuario" required>
</div>

<div class="form-group">
  <label for="inputAddress" class="form-label">Senha</label>
  <input type="password" class="form-control" id="senha" name="senha" required>
</div>

<div class="form-group">
  <label for="inputAddress" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email"required>
</div>

<div class="form-group">
  <label for="permissao">Permissão</label>
  <select name="permissao" class="custom-select">
      <option selected> selecione  a sua permissão </option>  
      <option value="0">Usuario </option>
      <option value="1">Administrador </option>
    </select>
  
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Registrar</button>
</div>

</form>
<button type="submit" id="listar" class="btn btn-light"><a href="index.php?pagina=usuario_listar">Listar usuario</a></button>