/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.13-MariaDB : Database - arsip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arsip` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `arsip`;

/*Table structure for table `audiovideo` */

DROP TABLE IF EXISTS `audiovideo`;

CREATE TABLE `audiovideo` (
  `indeks_video` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_vcd` varchar(15) DEFAULT NULL,
  `judul_vcd` varchar(100) DEFAULT NULL,
  `produksi_vcd` varchar(20) DEFAULT NULL,
  `tahun_vcd` varchar(4) DEFAULT NULL,
  `jumlah_vcd` varchar(2) DEFAULT NULL,
  `durasi_vcd` varchar(8) DEFAULT NULL,
  `abstraksi_vcd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`indeks_video`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `audiovideo` */

insert  into `audiovideo`(`indeks_video`,`nomor_vcd`,`judul_vcd`,`produksi_vcd`,`tahun_vcd`,`jumlah_vcd`,`durasi_vcd`,`abstraksi_vcd`) values (1,'01/ANRI/2011','Bencana Alam Tsunami Nangroe Aceh Darusalam dan Sumut','ANRI','2005','1','00.50.57','Refleksi atas Bencana Alam Tsunami di aceh yang diakibatkan oleh perbuatan - perbuatan manusia di du');

/*Table structure for table `fotobumn` */

DROP TABLE IF EXISTS `fotobumn`;

CREATE TABLE `fotobumn` (
  `indeks_fotobumn` int(11) NOT NULL AUTO_INCREMENT,
  `no_fotobumn` varchar(10) NOT NULL,
  `uraian_fotobumn` varchar(100) NOT NULL,
  `jumlah_fotobumn` varchar(10) NOT NULL,
  `ukuran_fotobumn` varchar(10) NOT NULL,
  `keterangan_fotobumn` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_fotobumn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fotobumn` */

/*Table structure for table `fotoinv` */

DROP TABLE IF EXISTS `fotoinv`;

