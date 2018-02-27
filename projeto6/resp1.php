<?php 
	$email = strip_tags($_POST['email']);
	$senha = md5($_POST['senha']);

	include "bd.php";

	$query = "select * from usuario where email = 'email' and senha = '$senha'";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

		if($total == 0){
			header("Locaition: index.php");
		}
		while($usuario = mysqli_fetch_array($consulta)){
			$nome = $usuario['nome'];
		}
			session_start();
			$_SESSION['nome'] = $nome;
			$_SESSION['email'] = $email;
			header("Location: perfil.php");
		
 ?>