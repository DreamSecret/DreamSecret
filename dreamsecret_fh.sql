-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: dreamsecret_fh
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization` varchar(45) NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `codename` varchar(45) NOT NULL,
  `display_picture` longtext NOT NULL,
  `address` mediumtext NOT NULL,
  `municipality` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'DreamSecret','Ray Vincent Phillip','Villaver','Pelp','display_picture','Makati City','Makati','pelp'),(2,'iooihui','hio','uhoi','hio','','iuhiou','iuhiouh','uiuhoihoi'),(3,'SampleOrg','SampleFirst','SampleLast','SampleCode','','CompleteAddress','Municipality','1234');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `problem_id` int(11) DEFAULT NULL,
  `resolved_problem_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `comment` longtext NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,1,4,NULL,'','gana na psss','2016-08-28 09:26:38'),(2,1,4,NULL,'','one more','2016-08-28 09:30:50'),(3,1,4,NULL,'','hoy','2016-08-28 09:36:20'),(4,1,4,NULL,'','hoy','2016-08-28 09:38:51');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(80) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `name_place` mediumtext NOT NULL,
  `nearby_landmarks` mediumtext,
  `photo` longtext NOT NULL,
  `photo_date` date NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problem`
--

LOCK TABLES `problem` WRITE;
/*!40000 ALTER TABLE `problem` DISABLE KEYS */;
INSERT INTO `problem` VALUES (1,'cat','oca','','loca','near','','1992-02-21','2016-08-28 01:36:32',0),(2,'categ','location','descrip','location','nearb','','2012-09-09','2016-08-28 02:13:56',0),(3,'Sample Category','Sample Locatoin','Sample Description','Sample Locatoin','Nearby LAndmark','','1995-09-29','2016-08-28 02:18:23',0),(4,'Category1','Location1','Description1','Location1','Nearby1','','1995-06-03','2016-08-28 03:07:17',1),(5,'CategorySample','LocationSample','DescriptionSample','LocationSample','NearbySample','','1995-02-02','2016-08-28 06:55:28',1),(6,'DOTA Problem','G1','May manlalaro dito na kapag minus -25 mmr sya, magpuputol sya ng puno.','G1','Sogo','','2014-01-01','2016-08-28 08:20:40',1),(7,'qweqwe','qweqew','qewweqw','qweqew','qweweqw','','2016-08-19','2016-08-28 10:59:17',0),(8,'qweqwe','qweqew','qewweqw','qweqew','qweweqw','2x2.jpg','2016-08-19','2016-08-28 10:59:38',0),(9,'qweqwe','qweqew','qewweqw','qweqew','qweweqw','2x2.jpg','2016-08-19','2016-08-28 11:00:35',1),(10,'this is a test','test','this is a test','test','testtesteron ','','2016-08-24','2016-08-28 11:01:29',1);
/*!40000 ALTER TABLE `problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resolved_problem`
--

DROP TABLE IF EXISTS `resolved_problem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resolved_problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` longtext NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `photo_date` datetime NOT NULL,
  `problem_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resolved_problem`
--

LOCK TABLES `resolved_problem` WRITE;
/*!40000 ALTER TABLE `resolved_problem` DISABLE KEYS */;
/*!40000 ALTER TABLE `resolved_problem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_uploads`
--

DROP TABLE IF EXISTS `tbl_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_uploads`
--

LOCK TABLES `tbl_uploads` WRITE;
/*!40000 ALTER TABLE `tbl_uploads` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_uploads` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-28 12:43:05
