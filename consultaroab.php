<?php
 require_once('config/conn.php');
 
 $oab = $_POST['oab'];
 
 $cpf = $_POST['cpf'];
 
 if(isset ($oab)){
$consulta = $pdo->prepare("SELECT nome, cpf FROM colaborador WHERE numeroOAB= :oab;");
$consulta->bindParam( ":oab", $oab, PDO::PARAM_INT);
$consulta->execute();
$reg=$consulta->fetch(PDO::FETCH_ASSOC);
$dados['nome']  = (string) $reg['nome'];
$dados['cpf']  = (string) $reg['cpf'];

}

if (isset ($cpf)){
$consulta = $pdo->prepare("SELECT nome, numeroOAB FROM colaborador WHERE cpf= :cpf;");
$consulta->bindParam( ":cpf", $cpf, PDO::PARAM_INT);
$consulta->execute();
$reg=$consulta->fetch(PDO::FETCH_ASSOC);
$dados['nome']  = (string) $reg['nome'];
$dados['oab']  = (string) $reg['numeroOAB'];	
}



if( isset ($dados['nome'])){
$dados['sucesso'] =1;
}

else{
	$dados['sucesso'] =0;
}

echo json_encode($dados);

?>