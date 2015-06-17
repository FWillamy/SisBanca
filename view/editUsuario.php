<?php $usuarioModelo = $_REQUEST['usuarioModelo']; ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>SisBanca - Editar Usuario</title>
            <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
    </head>
    <meta charset="utf-8"/>
    <body>
        <div id="wrap">
            <h1 id="titulo">Editar Usuario - SisBanca</h1>          
            <form action="Index.php?class=usuario&acao=editar&valor=<?= $usuarioModelo->getId() ?>" method="POST">
                <fieldset style="width:50%">
                        <legend>Dados Pessoais</legend>
                        Nome Completo:	
                        <br><input type="text" name="nome" value='<?= $usuarioModelo->getnome() ?>'>
                        <br>
                        CPF:
                        <br><input type="text" name="cpf" value='<?= $usuarioModelo->getcpf() ?>'>
                        <br>
                        RG:
                        <br><input type="text" name="rg" value='<?= $usuarioModelo->getrg() ?>'>
                        <br>
                        Data de Nascimento:
                        <br><input type="date" name="datadeNascimento" value='<?= $usuarioModelo->getdatadeNascimento() ?>'>
                        <br>
                        Sexo:
                        <br><input type="radio" name="sexo" value='<?= $usuarioModelo->getsexo() ?>'>Masculino
                        <input type="radio" name="sexo" value='<?= $usuarioModelo->getsexo() ?>'>Feminino
                        <br>
                        Estado Civíl:
                        <br><input type="radio" name="estadoCivil" value='<?= $usuarioModelo->getestadoCivil() ?>' >Solteiro(a)
                        <input type="radio" name="estadoCivil" value='<?= $usuarioModelo->getestadoCivil() ?>' >Casado(a)
                        <input type="radio" name="estadoCivil" value='<?= $usuarioModelo->getestadoCivil() ?>' >Viuvo(a)
                        <input type="radio" name="estadoCivil" value='<?= $usuarioModelo->getestadoCivil() ?>' >Divorciado(a)
                    </fieldset>
                    <fieldset style="width:50%">
                        <legend>Endereço</legend>
                        Logradouro:<br>
                        <input type="text" name="logradouro" value='<?= $usuarioModelo->getlogradouro() ?>'>
                        <br>
                        Numero:<br>
                        <input type="text" name="numero" value='<?= $usuarioModelo->getnumero() ?>'>
                        <!--Complemento:<br>
                        <input type="text" name="complemento">-->
                        <!--CEP:<br>
                        <input type="text" name="cep">-->
                        <br>
                        Bairro:<br>
                        <input type="text" name="bairro" value='<?= $usuarioModelo->getbairro() ?>'>
                        <br>
                        Cidade:<br>
                        <input type="text" name="cidade" value='<?= $usuarioModelo->getcidade() ?>'>
                        <br>
                        Estado:<br>
                        <select name="estado" value='<?= $usuarioModelo->getestado() ?>'>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PB">PA</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                        <br>Turno:<br>
                        <input type="Radio" name="turno" value='<?= $usuarioModelo->getturno() ?>' checked>Matutino
                        <br>
                        <input type="Radio" name="turno" value='<?= $usuarioModelo->getturno() ?>' >Vespertino
                        <br>
                        <input type="Radio" name="turno" value='<?= $usuarioModelo->getturno() ?>' >Noturno
                        <br>
                        <input type="Radio" name="turno" value='<?= $usuarioModelo->getturno() ?>' >Diurno
                        <br>
                        Horário de Trabalho - Entrada:
                        <input type="time" name="horarioEntrada" value='<?= $usuarioModelo->gethorarioEntrada() ?>'>
                        Saida:
                        <input type="time" name="horarioSaida" value='<?= $usuarioModelo->gethorarioSaida() ?>'>
                    </fieldset>
                <br><input type="submit" value="Cadastrar Usuário" name="Cadastrar" id="botaocadastrar"class="btn">
                <a href=Index.php><input type="submit" value="Cancelar" name="HomePage" class="btn"></a><br>
                </form>	
            </div>
        </body>
 </html>
