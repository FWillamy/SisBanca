<?php $usuarioModelo = $_REQUEST['usuarioModelo']; ?>
<!DOCTYPE>
<html>
    <head>
        <title>SisBanca - Listar Usuários</title>
        <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
    </head>
    <body>
        <h1 id="titulo">Listagem de Usuários</h1>
         <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Menu</a><br><br>
        <br><table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Turno</th>
                <th>Horário inicio</th>
                <th>Horário final</th>
                
            </tr>
            <?php foreach ($usuarioModelo as $usuarioModelo): ?>
                
                    <td><?php echo $usuarioModelo->getId(); ?> </td>
                    <td><?php echo $usuarioModelo->getnome(); ?> </td>
                    <td><?php echo $usuarioModelo->getsexo(); ?> </td>
                    <td><?php echo $usuarioModelo->getlogradouro(); ?> </td>
                    <td><?php echo $usuarioModelo->getbairro(); ?> </td>
                    <td><?php echo $usuarioModelo->getturno(); ?> </td>
                    <td><?php echo $usuarioModelo->gethorarioEntrada(); ?> </td>
                    <td><?php echo $usuarioModelo->gethorarioSaida(); ?> </td>
                    
                    <?php
                    echo "<td valign='top'><a href=Index.php?class=usuario&acao=excluir&valor={$usuarioModelo->getId()}>Excluir</a></td>"
                    . "<td valign='top'><a href=Index.php?class=usuario&acao=selecionar&valor={$usuarioModelo->getId()}>Editar</a>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
