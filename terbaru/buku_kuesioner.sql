/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.22-MariaDB : Database - buku_kuesioner
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `anggota` */

insert  into `anggota`(`indeks_anggota`,`nama_anggota`,`tanggal_lahir`,`umur_anggota`,`jk_anggota`,`telepon_pengguna`,`kewarganegaraan_anggota`,`asal_pengguna`,`identitas_pengguna`,`pendidikan_pengguna`,`profesi_pengguna`,`tempat_studi`,`program_studi`) values (1,'Magista','Magela','21 - 25','P','085641889903','WNI','Magelang','5114100007','SMA','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','Teknik Informatika'),(2,'Deni','Kebume','21 - 25','L','0928364293894','WNI','kebumen','5114100022','SMA','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','Kearsipan'),(3,'Hakim','Sragen','16 - 20','L','087654467775','WNI','Sragen','5114100081','Diploma I - III','Dosen','Universitas Brawijaya','Sejarah'),(4,'rasyid','Jomban','21 - 25','L','076879807707','WNI','Surabaya','5114100101','Sarjana / Diploma IV','Peneliti/Sejarawan','Universitas Airlangga','Pendidikan'),(5,'Bayu','Madiun','21 - 25','L','0718264812938','WNI','Jojoran gang 1 ','5114100108','Diploma I - III','Perusahaan/Swasta','Universitas Airlangga','Sistem Informasi'),(6,'tes user','Surabaya, 27 Januari 1996','21 - 25','L','082338812035','WNI','Jojoran gang 1 ','5114100082','Sarjana / Diploma IV','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','Teknik Sipil'),(7,'Mohammad Rasyid Karomi','Surabaya, 1 Januari 1996','21 - 25','L','081331113331','WNI','Jalan Pakis Tir','5114100001','SMA','Pelajar/Mahasiswa','Universitas Brawijaya','Perkapalan'),(8,'soebiarto','Surabaya, 11 Nopember1969','46 - 50','L','081331485729','WNI','Jl. Benowo Inda','356666778880','Sarjana / Diploma IV','Instansi Pemerintah Provinsi',NULL,''),(9,'Sunu Sudiharso','Surabaya, 28 Nopember 2000','16 - 20','L','085230792987','WNI','bumiCandi asri ','28111964','Sarjana / Diploma IV','Instansi Kabupaten/Kota','Lain-lain','SastraIndonesia'),(10,'Naufan Arifie','11 - 06 - 1996','21 - 25','L','082132197731','WNI','Jl.Medokan Asri','5114100136','SMA','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','S1'),(11,'aa','a','? 15','L','1','WNI','a','12345','Diploma I - III','Pelajar/Mahasiswa','Universitas Muhammadiyah Surabaya','qfsdfdsf'),(12,'Mas Faiq','Nganjuk, 15 Mei 1996','16 - 20','L','0998398909482','WNI','Nganjuk bos e','5115100701','SMA','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','Teknik Perkapalan'),(13,'Aldi','Surabaya, 17 Maret 1996','21 - 25','L','009937983274','WNI','Benowo','5114100015','SMA','Pelajar/Mahasiswa','Institut Teknologi Sepuluh Nopember','Teknik Informatika'),(14,'kevin','Sragen, 14 Juli 1996','21 - 25','L','0974982302','WNI','surabaya','5114100128','Sarjana / Diploma IV','Perusahaan/Swasta','Institut Teknologi Sepuluh Nopember','Teknik Informatika');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `kategori1` */

