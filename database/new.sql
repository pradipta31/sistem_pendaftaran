-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 06:40 AM
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
  `id_peserta` int(11) NOT NULL,
  `nomor_peserta` varchar(299) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` varchar(299) DEFAULT NULL,
  `nilai_tulis` varchar(11) NOT NULL,
  `nilai_wawancara` varchar(11) DEFAULT NULL,
  `total_nilai` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_tes`
--

INSERT INTO `hasil_tes` (`id_hasil_tes`, `id_peserta`, `nomor_peserta`, `nama`, `tahun`, `nilai_tulis`, `nilai_wawancara`, `total_nilai`, `status`) VALUES
(3, 3, '2017.003', 'Krisna Cahya', '2017', '26', '76', '51', 'Tidak Lulus'),
(4, 4, '2017.004', 'Nyoman Suni', '2017', '28', '80', '54', 'Tidak Lulus'),
(5, 5, '2017.005', 'Karyana Putra', '2017', '28', '24', '26', 'Tidak Lulus'),
(6, 6, '2017.006', 'Ni Ketut Martina Dewi', '2017', '14', '90', '52', 'Tidak Lulus'),
(7, 7, '2017.007', 'Dendra Setiawan', '2017', '18', '70', '44', 'Tidak Lulus'),
(8, 8, '2017.008', 'Ni Kadek Widiantari', '2017', '28', '90', '59', 'Tidak Lulus'),
(11, 9, '2017.009', 'Ni Komang Juliana', '2017', '98', '87', '92.5', 'Lulus'),
(12, 10, '2017.010', 'Ni Kadek Sumiani', '2017', '26', '80', '53', 'Tidak Lulus'),
(13, 11, '2018.011', 'Ni Made Wahyu Cahyani', '2018', '28', '46', '37', 'Tidak Lulus'),
(17, 12, '2018.012', 'I Gede Pradipta Adi Nugraha', '2018', '0', '90', '45', 'Tidak Lulus');

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
(3, 3, 'Tata Boga'),
(4, 4, 'Tata Graha'),
(5, 5, 'Tata Boga'),
(6, 6, 'Tata Hidangan'),
(7, 7, 'Tata Boga'),
(8, 8, 'Tata Hidangan'),
(9, 9, 'Tata Graha'),
(10, 10, 'Tata Graha'),
(11, 11, 'Tata Graha'),
(12, 12, 'Tata Boga');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nomor_peserta` varchar(20) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `tahun` varchar(10) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(299) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
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
  `no_telp` varchar(15) DEFAULT NULL,
  `file` varchar(299) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nomor_peserta`, `tgl_pendaftaran`, `tahun`, `nik`, `nama`, `email`, `umur`, `tgl_lahir`, `pendidikan`, `tahun_lulus`, `agama`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `alamat`, `kabupaten`, `no_telp`, `file`) VALUES
