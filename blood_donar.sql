-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 09:19 AM
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
  `Phone_No` varchar(13) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar_registration`
--

INSERT INTO `donar_registration` (`D_id`, `Fname`, `Lname`, `Street_Address`, `City`, `State`, `Pincode`, `Blood_Grp`, `Phone_No`, `Email`, `Date`, `Time`) VALUES
(11, 'Deepak', 'Lotlikar', 'H No. 273 Near govt high school, New Vaddem', 'Fatorda', 'Goa', 403702, 'B+', '8390029029', 'deepaklotlikar12@gmail.com', '2021-05-25', '00:32:42'),
(12, 'Prashant', 'Palyekar', 'Flat No. 399 Gajanan Apartment Near Panaji Bus Sta', 'Panaji', 'Goa', 403601, 'B-', '+919881558410', 'prashantpalyekar92@gmail.com', '2021-05-25', '00:39:07'),
(13, 'Sujeet', 'Singh', 'Flat No. 102 Mahalaxmi Apartment Near Panaji Marke', 'Panaji', 'Goa', 403602, 'B-', '+919545065430', 'sujeetsingh10@yahoo.com', '2021-05-25', '00:44:41'),
(14, 'Tanay', 'Candolkar', 'H No. 524 Vaddy', 'Candolim', 'Goa', 403401, 'B-', '+917507605390', 'tanycandolkar2@gmail.com', '2021-05-25', '01:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `First Name` text DEFAULT NULL,
  `Last Name` text DEFAULT NULL,
  `Phone Number` bigint(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `First Name`, `Last Name`, `Phone Number`, `username`, `email`, `password`, `token`, `status`) VALUES
(38, 'Nikhil', 'Pinto', 9876543210, 'nikhil14', 'bhatshubham53@gmail.com', '$2y$10$dk9G8fHlo.0QlWKeAw2vjuwbckWgNeqSuGWLNAGhLSjhzS0BPMGgO', 'f402a57a6693d721e7b2e99654de10', 'active'),
(39, 'Allen', 'Andra', 9604037883, 'allen02', 'andradeallenezi@gmail.com', '$2y$10$Rbk88495.RuSgkbLkyAs6.CK0NAMz3ppmRRJAhzXO5VEZkIAcMRzS', '1e34e10eb3a97ff3ba9f07387de012', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar_registration`
--
ALTER TABLE `donar_registration`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar_registration`
--
ALTER TABLE `donar_registration`
  MODIFY `D_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
