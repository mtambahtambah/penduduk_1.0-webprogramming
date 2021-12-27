-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 04:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--
CREATE DATABASE IF NOT EXISTS `penduduk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `penduduk`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'ochi', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(50) NOT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`) VALUES
(1, 'babat'),
(2, 'cakung'),
(3, 'sukaraharja');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE IF NOT EXISTS `dusun` (
  `id_dusun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dusun` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dusun`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`) VALUES
(12, 'abah priok'),
(13, 'abah naning');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `warga_id` int(11) NOT NULL AUTO_INCREMENT,
  `warga_nama` varchar(50) NOT NULL,
  `warga_ktp` int(20) NOT NULL,
  `warga_jk` varchar(15) NOT NULL,
  `warga_desa` int(11) NOT NULL,
  `warga_dusun` int(11) NOT NULL,
  `warga_rt` varchar(5) NOT NULL,
  `warga_rw` varchar(5) NOT NULL,
  `warga_status` varchar(15) NOT NULL,
  `warga_pendidikan` varchar(5) NOT NULL,
  `warga_agama` varchar(15) NOT NULL,
  PRIMARY KEY (`warga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`warga_id`, `warga_nama`, `warga_ktp`, `warga_jk`, `warga_desa`, `warga_dusun`, `warga_rt`, `warga_rw`, `warga_status`, `warga_pendidikan`, `warga_agama`) VALUES
(50, 'aryo seto', 1212122, 'Laki-laki', 1, 12, '01', '09', 'Kawin', 'SD', 'Buddha'),
(51, 'kamila', 121323323, 'Perempuan', 1, 13, '06', '09', 'Belum Kawin', 'SMA', 'Kristen'),
(52, 'amar', 9090909, 'Laki-laki', 3, 12, '09', '02', 'Belum Kawin', 'SMP', 'Kristen'),
(53, 'jana', 2323537, 'Laki-laki', 2, 13, '02', '01', 'Kawin', 'SMP', 'Hindu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
