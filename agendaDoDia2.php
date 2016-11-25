<?php
	require_once ("verificaSessao.php");
	require_once('config/conn.php');
	date_default_timezone_set('America/Sao_Paulo');
	$dia = date('d');
	$dia=17;
	$mes = date('m');

	$controle=0;
	$cpf=00000000000;
		
			$nhr = $pdo->query("SELECT cpfCliente, horario from agenda WHERE dia=$dia AND mes=$mes AND cpfColaborador=$cpf");
			while ($sdf = $nhr->fetch()){
				$ctr=$sdf["cpfCliente"];
				if (isset ($ctr)){
				$nh = $pdo->query("SELECT nome from cliente WHERE cpf=$ctr");
				$sd = $nh->fetch();
				}
			echo "<h4>Cliente: ", $sd["nome"]," -> Horario - ", $sdf["horario"],":00<br></h4>";
			}
?>		