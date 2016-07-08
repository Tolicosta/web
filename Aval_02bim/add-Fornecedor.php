<?php
	require_once 'init.php';
	include_once 'fornecedor.class.php';
	
	// Pega os dados do formulário
	$nomeFornecedor = isset($_POST['txtNome']) ? $_POST['txtNome'] : null ;
	$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null ;
	$dataFundacao = isset($_POST['txtData']) ? $_POST['txtData'] : null ;

	// Validação simples se campos estão vazios
	if(empty($nomeFornecedor) || empty($email)){
		echo "Campos obrigatórios; favor preencher!";
		exit;
	}
	
	// Instancia objeto fornecedor
	$fornecedor = new Fornecedor($nomeFornecedor, $email, $dataFundacao);

	// Insere no BD
	$PDO = db_connect();
	$sql = "INSERT INTO fornecedor ( nomeFornecedor , email , dataFundacao ) VALUES (:nomeFornecedor, :email, :dataFundacao)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(': nomeFornecedor', $fornecedor->getNomeFornecedor());
	$stmt->bindParam(': email', $fornecedor->getEmail());
	$stmt->bindParam(': dataFundacao', $fornecedor->getDataFundacao());

	if($stmt->execute()){
		header ('Location: fornecedores.php') ;
	}
	else{
		echo "Erro ao cadastrar!";
		print_r($stmt->errorInfo());
	}
?>
