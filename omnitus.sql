-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-08-2022 a las 11:41:05
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
-- Estructura de tabla para la tabla `calendariosiembra`
--

CREATE TABLE `calendariosiembra` (
  `idHortalizas` int NOT NULL,
  `época` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `método` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tiempo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `calle` varchar(32) NOT NULL,
  `numero` int NOT NULL,
  `esquina` varchar(32) NOT NULL,
  `id` int NOT NULL,
  `telefono` int NOT NULL,
  `email` varchar(32) NOT NULL,
  `contraseña` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteempresa`
--

CREATE TABLE `clienteempresa` (
  `nombre` varchar(32) NOT NULL,
  `rut` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteweb`
--

CREATE TABLE `clienteweb` (
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `ci` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `idTranslado` int NOT NULL,
  `numPedido` int NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feria`
--

CREATE TABLE `feria` (
  `nombre` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cliente` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `feriante` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `barrio` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hace`
--

CREATE TABLE `hace` (
  `numPedido` int NOT NULL,
  `idCliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hortalizas`
--

CREATE TABLE `hortalizas` (
  `nombre` varchar(32) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huerta`
--

CREATE TABLE `huerta` (
  `id` int NOT NULL,
  `tamaño` varchar(16) NOT NULL,
  `nombre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `numero` int NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produce`
--

CREATE TABLE `produce` (
  `idHuerta` int NOT NULL,
  `fecha` int NOT NULL,
  `idHortalizas` int NOT NULL,
  `idVariedad` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclama`
--

CREATE TABLE `reclama` (
  `idCliente` int NOT NULL,
  `descripción` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaReclamo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `idVariedad` int NOT NULL,
  `volumen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienepedido`
--

CREATE TABLE `tienepedido` (
  `idVariedad` int NOT NULL,
  `numPedido` int NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `cantidadPedido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translado`
--

CREATE TABLE `translado` (
  `id` int NOT NULL,
  `estado` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `repartidor` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nom` varchar(16) NOT NULL,
  `rol` int NOT NULL,
  `pasw` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id` int NOT NULL,
  `nombre` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vende`
--

CREATE TABLE `vende` (
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL,
  `idHortalizas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendariosiembra`
--
ALTER TABLE `calendariosiembra`
  ADD PRIMARY KEY (`idHortalizas`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `clienteempresa`
--
ALTER TABLE `clienteempresa`
  ADD KEY `rut` (`rut`);

--
-- Indices de la tabla `clienteweb`
--
ALTER TABLE `clienteweb`
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`numPedido`,`fechaInicio`,`fechaFin`);

--
-- Indices de la tabla `feria`
--
ALTER TABLE `feria`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `hace`
--
ALTER TABLE `hace`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `hortalizas`
--
ALTER TABLE `hortalizas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `huerta`
--
ALTER TABLE `huerta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `produce`
--
ALTER TABLE `produce`
  ADD PRIMARY KEY (`idHuerta`,`fecha`);

--
-- Indices de la tabla `reclama`
--
ALTER TABLE `reclama`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idVariedad`);

--
-- Indices de la tabla `tienepedido`
--
ALTER TABLE `tienepedido`
  ADD PRIMARY KEY (`numPedido`);

--
-- Indices de la tabla `translado`
--
ALTER TABLE `translado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vende`
--
ALTER TABLE `vende`
  ADD PRIMARY KEY (`idHortalizas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hortalizas`
--
ALTER TABLE `hortalizas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hace`
--
ALTER TABLE `hace`
  ADD CONSTRAINT `hace_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
