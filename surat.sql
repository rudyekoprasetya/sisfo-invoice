-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 03:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('016140b3437233ca0a31987a41f0151668d9e684', '::1', 1608259602, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235393630323b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('03b0e1ea679376309c4fcc362adcda933d5c68ef', '::1', 1608259928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235393932383b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('1490c4e7bab7ce2265e4f0d8d37d744ea643da41', '::1', 1608258711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235383731313b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('1ab2e375f4e8e273a51c06cfebbb4ba26defcc88', '::1', 1608219761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383231393736313b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('271e21a73e226439cadbd4238e894a84107f7897', '::1', 1608257847, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235373834373b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('49957fc9627a1d86ccfe62f8f9790fb5cb0cd028', '::1', 1608255977, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235353937373b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('6b8b0f5cb9c2e4d35c48ecd0bdecb83a8af03886', '::1', 1608255524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235353532343b),
('71c52b65ed9c61ce1e6139a10863e9c5b53d157d', '::1', 1608260163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235393932383b616c6572747c733a31363a22426572686173696c204c6f676f757421223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('92f47a0ad784b5f238a8f9a5906b81b07ef496b5', '::1', 1608256344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235363334343b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('aedc15f499b2b1261e7e61a36ccd733a3e358cb2', '::1', 1608220181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383232303138313b),
('aee22d7c47ef03dd6d9822454dcfce36ea1ed06d', '::1', 1608257454, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235373435343b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('b53fe648242a252fdb37900096d6b6f441d7b061', '::1', 1608259153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235393135333b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('dd1e7aef0827d0818c1a5d9b402c4e951633f4e2', '::1', 1608256646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235363634363b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b),
('ea97b47972d1799d98a82705be2be604f0981d35', '::1', 1608258263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383235383236333b69645f757365727c733a313a2231223b757365726e616d657c733a353a2261646d696e223b616b7365737c733a353a2261646d696e223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `no_invoice` varchar(30) NOT NULL,
  `no_urut` char(5) DEFAULT NULL,
  `kode_project` varchar(8) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `payment_type` varchar(40) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `kepada` tinytext DEFAULT NULL,
  `is_paid` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`no_invoice`, `no_urut`, `kode_project`, `id_user`, `date`, `payment_type`, `due_date`, `kepada`, `is_paid`) VALUES
('00003/DIV-IT/XII/2020', '00003', 'COBA51', 1, '2020-12-17', 'Coba', '2021-01-07', 'Coba', 'no'),
('00004/DIV-IT/XII/2020', '00004', 'AL AZ99', 2, '2020-12-17', 'perpanjangan domain alazharkediri.org', '2020-12-31', 'Al Azhar Kediri', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` bigint(20) NOT NULL,
  `no_invoice` varchar(30) DEFAULT NULL,
  `item` tinytext DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `no_invoice`, `item`, `qty`, `price`) VALUES
(6, '00003/DIV-IT/XII/2020', 'Coba', 1, 2000),
(7, '00003/DIV-IT/XII/2020', 'Coba lagi', 3, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembaga`
--

CREATE TABLE `tb_lembaga` (
  `id_lembaga` int(5) NOT NULL,
  `lembaga` varchar(60) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` tinytext DEFAULT NULL,
  `is_aktif` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lembaga`
--

INSERT INTO `tb_lembaga` (`id_lembaga`, `lembaga`, `alamat`, `website`, `phone`, `deskripsi`, `logo`, `is_aktif`) VALUES
(1, 'CV Nusantara Media Mandiri', 'Perum Ayana Blok i 56 Desa Sambiresik Kab Kediri Jawa Timur 64100 ', 'https://cv-nmm.com', '+6285235830024', '<p>\n	CV NMM melayani : Pendidikan Komputer, Instalasi Jaringan, Pembuatan Software, Website, dan Pemesanan Hardware.&nbsp;</p>\n', '13ad3-logo.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `hp` varchar(17) DEFAULT NULL,
  `akses` enum('user','admin') DEFAULT NULL,
  `is_aktif` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `gender`, `alamat`, `hp`, `akses`, `is_aktif`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin Invoice', 'L', '<p>\n	Kediri</p>\n', '085235830024', 'admin', 'yes'),
(2, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'User Invoice', 'L', '<p>\n	Tulungagung</p>\n', '085356789299', 'user', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`no_invoice`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_invoice` (`no_invoice`);

--
-- Indexes for table `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_lembaga`
--
ALTER TABLE `tb_lembaga`
  MODIFY `id_lembaga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD CONSTRAINT `tb_item_ibfk_1` FOREIGN KEY (`no_invoice`) REFERENCES `tb_invoice` (`no_invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
