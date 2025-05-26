-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 04:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `23241029_zenal_pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `23241029_zenal_pelanggan`
--

CREATE TABLE `23241029_zenal_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nik_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `23241029_zenal_pelanggan`
--

INSERT INTO `23241029_zenal_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telepon`, `jenis_kelamin`, `email`, `nik_ktp`) VALUES
(1, 'zenal', 'blanakann', '0812', 'pria', 'ahmadzenalalimxirpl@gmail.com', '322143424'),
(3, 'Kia', 'Sukawera', '612711', 'wanita', 'kia@gmail.com', '322131'),
(4, 'zenal', 'blanakan', '612711', 'pria', 'zenalass@gmail.com', '322131'),
(6, 'dandi', 'muara', '0812498723', 'pria', 'dandi@gmail.com', '1234351234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `23241029_zenal_pelanggan`
--
ALTER TABLE `23241029_zenal_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `23241029_zenal_pelanggan`
--
ALTER TABLE `23241029_zenal_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
