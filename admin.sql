-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 11:19 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminus`
--

CREATE TABLE IF NOT EXISTS `adminus` (
  `admin_username` varchar(20) NOT NULL,
  `admin_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminus`
--

INSERT INTO `adminus` (`admin_username`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userpage`
--

CREATE TABLE IF NOT EXISTS `userpage` (
  `startwork` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `stopwork` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpage`
--

INSERT INTO `userpage` (`startwork`, `stopwork`, `comment`) VALUES
('2016-06-17 02:46:00', '2016-07-10 07:25:00', ''),
('2016-06-17 02:46:00', '2016-07-10 07:25:00', ''),
('2016-06-21 23:27:00', '2016-07-09 21:27:00', ''),
('2016-06-20 22:41:00', '2016-07-12 22:41:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `startwork` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stopwork` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userid`, `username`, `password`, `startwork`, `stopwork`, `comment`) VALUES
(1, 'abc', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'qwe', '123456', '2016-06-16 12:48:15', '0000-00-00 00:00:00', ''),
(5, 'asw', 'asw', '2016-06-20 04:42:47', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
