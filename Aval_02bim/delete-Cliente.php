<?php
	require_once 'init.php';
	
	// Pega o ID da URL
	$id = isset($_GET['id']) ? $_GET['id']: null ;
	
	// Valida o ID
	if (empty($id)){
		echo "ID não informado";
		exit ;
	}
	
	// Remove do BD
	$PDO = db_connect () ;
	$sql = "DELETE FROM clientes WHERE idCliente = : id";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(': id', $id, PDO::PARAM_INT);
	
	if ($stmt->execute()){
		header ('Location: clientes.php') ;
	}
	else{
		echo "Erro ao excluir";
		print_r($stmt->ErrorInfo());
	}
?>
