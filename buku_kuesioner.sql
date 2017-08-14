/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.13-MariaDB : Database - buku_kuesioner
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`buku_kuesioner` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `buku_kuesioner`;

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
  `keperluan` varchar(50) NOT NULL,
  `fokus_penelitian` varchar(20) NOT NULL,
  `jenis_arsip` varchar(10) NOT NULL,
  `total_kunjungan` varchar(10) NOT NULL,
  `waktu_penelitian` varchar(10) NOT NULL,
  PRIMARY KEY (`indeks_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

/*Table structure for table `pertanyaan` */

DROP TABLE IF EXISTS `pertanyaan`;

CREATE TABLE `pertanyaan` (
  `indeks_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_pertanyaan` varchar(50) DEFAULT NULL,
  `pertanyaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`indeks_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pertanyaan` */

/*Table structure for table `rekap_survey` */

DROP TABLE IF EXISTS `rekap_survey`;

CREATE TABLE `rekap_survey` (
  `indeks_rekap` int(11) NOT NULL AUTO_INCREMENT,
  `indeks_anggota` int(11) NOT NULL,
  `indeks_pertanyaan` int(11) NOT NULL,
  `jawaban_survey` varchar(3) NOT NULL,
  PRIMARY KEY (`indeks_rekap`),
  KEY `indeks_anggota` (`indeks_anggota`),
  KEY `indeks_pertanyaan` (`indeks_pertanyaan`),
  CONSTRAINT `rekap_survey_ibfk_1` FOREIGN KEY (`indeks_anggota`) REFERENCES `anggota` (`indeks_anggota`),
  CONSTRAINT `rekap_survey_ibfk_2` FOREIGN KEY (`indeks_pertanyaan`) REFERENCES `pertanyaan` (`indeks_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rekap_survey` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
