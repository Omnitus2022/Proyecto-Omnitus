-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-11-2022 a las 11:16:14
-- Versión del servidor: 8.0.28-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `omnitus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asocia`
--

CREATE TABLE `Asocia` (
  `idVariedad` int NOT NULL,
  `idAsocia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cEmpresa`
--

CREATE TABLE `cEmpresa` (
  `idCliente` int NOT NULL,
  `RUT` int NOT NULL,
  `nombreEmpresa` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `idCliente` int NOT NULL,
  `email` varchar(64) NOT NULL,
  `numeroPuerta` int NOT NULL,
  `calle` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `esquina` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Cliente`
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
-- Estructura de tabla para la tabla `clienteHacePedido`
--

CREATE TABLE `clienteHacePedido` (
  `numPedido` int NOT NULL,
  `idCliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cWeb`
--

CREATE TABLE `cWeb` (
  `idCliente` int NOT NULL,
  `CI` int NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `apellido` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cWeb`
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
-- Estructura de tabla para la tabla `Feria`
--

CREATE TABLE `Feria` (
  `idFeria` int NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `calle` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feriaVende`
--

CREATE TABLE `feriaVende` (
  `idFeria` int NOT NULL,
  `idVariedad` int NOT NULL,
  `nomCliente` varchar(40) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hortaliza`
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
-- Volcado de datos para la tabla `Hortaliza`
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
-- Estructura de tabla para la tabla `Huerta`
--

CREATE TABLE `Huerta` (
  `idHuerta` int NOT NULL,
  `nombreHuerta` varchar(32) NOT NULL,
  `tamanoHuerta` varchar(12) NOT NULL,
  `metaCantidad` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Huerta`
--

INSERT INTO `Huerta` (`idHuerta`, `nombreHuerta`, `tamanoHuerta`, `metaCantidad`) VALUES
(1, 'Paraíso verde', 'Grande', 400),
(2, 'Eco huerta', 'Mediana', 200),
(3, 'A sembrar vecinos', 'Mediana', 240),
(4, 'Mi corazón verde', 'Mediana', 270),
(5, 'la caserita', 'Pequeña', 80),
(6, 'Mundo verde', 'Grande', 470),
(7, 'huertalizas', 'Grande', 450),
(8, 'Mi pequeña huerta', 'Pequeña', 70),
(9, 'Vida en el huerto', 'Mediana', 260),
(10, 'La huerta ingeniosa', 'Mediana', 230);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huertaCosecha`
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
-- Estructura de tabla para la tabla `huertaCultivo`
--

CREATE TABLE `huertaCultivo` (
  `idCultivo` int NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidadPlantada` int NOT NULL,
  `estadoCultivo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
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
-- Estructura de tabla para la tabla `pedidoTraslado`
--

CREATE TABLE `pedidoTraslado` (
  `idTraslado` int NOT NULL,
  `numPedido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoVariedad`
--

CREATE TABLE `pedidoVariedad` (
  `idVariedad` int NOT NULL,
  `numPedido` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Stock`
--

CREATE TABLE `Stock` (
  `idVariedad` int NOT NULL,
  `volumen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Stock`
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
-- Estructura de tabla para la tabla `Traslado`
--

CREATE TABLE `Traslado` (
  `idTraslado` int NOT NULL,
  `repartidor` varchar(32) NOT NULL,
  `estadoTraslado` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
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
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idCliente`, `nom`, `pwd`, `esEmpresa`, `esDirectivo`, `esAdmin`, `esHuerta`, `esRepartidor`, `esInformatico`, `idHuerta`) VALUES
(1, 'Carlos', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, 1, 1, NULL, NULL, NULL),
(23, 'rafa', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 1, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Variedad`
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
-- Volcado de datos para la tabla `Variedad`
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Asocia`
--
ALTER TABLE `Asocia`
  ADD PRIMARY KEY (`idVariedad`,`idAsocia`),
  ADD KEY `idAsocia` (`idAsocia`);

--
-- Indices de la tabla `cEmpresa`
--
ALTER TABLE `cEmpresa`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `RUT` (`RUT`);

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `clienteHacePedido`
--
ALTER TABLE `clienteHacePedido`
  ADD PRIMARY KEY (`numPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `cWeb`
--
ALTER TABLE `cWeb`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indices de la tabla `Feria`
--
ALTER TABLE `Feria`
  ADD PRIMARY KEY (`idFeria`);

--
-- Indices de la tabla `feriaVende`
--
ALTER TABLE `feriaVende`
  ADD PRIMARY KEY (`idFeria`,`idVariedad`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indices de la tabla `Hortaliza`
--
ALTER TABLE `Hortaliza`
  ADD PRIMARY KEY (`idHortaliza`);

--
-- Indices de la tabla `Huerta`
--
ALTER TABLE `Huerta`
  ADD PRIMARY KEY (`idHuerta`);

--
-- Indices de la tabla `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  ADD PRIMARY KEY (`idCosecha`),
  ADD KEY `idHuerta` (`idHuerta`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indices de la tabla `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  ADD PRIMARY KEY (`idCultivo`),
  ADD KEY `idHuerta` (`idHuerta`),
  ADD KEY `idVariedad` (`idVariedad`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`numPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `pedidoTraslado`
--
ALTER TABLE `pedidoTraslado`
  ADD PRIMARY KEY (`idTraslado`,`numPedido`),
  ADD KEY `numPedido` (`numPedido`);

--
-- Indices de la tabla `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  ADD PRIMARY KEY (`idVariedad`,`numPedido`),
  ADD KEY `numPedido` (`numPedido`);

--
-- Indices de la tabla `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`idVariedad`);

--
-- Indices de la tabla `Traslado`
--
ALTER TABLE `Traslado`
  ADD PRIMARY KEY (`idTraslado`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `Usuario_ibfk_1` (`idHuerta`);

--
-- Indices de la tabla `Variedad`
--
ALTER TABLE `Variedad`
  ADD PRIMARY KEY (`idVariedad`),
  ADD KEY `idHortaliza` (`idHortaliza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `cWeb`
--
ALTER TABLE `cWeb`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `Feria`
--
ALTER TABLE `Feria`
  MODIFY `idFeria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Hortaliza`
--
ALTER TABLE `Hortaliza`
  MODIFY `idHortaliza` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `Huerta`
--
ALTER TABLE `Huerta`
  MODIFY `idHuerta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  MODIFY `idCosecha` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  MODIFY `idCultivo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `numPedido` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Traslado`
--
ALTER TABLE `Traslado`
  MODIFY `idTraslado` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Variedad`
--
ALTER TABLE `Variedad`
  MODIFY `idVariedad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Asocia`
--
ALTER TABLE `Asocia`
  ADD CONSTRAINT `Asocia_ibfk_1` FOREIGN KEY (`idAsocia`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Asocia_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `cEmpresa`
--
ALTER TABLE `cEmpresa`
  ADD CONSTRAINT `cEmpresa_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `clienteHacePedido`
--
ALTER TABLE `clienteHacePedido`
  ADD CONSTRAINT `clienteHacePedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `clienteHacePedido_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `cWeb`
--
ALTER TABLE `cWeb`
  ADD CONSTRAINT `cWeb_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `feriaVende`
--
ALTER TABLE `feriaVende`
  ADD CONSTRAINT `feriaVende_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `feriaVende_ibfk_2` FOREIGN KEY (`idFeria`) REFERENCES `Feria` (`idFeria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `huertaCosecha`
--
ALTER TABLE `huertaCosecha`
  ADD CONSTRAINT `huertaCosecha_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `huertaCosecha_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `huertaCultivo`
--
ALTER TABLE `huertaCultivo`
  ADD CONSTRAINT `huertaCultivo_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `huertaCultivo_ibfk_2` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `Pedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `pedidoTraslado`
--
ALTER TABLE `pedidoTraslado`
  ADD CONSTRAINT `pedidoTraslado_ibfk_1` FOREIGN KEY (`idTraslado`) REFERENCES `Traslado` (`idTraslado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pedidoTraslado_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `pedidoVariedad`
--
ALTER TABLE `pedidoVariedad`
  ADD CONSTRAINT `pedidoVariedad_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `pedidoVariedad_ibfk_2` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`idVariedad`) REFERENCES `Variedad` (`idVariedad`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`idHuerta`) REFERENCES `Huerta` (`idHuerta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Usuario_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Variedad`
--
ALTER TABLE `Variedad`
  ADD CONSTRAINT `Variedad_ibfk_1` FOREIGN KEY (`idHortaliza`) REFERENCES `Hortaliza` (`idHortaliza`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
