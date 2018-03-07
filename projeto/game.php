     <?php
    session_start();

    if(isset($_SESSION['email'])){
      header("Location: perfil.php");

      $nome = $_SESSION['nome'];
      $email = $_SESSION['email'];
    }
    ?>
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
        <a class="navbar-brand" href="#" style="font-family: 'Monoton', cursive; font-size: 150%;">Brazilian Stores</a>
        


        <ul class="nav nav-tabs mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 44px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="roupas.php">Roupas</a>
              <a class="dropdown-item" href="eletronicos.php">Eletrônicos</a>
              <a class="dropdown-item" href="livro.php">Livros</a>
              <a class="dropdown-item" href="info.php">Informática</a>
              <a class="dropdown-item" href="cel.php">Celulares</a>
              
            </div>
            <li class="nav-item">
              
              <a class="nav-link active" href="#home"><i class="fa fa-shopping-cart "></i></a>
            </li>

          </li>
          <li class="nav-item">
            <a class="nav-link active btn btn-light" data-toggle="modal" data-target="#myModal">Login</a>
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
                  Estado:<p><input type="text" name="estado" size=40 required="" /></p>
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





      <div style="border: 3px solid black; margin-top: 1%; background-color: #BEBEBE;">  
        <h3 class="text-center"><marquee scrollDelay=1><font color=black><DATA>Games disponíveis</DATA></em></font></marquee></h3>
      </div>


      <div style="margin-left: 2%; margin-right: 2%; margin-top: 2%">
        <div class="row">
          <div class="col-sm-3 col-xs-12 col-md-3">
            <div class="card mb-4">
              <img class="card-img-top" src="img/farcry3.jpg" alt="Card image cap" height="200" width="239">
              <div class="card-body">
                <h5 class="card-title">Farcry 3 - Xbox 360</h5>
                <a href="#" class="btn btn-primary">R$ 57,90<i class="fa fa-cart-arrow-down fa-2x"></i></a>
                <details>
                 <summary>Detalhes</summary> 
                 <p>Jogo onde você assume o papel de Jason Brody, um homem sozinho, preso em uma ilha tropical misteriosa. Neste paraíso selvagem, onde a ilegalidade e a violência são a única coisa certa, os jogadores determinam o desenrolar da história, as batalhas que lutarão com aliados ou inimigos e outras situações intensas que vão além do certo e errado. Como Jason Brody, os jogadores vão usar vários tipos de ataque em um mundo aberto, possibilitando ao jogador realizar as missões de maneiras bastante distintas, com muitos desafios pela frente, perigo e muita ação.</p>

               </details>


             </div>
           </div>
         </div>

         <div class="col-sm-3 col-xs-12 col-md-3">
          <div class="card mb-4">
            <img class="card-img-top" src="img/assassinscreed.jpg" alt="Card image cap" height="200" width="239">
            <div class="card-body">
              <h5 class="card-title">Assassins Creed - Xbox 360</h5>
              <a href="#" class="btn btn-primary">R$ 36,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
              <details>
               <summary>Detalhes</summary> 
               <p>O assassino mestre Ezio Auditore segue os passos do seu mentor lendário Altaïr em uma jornada de descoberta e revelação. O caminho é perigoso – levará Ezio à Constantinopla, o coração do Império Otomano, onde um crescente exército de Templários ameaça desestabilizar a região. Além da premiada história, o reconhecido multiplayer online foi aprimorado e expandido, incluindo mais modos, mapas e personagens que permitem testar as habilidades dos assassinos.</p>

             </details>


           </div>
         </div>
       </div>
       <div class="col-sm-6 col-xs-12 col-md-3">
        <div class="card mb-4">
          <img class="card-img-top" src="img/nba2k18.jpg" alt="Card image cap" height="200" width="239">
          <div class="card-body">
            <h5 class="card-title">NBA 2K18 - Xbox 360 </h5>
            <a href="#" class="btn btn-primary">R$ 149,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
            <details>
             <summary>Detalhes</summary> 
             <p>Domine a vizinhança. O jogo de esportes mais bem avaliado todos os anos está de volta com NBA 2K18, apresentando uma autenticidade sem paralelos e trazendo diversas melhorias dentro da quadra.Times lendários Os maiores jogadores da história da NBA de todos os 30 times, juntos em elencos de todos os tempos das franquias pela primeira vez. Compita no modo Quick Game para decidir de uma vez por todas qual franquia tem os melhores jogadores de todos os tempos.MyTEAM Gold Booster Comece sua carreira com um Gold Booster grátis. Com 5000 VC e um pacote Gold MyTEAM, com a garantia de conter um card de jogador Gold e quatro itens Gold adicionais.2K Beats Uma seleção eclética de músicas do mundo inteiro, com Future, Kendrick Lamar, Shakira, Nas, Def Leppard e muito mais.Jogue do seu jeito Demonstre suas habilidades em uma variedade de modos de jogo, incluindo MyCAREER, MyTEAM, The Association, Blacktop e muito mais.Seja o treinador em quadra Use comandos de voz do Kinect para controlar a ação em quadra, dando direções aos seus companheiros, escolhendo jogadas ensaiadas, mudando estratégias de defesa e pedindo tempos técnicos </p>

           </details>

         </div>
       </div>
     </div>
     <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/justdance2018.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">Just Dance 2018 - Xbox 360</h5>
          <a href="#" class="btn btn-primary">R$ 154,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Não importa onde você nasceu, quantos anos tem, se é um panda ou uma cenoura: aumente o volume e se prepare para liberar seu dançarino interior, pois Just Dance 2018 traz à tona o dançarino de todos! A maior franquia de música em vídeo game de todos os tempos*, com mais de 63 milhões de unidades vendidas** está voltando nesta primavera. Seja um iniciante nas festas, um jovem dançarino, ou um dançarino profissional buscando novos desafios, nunca foi tão fácil jogar Just Dance!Junte-se a uma comunidade de mais de 118 milhões de jogadores no mundo todo, e prepare seus melhores passos de dança! Dance músicas como 24K Magic de Bruno Mars, Side To Side de Ariana Grande Ft. Nicki Minaj, The Way I Are (Dance With Somebody) de Bebe Rexha Ft. Lil Wayne e Chantaje de Shakira Ft. Maluma. Reviva clássicos como Daddy Cool de Groove Century, ou se você curtir um K-Pop, divirta-se com Bubble Pop! de HyunA!De grandes sucessos do momento até as preferidas da família, dance 40 novas faixas, incluindo: - Rockabye – Clean Bandit Ft. Sean Paul & Anne-Marie - 24K Magic – Bruno Mars - Side To Side – Ariana Grande Ft. Nicki Minaj - Chantaje – Shakira Ft. Maluma - Naughty Girl – Beyoncé - The Way I Are (Dance With Somebody) – Bebe Rexha Ft. Lil Wayne - Automaton – Jamiroquai - Bubble Pop! – HyunA - Love Ward – Hatsune Miku - Make It Jingle – Big Freedia - Daddy Cool – Groove Century …e muitos mais!</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/metalgearsolid.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">Metal Gear Solid - Ps3</h5>
          <a href="#" class="btn btn-primary">R$ 41,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>"Metal Gear Solid HD Collection" não é uma simples coletânea de games antigos: pela importância que a série carrega, é quase um documentário retratando a evolução da franquia - indo desde os primeiros games em 8 bits até o mais recente "Peace Walker" - e dos videogames como um todo.Tratam-se, sem dúvida, de obras tecnicamente brilhantes, cada uma à sua época, mas, mais que isso, "Metal Gear" é a expressão de um criador, algo bem raro nesses tempos de produção industrial. Maluquices de Kojima à parte, a coleção se mostra bem servida, pois traz três games: "Metal Gear 2", "3" e "Peace Walker" (e os dois primeiríssimos games da série, feitos para MSX2, como bônus).</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/godofwar3.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">God of War III - Ps3</h5> 
          <a href="#" class="btn btn-primary">R$ 79,00  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Armado com duas lâminas mortíferas acorrentadas, Kratos enfrentará as criaturas mais terríveis da mitodologia para destruir o Olimpo e até mesmo o poderoso Zeus.</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/horadeaventura.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
         <h5 class="card-title">Adventure Time - Ps3</h5> 
          <a href="#" class="btn btn-primary">R$ 59,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Todas as princesas do Reino Nameless desapareceram misteriosamente! Finn e Jake embarcam em uma aventura épica para encontrar e resgatar as princesas, e escolher aquela princesa que comandará os habitantes sem nome do mundo de Ooo.</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/thelastofus.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">The Last of Us - Ps3</h5> 
          <a href="#" class="btn btn-primary">R$ 124,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>The Last of Us™ é uma experiência que promete redefinir o gênero com uma mistura de sobrevivência e ação, contando uma história centrada nos personagens, sobre uma praga moderna que dizima a espécie humana há 20 anos atrás. A natureza invade a civilização, forçando os poucos sobreviventes a lutar por comida, armas e o que mais puderem encontrar. Joel, um sobrevivente durão, e Ellie, uma jovem corajosa e bem mais esperta do que aparenta sua idade, precisam trabalhar juntos para sobreviver nesta jornada pelo que sobrou dos Estados Unidos. The Last of Us™ é desenvolvido pela Naughty Dog, criadora da aclamada série UNCHARTED.</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/codaw.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">Call of Duty - Ps4</h5>
          <a href="#" class="btn btn-primary">R$ 28,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Call of Duty - Advanced Warfare para PS4 - Activision
              Call of Duty®: Advanced Warfare, desenvolvido por Sledgehammer Games (co-desenvolvedores de Call of Duty®: Modern Warfare® 3), é o primeiro ciclo de desenvolvimento de três anos exclusivo para a próxima geração na história da franquia. Call of Duty®: Advanced Warfare prevê os poderosos campos de batalha do futuro, em que tanto a tecnologia quanto as táticas evoluíram e geraram uma nova era de combate para a franquia. Com um desempenho formidável, Kevin Spacey, vencedor do Oscar®, encarna Jonathan Irons - um dos homens mais poderosos do mundo - dando forma a essa visão assustadora da guerra no futuro. O poder muda tudo!
              Um Mundo Avançado - Call of Duty: Advanced Warfare se passa em um futuro plausível onde o progresso tecnológico e as práticas militares de hoje convergiram com consequências poderosas. - Nessa visão do futuro cuidadosamente pesquisada e criada, Corporações Militares Particulares (CMPs) se tornaram as forças armadas dominantes para incontáveis nações terceirizando suas necessidades militares, redesenhando fronteiras e reescrevendo as regras da guerra. - E Jonathan Irons, o fundador e presidente da maior CMP do mundo - Corporação Atlas - está no centro de tudo.Um Soldado Evoluído - Poderosos exoesqueletos evoluem cada aspecto da prontidão de batalha de um soldado, possibilitando combatentes a serem mobilizados com uma letalidade avançada e eliminando a necessidade de especialização. - A introdução dessa mecânica de jogo entrega movimentação de jogador melhorada e verticalidade através de saltos com impulso e ganchos, habilidades de disfarces furtivos e biomecânicas que fornecem força, consciência e velocidade incomparáveis. - Com o advento do exoesqueleto e das novas blindagens e armas avançadas, cada soldado comanda liberdade tática em qualquer terreno como nunca antes, fundamentalmente mudando o modo como jogadores jogam Call of Duty em todos os modos.Um Arsenal Devastador - Controlando o poder das plataformas da próxima geração, Call of Duty: Advanced Warfare coloca os jogadores em campos de batalha do futuro exibindo um novo conjunto de habilidades e arsenal avançado de alta tecnologia, armando jogadores com novos equipamentos, tecnologia, vantagens e veículos como hoverbikes e VANTs altamente especializados. - Jogadores também podem escolher entre munição padrão e uma nova classe de armamento de energia direcionada que possibilita dinâmicas de jogo completamente novas. - E com exoesqueletos fornecendo um multiplicador massivo de força e liberdade tática sem precedentes, Call of Duty: Advanced Warfare evolui cada tiroteio.</p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/terraria.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">Terraria - Ps4</h5> 
          <a href="#" class="btn btn-primary">R$ 14,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>

          <details>
           <summary>Detalhes</summary> 
           <p>Terraria para PS4 - Re-Logic
              Cave, lute, explore, construa! Nada é impossível nesse jogo repleto de aventuras! O mundo está ao alcance das duas mãos à medida que você luta pela sua sobrevivência, fortuna e glória!</p>

         </details>
       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/towerofguns.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">Tower of Guns - Ps4</h5>
          <a href="#" class="btn btn-primary">R$ 14,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Tower of Guns - Special Edition para PS4 
                Tower of Guns é um jogo de ação na primeira pessoa de ritmo frenético ao estilo de um ""bullet-hell"" com níveis e inimigos aleatórios, poderes especiais, bosses épicos e montes de itens e armas para desbloquear. Nunca sabes o que vais encontrar a seguir!Esta é uma experiência FPS pura para jogadores que apenas querem manter o dedo no gatilho, combater contra bosses gigantescos, recolher espólios e melhorar as suas habilidades até níveis insanos! Por isso, pega num lança-mísseis, liga-lhe um modificador de caçadeira, recolhe uma centena de saltos duplos acumuláveis e parte para a conquista da Tower of Guns! </p>

         </details>

       </div>
     </div>
    </div>
    <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/gta5.jpg" alt="Card image cap" height="200" width="239">
        <div class="card-body">
          <h5 class="card-title">GTA V - Ps4</h5>

          <a href="#" class="btn btn-primary">R$ 165,90  <i class="fa fa-cart-arrow-down fa-2x"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Grand Theft Auto V para PS4 - Rockstar
              O mundo aberto da Rockstar Games que gerou sucesso de crítica chega a uma nova geração. Entre nas vidas de três criminosos muito diferentes, Michael, Franklin e Trevor, enquanto eles arriscam tudo em uma série de assaltos ousados que podem garantir o resto de suas vidas. Explore o deslumbrante mundo de Los Santos e Blaine County na experiência definitiva de Grand Theft Auto V, apresentando amplas atualizações e melhorias técnicas tanto para jogadores novos quanto para os que estão retornando. Além de distâncias maiores de renderização e melhor resolução, os jogadores podem esperar diversas adições e melhorias.*Game vencedor do Game Awards 2014 na categoria: Melhor jogo remasterizado.</p>

         </details>
       </div>
     </div>
    </div>
    </div>
    </div>

    <footer>
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



    </html>
    </body>
    </html>