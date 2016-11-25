<?php
include_once ("principal2.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
  <title>FormAgenda</title>
  
</head>

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">AGENDAR</label>
    <div>
      <form name="f2" method="post" action="cadastro.php">
		<div class="row">
		
			<div>
				<label for="usuário">Novo Processo</label>
				<input type="radio" name="OPCAO" value="op1" style="margin-left:30px;" class="form-control"/>
				<input type="radio" name="OPCAO" value="op2" style="margin-left:325px;" class="form-control"  checked />
				<label for="usuário" style="float:right">Processo Antigo</label>
				
			</div>
			<div>
				<label for="usuário">Cliente</label>
				<input type="text" name="nome" id="nome" style="width:400px; margin-left:20px;" class="form-control"/>
				<label for="usuário" style="margin-left:50px;">CPF</label>
				<input type="text" name="cpf" id="cpf" style="margin-left:20px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Data</label>
				<input type="text" name="data" id="data" style="margin-left:53px;" onKeyPress="return Mascaras_Format(document.form,'data','99/99/9999',event);" size="20" maxlength="10" value="<?php $_POST['dia']?>" />
				<label for="usuário" style="margin-left:240px;">Horário</label>
				<input type="text" name="horario" id="horario" style="margin-left:20px;" class="form-control"/>
			</div>
			
			<div>
				<label for="usuário">Advogado</label> 
				<input type="text" name="adv" id="adv" style="width:370px; margin-left:10px;" class="form-control"/>
			</div>

			<div>
				<button type="submit" class="botao">Enviar</button>
			</div>
		</div>
	 
	 
	</form>
    </div>
    </div>
</div>

</html>