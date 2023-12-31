-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `car` varchar(255) DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car`, `pickup_date`, `return_date`, `username`, `price`) VALUES
(1, 'Hyundai Santro', '2023-08-10', '2023-08-11', 'neeschal', 5000.00),
(2, 'Volkswagen POLO', '2023-08-05', '2023-08-07', 'neeschal', 3000.00),
(3, 'Volkswagen POLO', '2023-08-11', '2023-08-26', 'neeschal', 3000.00),
(10, 'Hyundai Santro', '2023-08-05', '2023-08-07', 'pari123', 5000.00),
(11, 'Honda CITY', '2023-10-09', '2023-10-11', 'e.stha', 5500.00),
(12, 'KIA SELTOS', '2023-10-11', '2023-10-18', 'k.sanjay', 6000.00);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `mileage` decimal(5,2) DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `boot_capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `photo`, `brand`, `car_type`, `year`, `model`, `price`, `mileage`, `fuel_type`, `seat_capacity`, `boot_capacity`) VALUES
(1, 'addSantro1.jpg', 'Hyundai', '', '1990', 'Santro', 5000, 13.00, 'petrol', 4, 150),
(3, 'kiaSuv1.jpg', 'KIA', 'SUV', '2002', 'Sonet', 4000, 18.00, 'petrol', 5, 392),
(4, 'kiaSuvSelt1.jpg', 'KIA', 'SUV', '2017', 'SELTOS', 6000, 18.00, 'petrol', 5, 340),
(5, 'toySed1.jpg', 'Toyota', 'Sedan', '2020', 'CAMRY HYBRID', 6500, 20.00, 'petrol', 4, 350),
(6, 'addHondaSedan1.jpg', 'Honda', 'Sedan', '2019', 'CITY', 5500, 18.00, 'petrol', 5, 290),
(10, 'volkHat1.jpg', 'Volkswagen', 'Hatchbag', '2018', 'POLO', 4000, 18.00, 'petrol', 5, 280);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(56) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `address`, `phone`, `email`, `username`, `password`) VALUES
(4, 'sanjay khadka', 'golfutar', '9861497286', 'sanjaykhadka@tuicms.edu.np', 'kSanjay', '$2y$10$CiHwN3BRZc/TNNrrkRFzHua41q6jz5N.bcjZGVKglq0mY8QEurj.K'),
(6, 'Shushanta Dhungana', 'Ramhiti', '9865062545', 'shushantadhungana0@gmail.com', 'matrix', '$2y$10$7kPXLHARwyJUYbMvXK.KuejuNtonGqWyENgTPXBnu6LlfbDmdYUmW'),
(7, 'Neeschal', 'Newyork', '9746639988', 'neeschal@gmail.com', 'neeschal', '$2y$10$u6qTxDuJ2L/VVmVT0fI72O0Ne4z1GY1yLHUVWlazWgGPiVoK3UN2S'),
(9, 'Dibash Thapa', 'Tarakeswor-04, Paiyutar', '9804155838', 'dibash@gmail.com', 'dibash', '$2y$10$ge/1UG1l2S4SmWalup2iXuDA98om7Yceax7dQxJVW8TfEZfT4BrcC'),
(10, 'paritosh mainali', 'kapan', '9813027123', 'paritosh123@gmail.com', 'pari123', '$2y$10$BIUd5Eti47EJ5iJVI7aK8OHtOwnUBAPSQpeEdK6eGJOtYPCb3Xffm'),
(11, 'Evan Shrestha', 'Bhaktapur', '9869037188', 'evanstha08@gmail.com', 'e.stha', '$2y$10$kJRxNfTIrRAkTisNyRofbOZPDcFxHJMNILFf/xEXy4/sx/Wd7K5Ay'),
(12, 'Sanjay Khadka', 'Golfutar', '9861497286', 'sanjay1khadka@gmail.com', 'k.sanjay', '$2y$10$EU1DgMCtX1Oyhbof.niMcuvHAl0PwrKMZ3wz2GbznlgbTkwI/LCPy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
