<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">

  
</head>
<body>
	<div id="nav">
        <ul id="menu">
			<h1>Agenda</h1><br>
			<hr>
            <a href="sectionAgenda.php?pg=<?php echo base64_encode('sectionAgenda.php');?>&titulo=<?php echo base64_encode('Agenda');?>">
				<li>Inicio</li>
            </a>
			<hr>
			<a href="preparaAgenda.php?pg=<?php echo base64_encode('preparaAgenda.php');?>&titulo=<?php echo base64_encode('Agendar');?>">	
				<li>Agendar</li>
            </a>
            <hr> 
			<a href="secPesqAgenda.html">
				<li>Pesquisar</li>
            </a>
			<hr>
			<a href="logout.html">
				<li>Sair</li>
            </a>
			<hr>
        </ul>
    </div>
</body>
</html>