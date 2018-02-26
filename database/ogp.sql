-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2018 at 07:12 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

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

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(2, 'cat 1', 'cat 4');

-- --------------------------------------------------------

--
-- Table structure for table `composition`
--

DROP TABLE IF EXISTS `composition`;
CREATE TABLE IF NOT EXISTS `composition` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(255) NOT NULL,
  `composition` varchar(255) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `composition`
--

INSERT INTO `composition` (`comp_id`, `comp_name`, `composition`) VALUES
(2, 'comp', 'comp 256'),
(3, 'comp2', 'cop234'),
(4, 'Comp 5', 'Comp 2 3 4');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `med_name` varchar(255) NOT NULL,
  `man_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `med_desc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT '0',
  PRIMARY KEY (`med_id`),
  KEY `comp_id` (`cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `med_name`, `man_date`, `exp_date`, `cat_id`, `brand`, `price`, `med_desc`, `type`, `quantity`) VALUES
(4, 'HEllo', '7998-05-06', '8888-08-08', 2, '88', 350, 'Abcd', 'generic', 250),
(9, 'abd5', '4444-04-04', '4444-04-04', 0, 'bvd', 270, 'jksdbjkabdk', 'regular', 0),
(11, 'abcds', '0254-02-05', '5555-04-04', 2, 'Hello', 500, 'wadbkjdbakb', 'generic', 238),
(12, 'Hello', '1998-12-05', '2005-05-05', 2, 'World', 8, 'ABCD', 'generic', 2255);

-- --------------------------------------------------------

--
-- Table structure for table `med_comp`
--

DROP TABLE IF EXISTS `med_comp`;
CREATE TABLE IF NOT EXISTS `med_comp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `med_id` int(11) NOT NULL,
  `comp_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `med_id` (`med_id`),
  KEY `comp_id` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_comp`
--

INSERT INTO `med_comp` (`id`, `med_id`, `comp_id`) VALUES
(2, 11, '2,3,4'),
(4, 12, '2,4'),
(5, 9, '2,3,4'),
(6, 4, '2,3,4');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `read` int(11) DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `body`, `sender`, `reciever`, `read`, `sent_at`) VALUES
(1, 'abcd', 1, 3, 0, '2018-02-16 05:51:42'),
(7, 'Hello 1', 3, 1, 0, '2018-02-16 05:54:06'),
(8, 'Hello 3', 1, 3, 0, '2018-02-16 05:54:39'),
(9, 'abcd', 1, 3, NULL, '2018-02-16 07:02:32'),
(10, 'a', 3, 1, NULL, '2018-02-16 07:03:18'),
(11, 'Hello', 1, 3, NULL, '2018-02-16 07:04:34'),
(12, 'hello nixi', 3, 1, NULL, '2018-02-16 07:07:17'),
(13, 'Hello Rajanna', 1, 3, NULL, '2018-02-16 07:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purch_id` int(11) NOT NULL AUTO_INCREMENT,
  `med_id` int(11) NOT NULL,
  `purch_date` date NOT NULL,
  `pur_price` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  PRIMARY KEY (`purch_id`),
  KEY `med_id` (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purch_id`, `med_id`, `purch_date`, `pur_price`, `quantity`) VALUES
(1, 11, '0001-01-01', 1000, 500),
(2, 11, '0002-01-01', 100, 52),
(3, 12, '0000-00-00', 1252, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total_amount` int(200) DEFAULT NULL,
  `sales_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bill_num` int(11) DEFAULT NULL,
  `med_prisc` varchar(255) NOT NULL,
  PRIMARY KEY (`sales_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `user_id`, `total_amount`, `sales_date`, `bill_num`, `med_prisc`) VALUES
(2, 4, 270, '2018-02-13 19:22:17', 10001, 'photo.jpg'),
(3, 1, 540, '2018-02-15 09:55:30', 10000, '- Death Note - Pages.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales_desc`
--

DROP TABLE IF EXISTS `sales_desc`;
CREATE TABLE IF NOT EXISTS `sales_desc` (
  `desc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  PRIMARY KEY (`desc_id`),
  KEY `sales_id` (`sales_id`,`med_id`),
  KEY `med_id` (`med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_desc`
--

INSERT INTO `sales_desc` (`desc_id`, `sales_id`, `med_id`, `quantity`, `price`) VALUES
(2, 2, 11, 2, 1000),
(3, 2, 4, 2, 700),
(4, 2, 4, 2, 700);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `address`, `phone`, `username`, `email`, `password`, `type`) VALUES
(1, 'Nishanth Bhat', 'male', 'Vitla HEllo', 2564566, 'nixi', 'Nishanthbht@gmail.com', 'abcd', 'regular'),
(3, 'Rajesh', 'male', 'abcd', 98556, 'Rajesh', 'rajesh@example.com', '1234', 'doctor'),
(4, 'Admin', 'male', 'Admin', 2147483647, 'admin', 'admin@test.com', 'admin', 'admin'),
(5, 'Vikyath', 'male', 'Vitla', 123456789, 'vicky', 'vikyath@test.com', '123456789', 'pharmacist'),
(6, 'test', 'male', 'test', 12345, 'test', 'test@test.com', 'test', 'regular');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `med_comp`
--
ALTER TABLE `med_comp`
  ADD CONSTRAINT `med_comp_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sales_desc`
--
ALTER TABLE `sales_desc`
  ADD CONSTRAINT `sales_desc_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`sales_id`),
  ADD CONSTRAINT `sales_desc_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
