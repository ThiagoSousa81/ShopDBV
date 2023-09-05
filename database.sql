
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `epiz_33087609_Users`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `COMPRAR`
--

CREATE TABLE `COMPRAR` (
  `FK_USUARIOS_ID_USER` int(11) DEFAULT NULL,
  `FK_PRODUTOS_ID_PROD` int(11) DEFAULT NULL,
  `ID_COMP` int(11) NOT NULL,
  `SITUACAO_COMP` text NOT NULL DEFAULT '0',
  `HORA_COMP` time DEFAULT NULL,
  `DATA_COMP` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `COMPRAR`
--

INSERT INTO `COMPRAR` (`FK_USUARIOS_ID_USER`, `FK_PRODUTOS_ID_PROD`, `ID_COMP`, `SITUACAO_COMP`, `HORA_COMP`, `DATA_COMP`) VALUES
(478559, 1000011, 1, 'COMPRADO', '14:20:00', '2023-01-26'),
(926380, 1000021, 2, 'COMPRADO', '14:24:00', '2023-01-26'),
(70680, 1000031, 8, 'COMPRADO', '19:38:00', '2023-01-26'),
(2179258, 1000007, 7, 'COMPRADO', '14:41:00', '2023-01-26'),
(2179258, 1100008, 6, 'COMPRADO', '14:40:00', '2023-01-26'),
(70682, 1000041, 9, 'COMPRADO', '20:28:00', '2023-01-26'),
(1964919, 1000051, 10, 'COMPRADO', '18:59:00', '2023-01-28'),
(925500, 1000071, 36, 'COMPRADO', '12:50:00', '2023-01-31'),
(331480, 1000003, 18, 'COMPRADO', '09:10:00', '2023-01-29'),
(1745808, 1000001, 16, 'COMPRADO', '07:55:00', '2023-01-29'),
(1769576, 1000006, 15, 'COMPRADO', '21:24:00', '2023-01-28'),
(1686851, 1000002, 35, 'COMPRADO', '15:04:00', '2023-01-30'),
(1331425, 1300008, 34, 'COMPRADO', '12:24:00', '2023-01-30'),
(1769576, 1000005, 65, 'COMPRADO', '12:33:00', '2023-05-18'),
(1337247, 1000009, 33, 'COMPRADO', '10:54:00', '2023-01-29'),
(1979428, 1000061, 32, 'COMPRADO', '10:17:00', '2023-01-29'),
(1651377, 1000005, 37, 'COMPRADO', '15:39:00', '2023-02-01'),
(659074, 1000005, 64, 'COMPRADO', '11:49:00', '2023-01-29'),
(659074, 1300008, 63, 'COMPRADO', '18:29:00', '2023-05-03'),
(1675017, 1000005, 58, 'COMPRADO', '10:19:00', '2023-03-26'),
(1905333, 1000006, 57, 'COMPRADO', '15:22:00', '2023-03-11'),
(1664475, 1000007, 55, 'COMPRADO', '16:45:00', '2023-02-04'),
(2185930, 1300008, 51, 'COMPRADO', '10:21:00', '2023-02-02'),
(659074, 1000007, 66, 'NO CARRINHO', '09:32:00', '2023-08-06');

-- --------------------------------------------------------

--
-- Estrutura para tabela `PRODUTOS`
--

CREATE TABLE `PRODUTOS` (
  `ID_PROD` int(11) NOT NULL,
  `NOME_PROD` varchar(50) DEFAULT NULL,
  `VALOR_PROD` double DEFAULT NULL,
  `QNT_PROD` int(11) NOT NULL,
  `IMAGE_PROD` varchar(9000) DEFAULT NULL,
  `LINK_PROD` varchar(50) DEFAULT NULL,
  `OK_PROD` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `PRODUTOS`
--

INSERT INTO `PRODUTOS` (`ID_PROD`, `NOME_PROD`, `VALOR_PROD`, `QNT_PROD`, `IMAGE_PROD`, `LINK_PROD`, `OK_PROD`) VALUES
(1000001, 'DBV-BACKPACK', 999, 0, 'Sacola.jpg', '/system/p/bp1000001/', 0),
(1000002, 'ALMOFADA ESTRELAS DA CRUZ', 75, 0, 'travesseiro.jpg', '/system/p/almofada/', 0),
(1000003, 'CANECA DO DESBRAVADOR', 60, 0, 'Caneca.jpg', '/system/p/caneca/', 0),
(1000004, 'PORTA-RETRATO', 30, 3, NULL, NULL, 0),
(1000005, 'BONE DESBRAVADOR', 25, 1, 'Bone.jpg', '/system/p/bone/', 1),
(1000006, 'COFRINHO DBV', 20, 4, 'Cofrinho.jpg', '/system/p/cofrinho/', 1),
(1000007, 'CHAVEIRO DBV', 15, 7, 'chaveiros.jpg', '/system/p/chaveiro/', 1),
(1100008, 'CANETA ESTRELAS DA CRUZ VERMELHA', 10, 1, 'Canetas2.jpg', '/system/p/caneta/', 0),
(1000009, 'MOUSE-PAD DBV', 20, 0, 'Mousepad.jpg', '/system/p/mousepad/', 0),
(1000008, 'CANETA ESTRELAS DA CRUZ', 10, 12, 'Canetas2.jpg', '/system/p/caneta/', 1),
(1300008, 'CANETA ESTRELAS DA CRUZ PRETA', 10, 0, 'Canetas2.jpg', '/system/p/caneta/', 0),
(1400008, 'CANETA ESTRELAS DA CRUZ BRANCA', 10, 1, 'Canetas2.jpg', '/system/p/caneta/', 0),
(1000011, 'DBV-BACKPACK', 999, 0, 'backpack azul.jpg', '/system/p/bp1000011/', 0),
(1000021, 'DBV-BACKPACK', 999, 0, 'Bag3.jpg', '/system/p/bp1000021/', 0),
(1000031, 'DBV-BACKPACK', 999, 0, 'sacola4.jpg', '/system/p/bp1000031/', 0),
(1000041, 'DBV-BACKPACK', 999, 0, 'sacola5.jpg', '/system/p/bp1000041/', 0),
(1000051, 'DBV-BACKPACK', 999, 0, 'sacola6.jpg', '/system/p/bp1000051/', 0),
(1000061, 'DBV-BACKPACK', 999, 0, 'sacola7.jpg', '/system/p/bp1000061/', 0),
(1000071, 'DBV-BACKPACK', 999, 0, 'sacola8.jpg', '/system/p/bp1000071/', 0),
(1200008, 'CANETA ESTRELAS DA CRUZ AZUL', 10, 4, 'Canetas2.jpg', '/system/p/caneta/', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `ID_USER` int(11) NOT NULL,
  `NOME_USER` varchar(50) DEFAULT NULL,
  `HASH_USER` varchar(40) DEFAULT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `STARS_USER` decimal(10,0) DEFAULT NULL,
  `UNIDADE_USER` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `USUARIOS`
--

INSERT INTO `USUARIOS` (`ID_USER`, `NOME_USER`, `HASH_USER`, `EMAIL_USER`, `STARS_USER`, `UNIDADE_USER`) VALUES
(1, 'Admin', '3decd49a6c6dce88c16a85b9a8e42b51aa36f1e2', 'thiagosousa81@gmail.com', '9985', 'Test'),
(331480, 'BIANCA GABRIELE', '8a9b651843c9441b5a33b468a2bfdacce308867d', NULL, '48', 'AQUILA'),
(70680, 'BEATRIZ NEIMAR', 'b8367f0ae929592ffa2b304df863d15246e64005', NULL, '1', 'DIRETORIA'),
(70682, 'BENILDA SAMPAIO', 'b27b2ed1c4f6a745ce224448ba6372f8255df115', NULL, '1', 'DIRETORIA'),
(478559, 'DARLAN DE JESUS', '96f54b9f03d0f6e6f4c3941706d51bb589f82b3a', NULL, '1', 'DIRETORIA'),
(1745808, 'FIAMA LARA', '9c52b5a814b47b25aeb08ebca9f44f0333f889fe', NULL, '1', 'DIRETORIA'),
(925500, 'RIDALVA SOUZA', 'cb81f3048f8169708d51cf98cc5469eb7304ac4e', NULL, '1', 'DIRETORIA'),
(1964919, 'ROSIMEIRE CAMPOS', '52e41abff573ab393bb3846a3281782b82bfab36', NULL, '1', 'DIRETORIA'),
(926380, 'THIAGO SOUSA', '1a1c91114cde2fdf4265cbe4a1f806513c010c8f', NULL, '1', 'DIRETORIA'),
(659074, 'DAVI GONCALVES', 'b8f790644fc3b24af9d332a11e6a302dfae3abb2', NULL, '58', 'SCORPION'),
(1331425, 'MARIA LUIZA', '084f4660d34695661537258097ca6bb5d78e0338', NULL, '88', 'AQUILA'),
(1337247, 'EDUARDO SAMPAIO', 'f4a7814ecedad6413226bd0a2dcd7fc950bb247b', NULL, '37', 'SCORPION'),
(1651377, 'LISMARA AGUIAR', 'afb520f67df308c45042432686b1e00e2a3f7f3b', NULL, '28', 'AQUILA'),
(1664475, 'STEPHANIE SAMPAIO', '3b0aebc1203aa691e40a4d489dc6941fac259f8d', NULL, '17', 'APUS'),
(1675017, 'ESTER OLIVEIRA', 'd1e5b75d396c2f006706141837bb9e04ebb90175', NULL, '2', 'AQUILA'),
(1686851, 'HELLEN MELO', 'b3f864b21aad4c3ce0d028b19eee1f42fba84bbe', NULL, '13', 'APUS'),
(1769576, 'LUIZ HENRIQUE', '7577b6d562ae70b5704c8040d567cf4c5e4c47eb', NULL, '53', 'SCORPION'),
(1882589, 'MAYLINE SANTOS', '87f73b3f02958d2de7003158bcb4a597f105a7c9', NULL, '22', 'APUS'),
(1905333, 'INGRID DE LAGO', 'b07b1be4ae984572f45c1fd0ede7a869067b5864', NULL, '9', 'APUS'),
(1979428, 'MARCOS BRAHYAN', 'c0d4f631717508de077b3336b21c61c5acff213f', NULL, '88', 'SCORPION'),
(2079813, 'VILKER SILVA', '9fbeb06ea6672799fea2f6fab2abeed3de1ab10d', NULL, '22', 'SCORPION'),
(2185930, 'AILLA SILVA', '71ecb4882bce6ea9ff21099e9cdf05c13cf5893c', NULL, '35', 'APUS'),
(2185937, 'ALANA SILVA', '1bca00bc85a3aab084f69f28645645876cbf88bd', NULL, '15', 'APUS'),
(2195884, 'KAUAN GUIMARAES', 'd35f5b64e0a80a8581ff143a6e622e8a5045c421', NULL, '15', 'SCORPION'),
(2179258, 'KEZIA VIEIRA', 'b6f892cb7c1f3f15748809e62d5dc7499d060dad', NULL, '1', 'AQUILA'),
(2211628, 'GRAZIELE DE JESUS', '52e01640e2a783e9a35bf614c0856d43cb5d3142', NULL, '15', 'AQUILA'),
(2541, 'Fernando', '3decd49a6c6dce88c16a85b9a8e42b51aa36f1e2', NULL, '0', 'Test'),
(3, 'EVERSON', 'c71010a9a3cdfc65575e552c7ff3b439a10e697d', NULL, '1', 'Test');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nome_user` varchar(100) DEFAULT NULL,
  `hash_user` varchar(40) DEFAULT NULL,
  `stars_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome_user`, `hash_user`, `stars_user`) VALUES
(1, 'Admin', '3decd49a6c6dce88c16a85b9a8e42b51aa36f1e2', 1000),
(2, 'Thiago', '9fb42daeb2bacd1776795b66b4010d5555a02584', 154);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `COMPRAR`
--
ALTER TABLE `COMPRAR`
  ADD PRIMARY KEY (`ID_COMP`),
  ADD KEY `FK_COMPRAR_2` (`FK_USUARIOS_ID_USER`),
  ADD KEY `FK_COMPRAR_3` (`FK_PRODUTOS_ID_PROD`);

--
-- Índices de tabela `PRODUTOS`
--
ALTER TABLE `PRODUTOS`
  ADD PRIMARY KEY (`ID_PROD`);

--
-- Índices de tabela `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `COMPRAR`
--
ALTER TABLE `COMPRAR`
  MODIFY `ID_COMP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
