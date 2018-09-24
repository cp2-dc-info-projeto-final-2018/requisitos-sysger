<?php

function FazerLigação()
{
	$bd = new PDO('mysql:host=localhost;dbname=bancosysger;charset=utf8',
	'bancosysger',
	'tccsysger');

	$bd->setAttribute(PDO::ATTR_ERRMODE,
					  PDO::ERRMODE_EXCEPTION);

	return $bd;
}

function BuscaUsuarioPorCPF($CPF, $senha)
{
	$bd = FazerLigação();

 	$sql = $bd->prepare('SELECT cpf,senha FROM Pessoa_Fisica JOIN Cliente ON Cliente.IdCliente = Pessoa_Fisica.id_PF Where CPF = :cpf');

	$sql->bindParam(':cpf', $CPF);

	if ($sql->execute())
	{
	  return $sql->fetch();
  }

	return null;
}

function BuscaGerente($CPF, $senha)
{
	$bd = FazerLigação();

 	$sql = $bd->prepare('SELECT cpf,senha FROM gerenciamento Where CPF = :cpf');

	$sql->bindParam(':cpf', $CPF);

	if ($sql->execute())
	{
	  return $sql->fetch();
  }

	return null;
}

function BuscaUsuarioPorCNPJ($CNPJ, $senha)
{
	$bd = FazerLigação();

	$sql = $bd->prepare('SELECT cnpj,senha FROM Pessoa_Juridica JOIN Cliente ON Cliente.IdCliente = Pessoa_Juridica.id_PJ Where CNPJ = :cnpj');

	$sql->bindParam(':cnpj', $CNPJ);

	if ($sql->execute())
	{
		return $sql->fetch();
	}

	return null;

}

function BuscarSubgerente($nome)
{

$bd = FazerLigação();
$sql = $bd->query('SELECT * FROM gerenciamento WHERE nome = :nome AND subgerente = 1 AND gerente = 0' );

$sql->bindParam(':nome', $nome);

if ($sql->execute())
{
	return $sql->fetchall();
}

return null;

}


function BuscarCliente($buscarCliente)
{

$bd = FazerLigação();
$sql = $bd->query('SELECT * FROM Cliente WHERE nome = :nome');

$sql->bindParam(':nome', $nome);

if ($sql->execute())
{
	return $sql->fetchall();
}

return null;

}

function InsereCliente($dadosNovoCliente)
{
	$bd = FazerLigação();

	$nome = $dadosNovoCliente['nome'];

	$sql = $bd->prepare('INSERT INTO cliente (nome, sobrenome, email, senha, dataNasc, cpf)
	VALUES (:nome, :sobrenome, :email, :senha, :dataNasc, :cpf);');

	var_dump($dadosNovoCliente);

	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':sobrenome', $dadosNovoCliente['sobrenome']);
	$sql->bindValue(':email', $dadosNovoCliente['email']);
	$sql->bindValue(':senha', $dadosNovoCliente['senha']);
	$sql->bindValue(':dataNasc', $dadosNovoCliente['dataNasc']);
	$sql->bindValue(':cpf', $dadosNovoCliente['cpf']);

	$sql->execute();
}


?>
