$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#oab').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultaroab.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'oab=' + $('#oab').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#adv').val(data.nome); 
                        $('#adv').focus();
                    }
                }
           });   
   return false;    
   })
});