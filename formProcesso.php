<?php
include_once ("principal.php");
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

  <title>Processo</title>
  
</head>

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">PROCESSO</label>
    <div>
      <form name="formProc" method="post" action="processo.php">
		<div class="row">
		
			<div>
				<label for="usuário">Nº Processo</label>
				<input type="text" name="numeroproc" required id="numeroproc" style="width:250px; margin-left:10px;" class="form-control"/>
				
			</div>
			<div>
				<label for="usuário">Origem</label>
				<input type="text" name="origem" id="origem" required style="width:250px; margin-left:75px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:78px;">Comarca</label>
				<input type="text" name="comarca" id="comarca" style="width:200px; margin-left:20px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Vara</label>
				<input type="text" name="vara" id="vara" style="width:45px; margin-left:110px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:181px;">Competência</label>
				<input type="text" name="competencia" id="competencia" required style="width:250px; margin-left:20px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Cliente</label>
				<input type="text" name="nome" id="nome" required style="width:360px; margin-left:79px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:54px;">CPF</label>
				<input type="text" name="cpf" id="cpf" required style="margin-left:22px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Assunto</label>
				<input type="text" name="assunto" id="assunto" required style="width:360px; margin-left:65px;" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Advogado</label> 
				<input type="text" name="adv" id="adv" required style="width:360px; margin-left:40px;" class="form-control"/>
				
				<label for="usuário">CPF</label> 
				<input type="text" name="cpfa" id="cpfa" required style="width:360px; margin-left:40px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:54px;">OAB</label>
				<input type="text" name="oab" id="oab"  style="margin-left:22px;" class="form-control"/>
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