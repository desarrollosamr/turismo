CREATE DATABASE  IF NOT EXISTS `basehotel1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `basehotel1`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: basehotel1
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `tbcateroiafron`
--

DROP TABLE IF EXISTS `tbcateroiafron`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcateroiafron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iconCategory` varchar(100) DEFAULT NULL,
  `nomCategory` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcateroiafron`
--

LOCK TABLES `tbcateroiafron` WRITE;
/*!40000 ALTER TABLE `tbcateroiafron` DISABLE KEYS */;
INSERT INTO `tbcateroiafron` VALUES (1,NULL,'Casa finca','Short1','2018-10-15 03:16:26',1),(2,NULL,'Finca','Falda2','2018-10-15 03:16:36',1),(3,NULL,'Hotel','Set3','2018-10-15 03:16:44',1),(4,NULL,'Blusa','Blusa4','2018-10-15 03:16:54',1),(5,NULL,'Top','Top5','2018-10-15 03:17:03',1),(6,NULL,'Jean','Jean6','2018-10-15 03:17:14',1),(7,NULL,'Falda short','Falda short7','2018-10-15 03:17:27',1),(8,NULL,'Enterito','Enterito8','2018-10-15 03:17:37',1),(9,NULL,'Bluson','Bluson9','2018-10-15 08:19:29',1),(10,NULL,'Vestido','Vestido10','2018-10-15 08:22:53',1);
/*!40000 ALTER TABLE `tbcateroiafron` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbciudades`
--

DROP TABLE IF EXISTS `tbciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbciudades` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `iddpto` int(11) NOT NULL,
  `codCiudad` int(11) NOT NULL,
  `nomCiudad` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idCiudad`),
  KEY `iddpto` (`iddpto`),
  CONSTRAINT `tbciudades_ibfk_1` FOREIGN KEY (`iddpto`) REFERENCES `tbdeptos` (`iddpto`)
) ENGINE=InnoDB AUTO_INCREMENT=1121 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbciudades`
--

