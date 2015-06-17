<!DOCTYPE html>
    <html>
        <head>
            <title>SisBanca</title>
            <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        </head>
        <meta charset="utf-8"/>
        <body>
                <h1 id="titulo">SisBanca - Sistema de Gestão Integrado</h1>
                <p>O SisBanca tem como um só objetivo realizar o controle e cadastro de todo os processos de entrada e saída de produto.</p>
                <div>
                <fieldset style="width:50%">
                    <legend>Opções do Sistema</legend>
                        <br><div>
                            <fieldset style="width:500px">
                                <legend>Opções de Produto</legend>
                        <a href="Index.php?class=produto&acao=adicionar">
                            <input type="button" name="paginacadastroproduto" value="Cadastrar Produto" class="btn"></a>
                        <a href="Index.php?class=produto&acao=listar">
                            <input type="button" name="paginalistarproduto" value="Listar Todos os Produtos" class="btn"></a>  
                        </fieldset>
                        </div>
                        <br>
                        <div>
                            <fieldset style="width:500px">
                                <legend>Opções de Usuários</legend>
                        <a href="Index.php?class=usuario&acao=adicionar">
                            <input type="button" name="paginacadastrofuncinario" value="Cadatrar Funcionário" class="btn"></a>
                        <a href="Index.php?class=usuario&acao=listar">
                            <input type="button" name="paginalistarusuario" value="Listar Todos os Funcionário" class="btn"></a>
                        </fieldset>
                        </div>
                        <br>
                        <div>
                            <a href="Index.php?class=produto&acao=relatorio">
                            <input type="button" name="paginagrelatorio" value="Gerar Relatórios" class="btn"></a>
                        </div>
                </fieldset>
                </div>
        </body>
    </html>