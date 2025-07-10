-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2025 at 07:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_engine`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','replied') DEFAULT 'unread',
  `reply` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `status`, `reply`, `date`) VALUES
(1, 'John Doe', 'john@example.com', 'Inquiry', 'I would like to know more about your products.', 'unread', NULL, '2025-07-08 16:05:54'),
(2, 'John Doe', 'john@example.com', 'Inquiry', 'I would like to know more about your products.', 'unread', NULL, '2025-07-08 16:05:54'),
(3, 'Jane Smith', 'jane@example.com', 'Support', 'I am having an issue with my account.', 'read', NULL, '2025-07-08 16:06:55'),
(4, 'Mike Brown', 'mike@example.com', 'Feedback', 'Your service is excellent!', 'replied', 'Thank you for your kind feedback.', '2025-07-08 16:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `status` enum('instock','outstock','notinsell') DEFAULT 'instock',
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `status`, `image`, `created_at`) VALUES
(1, 'Shock absorber', 'instock', 'shock_absorber_9423.jpg', '2025-07-10 04:51:20'),
(2, 'Full Gasket', 'instock', 'full_gasket_2169.jpg', '2025-07-10 04:56:09'),
(3, 'Piston Rings Set', 'instock', 'piston_rings_set_8667.jpg', '2025-07-10 04:56:40'),
(4, 'Piston Set', 'instock', 'piston_set_1760.jpg', '2025-07-10 04:57:21'),
(5, 'Oil Pump', 'instock', 'oil_pump_3400.jpg', '2025-07-10 04:58:23'),
(6, 'Liners', 'instock', 'liners_1733.jpg', '2025-07-10 04:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
