<?php

	require_once 'modelos/produtoModelo.php'; 
	/**
	* Classe produtoControle classe responsavel em guarda os dados inseridos na view
	*/
	class produtoController
	{
		//Variavel de conexão com /modelos/produtoModelo.php
		private $produtoModelo;
		function __construct()
		{	//construtor de new produto
			$this->produtoModelo = new produtoModelo();
		}

		public function adicionar()
		{
			require_once '/view/cadastrarProduto.php';
		}

		public function salvar()
		{

		 # Esta função tem em realizar o cadastro do produto.
			//Criando objeto Produto
		 $sv = new produtoModelo();
			//Nesta fazer os valores esta sendo setados os valores do cadastro de produtos
	     $sv->setnomeProduto($_POST["nomeproduto"]);
	     $sv->setdescricaodoProduto($_POST["descricaodoproduto"]);
	     $sv->setnomeFabricante($_POST["nomefabricante"]);
		 $sv->setdataFabricacao($_POST["datafabricacao"]);	 
		 $sv->setdataVencimento($_POST["datavencimento"]);
		 $sv->setnumerodoLote($_POST["numerodolote"]);
		 $sv->setcategoriaProduto($_POST["categoriaproduto"]);
		 $sv->setcomentario($_POST["comentario"]);
		 # Enviando as informações para o produtoModelo
		 $this->produtoModelo->salvar($sv);
		 $this->listar();

		 # Formantando a data para inserção no BD
		 /*echo $_POST["datafabricacao"];
		 $dat = explode('/', $_POST["datafabricacao"]);
		 # dia - mês - ano
		 $dataf = "$dat[2]-$dat[0]-$dat[1]";
		 $sv->setdataFabricacao($dataf);
		 # Formatando a data para a inserção no BD
		 $dat = explode('/', $_POST["datavencimento"]);
		 # dia - mês - ano
		 $datav = "$dat[2]-$dat[0]-$dat[1]";*/	

		}

		public function listar()
		{
			$_REQUEST['produtoModelo'] = $this->produtoModelo->listar();
			require_once 'view/listarProduto.php';
		}

		public function excluir()
		{
			$this->produtoModelo->excluir($_GET["valor"]);
			$this->listar();
		}
	


	}

?>
