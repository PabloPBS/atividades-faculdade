-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 
-- Tempo de geração: 03-Maio-2023 às 18:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sigabemcaminhoeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admnistrativo`
--

CREATE TABLE `admnistrativo` (
  `id_Administrativo` int(11) NOT NULL,
  `salaraio_Administrativo` float NOT NULL,
  `cargo_Administrativo` varchar(20) NOT NULL,
  `id_Funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_Funcionario` int(11) NOT NULL,
  `nome_Funcionario` varchar(30) NOT NULL,
  `cpf_Funcionario` varchar(11) NOT NULL,
  `endereco_Funcionario` varchar(80) NOT NULL,
  `telefone_Funcionario` varchar(14) NOT NULL,
  `dataAD_Funcionario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_Motorista` int(11) NOT NULL,
  `cnh_Motorista` varchar(10) NOT NULL,
  `salario_Motorista` float NOT NULL,
  `id_Funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota`
--

CREATE TABLE `rota` (
  `id_Rota` int(11) NOT NULL,
  `Longitude` float NOT NULL,
  `Latitude` float NOT NULL,
  `horaS_Rota` date NOT NULL,
  `horaC_Rota` date NOT NULL,
  `id_Motorista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admnistrativo`
--
ALTER TABLE `admnistrativo`
  ADD PRIMARY KEY (`id_Administrativo`),
  ADD KEY `id_Funcionario` (`id_Funcionario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_Funcionario`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_Motorista`),
  ADD KEY `id_Funcionario` (`id_Funcionario`);

--
-- Índices para tabela `rota`
--
ALTER TABLE `rota`
  ADD PRIMARY KEY (`id_Rota`),
  ADD KEY `id_Motorista` (`id_Motorista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admnistrativo`
--
ALTER TABLE `admnistrativo`
  MODIFY `id_Administrativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_Funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_Motorista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rota`
--
ALTER TABLE `rota`
  MODIFY `id_Rota` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `admnistrativo`
--
ALTER TABLE `admnistrativo`
  ADD CONSTRAINT `admnistrativo_ibfk_1` FOREIGN KEY (`id_Funcionario`) REFERENCES `funcionario` (`id_Funcionario`);

--
-- Limitadores para a tabela `motorista`
--
ALTER TABLE `motorista`
  ADD CONSTRAINT `motorista_ibfk_1` FOREIGN KEY (`id_Funcionario`) REFERENCES `funcionario` (`id_Funcionario`);

--
-- Limitadores para a tabela `rota`
--
ALTER TABLE `rota`
  ADD CONSTRAINT `rota_ibfk_1` FOREIGN KEY (`id_Motorista`) REFERENCES `motorista` (`id_Motorista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
