-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 11:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desa_wisata`
--
CREATE DATABASE IF NOT EXISTS `desa_wisata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `desa_wisata`;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_wisata`
--

CREATE TABLE IF NOT EXISTS `daftar_wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wisata` varchar(128) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `harga_tiket` varchar(128) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`id_wisata`, `nama_wisata`, `id_jenis`, `harga_tiket`, `jam_buka`, `jam_tutup`, `keterangan`, `foto`) VALUES
(2, 'Krisna Funtastic Land', 1, '20000', '16:00:00', '21:00:00', 'Tempat rekreasi keluarga', 'kfl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE IF NOT EXISTS `homestay` (
  `id_homestay` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `nama_homestay` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_homestay`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rumah_makan`
--

CREATE TABLE IF NOT EXISTS `rumah_makan` (
  `id_rumahmakan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `nama_rumahmakan` varchar(128) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_rumahmakan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rumah_makan`
--

INSERT INTO `rumah_makan` (`id_rumahmakan`, `id_jenis`, `nama_rumahmakan`, `jam_buka`, `jam_tutup`, `keterangan`, `foto`) VALUES
(1, 3, 'Krisna Wisata Kuliner', '20:38:00', '20:38:00', 'Rumah Makan Babi', '2906282.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE IF NOT EXISTS `tb_jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(128) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Tempat Wisata'),
(2, 'Home Stay'),
(3, 'Rumah Makan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
