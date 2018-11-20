-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 12:58 PM
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
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_basic_info`
--

CREATE TABLE `1_basic_info` (
  `id` int(11) NOT NULL,
  `organization` text NOT NULL,
  `street` text NOT NULL,
  `building` varchar(50) NOT NULL,
  `landmark` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `firstName1` text NOT NULL,
  `midName1` text NOT NULL,
  `lastName1` text NOT NULL,
  `gender1` text NOT NULL,
  `email1` varchar(100) NOT NULL,
  `phonecode1` varchar(4) NOT NULL,
  `phone1` bigint(10) NOT NULL,
  `firstName2` text NOT NULL,
  `midName2` text NOT NULL,
  `lastName2` text NOT NULL,
  `gender2` text NOT NULL,
  `email2` varchar(100) NOT NULL,
  `phonecode2` varchar(4) NOT NULL,
  `phone2` bigint(10) NOT NULL,
  `req_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `projectName` text NOT NULL,
  `endUser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_basic_info`
--

INSERT INTO `1_basic_info` (`id`, `organization`, `street`, `building`, `landmark`, `city`, `zipcode`, `country`, `website`, `firstName1`, `midName1`, `lastName1`, `gender1`, `email1`, `phonecode1`, `phone1`, `firstName2`, `midName2`, `lastName2`, `gender2`, `email2`, `phonecode2`, `phone2`, `req_date`, `exp_date`, `projectName`, `endUser`) VALUES
(1, 'vit', 'VIT university, vellore. Boys Hostel. M block .room no - G28., V, Vellore', '1243456', 'Tamil Nadu', 'Vellore', '632014', 'JP', '', 'VIT', '', 'Student', 'male', 'vit@gmail', '213', 8420770801, '', '', '', '', '', '', 0, '2018-11-18', '2018-11-25', 'test', 'global');

-- --------------------------------------------------------

--
-- Table structure for table `2_strategy`
--

