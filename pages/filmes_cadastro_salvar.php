<?php
    
    include('../config.php');

        $titulo =$_POST['titulo'];
        $descricao=$_POST['descricao'];
        $ano_lancamento =$_POST['ano_lancamento'];
        $genero =$_POST['genero'];
        $classificacao =$_POST['classificacao'];
        $data_cadastro=date("Y-m-d H:i:s");
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=0; 

        $sql = "INSERT INTO filmes(titulo, descricao, ano_lancamento, genero, classificacao , data_cadastro, data_atualizacao, status) 
        VALUES ('$titulo', '$descricao', '$ano_lancamento', '$genero',  '$classificacao',  '$data_cadastro',  '$data_atualizacao', '$status')"; 
    
        if($conn->query($sql)==TRUE){
            echo "<h1>Registro atualizado com sucesso</h1>";
        }else{
            echo "Erro ao editar";
        }
        header("location:../index.php?pagina=filmes_listar");

  
    

?>    