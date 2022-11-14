-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:22 PM
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
-- Database: `paweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `borndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `follower` int(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'ANITA KLEIN | 40 YEARS OF', 'My pictures have always b', 'nige-leaves-for-work.jpg', 123123, '2022-11-13 02:31:45'),
(6, 'lolololol', 'loloo', 'europeana-5TK1F5VfdIk-unsplash.jpg', 123123124, '2022-11-13 02:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `names` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `borndate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`names`, `gender`, `borndate`, `email`, `pass`) VALUES
('Jungwon', 'male', '2004-02-09', 'jungwon@gmail.com', '178ad426316ef952f908c510b2c25994'),
('Cici Asmawati', 'Female', '2022-11-16', 'ciciasmawati@gmail.com', 'e5ef5fe5b2c4e8160f54d6b1b10aef8f'),
('Max Ackermann', 'Male', '1992-12-22', 'max123@gmail.com', '33b1b7be9d8b1805e46913cdbb9b2080'),
('dhea', 'Female', '2022-11-01', 'dheapuspita007@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_lukisan`
--
ALTER TABLE `table_lukisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_lukisan`
--
ALTER TABLE `table_lukisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
