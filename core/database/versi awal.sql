/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.32-MariaDB : Database - web_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `halaman` */

DROP TABLE IF EXISTS `halaman`;

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `halaman` */

/*Table structure for table `hero_utama` */

DROP TABLE IF EXISTS `hero_utama`;

CREATE TABLE `hero_utama` (
  `id_hero` int(11) NOT NULL AUTO_INCREMENT,
  `judul1` varchar(20) DEFAULT NULL,
  `judul2` varchar(20) DEFAULT NULL,
  `judul3` varchar(20) DEFAULT NULL,
  `desk` varchar(255) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `hero_utama` */

/*Table structure for table `hore` */

DROP TABLE IF EXISTS `hore`;

CREATE TABLE `hore` (
  `id_hero` int(11) NOT NULL AUTO_INCREMENT,
  `judul1` varchar(20) DEFAULT NULL,
  `judul2` varchar(20) DEFAULT NULL,
  `desk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `hore` */

/*Table structure for table `isi_card` */

DROP TABLE IF EXISTS `isi_card`;

CREATE TABLE `isi_card` (
  `id_isi` int(11) NOT NULL AUTO_INCREMENT,
  `card` int(11) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `desk` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_isi`),
  KEY `card` (`card`),
  CONSTRAINT `isi_card_ibfk_1` FOREIGN KEY (`card`) REFERENCES `layout_card` (`id_layout`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `isi_card` */

insert  into `isi_card`(`id_isi`,`card`,`icon`,`warna`,`judul`,`desk`) values (1,1,'bi-person-workspace','bg-main','Kompetensi Industri','Kurikulum berbasis unit kompetensi DUDIKA dan sertifikasi keahlian profesional.'),(2,1,'bi-clipboard-check','bg-second','Pembelajaran Berbasis Projek','Mendorong kreativitas dan pemecahan masalah melalui Project Based Learning (PBL) nyata.'),(3,1,'bi-patch-check','bg-main','Penguatan Profil Pelajar','Fokus pada pembentukan karakter, etika, dan soft skill melalui program P5 (Pelajar Pancasila).');

/*Table structure for table `isi_card2` */

DROP TABLE IF EXISTS `isi_card2`;

CREATE TABLE `isi_card2` (
  `id_isi` int(11) NOT NULL AUTO_INCREMENT,
  `card` int(11) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `desk` varchar(500) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `tombol` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_isi`),
  KEY `card` (`card`),
  CONSTRAINT `isi_card2_ibfk_1` FOREIGN KEY (`card`) REFERENCES `layout_card` (`id_layout`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `isi_card2` */

insert  into `isi_card2`(`id_isi`,`card`,`icon`,`warna`,`judul`,`desk`,`link`,`tombol`) values (1,2,'bi-code-slash','main','RPL','Pengembangan Web/Mobile & Database.','/jurusan/rpl','Lihat Detail'),(2,2,'bi-diagram-3-fill','main','TKJ','Jaringan, Keamanan Siber & Cloud.','/jurusan/tkj','Lihat Detail'),(3,2,'bi-gear-fill','main','TKR','Perawatan Mesin Injeksi & Diagnosis.','/jurusan/tkr','Lihat Detail'),(4,2,'bi-calculator-fill','main','AKL','Akuntansi Digital & Perpajakan.','/jurusan/akuntansi','Lihat Detail'),(5,2,'bi-briefcase-fill','main','OTKP','Administrasi & Kearsipan Digital.','/jurusan/perkantoran','Lihat Detail'),(6,2,'bi-house-door-fill','main','Perhotelan','Front Office, Housekeeping & F&B.','/jurusan/perhotelan','Lihat Detail');

/*Table structure for table `layout_card` */

DROP TABLE IF EXISTS `layout_card`;

CREATE TABLE `layout_card` (
  `id_layout` int(11) NOT NULL AUTO_INCREMENT,
  `section` int(11) DEFAULT NULL,
  `judul_card1` varchar(255) DEFAULT NULL,
  `subjudul_card1` varchar(500) DEFAULT NULL,
  `bg_card1` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_layout`),
  KEY `section` (`section`),
  CONSTRAINT `layout_card_ibfk_1` FOREIGN KEY (`section`) REFERENCES `section` (`id_section`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `layout_card` */

insert  into `layout_card`(`id_layout`,`section`,`judul_card1`,`subjudul_card1`,`bg_card1`) values (1,1,'Pilar Filosofi Kurikulum Kami','Kami menerapkan Kurikulum Merdeka yang diperkaya dengan praktik industri dan pembentukan karakter.','bg-white'),(2,1,'Lihat Kurikulum Per Kompetensi Keahlian','Jelajahi detail mata pelajaran, prospek karir, dan fasilitas yang disinkronkan dengan standar industri modern.','bg-light');

/*Table structure for table `layout_img_text` */

DROP TABLE IF EXISTS `layout_img_text`;

CREATE TABLE `layout_img_text` (
  `id_layout` int(11) NOT NULL AUTO_INCREMENT,
  `bg` varchar(20) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `subjudul` varchar(500) DEFAULT NULL,
  `paragraf` varchar(500) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `alt` varchar(100) DEFAULT NULL,
  `revaers` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_layout`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `layout_img_text` */

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `id_section` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_section`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `section` */

insert  into `section`(`id_section`,`judul`,`urutan`) values (1,'Kurikulum',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
