-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2022 at 09:21 PM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omnitus`
--

-- --------------------------------------------------------

--
-- Table structure for table `Asocia`
--

CREATE TABLE `Asocia` (
  `idVariedad` int NOT NULL,
  `idAsocia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cEmpresa`
--

CREATE TABLE `cEmpresa` (
  `idCliente` int NOT NULL,
  `RUT` int NOT NULL,
  `nombreEmpresa` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE `Cliente` (
  `idCliente` int NOT NULL,
  `email` varchar(64) NOT NULL,
  `numeroPuerta` int NOT NULL,
  `calle` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `esquina` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `email`, `numeroPuerta`, `calle`, `esquina`) VALUES
(1, 'a@a.com', 2222, 'Av. Bolivia', 'Paraguay'),
(2, 'rich23@gmail.com', 555, 'Av. España', 'Minas'),
(22, 'asda@gmail.com', 2332, 'Ramon García', 'Solís'),
(23, 'rats@gmail.com', 443, 'Av.Bolivia', 'Fuego'),
(24, 'bob@gmail.com', 233, 'Yi', 'Yaguarón'),
(25, 'tata@gmail.com', 676, 'Cerro Largo', 'Cuareim'),
(26, 'yy66@gmail.com', 900, 'Av. Tomas Garibaldi', 'Patria'),
(27, 'zoomu@gmail.com', 455, 'Itapúa', 'Patria'),
(28, 'hfdhgf4@gmail.com', 4478, 'Blvr.España', 'José Ellauri'),
(29, 'asfa@gmail.com', 2333, '26 de Marzo', 'Miguel Barreiro'),
(30, 'jkhj@gmail.com', 2111, 'San Lorenzo', 'La Gaceta');

-- --------------------------------------------------------

--
-- Table structure for table `cWeb`
--

CREATE TABLE `cWeb` (
  `idCliente` int NOT NULL,
  `CI` int NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `apellido` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cWeb`
--

INSERT INTO `cWeb` (`idCliente`, `CI`, `nombre`, `apellido`) VALUES
(1, 12345678, 'Carlos', 'Vives'),
(2, 43435678, 'Steven', 'López'),
(22, 23434567, 'Nate', 'Higgers'),
(24, 45567856, 'Ignacio', 'Chappelle'),
(26, 23543556, 'Carlos', 'Rámirez'),
(27, 54325655, 'Martina', 'Goncalves'),
(28, 23456332, 'Dave', 'List');

-- --------------------------------------------------------

--
-- Table structure for table `estadosPedido`
--

