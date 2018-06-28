-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jun-2018 às 21:46
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `diasemana` varchar(100) NOT NULL,
  `horariosaida` time(6) NOT NULL,
  `horariovolta` time(6) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `diasemana`, `horariosaida`, `horariovolta`, `destino`) VALUES
(1, 'Eduardo', 'R. Artep, 94-152 - Saramandaia', 'Quarta', '12:00:00.000000', '17:00:00.000000', 'Saramandaia, Igarassu - PE'),
(2, 'ee', 'R. Artep, 94-152 - Saramandaia', 'Quarta', '12:00:00.000000', '17:00:00.000000', 'Saramandaia, Igarassu - PE'),
(3, 'Eduarda', 'R. Almira Camelo de Andrade Almeida', 'Quinta', '12:00:00.000000', '17:00:00.000000', 'Restaurante E Pizzaria Braseiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_horarios`
--

CREATE TABLE `tabela_horarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `paradaorigem` varchar(255) NOT NULL,
  `paradadestino` varchar(255) NOT NULL,
  `horario` time(6) NOT NULL,
  `usuarios_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_horarios`
--

INSERT INTO `tabela_horarios` (`id`, `nome`, `paradaorigem`, `paradadestino`, `horario`, `usuarios_id`) VALUES
(1, 'Rhai', 'Igarassu', 'IFPE', '00:15:00.000000', 1),
(5, 'Maria', 'Pau Amarelo', 'Recife', '00:45:00.000000', 2),
(6, 'Maria', 'Recife', 'IFPE', '00:15:00.000000', 2),
(7, 'Rhai', 'Igarassu', 'Recife', '00:30:00.000000', 3),
(8, 'Rhai', 'Igarassu', 'Recife', '00:15:00.000000', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `numero`, `login`, `senha`) VALUES
(1, 'Emanuele', 'Garcia', '123456789', 'Manu', '123'),
(2, 'Maria', 'Eduarda', '123456789', 'Duda', '1234'),
(3, 'Rhaiza', 'Aguiar', '546145644', 'Rhai', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
