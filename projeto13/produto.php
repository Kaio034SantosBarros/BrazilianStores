<?php
	if(isset($_GET['id'])){
		$idprod = $_GET['id'];
	}else{
		header("Location: index.php");
	}

	if(isset($_SESSION['adm']) or isset($_COOKIE['adm'])){
			$adm = "sim";

	}else{
		$adm = "nao";
	}
	session_start();

		include "bd.php";
	?>
	<!doctype html>
	<html lang="pt-br">
    <title>Brazilian Stores</title>
  	<head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="icon/favicon.ico" />
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

    <script type="text/javascript">

    	function categoria(){
    		categoria = document.getElementById("categoria").value;
    	}

    </script>

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
  
        <a class="nav-link active" href="carrinho.php"><i class="fa fa-shopping-cart "></i></a>
      </li>

  </li>
          <?php 
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

      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Entrar</h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="post" action="resp1.php" class="cadastro">
                <p>
                  E-mail:<p><input type="email" name="email" size=40 required=""></p>
                </p>
                <p>
                  Senha:<p><input type="password" name="senha" size=40 required=""></p>
                  <input type="checkbox" name="conect" value="conect" style="margin-left: 20px;">Permanecer Conectado
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
                  Nome Completo:<p><input type="text" name="nome" size=40 required="" /></p>
                </p>
                <p>
                  Identidade:<p><input type="text" name="identidade" size=40 required="" /></p>
                </p>
                <p>
                  CPF:<p><input type="text" name="cpf" size=40 required="" /></p>
                </p>
                <p>
                  Data de Nascimento:<p><input type="date" name="nascimento" min="1930-01-01" max="2000-02-22" size=40 required="" /></p>
                </p>
                <p>
                  Endereço:<p><input type="text" name="endereco" size=40 required="" /></p>
                </p>
                <p>
                  CEP:<p><input type="text" name="cep" placeholder="Somente números" size=40 required="" /></p>
                </p>
                <p>
                  Complemento:<p><input type="text" name="complemento" placeholder="Casa, apto, etc..." size=40 /></p>
                </p>
                <p>
                  Número:<p><input type="text" name="numero" placeholder="Número, lote, quadra, etc..." size=40 required="" /></p>
                </p>
                <p>
                  Bairro:<p><input type="text" name="bairro" size=40 required="" /></p>
                </p>
                <p>
                  Cidade:<p><input type="text" name="cidade" size=40 required="" /></p>
                </p>
                  <p>
                    <td>
                      <p><label for="estado">Estado</label>
                        <select name="estado" id="estado">
                          <option >Selecione o Estado</option>
                          <option value="AC">AC</option>
                          <option value="AL">AL</option>
                          <option value="AP">AP</option>
                          <option value="AM">AM</option>
                          <option value="BA">BA</option>
                          <option value="CE">CE</option>
                          <option value="ES">ES</option>
                          <option value="DF">DF</option>
                          <option value="MA">MA</option>
                          <option value="MT">MT</option>
                          <option value="MS">MS</option>
                          <option value="MG">MG</option>
                          <option value="PA">PA</option>
                          <option value="PB">PB</option>
                          <option value="PR">PR</option>
                          <option value="PE">PE</option>
                          <option value="PI">PI</option>
                          <option value="RJ">RJ</option>
                          <option value="RN">RN</option>
                          <option value="RS">RS</option>
                          <option value="RO">RO</option>
                          <option value="RR">RR</option>
                          <option value="SC">SC</option>
                          <option value="SP">SP</option>
                          <option value="SE">SE</option>
                          <option value="TO">TO</option>          
                        </select>
                        </p>
                    </td>
                  </p>
                <p>
                  E-mail:<p><input type="email" name="email" size=40 required="" /></p>
                </p>
                <p>
                  Senha:<p><input type="password" id="senha" name="senha" placeholder="Crie uma senha" size=40 required="" /></p>
                </p>
                <p>
                  Confirme a Senha:<p><input type="password" onblur="conf()" id="csenha" placeholder="Repita a senha" name="senha" size=40 required="" /></p>
                </p>
                <button type="submit" accesskey="13" class="btn btn-info btn-lg" onclick="conf()">Cadastrar</button>
              </form>
            </div>
          </div>

        </div>
      </div>

	<div>
		<?php
			$query = "select * from produto where idprod = $idprod limit 1";
			$consulta = mysqli_query($con, $query);

			if($prod = mysqli_fetch_assoc($consulta)){
				$nomeprod = $prod['nomeprod'];
				$preco = $prod['preco'];
        $preco = number_format($preco,2, ',','.');
				$categoria = $prod['categoria'];
				$marca = $prod['marca'];
				$img = $prod['img'];
        $descricao = $prod['descricao'];
			}
		?>

<div class="container">
    <div class="row">
      <div class="col-md-12" style="float: left;">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail" >
         <img src="produto/<?php echo $img; ?>" style="width: 90%;">
          <div class="caption">
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <h2><?php echo $nomeprod; ?></h2>
              </div>
              <div class="col-md-6 col-xs-6 price">
                <p><?php echo $categoria; ?></p>
                <p><?php echo $marca; ?></p>
                <p><?php echo $preco ?></p>
              <div class="col-md-6">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
        <div><p><?php echo "$descricao"; ?></p></div>
                <a <?php echo "href='carrinho.php?idprod=$idprod'"; ?> class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>Comprar</a>
            <?php
                if($adm == "sim"){
                  echo "
                    <a href='editprod.php?id= $idprod' class='btn btn-danger'>Editar Produto</a>
                  
                  ";
                }
            ?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <footer style="padding-top: 100px;">
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