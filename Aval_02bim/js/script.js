$(document).ready(function(e){
	$(".menuTopo a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");      
	});
	$(".conteudo a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");      
	});
});

/*function dialogo(){
  $( "#dialog-confirm" ).dialog({
    resizable: false,
    width:400,
    height:200,
    modal: true,
    buttons: {
      "Confirma": function() {
        var nome = document.querySelector("#nome").value;
        var email = document.querySelector("#email").value;
        var cont;
        var acheiNome = false;
        var acheiEmail = false;
        for(cont = 0;cont < nome.length;cont++){
          if(nome[cont] == " "){
            acheiNome = true;
          }
        }
        if(acheiNome){
          nome = nome.split(" ");
        }

        for(cont = 0;cont < email.length;cont++){
          if(email[cont] == "@"){
            acheiEmail = true;
          }
        }
        if(acheiEmail){
          email = email.split("@");
        }

        if((!acheiNome) || (nome[0].length < 3) || (nome[1].length < 4) ||
          (!acheiEmail) || (email[0].length < 3) || (email[1].length < 4)){
                alert("Campo Obrigatorio preenchido incorretamente!");
        }else{
          $( this ).dialog( "close" );
        }
      },
      Cancelar: function() {
        $( this ).dialog( "close" );
      }
    }
  });
};*/

