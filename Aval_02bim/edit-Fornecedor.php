<?php
	require_once 'init.php';
	include_once 'fornecedor.class.php';
	
	// Pega os dados do formulário
	$id = isset($_POST ['id']) ? $_POST['id'] : null ;
	$nomeFornecedor = isset($_POST['txtNome']) ? $_POST['txtNome'] : null ;
	$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null ;
	$dataFundacao = isset($_POST['txtData']) ? $_POST ['txtData'] : null ;
	
	// Validação simples se campos estão vazios
	if(empty($nomeFornecedor) || empty($email)){
		echo "Campos obrigatórios; favor preencher!";
		exit;
	}
	
	// Instancia objeto fornecedor
	$fornecedor = new Fornecedor($nomeFornecedor, $email, $dataFundacao);
	
	// Atualiza o BD
	$PDO = db_connect() ;
	$sql = "UPDATE fornecedor SET nomeFornecedor = : nomeFornecedor , email = : email , dataFundacao = : data WHERE idCliente = : id ";
	$stmt = $PDO->prepare( $sql );
	$stmt->bindParam(': nomeFornecedor', $fornecedor->getNome());
	$stmt->bindParam(': email', $fornecedor->getEmail());
	$stmt->bindParam(': data', $fornecedor->getDataFundacao());
	$stmt->bindParam(': id', $id, PDO::PARAM_INT);

	if ($stmt->execute()){
		header ('Location: fornecedores.php');
	}
	else{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
?>
