-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2021 at 05:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganga_Constru`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost_sheet`
--

CREATE TABLE `cost_sheet` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `mob` int(10) NOT NULL,
  `flat_no` int(11) NOT NULL,
  `flat_type` varchar(10) NOT NULL,
  `area` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `carpet_area` int(11) NOT NULL,
  `agr_cost` double NOT NULL,
  `mseb` int(11) NOT NULL,
  `society_form` int(11) NOT NULL,
  `club_house_charges` int(11) NOT NULL,
  `total_amt` double NOT NULL,
  `stamp_duty` int(11) NOT NULL,
  `maintainance` int(11) NOT NULL,
  `registration` int(11) NOT NULL,
  `gst` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost_sheet`
--

INSERT INTO `cost_sheet` (`id`, `cust_name`, `mob`, `flat_no`, `flat_type`, `area`, `rate`, `carpet_area`, `agr_cost`, `mseb`, `society_form`, `club_house_charges`, `total_amt`, `stamp_duty`, `maintainance`, `registration`, `gst`, `total`) VALUES
(1, 'Raj more', 2147483647, 102, '2 BHK', 890, 4289, 780, 3817210, 60000, 30000, 65000, 3972210, 317777, 50000, 30000, 467065.2, 4837052),
(2, 'rohit_joshi', 789653254, 203, '1 BHK', 460, 4100, 350, 1886000, 60000, 30000, 65000, 2041000, 163280, 50000, 30000, 235320, 2519600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost_sheet`
--
ALTER TABLE `cost_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost_sheet`
--
ALTER TABLE `cost_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
