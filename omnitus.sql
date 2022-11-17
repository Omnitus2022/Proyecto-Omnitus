-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: omnitus
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Asocia`
--

DROP TABLE IF EXISTS `Asocia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Asocia` (
  `idVariedad` int NOT NULL,
  `idAsocia` int NOT NULL,
  PRIMARY KEY (`idVariedad`,`idAsocia`),
  KEY `idAsocia` (`idAsocia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asocia`
--

LOCK TABLES `Asocia` WRITE;
/*!40000 ALTER TABLE `Asocia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Asocia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Cliente` (
  `idCliente` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `numeroPuerta` int NOT NULL,
  `calle` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `esquina` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES ('1','a@a.com',2222,'Av. Bolivia','Paraguay'),('2','rich23@gmail.com',555,'Av. España','Minas'),('22','asda@gmail.com',2121,'Ramon García','Solís'),('23','rats@gmail.com',443,'Av.Bolivia','Fuego'),('24','bob@gmail.com',233,'Yi','Yaguarón'),('25','tata@gmail.com',676,'Cerro Largo','Cuareim'),('26','yy66@gmail.com',900,'Av. Tomas Garibaldi','Patria'),('27','zoomu@gmail.com',455,'Itapúa','Patria'),('28','hfdhgf4@gmail.com',4478,'Blvr.España','José Ellauri'),('29','asfa@gmail.com',2333,'26 de Marzo','Miguel Barreiro'),('30','jkhj@gmail.com',2111,'San Lorenzo','La Gaceta'),('CLI_6373fa3ad8804','sin@gmail.com',1234,'Carlos','Joaquín'),('CLI_6373fafa3f5a0','a',1234,'T','M'),('CLI_6373fc2d04265','tere@gmail.com',1234,'Tu','Corazón'),('CLI_6373fc869b8fe','rrr@gmail.com',5555,'Pepe','Amigo'),('CLI_6373fdaa95cdb','rrr@gmail.com',5555,'Pepe','Amigo'),('CLI_6373fdd40e609','mot@gmail.com',1234,'Julia','Santa'),('CLI_6373fe298c535','pp@gmail.com',1234,'Pedro','Avenida 5'),('CLI_6373fe9c02aaa','tok22@gmail.com',1234,'Juana','Francia'),('CLI_6373fefe8ae81','pamy@gmail.com',5555,'Monte Bello','Libertador');
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Feria`
--

