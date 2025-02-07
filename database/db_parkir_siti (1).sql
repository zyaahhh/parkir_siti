-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 03:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir_siti`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat_no` varchar(50) NOT NULL,
  `id_tempat` int DEFAULT NULL,
  `waktu_masuk` varchar(50) DEFAULT NULL,
  `tipe_kendaraan` varchar(50) DEFAULT NULL,
  `waktu_keluar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat_no`, `id_tempat`, `waktu_masuk`, `tipe_kendaraan`, `waktu_keluar`) VALUES
('D 1104 FT', 2, 'sabtu,17.00', 'motor', 'sabtu,20.00'),
('D 1222 ZH', 5, 'selasa,08.10', 'mobil', 'selasa,10.30'),
('D 1306 AQ', 4, 'kamis,07.00', 'motor', 'kamis,10.00'),
('D 2212 ZY', 1, 'senin,07.00', 'motor', 'senin,10.00'),
('D 2404 MH', 3, 'rabu,10.00', 'mobil', 'rabu,14.00');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id_tempat` int NOT NULL,
  `nama_tempat` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id_tempat`, `nama_tempat`, `harga`, `lokasi`) VALUES
(1, 'Pujasera depan', '2000', 'lanud'),
(2, 'Pujasera belakang', '2000', 'lanud'),
(3, 'Pujasera depan', '5000', 'lanud'),
(4, 'Pujasera depan', '2000', 'lanud'),
(5, 'Pujasera belakang', '5000', 'lanud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat_no`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat_parkir` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
