-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2022 at 09:13 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omnitus2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendariosiembra`
--

DROP TABLE IF EXISTS `calendariosiembra`;
CREATE TABLE IF NOT EXISTS `calendariosiembra` (
  `epoca` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `tiempoGerminacion` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `h_id` int(11) NOT NULL,
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `email` varchar(64) COLLATE utf32_spanish_ci NOT NULL,
  `id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clienteempresa`
--

DROP TABLE IF EXISTS `clienteempresa`;
CREATE TABLE IF NOT EXISTS `clienteempresa` (
  `rut` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf32_spanish_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clienteweb`
--

DROP TABLE IF EXISTS `clienteweb`;
CREATE TABLE IF NOT EXISTS `clienteweb` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `apellido` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf32_spanish_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `calle` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `numero` int(4) DEFAULT NULL,
  `esquina` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feria`
--

DROP TABLE IF EXISTS `feria`;
CREATE TABLE IF NOT EXISTS `feria` (
  `nombre` varchar(32) COLLATE utf32_spanish_ci NOT NULL,
  `cliente` varchar(32) COLLATE utf32_spanish_ci NOT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hortalizas`
--

DROP TABLE IF EXISTS `hortalizas`;
CREATE TABLE IF NOT EXISTS `hortalizas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(32) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `huerta`
--

DROP TABLE IF EXISTS `huerta`;
CREATE TABLE IF NOT EXISTS `huerta` (
  `id` int(4) NOT NULL,
  `tamaño` varchar(10) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `numero` int(9) NOT NULL,
  `reclamo` varchar(2) COLLATE utf32_spanish_ci NOT NULL COMMENT 'si o no',
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `volumen` varchar(10) COLLATE utf32_spanish_ci DEFAULT NULL,
  `h_id` int(11) NOT NULL,
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaldo`
--

DROP TABLE IF EXISTS `transaldo`;
CREATE TABLE IF NOT EXISTS `transaldo` (
  `id` int(3) NOT NULL,
  `estado` varchar(32) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `variedad`
--

DROP TABLE IF EXISTS `variedad`;
CREATE TABLE IF NOT EXISTS `variedad` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(32) COLLATE utf32_spanish_ci DEFAULT NULL,
  `ho_id` int(11) NOT NULL,
  KEY `ho_id` (`ho_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `hace` FOREIGN KEY (`id`) REFERENCES `pedido` (`numero`),
  ADD CONSTRAINT `reclama` FOREIGN KEY (`id`) REFERENCES `pedido` (`numero`);

--
-- Constraints for table `hortalizas`
--
ALTER TABLE `hortalizas`
  ADD CONSTRAINT `produce` FOREIGN KEY (`id`) REFERENCES `huerta` (`id`),
  ADD CONSTRAINT `tiene` FOREIGN KEY (`id`) REFERENCES `pedido` (`numero`),
  ADD CONSTRAINT `vende` FOREIGN KEY (`id`) REFERENCES `feria` (`id`);

--
-- Constraints for table `transaldo`
--
ALTER TABLE `transaldo`
  ADD CONSTRAINT `tieneT` FOREIGN KEY (`id`) REFERENCES `pedido` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
