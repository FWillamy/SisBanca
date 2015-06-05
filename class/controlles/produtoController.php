<?php
	
	require_once 'modelos/produtoModelo.php'; 
	/**
	* Classe produto controle das ações realizadas na view
	*/
	class produtoController
	{
		//Variavel de conexão com /modelos/produtoModelo.php
		private $produto;
		function __construct()
		{	//construtor de new produto
			$this-> $produto = new Produto();
		}

		public function adicionar()
		{
			require_once '/class/view/cadastrarProduto.php';
		}

		public function salvar()
		{
		  # Esta função tem em realizar o cadastro do produto.
			//Criando objeto Produto
			$sv = new Produto();
			//Nesta fazer os valores esta sendo setados os valores do cadastro de produtos
	     $sv->.setnomeProduto($_POST["nomeprodudo"]);
	     $sv->.setdescricaodoProduto($_POST["descricaodoproduto"]);
	     $sv->.setnomeFabricante($_POST["nomefabricante"]);
		 $sv->.setdataFabricante($_POST["datafabricacao"]);
		 $sv->.setdataVenciemnto($_POST["datavencimento"]);
		 $sv->.setnumerodoLote($_POST["numerodolote"]);
		 $sv->.setcategoriaProduto($_POST["categoriaproduto"]);
		 $sv->.setcomentario($_POST["comentario"]);

		}

		public function listar()
		{
			
			echo "Ainda não impletada a função Listar";

		}
	}










?>
