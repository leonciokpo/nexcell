/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: nexcellbd
-- ------------------------------------------------------
-- Server version	12.2.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagenes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `producto_id` bigint(20) unsigned NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_producto_id_foreign` (`producto_id`),
  CONSTRAINT `imagenes_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES
(1,1,'images/Celulares/Apple/Gama_Alta/iphone15ProMaxTitanio.jpg','2026-05-24 00:40:34','2026-05-24 00:40:34'),
(2,1,'images/Celulares/Apple/Gama_Alta/iphone15ProMaxBlack.jpg','2026-05-24 00:40:34','2026-05-24 00:40:34'),
(3,2,'images/Celulares/Samsung/Gama_Alta/s25ultrablack.jpg','2026-05-24 00:40:34','2026-05-24 00:40:34'),
(4,2,'images/Celulares/Samsung/Gama_Alta/s25ultrawhite.jpg','2026-05-24 00:40:34','2026-05-24 00:40:34'),
(5,3,'images/Celulares/Xiaomi/Gama_Alta/pocoF7white.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(6,3,'images/Celulares/Xiaomi/Gama_Alta/pocoF7black.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(7,4,'images/Celulares/Motorola/Gama_Alta/motoEdge60proCobalto.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(8,4,'images/Celulares/Motorola/Gama_Alta/motoEdge60proceleste.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(9,5,'images/Celulares/Apple/Gama_Media/iphone14blue.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(10,5,'images/Celulares/Apple/Gama_Media/iphone14purple.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(11,6,'images/Celulares/Apple/Gama_Baja/iphone12black.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(12,6,'images/Celulares/Apple/Gama_Baja/iphone12white.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(13,7,'images/Celulares/Motorola/Gama_Alta/motoRazr40blue.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(14,8,'images/Celulares/Motorola/Gama_Media/g56blue.jpg','2026-05-24 00:40:35','2026-05-24 00:40:35'),
(15,8,'images/Celulares/Motorola/Gama_Media/g56black.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(16,9,'images/Celulares/Motorola/Gama_Media/g84white.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(17,9,'images/Celulares/Motorola/Gama_Media/g84black.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(18,10,'images/Celulares/Samsung/Gama_Alta/s26ultrablack.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(19,10,'images/Celulares/Samsung/Gama_Alta/s26ultrawhite.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(20,10,'images/Celulares/Samsung/Gama_Alta/s26ultrablue.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(21,11,'images/Celulares/Xiaomi/Gama_Alta/pocof8problack.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(22,11,'images/Celulares/Xiaomi/Gama_Alta/pocof8prowhite.jpg','2026-05-24 00:40:36','2026-05-24 00:40:36'),
(23,12,'images/Celulares/Xiaomi/Gama_Media/redmi14white.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(24,12,'images/Celulares/Xiaomi/Gama_Media/redmi14black.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(25,13,'images/accesorios/Apple/airpods2Soloss.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(26,13,'images/accesorios/Apple/airpodsEstuche.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(27,13,'images/accesorios/Apple/estucheAirpod.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(28,14,'images/accesorios/Samsung/cargador25W.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(29,14,'images/accesorios/Samsung/Cargador25Ww.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(30,14,'images/accesorios/Samsung/cargador25CCable.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(31,15,'images/accesorios/Apple/fundas/f1.jpg','2026-05-24 00:40:37','2026-05-24 00:40:37'),
(32,15,'images/accesorios/Apple/fundas/f2.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(33,15,'images/accesorios/Apple/fundas/f3.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(34,15,'images/accesorios/Apple/fundas/f4.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(35,16,'images/accesorios/Auriculares/VinchasJBL.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(36,16,'images/accesorios/Auriculares/VinchasJBL2.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(37,16,'images/accesorios/Auriculares/VinchasJBL3.jpg','2026-05-24 00:40:38','2026-05-24 00:40:38'),
(38,17,'images/accesorios/Auriculares/AuricularesVinchas.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(39,17,'images/accesorios/Auriculares/AuricularesVinchas2.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(40,17,'images/accesorios/Auriculares/AuricularesVinchas3.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(41,18,'images/accesorios/Parlantes/jbl.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(42,18,'images/accesorios/Parlantes/jbl2.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(43,19,'images/accesorios/Parlantes/jblBox.jpg','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(44,20,'images/accesorios/Samsung/SmartWatch.avif','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(45,20,'images/accesorios/Samsung/SmartWatch2.avif','2026-05-24 00:40:39','2026-05-24 00:40:39'),
(46,20,'images/accesorios/Samsung/SmartWatch3.avif','2026-05-24 00:40:41','2026-05-24 00:40:41');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES
(1,'Smartphones','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(2,'Accesorios','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(3,'Auriculares','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(4,'Parlantes','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(5,'Smartwatch','2026-05-24 00:11:12','2026-05-24 00:11:12');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2026_05_09_231805_create_clientes_table',1),
(5,'2026_05_09_234632_create_contactos_table',1),
(6,'2026_05_10_133625_create_perfiles_table',1),
(7,'2026_05_11_132730_create_categorias_table',1),
(8,'2026_05_11_143448_create_marcas_table',1),
(9,'2026_05_11_220755_create_usuarios_table',1),
(10,'2026_05_16_154113_create_productos_table',1),
(11,'2026_05_17_180822_add_rol_to_users_table',1),
(12,'2026_05_17_191148_add_rol_to_usuarios_table',1),
(13,'2026_05_23_202657_create_imagens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_viejo` decimal(10,2) DEFAULT NULL,
  `descuento` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `nuevo` tinyint(1) NOT NULL DEFAULT 0,
  `destacado` tinyint(1) NOT NULL DEFAULT 0,
  `marca_id` bigint(20) unsigned NOT NULL,
  `categoria_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_marca_id_foreign` (`marca_id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `productos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES
(1,'Iphone 15 Pro Max','iPhone 15 Pro Max Apple',2176900.00,2500000.00,30,15,1,1,1,1,'2026-05-24 00:26:12','2026-05-24 00:26:12',NULL),
(2,'Samsung S25 Ultra','Samsung Galaxy S25 Ultra',1771900.00,2100000.00,20,10,1,1,2,1,'2026-05-24 00:26:12','2026-05-24 00:26:12',NULL),
(3,'Poco F7','Xiaomi Poco F7',2316100.00,2700000.00,0,8,1,1,4,1,'2026-05-24 00:26:13','2026-05-24 00:26:13',NULL),
(4,'Motorola Edge 60 Pro','Motorola Edge 60 Pro',526500.00,650000.00,0,12,1,1,3,1,'2026-05-24 00:26:13','2026-05-24 00:26:13',NULL),
(5,'Iphone 14','Apple Iphone 14',1400000.00,NULL,0,14,1,0,1,1,'2026-05-24 00:26:13','2026-05-24 00:26:13',NULL),
(6,'Iphone 12','Apple Iphone 12',950000.00,NULL,0,20,0,0,1,1,'2026-05-24 00:26:13','2026-05-24 00:26:13',NULL),
(7,'Motorola Razr 40','Motorola Razr 40',1200000.00,1400000.00,15,7,1,0,3,1,'2026-05-24 00:26:13','2026-05-24 00:26:13',NULL),
(8,'Motorola G56','Motorola G56',420000.00,NULL,0,18,1,0,3,1,'2026-05-24 00:26:14','2026-05-24 00:26:14',NULL),
(9,'Motorola G84','Motorola G84',480000.00,NULL,0,15,0,0,3,1,'2026-05-24 00:26:14','2026-05-24 00:26:14',NULL),
(10,'Samsung Galaxy S26 Ultra','Samsung Galaxy S26 Ultra',2100000.00,2400000.00,10,9,1,0,2,1,'2026-05-24 00:26:14','2026-05-24 00:26:14',NULL),
(11,'Xiaomi Poco F8 Pro','Xiaomi Poco F8 Pro',1100000.00,NULL,0,11,1,0,4,1,'2026-05-24 00:26:14','2026-05-24 00:26:14',NULL),
(12,'Xiaomi Redmi Note 14','Xiaomi Redmi Note 14',350000.00,NULL,0,22,1,0,4,1,'2026-05-24 00:26:14','2026-05-24 00:26:14',NULL),
(13,'Apple AirPods (3ra generacion)','AirPods Apple',45000.00,60000.00,25,30,1,1,1,3,'2026-05-24 00:26:15','2026-05-24 00:26:15',NULL),
(14,'Cargador Samsung 25W','Cargador Samsung',18000.00,25000.00,15,40,1,0,2,2,'2026-05-24 00:26:15','2026-05-24 00:26:15',NULL),
(15,'Funda de silicona - iPhone 17','Funda para iPhone',8500.00,12000.00,10,50,1,0,1,2,'2026-05-24 00:26:15','2026-05-24 00:26:15',NULL),
(16,'Auriculares JBL','Auriculares JBL vincha',8500.00,12000.00,10,35,1,1,5,3,'2026-05-24 00:26:15','2026-05-24 00:26:15',NULL),
(17,'Auriculares Apple','Auriculares Apple vincha',8500.00,12000.00,10,25,1,0,1,3,'2026-05-24 00:26:16','2026-05-24 00:26:16',NULL),
(18,'Parlante JBL Charge 5','Parlante JBL Charge 5',8500.00,12000.00,10,20,1,1,5,4,'2026-05-24 00:26:16','2026-05-24 00:26:16',NULL),
(19,'Parlante JBL Party Box','Parlante JBL Party Box',8500.00,12000.00,10,12,1,0,5,4,'2026-05-24 00:26:16','2026-05-24 00:26:16',NULL),
(20,'SmartWatch Samsung','SmartWatch Samsung',8500.00,12000.00,10,18,1,1,2,5,'2026-05-24 00:26:18','2026-05-24 00:26:18',NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `marcas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES
(1,'Apple','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(2,'Samsung','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(3,'Motorola','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(4,'Xiaomi','2026-05-24 00:10:55','2026-05-24 00:10:55'),
(5,'JBL','2026-05-24 00:10:55','2026-05-24 00:10:55');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-05-25 21:19:04
