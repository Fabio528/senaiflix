<?php
    
    include('../config.php');
    
        $id_cliente=$_POST['id_cliente'] ;
        $plano=$_POST['plano'];
        $data_inicio=$_POST['data_inicio'];
        $data_fim=$_POST['data_fim'];
        $data_cadastro=date("Y-m-d H:i:s");
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=0; 

        $sql = "INSERT INTO assinaturas (id_cliente, plano, data_inicio, data_fim,   data_cadastro, data_atualizacao, status) 
        VALUES ('$id_cliente', '$plano', '$data_inicio', '$data_fim',  '$data_cadastro',  '$data_atualizacao', '$status')"; 
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }
        header("location:../index.php?pagina=assinaturas_listar");

  
    

?>    