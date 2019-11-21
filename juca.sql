-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 19:50
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Tratores'),
(2, 'Plantadeiras'),
(3, 'Pulverizadores'),
(4, 'Cultivadores e Calcareadeiras'),
(5, 'Grades e Arados'),
(6, 'Colheitadeiras'),
(7, 'Subsoladores'),
(8, 'Peças'),
(9, 'Implementos em Geral'),
(10, 'Rotativas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `img5` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `valor` varchar(250) DEFAULT NULL,
  `fk_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `img1`, `img2`, `img3`, `img4`, `img5`, `modelo`, `descricao`, `valor`, `fk_categoria`) VALUES
(24, 'ENLEIRADOR DE PALHA ', 'e38295029e1c7435962296cf5f78bf8d.jpeg', 'ad11f7b6190d0f407ab2aa5c2a990745.jpeg', '6cddffe5fa4ad2a98a26ed8fccd9be37.jpeg', '03c9ef53ebd17fcc2c4a4d31d5fd5684.jpeg', '', 'DMB ', 'ENLEIRADOR DE PALHA MARCA DMB , EQUIPAMENTO REVISADO. PRONTO PRA TRABALHAR ', '5,500', 9),
(25, 'TANQUE BOMBEIRO D” AGUA 18 MIL LITROS COM KIT TAREFA', '743c273216fc6e525eb4a04ec02e9eaf.jpeg', '270f6bb399e1dc147abca7861668373c.jpeg', 'cd99788732e75efe3cfcfb1329941056.jpeg', 'b7737ec9f91bff7b4a90f8a245194d7d.jpeg', '', 'GASCON ', 'TANQUE BOMBEIRO , COMPLETO COM KIT TAREFA ', '18,500', 9),
(28, 'Tanque de água semi novo 4.500 litros marca actom', '00601aabe84903dae80880b484c66c2a.jpg', 'a1e223980243cf95829cc0b26cbb47d7.jpg', 'b6a69e432857ec2b7d72c075b91badd8.jpg', '9e3e1dc42483c23742dc8c90cb02b5f7.jpg', '', '4,500 LITROS ', 'Tanque de água semi novo 4.500 litros marca actom', '8,000', 9),
(29, 'CAMINHÃO FORD F600 BASCULANTE ANO 2009', 'aba16549b548e4852a8d7eaee8854fc8.jpeg', '87484db99320bf7a2cfaae4ba57156e1.jpeg', '366d45f716656caec16354b344398c56.jpeg', 'f614ae6013c39768b677b8721706125d.jpeg', '', 'F600', 'CAMINHÃO FORD F600 BASCULANTE ANO 2009', '22,000', 9),
(31, 'CAMINHÃO MERCEDES 2325 6X4 ANO 1994 COM MULK PRANCHA RAMPA HIDRÁULICA', '769a0c0c465e2664c1870257b89e90cf.jpeg', '17c161dcc74a06a5edd90404449e54f8.jpeg', 'a4c0b771dd6a43e1a194115e34da06fc.jpeg', 'd13eec344f2782a9d49079a1b1fd00cb.jpeg', '', '2325', 'CAMINHÃO MERCEDES 2325 6X4 ANO 1994 COM MULK PRANCHA RAMPA HIDRÁULICA', '130,000', 9),
(33, 'Carreta Boiadeira com gaiola ', '9251d5e7420f43d1e3e167cc2e7f28ca.jpeg', '', '', '', '', 'maschetto', 'Carreta Boiadeira com gaiola \r\n', '6,500', 9),
(36, 'DISCOS DE 28 POLEGADAS , E MANCAIS NOVOS ', 'cf7c2f9b8919ff7adc97cdf5e271c910.jpg', '', '', '', '', 'PEÇAS NOVAS ', 'DISCOS DE 28 POLEGADAS , E MANCAIS NOVOS ', '185,00', 8),
(38, 'ROTATIVA PARA AGRALE ', '471068a235abab52482ba7f33895d2f1.jpeg', 'fbdbad9dcafb526e91a42022b4226fbb.jpeg', '22a6327b3a75af115eb92d54034831de.jpeg', '8515aeec878bb8dffd23c033ffdbabc8.jpeg', '', '1METRO', 'ROTATIVA PARA AGRALE.', '3,800', 9),
(40, 'ARADO 3 BACIAS MARCA JAN ', 'b6306b375bb4d4e21b14c4c4e4713586.jpeg', '', '', '', '', '3 BACIAS ', 'ARADO 3 BACIAS  MARCA JAN , ARADO REFORMANDO PRONTO PARA TRABALHAR ', '2,300', 5),
(41, 'ARADO BALDAN 3 HASTE C/RODA GUIA ', '23b5e9dface7d755c2e941a1a829969d.jpeg', '', '', '', '', '3 HASTE ', 'ARADO BALDAN 3 HASTE C/ RODA GUIA , REFORMANDO PRONTO PARA TRABALHAR ', '6,000', 5),
(42, 'ARADO BALDAN 3 HASTE S/RODA GUIA ', 'dbe59b3b2621427c05f18ce9bef4267f.jpeg', '77af9d28368022899c67f71f5335b837.jpeg', '', '', '', '3 HASTE ', 'ARADO BALDAN 3 HASTE S/RODA GUIA , ARADO REFORMANDO PRONTO PARA TRABALHAR ', '5,500', 5),
(44, 'PLANTADEIRA TATU PHT3 ', '972b4d38d6e763552d110f5671bd859c.jpeg', 'bcd2272af1e1e01d8833beb6103b7555.jpeg', '84ab1633d17028a2d3d59b69558572ac.jpeg', '05df8ddf91b55d1fa8710324133d9173.jpeg', '', 'PHT3', 'PLANTADEIRA TATU PHT3 , REVISADA PRONTO PARA TRABALHAR ', '16,000', 2),
(45, 'ROTATIVAS LAVRALE REVISADA PRONTA PARA TRABALHAR', '7ecf272be80355e25787e0a2548f81f2.jpeg', 'c946e4d4481dc8ef645de050cb3d5617.jpeg', 'f783b125d3b087181e7bd47d251ea539.jpeg', 'c1224bc67e14913d7dc574fe7717669e.jpeg', '', 'ROTATIVA', 'ROTATIVAS LAVRALE REVISADA PRONTO PARA TRABALHAR ', '7,000', 10),
(46, 'MAQUINA DE SOLDA GERADORA MARCA BAMBOZI TOCADA A TRATOR ', 'c6f784983480fe10ac778507a551dbf5.jpg', '9a2c27ec9f9245df5f1dc138a7c1369d.jpg', '', '', '', 'SOLDA GERADORA ', 'MAQUINA DE SOLDA GERADORA MARCA BAMBOZI TOCADA A TRATOR ', '6,000', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_categoria` (`fk_categoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`fk_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
