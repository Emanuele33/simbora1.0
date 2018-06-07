-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2018 às 20:22
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `diasemana` varchar(100) NOT NULL,
  `horariosaida` time(6) NOT NULL,
  `horariovolta` time(6) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `diasemana`, `horariosaida`, `horariovolta`, `destino`) VALUES
(1, 'loja', 'IFPE', 'TerÃ§a', '12:00:00.000000', '17:40:00.000000', 'Restaurante E Pizzaria Braseiro'),
(2, 'loja', 'IFPE', 'TerÃ§a', '12:00:00.000000', '17:40:00.000000', 'Restaurante E Pizzaria Braseiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_horarios`
--

CREATE TABLE `tabela_horarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_horarios`
--

INSERT INTO `tabela_horarios` (`id`, `nome`, `horario`, `usuarios_id`) VALUES
(32, 'Manu', '12:00 - 12:30', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `senha`) VALUES
(8, 'Emanuele', 'Garcia', 'manu', '123'),
(9, 'Rhaiza', 'Aguiar', 'rhai', '1234'),
(10, 'Maria', 'Eduarda', 'duda', '12345'),
(12, 'Miriam', 'Garcia', 'Miriam', 'oioi'),
(13, 'nunito', 'd', 'oii', '123');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios` (`usuarios_id`);

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
-- AUTO_INCREMENT for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
