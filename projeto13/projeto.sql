-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 02:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `idcarrinho` int(11) NOT NULL,
  `idprod` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`idcarrinho`, `idprod`, `qtd`, `usuario`) VALUES
(2, 2, 1, 'cris@gmail.com'),
(3, 1, 2, 'cris@gmail.com'),
(4, 1, 1, 'abc@cba');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idprod` int(11) NOT NULL,
  `nomeprod` varchar(20) NOT NULL,
  `preco` int(5) NOT NULL,
  `categoria` varchar(12) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `img` varchar(15) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idprod`, `nomeprod`, `preco`, `categoria`, `marca`, `quantidade`, `img`, `descricao`) VALUES
(1, 'Camiseta Kratos', 100, 'roupas', 'Nike', 20, '1.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(2, 'Casaco CrossFire ', 50, 'roupas', 'Nike', 20, '2.png', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(3, 'Camiseta Chucky', 50, 'roupas', 'Nike', 50, '3.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(4, 'Camiseta Feminina', 60, 'roupas', 'Nike', 20, '4.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(5, 'Camiseta Goku', 35, 'roupas', 'Nike', 20, '5.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(6, 'Casaco- 3d', 100, 'roupas', 'Nike', 15, '6.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(7, 'Blusa com capuz', 60, 'Roupas', 'Nike', 20, '7.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(8, 'Camiseta Jiren', 60, 'roupas', 'Nike', 20, '8.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(9, 'Casaco Deadpool', 1000, 'roupas', 'Nike', 5, '9.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(10, 'Processador core I7', 1700, 'Informatica', 'Intel', 20, '10.jpg', 'Marca Intel, Modelo BX80684I78700K,Soquete LGA 1151, Litografia 14nm,NÃºmero de nÃºcleos 6, Threads 12, FrequÃªncia 3,70 GHz, FrequÃªncia Turbo 4,70 GHz, Cache 12 MB, Velocidade do barramento 8 GT/s DMI3, TDP 95 W, Tamanho MÃ¡ximo de MemÃ³ria 64 GB, Tipos de memÃ³ria DDR4-2666, MÃ¡ximo de Canais de MemÃ³ria 2'),
(11, 'Camiseta Feminina', 60, 'roupas', 'Nike', 50, '11.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(12, 'Casaco- 3d', 50, 'roupas', 'Nike', 15, '12.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(13, 'Casaco- 3d', 30, 'roupas', 'Nike', 15, '13.jpg', 'A estampa Ã© produzida com impressÃ£o digital (DTG) e o processo Ã© realizado com o que hÃ¡ de mais moderno no mercado, em impressora especÃ­fica para malharia,imprimindo a arte com qualidade de definiÃ§Ã£o excepcional e textura mÃ­nima sob a malha. O toque Ã© levinho e veste bem demais, parece um abraÃ§o.'),
(14, 'Caixa Multimidia - S', 500, 'eletronicos', 'Canon', 5, '14.jpg', 'Entrada USB:Sim Bluetooth:Sim PotÃªncia (RMS): 30W - Som: Tipo de alto-falante Alto-falante satÃ©lite: aproximado 4,8 cm Modos de som: Clear audio+, dsee - ConexÃµes sem fio: Nfc: Sim FunÃ§Ã£o mÃ£os-livres: Sim -EspecificaÃ§Ã£o do bluetoothÂ® versÃ£o 4.2 Intervalo de comunicaÃ§Ã£o mÃ¡ximo: 10 m '),
(15, 'GoPro Hero 5 Session', 1000, 'eletronicos', 'sla', 20, '15.jpg', 'A SessÃ£o GoPro Hero5 Ã© uma excelente cÃ¢mera para pessoas que gostam de sair ao ar livre e querem capturar cada momento em uma resoluÃ§Ã£o cristalina de 4k.'),
(16, 'Fones JBL', 100, 'eletronicos', 'sla', 20, '16.jpg', 'Alto-falantes de alta potÃªncia\r\n             Produz sonoridade padrÃ£o JBL com graves encorpados.Conchas com estrutura leve e ajustÃ¡veis.Proporciona experiÃªncia acÃºstica com conforto, mesmo quando usado por perÃ­odos prolongados.CompatÃ­vel com aparelhos IOS e Android, dando a flexibilidade que vocÃª precisa para desfrutar o seu som'),
(17, 'CartÃ£o Mini SD 64 G', 100, 'eletronicos', 'sla', 10, '17.jpg', 'CARTÃƒO DE MEMORIA SANDISK MICRO SD 64GB O micro SD Ã© designado para uso em celulares. Com esse cartÃ£o vocÃª pode baixar imagens fotos e vÃ­deos do seu celular direto para seu computador ou do seu computador para seu celular atraves do adaptador SD Esses cartÃµes evoluÃ­ram muito ao longo dos anos. As principais diferenÃ§as podem ser notadas no tamanho e na capacidade de armazenagem. Com o passar do tempo, eles se tornaram menores e passaram a oferecer mais espaÃ§o para a gravaÃ§Ã£o de arquivos.'),
(18, 'Mouse Deathadder Eli', 335, 'eletronicos', 'sla', 20, '18.jpg', 'Mouse Gamer Destiny 2 Razer DeathAdder Elite'),
(19, 'Pokebola Power Bank', 100, 'eletronicos', 'sla', 20, '19.jpg', 'Super carregador de celular para capturar seu Pokemon! Carregue em qualquer lugar Acabamento metalizado 12000 Mha , carrega atÃ© 3 vezes seu celular Tamanho Aproximado 8,5 X 8,5 Cm (CircunferÃªncia)'),
(20, 'Atari Flashback', 1000, 'eletronicos', 'sla', 20, '20.jpg', 'DescriÃ§Ã£o do Produto:Videogame Atari Flashback 7 com 101 jogos na memÃ³ria.Uma super e clÃ¡ssica coletÃ¢nea com os melhores jogos.Destaques: Centipede, Frogger e Space IvadersAcompanha dois joysticks com fio clÃ¡ssicos do Atari.ClassificaÃ§Ã£o etÃ¡ria LIVRE. ConteÃºdo da Embalagem:- 1 Videogame Atari Flashback 7 Classic Game- 101 Jogos inclusos na MemÃ³ria- 2 Joysticks com fio- 1 Manual de instruÃ§Ãµes com certificado de garantia CaracterÃ­sticas:Sistema Bi-volt automÃ¡tico: 110/220 VoltsConsumo: 1,7WSistema PAL-MSaÃ­da AV Mono3 Meses de garantia Jogos Destaque:JUNGLE HUNTTM, FRONT LINETM, POLARISTM, O Original FROGGER FOR ATARI 2600, e a versÃ£o de SPACE INVADERSTM.'),
(21, 'SSD Kingston 240 GB', 200, 'eletronicos', 'sla', 20, '21.jpg', 'A unidade de estado sÃ³lido A400 da Kingston aumenta drasticamente a resposta do seu computador com tempos incrÃ­veis de inicializaÃ§Ã£o, carregamento e transferÃªncia, comparados a discos rÃ­gidos mecÃ¢nicos. ReforÃ§ado com uma controladora de Ãºltima geraÃ§Ã£o para velocidades de leitura e gravaÃ§Ã£o de atÃ© 500MB/s e 450MB/sÂ¹, este SSD Ã© 10x mais rÃ¡pido do que um disco rÃ­gido tradicionalÂ¹ para melhor desempenho, resposta ultrarrÃ¡pida em multitarefas e um computador mais rÃ¡pido de modo geral'),
(22, 'Nintendo Switch', 600, 'eletronicos', 'sla', 100, '22.jpg', 'Introduzindo Joy-Con, Controladores Que Tornam PossÃ­vel Novos Tipos De Jogos, Para Uso Com O Nintendo Switch. O VersÃ¡til Joy-Con Oferece MÃºltiplas Formas Surpreendentes Para Que Os Jogadores Se Divirtam. Dois Joy-Con Pode Ser Usado De Forma Independente Em Cada MÃ£o, Ou Juntos Como Um Controlador De Jogo Quando Ligado Ao Grip Joy-Con. Eles TambÃ©m Podem Anexar Ao Console Principal Para Uso Em Modo Handheld, Ou Ser Compartilhado Com Amigos Para Desfrutar De AÃ§Ã£o De Dois Jogadores Em Jogos Suportados. Cada Joy-Con Tem Um Conjunto Completo De BotÃµes E Pode Atuar Como Um Controlador AutÃ´nomo, E Cada Um Inclui Um AcelerÃ´metro E Gyro-Sensor, Tornando Independente Esquerdo E Direito Controle De Movimento PossÃ­vel'),
(23, 'Canon PowerShot', 2000, 'eletronicos', 'sla', 30, '23.jpg', 'Zoom InacreditÃ¡vel de 65X, equivalente a 21-1365mm, alÃ©m do zoom absurdo de 65x ainda estÃ¡ disponivel o modo de filmagem, em FullHd, com dois microfones (estÃ©reo), a SX60HS ainda conta com um painel LCD mÃ³vel, de 3 polegadas que vai facilitar ao mÃ¡ximo a filmagem e a fotografia; sapata hotshoe para qualquer flash Canon Speedlite, auto focus com reconhecimento de face; estabilizador de imagem e muito mais. Sensor - A SX60HS estÃ¡ equipada com um CMOS de 16.1MP e processador Canon Digic 6. A combinaÃ§Ã£o entre sensor e processador permite a captura simultÃ¢nea de imagens RAW+JPG, e velocidades mais elevadas de burst, chegando atÃ© incriveis 6 frames por segundo'),
(24, 'DJI Spark', 1800, 'eletronicos', 'sla', 30, '24.jpg', 'Atinge atÃ© 4.000 metros de altura, e em Modo Sport pode voar a 50kmh. Modelo: Spark Alpine CÃ¢mera: Sensor 12MP CMOS MemÃ³ria Externa: Suporta uso de cartÃ£o Micro SD de atÃ© 64GB Conectividade Wireless Tempo de Voo: MÃ¡ximo: 16 minutos Velocidade: Velocidade mÃ¡xima: 50 Kmh Velocidade de descida: mÃ¡xima 3 metros por segundo Velocidade de subida: mÃ¡xima 3 metros por segundo,ResoluÃ§Ã£o de VÃ­deo: 1920 Ã— 1080 30p Estabilizador: Intervalo controlÃ¡vel: -85 a 0 Â° de inclinaÃ§Ã£o EstabilizaÃ§Ã£o: mecÃ¢nica dois eixos (de rotaÃ§Ã£o da inclinaÃ§Ã£o) Formato de VÃ­deo MP4 (MPEG-4 AVCH.264) ObservaÃ§Ã£o: NÃ£o acompanha Controle Remoto'),
(25, 'Microfone Compacto R', 500, 'eletronicos', 'sla', 30, '25.jpg', 'Microfone compacto Rode VideoMicro'),
(26, 'A Arte de ligar o F#', 100, 'livros', 'Rx O Pai', 20, '26.jpg', 'Mark manson nÃ£o tem meandros ou meias palavras. Com um estilo honesto, divertido e incrivelmente perspicaz, ele se tornou popular escrevendo em seu blog o que as pessoas realmente precisam ouvir, pois sÃ³ isso funciona para nos fazer evoluir pessoal e profissionalmente. Mora em Nova York.'),
(27, 'Sapiens', 50, 'livros', 'Rx O Pai', 20, '27.jpg', 'Sapiens Ã© realmente impressionante, de se ler num fÃ´lego sÃ³. De fato, questiona nossas ideias preconcebidas a respeito do universo.\" (The Guardian) â€œ...uma explosÃ£o em forma de livro, tÃ£o agradÃ¡vel de ler quanto perturbador.'),
(28, 'Seja f#da!', 25, 'livros', 'Rx O Pai', 30, '28.jpg', 'Aposto que vocÃª quer, no final da sua vida, olhar para trÃ¡s, bater no peito com o coraÃ§Ã£o cheio de felicidade, sem falsa modÃ©stia, com plena convicÃ§Ã£o e serenidade, e dizer: minha vida foi FODA. Mas calma, encontrar este livro Ã© sÃ³ o comeÃ§o. Agora, vocÃª precisa levÃ¡-lo com vocÃª. Com ele, vocÃª vai aprender comportamentos e atitudes necessÃ¡rios para conquistar, em todos os aspectos da sua vida, resultados incrÃ­veis.'),
(29, 'O Poder do HÃ¡bito', 31, 'livros', 'Rx O Pai', 30, '29.jpg', 'Segundo o autor, a chave para se exercitar regularmente, perder peso, educar os filhos, tornar-se mais produtivo, criar empresas revolucionÃ¡rias e alcanÃ§ar o sucesso Ã© entender como os hÃ¡bitos funcionam. Ele procura mostrar que, ao dominar esta ciÃªncia, todos podem transformar suas empresas e suas vidas.'),
(30, 'MindSet', 30, 'livros', 'Rx O Pai', 30, '30.jpg', 'Carol S. Dweck, professora de psicologia na Universidade Stanford e especialista internacional em sucesso e motivaÃ§Ã£o, desenvolveu, ao longo de dÃ©cadas de pesquisa, um conceito fundamental: a atitude mental com que encaramos a vida, que ela chama de â€œmindsetâ€, Ã© crucial para o sucesso. Dweck revela de forma brilhante como o sucesso pode ser alcanÃ§ado pela maneira como lidamos com nossos objetivos. O mindset nÃ£o Ã© um mero traÃ§o de personalidade, Ã© a explicaÃ§Ã£o de por que somos otimistas.'),
(31, 'Arrume sua Cama', 60, 'livros', 'Rx O Pai', 30, '31.jpg', 'Dez liÃ§Ãµes de um almirante das forÃ§as especiais para mudar sua vida \r\n       Quando foi convidado para proferir o discurso da aula inaugural dos alunos de graduaÃ§Ã£o da Universidade do Texas, o almirante William McRaven pensou em compartilhar suas liÃ§Ãµes sobre lideranÃ§a. Afinal, em 37 anos de carreira na Marinha norte-americana, ele exerceu o comando em vÃ¡rios nÃ­veis â€“ inclusive tendo sido o responsÃ¡vel pela missÃ£o que capturou Osama Bin Laden.'),
(32, 'Como fazer amigos', 60, 'livros', 'Rx O Pai', 50, '32.jpg', 'Carnegie nos ensina maneiras de conquistar as pessoas de uma maneira que ainda nos dias de hoje Ã© muito vÃ¡lida. A leitura do livro Ã© enriquecedora, nos leva a refletir sobre formas de abordagem que muitas vezes usamos sem perceber e que nÃ£o trazem os efeitos desejados. O autor, sabiamente dÃ¡ diversas dicas de como conduzir diversas situaÃ§Ãµes e reverter o pensamento do interlocutor para que fique de acordo com o seu.Quanto Ã  ediÃ§Ã£o, a diagramaÃ§Ã£o Ã© muito boa, letras grandes; livro bastante confortÃ¡vel de manusear.'),
(33, 'Roube como um Artist', 20, 'livros', 'Rx O Pai', 10, '33.jpg', 'Verdadeiro manifesto ilustrado de como ser criativo na era digital, Roube como um artista, do designer e escritor Austin Kleon, ganhou a lista dos mais vendidos do The New York Times e figurou no ranking de 2012 da rede Amazon ao mostrar Â– com bom humor, ousadia e simplicidade Â– que nÃ£o Ã© preciso ser um gÃªnio para ser criativo, basta ser autÃªntico.'),
(34, 'O poder do SilÃªncio', 40, 'livros', 'Rx O Pai', 30, '34.jpg', 'O silÃªncio e a calma nÃ£o sÃ£o apenas a ausÃªncia de barulho e de conteÃºdo. SÃ£o a dimensÃ£o mais profunda do nosso ser, a inteligÃªncia primordial, a consciÃªncia de que sÃ³ podemos ser felizes Agora. O poder transformador do silÃªncio estÃ¡ em nos libertar de nossos pensamentos, medos e desejos, dissipando as tensÃµes do passado e as expectativas em relaÃ§Ã£o ao futuro. SÃ³ no presente podemos descobrir quem realmente somos, alcanÃ§ando assim a paz e a alegria que estÃ£o dentro de nÃ³s. Neste livro, seguindo a tradiÃ§Ã£o dos sutras indianos, Tolle optou por transmitir seus ensinamentos espirituais em forma de aforismos. SÃ£o 200 textos curtos e inspiradores que abordam diversos temas, entre eles, o Agora, os relacionamentos, a morte e a eternidade.'),
(35, 'Mostre seu Trabalho', 30, 'livros', 'Rx O Pai', 40, '35.jpg', 'Depois de Roube como um artista, um manifesto irreverente e repleto de dicas bem-humoradas para ativar o potencial criativo, e Roube como um artista: o diÃ¡rio, o escritor e artista grÃ¡fico Austin Kleon ensina ao leitor como compartilhar sua criatividade e tornar seu trabalho conhecido na era digital.'),
(36, 'Segredos da Mente', 100, 'livros', 'Rx O Pai', 20, '36.jpg', 'O autor desta obra nos apresenta algumas dezenas de narrativas. SÃ£o fatos reais, extraÃ­dos do dia a dia das centenas de pessoas por ele atendidas. Necessitadas de compreensÃ£o e carinho sÃ£o encaminhadas e orientadas na busca da soluÃ§Ã£o dos problemas que os afligem, acalmando-as e devolvendo-lhes a fÃ©, a esperanÃ§a e a coragem.'),
(37, 'A Coragem de Ser', 30, 'livros', 'Rx O Pai', 20, '37.jpg', 'Primeiro lugar na lista do The New York Times.BrenÃ© Brown ousou tocar em assuntos que costumam ser evitados por causarem grande desconforto. Sua palestra a respeito de vulnerabilidade, medo, vergonha e imperfeiÃ§Ã£o jÃ¡ teve mais de 25 milhÃµes de visualizaÃ§Ãµes.'),
(38, 'Processador Core i5', 700, 'informatica', 'Intel', 30, '38.jpg', 'Processador Intel Core i5-8400 Coffee Lake 8a GeraÃ§Ã£o, Cache 9MB, 2.8GHz (4.0GHz Max Turbo), LGA 1151 Intel UHD Graphics 630 - BX80684I58400'),
(39, 'Placa de Video NVIDE', 600, 'informatica', ' NVIDIA', 30, '39.jpg', 'Placa de Video VGA NVIDIA ASUS GEFORCE GTX 1050 2GB, Boost Clock 1518 MHz, DVI/HDMI/Display port/suport HDCP, DirectX 12, Expedition eSports EX-GTX1050-O2G'),
(40, 'Placa de VÃ­deo  AMD', 400, 'informatica', 'AMD', 10, '40.jpg', 'Placa de VÃ­deo VGA AMD GIGABYTE RADEON R7 360 OC 2G Rev. 3.0 - GV-R736OC-2GD'),
(41, 'Computador Gamer', 1700, 'informatica', 'Rx O Pai', 30, '41.jpg', 'Computador Gamer G-Fire AMD A8-7600, 4GB, HD 500GB, Radeon R7 integrada, Linux - Ãcarus LT HTAVA-R54 '),
(42, 'Computador Gamer', 3700, 'informatica', 'Rx O Pai', 10, '42.jpg', 'Computador Gamer Rawar Armata Intel Core i3-7100, 8GB, HD 1TB, Geforce GTX1050TI - RW252PAZ'),
(43, 'Computador Gamer', 3000, 'informatica', 'Rx O Pai', 20, '43.jpg', 'Computador Gamer NTC AMD Ryzen 1200, 8GB, HD 1TB, GTX 1050, Windows 10 (VersÃ£o de AvaliaÃ§Ã£o) - 6501'),
(44, 'Computador Gamer', 2300, 'informatica', 'Rx O Pai', 23, '44.jpg', 'Computador Gamer G-Fire AMD FX8300, 8GB, HD 1TB, DVD-RW, Linux - HTAVA-66'),
(45, 'Notebook Gamer', 4000, 'informatica', 'Rx O Pai', 12, '45.jpg', 'Notebook Gamer Acer Intel Core I5-7300HQ, 8GB, 1TB, DDR4, NVIDIA GEFORCE GTX 1050 4GB, DDR5, 15,6Â´Â´ FULL HD, Windows 10 HOME - VX5-591G-54PG'),
(46, 'Notebook Gamer', 7000, 'informatica', 'Rx O Pai', 4, '46.jpg', 'Notebook Gamer MSI GT72 6QD Dominator G Intel Core i7-6820HK, NVIDIA GEFORCE GTX 970M, 16GB DDR4,128 SSD, 1TB, BD Writer , Tela 17.3'),
(47, 'Mouse Gamer', 200, 'informatica', 'Rx O Pai', 5, '47.jpg', 'Mouse Gamer Logitech G403 RGB 12000DPI'),
(48, 'Mouse Gamer', 100, 'informatica', 'Rx O Pai', 9, '48.jpg', 'Mouse Gamer Logitech Ultra-rÃ¡pido G402 Hyperion Fury FPS 4000DPI Preto'),
(49, 'Samsung J7 Prime', 900, 'celulares', 'Samsung', 10, '49.jpg', 'UniÃ£o perfeita entre design e tecnologia o Galaxy J7 Prime trÃ¡s um corpo em metal de alta resistÃªncia com bordas arredondadas que lhe dÃ£o um aspecto premium. Com uma tela Full HD de 5.5\" Ã© ideal para filmes, fotos e navegaÃ§Ã£o na internet. Sua cÃ¢mera traseira de 13MP com f1.9 capturas fotos claras e nÃ­tidas mesmo em condiÃ§Ãµes de baixa luminosidade e a sua cÃ¢mera frontal de 8MP com f1.9 e Flash Frontal permite selfies incrÃ­veis. O Leitor de ImpressÃ£o Digital dÃ¡ mais seguranÃ§a e agilidade e tudo isso suportado por um potente processador Octa Core, 3MB de RAM e 32GB de memÃ³ria interna.'),
(50, 'Asus Zenfone 2', 800, 'celulares', 'Asus', 10, '50.jpg', 'Uma maravilhosa combinaÃ§Ã£o entre tecnologia e engenharia, que equilibra a beleza e forÃ§a, um desempenho sem precedentes. Design elegante com bordas incrivelmente finas, de apenas 3.9 mm. Este efeito Ã© conseguido atravÃ©s de um processo de fabricaÃ§Ã£o muito preciso. Tela de 5.5\" polegadas, uma proporÃ§Ã£o incrÃ­vel entre a tela e o corpo de 72%. VisÃ£o ampla para assistir aos seus filmes favoritos. ZenFone 2 vem equipado com o super processador intel Atom Quad-Core Z3580 de 64-bit de 2,3GHz capaz de executar aplicativos pesados sem problema algum.'),
(51, 'Apple Iphone 8', 3700, 'celulares', 'Apple', 10, '51.jpg', 'Design inovador,totalmente em vidro.A cÃ¢mera que o mundo todo inteiro adora, ainda melhor.O chip mais poderoso e inteligente em qualquer smartphone. Recarga sem fio simples de verdade, e experiÃªncias de relidade aumentada envolventes como nuncal.O Iphone 8 Ã© brilhante.'),
(52, 'Sansumg Galaxy S8 Pl', 3200, 'celulares', 'Samsung', 10, '52.jpg', 'Design surpreendentemente e inovador com seu display infinito que se estende atÃ© as laterais do aparelho. Processador Octa-Core para iniciar e alternar entre os aplicativos com muita agilidade. A bateria permite maior autonomia e um menor consumo de energia. A cÃ¢mera principal do Galaxy S8 Plus oferece recursos avanÃ§ados e vocÃª poderÃ¡ registrar fotos de alta qualidade tanto de dia quanto Ã  noite.'),
(53, 'Xiaomi Redmi Note 5A', 500, 'celulares', 'Xiaomi', 5, '53.jpg', 'Dual SIM (Nano-SIM) Display. Tipo IPS LCD touchscreen capacitivo, 16M cores Tamanho Tela. 5,5 polegadas ResoluÃ§Ã£o 720 x 1280 pixels Multitouch Sim ProteÃ§Ã£o display.Gorilla Glass 3 - MIUI 9.0 Sistema Operacional. Android 7.0 (Nougat) Chipset Qualcomm MSM8917 Snapdragon 425 CPU Quad-core Cortex-A53 GPU Adreno 308 Suporta cartÃ£o microSD de atÃ© 256GB MemÃ³ria interna. 16GB MemÃ³ria Ram. 2GB '),
(54, 'LG K10', 700, 'celulares', 'LG', 23, '54.jpg', 'Smartphone LG K10 M250DS Dourado com 32GB, Dual Chip, Tela de 5.3\" HD, 4G, Android 7.0, CÃ¢mera 13MP e Processador Octa Core de 1.5 GHz. O novo K10 agora vem com Android 7.0 (Nougat), o mais novo sistema operacional do Google. Agora a cÃ¢mera de sefie de 5MP e 120Â° cabe todo mundo nas suas selfies, com muito mais cenÃ¡rio. O LG K10 novo tem 32GB de memÃ³ria interna.'),
(55, 'Asus Zenfone 4 Selfi', 1300, 'celulares', 'Asus', 20, '55.jpg', 'Apresentamos o Smartphone Asus Zenfone 4 Selfie Rose Ouro. CÃ¢mera Selfie Dupla Para fornecer a melhor experiÃªncia em selfies, possui duas cÃ¢meras frontais sendo 20MP que tira selfies deslumbrantes e uma cÃ¢mera grande angular de 8MP com um campo de visÃ£o de 120Â°. Tecnologia ASUS SelfieMaster, vocÃª tem a flexibilidade de incluir apenas a si ou juntar os amigos para selfies em grupo. Flash LED Selfie Possui um flash LED com iluminaÃ§Ã£o leve que oferece a quantidade perfeita de luz para suavizar a textura da sua pele para fazer vocÃª brilhar como um superstar em cada selfie. Capture Cada momento AlÃ©m de duas cÃ¢meras frontais selfie, possui uma cÃ¢mera traseira de 16MP para que vocÃª capture seus momentos com riqueza de detalhes.'),
(56, 'Iphone X 64GB', 5000, 'celulares', 'sla', 2, '56.jpg', 'FantÃ¡stico produto, Tudo de novo, inspirado uma nova era para smartphone. InteligÃªncia artificial a serviÃ§o do homem.'),
(57, 'Motorola Moto G5s Pl', 800, 'celulares', 'Motorola', 6, '57.jpg', 'NÃ£o se preocupe com a bateriaFique longe do carregador. A bateria de 3000 mAh tem capacidade suficiente para o dia todo. Na hora de recarregar, nÃ£o perca tempo. O carregador TurboPower fornece atÃ© 6 horas de uso com apenas 15 minutos de carregamento.CÃ¢mera traseira de 16 MP | CÃ¢mera frontal de 5 MPO moto g5S possui uma cÃ¢mera de 16 MP de alta resoluÃ§Ã£o e foco automÃ¡tico de detecÃ§Ã£o de fase (PDAF type 3), que utiliza mais de 200 mil pixels para focar no objeto em um instante, para que vocÃª nÃ£o perca um clique. Tire selfies excelentes com a cÃ¢mera de 5 MP com Flash Frontal e lente de Ã¢ngulo aberto, para que ninguÃ©m fique de fora da fotoDesign e TelaEstrutura Ãºnica em metal e tela de 5.2 Full HDEstilo ou eficiÃªncia? Fique com os dois. '),
(58, 'Motorola MOTO X4', 1200, 'celulares', 'Motorola', 20, '58.jpg', 'A Motorola apresenta a versÃ£o 4 do Smartphone Moto X! Seu formato Premium com acabamento em vidro 3D se mistura Ã  estrutura de metal, criando um aparelho de pura beleza e requinte. Fotos e vÃ­deos incrÃ­veis. ConheÃ§a o novo Moto X4 e sua cÃ¢mera inteligente. Ele possui um sistema de cÃ¢mera traseira dupla com sensores de 12MP e 8MP e recursos exclusivos, como foco seletivo, reconhecimento de objetos e efeitos de realidade aumentada que proporciona muito mais qualidade na captura das imagens. Com a super-selfie vocÃª tira fotos em alta resoluÃ§Ã£o de 16 MP ou, no modo avanÃ§ado, fotos incrivelmente nÃ­tidas mesmo com pouca luz.'),
(59, 'Samsung Galaxy J7 Pr', 1200, 'celulares', 'Samsung', 30, '59.jpg', 'Smartphone Samsung Galaxy J7 Pro, design em metal,Octa Core, Tela 5.5\", Android 7.0, 64GB, 3GB RAM, cÃ¢mera 13MP f1.7 + 13MP f1.9 frontal com Flash LED, Dual Chip - Preto.'),
(60, 'Huawei P8 Lite L21', 600, 'celulares', 'sla', 12, '60.jpg', 'Dual Chip. NÃ£o (Micro-SIM) Display. Tipo IPS LCD touchscreen capacitivo, 16M cores Tamanho Tela. 5.0 polegadas, 68.9 cm2 ResoluÃ§Ã£o 720 x 1280 pixels, relaÃ§Ã£o 16: 9 (~ 294 ppp de densidade) Multitouch Sim ProteÃ§Ã£o Corning Gorilla Glass 3 - Emotion 3.1 UI Sistema Operacional. Android 5.0.2 (Lollipop), atualizÃ¡vel para 6.0 (Marshmallow)'),
(61, 'Assassins Creed', 20, 'games', 'Irineu', 10, '61.jpg', 'Assassins Creed Ã© uma sÃ©rie de jogos eletrÃ´nicos de aÃ§Ã£o-aventura criada pela Ubisoft. A premissa central envolve-se a partir da rivalidade entre duas sociedades secretas ancestrais'),
(62, 'Far Cry 3', 100, 'games', 'Irineu', 10, '62.jpg', 'Far Cry 3 Ã© um game do gÃªnero tiro em primeira pessoa e mundo aberto desenvolvido pela Ubisoft Montreal em conjunto com a Ubisoft Massive, a Ubisoft Reflections, e a Ubisoft Shanghai.'),
(63, 'Cod AW', 90, 'games', 'Irineu', 20, '63.jpg', 'Call of Duty: Advanced Warfare Ã© um jogo do gÃ©nero tiro em primeira pessoa produzido pela Sledgehammer Games e publicado pela Activision.'),
(64, 'The Last of Us', 100, 'games', 'Irineu', 10, '64.jpg', 'The Last of Us Ã© um jogo eletrÃ´nico de aÃ§Ã£o-aventura e sobrevivÃªncia desenvolvido pela Naughty Dog e publicado pela Sony Computer Entertainment. Ele foi lanÃ§ado exclusivamente para PlayStation 3 em 14 de junho de 2013'),
(65, 'Gta V', 100, 'games', 'Irineu', 81, '65.jpg', 'Grand Theft Auto V Ã© um jogo eletrÃ´nico de aÃ§Ã£o-aventura desenvolvido pela Rockstar North e publicado pela Rockstar Games.'),
(66, 'God of War III', 100, 'games', 'Irineu', 20, '66.jpg', 'God of War III Ã© um jogo eletrÃ´nico da sÃ©rie God of War. O seu desenvolvimento foi formalmente anunciado na E3 2008. O jogo foi lanÃ§ado em 16 de marÃ§o de 2010 exclusivamente para PlayStation 3.'),
(67, 'Adventure Time', 40, 'games', 'Irineu', 40, '67.jpg', 'Adventure Time Ã© uma sÃ©rie de desenho animado americana criada por Pendleton Ward para o Cartoon Network'),
(68, 'Just Dance', 100, 'games', 'Irineu', 35, '68.jpg', 'O Just Dance 2018, Faz Parte da SÃ©rie Just Dance, Feita Pela Empresa Francesa Ubisoft O Jogo Foi Anunciado no Evento Gamer Electronic Entertainment Expo, Onde Foi Publicada a Primeira Parte da Songlist Que Foram 12/43.'),
(69, 'Metal Gear', 100, 'games', 'Irineu', 40, '69.jpg', 'Metal Gear Ã© uma sÃ©rie de jogos enquadrados na categoria stealth, ou seja, jogos de espionagem com aÃ§Ã£o, criada por Hideo Kojima e produzida pela Konami.'),
(70, 'NBA 2K18', 100, 'games', 'Irineu', 20, '70.jpg', 'NBA 2K18 Ã© um videojogo de basquetebol em desenvolvimento pela Visual Concepts e publicado pela 2K Sports. Ã‰ a 19Âª ediÃ§Ã£o da sÃ©rie NBA 2K e o sucessor de NBA 2K17.'),
(71, 'Terraria', 30, 'games', 'Irineu', 20, '71.jpg', 'Terraria Ã© um RPG de aÃ§Ã£o-aventura independente produzido pela desenvolvedora de jogos Re-Logic. Possui como caracterÃ­sticas a exploraÃ§Ã£o, artesanato, construÃ§Ã£o de estruturas e combate a monstros perigosos em um mundo 2D gerado proceduramente.'),
(72, 'Tower of Guns', 40, 'games', 'Irineu', 30, '72.jpg', 'Tiro em primeira pessoa.');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusu` int(11) NOT NULL,
  `adm` varchar(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `identidade` int(13) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cep` int(7) NOT NULL,
  `complemento` varchar(11) NOT NULL,
  `numero` float NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusu`, `adm`, `nome`, `identidade`, `cpf`, `nascimento`, `endereco`, `cep`, `complemento`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`) VALUES
(1, 'sim', 'Salum Lima', 123, 456, '1993-04-05', 'rua para', 26265540, 'Casa', 414, 'Jardim Nova Era', 'Nova IguaÃ§u', 'RJ', 'abc@cba', 'MTIz'),
(2, 'nao', 'Cristiano Medeiros', 0, 0, '0000-00-00', '', 0, '', 0, '', '', '0', 'cris@gmail.com', 'MTIz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idcarrinho`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idprod`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idcarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
