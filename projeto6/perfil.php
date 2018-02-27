<?php
	session_start();
	if(empty($_SESSION['email'])){
		header("Location: index.php");
	}

	echo "Você está conectado!";
	echo "<button type='submit'><a href='sair.php'>Sair</a></button>";
?>