<?php	$usuario = $_REQUEST['usuario']; ?>
<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Listagem dos Usuário</title>
	</head>
	<body>
		<h1>Listagem dos Usuário</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Nome do Produto</th>
				<th>Descriçao do Produto</th>
				<th>Nome do Fabricante</th>
			</tr>
			<?php foreach ($produtoModelo as $produto): ?>
				<tr>
					<td><?php echo $produto->getId();  ?> </td>
					<td><?php echo $produto->getnomeProduto();  ?> </td>
					<td><?php echo $produto->getdescricaodoProduto();  ?> </td>
					<?php echo "<td valign='top'><a href=index.php?"
								."class=Cliente&acao=delete"
								."&valor={$cliente->getId()}>Delete</a></td>"
								."<td><a href=index.php?class=Cliente&acao=selecionar"
								."&valor={$cliente->getId()}>Edit</a></td> "; ?>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>
