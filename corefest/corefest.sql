-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 09:41 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corefest`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `label` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `tanggal`, `penulis`, `isi`, `label`, `gambar`) VALUES
(43, 'Apa itu E-Commerce', '2016/11/21', 'admin', 'Pengertian Ecommerce, E-commerce adalah suatu perdagangan atau jasa yang menggunakan media online. Media online disini adalah internet. Pada jaman modern seperti ini E-commerce sering dikaitkan dengan bisnis online di internet entah itu di media online seperti blog atau website yang berbau online shop, atau bahkan sering atau bias dibilang sudah banyak yang menjamur bisnis melalui social media seperti di facebook, twitter, bbm, dll.<br>\r\n<br>\r\nPengertian E-commerce ada banyak sekali menurut para ahli namun sudah menurut yang saya rangkum setelah membaca sekian banyak pengertian e-commerce, inti dari e-commerce tersebut adalah suatu perdagangan jasa melalui media online atau internet. Entah itu berupa barang maupun jasa.<br><br>\r\nJenis E-commerce :	<br>\r\nâ€¢	Business to Business (B2B)<br>\r\nâ€¢	Business to Customers (B2C)<br>\r\nâ€¢	Customers to Customers (C2C)<br>\r\nâ€¢	Government to Nation (G2N)<br>\r\n<br>\r\nKeuntungandari E-Commerce :<br>\r\nâ€¢	Revenue Stream (AliranPendapatan) baru yang mungkin lebih menjanjikan yang tidak bias ditemui di system transaksi tradisional.<br>\r\nâ€¢	Dapat meningkatkan market exposure (pangsapasar).<br>\r\nâ€¢	Menurunkan biaya operasional (operating cost).<br>\r\nâ€¢	Melebarkan jangkauan (global reach).<br>\r\nâ€¢	Meningkatkan customer loyality.<br>\r\nâ€¢	Meningkatkan supplier manajement.<br>\r\nâ€¢	Memperpendek waktu produksi.<br>\r\nâ€¢	Meningkatkan value chain (mata rantai pendapatan).<br>\r\nKerugiandari E-Commerce :<br>\r\nâ€¢	Kehilangan segi financial secara langsung karena ada kecurangan.<br>\r\nâ€¢	Pencurian informasi rahasia yang berharga.<br>\r\nâ€¢	Kehilangan kesempatan bisnis karena ganguan pelayanan. Kesalahan ini bersifat kesalahan non-teknis seperti listrik yang tiba-tiba padam.<br>\r\nâ€¢	Kehilangan kepercayaan dari para konsumen.<br>\r\nâ€¢	Kerugian yang takterduga.<br>\r\nâ€¢	Hacking atau peretasan pada sebuah situs.<br>\r\n\r\n			      			      ', 'Info, Pengetahuan, E-Commerce', 'hires3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `nama`, `password`) VALUES
('admin', 'Admin Corefest', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`) VALUES
(30, 'Grinaldi Wisnu', 'grinaldifoc@gmail.com', 'ehe'),
(20, 'grinaldicoffin', 'grinaldifoc@gmail.com', 'wkwkwkwk gblk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
