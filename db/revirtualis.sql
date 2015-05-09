-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.56-community - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-05-09 13:41:45
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for revirtualis
DROP DATABASE IF EXISTS `revirtualis`;
CREATE DATABASE IF NOT EXISTS `revirtualis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `revirtualis`;


-- Dumping structure for table revirtualis.release_subscription
DROP TABLE IF EXISTS `release_subscription`;
CREATE TABLE IF NOT EXISTS `release_subscription` (
  `release_subscription_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subscription_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`release_subscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table revirtualis.release_subscription: ~0 rows (approximately)
/*!40000 ALTER TABLE `release_subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `release_subscription` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
