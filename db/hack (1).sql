-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 11:53 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `buyer_id`, `img_id`, `bid_amount`) VALUES
(1, 5, 0, 0),
(2, 5, 0, 0),
(3, 5, 0, 0),
(4, 5, 0, 0),
(5, 0, 1, 0),
(6, 0, 2, 0),
(7, 0, 3, 0),
(8, 5, 1, 0),
(9, 5, 2, 0),
(10, 5, 3, 0),
(11, 5, 1, 0),
(12, 5, 2, 0),
(13, 5, 3, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `buyer_id`, `password`, `buyerimg`, `buyer_name`) VALUES
(5, 'yash1', 'aaa', '23.png', 'Yash Parikh');

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
  `img_desc` varchar(500) NOT NULL,
  `img_rate` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_userid`, `imgpath`, `img_title`, `img_desc`, `img_rate`) VALUES
(1, 3, 'full.jpg', 'abc', 'awcgaercg', 0),
(2, 3, 'IMG_20151023_151113.jpg', 'yyy', 'hhh', 0),
(3, 3, 'IMG_20151026_220406.jpg', 'asd', 'asd', 0),
(4, 4, 'IMG_20151014_092329.jpg', 'ABCD000001', 'GMail TShirt', 0),
(5, 4, 'IMG_20151014_092352.jpg', 'ABCD000002', 'GitHab TShirt', 0),
(6, 4, 'IMG_20151020_155318.jpg', 'ABCD000003', 'Exotel TShirts', 0),
(7, 4, 'IMG_20151020_161535.jpg', 'ABCD000004', 'SalesForce TShirt', 0),
(8, 5, 'WIN_20151004_142754.JPG', 'ABCD000005', 'InOut TShirt', 0),
(9, 5, '3-temp.PNG', 'ABCD000007', 'Twitter TShirt', 0),
(10, 5, '3-temp.PNG', 'ABCD000009', 'YouTube TShirt', 0),
(11, 6, 'IMG_20151027_054049.jpg', 'ABCD000010', 'Yahoo TShirt', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `user_id`, `user_name`, `password`, `description`, `contact_no`, `impath`) VALUES
(2, 'yash1', 'yash parikh', '123', 'aevrgvaergac', 981252353, 'naman.jpg'),
(3, 'yash2', 'yash parikh', '1234', 'ea raeths rtj ', 345324474, 'images.jpg'),
(4, 'yash1', 'Yash Parikh', 'yash1', 'An artist with the skill of pottery', 9427579508, 'IMG_20151023_151113.jpg'),
(5, 'urmil1', 'Urmil Parikh', 'urmil1', 'An artist with great paintings.', 9723464349, 'IMG_20151029_214627.jpg'),
(6, 'aakash1', 'Aakash Rana', 'aakash1', 'A sculptor.', 8690698655, 'IMG_20151027_054049.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `rate_id` int(10) NOT NULL AUTO_INCREMENT,
  `img_id` int(10) NOT NULL,
  `rate_value` bigint(100) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `img_id`, `rate_value`) VALUES
(1, 1, 4),
(2, 1, 6),
(3, 1, 5),
(4, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
