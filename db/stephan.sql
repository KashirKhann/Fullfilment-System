-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2021 at 04:35 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arabia39_stephan`
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
(1, 'Stephan', 'Raid', 'stephan@admin.com', 'SuperAdmin', '', '', '', '', '', '', '', '', 'pp.jpg', '', 'admin@123', NULL, '2021-03-27 17:07:36', '1', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_session`
--
ALTER TABLE `log_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
