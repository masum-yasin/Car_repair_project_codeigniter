-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 02:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `category` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `date_created`) VALUES
(1, '2 Wheeler Vehicle', 1, '2021-09-30 09:42:40'),
(2, '3 Wheeler Vehicle', 1, '2021-09-30 09:43:00'),
(3, '4 Wheeler Vehicle', 1, '2021-09-30 09:43:48'),
(4, '6 Wheeler Vehicle', 1, '2021-09-30 09:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_Number` int(11) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_Number`, `address`, `state`, `created_at`, `details`) VALUES
(1, 'khayrul Alam Rayan', 'rayan@gmail.com', 0, '', 'Dhaka', '2023-12-27 08:36:07', 'Pellentesque bibendum nunc eget pharetra posuere. Sed fermentum eros at aliquet accumsan. Nullam ut leo massa. Mauris est odio, elementum eu accumsan nec, cursus quis nunc.'),
(2, 'khayrul Alam Rayan', 'rayan@gmail.com', 12365874, NULL, 'ssjkpojs;', '2024-01-02 18:00:00', NULL),
(3, 'khayrul Alam Rayan', 'abc@gmail.com', 1963202587, NULL, 'dddddddddddd', '2023-12-20 18:00:00', NULL),
(4, 'khayrul Alam Rayan', 'rayan@gmail.com', 215478, NULL, 'dddddd', '2023-12-20 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mechanics_list`
--

CREATE TABLE `mechanics_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `Joining_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanics_list`
--

INSERT INTO `mechanics_list` (`id`, `name`, `contact`, `email`, `status`, `Joining_Date`, `image`) VALUES
(1, '', '09123456789', 'jsmith@sample.com', 1, '2021-09-30 10:26:11', ''),
(6, 'Rayan Alam', '0192036251', 'mamun@gmail.com', 1, '2023-12-20 15:12:03', 'msg4.png'),
(7, 'Kutta Sadid', '01236925145', 'fgk@gmail.com', 1, '2023-12-20 16:08:25', 'g2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request_meta`
--

CREATE TABLE `request_meta` (
  `request_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_meta`
--

INSERT INTO `request_meta` (`request_id`, `meta_field`, `meta_value`) VALUES
(1, 'contact', '09112355799'),
(1, 'email', 'jsmith@sample.com'),
(1, 'address', 'Sample Address'),
(1, 'vehicle_name', 'Mitsubishi Montero Sport'),
(1, 'vehicle_registration_number', 'GBN 0623'),
(1, 'vehicle_model', 'CDM-10140715'),
(1, 'service_id', '1,3,4'),
(1, 'pickup_address', 'Here St., There City, Sample Only 623');

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `id` int(30) NOT NULL,
  `service` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `service`, `description`, `price`, `status`, `date_created`, `image`) VALUES
(36, 'Foam Washing', 'It a carefully washing ', 123654, 1, '2023-12-19 00:00:00', '1702977401_3c457edc95eb5be99203.png'),
(37, 'Foam Washing', 'It a carefully washing ', 4582, 1, '2023-12-19 00:00:00', '1702978980_34a60adb3d421e656a76.jpg'),
(38, 'Foam Washing', 'It a carefully washing ', 123654, 1, '2023-12-30 00:00:00', 'g8.jpg'),
(39, 'Foam Washing', 'It a carefully washing ', 123654, 1, '2023-12-20 00:00:00', 'g3.jpg'),
(40, 'Engine Repair', 'It a carefully washing ', 123654, 1, '2023-12-21 00:00:00', 'user_img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` int(30) NOT NULL,
  `owner_name` text NOT NULL,
  `category_id` int(30) NOT NULL,
  `service_type` text NOT NULL,
  `mechanic_id` int(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `owner_name`, `category_id`, `service_type`, `mechanic_id`, `status`, `date_created`) VALUES
(1, 'Mike Williams', 3, 'Pick Up', 1, 2, '2021-09-30 14:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Vehicle Service Management System'),
(6, 'short_name', 'VSMS - PHP'),
(11, 'logo', 'uploads/1632965940_vrs-logo.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1632965760_car-shop-clip.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `us_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`us_id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'khayrul Alam Rayan', 'rayan@gmail.com ', '123456', '2023-12-15 11:00:06'),
(2, 'masum', 'masum55549@gmail.com', '$2y$10$tF0lMNa3CDqOhzGi7TufFOiUuPO9oSz.NLyjv9AcPa9', '2023-12-20 12:18:09'),
(3, 'rayan', 'rayan@gmail.com', '$2y$10$BGqtHSg4tcvZxd/sBQb2wOIDuT/XGr0Y/xtEJd/t04r', '2023-12-21 04:43:23'),
(4, 'mamun', 'mamun@gmail.com', '$2y$10$Pk1EJ7ETj8uGcREIjmAWaemjGG/6n4VGaudMviCZqVWDzfIJBj5Z.', '2023-12-21 06:00:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanics_list`
--
ALTER TABLE `mechanics_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_meta`
--
ALTER TABLE `request_meta`
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mechanics_list`
--
ALTER TABLE `mechanics_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request_meta`
--
ALTER TABLE `request_meta`
  ADD CONSTRAINT `request_meta_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `service_requests` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
