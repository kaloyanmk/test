-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_game`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cars_race`
--

CREATE TABLE `cars_race` (
  `car_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `engine` int(11) NOT NULL,
  `brakes` int(11) NOT NULL,
  `acceleration` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `cars_race`
--

INSERT INTO `cars_race` (`car_id`, `name`, `car_model`, `engine`, `brakes`, `acceleration`, `img`) VALUES
(1, 'name', '', 1, 1, 1, 'img'),
(2, 'second', '', 2, 2, 2, 'img'),
(3, 'kaio', '', 5, 5, 5, 'img'),
(4, 'iso', '', 10, 10, 10, 'img'),
(5, 'Gosho', '', 30, 1, 10, 'img');

-- --------------------------------------------------------

--
-- Структура на таблица `my_car`
--

CREATE TABLE `my_car` (
  `id_of_my_car` int(11) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `engine` int(11) NOT NULL,
  `brakes` int(11) NOT NULL,
  `acceleration` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `my_car`
--

INSERT INTO `my_car` (`id_of_my_car`, `owner`, `name`, `engine`, `brakes`, `acceleration`, `img`) VALUES
(1, 'lol', 'first', 101, 27, 18, 'img'),
(2, 'blago', 'lambo', 23, 7, 2, 'img'),
(3, 'strahy', 'lambo', 50, 263, 133, 'img');

-- --------------------------------------------------------

--
-- Структура на таблица `player`
--

CREATE TABLE `player` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `car` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `money` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `player`
--

INSERT INTO `player` (`user_id`, `user_name`, `user_pass`, `car`, `lvl`, `money`) VALUES
(5, 'lol', '123', 1, 1, '300'),
(6, 'strahy', '123', 1, 1, '0');

-- --------------------------------------------------------

--
-- Структура на таблица `shop`
--

CREATE TABLE `shop` (
  `item_id` int(11) NOT NULL,
  `type` int(30) NOT NULL,
  `power` int(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `shop`
--

INSERT INTO `shop` (`item_id`, `type`, `power`, `price`, `img`) VALUES
(0, 1, 1, '30', 'img'),
(0, 1, 2, '50', 'img'),
(0, 1, 3, '100', 'img'),
(0, 1, 5, '130', 'img'),
(0, 1, 6, '150', 'img'),
(0, 2, 1, '30', 'img'),
(0, 2, 3, '60', 'img'),
(0, 2, 5, '90', 'img'),
(0, 2, 7, '100', 'img'),
(0, 2, 8, '150', 'img'),
(0, 3, 1, '30', 'img'),
(0, 3, 2, '60', 'img'),
(0, 3, 5, '90', 'img'),
(0, 3, 6, '100', 'img'),
(0, 3, 7, '130', 'img');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_race`
--
ALTER TABLE `cars_race`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_id` (`car_id`);

--
-- Indexes for table `my_car`
--
ALTER TABLE `my_car`
  ADD PRIMARY KEY (`id_of_my_car`),
  ADD UNIQUE KEY `id_of_my_car` (`id_of_my_car`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `lvl` (`lvl`),
  ADD KEY `car` (`car`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_race`
--
ALTER TABLE `cars_race`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `my_car`
--
ALTER TABLE `my_car`
  MODIFY `id_of_my_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `fk_carraces` FOREIGN KEY (`lvl`) REFERENCES `cars_race` (`car_id`),
  ADD CONSTRAINT `fk_mycar` FOREIGN KEY (`car`) REFERENCES `my_car` (`id_of_my_car`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
