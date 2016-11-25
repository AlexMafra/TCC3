<?php
	$login =$_POST["login"];
	$pas =$_POST["senha"];
	$tipo =$_POST["tipo"];
	$pass=md5($pas);
	echo $pass;
	require_once('config/conn.php');

	if ( $tipo == "cli"){
		$statement = $pdo->query("SELECT cpf FROM cliente WHERE cpf='$login' AND senha='$pass'");
		$registro = $statement->fetch();
		$id=$registro['cpf'];
		echo $id;		
		echo "TESTATATTATATATATTATATATA";
		
	}
	else{
		
		$statement = $pdo->query("SELECT cpf FROM colaborador WHERE cpf='$login' and senha='$pass'");
		$registro = $statement->fetch();
		$id=$registro['cpf'];
	}
	if($registro)
	{
		
		session_start();
		$_SESSION["usuario"] = $id;
		
		if ( $tipo == "cli"){
			header('location: cliente.html');
		}
		else{
			header('location: sectionagenda.php');
		}
	}
	else
	{
?> 
	<script>
		alert('Usuário ou Senha inválidos');  
		window.setTimeout("location='loginUnico.html';");
	</script>;
<?php
}
?>
