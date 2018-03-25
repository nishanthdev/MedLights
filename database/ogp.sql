-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 05:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(7, 'Prescribed', 'This signifies it is a prescribed medicine'),
(8, 'Unprescribed', 'This signifies medicine under this category are unprescribed'),
(9, 'Generic', 'This signifies medicine under this type are generic');

-- --------------------------------------------------------

--
-- Table structure for table `composition`
--

CREATE TABLE `composition` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `composition`
--

INSERT INTO `composition` (`comp_id`, `comp_name`, `composition`) VALUES
(5, 'Composition_A', 'this signifies medicines belong to following composition'),
(6, 'Composition_B', 'this signifies medicines belong to following composition'),
(7, 'Composition_C', 'this signifies medicines belong to following composition'),
(8, 'Composition_D', 'this signifies medicines belong to following composition'),
(9, 'Composition_E', 'this signifies medicines belong to following composition'),
(10, 'Composition_F', 'this signifies medicines belong to following composition'),
(11, 'Composition_G', 'this signifies medicines belong to following composition'),
(12, 'Composition_H', 'this signifies medicines belong to following composition'),
(13, 'Composition_I', 'this signifies medicines belong to following composition'),
(14, 'Composition_J', 'this signifies medicines belong to following composition'),
(15, 'Composition_K', 'this signifies medicines belong to following composition'),
(16, 'Composition_L', 'this signifies medicines belong to following composition');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL,
  `med_name` varchar(255) NOT NULL,
  `man_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `med_desc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `pic` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `med_name`, `man_date`, `exp_date`, `cat_id`, `brand`, `price`, `med_desc`, `type`, `quantity`, `pic`) VALUES
(19, 'Medicine_B', '2018-06-15', '2020-06-15', 8, 'Brand_A', 25, 'No Prescription needed', 'regular', 93, 'med2.png'),
(20, 'Medicine_C', '2016-03-15', '2018-03-15', 7, 'Brand_A', 15, 'Prescription needed. ', 'regular', 100, 'med2.png'),
(21, 'Medicine_D', '2018-03-15', '2025-03-15', 7, 'Brand_A', 100, 'Prescripion needed.', 'regular', 98, 'med2.png'),
(22, 'Medicine_E', '2018-03-15', '2025-03-15', 7, 'Brand_B', 45, 'Prescription needed.', 'regular', 150, 'med2.png'),
(23, 'Medicine_F', '2018-03-15', '2020-03-15', 7, 'Brand_B', 50, 'Prescription needed.', 'regular', 100, 'med2.png'),
(24, 'Medicine_G', '2018-03-14', '2020-03-14', 8, 'Brand_B', 55, 'No prescription needed.', 'regular', 97, 'med2.png'),
(25, 'Medicine_H', '2018-03-15', '2020-03-15', 7, 'Brand_C', 20, 'Prescription needed.', 'regular', 100, 'med2.png'),
(26, 'Medicine_I', '2018-03-15', '2019-03-15', 8, 'Brand_C', 63, 'No prescription needed.', 'regular', 100, 'med2.png'),
(27, 'Medicine_J', '2018-03-13', '2019-03-13', 8, 'Brand_C', 85, 'Prescription needed.', 'regular', 99, 'med2.png'),
(28, 'Generic_A', '2018-03-12', '2019-03-13', 9, 'Brand_D', 20, 'Prescription needed.', 'generic', 99, 'med3.png'),
(29, 'Generic_B', '2018-03-12', '2021-03-12', 9, 'Brand_D', 50, 'No prescription needed. ', 'generic', 100, 'med3.png'),
(30, 'Generic_C', '0000-00-00', '0000-00-00', 9, 'Brand_D', 40, 'Prescription needed.', 'generic', 100, 'med3.png'),
(31, 'Generic_D', '2018-03-15', '2022-03-15', 9, 'Brand_D', 30, 'Prescription needed.', 'generic', 99, 'med3.png'),
(32, 'Generic_E', '2018-03-14', '2022-03-14', 9, 'Brand_D', 12, 'Prescription needed.', 'generic', 100, 'med3.png'),
(33, 'Generic_F', '2018-03-13', '2019-03-15', 9, 'Brand_E', 45, 'Prescription needed.', 'generic', 98, 'med3.png'),
(34, 'Generic_G', '2018-03-21', '2021-03-21', 9, 'Brand_E', 23, 'No prescription needed.', 'generic', 100, 'med3.png'),
(35, 'Generic_H', '2018-03-05', '2020-03-05', 9, 'Brand_E', 100, 'Prescription needed.', 'generic', 100, 'med3.png'),
(36, 'Generic_I', '2018-03-15', '2021-03-17', 9, 'Brand_E', 200, 'No prescription needed.', 'generic', 100, 'med3.png'),
(37, 'Generic_J', '2018-03-20', '2019-03-19', 9, 'Brand_E', 123, 'Prescription needed.', 'generic', 100, 'med3.png');

