<?php
require_once ("verificaSessao.php");
include_once ("principal2.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$tr=10794615740;
$stmt = $pdo->query("select * from solicitacao where cpfcliente=$tr and status = true;");
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
	<body>
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">Consultar Processo</label>
		<div>
			
			<div class="row">
			<div>
				<label for="usuário" style="margin-left:54px;">Nome</label>
				<input type="text" name="nome" id="nome" required style="margin-left:22px;" class="form-control"/>
			</div>
			<table border = 3>
			
			<tr>
                        <td>Solicitante</td>
                        <td>Tipo de Documento</td>
						
						
            </tr>
			
			<?php while ($lista = $stmt->fetchObject()): ?>
			<?php 
				$ct=$lista->cpfColaborador;
				$nuser = $pdo->query("SELECT nome FROM colaborador WHERE cpf='$ct'");
				$ftsr = $nuser->fetch();
		
			?>
            <tr>
                        
						<td> <?php echo $lista->tipoDoc ?>  </td>
						<td> <?php echo $ftsr['nome'] ?>  </td>
						
						<td> <a href="enviar.php?tipo=<?php echo $lista->tipodoc?>"> <img src = "lp.jpg"> </a> </td>
						
            </tr>
			<?php endwhile ?>	
			</table>
			
			
			</div>
			
		</div>
		</div>
	</div>
</body>
</html>