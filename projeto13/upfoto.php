<?php
	session_start();

	if(isset($_SESSION['adm']) or isset($_COOKIE)){
			$adm = $_SESSION['adm'] or $_COOKIE['adm'];
	}

	if($adm != 'sim'){
		header("Location: perfil.php");
	}

	if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
		header("Location: index.php");
	}

	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$nome = $_SESSION['nome'];
	}else{
		$email = $_COOKIE['email'];	
		$nome = $_COOKIE['nome'];
	}
?>
<!doctype html>
<html lang="pt-br">
    <title>Brazilian Stores</title>
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="css/projeto.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-7ELRJF5/u1pkLd0W7K793Y7ZCb1ISE8FjEKiDAwHD3nSDbA2E9Txc423ovuNf1CV" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-family: 'Monoton', cursive; font-size: 150%;">Brazilian Stores</a>
  


<ul class="nav nav-tabs mr-auto">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 44px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Roupas</a>
      <a class="dropdown-item" href="#">Eletrônicos</a>
      <a class="dropdown-item" href="#">Livros</a>
      <a class="dropdown-item" href="#">Informática</a>
      <a class="dropdown-item" href="#">Celulares</a>
      <a class="dropdown-item" href="#">Games</a>
      </div>
      <li class="nav-item">
  
        <a class="nav-link active" href="#home"><i class="fa fa-shopping-cart "></i></a>
      </li>

  </li>
  		<?php 
			if($adm == 'sim'){
			echo "
			<li>
				<div>
					<a class='nav-link active' href='cadprod.php'>Cadastrar Produto</a>
				</div>
			</li>
				 ";
		}
		?>
  <li class="nav-item">
    <div>
    <a class="nav-link active btn btn-light" href="sair.php">Sair</a>
    </div>
  </li>
  <li class="nav-item">
  	<div>
  		<?php echo "<a class='nomeusu'>$nome, você está online!</a>" ?>
  	</div>
  </li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" size="50">
      <button class="btn btn-primary my-2 my-sm-0 bg-dark " type="submit"><i class="fa fa-search"></i></button>
    </form>

</nav>
<div>
	<form method="post" action="fotoprod.php" enctype="multipart/form-data">
		<input type="file" name="arquivo" accept="image/jpeg, image/png">
		<button type="submit">Mudar foto</button>
	</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <footer style="padding-top: 250px;">
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