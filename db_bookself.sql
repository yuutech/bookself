-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_bookself
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_buku`
--

DROP TABLE IF EXISTS `tb_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_buku` (
  `kd_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `kd_kategori` int(10) NOT NULL,
  `kd_penerbit` int(10) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `halaman` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `sinopsis` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`kd_buku`),
  UNIQUE KEY `kd_kategori` (`kd_kategori`,`kd_penerbit`),
  KEY `kd_penerbit` (`kd_penerbit`),
  CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`kd_penerbit`) REFERENCES `tb_penerbit` (`kd_penerbit`),
  CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `tb_kategori` (`kd_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_buku`
--

LOCK TABLES `tb_buku` WRITE;
/*!40000 ALTER TABLE `tb_buku` DISABLE KEYS */;
INSERT INTO `tb_buku` VALUES (1,'Timun Emas',1,1,'Tira Ikranegara',56,8,'Timun Emas adalah Timun yang emas','timun emas.jpg'),(2,'Geez Dan Ann 1',2,2,'Tsana Nadia',90,9,'Geezzzzzzzz','GeezAnn.jpg'),(3,'A Travelouge',2,5,'Saiful Akmal',240,8,'Sinopsis Cerita','travelouge.jpg'),(4,'Game of Throne',5,1,'Ada Pokoknya',345,9,'ceritanya keren','got.jpg');
/*!40000 ALTER TABLE `tb_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kategori`
--

DROP TABLE IF EXISTS `tb_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kategori` (
  `kd_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(40) NOT NULL,
  PRIMARY KEY (`kd_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kategori`
--

LOCK TABLES `tb_kategori` WRITE;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
INSERT INTO `tb_kategori` VALUES (1,'Cerita Rakyat'),(2,'Novel'),(3,'Manga'),(4,'Biografi'),(5,'Pengetahuan');
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kembali`
--

DROP TABLE IF EXISTS `tb_kembali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kembali` (
  `kd_kembali` int(11) NOT NULL AUTO_INCREMENT,
  `kd_pinjam` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`kd_kembali`),
  KEY `kd_pinjam` (`kd_pinjam`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`kd_pinjam`) REFERENCES `tb_pinjam` (`kd_pinjam`),
  CONSTRAINT `tb_kembali_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kembali`
--

LOCK TABLES `tb_kembali` WRITE;
/*!40000 ALTER TABLE `tb_kembali` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kembali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penerbit`
--

DROP TABLE IF EXISTS `tb_penerbit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_penerbit` (
  `kd_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(40) NOT NULL,
  PRIMARY KEY (`kd_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penerbit`
--

LOCK TABLES `tb_penerbit` WRITE;
/*!40000 ALTER TABLE `tb_penerbit` DISABLE KEYS */;
INSERT INTO `tb_penerbit` VALUES (1,'Tiga Serangkai'),(2,'Mizan'),(3,'Gagas Media'),(4,'Erlangga'),(5,'Gramedia'),(6,'Grasindo');
/*!40000 ALTER TABLE `tb_penerbit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pesanan`
--

DROP TABLE IF EXISTS `tb_pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pesanan` (
  `kd_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `kd_pinjam` int(11) NOT NULL,
  `kd_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `halaman` int(11) NOT NULL,
  `pilihan` text NOT NULL,
  PRIMARY KEY (`kd_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pesanan`
--

LOCK TABLES `tb_pesanan` WRITE;
/*!40000 ALTER TABLE `tb_pesanan` DISABLE KEYS */;
INSERT INTO `tb_pesanan` VALUES (13,10,1,'',1,56,''),(14,10,2,'',1,90,''),(15,10,3,'',1,240,''),(16,10,4,'',1,345,''),(17,11,1,'',1,56,''),(18,11,2,'',1,90,''),(19,11,3,'',1,240,''),(20,11,4,'',1,345,''),(21,12,1,'',1,56,''),(22,12,3,'',1,240,'');
/*!40000 ALTER TABLE `tb_pesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pinjam`
--

DROP TABLE IF EXISTS `tb_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pinjam` (
  `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  PRIMARY KEY (`kd_pinjam`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pinjam`
--

LOCK TABLES `tb_pinjam` WRITE;
/*!40000 ALTER TABLE `tb_pinjam` DISABLE KEYS */;
INSERT INTO `tb_pinjam` VALUES (10,'2020-07-18','2020-07-25',6,7),(11,'2020-07-19','2020-07-24',1,5),(12,'2020-07-29','0000-00-00',1,0);
/*!40000 ALTER TABLE `tb_pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1 = admin, 2 = anggota',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','Yusuf Supriyanto','Surakarta, Indonesia',1),(2,'asincaem','86a1bc9ece8f1790f63543f45eb500fc61569245','AsinCaem','asal kamu tahu',2),(3,'asepunyu','48d682e3c90dcff48e16a495226cb7e03fefadb9','Asep Unyu','Musuk',2),(4,'xiamaobao','1e63c974abf9806af2e16ca4be93034ee38e6dda','Xia Cho Meng','China',2),(5,'bagas123','2eb1f23c0a62562588d4c9e3ff42884cfbd84c14','Bagas','Solo',2),(6,'member','7c222fb2927d828af22f592134e8932480637c0d','Anggota Baru','Surakarta, Jawa Tengah',2);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-07  5:03:18
