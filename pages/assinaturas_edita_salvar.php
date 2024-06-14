<?php
    
    include('../config.php');

        $id=$_GET['id'];
        $plano=$_POST['plano'];
        $data_inicio=$_POST['data_inicio'];
        $data_fim=$_POST['data_fim'];
        $data_cadastro=date("Y-m-d H:i:s");
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=0; 

        $sql = "UPDATE assinaturas SET plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim', data_atualizacao='$data_atualizacao'  WHERE id='$id'";
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }

        header("location:../index.php?pagina=assinaturas_listar");
    

?>    