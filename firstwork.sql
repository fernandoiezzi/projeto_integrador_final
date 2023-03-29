-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2023 às 16:21
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
-- Banco de dados: `firstwork`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `titulo` text NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `nome`, `titulo`, `conteudo`) VALUES
(5, 'TECPOP', 'programador júnior', 'Programar, codificar e testar o sistema. Executar a manutenção do sistema, fazendo eventuais correções necessárias, visando atender às necessidades dos clientes. Desenvolver trabalhos de montagem, depuração e testes de programas, executando serviços de manutenção nos programas já desenvolvidos. Responsável, pró ativo, disponibilidade de horário, tenha facilidade de aprendizado.'),
(6, 'Hospital Souza Cruz', 'Médico', 'Atuará com atendimento a pacientes, esclarecer dúvidas, prescrever medicamentos e demais atividades.\r\n\r\nBeneficios\r\n\r\nA Combinar;\r\n\r\nFormação Acadêmica\r\n\r\nEnsino superior completo em Medicina, com especialização na área.\r\n\r\nExperiência\r\n\r\nExperiência como médico intensivista.\r\n\r\nSalário\r\n\r\nA combinar\r\n\r\nCargo\r\n\r\nMedico Intensivista\r\n\r\nEmpresa\r\n\r\nPolicamp Policlínica Social de Campo Grande Ltda\r\n\r\nClínica médica.\r\n\r\nRamo\r\n\r\nSaúde/ Hospitalar'),
(7, 'Arquitetos life', 'Vaga para arquiteto ', 'Requisitos Obrigatórios:\r\n\r\nGraduação completa em Arquitetura ou Arquitetura e Urbanismo;\r\n\r\nRegistro Profissional ativo no órgão de classe;\r\n\r\nExperiência em acompanhamento de obras civis (construção e reforma);\r\n\r\nExperiência em elaboração de projetos de arquitetura e layout, em todas as fases de desenvolvimento do projeto que incluem desde o estudo preliminar até o projeto executivo e memorial descritivo;\r\n\r\nConhecimento do Pacote office;\r\n\r\nSólidos conhecimentos dos softwares AutoCad 2D/SD;\r\n\r\nConhecimento dos trâmites de aprovação em órgãos públicos;\r\n\r\nIdade mínima, no ato da inscrição: 18 anos.\r\n• Serão considerados, preferencialmente, os candidatos com domicílio na região da vaga.\r\n\r\nRequisitos Desejáveis:\r\n\r\nConhecimento em MS Project;\r\n\r\nConhecimento básico do software Revit Buildíng;\r\n\r\nConhecimento das normas para licitações e contratos;\r\n\r\nConhecimento em BIM (building information modeling).\r\n\r\nDescrição das Atividades:\r\n• Elaborar (EVT) estudos de viabilidade técnica- econômica para implantação..'),
(8, 'SECONCI-RIO', 'Engenheiro de Segurança do Trabalho', 'Elaboração de PGR de empresas contratantes. Acompanhamento e avaliação ambiental para elaboração de laudos técnicos. Assessoria às empresas na área de segurança do trabalho. Responsabilidade técnica. Desejável vivência em segurança do trabalho na construção civil. Desejável vivência em avaliação ambiental e obras civis.'),
(9, 'programax', 'programador php', 'Conhecimento Back-End; - Conhecimento em ferramentas de automação; - Noções de Engenharia de Software; - Conhecimento em bancos de dados SQL e MySQL (formulação de consultas avançadas); - experiência em tecnologias WEB, tais como: HTML5, CSS e JS para desenvolvimento de sistemas cross- browser; - Integração de APIs;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `boxmessages`
--

CREATE TABLE `boxmessages` (
  `id_boxMessage` int(11) NOT NULL,
  `placed_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `nome_boxMessage` varchar(255) NOT NULL,
  `email_boxMessage` varchar(255) NOT NULL,
  `telefone_boxMessage` varchar(20) NOT NULL,
  `address_boxMessage` text NOT NULL,
  `payment_status` enum('pending','completed') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `boxmessages`
--

INSERT INTO `boxmessages` (`id_boxMessage`, `placed_on`, `nome_boxMessage`, `email_boxMessage`, `telefone_boxMessage`, `address_boxMessage`, `payment_status`) VALUES
(1, '2023-03-28 14:54:22', 'dsadas', 'dsa@gmail.com', '1651618', 'dasdasdasdas', 'pending');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'kevin', 'kevin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `boxmessages`
--
ALTER TABLE `boxmessages`
  ADD PRIMARY KEY (`id_boxMessage`);

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `boxmessages`
--
ALTER TABLE `boxmessages`
  MODIFY `id_boxMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
