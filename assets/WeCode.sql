-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2022 às 21:15
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wecode`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtida`
--

CREATE TABLE `curtida` (
  `CurtID` int(11) NOT NULL,
  `PubID` int(11) NOT NULL,
  `PessoaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `PessoaID` int(11) NOT NULL,
  `PessoaNome` varchar(60) NOT NULL,
  `PessoaNick` varchar(30) NOT NULL,
  `PessoaEmail` varchar(80) NOT NULL,
  `PessoaFoto` varchar(20) DEFAULT NULL,
  `PessoaSenha` varchar(20) NOT NULL,
  `PessoaFone` varchar(15) NOT NULL,
  `PessoaCidade` varchar(30) NOT NULL,
  `PessoaEstado` text NOT NULL,
  `PessoaGenero` text NOT NULL,
  `PessoaDataNasc` varchar(10) NOT NULL,
  `PessoaDataCad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoaamigos`
--

CREATE TABLE `pessoaamigos` (
  `PesAmID` int(11) NOT NULL,
  `PessoaID` int(11) NOT NULL,
  `AmigoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `PubID` int(11) NOT NULL,
  `PessoaID` int(11) NOT NULL,
  `PubData` datetime NOT NULL,
  `PubFoto` varchar(20) NOT NULL,
  `PubTexto` text DEFAULT NULL,
  `PubCurtidas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curtida`
--
ALTER TABLE `curtida`
  ADD PRIMARY KEY (`CurtID`),
  ADD KEY `fk_curtida_publicacao` (`PubID`),
  ADD KEY `fk_curtida_pessoa` (`PessoaID`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`PessoaID`);

--
-- Índices para tabela `pessoaamigos`
--
ALTER TABLE `pessoaamigos`
  ADD PRIMARY KEY (`PesAmID`),
  ADD UNIQUE KEY `PessoaID` (`PessoaID`,`AmigoID`),
  ADD KEY `fk_pessoa_amigos` (`AmigoID`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`PubID`),
  ADD KEY `fk_publicacao_pessoa` (`PessoaID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curtida`
--
ALTER TABLE `curtida`
  MODIFY `CurtID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `PessoaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `pessoaamigos`
--
ALTER TABLE `pessoaamigos`
  MODIFY `PesAmID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `PubID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curtida`
--
ALTER TABLE `curtida`
  ADD CONSTRAINT `fk_curtida_pessoa` FOREIGN KEY (`PessoaID`) REFERENCES `pessoa` (`PessoaID`),
  ADD CONSTRAINT `fk_curtida_publicacao` FOREIGN KEY (`PubID`) REFERENCES `publicacao` (`PubID`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pessoaamigos`
--
ALTER TABLE `pessoaamigos`
  ADD CONSTRAINT `fk_pessoa_amigos` FOREIGN KEY (`AmigoID`) REFERENCES `pessoa` (`PessoaID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pessoaamigos_pessoa` FOREIGN KEY (`PessoaID`) REFERENCES `pessoa` (`PessoaID`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `fk_publicacao_pessoa` FOREIGN KEY (`PessoaID`) REFERENCES `pessoa` (`PessoaID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
