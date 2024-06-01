/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_moviemate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_moviemate` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_moviemate`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `employee` */

insert  into `employee`(`username`,`password`,`name`,`status`,`updated_at`,`created_at`) values 
('emp','emp','Employee 1',1,'2024-05-24 13:04:32','2024-05-24 13:04:32'),
('rap','rap','rap',1,'2024-05-06 07:46:27','2024-05-06 07:46:27'),
('tino','tino','tino',1,'2024-05-06 02:31:47','2024-05-06 02:31:47');

/*Table structure for table `licenses` */

DROP TABLE IF EXISTS `licenses`;

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `movieID` (`movieID`),
  CONSTRAINT `licenses_ibfk_1` FOREIGN KEY (`movieID`) REFERENCES `movie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `licenses` */

insert  into `licenses`(`id`,`movieID`,`created_at`) values 
(1,1,'2024-05-24 13:13:08'),
(2,2,'2024-05-28 17:24:02');

/*Table structure for table `location` */

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `location` */

insert  into `location`(`id`,`location`,`address`) values 
(1,'XXI Nganjuk','Jl. Ngagel Jaya Tengah No.73-77, Baratajaya, Kec. Gubeng, Surabaya, Jawa Timur 60284');

/*Table structure for table `movie` */

DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `producer` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `genre` varchar(225) DEFAULT NULL,
  `license` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `synopsis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `license` (`license`),
  CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`license`) REFERENCES `licenses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `movie` */

insert  into `movie`(`id`,`title`,`duration`,`cast`,`producer`,`director`,`poster`,`genre`,`license`,`status`,`synopsis`) values 
(1,'Elemental',120,'Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr','Pixar','John Lasseter and Pete Docter','https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg','Kids',1,1,'\"Elemental\" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water ny'),
(2,'How to Make Millions Before Grandma Dies',126,'Putthipong Assaratanakul, Tontawan Tantivejakul, Usha Seamkhum, Sarinrat Thomas, Sanya Kunakorn, Pongsatorn Jongwilas, Himawari Tajiri','GDH','Pat Boonnitipat','https://asset.tix.id/wp-content/uploads/2024/05/0ae91767-957f-476b-a433-028aba02e6f2.webp','Drama',2,1,'A young man quits his job to look after his dying grandmother and it becomes a journey of complex family relationships, sacrifices and the pursuit of happiness.');

/*Table structure for table `offers` */

DROP TABLE IF EXISTS `offers`;

CREATE TABLE `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `max_trans` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `offers` */

insert  into `offers`(`id`,`code`,`discount`,`max_trans`,`status`) values 
(1,'AYONOBAR',10,200000,1),
(2,'NONTONMURAH',5,50000,0);

/*Table structure for table `orderdetails` */

DROP TABLE IF EXISTS `orderdetails`;

CREATE TABLE `orderdetails` (
  `orderNumber` int(11) NOT NULL,
  `seatID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`orderNumber`,`seatID`),
  KEY `seatID` (`seatID`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderNumber`) REFERENCES `orders` (`orderNumber`),
  CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`seatID`) REFERENCES `seats` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `orderdetails` */

insert  into `orderdetails`(`orderNumber`,`seatID`,`price`) values 
(2,1,40000),
(2,2,40000);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orderNumber` int(11) NOT NULL AUTO_INCREMENT,
  `screeningID` int(11) NOT NULL,
  `offerID` int(11) DEFAULT NULL,
  `customer` varchar(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `subtotal` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`orderNumber`),
  KEY `customer` (`customer`),
  KEY `employee` (`employee`),
  KEY `screeningID` (`screeningID`),
  KEY `offerID` (`offerID`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `user` (`username`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`employee`) REFERENCES `employee` (`username`),
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`screeningID`) REFERENCES `screening` (`id`),
  CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`offerID`) REFERENCES `offers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `orders` */

insert  into `orders`(`orderNumber`,`screeningID`,`offerID`,`customer`,`employee`,`created_at`,`subtotal`,`grandtotal`,`status`) values 
(2,1,NULL,'user','emp','2024-05-05 21:46:46',80000,80000,1);

/*Table structure for table `screening` */

DROP TABLE IF EXISTS `screening`;

