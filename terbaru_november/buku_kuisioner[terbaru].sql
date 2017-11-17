/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - buku_kuesioner
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `indeks_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tanggal_lahir` char(50) DEFAULT NULL,
  `umur_anggota` varchar(8) DEFAULT NULL,
  `jk_anggota` char(1) DEFAULT NULL,
  `telepon_pengguna` varchar(13) DEFAULT NULL,
  `kewarganegaraan_anggota` char(3) DEFAULT NULL,
  `asal_pengguna` varchar(15) DEFAULT NULL,
  `identitas_pengguna` varchar(30) DEFAULT NULL,
  `pendidikan_pengguna` varchar(20) DEFAULT NULL,
  `profesi_pengguna` varchar(50) DEFAULT NULL,
  `tempat_studi` varchar(40) DEFAULT NULL,
  `program_studi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`indeks_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori1` */

DROP TABLE IF EXISTS `kategori1`;

CREATE TABLE `kategori1` (
  `id_kategori1` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori1`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori10` */

DROP TABLE IF EXISTS `kategori10`;

CREATE TABLE `kategori10` (
  `id_kategori10` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori10`),
  KEY `fk_id_anggota10` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori2` */

DROP TABLE IF EXISTS `kategori2`;

CREATE TABLE `kategori2` (
  `id_kategori2` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  `jawaban6` varchar(3) DEFAULT NULL,
  `jawaban7` varchar(3) DEFAULT NULL,
  `jawaban8` varchar(3) DEFAULT NULL,
  `jawaban9` varchar(3) DEFAULT NULL,
  `jawaban10` varchar(3) DEFAULT NULL,
  `jawaban11` varchar(3) DEFAULT NULL,
  `jawaban12` varchar(3) DEFAULT NULL,
  `jawaban13` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori2`),
  KEY `fk_id_anggota2` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori3` */

DROP TABLE IF EXISTS `kategori3`;

CREATE TABLE `kategori3` (
  `id_kategori3` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  `jawaban6` varchar(3) DEFAULT NULL,
  `jawaban7` varchar(3) DEFAULT NULL,
  `jawaban8` varchar(3) DEFAULT NULL,
  `jawaban9` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori3`),
  KEY `fk_id_anggota3` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori4` */

DROP TABLE IF EXISTS `kategori4`;

CREATE TABLE `kategori4` (
  `id_kategori4` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori4`),
  KEY `fk_id_anggota4` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori5` */

DROP TABLE IF EXISTS `kategori5`;

CREATE TABLE `kategori5` (
  `id_kategori5` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  `jawaban6` varchar(3) DEFAULT NULL,
  `jawaban7` varchar(3) DEFAULT NULL,
  `jawaban8` varchar(3) DEFAULT NULL,
  `jawaban9` varchar(3) DEFAULT NULL,
  `jawaban10` varchar(3) DEFAULT NULL,
  `jawaban11` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori5`),
  KEY `fk_id_anggota5` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori6` */

DROP TABLE IF EXISTS `kategori6`;

CREATE TABLE `kategori6` (
  `id_kategori6` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori6`),
  KEY `fk_id_anggota6` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori7` */

DROP TABLE IF EXISTS `kategori7`;

CREATE TABLE `kategori7` (
  `id_kategori7` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  `jawaban6` varchar(3) DEFAULT NULL,
  `jawaban7` varchar(3) DEFAULT NULL,
  `jawaban8` varchar(3) DEFAULT NULL,
  `jawaban9` varchar(3) DEFAULT NULL,
  `jawaban10` varchar(3) DEFAULT NULL,
  `jawaban11` varchar(3) DEFAULT NULL,
  `jawaban12` varchar(3) DEFAULT NULL,
  `jawaban13` varchar(3) DEFAULT NULL,
  `jawaban14` varchar(3) DEFAULT NULL,
  `jawaban15` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori7`),
  KEY `fk_id_anggota7` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori8` */

DROP TABLE IF EXISTS `kategori8`;

CREATE TABLE `kategori8` (
  `id_kategori8` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori8`),
  KEY `fk_id_anggota8` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori9` */

DROP TABLE IF EXISTS `kategori9`;

CREATE TABLE `kategori9` (
  `id_kategori9` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  `jawaban6` varchar(3) DEFAULT NULL,
  `jawaban7` varchar(3) DEFAULT NULL,
  `jawaban8` varchar(3) DEFAULT NULL,
  `jawaban9` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori9`),
  KEY `fk_id_anggota9` (`id_anggota_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `kunjungan` */

DROP TABLE IF EXISTS `kunjungan`;

CREATE TABLE `kunjungan` (
  `indeks_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `indeks_anggota_fk` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keperluan_kunjungan` varchar(50) DEFAULT NULL,
  `kategori_kunjungan` varchar(50) DEFAULT NULL,
  `jumlah_kunjungan` varchar(20) DEFAULT NULL,
  `fokus_kunjungan` varchar(50) DEFAULT NULL,
  `media_kunjungan` varchar(50) DEFAULT NULL,
  `proyeksi_kunjungan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`indeks_kunjungan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
