<!DOCTYPE html>
    <html>
        <head>
            <title>Cadastro de Usuário - SisBanca</title>
            <link rel="stylesheet" type="text/css" href="/SisBanca_beta/css/estilo.css"/>
        </head>
        <meta charset="utf-8" />	
        <body>
            <div id="wrap">		
                <h1 id="titulo">Cadastro Funcionario - SisBanca</h1>
                <form action="index.php?class=usuario&acao=salvar" method="POST">
                    <fieldset style="width:50%">
                        <legend>Dados Pessoais</legend>
                        Nome Completo:	
                        <br><input type="text" name="nome">
                        <br>
                        CPF:
                        <br><input type="text" name="cpf">
                        <br>
                        RG:
                        <br><input type="text" name="rg">
                        <br>
                        Data de Nascimento:
                        <br><input type="date" name="datadeNascimento">
                        <br>
                        Sexo:
                        <br><input type="radio" name="sexo" value="Masculino" checked>Masculino
                        <input type="radio" name="sexo" value="Feminino">Feminino
                        <br>
                        Estado Civíl:
                        <br><input type="radio" name="estadoCivil" value="Solteiro(a)" checked>Solteiro(a)
                        <input type="radio" name="estadoCivil" value="Casado(a)" checked>Casado(a)
                        <input type="radio" name="estadoCivil" value="Viuvo(a)" checked>Viuvo(a)
                        <input type="radio" name="estadoCivil" value="Divorciado(a)">Divorciado(a)
                    </fieldset>
                    <fieldset style="width:50%">
                        <legend>Endereço</legend>
                        Logradouro:<br>
                        <input type="text" name="logradouro">
                        <br>
                        Numero:<br>
                        <input type="text" name="numero">
                        <!--Complemento:<br>
                        <input type="text" name="complemento">-->
                        <!--CEP:<br>
                        <input type="text" name="cep">-->
                        <br>
                        Bairro:<br>
                        <input type="text" name="bairro">
                        <br>
                        Cidade:<br>
                        <input type="text" name="cidade">
                        <br>
                        Estado:<br>
                        <select name="estado">
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
                        <input type="Radio" name="turno" value="Matutino" checked>Matutino
                        <br>
                        <input type="Radio" name="turno" value="Vespertino" checked>Vespertino
                        <br>
                        <input type="Radio" name="turno" value="Noturno" checked>Noturno
                        <br>
                        <input type="Radio" name="turno" value="Diurno">Diurno
                        <br>
                        Horário de Trabalho - Entrada:
                        <input type="time" name="horarioEntrada">
                        Saida:
                        <input type="time" name="horarioSaida">
                    </fieldset>
                    <br><input type="submit" value="Cadastrar Usuário" name="Cadastrar" id="botaocadastrar" class="btn">
                    <a href="javascript:history.back()" class="btn" header('location: view/index.php');>Cancelar</a>
                </form>	
            </div>
        </body>