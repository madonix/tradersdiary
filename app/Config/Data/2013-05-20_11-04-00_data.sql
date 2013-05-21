-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tradersdiary
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.04.1

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
-- Dumping data for table `rules`
--

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;
INSERT INTO `rules` VALUES (1,1,'Markt befindet sich, bezogen auf die zu handelnden Zeiteinheit im Trend','','2012-05-13 00:00:00','2012-05-13 00:00:00');
/*!40000 ALTER TABLE `rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'Marktbedingungen','','2012-05-13 00:00:00','2012-05-13 00:00:00'),(2,'Einstiegsregeln','','2012-05-13 00:00:00','2012-05-13 00:00:00'),(3,'Austiegsregeln','','2012-05-13 00:00:00','2012-05-13 00:00:00');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `strategies`
--

LOCK TABLES `strategies` WRITE;
/*!40000 ALTER TABLE `strategies` DISABLE KEYS */;
INSERT INTO `strategies` VALUES (1,1,'UmkehrstÃ¤be in der Bewegung','','2012-05-13 00:00:00','2012-05-13 00:00:00');
/*!40000 ALTER TABLE `strategies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `strategies_rules_orders`
--

LOCK TABLES `strategies_rules_orders` WRITE;
/*!40000 ALTER TABLE `strategies_rules_orders` DISABLE KEYS */;
INSERT INTO `strategies_rules_orders` VALUES (1,1,1,1,'','2012-05-13 00:00:00','2012-05-13 00:00:00');
/*!40000 ALTER TABLE `strategies_rules_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `strategy_categories`
--

LOCK TABLES `strategy_categories` WRITE;
/*!40000 ALTER TABLE `strategy_categories` DISABLE KEYS */;
INSERT INTO `strategy_categories` VALUES (1,'Markttechnik UmkehrstÃ¤be','','2012-05-13 00:00:00','2012-05-13 00:00:00');
/*!40000 ALTER TABLE `strategy_categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-20 11:10:38
