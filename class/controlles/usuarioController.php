<?php
	
	/**
	* Classe produto controle das ações realizadas na view
	*/
	class usuarioController
	{

		//Variavel de conexão com /modelos/produtoModelo.php
		private $usuario;
		function __construct()
		{	//construtor de new produto
			$this-> $usuario = new Usuario();
		}

		public function adicionar()
		{
			require_once '/class/view/cadastrarUsuario.php';
		}

		public function salvar()
		{
		  # Esta função tem em realizar o cadastro do funcionário.

			$sv = new Usuario();
		 $sv->.$_POST["nomeCompleto"];
	     $sv->.$_POST["CPF"];
	     $sv->.$_POST["RG"];
		 $sv->.$_POST["datadeNascimento"];
		 $sv->.$_POST["Sexo"];
		 $sv->.$_POST["estadoCivil"];
		 $sv->.$_POST["logradouro"];
		 $sv->.$_POST["numero"];
		 $sv->.$_POST["complemento"];
		 $sv->.$_POST["CEP"];
		 $sv->.$_POST["bairro"];
		 $sv->.$_POST["cidade"];
		 $sv->.$_POST["UF"];
		 $sv->.$_POST["cargo"];
		 $sv->.$_POST["turno"];
		 $sv->.$_POST["hrEntrada"];
		 $sv->.$_POST["hrSaida"];

		}

		public function listar()
		{
			
			echo "Ainda não impletada a função Listar";

		}
	}