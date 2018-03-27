<?php 
	$idprod = $_GET['idprod'];
	include "bd.php";
	mysqli_query($con, "delete from carrinho where idcarrinho = $idprod");

	header("Location: carrinho.php");

?>