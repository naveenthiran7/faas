-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 12:30 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_fashion`
--
CREATE DATABASE IF NOT EXISTS `php_fashion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_fashion`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userid` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) NOT NULL,
  `pid` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `ftype` varchar(200) NOT NULL,
  `fsize` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `subcat`, `brand`, `descr`, `price`, `pimage`, `ftype`, `fsize`) VALUES
(1, 'men', 'Casual Shirts', 'Classic Polo', 'Classic Polo shirts are of high quality and durability for men in the category of Casuals', 440, 'uploads/148108789865213.jpg', 'image/jpeg', '20792'),
(2, 'men', 'Casual Shirts', 'Cool Club', 'Cool club is the reputed brand form men in casual wear', 950, 'uploads/148108796166233.jpg', 'image/jpeg', '23953'),
(3, 'men', 'Casual Shirts', 'Zero Shirts', 'This type of mens casual shirts are very popular', 550, 'uploads/1481180363ARRahman.jpg', 'image/jpeg', '75199'),
(4, 'men', 'Casual Shirts', 'Coolers', 'Coolers are ligh coloured casual shirts for mens', 650, 'uploads/1481180471viv2a.jpg', 'image/jpeg', '92767'),
(5, 'women', 'Churidar Suits', 'Rangoli', 'This type of materials are for festival occasions and regular wear', 1150, 'uploads/1481180543CA4DYB8P.jpg', 'image/jpeg', '2212'),
(6, 'women', 'Kurtas', 'Garden', 'This full length type is Kurtas and is the most familiar dress for women', 1560, 'uploads/1481180608CAEDZMLR[1].jpg', 'image/jpeg', '3060'),
(7, 'kids', 'Boys Apparel', 'Kidzee', 'This is a fine and light coloured boys apparel for children', 685, 'uploads/1481184292ewan.jpg', 'image/jpeg', '10687');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `accno` varchar(50) NOT NULL,
  `dly` varchar(20) NOT NULL DEFAULT 'pending',
  `dlydt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `dt`, `userid`, `pid`, `bank`, `accno`, `dly`, `dlydt`) VALUES
(1, '2016-12-13', 'ganesh@gmail.com', '3', 'SBI', '112255242215', 'delivered', '2017-01-06'),
(2, '2016-12-13', 'ganesh@gmail.com', '1', 'SBI', '112255242215', 'pending', '0000-00-00'),
(3, '2016-12-14', 'balaji@gmail.com', '3', 'Canara Bank', '188299399938', 'pending', '0000-00-00'),
(4, '2016-12-14', 'balaji@gmail.com', '5', 'Canara Bank', '188299399938', 'pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userregn`
--

CREATE TABLE IF NOT EXISTS `userregn` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregn`
--

INSERT INTO `userregn` (`name`, `gender`, `addr`, `mobile`, `userid`, `pwd`) VALUES
('Balaji', 'Male', '98,South Street,', '9809484944', 'balaji@gmail.com', 'balaji'),
('Ganesh', 'Male', '868, North Street,', '8998588780', 'ganesh@gmail.com', 'ganesh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
