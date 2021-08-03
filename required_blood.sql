-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 04:15 PM
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
-- Table structure for table `required_blood`
--

CREATE TABLE `required_blood` (
  `r_id` int(10) NOT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `d_name` varchar(30) DEFAULT NULL,
  `blood_grp` varchar(4) DEFAULT NULL,
  `required_date` date DEFAULT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_gender` varchar(6) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL,
  `contact_person` varchar(30) DEFAULT NULL,
  `contact_mobile` bigint(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `token` varchar(30) DEFAULT NULL,
  `image` longblob NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `required_blood`
--

INSERT INTO `required_blood` (`r_id`, `hospital_name`, `d_name`, `blood_grp`, `required_date`, `p_name`, `p_gender`, `reason`, `contact_person`, `contact_mobile`, `city`, `age`, `token`, `image`, `date`, `time`) VALUES
(2, 'Pai Hospital', 'Vaishali', 'A+', '2021-06-24', 'Prasad Laal', 'Male', 'Blood Cancer', 'Brother', 9876543210, 'Mormugao', 50, '9677c1e2b22756f8108def05d73b8e', '', '2021-06-20', '01:05:27'),
(3, 'GMC', 'Nirmal', 'A2B-', '2021-06-23', 'Vishvajith', 'Male', 'Other', 'Friend', 8887839934, 'Guirim', 59, 'f2a356413b2787b8776821428b5559', '', '2021-06-20', '02:10:28'),
(4, 'Pai Hospital', 'Dr Niranjan', 'O+', '2021-07-19', 'xyz', 'male', 'Blood Lose', 'uvw', 9786446468, 'Mormugao', 76, 'a833c8a41033decdea9ee47f61e6d5', '', '2021-07-11', '21:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `required_blood`
--
ALTER TABLE `required_blood`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `required_blood`
--
ALTER TABLE `required_blood`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
