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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>    
  <script type='text/javascript' src='cliente.js'></script>
	<title>Consultar Processo</title>

</head>
	<body onload="agenda2(); agenda()"  >
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">Consultar Processo</label>
		<div>
			
			<div class="row">
			<div>
				<label for="usuário" style="margin-left:54px;">CPF</label>
				<input type="text" name="cpf" id="cpf" required style="margin-left:22px;" class="form-control"/>
				
				<label for="usuário">Cliente</label>
				<input type="text" name="nome" id="nome" required style="width:360px; margin-left:79px;" class="form-control"/>
				
				
			</div>
			</div>
			
		</div>
		</div>
	</div>
</body>
</html>