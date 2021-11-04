-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:53 AM
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
-- Database: `tsf-bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `balance` varchar(200) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `email`, `balance`, `reg_time`) VALUES
('Murat Khan', 'murat@gmail.com', '1400', '2021-11-04 08:39:24'),
('Hayat Khan', 'hayat@gmail.com', '3000', '2021-11-03 10:17:31'),
('Prasad Dhobale', 'prasad@gmail.com', '2767', '2021-11-04 07:46:29'),
('Zoya Ogzur', 'zoya@gmail.com', '4800', '2021-11-04 08:39:24'),
('Zeenat Quazi', 'Zeenat@gmail.com', '2000', '2021-11-03 10:17:31'),
('Snehal Dahake', 'snehal@gmail.com', '4233', '2021-11-04 07:46:29'),
('Sahil Shaik', 'sahil@gmail.com', '1000', '2021-11-03 10:19:17'),
('Lubna Khan', 'lubna@gmail.com', '1500', '2021-11-04 08:46:17'),
('Pankaj Desai', 'pankaj@gmail.com', '2000', '2021-11-04 08:46:17'),
('Sajis Shaikh', 'sajis@gmail.com', '5000', '2021-11-03 10:19:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
