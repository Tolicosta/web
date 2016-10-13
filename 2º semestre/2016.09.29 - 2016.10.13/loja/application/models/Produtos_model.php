<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Produtos_model extends CI_Model{
	
		public function__construct(){
			parent::__construct();
		}
		
		public function detalhes_produto($id){
			$this->db->where('id', $id);
			return $this->db->get('produtos')->result();
		}
	}
