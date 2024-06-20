<?php
include('../config.php');

$id = $_GET['id'];
$sql="DELETE FROM usuarios WHERE id='$id'";
$conn->query($sql);

header("location:../index.php?pagina=usuario_listar");



?>