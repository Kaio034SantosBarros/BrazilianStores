<?php 
	session_start();
	$email = $_SESSION['email'];
	$query = "select * from carrinho where usuario = '$email'";

	include "bd.php";

	$consulta = mysqli_query($con, $query);
	$total = mysqli_num_rows($consulta);
	if($total >= 1){
		mysqli_query($con,"delete from carrinho where usuario = '$email'");
	}
	echo "Compra efetuada com sucesso!";
	header("Refresh: 1, index.php");
 ?>