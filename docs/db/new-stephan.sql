-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 10:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stephan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_user`
--

CREATE TABLE `customer_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street1` varchar(255) DEFAULT NULL,
  `street2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `profile_avatar` varchar(255) NOT NULL,
  `profile_avatar_remove` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `recovery_ref` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `which_admin` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_user`
--

INSERT INTO `customer_user` (`id`, `firstname`, `lastname`, `email`, `user_group`, `company_name`, `street1`, `street2`, `city`, `state`, `zip_code`, `country`, `language`, `profile_avatar`, `profile_avatar_remove`, `password`, `recovery_ref`, `date_added`, `which_admin`, `created_by`) VALUES
(1, 'stephan', 'Raid', 'stephan@admin.com', 'SuperAdmin', '', '', '', '', '', '', '', '', 'processed.jpeg', '', 'admin@123', NULL, '2021-03-27 17:07:36', '1', NULL),
(2, 'admin', 'admin', 'admin@admin.com', 'Admin', 'Abc', 'Abc', 'Abc', 'Abc', 'Abc', '12345', 'Abc', 'en', '', '', 'admin', NULL, '2021-04-03 18:46:06', '1', 1),
(4, 'Boyd', 'Fahey', 'Otto46@hotmail.com', 'Customer', 'Abc', '097 Kilback Crossroad', 'Abc', 'Ansleybury', 'Florida', '73399', 'Switzerland', 'de', '', '', 'admin', NULL, '2021-04-03 18:47:23', '2', 1),
(5, 'Yasir', 'Shams', 'yasir@admin.com', 'Admin', 'USEO', 'Abcd1', 'Abcd2', 'Karachi', 'Sindh', '74000', 'Pakistan', 'en', '', '', 'admin@123', NULL, '2021-04-04 13:18:00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_session`
--

CREATE TABLE `log_session` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_session`
--

INSERT INTO `log_session` (`id`, `firstname`, `email`, `role`, `user_id`, `created_on`, `type`) VALUES
(1, 'stephan', 'stephan@admin.com', 'SuperAdmin', 1, '2021-04-04 01:38:50', 'login'),
(2, 'stephan', 'stephan@admin.com', 'SuperAdmin', 1, '2021-04-04 01:39:01', 'logout'),
(3, 'stephan', 'stephan@admin.com', 'SuperAdmin', 1, '2021-04-04 01:39:25', 'login'),
(4, 'stephan', 'stephan@admin.com', 'SuperAdmin', 1, '2021-04-04 11:39:49', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `which_admin` varchar(255) NOT NULL,
  `created_by` int(111) NOT NULL,
  `customer_user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `email`, `which_admin`, `created_by`, `customer_user_id`, `type`, `created_on`) VALUES
(1, 'socewer@mailinator.com', '7', 1, 13, 'add', '2021-04-04 01:48:26'),
(2, 'socewer@mailinator.com', '', 1, 13, 'update', '2021-04-04 01:48:49'),
(3, 'ammar.khan@useo.ae', '1', 1, 14, 'add', '2021-04-04 01:50:16'),
(4, 'ammar.khan@useo.ae', '', 1, 14, 'update', '2021-04-04 01:50:47'),
(5, 'Otto46@hotmail.com', '', 1, 4, 'update', '2021-04-04 11:48:47'),
(6, 'yasir@admin.com', '1', 1, 5, 'add', '2021-04-04 13:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_session`
--
ALTER TABLE `log_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_user`
--
ALTER TABLE `customer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_session`
--
ALTER TABLE `log_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
