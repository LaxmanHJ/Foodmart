-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 05:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `fimage` varchar(20) DEFAULT NULL,
  `fprice` varchar(20) DEFAULT NULL,
  `ratings` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `fname`, `fimage`, `fprice`, `ratings`) VALUES
(11, 'Apple', 'fruits/apple.png', '200', 0),
(12, 'Banana', 'fruits/banana.jpg', '50', 0),
(13, 'Berries', 'fruits/berries.jpg', '80', 0),
(14, 'Pineapple', 'fruits/pineapple.jpg', '100', 0),
(15, 'Papaya', 'fruits/papaya.jpg', '60', 0),
(16, 'Orange', 'fruits/orange.jpg', '150', 0),
(17, 'Grapes', 'fruits/grapes.jpg', '70', 0),
(18, 'Mango', 'fruits/mango.jpg', '220', 0),
(19, 'Watermellon', 'fruits/mellon.jpg', '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `pagename` varchar(20) NOT NULL,
  `ratings` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`, `pagename`, `ratings`) VALUES
(1, 'Tomato', 'veg/tomato.jpg', 55, 'vegetablespage.php', 4),
(2, 'WaterMellon', 'fruits/mellon.jpg', 15, 'fruitspage.php', 1),
(3, 'Onion', 'veg/onion.jpg', 55, 'vegetablespage.php', 0),
(4, 'Banana', 'fruits/banana.jpg', 15, 'fruitspage.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneno` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `fname`, `lname`, `email`, `phoneno`, `address`, `password`) VALUES
(1, 'a', 'c', 'ac@gmail.com', '5645789222', 'ggg', 'a'),
(14, '1', 'n', '124tempemail124@gmail.com', '546465161616', 'sss', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(11) NOT NULL,
  `vname` varchar(20) DEFAULT NULL,
  `vimage` varchar(20) DEFAULT NULL,
  `vprice` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `vname`, `vimage`, `vprice`) VALUES
(21, 'Capsicum', 'veg/capsicum.jpg', '40'),
(22, 'Lady\'s Finger', 'veg/ladysfinger.jpg', '25'),
(23, 'RedChilli', 'veg/redchilli.jpg', '30'),
(24, 'Beans', 'veg/beans.jpg', '20'),
(25, 'Carrot', 'veg/carrot.jpg', '35'),
(26, 'Cauliflower', 'veg/cauliflower.jpg', '25'),
(27, 'Garlic', 'veg/garlic.jpg', '15'),
(28, 'Potato', 'veg/potato.jpg', '40'),
(29, 'Pumpkin', 'veg/pumpkin.jpg', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
