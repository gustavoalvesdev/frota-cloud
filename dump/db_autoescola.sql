-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/03/2025 às 16:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_frotas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_motoristas`
--

CREATE TABLE `tbl_motoristas` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cnh` varchar(11) NOT NULL,
  `categoria_cnh` char(1) NOT NULL,
  `vencimento_cnh` date NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_motoristas`
--

INSERT INTO `tbl_motoristas` (`id`, `nome`, `cpf`, `cnh`, `categoria_cnh`, `vencimento_cnh`, `telefone`) VALUES
(1, 'Marcio dos Santos', '404.310.328-07', 'ABC12345678', 'D', '2026-01-22', '(11) 99653-1308');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_veiculos`
--

CREATE TABLE `tbl_veiculos` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `ano` int(4) NOT NULL,
  `renavam` varchar(15) NOT NULL,
  `peso` int(11) NOT NULL,
  `eixos` int(2) NOT NULL,
  `chassi` varchar(30) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `p_licenciamento` date NOT NULL,
  `u_licenciamento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_veiculos`
--

INSERT INTO `tbl_veiculos` (`id`, `tipo`, `marca`, `modelo`, `placa`, `ano`, `renavam`, `peso`, `eixos`, `chassi`, `cor`, `p_licenciamento`, `u_licenciamento`) VALUES
(4, 2, 3, 'FRS-2048 II', '', 2015, '0', 32000, 3, '3SFE5352LFDFS', 'BRANCA', '2015-06-16', '2025-01-15'),
(6, 1, 1, 'FRS-2048 II', '', 1940, '0', 32000, 3, '3SFE5352LFDFS', 'AZUL', '2025-03-07', '2025-03-12'),
(7, 3, 2, '6x2 R124', 'ABC-1234', 1998, '12345678910', 16, 3, '10987654321', 'BRANCA', '1998-12-12', '2024-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_motoristas`
--
ALTER TABLE `tbl_motoristas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_veiculos`
--
ALTER TABLE `tbl_veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_motoristas`
--
ALTER TABLE `tbl_motoristas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_veiculos`
--
ALTER TABLE `tbl_veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
