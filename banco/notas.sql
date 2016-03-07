-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2016 às 12:28
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
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome`, `login`, `senha`, `nivel`) VALUES
(1, 'biao', 'root', 'root', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(45) DEFAULT NULL,
  `email_aluno` varchar(60) DEFAULT NULL,
  `matricula_aluno` int(11) DEFAULT NULL,
  `cpf_aluno` int(11) DEFAULT NULL,
  `polo` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `matricula_aluno`, `cpf_aluno`, `polo`, `nivel`, `ativo`) VALUES
(2, 'aluno', 'jidhfis@hotmail.com', 101, 101, 'Ipira', 4, 1),
(3, 'aluno2', 'jdfvh@hotmail.com', 303, 303, 'ipira', 4, 1),
(4, 'aluno3', 'jdfwdvh@hotmail.com', 404, 404, 'ipira', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE IF NOT EXISTS `aluno_turma` (
  `aluno_id_aluno` int(11) NOT NULL,
  `nota1` float DEFAULT NULL,
  `nota2` float DEFAULT NULL,
  `nota3` float DEFAULT NULL,
  `nota4` float DEFAULT NULL,
  `media` float DEFAULT NULL,
  `turma_id_turma` int(11) NOT NULL,
  `turma_semestre_id_semestre` int(11) NOT NULL,
  `turma_professor_id_professor` int(11) NOT NULL,
  `turma_disciplina_id_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`aluno_id_aluno`,`turma_id_turma`,`turma_semestre_id_semestre`,`turma_professor_id_professor`,`turma_disciplina_id_disciplina`),
  KEY `fk_aluno_has_turma_aluno1_idx` (`aluno_id_aluno`),
  KEY `fk_aluno_turma_turma1_idx` (`turma_id_turma`,`turma_semestre_id_semestre`,`turma_professor_id_professor`,`turma_disciplina_id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`aluno_id_aluno`, `nota1`, `nota2`, `nota3`, `nota4`, `media`, `turma_id_turma`, `turma_semestre_id_semestre`, `turma_professor_id_professor`, `turma_disciplina_id_disciplina`) VALUES
(2, 4, 2, 1, 0, 1.75, 1, 3, 7, 5),
(2, NULL, NULL, NULL, NULL, NULL, 7, 4, 7, 5),
(3, 8, 8, 9, 1, 6.5, 1, 3, 7, 5),
(4, 1, 10, 4, 0, 3.75, 1, 3, 7, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`, `cod`, `ativo`) VALUES
(5, 'Disciplina', 'cet-151', 1),
(6, 'disciplina2', 'cet-002', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `matricula_professor`, `cpf_professor`, `nivel`, `ativo`) VALUES
(7, 'professor', 1010, 1010, 2, 1),
(8, 'prof2', 2020, 2020, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `id_semestre` int(11) NOT NULL AUTO_INCREMENT,
  `nome_semestre` varchar(6) NOT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nome_semestre`, `ativo`) VALUES
(3, '2015.2', 1),
(4, '2016.1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(45) NOT NULL,
  `semestre_id_semestre` int(11) NOT NULL,
  `professor_id_professor` int(11) NOT NULL,
  `disciplina_id_disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id_turma`,`semestre_id_semestre`,`professor_id_professor`,`disciplina_id_disciplina`),
  KEY `fk_turma_semestre1_idx` (`semestre_id_semestre`),
  KEY `fk_turma_professor1_idx` (`professor_id_professor`),
  KEY `fk_turma_disciplina1_idx` (`disciplina_id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id_turma`, `senha`, `semestre_id_semestre`, `professor_id_professor`, `disciplina_id_disciplina`) VALUES
(1, '1111', 3, 7, 5),
(2, '1111', 4, 7, 6),
(7, '1111', 4, 7, 5),
(8, '1111', 4, 7, 5),
(9, '1111', 4, 7, 5),
(10, '1111', 4, 7, 5),
(11, '45712', 4, 7, 6);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD CONSTRAINT `fk_aluno_has_turma_aluno1` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_turma_turma1` FOREIGN KEY (`turma_id_turma`, `turma_semestre_id_semestre`, `turma_professor_id_professor`, `turma_disciplina_id_disciplina`) REFERENCES `turmas` (`id_turma`, `semestre_id_semestre`, `professor_id_professor`, `disciplina_id_disciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `fk_turma_disciplina1` FOREIGN KEY (`disciplina_id_disciplina`) REFERENCES `disciplina` (`id_disciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_professor1` FOREIGN KEY (`professor_id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_semestre1` FOREIGN KEY (`semestre_id_semestre`) REFERENCES `semestre` (`id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
