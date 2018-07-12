-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jul-2018 às 20:14
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` int(11) NOT NULL,
  `lng` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Manu', 'Av. Vinte e Sete de Setembro', -8, -35, 'oioi'),
(2, 'Manu', 'Rio Claro - SP', -22, -48, 'oioi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `mensagens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `mensagens`) VALUES
(8, 'kds'),
(9, 'jksadskj'),
(10, 'jksadskj'),
(11, 'Oi'),
(12, 'Oi'),
(13, 'oi'),
(14, 'oi'),
(15, 'kkkk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatos`
--

CREATE TABLE `relatos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` int(255) NOT NULL,
  `lng` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `data` datetime(6) NOT NULL,
  `relato` tinytext NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `relatos`
--

INSERT INTO `relatos` (`id`, `name`, `address`, `lat`, `lng`, `type`, `turno`, `data`, `relato`, `usuarios_id`) VALUES
(1, 'Manu', 'Igarassu - PE', -8, -35, 'Verbal', 'ManhÃ£', '0000-00-00 00:00:00.000000', 'vdsbfjdksbfkjds', 1),
(3, 'teste', 'rua de teste', 2, -2, 'verbal', 'manha', '0000-00-00 00:00:00.000000', 'teste de relato', 1),
(4, 'loja', 'rua de teste', 2, -2, 'verbal', 'manha', '0000-00-00 00:00:00.000000', 'teste de relato', 1);

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
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatos`
--
ALTER TABLE `relatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios` (`usuarios_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `relatos`
--
ALTER TABLE `relatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `relatos`
--
ALTER TABLE `relatos`
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
