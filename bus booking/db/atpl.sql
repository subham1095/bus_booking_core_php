/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.1.53-community-log : Database - atpl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`atpl` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `atpl`;

/*Table structure for table `bkbus` */

DROP TABLE IF EXISTS `bkbus`;

CREATE TABLE `bkbus` (
  `pnr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `ticket` int(20) DEFAULT NULL,
  `bno` int(11) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `tot_price` float DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pnr`),
  KEY `FK8` (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `bkbus` */

insert  into `bkbus`(`pnr`,`username`,`email`,`ticket`,`bno`,`source`,`destination`,`doj`,`seat`,`price`,`tot_price`,`status`) values 
(1,'subham','subham@gmail.com',3,5,'Durgapur','kolkata','2021-09-28',500,1200,3600,NULL),
(2,'subham','subham@gmail.com',1,5,'Durgapur','kolkata','2021-09-28',500,1200,1200,NULL),
(3,'subham','subham@gmail.com',2,5,'Durgapur','kolkata','2021-09-28',500,1200,2400,NULL),
(4,'subham','subham@gmail.com',3,5,'Durgapur','kolkata','2021-09-28',500,1200,3600,NULL),
(5,'subham','subham@gmail.com',4,5,'Durgapur','kolkata','2021-09-28',500,1200,4800,NULL),
(6,'subham','subham@gmail.com',3,2,'Bihar','kolkata','2021-09-28',500,300,900,NULL),
(7,'boldy','saket@gmail.com',3,4,'Kolkata','Durgapur','2021-09-28',300,560,1680,NULL),
(8,'boldy','saket@gmail.com',4,4,'Kolkata','Durgapur','2021-09-28',297,560,2240,NULL),
(9,'boldy','saket@gmail.com',4,3,'Durgapur','kolkata','2021-09-28',300,560,2240,NULL);

/*Table structure for table `bus_schedule` */

DROP TABLE IF EXISTS `bus_schedule`;

CREATE TABLE `bus_schedule` (
  `bno` int(20) NOT NULL AUTO_INCREMENT,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `seat` int(20) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `bus_schedule` */

insert  into `bus_schedule`(`bno`,`source`,`destination`,`doj`,`seat`,`price`) values 
(1,'Kolkata','Bihar','2021-09-28',200,1000),
(2,'Bihar','kolkata','2021-09-28',497,300),
(3,'Durgapur','kolkata','2021-09-28',296,560),
(4,'Kolkata','Durgapur','2021-09-28',293,560),
(5,'Durgapur','kolkata','2021-09-28',493,1200);

/*Table structure for table `userdetails` */

DROP TABLE IF EXISTS `userdetails`;

CREATE TABLE `userdetails` (
  `username` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `securityQ` varchar(35) NOT NULL,
  `ans` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `userdetails` */

insert  into `userdetails`(`username`,`pswd`,`role`,`phone_no`,`email`,`securityQ`,`ans`) values 
('goldy','123','ythyth','8697222487','subham@gmail.com','gdh','gdf'),
('subham','123','user','8697222487','subham@gmail.com','gdh','gdf'),
('boldy','123','user','8697222487','saket@gmail.com','gdh','gdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
