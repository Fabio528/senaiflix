<?php
include('../config.php');

$id = $_GET['id'];
$sql="DELETE FROM assinaturas WHERE id='$id'";
$conn->query($sql);

header("location:../index.php?pagina=assinaturas_listar");



?>