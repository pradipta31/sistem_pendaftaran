-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 03:00 AM
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
  `id_hasil_tes` int(11) NOT NULL,
  `nomor_peserta` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai_tulis` varchar(11) NOT NULL,
  `nilai_wawancara` varchar(11) NOT NULL,
  `total_nilai` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_tes`
--

INSERT INTO `hasil_tes` (`id_hasil_tes`, `nomor_peserta`, `nama`, `nilai_tulis`, `nilai_wawancara`, `total_nilai`, `status`) VALUES
(21, '2018.003', 'NI wayan Janisumi', '6.25', '100', '53', 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_peserta`, `jurusan`) VALUES
(1, 104, 'Tata Graha');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
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

INSERT INTO `peserta` (`id_peserta`, `nomor_peserta`, `tgl_pendaftaran`, `nik`, `nama`, `email`, `umur`, `tgl_lahir`, `pendidikan`, `tahun_lulus`, `agama`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `alamat`, `kabupaten`, `no_telp`) VALUES
(99, '2018.001', '2018-06-19', '123098190', 'Kusuma Ningrat sari', 'kusuma@mail.com', 21, '1997-08-09', 'SMA', 2015, 'Hindu', 'wanita', '155', '50', 'Gianyar', 'Gianyar', '083114897166'),
(102, '2018.003', '2018-06-20', '15002000879', 'NI wayan Janisumi', 'jani@gmail.com', 18, '2000-08-09', 'SMA', 2015, 'Hindu', 'pria', '155', '90', 'Monang-maning', 'Badung', '083115678198'),
(104, '2018.005', '2018-07-07', '1500200089', 'Kusuma Suara', 'suara@gmail.com', 18, '2000-01-01', 'SMK', 2016, 'Hindu', 'pria', '170', '70', 'Jalan Noja no 6', 'Denpasar', '087615141343');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `aktif` enum('Y','N','','') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `aktif`) VALUES
(15, 'The last sentence he wrote on his letter was that she sent .... regards to all his friends and colleagues.', 'wells', 'big', 'good', 'warm', 'd', 'Y'),
(19, ' I and my friends ..... in the library. We read some books', 'am', 'is', 'have', 'are', 'd', 'Y'),
(20, 'She ..... not work because she has the flu', 'is', 'does', 'do', 'be', 'b', 'Y'),
(21, 'Alina .... song every night.', 'sings', 'sing', 'is', 'does', 'a', 'Y'),
(22, 'My father .... tea every morning.', 'drink', 'drink', 'dringking', 'is', 'b', 'Y'),
(23, 'She is a student. She .... at school.', 'studying', 'study', 'studies', 'does', 'c', 'Y'),
(24, ' We .... soccer match.', 'doin', 'watching', 'watched', 'watches', 'd', 'Y'),
(25, 'Gina cooks fried rice. It .... amazing.', 'does', 'do', 'are', 'is', 'd', 'Y'),
(26, 'My brother rides a bike to school ....', 'everyday', 'last day', 'next week', 'next time', 'a', 'Y'),
(27, 'Tomy, Jane, Mark, Sarah .... smart students', 'is', 'are', 'am', 'is not', 'b', 'Y'),
(28, '..... your brother and sister .... four languages?\n\n', 'Did-speak', 'Does-speak', 'Do-speaks', 'Do-speak', 'd', 'Y'),
(30, 'Most of u..... .24 SKS this semester.', 'to take', 'are be taking', 'are taking', 'be  taking', 'c', 'Y'),
(31, 'What are they doing right now?', 'They are doing swimming', 'They swim right now', 'They are swimming', 'They usually go swimming', 'c', 'Y'),
(32, 'What is he doing in the garden?', 'He is watching TV', 'He is playing cards', 'He is eating', 'He is planting flowers', 'd', 'Y'),
(33, 'Mega can not come to the conference right now because she ..... . her little baby.', ' taking care of', ' is taking care of', ' is takes care of', 'be taking care of', 'b', 'Y'),
(34, '.... he would have  eaten half of the cake', 'If he would be hungry', 'If he is hungry', ' If only he was hungry', 'Had he been hungry', 'd', 'Y'),
(36, 'I could have asked somebody else to carry that box, means ....', 'I didn\'t want to carry the box', 'I carried the box', 'I asked someone to carry the box', 'Somebody else carried the box', 'c', 'Y'),
(37, 'I wish you ....  stay at home because I am sure you will  the concert very much.\r\n', ' don\'t have to', 'didn\'t have to', 'hadn\'t to', ' hadn\'t had to', 'b', 'Y'),
(38, ' Sudirman has won  a medal for swimming. I wish I .... as good as he is\n', 'were', 'would be', 'am', 'will be', 'a', 'Y'),
(39, 'I wish ... now to watch our play.\n', 'he will be here', 'he is here', 'he were here', 'he has been here', 'c', 'Y'),
(40, 'I wish you ... tomorrow.\n', 'are going to go', 'have gone', 'would go', 'will go', 'c', 'Y'),
(41, 'Let\'s go swimming. I wish I .... We have a test next Tuesday.\n', 'will be able to', 'am able to', 'be able to', 'could', 'd', 'Y'),
(42, 'I am planning to go to the party tonight but it is not raining. It\'s raining very hard now.I wish ....', 'it had stopped', 'it stops\r\n', 'it would stop', 'it will stop', 'c', 'Y'),
(43, 'Mother warned her .... the newly painted wall.\r\n', 'not touch', 'not touvhed', 'do not touch', 'not to touch', 'd', 'Y'),
(44, '..... the  Pahlawan street when it began to rain.\n', 'would walk down', 'am walking down', 'have been walking down', 'was walking down', 'd', 'Y'),
(45, 'Don\'t let your baby .... outside!\n', 'plays', 'play', 'is playing', 'playing', 'b', 'Y'),
(46, 'It is necessary that you ..... here on time.\r\n', 'be', 'are', 'to be', 'were', 'b', 'Y'),
(47, 'If you want to ... in running your business, you must work hard.\r\n', 'successive', 'success', 'successfully', 'succeed', 'd', 'Y'),
(50, 'Don\'t worry! ..... the heavy rain, I will visit you next saturday night.\n', 'Despite', 'However', 'Even though', 'Besides', 'c', 'Y'),
(51, 'The man ..... is very rich.\r\n', ' whose has Ferrari', 'of which car Ferrari', 'whose have Ferrari', 'whose car is Ferrari', 'd', 'Y'),
(52, 'Would you mind .... please?', 'for answering the telephone', 'to answer the telephone', 'answer the telephone', 'answering the telephone', 'd', 'Y'),
(53, 'Her hobby is singing that\'s why she always .... singing together with her friends.\n', 'practiced', 'practices', 'to practice', 'practice', 'b', 'Y'),
(54, 'The man has elementary school education but he ..... good at english.', 'has', 'is', 'were', 'was', 'b', 'Y'),
(55, 'sometimes come late to school but this day I ..... early.', 'came', 'come', 'to come', 'comes', 'b', 'Y'),
(56, 'My teacher will ..... happy if I can answer his question well', 'has been', 'to be', 'being', 'be', 'd', 'Y'),
(57, 'The river near my house is deep enough so it .... dangerous for children to play near it.', 'has', 'is ', 'were', 'was', 'b', 'Y'),
(58, 'I ... my bike when it was dirty, but now I am lazy to wash it', 'washed', 'washing', 'washes', 'to wash', 'a', 'Y'),
(59, 'I always bring my dictionary everyday to my school, but I ..... to bring it yesterday.', 'forgot', 'forget', 'forgetting', 'forgotten', 'a', 'Y'),
(60, 'My brother lives in village but she .... in city', 'work', 'works', 'working', 'worked', 'b', 'Y'),
(61, 'I had five books on my table two days ago but now .... only two on it.', 'there is no', 'there is', 'there was', 'there are', 'd', 'Y'),
(62, 'It is raining hard so you must .... your car slowly', 'drives', 'drive', 'to drrive', 'driving', 'b', 'Y'),
(63, 'The room is dark so we can\'t ... anything without light.', 'seen', 'see', 'sees', 'saw', 'b', 'Y'),
(64, 'My computer is out of order so I must .... it to Computer Center to repair it', 'bringing', 'bring', 'brought', 'to bring', 'b', 'Y'),
(65, 'My uncle is one of Math teachers in this school. She .... here everyday', 'is teaching', 'teaching', 'teach', 'teaches', 'd', 'Y'),
(66, 'T. Alfa Edison .... electricity which is very important for us nowadays.', 'invention', 'invens', 'to invent', 'invented', 'd', 'Y'),
(67, 'Students must ..... their school fee as much as Rp 200.000 every month.', 'paying', 'pay', 'pays', 'paid', 'b', 'Y'),
(68, 'You should ..... driving license if you drive a car on high way otherwise the police give you a  ticket.', 'having', 'have', 'have to', 'has', 'd', 'Y'),
(69, 'My uncle works hard night and day because he ..... support his family economy', 'had', 'have to', 'have', 'has to', 'b', 'Y'),
(70, 'Most of students in this class can .... English fluently, the others still have to practice a lot.', 'to speak', 'speak', 'speaking', 'spoke', 'b', 'Y'),
(71, 'My Math teacher may .... us  writing test tomorrow so have to make preparation for it', 'gives', 'give', 'given', 'gave', 'b', 'Y'),
(72, 'Everything can .... well if you also try to cooperate with us.', 'runs', 'ran', 'run', 'running', 'c', 'Y'),
(73, '..... a new language can be very interesting.', 'In Learning', 'Learn', 'Learning', 'Learned', 'c', 'Y'),
(74, 'Ms. Jenifer.....  a lot of novels since she was a teenager.', 'has being read', 'has read', 'has been read', 'has readed', 'b', 'Y'),
(75, 'I think ...... come at the meeting tomorrow.', 'i will', 'i will to', 'i will be going to', 'i will to going to', 'a', 'Y'),
(76, 'They have known each other since ......', 'two days', 'tommorow', '2003', 'three years', 'c', 'Y'),
(77, 'Desi, Mitha, and Nina ...... here for ten years.have been', 'been', 'being have', 'have been', 'be have been', 'c', 'Y'),
(78, 'My uncle ..... me a modern laptop last new year', 'bought', 'was bought', 'have bought', 'to bought', 'a', 'Y'),
(79, 'What did you do two hours ago ?', 'I watched TV', 'I will study English', 'I am reading a book', 'I have breakfast', 'a', 'Y'),
(80, 'Sam ...... a very terrible accident on the avenue yesterday.', 'to see', 'saw', 'being saw', 'is seen', 'b', 'Y'),
(81, 'Carmen and I .... the lunch yet. So, we are very hungry now', 'haven\'t eat', 'haven,t eating', 'have eaten', 'haven\'t eaten', 'd', 'Y'),
(82, 'My older sister receives a lot of flowers ....', 'now', 'tommorrow', 'every February', 'yesterday', 'c', 'Y'),
(83, '..... You and Ahmed at the library last night?', 'Were', 'Did', 'Are', 'Do', 'a', 'Y'),
(84, 'Someone ..... the door now. We are not in the living room.', 'are knocking', 'knock', 'is knocking', 'knocked', 'c', 'Y'),
(85, 'The baby ...... for three hours.', 'has sleeping', 'has slept', 'has sleep', 'has been slept', 'b', 'Y'),
(86, 'Father ....... a car but he ...... it very often', 'does - not have', 'has - does not drive', 'had - does not drive ', 'has – is not driving', 'b', 'Y'),
(87, 'What time does your brother get up?', 'He get up at 5 am', 'He always gets up at 5 am', 'He usually got up at 5 am', 'She always gets up at 5 am', 'b', 'Y'),
(88, 'Dina ..... her little brother to buy her some foods at the moment', 'asked', 'is asking', 'asked', 'asks', 'b', 'Y'),
(89, 'It is still raining now outside. Therefore, the riders ...... their rain coat.', 'are wearing', 'will wearing', 'is wearing', 'have wearing', 'a', 'Y'),
(90, 'Mega can\'t come to the conference right now because she ..... her little baby', 'taking care of', 'is taking care of', ' is takes care of', 'be taking care of', 'b', 'Y'),
(91, 'The doctor carefully examined patients .... heads had been injured in an accident.', 'that', 'whom', 'who', 'whose', 'd', 'Y'),
(92, 'Education in Indonesia is the ..... of schol, goverment and society.', 'responsible', 'responsive', 'responsibly', 'responsibility', 'd', 'Y'),
(93, 'New products .... in the electronic exhibition in Jakarta Expo Center a month ago.', 'display', 'displaying', 'were displayed', 'is displayed', 'c', 'Y'),
(94, 'Aming is smart and diligent and ..... she is nice to all her classmate.', 'howerer', 'be sides', 'nevertheless', 'therefero', 'b', 'Y'),
(95, 'Jusuf Kalla who comes from South Sulawesi is one of the ..... people in eastern Indonesia.', 'more richer', 'richer', 'richest', 'most rich', 'c', 'Y'),
(96, 'I don\'t know why they prefer .... in Makasar', 'live', 'living', 'lived', 'to living', 'b', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
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

INSERT INTO `users` (`id_users`, `nama`, `username`, `email`, `password`, `hak_akses`, `no_telp`) VALUES
(3, 'Admin', 'Admin123', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '087861863842'),
(6, 'Kepala kantor', 'kepalakantor', 'kepalakantor123@gmail.com', '59a7026aa6110249db8f2c06089d0192', 'kepalakantor', '083114887654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  MODIFY `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