-- --------------------------------------------------------

--
-- Table structure for table `med_comp`
--

CREATE TABLE `med_comp` (
  `id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `comp_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_comp`
--

INSERT INTO `med_comp` (`id`, `med_id`, `comp_id`) VALUES
(13, 19, '5,6,7,8,9,1'),
(14, 20, '5,6,7,8,9'),
(15, 21, '5,6,7,8'),
(16, 22, '5,6,7,8,9,1'),
(17, 23, '5,6,7,8,9,1'),
(18, 24, '5,6,7,8,9,1'),
(19, 25, '5,6,7,8'),
(20, 26, '5,6,7,8,9,1'),
(21, 27, '5,11,12,13,'),
(22, 28, '5,6,7,8,9,1'),
(23, 29, '5,6,7,8,9,1'),
(24, 30, '5,6,7,8,9'),
(25, 31, '5,6,7,8'),
(26, 32, '5,6,7,8,9,1'),
(27, 33, '5,6,7,8,9,1'),
(28, 34, '5,6,7,8,9,1'),
(29, 35, '5,6,7,8'),
(30, 36, '5,6,7,8,9,1'),
(31, 37, '5,11,12,13,');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `read` int(11) DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `body`, `sender`, `reciever`, `read`, `sent_at`) VALUES
(61, 'abcd', 1, 3, NULL, '2018-03-18 05:46:57'),
(62, '123', 1, 3, NULL, '2018-03-18 05:54:46'),
(63, 'abcd', 1, 3, NULL, '2018-03-18 05:57:29'),
(64, 'abcd', 1, 3, NULL, '2018-03-18 05:58:10'),
(65, 'abcd', 1, 3, NULL, '2018-03-18 05:58:27'),
(66, 'abcd1234', 1, 3, NULL, '2018-03-18 06:06:17'),
(67, 'Hellow sdj', 3, 1, NULL, '2018-03-18 06:12:23'),
(68, 'hello', 3, 1, NULL, '2018-03-18 06:14:38'),
(69, 'hello', 1, 3, NULL, '2018-03-18 06:15:05'),
(70, 'abcgsjk', 1, 3, NULL, '2018-03-18 06:15:14'),
(71, 'Hellow', 1, 6, NULL, '2018-03-18 06:43:43'),
(72, 's', 1, 6, NULL, '2018-03-18 06:44:30'),
(73, 'abcd', 1, 3, NULL, '2018-03-18 06:46:56'),
(74, 'Hello World', 1, 3, NULL, '2018-03-19 05:09:48'),
(75, 'hello', 1, 3, NULL, '2018-03-22 08:13:06'),
(76, 'Hello', 1, 3, NULL, '2018-03-24 06:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purch_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `purch_date` date NOT NULL,
  `pur_price` int(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purch_id`, `med_id`, `purch_date`, `pur_price`, `quantity`) VALUES
