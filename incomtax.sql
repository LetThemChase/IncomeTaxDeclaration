-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 04:44 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incomtax`
--

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(11) NOT NULL,
  `EMPCDkey` varchar(100) NOT NULL,
  `hrent` varchar(100) NOT NULL,
  `nsr` varchar(100) NOT NULL,
  `ppf` varchar(100) NOT NULL,
  `lic` varchar(100) NOT NULL,
  `mf` varchar(100) NOT NULL,
  `jfee` varchar(100) NOT NULL,
  `nps` varchar(100) NOT NULL,
  `prin` varchar(100) NOT NULL,
  `in1` varchar(100) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `in2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `EMPCDkey`, `hrent`, `nsr`, `ppf`, `lic`, `mf`, `jfee`, `nps`, `prin`, `in1`, `pr`, `in2`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, '1', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22'),
(3, '2', '33', '326', '3', '2', '32', '32', '133', '56', '656', '46', '64');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EMPCDkey` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `PanNo` int(11) NOT NULL,
  `State` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMPCDkey`, `Name`, `DOB`, `PanNo`, `State`, `password`) VALUES
('1', 'Mayank', '1996-01-01', 1, 'UP', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
('2', 'Keshav', '1996-01-01', 2, 'UP', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMPCDkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
