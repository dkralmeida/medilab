-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2021 às 05:09
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u609173674_medilab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pacientes`
--

CREATE TABLE `tb_pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `tipo_exame` varchar(255) NOT NULL,
  `modalidade` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `visualizacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pacientes`
--

INSERT INTO `tb_pacientes` (`id_paciente`, `nome`, `numero`, `tipo_exame`, `modalidade`, `data`, `visualizacao`) VALUES
(1, 'Juliana Medeiros', '254236-65', 'ANGIO-RM ARTERIAL DE ABDOMEN SUPERIOR\r\n', 'RM', '2020-04-09', 'Ler anamnes'),
(2, 'Victor Lemos', '254236-65', 'ANGIO-RM ARTERIAL DE ABDOMEN INFERIOR\r\n', 'RM', '2020-04-09', 'Responder questionário'),
(3, 'Jessica Padilha', '365236-88', 'LOREM-XX YPSUM\r\n', 'XX', '2020-04-09', 'Responder questionário'),
(4, 'Thiago Pereira', '365236-88', 'LOREM-XX YPSUM\r\n', 'XX', '2020-04-09', 'Responder questionário'),
(5, 'Paola Gomes', '254236-65', 'ANGIO-RM ARTERIAL DE ABDOMEN INFERIOR\r\n', 'RM', '2020-04-09', 'Responder questionário'),
(6, 'Luciano Souza', '254236-65', 'ANGIO-RM ARTERIAL DE ABDOMEN SUPERIOR\r\n', 'RM', '2020-04-09', 'Ler anamnes'),
(7, 'Franciele Rocha', '365236-88', 'LOREM-XX YPSUM\r\n', 'XX', '2020-04-09', 'Responder questionário');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_pacientes`
--
ALTER TABLE `tb_pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pacientes`
--
ALTER TABLE `tb_pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
