<?php
include_once ("principal.php");
?>
<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type='text/javascript' src='cep.js'></script>
  <title>FormCliente</title>
 <script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</head>

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">CLIENTE</label>
    <div>
      <form name="f2" method="post" action="cadastro.php">
				
				<input hidden type="text" name="tipo" id="tipo" value="cliente" class="form-control"/>
			<div>
				<label for="usuário">Nome</label>
				<input type="text" required name="nome" id="nome" style="width:380px; margin-left:6px;" class="form-control"/>
				<label for="usuário" style="margin-left:70px;">Nascimento</label>
				<input required type="tel" pattern="^\d{2}/\d{2}/\d{4}$" placeholder="xx/xx/xxxx" name="dataNascimento" id="dataNascimento" title="Informe uma data de nascimento válida no formato xx/xx/xxxx" class="form-control"/>
			</div>
			<div>
				<label for="usuário" required style="margin-left:25px;">Sexo</label>
				<input type="text" required name="sexo" id="sexo" style="margin-left:12px;" class="form-control"/>
				<label for="usuário" required style="margin-left:18px;">Estado Civil</label>
				<input type="text" name="estadoCivil" id="estadoCivil" style="margin-left:6px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">CPF</label>
				<input type="tel" pattern="^\d{11}$" required placeholder="xxx.xxx.xxx-xx" title="informe um CPF válido, somente os numeros "name="cpf" id="cpf" style="margin-left:26px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:30px;">RG</label>
				<input required type="tel" pattern="^\d{9}$"name="rg" placeholder="xx.xxx.xxx-x" id="rg" title="Informe um rg válido somente os numeros" style="margin-left:28px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:40px;">Emissor</label>
				<input type="text" name="emissor" id="emissor" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Endereço</label>
				<input type="text" name="endereco" id="endereco" style="width:418px; margin-left:8px;" class="form-control"/>
				<label for="usuário" style="margin-left:54px;">Bairro</label>
				<input type="text" name="bairro" id="bairro" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Complemento</label>
				<input type="text" name="complemento" id="complemento" style="width:365px; margin-left:8px;" class="form-control"/>
				<label for="usuário" style="margin-left:70px;">CEP</label>
				<input type="tel" pattern="^\d{5}-\d{3}$" required name="telResid" placeholder="xxxxx-xxx" name="cep" id="cep" title="Informe um CEP com o formato xxxxx-xxx" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Cidade</label>
				<input type="text" name="cidade" id="cidade" style="width:300px; margin-left:26px;" class="form-control"/>
				<label for="usuário" style="margin-left:46px;">Natural</label>
				<input type="text" name="naturalidade" id="naturalidade" style="margin-left:10px;" class="form-control"/>
				<label for="usuário" style="margin-left:30px;">UF</label>
				<input type="text" name="uf" id="uf" style="width:50px; margin-left:10px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">País</label>
				<input type="text" name="pais" id="pais" style="width:230px; margin-left:59px;" class="form-control"/>
				<label for="usuário" style="margin-left:120px;">Nacionalidade</label>
				<input type="text" name="nacionalidade" id="nacionalidade" style="width:200px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Telefone</label>
				<input type="tel" pattern="^\d{2}$" required name="DDD" id="DDD" placeholder="xxxx-xxxx"style="width:40px; margin-left:12px;" class="form-control"/>
				<input type="tel" pattern="^\d{4}-\d{4}$" required name="telResid" id="telResid" style="margin-left:0px;" title="Informe um Celular com o formato xxxxx-xxxx" class="form-control"/>
				
				<label for="usuário" style="margin-left:70px;">Email</label>
				<input type="email" value="" placeholder="nome@email.com" required name= "emailPessoal" id="emailPessoal" style="width:255px;" class="form-control"/>
		
			</div>
			<div>
				<label for="usuário">Celular </label>
				<input type="tel" pattern="^\d{2}$"  name="DDD" id="DDD" style="width:40px; margin-left:30px;" class="form-control"/>
								
				<input type="tel" pattern="^\d{4}-\d{5}$" placeholder="xxxx-xxxxx" name="telCel" id="telCel" style="margin-left:0px;" title="Informe um Celular com o formato xxxxx-xxxx" class="form-control"/>
				
				<label for="usuário" style="margin-left:64px;">Escolaridade</label>
				<input type="text" name="escolaridade" id="escolaridade" style="width:300px; margin-left:10px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Profissão</label>
				<input type="text" name="profissao" id="profissao" style="width:260px; margin-left:2px;" class="form-control"/>
			</div>
			<div>
			<input id="txtSenha" name="txtsenha" type="password" required placeholder="Digite uma Senha" title="Senha" />
					<label for="repetir_senha">Confirmar Senha</label>
					<input id="repetir_senha" name="repetir_senha" type="password" required  placeholder="Repetir Senha" title="Repetir Senha" oninput="validaSenha(this)" />
					
			</div>
			
			<div>
				<button type="submit" class="botao">Enviar</button>
			</div>	 
	 
	</form>
    </div>
    </div>
</div>

</html>