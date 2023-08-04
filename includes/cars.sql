-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 06:59 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
