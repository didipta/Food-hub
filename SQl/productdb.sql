-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 03:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(15) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` varchar(25) NOT NULL,
  `product_img` varchar(100) DEFAULT NULL,
  `product_type` varchar(20) DEFAULT NULL,
  `product_status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_img`, `product_type`, `product_status`) VALUES
(15, 'French Fries', '90', 'img/friedfrenchfoodmenu.jpg', 'SNACK', 'on'),
(21, 'Special Tea', '50', 'img/teafoodmenu.jpg', 'BREAKFAST', 'on'),
(22, 'Chicken Dum', '340', 'img/chickenbiryanifoodmenu.jpg', 'LUNCH', 'on'),
(23, 'Chicken Pizza', '880', 'img/Pizzafoodmenu.jpg', 'POPULAR', 'on'),
(24, 'Chicken Fries', '299', 'img/chickenfriedfoodmenu.jpg', 'SNACK', 'on'),
(26, 'Chicken Momo', '450', 'img/chicken Momo.jpg', 'SNACK', 'on'),
(27, 'Vegetable kacchi', '230', 'img/Vegetablekacchifoodmenu.jpg', 'LUNCH', 'on'),
(48, 'Chicken Shawarma', '180', 'img/shawarmafoodmenu.jpg', 'SNACK', 'on'),
(49, 'Special Samosa', '25', 'img/samosafoodmenu.jpg', 'BREAKFAST', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `delimanid` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `useraddress` varchar(100) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `userphone` varchar(30) NOT NULL,
  `orderid` varchar(30) NOT NULL,
  `Productname` varchar(40) DEFAULT NULL,
  `Statues` varchar(60) DEFAULT NULL,
  `Qantity` varchar(30) NOT NULL,
  `proprice` varchar(30) NOT NULL,
  `toprice` varchar(30) NOT NULL,
  `paymenttype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `username`, `delimanid`, `userid`, `useraddress`, `useremail`, `userphone`, `orderid`, `Productname`, `Statues`, `Qantity`, `proprice`, `toprice`, `paymenttype`) VALUES
(3, 'Dipta Saha', '100-10136', '111-14585', '35,korvanigong, Chittagong Bangladesh', 'sahadipta10@gmail.com', '01711170323', 'FOHD#1235445', 'Chicken Pizza', 'Your Order is Processing', '2', '880', '1805', 'Bkash'),
(4, 'Dipta Saha', '100-10132', '111-14585', '35,korvanigong, Chittagong Bangladesh', 'sahadipta10@gmail.com', '01711170323', 'FOHD#1235446', 'Chicken Shawarma', 'Your Order is on the way', '7', '180', '1305', 'Bkash'),
(5, 'Dipta Saha', '100-10136', '111-14585', '35,korvanigong, Chittagong Bangladesh', 'sahadipta10@gmail.com', '01711170323', 'FOHD#1235447', 'Special Samosa', 'Your Order is Processing', '9', '25', '270', 'Card'),
(6, 'Dipta Saha', '100-10132', '111-14585', '35,korvanigong, Chittagong Bangladesh', 'sahadipta10@gmail.com', '01711170323', 'FOHD#1235448', 'Chicken Pizza', 'You received the order already', '3', '880', '2685', 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
