-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 08:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '123'),
(2, 'admin2', 'qweasdzxc'),
(3, 'admin3', '123456'),
(4, 'admin4', 'asdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` int(11) NOT NULL,
  `f_username` varchar(255) NOT NULL,
  `f_address` varchar(255) NOT NULL,
  `f_pass` varchar(35) NOT NULL,
  `f_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `f_username`, `f_address`, `f_pass`, `f_mobile`) VALUES
(1, 'farmer', '347,SOUTH SUBHAS NAGAR BYELANE,DUM DUM CANTONMENT', '123', 2147483647),
(2, 'farmer2', 'ggsesfse', '123', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(3) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_category`, `p_price`) VALUES
(1, 'mango', 'fruit', '30$'),
(2, 'coconut', 'fruit', '10$'),
(3, 'apple', 'fruit', '20$'),
(4, 'orange', 'fruit', '20$'),
(5, 'potato', 'vegetable', '5$'),
(6, 'tomato', 'vegetable', '5$'),
(7, 'onion', 'vegetable', '12$'),
(9, 'capsicum', 'vegetable', '25$'),
(10, 'corn', 'vegetable', '12$'),
(11, 'xyz', 'vegetable', '12$');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sno` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `cpass` varchar(35) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sno`, `username`, `email`, `pass`, `cpass`, `mobile`, `address`) VALUES
(1, 'snehasish', 'weishenpov@gmail.com', '123', '123', '8777417874', '347,SOUTH SUBHAS NAGAR BYELANE,DUM DUM CANTONMENT'),
(2, 'pritam', 'pritam@pritam', 'qweasd', 'qweasd', '1234567890', 'xyz lane'),
(3, 'arif', 'arif@gmail.com', 'qwe', 'qwe', '5435523423', 'wawasasddwg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(3) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_quantity` int(3) NOT NULL,
  `p_price` int(3) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `p_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `b_name`, `p_name`, `p_quantity`, `p_price`, `card_number`, `p_date`) VALUES
(1, 'snehasish', 'apple', 2, 20, '42312343255345', '0000-00-00 00:00:00'),
(2, 'pritam', 'onion', 5, 12, '12414', '0000-00-00 00:00:00'),
(3, 'pritam', 'onion', 5, 12, '12414', '0000-00-00 00:00:00'),
(4, 'snehasish', 'apple', 3, 20, '41421412424554', '0000-00-00 00:00:00'),
(5, 'snehasish', 'mango', 3, 30, '12345678', '0000-00-00 00:00:00'),
(6, 'snehasish', 'tomato', 5, 5, '3213211231', '0000-00-00 00:00:00'),
(7, 'pritam', 'apple', 4, 20, '523432423525', '2021-09-03 21:47:50'),
(8, 'arif', 'coconut', 3, 30, '5435345345345', '2021-09-03 21:49:24'),
(9, 'snehasish', 'orange', 5, 20, '12414', '2021-09-03 21:52:37'),
(10, 'snehasish', 'potato', 10, 5, '534534524342', '2021-09-03 23:27:40'),
(11, 'farmer', 'coconut', 5, 10, '3213211231', '2021-09-05 19:28:38'),
(12, 'farmer', 'potato', 4, 5, '534534524342', '2021-09-05 19:31:19'),
(13, 'farmer', 'mango', 4, 30, '534534524342', '2021-09-05 19:33:35'),
(14, 'farmer', 'tomato', 5, 5, '12345678', '2021-09-05 19:35:18'),
(15, 'farmer', 'apple', 4, 20, '41421412424554', '2021-09-05 19:45:11'),
(16, 'farmer2', 'onion', 4, 12, '42312343255345', '2021-09-05 20:28:46'),
(17, 'farmer2', 'capsicum', 8, 25, '41421412424554', '2021-09-05 21:27:11'),
(18, 'arif', 'onion', 23, 12, '534534524342', '2021-09-06 23:43:11'),
(19, 'farmer', 'xyz', 12, 12, '12345678', '2021-09-06 23:44:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
