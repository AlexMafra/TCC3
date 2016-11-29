<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>  
	<script type='text/javascript' src='consultarCliente.js'></script>
  <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
  <script type='text/javascript' src='cliente.js'></script>
  <title>Rodape</title>
  <style>
	#section {
                border-top:2px solid white;
                border-left:2px solid white;
                border-bottom:2px solid white;
                float:left;
                background-image:url(fundocinza.jpg);
                width:78%;
                height:80%;
                float:left;
                padding:2px;
            }
			
			/* Container das ABAS */
.tabs-container {
    position: relative;
    height:640px;
    max-width:98%;
    margin: 0 auto;
	
	
}
.tabs-container p {
    margin: 0;
    padding: 0;
}
.tabs-container:after {
    content: '.';
    display: block;
    clear: both;
    height: 0;
    font-size: 0;
	font-family:arial;
    line-height: 0;
    visibility: none;
	
}
 
/* ABAS */
input.tabs {
    display: none;
}
input.tabs + label + div {
    width: 98%;
    opacity: 0;
    position: absolute;
    background:;
    top: 40px;
    left: 0;
    height: 132%;
    padding: 10px;
    z-index: -1;	
    transition: opacity ease-in-out .3s;
	border-style: solid;
	border-width: 3px 0px 0px 3px;
	border-color: black;
	
}
input.tabs:checked + label + div {
    opacity: 1;
    z-index: 1000;
}
 
/* Labels */
input.tabs + label {
    line-height: 40px;
    padding: 0 20px;
    float: left;
    background: #eee;
    color: #000;
    cursor: pointer;
    transition: background ease-in-out .3s;
	border-radius: 5px 6px 0px 0px;
	border-style: solid;
	border-width: 0px 3px 0px 0px;
	border-color: white;
}
input.tabs:checked + label {
    color: #fff;
    background: #444;
}

	#section form{
				color: white;
				font-size:30px;
				margin-left:30px;
				font-family:Arial;
				float:left;
	}
	
	input[type=text]{     
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow: 1px 1px 2px #333333;    
    -moz-box-shadow: 1px 1px 2px #333333;
    -webkit-box-shadow: 1px 1px 2px #333333;
    background: #cccccc; 
    border:1px solid #000000;
    width:170px;
	height:38px;
	font-size:20px;
	margin-top:60px;
	margin-left:30px;
}

input[type=text]:hover{ 
         background: #ffffff; border:1px solid #990000;
}

button{
        background:#006699;
        color:#ffffff;
		border-radius:4px;
		float:right;
		margin-top:70px;
		width:80px;
		height:40px;
		font-size:20px;
		font-family:Arial;
		margin-right:0px;
}
	


</style>
</head>
<body>
<div id="section">
    <div class="tabs-container">
    
    <!-- ABA 1 -->
    <input type="radio" name="tabs" class="tabs" id="tab1" checked>
    <label for="tab1">AGENDAR</label>
    <div>
      <form name="f2" method="post" action="agenda.php">
		<div class="row">
			<div>
				<label for="usuário">Cliente</label>
				<input type="text" name="nome" id="nome" style="width:400px; margin-left:20px;" class="form-control"/>
				
				<label for="usuário" style="margin-left:50px;">CPF</label>
				<input type="text" name="cpf" id="cpf" style="margin-left:20px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Data</label>
				<input type="text" name="data" id="data" style="margin-left:53px;" size="20" maxlength="10" value="<?=$_GET['dia']?>/<?=$_GET['mes']?>/<?=$_GET['ano']?>" />
				<label for="usuário" style="margin-left:240px;">Horário</label>
				<input type="text" name="horario" id="horario" style="margin-left:20px;" class="form-control"/>
			</div>
			<div>
				<label for="usuário">Advogado</label> 
				<select type="text" name="adv" id="adv" style="margin-left:20px;" class="form-control">
					<?php require ('consultaAdvogado.php');?>
				</select>
			</div>
				<input type hidden  name="dia" type="text" id="dia" value="<?=$_GET['dia']?>" />
				<input type hidden name="mes" type="text" id="mes" value="<?=$_GET['mes']?>" />
				<input type hidden name="ano" type="text" id="ano" value="<?=$_GET['ano']?>" />		
			<div>
				<button type="submit" class="botao">Enviar</button>
			</div>
		</div>
	 
	 
	</form>
    </div>
    </div>
</div>
	</body>
</html>