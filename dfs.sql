-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 07:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dfs_m`
--

CREATE TABLE `dfs_m` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(200) NOT NULL,
  `tarikh` date NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `masa` time NOT NULL,
  `penganjur` varchar(200) NOT NULL,
  `sasaran` varchar(100) NOT NULL,
  `objektif` varchar(100) NOT NULL,
  `laporan` varchar(300) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfs_m`
--

INSERT INTO `dfs_m` (`id`, `nama_program`, `tarikh`, `tempat`, `masa`, `penganjur`, `sasaran`, `objektif`, `laporan`, `gambar`, `file`) VALUES
(24, 'KV SKILLS', '2023-01-31', 'PERSADA', '20:25:00', 'MEONG', 'EMAS', 'MENANG', 'WIN WIN', 'photo_2022-10-30_20-29-33.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin-ameen', '1234', 'admin'),
(2, 'admin-nas', '0495', 'admin'),
(3, 'pic-jtm', '1234', 'pic'),
(4, 'pic-jpp', '0495', 'pic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dfs_m`
--
ALTER TABLE `dfs_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dfs_m`
--
ALTER TABLE `dfs_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
