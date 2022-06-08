# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.5-10.1.26-MariaDB
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2019-08-08 11:57:04
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for db_nuzrath
CREATE DATABASE IF NOT EXISTS `db_nuzrath` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_nuzrath`;


# Dumping structure for table db_nuzrath.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phonne` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='customer master table';

# Data exporting was unselected.


# Dumping structure for table db_nuzrath.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `user_id` varchar(80) NOT NULL,
  `access_code` varchar(80) NOT NULL,
  `user_grp` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='maintains the usernames and passwords of user accounts';

# Data exporting was unselected.


# Dumping structure for table db_nuzrath.property
CREATE TABLE IF NOT EXISTS `property` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(30) DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='property master table';

# Data exporting was unselected.


# Dumping structure for table db_nuzrath.property_archive
CREATE TABLE IF NOT EXISTS `property_archive` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(30) DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='property master table';

# Data exporting was unselected.
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
