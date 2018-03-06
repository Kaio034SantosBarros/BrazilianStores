<?php
	session_start();

	if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
		header("Location: index.php");
	}

	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$nome = $_SESSION['nome'];
	}else{
		$email = $_COOKIE['email'];	
		$nome = $_COOKIE['nome'];
	}

	echo "$nome você está conectado!";
	echo "<button type='submit'><a href='sair.php'>Sair</a></button>";
?>