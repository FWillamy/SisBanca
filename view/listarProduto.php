<?php $produtoModelo = $_REQUEST['produtoModelo']; ?>
<!DOCTYPE>
<html>
    <head>
        <title>SisBanca - Listar Produto</title>
        <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
    </head>
    <body>
        <h1 id="titulo">Listagem dos Produtos</h1>
        <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Menu</a><br><br>
        <br><table> <!-- Caso precise de borda: border=1 cellspacing=0 cellpadding=2 bordercolor="666633"-->
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Descriçao do Produto</th>
                <th>Nome do Fabricante</th>
                <th>Data de Fabricação</th>
                <th>Data de Vencimento</th>
                <th>Numero do Lote</th>
                <th>Categoria do Produto</th>
                <th>Comentário</th>
            </tr>
            <?php foreach ($produtoModelo as $produtoModelo): ?>
                
                    <td><?php echo $produtoModelo->getId(); ?> </td>
                    <td><?php echo $produtoModelo->getnomeProduto(); ?> </td>
                    <td><?php echo $produtoModelo->getdescricaodoProduto(); ?> </td>
                    <td><?php echo $produtoModelo->getnomeFabricante(); ?> </td>
                    <td><?php echo $produtoModelo->getdataFabricacao(); ?> </td>
                    <td><?php echo $produtoModelo->getdataVencimento(); ?> </td>
                    <td><?php echo $produtoModelo->getnumerodoLote(); ?> </td>
                    <td><?php echo $produtoModelo->getcategoriaProduto(); ?> </td>
                    <td><?php echo $produtoModelo->getcomentario(); ?> </td>
                    <?php
                    echo "<td valign='top'><a href=Index.php?class=produto&acao=excluir&valor={$produtoModelo->getId()}>Excluir</a></td>"
                    . "<td valign='top'><a href=Index.php?class=produto&acao=selecionar&valor={$produtoModelo->getId()}>Editar</a>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
