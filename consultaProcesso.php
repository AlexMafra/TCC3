<?php
require_once ("verificaSessao.php");
include_once ("principal2.php");
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
                        <td>Processo</td>
                        <td>Cliente</td>
						
						
            </tr>
			
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
						<td> <a target="_blank" href="http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&numProcesso=<?php echo $lista->numero ?>">Pesquisar no Site do TJ</a> </td>'
            </tr>
			<?php endwhile ?>	
			</table>
			
			
			</div>
			
		</div>
		</div>
	</div>
</body>
</html>