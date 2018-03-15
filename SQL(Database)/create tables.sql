
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

ALTER TABLE `app1_blog`
  ADD PRIMARY KEY (`postid`) USING BTREE;

ALTER TABLE `app1_blog`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;


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



ALTER TABLE `app1_users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `phone_unique_id` (`phone_unique_id`);

ALTER TABLE `app1_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

