<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
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
						<form name="f2" method="post" action="cadastro.php">
							<div class="row">
								<div class="form-group col-lg-6">
									<label for="usuário">Novo Processo</label>
									<input type="radio" name="OPCAO" value="op1" class="form-control"/>
								</div>
								<div class="form-group col-lg-6">
									<label for="usuário">Processo Antigo</label>
									<input type="radio" name="OPCAO" value="op2" class="form-control"  checked />
								</div>
							</div>
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
									<input required type="text" pattern="^\d{2}/\d{2}/\d{4}$" placeholder="xx/xx/xxxx" name="data" id="data" title="Informe uma data válida no formato xx/xx/xxxx" class="form-control" value="<?php $_POST['dia']?>"/>
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
									<input type="text" name="adv" id="adv" class="form-control"/>
								</div>
							</div>
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