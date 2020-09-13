-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 12:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `fotografi`
--

CREATE TABLE `fotografi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `dimensi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotografi`
--

INSERT INTO `fotografi` (`id`, `nama`, `tema`, `tipe`, `dimensi`, `gambar`) VALUES
(1, 'Empty Null', 'objek', 'jpeg', '400x400 pixels', '1.jpeg'),
(3, 'City Scenery', 'city view', 'jpg', '400x400 pixels', '2.jpg'),
(4, 'White Laptop', 'objek', 'jpg', '400x400 pixels', '3.jpg'),
(5, 'Save Sea', 'interaksi manusia', 'jpg', '400x400 pixels', '5.jpg'),
(6, 'Blue Sky and Grey Cloud', 'langit', 'jpg', '400x400 pixels', '6.jpg'),
(7, 'Sacred Violet', 'objek', 'jpg', '400x400 pixels', '7.jpg'),
(8, 'Such a warmth chat', 'interaksi manusia', 'jpg', '400x400 pixels', '8.jpg'),
(9, 'Moon and Plane', 'langit', 'jpg', '400x400 pixels', '9.jpg'),
(10, 'Interesting Apartment', 'arsitektur', 'jpg', '400x400 pixels', '10.jpg'),
(15, 'Sky and Tree', 'pemandangan alam', 'jpg', '400x400 pixels', '4.jpg'),
(16, 'Filter Forge', 'objek elemen', 'jpg', '400x400 pixels', '5f51ede4888b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'luis', '$2y$10$NozFd4Dt9b9wCYggOqU6Wuge6YQSUtsWCWzc14fF9hWpVyWrKbpOK'),
(2, 'lele', '$2y$10$UxsLoE3tuoJfo6zv89RuV.vPu6A/WXi8t7qv9/jDRVpxv3GGpgNF2'),
(3, 'lele123', '$2y$10$OdqgypVu5tduaUm2rxiS1.MgerRSOhTYiLpDpT0o9evye2jRpK.Z2'),
(4, 'gege', '$2y$10$12Dh7OZ7yfLqwgR7UGF3jOOAf4tTdd4aFY0l1D3l28KQ3889nlagC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotografi`
--
ALTER TABLE `fotografi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotografi`
--
ALTER TABLE `fotografi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
