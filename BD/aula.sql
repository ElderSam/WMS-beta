-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2019 às 00:46
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `valor`) VALUES
(1, 'mouse', 25.35),
(2, 'roteador', 101.35),
(3, 'monitor', 150),
(5, 'CPU', 250),
(6, 'CPU', 250),
(7, '', 0),
(8, 'placa mÃ£e', 503),
(9, 'asdfsd', 0),
(10, 'mouse', 4565),
(11, 'dfasdfs', 978987);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `email`) VALUES
(1, 'maria', 'senha1'),
(2, 'jose', 'senha2'),
(3, 'pedro', '5674764u'),
(8, 'elder', '542yth6yh6'),
(9, 'matheus', '56g6yth'),
(10, 'doug', '4r56gg6h'),
(11, 'doug', '4r56gg6h'),
(12, 'douglas', '4f5g6hj'),
(13, 'ffsd', 'fgtdghd'),
(14, 'sdafasd', 'sdafsd'),
(15, '', ''),
(16, '', ''),
(17, 'asfads', 'asdfsad'),
(18, 'asfads', 'asdfsad'),
(19, 'asdfsad', 'asfdsd'),
(20, 'asdfsad', 'asfdsd'),
(21, 'asdfasd', 'asdfds'),
(22, 'asdfdasf', 'asdfsad'),
(23, 'asdfdsa', 'asdfs'),
(24, 'asdfasd', 'asdfds'),
(25, 'asdfsd', 'asdfs'),
(26, 'ASDFSAD', 'SADFSD'),
(27, 'DFSDF', 'SDFSD'),
(28, 'asdf', 'as'),
(29, 'asdf', 'as'),
(30, 'asdfasd', 'asdfasd'),
(31, 'asdfs', 'asdf'),
(32, 'asdfs', 'asdf'),
(33, 'asdfs', 'asdf'),
(34, 'asdfsa', 'asdfdsa'),
(35, 'sdfds', 'df'),
(36, 'asdf', 'sdfsdf'),
(37, 'sadfsd', 'sadf'),
(38, 'asdfsda', 'asdf'),
(39, 'sdfds', 'sdfsd'),
(40, 'sdfs', 'sdfsd'),
(41, 'sdfs', 'sdfs'),
(42, 'sadfasd', 'fsadfsd'),
(43, 'sadfasd', 'fsadfsd'),
(44, 'dsfsdf', 'sdfds'),
(45, 'sdfsd', 'sdfsd'),
(46, 'sadfsd', 'dsfsd'),
(47, 'sdfsd', 'sdfsdf'),
(48, 'sadfasd', 'asdfsd'),
(49, 'asdfsd', 'asdfsd'),
(50, 'gf', 'asdffg'),
(51, 'asdfsda', 'dsfs'),
(52, 'asdfds', 'sdfsd'),
(53, 'fsd', 'sdf'),
(54, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
