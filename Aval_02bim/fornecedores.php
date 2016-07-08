<div class="conteudo">
<?php

	require_once 'initF.php';
	
	// Abre a conexão
	$PDO = db_connect();
	
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT (*) AS total FROM fornecedor2 ORDER BY nomeFornecedor ASC";
	
	// SQL para selecionar os registros
	$sql = "SELECT idFornecedor , nomeFornecedor , email , dataFundacao FROM fornecedor2 ORDER BY nomeFornecedor ASC";
	
	// Conta o total de registros
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn() ;
	
	// Seleciona os registros
	$stmt = $PDO->prepare($sql);
	$stmt->execute();
	
?>


<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Cadastro de Fornecedores</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h1>Cadastro de Fornecedores</h1>
		<p><a href="fornecedores/form-addF.php">Adicionar Fornecedor</a></p>
		<h2>Lista de Fornecedores</h2>
		<p>Total de Fornecedores: <?php echo $total ?></p>
			
		<?php if($total > 0): ?>
						
		<table width="100%" border="1">
			
			<thead>
				
				<tr>
					<th>Cadastro</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Data de Fundacao</th>
					<th>Ações</th>
				</tr>
					
			</thead>
				
			<tbody>
				
				<?php while($fornecedor = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
					
				<tr>
						
					<td><?php echo $fornecedor['idFornecedor'] ?></td>
					<td><?php echo $fornecedor['nomeFornecedor'] ?></td>
					<td><?php echo $fornecedor['email'] ?></td>
					<td><?php echo dateConvert($cliente['dataFundacao']) ?></td>
						
					<td>
						<a href="fornecedores/form-editF.php?id = <?php echo $fornecedor['idFornecedor'] ?>">Editar</a>
						<a href="fornecedores/deleteF.php?id = <?php echo $fornecedor['idFornecedor'] ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
					</td >
						
				</tr >
					
				<?php endwhile; ?>
					
			</tbody>
				
			</table>
				
			<?php else: ?>
				
			<p>Nenhum fornecedor registrado</p>
				
			<?php endif; ?>
			
	</body>

</html>
</div>
