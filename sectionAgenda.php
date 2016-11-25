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
	<title>SectionAgenda</title>
	<script>
		function agenda() {
			document.getElementById("dia").innerHTML = "<?php
				include("agendadodia.php");?>";
		}
		function agenda2() {
			document.getElementById("dia1").innerHTML = "<?php
				include("agendadodia2.php");?>";
		}
	</script>
</head>
	<body onload="agenda2(); agenda()"  >
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">AGENDA</label>
		<div>
			<div id="metade1">
				<h1> Agenda do dia atual</h1>
				<p id="dia">
			</div>
			
			<div id="metade2">
				<h1> Agenda do dia posterior</h1>
				<p id="dia1">
				
			</div>
		</div>
		</div>
	</div>
</body>
</html>