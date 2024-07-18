-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 04:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `rental_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `name`, `number`, `email`, `model`, `rental_date`) VALUES
(7, 'wa', '1213', 'wa@gmail.com', 'Lancer', '2024-07-17 16:44:00'),
(8, 'naqi', '01523123123', 'naqi@gmail.com', 'Axia', '2024-07-17 17:44:00'),
(9, 'aiman', '0153232322', 'mantodak@gmail.com', 'Preve', '2024-07-26 17:50:00'),
(12, 'Sameon', '01132313223', 'blabla@gmail.com', 'Preve', '2024-07-17 08:05:00'),
(13, 'Naqi', '0164767808', 'naqi@gmail.com', 'Civic FK', '2024-07-17 00:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `created_at`) VALUES
(14, 'Admin Wafri', 'wafri', 'wafri123', '2023-02-28 03:45:44'),
(15, 'Admin Harris', 'harris', 'harris123', '2023-02-28 03:46:00'),
(16, 'abu12', 'abu', 'asd123', '2023-03-01 14:33:01'),
(20, 'onlyhuman', 'Ali Abu', 'ali123', '2023-03-01 22:23:45'),
(25, 'skadadi', '', 'asd1234', '2024-07-17 08:33:56'),
(26, 'wafri', '', 'waf123', '2024-07-17 08:43:18'),
(27, 'q1w1', '', 'q1w1e1', '2024-07-17 08:44:43'),
(29, 'Aizat', '', 'aizat123', '2024-07-17 20:10:52'),
(30, 'Naqi', '', 'naqi123', '2024-07-17 22:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
