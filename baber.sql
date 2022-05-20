-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 12:10 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baber`
--

-- --------------------------------------------------------

--
-- Table structure for table `barber_activities`
--

CREATE TABLE IF NOT EXISTS `barber_activities` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_names` varchar(100) NOT NULL,
  `customer_contacts` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `amount_charged` float NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `barber_activities`
--

INSERT INTO `barber_activities` (`activity_id`, `user_id`, `date`, `customer_names`, `customer_contacts`, `service_id`, `amount_charged`) VALUES
(1, 2, '2021-04-08 05:04:29', 'dsgsds', 'juja ,078675', 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `address`, `create_date`) VALUES
(1, 'MAIN', 'WESTLANDS STREET 1', '2021-04-07 15:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `debit` varchar(10) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `particulars` varchar(1000) NOT NULL,
  `refference_number` varchar(100) NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `expenses`
--


-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notes`
--


-- --------------------------------------------------------

--
-- Table structure for table `service_catalogue`
--

CREATE TABLE IF NOT EXISTS `service_catalogue` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_category` varchar(65) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `charges` float NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `service_catalogue`
--


-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE IF NOT EXISTS `service_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `service_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(23) NOT NULL,
  `branch` varchar(34) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `names`, `username`, `password`, `join_date`, `role`, `branch`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '2021-04-07 14:58:18', 'admin', 'main'),
(2, 'barber', 'barber@barber.com', 'barber', '2021-04-07 14:59:11', 'barber', 'main');
