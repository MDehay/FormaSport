-- MySQL dump 10.13  Distrib 5.7.25, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: FormaSport
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Temporary table structure for view `consultation_reunion`
--

DROP TABLE IF EXISTS `consultation_reunion`;
/*!50001 DROP VIEW IF EXISTS `consultation_reunion`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `consultation_reunion` AS SELECT 
 1 AS `UT_MAIL`,
 1 AS `UT_Invite`,
 1 AS `RE_Organisateur`,
 1 AS `RE_Object`,
 1 AS `RE_Description`,
 1 AS `LI_Libelle`,
 1 AS `DR_Date`,
 1 AS `DR_Creneau`,
 1 AS `RE_Fin_Valide`,
 1 AS `ID_DIS`,
 1 AS `DIS_Raison`,
 1 AS `DIS_Choix`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `date_reunion`
--

DROP TABLE IF EXISTS `date_reunion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `date_reunion` (
  `ID_DR` int(8) NOT NULL AUTO_INCREMENT,
  `DR_Date` date NOT NULL,
  `DR_Creneau_Debut` time NOT NULL,
  `DR_Creneau_Fin` time NOT NULL,
  PRIMARY KEY (`ID_DR`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `date_reunion`
--

LOCK TABLES `date_reunion` WRITE;
/*!40000 ALTER TABLE `date_reunion` DISABLE KEYS */;
INSERT INTO `date_reunion` VALUES (1,'2018-11-17','17:10:00','21:00:00'),(2,'2018-12-01','08:10:00','15:00:00'),(3,'2018-10-15','05:00:00','10:00:00'),(4,'2018-10-15','15:00:00','21:00:00'),(5,'2018-11-18','11:01:00','11:11:00'),(6,'2018-11-21','11:11:00','11:11:00'),(7,'2018-11-25','11:11:00','11:11:00'),(8,'2018-11-25','11:01:00','11:01:00'),(9,'2018-12-14','11:11:00','11:11:00'),(10,'2018-12-09','11:01:00','11:11:00'),(11,'2019-04-16','11:11:00','11:11:00'),(12,'2019-04-18','11:11:00','11:11:00'),(13,'2019-04-18','11:11:00','11:11:00'),(14,'2019-05-11','11:11:00','11:11:00'),(15,'2019-05-02','11:11:00','11:11:00'),(16,'2019-05-16','11:11:00','11:11:00'),(17,'2019-05-26','11:11:00','12:12:00'),(18,'2019-05-25','11:11:00','13:13:00'),(19,'2019-05-26','11:11:00','12:12:00'),(20,'2019-05-26','11:11:00','12:12:00'),(21,'2019-05-12','11:11:00','12:12:00'),(22,'2019-05-12','11:11:00','12:12:00'),(23,'2019-05-18','11:11:00','11:11:00'),(24,'2019-05-05','11:01:00','11:11:00'),(25,'2019-05-17','11:11:00','11:11:00'),(26,'2019-05-10','11:11:00','11:11:00'),(27,'2019-05-03','11:11:00','11:11:00'),(28,'2019-05-04','11:11:00','11:11:00'),(29,'2019-05-26','11:11:00','11:11:00'),(30,'2019-05-03','11:11:00','11:11:00'),(31,'2019-05-03','11:11:00','11:11:00'),(32,'2019-05-03','11:01:00','11:11:00'),(33,'2019-05-04','11:11:00','11:11:00'),(34,'2019-05-11','11:11:00','11:11:00'),(35,'2019-05-26','11:11:00','11:11:00'),(36,'2019-05-31','11:11:00','11:11:00'),(37,'2019-05-25','11:11:00','11:11:00'),(38,'2019-05-26','11:11:00','11:11:00');
/*!40000 ALTER TABLE `date_reunion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disponible`
--

DROP TABLE IF EXISTS `disponible`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disponible` (
  `ID_DIS` int(8) NOT NULL AUTO_INCREMENT,
  `DIS_Choix` int(1) DEFAULT '0',
  `DIS_Raison` varchar(20) DEFAULT 'AucunRaison',
  `DIS_Priorité` int(1) NOT NULL DEFAULT '0',
  `FK_UT` varchar(50) DEFAULT NULL,
  `FK_RE` int(8) DEFAULT NULL,
  `FK_DR` int(8) NOT NULL,
  PRIMARY KEY (`ID_DIS`),
  KEY `FK_DR` (`FK_DR`),
  KEY `FK_UT` (`FK_UT`),
  KEY `FK_RE` (`FK_RE`),
  CONSTRAINT `Disponible_ibfk_1` FOREIGN KEY (`FK_DR`) REFERENCES `date_reunion` (`ID_DR`),
  CONSTRAINT `Disponible_ibfk_2` FOREIGN KEY (`FK_UT`) REFERENCES `utilisateur` (`UT_MAIL`),
  CONSTRAINT `Disponible_ibfk_3` FOREIGN KEY (`FK_RE`) REFERENCES `reunion` (`ID_RE`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disponible`
--

LOCK TABLES `disponible` WRITE;
/*!40000 ALTER TABLE `disponible` DISABLE KEYS */;
INSERT INTO `disponible` VALUES (2,1,'PasDeReponse',0,'User1@user1.com',1,2),(3,0,'AucunRaison',0,'User1@user1.com',2,4),(4,1,'AucunRaison',0,'User1@user1.com',2,4),(5,2,'PasDeReponse',0,'User1@user1.com',1,2),(6,2,'AucunRaison',0,'User1@user1.com',2,4),(9,2,'AucunRaison',0,'User1@user1.com',2,4),(22,2,'Disponible',0,'Directeur1@directeur1.com',1,4),(24,0,'AucunRaison',0,'Directeur1@directeur1.com',3,1),(25,0,'AucunRaison',0,'Directeur1@directeur1.com',3,2),(26,0,'AucunRaison',0,'Directeur1@directeur1.com',3,2),(27,0,'AucunRaison',0,'Directeur1@directeur1.com',4,3),(29,0,'AucunRaison',0,'Directeur1@directeur1.com',4,4),(30,0,'AucunRaison',0,'Directeur1@directeur1.com',5,4),(31,0,'AucunRaison',0,'Formateur1@formateur1.com',10,11),(32,0,'AucunRaison',0,'Formateur1@formateur1.com',11,12),(33,0,'AucunRaison',0,'Formateur1@formateur1.com',12,13),(34,0,'AucunRaison',0,'Formateur1@formateur1.com',13,14),(35,0,'AucunRaison',0,'Formateur1@formateur1.com',14,15),(36,0,'AucunRaison',0,'Directeur1@directeur1.com',15,16),(37,0,'AucunRaison',0,'Directeur1@directeur1.com',16,17),(38,0,'AucunRaison',0,'Directeur1@directeur1.com',17,18),(39,0,'AucunRaison',0,'Directeur1@directeur1.com',18,19),(40,0,'AucunRaison',0,'Directeur1@directeur1.com',19,20),(41,0,'AucunRaison',0,'Directeur1@directeur1.com',20,21),(42,0,'AucunRaison',0,'Directeur1@directeur1.com',21,22),(43,0,'AucunRaison',0,'Directeur1@directeur1.com',22,23),(44,0,'AucunRaison',0,'Formateur1@formateur1.com',23,24),(45,0,'AucunRaison',0,'Directeur1@directeur1.com',24,25),(46,0,'AucunRaison',0,'User1@user1.com',25,26),(47,0,'AucunRaison',1,'Directeur1@directeur1.com',25,26),(48,0,'AucunRaison',0,'Formateur1@formateur1.com',26,27),(49,0,'AucunRaison',1,'Directeur1@directeur1.com',27,28),(50,0,'AucunRaison',1,'User1@user1.com',28,29),(51,0,'AucunRaison',0,'Directeur1@directeur1.com',29,30),(52,0,'AucunRaison',1,'Directeur1@directeur1.com',29,30),(53,0,'AucunRaison',0,'Directeur1@directeur1.com',30,31),(54,0,'AucunRaison',1,'Directeur1@directeur1.com',30,31),(55,0,'AucunRaison',0,'Formateur1@formateur1.com',31,32),(56,0,'AucunRaison',1,'Formateur1@formateur1.com',31,32),(57,0,'AucunRaison',0,'Formateur1@formateur1.com',32,33),(58,0,'AucunRaison',0,'Directeur1@directeur1.com',32,33),(59,0,'AucunRaison',1,'Formateur1@formateur1.com',32,33),(60,0,'AucunRaison',0,'Directeur1@directeur1.com',33,34),(61,0,'AucunRaison',1,'Directeur1@directeur1.com',33,34),(62,0,'AucunRaison',1,'Directeur1@directeur1.com',34,35),(63,0,'AucunRaison',0,'Directeur1@directeur1.com',35,36),(64,0,'AucunRaison',1,'Directeur1@directeur1.com',35,36),(65,0,'AucunRaison',0,'Formateur1@formateur1.com',36,37),(66,0,'AucunRaison',0,'Directeur1@directeur1.com',37,38);
/*!40000 ALTER TABLE `disponible` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `path` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `duree` int(11) NOT NULL,
  `periode_debut` varchar(15) NOT NULL,
  `periode_fin` varchar(15) NOT NULL,
  `nbParticipant` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formation`
--

LOCK TABLES `formation` WRITE;
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` VALUES (3,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.png','image',11,'Janvier','Mars',11),(4,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.png','image',11,'Janvier','Mars',11),(5,'sd','http://192.168.1.50/ppe4_final/model/img/mini/fate.jpeg','image',11,'Janvier','Janvier',11),(6,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Fevrier',11),(8,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(9,'test','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Fevrier',11),(10,'test','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Fevrier',11),(11,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Janvier',11),(12,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Janvier',11),(16,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(17,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Mars',11),(18,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Mars',11),(19,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Mars',11),(20,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(21,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(22,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Mars','Fevrier',11),(23,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Fevrier',11),(24,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Avril',11),(25,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Avril',11),(26,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(27,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Mars',11),(28,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Mars',11),(29,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.jpeg','image',11,'Fevrier','Mars',11),(30,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.jpeg','image',11,'Fevrier','Mars',11),(31,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.jpeg','image',11,'Fevrier','Mars',11),(32,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Janvier',11),(33,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Fevrier',11),(34,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(35,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Mars',11),(36,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Fevrier',11),(37,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Mars',11),(38,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Avril',11),(39,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Fevrier','Avril',11),(40,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.jpeg','image',11,'Fevrier','Avril',11),(41,'ss','http://192.168.1.50/ppe4_final/model/img/mini/sss.jpeg','image',11,'Janvier','Mai',11),(42,'ss','http://192.168.1.50/ppe4_final/model/img/mini/téléchargement.jpeg','image',11,'Janvier','Mars',11);
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `historiereunion`
--

DROP TABLE IF EXISTS `historiereunion`;
/*!50001 DROP VIEW IF EXISTS `historiereunion`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `historiereunion` AS SELECT 
 1 AS `NumeroReunion`,
 1 AS `Organisateur`,
 1 AS `ObjectReunion`,
 1 AS `Description`,
 1 AS `LieuReunion`,
 1 AS `JourReunion`,
 1 AS `DateDebutReunion`,
 1 AS `DateFinReunion`,
 1 AS `FinValidation`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lieu` (
  `ID_LI` int(8) NOT NULL AUTO_INCREMENT,
  `LI_Libelle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_LI`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lieu`
--

LOCK TABLES `lieu` WRITE;
/*!40000 ALTER TABLE `lieu` DISABLE KEYS */;
INSERT INTO `lieu` VALUES (1,'Lille - Salle Valour'),(2,'Lille - Salle Valour'),(3,'Valencienne - Salle des fêtes '),(4,'Valencienne - Salle des fêtes '),(5,'Valenciennes-Salle commune');
/*!40000 ALTER TABLE `lieu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `reponsevote`
--

DROP TABLE IF EXISTS `reponsevote`;
/*!50001 DROP VIEW IF EXISTS `reponsevote`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `reponsevote` AS SELECT 
 1 AS `Organisateur`,
 1 AS `ObjectReunion`,
 1 AS `Description`,
 1 AS `NumeroReunion`,
 1 AS `NumeroHorraire`,
 1 AS `UsersReunion`,
 1 AS `FinValidationVote`,
 1 AS `LieuReunion`,
 1 AS `Date_Reunion`,
 1 AS `DebutReunion`,
 1 AS `FinReunion`,
 1 AS `TotalVote`,
 1 AS `PasVote`,
 1 AS `Disponible`,
 1 AS `PasDisponible`,
 1 AS `PasDisponiblePriorité`,
 1 AS `DisponiblePriorite`,
 1 AS `DisponibleInviter`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `reunion`
--

DROP TABLE IF EXISTS `reunion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reunion` (
  `ID_RE` int(8) NOT NULL AUTO_INCREMENT,
  `RE_Organisateur` varchar(50) DEFAULT NULL,
  `RE_Object` varchar(200) DEFAULT NULL,
  `RE_Description` varchar(200) DEFAULT NULL,
  `RE_Fin_Valide` date DEFAULT NULL,
  `FK_LI` int(8) DEFAULT NULL,
  PRIMARY KEY (`ID_RE`),
  KEY `Reunion_ibfk_1` (`FK_LI`),
  CONSTRAINT `Reunion_ibfk_1` FOREIGN KEY (`FK_LI`) REFERENCES `lieu` (`ID_LI`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reunion`
--

LOCK TABLES `reunion` WRITE;
/*!40000 ALTER TABLE `reunion` DISABLE KEYS */;
INSERT INTO `reunion` VALUES (1,'Formateur1@formateur1.com','Reunion Velo','velo x.2','2018-10-24',1),(2,'Formateur1@formateur1.com','Reunion voiture','voiture','2018-10-08',2),(3,'Directeur1@directeur1.com','Reunion sur TPMP','Jean pierre coffe ','2018-11-13',4),(4,'Directeur1@directeur1.com','cc','cc','2018-10-05',3),(5,'Directeur1@directeur1.com','aa','aa','2018-11-06',2),(6,'Directeur1@directeur1.com','ss','ss','2018-11-12',4),(7,'Directeur1@directeur1.com','aa','dd','2018-11-08',3),(8,'Directeur1@directeur1.com','aa','aa','2018-12-01',1),(9,'Directeur1@directeur1.com','test','test','2018-12-08',1),(10,'Directeur1@directeur1.com','Reunion h','image','2019-04-09',1),(11,'Directeur1@directeur1.com','Reunion h','image','2019-04-09',2),(12,'Directeur1@directeur1.com','Reunion h','image','2019-04-04',2),(13,NULL,'Reunion h','image','2019-05-11',1),(14,'Directeur1@directeur1.com',NULL,NULL,'2019-05-01',NULL),(15,'Directeur1@directeur1.com',NULL,NULL,'2019-05-03',NULL),(16,'Directeur1@directeur1.com',NULL,NULL,'2019-05-04',NULL),(17,'Directeur1@directeur1.com',NULL,NULL,'2019-05-01',NULL),(18,'Directeur1@directeur1.com',NULL,NULL,'2019-05-01',NULL),(19,'Directeur1@directeur1.com',NULL,NULL,'2019-05-01',NULL),(20,'Directeur1@directeur1.com','Reunion s','image','2019-05-01',1),(21,'Directeur1@directeur1.com','Reunion s','image','2019-05-01',1),(22,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',3),(23,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',3),(24,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',3),(25,'Directeur1@directeur1.com','Reunion h','image','2019-05-07',1),(26,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',1),(27,'Directeur1@directeur1.com','Reunion h','zz','2019-05-01',1),(28,'Directeur1@directeur1.com','Reunion h','image','2019-05-24',3),(29,'Directeur1@directeur1.com','Reunion h','111','2019-05-01',3),(30,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',5),(31,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',1),(32,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',1),(33,'Directeur1@directeur1.com','Reunion h','image','2019-05-01',1),(34,'Directeur1@directeur1.com','Reunion h','image','2019-05-20',1),(35,'Directeur1@directeur1.com','Reunion h','image','2019-05-24',1),(36,'Formateur1@formateur1.com','Reunion test','reunion','2019-05-20',1),(37,'Directeur1@directeur1.com','Reunion h','image','2019-05-20',3);
/*!40000 ALTER TABLE `reunion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reunion_valide`
--

DROP TABLE IF EXISTS `reunion_valide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reunion_valide` (
  `ID_RV` int(8) NOT NULL AUTO_INCREMENT,
  `FK_RE` int(8) NOT NULL,
  `FK_DR` int(8) NOT NULL,
  PRIMARY KEY (`ID_RV`),
  KEY `FK_DR` (`FK_DR`),
  KEY `FK_RE` (`FK_RE`),
  CONSTRAINT `Reunion_Valide_ibfk_1` FOREIGN KEY (`FK_DR`) REFERENCES `date_reunion` (`ID_DR`),
  CONSTRAINT `Reunion_Valide_ibfk_2` FOREIGN KEY (`FK_RE`) REFERENCES `reunion` (`ID_RE`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reunion_valide`
--

LOCK TABLES `reunion_valide` WRITE;
/*!40000 ALTER TABLE `reunion_valide` DISABLE KEYS */;
INSERT INTO `reunion_valide` VALUES (10,9,10),(11,9,10),(12,3,1),(13,11,12),(14,12,13),(15,3,1);
/*!40000 ALTER TABLE `reunion_valide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_compte`
--

DROP TABLE IF EXISTS `type_compte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_compte` (
  `ID_TC` int(8) NOT NULL AUTO_INCREMENT,
  `TC_Grade` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_TC`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_compte`
--

LOCK TABLES `type_compte` WRITE;
/*!40000 ALTER TABLE `type_compte` DISABLE KEYS */;
INSERT INTO `type_compte` VALUES (1,'Utilisateur'),(2,'Formateur'),(3,'Directeur');
/*!40000 ALTER TABLE `type_compte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `UT_MAIL` varchar(50) NOT NULL,
  `UT_NDC` varchar(20) DEFAULT NULL,
  `UT_MDP` varchar(20) DEFAULT NULL,
  `UT_Nom` varchar(20) NOT NULL,
  `UT_Prenom` varchar(20) NOT NULL,
  `UT_Numero` int(10) DEFAULT NULL,
  `FK_TC` int(8) DEFAULT NULL,
  PRIMARY KEY (`UT_MAIL`),
  KEY `FK_TC` (`FK_TC`),
  CONSTRAINT `Utilisateur_ibfk_1` FOREIGN KEY (`FK_TC`) REFERENCES `type_compte` (`ID_TC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES ('Directeur1@directeur1.com','Directeur1','Directeur1','Didier','Deschamps',325142526,3),('Formateur1@formateur1.com','Formateur1','Formateur1','Maxime','Dehay',326154826,2),('User1@user1.com','User1','User1','Jack','Black',326594815,1);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `voirparticipant`
--

DROP TABLE IF EXISTS `voirparticipant`;
/*!50001 DROP VIEW IF EXISTS `voirparticipant`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `voirparticipant` AS SELECT 
 1 AS `Nom`,
 1 AS `Numero`,
 1 AS `Reunion`,
 1 AS `DateReunion`,
 1 AS `Prenom`,
 1 AS `Grade`,
 1 AS `Vote`,
 1 AS `Raison`,
 1 AS `Priorité`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `consultation_reunion`
--

/*!50001 DROP VIEW IF EXISTS `consultation_reunion`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `consultation_reunion` AS select `disponible`.`FK_UT` AS `UT_MAIL`,concat(`utilisateur`.`UT_Nom`,' ',`utilisateur`.`UT_Prenom`) AS `UT_Invite`,`reunion`.`RE_Organisateur` AS `RE_Organisateur`,`reunion`.`RE_Object` AS `RE_Object`,`reunion`.`RE_Description` AS `RE_Description`,`lieu`.`LI_Libelle` AS `LI_Libelle`,`date_reunion`.`DR_Date` AS `DR_Date`,concat(`date_reunion`.`DR_Creneau_Debut`,'-',`date_reunion`.`DR_Creneau_Fin`) AS `DR_Creneau`,`reunion`.`RE_Fin_Valide` AS `RE_Fin_Valide`,`disponible`.`ID_DIS` AS `ID_DIS`,`disponible`.`DIS_Raison` AS `DIS_Raison`,(case when (`disponible`.`DIS_Choix` = 0) then 'aucun vote' when (`disponible`.`DIS_Choix` = 1) then 'disponible' else 'indisponible' end) AS `DIS_Choix` from ((((`disponible` join `date_reunion` on((`date_reunion`.`ID_DR` = `disponible`.`FK_DR`))) join `reunion` on((`reunion`.`ID_RE` = `disponible`.`FK_RE`))) join `utilisateur` on((`utilisateur`.`UT_MAIL` = `disponible`.`FK_UT`))) join `lieu` on((`lieu`.`ID_LI` = `reunion`.`FK_LI`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `historiereunion`
--

/*!50001 DROP VIEW IF EXISTS `historiereunion`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `historiereunion` AS select `reunion`.`ID_RE` AS `NumeroReunion`,`reunion`.`RE_Organisateur` AS `Organisateur`,`reunion`.`RE_Object` AS `ObjectReunion`,`reunion`.`RE_Description` AS `Description`,`lieu`.`LI_Libelle` AS `LieuReunion`,`date_reunion`.`DR_Date` AS `JourReunion`,`date_reunion`.`DR_Creneau_Debut` AS `DateDebutReunion`,`date_reunion`.`DR_Creneau_Fin` AS `DateFinReunion`,`reunion`.`RE_Fin_Valide` AS `FinValidation` from (((`reunion_valide` join `reunion` on((`reunion_valide`.`FK_RE` = `reunion`.`ID_RE`))) join `date_reunion` on((`reunion_valide`.`FK_DR` = `date_reunion`.`ID_DR`))) join `lieu` on((`reunion`.`FK_LI` = `lieu`.`ID_LI`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `reponsevote`
--

/*!50001 DROP VIEW IF EXISTS `reponsevote`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reponsevote` AS select `reunion`.`RE_Organisateur` AS `Organisateur`,`reunion`.`RE_Object` AS `ObjectReunion`,`reunion`.`RE_Description` AS `Description`,`disponible`.`FK_RE` AS `NumeroReunion`,`disponible`.`FK_DR` AS `NumeroHorraire`,`disponible`.`FK_UT` AS `UsersReunion`,`reunion`.`RE_Fin_Valide` AS `FinValidationVote`,`lieu`.`LI_Libelle` AS `LieuReunion`,`date_reunion`.`DR_Date` AS `Date_Reunion`,`date_reunion`.`DR_Creneau_Debut` AS `DebutReunion`,`date_reunion`.`DR_Creneau_Fin` AS `FinReunion`,count(`disponible`.`DIS_Choix`) AS `TotalVote`,count((case `disponible`.`DIS_Choix` when 0 then 1 else NULL end)) AS `PasVote`,count((case `disponible`.`DIS_Choix` when 1 then 1 else NULL end)) AS `Disponible`,count((case `disponible`.`DIS_Choix` when 2 then 1 else NULL end)) AS `PasDisponible`,count((case `disponible`.`DIS_Choix` when 2 then (case `disponible`.`DIS_Priorité` when 1 then 1 else NULL end) else NULL end)) AS `PasDisponiblePriorité`,count((case `disponible`.`DIS_Choix` when 1 then (case `disponible`.`DIS_Priorité` when 1 then 1 else NULL end) else NULL end)) AS `DisponiblePriorite`,count((case `disponible`.`DIS_Choix` when 1 then (case `disponible`.`DIS_Priorité` when 0 then 0 else NULL end) else NULL end)) AS `DisponibleInviter` from (((`disponible` join `reunion` on((`disponible`.`FK_RE` = `reunion`.`ID_RE`))) join `lieu` on((`reunion`.`FK_LI` = `lieu`.`ID_LI`))) join `date_reunion` on((`disponible`.`FK_DR` = `date_reunion`.`ID_DR`))) group by `disponible`.`FK_RE`,`disponible`.`FK_DR`,`disponible`.`FK_UT` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `voirparticipant`
--

/*!50001 DROP VIEW IF EXISTS `voirparticipant`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `voirparticipant` AS select `utilisateur`.`UT_Nom` AS `Nom`,`utilisateur`.`UT_Numero` AS `Numero`,`disponible`.`FK_RE` AS `Reunion`,`disponible`.`FK_DR` AS `DateReunion`,`utilisateur`.`UT_Prenom` AS `Prenom`,`type_compte`.`TC_Grade` AS `Grade`,(case `disponible`.`DIS_Choix` when 0 then 'PasVote' when 1 then 'Disponible' when 2 then 'PasDisponible' end) AS `Vote`,`disponible`.`DIS_Raison` AS `Raison`,if((`disponible`.`DIS_Priorité` = 1),'priorité','Simple') AS `Priorité` from ((`disponible` join `utilisateur` on((`disponible`.`FK_UT` = `utilisateur`.`UT_MAIL`))) join `type_compte` on((`utilisateur`.`FK_TC` = `type_compte`.`ID_TC`))) */;
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

-- Dump completed on 2019-05-19 22:03:43
