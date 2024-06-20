<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="../autenticar.php" method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Email" id="senha" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" id="button_login"class="btn btn-primary">Submit</button>
</form>
</body>
</html>