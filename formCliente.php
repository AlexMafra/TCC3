
<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type='text/javascript' src='cep.js'></script>
	<title>FormCliente</title>
  
	<script>
	function validaSenha (input){ 
		if (input.value != document.getElementById('txtSenha').value) {
		input.setCustomValidity('Repita a senha corretamente');
	  } else {
		input.setCustomValidity('');
	  }
	} 
	</script>
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
						<li class="active"><a href="#tab1" data-toggle="tab">CLIENTE</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1"><br>
						<form name="f2" method="post" action="cadastro.php">
						<input type="hidden" name="tipo" id="tipo" value="cliente" class="form-control"/>
							<div class="row">
								<div class="form-group col-lg-8">
									<label for="usuário">Nome</label>
								<input type="text" required name="nome" id="nome" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Nascimento</label>
									<input required type="text" pattern="^\d{2}/\d{2}/\d{4}$" placeholder="xx/xx/xxxx" name="dataNascimento" id="dataNascimento" title="Informe uma data de nascimento válida no formato xx/xx/xxxx" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Sexo</label>
									<select class="form-control" name="sexo" title="O campo Sexo &eacute; obrigat&oacute;rio">
										<option value=""></option>
										<option value="F">Feminino</option>
										<option value="M">Masculino</option>
									</select>
								</div>
								<div class="form-group col-lg-4">
									
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário" required>Estado Civil</label>
									<input type="text" name="estadoCivil" id="estadoCivil" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">CPF</label>
									<input type="tel" pattern="^\d{11}$" required placeholder="xxx.xxx.xxx-xx" title="informe um CPF válido, somente os numeros "name="cpf" id="cpf" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">RG</label>
									<input required type="tel" pattern="^\d{9}$"name="rg" placeholder="xx.xxx.xxx-x" id="rg" title="Informe um rg válido somente os numeros" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Emissor</label>
									<input type="text" name="emissor" id="emissor" class="form-control"/>
								</div>
							</div>
							<div class="row" >
								<div class="form-group col-lg-8">
									<label>Endere&ccedil;o</label>
									<input type="text" name="endereco" class="form-control" title="O campo Endere&ccedil;o &eacute; obrigat&oacute;rio" value="<?php echo $_POST['endereco']; ?>" />
								</div>
								<div class="form-group col-lg-4">
									<label>Bairro</label>
									<input type="text" name="bairro" class="form-control" title="O campo Bairro &eacute; obrigat&oacute;rio" value="<?php echo $_POST['bairro']; ?>" />
								</div>
							</div>
							 <div class="row" >
								<div class="form-group col-lg-8">
									<label>Complemento</label>
									<input type="text" name="complemento" class="form-control" value="<?php echo $_POST['complemento']; ?>" />
								</div>
								<div class="form-group col-lg-4">
									<label>CEP</label>
									<input name="cep" type="text" class="form-control" id="cep"  title="O campo CEP &eacute; obrigat&oacute;rio" onKeyPress="return Mascaras_Format(document.form,'cep','99.999-999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="10" placeholder="" />
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-5">
									<label for="usuário">Cidade</label>
									<input type="text" name="cidade" id="cidade" class="form-control"/>
								</div>
								<div class="form-group col-lg-5">
									<label for="usuário">Natural</label>
									<input type="text" name="naturalidade" id="naturalidade" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
									<label for="usuário">UF</label>
									<input type="text" name="uf" id="uf" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label for="usuário">Pa&iacute;s</label>
									<input type="text" name="pais" id="pais" class="form-control"/>
								</div>
								<div class="form-group col-lg-4">
									
								</div>
								<div class="form-group col-lg-4">
									<label for="usuário">Nacionalidade</label>
									<input type="text" name="nacionalidade" id="nacionalidade" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Telefone</label>
									<input name="telefone" type="text" class="form-control" id="telefone" title="Campo Telefone &eacute; obrigat&oacute;rio" onKeyPress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="14" placeholder="" />
								</div>
								<div class="form-group col-lg-2">
								</div>
								<div class="form-group col-lg-6">
									<label for="usuário">Email</label>
									<input type="email" value="" placeholder="nome@email.com" required name= "emailPessoal" id="emailPessoal" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Celular</label>
									<input name="celular" type="text" class="form-control" id="celular" title="Campo celular &eacute; obrigat&oacute;rio" onKeyPress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
								</div>
								<div class="form-group col-lg-2">
								</div>
								<div class="form-group col-lg-6">
									<label for="usuário">Escolaridade</label>
									<input type="text" name="escolaridade" id="escolaridade" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<label for="usuário">Profissão</label>
									<input type="text" name="profissao" id="profissao" class="form-control"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-5">
									<label for="txtsenha">Senha</label>
									<input id="txtSenha" name="txtsenha" type="password" required placeholder="Digite uma Senha" title="Senha" class="form-control"/>
								</div>
								<div class="form-group col-lg-2">
								</div>
								<div class="form-group col-lg-5">
									<label for="repetir_senha">Confirmar Senha</label>
									<input id="repetir_senha" name="repetir_senha" type="password" required  placeholder="Repetir Senha" title="Repetir Senha" oninput="validaSenha(this)" class="form-control"/>
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