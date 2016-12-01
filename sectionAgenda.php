<?php
require_once ("verificaSessao.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
	<script src="http://www.w3schools.com/lib/w3data.js"></script>    

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
<body id="all" onload="agenda2(); agenda()">
	<div class="container">
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu0.php");
			?>
			</div>
		</div>
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu1.php");
			?>
			</div>
		</div>

		<div class="row center-block">
			<div class="col-lg-2">
			<?php 
				include_once ("menuvertical.php");
			?>
			</div>
			<div class="col-lg-10">
				<div id="page-wrapper">
					<div class="col-lg-12">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">AGENDA</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<form>
									<div class="row">
										<div class="col-lg-6" style="background-color:red">
											<h2> Agenda do dia atual</h2>
											<p id="dia">
										</div>
										<div class="col-lg-6" style="background-color:yellow">
											<h2> Agenda do dia posterior</h2>
											<p id="dia1">
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- div page-wrapper -->
			</div> <!-- col-lg-10 -->
		</div> <!-- row -->
		<div class="row4 center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("rodape.php");
			?>
			</div>
		</div>
	</div> <!-- div container -->
</body> <!-- body id=all -->
</html>