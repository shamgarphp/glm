-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 05:17 AM
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
-- Table structure for table `daywise_report`
--

CREATE TABLE `daywise_report` (
  `daywise_report_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `men` int(11) NOT NULL,
  `women` int(11) NOT NULL,
  `boys` int(11) NOT NULL,
  `girls` int(11) NOT NULL,
  `place_of_work` varchar(250) NOT NULL,
  `work_information` text NOT NULL,
  `prayer_points` varchar(100) NOT NULL,
  `achievements` text NOT NULL,
  `challenges` text NOT NULL,
  `location_id` int(11) NOT NULL,
  `implemented_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daywise_report`
--

INSERT INTO `daywise_report` (`daywise_report_id`, `program_id`, `date`, `men`, `women`, `boys`, `girls`, `place_of_work`, `work_information`, `prayer_points`, `achievements`, `challenges`, `location_id`, `implemented_by`) VALUES
(1, 15, '2019-09-01', 22, 33, 44, 44, 'mvpcolony', 'work_informationwork_informationwork_information', '54', 'achievementsachievementsachievementsachievements', 'challengeschallengeschallenges', 0, 0),
(2, 15, '2019-09-01', 22, 33, 44, 44, 'mvpcolony', 'work_informationwork_informationwork_information', '54', 'achievementsachievementsachievementsachievements', 'challengeschallengeschallenges', 0, 0);

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
  `user_id` int(11) NOT NULL,
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
  `resume` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_id`, `birth_date`, `first_name`, `last_name`, `email`, `password`, `gender`, `hire_date`, `father_name`, `aadhar`, `pan_number`, `account_name`, `account_number`, `ifsc_Code`, `bank_Name`, `highest_qualification`, `job_description`, `place_appointment`, `reporting_to`, `dev_qualification`, `disc_profile`, `role_id`, `status`, `created_on`, `Job_title`, `department`, `account_type`, `resume`, `description`, `phone`) VALUES
