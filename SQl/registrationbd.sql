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
-- Database: `registrationbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `NAME` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `PHONUMBER` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `USERID` varchar(50) DEFAULT NULL,
  `PASS` varchar(50) DEFAULT NULL,
  `CONFIRMPASS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NAME`, `ADDRESS`, `PHONUMBER`, `EMAIL`, `USERID`, `PASS`, `CONFIRMPASS`) VALUES
('Dipta saha', '36,korbanigonj,chittagong', '01881401919', 'sdipta121@gmail.com', '200-12312', 'AsC@12432', 'AsC@12432');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(6) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Employetype` varchar(20) DEFAULT NULL,
  `Salary` varchar(30) NOT NULL,
  `Phone_number` varchar(30) NOT NULL,
  `User_id` varchar(30) NOT NULL,
  `cPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Username`, `Address`, `Email`, `Employetype`, `Salary`, `Phone_number`, `User_id`, `cPassword`) VALUES
(8, 'Dipta Saha', 'Nikonjo-2,Road-18,Dhaka,Bangladesh', 'sahadipta10@gmail.com', 'Staff', '12456', '01711170323', '110-12134', 'Asdf@1234'),
(9, 'Rony Saha', '132,korbanigonj,chittagong Bangladesh', 'ronysaha20@gmail.com', 'Delivery man', '12456', '01812345213', '100-10132', 'Sas@1234'),
(13, 'Jony saha', 'Enter your current Address', 'sahajony30@gmail.com', 'Staff', '250000', '01923456778', '110-10134', 'As@12345'),
(14, 'Sadik Hasan', 'Enter your current Address', 'shadik123@gmail.com', 'Delivery man', '23000', '01234456771', '100-10136', 'Ass@12345');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `id` int(6) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_number` varchar(20) DEFAULT NULL,
  `User_id` varchar(20) DEFAULT NULL,
  `cPassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`id`, `Username`, `Address`, `Email`, `Phone_number`, `User_id`, `cPassword`) VALUES
(1, 'Dipta Saha', '35,korvanigong, Chittagong Bangladesh', 'sahadipta10@gmail.com', '01711170323', '111-14585', 'Asd@12345'),
(8, 'Dipta Saha', '32,korbanigonj,chittagong Bangladesh', 'sahadipta1013@gmail.com', '01922939808', '111-10132', 'sAd123@245'),
(19, 'Rony Saha', 'Nikonjo-2,road-18,dhaka', 'ronysaha120@gmail.com', '01711170323', '111-10134', 'ASsas@1234'),
(20, 'Sadik Hasan', 'Nikonjo-1,road-18,dhaka', 'sadik1010@gmail.com', '01923456778', '111-10136', 'ASsas@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
