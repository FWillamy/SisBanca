<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        <meta charset="utf-8"/>
    </head>
    <body>
        <fieldset>
        <h1 id="titulo"> SisBanca - Sistema de Gestão Integrado</h1>
        <fieldset/>
        <form class="form-horizontal" method="post" action="index.php?class=login&acao=autenticar" id="formLogin" name="formLogin" >
            <div>
                <label for="inputnomeUser">Nome do Usuário</label>
                <br>
                <input id="inputnomeUser" type="text" name="nome" placeholder="Digite nome do usuário" />
            </div>
            <div>
                <label for="inputPassword">Senha</label>
                <br>
                <input id="inputPassword" type="password" name="cpf" placeholder="Digite seu CPF..." />         
            </div>
            <br>
            <button class="btn" type="submit">Acessar</button>
        </form>
    </body>
</html>