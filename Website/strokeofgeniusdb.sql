-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 04:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strokeofgeniusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountinfo`
--

CREATE TABLE `accountinfo` (
  `userid` int(255) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accountinfo`
--

INSERT INTO `accountinfo` (`userid`, `fname`, `lname`, `email`, `address`) VALUES
(1, 'binyomin', 'morgulis', 'bzm@gmail.com', '7601 147th street'),
(2, 'william', 'feller', 'wfeller@gmail.com', '4321 45th ave');

-- --------------------------------------------------------

--
-- Table structure for table `authorizedusers`
--

CREATE TABLE `authorizedusers` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authorizedusers`
--

INSERT INTO `authorizedusers` (`userid`, `username`, `password`) VALUES
('1', 'binyomin', 'morgulis'),
('2', 'william', 'feller'),
('', 'bzm', 'bzm'),
('', 'admin', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(255) NOT NULL,
  `items` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `paintings` varchar(30) NOT NULL,
  `sculptures` varchar(30) NOT NULL,
  `stonetiles` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sortby`
--

CREATE TABLE `sortby` (
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountinfo`
--
ALTER TABLE `accountinfo`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
