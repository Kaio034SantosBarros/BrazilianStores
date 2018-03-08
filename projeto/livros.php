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





  <div style="border: 3px solid black; margin-top: 1%; background-color: #BEBEBE;">  
    <h3 class="text-center"><marquee scrollDelay=1><font color=black><DATA>Eletrônicos disponíveis no Momento</DATA></em></font></marquee></h3>
  </div>


  <div style="margin-left: 2%; margin-right: 2%; margin-top: 2%">
    <div class="row">
      <div class="col-sm-3 col-xs-12 col-md-3">
        <div class="card mb-4">
          <img class="card-img-top" src="img/livro1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">A Sutil Arte de ligar o F#da-se</h5>
            <a href="#" class="btn btn-primary">R$ 22,90  <i class="fa fa-shopping-cart"></i></a>
            <details>
             <summary>Detalhes</summary> 
             <p>Mark manson não tem meandros ou meias palavras. Com um estilo honesto, divertido e incrivelmente perspicaz, ele se tornou popular escrevendo em seu blog o que as pessoas realmente precisam ouvir, pois só isso funciona para nos fazer evoluir pessoal e profissionalmente. Mora em Nova York.</p>

           </details>


         </div>
       </div>
     </div>

     <div class="col-sm-3 col-xs-12 col-md-3">
      <div class="card mb-4">
        <img class="card-img-top" src="img/fonesjbl.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Fones JBL</h5>
          <a href="#" class="btn btn-primary">R$ 63,10  <i class="fa fa-shopping-cart"></i></a>
          <details>
           <summary>Detalhes</summary> 
           <p>Alto-falantes de alta potência
           Produz sonoridade padrão JBL com graves encorpados.Conchas com estrutura leve e ajustáveis.Proporciona experiência acústica com conforto, mesmo quando usado por períodos prolongados.Compatível com aparelhos IOS e Android, dando a flexibilidade que você precisa para desfrutar o seu som.</p>

         </details>


       </div>
     </div>
   </div>
   <div class="col-sm-3 col-xs-12 col-md-3">
    <div class="card mb-4">
      <img class="card-img-top" src="img/somsony.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Caixa Multimidia - Sony</h5>
        <a href="#" class="btn btn-primary">R$ 649,00  <i class="fa fa-shopping-cart"></i></a>
        <details>
         <summary>Detalhes</summary> 
         <p>Entrada USB:Sim Bluetooth:Sim Potência (RMS): 30W - Som: Tipo de alto-falante Alto-falante satélite: aproximado 4,8 cm Modos de som: Clear audio+, dsee - Conexões sem fio: Nfc: Sim Função mãos-livres: Sim -Especificação do bluetooth® versão 4.2 Intervalo de comunicação máximo: 10 m </p>

       </details>

     </div>
   </div>
 </div>
 <div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/cartao.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cartão Mini SD 64 GB</h5>
      <a href="#" class="btn btn-primary">R$ 109,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>CARTÃO DE MEMORIA SANDISK MICRO SD 64GB O micro SD é designado para uso em celulares. Com esse cartão você pode baixar imagens fotos e vídeos do seu celular direto para seu computador ou do seu computador para seu celular atraves do adaptador SD Esses cartões evoluíram muito ao longo dos anos. As principais diferenças podem ser notadas no tamanho e na capacidade de armazenagem. Com o passar do tempo, eles se tornaram menores e passaram a oferecer mais espaço para a gravação de arquivos.</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/mouse.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mouse Deathadder Elite</h5>
      <a href="#" class="btn btn-primary">R$ 335,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>Quando você usa óculos, ninguém pensará que este é um gravador e câmera escondida multifuncional. câmera espião escondida, câmera de óculos, que permite gravar fotos e vídeos. Pode registrar tudo o que acontece a cada minuto.Parâmetro:resolução de vídeo: 1920 x 1080Formato de vídeo: AVItaxa de quadros de vídeo: 30 FPSgravação: suportePorta USB: mini USBTensão de alimentação: 5 V DCtempo de carregamento: cerca de 1,5 horastem funções de foto e vídeotamanho: 15 (L) x 14,5 (W) x 3 (H) (CM)</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/pokebola.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pokebola Power Bank</h5> 
      <a href="#" class="btn btn-primary">R$ 59,90  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>Super carregador de celular para capturar seu Pokemon! Carregue em qualquer lugar Acabamento metalizado 12000 Mha , carrega até 3 vezes seu celular Tamanho Aproximado 8,5 X 8,5 Cm (Circunferência)</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/atari.jpg" alt="Card image cap">
    <div class="card-body">
     <h5 class="card-title">Atari Flashback</h5> 
      <a href="#" class="btn btn-primary">R$ 249,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>Descrição do Produto:Videogame Atari Flashback 7 com 101 jogos na memória.Uma super e clássica coletânea com os melhores jogos.Destaques: Centipede, Frogger e Space IvadersAcompanha dois joysticks com fio clássicos do Atari.Classificação etária LIVRE. Conteúdo da Embalagem:- 1 Videogame Atari Flashback 7 Classic Game- 101 Jogos inclusos na Memória- 2 Joysticks com fio- 1 Manual de instruções com certificado de garantia Características:Sistema Bi-volt automático: 110/220 VoltsConsumo: 1,7WSistema PAL-MSaída AV Mono3 Meses de garantia Jogos Destaque:JUNGLE HUNTTM, FRONT LINETM, POLARISTM, O Original FROGGER FOR ATARI 2600, e a versão de SPACE INVADERSTM.</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/ssd.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">SSD Kingston 240 GB</h5> 
      <a href="#" class="btn btn-primary">R$ 378,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>A unidade de estado sólido A400 da Kingston aumenta drasticamente a resposta do seu computador com tempos incríveis de inicialização, carregamento e transferência, comparados a discos rígidos mecânicos. Reforçado com uma controladora de última geração para velocidades de leitura e gravação de até 500MB/s e 450MB/s¹, este SSD é 10x mais rápido do que um disco rígido tradicional¹ para melhor desempenho, resposta ultrarrápida em multitarefas e um computador mais rápido de modo geral</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/nintendo.jpg" alt="Card image cap" style="height: 100%; width: 100%;">
    <div class="card-body">
      <h5 class="card-title">Nintendo Switch </h5> 
      <a href="#" class="btn btn-primary">R$ 549,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>Introduzindo Joy-Con, Controladores Que Tornam Possível Novos Tipos De Jogos, Para Uso Com O Nintendo Switch. O Versátil Joy-Con Oferece Múltiplas Formas Surpreendentes Para Que Os Jogadores Se Divirtam. Dois Joy-Con Pode Ser Usado De Forma Independente Em Cada Mão, Ou Juntos Como Um Controlador De Jogo Quando Ligado Ao Grip Joy-Con. Eles Também Podem Anexar Ao Console Principal Para Uso Em Modo Handheld, Ou Ser Compartilhado Com Amigos Para Desfrutar De Ação De Dois Jogadores Em Jogos Suportados. Cada Joy-Con Tem Um Conjunto Completo De Botões E Pode Atuar Como Um Controlador Autônomo, E Cada Um Inclui Um Acelerômetro E Gyro-Sensor, Tornando Independente Esquerdo E Direito Controle De Movimento Possível</p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/camera.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Canon PowerShot</h5> 
      <a href="#" class="btn btn-primary">R$ 2.080,00  <i class="fa fa-shopping-cart"></i></a>

      <details>
       <summary>Detalhes</summary> 
       <p>Zoom Inacreditável de 65X, equivalente a 21-1365mm, além do zoom absurdo de 65x ainda está disponivel o modo de filmagem, em FullHd, com dois microfones (estéreo), a SX60HS ainda conta com um painel LCD móvel, de 3 polegadas que vai facilitar ao máximo a filmagem e a fotografia; sapata hotshoe para qualquer flash Canon Speedlite, auto focus com reconhecimento de face; estabilizador de imagem e muito mais. Sensor - A SX60HS está equipada com um CMOS de 16.1MP e processador Canon Digic 6. A combinação entre sensor e processador permite a captura simultânea de imagens RAW+JPG, e velocidades mais elevadas de burst, chegando até incriveis 6 frames por segundo</p>

     </details>
   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/drone.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">DJI Spark </h5>
      <a href="#" class="btn btn-primary">R$ 1.895,00  <i class="fa fa-shopping-cart "></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p> Atinge até 4.000 metros de altura, e em Modo Sport pode voar a 50kmh. Modelo: Spark Alpine Câmera: Sensor 12MP CMOS Memória Externa: Suporta uso de cartão Micro SD de até 64GB Conectividade Wireless Tempo de Voo: Máximo: 16 minutos Velocidade: Velocidade máxima: 50 Kmh Velocidade de descida: máxima 3 metros por segundo Velocidade de subida: máxima 3 metros por segundo,Resolução de Vídeo: 1920 × 1080 30p Estabilizador: Intervalo controlável: -85 a 0 ° de inclinação Estabilização: mecânica dois eixos (de rotação da inclinação) Formato de Vídeo MP4 (MPEG-4 AVCH.264) Observação: Não acompanha Controle Remoto </p>

     </details>

   </div>
 </div>
</div>
<div class="col-sm-3 col-xs-12 col-md-3">
  <div class="card mb-4">
    <img class="card-img-top" src="img/microfone.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Microfone Compacto RODE</h5>

      <a href="#" class="btn btn-primary">R$ 490,00  <i class="fa fa-shopping-cart"></i></a>
      <details>
       <summary>Detalhes</summary> 
       <p>Microfone compacto Rode VideoMicro</p>

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