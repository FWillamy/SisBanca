<?php

	require_once 'class/modelos/produtoModelo.php'; 
	/**
	* Classe produtoControle classe responsavel em guarda os dados inseridos na view
	*/
	class produtoController
	{
		//Variavel de conexão com /modelos/produtoModelo.php
		private $produto;
		function __construct()
		{	//construtor de new produto
			$this->produto = new produtoModelo();
		}

		public function adicionar()
		{
			require_once '/class/view/cadastrarProduto.php';
		}

		public function salvar()
		{
		  # Esta função tem em realizar o cadastro do produto.
			//Criando objeto Produto
		$sv = new produtoModelo();
			//Nesta fazer os valores esta sendo setados os valores do cadastro de produtos
	     $sv->setnomeProduto($_POST["nomeprodudo"]);
	     $sv->setdescricaodoProduto($_POST["descricaodoproduto"]);
	     $sv->setnomeFabricante($_POST["nomefabricante"]);
		 # Formantando a data para inserção no BD
		 $dat = explode('/', $_POST["datafabricacao"]);
		 # dia - mês - ano
		 $dataf = "$dat[2]-$dat[0]-$dat[1]";
		 $sv->setdataFabricante($dataf);
		 # Formatando a data para a inserção no BD
		 $dat = explode('/', $_POST["datavencimento"]);
		 # dia - mês - ano
		 $datav = "$dat[2]-$dat[0]-$dat[1]";		 
		 $sv->setdataVenciemnto($datav);
		 $sv->setnumerodoLote($_POST["numerodolote"]);
		 $sv->setcategoriaProduto($_POST["categoriaproduto"]);
		 $sv->setcomentario($_POST["comentario"]);
		 # Enviando as informações para o produtoModelo
		 $this->produtoModelo->salvar($sv);
		 $this->listar();



		}

		public function listar()
		{
			
			echo "Ainda não impletada a função Listar";

		}
	}










?>
