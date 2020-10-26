CREATE DATABASE  IF NOT EXISTS `fullstackeletro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fullstackeletro`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	5.7.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `precoantigo` decimal(8,2) NOT NULL,
  `precoatual` decimal(8,2) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'geladeira','Geladeira Brastemp Frost Free 2 portas 540 litros',6389.00,5019.00,'IMAGENS/geladeira-brastemp-2postas.jpeg'),(2,'geladeira','Geladeira Samsung Black Inox 400 litros',5389.00,4389.00,'IMAGENS/geladeirasamsung.jpeg'),(3,'geladeira','Geladeira Frost Free Electrolux 433 litros',5089.00,4830.00,'IMAGENS/geladeira-inox.jpeg'),(4,'fogao','Fogão Electrolux 4 bocas',689.00,530.00,'IMAGENS/fogaoeletrolux.jpeg'),(5,'fogao','Fogão Brastemp Grill Inox 4 bocas',729.00,670.00,'IMAGENS/fogao-brastemp.png'),(6,'lava loucas',' Lava Louças Eletrolux 4 funções',1729.00,1670.00,'IMAGENS/lavalouca-eletrolux.jpeg'),(7,'lava roupas','Lava Roupas Brastemp 15kg',1729.00,1430.00,'IMAGENS/maquinadelavar.jpeg'),(8,'lava roupas','Lava & Seca Panasonic 15kg',3729.00,3130.00,'IMAGENS/lavadora-panasonic.png'),(9,'microondas','Microondas Panasonic Inox com função Grill',789.00,630.00,'IMAGENS/microondas-panasonic.jpg'),(10,'microondas','Microondas Philco Vidro Espelhado',989.00,730.00,'IMAGENS/microondas-philco.png'),(11,'microondas','Microondas Panasonic Preto Vidro Temperado',689.00,590.00,'IMAGENS/microondas_panasonic_preto.jpeg'),(12,'lava loucas',' Lava Louça Electrolux 14 serviços',4349.00,4000.00,'IMAGENS/lava-louca-electrolux-14 servicos.jpeg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26 18:14:45
