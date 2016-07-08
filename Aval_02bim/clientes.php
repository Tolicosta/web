<div class="conteudo">
	<?php

		require_once 'init.php';
		
		// Abre a conexão
		$PDO = db_connect();
		
		/* SQL para contar o total de registros */
		$sql_count = "SELECT COUNT (*) AS total FROM clientes ORDER BY nomeCliente ASC";
		
		// SQL para selecionar os registros
		$sql = "SELECT idCliente , nomeCliente , email , dataCadastro FROM clientes ORDER BY nomeCliente ASC";
		
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
			<title>Cadastro de Clientes</title>
			<meta charset="utf-8">
		</head>
		
		<body>
			<div class="conteudo">
				<h1>Cadastro de Clientes</h1>
				<a href="form-add-Cliente.php">Adicionar Cliente</a>
				<h2>Lista de Clientes</h2>
				<p>Total de Clientes: <?php echo $total ?></p>
					
				<?php if($total > 0): ?>
								
				<table width="100%" border="1">
					
					<thead>
						
						<tr>
							<th>Cadastro</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Data de Cadastro</th>
							<th>Ações</th>
						</tr>
							
					</thead>
						
					<tbody>
						
						<?php while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
							
						<tr>
								
							<td><?php echo $cliente['idCliente'] ?></td>
							<td><?php echo $cliente['nomeCliente'] ?></td>
							<td><?php echo $cliente['email'] ?></td>
							<td><?php echo dateConvert($cliente['dataCadastro']) ?></td>
								
							<td>
								<a href="form-edit-Cliente.php?id = <?php echo $cliente['idCliente'] ?>">Editar</a>
								<a href="delete-Cliente.php?id = <?php echo $cliente['idCliente'] ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
							</td >
								
						</tr >
							
						<?php endwhile; ?>
							
					</tbody>
						
					</table>
						
					<?php else: ?>
						
					<p>Nenhum cliente registrado</p>
						
					<?php endif; ?>
					

		</body>

	</html>
</div>
