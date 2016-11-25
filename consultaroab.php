<?php
 require_once('config/conn.php');
 
$oab = $_POST['oab'];
$consulta = $pdo->prepare("SELECT nome FROM colaborador WHERE numeroOAB= :oab;");
$consulta->bindParam( ":oab", $oab, PDO::PARAM_INT);
$consulta->execute();
$reg=$consulta->fetch(PDO::FETCH_ASSOC);
$dados['nome']  = (string) $reg['nome'];


if( isset ($dados['nome'])){
$dados['sucesso'] =1;
}
else{
	$dados['sucesso'] =0;
}
echo json_encode($dados);

?>