-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 
-- Tempo de geração: 14-Abr-2023 às 01:28
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
-- Banco de dados: `farmacia db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(150) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `cpf` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  `dt_nascimento` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_completo`, `cpf`, `endereco`, `telefone`, `dt_nascimento`, `email`, `senha`) VALUES
(1, 'Marcos Apolo da Silva Milhomem', '001.094.623-71', 'Av.Brasil Bairro:Ponte', '(99) 98821-4250', '13/10/1995', 'marcos1995@gmail.com', '13101995'),
(2, 'Calebe Apollo Medeiros', '651.934.510-15', 'R. do Cotovelo', '(99) 98429-6550', '15/05/1998', 'cabeleapollo@gmail.com', '15051998');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_clientes`
--

CREATE TABLE `tabela_clientes` (
  `id` int(11) NOT NULL,
  `DATA_COMPRA` date DEFAULT NULL,
  `PACIENTE` varchar(8) DEFAULT NULL,
  `MEDICAMENTO` varchar(11) DEFAULT NULL,
  `UNIDADE` int(30) DEFAULT NULL,
  `DISPONIBILIDADE` int(30) DEFAULT NULL,
  `QTDE_CONSUMIDA` int(11) DEFAULT NULL,
  `QTDE_RESTANTE` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_clientes`
--

INSERT INTO `tabela_clientes` (`id`, `DATA_COMPRA`, `PACIENTE`, `MEDICAMENTO`, `UNIDADE`, `DISPONIBILIDADE`, `QTDE_CONSUMIDA`, `QTDE_RESTANTE`) VALUES
(1, '0000-00-00', 'ADRIEL', 'Paracetamol', NULL, NULL, 15, NULL),
(2, '0000-00-00', 'leonaddo', 'Paracetamol', NULL, NULL, 12, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_farmacia`
--

CREATE TABLE `tabela_farmacia` (
  `ID` int(11) NOT NULL,
  `NOME_COMERCIAL` varchar(17) DEFAULT NULL,
  `LABORATORIO` varchar(30) DEFAULT NULL,
  `CLASSE_TERAPEUTICA` varchar(30) DEFAULT NULL,
  `SUBSTANCIA` varchar(30) DEFAULT NULL,
  `UNID` varchar(30) DEFAULT NULL,
  `QUANTIDADE_COMPRADA` varchar(30) DEFAULT NULL,
  `CONSUMIDA` varchar(30) DEFAULT NULL,
  `DISPONIVEL` varchar(30) DEFAULT NULL,
  `VALIDADE` varchar(30) DEFAULT NULL,
  `FIELD11` varchar(30) DEFAULT NULL,
  `FIELD12` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_farmacia`
--

INSERT INTO `tabela_farmacia` (`ID`, `NOME_COMERCIAL`, `LABORATORIO`, `CLASSE_TERAPEUTICA`, `SUBSTANCIA`, `UNID`, `QUANTIDADE_COMPRADA`, `CONSUMIDA`, `DISPONIVEL`, `VALIDADE`, `FIELD11`, `FIELD12`) VALUES
(1, 'Paracetamol', '', '', '', '', '', '', '', '', '', ''),
(2, 'Coartem', '', '', '', '', '', '', '', '', '', ''),
(3, 'Artmether', '', '', '', '', '', '', '', '', '', ''),
(4, 'ampicilina', '', '', '', '', '', '', '', '', '', ''),
(5, 'Ciprofloxacina', '', '', '', '', '', '', '', '', '', ''),
(6, 'Clavamox', '', '', '', '', '', '', '', '', '', ''),
(7, 'Metronidazol', '', '', '', '', '', '', '', '', '', ''),
(8, 'Bisolvon', '', '', '', '', '', '', '', '', '', ''),
(9, 'Actifed', '', '', '', '', '', '', '', '', '', ''),
(10, 'Predmisolona', '', '', '', '', '', '', '', '', '', ''),
(11, 'Salbutamol', '', '', '', '', '', '', '', '', '', ''),
(12, 'Motilium', '', '', '', '', '', '', '', '', '', ''),
(13, 'Omeprazol', '', '', '', '', '', '', '', '', '', ''),
(14, 'hidrocloratiazida', '', '', '', '', '', '', '', '', '', ''),
(15, 'Captopril', '', '', '', '', '', '', '', '', '', ''),
(16, 'Enalapril', '', '', '', '', '', '', '', '', '', ''),
(17, 'Buscopam', '', '', '', '', '', '', '', '', '', ''),
(18, 'Diclofenac', '', '', '', '', '', '', '', '', '', ''),
(19, 'Ibuprofeno', '', '', '', '', '', '', '', '', '', ''),
(20, 'complexo B', '', '', '', '', '', '', '', '', '', ''),
(21, 'Amifer', '', '', '', '', '', '', '', '', '', ''),
(22, 'Amoxaciclina', '', '', '', '', '', '', '', '', '', ''),
(23, 'Gino-pevaryl', '', '', '', '', '', '', '', '', '', ''),
(24, 'Metronidazol', '', '', '', '', '', '', '', '', '', ''),
(25, 'fluconazol', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `tabela_clientes`
--
ALTER TABLE `tabela_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tabela_farmacia`
--
ALTER TABLE `tabela_farmacia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_farmacia`
--
ALTER TABLE `tabela_farmacia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
