-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 04:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `quantity1` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `bill_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `drug_id`, `patient_id`, `doctor_id`, `quantity1`, `amount`, `total`, `transaction_id`, `bill_date`) VALUES
(1, 2, 1, 0, 2, 200, 400, 1141257005, '2019-09-08 03:26:20'),
(2, 2, 1, 0, 3, 200, 600, 1141257005, '2019-09-08 03:26:42'),
(3, 1, 1, 0, 2, 1500, 3000, 1141257005, '2019-09-08 03:26:49'),
(4, 1, 2, 0, 4, 1500, 6000, 1629645065, '2019-09-08 16:26:14'),
(5, 2, 2, 0, 4, 200, 800, 1629645065, '2019-09-08 16:26:22'),
(6, 1, 3, 0, 2, 1500, 3000, 1762362670, '2019-10-15 05:04:23'),
(7, 2, 3, 0, 2, 200, 400, 1762362670, '2019-10-15 05:04:37'),
(8, 1, 3, 0, 3, 1500, 4500, 1428483614, '2021-04-08 23:17:25'),
(9, 2, 3, 0, 4, 200, 800, 1428483614, '2021-04-08 23:17:43'),
(10, 1, 1, 0, 1, 1500, 1500, 1294958111, '2021-04-17 13:11:18'),
(11, 1, 1, 0, 4, 1500, 6000, 1294958111, '2021-04-17 13:12:07'),
(12, 5, 2, 0, 2, 200, 400, 1946665486, '2021-04-24 14:33:06'),
(13, 1, 2, 0, 2, 1500, 3000, 1946665486, '2021-04-24 14:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `drug_name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `brand`, `quantity`, `amount`, `date`) VALUES
(1, 'Panadol', 'Emzor', 482, 1500, '2019-09-07 21:48:15'),
(2, 'Chloro-queen', 'Emzor', 35, 200, '2019-09-07 22:05:11'),
(3, 'Septrim Tablet', 'Emzor', 150, 200, '2021-04-24 13:40:32'),
(4, 'Bed', 'Hospital', 40, 2500, '2021-04-24 14:27:51'),
(5, 'Diclofenac Tablet', 'Medico', 148, 200, '2021-04-24 14:29:39'),
(6, 'Diclofenac Injection', 'Medico', 80, 300, '2021-04-24 14:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `picture`, `address`, `gender`, `blood_group`, `phone`, `date_reg`) VALUES
(1, 'Adam Musa Yau', '2019-09-07', 'IMG_20181219_121954_679.jpg', 'No6, Tudun Wada Kaduna', 'Male', 'A+', '08063017470', '2019-09-07 20:52:53'),
(2, 'Zannah Laisu', '2002-09-29', 'icon.png', 'No L7 Unguwan sunusi', 'Male', 'A+', '08167748758', '2019-09-07 21:00:03'),
(3, 'Khadijah Abdulrahman', '2019-09-07', 'IMG-20190413-WA0006.jpg', 'No6, Tudun Wada Kaduna', 'Female', 'A+', '08063017470', '2019-09-07 21:31:35'),
(4, 'Adam Musa Yau', '2021-04-10', '1500x500.jpg', 'No 6, Nasara Road by Abuja Road Rigasa', 'Male', 'A+', '08063017470', '2021-04-09 06:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`) VALUES
(2, 'Adam Musa Yau', 'naira', '12345', 'Screenshot_20180507-104929.png'),
(6, 'Sani Abdullahi', 'santos', '12345', '20190321_084625.jpg'),
(7, 'Administrator', 'admin', 'admin', '1500x500.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