LOCK TABLES `tbciudades` WRITE;
/*!40000 ALTER TABLE `tbciudades` DISABLE KEYS */;
INSERT INTO `tbciudades` VALUES (1,1,1,'El Encanto',1),(2,1,2,'La Chorrera',1),(3,1,3,'La Pedrera',1),(4,1,4,'La Victoria',1),(5,1,5,'Leticia',1),(6,1,6,'Miriti - Parana',1),(7,1,7,'Puerto Alegria',1),(8,1,8,'Puerto Arica',1),(9,1,9,'Puerto Nariño',1),(10,1,10,'Puerto Santander',1),(11,1,11,'Tarapaca',1),(12,2,12,'Abejorral',1),(13,2,13,'Abriaqui',1),(14,2,14,'Alejandria',1),(15,2,15,'Amaga',1),(16,2,16,'Amalfi',1),(17,2,17,'Andes',1),(18,2,18,'Angelopolis',1),(19,2,19,'Angostura',1),(20,2,20,'Anori',1),(21,2,21,'Anza',1),(22,2,22,'Apartado',1),(23,2,23,'Arboletes',1),(24,2,24,'Argelia',1),(25,2,25,'Armenia',1),(26,2,26,'Barbosa',1),(27,2,27,'Bello',1),(28,2,28,'Belmira',1),(29,2,29,'Betania',1),(30,2,30,'Betulia',1),(31,2,31,'Briceño',1),(32,2,32,'Buritica',1),(33,2,33,'Caceres',1),(34,2,34,'Caicedo',1),(35,2,35,'Caldas',1),(36,2,36,'Campamento',1),(37,2,37,'Cañasgordas',1),(38,2,38,'Caracoli',1),(39,2,39,'Caramanta',1),(40,2,40,'Carepa',1),(41,2,41,'Carolina',1),(42,2,42,'Caucasia',1),(43,2,43,'Chigorodo',1),(44,2,44,'Cisneros',1),(45,2,45,'Ciudad Bolivar',1),(46,2,46,'Cocorna',1),(47,2,47,'Concepcion',1),(48,2,48,'Concordia',1),(49,2,49,'Copacabana',1),(50,2,50,'Dabeiba',1),(51,2,51,'Don Matias',1),(52,2,52,'Ebejico',1),(53,2,53,'El Bagre',1),(54,2,54,'El Carmen De Viboral',1),(55,2,55,'El Santuario',1),(56,2,56,'Entrerrios',1),(57,2,57,'Envigado',1),(58,2,58,'Fredonia',1),(59,2,59,'Frontino',1),(60,2,60,'Giraldo',1),(61,2,61,'Girardota',1),(62,2,62,'Gomez Plata',1),(63,2,63,'Granada',1),(64,2,64,'Guadalupe',1),(65,2,65,'Guarne',1),(66,2,66,'Guatape',1),(67,2,67,'Heliconia',1),(68,2,68,'Hispania',1),(69,2,69,'Itagui',1),(70,2,70,'Ituango',1),(71,2,71,'Jardin',1),(72,2,72,'Jerico',1),(73,2,73,'La Ceja',1),(74,2,74,'La Estrella',1),(75,2,75,'La Pintada',1),(76,2,76,'La Union',1),(77,2,77,'Liborina',1),(78,2,78,'Maceo',1),(79,2,79,'Marinilla',1),(80,2,80,'Medellin',1),(81,2,81,'Montebello',1),(82,2,82,'Murindo',1),(83,2,83,'Mutata',1),(84,2,84,'Nariño',1),(85,2,85,'Nechi',1),(86,2,86,'Necocli',1),(87,2,87,'Olaya',1),(88,2,88,'Peðol',1),(89,2,89,'Peque',1),(90,2,90,'Pueblorrico',1),(91,2,91,'Puerto Berrio',1),(92,2,92,'Puerto Nare',1),(93,2,93,'Puerto Triunfo',1),(94,2,94,'Remedios',1),(95,2,95,'Retiro',1),(96,2,96,'Rionegro',1),(97,2,97,'Sabanalarga',1),(98,2,98,'Sabaneta',1),(99,2,99,'Salgar',1),(100,2,100,'San Andres De Cuerquia',1),(101,2,101,'San Carlos',1),(102,2,102,'San Francisco',1),(103,2,103,'San Jeronimo',1),(104,2,104,'San Jose De La Montaña',1),(105,2,105,'San Juan De Uraba',1),(106,2,106,'San Luis',1),(107,2,107,'San Pedro',1),(108,2,108,'San Pedro De Uraba',1),(109,2,109,'San Rafael',1),(110,2,110,'San Roque',1),(111,2,111,'San Vicente',1),(112,2,112,'Santa Barbara',1),(113,2,113,'Santa Rosa De Osos',1),(114,2,114,'Santafe De Antioquia',1),(115,2,115,'Santo Domingo',1),(116,2,116,'Segovia',1),(117,2,117,'Sonson',1),(118,2,118,'Sopetran',1),(119,2,119,'Tamesis',1),(120,2,120,'Taraza',1),(121,2,121,'Tarso',1),(122,2,122,'Titiribi',1),(123,2,123,'Toledo',1),(124,2,124,'Turbo',1),(125,2,125,'Uramita',1),(126,2,126,'Urrao',1),(127,2,127,'Valdivia',1),(128,2,128,'Valparaiso',1),(129,2,129,'Vegachi',1),(130,2,130,'Venecia',1),(131,2,131,'Vigia Del Fuerte',1),(132,2,132,'Yali',1),(133,2,133,'Yarumal',1),(134,2,134,'Yolombo',1),(135,2,135,'Yondo',1),(136,2,136,'Zaragoza',1),(137,3,137,'Arauca',1),(138,3,138,'Arauquita',1),(139,3,139,'Cravo Norte',1),(140,3,140,'Fortul',1),(141,3,141,'Puerto Rondon',1),(142,3,142,'Saravena',1),(143,3,143,'Tame',1),(144,4,144,'Baranoa',1),(145,4,145,'Barranquilla',1),(146,4,146,'Campo De La Cruz',1),(147,4,147,'Candelaria',1),(148,4,148,'Galapa',1),(149,4,149,'Juan De Acosta',1),(150,4,150,'Luruaco',1),(151,4,151,'Malambo',1),(152,4,152,'Manati',1),(153,4,153,'Palmar De Varela',1),(154,4,154,'Piojo',1),(155,4,155,'Polonuevo',1),(156,4,156,'Ponedera',1),(157,4,157,'Puerto Colombia',1),(158,4,158,'Repelon',1),(159,4,159,'Sabanagrande',1),(160,4,160,'Sabanalarga',1),(161,4,161,'Santa Lucia',1),(162,4,162,'Santo Tomas',1),(163,4,163,'Soledad',1),(164,4,164,'Suan',1),(165,4,165,'Tubara',1),(166,4,166,'Usiacuri',1),(167,5,167,'Achi',1),(168,5,168,'Altos Del Rosario',1),(169,5,169,'Arenal',1),(170,5,170,'Arjona',1),(171,5,171,'Arroyohondo',1),(172,5,172,'Barranco De Loba',1),(173,5,173,'Calamar',1),(174,5,174,'Cantagallo',1),(175,5,175,'Cartagena',1),(176,5,176,'Cicuco',1),(177,5,177,'Clemencia',1),(178,5,178,'Cordoba',1),(179,5,179,'El Carmen De Bolivar',1),(180,5,180,'El Guamo',1),(181,5,181,'El Peñon',1),(182,5,182,'Hatillo De Loba',1),(183,5,183,'Magangue',1),(184,5,184,'Mahates',1),(185,5,185,'Margarita',1),(186,5,186,'Maria La Baja',1),(187,5,187,'Mompos',1),(188,5,188,'Montecristo',1),(189,5,189,'Morales',1),(190,5,190,'Norosi',1),(191,5,191,'Pinillos',1),(192,5,192,'Regidor',1),(193,5,193,'Rio Viejo',1),(194,5,194,'San Cristobal',1),(195,5,195,'San Estanislao',1),(196,5,196,'San Fernando',1),(197,5,197,'San Jacinto',1),(198,5,198,'San Jacinto Del Cauca',1),(199,5,199,'San Juan Nepomuceno',1),(200,5,200,'San Martin De Loba',1),(201,5,201,'San Pablo',1),(202,5,202,'Santa Catalina',1),(203,5,203,'Santa Rosa',1),(204,5,204,'Santa Rosa Del Sur',1),(205,5,205,'Simiti',1),(206,5,206,'Soplaviento',1),(207,5,207,'Talaigua Nuevo',1),(208,5,208,'Tiquisio',1),(209,5,209,'Turbaco',1),(210,5,210,'Turbana',1),(211,5,211,'Villanueva',1),(212,5,212,'Zambrano',1),(213,6,213,'Almeida',1),(214,6,214,'Aquitania',1),(215,6,215,'Arcabuco',1),(216,6,216,'Belen',1),(217,6,217,'Berbeo',1),(218,6,218,'Beteitiva',1),(219,6,219,'Boavita',1),(220,6,220,'Boyaca',1),(221,6,221,'Briceño',1),(222,6,222,'Buenavista',1),(223,6,223,'Busbanza',1),(224,6,224,'Caldas',1),(225,6,225,'Campohermoso',1),(226,6,226,'Cerinza',1),(227,6,227,'Chinavita',1),(228,6,228,'Chiquinquira',1),(229,6,229,'Chiquiza',1),(230,6,230,'Chiscas',1),(231,6,231,'Chita',1),(232,6,232,'Chitaraque',1),(233,6,233,'Chivata',1),(234,6,234,'Chivor',1),(235,6,235,'Cienega',1),(236,6,236,'Combita',1),(237,6,237,'Coper',1),(238,6,238,'Corrales',1),(239,6,239,'Covarachia',1),(240,6,240,'Cubara',1),(241,6,241,'Cucaita',1),(242,6,242,'Cuitiva',1),(243,6,243,'Duitama',1),(244,6,244,'El Cocuy',1),(245,6,245,'El Espino',1),(246,6,246,'Firavitoba',1),(247,6,247,'Floresta',1),(248,6,248,'Gachantiva',1),(249,6,249,'Gameza',1),(250,6,250,'Garagoa',1),(251,6,251,'Gsican',1),(252,6,252,'Guacamayas',1),(253,6,253,'Guateque',1),(254,6,254,'Guayata',1),(255,6,255,'Iza',1),(256,6,256,'Jenesano',1),(257,6,257,'Jerico',1),(258,6,258,'La Capilla',1),(259,6,259,'La Uvita',1),(260,6,260,'La Victoria',1),(261,6,261,'Labranzagrande',1),(262,6,262,'Macanal',1),(263,6,263,'Maripi',1),(264,6,264,'Miraflores',1),(265,6,265,'Mongua',1),(266,6,266,'Mongui',1),(267,6,267,'Moniquira',1),(268,6,268,'Motavita',1),(269,6,269,'Muzo',1),(270,6,270,'Nobsa',1),(271,6,271,'Nuevo Colon',1),(272,6,272,'Oicata',1),(273,6,273,'Otanche',1),(274,6,274,'Pachavita',1),(275,6,275,'Paez',1),(276,6,276,'Paipa',1),(277,6,277,'Pajarito',1),(278,6,278,'Panqueba',1),(279,6,279,'Pauna',1),(280,6,280,'Paya',1),(281,6,281,'Paz De Rio',1),(282,6,282,'Pesca',1),(283,6,283,'Pisba',1),(284,6,284,'Puerto Boyaca',1),(285,6,285,'Quipama',1),(286,6,286,'Ramiriqui',1),(287,6,287,'Raquira',1),(288,6,288,'Rondon',1),(289,6,289,'Saboya',1),(290,6,290,'Sachica',1),(291,6,291,'Samaca',1),(292,6,292,'San Eduardo',1),(293,6,293,'San Jose De Pare',1),(294,6,294,'San Luis De Gaceno',1),(295,6,295,'San Mateo',1),(296,6,296,'San Miguel De Sema',1),(297,6,297,'San Pablo De Borbur',1),(298,6,298,'Santa Maria',1),(299,6,299,'Santa Rosa De Viterbo',1),(300,6,300,'Santa Sofia',1),(301,6,301,'Santana',1),(302,6,302,'Sativanorte',1),(303,6,303,'Sativasur',1),(304,6,304,'Siachoque',1),(305,6,305,'Soata',1),(306,6,306,'Socha',1),(307,6,307,'Socota',1),(308,6,308,'Sogamoso',1),(309,6,309,'Somondoco',1),(310,6,310,'Sora',1),(311,6,311,'Soraca',1),(312,6,312,'Sotaquira',1),(313,6,313,'Susacon',1),(314,6,314,'Sutamarchan',1),(315,6,315,'Sutatenza',1),(316,6,316,'Tasco',1),(317,6,317,'Tenza',1),(318,6,318,'Tibana',1),(319,6,319,'Tibasosa',1),(320,6,320,'Tinjaca',1),(321,6,321,'Tipacoque',1),(322,6,322,'Toca',1),(323,6,323,'Togsi',1),(324,6,324,'Topaga',1),(325,6,325,'Tota',1),(326,6,326,'Tunja',1),(327,6,327,'Tunungua',1),(328,6,328,'Turmeque',1),(329,6,329,'Tuta',1),(330,6,330,'Tutaza',1),(331,6,331,'Umbita',1),(332,6,332,'Ventaquemada',1),(333,6,333,'Villa De Leyva',1),(334,6,334,'Viracacha',1),(335,6,335,'Zetaquira',1),(336,7,336,'Aguadas',1),(337,7,337,'Anserma',1),(338,7,338,'Aranzazu',1),(339,7,339,'Belalcazar',1),(340,7,340,'Chinchina',1),(341,7,341,'Filadelfia',1),(342,7,342,'La Dorada',1),(343,7,343,'La Merced',1),(344,7,344,'Manizales',1),(345,7,345,'Manzanares',1),(346,7,346,'Marmato',1),(347,7,347,'Marquetalia',1),(348,7,348,'Marulanda',1),(349,7,349,'Neira',1),(350,7,350,'Norcasia',1),(351,7,351,'Pacora',1),(352,7,352,'Palestina',1),(353,7,353,'Pensilvania',1),(354,7,354,'Riosucio',1),(355,7,355,'Risaralda',1),(356,7,356,'Salamina',1),(357,7,357,'Samana',1),(358,7,358,'San Jose',1),(359,7,359,'Supia',1),(360,7,360,'Victoria',1),(361,7,361,'Villamaria',1),(362,7,362,'Viterbo',1),(363,8,363,'Albania',1),(364,8,364,'Belen De Los Andaquies',1),(365,8,365,'Cartagena Del Chaira',1),(366,8,366,'Curillo',1),(367,8,367,'El Doncello',1),(368,8,368,'El Paujil',1),(369,8,369,'Florencia',1),(370,8,370,'La Montañita',1),(371,8,371,'Milan',1),(372,8,372,'Morelia',1),(373,8,373,'Puerto Rico',1),(374,8,374,'San Jose Del Fragua',1),(375,8,375,'San Vicente Del Caguan',1),(376,8,376,'Solano',1),(377,8,377,'Solita',1),(378,8,378,'Valparaiso',1),(379,9,379,'Aguazul',1),(380,9,380,'Chameza',1),(381,9,381,'Hato Corozal',1),(382,9,382,'La Salina',1),(383,9,383,'Mani',1),(384,9,384,'Monterrey',1),(385,9,385,'Nunchia',1),(386,9,386,'Orocue',1),(387,9,387,'Paz De Ariporo',1),(388,9,388,'Pore',1),(389,9,389,'Recetor',1),(390,9,390,'Sabanalarga',1),(391,9,391,'Sacama',1),(392,9,392,'San Luis De Palenque',1),(393,9,393,'Tamara',1),(394,9,394,'Tauramena',1),(395,9,395,'Trinidad',1),(396,9,396,'Villanueva',1),(397,9,397,'Yopal',1),(398,10,398,'Almaguer',1),(399,10,399,'Argelia',1),(400,10,400,'Balboa',1),(401,10,401,'Bolivar',1),(402,10,402,'Buenos Aires',1),(403,10,403,'Cajibio',1),(404,10,404,'Caldono',1),(405,10,405,'Caloto',1),(406,10,406,'Corinto',1),(407,10,407,'El Tambo',1),(408,10,408,'Florencia',1),(409,10,409,'Guachene',1),(410,10,410,'Guapi',1),(411,10,411,'Inza',1),(412,10,412,'Jambalo',1),(413,10,413,'La Sierra',1),(414,10,414,'La Vega',1),(415,10,415,'Lopez',1),(416,10,416,'Mercaderes',1),(417,10,417,'Miranda',1),(418,10,418,'Morales',1),(419,10,419,'Padilla',1),(420,10,420,'Paez',1),(421,10,421,'Patia',1),(422,10,422,'Piamonte',1),(423,10,423,'Piendamo',1),(424,10,424,'Popayan',1),(425,10,425,'Puerto Tejada',1),(426,10,426,'Purace',1),(427,10,427,'Rosas',1),(428,10,428,'San Sebastian',1),(429,10,429,'Santa Rosa',1),(430,10,430,'Santander De Quilichao',1),(431,10,431,'Silvia',1),(432,10,432,'Sotara',1),(433,10,433,'Suarez',1),(434,10,434,'Sucre',1),(435,10,435,'Timbio',1),(436,10,436,'Timbiqui',1),(437,10,437,'Toribio',1),(438,10,438,'Totoro',1),(439,10,439,'Villa Rica',1),(440,11,440,'Aguachica',1),(441,11,441,'Agustin Codazzi',1),(442,11,442,'Astrea',1),(443,11,443,'Becerril',1),(444,11,444,'Bosconia',1),(445,11,445,'Chimichagua',1),(446,11,446,'Chiriguana',1),(447,11,447,'Curumani',1),(448,11,448,'El Copey',1),(449,11,449,'El Paso',1),(450,11,450,'Gamarra',1),(451,11,451,'Gonzalez',1),(452,11,452,'La Gloria',1),(453,11,453,'La Jagua De Ibirico',1),(454,11,454,'La Paz',1),(455,11,455,'Manaure',1),(456,11,456,'Pailitas',1),(457,11,457,'Pelaya',1),(458,11,458,'Pueblo Bello',1),(459,11,459,'Rio De Oro',1),(460,11,460,'San Alberto',1),(461,11,461,'San Diego',1),(462,11,462,'San Martin',1),(463,11,463,'Tamalameque',1),(464,11,464,'Valledupar',1),(465,12,465,'Acandi',1),(466,12,466,'Alto Baudo',1),(467,12,467,'Atrato',1),(468,12,468,'Bagado',1),(469,12,469,'Bahia Solano',1),(470,12,470,'Bajo Baudo',1),(471,12,471,'Bojaya',1),(472,12,472,'Carmen Del Darien',1),(473,12,473,'Certegui',1),(474,12,474,'Condoto',1),(475,12,475,'El Canton Del San Pablo',1),(476,12,476,'El Carmen De Atrato',1),(477,12,477,'El Litoral Del San Juan',1),(478,12,478,'Istmina',1),(479,12,479,'Jurado',1),(480,12,480,'Lloro',1),(481,12,481,'Medio Atrato',1),(482,12,482,'Medio Baudo',1),(483,12,483,'Medio San Juan',1),(484,12,484,'Novita',1),(485,12,485,'Nuqui',1),(486,12,486,'Quibdo',1),(487,12,487,'Rio Iro',1),(488,12,488,'Rio Quito',1),(489,12,489,'Riosucio',1),(490,12,490,'San Jose Del Palmar',1),(491,12,491,'Sipi',1),(492,12,492,'Tado',1),(493,12,493,'Unguia',1),(494,12,494,'Union Panamericana',1),(495,13,495,'Ayapel',1),(496,13,496,'Buenavista',1),(497,13,497,'Canalete',1),(498,13,498,'Cerete',1),(499,13,499,'Chima',1),(500,13,500,'Chinu',1),(501,13,501,'Cienaga De Oro',1),(502,13,502,'Cotorra',1),(503,13,503,'La Apartada',1),(504,13,504,'Lorica',1),(505,13,505,'Los Cordobas',1),(506,13,506,'Momil',1),(507,13,507,'Montelibano',1),(508,13,508,'Monteria',1),(509,13,509,'Moñitos',1),(510,13,510,'Planeta Rica',1),(511,13,511,'Pueblo Nuevo',1),(512,13,512,'Puerto Escondido',1),(513,13,513,'Puerto Libertador',1),(514,13,514,'Purisima',1),(515,13,515,'Sahagun',1),(516,13,516,'San Andres Sotavento',1),(517,13,517,'San Antero',1),(518,13,518,'San Bernardo Del Viento',1),(519,13,519,'San Carlos',1),(520,13,520,'San Pelayo',1),(521,13,521,'Tierralta',1),(522,13,522,'Valencia',1),(523,14,523,'Agua De Dios',1),(524,14,524,'Alban',1),(525,14,525,'Anapoima',1),(526,14,526,'Anolaima',1),(527,14,527,'Apulo',1),(528,14,528,'Arbelaez',1),(529,14,529,'Beltran',1),(530,14,530,'Bituima',1),(531,14,531,'Bogota, D.C.',1),(532,14,532,'Bojaca',1),(533,14,533,'Cabrera',1),(534,14,534,'Cachipay',1),(535,14,535,'Cajica',1),(536,14,536,'Caparrapi',1),(537,14,537,'Caqueza',1),(538,14,538,'Carmen De Carupa',1),(539,14,539,'Chaguani',1),(540,14,540,'Chia',1),(541,14,541,'Chipaque',1),(542,14,542,'Choachi',1),(543,14,543,'Choconta',1),(544,14,544,'Cogua',1),(545,14,545,'Cota',1),(546,14,546,'Cucunuba',1),(547,14,547,'El Colegio',1),(548,14,548,'El Peñon',1),(549,14,549,'El Rosal',1),(550,14,550,'Facatativa',1),(551,14,551,'Fomeque',1),(552,14,552,'Fosca',1),(553,14,553,'Funza',1),(554,14,554,'Fuquene',1),(555,14,555,'Fusagasuga',1),(556,14,556,'Gachala',1),(557,14,557,'Gachancipa',1),(558,14,558,'Gacheta',1),(559,14,559,'Gama',1),(560,14,560,'Girardot',1),(561,14,561,'Granada',1),(562,14,562,'Guacheta',1),(563,14,563,'Guaduas',1),(564,14,564,'Guasca',1),(565,14,565,'Guataqui',1),(566,14,566,'Guatavita',1),(567,14,567,'Guayabal De Siquima',1),(568,14,568,'Guayabetal',1),(569,14,569,'Gutierrez',1),(570,14,570,'Jerusalen',1),(571,14,571,'Junin',1),(572,14,572,'La Calera',1),(573,14,573,'La Mesa',1),(574,14,574,'La Palma',1),(575,14,575,'La Peña',1),(576,14,576,'La Vega',1),(577,14,577,'Lenguazaque',1),(578,14,578,'Macheta',1),(579,14,579,'Madrid',1),(580,14,580,'Manta',1),(581,14,581,'Medina',1),(582,14,582,'Mosquera',1),(583,14,583,'Nariño',1),(584,14,584,'Nemocon',1),(585,14,585,'Nilo',1),(586,14,586,'Nimaima',1),(587,14,587,'Nocaima',1),(588,14,588,'Pacho',1),(589,14,589,'Paime',1),(590,14,590,'Pandi',1),(591,14,591,'Paratebueno',1),(592,14,592,'Pasca',1),(593,14,593,'Puerto Salgar',1),(594,14,594,'Puli',1),(595,14,595,'Quebradanegra',1),(596,14,596,'Quetame',1),(597,14,597,'Quipile',1),(598,14,598,'Ricaurte',1),(599,14,599,'San Antonio Del Tequendama',1),(600,14,600,'San Bernardo',1),(601,14,601,'San Cayetano',1),(602,14,602,'San Francisco',1),(603,14,603,'San Juan De Rio Seco',1),(604,14,604,'Sasaima',1),(605,14,605,'Sesquile',1),(606,14,606,'Sibate',1),(607,14,607,'Silvania',1),(608,14,608,'Simijaca',1),(609,14,609,'Soacha',1),(610,14,610,'Sopo',1),(611,14,611,'Subachoque',1),(612,14,612,'Suesca',1),(613,14,613,'Supata',1),(614,14,614,'Susa',1),(615,14,615,'Sutatausa',1),(616,14,616,'Tabio',1),(617,14,617,'Tausa',1),(618,14,618,'Tena',1),(619,14,619,'Tenjo',1),(620,14,620,'Tibacuy',1),(621,14,621,'Tibirita',1),(622,14,622,'Tocaima',1),(623,14,623,'Tocancipa',1),(624,14,624,'Topaipi',1),(625,14,625,'Ubala',1),(626,14,626,'Ubaque',1),(627,14,627,'Une',1),(628,14,628,'Utica',1),(629,14,629,'Venecia',1),(630,14,630,'Vergara',1),(631,14,631,'Viani',1),(632,14,632,'Villa De San Diego De Ubate',1),(633,14,633,'Villagomez',1),(634,14,634,'Villapinzon',1),(635,14,635,'Villeta',1),(636,14,636,'Viota',1),(637,14,637,'Yacopi',1),(638,14,638,'Zipacon',1),(639,14,639,'Zipaquira',1),(640,15,640,'Barranco Minas',1),(641,15,641,'Cacahual',1),(642,15,642,'Inirida',1),(643,15,643,'La Guadalupe',1),(644,15,644,'Mapiripana',1),(645,15,645,'Morichal',1),(646,15,646,'Pana Pana',1),(647,15,647,'Puerto Colombia',1),(648,15,648,'San Felipe',1),(649,16,649,'Calamar',1),(650,16,650,'El Retorno',1),(651,16,651,'Miraflores',1),(652,16,652,'San Jose Del Guaviare',1),(653,17,653,'Albania',1),(654,17,654,'Barrancas',1),(655,17,655,'Dibulla',1),(656,17,656,'Distraccion',1),(657,17,657,'El Molino',1),(658,17,658,'Fonseca',1),(659,17,659,'Hatonuevo',1),(660,17,660,'La Jagua Del Pilar',1),(661,17,661,'Maicao',1),(662,17,662,'Manaure',1),(663,17,663,'Riohacha',1),(664,17,664,'San Juan Del Cesar',1),(665,17,665,'Uribia',1),(666,17,666,'Urumita',1),(667,17,667,'Villanueva',1),(668,18,668,'Acevedo',1),(669,18,669,'Agrado',1),(670,18,670,'Aipe',1),(671,18,671,'Algeciras',1),(672,18,672,'Altamira',1),(673,18,673,'Baraya',1),(674,18,674,'Campoalegre',1),(675,18,675,'Colombia',1),(676,18,676,'Elias',1),(677,18,677,'Garzon',1),(678,18,678,'Gigante',1),(679,18,679,'Guadalupe',1),(680,18,680,'Hobo',1),(681,18,681,'Iquira',1),(682,18,682,'Isnos',1),(683,18,683,'La Argentina',1),(684,18,684,'La Plata',1),(685,18,685,'Nataga',1),(686,18,686,'Neiva',1),(687,18,687,'Oporapa',1),(688,18,688,'Paicol',1),(689,18,689,'Palermo',1),(690,18,690,'Palestina',1),(691,18,691,'Pital',1),(692,18,692,'Pitalito',1),(693,18,693,'Rivera',1),(694,18,694,'Saladoblanco',1),(695,18,695,'San Agustin',1),(696,18,696,'Santa Maria',1),(697,18,697,'Suaza',1),(698,18,698,'Tarqui',1),(699,18,699,'Tello',1),(700,18,700,'Teruel',1),(701,18,701,'Tesalia',1),(702,18,702,'Timana',1),(703,18,703,'Villavieja',1),(704,18,704,'Yaguara',1),(705,19,705,'Algarrobo',1),(706,19,706,'Aracataca',1),(707,19,707,'Ariguani',1),(708,19,708,'Cerro San Antonio',1),(709,19,709,'Chibolo',1),(710,19,710,'Cienaga',1),(711,19,711,'Concordia',1),(712,19,712,'El Banco',1),(713,19,713,'El Piñon',1),(714,19,714,'El Reten',1),(715,19,715,'Fundacion',1),(716,19,716,'Guamal',1),(717,19,717,'Nueva Granada',1),(718,19,718,'Pedraza',1),(719,19,719,'Pijiño Del Carmen',1),(720,19,720,'Pivijay',1),(721,19,721,'Plato',1),(722,19,722,'Puebloviejo',1),(723,19,723,'Remolino',1),(724,19,724,'Sabanas De San Angel',1),(725,19,725,'Salamina',1),(726,19,726,'San Sebastian De Buenavista',1),(727,19,727,'San Zenon',1),(728,19,728,'Santa Ana',1),(729,19,729,'Santa Barbara De Pinto',1),(730,19,730,'Santa Marta',1),(731,19,731,'Sitionuevo',1),(732,19,732,'Tenerife',1),(733,19,733,'Zapayan',1),(734,19,734,'Zona Bananera',1),(735,20,735,'Acacias',1),(736,20,736,'Barranca De Upia',1),(737,20,737,'Cabuyaro',1),(738,20,738,'Castilla La Nueva',1),(739,20,739,'Cubarral',1),(740,20,740,'Cumaral',1),(741,20,741,'El Calvario',1),(742,20,742,'El Castillo',1),(743,20,743,'El Dorado',1),(744,20,744,'Fuente De Oro',1),(745,20,745,'Granada',1),(746,20,746,'Guamal',1),(747,20,747,'La Macarena',1),(748,20,748,'Lejanias',1),(749,20,749,'Mapiripan',1),(750,20,750,'Mesetas',1),(751,20,751,'Puerto Concordia',1),(752,20,752,'Puerto Gaitan',1),(753,20,753,'Puerto Lleras',1),(754,20,754,'Puerto Lopez',1),(755,20,755,'Puerto Rico',1),(756,20,756,'Restrepo',1),(757,20,757,'San Carlos De Guaroa',1),(758,20,758,'San Juan De Arama',1),(759,20,759,'San Juanito',1),(760,20,760,'San Martin',1),(761,20,761,'Uribe',1),(762,20,762,'Villavicencio',1),(763,20,763,'Vistahermosa',1),(764,21,764,'Alban',1),(765,21,765,'Aldana',1),(766,21,766,'Ancuya',1),(767,21,767,'Arboleda',1),(768,21,768,'Barbacoas',1),(769,21,769,'Belen',1),(770,21,770,'Buesaco',1),(771,21,771,'Chachagsi',1),(772,21,772,'Colon',1),(773,21,773,'Consaca',1),(774,21,774,'Contadero',1),(775,21,775,'Cordoba',1),(776,21,776,'Cuaspud',1),(777,21,777,'Cumbal',1),(778,21,778,'Cumbitara',1),(779,21,779,'El Charco',1),(780,21,780,'El Peñol',1),(781,21,781,'El Rosario',1),(782,21,782,'El Tablon De Gomez',1),(783,21,783,'El Tambo',1),(784,21,784,'Francisco Pizarro',1),(785,21,785,'Funes',1),(786,21,786,'Guachucal',1),(787,21,787,'Guaitarilla',1),(788,21,788,'Gualmatan',1),(789,21,789,'Iles',1),(790,21,790,'Imues',1),(791,21,791,'Ipiales',1),(792,21,792,'La Cruz',1),(793,21,793,'La Florida',1),(794,21,794,'La Llanada',1),(795,21,795,'La Tola',1),(796,21,796,'La Union',1),(797,21,797,'Leiva',1),(798,21,798,'Linares',1),(799,21,799,'Los Andes',1),(800,21,800,'Magsi',1),(801,21,801,'Mallama',1),(802,21,802,'Mosquera',1),(803,21,803,'Nariño',1),(804,21,804,'Olaya Herrera',1),(805,21,805,'Ospina',1),(806,21,806,'Pasto',1),(807,21,807,'Policarpa',1),(808,21,808,'Potosi',1),(809,21,809,'Providencia',1),(810,21,810,'Puerres',1),(811,21,811,'Pupiales',1),(812,21,812,'Ricaurte',1),(813,21,813,'Roberto Payan',1),(814,21,814,'Samaniego',1),(815,21,815,'San Andres De Tumaco',1),(816,21,816,'San Bernardo',1),(817,21,817,'San Lorenzo',1),(818,21,818,'San Pablo',1),(819,21,819,'San Pedro De Cartago',1),(820,21,820,'Sandona',1),(821,21,821,'Santa Barbara',1),(822,21,822,'Santacruz',1),(823,21,823,'Sapuyes',1),(824,21,824,'Taminango',1),(825,21,825,'Tangua',1),(826,21,826,'Tuquerres',1),(827,21,827,'Yacuanquer',1),(828,22,828,'Abrego',1),(829,22,829,'Arboledas',1),(830,22,830,'Bochalema',1),(831,22,831,'Bucarasica',1),(832,22,832,'Cachira',1),(833,22,833,'Cacota',1),(834,22,834,'Chinacota',1),(835,22,835,'Chitaga',1),(836,22,836,'Convencion',1),(837,22,837,'Cucuta',1),(838,22,838,'Cucutilla',1),(839,22,839,'Durania',1),(840,22,840,'El Carmen',1),(841,22,841,'El Tarra',1),(842,22,842,'El Zulia',1),(843,22,843,'Gramalote',1),(844,22,844,'Hacari',1),(845,22,845,'Herran',1),(846,22,846,'La Esperanza',1),(847,22,847,'La Playa',1),(848,22,848,'Labateca',1),(849,22,849,'Los Patios',1),(850,22,850,'Lourdes',1),(851,22,851,'Mutiscua',1),(852,22,852,'Ocaña',1),(853,22,853,'Pamplona',1),(854,22,854,'Pamplonita',1),(855,22,855,'Puerto Santander',1),(856,22,856,'Ragonvalia',1),(857,22,857,'Salazar',1),(858,22,858,'San Calixto',1),(859,22,859,'San Cayetano',1),(860,22,860,'Santiago',1),(861,22,861,'Sardinata',1),(862,22,862,'Silos',1),(863,22,863,'Teorama',1),(864,22,864,'Tibu',1),(865,22,865,'Toledo',1),(866,22,866,'Villa Caro',1),(867,22,867,'Villa Del Rosario',1),(868,23,868,'Colon',1),(869,23,869,'Leguizamo',1),(870,23,870,'Mocoa',1),(871,23,871,'Orito',1),(872,23,872,'Puerto Asis',1),(873,23,873,'Puerto Caicedo',1),(874,23,874,'Puerto Guzman',1),(875,23,875,'San Francisco',1),(876,23,876,'San Miguel',1),(877,23,877,'Santiago',1),(878,23,878,'Sibundoy',1),(879,23,879,'Valle Del Guamuez',1),(880,23,880,'Villagarzon',1),(881,24,881,'Armenia',1),(882,24,882,'Buenavista',1),(883,24,883,'Calarca',1),(884,24,884,'Circasia',1),(885,24,885,'Cordoba',1),(886,24,886,'Filandia',1),(887,24,887,'Genova',1),(888,24,888,'La Tebaida',1),(889,24,889,'Montenegro',1),(890,24,890,'Pijao',1),(891,24,891,'Quimbaya',1),(892,24,892,'Salento',1),(893,25,893,'Apia',1),(894,25,894,'Balboa',1),(895,25,895,'Belen De Umbria',1),(896,25,896,'Dosquebradas',1),(897,25,897,'Guatica',1),(898,25,898,'La Celia',1),(899,25,899,'La Virginia',1),(900,25,900,'Marsella',1),(901,25,901,'Mistrato',1),(902,25,902,'Pereira',1),(903,25,903,'Pueblo Rico',1),(904,25,904,'Quinchia',1),(905,25,905,'Santa Rosa De Cabal',1),(906,25,906,'Santuario',1),(907,26,907,'Providencia',1),(908,26,908,'San Andres',1),(909,27,909,'Aguada',1),(910,27,910,'Albania',1),(911,27,911,'Aratoca',1),(912,27,912,'Barbosa',1),(913,27,913,'Barichara',1),(914,27,914,'Barrancabermeja',1),(915,27,915,'Betulia',1),(916,27,916,'Bolivar',1),(917,27,917,'Bucaramanga',1),(918,27,918,'Cabrera',1),(919,27,919,'California',1),(920,27,920,'Capitanejo',1),(921,27,921,'Carcasi',1),(922,27,922,'Cepita',1),(923,27,923,'Cerrito',1),(924,27,924,'Charala',1),(925,27,925,'Charta',1),(926,27,926,'Chima',1),(927,27,927,'Chipata',1),(928,27,928,'Cimitarra',1),(929,27,929,'Concepcion',1),(930,27,930,'Confines',1),(931,27,931,'Contratacion',1),(932,27,932,'Coromoro',1),(933,27,933,'Curiti',1),(934,27,934,'El Carmen De Chucuri',1),(935,27,935,'El Guacamayo',1),(936,27,936,'El Peñon',1),(937,27,937,'El Playon',1),(938,27,938,'Encino',1),(939,27,939,'Enciso',1),(940,27,940,'Florian',1),(941,27,941,'Floridablanca',1),(942,27,942,'Galan',1),(943,27,943,'Gambita',1),(944,27,944,'Giron',1),(945,27,945,'Gsepsa',1),(946,27,946,'Guaca',1),(947,27,947,'Guadalupe',1),(948,27,948,'Guapota',1),(949,27,949,'Guavata',1),(950,27,950,'Hato',1),(951,27,951,'Jesus Maria',1),(952,27,952,'Jordan',1),(953,27,953,'La Belleza',1),(954,27,954,'La Paz',1),(955,27,955,'Landazuri',1),(956,27,956,'Lebrija',1),(957,27,957,'Los Santos',1),(958,27,958,'Macaravita',1),(959,27,959,'Malaga',1),(960,27,960,'Matanza',1),(961,27,961,'Mogotes',1),(962,27,962,'Molagavita',1),(963,27,963,'Ocamonte',1),(964,27,964,'Oiba',1),(965,27,965,'Onzaga',1),(966,27,966,'Palmar',1),(967,27,967,'Palmas Del Socorro',1),(968,27,968,'Paramo',1),(969,27,969,'Piedecuesta',1),(970,27,970,'Pinchote',1),(971,27,971,'Puente Nacional',1),(972,27,972,'Puerto Parra',1),(973,27,973,'Puerto Wilches',1),(974,27,974,'Rionegro',1),(975,27,975,'Sabana De Torres',1),(976,27,976,'San Andres',1),(977,27,977,'San Benito',1),(978,27,978,'San Gil',1),(979,27,979,'San Joaquin',1),(980,27,980,'San Jose De Miranda',1),(981,27,981,'San Miguel',1),(982,27,982,'San Vicente De Chucuri',1),(983,27,983,'Santa Barbara',1),(984,27,984,'Santa Helena Del Opon',1),(985,27,985,'Simacota',1),(986,27,986,'Socorro',1),(987,27,987,'Suaita',1),(988,27,988,'Sucre',1),(989,27,989,'Surata',1),(990,27,990,'Tona',1),(991,27,991,'Valle De San Jose',1),(992,27,992,'Velez',1),(993,27,993,'Vetas',1),(994,27,994,'Villanueva',1),(995,27,995,'Zapatoca',1),(996,28,996,'Buenavista',1),(997,28,997,'Caimito',1),(998,28,998,'Chalan',1),(999,28,999,'Coloso',1),(1000,28,1000,'Corozal',1),(1001,28,1001,'Coveñas',1),(1002,28,1002,'El Roble',1),(1003,28,1003,'Galeras',1),(1004,28,1004,'Guaranda',1),(1005,28,1005,'La Union',1),(1006,28,1006,'Los Palmitos',1),(1007,28,1007,'Majagual',1),(1008,28,1008,'Morroa',1),(1009,28,1009,'Ovejas',1),(1010,28,1010,'Palmito',1),(1011,28,1011,'Sampues',1),(1012,28,1012,'San Benito Abad',1),(1013,28,1013,'San Juan De Betulia',1),(1014,28,1014,'San Luis De Since',1),(1015,28,1015,'San Marcos',1),(1016,28,1016,'San Onofre',1),(1017,28,1017,'San Pedro',1),(1018,28,1018,'Santiago De Tolu',1),(1019,28,1019,'Sincelejo',1),(1020,28,1020,'Sucre',1),(1021,28,1021,'Tolu Viejo',1),(1022,29,1022,'Alpujarra',1),(1023,29,1023,'Alvarado',1),(1024,29,1024,'Ambalema',1),(1025,29,1025,'Anzoategui',1),(1026,29,1026,'Armero',1),(1027,29,1027,'Ataco',1),(1028,29,1028,'Cajamarca',1),(1029,29,1029,'Carmen De Apicala',1),(1030,29,1030,'Casabianca',1),(1031,29,1031,'Chaparral',1),(1032,29,1032,'Coello',1),(1033,29,1033,'Coyaima',1),(1034,29,1034,'Cunday',1),(1035,29,1035,'Dolores',1),(1036,29,1036,'Espinal',1),(1037,29,1037,'Falan',1),(1038,29,1038,'Flandes',1),(1039,29,1039,'Fresno',1),(1040,29,1040,'Guamo',1),(1041,29,1041,'Herveo',1),(1042,29,1042,'Honda',1),(1043,29,1043,'Ibague',1),(1044,29,1044,'Icononzo',1),(1045,29,1045,'Lerida',1),(1046,29,1046,'Libano',1),(1047,29,1047,'Mariquita',1),(1048,29,1048,'Melgar',1),(1049,29,1049,'Murillo',1),(1050,29,1050,'Natagaima',1),(1051,29,1051,'Ortega',1),(1052,29,1052,'Palocabildo',1),(1053,29,1053,'Piedras',1),(1054,29,1054,'Planadas',1),(1055,29,1055,'Prado',1),(1056,29,1056,'Purificacion',1),(1057,29,1057,'Rioblanco',1),(1058,29,1058,'Roncesvalles',1),(1059,29,1059,'Rovira',1),(1060,29,1060,'Saldaña',1),(1061,29,1061,'San Antonio',1),(1062,29,1062,'San Luis',1),(1063,29,1063,'Santa Isabel',1),(1064,29,1064,'Suarez',1),(1065,29,1065,'Valle De San Juan',1),(1066,29,1066,'Venadillo',1),(1067,29,1067,'Villahermosa',1),(1068,29,1068,'Villarrica',1),(1069,30,1069,'Alcala',1),(1070,30,1070,'Andalucia',1),(1071,30,1071,'Ansermanuevo',1),(1072,30,1072,'Argelia',1),(1073,30,1073,'Bolivar',1),(1074,30,1074,'Buenaventura',1),(1075,30,1075,'Bugalagrande',1),(1076,30,1076,'Caicedonia',1),(1077,30,1077,'Cali',1),(1078,30,1078,'Calima',1),(1079,30,1079,'Candelaria',1),(1080,30,1080,'Cartago',1),(1081,30,1081,'Dagua',1),(1082,30,1082,'El Aguila',1),(1083,30,1083,'El Cairo',1),(1084,30,1084,'El Cerrito',1),(1085,30,1085,'El Dovio',1),(1086,30,1086,'Florida',1),(1087,30,1087,'Ginebra',1),(1088,30,1088,'Guacari',1),(1089,30,1089,'Guadalajara De Buga',1),(1090,30,1090,'Jamundi',1),(1091,30,1091,'La Cumbre',1),(1092,30,1092,'La Union',1),(1093,30,1093,'La Victoria',1),(1094,30,1094,'Obando',1),(1095,30,1095,'Palmira',1),(1096,30,1096,'Pradera',1),(1097,30,1097,'Restrepo',1),(1098,30,1098,'Riofrio',1),(1099,30,1099,'Roldanillo',1),(1100,30,1100,'San Pedro',1),(1101,30,1101,'Sevilla',1),(1102,30,1102,'Toro',1),(1103,30,1103,'Trujillo',1),(1104,30,1104,'Tulua',1),(1105,30,1105,'Ulloa',1),(1106,30,1106,'Versalles',1),(1107,30,1107,'Vijes',1),(1108,30,1108,'Yotoco',1),(1109,30,1109,'Yumbo',1),(1110,30,1110,'Zarzal',1),(1111,31,1111,'Caruru',1),(1112,31,1112,'Mitu',1),(1113,31,1113,'Pacoa',1),(1114,31,1114,'Papunaua',1),(1115,31,1115,'Taraira',1),(1116,31,1116,'Yavarate',1),(1117,32,1117,'Cumaribo',1),(1118,32,1118,'La Primavera',1),(1119,32,1119,'Puerto Carreño',1),(1120,32,1120,'Santa Rosalia',1);
/*!40000 ALTER TABLE `tbciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdeptos`
--

DROP TABLE IF EXISTS `tbdeptos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdeptos` (
  `iddpto` int(11) NOT NULL AUTO_INCREMENT,
  `codDpto` int(11) NOT NULL,
  `nomDpto` varchar(15) NOT NULL,
  `idpais` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`iddpto`),
  KEY `idpais` (`idpais`),
  CONSTRAINT `tbdeptos_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `tbpaises` (`idpais`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdeptos`
--

LOCK TABLES `tbdeptos` WRITE;
/*!40000 ALTER TABLE `tbdeptos` DISABLE KEYS */;
INSERT INTO `tbdeptos` VALUES (1,1,'Amazonas',1,1),(2,2,'Antioquia',1,1),(3,3,'Arauca',1,1),(4,4,'Atlantico',1,1),(5,5,'Bolivar',1,1),(6,6,'Boyaca',1,1),(7,7,'Caldas',1,1),(8,8,'Caqueta',1,1),(9,9,'Casanare',1,1),(10,10,'Cauca',1,1),(11,11,'Cesar',1,1),(12,12,'Choco',1,1),(13,13,'Cordoba',1,1),(14,14,'Cundinamarca',1,1),(15,15,'Guainia',1,1),(16,16,'Guaviare',1,1),(17,17,'Guajira ',1,1),(18,18,'Huila ',1,1),(19,19,'Magdalena',1,1),(20,20,'Meta',1,1),(21,21,'Nariño',1,1),(22,22,'Norte de Santan',1,1),(23,23,'Putumayo',1,1),(24,24,'Quindio',1,1),(25,25,'Risaralda',1,1),(26,26,'San Andres',1,1),(27,27,'Santander',1,1),(28,28,'Sucre',1,1),(29,29,'Tolima',1,1),(30,30,'Valle del cauca',1,1),(31,31,'Vaupes',1,1),(32,32,'Vichada',1,1);
/*!40000 ALTER TABLE `tbdeptos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbestadohabitacion`
--

DROP TABLE IF EXISTS `tbestadohabitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbestadohabitacion` (
  `idEstadoh` int(11) NOT NULL AUTO_INCREMENT,
  `nomEstado` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idEstadoh`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbestadohabitacion`
--

LOCK TABLES `tbestadohabitacion` WRITE;
/*!40000 ALTER TABLE `tbestadohabitacion` DISABLE KEYS */;
INSERT INTO `tbestadohabitacion` VALUES (1,'DISPONIBLE',1),(2,'OCUPADA',1),(3,'RESERVADA',1),(4,'MANTENIMIENTO',1);
/*!40000 ALTER TABLE `tbestadohabitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbestadoreserva`
--

DROP TABLE IF EXISTS `tbestadoreserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbestadoreserva` (
  `idestador` int(11) NOT NULL AUTO_INCREMENT,
  `nomEstador` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idestador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbestadoreserva`
--

LOCK TABLES `tbestadoreserva` WRITE;
/*!40000 ALTER TABLE `tbestadoreserva` DISABLE KEYS */;
INSERT INTO `tbestadoreserva` VALUES (1,'TOMADA',1);
/*!40000 ALTER TABLE `tbestadoreserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbfactura`
--

DROP TABLE IF EXISTS `tbfactura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbfactura` (
  `idFactura` int(11) NOT NULL AUTO_INCREMENT,
  `idRegistro` int(11) NOT NULL,
  `idnitHotel` int(11) NOT NULL,
  `fecFactura` date NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idFactura`),
  KEY `idRegistro` (`idRegistro`),
  KEY `idnitHotel` (`idnitHotel`),
  CONSTRAINT `tbfactura_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  CONSTRAINT `tbfactura_ibfk_2` FOREIGN KEY (`idnitHotel`) REFERENCES `tbinfohotel` (`idnitHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbfactura`
--

LOCK TABLES `tbfactura` WRITE;
/*!40000 ALTER TABLE `tbfactura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbfactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbfamiliares`
--

DROP TABLE IF EXISTS `tbfamiliares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbfamiliares` (
  `idfamiliar` int(11) NOT NULL AUTO_INCREMENT,
  `idtipoDoc` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  `nroDocumento` int(11) NOT NULL,
  `nomFamiliar` varchar(20) NOT NULL,
  `apeFamiliar` varchar(20) NOT NULL,
  `fecNacido` datetime NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idfamiliar`),
  KEY `idRegistro` (`idRegistro`),
  KEY `idtipoDoc` (`idtipoDoc`),
  CONSTRAINT `tbfamiliares_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  CONSTRAINT `tbfamiliares_ibfk_2` FOREIGN KEY (`idtipoDoc`) REFERENCES `tbtypodocumento` (`idtipoDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbfamiliares`
--

LOCK TABLES `tbfamiliares` WRITE;
/*!40000 ALTER TABLE `tbfamiliares` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbfamiliares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbhabitacion`
--

DROP TABLE IF EXISTS `tbhabitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbhabitacion` (
  `idHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nroHabitacion` int(11) NOT NULL,
  `idEstadoh` int(11) NOT NULL,
  `preciohab` int(11) NOT NULL,
  `idtipoHab` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idHabitacion`),
  KEY `idEstadoh` (`idEstadoh`),
  KEY `idtipoHab` (`idtipoHab`),
  CONSTRAINT `tbhabitacion_ibfk_1` FOREIGN KEY (`idEstadoh`) REFERENCES `tbestadohabitacion` (`idEstadoh`),
  CONSTRAINT `tbhabitacion_ibfk_2` FOREIGN KEY (`idtipoHab`) REFERENCES `tbtypohabitacion` (`idtipoHab`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbhabitacion`
--

LOCK TABLES `tbhabitacion` WRITE;
/*!40000 ALTER TABLE `tbhabitacion` DISABLE KEYS */;
INSERT INTO `tbhabitacion` VALUES (1,101,1,150,1,1),(2,105,1,1,1,1),(3,103,1,150,2,1),(4,104,1,111,2,1),(5,102,4,1500,2,1),(6,108,1,1500,1,1),(7,110,1,100,2,1);
/*!40000 ALTER TABLE `tbhabitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbhabmobiliario`
--

DROP TABLE IF EXISTS `tbhabmobiliario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbhabmobiliario` (
  `idhabMobiliario` int(11) NOT NULL AUTO_INCREMENT,
  `nroHabitacion` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  `idMobiliario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idhabMobiliario`),
  KEY `idHabitacion` (`idHabitacion`),
  KEY `idMobiliario` (`idMobiliario`),
  CONSTRAINT `tbhabmobiliario_ibfk_1` FOREIGN KEY (`idHabitacion`) REFERENCES `tbhabitacion` (`idHabitacion`),
  CONSTRAINT `tbhabmobiliario_ibfk_2` FOREIGN KEY (`idMobiliario`) REFERENCES `tbmobiliario` (`idMobiliario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbhabmobiliario`
--

LOCK TABLES `tbhabmobiliario` WRITE;
/*!40000 ALTER TABLE `tbhabmobiliario` DISABLE KEYS */;
INSERT INTO `tbhabmobiliario` VALUES (6,104,4,4,1,1),(7,104,4,1,1,1),(8,104,4,2,1,1);
/*!40000 ALTER TABLE `tbhabmobiliario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbinfohotel`
--

DROP TABLE IF EXISTS `tbinfohotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbinfohotel` (
  `idnitHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(50) NOT NULL,
  `dirHotel` varchar(50) NOT NULL,
  `telHotel` varchar(12) NOT NULL,
  `correoHotel` varchar(60) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idnitHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbinfohotel`
--

LOCK TABLES `tbinfohotel` WRITE;
/*!40000 ALTER TABLE `tbinfohotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbinfohotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblogin`
--

DROP TABLE IF EXISTS `tblogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblogin`
--

LOCK TABLES `tblogin` WRITE;
/*!40000 ALTER TABLE `tblogin` DISABLE KEYS */;
INSERT INTO `tblogin` VALUES (1,'Admin','1234'),(2,'Prasath','12345'),(3,'admin','admin');
/*!40000 ALTER TABLE `tblogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbmedioreserva`
--

DROP TABLE IF EXISTS `tbmedioreserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbmedioreserva` (
  `idmedio` int(11) NOT NULL AUTO_INCREMENT,
  `nomMedio` varchar(15) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idmedio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbmedioreserva`
--

LOCK TABLES `tbmedioreserva` WRITE;
/*!40000 ALTER TABLE `tbmedioreserva` DISABLE KEYS */;
INSERT INTO `tbmedioreserva` VALUES (1,'WEBK',1);
/*!40000 ALTER TABLE `tbmedioreserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbmenu`
--

DROP TABLE IF EXISTS `tbmenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbmenu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `titmenu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `lnkmenu` varchar(150) COLLATE utf8_spanish_ci NOT NULL DEFAULT '#',
  `posMenu` tinyint(4) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbmenu`
--

LOCK TABLES `tbmenu` WRITE;
/*!40000 ALTER TABLE `tbmenu` DISABLE KEYS */;
INSERT INTO `tbmenu` VALUES (1,'Maestros','#',1,1),(2,'Modulos casos','#',2,1),(3,'Modulos abogados','#',3,1),(4,'Consultas','#',4,1),(5,'Informes','#',5,1),(6,'Herramientas','#',6,1),(7,'Empleados','#',3,1),(8,'Pruebas','#',7,1),(9,'Prueba grande','#',9,1),(10,'Prueba 22000','#',10,1),(11,'Modulo tercero','#',2,1),(12,'Modulo cliente','#',2,1),(13,'Prueba Certficados','#',1,1);
/*!40000 ALTER TABLE `tbmenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbmobiliario`
--

DROP TABLE IF EXISTS `tbmobiliario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbmobiliario` (
  `idMobiliario` int(11) NOT NULL AUTO_INCREMENT,
  `nomMobiliario` varchar(60) NOT NULL,
  `desMobiliario` varchar(60) NOT NULL,
  `preciocompra` decimal(15,2) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idMobiliario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbmobiliario`
--

LOCK TABLES `tbmobiliario` WRITE;
/*!40000 ALTER TABLE `tbmobiliario` DISABLE KEYS */;
INSERT INTO `tbmobiliario` VALUES (1,'CAMA','MADERA',1.00,1),(2,'CAMA CUNA','MADERA',120.00,1),(3,'CAMA DOBLE','MADERA ROBLE, BORDADOS EN ACERO',1850000.00,1),(4,'TV 45','MARCA SAMSUNG',1100000.00,1),(5,'TV 65','MARCA LG',1150000.00,1),(6,'NEVERA 12PIES','MARCA CENTRALES',1350000.00,1),(7,'MESA NOCHE','MADERA',35000.00,1);
/*!40000 ALTER TABLE `tbmobiliario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbocupaciones`
--

DROP TABLE IF EXISTS `tbocupaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbocupaciones` (
  `idOcupacion` int(11) NOT NULL AUTO_INCREMENT,
  `nomOcupacion` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idOcupacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbocupaciones`
--

LOCK TABLES `tbocupaciones` WRITE;
/*!40000 ALTER TABLE `tbocupaciones` DISABLE KEYS */;
INSERT INTO `tbocupaciones` VALUES (1,'COMERCIANTES',1),(2,'ABOGADO',1);
/*!40000 ALTER TABLE `tbocupaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbpaises`
--

DROP TABLE IF EXISTS `tbpaises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbpaises` (
  `idpais` int(11) NOT NULL AUTO_INCREMENT,
  `nomPais` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbpaises`
--

LOCK TABLES `tbpaises` WRITE;
/*!40000 ALTER TABLE `tbpaises` DISABLE KEYS */;
INSERT INTO `tbpaises` VALUES (1,'Colombia',1);
/*!40000 ALTER TABLE `tbpaises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbpermisos`
--

DROP TABLE IF EXISTS `tbpermisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbpermisos` (
  `idPermiso` int(11) NOT NULL AUTO_INCREMENT,
  `idEmpleado` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `idsubmenu` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idPermiso`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbpermisos`
--

LOCK TABLES `tbpermisos` WRITE;
/*!40000 ALTER TABLE `tbpermisos` DISABLE KEYS */;
INSERT INTO `tbpermisos` VALUES (1,1,1,1,1),(2,1,1,2,1),(3,1,1,3,1),(4,1,1,4,1),(5,1,1,5,1),(6,1,1,6,1),(7,1,2,7,1),(8,1,2,8,1),(9,1,3,9,1),(10,1,3,10,1),(11,1,4,11,1),(12,1,5,12,1),(13,1,5,13,1),(14,1,6,14,1),(15,1,6,15,1),(16,1,6,16,1),(17,1,6,17,1),(18,1,7,18,1),(19,1,7,19,1),(20,1,7,20,1),(21,1,9,1,1),(22,25,1,2,1),(23,25,2,7,1),(24,25,3,9,1),(25,2,4,11,1),(26,2,5,12,1),(27,2,5,13,1),(28,2,6,14,1),(29,2,6,15,1),(30,2,7,20,1),(31,1,8,19,1),(32,1,10,21,1),(33,1,1,22,1),(34,1,11,1,1),(35,1,12,1,1),(36,1,13,27,1);
/*!40000 ALTER TABLE `tbpermisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbpersonas`
--

DROP TABLE IF EXISTS `tbpersonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbpersonas` (
  `idCedula` int(11) NOT NULL AUTO_INCREMENT,
  `idtipoDoc` int(11) NOT NULL,
  `nomPersona` varchar(20) NOT NULL,
  `apePersona` varchar(20) NOT NULL,
  `fecNacido` date NOT NULL,
  `telPersona` varchar(12) DEFAULT NULL,
  `correoPersona` varchar(60) DEFAULT NULL,
  `tipoPersona` int(11) NOT NULL,
  `passPersona` varchar(25) NOT NULL,
  `idOcupacion` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idCedula`),
  KEY `idtipoDoc` (`idtipoDoc`),
  KEY `idOcupacion` (`idOcupacion`),
  CONSTRAINT `tbpersonas_ibfk_1` FOREIGN KEY (`idtipoDoc`) REFERENCES `tbtypodocumento` (`idtipoDoc`),
  CONSTRAINT `tbpersonas_ibfk_2` FOREIGN KEY (`idOcupacion`) REFERENCES `tbocupaciones` (`idOcupacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbpersonas`
--

LOCK TABLES `tbpersonas` WRITE;
/*!40000 ALTER TABLE `tbpersonas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbpersonas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbproductofactura`
--

DROP TABLE IF EXISTS `tbproductofactura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbproductofactura` (
  `idrelacion` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `precioUni` decimal(8,2) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idrelacion`),
  KEY `idFactura` (`idFactura`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `tbproductofactura_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `tbfactura` (`idFactura`),
  CONSTRAINT `tbproductofactura_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `tbproductos` (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbproductofactura`
--

LOCK TABLES `tbproductofactura` WRITE;
/*!40000 ALTER TABLE `tbproductofactura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbproductofactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbproductos`
--

DROP TABLE IF EXISTS `tbproductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbproductos` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nomproducto` varchar(35) NOT NULL,
  `idUnidadm` int(11) NOT NULL,
  `impto` decimal(8,2) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `canExiste` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idproducto`),
  KEY `idUnidadm` (`idUnidadm`),
  CONSTRAINT `tbproductos_ibfk_1` FOREIGN KEY (`idUnidadm`) REFERENCES `tbundmedida` (`idUnidadm`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbproductos`
--

LOCK TABLES `tbproductos` WRITE;
/*!40000 ALTER TABLE `tbproductos` DISABLE KEYS */;
INSERT INTO `tbproductos` VALUES (1,'Coca cola',1,1.00,2500.00,19.00,10,1),(2,'CERVEZA',3,3.00,1.00,15.00,2,1),(3,'gaseosa',2,1.00,1.00,12.00,5,1),(4,'papel',4,12.00,2.00,1500.00,12,1),(5,'aguardiente',4,12.00,3.00,1500.00,10,1),(6,'AGUA CON GAS',2,33.00,122.00,15.00,12,1),(7,'limonada',2,3.00,10.00,160.00,12,1),(8,'COBIJA',2,3.00,12.00,111.00,1,1),(9,'MELOCOTON',2,15.00,12.00,999999.99,11,1),(10,'TUTTI FRUTTI',2,15.00,12.00,111.00,11,1),(11,'MELON',2,1.00,12.00,111112.00,112,1),(12,'GAEOSASSS',1,1.00,1.00,1.00,1,1),(13,'JABON',2,152.00,1500.00,150.00,15000,1),(14,'SHAMPOO',2,12.00,1.00,111.00,1,1),(15,'PAPEL HIGIENICO',2,10.00,19.00,2000.00,10,1),(16,'JUGO DE MELON',5,1.00,1.00,150.00,5,1),(17,'Cerveza ligth',5,100.00,150.00,2200.00,25,1);
/*!40000 ALTER TABLE `tbproductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbregistroreserva`
--

DROP TABLE IF EXISTS `tbregistroreserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbregistroreserva` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `fecReserva` datetime NOT NULL,
  `fecRegistro` datetime NOT NULL,
  `fecSalida` datetime NOT NULL,
  `idorigenCliente` int(11) NOT NULL,
  `idDestinoCliente` int(11) NOT NULL,
  `idestadoReserva` int(11) NOT NULL,
  `idCedula` int(11) NOT NULL,
  `idmedio` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idRegistro`),
  KEY `idorigenCliente` (`idorigenCliente`),
  KEY `idDestinoCliente` (`idDestinoCliente`),
  KEY `idestadoReserva` (`idestadoReserva`),
  KEY `idmedio` (`idmedio`),
  KEY `idCedula` (`idCedula`),
  CONSTRAINT `tbregistroreserva_ibfk_1` FOREIGN KEY (`idorigenCliente`) REFERENCES `tbciudades` (`idCiudad`),
  CONSTRAINT `tbregistroreserva_ibfk_2` FOREIGN KEY (`idDestinoCliente`) REFERENCES `tbciudades` (`idCiudad`),
  CONSTRAINT `tbregistroreserva_ibfk_3` FOREIGN KEY (`idestadoReserva`) REFERENCES `tbestadoreserva` (`idestador`),
  CONSTRAINT `tbregistroreserva_ibfk_4` FOREIGN KEY (`idmedio`) REFERENCES `tbmedioreserva` (`idmedio`),
  CONSTRAINT `tbregistroreserva_ibfk_5` FOREIGN KEY (`idCedula`) REFERENCES `tbpersonas` (`idCedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbregistroreserva`
--

LOCK TABLES `tbregistroreserva` WRITE;
/*!40000 ALTER TABLE `tbregistroreserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbregistroreserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbrgtrohabitacion`
--

DROP TABLE IF EXISTS `tbrgtrohabitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbrgtrohabitacion` (
  `idrgtroHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `idRegistro` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  `fecocupadaInicio` date NOT NULL,
  `fecocupadaFinal` date NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idrgtroHabitacion`),
  KEY `idRegistro` (`idRegistro`),
  KEY `idHabitacion` (`idHabitacion`),
  CONSTRAINT `tbrgtrohabitacion_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `tbregistroreserva` (`idRegistro`),
  CONSTRAINT `tbrgtrohabitacion_ibfk_2` FOREIGN KEY (`idHabitacion`) REFERENCES `tbhabitacion` (`idHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbrgtrohabitacion`
--

LOCK TABLES `tbrgtrohabitacion` WRITE;
/*!40000 ALTER TABLE `tbrgtrohabitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbrgtrohabitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbroles`
--

DROP TABLE IF EXISTS `tbroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbroles` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nomRol` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbroles`
--

LOCK TABLES `tbroles` WRITE;
/*!40000 ALTER TABLE `tbroles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbrolespersonas`
--

DROP TABLE IF EXISTS `tbrolespersonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbrolespersonas` (
  `idrelacion` int(11) NOT NULL AUTO_INCREMENT,
  `idCedula` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idrelacion`),
  KEY `idCedula` (`idCedula`),
  KEY `idRol` (`idRol`),
  CONSTRAINT `tbrolespersonas_ibfk_1` FOREIGN KEY (`idCedula`) REFERENCES `tbpersonas` (`idCedula`),
  CONSTRAINT `tbrolespersonas_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `tbroles` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbrolespersonas`
--

LOCK TABLES `tbrolespersonas` WRITE;
/*!40000 ALTER TABLE `tbrolespersonas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbrolespersonas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbsubcategoria`
--

DROP TABLE IF EXISTS `tbsubcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbsubcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL DEFAULT 1 COMMENT 'Para relacionar con tbCateroiaFron',
  `iconCategory` varchar(100) DEFAULT NULL,
  `nomsubCategory` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Tabla subcategria para que el usuario seleccione';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbsubcategoria`
--

LOCK TABLES `tbsubcategoria` WRITE;
/*!40000 ALTER TABLE `tbsubcategoria` DISABLE KEYS */;
INSERT INTO `tbsubcategoria` VALUES (1,1,NULL,'Casa finca','Short1','2018-10-15 03:16:26',1),(2,1,NULL,'Finca','Falda2','2018-10-15 03:16:36',1),(3,1,NULL,'Hotel','Set3','2018-10-15 03:16:44',1),(4,2,NULL,'Blusa','Blusa4','2018-10-15 03:16:54',1),(5,2,NULL,'Top','Top5','2018-10-15 03:17:03',1),(6,3,NULL,'Jean','Jean6','2018-10-15 03:17:14',1),(7,3,NULL,'Falda short','Falda short7','2018-10-15 03:17:27',1),(8,4,NULL,'Enterito','Enterito8','2018-10-15 03:17:37',1),(9,4,NULL,'Bluson','Bluson9','2018-10-15 08:19:29',1),(10,5,NULL,'Vestido','Vestido10','2018-10-15 08:22:53',1);
/*!40000 ALTER TABLE `tbsubcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbsubmenu`
--

DROP TABLE IF EXISTS `tbsubmenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbsubmenu` (
  `idSubmenu` int(11) NOT NULL AUTO_INCREMENT,
  `idmenu` int(11) NOT NULL,
  `titsubmenu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `lnksubmenu` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `possubmenu` tinyint(4) NOT NULL DEFAULT 1,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idSubmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbsubmenu`
--

LOCK TABLES `tbsubmenu` WRITE;
/*!40000 ALTER TABLE `tbsubmenu` DISABLE KEYS */;
INSERT INTO `tbsubmenu` VALUES (1,1,'Estado civil','prgestadocivil/Index.php',1,1),(2,1,'Municipios','prgmunicipio/Index.php',2,1),(3,1,'Tipo documento','prgtipodoc/Index.php',3,1),(4,1,'Tipo empleado','prgtipoEmpleado/Index.php',4,1),(5,1,'Tipo Vivienda','prgVivienda/Index.php',5,1),(6,1,'Estrato','prgEstrato/Index.php',6,1),(7,2,'Tipo caso','prgtiocasos/Index.php',1,1),(8,2,'Detalle Caso','prgDetallecaso/Index.php',2,1),(9,3,'Especialidades','prgSpecialAbogado/Index.php',1,1),(10,3,'Datos Generales','prgEmpleado/prgpag00.php',2,1),(11,4,'Datos Generales','prgDatosEmpleados/Index.php',1,1),(12,5,'Informe nro-1','prgconsulta1/Index.php',1,1),(13,5,'Informe nro','prgconsulta2/Index.php',2,1),(14,6,'Copia Seguridad','prgInforme1/Index.php',1,1),(15,6,'Permisos','prgInforme2/Index.php',2,1),(16,6,'Menus','prgInforme3/Index.php',3,1),(17,6,'Informe-4','prgInforme4/Index.php',4,0),(18,7,'Datos Basicos','prgEmpleado/Index.php?x=1',1,1),(19,8,'Pruebas datos','prgpruebas/prgpag00.php',2,1),(20,9,'Base con 16000','prgOpciones/Index.php',1,1),(21,10,'Tabla con 22000','prgDemo/index.php',1,1),(22,1,'Area derecho','prgAreaderecho/Index.php',2,1),(23,1,'Comunas','prgcomuna/Index.php',3,1),(24,11,'Matricular tercero','prgtercero/index.php',1,1),(25,12,'Matricular cliente','prgclientes/index.php',1,1),(26,12,'Tipo cliente','prgtipocliente/Index.php',2,1),(27,13,'Consultar','prgcertificados/indexbusca.php',1,1);
/*!40000 ALTER TABLE `tbsubmenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtypodocumento`
--

DROP TABLE IF EXISTS `tbtypodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtypodocumento` (
  `idtipoDoc` int(11) NOT NULL AUTO_INCREMENT,
  `nomtipoDoc` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idtipoDoc`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtypodocumento`
--

LOCK TABLES `tbtypodocumento` WRITE;
/*!40000 ALTER TABLE `tbtypodocumento` DISABLE KEYS */;
INSERT INTO `tbtypodocumento` VALUES (1,'Cedula',1),(2,'Tarjeta identidad',1),(3,'Cedula Extranjera',1),(4,'Pasaporte',1),(5,'tipo-1',1),(6,'tipo-2202',1),(7,'tipo-3',1),(8,'tipo-4',1),(9,'tipo-5',1),(10,'tipo-6',1),(11,'tipo-7',1),(12,'tipo-8',1),(13,'tipo-9',1),(14,'tipo-10',1),(15,'tipo-110',1),(16,'tipo-12',1),(17,'tipo-13',1),(18,'tipo-14',1),(19,'tipo-15',1),(20,'tipo-16',1),(21,'tipo-170',1),(33,'tipop-999',1),(42,'aaaaa',1),(43,'tarjeta membresia',1),(44,'tipo-991',1),(45,'cartulina',1),(46,'carticas',1),(47,'cartulina plastificada111',1),(48,'aaaaa1',1),(49,'nuevo tipo documento-1',1);
/*!40000 ALTER TABLE `tbtypodocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtypohabitacion`
--

DROP TABLE IF EXISTS `tbtypohabitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtypohabitacion` (
  `idtipoHab` int(11) NOT NULL AUTO_INCREMENT,
  `nomTipo` varchar(20) NOT NULL,
  `desTipo` varchar(60) NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idtipoHab`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtypohabitacion`
--

LOCK TABLES `tbtypohabitacion` WRITE;
/*!40000 ALTER TABLE `tbtypohabitacion` DISABLE KEYS */;
INSERT INTO `tbtypohabitacion` VALUES (1,'SUITE CATEGORIA','TV, JACUZI',1),(2,'SENCILLA','CAMA SENCILLA, NOCHERO, TV, BAñO INTERNO',1),(3,'SENCILLA DOBLE','CON CAMA DOBLE, SIN BAñO',1);
/*!40000 ALTER TABLE `tbtypohabitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbundmedida`
--

DROP TABLE IF EXISTS `tbundmedida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbundmedida` (
  `idUnidadm` int(11) NOT NULL AUTO_INCREMENT,
  `nomUnidadm` varchar(25) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`idUnidadm`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbundmedida`
--

LOCK TABLES `tbundmedida` WRITE;
/*!40000 ALTER TABLE `tbundmedida` DISABLE KEYS */;
INSERT INTO `tbundmedida` VALUES (1,'BOLSA LITRO 1000ML',1),(2,'350ML',1),(3,'BOLSA 500ML',1),(4,'BOTELLA LITRO 1000ML',1),(5,'LATA X 350ML',1);
/*!40000 ALTER TABLE `tbundmedida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmpmobiliario`
--

DROP TABLE IF EXISTS `tmpmobiliario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmpmobiliario` (
  `idtmp` int(11) NOT NULL AUTO_INCREMENT,
  `nrohab` int(11) NOT NULL,
  `keyhab` int(11) NOT NULL,
  `keymob` int(11) NOT NULL,
  `nommob` varchar(80) NOT NULL,
  `canmov` int(11) NOT NULL,
  PRIMARY KEY (`idtmp`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmpmobiliario`
--

LOCK TABLES `tmpmobiliario` WRITE;
/*!40000 ALTER TABLE `tmpmobiliario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmpmobiliario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'basehotel1'
--

--
-- Dumping routines for database 'basehotel1'
--
/*!50003 DROP PROCEDURE IF EXISTS `borraTmpmov` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `borraTmpmov`()
BEGIN
  -- delete from tbtmpcarreras where idtemp = codigo and tokenuser = token_user;
--  Select a.idCarrera, a.nCarrera FROM tbcarreras a where (a.estado=1 and a.idcarrera not in (select b.idcarrera from tbtmpcarreras b where b.tokenuser = token_user and b.estado =1));
  select a.idMobiliario, a.nomMobiliario from tbmobiliario a;  
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_deleteTemporal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deleteTemporal`(IN `pnro` int,  IN `pkeyh` int, IN `flag` int)
BEGIN
  -- DECLARE a int;
  -- set a = 20;
  -- SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  -- IF a = 0 THEN
	Delete from tmpmobiliario where idtmp = pnro;
     IF  flag = 2 THEN     
--      SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh and nrohab= pnro);
        SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh);
	 END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newHabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newHabitacion`(IN `pnro` int,  IN `pest`int, IN `pprecio` float, IN  `ptipoh` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  IF a = 0 THEN
    INSERT INTO tbhabitacion(nrohabitacion, idestadoh, preciohab, idtipohab) VALUES(pnro, pest, pprecio, ptipoh );
    select 5 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newMedyoreserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newMedyoreserva`(IN `pnom` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmedioreserva WHERE nommedio =pnom);
  IF a = 0 THEN
    INSERT INTO tbmedioreserva(nommedio) VALUES(pnom);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newMobiliario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newMobiliario`(IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80), IN `pprecio` float )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmobiliario WHERE nommobiliario =pnom);
  IF a = 0 THEN
    INSERT INTO tbmobiliario(nommobiliario, desMobiliario, preciocompra) VALUES(pnom, pdes, pprecio );
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newOcupaciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newOcupaciones`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbocupaciones WHERE nomocupacion =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbocupaciones(nomocupacion) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newProducto`(IN `pnom` varchar(80), IN`punidad` float, IN  `pimpto` float,IN  `piva` float,   IN  `pprecio` float, IN  `pcan` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbproductos WHERE nomproducto  =pnom);
  IF a = 0 THEN
    INSERT INTO tbproductos(nomproducto, idunidadm, impto, precio, iva, canExiste) VALUES(pnom, punidad, pimpto,  pprecio, piva, pcan );
    select "ok" as xx;
   else
    select "Nombre repetido" as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newstateHabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newstateHabitacion`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadohabitacion WHERE nomestado =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbestadohabitacion(nomestado) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newstateReserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newstateReserva`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadoreserva WHERE nomestador =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbestadoreserva(nomestador) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newTemporal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newTemporal`(IN `pnro` int,  IN `pkeyh` int, IN `pnommob` VARCHAR(50), IN `keym` int,  IN  `pcan` int, IN `flag` int)
BEGIN
  -- DECLARE a int;
  -- set a = 20;
  -- SET a = (SELECT COUNT(*) FROM tbhabitacion WHERE nrohabitacion  =pnro);
  -- IF a = 0 THEN
    INSERT INTO tmpmobiliario(nrohab, keyhab, keymob, nommob, canmov) VALUES(pnro, pkeyh, keym, pnommob , pcan );
     IF  flag = 1 THEN
        SELECT idMobiliario, nomMobiliario FROM tbmobiliario where idmobiliario not in (SELECT keymob FROM tmpmobiliario where keyhab = pkeyh and nrohab= pnro);
	 END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newtypeHabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newtypeHabitacion`(IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypohabitacion WHERE nomtipo =pnom);
  IF a = 0 THEN
    INSERT INTO tbtypohabitacion(nomtipo, destipo) VALUES(pnom, pdes);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newTypoDocumento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newTypoDocumento`(IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtipodoc =pdescripcion);
  IF a = 0 THEN
    INSERT INTO tbtypodocumento(nomtipodoc) VALUES(pdescripcion);   
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_newunidadMedida` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_newunidadMedida`(IN `pnom` VARCHAR(80) )
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbundmedida WHERE nomunidadm =pnom);
  IF a = 0 THEN
    INSERT INTO tbundmedida(nomunidadm) VALUES(pnom);
    select 0 as xx;
   else
    select 1 as xx;
   END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_oneTypoDocumento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_oneTypoDocumento`(IN `pcriterio` INT)
BEGIN
	SELECT e.* FROM tbtypodocumento as e Where 1=1 and e.IdtipoDoc=pcriterio;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_paghabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paghabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
-- select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
		
        select a.idHabitacion, a.nroHabitacion, a.precioHab, b.nomEstado, c.desTipo, c.nomTipo
			  From tbhabitacion a, tbestadohabitacion b, tbtypohabitacion c
			  where (a.idestadoh = b.idestadoh and a.idtipohab = c.idtipohab) and              
              (b.nomEstado like concat('%',_busca,'%') or c.desTipo like concat('%',_busca,'%') or c.nomTipo like concat('%',_busca,'%') ) 
              order by a.nroHabitacion desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbhabitacion; -- WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_paginamobiliario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_paginamobiliario`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbmobiliario where nommobiliario like concat('%',_busca,'%') order by nommobiliario desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbmobiliario WHERE nommobiliario LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagmedioreserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagmedioreserva`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbmedioreserva where nommedio like concat('%',_busca,'%') order by nommedio desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbmedioreserva WHERE nommedio LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagOcupaciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagOcupaciones`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbocupaciones where nomocupacion like concat('%',_busca,'%') order by nomocupacion desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbocupaciones WHERE nomocupacion LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagproductos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagproductos`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
-- select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
		
        select a.*, b.nomUnidadm
			  From tbproductos a, tbundmedida b
			  where (a.idunidadm = b.idunidadm and (a.nomproducto like concat('%',_busca,'%') or b.nomUnidadm like concat('%',_busca,'%') ) )
              order by a.idproducto desc limit _pagina,_registro;         
     else
		SELECT count(*) as total FROM tbproductos; -- WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagstatehabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagstatehabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbestadohabitacion where nomestado like concat('%',_busca,'%') order by nomestado desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbestadohabitacion WHERE nomestado LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagstatereserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagstatereserva`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbestadoreserva where nomestador like concat('%',_busca,'%') order by nomestador desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbestadoreserva WHERE nomestador LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagtipodocumento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagtipodocumento`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbtypodocumento where nomtipodoc like concat('%',_busca,'%') order by nomtipodoc desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbtypodocumento WHERE nomtipodoc LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagtypehabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagtypehabitacion`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbtypohabitacion where nomtipo like concat('%',_busca,'%') order by nomtipo desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbtypohabitacion WHERE nomtipo LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pagunidadMedida` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pagunidadMedida`(`_flag` INT, `_busca` VARCHAR(200), `_pagina` INT, `_registro` INT)
BEGIN
	if _flag = 1 then
		select * from tbundmedida where nomunidadm like concat('%',_busca,'%') order by nomunidadm desc limit _pagina,_registro;
	else
		SELECT count(*) as total FROM tbundmedida WHERE nomunidadm LIKE CONCAT('%',_busca,'%');
	end if;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pasarelacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pasarelacion`( IN `pkeyh` int, IN `pnro` int)
BEGIN
	insert into tbhabmobiliario(nrohabitacion, idhabitacion, idmobiliario, cantidad) Select a.nrohab, a.keyhab, a.keymob, a.canmov from tmpmobiliario a where a.nrohab= pnro;
    Delete from tmpmobiliario where nrohab = pnro;    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_readTemporal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_readTemporal`(IN `pnro` int,  IN `keym` int,  IN `flag` int)
BEGIN
    Select * FROM tmpmobiliario where (nrohab= pnro);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updateMedyoreserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateMedyoreserva`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbmedioreserva WHERE nommedio =pdescripcion);
  IF a = 0 THEN
    Update tbmedioreserva set nommedio = pdescripcion where idmedio=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updateMobiliario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateMobiliario`(IN `pcriterio` INT, IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80), IN `pprecio` float)
BEGIN
  DECLARE a int;

  set a = 20;

  SET a = (SELECT COUNT(*) FROM tbmobiliario WHERE nommobiliario =pnom);
  IF a = 0 THEN
    Update tbmobiliario set nommobiliario = pnom,
						    desmobiliario = pdes,
                            preciocompra  = pprecio
			where Idmobiliario =pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updateOcupaciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateOcupaciones`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbocupaciones WHERE nomocupacion =pdescripcion);
  IF a = 0 THEN
    Update tbocupaciones set nomocupacion = pdescripcion where idocupacion=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updaterecordproducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updaterecordproducto`(IN `pcriterio` INT,  IN `pnom` VARCHAR(80),  IN `punidad` float, 
																	  IN `pimpto` float,   IN `pprecio` float, IN  `piva` float, IN  `pcan` int)
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbproductos WHERE nomproducto = pnom and idproducto  !=pcriterio);
  IF a > 0 THEN
    select 'Nombre repetido' as xx;
   else
       Update tbproductos set nomproducto = pnom ,
							idUnidadm   = punidad,
                            impto       = pimpto,
						    precio      = pprecio,
                            iva         = piva,
                            canExiste   = pcan
				where idproducto  =pcriterio;   
    select 'ok' as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updatestateHabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatestateHabitacion`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadohabitacion WHERE nomestado =pdescripcion);
  IF a = 0 THEN
    Update tbestadohabitacion set nomestado = pdescripcion where idestadoh=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updatestateReserva` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatestateReserva`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbestadoreserva WHERE nomestador =pdescripcion);
  IF a = 0 THEN
    Update tbestadoreserva set nomestador = pdescripcion where idestador=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updatetypeHabitacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatetypeHabitacion`(IN `pcriterio` INT, IN `pnom` VARCHAR(80), IN `pdes` VARCHAR(80))
BEGIN
  DECLARE a int;

  set a = 20;

  SET a = (SELECT COUNT(*) FROM tbtypohabitacion WHERE nomtipo =pnom);
  IF a = 0 THEN
    Update tbtypohabitacion set nomtipo = pnom,
						        destipo = pdes                            
			where idtipohab =pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updateTypoDocumento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateTypoDocumento`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbtypodocumento WHERE nomtipodoc =pdescripcion);
  IF a = 0 THEN
    Update tbtypodocumento set nomtipodoc = pdescripcion where IdTipoDoc=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_updateunidadMedida` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateunidadMedida`(IN `pcriterio` INT, IN `pdescripcion` VARCHAR(80))
BEGIN
  DECLARE a int;
  set a = 20;
  SET a = (SELECT COUNT(*) FROM tbundmedida WHERE nomunidadm =pdescripcion);
  IF a = 0 THEN
    Update tbundmedida set nomunidadm = pdescripcion where idunidadm=pcriterio;   
    select 0 as xx;
   else
    select 1 as xx;
   END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_viewmobiliario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_viewmobiliario`( IN `pkeyh` int, IN `pnro` int)
BEGIN
  DECLARE a int;
  -- set a = -1;
  -- SET a = (SELECT COUNT(*) FROM tbhabmobiliario WHERE nrohabitacion =  pnro);
  -- IF a > 0 THEN
	SELECT a.cantidad, b.nomMobiliario FROM tbhabmobiliario a, tbmobiliario b where a.idmobiliario = b.idmobiliario and a.nrohabitacion =  pnro;
  -- else
  --  select '1010101' xx;
  -- END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-21 22:06:38
