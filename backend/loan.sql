-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 06:43 PM
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
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usd` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usd`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advance_loan`
--

CREATE TABLE `advance_loan` (
  `id` int(11) NOT NULL,
  `al_fname` varchar(255) NOT NULL,
  `al_email` varchar(255) NOT NULL,
  `al_pwd` varchar(20) NOT NULL,
  `al_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intermediate_loan`
--

CREATE TABLE `intermediate_loan` (
  `id` int(11) NOT NULL,
  `il_fname` varchar(255) NOT NULL,
  `il_email` varchar(255) NOT NULL,
  `il_pwd` varchar(20) NOT NULL,
  `il_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `starter_loan`
--

CREATE TABLE `starter_loan` (
  `id` int(11) NOT NULL,
  `sl_fname` varchar(255) NOT NULL,
  `sl_email` varchar(255) NOT NULL,
  `sl_pwd` varchar(20) NOT NULL,
  `sl_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `cpwd` varchar(20) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `biz_state` varchar(255) NOT NULL,
  `st_of_residence` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `have_you_rec` varchar(255) NOT NULL,
  `hear_abt_us` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `biz_name` varchar(255) NOT NULL,
  `biz_location` varchar(255) NOT NULL,
  `biz_age` varchar(255) NOT NULL,
  `iz_biz_reg` varchar(255) NOT NULL,
  `gen_revenue` varchar(255) NOT NULL,
  `have_partner` varchar(255) NOT NULL,
  `partner_cont` varchar(255) NOT NULL,
  `biz_sector` varchar(255) NOT NULL,
  `biz_descrp` varchar(255) NOT NULL,
  `biz_impact` varchar(255) NOT NULL,
  `challenge` varchar(255) NOT NULL,
  `reason_for_ent` varchar(255) NOT NULL,
  `grantuse` varchar(255) NOT NULL,
  `agree_mentorship` varchar(255) NOT NULL,
  `sgd_goals` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `time_reg` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `oname`, `email`, `phone`, `gender`, `pwd`, `cpwd`, `dob`, `biz_state`, `st_of_residence`, `qualification`, `have_you_rec`, `hear_abt_us`, `disability`, `biz_name`, `biz_location`, `biz_age`, `iz_biz_reg`, `gen_revenue`, `have_partner`, `partner_cont`, `biz_sector`, `biz_descrp`, `biz_impact`, `challenge`, `reason_for_ent`, `grantuse`, `agree_mentorship`, `sgd_goals`, `verify_key`, `time_reg`) VALUES
(0, 'jggkrmk', 'vSDhjhhfsdkkj', 'r;lrgkfvnjf', 'admin@gmail.com', '987654567', 'male', '12345', '12345', '2022-08-20', 'ABUJA FCT', 'ABUJA FCT', 'Fslc', 'Yes', 'Through friends and family', 'Yes', 'kllkdnkjv nsjkck ', 'c,vfka gufdc b ', '0-1', 'yes', 'yes', 'yes', '1-5', 'no', 'c,vfka gufdc b ', 'c,vfka gufdc b ', 'c,vfka gufdc b ', 'c,vfka gufdc b ', 'c,vfka gufdc b ', 'yes', 'No poverty', '', '2022-08-29 16:08:04.827700'),
(0, 'grace', 'chukwu', 'iajk', 'admin@h.com', '3343434', 'male', '12345', '12345', '2022-08-25', 'ABUJA FCT', 'ABUJA FCT', 'Fslc', 'Yes', 'Through friends and family', 'Yes', 'xzkjkkxlxx', 'xzbxkxkzjx', '0-1', 'yes', 'yes', 'yes', '1-5', 'no', '$sql_run', '$sql_run', '$sql_run', '$sql_run', 'jjsdkhsdj', 'yes', 'No poverty', '', '2022-08-29 16:20:07.562993');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
