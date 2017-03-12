-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: osddevelopers
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.10.1

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
-- Table structure for table `auth_tokens`
--

DROP TABLE IF EXISTS `auth_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` char(64) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `expires` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_tokens`
--

LOCK TABLES `auth_tokens` WRITE;
/*!40000 ALTER TABLE `auth_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_forums__sectionid` (`sectionid`),
  CONSTRAINT `fk_forums__sectionid` FOREIGN KEY (`sectionid`) REFERENCES `sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,1,'First Forum','This is the first forum',0,'2017-03-04 12:43:06',457),(2,1,'First Forum','This is the first forum of Ehab',0,'2017-03-07 12:43:06',790),(3,2,'Yasser Forum','This is the first forum of yasser',0,'2017-03-07 12:43:06',125);
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reactions`
--

DROP TABLE IF EXISTS `reactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reactions`
--

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` VALUES (1,'Like'),(2,'Dislike');
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `threadid` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `replydate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_replies__threadid` (`threadid`),
  KEY `idx_replies__userid` (`userid`),
  CONSTRAINT `fk_replies__threadid` FOREIGN KEY (`threadid`) REFERENCES `threads` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_replies__userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` VALUES (1,1,1,'This is a comment on the first thread','2017-03-04 12:47:36','2017-03-04 12:47:36'),(2,1,2,'This is a comment on the first pinned thread','2017-03-04 12:48:00','2017-03-04 12:48:00');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replyreactions`
--

DROP TABLE IF EXISTS `replyreactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replyreactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reactionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `replyid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_replyreactions__reactionid` (`reactionid`),
  KEY `idx_replyreactions__replyid` (`replyid`),
  KEY `idx_replyreactions__userid` (`userid`),
  CONSTRAINT `fk_replyreactions__reactionid` FOREIGN KEY (`reactionid`) REFERENCES `reactions` (`id`),
  CONSTRAINT `fk_replyreactions__replyid` FOREIGN KEY (`replyid`) REFERENCES `replies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_replyreactions__userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replyreactions`
--

LOCK TABLES `replyreactions` WRITE;
/*!40000 ALTER TABLE `replyreactions` DISABLE KEYS */;
INSERT INTO `replyreactions` VALUES (1,1,1,1),(2,1,1,2);
/*!40000 ALTER TABLE `replyreactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin'),(2,'User');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'General Section','This is the general section',0,'2017-03-04 12:41:49'),(2,'Yasser Section','This is the general section of yasser',0,'2017-03-07 12:41:49'),(3,'testdesc','testdescdesc',0,'2017-03-10 12:58:17'),(4,'testdesc','testdescdesc',0,'2017-03-10 12:58:17');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sysconfigs`
--

DROP TABLE IF EXISTS `sysconfigs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sysconfigs` (
  `configkey` varchar(255) NOT NULL,
  `configvalue` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sysconfigs`
--

LOCK TABLES `sysconfigs` WRITE;
/*!40000 ALTER TABLE `sysconfigs` DISABLE KEYS */;
INSERT INTO `sysconfigs` VALUES ('active',1);
/*!40000 ALTER TABLE `sysconfigs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threadreactions`
--

DROP TABLE IF EXISTS `threadreactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threadreactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `threadid` int(11) NOT NULL,
  `reactionid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_threadreactions__reactionid` (`reactionid`),
  KEY `idx_threadreactions__threadid` (`threadid`),
  KEY `idx_threadreactions__userid` (`userid`),
  CONSTRAINT `fk_threadreactions__reactionid` FOREIGN KEY (`reactionid`) REFERENCES `reactions` (`id`),
  CONSTRAINT `fk_threadreactions__threadid` FOREIGN KEY (`threadid`) REFERENCES `threads` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_threadreactions__userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threadreactions`
--

LOCK TABLES `threadreactions` WRITE;
/*!40000 ALTER TABLE `threadreactions` DISABLE KEYS */;
INSERT INTO `threadreactions` VALUES (1,1,1,1),(2,1,2,2);
/*!40000 ALTER TABLE `threadreactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `forumid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `postdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `locked` tinyint(1) DEFAULT '0',
  `pinned` tinyint(1) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_threads__forumid` (`forumid`),
  KEY `idx_threads__userid` (`userid`),
  CONSTRAINT `fk_threads__forumid` FOREIGN KEY (`forumid`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_threads__userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threads`
--

LOCK TABLES `threads` WRITE;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` VALUES (1,1,1,'First thread title','This is the content of the first thread','2017-03-04 12:45:23','2017-03-04 12:45:23',0,0,1),(2,1,1,'First pinned thread title','This is the content of the first pinned thread','2017-03-04 12:45:55','2017-03-04 12:45:55',0,1,1);
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('m','f') DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `signature` longtext,
  `regdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `idx_users__roleid` (`roleid`),
  KEY `idx_users__status` (`status`),
  CONSTRAINT `fk_users__roleid` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`),
  CONSTRAINT `fk_users__status` FOREIGN KEY (`status`) REFERENCES `userstatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'admin','admin@localhost.com','Ehab','Gamal','$2y$10$qLVdegE/6e/LrEge5T5NXOJsEeXygJ2ikwTtxai7dfZ6nNmFAqzR2','m','defaultmale.png','Admin Signature',NULL),(2,2,2,'ehab','ehab.g.sh@gmail.com','Ehab','Gamal','$2y$10$6wnyxXFqjqmp3K3Mmd2OiOTQwOjeq4ypYSJlNxBB2vYZ7HxMPruLS','f','defaultmale.png','ehab signature',NULL),(3,2,2,'john','john.doe@gmail.com','John','Doe','$2y$10$m.PE3w6AkM39kIFSxNpDk.ownGG5mExZr33FE.TWrrIlLLQ0kdhAa','m','defaultmale.png',NULL,'2017-03-11 18:31:34'),(5,2,1,'tempuser','temp@local.com','temp','user','$2y$10$tOt2IrK0RmHp4kUFDsLIh.a.hXSZmj/GSFNoN9yRB.D90Ac5561la','m','defaultmale.png','','2017-03-12 11:29:23'),(8,2,1,'linah','lina@gmail.com','linah','ahmed','$2y$10$F/Pb/lQ9ymk76muyv45DBen8g.AddkPmA/GOMzlDn8H60dbr3bbDi','f','defaultfemale.png',NULL,'2017-03-12 18:39:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userstatus`
--

DROP TABLE IF EXISTS `userstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cssclass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userstatus`
--

LOCK TABLES `userstatus` WRITE;
/*!40000 ALTER TABLE `userstatus` DISABLE KEYS */;
INSERT INTO `userstatus` VALUES (1,'Active','success'),(2,'Locked','danger'),(3,'Locked','danger');
/*!40000 ALTER TABLE `userstatus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-12 21:16:38
