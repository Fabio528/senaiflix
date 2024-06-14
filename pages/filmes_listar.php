<?php
    include('config.php');

    $sql = "SELECT * FROM  filmes" ;
    $resultado = $conn->query($sql);
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<table class="table table-striped-columns">
    <h1>LISTA DE FILMES</h1>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Ano de Lançamento </th>
        <th>Genêro</th>
        <th>Classificação</th>
        <th>Data do cadastro</th>
        <th>Data de atualização</th>
        <th>Status</th>
        <th>Editar</th>
        <th>Remover</th><br>
        
    </tr>
   
    <?php
        while($linha = $resultado->fetch_assoc()){
            echo"<tr>
                <td>".$linha['id']."</td>
                <td>".$linha['titulo']."</td>
                <td>".$linha['descricao']."</td>
                <td>".$linha['ano_lancamento']."</td>
                <td>".$linha['genero']."</td>
                <td>".$linha['classificacao']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td><a href='index.php?pagina=filmes_edita&id=".$linha['id']."'>Editar</a></td>
                <td><a href='pages/filmes_remover.php?id=".$linha['id']."'>Remover</a></td>
            </tr>";
        }
    ?>
    </table>
    <a href="index.php?pagina=filmes_cadastro">Cadastrar Filme</a>
   