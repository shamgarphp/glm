-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 03:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

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
-- Table structure for table `bank_list`
--

CREATE TABLE `bank_list` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_list`
--

INSERT INTO `bank_list` (`bank_id`, `bank_name`) VALUES
(1, 'Allahabad Bank'),
(2, 'Andhra Bank'),
(3, 'Axis Bank'),
(4, 'Bank of Bahrain and Kuwait'),
(5, 'Bank of Baroda - Corporate Banking'),
(6, 'Bank of Baroda - Retail Banking'),
(7, 'Bank of India'),
(8, 'Bank of Maharashtra'),
(9, 'Canara Bank'),
(10, ''),
(11, 'Central Bank of India'),
(12, 'City Union Bank'),
(13, ''),
(14, 'Corporation Bank\r\n'),
(15, ''),
(16, 'Deutsche Bank'),
(17, 'Development Credit Bank'),
(18, 'Dhanlaxmi Bank'),
(19, 'Federal Bank'),
(20, 'ICICI Bank\r\n'),
(21, 'IDBI Bank\r\n'),
(22, 'Indian Bank'),
(23, 'Indian Overseas Bank'),
(24, 'IndusInd Bank'),
(25, 'ING Vysya Bank'),
(26, 'Jammu and Kashmir Bank'),
(27, 'Karnataka Bank Ltd'),
(28, 'Karur Vysya Bank'),
(29, 'Kotak Bank'),
(30, 'Laxmi Vilas Bank'),
(31, 'Oriental Bank of Commerce'),
(32, 'Punjab National Bank - Corporate Banking'),
(33, 'Punjab National Bank - Retail Banking'),
(34, 'Punjab & Sind Bank'),
(35, 'Shamrao Vitthal Co-operative Bank'),
(36, 'South Indian Bank'),
(37, 'State Bank of Bikaner & Jaipur'),
(38, 'State Bank of Hyderabad'),
(39, 'State Bank of India'),
(40, 'State Bank of Mysore'),
(41, 'State Bank of Mysore'),
(42, 'State Bank of Patiala'),
(43, 'State Bank of Travancore'),
(44, 'Syndicate Bank'),
(45, 'Tamilnad Mercantile Bank Ltd.'),
(46, 'UCO Bank'),
(47, 'Yes Bank Ltd'),
(48, 'Union Bank of India'),
(49, 'United Bank of India'),
(50, 'Vijaya Bank');

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
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `finance_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`finance_id`, `program_id`, `created_on`, `status`) VALUES
(1, 12, '2019-01-07 18:21:26', 1),
(2, 12, '2019-01-07 18:22:30', 1);

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
(1, 0, 'Goodlife@&121%', 0, 0, 0, NULL, '2017-10-12 13:34:33');

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
(11, '', 'Balgera\r\n', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
  `program_id` int(11) NOT NULL,
  `participant_type` int(11) NOT NULL,
  `participant_name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `men` int(11) NOT NULL,
  `women` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`participant_id`, `program_id`, `participant_type`, `participant_name`, `phone`, `men`, `women`, `child`, `description`, `date`) VALUES
(3, 12, 2, 'rajesh', 543434343, 2, 4, 6, 'something', '0000-00-00'),
(4, 12, 3, 'naresh', 546756, 3, 5, 8, 'something2', '0000-00-00'),
(5, 13, 6, 'yuvi', 2147483647, 39, 88, 11, 'desctiption', '2018-12-01'),
(6, 13, 7, 'dhoni', 545454554, 14, 77, 22, 'desctiption2', '1970-01-01'),
(7, 22, 6, 'yuvi', 2147483647, 39, 88, 11, 'desctiption', '2018-12-01'),
(8, 22, 7, 'dhoni', 545454554, 14, 77, 22, 'desctiption2', '1970-01-01'),
(9, 28, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(10, 28, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(11, 28, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01'),
(12, 29, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(13, 29, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(14, 29, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `participant_type`
--

CREATE TABLE `participant_type` (
  `participant_type_id` int(11) NOT NULL,
  `participant_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_type`
--

INSERT INTO `participant_type` (`participant_type_id`, `participant_type`) VALUES
(1, 'Main leadership team goodlife'),
(2, 'Local pasters'),
(3, 'Church elders'),
(4, 'Parents'),
(5, 'Local political government officers'),
(6, 'General public'),
(7, 'Teachers(Good life)'),
(8, 'Resource Persons'),
(9, 'Auto Drivers');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `location_id` int(11) NOT NULL,
  `program_aim` text NOT NULL,
  `implementd_by` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-active,0=inactive',
  `dept_no` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `approved_rejected` int(11) NOT NULL COMMENT '1 = approve, 0 = rejected',
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_name`, `location_id`, `program_aim`, `implementd_by`, `status`, `dept_no`, `title_id`, `approved_rejected`, `created_on`, `updated_on`) VALUES
(12, '', 2, 'progarm one', 0, 1, 0, 0, 1, '2019-01-07 15:49:49', '2019-01-08 18:30:00'),
(13, '', 3, 'progarm two', 0, 1, 0, 0, 1, '2019-01-07 15:54:26', '2019-01-08 16:38:44'),
(14, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:07:35', '0000-00-00 00:00:00'),
(15, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:08:34', '0000-00-00 00:00:00'),
(16, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:11:12', '0000-00-00 00:00:00'),
(17, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:13:22', '0000-00-00 00:00:00'),
(18, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:13:43', '0000-00-00 00:00:00'),
(19, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:14:02', '0000-00-00 00:00:00'),
(20, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:14:34', '0000-00-00 00:00:00'),
(21, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:15:01', '0000-00-00 00:00:00'),
(22, '', 3, 'progarm two', 0, 0, 0, 0, 0, '2019-01-08 17:18:54', '0000-00-00 00:00:00'),
(23, '', 4, 'progam 3', 0, 0, 0, 0, 0, '2019-01-08 17:33:09', '0000-00-00 00:00:00'),
(24, '', 4, 'progam 3', 0, 0, 0, 0, 0, '2019-01-08 17:35:30', '0000-00-00 00:00:00'),
(25, '', 4, 'progam 3', 0, 0, 0, 0, 0, '2019-01-08 17:36:04', '0000-00-00 00:00:00'),
(26, '', 4, 'progam 5', 0, 0, 0, 0, 0, '2019-01-08 17:36:36', '0000-00-00 00:00:00'),
(27, '', 4, 'progam 6', 0, 0, 0, 0, 0, '2019-01-08 17:38:39', '0000-00-00 00:00:00'),
(28, '', 4, 'progam 7', 0, 0, 0, 0, 0, '2019-01-08 17:39:33', '0000-00-00 00:00:00'),
(29, '', 4, 'progam  9', 0, 0, 0, 0, 0, '2019-01-08 18:57:47', '0000-00-00 00:00:00');

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
-- Table structure for table `program_times`
--

CREATE TABLE `program_times` (
  `program_time_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `from_time` varchar(50) NOT NULL,
  `to_time` varchar(50) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_times`
--

INSERT INTO `program_times` (`program_time_id`, `date`, `from_time`, `to_time`, `program_id`) VALUES
(21, '0000-00-00', '7am', '10am', 12),
(22, '0000-00-00', '3pm', '6pm', 12),
(23, '2018-10-01', '9am', '11am', 13),
(24, '2018-11-01', '2pm', '6pm', 13),
(25, '2019-08-01', '8am', '7am', 22),
(26, '2019-08-01', '8am', '7am', 22),
(27, '2019-09-01', '10am', '11am', 22),
(28, '2019-08-01', '8am', '7am', 23),
(29, '2019-08-01', '8am', '7am', 23),
(30, '2019-09-01', '10am', '11am', 23),
(31, '2019-08-01', '8am', '7am', 26),
(32, '2019-08-01', '8am', '7am', 26),
(33, '2019-09-01', '10am', '11am', 26),
(34, '2019-08-01', '8am', '7am', 27),
(35, '2019-08-01', '8am', '7am', 27),
(36, '2019-09-01', '10am', '11am', 27),
(37, '2019-08-01', '8am', '7am', 28),
(38, '2019-08-01', '8am', '7am', 28),
(39, '2019-09-01', '10am', '11am', 28),
(40, '2019-08-01', '8am', '7am', 29),
(41, '2019-08-01', '8am', '7am', 29),
(42, '2019-09-01', '10am', '11am', 29);

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

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `bank_acno` varchar(50) NOT NULL,
  `bank_ifsc_code` varchar(50) NOT NULL,
  `quation_image` varchar(250) NOT NULL,
  `expenditure_desc` text NOT NULL,
  `finance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `location`, `phone`, `total_amount`, `bank_id`, `payment_type`, `bank_acno`, `bank_ifsc_code`, `quation_image`, `expenditure_desc`, `finance_id`) VALUES
(1, 'saikmar', 'jagadamba', '52345234', '5000', 2, 3, '56345643gffff', 'dfghdfg4545', 'http://localhost/goodlife/uploads/programs/eDRlQctN.jpg', 'expendituredesc', 2),
(2, 'shankar', 'mvp', '54645645', '10000', 5, 3, '434534344', 'dfgsdf35434', 'http://localhost/goodlife/uploads/programs/Bfh7qytz.jpg', 'dfadasds', 2);

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
-- Indexes for table `bank_list`
--
ALTER TABLE `bank_list`
  ADD PRIMARY KEY (`bank_id`);

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
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`finance_id`),
  ADD KEY `program_id` (`program_id`);

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
  ADD KEY `participants_ibfk_1` (`program_id`);

--
-- Indexes for table `participant_type`
--
ALTER TABLE `participant_type`
  ADD PRIMARY KEY (`participant_type_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_times`
--
ALTER TABLE `program_times`
  ADD PRIMARY KEY (`program_time_id`),
  ADD KEY `event_times_ibfk_1` (`program_id`);

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
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`),
  ADD KEY `finance_id` (`finance_id`);

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
-- AUTO_INCREMENT for table `bank_list`
--
ALTER TABLE `bank_list`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `participant_type`
--
ALTER TABLE `participant_type`
  MODIFY `participant_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `program_times`
--
ALTER TABLE `program_times`
  MODIFY `program_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `program_times`
--
ALTER TABLE `program_times`
  ADD CONSTRAINT `program_times_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`finance_id`) REFERENCES `finance` (`finance_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
