-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 01:50 PM
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
-- Database: `db_lukisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_lukisan`
--

CREATE TABLE `table_lukisan` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `diskripsi` varchar(25) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_lukisan`
--

INSERT INTO `table_lukisan` (`id`, `judul`, `diskripsi`, `gambar`, `harga`, `date`) VALUES
(5, 'ANITA KLEIN | 40 YEARS OF', 'My pictures have always b', 'nige-leaves-for-work.jpg', 123123, '2022-11-13 10:31:45'),
(6, 'lolololol', 'loloo', 'europeana-5TK1F5VfdIk-unsplash.jpg', 123123124, '2022-11-13 10:32:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_lukisan`
--
ALTER TABLE `table_lukisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_lukisan`
--
ALTER TABLE `table_lukisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
