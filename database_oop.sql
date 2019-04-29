-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for phpopdr1oop
CREATE DATABASE IF NOT EXISTS `oop_php_mvc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `oop_php_mvc`;

-- Dumping structure for table phpopdr1oop.houses
CREATE TABLE IF NOT EXISTS `houses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` char(50) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `toilets` int(11) DEFAULT NULL,
  `heating` int(11) DEFAULT NULL,
  `heatingtype` text,
  `streetname` text NOT NULL,
  `housenumber` text,
  `livesquaremeter` int(11) DEFAULT NULL,
  `propertysquaremeter` int(11) DEFAULT NULL,
  `wozwaarde` int(255) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Dumping data for table phpopdr1oop.houses: ~1 rows (approximately)
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
INSERT INTO `houses` (`id`, `city`, `rooms`, `toilets`, `heating`, `heatingtype`, `streetname`, `housenumber`, `livesquaremeter`, `propertysquaremeter`, `wozwaarde`, `tax`) VALUES
	(51, 'Sustrum', 16, 15, 1, 'CV', 'Teichstrasse ', '9', 80, 1000, 25000000, 6800);
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(120) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;