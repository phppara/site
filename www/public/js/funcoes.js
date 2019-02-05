$(function(){		   
	$("#btn-contato").click(function(){ 
								
		var nome = $("#nome").val();
		var email = $("#email").val();
		var assunto = $("#assunto").val();
		var mensagem = $("#mensagem").val();

		$.post('post.php?action=contato', { nome: nome, email: email, assunto: assunto, mensagem: mensagem }, function(resposta) {
				
			if (resposta != false) { $("#msg").html(resposta); } 

		});	
	
	});
});