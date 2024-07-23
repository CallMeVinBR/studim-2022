-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Dez-2022 às 14:52
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `studimdb`
--
CREATE DATABASE IF NOT EXISTS `studimdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `studimdb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `cod_adm` int(6) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(400) DEFAULT NULL,
  `senha` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`cod_adm`, `nome`, `email`, `senha`) VALUES
(1, 'Studim ADMs', 'studim@gmail.com', 'studim2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `al_cod` int(12) NOT NULL,
  `al_ra` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `al_nome` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `al_endereco` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `al_email` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `al_senha` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `al_curso` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`al_cod`, `al_ra`, `al_nome`, `al_endereco`, `al_email`, `al_senha`, `al_curso`) VALUES
('2', '123123ABCD', 'Aluno', NULL, 'aluno@gmail.com', '$2y$10$GueqCY6EpKU1WNZSaEGxOuxOZtYMgeSQ8TyTCykJ8E/U4fuS21HF2', NULL)


-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `arq_cod` int(12) NOT NULL,
  `arq_nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `arq_url` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`arq_cod`, `arq_nome`, `arq_url`) VALUES
(1, 'Teste', 'www.youtube.com'),
(2, 'talvez de certo', 'http://studim.000webhostapp.com/prof/form-add-arquivos.html');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `cur_cod` int(12) NOT NULL,
  `cur_nome` varchar(400) DEFAULT NULL,
  `cur_ativo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`cur_cod`, `cur_nome`, `cur_ativo`) VALUES
(23, 'Matemática', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `not_cod` int(12) NOT NULL,
  `not_al_cod` int(12) DEFAULT NULL,
  `not_pro_cod` int(12) DEFAULT NULL,
  `not_cur_cod` int(12) DEFAULT NULL,
  `not_bi_1` decimal(9,2) DEFAULT NULL,
  `not_bi_2` decimal(9,2) DEFAULT NULL,
  `not_bi_3` decimal(9,2) DEFAULT NULL,
  `not_bi_4` decimal(9,2) DEFAULT NULL,
  `not_media` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`not_cod`, `not_al_cod`, `not_pro_cod`, `not_cur_cod`, `not_bi_1`, `not_bi_2`, `not_bi_3`, `not_bi_4`, `not_media`) VALUES
(9, 1, 1, 23, 8.00, 5.00, 7.00, 6.00, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof`
--

CREATE TABLE `prof` (
  `pro_cod` int(12) NOT NULL,
  `pro_nome` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_tel` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_email` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `pro_senha` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `pro_curso` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_matricula` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `prof`
--

INSERT INTO `prof` (`pro_cod`, `pro_nome`, `pro_tel`, `pro_email`, `pro_senha`, `pro_curso`, `pro_matricula`) VALUES
('2', 'Professor', NULL, 'prof@gmail.com', '$2y$10$YLPtzVtf9S.47u87W/zIbeG9aD0T80S1Yyyh5m/GEMDVP4YqYOzcm', NULL, '123123EFGH');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`cod_adm`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`al_cod`);

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`arq_cod`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cur_cod`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`not_cod`);

--
-- Índices para tabela `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`pro_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `al_cod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `arq_cod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `cur_cod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `not_cod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `prof`
--
ALTER TABLE `prof`
  MODIFY `pro_cod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
