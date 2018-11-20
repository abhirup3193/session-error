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
-- Table structure for table `11_security`
--

CREATE TABLE `11_security` (
  `security_id` int(10) NOT NULL,
  `yesnoConfidentiality` text NOT NULL,
  `antivirusName` text NOT NULL,
  `antivirusSpecification` text NOT NULL,
  `antivirusLicensing` text NOT NULL,
  `sslCertificate` text NOT NULL,
  `typeOfSSL` text NOT NULL,
  `multiSan` text NOT NULL,
  `name1` text NOT NULL,
  `user_id1` text NOT NULL,
  `name2` text NOT NULL,
  `user_id2` text NOT NULL,
  `name3` text NOT NULL,
  `user_id3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `11_security`
--
ALTER TABLE `11_security`
  ADD PRIMARY KEY (`security_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `11_security`
--
ALTER TABLE `11_security`
  MODIFY `security_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
