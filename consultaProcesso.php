<?php
require_once ("verificaSessao.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$stmt = $pdo->query("select * from processo");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='cliente.js'></script>
	

	<title>Consultar Processo</title>

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
							<li class="active"><a href="#tab1" data-toggle="tab">PROCESSO</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1"><br>
							<div class="table-responsive">
							<!--<div class="row">
								<div class="col-lg-4">
								<label for="usuário">CPF</label>
								<input type="text" name="cpf" id="cpf" required class="form-control"/>
								</div>
							</div><br>-->
								<table class="table table-hover table-bordered">
								<thead>
								  <tr>
									<th>Processo</th>
									<th>Cliente</th>
									<th>Detalhes</th>
								  </tr>
								</thead>
								<tbody>
								<?php while ($lista = $stmt->fetchObject()): ?>	
								<?php 
									$ct=$lista->cpf;
									$nuser = $pdo->query("SELECT nome FROM cliente WHERE cpf='$ct'");
									$ftsr = $nuser->fetch();
							
								?>
								<tr>
								
									<td> <?php echo $lista->numero ?>  </td>
									<td> <?php echo $ftsr['nome'] ?>  </td>
									<td> <a href="detalheprocesso.php?cpc=<?php echo $lista->numero?>"> <img src = "lp.jpg"> </a> </td>
								</tr>
								<?php endwhile ?>
								</tbody>
								</table>
							</div>
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