<?php
include_once ("principal.php");
include_once ("verificasessao.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	 <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
  <script type='text/javascript' src='cliente.js'></script>
  <script type='text/javascript' src='oab.js'></script>

  <title>Consulta Colaborador</title>
  
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
				<button type="submit" class="botao">Enviar</button>
			</div>
		</div>
	 
	 
	</form>
    </div>
    </div>
</div>

</html>