-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:15 AM
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
(1, 'tes', '2021-04-26', '07:32:00', '2021-04-30', '07:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Bahasa Inggris'),
(4, 'Kimia'),
(5, 'Fisika'),
(6, 'Biologi'),
(7, 'Sosiologi'),
(8, 'Ekonomi'),
(9, 'Geografi');

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
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nomor_ujian`, `nama`, `tempat_lahir`, `tgl_lahir`) VALUES
(1, 7888, '2-18-19-20-0001', 'Ardha', 'Sidoarjo', '1999-12-16'),
(2, 7889, '2-18-19-20-0002', 'Robby', 'Surabaya', '1999-12-17'),
(3, 7890, '2-18-19-20-0003', 'Firmansyah', 'Malang', '1999-12-18'),
(4, 7891, '2-18-19-20-0004', 'Firman', 'Sidoarjo', '1999-12-19'),
(5, 7892, '2-18-19-20-0005', 'Agus', 'Surabaya', '1999-12-20'),
(6, 7893, '2-18-19-20-0006', 'Atlas', 'Malang', '1999-12-21'),
(7, 7894, '2-18-19-20-0007', 'Baret ', 'Sidoarjo', '1999-12-22'),
(8, 7895, '2-18-19-20-0008', 'Reneta', 'Surabaya', '1999-12-23'),
(9, 7896, '2-18-19-20-0009', 'Asmin', 'Malang', '1999-12-24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
