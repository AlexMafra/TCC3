$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#cpf').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultarCliente.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cpf=' + $('#cpf').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#nome').val(data.nome); 
                        $('#nome').focus();
                    }
                }
           });   
   return false;    
   })
});