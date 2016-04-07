-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Abr-2016 às 22:47
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome`, `login`, `senha`, `nivel`) VALUES
(0, 'root', 'root', 'root', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(45) DEFAULT NULL,
  `email_aluno` varchar(60) DEFAULT NULL,
  `cpf_aluno` int(11) DEFAULT NULL,
  `polo` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`matricula_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula_aluno`, `nome_aluno`, `email_aluno`, `cpf_aluno`, `polo`, `nivel`, `ativo`) VALUES
(101, 'aluno001', 'aluno001@gmail.com', 101, 'Ipira', 4, 1),
(202, 'aluno002', 'aluno002@gmail.com', 202, 'Ipira', 4, 1),
(303, 'aluno003', 'aluno003@gmail.com', 303, 'Ipira', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE IF NOT EXISTS `aluno_turma` (
  `turma_id_turma` int(11) NOT NULL,
  `turma_professor_id_professor` int(11) NOT NULL,
  `turma_disciplina_id_disciplina` int(11) NOT NULL,
  `turma_semestre_id_semestre` int(11) NOT NULL,
  `aluno_matricula_aluno` int(11) NOT NULL,
  `med_forum` float DEFAULT NULL,
  `med_presencial` float DEFAULT NULL,
  `media` float DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `nota_final` float DEFAULT NULL,
  `media_final` float DEFAULT NULL,
  PRIMARY KEY (`turma_id_turma`,`turma_professor_id_professor`,`turma_disciplina_id_disciplina`,`turma_semestre_id_semestre`,`aluno_matricula_aluno`),
  KEY `fk_aluno_has_turma_turma1_idx` (`turma_id_turma`,`turma_professor_id_professor`,`turma_disciplina_id_disciplina`,`turma_semestre_id_semestre`),
  KEY `fk_aluno_turma_aluno1_idx` (`aluno_matricula_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`turma_id_turma`, `turma_professor_id_professor`, `turma_disciplina_id_disciplina`, `turma_semestre_id_semestre`, `aluno_matricula_aluno`, `med_forum`, `med_presencial`, `media`, `situacao`, `nota_final`, `media_final`) VALUES
(1, 6, 1, 1, 101, 2.66667, NULL, NULL, NULL, NULL, NULL),
(1, 6, 1, 1, 202, 2, NULL, NULL, NULL, NULL, NULL),
(1, 6, 1, 1, 303, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 6, 1, 1, 101, 5, NULL, NULL, NULL, NULL, NULL),
(3, 6, 2, 2, 101, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ava_forum`
--

CREATE TABLE IF NOT EXISTS `ava_forum` (
  `id_ava_forum` int(11) NOT NULL,
  `nota` float DEFAULT NULL,
  `aluno_turma_turma_id_turma` int(11) NOT NULL,
  `aluno_turma_turma_professor_id_professor` int(11) NOT NULL,
  `aluno_turma_turma_disciplina_id_disciplina` int(11) NOT NULL,
  `aluno_turma_turma_semestre_id_semestre` int(11) NOT NULL,
  `aluno_turma_aluno_matricula_aluno` int(11) NOT NULL,
  PRIMARY KEY (`id_ava_forum`,`aluno_turma_turma_id_turma`,`aluno_turma_turma_professor_id_professor`,`aluno_turma_turma_disciplina_id_disciplina`,`aluno_turma_turma_semestre_id_semestre`,`aluno_turma_aluno_matricula_aluno`),
  KEY `fk_ava_forum_aluno_turma1_idx` (`aluno_turma_turma_id_turma`,`aluno_turma_turma_professor_id_professor`,`aluno_turma_turma_disciplina_id_disciplina`,`aluno_turma_turma_semestre_id_semestre`,`aluno_turma_aluno_matricula_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ava_forum`
--

INSERT INTO `ava_forum` (`id_ava_forum`, `nota`, `aluno_turma_turma_id_turma`, `aluno_turma_turma_professor_id_professor`, `aluno_turma_turma_disciplina_id_disciplina`, `aluno_turma_turma_semestre_id_semestre`, `aluno_turma_aluno_matricula_aluno`) VALUES
(1, 3, 1, 6, 1, 1, 101),
(1, 1, 1, 6, 1, 1, 202),
(1, 2, 1, 6, 1, 1, 303),
(1, 7, 2, 6, 1, 1, 101),
(1, NULL, 3, 6, 2, 2, 101),
(2, 1, 1, 6, 1, 1, 101),
(2, 2, 1, 6, 1, 1, 202),
(2, 3, 1, 6, 1, 1, 303),
(2, 3, 2, 6, 1, 1, 101),
(2, NULL, 3, 6, 2, 2, 101),
(3, 4, 1, 6, 1, 1, 101),
(3, 3, 1, 6, 1, 1, 202),
(3, NULL, 1, 6, 1, 1, 303);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(45) DEFAULT NULL,
  `cod` varchar(7) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`, `cod`, `ativo`) VALUES
