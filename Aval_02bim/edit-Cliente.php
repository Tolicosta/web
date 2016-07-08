<?php
	require_once 'init.php';
	include_once 'cliente.class.php';
	
	// Pega os dados do formulário
	$id = isset($_POST ['id']) ? $_POST['id'] : null ;
	$nomeCliente = isset($_POST['txtNome']) ? $_POST['txtNome'] : null ;
	$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null ;
	$dataCadastro = isset($_POST['txtData']) ? $_POST ['txtData'] : null ;
	
	// Validação simples se campos estão vazios
	if(empty($nomeCliente) || empty($email)){
		echo "Campos obrigatórios; favor preencher!";
		exit;
	}
	
	// Instancia objeto cliente
	$cliente = new Cliente($nomeCliente, $email, $dataCadastro);
	
	// Atualiza o BD
	$PDO = db_connect() ;
	$sql = "UPDATE clientes SET nomeCliente = : nomeCliente , email = : email , dataCadastro = : dataCadastro WHERE idCliente = : id ";
	$stmt = $PDO->prepare( $sql );
	$stmt->bindParam(': nomeCliente', $cliente->getNomeCliente());
	$stmt->bindParam(': email', $cliente->getEmail());
	$stmt->bindParam(': dataCadastro', $cliente->getDataCadastro());
	$stmt->bindParam(': id', $id, PDO::PARAM_INT);

	if ($stmt->execute()){
		header ('Location: clientes.php');
	}
	else{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
?>

