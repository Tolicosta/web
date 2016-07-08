<?php

	//inclui o arquivo de funções
	require_once 'funcoesC.php';
	
	//constantes co as credenciais de acesso ao BD
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','root');
	define('DB_NAME','Oliveira');
	
	//habilita todas as exibições de erros
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	date_default_timezone_set('America/Sao_Paulo');

?>
