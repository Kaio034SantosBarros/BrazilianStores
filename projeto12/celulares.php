<?php 
    session_start();
  include "bd.php";
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

            if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
              echo "<li class='nav-item'>
                      <a class='nav-link active btn btn-light' data-toggle='modal' data-target='#myModal'>Login</a>
                    </li>";
            }
             $nome = "";
             $email = "";

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


  <div style="border: 3px solid black; margin-top: 1%; background-color: #BEBEBE;">  
    <h3 class="text-center"><marquee scrollDelay=1><font color=black><DATA>Celulares disponíveis no Momento</DATA></em></font></marquee></h3>
  </div>


  <div style="margin-left: 5%;">
      <form method="get">
        Quantos produtos por vez?
        <select name="exibir">
          <?php 
            include "banco.php";
            if(empty($_GET['exibir'])){
              $exibir = 4;      
            }else{
              $exibir = $_GET['exibir'];
            }
          ?>
          <option value="4" <?php if($exibir == 4){ echo "selected";} ?>>4</option>
          <option value="8" <?php if($exibir == 8){ echo "selected";} ?>>8</option>
          <option value="12" <?php if($exibir == 12){ echo "selected";} ?>>12</option>
        </select>
        <button type="submit">Ir</button>
      </form>
      <?php 
      
        if(empty($_GET['pi'])){
          $inicial = 0;     
        }else{
          $inicial = $_GET['pi'];
        }
        $query2 = "select * from produto";
        $consulta2 = mysqli_query($con, $query2);
        $total = mysqli_num_rows($consulta2);

        $query = "select * from produto where categoria = 'Celulares'";
        $consulta = mysqli_query($con, $query);

        $paginas = ceil($total / $exibir);
          
          
          echo "<div class=\"row\">";

      while($f = mysqli_fetch_array($consulta)){
      // os comandos abaixo, serve para pegar as informações que estão no banco de dados e colocá-los em uma variável
        $nomeprod = $f['nomeprod'];
        $preco = $f['preco'];
        $idprod = $f['idprod'];
        $preco = number_format($preco, 2, ',','.');
        $img = $f['img'];
        $_SESSION['idprod'] = $idprod;
        $_SESSION['nomeprod'] = $nomeprod;
    ?>
      
       

        
          <div class="col-sm-3 col-xs-12 ">
            <div class="card mb-4" style="width: 18rem;">
              <img class="card-img-top" src="produto/<?php echo $img ?>" alt="Card image cap" height="200" width="239">
              <div class="card-body">
                <h5 class="card-title" <?php echo "id='$idprod'>$idprod $nomeprod"; ?></h5>
                <a href="#" class="btn btn-primary"><?php echo "$preco </a>
                  <a href='carrinho.php?idprod=$idprod' style='height: 1%;''><i class='fa fa-cart-arrow-down fa-2x'></i></a>"; ?>
                <?php echo "<a class='btn btn-danger' href='produto.php?id=$idprod'>Ver Produto</a>"; ?>
                <a href="#" class="btn btn-secondary">Comprar</a>


             </div>
           </div>
         </div>

      <?php } ?>
    </div>
  </div>
  <?php echo "<div class='text-center'>"; 
    echo "<div><a class='btn btn-primary' href='roupas.php?pi=0&exibir=$exibir'>Primeiro</a>";
        for($i = 1; $i <= $paginas; $i++){
         if($i == 1){
          $pi = 0;
           }else{
          $pi = $pi + $exibir;
        }
        echo "<a class='btn btn-primary' href='roupas.php?pi=$pi&exibir=$exibir'>$i</a>";
        }
        echo "<a class='btn btn-primary' href='roupas.php?pi=$pi&exibir=$exibir'>ultimo</a></div>";
  ?>
<footer >
	<div class="footer-middle bg-dark" style="margin-top: 1%;">
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




</body>
</html>