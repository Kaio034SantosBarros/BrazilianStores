<?php 
	$email = strip_tags($_POST['email']);
	$senha = md5($_POST['senha']);
	$conect = 0;

	include "bd.php";
	$query = "select * from usuario where email = '$email' and senha = '$senha' limit 1";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

	if($total == 0){
		echo "Usuário ou senha inválidos!";
	}

	if(isset($_POST['conect'])){
		$conect = 1;
	}
	
	while($usuario = mysqli_fetch_array($consulta)){
			$nome = $usuario['nome'];
	}

	if($conect == 0){
		session_start();
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
	
	}else{
		setcookie("email", $email, time()+120);
		setcookie("nome", $nome, time()+120);
	
	}

	header("Location: perfil.php");
	
 ?>