<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='consultarCliente.js'></script>
  <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
  <script type='text/javascript' src='cliente.js'></script>
  <title>FormAgenda</title>
  
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
						<li class="active"><a href="#tab1" data-toggle="tab">AGENDA</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<form name="f2" method="post" action="agenda.php">
							<div class="row">
								<div class="form-group col-lg-8">
									<label for="usuário">Cliente</label>
									<input type="text" name="nome" id="nome" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">CPF</label>
									<input type="text" name="cpf" id="cpf" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">Data</label>
									<input type="text" name="data" id="data" value="<?=$_GET['dia']?>/<?=$_GET['mes']?>/<?=$_GET['ano']?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Horário</label>
									<input type="text" name="horario" id="horario" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-8">
									<label for="usuário">Advogado</label> 
									<select type="text" name="adv" id="adv" class="form-control">
										<?php require ('consultaAdvogado.php');?>
									</select>
								</div>
							</div>
							<input type hidden  name="dia" type="text" id="dia" value="<?=$_GET['dia']?>" />
							<input type hidden name="mes" type="text" id="mes" value="<?=$_GET['mes']?>" />
							<input type hidden name="ano" type="text" id="ano" value="<?=$_GET['ano']?>" />
							<div class="row">
								<div class="form-group col-lg-12">
									<button type="submit" class="btn btn-primary" value="submit">SALVAR</button>
									<input name="ok" type="hidden" id="ok"></input>
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