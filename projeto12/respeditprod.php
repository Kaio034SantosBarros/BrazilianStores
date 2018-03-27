<?php 
	$idprod = strip_tags($_POST['idprod']);
	$nomeprod = strip_tags($_POST['nomeprod']);
	$preco = strip_tags($_POST['preco']);
	$categoria = strip_tags($_POST['categoria']);
	$marca = strip_tags($_POST['marca']);
	$quantidade = strip_tags($_POST['quantidade']);
	$descricao = strip_tags($_POST['descricao']);

	include "bd.php";
	$query = "update produto set nomeprod = '$nomeprod', preco = '$preco', categoria = '$categoria', marca = '$marca', quantidade = '$quantidade', descricao = '$descricao' where idprod = $idprod";
		mysqli_query($con, $query);

		session_start();
		$_SESSION['idprod'] = $idprod;

		echo "Produto cadastrado com sucesso!";
		header("Refresh: 1, upfoto2.php");

 ?>