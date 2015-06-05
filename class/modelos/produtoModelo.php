<?php
/**
* Modelo que interagem com a classe produtoCroller.php
*/
require_once 'controlles/produtoController.php'
class produtoModelo
{
	private $id;
	private $nomeProduto;
	private $descricaodoProduto;
	private $nomeFabricante;
	private $dataFabricacao;
	private $dataVencimento;
	private $numeroLote;
	private $categoriaProduto;
	private $comentario;

	//Metodos SET
	public function setId ($id)
	{
		$this->id = $id;
	}
	public function setnomeProduto($nomeProduto)
	{
		$this->nome = $nome;
	}
	public function setdescricaodoProduto($descricaodoProduto)
	{
		$this->descricaodoProduto = $descricaodoProduto;
	}
	public function setnomeFabricante($nomeFabricante)
	{
		$this->nomeFabricante = $nomeFabricante;
	}
	public function setdataFabricacao($dataFabricacao)
	{
		$this->dataFabricacao = $dataFabricacao;
	}
	public function setdataVencimento($dataVencimento)
	{
		$this->dataVencimento = $dataVencimento;
	}
	public function setnumerodoLote($numerodoLote)
	{
		$this->numerodoLote = $numerodoLote;
	}
	public function setcategoriaProduto($categoriaProduto)
	{
		$this->categoriaProduto = $categoriaProduto;
	}
	public function setcomentario($comentario)
	{
		$this->comentario = $comentario;
	}

	//Metodos GET
	public function getId()
	{
		return $this->id;
	}	
	public function getnomeProduto()
	{
		return $this->nome;
	}	
	public function getdescricaodoProduto()
	{
		return $this->descricaodoProduto;
	}	
	public function getnomeFabricante()
	{
		return $this->nomeFabricante;
	}	
	public function getdataFabricacao()
	{
		return $this->dataFabricacao;
	}	
	public function getdataVencimento()
	{
		return $this->dataVencimento;
	}	
	public function getnumerodoLote()
	{
		return $this->numerodoLote;
	}	
	public function getcategoriaProduto()
	{
		return $this->categoriaProduto;
	}	
	public function getcomentario()
	{
		return $this->comentario;
	}


	//Lógica necessário para salvar os dados no banco MySql
	public function salvar($produto)
	{	//Função de interação com /controlles/produtoController.php
		global $con;

		$sql = "INSERT INTO produto (nomeProduto, descricaodoProduto, nomeFabricante, dataFabricacao, dataVencimento, numerodoLote, categoriaProduto, comentario)"
			."VALUES ('".$produto->getnomeProduto()."','".$produto->getdescricaodoProduto()
				."','".$produto->getnomeFabricante()."','".$produto->dataFabricacao()."','".$produto->dataVencimento()
				."','".$produto->numerodoLote()."','".$produto->categoriaProduto()."','".$produto->comentario()."'')";
		if ($con->query($sql) === TRUE) 
			{
            	echo "New record created successfully";
        	} 
        	else 
        	{
            	echo "Error: " . $sql . "<br>" . $con->error;
        	}
    	}

	}

}

?>