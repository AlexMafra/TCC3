<?php
	$login =$_POST["login"];
	$pas =$_POST["pass"];
	$tipo =$_POST["tipo"];
	$pass=md5($pas);
	require_once('config/conn.php');
	echo $pas;

	if ( $tipo == "cli"){
		$statement = $pdo->query("SELECT cpf FROM cliente WHERE cpf='$login' AND senha='$pass'");
		$registro = $statement->fetch();
		$id=$registro['cpf'];		
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
		window.setTimeout("location='loginUnico.php';");
	</script>;
<?php
}
?>
