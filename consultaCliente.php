<?php
//require_once ("verificaSessao.php");
include_once ("principal2.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='consultarCliente.js'></script>
	

	<title>Consultar Cliente</title>

</head>
	<body>
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">Consultar Cliente</label>
		<div>
			<div class="row">
			<div>
			<input type="text" name="tipo" id="tipo" value = "cliente" class="form-control" hidden />
			
			<label for="usuário">CPF</label>
				<input type="text" name="cpf" id="cpf" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Nome</label>
				<input type="text" name="nome" id="nome" style="width:380px; margin-left:8px;" class="form-control"/>
				<label for="usuário" style="margin-left:65px;">Nascimento</label>
				<input type="text" name="dataNascimento" id="dataNascimento" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Sexo</label>
				<input type="text" name="sexo" id="sexo" style="margin-left:22px;" class="form-control"/>
				<label for="usuário" style="margin-left:272px;">Estado Civil</label>
				<input type="text" name="estadoCivil" id="estadoCivil" class="form-control"/>
			</div>
			<div>
				
				<label for="usuário" style="margin-left:30px;">RG</label>
				<input type="text" name="rg" id="rg" class="form-control"/>
				<label for="usuário" style="margin-left:30px;">Emissor</label>
				<input type="text" name="emissor" id="emissor" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Endereço</label>
				<input type="text" name="endereco" id="endereco" style="width:418px; margin-left:8px;" class="form-control"/>
				<label for="usuário" style="margin-left:57px;">Bairro</label>
				<input type="text" name="bairro" id="bairro" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Complemento</label>
				<input type="text" name="complemento" id="complemento" style="width:365px; margin-left:8px;" class="form-control"/>
				<label for="usuário" style="margin-left:75px;">CEP</label>
				<input type="text" name="cpdcli" id="cpfcli" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Cidade</label>
				<input type="text" name="cidade" id="cidade" style="width:300px; margin-left:12px;" class="form-control"/>
				<label for="usuário" style="margin-left:46px;">Natural</label>
				<input type="text" name="naturalidade" id="naturalidade" style="margin-left:12px;" class="form-control"/>
				<label for="usuário" style="margin-left:43px;">UF</label>
				<input type="text" name="uf" id="uf" style="width:50px; margin-left:12px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">País</label>
				<input type="text" name="pais" id="pais" style="width:230px; margin-left:47px;" class="form-control"/>
				<label for="usuário" style="margin-left:138px;">Nacionalidade</label>
				<input type="text" name="nacionalidade" id="nacionalidade" style="width:200px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Telefone</label>
				<input type="text" name="telResid" id="telResid" style="margin-left:0px;" class="form-control"/>
				<label for="usuário">Celular</label>
				<input type="text" name="telCel" id="telCel" style="margin-left:0px;" class="form-control"/>
				<label for="usuário" style="margin-left:70px;">Email</label>
				<input type="text" name="emailPessoal" id="emailPessoal" style="width:255px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Escolaridade</label>
				<input type="text" name="escolaridade" id="escolaridade" style="width:288px; margin-left:7px;" class="form-control"/>
				<label for="usuário" style="margin-left:47px;">Profissão</label>
				<input type="text" name="profissao" id="profissao" style="width:255px; margin-left:7px;" class="form-control"/>
			</div>
			<div>
			</div>	
	
		</div>
		</div>
	</div>
</body>
</html>