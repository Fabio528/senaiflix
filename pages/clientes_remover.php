<?php
include('../config.php');

$id = $_GET['id'];
$sql="DELETE FROM clientes WHERE id='$id'";
$conn->query($sql);

header("location:../index.php?pagina=clientes_listar");



?>