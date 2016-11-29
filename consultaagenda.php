<?php
include_once ("principal.php");
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

<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">Consultar Agendamento</label>
    <div>
		<div class="row">
     		<table border = 3>
			
			<tr>
                        <td>Cliente</td>
                        <td>Dia</td>
						<td>Mes</td>
						<td>Ano</td>
						<td>Horário</td>
            </tr>
			
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

		</table>
			
			
	 
	 

    </div>
    </div>
</div>

</html>