CREATE TABLE `screening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(11) NOT NULL,
  `studioID` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movieID` (`movieID`),
  KEY `studioID` (`studioID`),
  CONSTRAINT `screening_ibfk_1` FOREIGN KEY (`movieID`) REFERENCES `movie` (`id`),
  CONSTRAINT `screening_ibfk_2` FOREIGN KEY (`studioID`) REFERENCES `studio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `screening` */

insert  into `screening`(`id`,`movieID`,`studioID`,`starttime`) values 
(1,1,1,'2024-05-05 08:00:00'),
(2,1,1,'2024-05-05 12:00:00'),
(3,1,1,'2024-05-05 18:00:00'),
(4,2,2,'2024-05-05 08:00:00'),
(5,2,2,'2024-05-05 18:00:00');

/*Table structure for table `seats` */

DROP TABLE IF EXISTS `seats`;

CREATE TABLE `seats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studioID` int(11) NOT NULL,
  `seatnumber` varchar(3) NOT NULL,
  `seatrow` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studioID` (`studioID`),
  CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`studioID`) REFERENCES `studio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=478 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `seats` */

insert  into `seats`(`id`,`studioID`,`seatnumber`,`seatrow`) values 
(1,1,'1','A'),
(2,1,'2','A'),
(3,1,'3','A'),
(4,1,'4','A'),
(5,1,'5','A'),
(6,1,'6','A'),
(7,1,'7','A'),
(8,1,'8','A'),
(9,1,'9','A'),
(10,1,'10','A'),
(11,1,'1','B'),
(12,1,'2','B'),
(13,1,'3','B'),
(14,1,'4','B'),
(15,1,'5','B'),
(16,1,'6','B'),
(17,1,'7','B'),
(18,1,'8','B'),
(19,1,'9','B'),
(20,1,'10','B'),
(21,2,'1','A'),
(22,2,'2','A'),
(23,2,'3','A'),
(24,2,'4','A'),
(25,2,'5','A'),
(26,2,'6','A'),
(27,2,'7','A'),
(28,2,'8','A'),
(29,2,'9','A'),
(30,2,'10','A'),
(31,2,'1','B'),
(32,2,'2','B'),
(33,2,'3','B'),
(34,2,'4','B'),
(35,2,'5','B'),
(36,2,'6','B'),
(37,2,'7','B'),
(38,2,'8','B'),
(39,2,'9','B'),
(40,2,'10','B'),
(41,3,'1','A'),
(42,3,'2','A'),
(43,3,'3','A'),
(44,3,'4','A'),
(45,3,'5','A'),
(46,3,'6','A'),
(47,3,'7','A'),
(48,3,'8','A'),
(49,3,'9','A'),
(50,3,'10','A'),
(51,3,'1','B'),
(52,3,'2','B'),
(53,3,'3','B'),
(54,3,'4','B'),
(55,3,'5','B'),
(56,3,'6','B'),
(57,3,'7','B'),
(58,3,'8','B'),
(59,3,'9','B'),
(60,3,'10','B');

/*Table structure for table `studio` */

DROP TABLE IF EXISTS `studio`;

CREATE TABLE `studio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `location` (`location`),
  CONSTRAINT `studio_ibfk_1` FOREIGN KEY (`location`) REFERENCES `location` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `studio` */

insert  into `studio`(`id`,`location`,`name`,`capacity`,`status`) values 
(1,1,'BIND',20,1),
(2,1,'ASCENT',20,1),
(3,1,'LOTUS',20,0);

/*Table structure for table `topup` */

DROP TABLE IF EXISTS `topup`;

CREATE TABLE `topup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL DEFAULT '-',
  `amount` int(11) NOT NULL,
  `transdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `snap_token` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`),
  CONSTRAINT `topup_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `topup` */

insert  into `topup`(`id`,`customer`,`method`,`amount`,`transdate`,`status`,`snap_token`) values 
(1,'user','OVO',100000,'2024-05-05 21:42:50',1,NULL),
(2,'user','-',25000,'2024-06-01 01:21:05',0,'923da6f7-4299-4377-b21c-c64d0fcafab6'),
(3,'user','-',25000,'2024-06-01 12:30:06',0,'7ce7dcf4-a295-4033-b4c6-e176e261fa4a'),
(4,'user','-',25000,'2024-06-01 12:30:49',0,'98507c3e-d525-4e71-915c-d15f005525a8'),
(5,'user','-',234234234,'2024-06-01 13:51:02',0,'095126d8-d687-4958-88ee-6a987efc6774'),
(6,'user','-',234234234,'2024-06-01 13:51:35',0,'05d51d2b-e135-4624-a5ac-f71801944bc2'),
(7,'user','-',234234234,'2024-06-01 13:51:49',0,'acf5dda4-1d8f-4df0-b28c-84c347ef113a'),
(8,'user','-',50000,'2024-06-01 14:33:19',0,'7475b975-b5f5-419e-a57b-77ace4f9e094'),
(9,'user','-',50000,'2024-06-01 14:34:10',0,'435943aa-ded7-4434-9340-36dbc498e88f'),
(10,'user','-',50000,'2024-06-01 14:35:09',0,'10a693fc-936b-4f55-af67-4743d266620d'),
(11,'user','-',50000,'2024-06-01 14:39:21',1,'06e1ea5d-bc39-4187-aa87-c2caeab265ac'),
(12,'user','-',50000,'2024-06-01 14:41:59',1,'3c1df8fb-ccb5-411b-ae70-f3cd2fcccda2'),
(13,'user','-',50000,'2024-06-01 14:49:38',1,'3593b8ce-1514-499a-84ee-eb6700e68cff'),
(14,'user','-',50000,'2024-06-01 14:55:55',1,'2fa00163-7063-4095-9e22-f09704c4b7ea'),
(15,'user','-',50000,'2024-06-01 15:00:33',1,'a76dcad1-e452-4cfc-8d0d-227340c5d7c7');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `balance` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`email`,`telp`,`balance`,`created_at`,`updated_at`) values 
('ayam','$2y$12$SOyINePGbMdh.MmyvYk/EuDZ0X3V7/t3abCW266T.FCzHOWE8U8QK','tes@gmail.com','123',0,'2024-05-31 11:01:05','2024-05-31 11:01:05'),
('tes','$2y$12$h/TQEItCKroQxUytRRlrCurDK0P4MHTyMkakGeOwiTbph6SpI8Clm','tes@gmail.com','123123',0,'2024-05-22 18:07:10','2024-05-22 18:07:10'),
('user','$2y$12$UJdbo6QifPJOai3kEHOBS.9WDKEH90o0im6CUfXyog9GYSgLV1SwW','user@gmail.com','081234567890',350000,NULL,'2024-06-01 08:00:56');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
