<?php
//require_once("verificaSessao.php");
session_start();
require_once('config/conn.php');
date_default_timezone_set('America/Sao_Paulo');
$dia = 1;
$ano = date('Y');
$pos = 0;
$cpf=$_SESSION['usuario'];
$m=$_GET['var'];

if (!isset ($m)){
	$mes = date('m');
	$_SESSION["mes"]=$mes;
	$ano = date('Y');
	$_SESSION["ano"]=0;
}

else{
	$mes=$_SESSION['mes']+$m;
	$_SESSION['mes']=$mes;
	$ano = date('Y');
	$ano=$ano+$_SESSION["ano"];	
}
$ctr=$_SESSION["mes"];

if($ctr>12){
	$mes=1;
	$_SESSION["mes"]=1;
	$ano++;
	$_SESSION["ano"]++;
}
if($mes<1){
	$mes=12;
	$_SESSION["mes"]=12;
	$_SESSION["ano"]--;
	$ano--;
}

switch ($mes) {
    case 1:
        $month = "Janeiro";
        break;
    case 2:
        $month = "Fevereiro";
        break;
    case 3:
        $month = "Março";
        break;
	case 4:
        $month = "Abril";
        break;
	case 5:
        $month = "Maio";
        break;
	case 6:
        $month = "Junho";
        break;
	case 7:
        $month = "Julho";
        break;
	case 8:
        $month = "Agosto";
        break;
	case 9:
        $month = "Setembro";
        break;
	case 10:
        $month = "Outubro";
        break;
	case 11:
        $month = "Novembro";
        break;
	case 12:
        $month = "Dezembro";
        break;
}

echo "<h1> $month / $ano</h1>";
echo "<table border '1pt' bgcolor='white'" ;
echo"<tr>";
echo "<td> Domingo</td>";
echo "<td> Segunda</td>";
echo "<td> Terça</td>";
echo "<td> Quarta</td>";
echo "<td> Quinta</td>"; 
echo "<td> Sexta</td>";
echo "<td> Sábado</td>";
echo"</tr>";

	while ( $dia <= date("t", mktime(0, 0, 0, $mes, 1, $ano) ) ) {
		if ( $pos == 0 )
			echo "<tr>" ;
			echo "<td>" ;
			if ($pos >0 & $pos<6) {
			}
		
		if ( date( "w", mktime(0, 0, 0, $mes, $dia, $ano) ) == $pos ) {
			echo $dia ;
			echo "<br><a href='formAgenda2.php?dia=$dia&mes=$mes&ano=$ano'> Adcionar Evento </a> <br>";
			$nhr = $pdo->query("SELECT cpfCliente, horario from agenda WHERE dia=$dia AND mes=$mes AND cpfColaborador=$cpf");
			while ($sdf = $nhr->fetch()){
				$ctr=$sdf["cpfCliente"];
				if (isset ($ctr)){
				$nh = $pdo->query("SELECT nome from cliente WHERE cpf=$ctr");
				$sd = $nh->fetch();
				
				}
			echo "Cliente ", $sd["nome"]," Horario--", $sdf["horario"],":00<br>";
			}
			
			$dia++;
		} else {
			echo "-" ;
		}
		
	echo "</td>" ;

	$pos++;
		if ($pos == 7) {

			echo "</tr>" ;
			$pos = 0 ;
		}
	}
echo "</table>" ;


?>