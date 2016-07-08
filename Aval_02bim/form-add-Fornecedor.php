<?php

	require 'init.php';

?>

<html lang="pt-br">

	<head>
		<title>Envio de Dados MySQL</title>
		<meta charset="utf-8">
		<link href="css/layout.css" rel="stylesheet" type="text/css">
		<link href="css/jquery-ui.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/jquery-2.1.1. min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/calendario.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>

	<body>
		<div class="conteudo">
			<form method="post" name="formCadastro" action="add-Fornecedor.php" enctype="multipart/form-data">

				<h1>Cadastro de Fornecedores</h1>

				<table width="100%">

					<tr>				
						<th width="18%">Nome</th>
						<td widt="82%"><input type="text" name="txtNome"></td>
					</tr>
					
					<tr>				
						<th>Email</th>
						<td><input type="text" name="txtEmail"></td>
					</tr>
					
					<tr>				
						<th>Data de Fundacao</th>
						<td><input type="text" name="txtData" id="data"></td>
					</tr>

					<tr>
						<td><input type="submit" name="btnEnviar" value="Cadastrar"></td>
						<td><input type="reset" name="btnLimpar" value="Limpar"></td>
					</tr>

				</table>

			</form>
		</div>
	</body>

</html>
