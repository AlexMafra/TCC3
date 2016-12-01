<?php
include_once ("verificasessao.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$stmt = $pdo->query("select * from agenda where cpfcolaborador = $tr");

?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	 
  <title>Consulta Agenda</title>
  
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
						<li class="active"><a href="#tab1" data-toggle="tab">AGENDA</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<table class="table table-hover table-bordered">
						<thead>
						  <tr>
							<th>Cliente</th>
							<th>Dia</th>
							<th>Mês</th>
							<th>Ano</th>
							<th>Horário</th>
						  </tr>
						</thead>
						<tbody>
			
								<?php while ($troca = $stmt->fetchObject()): ?>
								<?php 
									$ct=$troca->cpfCliente;
									$nuser = $pdo->query("SELECT nome FROM Cliente WHERE cpf='$ct'");
									$ftsr = $nuser->fetch();
							
								?>
								<tr>
											
											<td> <?php echo $ftsr["nome"] ?>  </td>
											<td> <?php echo $troca->dia ?>  </td>
											<td> <?php echo $troca->mes ?>  </td>
											<td> <?php echo $troca->ano ?>  </td>
											<td> <?php echo $troca->horario ?>  </td>
											
											<td> <a href="rejeita.php?dia=<?php echo $troca->dia?>&ano=<?php echo $troca->ano?>&mes=<?php echo $troca->mes?>&horario=<?php echo $troca->horario?>&cpfcliente=<?php echo $ct?>"> <img src = "x.png"> </a> </td>
								</tr>
								<?php endwhile ?>	
						</tbody>
					</table>
					</div>
					</div>
					</div>
					</div>
				</div> <!-- div page-wrapper -->
			</div>			<!-- col-lg-10 -->
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