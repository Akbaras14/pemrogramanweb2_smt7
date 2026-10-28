-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2026 at 01:54 PM
-- Server version: 8.4.3
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calon_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int NOT NULL,
  `kode_pendf` varchar(20) NOT NULL,
  `nama_pendf` varchar(100) NOT NULL,
  `jns_kel` varchar(15) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `mat` int NOT NULL,
  `b_ingr` int NOT NULL,
  `umum` int NOT NULL,
  `rata_rata` decimal(5,2) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggal_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `kode_pendf`, `nama_pendf`, `jns_kel`, `ttl`, `asal_sekolah`, `pekerjaan_ortu`, `mat`, `b_ingr`, `umum`, `rata_rata`, `keterangan`, `tanggal_input`) VALUES
(1, 'daftar1', 'Akbar Aditiya S', 'Laki-laki', 'Bogor, 14 Desember 2000', 'SMK KARYA TEKNOLOGI JATILAWANG', 'KARYAWAN SWASTA', 90, 91, 98, 93.00, 'Lulus', '2026-10-28 12:18:25'),
(2, 'daftar2', 'Maftuha', 'Perempuan', 'Serang, 21 Mei 2000', 'SMA 2 SERANG', 'KARYAWAN SWASTA', 90, 90, 98, 92.67, 'Lulus', '2026-10-28 12:18:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
