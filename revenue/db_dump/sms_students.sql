-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 02:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdamn_demos`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_students`
--

CREATE TABLE `beneficiery_info` (
  `sr` int(10) UNSIGNED NOT NULL,
  `sr_year` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(40) NOT NULL,
  `file_year` int(10) UNSIGNED NOT NULL,
  `station_name` varchar(40) NOT NULL,
  `fir` varchar(40) NOT NULL,
  `fir_year` int(10) UNSIGNED NOT NULL,
  `accident_date` varchar(40) NOT NULL,
  `accident_status` varchar(255) NOT NULL,
  `death_date` varchar(40) DEFAULT NULL,
  `victim_name` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL, 
  `claim` int(10) UNSIGNED NOT NULL,
  `beneficiary` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mobile` int(10) UNSIGNED NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `account` int(16) UNSIGNED NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_students`
--

INSERT INTO `beneficiery_info` (`sd`, `sr_year`, `file_name`, `file_year`, `police_name`, `fir`, `fir_year`, `accident_date`, `accident_status`,`death_date`, `victim_name`, `id_proof`, `gender`, `claim`, `beneficiary`, `father_name`, `mobile`, `address`, `bank`, `account`, `ifsc`, `payment_status`, `payment_date`) VALUES
(1, '2021', 'AD_12', '2021', 'Thuckalay', '12345', '2021', '2021-04-05', 'Major', 'No', NULL, 'Kumar', NULL, 'Male', 30000, 'Priya', 'Ravi', 9894383292, 'Nagercoil', 'AXIS', 3243242343243, 'AXIS1234', 'NO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms_students`
--
ALTER TABLE `beneficiary_info`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms_students`
--
--
-- ALTER TABLE `sms_students`
-- MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--