CREATE TABLE `2_strategy` (
  `strategy_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `migrate` text NOT NULL,
  `plans` text NOT NULL,
  `yesno` text NOT NULL,
  `virtualization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `2_strategy`
--

INSERT INTO `2_strategy` (`strategy_id`, `id`, `migrate`, `plans`, `yesno`, `virtualization`) VALUES
(2, 0, 'lkcxakslcklnslcnlsnclsndclnsldcnlsndclsndlcnsldcnlsndlcnsdlnc', 'ds;csld;cl;smdc;ms;dcm;sdmc;smdc;msd;cds', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `3_service_provider`
--

CREATE TABLE `3_service_provider` (
  `sp_id` int(10) NOT NULL,
  `yesno` text NOT NULL,
  `provider` text NOT NULL,
  `tennant_id` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `subscription_name` varchar(200) NOT NULL,
  `subscription_id` varchar(200) NOT NULL,
  `subscription_owner` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `accommodate` varchar(200) NOT NULL,
  `cs_provider` text NOT NULL,
  `others` text NOT NULL,
  `deployed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `5_1_configuration`
--

CREATE TABLE `5_1_configuration` (
  `config_id` int(11) NOT NULL,
  `reqOS` text NOT NULL,
  `osVer` text NOT NULL,
  `serverType` text NOT NULL,
  `cores` int(11) NOT NULL,
  `memory` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `numOfServer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Dumping data for table `5_serverdetails`
--

INSERT INTO `5_serverdetails` (`server_id`, `reqEnv`, `numOfServer`, `serverRuntime`, `serverRegion`, `domainName`, `dnsHost`, `dnsHost_others`, `storageReq`, `fileStorage_yesno`, `additionalVol_yesno`, `additionalVol_num`, `additionalVol_size`) VALUES
(2, 'production,devlopment,test,UAT', 2, '8', 'IN', 'abc.com', 'GoDaddy', '', 'Normal Storage', 'no', 'no', '0', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `10_paas`
--

CREATE TABLE `10_paas` (
  `paas_id` int(10) NOT NULL,
  `csprovider` text NOT NULL,
  `csp_others` text NOT NULL,
  `nameOfService` text NOT NULL,
  `others_azure` text NOT NULL,
  `others_aws` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `12_backup`
--

CREATE TABLE `12_backup` (
  `backup_id` int(10) NOT NULL,
  `yesnoSR` text NOT NULL,
  `yesnoHA` text NOT NULL,
  `yesnoDR1` text NOT NULL,
  `typeOfBackup` text NOT NULL,
  `fullBackup` text NOT NULL,
  `policyTime` text NOT NULL,
  `policySpecification` text NOT NULL,
  `yesnoBackupRetention` text NOT NULL,
  `backupRetention` text NOT NULL,
  `rto` int(10) NOT NULL,
  `rpo` int(10) NOT NULL,
  `yesnoDR2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `13_identity`
--

CREATE TABLE `13_identity` (
  `im_id` int(10) NOT NULL,
  `yesnoIdentityManagement` text NOT NULL,
  `description` text NOT NULL,
  `license` text NOT NULL,
  `procureLicense` text NOT NULL,
  `yesnoBYOL` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14_price`
--

CREATE TABLE `14_price` (
  `price_id` int(10) NOT NULL,
  `choosepricing` text NOT NULL,
  `addinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `15_support`
--

CREATE TABLE `15_support` (
  `support_id` int(10) NOT NULL,
  `supportHours` text NOT NULL,
  `timeZone` text NOT NULL,
  `sla` text NOT NULL,
  `recurrence` text NOT NULL,
  `fromDay` text NOT NULL,
  `fromTime` time(6) NOT NULL,
  `untilDate` date NOT NULL,
  `untilTime` time(6) NOT NULL,
  `addInformation` text NOT NULL,
  `patchType` text NOT NULL,
  `patchTypeOthers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `16_monitor`
--

CREATE TABLE `16_monitor` (
  `monitor_id` int(10) NOT NULL,
  `yesnoMonitoring` text NOT NULL,
  `specifyMonitor` text NOT NULL,
  `yesnoManual` text NOT NULL,
  `componentDetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `17_matrix`
--

CREATE TABLE `17_matrix` (
  `mtrx_id` int(10) NOT NULL,
  `escalation` text NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1_basic_info`
--
ALTER TABLE `1_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2_strategy`
--
ALTER TABLE `2_strategy`
  ADD PRIMARY KEY (`strategy_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `3_service_provider`
--
ALTER TABLE `3_service_provider`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `5_1_configuration`
--
ALTER TABLE `5_1_configuration`
  ADD PRIMARY KEY (`config_id`),
  ADD KEY `config_id` (`config_id`);

--
-- Indexes for table `5_serverdetails`
--
ALTER TABLE `5_serverdetails`
  ADD PRIMARY KEY (`server_id`);

--
-- Indexes for table `6_network`
--
ALTER TABLE `6_network`
  ADD PRIMARY KEY (`network_id`);

--
-- Indexes for table `8_databaserequirement`
--
ALTER TABLE `8_databaserequirement`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `10_paas`
--
ALTER TABLE `10_paas`
  ADD PRIMARY KEY (`paas_id`);

--
-- Indexes for table `11_security`
--
ALTER TABLE `11_security`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `12_backup`
--
ALTER TABLE `12_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `13_identity`
--
ALTER TABLE `13_identity`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `14_price`
--
ALTER TABLE `14_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `15_support`
--
ALTER TABLE `15_support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `16_monitor`
--
ALTER TABLE `16_monitor`
  ADD PRIMARY KEY (`monitor_id`);

--
-- Indexes for table `17_matrix`
--
ALTER TABLE `17_matrix`
  ADD PRIMARY KEY (`mtrx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1_basic_info`
--
ALTER TABLE `1_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2_strategy`
--
ALTER TABLE `2_strategy`
  MODIFY `strategy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `3_service_provider`
--
ALTER TABLE `3_service_provider`
  MODIFY `sp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `5_serverdetails`
--
ALTER TABLE `5_serverdetails`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `6_network`
--
ALTER TABLE `6_network`
  MODIFY `network_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `8_databaserequirement`
--
ALTER TABLE `8_databaserequirement`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `10_paas`
--
ALTER TABLE `10_paas`
  MODIFY `paas_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `11_security`
--
ALTER TABLE `11_security`
  MODIFY `security_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `12_backup`
--
ALTER TABLE `12_backup`
  MODIFY `backup_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `13_identity`
--
ALTER TABLE `13_identity`
  MODIFY `im_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `14_price`
--
ALTER TABLE `14_price`
  MODIFY `price_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `15_support`
--
ALTER TABLE `15_support`
  MODIFY `support_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `16_monitor`
--
ALTER TABLE `16_monitor`
  MODIFY `monitor_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `17_matrix`
--
ALTER TABLE `17_matrix`
  MODIFY `mtrx_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
