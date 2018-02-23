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
  <li class="nav-item">
    <div>
    <a class="nav-link active btn btn-light" data-toggle="modal" data-target="#myModal">Login</a>
    </div>
  </li>
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" size="50">
      <button class="btn btn-primary my-2 my-sm-0 bg-dark " type="submit"><i class="fa fa-search"></i></button>
    </form>

  
</nav>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Entrar</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="resp2.php" class="cadastro">
          <p>
            E-mail:<p><input type="email" name="email" size=40 required=""></p>
          </p>
          <p>
            Senha:<p><input type="password" name="senha" size=40 required=""></p>
          </p>
          <button type="submit" class="btn btn-info btn-lg">Logar</button>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal2">Cadastre-se</button>
        </form>
      </div>
    </div>

  </div>
</div>
    
  <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Cadastre-se</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="resp2.php" class="cadastro">
    
          <p>
            Nome:<p><input type="text" name="nome" size=40 required=""></p>
          </p>
          <p>
            E-mail:<p><input type="email" name="email" size=40 required=""></p>
          </p>
          <p>
            Senha:<p><input type="password" name="senha" size=40 required=""></p>
          </p>
          <button type="submit" class="btn btn-info btn-lg">Cadastrar</button>
        </form>
      </div>
    </div>

  </div>
</div>
</div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>

