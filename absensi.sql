-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(6) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `waktu_pengisian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `jk`, `keterangan`, `waktu_pengisian`) VALUES
(7, 'seseorang', 0, '', 'Alpa', '2023-11-16 02:37:24'),
(8, 'seseorang #2', 0, '', 'Izin', '2023-11-16 02:37:24'),
(10, 'ali', 0, '', 'Hadir', '2023-11-16 02:37:24'),
(11, 'Adham', 0, '', 'Sakit', '2023-11-16 02:37:24'),
(14, 'Adham', 0, '', 'Alpa', '2023-11-16 02:58:28'),
(15, 'Adham', 0, '', 'Sakit', '2023-11-16 02:59:03'),
(18, 'fatim', 0, '', 'Sakit', '2023-11-16 03:04:26'),
(19, 'MOHD. YUSUF', 0, '', 'Sakit', '2023-11-16 03:45:58'),
(20, 'taufik', 0, '', 'Alpa', '2023-11-17 05:04:32'),
(21, 'orgil', 0, '', 'Alpa', '2023-11-20 05:50:32'),
(23, 'Arham', 213457, 'Laki Laki', 'Alpa', '2023-11-21 05:35:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
