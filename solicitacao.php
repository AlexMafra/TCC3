<?php
	require_once('config/conn.php');
	require_once ("verificaSessao.php");

	$tipodoc1= $_POST["tipoDoc1"];
	$tipodoc2= $_POST["tipoDoc2"];
	$tipodoc3= $_POST["tipoDoc3"];
	$cpfcli= $_POST["cpf"];
	$cpfcol= $_SESSION["usuario"];
	$mensagem= $_POST["mensagem"];
	
	if( isset($tipodoc1)){
		$insere = $pdo->prepare("INSERT INTO solicitacao (cpfCliente, cpfColaborador, tipodoc) 
		VALUES (:cpfcli, :cpfcol, :tipodoc)");
		
		$insere->bindParam( ":cpfcli", $cpfcli, PDO::PARAM_STR);
		$insere->bindParam( ":cpfcol", $cpfcol, PDO::PARAM_STR);
		$insere->bindParam( ":tipodoc", $tipodoc1, PDO::PARAM_STR);
		
		
		$inserir = $insere->execute();
	}
	if( isset($tipodoc2)){
		$insere = $pdo->prepare("INSERT INTO solicitacao (cpfCliente, cpfColaborador, tipodoc) 
		VALUES (:cpfcli, :cpfcol, :tipodoc)");
		
		$insere->bindParam( ":cpfcli", $cpfcli, PDO::PARAM_STR);
		$insere->bindParam( ":cpfcol", $cpfcol, PDO::PARAM_STR);
		$insere->bindParam( ":tipodoc", $tipodoc2, PDO::PARAM_STR);
		
		$inserir = $insere->execute();
	}
if( isset($tipodoc3)){
		$insere = $pdo->prepare("INSERT INTO solicitacao (cpfCliente, cpfColaborador, tipodoc) 
		VALUES (:cpfcli, :cpfcol, :tipodoc)");
		
		$insere->bindParam( ":cpfcli", $cpfcli, PDO::PARAM_STR);
		$insere->bindParam( ":cpfcol", $cpfcol, PDO::PARAM_STR);
		$insere->bindParam( ":tipodoc", $tipodoc3, PDO::PARAM_STR);

		
		$inserir = $insere->execute();
	}
	if( isset($mensagem)){
		$insere = $pdo->prepare("INSERT INTO solicitacao (cpfCliente, cpfColaborador,  mensagem) 
		VALUES (:cpfcli, :cpfcol, :mensagem)");
		
		$insere->bindParam( ":cpfcli", $cpfcli, PDO::PARAM_STR);
		$insere->bindParam( ":cpfcol", $cpfcol, PDO::PARAM_STR);
		$insere->bindParam( ":mensagem", $mensagem, PDO::PARAM_STR);
		
		$inserir = $insere->execute();
	}
	
if($inserir){
			?> 
				<script>
					alert('Solicitação efetuada com sucesso');  
					window.setTimeout("location='formsolicitacao.php';");
				</script>
			<?php
		}
			else{
?> 
				<script>
					alert('Houve um erro durante a solciitação, favor verificar os dados e inserir novamente');  
					window.setTimeout("location='javascript:window.history.go(-1)'");
				</script>;
			<?php
			}

?>
	
