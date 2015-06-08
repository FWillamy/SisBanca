<DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Usuário - SisBanca</title>
		<link rel="stylesheet" type="text/css" href="/PHP/SisBanca/css/estilo.css"/>
	</head>
		<meta charset="utf-8" />	
	<body>
	<div id="wrap">		
		<h1 id="titulo">Cadastro Funcionario - SisBanca</h1>
		<form>
			<fieldset style="width:50%">
			<legend>Dados Pessoais</legend>
			Nome Completo:
			<input type="text" name="nomeCompleto">
			<br>
			CPF:
			<input type="text" name="CPF">
			<br>
			RG:
			<input type="text" name="RG">
			<br>
			Data de Nascimento:
			<input type="date" name="datadeNascimento">
			<br>
			Sexo:
			<input type="radio" name="Sexo" value="Masculino" checked>Masculino
			<input type="radio" name="Sexo" value="Feminino">Feminino
			<br>
			Estado Civíl:
			<input type="radio" name="estadoCivil" value="Solteiro(a)" checked>Solteiro(a)
			<input type="radio" name="estadoCivil" value="Casado(a)" checked>Casado(a)
			<input type="radio" name="estadoCivil" value="Viuvo(a)" checked>Viuvo(a)
			<input type="radio" name="estadoCivil" value="Divorciado(a)">Divorciado(a)
			</fieldset>
			<fieldset>
				<legend>Endereço</legend>
				Logradouro:<br>
				<input type="text" name="logradouro">
				<br>
				Numero:<br>
				<input type="text" name="numero">
				<br>
				Complemento:<br>
				<input type="text" name="complemento">
				<br>
				CEP:<br>
				<input type="text" name="CEP">
				<br>
				Bairro:<br>
				<input type="text" name="bairro">
				<br>
				Cidade:<br>
				<input type="text" name="cidade">
				<br>
				Estado:<br>
				<select name="UF">
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
			</fieldset>	
			<fieldset style="width:50%">
				<legend>Infomações sobre o cargo</legend>
				Cargo:<br>
				<input type="text" name="cargo">
				<br>
				Turno:<br>
				<input type="Radio" name="turno" value="Matutino" checked>Matutino
				<br>
				<input type="Radio" name="turno" value="Vespertino" checked>Vespertino
				<br>
				<input type="Radio" name="turno" value="Noturno" checked>Noturno
				<br>
				<input type="Radio" name="turno" value="Diurno">Diurno
				<br>
				Horário de Trabalho - Entrada:
				<input type="time" name="hrEntrada">
				Saida:
				<input type="time" name="hrSaida">
			</fieldset>
		</form>	
	</div>
	</body>