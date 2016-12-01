<?php
require_once ("verificaSessao.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$stmt = $pdo->query("select * from colaborador");
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
	

	<title>Consultar Colaborador</title>

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
								<table class="table table-hover table-bordered">
								<thead>
								  <tr>
									<th>Colaborador</th>
									<th>CPF</th>
									<th>Detalhes</th>
								  </tr>
								</thead>
								<tbody>
								<?php while ($lista = $stmt->fetchObject()): ?>
								<?php 
									$ct=$lista->cpfColaborador;
									$nuser = $pdo->query("SELECT nome FROM colaborador WHERE cpf='$ct'");
									$ftsr = $nuser->fetch();
							
								?>
								<tr>
								
									<td> <?php echo $lista->nome ?>  </td>
									<td> <?php echo $lista->cpf ?>  </td>
									<td> <a href="detalhecolaborador.php?cpc=<?php echo $lista->cpf?>"> <img src = "lp.jpg"> </a> </td>
								</tr>
								<?php endwhile ?>
								</tbody>
								</table>
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