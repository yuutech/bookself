-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 06:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookself`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kd_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kd_kategori` int(10) NOT NULL,
  `kd_penerbit` int(10) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `halaman` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `sinopsis` varchar(200) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kd_buku`, `judul`, `kd_kategori`, `kd_penerbit`, `pengarang`, `halaman`, `jumlah`, `sinopsis`, `gambar`) VALUES
(1, 'Timun Emas', 1, 1, 'Tira Ikranegara', 56, 9, 'Timun Emas adalah Timun yang emas', 'timun emas.jpg'),
(2, 'Geez Dan Ann 1', 2, 2, 'Tsana Nadia', 90, 29, 'Geezzzzzzzz', 'GeezAnn.jpg'),
(3, 'A Travelouge', 2, 5, 'Saiful Akmal', 240, 10, 'Sinopsis Cerita', 'travelouge.jpg'),
(4, 'Game of Throne', 5, 1, 'Ada Pokoknya', 345, 2, 'ceritanya keren', 'got.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `kd_cart` int(11) NOT NULL,
  `kd_buku` int(11) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kd_kategori`, `nama_kategori`) VALUES
(1, 'Cerita Rakyat'),
(2, 'Novel'),
(3, 'Manga'),
(4, 'Biografi'),
(5, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `kd_kembali` int(11) NOT NULL,
  `kd_pinjam` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `kd_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`kd_penerbit`, `nama_penerbit`) VALUES
(1, 'Tiga Serangkai'),
(2, 'Mizan'),
(3, 'Gagas Media'),
(4, 'Erlangga'),
(5, 'Gramedia'),
(6, 'Grasindo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `kd_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `kd_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1 = admin, 2 = anggota'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Yusuf Supriyanto', 'Surakarta, Indonesia', 1),
(2, 'asincaem', '86a1bc9ece8f1790f63543f45eb500fc61569245', 'AsinCaem', 'asal kamu tahu', 2),
(3, 'asepunyu', '48d682e3c90dcff48e16a495226cb7e03fefadb9', 'Asep Unyu', 'Musuk', 2),
(4, 'xiamaobao', '1e63c974abf9806af2e16ca4be93034ee38e6dda', 'Xia Cho Meng', 'China', 2),
(5, 'bagas123', '2eb1f23c0a62562588d4c9e3ff42884cfbd84c14', 'Bagas', 'Solo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kd_buku`),
  ADD UNIQUE KEY `kd_kategori` (`kd_kategori`,`kd_penerbit`),
  ADD KEY `kd_penerbit` (`kd_penerbit`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`kd_kembali`),
  ADD KEY `kd_pinjam` (`kd_pinjam`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`kd_penerbit`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`kd_pinjam`),
  ADD KEY `user_id` (`user_id`,`kd_buku`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `kd_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kd_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `kd_kembali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `kd_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`kd_penerbit`) REFERENCES `tb_penerbit` (`kd_penerbit`),
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `tb_kategori` (`kd_kategori`);

--
-- Constraints for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`kd_pinjam`) REFERENCES `tb_pinjam` (`kd_pinjam`),
  ADD CONSTRAINT `tb_kembali_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`kd_buku`) REFERENCES `tb_buku` (`kd_buku`),
  ADD CONSTRAINT `tb_pinjam_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
