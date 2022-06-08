# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.5-10.1.26-MariaDB
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2019-07-26 10:58:14
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for db_nuzrath
DROP DATABASE IF EXISTS `db_nuzrath`;
CREATE DATABASE IF NOT EXISTS `db_nuzrath` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_nuzrath`;


# Dumping structure for table db_nuzrath.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phonne` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='customer master table';

# Dumping data for table db_nuzrath.customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


# Dumping structure for table db_nuzrath.property
CREATE TABLE IF NOT EXISTS `property` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(30) DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='property master table';

# Dumping data for table db_nuzrath.property: ~10 rows (approximately)
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` (`pid`, `title`, `description`, `location`, `price`, `picture`) VALUES
	(1, 'Lnad for sale', '120 Perch Coconut Land for sale', 'Kurunagala', 20000000, 'default.jpg'),
	(2, 'Luxury Shop', '2 store building with tiled floor', 'Kandy', 1300000, 'default.jpg'),
	(3, 'House for Sale', 'newly built house for sale, selling due to owner migrating', 'Kegalle', 6500000, 'default.jpg'),
	(4, 'House ', 'nice house for sale in a calm and quite environment', 'Hantana', 7500000, 'default.jpg'),
	(5, 'Shop', 'shop for immediate sale', 'Kandy', 4500000, 'default.jpg'),
	(6, 'Bangalow', 'Bangalow for sale', 'Nuwara Eliya', 8500000, 'default.jpg'),
	(7, 'House', 'New house for sale with all equipment', 'Kandy', 12500000, 'default.jpg'),
	(8, 'Shop', 'Newly built shop for sale', 'Kegalle', 4300000, 'default.jpg'),
	(11, 'House', 'Newly built 2 store house', 'Kandy', 7500000, 'default.jpg'),
	(12, 'Shop for Sale', 'newly built 2 store luxury shop for immediate sale,\r\nserious buyers only.', 'Kandy', 9500000, 'default.jpg'),
	(21, 'Shop for Sale', 'newly built 2 store luxury shop for immediate sale,\r\nserious buyers only.', 'Akurana 7\' mile post', 9500000, 'default.jpg'),
	(22, 'Rubber Land for Sale', '2 acres of Highly productive rubber for sale\r\nprice negotiable', 'Kaluthara', 40000000, 'default.jpg');
/*!40000 ALTER TABLE `property` ENABLE KEYS */;


# Dumping structure for table db_nuzrath.property_archive
CREATE TABLE IF NOT EXISTS `property_archive` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(30) DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='property master table';

# Dumping data for table db_nuzrath.property_archive: ~0 rows (approximately)
/*!40000 ALTER TABLE `property_archive` DISABLE KEYS */;
INSERT INTO `property_archive` (`pid`, `title`, `description`, `location`, `price`, `picture`) VALUES
	(10, 'Shop', 'New Shop for Sale akurana 7\' post', 'Kandy', 4500000, 'default.jpg');
/*!40000 ALTER TABLE `property_archive` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
