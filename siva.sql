-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 09:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active  ,  0=inactive',
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `title_id` int(11) NOT NULL,
  `dept_no` int(11) NOT NULL,
  `subject_aim` text NOT NULL,
  `implemented_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `created_on`, `updated_on`) VALUES
(1, 'Admin', 'admin@gmail.com', 'MTIzNDU2', '2018-12-19 09:44:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `created_on`, `updated_on`, `status`) VALUES
(1, 'Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Children', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Education', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Church', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'SEA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'Youth', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'Releif', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'DCF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept_emp`
--

CREATE TABLE `dept_emp` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `pan_number` varchar(20) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(40) NOT NULL,
  `ifsc_Code` varchar(15) NOT NULL,
  `bank_Name` varchar(100) NOT NULL,
  `highest_qualification` varchar(45) NOT NULL,
  `job_description` varchar(400) NOT NULL,
  `place_appointment` varchar(100) NOT NULL,
  `reporting_to` varchar(100) NOT NULL,
  `dev_qualification` varchar(250) NOT NULL,
  `disc_profile` varchar(300) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `Job_title` varchar(100) NOT NULL,
  `department` int(11) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `resume` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `email`, `password`, `gender`, `hire_date`, `father_name`, `aadhar`, `pan_number`, `account_name`, `account_number`, `ifsc_Code`, `bank_Name`, `highest_qualification`, `job_description`, `place_appointment`, `reporting_to`, `dev_qualification`, `disc_profile`, `role_id`, `status`, `created_on`, `Job_title`, `department`, `account_type`, `resume`) VALUES
(1, '0000-00-00', 'shankar', 'rao', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 1, '2019-01-03 18:32:50', '', 0, '', ''),
(2, '0000-00-00', 'sai', 'kumar', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-01-03 18:34:29', '', 0, '', ''),
(3, '0000-00-00', 'ravi', 'kumar', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 1, '2019-01-03 18:35:00', '', 0, '', ''),
(4, '0000-00-00', 'siva', 'kumar', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 1, '2019-01-03 18:35:08', '', 0, '', ''),
(5, '0000-00-00', 'anil', 'kumar', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-03 18:35:21', '', 0, '', ''),
(6, '1970-01-01', 'teset', '', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2019-01-05 13:33:47', '', 0, '', ''),
(7, '2019-01-16', 'shankar', 'kumar', 'd@gmail.com', '12345', 'M', '0000-00-00', 'simhachalam', 2147483647, '65345', 'sureshkumar', '63456456454', '4345dfd', 'statebank', 'BTECH', 'tfdgsfgsdfds', 'visakhapatnam', 'persong', 'extra qulification', '', 0, 1, '2019-01-05 13:39:10', '', 0, '', ''),
(8, '1970-01-01', 'dfsad', '', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 1, '2019-01-05 15:22:22', '', 0, '', ''),
(9, '2019-01-23', 'rakesh', 'kumar', 'rakes@gmail.com', '12345', 'M', '0000-00-00', 'simhachalam', 2147483647, '65345', 'sureshkumar', '63456456454', '4345dfd', 'statebank', 'be', 'high_qualhigh_qualhigh_qual', 'visakhapatnam', 'persong', 'extra qulification', '', 0, 1, '2019-01-05 15:25:26', 'job-title', 3, 'accounttype', ''),
(10, '1970-01-01', 'fasd', '', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-01-05 15:26:49', '', 0, '', ''),
(11, '1970-01-01', 'ravi', '', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 2, 1, '2019-01-05 15:57:01', '', 0, '', ''),
(12, '1970-01-01', 'shankar', '', '', '', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '1a1cdbb734b3a37e96e1ba7ff5d28385.jpg', 2, 1, '2019-01-05 16:06:24', '', 0, '', 'b4c49bea3a7b83ba910814e313e64c02.txt'),
(13, '2019-01-09', 'raju', 'kumar', 'suresh@gmail.com', '6666666', 'M', '0000-00-00', 'simhachalam', 2147483647, 'dfasdfas', 'sureshkumar', '63456456454', '4345dfd', 'statebank', 'be', 'fdsadfsd', 'visakhapatnam', 'persong', 'extra qulification', '9a09c1b92a5ae47f82525a1631af623a.jpg', 3, 1, '2019-01-05 16:28:22', 'job-title', 2, 'accounttype', '37af2a10410c7a211310c29f0284332b.txt');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'SHANKAR@111', 0, 0, 0, NULL, '2017-10-12 13:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `area` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location`, `area`, `status`, `created_on`, `updated_on`) VALUES
(8, '', 'Iejaa', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Tanagala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Kottapalli', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', '\r\nBalgera', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', 'santhinagar', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', 'Rajoli', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', 'Itikala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 'Mudumala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', 'Alumpur', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', 'Yarravalli', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '', 'Panchalingalaa', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '', 'Gadwal', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '', 'Tharur', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '', 'Amaravaee', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '', 'Namdeenni', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '', 'Nettampadu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', 'Aathama kuru', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', 'Kottakota', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `participant_id` int(11) NOT NULL,
  `participant_type` int(11) NOT NULL,
  `men` int(11) NOT NULL,
  `women` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `from_time` varchar(5) NOT NULL,
  `to_time` varchar(5) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `desccription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_staff`
--

CREATE TABLE `program_staff` (
  `program_staff_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `program_admin` int(11) NOT NULL,
  `finance_admin` int(11) NOT NULL,
  `report_staff1` int(11) NOT NULL,
  `report_staff2` int(11) NOT NULL,
  `photography` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource_staff`
--

CREATE TABLE `resource_staff` (
  `resource_staff_id` int(11) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `program_staff_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`) VALUES
(1, 'ceo'),
(2, 'admin'),
(3, 'accounts_head'),
(4, 'dept_head'),
(5, 'employee'),
(6, 'volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

CREATE TABLE `teaching_staff` (
  `teaching_id` int(11) NOT NULL,
  `program_staff_id` int(11) NOT NULL,
  `teaching` varchar(255) NOT NULL,
  `created_on` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `title`, `created_on`, `updated_on`, `dept_id`) VALUES
(1, 'Agriculture.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(2, 'Biological and Biomedical Sciences', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(3, 'children_program 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(4, 'children_program 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `emp_no` (`emp_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`participant_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `program_staff`
--
ALTER TABLE `program_staff`
  ADD PRIMARY KEY (`program_staff_id`);

--
-- Indexes for table `resource_staff`
--
ALTER TABLE `resource_staff`
  ADD PRIMARY KEY (`resource_staff_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`emp_no`,`from_date`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
  ADD PRIMARY KEY (`teaching_id`),
  ADD KEY `program_staff_id` (`program_staff_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `program_staff`
--
ALTER TABLE `program_staff`
  MODIFY `program_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource_staff`
--
ALTER TABLE `resource_staff`
  MODIFY `resource_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
  MODIFY `teaching_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
  ADD CONSTRAINT `teaching_staff_ibfk_1` FOREIGN KEY (`program_staff_id`) REFERENCES `program_staff` (`program_staff_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
