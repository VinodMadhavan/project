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
-- Database: `revenue`
--

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
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
-- Dumping data for table `revenue``
--

INSERT INTO `beneficiery_info` (`sr`, `sr_year`, `file_name`, `file_year`, `station_name`, `fir`, `fir_year`, `accident_date`, `accident_status`,`death_date`, `victim_name`, `id_proof`, `gender`, `claim`, `beneficiary`, `father_name`, `mobile`, `address`, `bank`, `account`, `ifsc`, `payment_status`, `payment_date`) VALUES
(3, '2020', 'AD_13', '2020', 'Mardhadam', '12345', '2021', '2021-04-12', 'Minor', 'No','rosan', '', 'Male', 10000, 'mari', 'chellam', 9893323292, 'ellam', 'AXIS', 3243242343243, 'AXIS1234', 'Yes', '2020-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `revenue`
--
ALTER TABLE `beneficiary_info`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `revenue`
--
--
 ALTER TABLE `beneficiary_info`
 MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--