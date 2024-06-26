<?php
//Exemplo de verificação de autenticação
session_start();


// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: pages/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>SenaiFlix</title>
</head>
<body>
   <?php 
    include('header.php')
    ?>

    <div class="container-fluid my-5">
        <?php
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
        $pagePath = "pages/{$pagina}.php";

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<div class='alert alert-danger'>Página não encontrada.</div>";
        }
        ?>
    </div>
</body>
</html>