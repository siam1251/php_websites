-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2011 at 07:55 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sayemtest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE IF NOT EXISTS `informations` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`name`, `address`, `contactNo`, `id`, `image`) VALUES
('s', '     ', 'df', 24, ''),
('fd', 'df', 'sdf', 3, ''),
('dafs', 'a', 'ad', 4, ''),
('robin', 'asfd', 'asfd', 15, ''),
('robin', 'asfd', 'asfd', 14, ''),
('siam', 'sirajgonj', '234243', 13, 'upload/DSC04905.JPG '),
('ponir', '324', '4231', 17, 'upload/DSC04834.JPG '),
('ponir', '324', '4231', 16, 'upload/DSC04834.JPG '),
('s', 'f', 'df', 23, ''),
('ponir', '324', '4231', 18, 'upload/DSC04834.JPG '),
('ponir', '324', '4231', 19, 'upload/DSC04834.JPG '),
('ponir', '324', '4231', 20, 'upload/DSC04834.JPG '),
('ponir', '324', '4231', 21, ''),
('ponir', '324', '4231', 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `userName`, `password`) VALUES
(23, 's', 'f'),
(7, '', ''),
(6, '', ''),
(5, '', ''),
(8, '', ''),
(9, 'sayem', ''),
(10, 'sayem', ''),
(11, 'sayem', ''),
(12, 'sayem', ''),
(13, 'siam', 's'),
(14, 'robin', 'r'),
(15, 'robin', 'r'),
(16, 'ponir', 'p'),
(17, 'ponir', 'p'),
(18, 'ponir', 'p'),
(19, 'ponir', 'p'),
(20, 'ponir', 'p'),
(21, 'ponir', 'p'),
(22, 'ponir', 'p'),
(24, 's', 'f');
