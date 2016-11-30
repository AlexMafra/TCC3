<?php
	require_once('config/conn.php');
	require_once('verificaSessao.php');
	$nr = $_POST['cpf'];

			$consulta = $pdo->prepare("SELECT * FROM processo WHERE numero= :num;");
			$consulta->bindParam( ":num", $nr, PDO::PARAM_STR);
			$consulta->execute();

			$reg=$consulta->fetch(PDO::FETCH_ASSOC);
			

			$dados['comarca']  = (string) $reg['comarca'];
			$dados['vara']  = (string) $reg['vara'];
			$dados['competencia']  = (string) $reg['competencia'];
			$dados['assunto']  = (string) $reg['assunto'];
			$dados['advogado']  = (string) $reg['advogado'];
			$dados['origem']  = (string) $reg['origem'];

			if( isset ($dados['numero'])){
			$dados['sucesso'] =1;
			}
			else{
			$dados['sucesso'] =0;
			}
			echo json_encode($dados);