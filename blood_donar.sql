-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 07:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donar`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar_registration`
--

CREATE TABLE `donar_registration` (
  `D_id` int(10) NOT NULL,
  `Fname` text DEFAULT NULL,
  `Lname` text DEFAULT NULL,
  `Street_Address` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(10) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL,
  `Blood_Grp` varchar(4) DEFAULT NULL,
  `Phone_No` int(13) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar_registration`
--

INSERT INTO `donar_registration` (`D_id`, `Fname`, `Lname`, `Street_Address`, `City`, `State`, `Pincode`, `Blood_Grp`, `Phone_No`, `Email`, `Date`) VALUES
(1, 'Aniket', 'Sardesai', 'H.No 273 Neha Enterprices', 'Vasco', 'Goa', 403802, 'AB+', 2147483647, 'aniketsardesai44@gmail.com', '0000-00-00'),
(2, 'Ajit', 'Sardesai', 'H.No 273 Neha Enterprices', 'Vasco', 'Goa', 403802, 'A+', 860074820, 'ajitsardesai22@gmail.com', '0000-00-00'),
(3, 'Nikhil', 'Pinto', 'H.no 244 Salcett Nuvem', 'Margao', 'Goa', 403705, 'AB-', 880551510, 'nikhilpinto112@gmail.com', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar_registration`
--
ALTER TABLE `donar_registration`
  ADD PRIMARY KEY (`D_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar_registration`
--
ALTER TABLE `donar_registration`
  MODIFY `D_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
