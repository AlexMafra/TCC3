<?php
//include_once ("verificasessao.php");
?>
<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">  
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
  <script type='text/javascript' src='cliente.js'></script>
  <script type='text/javascript' src='oab.js'></script>

  <title>Consulta Colaborador</title>
  
</head>
<body id="all">
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
						<li class="active"><a href="#tab1" data-toggle="tab">COLABORADOR</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<form name="formProc" method="post" action="processo.php">
							<div class="row">

							</div>
							<div class="row">
								<div class="form-group col-lg-12">
									<button type="submit" class="btn btn-primary" value="submit">ENVIAR</button>
									<input name="ok" type="hidden" id="ok"></input>
								</div>
							</div>
						</form>
					</div>
					</div>
					</div>
					</div>
	 
	
				</div>
			</div>
		</div>
	</div>
</body>
</html>