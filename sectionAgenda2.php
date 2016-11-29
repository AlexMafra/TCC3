<?php
include_once ("principal2.php");
require_once ("verificaSessao.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>    
	<title>SectionAgenda</title>

	<script>
    function carregar(pagina){
        $("#conteudo").load(pagina);
    }
	</script>
</head>
	<body onload="carregar('preparaagenda.php')"  >
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">AGENDA</label>
		<div>
		<ul>
            <li><a onclick="carregar('preparaagenda.php?var=1')" href="#"	>Próximo Mês</a></li>
            <li><a onclick="carregar('preparaagenda.php?var=-1')" href="#">Mês Anterior</a></li>
            <li><a onclick="carregar('preparaagenda.php')" href="#">Mês Atual</a></li>
        </ul>
		
			
		</div>
		 <div id="conteudo"></div>
		</div>
	</div>
</body>
</html>