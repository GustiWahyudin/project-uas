/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - toko_kue
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko_kue` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `toko_kue`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `mail` varchar(128) DEFAULT NULL,
  `img` varchar(128) DEFAULT NULL,
  `pass` varchar(256) DEFAULT NULL,
  `role` int(4) DEFAULT NULL,
  `stat` int(1) DEFAULT NULL,
  `tgljoin` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`mail`,`img`,`pass`,`role`,`stat`,`tgljoin`) values 
(8,'Gusti Wahyudin','gusti@mail.com','default.jpg','$2y$10$RWknClyClyoub6S3URwgq.ToANZMHhrz88eyJas8jFtDo5JdSIY.6',1,1,1623529442),
(9,'test','test@mail.com','default.jpg','$2y$10$BmJq8nLGZ5a32piGbtg/we7wdAlIqsiWPRvqzJhzQWjEKHVNsIy6S',3,1,1623560216);

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`name`) values 
(1,'Administrator'),
(2,'Penjual'),
(3,'Pembeli');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