(3, '2017.003', '2017-07-26', '2017', '150020066', 'Krisna Cahya', 'cahya@gmail.com', 26, '1991-07-09', 'D1 Pariwisata', 2011, 'Hindu', 'pria', '166', '70', 'jalan kamboja no 98', 'Denpasar', '089761514123', 'STIKOM-BALI.png'),
(4, '2017.004', '2017-07-26', '2017', '150020067', 'Nyoman Suni', 'suni@gmail.com', 26, '1991-06-09', 'SMA', 2011, 'Hindu', 'wanita', '166', '40', 'jalan ciungwanara no 90x', 'Gianyar', '081333789876', 'STIKOM-BALI.png'),
(5, '2017.005', '2017-07-26', '2017', '150020055', 'Karyana Putra', 'putra@gmail.com', 25, '1992-01-09', 'SMA', 2011, 'Hindu', 'pria', '180', '70', 'Jalan tibubeneng no 1x', 'Buleleng', '081234678122', 'STIKOM-BALI.png'),
(6, '2017.006', '2017-07-26', '2017', '150020022', 'Ni Ketut Martina Dewi', 'martina@gmail.com', 21, '1996-02-01', 'SMA', 2015, 'Hindu', 'wanita', '160', '60', 'Jalan raya batur gg. arjuna no 5', 'Bangli', '083114567098', 'STIKOM-BALI.png'),
(7, '2017.007', '2017-07-26', '2017', '150010001', 'Dendra Setiawan', 'setiawan@gmail.com', 25, '1992-07-09', 'SMA', 2012, 'Hindu', 'pria', '189', '76', 'jalan raya jembrana', 'Negara', '081234786151', 'STIKOM-BALI.png'),
(8, '2017.008', '2017-07-26', '2017', '1500110087', 'Ni Kadek Widiantari', 'widi@gmail.com', 20, '1997-04-21', 'SMA', 2015, 'Hindu', 'wanita', '160', '65', 'Jalan raya Kusamba', 'Klungkung', '083114656610', 'STIKOM-BALI.png'),
(9, '2017.009', '2017-07-26', '2017', '150020091', 'Ni Komang Juliana', 'juli@gmail.com', 20, '1997-02-08', 'SMA', 2015, 'Hindu', 'wanita', '155', '40', 'Jalan Raya batukaru no 99d', 'Tabanan', '092123567123', 'STIKOM-BALI.png'),
(10, '2017.010', '2017-07-26', '2017', '1500200076', 'Ni Kadek Sumiani', 'ani@gmail.com', 24, '1992-09-11', 'SMK Pariwisata', 2013, 'Hindu', 'wanita', '150', '45', 'Jalan Raya Tulikup', 'Badung', '083112556778', 'STIKOM-BALI.png'),
(11, '2018.011', '2018-07-26', '2018', '150020007', 'Ni Made Wahyu Cahyani', 'cahyani@gmail.com', 21, '1997-05-03', 'SMA', 2015, 'Hindu', 'wanita', '155', '40', 'Br.Gumicik, Ketewel', 'Gianyar', '084114887626', 'wahyu1.jpg'),
(12, '2018.012', '2018-07-26', '2018', '15003016', 'I Gede Pradipta Adi Nugraha', 'dipta@gmail.com', 21, '1997-04-03', 'SMA', 2015, 'Hindu', 'pria', '188', '70', 'Jalan raya batubulan', 'Gianyar', '087861862863', 'ceritamotivasi-pusing11.jpg');

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
(1, 'The last sentence he wrote on his letter was that she sent .... regards to all his friends and colleagues.', 'wells', 'big', 'good', 'warms', 'd', 'Y'),
(2, ' I and my friends ..... in the library. We read some books', 'am', 'is', 'have', 'are', 'd', 'Y'),
(3, 'She ..... not work because she has the flu', 'is', 'does', 'do', 'be', 'b', 'Y'),
(4, 'Alina .... song every night.', 'sings', 'sing', 'is', 'does', 'a', 'Y'),
(5, 'My father .... tea every morning.', 'drink', 'drink', 'dringking', 'is', 'b', 'Y'),
(6, 'She is a student. She .... at school.', 'studying', 'study', 'studies', 'does', 'c', 'Y'),
(7, ' We .... soccer match.', 'doin', 'watching', 'watched', 'watches', 'd', 'Y'),
(8, 'Gina cooks fried rice. It .... amazing.', 'does', 'do', 'are', 'is', 'd', 'Y'),
(9, 'My brother rides a bike to school ....', 'everyday', 'last day', 'next week', 'next time', 'a', 'Y'),
(10, 'Tomy, Jane, Mark, Sarah .... smart students', 'is', 'are', 'am', 'is not', 'b', 'Y'),
(11, '..... your brother and sister .... four languages?\n\n', 'Did-speak', 'Does-speak', 'Do-speaks', 'Do-speak', 'd', 'Y'),
(12, 'Most of u..... .24 SKS this semester.', 'to take', 'are be taking', 'are taking', 'be  taking', 'c', 'Y'),
(13, 'What are they doing right now?', 'They are doing swimming', 'They swim right now', 'They are swimming', 'They usually go swimming', 'c', 'Y'),
(14, 'What is he doing in the garden?', 'He is watching TV', 'He is playing cards', 'He is eating', 'He is planting flowers', 'd', 'Y'),
(15, 'Mega can not come to the conference right now because she ..... . her little baby.', ' taking care of', ' is taking care of', ' is takes care of', 'be taking care of', 'b', 'Y'),
(16, '.... he would have  eaten half of the cake', 'If he would be hungry', 'If he is hungry', ' If only he was hungry', 'Had he been hungry', 'd', 'Y'),
(17, 'I could have asked somebody else to carry that box, means ....', 'I didn\'t want to carry the box', 'I carried the box', 'I asked someone to carry the box', 'Somebody else carried the box', 'c', 'Y'),
(18, 'I wish you ....  stay at home because I am sure you will  the concert very much.\r\n', ' don\'t have to', 'didn\'t have to', 'hadn\'t to', ' hadn\'t had to', 'b', 'Y'),
(19, ' Sudirman has won  a medal for swimming. I wish I .... as good as he is\n', 'were', 'would be', 'am', 'will be', 'a', 'Y'),
(20, 'I wish ... now to watch our play.\n', 'he will be here', 'he is here', 'he were here', 'he has been here', 'c', 'Y'),
(21, 'I wish you ... tomorrow.\n', 'are going to go', 'have gone', 'would go', 'will go', 'c', 'Y'),
(22, 'Let\'s go swimming. I wish I .... We have a test next Tuesday.\n', 'will be able to', 'am able to', 'be able to', 'could', 'd', 'Y'),
(23, 'I am planning to go to the party tonight but it is not raining. It\'s raining very hard now.I wish ....', 'it had stopped', 'it stops\r\n', 'it would stop', 'it will stop', 'c', 'Y'),
(24, 'Mother warned her .... the newly painted wall.\r\n', 'not touch', 'not touvhed', 'do not touch', 'not to touch', 'd', 'Y'),
(25, '..... the  Pahlawan street when it began to rain.\n', 'would walk down', 'am walking down', 'have been walking down', 'was walking down', 'd', 'Y'),
(26, 'Don\'t let your baby .... outside!\n', 'plays', 'play', 'is playing', 'playing', 'b', 'Y'),
(27, 'It is necessary that you ..... here on time.\r\n', 'be', 'are', 'to be', 'were', 'b', 'Y'),
(28, 'If you want to ... in running your business, you must work hard.\r\n', 'successive', 'success', 'successfully', 'succeed', 'd', 'Y'),
(29, 'Don\'t worry! ..... the heavy rain, I will visit you next saturday night.\n', 'Despite', 'However', 'Even though', 'Besides', 'c', 'Y'),
(30, 'The man ..... is very rich.\r\n', ' whose has Ferrari', 'of which car Ferrari', 'whose have Ferrari', 'whose car is Ferrari', 'd', 'Y'),
(31, 'Would you mind .... please?', 'for answering the telephone', 'to answer the telephone', 'answer the telephone', 'answering the telephone', 'd', 'Y'),
(32, 'Her hobby is singing that\'s why she always .... singing together with her friends.\n', 'practiced', 'practices', 'to practice', 'practice', 'b', 'Y'),
(33, 'The man has elementary school education but he ..... good at english.', 'has', 'is', 'were', 'was', 'b', 'Y'),
(34, 'sometimes come late to school but this day I ..... early.', 'came', 'come', 'to come', 'comes', 'b', 'Y'),
(35, 'My teacher will ..... happy if I can answer his question well', 'has been', 'to be', 'being', 'be', 'd', 'Y'),
(36, 'The river near my house is deep enough so it .... dangerous for children to play near it.', 'has', 'is ', 'were', 'was', 'b', 'Y'),
(37, 'I ... my bike when it was dirty, but now I am lazy to wash it', 'washed', 'washing', 'washes', 'to wash', 'a', 'Y'),
(38, 'I always bring my dictionary everyday to my school, but I ..... to bring it yesterday.', 'forgot', 'forget', 'forgetting', 'forgotten', 'a', 'Y'),
(39, 'My brother lives in village but she .... in city', 'work', 'works', 'working', 'worked', 'b', 'Y'),
(40, 'I had five books on my table two days ago but now .... only two on it.', 'there is no', 'there is', 'there was', 'there are', 'd', 'Y'),
(41, 'It is raining hard so you must .... your car slowly', 'drives', 'drive', 'to drrive', 'driving', 'b', 'Y'),
(42, 'The room is dark so we can\'t ... anything without light.', 'seen', 'see', 'sees', 'saw', 'b', 'Y'),
(43, 'My computer is out of order so I must .... it to Computer Center to repair it', 'bringing', 'bring', 'brought', 'to bring', 'b', 'Y'),
(44, 'My uncle is one of Math teachers in this school. She .... here everyday', 'is teaching', 'teaching', 'teach', 'teaches', 'd', 'Y'),
(45, 'T. Alfa Edison .... electricity which is very important for us nowadays.', 'invention', 'invens', 'to invent', 'invented', 'd', 'Y'),
(46, 'Students must ..... their school fee as much as Rp 200.000 every month.', 'paying', 'pay', 'pays', 'paid', 'b', 'Y'),
(47, 'You should ..... driving license if you drive a car on high way otherwise the police give you a  ticket.', 'having', 'have', 'have to', 'has', 'd', 'Y'),
(48, 'My uncle works hard night and day because he ..... support his family economy', 'had', 'have to', 'have', 'has to', 'b', 'Y'),
(49, 'Most of students in this class can .... English fluently, the others still have to practice a lot.', 'to speak', 'speak', 'speaking', 'spoke', 'b', 'Y'),
(50, 'My Math teacher may .... us  writing test tomorrow so have to make preparation for it', 'gives', 'give', 'given', 'gave', 'b', 'Y'),
(51, 'Everything can .... well if you also try to cooperate with us.', 'runs', 'ran', 'run', 'running', 'c', 'Y'),
(52, '..... a new language can be very interesting.', 'In Learning', 'Learn', 'Learning', 'Learned', 'c', 'Y'),
(53, 'Ms. Jenifer.....  a lot of novels since she was a teenager.', 'has being read', 'has read', 'has been read', 'has readed', 'b', 'Y'),
(54, 'I think ...... come at the meeting tomorrow.', 'i will', 'i will to', 'i will be going to', 'i will to going to', 'a', 'Y'),
(55, 'They have known each other since ......', 'two days', 'tommorow', '2003', 'three years', 'c', 'Y'),
(56, 'Desi, Mitha, and Nina ...... here for ten years.have been', 'been', 'being have', 'have been', 'be have been', 'c', 'Y'),
(57, 'My uncle ..... me a modern laptop last new year', 'bought', 'was bought', 'have bought', 'to bought', 'a', 'Y'),
(58, 'What did you do two hours ago ?', 'I watched TV', 'I will study English', 'I am reading a book', 'I have breakfast', 'a', 'Y'),
(59, 'Sam ...... a very terrible accident on the avenue yesterday.', 'to see', 'saw', 'being saw', 'is seen', 'b', 'Y'),
(60, 'Carmen and I .... the lunch yet. So, we are very hungry now', 'haven\'t eat', 'haven,t eating', 'have eaten', 'haven\'t eaten', 'd', 'Y'),
(61, 'My older sister receives a lot of flowers ....', 'now', 'tommorrow', 'every February', 'yesterday', 'c', 'Y'),
(62, '..... You and Ahmed at the library last night?', 'Were', 'Did', 'Are', 'Do', 'a', 'Y'),
(63, 'Someone ..... the door now. We are not in the living room.', 'are knocking', 'knock', 'is knocking', 'knocked', 'c', 'Y'),
(64, 'The baby ...... for three hours.', 'has sleeping', 'has slept', 'has sleep', 'has been slept', 'b', 'Y'),
(65, 'Father ....... a car but he ...... it very often', 'does - not have', 'has - does not drive', 'had - does not drive ', 'has – is not driving', 'b', 'Y'),
(66, 'What time does your brother get up?', 'He get up at 5 am', 'He always gets up at 5 am', 'He usually got up at 5 am', 'She always gets up at 5 am', 'b', 'Y'),
(67, 'Dina ..... her little brother to buy her some foods at the moment', 'asked', 'is asking', 'asked', 'asks', 'b', 'Y'),
(68, 'It is still raining now outside. Therefore, the riders ...... their rain coat.', 'are wearing', 'will wearing', 'is wearing', 'have wearing', 'a', 'Y'),
(69, 'Mega can\'t come to the conference right now because she ..... her little baby', 'taking care of', 'is taking care of', ' is takes care of', 'be taking care of', 'b', 'Y'),
(70, 'The doctor carefully examined patients .... heads had been injured in an accident.', 'that', 'whom', 'who', 'whose', 'd', 'Y'),
(71, 'Education in Indonesia is the ..... of schol, goverment and society.', 'responsible', 'responsive', 'responsibly', 'responsibility', 'd', 'Y'),
(72, 'New products .... in the electronic exhibition in Jakarta Expo Center a month ago.', 'display', 'displaying', 'were displayed', 'is displayed', 'c', 'Y'),
(73, 'Aming is smart and diligent and ..... she is nice to all her classmate.', 'howerer', 'be sides', 'nevertheless', 'therefero', 'b', 'Y'),
(74, 'Jusuf Kalla who comes from South Sulawesi is one of the ..... people in eastern Indonesia.', 'more richer', 'richer', 'richest', 'most rich', 'c', 'Y'),
(75, 'I don\'t know why they prefer .... in Makasar', 'live', 'living', 'lived', 'to living', 'b', 'Y');

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
(3, 3, 3, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'A,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,C,B,B,B,B,B,C,B,C,B,B,B,B,B,B,B,B,B,B,B,C,B', '13', '34', '3'),
(4, 4, 4, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'A,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,B,D,B,B,B,C,B,D,B,C,B,D,C,B,C,B,B,B,B,B,B,B,B,B,A,A,D,D', '14', '35', '1'),
(5, 5, 5, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B,B,B,B,C,B,B,B,C,B,B,B,B,C,B,B,B,B,B,B,B,C,B,B,B,B,B,B,B,B,B,B,C,C,B,B,B,B,C,B,B,B,C,B,C,B,B,B,B,B', '14', '36', '0'),
(6, 6, 6, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B,B,B,C,B,B,B,C,B,B,C,B,B,B,C,B,B,D,C,B,D,C,C,C,C,D,C,D,B,C,D,C,C,C,C,D,C,C,C,C,C,B,C,B,A,C,C,C', '7', '41', '2'),
(7, 7, 7, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B,B,B,B,B,B,C,B,C,C,C,C,C,C,C,C,C,C,B,C,C,C,C,C,C,C,C,C,C,C,C,C,C,C,C,C,C,B,B,C,C,C,B,C,C,B,C,C,A', '9', '40', '1'),
(8, 8, 8, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'C,B,B,B,C,B,B,B,C,B,B,B,B,B,C,B,B,B,B,B,B,B,C,B,B,B,C,B,B,B,B,B,B,B,B,B,C,B,B,B,B,B,B', '14', '29', '7'),
(11, 9, 11, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'D,D,B,A,B,C,D,D,A,B,D,C,C,D,B,D,C,B,A,C,C,D,C,D,D,B,B,D,C,D,D,B,B,B,D,B,A,A,B,D,B,B,D,D,B,D,B,B,B', '49', '0', '1'),
(12, 10, 12, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'A,B,B,B,C,B,B,B,C,B,D,B,C,B,C,B,B,B,B,C,B,B,C,B,C,B,C,C,B,B,C,B,B,C,B,C,C,B,B,B,B,B,B,C,C,B,B,B', '13', '35', '2'),
(13, 11, 13, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'C,B,B,B,B,B,B,B,C,B,B,B,B,B,B,C,B,B,C,B,B,B,B,C,B,C,B,B,B,B,B,C,B,B,B,B,B,C,C,C,C,B,B,B,B,C,B', '14', '33', '3'),
(14, 12, 14, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', 'B', '0', '1', '49'),
(17, 12, 17, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50', '', '0', '0', '50');

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
(1, 'Admin', 'Admin123', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '087861863842'),
(2, 'Kepala kantor', 'kepalakantor', 'kepalakantor123@gmail.com', '59a7026aa6110249db8f2c06089d0192', 'kepalakantor', '083114887654');

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
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `fk_id_peserta_jurusan` (`id_peserta`);

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
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`);

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
  MODIFY `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `fk_id_peserta_jurusan` FOREIGN KEY (`id_peserta`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
