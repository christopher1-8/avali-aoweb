<?php
// Sessão
session_start();
// Conexão
require_once 'banco.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobre']);
	$celular = mysqli_escape_string($connect, $_POST['celular']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['data']);

	$cod = mysqli_escape_string($connect, $_POST['cod']);

	$sql = "UPDATE tbcontato SET nome = '$nome', sobre = '$sobre', celular = '$celular', email = '$email', 
	data = '$data' WHERE cod = '$cod'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../lista.php');
	endif;
endif;