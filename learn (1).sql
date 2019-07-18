-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 07:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `jerry`
--

CREATE TABLE `jerry` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jerry`
--

INSERT INTO `jerry` (`id`, `fname`, `lname`, `email`, `phone`) VALUES
(54, 'Ahmad', 'khan', 'ahmad21.ar35@gmail.com', '3154986110'),
(55, 'mustafa', '', '', ''),
(56, 'ali', '', '', ''),
(57, 'Ahmad', 'Raza', 'ahmad21.ar35@gmail.com', '3154986110'),
(58, 'Ahmad', 'Raza', 'ahmad21.ar35@gmail.com', '3154986110'),
(59, 'Ahmad', 'Raza', 'ahmad21.ar35@gmail.com', '3154986110'),
(60, 'yo', '', '', ''),
(61, 'Ahmad', 'Raza', 'ahmad21.ar35@gmail.com', '3154986110'),
(62, 'usmannn', 'Raza', 'ahmad21.ar35@gmail.com', '3154986110'),
(64, 'wow', 'wow', 'ahmad21.ar35@gmail.com', '3154986110'),
(65, 'Ahmad', 'khan', 'ahmad21.ar35@gmail.com', '3154986110');

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'usman', 'usman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jerry`
--
ALTER TABLE `jerry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jerry`
--
ALTER TABLE `jerry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `logindata`
--
ALTER TABLE `logindata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
