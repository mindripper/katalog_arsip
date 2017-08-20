/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.22-MariaDB : Database - buku_kuesioner
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`buku_kuesioner` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `anggota` */

CREATE TABLE `anggota` (
  `indeks_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `tanggal_lahir` char(6) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`indeks_anggota`,`nama_anggota`,`tanggal_lahir`,`umur_anggota`,`jk_anggota`,`telepon_pengguna`,`kewarganegaraan_anggota`,`asal_pengguna`,`identitas_pengguna`,`pendidikan_pengguna`,`profesi_pengguna`,`tempat_studi`,`program_studi`) values (1,'faiq','sby, 1','21 - 25','L','085728294838','WNI','Jojoran gang 1 ','5114100165','SMA','Dosen',NULL,'Teknik Informatika');

/*Table structure for table `dummy` */

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identitas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dummy` */

/*Table structure for table `kunjungan` */

CREATE TABLE `kunjungan` (
  `indeks_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `keperluan_kunjungan` varchar(50) NOT NULL,
  `kategori_kunjungan` varchar(50) NOT NULL,
  `jumlah_kunjungan` varchar(10) NOT NULL,
  `fokus_kunjungan` varchar(50) NOT NULL,
  `media_kunjungan` varchar(50) NOT NULL,
  `proyeksi_kunjungan` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_kunjungan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kunjungan` */

/*Table structure for table `pertanyaan` */

CREATE TABLE `pertanyaan` (
  `indeks_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_pertanyaan` varchar(50) DEFAULT NULL,
  `pertanyaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`indeks_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pertanyaan` */

/*Table structure for table `rekap_survey` */

CREATE TABLE `rekap_survey` (
  `indeks_rekap` int(11) NOT NULL AUTO_INCREMENT,
  `indeks_anggota` int(11) DEFAULT NULL,
  `indeks_pertanyaan` int(11) DEFAULT NULL,
  `jawaban_survey` varchar(3) DEFAULT NULL,
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
