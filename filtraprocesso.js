$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#nome').blur(function (){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultarprocesso.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'nome=' + $('#nome').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        
						$('#origem').val(data.origem);
						$('#vara').val(data.vara);
						$('#assunto').val(data.assunto);
						$('#comarca').val(data.comarca);
						$('#competencia').val(data.competencia);
						$('#adv').val(data.advogado);
						$('#nome').val(data.nomecli);
						
						
                        $('#nome').focus();
                    }
                }
           });   
   return false;    
   })
});