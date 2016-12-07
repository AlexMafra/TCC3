<?php
include_once ("principal.php");
require_once ("verificaSessao.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='cliente.js'></script>
	<script type='text/javascript' src='oab.js'></script>

  <title>Solicitação ao Cliente</title>
  
</head>

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">Solicitação ao Cliente</label>
    <div>
      <form name="formProc" method="post" action="solicitacao.php">
		<div class="row">
		
			<div>
				<label for="usuário">Cliente</label>
				<input type="text" name="nome" id="nome" required style="width:360px; margin-left:79px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:54px;">CPF</label>
				<input type="text" name="cpf" id="cpf" required style="margin-left:22px;" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Tipo de Documento</label>
					<SELECT NAME = "tipoDoc1">
					<option disabled selected value> -- Selecione uma Opção -- </option>
						<OPTION>RG</option>
						<OPTION>CPF</option>
						<OPTION>CNH</option>
						<OPTION>CERTIDÃO DE NASCIMENTO</option>
						<OPTION>CERTIDÃO DE CASAMENTO</option>
						<OPTION>CERTIDÃO DE ÓBITO</option>
					</SELECT>
					
					<SELECT NAME = "tipoDoc2">
							<option disabled selected value> -- Selecione uma Opção -- </option>
						<OPTION>RG</option>
						<OPTION>CPF</option>
						<OPTION>CNH</option>
						<OPTION>CERTIDÃO DE NASCIMENTO</option>
						<OPTION>CERTIDÃO DE CASAMENTO</option>
						<OPTION>CERTIDÃO DE ÓBITO</option>
					</SELECT>
					
					<SELECT NAME = "tipoDoc3">
							<option disabled selected value> -- Selecione uma Opção -- </option>
						<OPTION>RG</option>
						<OPTION>CPF</option>
						<OPTION>CNH</option>
						<OPTION>CERTIDÃO DE NASCIMENTO</option>
						<OPTION>CERTIDÃO DE CASAMENTO</option>
						<OPTION>CERTIDÃO DE ÓBITO</option>
					</SELECT>
					
				
				
			</div>
			<div>
				<label for="usuário" style="margin-left:54px;">Mensagem</label>
				<textarea name="mensagem" maxlength="250" rows="10" cols="40" placeholder="Escreva aqui uma mensagem ao seu cliente" >
				</textarea>
			</div>
			
			<div>
				
			</div>

			<div>
				<button type="submit" class="botao">Enviar</button>
			</div>
		</div>
	 
	 
	</form>
    </div>
    </div>
</div>

</html>