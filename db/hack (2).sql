-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 11:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `bid_id` int(10) NOT NULL AUTO_INCREMENT,
  `buyer_id` int(10) NOT NULL,
  `img_id` int(10) NOT NULL,
  `bid_amount` bigint(100) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `buyer_id`, `img_id`, `bid_amount`) VALUES
(14, 2, 0, 1),
(15, 2, 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `buyer_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `buyerimg` varchar(500) NOT NULL,
  `buyer_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `buyer_id`, `password`, `buyerimg`, `buyer_name`) VALUES
(2, 'jack', '123', 'bg (2).jpg', 'jack sparrow');

-- --------------------------------------------------------

--
-- Table structure for table `buyeruser`
--

CREATE TABLE IF NOT EXISTS `buyeruser` (
  `buid` int(11) NOT NULL AUTO_INCREMENT,
  `buyerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`buid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `img_userid` int(11) NOT NULL,
  `imgpath` varchar(500) NOT NULL,
  `img_title` varchar(30) NOT NULL,
  `img_rate` int(11) NOT NULL,
  `img_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_userid`, `imgpath`, `img_title`, `img_rate`, `img_desc`) VALUES
(1, 3, 'secondarytile.png', 'asdf as', 0, 'a'),
(2, 3, 'download.jpg', 'arg', 0, 'arb'),
(3, 3, 'WSP Background.jpg', 'weg', 0, 'evvac');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(40) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `impath` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `user_id`, `user_name`, `password`, `description`, `contact_no`, `impath`) VALUES
(1, 'raju1', 'Rajesh Parikh', 'raju1', 'A craftsman with amazing skill of pottery.', 2147483647, 'C:/xampp/htdocs/SavvyKalakar/images/pot1.jpg'),
(2, 'yash1', 'yash parikh', '123', 'aevrgvaergac', 981252353, 'naman.jpg'),
(3, 'yash2', 'yash parikh', '1234', 'ea raeths rtj ', 345324474, 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `rate_id` int(10) NOT NULL AUTO_INCREMENT,
  `img_id` int(10) NOT NULL,
  `rate_value` bigint(100) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