(1, 'Disciplina 01', 'ead001', 1),
(2, 'Disciplina 02', 'cet111', 1),
(3, 'Calculo I', 'cet-111', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_professor` varchar(45) DEFAULT NULL,
  `matricula_professor` int(11) DEFAULT NULL,
  `cpf_professor` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `matricula_professor`, `cpf_professor`, `nivel`, `ativo`) VALUES
(6, 'professor 01', 1010, 1010, 2, 1),
(7, 'Marcos', 4040, 4040, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `id_semestre` int(11) NOT NULL AUTO_INCREMENT,
  `nome_semestre` varchar(6) NOT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nome_semestre`, `ativo`) VALUES
(1, '2015.2', 1),
(2, '2016.1', 1),
(3, '2015.1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `professor_id_professor` int(11) NOT NULL,
  `disciplina_id_disciplina` int(11) NOT NULL,
  `semestre_id_semestre` int(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `numero_ava_forum` int(11) NOT NULL,
  `numero_ava_presencial` int(11) NOT NULL,
  PRIMARY KEY (`id_turma`,`professor_id_professor`,`disciplina_id_disciplina`,`semestre_id_semestre`),
  KEY `fk_turma_professor_idx` (`professor_id_professor`),
  KEY `fk_turma_disciplina1_idx` (`disciplina_id_disciplina`),
  KEY `fk_turma_semestre1_idx` (`semestre_id_semestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `professor_id_professor`, `disciplina_id_disciplina`, `semestre_id_semestre`, `senha`, `numero_ava_forum`, `numero_ava_presencial`) VALUES
(1, 6, 1, 1, '1234', 3, 3),
(2, 6, 1, 1, '9090', 2, 2),
(3, 6, 2, 2, '1111', 2, 2),
(4, 7, 3, 3, '1234567', 2, 3);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD CONSTRAINT `fk_aluno_has_turma_turma1` FOREIGN KEY (`turma_id_turma`, `turma_professor_id_professor`, `turma_disciplina_id_disciplina`, `turma_semestre_id_semestre`) REFERENCES `turma` (`id_turma`, `professor_id_professor`, `disciplina_id_disciplina`, `semestre_id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_turma_aluno1` FOREIGN KEY (`aluno_matricula_aluno`) REFERENCES `aluno` (`matricula_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ava_forum`
--
ALTER TABLE `ava_forum`
  ADD CONSTRAINT `fk_ava_forum_aluno_turma1` FOREIGN KEY (`aluno_turma_turma_id_turma`, `aluno_turma_turma_professor_id_professor`, `aluno_turma_turma_disciplina_id_disciplina`, `aluno_turma_turma_semestre_id_semestre`, `aluno_turma_aluno_matricula_aluno`) REFERENCES `aluno_turma` (`turma_id_turma`, `turma_professor_id_professor`, `turma_disciplina_id_disciplina`, `turma_semestre_id_semestre`, `aluno_matricula_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_turma_disciplina1` FOREIGN KEY (`disciplina_id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_professor` FOREIGN KEY (`professor_id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_semestre1` FOREIGN KEY (`semestre_id_semestre`) REFERENCES `semestre` (`id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
