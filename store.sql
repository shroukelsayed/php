-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2016 at 05:38 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `prod_id` int(10) unsigned NOT NULL DEFAULT '0',
  `qty` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`,`prod_id`),
  KEY `prod_id` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `parent` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`) VALUES
(1, 'men', NULL),
(2, 'women', NULL),
(3, 'watches', 1),
(4, 'glasses', 1),
(5, 'blazers', 1),
(6, 'man_accessories', 1),
(7, 'handbags', 2),
(8, 'glasses', 2),
(9, 'shoes', 2),
(10, 'woman_accessories', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `cat_id` int(10) unsigned DEFAULT NULL,
  `price` float DEFAULT NULL,
  `qty` int(10) unsigned DEFAULT NULL,
  `sale` tinyint(4) DEFAULT NULL,
  `pic1` varchar(50) DEFAULT NULL,
  `pic2` varchar(50) DEFAULT NULL,
  `pic3` varchar(50) DEFAULT NULL,
  `pic4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cat_id`, `price`, `qty`, `sale`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES
(1, 'prada_bag', 7, 1200, 10, 5, '145425703299963185_v_1423902705.jpg', '1454257337Bulova-watches-for-men.jpg', '1454257372Mens-Watches-Blue-Black-Flash-LED-Milita', '14542600844.jpg'),
(2, 'prada_new', 7, 2000, 5, 10, '14542602431.jpg', '14542602542.jpg', '14542602683.jpg', '14542602854.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `credit` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `job` char(20) DEFAULT NULL,
  `interests` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `credit`, `address`, `birthdate`, `job`, `interests`) VALUES
(1, 'osama', 'osamasabry@gmail.com', 'Osama12345', 123456789, 'banha', '1988-03-01', 'eng', 'playing football'),
(2, 'shrouk passiony', 'shrouk.passiony@gmail.com', 'Rooka1012', 123456, 'mansoura', '2016-02-01', 'Engineer', 'reading'),
(3, 'yasmin', 'yasminelmorsy@gmail.com', 'Yasmin1234', 1234567, 'mans', '1993-09-03', 'dev', 'reading'),
(4, 'admin', 'admin@gmail.com', 'Admin1234', 123456789, 'cairo', '0000-00-00', 'admin', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `categories` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
