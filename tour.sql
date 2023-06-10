-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2023 at 10:35 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(27) DEFAULT NULL,
  `email` varchar(27) DEFAULT NULL,
  `phone` varchar(27) DEFAULT NULL,
  `address` varchar(27) DEFAULT NULL,
  `location` varchar(27) DEFAULT NULL,
  `guests` varchar(27) DEFAULT NULL,
  `arrivals` varchar(27) DEFAULT NULL,
  `leaving` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(2, 's', 'sS@ss.com', '01715426458', 'asd', 'asd', '20', NULL, '2023-05-24'),
(3, 'nayan', 'nman0171@gmail.com', '01533349989', 'Dhaka', 'asd', '20', '2023-06-24', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`) VALUES
(1, 'Sea Gull'),
(2, 'Cox Today');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

DROP TABLE IF EXISTS `hotel_bookings`;
CREATE TABLE IF NOT EXISTS `hotel_bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(27) DEFAULT NULL,
  `email` varchar(27) DEFAULT NULL,
  `phone` varchar(27) DEFAULT NULL,
  `address` varchar(27) DEFAULT NULL,
  `location` varchar(27) DEFAULT NULL,
  `guests` varchar(27) DEFAULT NULL,
  `arrivals` varchar(27) DEFAULT NULL,
  `leaving` varchar(27) DEFAULT NULL,
  `hotel_id` varchar(27) DEFAULT NULL,
  `room_id` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `hotel_id`, `room_id`) VALUES
(1, 'sheikhnayan', 's@s.com', '01673904836', 'as', '2023-05-18', '20', 'asd', '2023-05-31', ' 1 ', '1'),
(2, 'test', 'nman0171@gmail.com', '01313786182', 'Dhaka', '2023-06-24', '20', 'asd', '2023-06-25', ' 1 ', '2'),
(3, 'nayan', 'nman0171@gmail.com', '01533349989', 'Bangladesh', 'asd', '26', '2023-06-24', '2023-06-26', ' 1 ', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(27) DEFAULT NULL,
  `password` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'admin@2023');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(27) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `image`) VALUES
(1, '    test    ', '                                                        \r\n            asdfasdf                                                ', 'uploads/independence 2.jpg'),
(3, 'test 3', '\r\n            test 3', 'uploads/26 march.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` varchar(27) DEFAULT NULL,
  `name` varchar(27) DEFAULT NULL,
  `price` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `name`, `price`) VALUES
(1, '1', 'delux', '2000'),
(2, '1', 'super Delux', '5000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
