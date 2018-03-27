<?php 
	session_start();
	$vt = 0;
	//o comando abaixo, verifica se tem valor no get idprod que adiciona produto ao carrinho
	if(isset($_GET['idprod'])){
		//o comando abaixo, verifica se a pessoa está conectada
		if(empty($_COOKIE['email']) and empty($_SESSION['email'])){
			// se não tiver conectado, estamos encaminhando para página entrar.php
			$idprod = $_GET['idprod'];
			header("Location: index.php?idprod=$idprod");
		}else{
			// caso esteja conectado, iremos adicionar ao carrinho o produto com este id
			if(isset($_COOKIE['email'])){
			$email = $_COOKIE['email'];

			}else{
				$email = $_SESSION['email'];
			}

			$idprod = $_GET['idprod'];
			$qtd = 1;
			include "bd.php";
			
			$consultac = mysqli_query($con, "select * from carrinho where usuario = '$email' and idprod = $idprod");
			
			$existe = mysqli_num_rows($consultac);

			if($existe == 0){
				mysqli_query($con, "insert into carrinho(idprod, qtd, usuario) values ($idprod, $qtd, '$email')");
			}else{
				mysqli_query($con, "update carrinho set qtd = qtd+1 where idprod = $idprod and usuario = '$email'");
			}
				header("Location: carrinho.php");
		}
	}
	
	echo "<a href='perfil.php'>Perfil</a></br><a href='sair.php'>Sair</a></br>";
	if(isset($_COOKIE['email'])){
		$email = $_COOKIE['email'];
	}else{
		$email = $_SESSION['email'];
	}
	include "bd.php";
	$query = "select p.img, p.nomeprod, p.preco, c.qtd, c.idcarrinho, p.idprod from carrinho c, produto p where c.usuario = '$email' and c.idprod = p.idprod";
	$c = mysqli_query($con, $query);
	$total = mysqli_num_rows($c);

	if($total == 0){
		echo "Carrinho vazio";
	}else{
		echo "<table border='1'>";
		echo "	<tr>
					<th>Foto</th>
					<th>Descrição</th>
					<th>Preço</th>
					<th>Quantidade</th>
					<th>Sub-total</th>
					<th>Excluir</th>
				</tr>";
		while($produto = mysqli_fetch_array($c)){
			$img = $produto[0];
			$nomeprod = $produto[1];
			$preco = $produto[2];
			$qtd = $produto[3];
			$iditem = $produto[4];
			$idprod = $produto[5];
			$st = $preco * $qtd;
			$vt = $vt + $st;
			echo "	<tr>
						<td><img src='produto/$img' width='30' /></td>
						<td>$nomeprod</td>
						<td>R$ $preco</td>
						<td><a href='remove.php?idprod=$idprod'>-</a> $qtd <a href='carrinho.php?idprod=$idprod'>+</a></td>
						<td>$st</td>
						<td><a href='exc.php?idprod=$iditem'>Excluir</a></td>
					</tr>";
		}


		echo "</table>";
		echo "R$ $vt";
	}


?>