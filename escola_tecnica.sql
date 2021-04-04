-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Ago-2020 às 09:16
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola_tecnica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `admin`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) UNSIGNED NOT NULL,
  `curso` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `curso`, `descricao`) VALUES
(1, 'PHP&MYSQL', 'Programação web e criação de sistemas web.'),
(3, 'Bootstrap', 'Framework style sheet'),
(4, 'Github', 'Forum projectos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_disciplina`
--

CREATE TABLE `curso_disciplina` (
  `id_curso_disciplina` int(10) NOT NULL,
  `id_curso` int(10) UNSIGNED NOT NULL,
  `id_disciplina` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(10) UNSIGNED NOT NULL,
  `cod_disciplina` varchar(255) NOT NULL,
  `disciplina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `cod_disciplina`, `disciplina`) VALUES
(1, 'PM001', 'PM_disciplina01'),
(2, 'PM002', 'PM_disciplina02'),
(5, 'B001', 'B_disciplina01'),
(6, 'B002', 'B_disciplina02'),
(7, 'GH001', 'GH_disciplina01'),
(8, 'GH002', 'GH_disciplina02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(10) UNSIGNED NOT NULL,
  `estudante` varchar(255) NOT NULL,
  `sexo` enum('Masculino','Feminino','Outro','','') NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id_estudante`, `estudante`, `sexo`, `data_nascimento`, `email`, `telefone`, `endereco`) VALUES
(20200601, 'Amilton Lhamine', 'Masculino', '2007-04-23', 'Aslhamine@gmail.com', '842304273', 'maputo'),
(20200602, 'Anavera Dabata', 'Feminino', '1999-05-20', 'Anavera@udm.com', '12345678', 'beira'),
(20200603, 'Ana maria', 'Feminino', '1998-07-29', 'ana@udm.com', '453662773', 'gaza'),
(20200604, 'Baptista tembe', 'Masculino', '1999-07-08', 'Baptista@udm.com', '45678', 'maputo'),
(20200605, 'claudio raul', 'Masculino', '1999-07-03', 'claudio@udm.com', '3456789', 'tete'),
(20200606, 'david laqui', 'Masculino', '2000-07-01', 'david@gmail.com', '4567890', 'zambezia'),
(20200607, 'Edson massitela', 'Masculino', '1995-07-04', 'EeaTembe@gmail.com', '456789', 'gaza'),
(20200608, 'Eurix macamo', 'Masculino', '1998-07-13', 'Eurix@udm.com', '4567887654', 'maputo'),
(20200609, 'ivan baloi', 'Masculino', '1999-07-14', 'ivan@udm.com', '4569876543', 'maputo'),
(20200610, 'jaime nhaca', 'Masculino', '1998-07-22', 'jaime@udm.com', '222222', 'gaza'),
(20200611, 'kuntuala saude', 'Masculino', '2001-09-08', 'kuntuala@udm.com', '080808', 'maputo'),
(20200613, 'rivaldo custodio', 'Masculino', '1999-07-06', 'Rivaldo@udm.com', '060606', 'maputo'),
(20200614, 'victor checo', 'Masculino', '1997-07-27', 'victor@udm.com', '272727', 'maputo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante_curso`
--

CREATE TABLE `estudante_curso` (
  `id_estudante_curso` int(11) NOT NULL,
  `id_estudante` int(10) UNSIGNED NOT NULL,
  `id_curso` int(10) UNSIGNED NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estudante_curso`
--

INSERT INTO `estudante_curso` (`id_estudante_curso`, `id_estudante`, `id_curso`, `id_turma`) VALUES
(10, 20200601, 3, 9),
(12, 20200604, 4, 4),
(15, 20200602, 3, 3),
(16, 20200607, 3, 6),
(17, 20200601, 3, 1),
(18, 20200604, 3, 3),
(19, 20200604, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL,
  `id_estudante_curso` int(10) NOT NULL,
  `id_curso_disciplina` int(10) NOT NULL,
  `teste_1` varchar(5) NOT NULL,
  `teste_2` varchar(5) NOT NULL,
  `media_frequencia` varchar(5) NOT NULL,
  `situacao` varchar(25) NOT NULL,
  `nota_exame` varchar(5) NOT NULL,
  `media_final` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `sala` varchar(4) NOT NULL,
  `turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `turma`, `sala`, `turno`) VALUES
(1, 'gitHub_Matutino', '1', 'Matutino'),
(2, 'php_Matutino', '2', 'Matutino'),
(3, 'boot_Matutino', '3', 'Matutino'),
(4, 'git_Vespertino', '1', 'Vespertino'),
(5, 'php_Vespertino', '2', 'Vespertino'),
(6, 'boot_Vespertino', '3', 'Vespertino'),
(7, 'git_Nocturno', '1', 'Nocturno'),
(8, 'php_Nocturno', '2', 'Nocturno'),
(9, 'boot_Nocturno', '3', 'Nocturno');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `curso_disciplina`
--
ALTER TABLE `curso_disciplina`
  ADD PRIMARY KEY (`id_curso_disciplina`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Índices para tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`);

--
-- Índices para tabela `estudante_curso`
--
ALTER TABLE `estudante_curso`
  ADD PRIMARY KEY (`id_estudante_curso`),
  ADD KEY `id_estudante` (`id_estudante`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`),
  ADD KEY `id_estudante_curso` (`id_estudante_curso`),
  ADD KEY `id_curso_disciplina` (`id_curso_disciplina`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `curso_disciplina`
--
ALTER TABLE `curso_disciplina`
  MODIFY `id_curso_disciplina` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200644;

--
-- AUTO_INCREMENT de tabela `estudante_curso`
--
ALTER TABLE `estudante_curso`
  MODIFY `id_estudante_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curso_disciplina`
--
ALTER TABLE `curso_disciplina`
  ADD CONSTRAINT `curso_disciplina_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_disciplina_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`);

--
-- Limitadores para a tabela `estudante_curso`
--
ALTER TABLE `estudante_curso`
  ADD CONSTRAINT `estudante_curso_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `estudante` (`id_estudante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudante_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudante_curso_ibfk_3` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`id_estudante_curso`) REFERENCES `estudante_curso` (`id_estudante_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`id_curso_disciplina`) REFERENCES `curso_disciplina` (`id_curso_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
