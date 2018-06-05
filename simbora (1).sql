-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2018 às 18:41
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
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `diasemana` varchar(100) NOT NULL,
  `horariosaida` time(6) NOT NULL,
  `horariovolta` time(6) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_horarios`
--

CREATE TABLE `tabela_horarios` (
  `id` int(11) NOT NULL,
  `hora_segunda` varchar(50) NOT NULL,
  `hora_terca` varchar(50) NOT NULL,
  `hora_quarta` varchar(50) NOT NULL,
  `hora_quinta` varchar(50) NOT NULL,
  `hora_sexta` varchar(50) NOT NULL,
  `hora_sabado` varchar(50) NOT NULL,
  `hora_domingo` varchar(50) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_horarios`
--

INSERT INTO `tabela_horarios` (`id`, `hora_segunda`, `hora_terca`, `hora_quarta`, `hora_quinta`, `hora_sexta`, `hora_sabado`, `hora_domingo`, `usuarios_id`) VALUES
(11, '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', 8),
(13, '23:00', '12:00', '13:00', '14:00', '15:50', '17:40', '16:10', 9),
(25, '12:00', '12:01', '10:00', '13:00', '04:00', '05:54', '05:45', 9);

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
(12, 'Miriam', 'Garcia', 'Miriam', 'oioi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
