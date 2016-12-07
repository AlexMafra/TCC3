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

  <title>Financeiro</title>
  
</head>

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">Financeiro</label>
    <div>
      
		<div class="row">
			<div>
				<label for="usuário">Cliente</label>
			</div>
		
			<div>
				<a href="formpagamento.php"> Recebimento de Cliente </a>	
			</div>
			
			<div>
				<a href="formpagamentocolaborador.php"> Pagamento a Colaborador</a>
			</div>
			
			<div>
				<a href="formdespesa.php"> Despesas Diversas</a>	
			</div>
			
			<div>
				<a href="consultames.php"> Consultas </a>	
			</div>
		
		
		</div>
	 
	 
	
		</div>
    </div>
</div>

</html>