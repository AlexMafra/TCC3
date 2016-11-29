<?php 
session_start();
session_destroy();?>
<script>
	alert('Obrigado por utilizar nosso sitema de Gerenciamento.');
	window.setTimeout("location='loginunico.php';");
</script>