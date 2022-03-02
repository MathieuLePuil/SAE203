-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atp_player`
--

DROP TABLE IF EXISTS `atp_player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atp_player` (
  `player_id` int(11) NOT NULL,
  `player_firstname` varchar(20) NOT NULL,
  `player_lastname` varchar(20) NOT NULL,
  `player_nation` varchar(20) NOT NULL,
  `player_age` int(11) NOT NULL,
  `player_height` varchar(5) NOT NULL,
  `player_atprank` int(11) NOT NULL,
  `player_atppoint` int(11) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atp_player`
--

LOCK TABLES `atp_player` WRITE;
/*!40000 ALTER TABLE `atp_player` DISABLE KEYS */;
INSERT INTO `atp_player` VALUES (1,'Daniil','Medvedev','Russie',26,'1,98m',1,8615),(2,'Novak','Djokovic','Serbie',34,'1,88m',2,8465),(3,'Alexander','Zverev','Allemagne',24,'1,98m',3,7515),(4,'Rafael','Nadal','Espagne',35,'1,85m',4,6515),(5,'Stefanos','Tsitsipas','Grèce',23,'1,93m',5,6325),(6,'Matteo','Berrettini','Italie',25,'1,96m',6,4928),(7,'Andrey','Rublev','Russie',24,'1,88m',7,4590),(8,'Casper','Ruud','Norvège',23,'1,83m',8,3915),(9,'Félix','Auger-Aliassime','Canada',21,'1,93m',9,3883),(10,'Jannik','Sinner','Italie',20,'1,88m',10,3495),(11,'Hubert','Hurkacz','Pologne',25,'1,96m',11,3468),(12,'Cameron','Norrie','Grande-Bretagne',26,'1,88m',12,3305),(13,'Denis','Shapovalov','Canada',22,'1,85m',13,3020),(14,'Diego','Schwartzman','Argentine',29,'1,70m',14,2660),(15,'Roberto','Bautista Agut','Espagne',33,'1,83m',15,2480),(16,'Pablo','Carreño Busta','Espagne',30,'1,88m',16,2220),(17,'Reilly','Opelka','Etats-Unis',24,'2,11m',17,2156),(18,'Nikoloz','Basilashvili','Géorgie',30,'1,85m',18,2121),(19,'Carlos','Alcaraz','Espagne',18,'1,85m',19,2056),(20,'Taylor','Fritz','Etats-Unis',24,'1,96m',20,2010),(21,'Lorenzo','Sonego','Italie',26,'1,91m',21,1937),(22,'Aslan','Karatsev','Russie',28,'1,85m',22,1933),(23,'John','Isner','Etats-Unis',36,'2,08m',23,1801),(24,'Marin','?ili?','Croatie',33,'1,98m',24,1785),(25,'Cristian','Garin','Chili',25,'1,85m',25,1716),(26,'Karen','Khachanov','Russie',25,'1,98m',26,1680),(27,'Roger','Federer','Suisse',40,'1,85m',27,1665),(28,'Gaël','Monfils','France',35,'1,93m',28,1633),(29,'Daniel','Evans','Grande-Bretagne',31,'1,75m',29,1542),(30,'Frances','Tiafoe','Etats-Unis',24,'1,88m',30,1463),(31,'Alex','De Minaur','Australie',23,'1,83m',31,1451),(32,'Lloyd','Harris','Afrique du Sud',25,'1,93m',32,1393),(33,'Alexander','Bublik','Kazakhstan',24,'1,96m',33,1391),(34,'Federico','Delbonis','Argentine',31,'1,93m',34,1382),(35,'Grigor','Dimitrov','Bulgarie',30,'1,90m',35,1381),(36,'Fabio','Fognini','Italie',34,'1,78m',36,1359),(37,'Albert','Ramos-Viñolas','Espagne',34,'1,88m',37,1314),(38,'Sebastian','Korda','Etats-Unis',21,'1,96m',38,1289),(39,'Tommy','Paul','Etats-Unis',24,'1,85m',39,1252),(40,'Filip','Krajinovi?','Serbie',30,'1,85m',40,1212),(41,'Ilya','Ivashka','Biélorussie',28,'1,93m',41,1179),(42,'Ugo','Humbert','France',23,'1,88m',42,1178),(43,'Jenson','Brooksby','Etats-Unis',21,'1,93m',43,1153),(44,'Ducan','Lajovic','Serbie',31,'1,83m',44,1126),(45,'Alejandro','Davidovich Fokina','Espagne',22,'1,83m',45,1115),(46,'Kei','Nishikori','Japon',32,'1,78m',46,1110),(47,'Botic','Van de Zandschulp','Pays-Bas',26,'1,91m',47,1096),(48,'Marton','Fucsovics','Hongrie',30,'1,88m',48,1082),(49,'Pedro','Martinez','Espagne',24,'1,83m',49,1072),(50,'Dominic','Thiem','Autriche',28,'1,85m',50,1070);
/*!40000 ALTER TABLE `atp_player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atp_tournament`
--

DROP TABLE IF EXISTS `atp_tournament`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atp_tournament` (
  `tournoi_id` int(11) NOT NULL,
  `tournoi_countrie` varchar(25) NOT NULL,
  `tournoi_city` varchar(25) NOT NULL,
  `tournoi_day` varchar(10) NOT NULL,
  `winner_firstname` varchar(15) NOT NULL,
  `winner_lastname` varchar(15) NOT NULL,
  `tournoi_type` varchar(15) NOT NULL,
  PRIMARY KEY (`tournoi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atp_tournament`
--

LOCK TABLES `atp_tournament` WRITE;
/*!40000 ALTER TABLE `atp_tournament` DISABLE KEYS */;
INSERT INTO `atp_tournament` VALUES (1,'France','Metz','20/09/2021','Hubert','Hurckacz','ATP 250'),(2,'Kazakhstan','NurSultan','20/09/2021','Kwon','Soon-woo','ATP 250'),(3,'Etats-Unis','San Diego','27/09/2021','Casper','Ruud','ATP 250'),(4,'Bulgarie','Sofia','27/09/2021','Jannik','Sinner','ATP 250'),(5,'Etats-Unis','Indian Wells','07/10/2021','Cameron','Norrie','Masters 1000'),(6,'Belgique','Anvers','18/10/2021','Jannik','Sinner','ATP 250'),(7,'Russie','Moscou','18/10/2021','Aslan','Karatsev','ATP 250'),(8,'Autriche','Vienne','25/10/2021','Alexander','Zverev','ATP 500'),(9,'Russie','St-Pétersbourg','25/10/2021','Marin','?ili?','ATP 250'),(10,'France','Paris','01/11/2021','Novak','Djokovic','Masters 1000'),(11,'Suède','Stockholm','07/11/2021','Tommy','Paul','ATP 250'),(12,'Italie','Milan','09/11/2021','Carlos','Alcaraz','Next Gen Finals'),(13,'Italie','Turin','14/11/2021','Alexander','Zverev','Masters'),(14,'Australie','Adelaïde','03/01/2022','Gaël','Monfils','ATP 250'),(15,'Australie','Melbourne','03/01/2022','Rafael','Nadal','ATP 250'),(16,'Australie','Adelaïde','10/01/2022','Thanasi','Kokkinakis','ATP 250'),(17,'Australie','Sydney','10/01/2022','Aslan','Karatsev','ATP 250'),(18,'Australie','Melbourne','17/01/2022','Rafael','Nadal','Grand Chelem'),(19,'Argentine','Cordoba','31/01/2022','Albert','Ramos-Viñolas','ATP 250'),(20,'France','Montpellier','31/01/2022','Alexander','Bublik','ATP 250'),(21,'Inde','Pune','31/01/2022','Joao','Sousa','ATP 250'),(22,'Argentine','Buenos Aires','07/02/2022','Casper','Ruud','ATP 250'),(23,'Etats-Unis','Dallas','07/02/2022','Reilly','Opelka','ATP 250'),(24,'Pays-Bas','Rotterdam','07/02/2022','Félix','Auger-Aliassime','ATP 500'),(25,'Etats-Unis','Delray Beach','14/02/2022','Cameron','Norrie','ATP 250'),(26,'Quatar','Doha','14/02/2022','Roberto','Bautista Agut','ATP 250'),(27,'France','Marseille','14/02/2022','Andrey','Rublev','ATP 250'),(28,'Brésil','Rio de Janeiro','14/02/2022','Carlos','Alcaraz','ATP 500'),(29,'Mexique','Acapulco','21/02/2022','Rafael','Nadal','ATP 500'),(30,'Emirats Arabes Unis','Dubaï','21/02/2022','Andrey','Rublev','ATP 500'),(31,'Chili','Santiago','21/02/2022','Pedro','Martinez','ATP 250');
/*!40000 ALTER TABLE `atp_tournament` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-02 11:34:37
