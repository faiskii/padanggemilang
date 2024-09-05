-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 08:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royyid`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(100) NOT NULL,
  `hargamenu` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategori` enum('Minuman','Makanan') NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`, `hargamenu`, `foto`, `kategori`, `createdat`) VALUES
(2, 'Rendang', 18000, '2024_0223_16342400.jpg', 'Makanan', '2023-08-02 18:22:13'),
(3, 'Ayam Goreng', 17000, '2024_0223_16152900.jpg', 'Makanan', '2023-08-02 18:36:54'),
(4, 'Ayam Gulai', 17000, '2024_0223_16171400.jpg', 'Makanan', '2023-08-02 18:37:42'),
(5, 'Ikan Bakar', 17000, '2024_0223_16251700.jpg', 'Makanan', '2023-08-02 18:38:05'),
(6, 'Ikan Gulai', 17000, '2024_0223_16305400.jpg', 'Makanan', '2023-08-02 18:38:27'),
(7, 'Lele Goreng', 11000, '2024_0223_16292000.jpg', 'Makanan', '2023-08-02 18:38:46'),
(8, 'Paru Goreng', 17000, '2024_0223_16334100.jpg', 'Makanan', '2023-08-02 18:39:20'),
(9, 'Daging Cincang', 22000, '2024_0223_16412300.jpg', 'Makanan', '2023-08-02 18:39:45'),
(10, 'Telur Balado', 7000, '2024_0223_16210000.jpg', 'Makanan', '2023-08-02 18:39:59'),
(11, 'Tempe & Tahu', 8000, '2024_0223_16404400.jpg', 'Makanan', '2023-08-02 18:40:27'),
(12, 'Es Teh Manis', 5000, 'esteh.jpg', 'Minuman', '2023-08-02 18:51:31'),
(13, 'Es Teh Lemon', 5000, 'lemontea.jpg', 'Minuman', '2023-08-02 18:51:49'),
(14, 'Es Kopyor', 15000, 'es kopyor.jpg', 'Minuman', '2023-08-02 18:52:45'),
(15, 'Es Palamiah', 15000, 'palamiah.jpg', 'Minuman', '2023-08-02 18:53:08'),
(16, 'Bandrek', 10000, 'bandrek.jpg', 'Minuman', '2023-08-02 18:53:29'),
(17, 'Kopi Susu', 10000, 'kopisusu.jpg', 'Minuman', '2023-08-02 18:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `idqrcode` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `qrname` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`idqrcode`, `url`, `qrname`, `createdat`) VALUES
(9, 'https://linktr.ee/angkringanroyyid', '1704902822.png', '2024-01-10 16:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `namalengkap`, `username`, `password`, `createdat`) VALUES
(4, 'Fais Rizki', 'fais', 'd6bece1065df364011059e2b5ad0d0f0', '2024-03-02 14:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`idqrcode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `idqrcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
