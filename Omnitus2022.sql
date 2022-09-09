-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2022 at 10:22 AM
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
-- Database: `Omnitus2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `Asocia`
--

CREATE TABLE `Asocia` (
  `idHortaliza` int NOT NULL,
  `idAsociada` int NOT NULL
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
  `calle` varchar(16) NOT NULL,
  `esquina` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `email`, `numeroPuerta`, `calle`, `esquina`) VALUES
(1, 'a@a.com', 2222, 'Av. Bolivia', 'Paraguay');

-- --------------------------------------------------------

--
-- Table structure for table `clienteHacePedido`
--

CREATE TABLE `clienteHacePedido` (
  `numPedido` int NOT NULL,
  `idCliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 12345678, 'Carlos', 'Vives');

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
(3, 'Ajo', 1, 180, NULL, 4, 8),
(4, 'Apio', 1, 20, 70, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Huerta`
--

CREATE TABLE `Huerta` (
  `idHuerta` int NOT NULL,
  `nombreHuerta` varchar(32) NOT NULL,
  `tamanoHuerta` varchar(12) NOT NULL,
  `metaKg` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `huertaCosecha`
--

CREATE TABLE `huertaCosecha` (
  `idCosecha` int NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL
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
  `cantidad` int NOT NULL,
  `estadoCultivo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pedido`
--

CREATE TABLE `Pedido` (
  `numPedido` int NOT NULL,
  `idCliente` int NOT NULL,
  `reclamo` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `importe` int NOT NULL,
  `metodoPago` varchar(16) NOT NULL,
  `estadoPedido` varchar(16) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `horaPrefInicio` time DEFAULT NULL,
  `horaPrefFinal` time DEFAULT NULL,
  `recibidor` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidoTraslado`
--

CREATE TABLE `pedidoTraslado` (
  `idTraslado` int NOT NULL,
  `numPedido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidoVariedad`
--

CREATE TABLE `pedidoVariedad` (
  `idVariedad` int NOT NULL,
  `numPedido` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(2, 60),
(3, 300),
(5, 430);

-- --------------------------------------------------------

--
-- Table structure for table `Traslado`
--

CREATE TABLE `Traslado` (
  `idTraslado` int NOT NULL,
  `repartidor` varchar(32) NOT NULL,
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
  `esInformatico` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`) VALUES
(1, 'Carlos', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, 1, 1, NULL, NULL),
(1, 'ElAdmin777', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, NULL, 1),
(1, 'palito', '629cf0d815ccb448a2c7a4d3d9cc3989', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Variedad`
--

CREATE TABLE `Variedad` (
  `idVariedad` int NOT NULL,
  `idHortaliza` int NOT NULL,
  `nombreVariedad` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `precio` int NOT NULL,
  `imgUrl` varchar(230) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Variedad`
--

INSERT INTO `Variedad` (`idVariedad`, `idHortaliza`, `nombreVariedad`, `precio`, `imgUrl`) VALUES
(1, 1, 'Niágara', 60, 'https://i.blogs.es/144308/chard-3763735_1280/1366_2000.jpg'),
(2, 2, NULL, 200, 'https://s3.amazonaws.com/static.om.anigamy.net/static.selecciones.com.ar/App/Article/usos-analgesicos-del-aji-picante-6052-mainImage-2.jpg'),
(3, 4, 'Verdeo', 48, 'https://nutricionyfarmacia.com/blog/wp-content/uploads/2021/09/farmacia-angulo-blog-100.jpg.webp'),
(5, 3, NULL, 25, 'https://scrippsamg.com/wp-content/uploads/2021/09/6_-_National_Garlic_Day_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Asocia`
--
ALTER TABLE `Asocia`
  ADD PRIMARY KEY (`idHortaliza`,`idAsociada`),
  ADD KEY `idAsociada` (`idAsociada`);

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
-- Indexes for table `clienteHacePedido`
--
ALTER TABLE `clienteHacePedido`
  ADD PRIMARY KEY (`numPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `cWeb`
--
ALTER TABLE `cWeb`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `CI` (`CI`);

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
  ADD PRIMARY KEY (`idTraslado`,`numPedido`),
  ADD KEY `numPedido` (`numPedido`);

--
-- Indexes for table `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  ADD PRIMARY KEY (`idVariedad`,`numPedido`),
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
  ADD PRIMARY KEY (`idTraslado`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `idCliente` (`idCliente`);

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
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cWeb`
--
ALTER TABLE `cWeb`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Feria`
--
ALTER TABLE `Feria`
  MODIFY `idFeria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Hortaliza`
--
ALTER TABLE `Hortaliza`
  MODIFY `idHortaliza` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Huerta`
--
ALTER TABLE `Huerta`
  MODIFY `idHuerta` int NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `numPedido` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Traslado`
--
ALTER TABLE `Traslado`
  MODIFY `idTraslado` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Variedad`
--
ALTER TABLE `Variedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Asocia`
--
ALTER TABLE `Asocia`
  ADD CONSTRAINT `Asocia_ibfk_1` FOREIGN KEY (`idAsociada`) REFERENCES `Hortaliza` (`idHortaliza`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Asocia_ibfk_2` FOREIGN KEY (`idHortaliza`) REFERENCES `Hortaliza` (`idHortaliza`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cEmpresa`
--
ALTER TABLE `cEmpresa`
  ADD CONSTRAINT `cEmpresa_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `clienteHacePedido`
--
ALTER TABLE `clienteHacePedido`
  ADD CONSTRAINT `clienteHacePedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `clienteHacePedido_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
-- Constraints for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Variedad`
--
ALTER TABLE `Variedad`
  ADD CONSTRAINT `Variedad_ibfk_1` FOREIGN KEY (`idHortaliza`) REFERENCES `Hortaliza` (`idHortaliza`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
