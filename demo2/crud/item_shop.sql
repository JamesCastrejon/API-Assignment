-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2015 at 01:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cost`, `description`, 'category', `created`, `updated`) VALUES
(1, 'Mushroom', 5, 'Restores 10 HP.', 'Heal', '2015-07-17 04:42:01', '2015-07-17 04:42:36'),
(2, '1-UP Mushroom', 15, 'Restores 15 HP when HP is 0.', 'Heal', '2015-07-17 04:43:58', '2015-07-17 04:53:52'),
(3, 'Herb', 5, 'Removes all status effects.', 'Unbuff', '2015-07-17 05:06:26', '2015-07-17 05:06:26'),
(4, 'Red Chile', 10, 'Increases attack for 3 turns.', 'Buff', '2015-07-17 05:14:46', '2015-07-17 05:14:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
