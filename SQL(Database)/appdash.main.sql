-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`userid`, `username`, `password`, `link`) VALUES
(1, 'a@a.a', '123', 'dashboard.html');

-- --------------------------------------------------------

--
-- Table structure for table `application_category`
--

CREATE TABLE `application_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_category`
--

INSERT INTO `application_category` (`category_id`, `category_name`) VALUES
(1, 'Art & Design'),
(2, 'Auto & Vehicles'),
(3, 'Beauty'),
(4, 'Books & Reference'),
(5, 'Business'),
(6, 'Comics'),
(7, 'Communication'),
(8, 'Education'),
(9, 'Dating'),
(10, 'Entertainment'),
(11, 'Events'),
(12, 'Finance'),
(13, 'Food & Drink'),
(14, 'Health & Fitness'),
(15, 'House & Home'),
(16, 'Libraries & Demo'),
(17, 'Lifestyle'),
(18, 'Maps & Navigation'),
(19, 'Medical'),
(20, 'Music & Audio'),
(21, 'News & Magazines'),
(22, 'Parenting'),
(23, 'Personalization'),
(24, 'Photography'),
(25, 'Productivity'),
(26, 'Shopping'),
(27, 'Social'),
(28, 'Sports'),
(29, 'Tools'),
(30, 'Travel & Local'),
(31, 'Video Players & Editors'),
(32, 'Weather');

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE `application_type` (
  `application_type_id` int(11) NOT NULL,
  `application_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_type`
--

INSERT INTO `application_type` (`application_type_id`, `application_type_name`) VALUES
(1, 'Application'),
(2, 'Game');

-- --------------------------------------------------------

--
-- Table structure for table `app_main_detail`
--

CREATE TABLE `app_main_detail` (
  `list_id` int(11) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `app_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`userid`) USING BTREE;

--
-- Indexes for table `application_category`
--
ALTER TABLE `application_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `application_type`
--
ALTER TABLE `application_type`
  ADD PRIMARY KEY (`application_type_id`),
  ADD UNIQUE KEY `application_type_id` (`application_type_id`);

--
-- Indexes for table `app_main_detail`
--
ALTER TABLE `app_main_detail`
  ADD PRIMARY KEY (`list_id`),
  ADD UNIQUE KEY `app_id` (`app_id`);



--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application_category`
--
ALTER TABLE `application_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `application_type`
--
ALTER TABLE `application_type`
  MODIFY `application_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `app_main_detail`
--
ALTER TABLE `app_main_detail`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
