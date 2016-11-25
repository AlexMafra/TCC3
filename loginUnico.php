<?php
include_once ("principal1.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<title>Login</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script>
	$(document).ready(function(){
		$("#1").click(function(event){
		  event.preventDefault();
		  $("#a").toggle("slow");
		  $("#b").hide("slow");
		});
	 
		$("#2").click(function(event){
		  event.preventDefault();
		  $("#b").toggle("slow");
		   $("#a").hide("slow");
		});
	});
	</script>
</head>

	
		<div id="section1">
		<div>
			<div id="metade1l">
				<p id="1"> Acesso do Colaborador</p><br><br><br><br><br>
				<form action="login.php" style="display:none" id="a" method = "post">
				<label style="margin-left:44px;">Login:</label>
				<input type="text" name="login" style="margin-left:20px; heigth:30px;" value=""><br>
				<label style="margin-left:44px;">Senha:</label>
				<input type="password" name="pass" id="pass" style="margin-left:10px;" value=""><br>
				<input type="hidden" name="tipo" value="col" ><br>
				<input type="submit" value="Entrar">
				</form>
				
			</div>
			<div id="metade2l">
				<p id="2" style="margin-left:40px;">Acesso do Cliente</p><br><br><br><br><br>
				
				<form action="login.php" style="display:none" id="b"method = "post">
				<label style="margin-left:44px;">Login:</label>
				<input type="text" name="login" id="login" style="margin-left:20px; heigth:30px;" value=""><br>
				<label style="margin-left:44px;">Senha:</label>
				<input type="password" name="pass" id="pass" style="margin-left:10px;" value=""><br>
				<input type="hidden" name="tipo" value="cli" ><br>
				<input type="submit" value="Entrar">
				</form>
				
			</div>
		</div>
	</div>

</html>