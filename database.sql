-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for scotchbox
CREATE DATABASE IF NOT EXISTS `scotchbox` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `scotchbox`;

-- Dumping structure for table scotchbox.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(256) NOT NULL DEFAULT '0',
  `user_email` varchar(256) NOT NULL DEFAULT '0',
  `user_pass` varchar(256) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table scotchbox.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
	(5, 'test', 'test@gmail.com', '$2y$10$pLvNM4qsPkTdjXE5oZ5bpuFNQ4l/jPineAOZYjRr0s4wqwQ451ILu'),
	(6, 'test test', 'test@gmail.com', '$2y$10$s2dY8.uYewObWDMUnC1GKOoo.oUYCPhbOSIn86tizyRZMav.IsdC2'),
	(7, 'Beka Somkhishvili', 'beka@gmail.com', '$2y$10$0xM1/h88ZM83PpMBXwvAmuxexOYm7HNZUIpwsVxQIQWiBL4tUZr1y');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
