<?php
require_once('config/conn.php');
require_once("verificaSessao.php");
	$dia=$_GET['dia'];
	$mes=$_GET['mes'];
	$ano=$_GET['ano'];
	$horario=$_GET['horario'];
	$cpfclie=$_GET['cpfcliente'];
	$cpfColaborador=$_SESSION['usuario'];
	

		$insere = $pdo->prepare("DELETE FROM agenda WHERE dia= ':dia' and mes= ':mes' and ano= ':ano' and horario= ':horario'  and cpfcliente = ':cpfcliente' and cpfcolaborador= :cpfColaborador ");
		
		$insere->bindParam( ":dia", $dia, PDO::PARAM_INT);
		$insere->bindParam( ":mes", $mes, PDO::PARAM_INT);
		$insere->bindParam( ":ano", $ano, PDO::PARAM_INT);
		$insere->bindParam( ":horario", $horario, PDO::PARAM_INT);
		$insere->bindParam( ":cpfCliente", $cpfClie, PDO::PARAM_STR);
		$insere->bindParam( ":cpfColaborador", $cpfColaborador, PDO::PARAM_STR);
		$inserir = $insere->execute();
		echo$insere->rowcount();

		if($inserir){

	?> 
		<script>
		alert('Agendamento Excluido com Sucesso');  
		window.setTimeout("location='consultaagenda.php';");
		</script>;
	<? }else{ ?> 
		<script>
		alert('Houve um erro ao excluir agendamento, tente novamente');  
		window.setTimeout("location='consultaagenda.php';");
		</script>;
<?php
}
?>
