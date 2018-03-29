<?php 
	session_start();

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
			         if(isset($_COOKIE['email'])){
					$email = $_COOKIE['email'];
				}else{
					$email = $_SESSION['email'];
				}
				include "bd.php";
				$query = "select p.img, p.nomeprod, p.preco, c.qtd, c.idcarrinho, p.idprod from carrinho c, produto p where c.usuario = '$email' and c.idprod = p.idprod";
				$c = mysqli_query($con, $query);
				$total = mysqli_num_rows($c);

	?>
    <!doctype html>
    <html lang="pt-br">
    <title>Brazilian Stores</title>
    <head>
      <!-- Required meta tags -->
      <link rel="shortcut icon" href="icon/favicon.ico" />
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Bootstrap CSS -->
      <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-7ELRJF5/u1pkLd0W7K793Y7ZCb1ISE8FjEKiDAwHD3nSDbA2E9Txc423ovuNf1CV" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/projeto.css" />
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/projeto.js"></script>
      

      <script>
        function conf(){
          senha = document.getElementById("senha").value;
          csenha = document.getElementById("csenha").value;
          if (senha != csenha){
            alert("As senhas não conferem!");
            document.getElementById("senha").value = "";
            document.getElementById("csenha").value = "";
            document.getElementById("senha").focus();
          }
        }
      </script>
    </head>
    
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php" style="font-family: 'Monoton', cursive; font-size: 150%;">Brazilian Stores</a>
        


        <ul class="nav nav-tabs mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 44px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="roupas.php">Roupas</a>
              <a class="dropdown-item" href="eletronicos.php">Eletrônicos</a>
              <a class="dropdown-item" href="livros.php">Livros</a>
              <a class="dropdown-item" href="info.php">Informática</a>
              <a class="dropdown-item" href="celulares.php">Celulares</a>
              <a class="dropdown-item" href="game.php">Games</a>
            </div>
            <li class="nav-item">
              <?php
              if(isset($_SESSION['email']) or isset($_COOKIE['email'])){
              echo "
              <a class='nav-link active' href='carrinho.php'><i class='fa fa-shopping-cart '></i></a>
            	</li>            
          	</li>
          		";
          	  }
              $adm = "";
              if(isset($_SESSION['adm'])){
                $adm = $_SESSION['adm'];      
              } 
              if(isset($_COOKIE['adm'])){
                $adm = $_COOKIE['adm'];
              }
              if($adm == 'sim'){
                echo "
                <li>
                  <div>
                    <a class='nav-link active' href='cadprod.php'>Cadastrar Produto</a>
                  </div>
                </li>
                   ";
              }


             if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $nome = $_SESSION['nome'];
              }else if(isset($_COOKIE['email'])){
                $email = $_COOKIE['email'];
                $nome = $_COOKIE['nome'];
              } 
              if($nome != ""){
                echo "<li class='nav-item'>
                        <div>
                          <a class='nav-link active btn btn-light' href='sair.php'>Sair</a>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <div>
                          <a class='nomeusu' href='perfil.php' title='Perfil $nome'>$nome,</a> você está online!
                        </div>
                      </li>";
              } 
          ?>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="pesquisa.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" size="30" name="p" required="">
          <button class="btn btn-primary my-2 my-sm-0 bg-dark " type="submit"><i class="fa fa-search"></i></button>
        </form>
      </nav>
      
    <div class="container">
        <h1 class="jumbotron-heading">Carrinho de Compras</h1>
     </div>


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>Escolha a quantidade de parcelas</th>
                      </tr>
                      <tr>
                        <td><strong>Total</strong></td>
                        <td>
                      <?php 
                      if(isset($_GET['vt'])){
                        $vt = $_GET['vt'];
                      }

                        echo "<select>";
                        for($p = 1;$p<=12;$p++){
                          $val = $vt/$p;
                          $val = number_format($val, 2, ',','.');
                          echo "<option>$p x de R$ $val</option>";
                          if($p >= 10){
                            $valor2 = $valor2 * 1.05;
                          }
                        }
                        echo "</select>";
                      ?>
                        </td>
                        <td><a class="btn btn-primary" href="fim.php">Finalizar Pagamento</a></td>
                      </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light"><a href="index.php">Continue Comprando</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Footer -->
 <footer>
      <div class="footer-middle bg-dark" style="margin-top: 30px;">
        <div class="container">
          <div class="row">
           <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
             <h4>Contato</h4>
             <address>
               <ul class="list-unstyled">
                 <li>
                   Rio de Janeiro<br>
                   Cidade de Nova Iguaçu<br>
                   Rua da pedra<br>
                   Nª 300<br>
                 </li>
                 <li>
                  Telefone: (21) 4002-8922
                </li>
              </ul>
            </address>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Informações</h4>
            <ul class="list-unstyled">
              <li><a href="sobre.php">Quem somos</a></li>
              <li><h5>Equipe de Desenvolvimento</h5></li>
              <li>Cristiano Medeiros</li>
              <li>Kaio Santos</li>
              <li>Salum Rodrigues</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Redes Sociais</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="float: left;"></i></a></li>
              <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true" style="float: left;"></i></a></li>
              <li><a href="https://www.instagram.com/?hl=pt-br" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
              
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!--Footer Bottom-->
          <p class="text-xs-center">&copy; Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  </footer>



  </body>
  </html>