<?php
	//require_once("verificaSessao.php");
	require_once('config/conn.php');
	$adv=$_POST["adv"];
	
	$consulta = $pdo->prepare("SELECT cpf FROM colaborador WHERE nome= :nome;");
	$consulta->bindParam( ":nome", $adv, PDO::PARAM_STR);
	$consulta->execute();
	$cp = $consulta->fetch(PDO::FETCH_ASSOC);
	$cpf = $cp['cpf'];
	$dia =$_POST["dia"];
	$mes =$_POST["mes"];
	$ano =$_POST["ano"];
	$horario =$_POST["horario"];
	$cpfColaborador =$cpf;
	$cpfCliente =$_POST["cpf"];
	$idusuario =$cpf;

		$insere = $pdo->prepare("INSERT INTO agenda (idusuario, dia, mes, ano, horario, cpfColaborador, cpfCliente) VALUES (:idusuario, :dia, :mes, :ano, :horario, :cpfColaborador, :cpfCliente)");
		
		$insere->bindParam( ":idusuario", $idusuario, PDO::PARAM_STR);
		$insere->bindParam( ":dia", $dia, PDO::PARAM_STR);
		$insere->bindParam( ":mes", $mes, PDO::PARAM_STR);
		$insere->bindParam( ":ano", $ano, PDO::PARAM_STR);
		$insere->bindParam( ":horario", $horario, PDO::PARAM_STR);
		$insere->bindParam( ":cpfCliente", $cpfCliente, PDO::PARAM_STR);
		$insere->bindParam( ":cpfColaborador", $cpfColaborador, PDO::PARAM_STR);
		
		$inserir = $insere->execute();
		
		if($inserir){
			?> 
				<script>
					alert('Agendamento efetuado com sucesso');  
					window.setTimeout("location='sectionagenda2.php';");
				</script>
			<?php
		}
			else{
?> 
				<script>
					alert('Houve um erro durante agendamento, favor  conferir os dados e inserir novamente');  
					window.setTimeout("location='formagenda2.php';");
				</script>;
			<?php
			}
?>