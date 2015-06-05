<DOCTYPE html>
<html>
<head>
	<title>SisBanca - Cadatrar Produto</title>
	<link rel="stylesheet" type="text/css" href="/PHP/SisBanca/css/estilo.css"/>
</head>
	<meta charset="utf-8"/>
	<body>
		<div id="wrap">
	<h1 id="titulo">Cadastrar Produto - SisBAnca</h1>
	<p>Esta pagina tem um só objetivo, que é realizar o cadastro de todos os produtos da empresa.</p>

	<form action="/php/SisBanca/class/controlles/produtoController.php" method="POST">
		<fieldset style="width:50%">
		<legend>Formulário de Cadastrar Produto</legend>
		Nome do Produto:<br><input type="text" name="nomeproduto" size=40 maxlenght=40>
		<br>
		Descrição do Produto:<br><input type="text" name="descricaodoproduto" size=40 maxlenght=40>
		<br>
		Fabricante do Produto:<br><input type="text" name="nomefabricante" size=40 maxlenght=40>
		<br>
		Data de Fabricação:<br><input type="date" name="datafabricacao">
		<br>
		Data de Vencimento:<br><input type="date" name="datavencimento">
		<br>
		Número do Lote de fabricação:<br><input type="text" name="numerodolote">
		<br>
		Tipo da Categoria do Produto:
		<select name="categoriaproduto">
			<option value="categoria1">Categoria1</option>
			<option value="categoria2">Categoria2</option>
			<option value="categoria3">Categoria3</option>
			<option value="categoria4">Categoria4</option>
		</select>
		<br><br>
		Comentário<br><textarea name="comentario" rows=6 cols=40></textarea>
		</fieldset>
		<br><input type="submit" value="Cadastrar Produto" name="Cadastrar" id="botaocadastrar">
		<!--Falta realizar a interação com a classe modelo
		<a href="/php/projeto/index.php">
		<input type="button" value="Voltar" name="voltar" id="botaovoltar"></a> 
		-->
	</form>
		</div>
</body>
</html>