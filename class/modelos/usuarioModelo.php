<?php
/**
* Modelo que interagem com a classe produtoCroller.php
*/
require_once 'controlles/usuarioController.php'
class usuarioModelo
{
	
	private $id;
	private $nomeCompleto;
	private $CPF;
	private $datadeNascimento;
	private $sexo;
	private $estadoCivil;
	private $logradouro;
	private $numero;
	private $complemento;
	private $CEP;
	private $bairro;
	private $cidade;
	private $UF;
	private $cargo;
	private $turno;
	private $hrEntrada;
	private $hrSaida;

	
	//Metodos SET
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setnomeComplemento($nomeCompleto)
	{
		$this->setnomeComplemento = $setnomeComplemento;
	}
	public function setCPF($CPF)
	{
		$this->CPF = $setCPF
	}
	public function setdatadeNascimento($datadeNascimento)
	{
		$this->setdatadeNascimento = $setdatadeNascimento;
	}
	public function setsexo($sexo)
	{
		$this->setsexo = $setsexo;
	}




	//Metodos GET
	public function getId()
	{
		return $this->id;
	}	
}