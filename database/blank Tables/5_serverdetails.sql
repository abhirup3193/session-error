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
-- Table structure for table `5_serverdetails`
--

CREATE TABLE `5_serverdetails` (
  `server_id` int(11) NOT NULL,
  `reqEnv` text NOT NULL,
  `numOfServer` int(11) NOT NULL,
  `serverRuntime` text NOT NULL,
  `serverRegion` text NOT NULL,
  `domainName` text NOT NULL,
  `dnsHost` text NOT NULL,
  `dnsHost_others` text NOT NULL,
  `storageReq` text NOT NULL,
  `fileStorage_yesno` text NOT NULL,
  `additionalVol_yesno` text NOT NULL,
  `additionalVol_num` text NOT NULL,
  `additionalVol_size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5_serverdetails`
--
ALTER TABLE `5_serverdetails`
  ADD PRIMARY KEY (`server_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `5_serverdetails`
--
ALTER TABLE `5_serverdetails`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
