<?php
    include('config.php');

    $sql = "SELECT * FROM clientes" ;
    $resultado = $conn->query($sql);
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<table class="table table-striped-columns">
    <h1>LISTA DE CLIENTES</h1>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Foto</th>
        <th>Cpf</th>
        <th>Cep</th>
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
                <td>".$linha['nome']."</td>
                <td> <img src='uploads/".$linha['foto']."' heigth= '100px' width='100px'></td>
                <td>".$linha['cpf']."</td>
                <td>".$linha['cep']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td><a href='index.php?pagina=clientes_edita&id=".$linha['id']."'>Editar</a></td>
                <td><a href='pages/clientes_remover.php?id=".$linha['id']."'>Remover</a></td>
            </tr>";
        }
    ?>
    </table>
    <a href="index.php?pagina=clientes_cadastro">Cadastrar cliente</a>
   