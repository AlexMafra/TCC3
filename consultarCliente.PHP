	<?php
	require_once('config/conn.php');
	require_once('verificaSessao.php');
	$cpf = $_POST['cpf'];
	$tipo = $_POST['tipo'];
	$tipo="cliente";

		if ($tipo == "cliente"){
			$consulta = $pdo->prepare("SELECT * FROM cliente WHERE cpf= :cpf;");
			$consulta->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
			$consulta->execute();

			$reg=$consulta->fetch(PDO::FETCH_ASSOC);
			
			$dados['nome']  = (string) $reg['nome'];
			$dados['profissao']  = (string) $reg['profissao'];
			$dados['dataNascimento']  = (string) $reg['dataNascimento'];
			$dados['rg']  = (string) $reg['rg'];
			$dados['sexo']  = (string) $reg['sexo'];
			$dados['nacionalidade']  = (string) $reg['nacionalidade'];
			$dados['naturalidade']  = (string) $reg['naturalidade'];
			$dados['telResid']  = (string) $reg['telResid'];
			$dados['telCel']  = (string) $reg['telCel'];
			$dados['emailPessoal']  = (string) $reg['emailPessoal'];
			$dados['estadoCivil']  = (string) $reg['estadoCivil'];
			$dados['emissor']  = (string) $reg['emissor'];
			$dados['estadoCivil']  = (string) $reg['estadoCivil'];
			$dados['escolaridade']  = (string) $reg['escolaridade'];
			$dados['emissor']  = (string) $reg['emissor'];

			$ende = $pdo->prepare("SELECT * FROM endereco WHERE idusuario= :cpf;");
			$ende->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
			$ende->execute();
			$end=$ende->fetch(PDO::FETCH_ASSOC);
			$dados['logr']  = (string) $end['logradouro'];
			$dados['compl']  = (string) $end['complemento'];
			$dados['bairro']  = (string) $end['bairro'];
			$dados['uf']  = (string) $end['uf'];
			$dados['pais']  = (string) $end['pais'];
			$dados['cep']  = (string) $end['cep'];
			$dados['cidade']  = (string) $end['cidade'];
			
			
			if( isset ($dados['nome'])){
			$dados['sucesso'] =1;
			}
			else{
			$dados['sucesso'] =0;
			}
		}
		
		if ($tipo == "colaborador"){
			$consulta = $pdo->prepare("SELECT * FROM colaborador WHERE cpf= :cpf;");
			$consulta->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
			$consulta->execute();
			$reg=$consulta->fetch(PDO::FETCH_ASSOC);

			$dados['nome']  = (string) $reg['nome'];
			$dados['profissao']  = (string) $reg['profissao'];
			$dados['dataNascimento']  = (string) $reg['dataNascimento'];
			$dados['rg']  = (string) $reg['rg'];
			$dados['sexo']  = (string) $reg['sexo'];
			$dados['nacionalidade']  = (string) $reg['nacionalidade'];
			$dados['naturalidade']  = (string) $reg['naturalidade'];
			$dados['telResid']  = (string) $reg['telResid'];
			$dados['telCel']  = (string) $reg['telCel'];
			$dados['emailPessoal']  = (string) $reg['emailPessoal'];
			$dados['estadoCivil']  = (string) $reg['estadoCivil'];
			$dados['cargo']  = (string) $reg['cargo'];
			$dados['emissor']  = (string) $reg['emissor'];
			$dados['oab']  = (string) $reg['oab'];
			$dados['email']  = (string) $reg['emailCorporativo'];
			
			$ende = $pdo->prepare("SELECT * FROM endereco WHERE idusuario= :cpf;");
			$ende->bindParam( ":cpf", $cpf, PDO::PARAM_STR);
			$ende->execute();
			$end=$ende->fetch(PDO::FETCH_ASSOC);
			$dados['logr']  = (string) $end['logradouro'];
			$dados['compl']  = (string) $end['complemento'];
			$dados['bairro']  = (string) $end['bairro'];
			$dados['uf']  = (string) $end['uf'];
			$dados['pais']  = (string) $end['pais'];
			$dados['cep']  = (string) $end['cep'];
			$dados['cidade']  = (string) $end['cidade'];

			if( isset ($dados['nome'])){
				$dados['sucesso'] =1;
			}
			else{
				$dados['sucesso'] =0;
			}

		}

	echo json_encode($dados);

	?>