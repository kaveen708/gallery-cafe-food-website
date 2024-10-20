-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2024 at 03:26 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gallerycafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cuisinetype` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `price`, `cuisinetype`, `photo`) VALUES
('Strawbery milk shake', '350.00', 'Srilankan', 'uploads/gallery_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `password`, `email`, `reg_date`) VALUES
(1, 'sahan', '1234', 's@gmail.com', '2024-07-26 15:31:09'),
(2, 'sithum', '1234', 'c@gmail.com', '2024-07-26 15:32:23'),
(3, 'sahan', '1234', 's@gmail.com', '2024-07-26 16:03:25'),
(4, 'Oshan', '1234', 'o@gmail.com', '2024-07-27 04:01:27'),
(16, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:21:47'),
(17, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:28:21'),
(18, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:30:11'),
(19, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:30:32'),
(20, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:39:51'),
(21, 'sahan', '1234', 's@gmail.com', '2024-07-27 04:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `table_size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `table_size`) VALUES
(1, 'kaveen', 'k@gmail.com', '0776004671', 6),
(2, 'kaveen', 'k@gmail.com', '0776004671', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff','user') NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `profile_picture`) VALUES
(2, 'Praveen', 'p@gmail.com', '123', 'staff', 'uploads/follow_1.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
