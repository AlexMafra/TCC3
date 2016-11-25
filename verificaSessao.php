<?php
	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{?>
		<script type="text/javascript">
			alert("Para acessar essa área é necessário estar logado, você será rediricionado para a página de login");
			window.setTimeout("location='loginUnico.php';");
		</script>
	<?php }
	$logado = isset( $_SESSION["usuario"] );
	$d = date("H");
	if( $d < 12 ) $saudacao = "Bom dia";
	elseif ($d < 17) $saudacao = "Boa tarde";
	else  $saudacao = "Boa noite";	
?>