-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 11:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `hasil_tes`
--

CREATE TABLE `hasil_tes` (
  `id` int(11) NOT NULL,
  `nomor_peserta` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai_tulis` varchar(11) NOT NULL,
  `nilai_wawancara` varchar(11) NOT NULL,
  `total_nilai` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_peserta`
--

CREATE TABLE `jawaban_peserta` (
  `id_jawaban` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nomor_peserta` varchar(20) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(299) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` varchar(299) DEFAULT NULL,
  `tahun_lulus` int(11) DEFAULT NULL,
  `agama` varchar(299) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tinggi_badan` varchar(15) DEFAULT NULL,
  `berat_badan` varchar(15) DEFAULT NULL,
  `alamat` text,
  `kabupaten` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nomor_peserta`, `tgl_pendaftaran`, `nik`, `nama`, `email`, `umur`, `tgl_lahir`, `pendidikan`, `tahun_lulus`, `agama`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `alamat`, `kabupaten`, `no_telp`) VALUES
(87, '2018.001', '2018-04-30', '150020007', 'Ni Made Wahyu Cahyani', 'cahyani@yahoo.co.id', 21, '1997-05-03', 'SMK', 2015, 'Hindu', 'wanita', '155', '50', 'Ketewel', 'Denpasar', '087651435671'),
(88, '2018.008', '2018-04-30', '150020009', 'NI Kadek Widiantari', 'widiantari@gmail.com', 21, '1997-04-21', 'SMA', 2015, 'Hindu', 'wanita', '160', '60', 'Kusamba, klungkung', 'Klungkung', '083115890610'),
(89, '2018.008', '2018-04-30', '150020002', 'Ni Ketut Martina Dewi', 'dewi@gmail.com', 21, '1997-03-02', 'SMA', 2015, 'Hindu', 'wanita', '165', '60', 'Batur, Kintamani', 'Bangli', '083114562987'),
(90, '2018.008', '2018-05-05', '150098765412', 'Ni Kadek Kusuma Sari', 'sari@gmail.com', 20, '1998-08-09', 'SMA', 2016, 'Hindu', 'wanita', '170', '60', 'Jalan Nuri Gang 5 no 2B Kesiman', 'Denpasar', '089713425767'),
(91, '2018.008', '2018-05-05', '1235679871456', 'Isman Yantono', 'tono@gmail.com', 29, '1989-02-09', 'S! Pariwisata', 2012, 'Islma', 'pria', '175', '70', 'Jalan ayani No Denpasar', 'Denpasar', '088714454111'),
(92, '2018.008', '2018-05-07', '14567819970205', 'Sukma Anita Dewi', 'sukma@gmail.com', 30, '1988-08-19', 'Sarjana Ekonomi', 2011, 'Kristen', 'wanita', '175', '60', 'Jalan Merdeka no.33A Denpasar', 'Denpasar', '089765123453');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N','','') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(1, '\'User atau Operator Komputer dalam Istilah Komputer disebut dengan..?', 'Brainware', 'Fireware', 'Software', 'Hardware', 'a', '', '2018-04-07', 'Y'),
(10, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', '', '1997-10-10', 'Y'),
(11, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', '', '1997-10-10', 'Y'),
(12, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', '', '1997-10-10', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(299) DEFAULT NULL,
  `username` varchar(299) DEFAULT NULL,
  `email` varchar(299) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `hak_akses` enum('admin','kepalakantor') DEFAULT 'kepalakantor',
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `hak_akses`, `no_telp`) VALUES
(3, 'Admin', 'Admin123', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '087861863842'),
(6, 'Kepala kantor', 'kepalakantor', 'kepalakantor123@gmail.com', '59a7026aa6110249db8f2c06089d0192', 'kepalakantor', '083114887654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_peserta`
--
ALTER TABLE `jawaban_peserta`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawaban_peserta`
--
ALTER TABLE `jawaban_peserta`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
