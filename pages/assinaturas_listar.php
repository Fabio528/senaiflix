<?php
    include('config.php');

    $sql = "SELECT  A.id, A.id_cliente, A.plano, A.data_inicio, A.data_fim, A.data_cadastro, A.data_atualizacao, A.status, C.id, C.nome as nome_cliente
              FROM  assinaturas A 
              LEFT JOIN clientes C 
              ON A.id_cliente=C.id" ;
    $resultado = $conn->query($sql);

    


?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<table class="table table-striped-columns">
    <h1>LISTA DE FILMES</h1>
    <tr>
        <th>ID</th>
        <th>ID_Cliente</th>
        <th>Plano</th>
        <th>data Inicio </th>
        <th>Data Fim</th>
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
                <td>".$linha['nome_cliente']."</td>
                <td>".$linha['plano']."</td>
                <td>".$linha['data_inicio']."</td>
                <td>".$linha['data_fim']."</td>
                <td>".$linha['data_cadastro']."</td>
                <td>".$linha['data_atualizacao']."</td>
                <td>".$linha['status']."</td>
                <td><a href='index.php?pagina=assinaturas_edita&id=".$linha['id']."'>Editar</a></td>
                <td><a href='pages/assinaturas_remover.php?id=".$linha['id']."'>Remover</a></td>
            </tr>";
        }
    ?>
    </table>
    <a href="index.php?pagina=assinaturas_cadastro">Cadastrar Assinatura</a>
   