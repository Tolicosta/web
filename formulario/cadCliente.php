<!--Rafaela Custódio e Thamires Oliveira-->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			echo "<h1>Os dados informados são: </h1>";
			$nome = $_POST["txtNome"];
			$ender = $_POST["txtEndereco"];
			$cpf = $_POST["txtCPF"];
			$estado = $_POST["listEstados"];
			$dtNasc = $_POST["txtData"];
			$sexo = $_POST["sexo"];
			$cinema = $_POST["checkCinema"];
			$musica = $_POST["checkMusica"];
			$info = $_POST["checkInfo"];
			$login = $_POST["txtLogin"];
			$senha1 = $_POST["txtSenha1"];
			$senha2 = $_POST["txtSenha2"];			
			$camposOK = true;
			
			if($nome==""){
				echo "Nome incoreto<br>";
				$camposOK=false;
			}
			if($ender==""){
				echo "Endereço incompleto<br>";
				$camposOK=false;
			}
			if($senha1!=$senha2){
				echo "Senha não confere <br>";
				$camposOK=false;
			}
			
			//Validação da data
			 
			$teste=0;
			$validou=0;
			$data = explode("/", $dtNasc);
			$dia=$data[0];
			$mes=$data[1];
			$ano=$data[2];
			
			$dia = (int) $dia;
			$mes = (int) $mes;
			$ano = (int) $ano;
			
			if(($mes==1)||($mes==3)||($mes==5)||($mes==7)||($mes==8)||($mes==10)||($mes==12)){
				if (($dia<1)||($dia>31)){
					$validou = 1;
					echo "$validou";
				}
			}elseif (($mes==4)||($mes==6)||($mes==9)||($mes==11)){
				if (($dia<1)||($dia>30)){
					$validou=1;
				}
				}elseif($mes==2){
					if (((($ano%4)==0)&&(($ano%100)!=0))||(($ano%400)==0)){
						if(($dia<1)||($dia>29)){
							$validou = 1;
						}
					 }else{
						 if (($dia<1)||($dia>28)) {
							$validou = 1;
						 }
					 }
				}else{
					 $validou=1;
				}
					 if($validou==0) {
					  echo "Data correta!";
					 }
		//VALIDA CPF	
		$cpf = ereg_replace('[^0-9]', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
			if (strlen($cpf) != 11) {
				echo "CPF incorreto. <br>";
				$camposOK = false;
			} else if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
				echo "CPF incorreto. <br>";
				$camposOK = false;
			} else {   
         
				for ($i = 9; $i < 11; $i++) {  
					for ($d = 0, $j = 0; $j<$i; $j++) {
						$d += $cpf{$j}*(($i + 1)-$j);
					}
					$d=((10*$d)%11)%10;
				if ($cpf{$j}!=$d) {
					echo "CPF incorreto. <br>";
					$camposOK = false;
				}
				}
			}
					
			if($camposOK){
					echo "<table border='0' cellpadding='5'>";
					echo "<tr><td>Nome:</td><td><b>$nome</b></td></tr><br>";
					echo "<tr><td>CPF:</td><td><b>$cpf</b></td></tr><br>";
					echo "<tr><td>Endereço:</td><td><b>$ender</b></td></tr><br>";
					echo "<tr><td>Estado:</td><td><b>$estado</b></td></tr><br>";
					echo "<tr><td>Data:</td><td><b>$dtNasc</b></td></tr><br>";
					echo "<tr><td>Sexo:</td><td><b>$sexo</b></td></tr><br>";
					echo "<tr><td>Login:</td><td><b>$login</b></td></tr><br>";
					echo "<tr><td>Senha:</td><td><b>$senha1</b></td></tr><br>";
					echo "<tr><td>Áreas de Interesse:</td><td><b>";
					
					if($cinema)
						echo "Cinema <br>";
					if($musica)
						echo "Musica <br>";
					if($info)
						echo "O melhor de todos INFORMATICA!!!<br>";
						echo "</b></td></tr></table>";								
			}
		?>
	</body>
</html>
