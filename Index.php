<?php
//index.php

	//conectando ao banco
	require_once '/class/config/config.php';

	//verifica se as variaveis foram passadas pela url
	if (empty($_GET['class']) || empty($_GET['acao'])) 
	{ 
		require_once '/class/view/index.php';
	} 
	else 
	{
		$classe = $_GET['class']."Controller";
		$metodo = $_GET['acao'];

		require_once '/class/controlles/'. $classe .'.php';	
		$obj = new $classe();
		$obj->$metodo();
	}

?>