CREATE TABLE `fotoinv` (
  `indeks_fotoinv` int(11) NOT NULL AUTO_INCREMENT,
  `no_fotoinv` varchar(10) NOT NULL,
  `uraian_fotoinv` varchar(100) NOT NULL,
  `jumlah_fotoinv` varchar(10) NOT NULL,
  `ukuran_fotoinv` varchar(10) NOT NULL,
  `keterangan_fotoinv` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_fotoinv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fotoinv` */

/*Table structure for table `fotolv` */

DROP TABLE IF EXISTS `fotolv`;

CREATE TABLE `fotolv` (
  `indeks_fotolv` int(11) NOT NULL AUTO_INCREMENT,
  `no_fotolv` varchar(10) NOT NULL,
  `uraian_fotolv` varchar(100) NOT NULL,
  `jumlah_fotolv` varchar(10) NOT NULL,
  `ukuran_fotolv` varchar(10) NOT NULL,
  `keterangan_fotolv` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_fotolv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fotolv` */

/*Table structure for table `fotoskpdn` */

DROP TABLE IF EXISTS `fotoskpdn`;

CREATE TABLE `fotoskpdn` (
  `indeks_fotoskpdn` int(11) NOT NULL AUTO_INCREMENT,
  `no_fotoskpdn` varchar(10) NOT NULL,
  `uraian_fotoskpdn` varchar(100) NOT NULL,
  `jumlah_fotoskpdn` varchar(10) NOT NULL,
  `ukuran_fotoskpdn` varchar(10) NOT NULL,
  `keterangan_fotoskpdn` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_fotoskpdn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fotoskpdn` */

/*Table structure for table `fotosoj` */

DROP TABLE IF EXISTS `fotosoj`;

CREATE TABLE `fotosoj` (
  `indeks_fotosoj` int(11) NOT NULL AUTO_INCREMENT,
  `no_fotosoj` varchar(10) NOT NULL,
  `uraian_fotosoj` varchar(100) NOT NULL,
  `jumlah_fotosoj` varchar(10) NOT NULL,
  `ukuran_fotosoj` varchar(10) NOT NULL,
  `keterangan_fotosoj` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_fotosoj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fotosoj` */

/*Table structure for table `peta` */

DROP TABLE IF EXISTS `peta`;

CREATE TABLE `peta` (
  `indeks_peta` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_peta` varchar(10) NOT NULL,
  `klasifikasi_peta` varchar(20) NOT NULL,
  `judul_peta` varchar(100) NOT NULL,
  `jenis_peta` varchar(10) NOT NULL,
  `skala_peta` varchar(10) NOT NULL,
  `lokasi_peta` varchar(20) NOT NULL,
  `ukuran_peta` varchar(10) NOT NULL,
  `warna_peta` varchar(13) NOT NULL,
  `tkperkembangan_peta` varchar(10) NOT NULL,
  `bahan_peta` varchar(20) NOT NULL,
  `alat_cetak` varchar(20) NOT NULL,
  `penerbit_peta` varchar(100) NOT NULL,
  `tahun_peta` varchar(4) NOT NULL,
  `volume_peta` varchar(10) NOT NULL,
  `referensi_peta` varchar(20) NOT NULL,
  `keterangan_peta` varchar(100) NOT NULL,
  PRIMARY KEY (`indeks_peta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `peta` */

insert  into `peta`(`indeks_peta`,`nomor_peta`,`klasifikasi_peta`,`judul_peta`,`jenis_peta`,`skala_peta`,`lokasi_peta`,`ukuran_peta`,`warna_peta`,`tkperkembangan_peta`,`bahan_peta`,`alat_cetak`,`penerbit_peta`,`tahun_peta`,`volume_peta`,`referensi_peta`,`keterangan_peta`) values (1,'146','Pengairan','Wlingi Power Station Bar Arrangement of Stairs To El 152.400','Gambar Tek','Tanpa Kete','Blitar','77 x 53 cm','Hitam Putih','Asli','Kertas Kalkir','Manual / Tulis Tanga','Ministry of Public Works and Electric Power Directorate general of water resources development Brant','1976','1 Lembar','Perum Jasa Tirta','');

/*Table structure for table `tekstualbumn` */

DROP TABLE IF EXISTS `tekstualbumn`;

CREATE TABLE `tekstualbumn` (
  `indeks_teksbumn` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_teksbumn` varchar(5) NOT NULL,
  `uraian_teksbumn` varchar(100) NOT NULL,
  `kondisi_teksbumn` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_teksbumn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tekstualbumn` */

/*Table structure for table `tekstualinv` */

DROP TABLE IF EXISTS `tekstualinv`;

CREATE TABLE `tekstualinv` (
  `indeks_teksinv` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_teksinv` varchar(5) NOT NULL,
  `uraian_teksinv` varchar(100) NOT NULL,
  `kondisi_teksinv` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_teksinv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tekstualinv` */

/*Table structure for table `tekstuallv` */

DROP TABLE IF EXISTS `tekstuallv`;

CREATE TABLE `tekstuallv` (
  `indeks_tekslv` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_tekslv` varchar(5) NOT NULL,
  `uraian_tekslv` varchar(100) NOT NULL,
  `kondisi_tekslv` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_tekslv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tekstuallv` */

/*Table structure for table `tekstualskpdn` */

DROP TABLE IF EXISTS `tekstualskpdn`;

CREATE TABLE `tekstualskpdn` (
  `indeks_teksskpdn` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_teksskpdn` varchar(5) NOT NULL,
  `uraian_teksskpdn` varchar(100) NOT NULL,
  `kondisi_teksskpdn` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_teksskpdn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tekstualskpdn` */

/*Table structure for table `tekstualsoj` */

DROP TABLE IF EXISTS `tekstualsoj`;

CREATE TABLE `tekstualsoj` (
  `indeks_tekssoj` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_tekssoj` varchar(5) NOT NULL,
  `uraian_tekssoj` varchar(100) NOT NULL,
  `kondisi_tekssoj` varchar(20) NOT NULL,
  PRIMARY KEY (`indeks_tekssoj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tekstualsoj` */

/* Procedure structure for procedure `sp_insertfotobumn` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertfotobumn` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertfotobumn`(no_fotobumn2 VARCHAR(10),uraian_fotobumn2 varchar(100),
jumlah_fotobumn2 varchar(10), ukuran_fotobumn2 varchar(10), keterangan_fotobumn2 varchar(10))
BEGIN
	insert into fotobumn(no_fotobumn, uraian_fotobumn, jumlah_fotobumn, ukuran_fotobumn, keterangan_fotobumn)
	values (no_fotobumn2, uraian_fotobumn2, jumlah_fotobumn2, ukuran_fotobumn2, keterangan_fotobumn2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertfotoinv` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertfotoinv` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertfotoinv`(no_fotoinv2 VARCHAR(10),uraian_fotoinv2 varchar(100),
jumlah_fotoinv2 varchar(10), ukuran_fotoinv2 varchar(10), keterangan_fotoinv2 varchar(10))
BEGIN
	insert into fotoinv(no_fotoinv, uraian_fotoinv, jumlah_fotoinv, ukuran_fotoinv, keterangan_fotoinv)
	values (no_fotoinv2, uraian_fotoinv2, jumlah_fotoinv2, ukuran_fotoinv2, keterangan_fotoinv2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertfotolv` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertfotolv` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertfotolv`(no_fotolv2 VARCHAR(10),uraian_fotolv2 varchar(100),
jumlah_fotolv2 varchar(10), ukuran_fotolv2 varchar(10), keterangan_fotolv2 varchar(10))
BEGIN
	insert into fotolv(no_fotolv, uraian_fotolv, jumlah_fotolv, ukuran_fotolv, keterangan_fotolv)
	values (no_fotolv2, uraian_fotolv2, jumlah_fotolv2, ukuran_fotolv2, keterangan_fotolv2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertfotoskpdn` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertfotoskpdn` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertfotoskpdn`(no_fotoskpdn2 VARCHAR(10),uraian_fotoskpdn2 varchar(100),
jumlah_fotoskpdn2 varchar(10), ukuran_fotoskpdn2 varchar(10), keterangan_fotoskpdn2 varchar(10))
BEGIN
	insert into fotoskpdn(no_fotoskpdn, uraian_fotoskpdn, jumlah_fotoskpdn, ukuran_fotoskpdn, keterangan_fotoskpdn)
	values (no_fotoskpdn2, uraian_fotoskpdn2, jumlah_fotoskpdn2, ukuran_fotoskpdn2, keterangan_fotoskpdn2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertfotosoj` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertfotosoj` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertfotosoj`(no_fotosoj2 VARCHAR(10),uraian_fotosoj2 varchar(100),
jumlah_fotosoj2 varchar(10), ukuran_fotosoj2 varchar(10), keterangan_fotosoj2 varchar(10))
BEGIN
	insert into fotosoj(no_fotosoj, uraian_fotosoj, jumlah_fotosoj, ukuran_fotosoj, keterangan_fotosoj)
	values (no_fotosoj2, uraian_fotosoj2, jumlah_fotosoj2, ukuran_fotosoj2, keterangan_fotosoj2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertpeta` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertpeta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertpeta`(nomor_peta2 VARCHAR(10), klasifikasi_peta2 VARCHAR(20),
	judul_peta2 VARCHAR(100), jenis_peta2 VARCHAR(10), skala_peta2 VARCHAR(10), lokasi_peta2 varchar(20),
	ukuran_peta2 varchar(10), warna_peta2 varchar(13), tkperkembangan_peta2 varchar(10), bahan_peta2 varchar(20),
	alat_cetak2 varchar(20), penerbit_peta2 varchar(100), tahun_peta2 varchar(4), volume_peta2 varchar(10),
	referensi_peta2 varchar(20), keterangan_peta2 varchar(100))
BEGIN
	INSERT INTO peta(nomor_peta, klasifikasi_peta, judul_peta, jenis_peta, skala_peta, lokasi_peta, ukuran_peta, warna_peta,
	tkperkembangan_peta, bahan_peta, alat_cetak, penerbit_peta, tahun_peta, volume_peta, referensi_peta, keterangan_peta)
	VALUES (nomor_peta2, klasifikasi_peta2, judul_peta2, jenis_peta2, skala_peta2, lokasi_peta2, ukuran_peta2, warna_peta2,
	tkperkembangan_peta2, bahan_peta2, alat_cetak2, penerbit_peta2, tahun_peta2, volume_peta2, referensi_peta2,
	keterangan_peta2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertteksbumn` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertteksbumn` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertteksbumn`(nomor_teksbumn2 VARCHAR(5), uraian_teksbumn2 VARCHAR(100),
kondisi_teksbumn2 VARCHAR(20))
BEGIN
	INSERT INTO tekstualbumn(nomor_teksbumn, uraian_teksbumn, kondisi_teksbumn)
	VALUES (nomor_teksbumn2, uraian_teksbumn2, kondisi_teksbumn2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertteksinv` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertteksinv` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertteksinv`(nomor_teksinv2 VARCHAR(5), uraian_teksinv2 VARCHAR(100),
kondisi_teksinv2 VARCHAR(20))
BEGIN
	INSERT INTO tekstualinv(nomor_teksinv, uraian_teksinv, kondisi_teksinv)
	VALUES (nomor_teksinv2, uraian_teksinv2, kondisi_teksinv2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_inserttekslv` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_inserttekslv` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttekslv`(nomor_tekslv2 VARCHAR(5), uraian_tekslv2 VARCHAR(100),
kondisi_tekslv2 VARCHAR(20))
BEGIN
	INSERT INTO tekstuallv(nomor_tekslv, uraian_tekslv, kondisi_tekslv)
	VALUES (nomor_tekslv2, uraian_tekslv2, kondisi_tekslv2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertteksskpdn` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertteksskpdn` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertteksskpdn`(nomor_teksskpdn2 VARCHAR(5), uraian_teksskpdn2 VARCHAR(100),
kondisi_teksskpdn2 VARCHAR(20))
BEGIN
	INSERT INTO tekstualskpdn(nomor_teksskpdn, uraian_teksskpdn, kondisi_teksskpdn)
	VALUES (nomor_teksskpdn2, uraian_teksskpdn2, kondisi_teksskpdn2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_inserttekssoj` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_inserttekssoj` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_inserttekssoj`(nomor_tekssoj2 VARCHAR(5), uraian_tekssoj2 VARCHAR(100),
kondisi_tekssoj2 VARCHAR(20))
BEGIN
	INSERT INTO tekstualsoj(nomor_tekssoj, uraian_tekssoj, kondisi_tekssoj)
	VALUES (nomor_tekssoj2, uraian_tekssoj2, kondisi_tekssoj2);
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insertvideo` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insertvideo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertvideo`(nomor_vcd2 varchar(15), judul_vcd2 varchar(100),
produksi_vcd2 varchar(20), tahun_vcd2 varchar(4), jumlah_vcd2 varchar(2), durasi_vcd2 varchar(8), abstraksi_vcd2 varchar(100))
BEGIN
	INSERT INTO audiovideo(nomor_vcd, judul_vcd, produksi_vcd, tahun_vcd, jumlah_vcd, durasi_vcd, abstraksi_vcd)
	VALUES (nomor_vcd2, judul_vcd2, produksi_vcd2, tahun_vcd2, jumlah_vcd2, durasi_vcd2, abstraksi_vcd2);
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
