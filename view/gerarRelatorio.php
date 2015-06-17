<?php $produtoModelo = $_REQUEST['produtoModelo']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela de Relatório</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    <br>
    <br>
     <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Menu</a>
    <h1 id="titulo">Gerar Relatório</h1>	
    <br>
    <form style="width:500px" action="Index.php?class=produto&acao=relatorio" method="POST">
    	<fieldset>
    		<legend>Critérios</legend>
    		Categoria do Produto:
    		<select name="categoriaproduto">
                        <option value="revista">Revista</option>
                        <option value="cigarro">Cigarro</option>
                        <option value="jornal">Jornal</option>
                        <option value="dvd">DVD</option>
            </select>
            <br>
            Data de Vencimento<br><input type="date" name="datavencimento"><br>
            Número do Lote:<br><input type="text" name="numerolote" placeholder="Informer o número do lote...">
    	</fieldset>
    	<br><input type="submit" name="gRelatorio" value="Gerar Relatório" class="btn"></a>
    </form>

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

