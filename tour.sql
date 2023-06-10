-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 10:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(27) DEFAULT NULL,
  `email` varchar(27) DEFAULT NULL,
  `phone` varchar(27) DEFAULT NULL,
  `address` varchar(27) DEFAULT NULL,
  `location` varchar(27) DEFAULT NULL,
  `guests` varchar(27) DEFAULT NULL,
  `arrivals` varchar(27) DEFAULT NULL,
  `leaving` varchar(27) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(2, 's', 'sS@ss.com', '01715426458', 'asd', 'asd', '20', NULL, '2023-05-24'),
(3, 'nayan', 'nman0171@gmail.com', '01533349989', 'Dhaka', 'asd', '20', '2023-06-24', '2023-06-27'),
(4, '', '', '', '', '', '', '', ''),
(5, 'Mrittika', 'dina.huq@gmail.com', '01775882883', 'banani, dhaka', 'cox bazar', '1', '2023-05-26', '2023-05-28'),
(6, 'tarin', 'tanzinatarin@gmail.com', '01992595226', 'banani, dhaka', 'sajek', '2', '2023-06-01', '2023-06-05'),
(7, 'mrittika', 'Siminsadiamrittika11@gmail.', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(27) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(27) DEFAULT NULL,
  `email` varchar(27) DEFAULT NULL,
  `phone` varchar(27) DEFAULT NULL,
  `address` varchar(27) DEFAULT NULL,
  `location` varchar(27) DEFAULT NULL,
  `guests` varchar(27) DEFAULT NULL,
  `arrivals` varchar(27) DEFAULT NULL,
  `leaving` varchar(27) DEFAULT NULL,
  `hotel_id` varchar(27) DEFAULT NULL,
  `room_id` varchar(27) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(27) DEFAULT NULL,
  `password` varchar(27) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'admin@2023'),
(2, 'simin', '12');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(27) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(27) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `image`) VALUES
(1, '  sajek  ', '                Budget-3000 per person\r\n                Tour Date- 26th April, 2023\r\n                Departure Place- Banani Office and Dhanmondi\r\n                \r\n             Day 1:\r\n\r\n             Depart from Dhaka in the morning (around 6-7 am) and head towards Khulna by bus/train.\r\n             Reach Khulna in the afternoon and transfer to a small boat.\r\n             Enjoy a leisurely boat ride through the winding rivers of the Sundarbans, taking in the scenic beauty and spotting wildlife like dolphins and various bird species.\r\n             Check in to a budget hotel/lodge near the Sundarbans.\r\n             Overnight stay in the hotel.\r\n             Day 2:\r\n\r\n             After breakfast, start a full-day boat trip to the heart of the Sundarbans.\r\n             Visit the Katka Beach and the famous watchtower for a panoramic view of the mangrove forest.\r\n             Have a picnic lunch at a suitable spot.\r\n             Visit the Sundarbans Tiger Reserve Forest, where you can spot various animals like tigers, deer, monkeys, and crocodiles.\r\n             Return to the hotel/lodge for dinner and overnight stay.\r\n             Day 3:\r\n\r\n             After breakfast, visit the Karamjal Wildlife Center, where you can observe various wildlife species including spotted deer, crocodiles, and monkeys.\r\n             Visit the forest office to learn about the conservation efforts in the Sundarbans.\r\n             Enjoy the sunset while cruising back to Khulna.\r\n             Return to the hotel/lodge for dinner and overnight stay.\r\n             Day 4:\r\n\r\n             After breakfast, check out from the hotel and head back to Dhaka.\r\n             Arrive in Dhaka in the afternoon and end the tour.                        ', 'uploads/14.jpg'),
(4, 'Bandarban', 'Budget: 3000(per person)\r\n            ', 'uploads/26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` varchar(27) DEFAULT NULL,
  `name` varchar(27) DEFAULT NULL,
  `price` varchar(27) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `name`, `price`) VALUES
(1, '1', 'delux', '2000'),
(2, '1', 'super Delux', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'simin', 'simin@simin.com', 'simin', 'pic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
