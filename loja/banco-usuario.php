<?php
require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha){
	$senhamd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhamd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function buscaUsuarioNome($conexao){
	$query = "select nome from usuarios";
	$resultado = mysqli_query($conexao, $query);
	$nome = mysqli_fetch_assoc($resultado);
	return $nome;
}