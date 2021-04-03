-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2021 at 02:04 PM
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
(1, 'stephan', 'stephan', 'stephan@admin.com', 'SuperAdmin', '', '', '', '', '', '', '', '', 'processed.jpeg', '', 'admin@123', NULL, '2021-03-27 17:07:36', '1', NULL),
(3, 'Kitra', 'Santiago', 'daxiwur@mailinator.com', 'Employee', '', '', '', '', '', '', '', '', '', '', 'admin', NULL, '2021-03-27 17:31:00', '2', NULL),
(5, 'Gary', 'Washington', 'ammar.khan@useo.ae', 'Customer', 'CodeAK', '859 New Boulevard', 'Irure dolores consec', 'Tempor dolores et no', 'Quia amet in laboru', '34789', 'Voluptatem veniam q', 'de', 'kashirkhan-favicon.png', '', 'admin', NULL, '2021-03-27 19:33:22', '2', NULL),
(6, 'Declan', 'Beasley', 'nenymit@mailinator.com', 'Employee', 'Donovan Cote Traders', 'Iusto similique et u', 'Esse adipisci rerum', 'Mollitia quia qui ad', 'Cumque et porro prov', '70765', 'Nostrum ad eiusmod a', 'en', '', '', 'Pa$$w0rd!', NULL, '2021-03-27 20:11:08', '2', NULL),
(7, 'Gisela', 'Mcdonald', 'megiq@mailinator.com', 'Customer', 'Skinner Castaneda Plc', 'Possimus quis paria', 'Minim commodi quasi ', 'Ad non quibusdam ut ', 'Expedita unde corrup', '72359', 'Voluptas in non comm', 'en', 'Untitled.png', '', 'Pa$$w0rd!', NULL, '2021-03-27 20:45:11', '1', NULL),
(8, 'Shariqq', 'Khan', 'shariq@admin.com', 'Admin', 'CodeAK', '859 New Boulevard', 'Irure dolores consec', 'Tempor dolores et no', 'Quia amet in laboru', '34789', 'Pakistan', '', '', '', 'admin@123', NULL, '2021-03-27 20:56:19', '1', NULL),
(9, 'Kashir', 'Khan', 'kashir@admin.com', 'Customer', 'Customer 1', '573 North Green Oak Road', 'Omnis sit saepe mole', 'Karachi', 'Officiis voluptas do', '54550', 'India', 'en', '1D3426D6-5D00-412C-B207-328F49081D32.JPEG', '', 'admin@123', NULL, '2021-03-27 21:05:41', '1', NULL),
(11, 'Axel', 'Rowland', 'punifokej@mailinator.com', 'Customer', 'Rosario and Velazquez Trading', 'Blanditiis tempore ', 'Rerum ut libero ut h', 'Eiusmod fuga Tempor', 'Aut consequatur Ass', '64484', 'Quia voluptatem qui', 'en', '', '', 'Pa$$w0rd!', NULL, '2021-03-29 17:36:51', '8', 1),
(12, 'Katty', 'Steve', 'katty@gmail.com', 'Employee', '', '', '', '', '', '', '', '', '', '', 'admin', NULL, '2021-03-29 17:57:09', '5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_user`
--
ALTER TABLE `customer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
