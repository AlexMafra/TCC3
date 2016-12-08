<?php
require_once ("verificaSessao.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$stmt = $pdo->query("select * from cliente WHERE cpf='$tr'");
while ($lista = $stmt->fetchObject()): 
			$tr=$lista->cpfCliente;
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
	

	<title>Consultar Cliente</title>

</head>

<body id="all" onload="pesquisar">
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
				include_once ("clienteMenu1.php");
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
						<li class="active"><a href="#tab1" data-toggle="tab">CLIENTE</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<form name="f2" method="post" action="cadastro.php">
						<input type="hidden" name="tipo" id="tipo" value="cliente" class="form-control"/>
							<div class="row">
								<div class="form-group col-lg-8">
									<label for="usuário">Nome</label>
								<input type="text" name="nome" id="nome" value = "<?php echo $lista->nome; ?>"class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Nascimento</label>
									<input type="text" name="dataNascimento" id="dataNascimento" value = "<?php echo $lista->dataNascimento; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Sexo</label>
									<input name="sexo" id="sexo" value = "<?php echo $lista->sexo; ?>" class="form-control" />
									
								</div>
								<div class="form-group col-lg-4">
									
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário" required>Estado Civil</label>
									<input type="text" name="estadoCivil" id="estadoCivil" value = "<?php echo $lista->estadoCivil; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">CPF</label>
									<input type="text" name="cpf" id="cpf" value = "<?php echo $lista->cpf; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">RG</label>
									<input type="tel" name="rg" id="rg" value = "<?php echo $lista->rg; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Emissor</label>
									<input type="text" name="emissor" id="emissor" value = "<?php echo $lista->emissor; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row" >
								<div class="form-group col-lg-8">
									<label>Endere&ccedil;o</label>
									<input type="text" name="endereco" id="endereco" value = "<?php echo $lista->endereco; ?>" class="form-control" />
								</div>
								<div class="form-group col-lg-4">
									<label>CEP</label>
									<input type="tel" name="cep" id="cep" value = "<?php echo $lista->cep; ?>" class="form-control"/>
								</div>
							</div>
							 <div class="row" >
								<div class="form-group col-lg-8">
									<label>Complemento</label>
									<input type="text" name="complemento" id="complemento" value = "<?php echo $lista->complemento; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label>Bairro</label>
									<input type="text" name="bairro" id="bairro" value = "<?php echo $lista->bairro; ?>" class="form-control" />
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-5">
									<label for="usuário">Cidade</label>
									<input type="text" name="cidade" id="cidade" value = "<?php echo $lista->cidade; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-5">
									<label for="usuário">Natural</label>
									<input type="text" name="naturalidade" id="naturalidade" value = "<?php echo $lista->naturalidade; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
									<label for="usuário">UF</label>
									<select type="text" name="uf" id="uf" value = "<?php echo $lista->uf; ?>" class="form-control"/> 
										<option> </option>
										<option>AC</option> 
										<option>AL</option> 
										<option>AP</option> 
										<option>AM</option> 
										<option>BA</option> 
										<option>CE</option> 
										<option>DF</option> 
										<option>ES</option> 
										<option>GO</option> 
										<option>MA</option>
										<option>MT</option> 
										<option>MS</option> 
										<option>MG</option> 
										<option>PA</option> 
										<option>PB</option>
										<option>PR</option> 
										<option>PE</option> 
										<option>PI</option> 
										<option>RJ</option> 
										<option>RN</option>
										<option>RS</option> 
										<option>RO</option> 
										<option>RR</option> 
										<option>SC</option> 
										<option>SP</option>
										<option>SE</option> 
										<option>TO</option>
								  </select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">Pa&iacute;s</label>
									<input type="text" name="pais" id="pais" value = "<?php echo $lista->pais; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Nacionalidade</label>
									<input type="text" name="nacionalidade" id="nacionalidade" value = "<?php echo $lista->nacionalidade; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Telefone</label>
									<input type="tel" name="telResid" id="telResid" maxlength="10" value = "<?php echo $lista->telResid; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
								</div>
								<div class="form-group col-lg-6">
									<label for="usuário">Email</label>
									<input type="email" name= "emailPessoal" id="emailPessoal" value = "<?php echo $lista->emailPessoal; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Celular</label>
									<input type="tel" name="telCel" id="telCel" maxlength="11" value = "<?php echo $lista->telCel; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
								</div>
								<div class="form-group col-lg-6">
									<label for="usuário">Escolaridade</label>
									<input type="text" name="escolaridade" id="escolaridade" value = "<?php echo $lista->escolaridade; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<label for="usuário">Profissão</label>
									<input type="text" name="profissao" id="profissao" value = "<?php echo $lista->profissao; ?>" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<label for="txtsenha">Senha</label>
									<input id="txtSenha" name="txtsenha" type="password" title="Senha" value = "<?php echo $lista->txtsenha; ?>" class="form-control"/>
								</div>
								<div class="form-group col-lg-6">
									<label for="repetir_senha">Confirmar Senha</label>
									<input id="repetir_senha" name="repetir_senha" type="password" title="Repetir Senha" value = "<?php echo $lista->repetir_senha; ?>" oninput="validaSenha(this)" class="form-control"/>
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
<?php endwhile ?>