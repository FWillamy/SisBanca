<?php $produtoModelo = $_REQUEST['produtoModelo'];?>

<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Listagem dos Produtos</title>
	</head>
	<body>
		<h1>Listagem dos Produtos</h1>
		<table> <!-- Caso precise de borda: border=1 cellspacing=0 cellpadding=2 bordercolor="666633"-->
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
			<?php foreach ($produtoModelo as $produto): ?>
				<tr>
					<td><?php echo $produto->getId();  ?> </td>
					<td><?php echo $produto->getnomeProduto();  ?> </td>
					<td><?php echo $produto->getdescricaodoProduto();  ?> </td>
					<td><?php echo $produto->getnomeFabricante();  ?> </td>
					<td><?php echo $produto->getdataFabricacao();  ?> </td>
					<td><?php echo $produto->getdataVencimento();  ?> </td>
					<td><?php echo $produto->getnumerodoLote();  ?> </td>
					<td><?php echo $produto->getcategoriaProduto();  ?> </td>
					<td><?php echo $produto->getcomentario();  ?> </td>
					<?php echo "<td valign='top'><a href=Index.php?"; 
					?>

				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>
