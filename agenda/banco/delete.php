<?php
// Sessão
session_start();
// Conexão
require_once 'banco.php';

if(isset($_POST['btn-deletar'])):
	

	$cod= mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM tbcontato WHERE cod = '$cod'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../cadastro.php');
	endif;
endif;