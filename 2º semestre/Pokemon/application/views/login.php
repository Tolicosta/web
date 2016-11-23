<!DOCTYPE html>
<html lang="pt">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Pokémon Go</title>
		
		<link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<form class="form-signin">
				<label for="inputEmail" class="sr-only">E-mail</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" id="inputSenha" class="form-control" placeholder="Senha" required>
				
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			</form>
		</div>
	</body>
	
	<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  
</html>
