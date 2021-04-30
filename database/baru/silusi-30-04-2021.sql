-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengumuman`
--

CREATE TABLE `jadwal_pengumuman` (
  `id` int(11) NOT NULL,
  `nama_jadwal` varchar(155) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `jam_awal` time NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pengumuman`
--

INSERT INTO `jadwal_pengumuman` (`id`, `nama_jadwal`, `tanggal_awal`, `jam_awal`, `tanggal_akhir`, `jam_akhir`) VALUES
(1, 'Pengumuman Kelulusan', '2021-04-26', '07:32:00', '2021-05-01', '07:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `kelompok_mapel` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `kelompok_mapel`) VALUES
(1, 'PAI', 'Kelompok A Umum'),
(2, 'PPKN', 'Kelompok A Umum'),
(3, 'Bahasa Indonesia', 'Kelompok A Umum'),
(4, 'Matematika Wajib', 'Kelompok A Umum'),
(5, 'Sejarah Indonesia', 'Kelompok A Umum'),
(6, 'Bahasa Inggris', 'Kelompok A Umum'),
(7, 'Seni Budaya', 'Kelompok B Umum'),
(8, 'Penjasorkes', 'Kelompok B Umum'),
(9, 'Prakarya', 'Kelompok B Umum'),
(10, 'Bahasa Daerah', 'Kelompok B Umum'),
(11, 'Matematika Peminatan', 'Kelompok C Peminatan dan Lintas Minat'),
(12, 'Biologi', 'Kelompok C Peminatan dan Lintas Minat'),
(13, 'Fisika', 'Kelompok C Peminatan dan Lintas Minat'),
(14, 'Kimia', 'Kelompok C Peminatan dan Lintas Minat'),
(15, 'Sejarah Peminatan', 'Kelompok C Peminatan dan Lintas Minat'),
(16, 'Geografi', 'Kelompok C Peminatan dan Lintas Minat'),
(17, 'Ekonomi', 'Kelompok C Peminatan dan Lintas Minat'),
(18, 'Sosiologi', 'Kelompok C Peminatan dan Lintas Minat'),
(19, 'Sastra Inggris', 'Lintas Minat');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nilai_rapot` double DEFAULT NULL,
  `nusp` double DEFAULT NULL,
  `nsp` double DEFAULT NULL,
  `avg` double DEFAULT NULL,
  `status_lulus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(155) NOT NULL,
  `pengumuman` text NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `notlp_sekolah` varchar(25) NOT NULL,
  `logo_sekolah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `alamat_sekolah`, `notlp_sekolah`, `logo_sekolah`) VALUES
(1, 'Ardhacodes', 'Jl. Sidoarjo', '031-999999', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `nomor_ujian` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(100) NOT NULL,
  `status_keuangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nomor_ujian`, `nama`, `tempat_lahir`, `tgl_lahir`, `kelas`, `status_keuangan`) VALUES
(1, 7101, '0031323884', 'Adella Deva Anjali', 'SIDOARJO', '2003-06-06', 'IPA', 'Belum Lunas'),
(2, 7108, '0034017431', 'Afif Rafi Budiman', 'SEMARANG', '2003-01-06', 'IPA', 'Lunas'),
(3, 7111, '0027834296', 'Agung Fitra Pratama', 'JOMBANG', '2002-12-05', 'IPA', 'Lunas'),
(4, 7123, '0031793275', 'Akbar Krisna Wandana', 'JOMBANG', '2003-06-18', 'IPA', 'Lunas'),
(5, 7127, '0038624447', 'Ali Choirudin', 'Sidoarjo', '2003-01-31', 'IPA', 'Lunas'),
(6, 7131, '0033954521', 'Amanda Reza Andriani', 'Sidoarjo', '2003-05-27', 'IPA', 'Lunas'),
(7, 7138, '0027830077', 'Andriana Yuni Susanti', 'Blitar', '2002-06-21', 'IPA', 'Lunas'),
(8, 7142, '0027939463', 'Annisa Ulifatul Hidayah', 'SIDOARJO', '2002-09-06', 'IPA', 'Lunas'),
(9, 7151, '0034696765', 'Arsyita Intan Amalia', 'SURABAYA', '2003-02-07', 'IPA', 'Lunas'),
(10, 7152, '0033885634', 'Aulia Anggi Pradhani Purwadi', 'SIDOARJO', '2003-06-06', 'IPA', 'Lunas'),
(11, 7153, '0032553983', 'Aulia Putri Apsari', 'Sidoarjo', '2003-02-05', 'IPA', 'Lunas'),
(12, 7158, '0034451753', 'Azarine Sade Devitasari', 'SIDOARJO', '2003-03-30', 'IPA', 'Lunas'),
(13, 7168, '0034138806', 'Della Ayunda P', 'Sidoarjo', '2003-03-26', 'IPA', 'Lunas'),
(14, 7169, '0033850527', 'Devan Yusfa Sukmadya', 'SURABAYA', '2003-04-15', 'IPA', 'Lunas'),
(15, 7178, '0037332073', 'Dini Nandya Arifin', 'PACITAN', '2003-10-06', 'IPA', 'Lunas'),
(16, 7184, '0034455894', 'Esa Nabillah Alifiah', 'SIDOARJO', '2003-04-26', 'IPA', 'Lunas'),
(17, 7192, '0034456028', 'Farhad Thalib', 'SIDOARJO', '2003-02-06', 'IPA', 'Lunas'),
(18, 7206, '0039968491', 'Heksa Ainan Santoviq', 'SURABAYA', '2003-06-18', 'IPA', 'Lunas'),
(19, 7232, '0034455529', 'Leonardo Wiranata', 'Sidoarjo', '2003-08-14', 'IPA', 'Lunas'),
(20, 7246, '0010705870', 'Moch Edy Yunus', 'SURABAYA', '2001-10-18', 'IPA', 'Lunas'),
(21, 7279, '0032216901', 'Nadya Ayu Fadhila', 'Surabaya', '2003-03-30', 'IPA', 'Lunas'),
(22, 7299, '0029700294', 'Olifia Putri Adita ', 'Jombang', '2002-11-14', 'IPA', 'Lunas'),
(23, 7301, '0036108159', 'Pricillia Audy Laura Levia', 'Sidoarjo', '2003-10-05', 'IPA', 'Lunas'),
(24, 7319, '0024624526', 'Razzan Rabbani Vauzan', 'TANGERANG', '2002-12-16', 'IPA', 'Lunas'),
(25, 7327, '0027332031', 'Riki Endri A', 'SIDOARJO', '2002-06-10', 'IPA', 'Lunas'),
(26, 7328, '0037908438', 'Rino Firmansyah Putra', 'SIDOARJO', '2003-04-18', 'IPA', 'Lunas'),
(27, 7330, '0021601728', 'Risky Faiq Al Mustofa', 'SIDOARJO', '2002-09-24', 'IPA', 'Lunas'),
(28, 7336, '0035548200', 'Ruhama` Halilintar', 'SURABAYA', '2003-08-18', 'IPA', 'Lunas'),
(29, 7349, '0032233365', 'Seina Kanaya Siregar', 'KUPANG', '2003-03-15', 'IPA', 'Lunas'),
(30, 7354, '0037637337', 'Sinatrya Adham Kusuma Agasta', 'SURABAYA', '2003-03-05', 'IPA', 'Lunas'),
(31, 7356, '0034456046', 'Syadzwina Khairani Fifad', 'SIDOARJO', '2003-04-18', 'IPA', 'Lunas'),
(32, 7359, '0034438089', 'Tarisa Martha Devi', 'SIDOARJO', '2003-03-03', 'IPA', 'Lunas'),
(33, 7363, '0033952294', 'Tri Ajeng Julia Rohmawati', 'SIDOARJO', '2003-07-11', 'IPA', 'Lunas'),
(34, 7374, '0034480724', 'Zaidan Risqullah Satriya', 'SIDOARJO', '2003-04-02', 'IPA', 'Lunas'),
(35, 7387, '0027485285', 'Mutiara Azizah Ulayya Syafi\'i', 'Surabaya', '2002-10-05', 'IPA', 'Lunas'),
(36, 7112, '0033634614', 'Agustina Rachma Wilujeng', 'SIDOARJO', '2003-08-07', 'IPA', 'Lunas'),
(37, 7113, '0026377497', 'Ahmad Dhani Dzulhilmi', 'JOMBANG', '2002-07-08', 'IPA', 'Lunas'),
(38, 7121, '0032567164', 'Aisyah Ramadhanti Suhada', 'SIDOARJO', '2003-10-28', 'IPA', 'Lunas'),
(39, 7133, '0027659812', 'Ananda Septiana Dwi Saputri', 'DENPASAR', '2002-09-29', 'IPA', 'Lunas'),
(40, 7145, '0033613948', 'Aprillia Putri Aqila', 'SIDOARJO', '2003-04-12', 'IPA', 'Lunas'),
(41, 7147, '0038966694', 'Arimbi Inas Shabiha', 'SURABAYA', '2003-07-30', 'IPA', 'Lunas'),
(42, 7155, '0034455714', 'Aulia Wahyu Nitasari', 'MADIUN', '2003-04-09', 'IPA', 'Lunas'),
(43, 7173, '0033952530', 'Diananta Rizki Maulana', 'SURABAYA', '2003-05-14', 'IPA', 'Lunas'),
(44, 7186, '0034455718', 'Evrilla Nur Amalina Aisha', 'Surabaya', '2003-04-03', 'IPA', 'Lunas'),
(45, 7193, '0035793976', 'Farid Putra Rachmansyah', 'Surabaya', '2003-09-06', 'IPA', 'Lunas'),
(46, 7194, '0034455736', 'Finanda Putri Arindra', 'Surabaya', '2003-05-29', 'IPA', 'Lunas'),
(47, 7196, '0034296924', 'Fitri Yulinar Aldila', 'SURABAYA', '2003-07-19', 'IPA', 'Lunas'),
(48, 7200, '0026169368', 'Gesang Gumilang Subarkah', 'SIDOARJO', '2002-05-07', 'IPA', 'Lunas'),
(49, 7209, '0034437725', 'Ikhsanudin Adli Maulana', 'Sidoarjo', '2003-03-23', 'IPA', 'Lunas'),
(50, 7212, '0033951677', 'Intan Amelia Haryanto', 'SIDOARJO', '2003-02-16', 'IPA', 'Lunas'),
(51, 7220, '0028211428', 'Jasmine Qodiah Roseva', 'SIDOARJO', '2002-12-28', 'IPA', 'Lunas'),
(52, 7223, '0022580661', 'Keisya Louivida Putri Arief', 'SURABAYA', '2002-10-29', 'IPA', 'Lunas'),
(53, 7235, '0025665761', 'Mochammad Hanif Al Mutaqin', 'Sidoarjo', '2002-04-20', 'IPA', 'Lunas'),
(54, 7242, '0031797988', 'Maulana Muthahhari Syalihbara', 'CIMAHI', '2003-05-07', 'IPA', 'Lunas'),
(55, 7269, '0034446869', 'Muhammad Rizky Qoirul Huda', 'SIDOARJO', '2003-04-01', 'IPA', 'Lunas'),
(56, 7271, '0020630455', 'Muhammad Zidan Pratama', 'SIDOARJO', '2002-06-12', 'IPA', 'Lunas'),
(57, 7281, '0033935849', 'Nata Adi Putra Afandi', 'SIDOARJO', '2003-03-06', 'IPA', 'Lunas'),
(58, 7288, '0034434217', 'Ninis Choirun Nisa\'', 'SIDOARJO', '2003-02-04', 'IPA', 'Lunas'),
(59, 7296, '0027514330', 'Nur Faiza Mas\'udiyah', 'Sidoarjo', '2002-08-13', 'IPA', 'Lunas'),
(60, 7303, '0031797970', 'Putri Diana Lestari', 'Gresik', '2003-03-29', 'IPA', 'Lunas'),
(61, 7323, '0027353311', 'Reza Tri Anggara', 'SIDOARJO', '2002-10-23', 'IPA', 'Lunas'),
(62, 7333, '0030459819', 'Rizka Widya Maharani', 'PASURUAN', '2003-09-03', 'IPA', 'Lunas'),
(63, 7334, '0034777754', 'Rizky Alifianz Farrel Rafiandy', 'SURABAYA', '2003-09-10', 'IPA', 'Lunas'),
(64, 7337, '0033935847', 'Ryu Rakha Rengga Amrullah', 'Surabaya', '2003-02-27', 'IPA', 'Lunas'),
(65, 7338, '0026703385', 'Sabrina Noviannisa', 'SIDOARJO', '2002-11-21', 'IPA', 'Lunas'),
(66, 7345, '0020423885', 'Satria Fernanda Andrianto', 'SURABAYA', '2002-10-21', 'IPA', 'Lunas'),
(67, 7351, '0034433200', 'Shabrina Atsmara Wafiqi', 'Sidoarjo', '2003-04-15', 'IPA', 'Lunas'),
(68, 7353, '0036633693', 'Silvia Marga Reta', 'SIDOARJO', '2003-01-16', 'IPA', 'Lunas'),
(69, 7361, '0022531721', 'Tegar Faridz Putra Irdiansyah', 'Gresik', '2002-06-02', 'IPA', 'Lunas'),
(70, 7371, '0033935864', 'Yudhistira Satria Dewa', 'SURABAYA', '2003-04-04', 'IPA', 'Lunas'),
(71, 7377, '0028210561', 'Zulfian Aryansyah Yahya', 'SIDOARJO', '2002-10-01', 'IPA', 'Lunas'),
(72, 7098, '0033639359', 'Achmad Raihan Gymnastiar', 'SIDOARJO', '2003-05-18', 'IPA', 'Lunas'),
(73, 7099, '0034438101', 'Achmad Raykhansyah Arifin', 'SURABAYA', '2003-04-10', 'IPA', 'Lunas'),
(74, 7115, '0038422144', 'Ailsa Agripina', 'KEDIRI', '2003-06-16', 'IPA', 'Lunas'),
(75, 7117, '0038762670', 'Ainun Rochmansyah Firdaus', 'SIDOARJO', '2003-07-08', 'IPA', 'Lunas'),
(76, 7140, '0034791514', 'Annisa Arrayanul Jannah', 'SIDOARJO', '2003-03-04', 'IPA', 'Lunas'),
(77, 7156, '0039148755', 'Aurelia Naina Salsabil Maritza', 'SURABAYA', '2003-11-06', 'IPA', 'Lunas'),
(78, 7160, '0033915372', 'Berlin Diva Chandabirawa', 'PONOROGO', '2003-04-12', 'IPA', 'Lunas'),
(79, 7161, '0034710011', 'Bogi Fajar Archita ', 'SIDOARJO', '2003-03-26', 'IPA', 'Lunas'),
(80, 7164, '0035284776', 'Dava Surya Putra Irfandi', 'Surabaya', '2003-02-03', 'IPA', 'Lunas'),
(81, 7171, '0031797954', 'Dewa Putra Prassuwito', 'SURABAYA', '2003-01-25', 'IPA', 'Lunas'),
(82, 7180, '0033935891', 'Dwija Jati Nugroho', 'SIDOARJO', '2003-06-25', 'IPA', 'Lunas'),
(83, 7195, '0033811791', 'Firzha Fathur Kurniawan', 'SIDOARJO', '2003-05-30', 'IPA', 'Lunas'),
(84, 7197, '0020169498', 'Fitta Amanda Pratama Putri', 'SURABAYA', '2002-08-19', 'IPA', 'Lunas'),
(85, 7203, '0034435396', 'Hani Alviana Putri', 'Sidoarjo', '2003-06-16', 'IPA', 'Lunas'),
(86, 7228, '0031890270', 'Kinrara Yuri Trovicana', 'LUMAJANG', '2003-06-27', 'IPA', 'Lunas'),
(87, 7229, '0034438124', 'Kresna Arya Danu Kangsadewa', 'SURABAYA', '2003-12-19', 'IPA', 'Lunas'),
(88, 7236, '0034431593', 'M Ivan Wahyu Pratama', 'SIDOARJO', '2003-06-06', 'IPA', 'Lunas'),
(89, 7241, '0033659126', 'Marzha Agita Violia', 'SIDOARJO', '2003-03-03', 'IPA', 'Lunas'),
(90, 7252, '0025342216', 'Mohammad Asbandi Putra', 'SURABAYA', '2002-08-31', 'IPA', 'Lunas'),
(91, 7255, '0021817535', 'Mufidatus Sholichah', 'Jombang', '2002-11-01', 'IPA', 'Lunas'),
(92, 7261, '0031818069', 'Muhammad Gilbran Alfarizi', 'SURABAYA', '2003-02-13', 'IPA', 'Lunas'),
(93, 7264, '0027525647', 'M. Ilham Ramadhani', 'SIDOARJO', '2002-11-29', 'IPA', 'Lunas'),
(94, 7273, '0038947415', 'Nabella Shafa Prameswari', 'Surabaya', '2003-07-19', 'IPA', 'Lunas'),
(95, 7282, '0027814780', 'Nathania Aryani Paramesti Anindya', 'Sidoarjo', '2002-12-11', 'IPA', 'Lunas'),
(96, 7287, '0036606010', 'Neza Tri Aprilianti', 'SIDOARJO', '2003-04-25', 'IPA', 'Lunas'),
(97, 7305, '0038271988', 'Putri Tria Amanda', 'SURABAYA', '2003-05-07', 'IPA', 'Lunas'),
(98, 7315, '0027834670', 'Ramzi Hizami', 'SIDOARJO', '2002-12-19', 'IPA', 'Lunas'),
(99, 7322, '0027815191', 'Reni Dwi Oktavia', 'Surabaya', '2002-10-13', 'IPA', 'Lunas'),
(100, 7324, '0033092425', 'Rheanindra Safahra K. ', 'MALANG', '2003-05-17', 'IPA', 'Lunas'),
(101, 7335, '0031106854', 'Rizky Maulid Ardiansyah', 'SURABAYA', '2003-05-09', 'IPA', 'Lunas'),
(102, 7348, '0039636668', 'Sayyidah Fathimatus Tsania', 'SIDOARJO', '2003-12-25', 'IPA', 'Lunas'),
(103, 7366, '0033952514', 'Vicky Aurellia Nabilah', 'Surabaya', '2003-04-19', 'IPA', 'Lunas'),
(104, 7368, '0025003023', 'Wardah Aufa Rofiqi', 'Sidoarjo', '2002-10-17', 'IPA', 'Lunas'),
(105, 7373, '0032240105', 'Zahra Zahira Salsabila', 'SURABAYA', '2003-09-16', 'IPA', 'Lunas'),
(106, 7380, '0034456074', 'Marshanda Alifia', 'SIDOARJO', '2003-08-30', 'IPA', 'Lunas'),
(107, 7104, '0031866502', 'Adinda Nurul Adhmu Sukriyah', 'SIDOARJO', '2003-04-25', 'IPA', 'Lunas'),
(108, 7116, '0027830011', 'Ailsa Berliana Astono', 'SIDOARJO', '2002-05-06', 'IPA', 'Lunas'),
(109, 7130, '0034023241', 'Almath Faiez Kusuma', 'SURABAYA', '2003-05-19', 'IPA', 'Lunas'),
(110, 7135, '0027814322', 'Anandita Putri Novianti', 'Sidoarjo', '2002-11-10', 'IPA', 'Lunas'),
(111, 7136, '0033092406', 'Anandya Endiana', 'SURABAYA', '2003-04-05', 'IPA', 'Lunas'),
(112, 7157, '0048224325', 'Aurellia Putri Fathiqa', 'MAKASAR', '2004-03-30', 'IPA', 'Lunas'),
(113, 7159, '0027812511', 'Azhar Rofianda Ramadhana', 'SURABAYA', '2002-11-27', 'IPA', 'Lunas'),
(114, 7163, '0034433552', 'Citrawati', 'Mojokerto', '2003-08-14', 'IPA', 'Lunas'),
(115, 7167, '0027197568', 'Defta Rohmatul Fitria', 'Gresik', '2002-12-06', 'IPA', 'Lunas'),
(116, 7189, '0021649606', 'Faisal Bhuana Putra', 'SURABAYA', '2002-12-21', 'IPA', 'Lunas'),
(117, 7210, '0022309783', 'Ikmal Diva Talenta', 'SIDOARJO', '2002-12-11', 'IPA', 'Lunas'),
(118, 7225, '0020610833', 'Kevin Safrisal Maulana', 'SIDOARJO', '2002-10-06', 'IPA', 'Lunas'),
(119, 7233, '0036001250', 'Lintang Lailatul Isti`anah', 'Sidoarjo', '2003-06-09', 'IPA', 'Lunas'),
(120, 7237, '0027813148', 'Muhammad Rafli Ramadhan', 'sidoarjo', '2002-12-06', 'IPA', 'Lunas'),
(121, 7240, '0027359917', 'Mahya Indah Akmala', 'Sidoarjo', '2002-12-26', 'IPA', 'Lunas'),
(122, 7251, '0031647851', 'Mochamad Sochib', 'SIDOARJO', '2003-02-13', 'IPA', 'Lunas'),
(123, 7256, '0027397552', 'Muhammad Aditya Trio Jatmiko', 'Sidoarjo', '2002-12-13', 'IPA', 'Lunas'),
(124, 7259, '0027834656', 'Muhammad Fakhrizal Pratama', 'SURABAYA', '2002-10-06', 'IPA', 'Lunas'),
(125, 7260, '0031526582', 'Muhammad Farros Rifnu Putra', 'SIDOARJO', '2003-08-15', 'IPA', 'Lunas'),
(126, 7267, '0028121478', 'Muhammad Nuruddin Andriansyah', 'SIDOARJO', '2002-07-31', 'IPA', 'Lunas'),
(127, 7284, '0026857130', 'Naufal Bagus Primadana', 'Sidoarjo', '2002-12-17', 'IPA', 'Lunas'),
(128, 7295, '0027810747', 'Nur Fadilah', 'SIDOARJO', '2002-10-08', 'IPA', 'Lunas'),
(129, 7304, '0044875083', 'Putri Firanda Sari', 'Sidoarjo', '2004-02-24', 'IPA', 'Lunas'),
(130, 7331, '0034056312', 'Rizaldi Firmansyah', 'Malang', '2003-01-04', 'IPA', 'Lunas'),
(131, 7332, '0027834975', 'Rizka Dwi Salsabila', 'SIDOARJO', '2002-05-27', 'IPA', 'Lunas'),
(132, 7340, '0034455866', 'Saharani Gita Safitri', 'SIDOARJO', '2003-02-08', 'IPA', 'Lunas'),
(133, 7344, '0027319576', 'Salsabila Putri Ramadhani', 'SURABAYA', '2002-12-02', 'IPA', 'Lunas'),
(134, 7347, '0025290888', 'Satriyo Ibrahim', 'SURABAYA', '2002-08-06', 'IPA', 'Lunas'),
(135, 7352, '0034433510', 'Shefira Widya Armandira', 'Sidoarjo', '2003-03-19', 'IPA', 'Lunas'),
(136, 7357, '0032476860', 'Syavira Audy Arilia', 'Sidoarjo', '2003-01-15', 'IPA', 'Lunas'),
(137, 7362, '0032935969', 'Thalita Naifahanti Ralas Putri', 'SIDOARJO', '2003-09-03', 'IPA', 'Lunas'),
(138, 7365, '0034438118', 'Umar Farouk Amrouzy', 'JAKARTA', '2003-07-03', 'IPA', 'Lunas'),
(139, 7369, '0024869201', 'Widya Sulistyo Ningrum', 'SIDOARJO', '2002-11-26', 'IPA', 'Lunas'),
(140, 7375, '0033936889', 'Zanuar Walid Akbar', 'Sidoarjo', '2003-01-16', 'IPA', 'Lunas'),
(141, 7390, '0033092461', 'Nurfauziah Widya Ningrum', 'TUBAN', '2003-08-07', 'IPA', 'Lunas'),
(142, 7690, '0020630039', 'Ari Firmansyah', 'Sidoarjo', '2002-02-10', 'IPA', 'Lunas'),
(143, 7103, '0031810896', 'Adibah Dewi Satriani', 'SURABAYA', '2003-10-16', 'IPA', 'Lunas'),
(144, 7107, '0033954548', 'Aditya Sahroni', 'SURABAYA', '2003-10-08', 'IPA', 'Lunas'),
(145, 7109, '0034436437', 'Afriani Eliana Wibowo', 'Sidoarjo', '2003-04-19', 'IPA', 'Lunas'),
(146, 7120, '0031039238', 'Aisyah Khoirunnisa', 'SURABAYA', '2003-04-04', 'IPA', 'Lunas'),
(147, 7122, '0027834264', 'Aisyah Wulaningtyas', 'SIDOARJO', '2002-10-16', 'IPA', 'Lunas'),
(148, 7128, '0025720195', 'Alif Defianto', 'JOMBANG', '2002-12-10', 'IPA', 'Lunas'),
(149, 7129, '0031057506', 'Alifah Hana Salsabila', 'Malang', '2003-03-25', 'IPA', 'Lunas'),
(150, 7141, '0027835452', 'Annisa Rahmadini', 'Surabaya', '2002-11-30', 'IPA', 'Lunas'),
(151, 7143, '0034434236', 'Annisa`ul Baroroh', 'SIDOARJO', '2003-06-07', 'IPA', 'Lunas'),
(152, 7172, '0033092407', 'Dhiya`ulhaq Ahmad Ramsi', 'Surabaya', '2003-04-07', 'IPA', 'Lunas'),
(153, 7176, '0034455908', 'Dinarita Indah Nur Amalia', 'SIDOARJO', '2003-06-07', 'IPA', 'Lunas'),
(154, 7182, '0028178615', 'Enha Rinakit Ayuningtyas', 'SURABAYA', '2002-10-26', 'IPA', 'Lunas'),
(155, 7187, '0027943321', 'Fadel Muhammad Sulistiono', 'SIDOARJO', '2002-10-15', 'IPA', 'Lunas'),
(156, 7188, '0033954524', 'Fadjar Satria Dwi Putra', 'SIDOARJO', '2003-02-06', 'IPA', 'Lunas'),
(157, 7191, '0034872348', 'Farah Zahirah', 'SIDOARJO', '2003-08-05', 'IPA', 'Lunas'),
(158, 7204, '0037354857', 'Hanif Bahy Hasyid', 'SIDOARJO', '2003-11-19', 'IPA', 'Lunas'),
(159, 7211, '0032797994', 'Ilham Rizqullah', 'Surabaya', '2003-04-28', 'IPA', 'Lunas'),
(160, 7213, '0027797688', 'Intan Aurellia Arsa', 'SIDOARJO', '2002-11-21', 'IPA', 'Lunas'),
(161, 7230, '0034456658', 'Krisna Fatichal Septriandra', 'SURABAYA', '2003-09-01', 'IPA', 'Lunas'),
(162, 7253, '0039397415', 'Mohammad Dimas Bachrul Ulum', 'SIDOARJO', '2003-04-25', 'IPA', 'Lunas'),
(163, 7266, '0027058147', 'Muhammad Naufal Sinai Harjana', 'TULUNGAGUNG', '2002-09-25', 'IPA', 'Lunas'),
(164, 7275, '0035908416', 'Nabila Siyun', 'Surabaya', '2003-06-18', 'IPA', 'Lunas'),
(165, 7277, '0034339986', 'Nabillah Putri Harsita', 'SURABAYA', '2003-06-01', 'IPA', 'Lunas'),
(166, 7278, '0034455899', 'Nadia Fermanda Maulida Efendi', 'Sidoarjo', '2003-05-17', 'IPA', 'Lunas'),
(167, 7285, '0032689233', 'Naufalariq Isham Mushbah', 'Surabaya', '2003-05-10', 'IPA', 'Lunas'),
(168, 7306, '0027331317', 'R Bebi Ferdynand R', 'Surabaya', '2003-11-23', 'IPA', 'Lunas'),
(169, 7311, '0033799582', 'Rafi Al Zuhdi', 'SURABAYA', '2003-05-10', 'IPA', 'Lunas'),
(170, 7316, '0039572820', 'Ratih Islami', 'Sidoarjo', '2003-01-13', 'IPA', 'Lunas'),
(171, 7318, '0034056322', 'Ratu Bunga Prawesti Arie Salim', 'LUMAJANG', '2003-01-31', 'IPA', 'Lunas'),
(172, 7329, '0034431338', 'Riska Andriana Putri', 'SIDOARJO', '2003-03-21', 'IPA', 'Lunas'),
(173, 7341, '0027835453', 'Salma Farah Syifa Zayyanna', 'Kediri', '2002-12-10', 'IPA', 'Lunas'),
(174, 7364, '0030816295', 'Trizqi Putri Damayanti', 'Lahat', '2003-08-30', 'IPA', 'Lunas'),
(175, 7379, '0027816242', 'Abdullah Adil Bawazir', 'Bondowoso', '2002-09-27', 'IPA', 'Lunas'),
(176, 7384, '0034435380', 'Muhammad Hussein ', 'SURABAYA', '2003-04-24', 'IPA', 'Lunas'),
(177, 7392, '0035473063', 'Putri Rahma Aulia ', 'Bojonegoro', '2003-06-19', 'IPA', 'Lunas'),
(178, 7100, '0032728543', 'Adelia Chika Falensia', 'Sidoarjo', '2003-08-29', 'IPS', 'Lunas'),
(179, 7105, '0027814223', 'Aditya Darma Ramadhan', 'sidoarjo', '2002-11-09', 'IPS', 'Lunas'),
(180, 7114, '0027338835', 'Ahmad Surya Ade Putra', 'SIDOARJO', '2002-09-09', 'IPS', 'Lunas'),
(181, 7118, '0033114958', 'Aisyah Isnaini', 'SURABAYA', '2003-01-21', 'IPS', 'Lunas'),
(182, 7126, '0038067644', 'Ali Akbar Ilyasov', 'SIDOARJO', '2003-10-24', 'IPS', 'Lunas'),
(183, 7132, '0031797803', 'Amelia Ramadhini', 'SIDOARJO', '2003-10-29', 'IPS', 'Lunas'),
(184, 7137, '0034639605', 'Andini Widya Setyaningrum', 'Tanjungpinang', '2003-01-12', 'IPS', 'Lunas'),
(185, 7144, '0031766610', 'Anugrah Ihza Mahendra', 'SURABAYA', '2003-08-23', 'IPS', 'Lunas'),
(186, 7174, '0034339988', 'Dimas Adi Saputra', 'Sidoarjo', '2003-07-24', 'IPS', 'Lunas'),
(187, 7177, '0031797202', 'Dinda Fadiyah', 'SURABAYA', '2003-08-07', 'IPS', 'Lunas'),
(188, 7201, '0033991934', 'Gilang Asmanu Rah Huda', 'SIDOARJO', '2003-05-16', 'IPS', 'Lunas'),
(189, 7202, '0027026657', 'Handi Satria Wira Tantra', 'SIDOARJO', '2002-05-12', 'IPS', 'Lunas'),
(190, 7214, '0033498992', 'Irma Rachmadianti', 'GRESIK', '2003-03-09', 'IPS', 'Lunas'),
(191, 7217, '0027830086', 'Izzudin Al Qosam', 'SIDOARJO', '2002-12-02', 'IPS', 'Lunas'),
(192, 7221, '0034056337', 'Jihan Afifah Nabilah', 'Surabaya', '2003-03-21', 'IPS', 'Lunas'),
(193, 7234, '0027834780', 'M Aflah Zain', 'SIDOARJO', '2002-12-14', 'IPS', 'Lunas'),
(194, 7243, '0027710639', 'Maulida Nisa`ul Fitri', 'SIDOARJO', '2002-07-21', 'IPS', 'Lunas'),
(195, 7244, '0033379305', 'Mikail Dandy Ruldi Ibrahim', 'Surabaya', '2003-04-14', 'IPS', 'Lunas'),
(196, 7247, '0035793921', 'Moch. Arsyi Firmansyah', 'Surabaya', '2003-02-09', 'IPS', 'Lunas'),
(197, 7250, '0036442345', 'Mochammad Rossy Dukhan Muhith', 'Surabaya', '2003-04-27', 'IPS', 'Lunas'),
(198, 7254, '0031811438', 'Mohammad Firli ', 'SIDOARJO', '2003-03-31', 'IPS', 'Lunas'),
(199, 7262, '0034455936', 'Muhammad Husni Rafif', 'SURABAYA', '2003-09-03', 'IPS', 'Lunas'),
(200, 7270, '0039201426', 'Muhammad Thoriq Al Akbar', 'SIDOARJO', '2003-01-10', 'IPS', 'Lunas'),
(201, 7272, '0031998952', 'Munifatul Ikfina', 'Surabaya', '2003-02-24', 'IPS', 'Lunas'),
(202, 7289, '0023109359', 'Nisha Putri Mardiana', 'SIDOARJO', '2002-06-24', 'IPS', 'Lunas'),
(203, 7293, '0020630441', 'Nur Ainy Alsyah', 'Sidoarjo', '2002-03-01', 'IPS', 'Lunas'),
(204, 7297, '0034433527', 'Nyssa Apta Zakiah', 'Sidoarjo', '2003-05-10', 'IPS', 'Lunas'),
(205, 7300, '0034138916', 'Peppy Nur Ansondi', 'SIDOARJO', '2003-06-30', 'IPS', 'Lunas'),
(206, 7317, '0034128964', 'Ratih Wahyu Pratitis', 'Sidoarjo', '2003-06-04', 'IPS', 'Lunas'),
(207, 7320, '0021580893', 'Reffina Qamarinda', 'SIDOARJO', '2002-10-04', 'IPS', 'Lunas'),
(208, 7325, '0034287520', 'Rif`\'aida Mirza Aurora', 'SIDOARJO', '2003-04-01', 'IPS', 'Lunas'),
(209, 7355, '0034456050', 'Sjaharani Permatasari Waluyo', 'SIDOARJO', '2003-05-01', 'IPS', 'Lunas'),
(210, 7372, '0033092433', 'Zabrina Dwitta Permatasari', 'SURABAYA', '2003-06-01', 'IPS', 'Lunas'),
(211, 7376, '0038585536', 'Zoga Wisnu Dinata', 'SIDOARJO', '2003-06-07', 'IPS', 'Lunas'),
(212, 7386, '0038387690', 'Cerise Queenara Kimberly', 'SIDOARJO', '2003-08-29', 'IPS', 'Lunas'),
(213, 7139, '0033105042', 'Anisya Syafitri Indah Wardani', 'Gresik', '2003-04-12', 'IPS', 'Lunas'),
(214, 7146, '0031673302', 'Apta Yusuf Adibrata', 'Surabaya', '2003-06-24', 'IPS', 'Lunas'),
(215, 7148, '0027812827', 'Arlinda Oktaviani Putri', 'Sidoarjo', '2002-10-23', 'IPS', 'Lunas'),
(216, 7162, '0038923082', 'Cheryl Iranda Mayrhida Rahmad', 'SURABAYA', '2003-06-24', 'IPS', 'Lunas'),
(217, 7166, '0027835442', 'Davina Oktiara Wardana', 'SIDOARJO', '2002-10-11', 'IPS', 'Lunas'),
(218, 7170, '0034456056', 'Devita Permata Angel', 'SIDOARJO', '2003-05-26', 'IPS', 'Lunas'),
(219, 7179, '0038235529', 'Diva Lailis Sifa', 'SIDOARJO', '2003-04-12', 'IPS', 'Lunas'),
(220, 7181, '0033936921', 'Dyah Putri Agustin', 'Sidoarjo', '2003-08-16', 'IPS', 'Lunas'),
(221, 7183, '0034455875', 'Erwin Sulistyo Rafiudin', 'Jombang', '2003-03-13', 'IPS', 'Lunas'),
(222, 7198, '0034433222', 'Frisca Putri Amanda', 'SIDOARJO', '2003-07-13', 'IPS', 'Lunas'),
(223, 7208, '0039364417', 'Ikha Cahyani Rondhi Putri', 'GRESIK', '2003-05-29', 'IPS', 'Lunas'),
(224, 7216, '0035509048', 'Izzan Naufal Al Farisi', 'Madiun', '2003-01-13', 'IPS', 'Lunas'),
(225, 7222, '0029903276', 'Kafitzal Sabila', 'JOMBANG', '2002-12-01', 'IPS', 'Lunas'),
(226, 7226, '0031048074', 'Keyne Erryan Malva Philana', 'KEDIRI', '2003-07-22', 'IPS', 'Lunas'),
(227, 7238, '0036840182', 'Mohammad Risky Al Fazri', 'SURABAYA', '2003-05-04', 'IPS', 'Lunas'),
(228, 7239, '0084763406', 'Ma`ruf Gagat Rahina Widodo', 'SIDOARJO', '2003-02-02', 'IPS', 'Lunas'),
(229, 7245, '0025400557', 'Miqdad Hafizh Izzanuddin Najwan', 'SIDOARJO', '2002-12-17', 'IPS', 'Lunas'),
(230, 7258, '0033517418', 'Muhammad Daffa Akbar', 'Sidoarjo', '2003-07-22', 'IPS', 'Lunas'),
(231, 7268, '0026557783', 'Muchammad Rendy Saputra', 'Sidoarjo', '2002-09-10', 'IPS', 'Lunas'),
(232, 7274, '0034455750', 'Nabil Faiz Wikendra', 'SIDOARJO', '2003-08-12', 'IPS', 'Lunas'),
(233, 7280, '0024646926', 'Nafilah Nur Janah', 'SIDOARJO', '2002-10-08', 'IPS', 'Lunas'),
(234, 7302, '0033454795', 'Putri Alia Yasmin', 'SURABAYA', '2003-06-30', 'IPS', 'Lunas'),
(235, 7307, '0020189280', 'R.P Farhan Djamal S', 'Surabaya', '2002-12-08', 'IPS', 'Lunas'),
(236, 7308, '0033935866', 'Rachel Nella Aprillia', 'Sidoarjo', '2003-04-11', 'IPS', 'Lunas'),
(237, 7309, '0035425589', 'Radela Daffa Septarini', 'BEKASI', '2003-09-09', 'IPS', 'Lunas'),
(238, 7326, '0037716047', 'Rifky Alifiansyah', 'Sidoarjo', '2003-03-15', 'IPS', 'Lunas'),
(239, 7339, '0033999581', 'Sabrina Nurfauziah', 'SIDOARJO', '2003-04-15', 'IPS', 'Lunas'),
(240, 7342, '0034455915', 'Salman Bisri', 'SIDOARJO', '2003-06-15', 'IPS', 'Lunas'),
(241, 7346, '0035521819', 'Satria Widyan Permana', 'JAKARTA', '2003-06-24', 'IPS', 'Lunas'),
(242, 7360, '0033952502', 'Tasya Labibah Salwa', 'SURABAYA', '2003-03-07', 'IPS', 'Lunas'),
(243, 7689, '0033952525', 'Xavier Putra Indrayana', 'SURABAYA', '2003-05-05', 'IPS', 'Lunas'),
(244, 7697, '0032377332', 'Mochammad Naufal Firmansyah', 'SURABAYA', '2003-05-05', 'IPS', 'Lunas'),
(245, 7106, '0034435557', 'Aditya Hanan Asyrafi', 'Sidoarjo', '2003-07-08', 'IPS', 'Lunas'),
(246, 7110, '0027337269', 'Ageng Bagaskoro', 'SURABAYA', '2002-12-17', 'IPS', 'Lunas'),
(247, 7124, '0034455930', 'Akhlis Fatikhul Islam', 'JOMBANG', '2003-08-14', 'IPS', 'Lunas'),
(248, 7125, '0034433560', 'Al Bani Asad Maulana', 'Sidoarjo', '2003-10-12', 'IPS', 'Lunas'),
(249, 7134, '0032935951', 'Ananda Yusdiar Kristiadi', 'SIDOARJO', '2003-02-13', 'IPS', 'Lunas'),
(250, 7149, '0026377512', 'Arnendra Fimardani', 'NGANJUK', '2002-10-26', 'IPS', 'Lunas'),
(251, 7150, '0034456611', 'Arshy Alvansyah Wahono', 'TULUNGAGUNG', '2003-01-19', 'IPS', 'Lunas'),
(252, 7154, '0026499536', 'Aulia Siska Puspita Dewi', 'NGANJUK', '2002-12-14', 'IPS', 'Lunas'),
(253, 7165, '0031287134', 'Davin Bintang Dwi Putra', 'SIDOARJO', '2003-07-26', 'IPS', 'Lunas'),
(254, 7175, '0034455901', 'Dinar Prasetyaning Palupi', 'SURABAYA', '2003-05-20', 'IPS', 'Lunas'),
(255, 7185, '0027336816', 'Eva Septiana Dewi', 'SIDOARJO', '2002-09-28', 'IPS', 'Lunas'),
(256, 7190, '0029464707', 'Fani Sintari', 'BANDUNG', '2002-07-31', 'IPS', 'Lunas'),
(257, 7207, '0034435393', 'Heru Tri Laksono', 'Sidoarjo', '2003-06-04', 'IPS', 'Lunas'),
(258, 7215, '0034456460', 'Irza Amelia Arif', 'SIDOARJO', '2003-06-06', 'IPS', 'Lunas'),
(259, 7224, '0034435375', 'Kevin Alfiano Taruna Pratama', 'Sidoarjo', '2003-04-14', 'IPS', 'Lunas'),
(260, 7227, '0034455889', 'Khrisna Carly Reza M. ', 'Sidoarjo', '2003-04-23', 'IPS', 'Lunas'),
(261, 7231, '0015391423', 'Lawrent Eva Setyawati', 'Sidoarjo', '2001-04-25', 'IPS', 'Lunas'),
(262, 7248, '0034456615', 'Mochamad Zidane Aldizhar Syafar', 'SURABAYA', '2003-01-29', 'IPS', 'Lunas'),
(263, 7249, '0034435395', 'Mochammad Kharis Andreansyah P.', 'SIDOARJO', '2003-07-11', 'IPS', 'Lunas'),
(264, 7257, '0031662648', 'Muhammad Andre Afandi Putra', 'SIDOARJO', '2003-03-27', 'IPS', 'Lunas'),
(265, 7263, '0034434054', 'Muhammad Ikhwan Maulana', 'KEDIRI', '2003-06-08', 'IPS', 'Lunas'),
(266, 7276, '0034452004', 'Nabila Syohraya Noor S', 'SIDOARJO', '2003-04-22', 'IPS', 'Lunas'),
(267, 7286, '0023646482', 'Navita Syafa Nadila', 'SIDOARJO', '2002-02-17', 'IPS', 'Lunas'),
(268, 7290, '0026979660', 'Nita Auliya Wibowo', 'SIDOARJO', '2002-10-24', 'IPS', 'Lunas'),
(269, 7294, '0025169463', 'Nur Azizah Rahma Dinar', 'Surabaya', '2002-09-17', 'IPS', 'Lunas'),
(270, 7298, '0027755479', 'Oktavia Dwi Anggraini', 'Sidoarjo', '2002-10-29', 'IPS', 'Lunas'),
(271, 7312, '0034455868', 'Rahman Rasyid', 'Sidoarjo', '2003-02-15', 'IPS', 'Lunas'),
(272, 7314, '0033436173', 'Raka Bagus Aqillah Rizkiandy', 'SIDOARJO', '2003-02-28', 'IPS', 'Lunas'),
(273, 7321, '0034451754', 'Reni Allysa Putri Faradina', 'SIDOARJO', '2003-04-02', 'IPS', 'Lunas'),
(274, 7343, '0034456051', 'Salsabila Az Zahra', 'SIDOARJO', '2003-05-02', 'IPS', 'Lunas'),
(275, 7358, '0033935863', 'Syifaur Rahmah', 'SIDOARJO', '2003-04-03', 'IPS', 'Lunas'),
(276, 7367, '0032935959', 'Virginie Anindya Yekti', 'Sidoarjo', '2003-04-06', 'IPS', 'Lunas'),
(277, 7370, '0033513370', 'Yasmin Firdaus', 'SURABAYA', '2003-11-26', 'IPS', 'Lunas'),
(278, 7389, '0027225853', 'Octavian Rahmad', 'Kediri', '2002-10-11', 'IPS', 'Lunas'),
(279, 789456, '9348573', 'User Coba', 'Kediri', '2002-10-12', 'IPS', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(155) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `image` varchar(200) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(2) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `image`, `role_id`, `is_active`, `created_date`) VALUES
(1, 'robby@ardhacodes.com', '$2y$10$TbtFmMawN9AcEoQYITLPheiTOzTXla5JECCY8yNCdPP.0Aql..4rG', 'Robby Firmansyah Ardha', 'admin.png', 1, 1, '2021-04-11 20:42:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_pengumuman`
--
ALTER TABLE `jadwal_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_pengumuman`
--
ALTER TABLE `jadwal_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
