-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 11:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `6_network`
--

CREATE TABLE `6_network` (
  `network_id` int(10) NOT NULL,
  `yesno` text NOT NULL,
  `ipv6` varbinary(200) NOT NULL,
  `yesno1` text NOT NULL,
  `name` text NOT NULL,
  `ipaddress` varbinary(200) NOT NULL,
  `port` int(50) NOT NULL,
  `protocol` varchar(50) NOT NULL,
  `yesno2` text NOT NULL,
  `tunnelProtocol` text NOT NULL,
  `publicip` text NOT NULL,
  `othernd` text NOT NULL,
  `cdnProvider` text NOT NULL,
  `cdnProviderOthers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6_network`
--
ALTER TABLE `6_network`
  ADD PRIMARY KEY (`network_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6_network`
--
ALTER TABLE `6_network`
  MODIFY `network_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
