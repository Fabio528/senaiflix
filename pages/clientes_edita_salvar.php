<?php
    
    include('../config.php');

        $id= $_GET['id'];
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $endereco=$_POST['endereco'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        $cep=$_POST['cep'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $data_cadastro=date("Y-m-d H:i:s");
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=0; 

        $sql = "UPDATE clientes SET nome='$nome', cpf='$cpf', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' ,email='$email', telefone='$telefone', data_atualizacao='$data_atualizacao'  WHERE id='$id'";
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }

        header("location:../index.php?pagina=clientes_listar");
    

?>    