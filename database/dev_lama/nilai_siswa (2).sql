-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:58 AM
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
-- Database: `silusi`
--

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
  `status_lulus` varchar(100) NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `siswa_id`, `mapel_id`, `nilai_rapot`, `nusp`, `nsp`, `avg`, `status_lulus`, `status_pembayaran`) VALUES
(1, 1, 1, 90, 85, 85, 85, 'Tidak Lulus', 'Belum Lunas'),
(2, 1, 2, 85, 87, 90, 91, 'Lulus', 'Lunas'),
(3, 1, 3, 85, 87, 90, 91, 'Lulus', 'Lunas'),
(4, 1, 4, 85, 87, 90, 91, 'Lulus', 'Lunas'),
(5, 1, 5, 85, 87, 90, 91, 'Lulus', 'Lunas'),
(6, 2, 1, 85, 87, 90, 91, 'Lulus', 'Belum Lunas'),
(7, 2, 2, 85, 87, 90, 91, 'Lulus', 'Belum Lunas'),
(8, 2, 3, 85, 87, 90, 91, 'Lulus', 'Belum Lunas'),
(9, 2, 4, 85, 87, 90, 91, 'Lulus', 'Belum Lunas'),
(10, 2, 5, 85, 87, 90, 91, 'Lulus', 'Belum Lunas'),
(11, 9, 9, 85, 85, 85, 85, 'Lulus', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
