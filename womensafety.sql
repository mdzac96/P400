-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 09:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womensafety`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `a_id` int(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `percentile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `autosms`
--

CREATE TABLE `autosms` (
  `auto_id` int(255) NOT NULL,
  `time` time(6) NOT NULL,
  `u_id` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `date` date NOT NULL,
  `sms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `d_id` int(255) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(255) NOT NULL,
  `area_to` varchar(255) NOT NULL,
  `area_from` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `alert_type` varchar(255) NOT NULL,
  `travelling_with` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `filepath` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `emergency_number_1` varchar(255) NOT NULL,
  `emergency_number_2` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `autosmson` varchar(255) NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `mobile`, `email`, `password`, `c_password`, `filepath`, `address`, `gender`, `emergency_number_1`, `emergency_number_2`, `type`, `autosmson`, `time`) VALUES
(1, 'Zabed Ahmed Chowdhury', '01712795943', 'mdzac96@gmail.com', '123123', '123123', '', 'Barlekha,Moulvibazar', 'Male', '01712795943', '01612795943', 'admin', '', '07:16:00.000000'),
(2, 'Mehrab Hussain Chowdhury', '96325874102', 'mehrub02@gmail.com', '147147', '147147', '', 'Kumarpara,Sylhet', '', '12345678901', '01234567890', '1', '', '00:00:00.000000'),
(3, 'Ashique Adnan', '01712795943', 'ashique@gmail.com', '123654', '123654', '', 'Jaflong,Sylhet', '', '11223344556', '11223344557', '1', '', '00:00:01.000000'),
(4, 'Ariful Haque', '01712795943	', 'arif98@gmail.com', '14789632', '14789632', '', 'Jaflong,Sylhet', '', '12345678901', '01234567890', '1', '', '10:20:00.000000'),
(7, 'Adnan Khan', '01712795943', 'adnan96@gmail.com', '789789', '789789', '2_33345219.jpg', 'Kumarpara,Sylhet', '', '12345678901', '11223344557', '1', '', '01:42:00.000000'),
(8, 'Adnan Khan', '01712795943', 'adnan96@gmail.com', '789789', '789789', '2_33345219.jpg', 'Kumarpara,Sylhet', '', '12345678901', '11223344557', '1', '', '01:42:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `autosms`
--
ALTER TABLE `autosms`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `autosms`
--
ALTER TABLE `autosms`
  MODIFY `auto_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
