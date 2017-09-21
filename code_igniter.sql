/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.19-MariaDB : Database - code_igniter
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`code_igniter` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci */;

USE `code_igniter`;

/*Table structure for table `br_product` */

DROP TABLE IF EXISTS `br_product`;

CREATE TABLE `br_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image1` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image2` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image3` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image4` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image5` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image6` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `description` text COLLATE utf8_vietnamese_ci,
  `price` double DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_type_id` (`type_id`),
  CONSTRAINT `FK_type_id` FOREIGN KEY (`type_id`) REFERENCES `br_type` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `br_product` */

/*Table structure for table `br_type` */

DROP TABLE IF EXISTS `br_type`;

CREATE TABLE `br_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `br_type` */

insert  into `br_type`(`type_id`,`type_name`) values (1,'Đầm len'),(2,'Áo len'),(3,'Áo khoác len'),(4,'Sét bộ'),(5,'Đầm hoa'),(6,'Áo sơ mi');

/*Table structure for table `br_user` */

DROP TABLE IF EXISTS `br_user`;

CREATE TABLE `br_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass_word` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`,`pass_word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `br_user` */

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_vietnamese_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_vietnamese_ci NOT NULL,
  `text` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`slug`,`text`) values (8,'new 6','new-6','text 6'),(9,'new 4','new-4','text 4'),(10,'new 10','new-10','text 10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
