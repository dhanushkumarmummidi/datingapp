-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 04:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `is_active` varchar(50) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `rolemodel` varchar(30) NOT NULL,
  `preference` varchar(30) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zodiac` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `dob`, `age`, `sex`, `image`, `occupation`, `education`, `hobbies`, `rolemodel`, `preference`, `height`, `weight`, `religion`, `country`, `zodiac`) VALUES
(8, 'Abhinav', 'mabhinav@gmail.com', '408554708d7c2d936823651366fe5100', '2017-02-04', 25, '2', 'abstract-photography-1.jpg', 'eater', '', 'nothing', 'dhanush', 'male', 198, 200, 'abhinav', 'India', 'Leo'),
(9, 'bharath', 'hana@gmail.com', '7616b81196ee6fe328497da3f1d9912d', '2016-11-30', 18, '1', '', 'vfdf', '', 'gfngf', 'sfdgf', 'dsfdgf', 123, 234, 'dfghj', 'India', 'Aries'),
(10, 'kumar', 'kumar@gmail.com', '79cfac6387e0d582f83a29a04d0bcdc4', '2012-11-30', 25, '1', 'amana-air-conditioner-sleeves-ws900e-66_1000.jpg', 'qdfg', 'gvfd', 'hbgrfed', 'gbfvd', 'fdcx', 465, 234, 'ghgrewq', 'India', 'Aries'),
(7, 'Dhanush', 'dhanush@gmail.com', 'a626d7937ea8547d04e4f79471c4b2c3', '2016-12-06', 25, '1', '', 'director', '', 'filmmaking', 'me', 'female', 183, 85, 'christain', 'Canada', 'Cancer'),
(11, 'bunny', 'bunny@bunny.com', '21232f297a57a5a743894a0e4a801fc3', '2019-11-11', 18, '1', 'abstract-photography-1.jpg', 'student', 'fdgfn', 'filmmaking', 'dhanush', 'dsfdgf', 198, 200, 'christain', 'India', 'Aries'),
(12, 'bunny1', 'bunny1@gmail.com', '20ee80e63596799a1543bc9fd88d8878', '2019-11-13', 18, '1', 'bQxQ8kSg_400x400.jpg', 'ujyhtgrbgfvcds', 'mn', 'gfngf', 'gbfvd', 'fdcx', 123, 90, 'abhinav', 'India', 'Aries');

-- --------------------------------------------------------

--
-- Table structure for table `wink`
--

DROP TABLE IF EXISTS `wink`;
CREATE TABLE IF NOT EXISTS `wink` (
  `matcher_name` varchar(250) NOT NULL,
  `partner_name` varchar(250) NOT NULL,
  `winked` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wink`
--

INSERT INTO `wink` (`matcher_name`, `partner_name`, `winked`) VALUES
('abhinav', 'kumar', 1),
('kumar', 'Abhinav', 1),
('kumar', 'Abhinav', 1),
('kumar', 'bharath', 1),
('kumar', 'kumar', 1),
('kumar', 'Dhanush', 1),
('bunny1', 'bharath', 1),
('bunny1', 'bunny', 1),
('bunny', 'bunny1', 1),
('bunny', 'bharath', 1),
('bunny', 'kumar', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