insert  into `kategori1`(`id_kategori1`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`) values (10,'5114100015','2017-09-11','STS','S','R','SS','TS'),(11,'5114100128','2017-09-14','R','TS','S','SS','STS');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori10` */

insert  into `kategori10`(`id_kategori10`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`) values (6,'5114100015','2017-09-11','S','TS','SS'),(7,'5114100128','2017-09-14','SS','TS','R');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `kategori2` */

insert  into `kategori2`(`id_kategori2`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`,`jawaban6`,`jawaban7`,`jawaban8`,`jawaban9`,`jawaban10`,`jawaban11`,`jawaban12`,`jawaban13`) values (9,'5114100015','2017-09-11','TS','S','R','SS','TS','TS','STS','R','S','SS','TS','S','TS'),(10,'5114100128','2017-09-14','R','STS','TS','S','SS','STS','R','TS','S','SS','TS','R','SS');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `kategori3` */

insert  into `kategori3`(`id_kategori3`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`,`jawaban6`,`jawaban7`,`jawaban8`,`jawaban9`) values (8,'5114100015','2017-09-11','R','STS','TS','S','R','S','S','R','S'),(9,'5114100128','2017-09-14','R','TS','STS','S','SS','R','S','SS','STS');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `kategori4` */

insert  into `kategori4`(`id_kategori4`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`) values (8,'5114100015','2017-09-11','R','TS','S','SS'),(9,'5114100128','2017-09-14','R','STS','S','R');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `kategori5` */

insert  into `kategori5`(`id_kategori5`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`,`jawaban6`,`jawaban7`,`jawaban8`,`jawaban9`,`jawaban10`,`jawaban11`) values (7,'5114100015','2017-09-11','R','STS','TS','S','SS','TS','S','SS','TS','S','R'),(8,'5114100128','2017-09-14','R','SS','S','STS','TS','S','SS','STS','R','S','SS');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori6` */

insert  into `kategori6`(`id_kategori6`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`) values (6,'5114100015','2017-09-11','R','TS','S','R'),(7,'5114100128','2017-09-14','SS','STS','TS','R');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori7` */

insert  into `kategori7`(`id_kategori7`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`,`jawaban6`,`jawaban7`,`jawaban8`,`jawaban9`,`jawaban10`,`jawaban11`,`jawaban12`,`jawaban13`,`jawaban14`,`jawaban15`) values (6,'5114100015','2017-09-11','R','S','TS','STS','S','SS','TS','STS','S',NULL,'S','SS','R','TS','S'),(7,'5114100128','2017-09-14','SS','STS','TS','R','S','SS','TS','STS','S',NULL,'TS','STS','S','STS','R');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori8` */

insert  into `kategori8`(`id_kategori8`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`) values (6,'5114100015','2017-09-11','S','SS','R'),(7,NULL,'2017-09-14',NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kategori9` */

insert  into `kategori9`(`id_kategori9`,`id_anggota_fk`,`tanggal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`jawaban5`,`jawaban6`,`jawaban7`,`jawaban8`,`jawaban9`) values (6,'5114100015','2017-09-11','R','STS','TS','S','R','SS','R','S','R'),(7,'5114100128','2017-09-14','R','TS','S','STS','SS','S','STS','R','TS');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `kunjungan` */

insert  into `kunjungan`(`indeks_kunjungan`,`indeks_anggota_fk`,`tanggal`,`keperluan_kunjungan`,`kategori_kunjungan`,`jumlah_kunjungan`,`fokus_kunjungan`,`media_kunjungan`,`proyeksi_kunjungan`) values (1,'5114100101','2017-08-25','Penulisan Sejarah','Organisasi Perangkat Daerah','Pertama kali','Arsip 1946 - 1965','Kertas','3 - 4 hari'),(2,'5114100081','2017-09-08','Penulisan Tugas Kuliah','Umum','2 kali','Arsip 1901 - 1945','Foto','1 - 2 hari'),(3,'5114100001','2017-09-08','Penulisan Tugas Kuliah','Secretary Oost Java','Pertama kali','Arsip 1901 - 1945','Kertas','1 - 2 hari'),(4,'5114100007','2017-09-08','Penulisan Skripsi/Tesis/Disertasi','Secretary Oost Java','Pertama kali','Arsip 1986 - Sekarang','Foto','? 7 hari'),(5,'5114100081','2017-09-08','Penulisan Skripsi/Tesis/Disertasi','Secretary Oost Java','Pertama kali','Arsip 1901 - 1945','Foto','3 - 4 hari'),(6,'5114100015','2017-09-11','Penulisan Tugas Kuliah','Umum','2 kali','Arsip 1901 - 1945','Kertas','3 - 4 hari'),(7,'5114100128','2017-09-14','Pembukttian Hukum','Lembaga Vertikal','2 kali','Arsip 1901 - 1945','Foto','3 - 4 hari');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (1,'admin_layanan','masukdong');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
