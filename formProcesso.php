
<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='cliente.js'></script>
	<script type='text/javascript' src='oab.js'></script>

	<title>Processo</title>
  
	
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
					<div class="tab-pane active" id="tab1">
						<form name="formProc" method="post" action="processo.php">
						<!--<input hidden type="text" name="tipo" id="tipo" value="cliente" class="form-control"/>-->
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">Nº Processo</label>
									<input type="text" name="numeroproc" required id="numeroproc" class="form-control"/>			
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">Origem</label>
									<input type="text" name="origem" id="origem" required class="form-control"/>
								</div>
								<div class="form-group col-lg-3">
									<label for="usuário">Comarca</label>
									<input type="text" name="comarca" id="comarca" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
									<label for="usuário">Vara</label>
									<input type="text" name="vara" id="vara" class="form-control"/>
								</div>
								<div class="form-group col-lg-3">
									<label for="usuário">Competência</label>
									<input type="text" name="competencia" id="competencia" required class="form-control"/>
								</div>
							</div>
							 
							<div class="row" >
								<div class="form-group col-lg-8">
									<label for="usuário">Cliente</label>
									<input type="text" name="nome" id="nome" required class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">CPF</label>
									<input type="text" name="cpf" id="cpf" required class="form-control"/>
								</div>
							</div>
							<div class="row" >
								<div class="form-group col-lg-6">
									<label for="usuário">Assunto</label>
									<input type="text" name="assunto" id="assunto" required class="form-control"/>
								</div>
							</div>
							<div class="row" >
								<div class="form-group col-lg-6">
									<label for="usuário">Advogado</label> 
									<input type="text" name="adv" id="adv" required class="form-control"/>
								</div>
								<div class="form-group col-lg-3">
									<label for="usuário">CPF</label> 
									<input type="text" name="cpfa" id="cpfa" required class="form-control"/>
								</div>
				
								<div class="form-group col-lg-3">
									<label for="usuário">OAB</label>
									<input type="text" name="oab" id="oab" class="form-control"/></div></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-12">
									<button type="button" class="btn btn-primary" onClick="validar(document.form);">CANCELAR</button>
									<button type="button" class="btn btn-primary" onClick="validar(document.form);">SALVAR</button>
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