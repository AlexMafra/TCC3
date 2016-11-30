
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">

	<title>Agendamentos</title>

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
				include_once ("menuAgenda.php");
			?>
			</div>
			<div class="col-lg-10">
				<div id="page-wrapper">
					<div class="col-lg-12">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">AGENDAR</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<?php require ("preparaAgenda.php");?>
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
<?php
include_once ("rodape.php");
?>