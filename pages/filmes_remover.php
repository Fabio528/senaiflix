<?php
include('../config.php');

$id = $_GET['id'];
$sql="DELETE FROM filmes WHERE id='$id'";
$conn->query($sql);

header("location:../index.php?pagina=filmes_listar");



?>