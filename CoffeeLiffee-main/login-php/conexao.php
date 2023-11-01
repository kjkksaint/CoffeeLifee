<?php 

	$conexao = mysqli_connect('localhost','root','','coffeelifee1332');
	if (!$conexao) {
		die('verifique sua conexão com o banco de dados!'.$mysqli_error());
	}

?>