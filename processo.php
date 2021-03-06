<?php
	require_once('config/conn.php');
	require_once ("verificaSessao.php");

	$numproc= $_POST["numeroproc"];
	$origem= $_POST["origem"];
	$comarca= $_POST["comarca"];
	$competencia= $_POST["competencia"];
	$vara= $_POST["vara"];
	$nome= $_POST["nome"];
	$cpf= $_POST["cpf"];
	$assunto= $_POST["assunto"];
	$adv=$_POST["adv"];
	$oab=$_POST["oab"];
	$cpfadv=$_POST["cpfa"];
	
		$insere = $pdo->prepare("INSERT INTO processo (cpf, numero, comarca, vara, competencia, assunto, advogado, origem, cpfadv ) VALUES (:cpf, :numero, :comarca, :vara, :competencia, :assunto, :advogado, :origem, :cpfadv)");
		
		$insere->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
		$insere->bindParam( ":numero", $numproc, PDO::PARAM_STR);
		$insere->bindParam( ":comarca", $comarca, PDO::PARAM_STR);
		$insere->bindParam( ":vara", $vara, PDO::PARAM_STR);
		$insere->bindParam( ":competencia", $competencia, PDO::PARAM_STR);
		$insere->bindParam( ":assunto", $assunto, PDO::PARAM_STR);
		$insere->bindParam( ":advogado", $adv, PDO::PARAM_STR);
		$insere->bindParam( ":origem", $origem, PDO::PARAM_STR);
		$insere->bindParam( ":cpfadv", $cpfadv, PDO::PARAM_STR);
		
		$inserir = $insere->execute();		
if( $inserir ) {
		header('Location: formprocesso.php');
	}
	
?>
