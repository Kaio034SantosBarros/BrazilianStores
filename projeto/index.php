<!doctype html>
<html lang="pt-br">
    <title>Brazilian Stores</title>
  <head>
    <!-- Required meta tags -->
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
  
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
  <li class="nav-item">
    <a class="nav-link active" href="login.php">Login</a>
  </li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" size="50">
      <button class="btn btn-primary my-2 my-sm-0 bg-dark " type="submit"><i class="fa fa-search"></i></button>
    </form>

  
</nav>
	
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner text-center" style="margin-top: 10px;">
    <div class="carousel-item active">
      <img  id="imgc" src="img/tablet.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/notbook.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/fone.jpg" alt="Los Angeles">
    <div class="carousel-caption">
    	<h3 style="color: black;"><u>Informática</u></h3>
    </div>
    </div>
    <div class="carousel-item">
      <img  id="imgc" src="img/tablet.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/notbook.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/fone.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img  id="imgc" src="img/tablet.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/notbook.jpg" alt="Los Angeles">
      <img  id="imgc" src="img/fone.jpg" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div style="border: 3px solid black; margin-top: 10px;">	
	<h3 class="text-center"><marquee scrollDelay=1><font color=black><DATA>Destaques da Semana</DATA></em></font></marquee></h3>
</div>
	
	<div class="card" style="width: 200px; height: 200px;" >
		<img class="card-img-top" src="img/Desert.jpg" alt="Card image cap">
			<div class="card-block">
		    	<h4 class="card-title">Card title</h4>
		    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    		<a href="#" class="btn btn-primary">Go somewhere</a>
		  	</div>
	</div>



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
                    	City Hall<br>
						212  Street<br>
						Lawoma<br>
						735<br>
					</li>
					<li>
						Telefone: (21) 2222-2222
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
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Redes Sociais</h4>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="float: left;"></i></li>
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


	
	</html>
  </body>
</html>

