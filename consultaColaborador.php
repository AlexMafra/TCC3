<?php
require_once ("verificaSessao.php");
include_once ("principal2.php");
require_once('config/conn.php');
$tr=$_SESSION['usuario'];
$stmt = $pdo->query("select * from colaborador");

?>

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
	<body>
	<div id="section">
		<div class="tabs-container">
    
		<!-- ABA 1 -->
		<input type="radio" name="tabs" class="tabs" id="tab1" checked>
		<label for="tab1">Consultar Cliente</label>
		<div>
			<div class="row">
			<table border = 3>
			
			<tr>
                        <td>Colaborador</td>
                        <td>CPF</td>
						
            </tr>
			
			<?php while ($lista = $stmt->fetchObject()): ?>
			<?php 
				$ct=$lista->cpfCliente;
				$nuser = $pdo->query("SELECT nome FROM colaborador WHERE cpf='$ct'");
				$ftsr = $nuser->fetch();
		
			?>
            <tr>
                        
						<td> <?php echo $lista->cpf ?>  </td>
						<td> <?php echo $lista->nome ?>  </td>
						<td> <a href="detalhecolaborador.php?cpc=<?php echo $lista->cpf?>"> <img src = "lp.jpg"> </a> </td>
            </tr>
			<?php endwhile ?>	
			</table>
			</div>
		</div>
	</div>
</body>
</html>


