<?php
//index.php

	//conectando ao banco
	require_once '/biblioteca/config.php';

	//verifica se as variaveis foram passadas pela url
	if (empty($_GET['class']) || empty($_GET['acao'])) 
	{ 
		require_once '/view/index.php';
	} 
	else 
	{
		$classe = $_GET['class']."Controller";
		$metodo = $_GET['acao'];

		require_once 'controlles/'. $classe .'.php';	
		$obj = new $classe();
		$obj->$metodo();
	}

?>
