<?php 
	session_start();

	if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
		header("Location: index.php");
	}

	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$nome = $_SESSION['nome'];
		$adm = $_SESSION['adm'];
	}else{
		$email = $_COOKIE['email'];	
		$nome = $_COOKIE['nome'];
		$adm = $_COOKIE['adm'];
	}
	include "bd.php";

	$query = "select * from produto where id = '$id' limit 1";

	$consulta = mysqli_query($con, $query);
	$total = mysqli_num_rows($consulta);
	echo $total;
 ?>