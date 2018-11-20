-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 11:14 AM
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
-- Table structure for table `8_databaserequirement`
--

CREATE TABLE `8_databaserequirement` (
  `db_id` int(11) NOT NULL,
  `typeOfDb` text NOT NULL,
  `others_typeDB` text NOT NULL,
  `reqServices` text NOT NULL,
  `others_reqService` text NOT NULL,
  `zoning` text NOT NULL,
  `sizeOfDb` int(11) NOT NULL,
  `natureOfDb` varchar(200) NOT NULL,
  `iops` varchar(200) NOT NULL,
  `failoverReporting_yesno` text NOT NULL,
  `replicationTool` varchar(200) NOT NULL,
  `encrypted_yesno` text NOT NULL,
  `encrypted_details` text NOT NULL,
  `snapshot` text NOT NULL,
  `timeInterval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `8_databaserequirement`
--
ALTER TABLE `8_databaserequirement`
  ADD PRIMARY KEY (`db_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `8_databaserequirement`
--
ALTER TABLE `8_databaserequirement`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