(3, 22, '2018-03-22', 15, 50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` int(200) DEFAULT NULL,
  `sales_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bill_num` int(11) DEFAULT NULL,
  `med_prisc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `user_id`, `total_amount`, `sales_date`, `bill_num`, `med_prisc`) VALUES
(2, 4, 270, '2018-02-13 19:22:17', 10001, 'photo.jpg'),
(8, 1, 80, '2018-03-22 22:17:11', 10000, ''),
(9, 1, 190, '2018-03-23 14:06:26', 10000, ''),
(10, 1, 30, '2018-03-23 18:30:18', 10000, ''),
(11, 1, 25, '2018-03-23 18:32:54', 10000, ''),
(12, 1, 25, '2018-03-23 18:35:36', 10000, ''),
(13, 1, 25, '2018-03-23 18:40:03', 10000, ''),
(14, 1, 105, '2018-03-23 18:50:52', 10000, ''),
(15, 1, 100, '2018-03-24 11:20:49', 10000, ''),
(16, 1, 100, '2018-03-24 11:45:18', 10000, ''),
(17, 1, 25, '2018-03-25 09:16:49', 10001, ''),
(18, 1, 100, '2018-03-25 09:17:35', 10001, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_desc`
--

CREATE TABLE `sales_desc` (
  `desc_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_desc`
--

INSERT INTO `sales_desc` (`desc_id`, `sales_id`, `med_id`, `quantity`, `price`) VALUES
(18, 8, 19, 1, 25),
(19, 8, 24, 1, 55),
(20, 9, 33, 2, 90),
(21, 9, 21, 1, 100),
(22, 10, 31, 1, 30),
(23, 11, 19, 1, 25),
(24, 12, 19, 1, 25),
(25, 13, 19, 1, 25),
(26, 14, 27, 1, 85),
(27, 14, 28, 1, 20),
(28, 17, 19, 1, 25),
(29, 18, 21, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `pic` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `address`, `phone`, `username`, `email`, `password`, `type`, `pic`) VALUES
(1, 'Nishanth Bhat K', 'male', 'Church Road aSchool Road ', '8050789520', 'Nishanth', 'Nishanthbht@gmail.com', 'abcd', 'regular', 'photo.jpg'),
(3, 'Rajesh', 'male', 'abcd', '98556', 'Rajesh', 'rajesh@example.com', '1234', 'doctor', NULL),
(4, 'Admin', 'male', 'Admin', '2147483647', 'admin', 'admin@test.com', 'admin', 'admin', NULL),
(5, 'Vikyath', 'male', 'Vitla', '123456789', 'vicky', 'vikyath@test.com', '123456789', 'pharmacist', NULL),
(6, 'test', 'male', 'test', '12345', 'test', 'test@test.com', 'test', 'doctor', NULL),
(7, 'Rahul', 'male', 'Church Road, School Road, Vittal', '2147483647', 'Rahul', 'Rahulbht@gmail.com', 'rahul12345', 'regular', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`),
  ADD KEY `comp_id` (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `med_comp`
--
ALTER TABLE `med_comp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `med_id` (`med_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purch_id`),
  ADD KEY `med_id` (`med_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sales_desc`
--
ALTER TABLE `sales_desc`
  ADD PRIMARY KEY (`desc_id`),
  ADD KEY `sales_id` (`sales_id`,`med_id`),
  ADD KEY `med_id` (`med_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `composition`
--
ALTER TABLE `composition`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `med_comp`
--
ALTER TABLE `med_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales_desc`
--
ALTER TABLE `sales_desc`
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `med_comp`
--
ALTER TABLE `med_comp`
  ADD CONSTRAINT `med_comp_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sales_desc`
--
ALTER TABLE `sales_desc`
  ADD CONSTRAINT `sales_desc_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`sales_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_desc_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
