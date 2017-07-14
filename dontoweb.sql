-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2016 às 02:08
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dontoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_paciente`
--

CREATE TABLE `cadastro_paciente` (
  `nome` varchar(250) NOT NULL,
  `ano_nasc` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_paciente`
--

INSERT INTO `cadastro_paciente` (`nome`, `ano_nasc`, `email`, `telefone`, `rg`, `cpf`, `endereco`, `id`) VALUES
('JoÃ£o', 1980, 'joao@hotmail.com', '988887777', '98712345', '01223459835', 'rua dos bobos n 0', 1),
('Alda Maria da Silva', 1968, 'alda.maria@hotmail.com', '986026732', '98374643', '09844537573', 'rua noventa e tres n 376', 2),
('Hilma Barreto', 1983, 'hilmabarreto@yahoo.com.br', '987102420', '8591234', '70633802492', 'Rua  99 n. 21', 3),
('adamastor', 1990, 'adamastor@hotmail.com', '90458434', '234586987', '245234809890', 'rua dos bobos n 1', 4),
('Maria Joaquina de Freitas', 1995, 'maria.jo@hotmail.com', '', '8591234', '09844537573', 'endereco', 5),
('maria joaquina', 1995, 'joaquina@hotmail', '1233344', '123458975', '245897487698', 'rua 200 n 300', 6),
('Augusto Cesar', 1991, 'cesargt92@hotmail.com', '987102420', '8591234', '70633802492', 'Rua Noventa e Nove', 7),
('Filomena Ferreira da Silva', 1980, 'filo@hotmail.com', '984132743', '88855533', '99928327343', 'av. lindolfo color n. 100', 11),
('Joao Paulo AssumpÃ§Ã£o', 1970, 'NÃ£o informado!', '34372324', '12345678', '12345678910', 'rua um n 137', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_paciente`
--
ALTER TABLE `cadastro_paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_paciente`
--
ALTER TABLE `cadastro_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
