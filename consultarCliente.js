$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $(document).ready(function (){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultarCliente.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cpf=' + $('#cpf').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#nome').val(data.nome);
						$('#dataNascimento').val(data.dataNascimento);
						$('#profissao').val(data.profissao);
						$('#rg').val(data.rg);
						$('#sexo').val(data.sexo);
						$('#nacionalidade').val(data.nacionalidade);
						$('#naturalidade').val(data.naturalidade);
						$('#telResid').val(data.telResid);
						$('#telCel').val(data.telCel);
						$('#emailPessoal').val(data.emailPessoal);
						$('#estadoCivil').val(data.estadoCivil);
						$('#escolaridade').val(data.escolaridade);
						$('#emissor').val(data.emissor);
						$('#email').val(data.email);
						$('#cargo').val(data.cargo);
						$('#endereco').val(data.logr);
						$('#bairro').val(data.bairro);
						$('#cidade').val(data.cidade);
						$('#uf').val(data.uf);
						$('#pais').val(data.pais);
						$('#cep').val(data.cep);
						$('#complemento').val(data.compl);
						
						$('#oab').val(data.oab);
						$('#cep').val(data.emailpessoal);
			
						
                        $('#nome').focus();
                    }
                }
           });   
   return false;    
   })
});