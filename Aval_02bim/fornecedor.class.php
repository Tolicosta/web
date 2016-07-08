<?php

	class Fornecedor{
		
		private $nomeFornecedor;
		private $email;
		private $dataFundacao;
		
		public function __construct($nomeFornecedor, $email, $dataFundacao){
			$this->setNomeFornecedor($nomeFornecedor);
			$this->setEmail($email);
			$this->setDataFundacao($dataFundacao);
		}
		
		public function getNomeFornecedor(){
			return $this->nomeFornecedor;
		}
		
		public function setNomeFornecedor($nomeFornecedor){
			$this->nomeFornecedor = $nomeFornecedor;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getDataFundacao(){
			return $this->dataFundacao;
		}
		
		public function setDataFundacao($dataFundacao){
			$data = explode('/',$dataFundacao);
			$this->dataFundacao = "$data[2]-$data[1]-$data[0]";
		}
		
		
		
	}

?>
