-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Jul-2022 às 13:50
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcyber`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcertificado`
--

DROP TABLE IF EXISTS `tbcertificado`;
CREATE TABLE IF NOT EXISTS `tbcertificado` (
  `padrao` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` char(9) NOT NULL,
  `cnpj` char(14) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`,`cnpj`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `usuario` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
