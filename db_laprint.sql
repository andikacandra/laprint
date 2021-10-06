/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.26-0ubuntu0.20.04.3 : Database - db_laprint
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_laprint` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_laprint`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) DEFAULT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `address` text,
  `place_of_birth` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `start_join` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `employee` */

insert  into `employee`(`id`,`nik`,`first_name`,`last_name`,`address`,`place_of_birth`,`date_of_birth`,`start_join`,`created_at`,`delete`) values 
(1,'IP00001','AGUS','SETYO','Jln Gaja Mada no 12, Surabaya ','SURABAYA','1980-01-11','2005-08-07','2021-10-06 12:47:25',NULL),
(2,'IP00002','AMIN','MUBARRAQ','Jln Imam Bonjol no 11, Mojokerto','MOJOKERTO','1977-09-03','2005-08-07','2021-10-06 12:47:30',NULL),
(3,'IP00003','YUSUF','RIZKI','Jln A Yani Raya 15 No 14 Malang','MALANG','1973-08-09','2005-08-07','2021-10-06 12:48:24',NULL),
(4,'IP00004','ALYYSA','NUR','Jln Bungur Sari V no 166, Bandung','BANDUNG','1983-03-18','2006-09-06','2021-10-06 12:50:31',NULL),
(5,'IP00005','MAULANA','ZAKIA','Jln Candi Agung, No 78 Gg 5, Jakarta','JAKARTA','1978-10-10','2006-09-10','2021-10-06 12:50:39',NULL),
(6,'IP00006','AGFIKA','MULYO','Jln Nangka, Jakarta Timur','JAKARTA','1979-02-07','2007-01-02','2021-10-06 12:50:49',NULL),
(7,'IP00007','JAMES','BOND','Jln Merpati, 8 Surabaya','SURABAYA','1989-05-18','2007-04-04','2021-10-06 12:50:59',NULL),
(8,'IP00008','OCTAVANUS','HARSY','Jln A Yani 17, B 08 Sidoarjo','SIDOARJO','1985-04-14','2007-05-19','2021-10-06 12:51:04',NULL),
(9,'IP00009','NUGROHO','CAHYO','Jln Duren tiga 167, Jakarta Selatan','JAKARTA','1984-01-01','2008-01-16','2021-10-06 12:51:12',NULL),
(10,'IP00010','RAISA','QUIN','Jln Kelapa Sawit, Jakarta Selatan','JAKARTA','1990-12-17','2008-08-16','2021-10-06 12:51:14',NULL);

/*Table structure for table `employee_leave` */

DROP TABLE IF EXISTS `employee_leave`;

CREATE TABLE `employee_leave` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee` int DEFAULT NULL,
  `leave_date` date DEFAULT NULL,
  `long_leave` int DEFAULT NULL,
  `notes` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `employee_leave` */

insert  into `employee_leave`(`id`,`employee`,`leave_date`,`long_leave`,`notes`,`created_at`,`delete`) values 
(1,1,'2021-08-02',2,'Acara Keluarga','2021-10-06 12:59:46',NULL),
(2,1,'2021-08-18',2,'Anak Sakit','2021-10-06 12:59:51',NULL),
(3,6,'2021-08-19',1,'Nenek Sakit','2021-10-06 13:00:13',NULL),
(4,7,'2021-08-23',1,'Sakit','2021-10-06 13:00:13',NULL),
(5,4,'2021-08-29',5,'Menikah','2021-10-06 13:00:14',NULL),
(6,3,'2021-08-30',2,'Acara Keluarga','2021-10-06 13:00:17',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;