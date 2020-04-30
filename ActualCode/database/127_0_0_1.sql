-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 02:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `euromillions`
--

CREATE TABLE IF NOT EXISTS `euromillions` (
  `query_id` int(11) NOT NULL,
  `TicketCost` varchar(10) NOT NULL,
  `number1` varchar(10) NOT NULL,
  `number2` varchar(10) NOT NULL,
  `number3` varchar(10) NOT NULL,
  `number4` varchar(10) NOT NULL,
  `number5` varchar(10) NOT NULL,
  `expectedValue` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `euromillions`
--

INSERT INTO `euromillions` (`query_id`, `TicketCost`, `number1`, `number2`, `number3`, `number4`, `number5`, `expectedValue`) VALUES
(7, '3', '4', '55', '6', '5', '3', '2.98');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `pass`) VALUES
(1, 'sa17bryceb@glow.sch.uk', '064cd2610c50d815723efcad25691c'),
(2, 'barkinbryce@outlook.com', '5baa61e4c9b93f3f0682250b6cf833'),
(3, 'matt@email.com', '5baa61e4c9b93f3f0682250b6cf833'),
(4, 'barkinbryc1e@outlook.com', '5baa61e4c9b93f3f0682250b6cf833'),
(5, 'bark@email.com', '5baa61e4c9b93f3f0682250b6cf833');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `euromillions`
--
ALTER TABLE `euromillions`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `euromillions`
--
ALTER TABLE `euromillions`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
