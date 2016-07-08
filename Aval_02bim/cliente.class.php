<?php

	class Cliente{
		
		private $nomeCliente;
		private $email;
		private $dataCadastro;
		
		public function __construct($nomeCliente, $email, $dataCadastro){
			$this->setNomeCliente($nomeCliente);
			$this->setEmail($email);
			$this->setDataCadastro($dataCadastro);
		}
		
		public function getNomeCliente(){
			return $this->nomeCliente;
		}
		
		public function setNomeCliente($nomeCliente){
			$this->nomeCliente = $nomeCliente;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getDataCadastro(){
			return $this->dataCadastro;
		}
		
		public function setDataCadastro($dataCadastro){
			$data = explode('/',$dataCadastro);
			$this->dataCadastro = "$data[2]-$data[1]-$data[0]";
		}
		
		
		
	}

?>
