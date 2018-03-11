-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Mar-2018 às 04:48
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idcarrinho` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`idcarrinho`, `idproduto`, `qtd`, `usuario`) VALUES
(12, 3, 4, 'abcraphael@gmail.com'),
(13, 6, 3, 'abcraphael@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nomeprod` varchar(20) NOT NULL,
  `preco` int(5) NOT NULL,
  `categoria` varchar(12) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `img` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nomeprod`, `preco`, `categoria`, `marca`, `quantidade`, `img`) VALUES
(1, 'Tenis', 100, 'Roupas', 'Nike', 10, '0'),
(2, 'Fone', 50, 'Eletronicos', 'Leadership', 50, '0'),
(3, 'Fone', 50, 'Eletronicos', 'Leadership', 50, '0'),
(4, 'Caixa de Som', 300, 'Eletronicos', 'Meteoro', 15, '0'),
(5, 'Assassins Creed', 35, 'Livros', 'Ubisoft', 20, '0'),
(6, 'Motog3', 800, 'Celulares', 'Motorola', 15, '0'),
(7, 'BonÃ©', 20, 'Roupas', 'Addidas', 10, '0'),
(8, 'Teclado', 18, 'InformÃ¡tica', 'Leadership', 20, '0'),
(9, 'Celular', 1000, 'InformÃ¡tica', 'Apple', 5, '0'),
(10, 'Teclado', 1000, 'Informatica', 'Leadership', 5, '10.jpg'),
(11, 'Camisa', 20, 'roupas', 'Lacoste', 50, '11.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
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
  `estado` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `adm`, `nome`, `identidade`, `cpf`, `nascimento`, `endereco`, `cep`, `complemento`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`) VALUES
(1, 'sim', 'Salum Lima', 123456789, 2147483647, '2000-02-01', 'rua para', 1234567, 'casa', 123, 'abc', 'abc', 0, 'abc@cba', '202cb962ac59075b964b07152d234b70'),
(2, '', 'Cristiano Medeiros', 123456789, 2147483647, '1998-02-01', 'Rua Chola Mais', 1234567, 'Apto', 762, 'Chablau', 'Cidade Alta', 0, 'cris@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
