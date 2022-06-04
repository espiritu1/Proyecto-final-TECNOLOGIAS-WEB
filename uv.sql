-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: uv
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id_comentario` int(100) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'una buena pc para programar con python'),(2,'la pc esta muy lenta y no tiene ningun lenguaje de programacion instalado'),(3,'tiene una vercion de linux muy vieja'),(4,'tiene instaldo windows 10 pero esta muy lenta y el antivirus se consume la ram'),(5,'la pantalla es muy pequela y se ve borrosa'),(6,'me encato trabajar con esta computadora por que tiene instalado mi lenguaje favorito C y respnde muy rapido'),(7,'el teclado esta muy sucio y el mouse no responde bien '),(8,'es una mumuy buena computadora la recomiendo para trabajar paginas web'),(9,'la pantalla tiene muy buena resolucuon y la pc responde muy rapido'),(10,'le flata linux'),(11,'le falta windows'),(12,'para ser una mac esta muy lenta');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id_materia` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (1,'base de datos'),(4,'programacion'),(5,'redes'),(6,'desarrollo movil'),(7,'sistemas web'),(8,'tecnologias web');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pc` (
  `id_equipo` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(200) NOT NULL,
  `descripcio` text NOT NULL,
  `num_inventario` varchar(100) NOT NULL,
  `id_comentario` int(100) NOT NULL,
  PRIMARY KEY (`id_equipo`),
  KEY `id_comentario` (`id_comentario`),
  CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`id_comentario`) REFERENCES `comentarios` (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc`
--

LOCK TABLES `pc` WRITE;
/*!40000 ALTER TABLE `pc` DISABLE KEYS */;
INSERT INTO `pc` VALUES (2,'CC1 PC1','HP prodesk 600\r\ncon procesador Intel i5-4570\r\n8 GB de RAM con windows 10\r\ny con programas como  python,Java,C# yPHPmyAdmin','FeiUvCC1-1',1),(3,'CC2 PC1','Lenovo Think M910Q\r\nSistema operativo windows 10\r\ncon procesador intel-core i7-6700\r\n16 GB de RAM y SSD\r\ncon programas: Unreal Engine, Unity, C# y PHPmyAdmin','FeiUvCC2-1',2),(4,'CC3 PC1','DELL optiplex 3050\r\nSistema operativo Windows 10\r\nprocesador intel Quad core i5-6500\r\n16 GB de RAM\r\nprogramas: Kotlin y swift','FeiUvCC3-1',11),(7,'CC2 PC2','HP EliteDesk 800GL\r\nprocesador Intel QuadCore i7-4770\r\nsistema operativo  LINUX\r\n16 GB de RAM\r\nProgramas: python, JAVA, C C++, C#, MysqlWorkbench','FeiUvCC2-2',3),(8,'CC4 PC1','Apple 2021 IMAC con pantalla 24\"\r\ncon Swift, java PHPMyAdmin','FeiUvCC4-1',12);
/*!40000 ALTER TABLE `pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `h_entrada` time NOT NULL,
  `h_actua` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_materia` int(100) NOT NULL,
  `id_usuario` int(100) NOT NULL,
  `id_equipo` int(100) NOT NULL,
  `motivo_pres` text DEFAULT NULL,
  `h_salida` time DEFAULT NULL,
  PRIMARY KEY (`id_prestamo`),
  KEY `id_materia` (`id_materia`),
  KEY `id_equipo` (`id_equipo`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `prestamos_ibfk_3` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`),
  CONSTRAINT `prestamos_ibfk_4` FOREIGN KEY (`id_equipo`) REFERENCES `pc` (`id_equipo`),
  CONSTRAINT `prestamos_ibfk_5` FOREIGN KEY (`id_usuario`) REFERENCES `usarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

LOCK TABLES `prestamos` WRITE;
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
INSERT INTO `prestamos` VALUES (1,'14:00:00','2022-06-03 21:02:58',6,37,8,'necesito hacer un CRUD en una aplicacion de apple','20:00:00');
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(255) NOT NULL,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Admin'),(2,'Maestro'),(3,'Estudiante');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usarios`
--

DROP TABLE IF EXISTS `usarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_rol` (`id_rol`),
  CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usarios`
--

LOCK TABLES `usarios` WRITE;
/*!40000 ALTER TABLE `usarios` DISABLE KEYS */;
INSERT INTO `usarios` VALUES (3,'Zarate Navarro Willian','1234','tecnologias Cumputacioanles',2,'1234'),(5,'Admin','0000000000','Tecnologias computacionaes',1,'1234'),(28,'Julián Mondragon','zs1234567','Tecnologia Computacionales ',3,'yuliosmg'),(29,'Oscar Juarez','zS1304566','Tecnologia Computacionales ',3,'123456'),(37,'fere','zs16030319','Tecnologia Computacionales ',3,'1234'),(41,'rojano','2345','Ingenieria de Software',2,'1234'),(43,'erika meneces rico','12345678','Redes',2,'1234');
/*!40000 ALTER TABLE `usarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-03 21:51:31
