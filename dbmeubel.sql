-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 02:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmeubel`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tanggalcreate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `tanggalcreate`) VALUES
(1, '', '12345', '12345', '2024-01-07 11:54:41'),
(2, 'arga', 'arga123', '12345', '2024-01-07 12:19:08'),
(3, 'nadi', 'nadi123', '12345', '2024-01-07 15:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `tableorder`
--

CREATE TABLE `tableorder` (
  `idorder` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tableorder`
--

INSERT INTO `tableorder` (`idorder`, `nama`, `nomorhp`, `email`, `pembayaran`, `total`, `alamat`) VALUES
(1, 'kursi', '881273', 'arga@gmail.com', 'dana', '2000000000', 'sokdoasdkoaskdoakd'),
(2, 'meja', '0812398', 'ttt@gmail.com', 'shopepay', '3000000', 'pemalang'),
(3, 'kursi', '088272612', 'nadi@gmail.com', 'dana', '70000000', 'tegal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableorder`
--
ALTER TABLE `tableorder`
  ADD PRIMARY KEY (`idorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tableorder`
--
ALTER TABLE `tableorder`
  MODIFY `idorder` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
