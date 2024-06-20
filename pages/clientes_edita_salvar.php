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
        $foto= $_FILES["foto"];
        $status=0;


        $diretorio_destino = "../uploads/";


        $query = "SELECT foto FROM clientes WHERE id='$id'";
        $resultado = $conn->query($query);
        $linha= $resultado->fetch_assoc();
        
        unlink($diretorio_destino.$linha['foto']);
        

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
        
    
        $sql = "UPDATE clientes SET nome='$nome', cpf='$cpf', foto='$nome_arquivo' ,endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' ,email='$email', telefone='$telefone', data_atualizacao='$data_atualizacao' WHERE id='$id'";
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }

        header("location:../index.php?pagina=clientes_listar");
    

?>
 