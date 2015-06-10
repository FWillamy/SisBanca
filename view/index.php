<DOCTYPE html>
<html>
<head>
	<title>SisBanca</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
	<meta charset="utf-8"/>
<body>
		<div id="wrap">
		<h1 id="titulo">SisBanca - Sistema de Gestão Integrado</h1>
		<p>O SisBanca tem como um só objetivo realizar o controle e cadastro de todo os processos de entrada e saída de produto.</p>

		<fieldset style="width:50%">
		<legend>Opções do Sistema</legend>
		<a href="Index.php?class=produto&acao=adicionar">
		<input type="button" name="paginacadastroproduto" value="Cadastrar Produto"></a><br>
		<br><a href="Index.php?class=produto&acao=listar">
		<input type="button" name="paginalistarproduto" value="Listar Todos os Produtos"></a>	
		
		<!--Html responsável por apresentar os butões de funcionário/usuáiro-->
		<a href="Index.php?class=usuario&acao=adicionar">
		<input type="button" name="paginacadastrofuncinario" value="Cadatrar Funcionário" id="buttonCadFun"></a>
		</fieldset>
</body>
</html>