DROP TABLE IF EXISTS `Feria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Feria` (
  `idFeria` int NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `calle` varchar(32) NOT NULL,
  PRIMARY KEY (`idFeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Feria`
--

LOCK TABLES `Feria` WRITE;
/*!40000 ALTER TABLE `Feria` DISABLE KEYS */;
/*!40000 ALTER TABLE `Feria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Hortaliza`
--

DROP TABLE IF EXISTS `Hortaliza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Hortaliza` (
  `idHortaliza` int NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `unidad` tinyint(1) NOT NULL,
  `tGerminacion` int DEFAULT NULL,
  `tCosecha` int DEFAULT NULL,
  `mesInicio` int DEFAULT NULL,
  `mesFin` int DEFAULT NULL,
  PRIMARY KEY (`idHortaliza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Hortaliza`
--

LOCK TABLES `Hortaliza` WRITE;
/*!40000 ALTER TABLE `Hortaliza` DISABLE KEYS */;
INSERT INTO `Hortaliza` VALUES (1,'Acelga',1,9,90,NULL,NULL),(2,'Ají',0,NULL,90,7,8),(3,'Ajo',1,NULL,180,3,8),(4,'Apio',1,20,70,1,12),(5,'Arvejas',0,10,90,5,8),(6,'Berenjena',0,10,90,9,12),(7,'Betarraga',0,NULL,90,8,9),(8,'Cebolla',0,10,100,10,3),(9,' Cebollin',1,10,100,10,2),(10,'Frutilla',0,NULL,120,3,5),(11,'Habas',0,8,90,3,6),(12,'Lechuga',0,8,90,1,12),(13,'Choclo',1,NULL,120,9,12),(14,'Papa',0,40,90,2,3),(15,'Pimenton',1,5,90,7,8),(16,'Porotos',0,NULL,NULL,10,1),(17,'Porotos Verdes',0,8,80,9,1),(18,'Repollo',0,6,100,1,12),(19,'Tomate',0,8,90,8,9),(20,'Zanahoria',0,15,120,1,12);
/*!40000 ALTER TABLE `Hortaliza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Huerta`
--

DROP TABLE IF EXISTS `Huerta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Huerta` (
  `idHuerta` int NOT NULL,
  `nombreHuerta` varchar(32) NOT NULL,
  `tamanoHuerta` varchar(12) NOT NULL,
  `metaAnual` int DEFAULT '0',
  PRIMARY KEY (`idHuerta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Huerta`
--

LOCK TABLES `Huerta` WRITE;
/*!40000 ALTER TABLE `Huerta` DISABLE KEYS */;
INSERT INTO `Huerta` VALUES (1,'Paraíso verde','Grande',0),(2,'Eco huerta','Mediana',0),(3,'A sembrar vecinos','Mediana',0),(4,'Mi corazón verde','Mediana',0),(5,'la caserita','Pequeña',0),(6,'Mundo verde','Grande',0),(7,'huertalizas','Grande',1200),(8,'Mi pequeña huerta','Pequeña',0),(9,'Vida en el huerto','Mediana',0),(10,'La Huerta Ingeniosa','Mediana',0);
/*!40000 ALTER TABLE `Huerta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedido`
--

DROP TABLE IF EXISTS `Pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pedido` (
  `numPedido` varchar(52) NOT NULL,
  `idCliente` int NOT NULL,
  `reclamo` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `importe` int NOT NULL,
  `metodoPago` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `horaPrefInicio` time DEFAULT NULL,
  `horaPrefFinal` time DEFAULT NULL,
  `recibidor` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`numPedido`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedido`
--

LOCK TABLES `Pedido` WRITE;
/*!40000 ALTER TABLE `Pedido` DISABLE KEYS */;
INSERT INTO `Pedido` VALUES ('P_6372a18905d72',22,NULL,865,'Tarjeta de Débito','2022-11-14','2022-11-15','00:33:00','12:41:00','Martín De Oliveira'),('P_6372a1e657ae7',22,NULL,265,'Tarjeta de Crédito','2022-11-14','2022-11-14','00:12:00','15:24:00','Martín De Oliveira'),('P_6372e378b8766',22,NULL,1019,'Efectivo','2022-11-14',NULL,'00:34:00','12:45:00',NULL),('P_6372e4b4b6abd',22,NULL,760,'Tarjeta de Crédito','2022-11-14',NULL,'12:41:00','17:01:00',NULL),('P_63735ec6c5e84',22,NULL,656,'Tarjeta de Débito','2022-11-15',NULL,'12:04:00','14:53:00',NULL),('P_63735f3b6f1ac',22,NULL,700,'Tarjeta de Crédito','2022-11-15',NULL,'05:35:00','15:45:00',NULL),('P_63735f79995e9',22,NULL,460,'Efectivo','2022-11-15',NULL,'03:25:00','17:23:00',NULL),('P_63735fca14ea5',22,NULL,452,'Tarjeta de Crédito','2022-11-15',NULL,'02:35:00','17:32:00',NULL),('P_6373607d06734',22,NULL,435,'Efectivo','2022-11-15','2022-11-15','02:34:00','17:34:00','Martín De Oliveira'),('P_637360aa7fa32',22,NULL,755,'Tarjeta de Débito','2022-11-15',NULL,'02:35:00','15:25:00',NULL),('P_63736128a03dd',22,NULL,715,'Efectivo','2022-11-15',NULL,'02:34:00','17:32:00',NULL),('P_6373618429ac8',22,NULL,965,'Tarjeta de Débito','2022-11-15',NULL,'02:34:00','17:32:00',NULL),('P_6373aad888f20',22,NULL,1059,'Tarjeta de Débito','2022-11-15',NULL,'00:41:00','12:41:00',NULL),('P_6373cfe1f0721',22,NULL,140,'Tarjeta de Crédito','2022-11-15',NULL,'02:34:00','15:25:00',NULL),('P_6375c1423174d',22,NULL,280,'Tarjeta de Crédito','2022-11-17',NULL,'12:00:00','16:00:00',NULL);
/*!40000 ALTER TABLE `Pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stock`
--

DROP TABLE IF EXISTS `Stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Stock` (
  `idVariedad` int NOT NULL,
  `volumen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stock`
--

LOCK TABLES `Stock` WRITE;
/*!40000 ALTER TABLE `Stock` DISABLE KEYS */;
INSERT INTO `Stock` VALUES (1,99),(3,26),(4,266),(6,144),(7,15),(8,169),(11,177),(13,144),(14,464),(15,185),(10,116),(16,292),(9,192);
/*!40000 ALTER TABLE `Stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Traslado`
--

DROP TABLE IF EXISTS `Traslado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Traslado` (
  `idTraslado` int NOT NULL AUTO_INCREMENT,
  `repartidor` varchar(58) NOT NULL,
  `estadoTraslado` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Pendiente',
  PRIMARY KEY (`idTraslado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Traslado`
--

LOCK TABLES `Traslado` WRITE;
/*!40000 ALTER TABLE `Traslado` DISABLE KEYS */;
INSERT INTO `Traslado` VALUES (1,'Carlos','Finalizado'),(2,'Carlos','Ruta'),(3,'Carlos','Pendiente');
/*!40000 ALTER TABLE `Traslado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `idCliente` varchar(64) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `autorizado` tinyint(1) NOT NULL DEFAULT '0',
  `esEmpresa` tinyint(1) DEFAULT NULL,
  `esDirectivo` tinyint(1) DEFAULT NULL,
  `esAdmin` tinyint(1) DEFAULT NULL,
  `esHuerta` tinyint(1) DEFAULT NULL,
  `esRepartidor` tinyint(1) DEFAULT NULL,
  `esInformatico` tinyint(1) DEFAULT NULL,
  `idHuerta` int DEFAULT NULL,
  PRIMARY KEY (`nom`),
  KEY `Usuario_FK` (`idCliente`),
  CONSTRAINT `Usuario_FK` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES ('27','Carlos','81dc9bdb52d04dc20036dbd8313ed055',1,NULL,1,NULL,NULL,1,NULL,NULL),('30','empresa','81dc9bdb52d04dc20036dbd8313ed055',1,1,NULL,NULL,NULL,NULL,NULL,NULL),('CLI_6373fc869b8fe','jorge92','ec6a6536ca304edf844d1d248a4f08dc',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('24','martt2','b53b3a3d6ab90ce0268229151c9bde11',0,NULL,1,NULL,1,NULL,NULL,8),('CLI_6373fdd40e609','motomoto10','ec6a6536ca304edf844d1d248a4f08dc',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('CLI_6373fefe8ae81','panpan66','ec6a6536ca304edf844d1d248a4f08dc',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('CLI_6373fe298c535','pirulin','ec6a6536ca304edf844d1d248a4f08dc',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('22','rafa','35cd2d0d62d9bc5e60a3ca9f7593b05b',1,NULL,1,1,1,1,1,7),('CLI_6373fc2d04265','teresa77','ec6a6536ca304edf844d1d248a4f08dc',0,1,NULL,NULL,NULL,NULL,NULL,NULL),('CLI_6373fe9c02aaa','timmy','ec6a6536ca304edf844d1d248a4f08dc',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Variedad`
--

DROP TABLE IF EXISTS `Variedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Variedad` (
  `idVariedad` int NOT NULL,
  `idHortaliza` int NOT NULL,
  `nombreVariedad` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `precio` int NOT NULL,
  `descuento` int DEFAULT '0',
  `imgUrl` varchar(230) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`idVariedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Variedad`
--

LOCK TABLES `Variedad` WRITE;
/*!40000 ALTER TABLE `Variedad` DISABLE KEYS */;
INSERT INTO `Variedad` VALUES (1,1,'Niágara',60,0,'https://i.blogs.es/144308/chard-3763735_1280/1366_2000.jpg'),(2,2,NULL,200,NULL,'https://cdn.shopify.com/s/files/1/0271/3360/8038/products/16F71BF0-1B30-486C-BDA2-AE924ACD3DDF_a5a55aea-160c-4e3a-a325-8970f95a16cb_1024x1024@2x.jpg?v=1655826590'),(3,1,'Anepán Inta',40,NULL,'https://www.fecoagro.com.ar/wp-content/uploads/2015/03/acelga-penca-ancha.png'),(4,20,'Colmar',113,NULL,'https://youdoit.fr/21933-large_default/semillas-de-zanahoria-colmar-ecologicas.jpg'),(5,3,NULL,20,NULL,'https://scrippsamg.com/wp-content/uploads/2021/09/6_-_National_Garlic_Day_2.jpg'),(6,1,'Criolla',100,NULL,'https://media.biomercados.com.ve/media/catalog/product/cache/e540f384a080f24e28b55100b319ca3a/0/0/000463_13.jpeg'),(7,4,'Verdeo',120,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBNE5FyDae0bIrdZdHi36ews38Kxuu4WRwjQ&usqp=CAU'),(8,4,'blanqueo',180,NULL,'https://static.plenummedia.com/40767/images/20141212174224-apio-blanco-web.jpg'),(9,5,'boleroa',100,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7DjfMgNL5cABtiTxUXGoo8YygbjbpvZNEjdfCriNv3Q&s'),(10,4,'blanqueo',115,NULL,'https://www.jardineriaon.com/wp-content/uploads/2017/03/Plantar-apio-en-tu-jard%C3%ADn.jpg'),(11,5,'Boleroa Ontherware',25,NULL,'https://encolombia.com/wp-content/uploads/2021/11/Cultivo-de-Arveja-330x205.jpg'),(12,10,NULL,30,NULL,'https://avisador.com.uy/wp-content/uploads/2019/10/frutilla-receta.jpg'),(13,16,'Blancos',30,10,'https://desanroman.com.ar/agroseis/wp-content/uploads/2020/03/Bolita-blanco-01.jpg'),(14,16,'Negros',35,10,'https://desanroman.com.ar/agroseis/wp-content/uploads/2020/03/negro-01.jpg'),(15,16,'Rojos',40,32,'https://imagenes.laestrella.com.pa/files/image_990_491/uploads/2021/02/20/60319d8e3971f.jpeg'),(16,13,NULL,43,NULL,'https://www.revistainternos.com.ar/v2/wp-content/uploads/2021/05/InterNos-Maqueta-Foto-Portada-Notas-choclo.jpg');
/*!40000 ALTER TABLE `Variedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cEmpresa`
--

DROP TABLE IF EXISTS `cEmpresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cEmpresa` (
  `idCliente` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `RUT` int NOT NULL,
  `nombreEmpresa` varchar(48) NOT NULL,
  UNIQUE KEY `RUT` (`RUT`),
  KEY `cEmpresa_FK` (`idCliente`),
  CONSTRAINT `cEmpresa_FK` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cEmpresa`
--

LOCK TABLES `cEmpresa` WRITE;
/*!40000 ALTER TABLE `cEmpresa` DISABLE KEYS */;
INSERT INTO `cEmpresa` VALUES ('CLI_6373fc2d04265',1234465523,'Arroyitos Life'),('30',1234566778,'Vida en verduras');
/*!40000 ALTER TABLE `cEmpresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cWeb`
--

DROP TABLE IF EXISTS `cWeb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cWeb` (
  `idCliente` varchar(64) NOT NULL,
  `CI` int NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `CI` (`CI`),
  CONSTRAINT `cWeb_FK` FOREIGN KEY (`idCliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cWeb`
--

LOCK TABLES `cWeb` WRITE;
/*!40000 ALTER TABLE `cWeb` DISABLE KEYS */;
INSERT INTO `cWeb` VALUES ('1',12345678,'Carlos','Vives'),('2',43435678,'Steven','López'),('22',23434567,'Nate','Higgers'),('24',45567856,'Ignacio','Chappelle'),('26',23543556,'Carlos','Rámirez'),('27',54325655,'Martina','Goncalves'),('28',23456332,'Dave','List'),('CLI_6373fe9c02aaa',55555323,'Tim','Armstrong'),('CLI_6373fefe8ae81',44423342,'Violeta','Torrealba');
/*!40000 ALTER TABLE `cWeb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadosPedido`
--

DROP TABLE IF EXISTS `estadosPedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estadosPedido` (
  `estado` varchar(16) NOT NULL DEFAULT 'Pendiente',
  `numPedido` varchar(62) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  PRIMARY KEY (`estado`,`numPedido`,`fechaInicio`),
  KEY `numPedido` (`numPedido`),
  CONSTRAINT `estadosPedido_ibfk_1` FOREIGN KEY (`numPedido`) REFERENCES `Pedido` (`numPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadosPedido`
--

LOCK TABLES `estadosPedido` WRITE;
/*!40000 ALTER TABLE `estadosPedido` DISABLE KEYS */;
INSERT INTO `estadosPedido` VALUES ('Armado','P_6372a18905d72','2022-11-14','2022-11-14'),('Armado','P_6372a1e657ae7','2022-11-14','2022-11-14'),('Armado','P_63735ec6c5e84','2022-11-15',NULL),('Armado','P_63735f79995e9','2022-11-15',NULL),('Armado','P_6373607d06734','2022-11-15','2022-11-15'),('Armado','P_63736128a03dd','2022-11-15',NULL),('Armado','P_6373618429ac8','2022-11-15','2022-11-15'),('Entregado','P_6372a18905d72','2022-11-15','2022-11-15'),('Entregado','P_6372a1e657ae7','2022-11-14','2022-11-14'),('Entregado','P_6373607d06734','2022-11-15','2022-11-15'),('Pendiente','P_6372a18905d72','2022-11-14','2022-11-14'),('Pendiente','P_6372a1e657ae7','2022-11-14','2022-11-14'),('Pendiente','P_6372e378b8766','2022-11-14',NULL),('Pendiente','P_6372e4b4b6abd','2022-11-14',NULL),('Pendiente','P_63735ec6c5e84','2022-11-15','2022-11-15'),('Pendiente','P_63735f3b6f1ac','2022-11-15',NULL),('Pendiente','P_63735f79995e9','2022-11-15','2022-11-15'),('Pendiente','P_63735fca14ea5','2022-11-15',NULL),('Pendiente','P_6373607d06734','2022-11-15','2022-11-15'),('Pendiente','P_637360aa7fa32','2022-11-15',NULL),('Pendiente','P_63736128a03dd','2022-11-15','2022-11-15'),('Pendiente','P_6373618429ac8','2022-11-15','2022-11-15'),('Pendiente','P_6373aad888f20','2022-11-15',NULL),('Pendiente','P_6373cfe1f0721','2022-11-15',NULL),('Pendiente','P_6375c1423174d','2022-11-17',NULL),('Ruta','P_6372a18905d72','2022-11-14','2022-11-15'),('Ruta','P_6372a1e657ae7','2022-11-14','2022-11-14'),('Ruta','P_6373607d06734','2022-11-15','2022-11-15'),('Ruta','P_6373618429ac8','2022-11-15',NULL);
/*!40000 ALTER TABLE `estadosPedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feriaVende`
--

DROP TABLE IF EXISTS `feriaVende`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feriaVende` (
  `idFeria` int NOT NULL,
  `idVariedad` int NOT NULL,
  `nomCliente` varchar(40) NOT NULL,
  `cantidad` int NOT NULL,
  PRIMARY KEY (`idFeria`,`idVariedad`),
  KEY `idVariedad` (`idVariedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feriaVende`
--

LOCK TABLES `feriaVende` WRITE;
/*!40000 ALTER TABLE `feriaVende` DISABLE KEYS */;
/*!40000 ALTER TABLE `feriaVende` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huertaCosecha`
--

DROP TABLE IF EXISTS `huertaCosecha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `huertaCosecha` (
  `idCosecha` varchar(64) NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidadCosecha` int NOT NULL,
  PRIMARY KEY (`idCosecha`,`idHuerta`,`idVariedad`),
  KEY `idHuerta` (`idHuerta`),
  KEY `idVariedad` (`idVariedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huertaCosecha`
--

LOCK TABLES `huertaCosecha` WRITE;
/*!40000 ALTER TABLE `huertaCosecha` DISABLE KEYS */;
INSERT INTO `huertaCosecha` VALUES ('COS_63737742ccf45',7,5,'2022-11-15',600),('COS_63737742ccf45',7,10,'2022-11-15',400),('COS_63737742ccf45',7,15,'2022-11-15',150);
/*!40000 ALTER TABLE `huertaCosecha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huertaCultivo`
--

DROP TABLE IF EXISTS `huertaCultivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `huertaCultivo` (
  `idCultivo` varchar(64) NOT NULL,
  `idHuerta` int NOT NULL,
  `idVariedad` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidadPlantada` int NOT NULL,
  `estadoCultivo` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `metaCantidad` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCultivo`,`idHuerta`,`idVariedad`),
  KEY `idHuerta` (`idHuerta`),
  KEY `idVariedad` (`idVariedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huertaCultivo`
--

LOCK TABLES `huertaCultivo` WRITE;
/*!40000 ALTER TABLE `huertaCultivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `huertaCultivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `infoVariedad`
--

DROP TABLE IF EXISTS `infoVariedad`;
/*!50001 DROP VIEW IF EXISTS `infoVariedad`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `infoVariedad` AS SELECT 
 1 AS `idVariedad`,
 1 AS `idHortaliza`,
 1 AS `nombre`,
 1 AS `unidad`,
 1 AS `tGerminacion`,
 1 AS `tCosecha`,
 1 AS `mesInicio`,
 1 AS `mesFin`,
 1 AS `precio`,
 1 AS `descuento`,
 1 AS `imgUrl`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `listaClientes`
--

DROP TABLE IF EXISTS `listaClientes`;
/*!50001 DROP VIEW IF EXISTS `listaClientes`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `listaClientes` AS SELECT 
 1 AS `idCliente`,
 1 AS `nombreCliente`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pedidoTraslado`
--

DROP TABLE IF EXISTS `pedidoTraslado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidoTraslado` (
  `idTraslado` int NOT NULL,
  `numPedido` varchar(52) NOT NULL,
  PRIMARY KEY (`idTraslado`,`numPedido`),
  KEY `numPedido` (`numPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidoTraslado`
--

LOCK TABLES `pedidoTraslado` WRITE;
/*!40000 ALTER TABLE `pedidoTraslado` DISABLE KEYS */;
INSERT INTO `pedidoTraslado` VALUES (1,'P_6372a18905d72'),(1,'P_6372a1e657ae7'),(3,'P_63735ec6c5e84'),(3,'P_63735f79995e9'),(2,'P_6373607d06734'),(3,'P_63736128a03dd'),(2,'P_6373618429ac8');
/*!40000 ALTER TABLE `pedidoTraslado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidoVariedad`
--

DROP TABLE IF EXISTS `pedidoVariedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidoVariedad` (
  `idVariedad` int NOT NULL,
  `numPedido` varchar(52) NOT NULL,
  `cantidad` int NOT NULL,
  PRIMARY KEY (`idVariedad`,`numPedido`),
  KEY `numPedido` (`numPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidoVariedad`
--

LOCK TABLES `pedidoVariedad` WRITE;
/*!40000 ALTER TABLE `pedidoVariedad` DISABLE KEYS */;
INSERT INTO `pedidoVariedad` VALUES (1,'P_6372e4b4b6abd',4),(1,'P_637360aa7fa32',3),(3,'P_6375c1423174d',3),(4,'P_6372a18905d72',5),(4,'P_6372e378b8766',3),(4,'P_63735ec6c5e84',4),(4,'P_63735fca14ea5',4),(4,'P_6373618429ac8',5),(4,'P_6373aad888f20',3),(6,'P_6372a18905d72',3),(6,'P_6373618429ac8',4),(6,'P_6375c1423174d',4),(7,'P_6372e4b4b6abd',3),(7,'P_63735f3b6f1ac',3),(8,'P_6372e378b8766',3),(8,'P_6373aad888f20',4),(9,'P_63735f79995e9',3),(9,'P_63736128a03dd',5),(10,'P_6373607d06734',3),(10,'P_637360aa7fa32',5),(11,'P_63735ec6c5e84',3),(13,'P_63735f79995e9',3),(13,'P_6373607d06734',3),(14,'P_6372a1e657ae7',3),(14,'P_6372e378b8766',4),(14,'P_63735f3b6f1ac',4),(14,'P_63735f79995e9',2),(14,'P_6373cfe1f0721',4),(15,'P_6372a1e657ae7',4),(15,'P_6372e4b4b6abd',4),(15,'P_63735f3b6f1ac',5),(15,'P_6375c1423174d',2),(16,'P_63735ec6c5e84',3),(16,'P_63736128a03dd',5);
/*!40000 ALTER TABLE `pedidoVariedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `productosPedido`
--

DROP TABLE IF EXISTS `productosPedido`;
/*!50001 DROP VIEW IF EXISTS `productosPedido`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `productosPedido` AS SELECT 
 1 AS `numPedido`,
 1 AS `nombre`,
 1 AS `nombreVariedad`,
 1 AS `cantidad`,
 1 AS `precio`,
 1 AS `SUBTOTAL`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `totalCooperativa`
--

DROP TABLE IF EXISTS `totalCooperativa`;
/*!50001 DROP VIEW IF EXISTS `totalCooperativa`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `totalCooperativa` AS SELECT 
 1 AS `idHuerta`,
 1 AS `idVariedad`,
 1 AS `subTotal`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `infoVariedad`
--

/*!50001 DROP VIEW IF EXISTS `infoVariedad`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`omnitus`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `infoVariedad` AS select `Variedad`.`idVariedad` AS `idVariedad`,`Hortaliza`.`idHortaliza` AS `idHortaliza`,concat(`Hortaliza`.`nombre`,' ',ifnull(`Variedad`.`nombreVariedad`,'')) AS `nombre`,`Hortaliza`.`unidad` AS `unidad`,`Hortaliza`.`tGerminacion` AS `tGerminacion`,`Hortaliza`.`tCosecha` AS `tCosecha`,`Hortaliza`.`mesInicio` AS `mesInicio`,`Hortaliza`.`mesFin` AS `mesFin`,`Variedad`.`precio` AS `precio`,`Variedad`.`descuento` AS `descuento`,`Variedad`.`imgUrl` AS `imgUrl` from (`Hortaliza` join `Variedad`) where (`Hortaliza`.`idHortaliza` = `Variedad`.`idHortaliza`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `listaClientes`
--

/*!50001 DROP VIEW IF EXISTS `listaClientes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`omnitus`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `listaClientes` AS select `cWeb`.`idCliente` AS `idCliente`,`cWeb`.`nombre` AS `nombreCliente` from `cWeb` union select `cEmpresa`.`idCliente` AS `idCliente`,`cEmpresa`.`nombreEmpresa` AS `nombreCliente` from `cEmpresa` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `productosPedido`
--

/*!50001 DROP VIEW IF EXISTS `productosPedido`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`omnitus`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `productosPedido` AS select `pedidoVariedad`.`numPedido` AS `numPedido`,`Hortaliza`.`nombre` AS `nombre`,`Variedad`.`nombreVariedad` AS `nombreVariedad`,`pedidoVariedad`.`cantidad` AS `cantidad`,`Variedad`.`precio` AS `precio`,(`Variedad`.`precio` * `pedidoVariedad`.`cantidad`) AS `SUBTOTAL` from (((`pedidoVariedad` join `Hortaliza`) join `Variedad`) join `Pedido`) where ((`pedidoVariedad`.`numPedido` = `Pedido`.`numPedido`) and (`Hortaliza`.`idHortaliza` = `Variedad`.`idHortaliza`) and (`Variedad`.`idVariedad` = `pedidoVariedad`.`idVariedad`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `totalCooperativa`
--

/*!50001 DROP VIEW IF EXISTS `totalCooperativa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`omnitus`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `totalCooperativa` AS select `huertaCosecha`.`idHuerta` AS `idHuerta`,`huertaCosecha`.`idVariedad` AS `idVariedad`,sum(`huertaCosecha`.`cantidadCosecha`) AS `subTotal` from `huertaCosecha` where (month(`huertaCosecha`.`fecha`) = month(curdate())) group by `huertaCosecha`.`idHuerta`,`huertaCosecha`.`idVariedad` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17  4:41:06
