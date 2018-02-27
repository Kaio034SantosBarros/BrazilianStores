<?php 
	session_start();
	if(empty($_SESSION['email'])){
		header("Location: index.php");
	}
	session_destroy();
	header("Refresh: 3, index.php");
	echo "Saindo...";
 ?>