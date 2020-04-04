-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: umkm_marketplace
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('0r41r7e30t3sfdpjpnqpg957bku0eiua','::1',1584339574,'__ci_last_regenerate|i:1584339574;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('0s6sd113n344smm7vtqreqgqep1ceskt','::1',1584333308,'__ci_last_regenerate|i:1584333308;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('0sqd381f29q4a6e3540hhqrfes1874ts','::1',1584331834,'__ci_last_regenerate|i:1584331834;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('0vbrs6hnaf9vn7iue1i1f3ulju93dqpm','::1',1584538119,'__ci_last_regenerate|i:1584538119;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"f7127d0797317953e000c59e23a0f053a8008baa6d975ea90d89ebe174d4484c6854618be47730766b4d4323c24de82885506a935e6744b46d046d84dc8c5f73cuSZhKMeCrOYDz3gmnvMbpblOzAzzRfi5Q2fP3g9edg=\";LOGGEDIN|b:1;'),('1vl2a5v67allkjpar24g5l1gp8e8kr6e','::1',1584333649,'__ci_last_regenerate|i:1584333649;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('3d4r9puivhfdeg9sjda2md1k4hsrk8rm','::1',1584545024,'__ci_last_regenerate|i:1584545024;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('3f3i20mrlhom2kj9n68kfguajb3jbc0n','::1',1584546509,'__ci_last_regenerate|i:1584546509;USERNAME|s:6:\"diksub\";ROLE_NAME|s:20:\"SYSTEM_ADMINISTRATOR\";ROLES_MENU|a:5:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}i:4;O:8:\"stdClass\":1:{s:9:\"resources\";s:21:\"managament_menu/rules\";}}ID|s:172:\"2d734a431636b9957c9a94419b58a2774783ac701ec8a218224c9d9c5737ab374f0582dc34e637e74f8549d1cb44c895046a7c8c4223a040b0e1a0f454929eb0en36jZIK0GU7C/Y7s/U373PYQOTMJolhIMccKIJzJtI=\";LOGGEDIN|b:1;'),('3uhl3ub04keiqkbp88ik4uuj2ctku2lo','::1',1584337655,'__ci_last_regenerate|i:1584337655;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('5l7gahrku8ecfq5buk05n0cp5ciee33c','::1',1584344869,'__ci_last_regenerate|i:1584344869;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('5rere204jic7g0p7bn7o86tijn8g1337','::1',1584543370,'__ci_last_regenerate|i:1584543370;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('6nk74klfq8i7vuftv8emestmu1gcrcad','::1',1584332981,'__ci_last_regenerate|i:1584332981;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('71r7bu0fas9u87u9eare6qkmu7ord25f','::1',1584337344,'__ci_last_regenerate|i:1584337344;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('8j55lfrnd1dh633okvaonn51q5ksu6et','::1',1584344540,'__ci_last_regenerate|i:1584344540;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('atusrpdu46idikf9aikrn45c5dh51o41','::1',1584339270,'__ci_last_regenerate|i:1584339270;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('b3ia3nh0afivv67jk45mm15ls98olfic','::1',1584331529,'__ci_last_regenerate|i:1584331529;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('c1iikb7hf8741mg73uea4u44hqdd1ahc','::1',1584537813,'__ci_last_regenerate|i:1584537813;USERNAME|s:5:\"GUEST\";ROLE_NAME|s:5:\"GUEST\";'),('d1pmd7qsps6ga5mq2fukrv4ubs8sjklg','::1',1584329955,'__ci_last_regenerate|i:1584329955;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('dl860qsa6g3bag7misnlao28vse1l09k','::1',1584331178,'__ci_last_regenerate|i:1584331178;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('dm0465ud7mht4mmb2ubepnhqnnqg76f1','::1',1584545443,'__ci_last_regenerate|i:1584545443;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('esu3l34d5de2be6t4vn4nnfoebt5d65r','::1',1584540996,'__ci_last_regenerate|i:1584540996;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('hpgb0qliee9sre9t8jsbda3ni0mat9n4','::1',1584332309,'__ci_last_regenerate|i:1584332309;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('hqbptdvmpg2vvak9levrou543iisiu76','::1',1584330478,'__ci_last_regenerate|i:1584330478;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('ia9ocilrcuhc2h7fr31e5ptn2r1qbsom','::1',1584544052,'__ci_last_regenerate|i:1584544052;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('id2ghimioc8ir4gfevm6qudl28ofmokp','::1',1584334047,'__ci_last_regenerate|i:1584334047;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('jmo4edrareea3eq05kk1bpgba83lifio','::1',1584340598,'__ci_last_regenerate|i:1584340598;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('kcvok9udt98hramfmr16vu8fsvffda32','::1',1584338887,'__ci_last_regenerate|i:1584338887;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('kgjog5mt7p4esihket2si85ci8ivhqes','::1',1584339904,'__ci_last_regenerate|i:1584339904;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('kk3dhoe3vc11l0u1bcotn6m7jortv2v5','::1',1584344871,'__ci_last_regenerate|i:1584344869;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('kq3i340bp0jbdnnu8pqfj7a2sq5rgohv','::1',1584330822,'__ci_last_regenerate|i:1584330822;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('ksnmkhaaj53ns3vfat0n3gcqbapgr0iu','::1',1584539667,'__ci_last_regenerate|i:1584539667;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('l3re00n1v896jrhf4e92sfsfqem2v1hv','::1',1584545955,'__ci_last_regenerate|i:1584545955;USERNAME|s:6:\"diksub\";ROLE_NAME|s:20:\"SYSTEM_ADMINISTRATOR\";ROLES_MENU|a:5:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}i:4;O:8:\"stdClass\":1:{s:9:\"resources\";s:21:\"managament_menu/rules\";}}ID|s:172:\"2d734a431636b9957c9a94419b58a2774783ac701ec8a218224c9d9c5737ab374f0582dc34e637e74f8549d1cb44c895046a7c8c4223a040b0e1a0f454929eb0en36jZIK0GU7C/Y7s/U373PYQOTMJolhIMccKIJzJtI=\";LOGGEDIN|b:1;'),('lsf4tue0fi3e5os1fhcfe9le1d0t9ooe','::1',1584338425,'__ci_last_regenerate|i:1584338425;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('m1foffi1jvbn29b1rp5ouu2iu00065h7','::1',1584329651,'__ci_last_regenerate|i:1584329651;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('m3v406uj8slrv1hrtoi2sq3k2o00i97v','::1',1584546510,'__ci_last_regenerate|i:1584546509;USERNAME|s:5:\"GUEST\";ROLE_NAME|s:5:\"GUEST\";ROLES_MENU|a:1:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}}'),('n1o6el25mfbo4fv17bd5m4tmhr62210k','::1',1584543727,'__ci_last_regenerate|i:1584543727;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('p01t147unv1fj2rdmc496qu0jinkfun9','::1',1584539203,'__ci_last_regenerate|i:1584539203;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('sdde01mjhniue7psu2dr8i77u8ej58fo','::1',1584334664,'__ci_last_regenerate|i:1584334664;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('sm5v8mjchecd6shrabai3osp1cilgq70','::1',1584544392,'__ci_last_regenerate|i:1584544392;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"c7ceab1b87c5f61d160e4877629dade5cb4d2fab9bb0d577792905084ede2f6dae0031aa2447b3817393bf3c3448a83b26b19090d083e882c068774e5602b07e5l91knFpdNL5PS5fV2GiJ9ZAuTIXGdgMbX3RtrUj3WM=\";LOGGEDIN|b:1;'),('thaaf0q98sehj1anmicmnm6c116hdjth','::1',1584341045,'__ci_last_regenerate|i:1584341045;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('unk1qmjhhcu0aa7uuf7jrlpfhhdti1k9','::1',1584332656,'__ci_last_regenerate|i:1584332656;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('vbuo55act9s69mttsg3qc8di310h1b66','::1',1584338100,'__ci_last_regenerate|i:1584338100;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;'),('vvk87ufl44iqk665i4o4vh6rmrcv4t4b','::1',1584337036,'__ci_last_regenerate|i:1584337036;USERNAME|s:6:\"diksub\";ROLE_NAME|s:18:\"UMKM_ADMINISTRATOR\";ROLES_MENU|a:4:{i:0;O:8:\"stdClass\":1:{s:9:\"resources\";s:10:\"auth/login\";}i:1;O:8:\"stdClass\":1:{s:9:\"resources\";s:9:\"dashboard\";}i:2;O:8:\"stdClass\":1:{s:9:\"resources\";s:25:\"kelola_data/kelola_produk\";}i:3;O:8:\"stdClass\":1:{s:9:\"resources\";s:12:\"landing_page\";}}ID|s:172:\"b6bd12917e62cd04de3b70cb87db3d972e56fe7aa4562afe14731237d57e1e7f7254a6ba13bf950a3c3b3a3ec0f989ffdf8e684ee0b8629cf0d585dce06d8d2f5wBig4Ciko7fy1YotYXgop4Dx/KuZ2yeHZaLSv8cGJ8=\";LOGGEDIN|b:1;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `count_activity_login`
--

DROP TABLE IF EXISTS `count_activity_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `count_activity_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IPADDRESS` varchar(50) NOT NULL,
  `TIMESTAMPS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `COUNT` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `count_activity_login`
--

LOCK TABLES `count_activity_login` WRITE;
/*!40000 ALTER TABLE `count_activity_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `count_activity_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `ROLE_ID` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'diksub',1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mskategori`
--

DROP TABLE IF EXISTS `mskategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mskategori` (
  `KATEGORI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `KATEGORI` varchar(100) NOT NULL,
  PRIMARY KEY (`KATEGORI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mskategori`
--

LOCK TABLES `mskategori` WRITE;
/*!40000 ALTER TABLE `mskategori` DISABLE KEYS */;
INSERT INTO `mskategori` VALUES (1,'TAS');
/*!40000 ALTER TABLE `mskategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mspassword`
--

DROP TABLE IF EXISTS `mspassword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mspassword` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `PASSWORD` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mspassword`
--

LOCK TABLES `mspassword` WRITE;
/*!40000 ALTER TABLE `mspassword` DISABLE KEYS */;
INSERT INTO `mspassword` VALUES (1,1,'$2y$10$QW7p6YKl.WzTgKugZZ97..UwUYZ8WmPNIZz6EPT/G7g929tprqMJm');
/*!40000 ALTER TABLE `mspassword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msproduk`
--

DROP TABLE IF EXISTS `msproduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msproduk` (
  `ID_PRODUK` int(11) NOT NULL AUTO_INCREMENT,
  `UMKM_ID` int(11) DEFAULT NULL,
  `KATEGORI_ID` int(11) DEFAULT NULL,
  `IS_DELETE` tinyint(4) DEFAULT '0',
  `TIMESTAMPS` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_PRODUK`),
  KEY `KATEGORI_ID` (`KATEGORI_ID`),
  CONSTRAINT `msproduk_ibfk_1` FOREIGN KEY (`KATEGORI_ID`) REFERENCES `mskategori` (`KATEGORI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msproduk`
--

LOCK TABLES `msproduk` WRITE;
/*!40000 ALTER TABLE `msproduk` DISABLE KEYS */;
INSERT INTO `msproduk` VALUES (1,1,1,0,'2020-03-11 04:40:24'),(2,1,1,0,'2020-03-11 04:49:57'),(3,1,1,0,'2020-03-11 04:50:04'),(4,1,1,0,'2020-03-11 04:57:15'),(5,1,1,0,'2020-03-11 05:04:24'),(6,1,1,0,'2020-03-11 05:04:27'),(7,1,1,0,'2020-03-11 05:19:55'),(8,1,1,0,'2020-03-11 05:20:27'),(9,1,1,0,'2020-03-11 05:21:17');
/*!40000 ALTER TABLE `msproduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk_detail`
--

DROP TABLE IF EXISTS `produk_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk_detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUK` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `HARGA` int(20) NOT NULL,
  `PRODUK_IMG` varchar(150) DEFAULT 'default_produk',
  `DESKRIPSI` longtext,
  `STOCK` int(10) DEFAULT NULL,
  `IS_PRODUKSI` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID_PRODUK` (`ID_PRODUK`),
  CONSTRAINT `produk_detail_ibfk_1` FOREIGN KEY (`ID_PRODUK`) REFERENCES `msproduk` (`ID_PRODUK`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk_detail`
--

LOCK TABLES `produk_detail` WRITE;
/*!40000 ALTER TABLE `produk_detail` DISABLE KEYS */;
INSERT INTO `produk_detail` VALUES (1,7,'TAS',10000,' ','teas',10,0),(2,8,'TAS',10000,'','teas',10,0),(3,9,'TAS',10000,NULL,'teas',10,0);
/*!40000 ALTER TABLE `produk_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources_menu`
--

DROP TABLE IF EXISTS `resources_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `resources` varchar(250) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources_menu`
--

LOCK TABLES `resources_menu` WRITE;
/*!40000 ALTER TABLE `resources_menu` DISABLE KEYS */;
INSERT INTO `resources_menu` VALUES (1,'auth/login',NULL,'2020-03-05 14:35:24',1,'2020-03-09 08:41:15',1),(2,'dashboard',NULL,'2020-03-05 14:35:24',1,'2020-03-05 12:50:09',1),(3,'landing_page',NULL,'2020-03-05 14:35:24',1,'2020-03-05 07:36:40',1),(4,'kelola_data/kelola_produk',NULL,'2020-03-06 00:00:00',1,'2020-03-11 06:23:17',1),(5,'managament_menu/rules',NULL,'0000-00-00 00:00:00',1,'2020-03-18 15:33:34',1);
/*!40000 ALTER TABLE `resources_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_menu`
--

DROP TABLE IF EXISTS `roles_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_menu` (
  `id_roles_menu` int(11) NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(250) DEFAULT NULL,
  `create` datetime NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_roles_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_menu`
--

LOCK TABLES `roles_menu` WRITE;
/*!40000 ALTER TABLE `roles_menu` DISABLE KEYS */;
INSERT INTO `roles_menu` VALUES (1,'SYSTEM_ADMINISTRATOR','2020-03-05 14:35:24','2020-03-05 07:37:26',1,1),(2,'GUEST','2020-03-05 14:35:24','2020-03-05 10:04:14',1,1);
/*!40000 ALTER TABLE `roles_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rules_menu`
--

DROP TABLE IF EXISTS `rules_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rules_menu` (
  `id_rules_menu` int(11) NOT NULL AUTO_INCREMENT,
  `access` enum('allowed','deny') NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_roles_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rules_menu`),
  KEY `id_menu` (`id_menu`),
  KEY `id_roles_menu` (`id_roles_menu`),
  CONSTRAINT `rules_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `resources_menu` (`id_menu`),
  CONSTRAINT `rules_menu_ibfk_2` FOREIGN KEY (`id_roles_menu`) REFERENCES `roles_menu` (`id_roles_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rules_menu`
--

LOCK TABLES `rules_menu` WRITE;
/*!40000 ALTER TABLE `rules_menu` DISABLE KEYS */;
INSERT INTO `rules_menu` VALUES (1,'allowed',1,2),(2,'allowed',2,1),(3,'allowed',3,1),(4,'allowed',4,1),(5,'allowed',1,1),(6,'allowed',5,1);
/*!40000 ALTER TABLE `rules_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_produk`
--

DROP TABLE IF EXISTS `v_produk`;
/*!50001 DROP VIEW IF EXISTS `v_produk`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_produk` (
  `ID_PRODUK` tinyint NOT NULL,
  `UMKM_ID` tinyint NOT NULL,
  `NAMA` tinyint NOT NULL,
  `HARGA` tinyint NOT NULL,
  `PRODUK_IMG` tinyint NOT NULL,
  `DESKRIPSI` tinyint NOT NULL,
  `STOCK` tinyint NOT NULL,
  `IS_PRODUKSI` tinyint NOT NULL,
  `KATEGORI` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_produk`
--

/*!50001 DROP TABLE IF EXISTS `v_produk`*/;
/*!50001 DROP VIEW IF EXISTS `v_produk`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_produk` AS select `msproduk`.`ID_PRODUK` AS `ID_PRODUK`,`msproduk`.`UMKM_ID` AS `UMKM_ID`,`produk_detail`.`NAMA` AS `NAMA`,`produk_detail`.`HARGA` AS `HARGA`,`produk_detail`.`PRODUK_IMG` AS `PRODUK_IMG`,`produk_detail`.`DESKRIPSI` AS `DESKRIPSI`,`produk_detail`.`STOCK` AS `STOCK`,`produk_detail`.`IS_PRODUKSI` AS `IS_PRODUKSI`,`mskategori`.`KATEGORI` AS `KATEGORI` from ((`msproduk` join `produk_detail` on((`msproduk`.`ID_PRODUK` = `produk_detail`.`ID_PRODUK`))) join `mskategori` on((`msproduk`.`KATEGORI_ID` = `mskategori`.`KATEGORI_ID`))) where (`msproduk`.`IS_DELETE` = 0) */;
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

-- Dump completed on 2020-03-18 23:06:37
