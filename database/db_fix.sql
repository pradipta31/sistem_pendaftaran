-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2018 at 12:36 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi_eksekutif`
--

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_hasil_tes` int(11) NOT NULL,
  `id_soal` varchar(500) NOT NULL,
  `pilihan` varchar(300) DEFAULT NULL,
  `benar` varchar(100) DEFAULT NULL,
  `salah` varchar(100) DEFAULT NULL,
  `kosong` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id_tes`, `id_peserta`, `id_hasil_tes`, `id_soal`, `pilihan`, `benar`, `salah`, `kosong`) VALUES
(1, 6, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B,B,B,A,B,B,C,D,B,C,B,D,B,C,D,B,C,A,A,C,B,A,A,C,B,D,B,C,A,A,C,B,D,B,C,B,D,B,B,C,A,B,B,A,A,C,A,A,B,C', '15', '35', '0'),
(4, 3, 4, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B,C,B,B,B,C,A,A,A,B,B,B,B,B,B,B,D,C,C,D,D,B,D,D,C,C,D,C,D,D,A,D,D,A,B,A,D,D,C,D,D,C,C,C,A,D,D,C,C,D', '10', '40', '0'),
(6, 5, 6, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'A,B,B,C,B,B,B,B,B,C,B,B,B,C,B,B,B,D,A,B,D,B,D,B,A,D,B,D,B,D,B,D,B,D,B,B,B,B,C,B,B,C,B,B,B,B', '14', '32', '4'),
(7, 7, 7, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'D,D,B,A,B,C,D,D,A,B,D,C,C,D,B,D,C,B,A,C,C,D,C,D,D,B,B,C,D,B,D,B,B,B,D,B,A,A,B,D,B,B,B,D,D,B,D,B,B,B', '47', '3', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
