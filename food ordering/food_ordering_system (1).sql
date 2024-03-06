-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2024 at 12:34 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--


CREATE TABLE IF NOT EXISTS `burger` (
  `id` int NOT NULL,
  `photo` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `price` int NOT NULL
) 

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `price` int NOT NULL,
  UNIQUE KEY `id` (`id`)
)

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `photo`, `name`, `price`) VALUES
(1, 'food_photos/1.jpeg', 'pizaa', 199),
(2, 'food_photos/1.jpeg', 'burger', 199),
(3, 'food_photos/1.jpeg', 'pizaa', 199),
(4, 'food_photos/1.jpeg', 'burger', 199),
(5, 'food_photos/1.jpeg', 'pizaa', 199),
(6, 'food_photos/1.jpeg', 'burger', 199),
(7, 'food_photos/1.jpeg', 'pizaa', 199),
(8, 'food_photos/1.jpeg', 'Sendvich', 199),
(9, 'food_photos/1.jpeg', 'Sendvich', 199),
(10, 'food_photos/1.jpeg', 'Sendvich', 199),
(11, 'food_photos/1.jpeg', 'Sendvich', 199),
(12, 'food_photos/1.jpeg', 'pizaa', 800);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) 

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
)

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) 

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'vaibhav@', '123'),
(2, 'nitin@', '123'),
(3, 'vaibhav@', '123'),
(4, 'vaibhav@', '123'),
(5, '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
