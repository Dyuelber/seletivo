-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/06/2018 às 16:42
-- Versão do servidor: 10.1.30-MariaDB
-- Versão do PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `school`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `horas` int(11) NOT NULL,
  `valor` int(8) NOT NULL,
  `descricao` text NOT NULL,
  `vagas` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cursos`
--

INSERT INTO `cursos` (`id`, `curso`, `horas`, `valor`, `descricao`, `vagas`) VALUES
(10, 'Contabilidade', 200, 500, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(11, 'GerÃªncia de risco', 480, 1259, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(12, 'Processos', 3000, 2500, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(13, 'GestÃ£o', 40, 99, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(14, 'LegislaÃ§Ã£o', 30, 100, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 31),
(15, 'Diretrizes 1', 50, 200, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(16, 'Diretrizes 2', 35, 200, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(18, 'NegÃ³cios', 200, 499, '	   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` int(8) NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `info`
--

INSERT INTO `info` (`id`, `nome`, `endereco`, `bairro`, `numero`, `rg`, `cpf`, `cidade`, `nascimento`, `sexo`, `curso`) VALUES
(2, 'Jose Da Silva', 'rua das dores', 'centro', 43, 4342343, 524523, 'Caratinga', '2018-06-09', 'M', 'LegislaÃ§Ã£o'),
(3, 'Maria Silva', 'Rua do Comendador', 'Vila OlÃ­mpia', 543, 567474744, 2147483647, 'JaguÃ¡', '1980-07-10', 'F', 'LegislaÃ§Ã£o'),
(4, 'Pedro Santos', 'Rua Paula Veira', 'Centro', 54, 57697887, 2147483647, 'SÃ£o SebastiÃ£o do anta', '1998-08-09', 'M', 'Contabilidade');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
