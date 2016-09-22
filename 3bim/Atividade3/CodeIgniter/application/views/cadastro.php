<!DOCTYPE html>
<html lang ="pt-br">
	
	<head>
		
		<meta charset="utf-8">
		<title>Meu Blog</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>
	</head>
	
	<body>
		
		<?php
		
			echo anchor(base_url(),"") . "  " .
			anchor (base_url("inserir"), "Inserir Nova Referência").
			heading("Meu blog", 2) . heading("Fale Conosco", 3);
			$atributos = array('name' => 'formulario_contato ', 'id'=>'formulario_contato');
			echo form_open(base_url('welcome/enviar_mensagem'), $atributos) .
			form_label("Nome do Arquivo: " ,"txt_nome") . br() .
			form_input('txt_nome') . br() .
			form_label("Titulo: ","txt_titulo") . br() .
			form_textarea('txt_titulo') . br() .
			form_label("Autores: ","txt_autores") . br() .
			form_textarea('txt_autores') . br() .
			form_label("Citações: ","txt_citacoes") . br() .
			form_textarea('txt_citacoes') . br() .
			form_label("Palavras-Chave: ","txt_palavrasChave") . br() .
			form_textarea('txt_palavrasChave') . br() .
			form_label("Referências: ","txt_referencias") . br() .
			form_textarea('txt_referencias') . br() .
			form_submit("btn_enviar","Enviar Mensagem") .
			form_close();
		?>
	</body>
</html>
