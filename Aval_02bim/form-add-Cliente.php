<?php

	require 'init.php';

?>

<div class="conteudo">
	<form method="post" name="formCadastro" action="add-Cliente.php" enctype="multipart/form-data">

		<h1>Cadastro de Clientes</h1>

		<table width="100%">

			<tr>				
				<th width="18%">Nome</th>
				<td width="82%"><input type="text" name="txtNome"></td>
			</tr>
							
			<tr>				
				<th>Email</th>
				<td><input type="text" name="txtEmail"></td>
			</tr>
							
			<tr>				
				<th>Data de Cadastro</th>
				<td><input type="text" name="txtData" class="calendario" readonly></td>
			</tr>

			<tr>
				<td><input type="submit" name="btnEnviar" value="Cadastrar"></td>
				<td><input type="reset" name="btnLimpar" value="Limpar"></td>
			</tr>

		</table>

	</form>
</div>
