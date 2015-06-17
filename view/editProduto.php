<?php $produtoModelo = $_REQUEST['produtoModelo']; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SisBanca - Editar Produto</title>
        <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
    </head>
    <meta charset="utf-8"/>
    <body>
        <div id="wrap">
            <h1 id="titulo">Editar Produto - SisBanca</h1>          
            <form action="Index.php?class=produto&acao=editar&valor=<?= $produtoModelo->getId() ?>" method="POST">
                <fieldset style="width:50%">
                    <legend>Formulário de Editar Produto</legend>
                    Nome do Produto:<br><input type="text" name="nomeproduto" size=40 maxlenght=40 value='<?= $produtoModelo->getnomeProduto() ?>'>
                    <br>
                    Descrição do Produto:<br><input type="text" name="descricaodoproduto" size=40 maxlenght=40 value='<?= $produtoModelo->getdescricaodoProduto() ?>'>
                    <br>
                    Fabricante do Produto:<br><input type="text" name="nomefabricante" size=40 maxlenght=40 value='<?= $produtoModelo->getnomeFabricante() ?>'>
                    <br>
                    Data de Fabricação:<br><input type="date" name="datafabricacao" value='<?= $produtoModelo->getdataFabricacao() ?>'>
                    <br>
                    Data de Vencimento:<br><input type="date" name="datavencimento" value='<?= $produtoModelo->getdataVencimento() ?>'>
                    <br>
                    Número do Lote de fabricação:<br><input type="text" name="numerodolote" value='<?= $produtoModelo->getnumerodoLote() ?>'>
                    <br>
                    Tipo da Categoria do Produto:
                    <select name="categoriaproduto" value='<?= $produtoModelo->getcategoriaProduto() ?>'>
                        <option value="revista">Revista</option>
                        <option value="cigarro">Cigarro</option>
                        <option value="jornal">Jornal</option>
                        <option value="dvd">DVD</option>
                    </select>
                    <br><br>
                    Comentário<br><textarea name="comentario" rows=3 cols=30 value='<?= $produtoModelo->getcomentario() ?>'></textarea>
                </fieldset>
                <br><input type="submit" value="Cadastrar Produto" name="Cadastrar" id="botaocadastrar" class="btn">
                <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Cancelar</a>
            </form>
        </div>
    </body>
</html>
