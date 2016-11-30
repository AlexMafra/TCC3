<?php
//require_once ("verificaSessao.php");
?>
<html lang="pt-br">
<head>
	<meta name="keywords" content="HTML5,javascript">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>    
	<title>SectionAgenda</title>

	<script>
    function carregar(pagina){
        $("#conteudo").load(pagina);
    }
	</script>

</head>
<body id="all" onload="carregar('preparaagenda.php')">
	<div class="container">
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu0.php");
			?>
			</div>
		</div>
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu1.php");
			?>
			</div>
		</div>

		<div class="row center-block">
			<div class="col-lg-2">
			<?php 
				include_once ("menuAgenda.php");
			?>
			</div>
			<div class="col-lg-10">
				<div id="page-wrapper">
					<div class="col-lg-12">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs nav-pills">
						<li class="active"><a href="#tab1" data-toggle="tab">AGENDA</a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab1">
					<nav aria-label="Page navigation">
					  <center><ul class="pagination">
						<li><a onclick="carregar('preparaagenda.php?var=-1')" href="#">Mês Anterior</a></li>
						<li><a onclick="carregar('preparaagenda.php')" href="#">Mês Atual</a></li>
						<li><a onclick="carregar('preparaagenda.php?var=1')" href="#">Próximo Mês</a></li>
					  </ul></center>
					</nav>
						<div id="conteudo"></div>
					<nav aria-label="Page navigation">
					  <center><ul class="pagination">
						<li><a onclick="carregar('preparaagenda.php?var=-1')" href="#">Mês Anterior</a></li>
						<li><a onclick="carregar('preparaagenda.php')" href="#">Mês Atual</a></li>
						<li><a onclick="carregar('preparaagenda.php?var=1')" href="#">Próximo Mês</a></li>
					  </ul></center>
					</nav>
					</div>
					</div>
					</div>
					</div>
				</div> <!-- div page-wrapper -->
			</div> <!-- col-lg-10 -->
		</div> <!-- row -->
		<div class="row4 center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("rodape.php");
			?>
			</div>
		</div>
	</div> <!-- div container -->
</body> <!-- body id=all -->
</html>
<?php
include_once ("rodape.php");
?>