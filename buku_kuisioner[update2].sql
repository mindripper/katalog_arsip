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
  `nama_anggota` varchar(50) NOT NULL,
  `tanggal_lahir` char(6) NOT NULL,
  `umur_anggota` varchar(8) NOT NULL,
  `jk_anggota` char(1) NOT NULL,
  `telepon_pengguna` varchar(13) NOT NULL,
  `kewarganegaraan_anggota` char(3) NOT NULL,
  `asal_pengguna` varchar(15) NOT NULL,
  `identitas_pengguna` varchar(30) NOT NULL,
  `pendidikan_pengguna` varchar(20) NOT NULL,
  `profesi_pengguna` varchar(50) NOT NULL,
  `tempat_studi` varchar(40) NOT NULL,
  PRIMARY KEY (`indeks_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`indeks_anggota`,`nama_anggota`,`tanggal_lahir`,`umur_anggota`,`jk_anggota`,`telepon_pengguna`,`kewarganegaraan_anggota`,`asal_pengguna`,`identitas_pengguna`,`pendidikan_pengguna`,`profesi_pengguna`,`tempat_studi`) values (1,'amik','sby 17','21','l','085748157523','wni','sby','5114100101','sma','kuli koding','its');

/*Table structure for table `kategori1` */

DROP TABLE IF EXISTS `kategori1`;

CREATE TABLE `kategori1` (
  `id_kategori1` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  `jawaban5` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori1`),
  KEY `fk_id_anggota1` (`id_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori1` */

/*Table structure for table `kategori10` */

DROP TABLE IF EXISTS `kategori10`;

CREATE TABLE `kategori10` (
  `id_kategori10` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori10`),
  KEY `fk_id_anggota10` (`id_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori10` */

/*Table structure for table `kategori2` */

DROP TABLE IF EXISTS `kategori2`;

CREATE TABLE `kategori2` (
  `id_kategori2` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori2` */

/*Table structure for table `kategori3` */

DROP TABLE IF EXISTS `kategori3`;

CREATE TABLE `kategori3` (
  `id_kategori3` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori3` */

/*Table structure for table `kategori4` */

DROP TABLE IF EXISTS `kategori4`;

CREATE TABLE `kategori4` (
  `id_kategori4` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori4`),
  KEY `fk_id_anggota4` (`id_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori4` */

/*Table structure for table `kategori5` */

DROP TABLE IF EXISTS `kategori5`;

CREATE TABLE `kategori5` (
  `id_kategori5` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori5` */

/*Table structure for table `kategori6` */

DROP TABLE IF EXISTS `kategori6`;

CREATE TABLE `kategori6` (
  `id_kategori6` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  `jawaban4` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori6`),
  KEY `fk_id_anggota6` (`id_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori6` */

/*Table structure for table `kategori7` */

DROP TABLE IF EXISTS `kategori7`;

CREATE TABLE `kategori7` (
  `id_kategori7` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori7` */

/*Table structure for table `kategori8` */

DROP TABLE IF EXISTS `kategori8`;

CREATE TABLE `kategori8` (
  `id_kategori8` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jawaban1` varchar(3) DEFAULT NULL,
  `jawaban2` varchar(3) DEFAULT NULL,
  `jawaban3` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori8`),
  KEY `fk_id_anggota8` (`id_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori8` */

/*Table structure for table `kategori9` */

DROP TABLE IF EXISTS `kategori9`;

CREATE TABLE `kategori9` (
  `id_kategori9` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_fk` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori9` */

/*Table structure for table `kunjungan` */

DROP TABLE IF EXISTS `kunjungan`;

CREATE TABLE `kunjungan` (
  `indeks_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `indeks_anggota_fk` int(11) DEFAULT NULL,
  `keperluan_kunjungan` varchar(50) NOT NULL,
  `kategori_kunjungan` varchar(50) NOT NULL,
  `jumlah_kunjungan` varchar(10) NOT NULL,
  `fokus_kunjungan` varchar(50) NOT NULL,
  `media_kunjungan` varchar(50) NOT NULL,
  `proyeksi_kunjungan` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_kunjungan`),
  KEY `fk_indeks_anggota` (`indeks_anggota_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kunjungan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
