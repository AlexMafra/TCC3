<?php
	require_once('config/conn.php');
	$cpf = $_POST["cpf"];
	$nome = $_POST["nome"];
	
	$dataNascimento = $_POST["dataNascimento"];
	$rg = $_POST["rg"];
	$sexo= $_POST["sexo"];
	$nacionalidade=$_POST["nacionalidade"];
	$telResid = $_POST["telResid"];
	$telCel = $_POST["telCel"];
	$emailPessoal = $_POST["emailpessoal"];
	$estadoCivil=$_POST["estadoCivil"];
	$escolaridade = $_POST["escolaridade"];
	$txtsenha= $_POST["txtsenha"];
	$senha=md5($txtsenha);
	$profissao=$_POST["profissao"];
	$naturalidade=$_POST["naturalidade"];
	$tipo=$_POST["tipo"];
	$emissor=$_POST["emissor"];
	$codigo=1;
	if ($tipo == 'colaborador'){
	
	$cargo = $_POST["cargo"];
	$telCorporativo = $_POST["telCorporativo"];
	$emailCorporativo = $_POST["emailCorporativo"];
	$numeroOAB= $_POST["numeroOAB"];
	
		$statement = $pdo->query("SELECT max(codigo) as codigo FROM colaborador");
		$maxcodigo = $statement->fetch();
		$maior_id = $maxcodigo["codigo"];
		$controle = $maior_id + 1;

		$insere = $pdo->prepare("INSERT INTO colaborador (codigo, cpf, nome, cargo, dataNascimento, rg, sexo, nacionalidade, naturalidade,telResid, telCel, emailPessoal, estadoCivil, escolaridade, emailCorporativo, telCorporativo, numeroOAB, emissor, senha) VALUES (:codigo, :cpf, :nome, :cargo, :dataNascimento ,:rg, :sexo, :nacionalidade, :naturalidade, :telResid, :telCel, :emailPessoal, :estadoCivil, :escolaridade, :emailCorporativo, :telCorporativo, :numeroOAB, :emissor, :senha)");
		
		$insere->bindParam( ":codigo", $controle, PDO::PARAM_STR);
		$insere->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
		$insere->bindParam( ":nome", $nome, PDO::PARAM_STR);
		$insere->bindParam( ":cargo", $cargo, PDO::PARAM_STR);
		$insere->bindParam( ":dataNascimento", $dataNascimento, PDO::PARAM_STR);
		$insere->bindParam( ":rg", $rg, PDO::PARAM_STR);
		$insere->bindParam( ":sexo", $sexo, PDO::PARAM_STR);
		$insere->bindParam( ":nacionalidade", $nacionalidade, PDO::PARAM_STR);
		$insere->bindParam( ":naturalidade", $naturalidade, PDO::PARAM_STR);
		$insere->bindParam( ":telResid", $telResid, PDO::PARAM_STR);
		$insere->bindParam( ":telCel", $telCel, PDO::PARAM_STR);
		$insere->bindParam( ":emailPessoal", $emailPessoal, PDO::PARAM_STR);
		$insere->bindParam( ":estadoCivil", $estadoCivil, PDO::PARAM_STR);
		$insere->bindParam( ":escolaridade", $escolaridade, PDO::PARAM_STR);
		$insere->bindParam( ":emailCorporativo", $emailCorporativo, PDO::PARAM_STR);
		$insere->bindParam( ":telCorporativo", $telCorporativo, PDO::PARAM_STR);
		$insere->bindParam( ":numeroOAB", $numeroOAB, PDO::PARAM_STR);
		$insere->bindParam( ":emissor", $emissor, PDO::PARAM_STR);
		$insere->bindParam( ":senha", $senha, PDO::PARAM_STR);
		$inserir = $insere->execute();

	}
	
	else{
		$statement = $pdo->query("SELECT max(codigo) as codigo FROM cliente");
		$maxcodigo = $statement->fetch();
		$maior_id = $maxcodigo["codigo"];
		$controle = $maior_id + 1;
		$insere = $pdo->prepare("INSERT INTO cliente (codigo, cpf, nome, profissao, dataNascimento, rg, sexo, nacionalidade, naturalidade, telResid, telCel, emailPessoal, estadoCivil, escolaridade, senha) 
		VALUES (:codigo, :cpf, :nome, :profissao, :dataNascimento, :rg, :sexo, :nacionalidade, :naturalidade, :telResid, :telCel, :emailPessoal, :estadoCivil, :escolaridade, :senha)");
		$insere->bindParam( ":codigo", $controle, PDO::PARAM_INT);
		$insere->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
		$insere->bindParam( ":nome", $nome, PDO::PARAM_STR);
		$insere->bindParam( ":profissao", $profissao, PDO::PARAM_STR);
		$insere->bindParam( ":dataNascimento", $dataNascimento, PDO::PARAM_STR);
		$insere->bindParam( ":rg", $rg, PDO::PARAM_STR);
		$insere->bindParam( ":sexo", $sexo, PDO::PARAM_STR);
		$insere->bindParam( ":nacionalidade", $nacionalidade, PDO::PARAM_STR);
		$insere->bindParam( ":naturalidade", $naturalidade, PDO::PARAM_STR);
		$insere->bindParam( ":telResid", $telResid, PDO::PARAM_STR);
		$insere->bindParam( ":telCel", $telCel, PDO::PARAM_STR);
		$insere->bindParam( ":emailPessoal", $emailPessoal, PDO::PARAM_STR);
		$insere->bindParam( ":estadoCivil", $estadoCivil, PDO::PARAM_STR);
		$insere->bindParam( ":escolaridade", $escolaridade, PDO::PARAM_STR);
		$insere->bindParam( ":senha", $senha, PDO::PARAM_STR);
		$inserir = $insere->execute();	
	}
	
	if( $inserir ) {
	
	$lgr= $_POST["endereco"];
	$cpl= $_POST["complemento"];
	$bairro = $_POST["bairro"];
	$cid = $_POST["cidade"];
	$uf = $_POST["uf"];
	$pais=$_POST["pais"];
	$cep = $_POST["cep"];
		$insere = $pdo->prepare("INSERT INTO endereco (idusuario, complemento, logradouro, bairro, cidade, uf, pais, cep) 
		VALUES (:idusuario, :complemento, :logradouro, :bairro, :cidade, :uf, :pais, :cep)");
		$insere->bindParam( ":idusuario", $cpf, PDO::PARAM_STR);
		$insere->bindParam( ":logradouro", $lgr, PDO::PARAM_STR);
		$insere->bindParam( ":complemento", $cpl, PDO::PARAM_STR);
		$insere->bindParam( ":bairro", $bairro, PDO::PARAM_STR);
		$insere->bindParam( ":cidade", $cid, PDO::PARAM_STR);
		$insere->bindParam( ":uf", $uf, PDO::PARAM_STR);
		$insere->bindParam( ":pais", $pais, PDO::PARAM_STR);
		$insere->bindParam( ":cep", $cep, PDO::PARAM_STR);
		$inserir = $insere->execute();	
if( $inserir ) {
		header('Location: index.html');
	}
	}
?>
