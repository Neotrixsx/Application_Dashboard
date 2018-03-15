-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 02:53 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
(1, 'sam@sam.com', 'sam123', 'dashboard.html');

-- --------------------------------------------------------

--
-- Table structure for table `app1_blog`
--

CREATE TABLE `app1_blog` (
  `postid` int(11) NOT NULL,
  `browsertitle` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `image` blob NOT NULL,
  `time` datetime NOT NULL,
  `link` varchar(300) NOT NULL,
  `pubname` varchar(100) NOT NULL,
  `publogo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app1_details`
--

CREATE TABLE `app1_details` (
  `app_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_des` varchar(80) NOT NULL,
  `full_des` varchar(3000) NOT NULL,
  `scr_shots_phone_1` varchar(100) DEFAULT NULL,
  `scr_shots_phone_2` varchar(100) DEFAULT NULL,
  `scr_shots_phone_3` varchar(100) DEFAULT NULL,
  `scr_shots_phone_4` varchar(100) DEFAULT NULL,
  `scr_shots_phone_5` varchar(100) DEFAULT NULL,
  `scr_shots_tab_1` varchar(100) DEFAULT NULL,
  `scr_shots_tab_2` varchar(100) DEFAULT NULL,
  `scr_shots_tab_3` varchar(100) DEFAULT NULL,
  `scr_shots_tab_4` varchar(100) DEFAULT NULL,
  `scr_shots_tab_5` varchar(100) DEFAULT NULL,
  `hi_res_icon` varchar(100) NOT NULL,
  `feature_raphic` varchar(100) DEFAULT NULL,
  `promo_graphic` varchar(100) DEFAULT NULL,
  `tv_banner` varchar(100) DEFAULT NULL,
  `promo_video` varchar(100) DEFAULT NULL,
  `app_type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `support_email` varchar(100) NOT NULL,
  `support_phone` varchar(100) DEFAULT NULL,
  `privacy_policy` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app1_users`
--

CREATE TABLE `app1_users` (
  `userid` int(11) NOT NULL,
  `phone_unique_id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `notid` varchar(250) NOT NULL,
  `notid_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`userid`) USING BTREE;

--
-- Indexes for table `app1_blog`
--
ALTER TABLE `app1_blog`
  ADD PRIMARY KEY (`postid`) USING BTREE;

--
-- Indexes for table `app1_details`
--
ALTER TABLE `app1_details`
  ADD PRIMARY KEY (`app_id`),
  ADD UNIQUE KEY `name` (`app_id`);

--
-- Indexes for table `app1_users`
--
ALTER TABLE `app1_users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `phone_unique_id` (`phone_unique_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app1_blog`
--
ALTER TABLE `app1_blog`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app1_users`
--
ALTER TABLE `app1_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_category`
--
ALTER TABLE `application_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `application_type`
--
ALTER TABLE `application_type`
  MODIFY `application_type_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