(14, '1991-06-04', 'harish', 'kumar', 'harish@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', 'simhachalam', 2147483647, '6534552343', 'harishkumar', '63456456454', '4345dfd', 'statebank', 'be', 'Job DescriptionJob DescriptionJob Description', 'visakhapatnam', 'Reporting to', 'extra qulification', '52398b51dc4d8c08e171316ba6275a07.jpg', 5, 1, '2019-01-09 10:22:10', 'job-title', 2, 'accounttype', '35727625e6113e62b495c2c0cb2f4ea9.txt', '', '0'),
(15, '1970-01-01', 'Brion', '', 'Brion@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-09 19:18:26', '', 0, '', '', '', ''),
(16, '1970-01-01', 'Cyril', '', 'Cyril@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-09 19:20:27', '', 0, '', '', '', ''),
(17, '1970-01-01', 'Dylan', '', 'Dylan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-09 19:21:37', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `finance_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`finance_id`, `program_id`, `created_on`, `status`, `implemented_by`, `location_id`) VALUES
(1, 12, '2019-01-07 18:21:26', 1, 0, 0),
(2, 12, '2019-01-07 18:22:30', 1, 0, 0),
(3, 12, '2019-01-09 12:32:39', 1, 0, 0),
(4, 14, '2019-01-09 12:40:15', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `finance_report`
--

CREATE TABLE `finance_report` (
  `finance_report_id` int(11) NOT NULL,
  `act_amount` int(11) NOT NULL,
  `balance_amount` int(11) NOT NULL,
  `bill_image` text NOT NULL,
  `program_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `finance_id` int(11) NOT NULL,
  `expenditure_amount` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `implemented_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_report`
--

INSERT INTO `finance_report` (`finance_report_id`, `act_amount`, `balance_amount`, `bill_image`, `program_id`, `vendor_id`, `finance_id`, `expenditure_amount`, `location_id`, `implemented_by`) VALUES
(1, 5000, 1000, 'http://localhost/goodlife/uploads/programs/SJlCgT7F.jpg', 15, 0, 0, 4000, 0, 0),
(2, 6000, 2000, 'http://localhost/goodlife/uploads/programs/BmkX6O80.jpg', 12, 1, 2, 4000, 0, 0);

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
(25, '', 'Kottakota', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '', 'Main office', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(14, 29, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01'),
(15, 30, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(16, 30, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(17, 30, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01'),
(18, 31, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(19, 31, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(20, 31, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01');

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
-- Table structure for table `progam_success_stories`
--

CREATE TABLE `progam_success_stories` (
  `success_stories_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `success_story` text NOT NULL,
  `image` text NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progam_success_stories`
--

INSERT INTO `progam_success_stories` (`success_stories_id`, `phone`, `success_story`, `image`, `implemented_by`, `created_on`, `program_id`, `location_id`, `email`) VALUES
(0, 'test@gmail.com', 'fasdfasdfsafasdsd', 'http://localhost/goodlife/uploads/programs/qeo4NlMk.jpg', 0, 0, 12, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `location_id` int(11) NOT NULL,
  `program_aim` text NOT NULL,
  `implemented_by` int(11) NOT NULL,
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

INSERT INTO `programs` (`program_id`, `program_name`, `location_id`, `program_aim`, `implemented_by`, `status`, `dept_no`, `title_id`, `approved_rejected`, `created_on`, `updated_on`) VALUES
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
(29, '', 4, 'progam  9', 0, 0, 0, 0, 0, '2019-01-08 18:57:47', '0000-00-00 00:00:00'),
(30, '2', 4, 'progarm aimmmm', 0, 0, 0, 0, 0, '2019-01-11 11:57:41', '0000-00-00 00:00:00'),
(31, '2', 4, 'progarm aimmmm2', 0, 0, 0, 0, 0, '2019-01-11 11:58:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_images`
--

CREATE TABLE `program_images` (
  `program_image_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `program_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `date` date NOT NULL,
  `img_category` varchar(250) NOT NULL,
  `img_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_images`
--

INSERT INTO `program_images` (`program_image_id`, `image`, `program_id`, `location_id`, `implemented_by`, `date`, `img_category`, `img_desc`) VALUES
(5, 'http://localhost/goodlife/uploads/programs/9WN1eovw.jpg,http://localhost/goodlife/uploads/programs/sOUN0hRy.jpg,http://localhost/goodlife/uploads/programs/uw8hcR6l.jpg', 31, 4, 0, '2019-11-01', 'categ', 'hjfgh'),
(6, 'http://localhost/goodlife/uploads/programs/AnRl7zJV.jpg,http://localhost/goodlife/uploads/programs/pKZgVRMS.jpg,http://localhost/goodlife/uploads/programs/hbjuA3Ln.jpg', 31, 4, 0, '2019-11-01', 'new_imgsds', '');

-- --------------------------------------------------------

--
-- Table structure for table `program_names`
--

CREATE TABLE `program_names` (
  `program_name_id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_names`
--

INSERT INTO `program_names` (`program_name_id`, `program_name`, `created_on`) VALUES
(1, 'Vbs', '0000-00-00 00:00:00'),
(2, 'test1', '2019-01-11 11:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `program_review`
--

CREATE TABLE `program_review` (
  `program_review_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `review` text NOT NULL,
  `image` text NOT NULL,
  `created_on` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `review_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_review`
--

INSERT INTO `program_review` (`program_review_id`, `program_id`, `phone`, `review`, `image`, `created_on`, `email`, `location_id`, `implemented_by`, `review_category`) VALUES
(1, 15, '5000', '4000', 'http://localhost/goodlife/uploads/programs/46LwUkvN.jpg', '2019-01-01', 'shan@gmail.com', 0, 0, 'Testimonials');

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
(42, '2019-09-01', '10am', '11am', 29),
(43, '2019-08-01', '8am', '7am', 30),
(44, '2019-08-01', '8am', '7am', 30),
(45, '2019-09-01', '10am', '11am', 30),
(46, '2019-08-01', '8am', '7am', 31),
(47, '2019-08-01', '8am', '7am', 31),
(48, '2019-09-01', '10am', '11am', 31);

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
(6, 'volunteer'),
(7, 'others');

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
  `teaching` varchar(255) NOT NULL
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
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `vechile_name` varchar(100) NOT NULL,
  `register_no` varchar(50) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `licence_id` varchar(50) NOT NULL,
  `vechicle_capacity` varchar(20) NOT NULL,
  `from_location` varchar(250) NOT NULL,
  `to_locatdion` varchar(250) NOT NULL,
  `google_distance` varchar(100) NOT NULL,
  `manual_distance` varchar(100) NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transport_id`, `program_id`, `vechile_name`, `register_no`, `driver_name`, `licence_id`, `vechicle_capacity`, `from_location`, `to_locatdion`, `google_distance`, `manual_distance`, `implemented_by`, `location_id`) VALUES
(1, 15, 'sjjs', 'b CA d', 'bxbd', 'bxbd', '8484', 'ndnf', 'Hanuman Nagar, Jogeshwari - Vikhroli Link Road, Rup Nagar, Goregaon East, Mumbai, Maharashtra, India', 'DBD Distribution Ltd, Boundary Park, Hemel Hempstead, UK', '9507.19Km', 0, 0),
(2, 15, 'xcbh', 'vvg', 'ccb', 'ffj', '856', 'fgj', 'Madathara,Kollam, Kerala, India Tel :914742442271, Thiruvananthapuram - Thenmala Road, Madathara, Kerala, India', 'Nadiad, Gujarat, India', '478.1750625Km', 0, 0);

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
  `payment_type` varchar(100) NOT NULL,
  `bank_acno` varchar(50) NOT NULL,
  `bank_ifsc_code` varchar(50) NOT NULL,
  `quation_image` varchar(250) NOT NULL,
  `expenditure_desc` text NOT NULL,
  `finance_id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `finance_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `location`, `phone`, `total_amount`, `bank_id`, `payment_type`, `bank_acno`, `bank_ifsc_code`, `quation_image`, `expenditure_desc`, `finance_id`, `account_name`, `finance_category`) VALUES
(1, 'saikmar', 'jagadamba', '52345234', '5000', 2, '3', '56345643gffff', 'dfghdfg4545', 'http://localhost/goodlife/uploads/programs/eDRlQctN.jpg', 'expendituredesc', 2, '', ''),
(2, 'shankar', 'mvp', '54645645', '10000', 5, '3', '434534344', 'dfgsdf35434', 'http://localhost/goodlife/uploads/programs/Bfh7qytz.jpg', 'dfadasds', 2, '', ''),
(3, 'bdbdn', 'bdbbd', '89494', '8448', 1, '0', '8448', 'vdbdb', 'http://localhost/goodlife/uploads/programs/BDAErIUn.jpg', 'sbdbnd', 4, '', '');

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
-- Indexes for table `daywise_report`
--
ALTER TABLE `daywise_report`
  ADD PRIMARY KEY (`daywise_report_id`),
  ADD KEY `program_id` (`program_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`finance_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `finance_report`
--
ALTER TABLE `finance_report`
  ADD PRIMARY KEY (`finance_report_id`),
  ADD KEY `finance_report_ibfk_1` (`program_id`);

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
-- Indexes for table `progam_success_stories`
--
ALTER TABLE `progam_success_stories`
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_images`
--
ALTER TABLE `program_images`
  ADD PRIMARY KEY (`program_image_id`),
  ADD KEY `program_images_ibfk_1` (`program_id`);

--
-- Indexes for table `program_names`
--
ALTER TABLE `program_names`
  ADD PRIMARY KEY (`program_name_id`);

--
-- Indexes for table `program_review`
--
ALTER TABLE `program_review`
  ADD PRIMARY KEY (`program_review_id`),
  ADD KEY `program_review_ibfk_1` (`program_id`);

--
-- Indexes for table `program_staff`
--
ALTER TABLE `program_staff`
  ADD PRIMARY KEY (`program_staff_id`);

--
-- Indexes for table `program_times`
--
ALTER TABLE `program_times`
  ADD PRIMARY KEY (`program_time_id`),
  ADD KEY `event_times_ibfk_1` (`program_id`);

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
  ADD PRIMARY KEY (`teaching_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`),
  ADD KEY `program_id` (`program_id`);

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
-- AUTO_INCREMENT for table `daywise_report`
--
ALTER TABLE `daywise_report`
  MODIFY `daywise_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finance_report`
--
ALTER TABLE `finance_report`
  MODIFY `finance_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `participant_type`
--
ALTER TABLE `participant_type`
  MODIFY `participant_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `program_images`
--
ALTER TABLE `program_images`
  MODIFY `program_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program_names`
--
ALTER TABLE `program_names`
  MODIFY `program_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_review`
--
ALTER TABLE `program_review`
  MODIFY `program_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_staff`
--
ALTER TABLE `program_staff`
  MODIFY `program_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_times`
--
ALTER TABLE `program_times`
  MODIFY `program_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `resource_staff`
--
ALTER TABLE `resource_staff`
  MODIFY `resource_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
  MODIFY `teaching_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daywise_report`
--
ALTER TABLE `daywise_report`
  ADD CONSTRAINT `daywise_report_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`);

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `finance_report`
--
ALTER TABLE `finance_report`
  ADD CONSTRAINT `finance_report_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `progam_success_stories`
--
ALTER TABLE `progam_success_stories`
  ADD CONSTRAINT `progam_success_stories_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `program_images`
--
ALTER TABLE `program_images`
  ADD CONSTRAINT `program_images_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `program_review`
--
ALTER TABLE `program_review`
  ADD CONSTRAINT `program_review_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `program_times`
--
ALTER TABLE `program_times`
  ADD CONSTRAINT `program_times_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`finance_id`) REFERENCES `finance` (`finance_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
