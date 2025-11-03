-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2025 at 08:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `mobile`, `village`, `city`, `pincode`, `password`) VALUES
(1, 'balaram', '6370126361', 'brahmanchhai', 'hinjilicut', '761103', '123');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_sales`
--

CREATE TABLE `farmer_sales` (
  `id` int(11) NOT NULL,
  `farmer_name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_sales`
--

INSERT INTO `farmer_sales` (`id`, `farmer_name`, `mobile`, `product`, `price`, `quantity`, `total`, `village`, `city`, `pincode`, `status`, `created_at`) VALUES
(1, 'balaram', '6370126361', 'Potato', '30.00', 9, '270.00', 'brahmanchhai', 'BRAHMAPUR', '761103', 'Approved', '2025-10-31 11:06:27'),
(2, 'balaram', '6370126361', 'Apple', '100.00', 14, '1400.00', 'brahmanchhai', 'Hinjilicut', '761103', 'Approved', '2025-10-31 11:10:31'),
(3, 'balaram', '6370126361', 'Apple', '100.00', 8, '800.00', 'brahmanchhai', 'Hinjilicut', '761103', 'Approved', '2025-10-31 11:10:57'),
(4, 'balaram', '6370126361', 'Potato', '30.00', 22, '660.00', 'brahmanchhai', 'Hinjilicut', '761103', 'Approved', '2025-10-31 11:26:02'),
(5, 'balaram', '6370126361', 'Tomato', '40.00', 15, '600.00', 'brahmanchhai', 'Hinjilicut', '761103', 'Pending', '2025-10-31 11:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'balaram', 'balaram.malik1@wipro.com', '123', '2025-09-30 08:41:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `farmer_sales`
--
ALTER TABLE `farmer_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmer_sales`
--
ALTER TABLE `farmer_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
