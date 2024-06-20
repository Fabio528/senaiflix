<?php
include('../config.php');

$id = $_GET['id'];


$query = "SELECT foto FROM clientes WHERE id='$id'";
$resultado = $conn->query($query);
$linha= $resultado->fetch_assoc();

$diretorio_destino = "../uploads/";

unlink($diretorio_destino.$linha['foto']);
        


$sql="DELETE  FROM clientes WHERE id='$id'";
$conn->query($sql);

    
      




header("location:../index.php?pagina=clientes_listar");



?>