CREATE TABLE `estadosPedido` (
  `estado` varchar(16) NOT NULL DEFAULT 'Pendiente',
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Feria`
--

CREATE TABLE `Feria` (
  `idFeria` int NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `calle` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feriaVende`
--

CREATE TABLE `feriaVende` (
  `idFeria` int NOT NULL,
  `idVariedad` int NOT NULL,
  `nomCliente` varchar(40) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Hortaliza`
--

CREATE TABLE `Hortaliza` (
  `idHortaliza` int NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `unidad` tinyint(1) NOT NULL,
  `tGerminacion` int DEFAULT NULL,
  `tCosecha` int DEFAULT NULL,
  `mesInicio` int DEFAULT NULL,
  `mesFin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Hortaliza`
--

INSERT INTO `Hortaliza` (`idHortaliza`, `nombre`, `unidad`, `tGerminacion`, `tCosecha`, `mesInicio`, `mesFin`) VALUES
(1, 'Acelga', 1, 9, 90, NULL, NULL),
(2, 'Ají', 0, NULL, 90, 7, 8),
(3, 'Ajo', 1, NULL, 180, 3, 8),
(4, 'Apio', 1, 20, 70, 1, 12),
(5, 'Arvejas', 0, 10, 90, 5, 8),
(6, 'Berenjena', 0, 10, 90, 9, 12),
(7, 'Betarraga', 0, NULL, 90, 8, 9),
(8, 'Cebolla', 0, 10, 100, 10, 3),
(9, ' Cebollin', 1, 10, 100, 10, 2),
(10, 'Frutilla', 0, NULL, 120, 3, 5),
(11, 'Habas', 0, 8, 90, 3, 6),
(12, 'Lechuga', 0, 8, 90, 1, 12),
(13, 'Choclo', 1, NULL, 120, 9, 12),
(14, 'Papa', 0, 40, 90, 2, 3),
(15, 'Pimenton', 1, 5, 90, 7, 8),
(16, 'Porotos', 0, NULL, NULL, 10, 1),
(17, 'Porotos Verdes', 0, 8, 80, 9, 1),
(18, 'Repollo', 0, 6, 100, 1, 12),
(19, 'Tomate', 0, 8, 90, 8, 9),
(20, 'Zanahoria', 0, 15, 120, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Huerta`
--

CREATE TABLE `Huerta` (
  `idHuerta` int NOT NULL,
  `nombreHuerta` varchar(32) NOT NULL,
  `tamanoHuerta` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Huerta`
--

INSERT INTO `Huerta` (`idHuerta`, `nombreHuerta`, `tamanoHuerta`) VALUES
(1, 'Paraíso verde', 'Grande'),
(2, 'Eco huerta', 'Mediana'),
(3, 'A sembrar vecinos', 'Mediana'),
(4, 'Mi corazón verde', 'Mediana'),
(5, 'la caserita', 'Pequeña'),
(6, 'Mundo verde', 'Grande'),
(7, 'huertalizas', 'Grande'),
(8, 'Mi pequeña huerta', 'Pequeña'),
(9, 'Vida en el huerto', 'Mediana'),
(10, 'La huerta ingeniosa', 'Mediana');

-- --------------------------------------------------------

--
-- Table structure for table `huertaCosecha`
--

CREATE TABLE `huertaCosecha` (
  `idCosecha` int NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidadCosecha` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `huertaCultivo`
--

CREATE TABLE `huertaCultivo` (
  `idCultivo` int NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidadPlantada` int NOT NULL,
  `estadoCultivo` varchar(12) NOT NULL,
  `metaCantidad` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pedido`
--

CREATE TABLE `Pedido` (
  `numPedido` varchar(52) NOT NULL,
  `idCliente` int NOT NULL,
  `reclamo` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `importe` int NOT NULL,
  `metodoPago` varchar(16) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `horaPrefInicio` time DEFAULT NULL,
  `horaPrefFinal` time DEFAULT NULL,
  `recibidor` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Pedido`
--

INSERT INTO `Pedido` (`numPedido`, `idCliente`, `reclamo`, `importe`, `metodoPago`, `fechaPedido`, `fechaEntrega`, `horaPrefInicio`, `horaPrefFinal`, `recibidor`) VALUES
('P_636ceb0593d89', 23, NULL, 390, '2', '2022-11-10', NULL, '02:34:00', '12:03:00', NULL),
('P_636d7515493e1', 22, NULL, 380, '0', '2022-11-10', NULL, '00:33:00', '12:31:00', NULL),
('P_636d769eb9d48', 22, NULL, 1004, '2', '2022-11-10', NULL, '00:32:00', '12:34:00', NULL),
('P_636d89483bf66', 22, NULL, 285, '0', '2022-11-10', NULL, NULL, NULL, NULL),
('P_636d89b7989ff', 22, NULL, 32790, '0', '2022-11-10', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pedidoTraslado`
--

CREATE TABLE `pedidoTraslado` (
  `idTraslado` int NOT NULL,
  `numPedido` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidoVariedad`
--

CREATE TABLE `pedidoVariedad` (
  `idVariedad` int NOT NULL,
  `numPedido` varchar(52) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pedidoVariedad`
--

INSERT INTO `pedidoVariedad` (`idVariedad`, `numPedido`, `cantidad`) VALUES
(5, 'P_636d7515493e1', 4),
(6, 'P_636ceb0593d89', 3),
(11, 'P_636d89483bf66', 3),
(12, 'P_636d89483bf66', 4),
(13, 'P_636ceb0593d89', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `idVariedad` int NOT NULL,
  `volumen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`idVariedad`, `volumen`) VALUES
(1, 110),
(3, 32),
(4, 300),
(5, 120),
(6, 150),
(7, 54),
(8, 180),
(11, 180),
(12, 180),
(13, 150),
(14, 150),
(15, 200),
(16, 220);

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalCooperativa`
-- (See below for the actual view)
--
CREATE TABLE `totalCooperativa` (
);

-- --------------------------------------------------------

--
-- Table structure for table `Traslado`
--

CREATE TABLE `Traslado` (
  `idTraslado` int NOT NULL,
  `repartidor` varchar(58) NOT NULL,
  `estadoTraslado` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `idCliente` int NOT NULL,
  `nom` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `esEmpresa` tinyint(1) DEFAULT NULL,
  `esDirectivo` tinyint(1) DEFAULT NULL,
  `esAdmin` tinyint(1) DEFAULT NULL,
  `esHuerta` tinyint(1) DEFAULT NULL,
  `esRepartidor` tinyint(1) DEFAULT NULL,
  `esInformatico` tinyint(1) DEFAULT NULL,
  `idHuerta` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`, `idHuerta`) VALUES
(29, 'Carlos', '25d55ad283aa400af464c76d713c07ad', 1, 1, NULL, NULL, 1, 1, NULL),
(22, 'rafa', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 1, 1, 1, 1, 1, 7),
(22, 'test', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, NULL, NULL, 1, NULL, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Variedad`
--

CREATE TABLE `Variedad` (
  `idVariedad` int NOT NULL,
  `idHortaliza` int NOT NULL,
  `nombreVariedad` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `precio` int NOT NULL,
  `descuento` int DEFAULT NULL,
  `imgUrl` varchar(230) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Variedad`
--

INSERT INTO `Variedad` (`idVariedad`, `idHortaliza`, `nombreVariedad`, `precio`, `descuento`, `imgUrl`) VALUES
(1, 1, 'Niágara', 60, 0, 'https://i.blogs.es/144308/chard-3763735_1280/1366_2000.jpg'),
(2, 2, NULL, 200, NULL, 'https://cdn.shopify.com/s/files/1/0271/3360/8038/products/16F71BF0-1B30-486C-BDA2-AE924ACD3DDF_a5a55aea-160c-4e3a-a325-8970f95a16cb_1024x1024@2x.jpg?v=1655826590'),
(3, 1, 'Anepán Inta', 40, NULL, 'https://www.fecoagro.com.ar/wp-content/uploads/2015/03/acelga-penca-ancha.png'),
(4, 20, 'Colmar', 113, NULL, 'https://youdoit.fr/21933-large_default/semillas-de-zanahoria-colmar-ecologicas.jpg'),
(5, 3, NULL, 20, NULL, 'https://scrippsamg.com/wp-content/uploads/2021/09/6_-_National_Garlic_Day_2.jpg'),
(6, 1, 'Criolla', 100, NULL, 'https://media.biomercados.com.ve/media/catalog/product/cache/e540f384a080f24e28b55100b319ca3a/0/0/000463_13.jpeg'),
(7, 4, 'Verdeo', 120, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBNE5FyDae0bIrdZdHi36ews38Kxuu4WRwjQ&usqp=CAU'),
(8, 4, 'blanqueo', 180, NULL, 'https://static.plenummedia.com/40767/images/20141212174224-apio-blanco-web.jpg'),
(9, 5, 'boleroa', 100, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7DjfMgNL5cABtiTxUXGoo8YygbjbpvZNEjdfCriNv3Q&s'),
(10, 4, 'blanqueo', 115, NULL, 'https://www.jardineriaon.com/wp-content/uploads/2017/03/Plantar-apio-en-tu-jard%C3%ADn.jpg'),
(11, 5, 'Boleroa Ontherware', 25, NULL, 'https://encolombia.com/wp-content/uploads/2021/11/Cultivo-de-Arveja-330x205.jpg'),
(12, 10, NULL, 30, NULL, 'https://avisador.com.uy/wp-content/uploads/2019/10/frutilla-receta.jpg'),
(13, 16, 'blanco', 30, NULL, 'https://desanroman.com.ar/agroseis/wp-content/uploads/2020/03/Bolita-blanco-01.jpg'),
(14, 16, 'negros', 35, NULL, 'https://desanroman.com.ar/agroseis/wp-content/uploads/2020/03/negro-01.jpg'),
(15, 16, 'rojo', 40, NULL, 'https://imagenes.laestrella.com.pa/files/image_990_491/uploads/2021/02/20/60319d8e3971f.jpeg'),
(16, 13, NULL, 43, NULL, 'https://www.revistainternos.com.ar/v2/wp-content/uploads/2021/05/InterNos-Maqueta-Foto-Portada-Notas-choclo.jpg');

-- --------------------------------------------------------

--
-- Structure for view `totalCooperativa`
--
DROP TABLE IF EXISTS `totalCooperativa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`omnitus`@`%` SQL SECURITY DEFINER VIEW `totalCooperativa`  AS SELECT `huertaCosecha`.`idHuerta` AS `idHuerta`, `huertaCosecha`.`idVariedad` AS `idVariedad`, sum(`huertaCosecha`.`cantidadCosecha`) AS `subTotal` FROM `huertaCosecha` WHERE (month(`huertaCosecha`.`fecha`) = month(curdate())) GROUP BY `huertaCosecha`.`idHuerta`, `huertaCosecha`.`idVariedad` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Asocia`
--
ALTER TABLE `Asocia`
  ADD PRIMARY KEY (`idVariedad`,`idAsocia`),
  ADD KEY `idAsocia` (`idAsocia`);

--
-- Indexes for table `cEmpresa`
--
ALTER TABLE `cEmpresa`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `RUT` (`RUT`);

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `cWeb`
--
ALTER TABLE `cWeb`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indexes for table `estadosPedido`
--
ALTER TABLE `estadosPedido`
  ADD PRIMARY KEY (`estado`,`fechaInicio`);

--
-- Indexes for table `Feria`
--
ALTER TABLE `Feria`
  ADD PRIMARY KEY (`idFeria`);

--
-- Indexes for table `feriaVende`
--
ALTER TABLE `feriaVende`
  ADD PRIMARY KEY (`idFeria`,`idVariedad`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indexes for table `Hortaliza`
--
ALTER TABLE `Hortaliza`
  ADD PRIMARY KEY (`idHortaliza`);

--
-- Indexes for table `Huerta`
--
ALTER TABLE `Huerta`
  ADD PRIMARY KEY (`idHuerta`);

--
-- Indexes for table `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  ADD PRIMARY KEY (`idCosecha`),
  ADD KEY `idHuerta` (`idHuerta`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indexes for table `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  ADD PRIMARY KEY (`idCultivo`),
  ADD KEY `idHuerta` (`idHuerta`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indexes for table `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`numPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `pedidoTraslado`
--
ALTER TABLE `pedidoTraslado`
  ADD PRIMARY KEY (`idTraslado`),
  ADD KEY `numPedido` (`numPedido`);

--
-- Indexes for table `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  ADD PRIMARY KEY (`idVariedad`),
  ADD KEY `numPedido` (`numPedido`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`idVariedad`);

--
-- Indexes for table `Traslado`
--
ALTER TABLE `Traslado`
  ADD PRIMARY KEY (`idTraslado`),
  ADD KEY `repartidor` (`repartidor`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `Usuario_ibfk_1` (`idHuerta`);

--
-- Indexes for table `Variedad`
--
ALTER TABLE `Variedad`
  ADD PRIMARY KEY (`idVariedad`),
  ADD KEY `idHortaliza` (`idHortaliza`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cWeb`
--
ALTER TABLE `cWeb`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `Feria`
--
ALTER TABLE `Feria`
  MODIFY `idFeria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Hortaliza`
--
ALTER TABLE `Hortaliza`
  MODIFY `idHortaliza` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Huerta`
--
ALTER TABLE `Huerta`
  MODIFY `idHuerta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  MODIFY `idCosecha` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  MODIFY `idCultivo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Traslado`
--
ALTER TABLE `Traslado`
  MODIFY `idTraslado` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Variedad`
--
ALTER TABLE `Variedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Asocia`
--
ALTER TABLE `Asocia`
  ADD CONSTRAINT `Asocia_ibfk_1` FOREIGN KEY (`idAsocia`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Asocia_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cEmpresa`
--
ALTER TABLE `cEmpresa`
  ADD CONSTRAINT `cEmpresa_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cWeb`
--
ALTER TABLE `cWeb`
  ADD CONSTRAINT `cWeb_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `feriaVende`
--
ALTER TABLE `feriaVende`
  ADD CONSTRAINT `feriaVende_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `feriaVende_ibfk_2` FOREIGN KEY (`idFeria`) REFERENCES `Feria` (`idFeria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  ADD CONSTRAINT `huertaCosecha_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `huertaCosecha_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  ADD CONSTRAINT `huertaCultivo_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `huertaCultivo_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `Pedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pedidoTraslado`
--
ALTER TABLE `pedidoTraslado`
  ADD CONSTRAINT `pedidoTraslado_ibfk_1` FOREIGN KEY (`idTraslado`) REFERENCES `Traslado` (`idTraslado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pedidoTraslado_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  ADD CONSTRAINT `pedidoVariedad_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pedidoVariedad_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Traslado`
--
ALTER TABLE `Traslado`
  ADD CONSTRAINT `Traslado_ibfk_1` FOREIGN KEY (`repartidor`) REFERENCES `Usuario` (`nom`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Usuario_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Variedad`
--
ALTER TABLE `Variedad`
  ADD CONSTRAINT `Variedad_ibfk_1` FOREIGN KEY (`idHortaliza`) REFERENCES `Hortaliza` (`idHortaliza`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
