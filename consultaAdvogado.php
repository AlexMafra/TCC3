<?php
require_once('config/conn.php');
$cargo="dono";
$consulta = $pdo->prepare("SELECT nome FROM colaborador WHERE cargo= :cargo;");
$consulta->bindParam( ":cargo", $cargo, PDO::PARAM_STR);
	$consulta->execute();
	
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<option> {$linha['nome']} <option/>";

}
?>
