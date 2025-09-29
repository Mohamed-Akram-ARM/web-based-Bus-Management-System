-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2025 at 01:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `user_id` int(11) DEFAULT NULL,
  `bus_id` int(11) NOT NULL,
  `src_name` text NOT NULL,
  `to_name` text NOT NULL,
  `date_name` date NOT NULL,
  `bus_name` varchar(60) NOT NULL,
  `fare` int(10) NOT NULL,
  `seat_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`user_id`, `bus_id`, `src_name`, `to_name`, `date_name`, `bus_name`, `fare`, `seat_number`) VALUES
(14, 39, 'Colombo', 'Vavniya', '2025-09-29', 'Green Line - 13:05', 900, 2),
(14, 39, 'Colombo', 'Vavniya', '0000-00-00', 'Green Line - 13:05', 900, 20),
(14, 39, 'Colombo', 'Vavniya', '2025-10-06', 'Green Line - 13:05', 900, 20),
(14, 47, 'Colombo', 'Nuwaraeliya', '0000-00-00', 'City Line - 21:00', 1000, 7),
(14, 45, 'Colombo', 'Puttalam', '2025-09-29', 'Lanka Express - 19:00', 700, 2),
(14, 39, 'Colombo', 'Vavniya', '2025-09-29', 'Green Line - 13:05', 900, 5),
(1, 9, 'Puttalam', 'Jaffna', '2025-09-30', 'Green Line - 08:45', 900, 6),
(1, 39, 'Colombo', 'Vavniya', '2025-09-29', 'Green Line - 13:05', 900, 4),
(1, 39, 'Colombo', 'Vavniya', '0000-00-00', 'Green Line - 13:05', 900, 6);

-- --------------------------------------------------------

--
-- Table structure for table `bus_detail`
--

CREATE TABLE `bus_detail` (
  `id` int(11) NOT NULL,
  `bus_name` text NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `fare` int(50) NOT NULL,
  `seats_available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_detail`
--

INSERT INTO `bus_detail` (`id`, `bus_name`, `source`, `destination`, `fare`, `seats_available`) VALUES
(1, 'Shan Travels - 05:30', 'Colombo', 'Kandy', 750, 54),
(2, 'Arm Travels - 06:00', 'Colombo', 'Jaffna', 1200, 54),
(3, 'Sri Travels - 07:15', 'Colombo', 'Galle', 550, 54),
(4, 'Rathna Travels - 08:00', 'Kandy', 'Nuwaraeliya', 400, 54),
(5, 'Lanka Express - 09:30', 'Kandy', 'Badulla', 650, 54),
(6, 'Royal Travels - 05:45', 'Negombo', 'Kurunegala', 350, 54),
(7, 'City Line - 06:20', 'Gampaha', 'Chilaw', 300, 54),
(8, 'Super Line - 07:00', 'Kurunegala', 'Anuradhapura', 600, 54),
(9, 'Green Line - 08:45', 'Puttalam', 'Jaffna', 900, 54),
(10, 'Gold Star - 10:00', 'Rathnapura', 'Balangoda', 280, 54),
(11, 'Shan Travels - 04:45', 'Mathara', 'Colombo', 750, 54),
(12, 'Arm Travels - 05:15', 'Ambalanthota', 'Galle', 320, 54),
(13, 'Sri Travels - 06:40', 'Polonnaruwa', 'Trincomalee', 400, 54),
(14, 'Rathna Travels - 07:10', 'Dambulla', 'Anuradhapura', 350, 54),
(15, 'Lanka Express - 08:30', 'Horowpothana', 'Vavniya', 300, 54),
(16, 'Royal Travels - 09:50', 'Vavniya', 'Mannar', 450, 54),
(17, 'City Line - 10:15', 'Kilinochchi', 'Jaffna', 200, 54),
(18, 'Super Line - 05:30', 'Nawalapitiya', 'Kandy', 250, 54),
(19, 'Green Line - 06:15', 'Gampola', 'Nuwaraeliya', 220, 54),
(20, 'Gold Star - 07:00', 'Kelaniya', 'Colombo', 150, 54),
(21, 'Shan Travels - 08:20', 'Kalutara', 'Colombo', 180, 54),
(22, 'Arm Travels - 09:00', 'Ja-Ela', 'Negombo', 200, 54),
(23, 'Sri Travels - 10:45', 'Kurunegala', 'Polonnaruwa', 550, 54),
(24, 'Rathna Travels - 11:30', 'Bandarawela', 'Badulla', 200, 54),
(25, 'Lanka Express - 12:15', 'Mahiyanganaya', 'Kandy', 450, 54),
(26, 'Royal Travels - 13:00', 'Ampara', 'Batticaloa', 300, 54),
(27, 'City Line - 14:00', 'Trincomalee', 'Anuradhapura', 550, 54),
(28, 'Super Line - 15:30', 'Galle', 'Mathara', 250, 54),
(29, 'Green Line - 16:10', 'Badulla', 'Colombo', 1100, 54),
(30, 'Gold Star - 17:00', 'Nuwaraeliya', 'Colombo', 950, 54),
(31, 'Shan Travels - 05:40', 'Rathnapura', 'Colombo', 600, 54),
(32, 'Arm Travels - 06:25', 'Kegalle', 'Colombo', 400, 54),
(33, 'Sri Travels - 07:50', 'Kurunegala', 'Colombo', 450, 54),
(34, 'Rathna Travels - 08:35', 'Chilaw', 'Colombo', 380, 54),
(35, 'Lanka Express - 09:15', 'Wennappuwa', 'Colombo', 350, 54),
(36, 'Royal Travels - 10:30', 'Colombo', 'Ampara', 1000, 54),
(37, 'City Line - 11:20', 'Colombo', 'Trincomalee', 950, 54),
(38, 'Super Line - 12:10', 'Colombo', 'Batticaloa', 1050, 54),
(39, 'Green Line - 13:05', 'Colombo', 'Vavniya', 900, 54),
(40, 'Gold Star - 14:00', 'Colombo', 'Kilinochchi', 1150, 54),
(41, 'Shan Travels - 15:10', 'Colombo', 'Mannar', 1100, 54),
(42, 'Arm Travels - 16:20', 'Colombo', 'Anuradhapura', 800, 54),
(43, 'Sri Travels - 17:15', 'Colombo', 'Polonnaruwa', 850, 54),
(44, 'Rathna Travels - 18:00', 'Colombo', 'Kurunegala', 450, 54),
(45, 'Lanka Express - 19:00', 'Colombo', 'Puttalam', 700, 52),
(46, 'Royal Travels - 20:15', 'Colombo', 'Badulla', 1200, 54),
(47, 'City Line - 21:00', 'Colombo', 'Nuwaraeliya', 1000, 54),
(48, 'Super Line - 22:00', 'Colombo', 'Bandarawela', 1250, 54),
(49, 'Green Line - 22:30', 'Colombo', 'Gampola', 600, 54),
(50, 'Gold Star - 23:00', 'Colombo', 'Dambulla', 550, 54),
(51, 'sri trevels', 'colmbo', 'kalpitiya', 500, 54);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `user_id` int(11) DEFAULT NULL,
  `bus_id` int(11) NOT NULL,
  `Passenger_name` varchar(120) NOT NULL,
  `Passenger_Address` varchar(70) NOT NULL,
  `Passenger_PNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`user_id`, `bus_id`, `Passenger_name`, `Passenger_Address`, `Passenger_PNumber`) VALUES
(14, 39, 'akram', 'no:50,Puttalam', 2147483647),
(1, 9, 'mathush', 'puttalam', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'akram', 'arm@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'akram', 'akram@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(20, 'vimal', 'vimal@gmail.com', '8d5e957f297893487bd98fa830fa6413', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_detail`
--
ALTER TABLE `bus_detail`
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
-- AUTO_INCREMENT for table `bus_detail`
--
ALTER TABLE `bus_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
