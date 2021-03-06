<?php
	include '../funcoes.php';

	$erro = null;

	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'CPF/CNPJ' => FILTER_DEFAULT,
								   'senha' => FILTER_DEFAULT ]
	           );

	$codigoPessoa = $request['CPF/CNPJ'];
	$senha = $request['senha'];

	if ($codigoPessoa == false )
	{
		$erro = "CPF ou CNPJ inválido ou não informado";
	}

	if (strlen($codigoPessoa) == 11)
	{
		$usuario = null;

		$usuario = BuscaUsuarioPorCPF($codigoPessoa);
		$destino = "Cliente.php";
		$chaveId = "idCliente";

		if ($usuario == null)
		{
			$usuario = BuscaGerente($codigoPessoa);
			$destino = "administrador.php";
			$chaveId = "idGerenciamento";
		}
	}
	else if (strlen($codigoPessoa) == 14)
	{
		$usuario = BuscaUsuarioPorCNPJ($codigoPessoa);
		$destino = "Cliente.php";
		$chaveId = "idCliente";
	}
	else
	{
		$erro = "CPF ou CNPJ inválido";
	}


	if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	else if ($usuario != null && password_verify($senha, $usuario['senha']))
	{
		session_start();
		$_SESSION['codigoUsuarioLogado'] = $codigoPessoa;
		$_SESSION['emailUsuarioLogado'] = $usuario['email'];
		var_dump($usuario['email']);
		$_SESSION['id'] = $usuario[$chaveId];
		header("Location: ../$destino");
		exit();
	}
	else {
		$erro = "Não foi possível logar";
	}

	session_start();

	$_SESSION['erros'] = $erro;

	header('Location: ../login.php');

?>
