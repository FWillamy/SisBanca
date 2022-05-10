<!DOCTYPE html>
    <html>
        <head>
            <title>SisBanca - Cadatrar Produto</title>
            <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
        </head>
        <meta charset="utf-8"/>
        <body>
            <div id="wrap">
                <h1 id="titulo">Cadastrar Produto - SisBanca</h1>
                <p>Esta pagina tem um só objetivo, que é realizar o cadastro de todos os produtos da empresa.</p>

                <form action="Index.php?class=produto&acao=salvar" method="POST">
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
                            <option value="revista">Revista</option>
                            <option value="cigarro">Cigarro</option>
                            <option value="jornal">Jornal</option>
                            <option value="dvd">DVD</option>
                            <option value="cd">CD</option>
                            <option value="outros">Outros</option>
                        </select>
                        <br><br>
                        Comentário<br><textarea name="comentario" rows=6 cols=40></textarea>
                    </fieldset>
                    <br><input type="submit" value="Cadastrar Produto" name="Cadastrar" id="botaocadastrar"class="btn">
                    <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Cancelar</a>

                    <br>
                </form>
            </div>
        </body>
    </html>