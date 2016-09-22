<!DOCTYPE html>
<html lang="pt-br">

	<head>
	
		<meta charset="utf-8">
		<title>Meu Blog</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>	
	</head>
	
	<body>
		
		<?php
		echo anchor(base_url("cadastro"),"Cadastrar Nova Referência"). "  ". anchor(base_url("listagem"), "Listagem das Referências Cadastradas"). anchor(base_url("consultar"), "Consultar Referências");
		?>
		
	</body>
</html>

