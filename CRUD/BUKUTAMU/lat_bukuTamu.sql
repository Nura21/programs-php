-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 11:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat_bukuTamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukuTamu`
--

CREATE TABLE `bukuTamu` (
  `idTamu` int(128) NOT NULL,
  `tanggalTamu` datetime NOT NULL,
  `namaTamu` varchar(128) NOT NULL,
  `instansiTamu` varchar(128) NOT NULL,
  `keperluanTamu` varchar(128) NOT NULL,
  `kesanpesanTamu` varchar(128) NOT NULL,
  `ttdTamu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukuTamu`
--

INSERT INTO `bukuTamu` (`idTamu`, `tanggalTamu`, `namaTamu`, `instansiTamu`, `keperluanTamu`, `kesanpesanTamu`, `ttdTamu`) VALUES
(1, '2021-05-28 00:00:00', 'Irfansyah', 'Pamulang', 'Main', 'Semoga anda baik-baik saja', 'Nura'),
(2, '2021-01-19 00:00:00', 'Irfansyah', 'Pamulang', 'Main', 'Main', 'Nura2'),
(4, '2020-09-15 00:00:00', 'Boy', 'UNTIRTA', 'Main', 'Main', 'Nura3'),
(5, '2019-08-14 00:00:00', 'Gembul', 'UNIS', 'Main', 'Keluh', 'Nura4'),
(6, '2020-09-14 00:00:00', 'Nurati', 'Pamulang', 'Main', 'Keluh', 'Nura5'),
(7, '2020-09-15 00:00:00', 'Iranda', 'Pamulang', 'Main', 'Main', 'Nura6'),
(8, '2020-09-14 00:00:00', 'Kinan', 'Pamulang', 'Main', 'Main', 'Nura7'),
(9, '2020-09-14 00:00:00', 'Tanti', 'Pamulang', 'Main', 'Main', 'Nura8'),
(10, '2020-09-14 00:00:00', 'Ara', 'Pamulang', 'Main', 'Main', 'Nura9'),
(11, '2020-09-15 00:00:00', 'Nana', 'Pamulang', 'Mian', 'Mian', 'Nura10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukuTamu`
--
ALTER TABLE `bukuTamu`
  ADD PRIMARY KEY (`idTamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukuTamu`
--
ALTER TABLE `bukuTamu`
  MODIFY `idTamu` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
