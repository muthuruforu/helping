/*
SQLyog Community v11.52 (32 bit)
MySQL - 5.5.27 : Database - bloodlist
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bloodlist` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bloodlist`;

/*Table structure for table `blood_req` */

DROP TABLE IF EXISTS `blood_req`;

CREATE TABLE `blood_req` (
  `pat_name` varchar(20) NOT NULL,
  `typ_dis` varchar(20) NOT NULL,
  `doc_name` varchar(20) NOT NULL,
  `whn_req` date NOT NULL,
  `cont_num` varchar(12) NOT NULL,
  `blood_grp` varchar(5) NOT NULL,
  `quan` varchar(3) NOT NULL,
  `req_city` varchar(20) NOT NULL,
  `cont_per_name` varchar(20) NOT NULL,
  `hosp_add` varchar(50) NOT NULL,
  `dt` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `blood_req` */

insert  into `blood_req`(`pat_name`,`typ_dis`,`doc_name`,`whn_req`,`cont_num`,`blood_grp`,`quan`,`req_city`,`cont_per_name`,`hosp_add`,`dt`) values ('reddy','fever','reddy','0000-00-00','91-738229173','A+','1','kadapa','7382291733','hi','2016-04-17');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `name` varchar(15) NOT NULL,
  `mob_num` varchar(12) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`name`,`mob_num`,`e_mail`,`message`) values ('msreddy','7382291733','muthuruforu@gmail.com','hello'),('muthuru','7382291733','muthu@gmail.com','hello mr msreddy i need your help.'),('','','',''),('msreddy','7382291733','muthurusreenivas@gmail.com','hello mr ms'),('','','',''),('','','',''),('avi','7382291733','muthurusreenivas@gmail.com','fgdohftht');

/*Table structure for table `donar_list` */

DROP TABLE IF EXISTS `donar_list`;

CREATE TABLE `donar_list` (
  `donar_id` int(11) NOT NULL AUTO_INCREMENT,
  `donar_name` varchar(55) DEFAULT NULL,
  `donar_age` int(55) DEFAULT NULL,
  `donar_gender` varchar(55) DEFAULT NULL,
  `donar_dob` varchar(55) DEFAULT NULL,
  `donar_weight` int(55) DEFAULT NULL,
  `donar_state` varchar(55) DEFAULT NULL,
  `donar_city` varchar(55) DEFAULT NULL,
  `donar_pincode` int(55) DEFAULT NULL,
  `donar_mobile` int(55) DEFAULT NULL,
  `donar_email` varchar(55) DEFAULT NULL,
  `donar_bg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`donar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `donar_list` */

insert  into `donar_list`(`donar_id`,`donar_name`,`donar_age`,`donar_gender`,`donar_dob`,`donar_weight`,`donar_state`,`donar_city`,`donar_pincode`,`donar_mobile`,`donar_email`,`donar_bg`) values (1,'muthuru sreenu',22,'Male','18-07-1994',55,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','O+'),(2,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','A+'),(3,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','A-'),(4,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','B+'),(5,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','B-'),(6,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','AB+'),(7,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','AB-'),(8,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','O+'),(9,'msreddy',22,'Male','18-07-1994',50,'andhara pradesh','kadapa',516172,2147483647,'muthurusreenivas@gmail.com','O-'),(10,'chandu',22,'Male','18-07-1994',70,'andhara pradesh','kadapa',516172,2147483647,'admin@gmail.com','O-'),(11,'chandu',22,'Male','18-07-1994',70,'andhara pradesh','kadapa',516172,2147483647,'admin@gmail.com','B+'),(12,'chandu',22,'Male','18-07-1994',70,'andhara pradesh','kadapa',516172,2147483647,'admin@gmail.com','B+'),(13,'chandu',22,'Male','18-07-1994',70,'andhara pradesh','kadapa',516172,2147483647,'admin@gmail.com','B-'),(14,'chandu',22,'Male','18-07-1994',70,'andhara pradesh','kadapa',516172,2147483647,'admin@gmail.com','AB+'),(15,'Anil',24,'Male','21-08-1993',70,'andhara pradesh','kurnool',518004,2147483647,'muthurusreenivas@gmail.com','O+'),(16,'msreddy',0,'Male','18-07-1994',55,'','',0,2147483647,'muthurusreenivas@gmail.com','A-');

/*Table structure for table `member_reg` */

DROP TABLE IF EXISTS `member_reg`;

CREATE TABLE `member_reg` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mob_num` varchar(12) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `member_reg` */

insert  into `member_reg`(`uname`,`pass`,`name`,`mob_num`,`e_mail`,`msg`) values ('msreddy','12345','sreenu','7382291733','muthuruforu@gmail.com','hello'),('sree','12345','sreenu','7382291733','muthur@gmail.com','HR'),('ddf','123','vasudevareddy','7382291733','jay@gmail.com','wew'),('msreddy1','123','msreddy','7382291733','muthuruforu@gmail.com','hello'),('anil','12345','anil kumar reddy','9390756808','anil1010903001@gmail.com','i am mr ms blood group is \"O positive\"');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
