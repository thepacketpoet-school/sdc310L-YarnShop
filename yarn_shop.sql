-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: yarn_shop
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL DEFAULT 0,
  `image_url` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Soft Merino Wool - Dusty Rose','Premium 100% merino wool yarn, perfect for sweaters and scarves. Super soft and warm. 200 yards per skein.',12.99,50,'images/merino-dusty-rose.svg','Wool','2026-01-05 03:41:42'),(2,'Cotton Blend - Ocean Blue','Lightweight cotton blend yarn ideal for summer projects. Machine washable. 150 yards per skein.',8.99,75,'images/cotton-ocean-blue.svg','Cotton','2026-01-05 03:41:42'),(3,'Chunky Alpaca - Cream','Luxuriously soft alpaca yarn for quick, cozy projects. Hypoallergenic. 100 yards per skein.',18.99,30,'images/alpaca-cream.svg','Alpaca','2026-01-05 03:41:42'),(4,'Acrylic Worsted - Rainbow Multi','Colorful self-striping acrylic yarn. Great for beginners and kids projects. 300 yards per skein.',5.99,100,'images/acrylic-rainbow.svg','Acrylic','2026-01-05 03:41:42'),(5,'Bamboo Silk - Sage Green','Eco-friendly bamboo and silk blend with beautiful drape. Perfect for shawls. 175 yards per skein.',14.99,40,'images/bamboo-sage.svg','Bamboo','2026-01-05 03:41:42'),(6,'Mohair Lace - Blush Pink','Delicate mohair lace weight yarn for elegant accessories. Creates beautiful halo effect. 400 yards per skein.',16.99,25,'images/mohair-blush.svg','Mohair','2026-01-05 03:41:42');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-25 10:54:23
