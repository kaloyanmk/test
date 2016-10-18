-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 08:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_race`
--

CREATE TABLE IF NOT EXISTS `cars_race` (
`car_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `engine` int(11) NOT NULL,
  `brakes` int(11) NOT NULL,
  `acceleration` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `my_car`
--

CREATE TABLE IF NOT EXISTS `my_car` (
`id_of_my_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `playar`
--

CREATE TABLE IF NOT EXISTS `playar` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `car` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `money` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shope`
--

CREATE TABLE IF NOT EXISTS `shope` (
  `item_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `power` int(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_race`
--
ALTER TABLE `cars_race`
 ADD PRIMARY KEY (`car_id`), ADD UNIQUE KEY `car_id` (`car_id`);

--
-- Indexes for table `my_car`
--
ALTER TABLE `my_car`
 ADD PRIMARY KEY (`id_of_my_car`), ADD UNIQUE KEY `id_of_my_car` (`id_of_my_car`);

--
-- Indexes for table `playar`
--
ALTER TABLE `playar`
 ADD PRIMARY KEY (`user_id`), ADD KEY `lvl` (`lvl`), ADD KEY `car` (`car`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_race`
--
ALTER TABLE `cars_race`
MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `my_car`
--
ALTER TABLE `my_car`
MODIFY `id_of_my_car` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `playar`
--
ALTER TABLE `playar`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `playar`
--
ALTER TABLE `playar`
ADD CONSTRAINT `fk_carraces` FOREIGN KEY (`lvl`) REFERENCES `cars_race` (`car_id`),
ADD CONSTRAINT `fk_mycar` FOREIGN KEY (`car`) REFERENCES `my_car` (`id_of_my_car`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
