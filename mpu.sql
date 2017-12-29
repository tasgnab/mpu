-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 03:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chip_code`
--

CREATE TABLE `chip_code` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `description_cn` varchar(300) CHARACTER SET gbk DEFAULT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT 'N',
  `created_by` varchar(20) NOT NULL DEFAULT 'SYSTEM',
  `updated_by` varchar(20) NOT NULL DEFAULT 'SYSTEM',
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `code` varchar(100) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT 'N',
  `created_by` varchar(20) NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_successful` timestamp NULL DEFAULT NULL,
  `last_failed` timestamp NULL DEFAULT NULL,
  `failed_attemps` int(1) NOT NULL DEFAULT '0',
  `is_disabled` varchar(1) NOT NULL DEFAULT 'N',
  `is_deleted` varchar(1) NOT NULL DEFAULT 'N',
  `created_by` varchar(20) NOT NULL DEFAULT 'SYSTEM',
  `updated_by` varchar(20) NOT NULL DEFAULT 'SYSTEM',
  `created_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `last_successful`, `last_failed`, `failed_attemps`, `is_disabled`, `is_deleted`, `created_by`, `updated_by`, `created_timestamp`, `updated_timestamp`) VALUES
(0000000001, 'thopo', '4dfe52b98ed69dd92edaca4846c34ada', '2017-12-26 14:13:30', '2017-12-25 16:29:41', 0, 'N', 'N', 'SYSTEM', '', '2017-12-23 17:21:31', '2017-12-26 14:13:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chip_code`
--
ALTER TABLE `chip_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chip_code`
--
ALTER TABLE `chip_code`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
