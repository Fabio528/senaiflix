<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include('../config.php');
    
    
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
    $foto= $_FILES["foto"];
    $status=0; 

    $diretorio_destino = "../uploads/";

    $nome_arquivo = uniqid() . '_' . basename($foto ["name"]);

    $caminho_arquivo = $diretorio_destino . $nome_arquivo;

    $extensoes_permitidas = array("jpg" , "jpeg" , "png");
    $extensao= strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
     
    if (!in_array($extensao, $extensoes_permitidas)){
        echo "Somente arquivos JPG, JPEG, PNG são permitidas";
        exit;
    }

    if(move_uploaded_file($foto ["tmp_name"], $caminho_arquivo)) {
        echo"O arquivo foi enviado com sucesso";
    }else{
        echo "Erro ao enviar arquivo.";
    }


    $sql = "INSERT INTO clientes(nome, foto ,cpf, endereco, bairro, cidade, estado, cep, email, telefone, data_cadastro, data_atualizacao, status) 
    VALUES ('$nome', '$nome_arquivo' ,'$cpf','$endereco','$bairro', '$cidade', '$estado', '$cep', '$email', '$telefone', '$data_cadastro','$data_atualizacao','$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}

    header("location:../index.php?pagina=clientes_listar");
?>