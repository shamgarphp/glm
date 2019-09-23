-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2019 at 08:43 AM
-- Server version: 5.6.42-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yesinter_goodlf`
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
(3, 30, '2019-11-01', 12, 12, 12, 12, 'dbs', 'bdh', '4545', 'dhhd', 'hdh', 30, 0),
(4, 37, '1970-01-01', 20, 30, 100, 5, 'aassbb', 'sbsbbbbb', '46466486', 'sbshshshs', 'gggghhhhhs', 9, 0),
(5, 31, '2019-12-01', 55, 544, 55, 454, 'fgsf', 'asdfasd', '3232', 'dfadf', 'dfadfasd', 8, 0),
(6, 30, '2019-12-01', 455, 815, 4848, 5885, 'dbnbdb', 'fbfb', '949', 'fbfb', 'brbr', 8, 0),
(7, 30, '2019-12-01', 888, 788, 88, 89, 'vn', 'bb', 'ghj', 'gh', 'vb', 8, 0),
(8, 30, '2019-12-01', 258, 889, 88, 99, ' bx', ' bn', ' bj', 'ghd', 'ghj', 8, 0);

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
  `aadhar` int(20) NOT NULL,
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
(20, '1970-01-01', 'Daniel', 'D', 'daniel@gmail.com', 'e7f84ff145ced31368756c41af7fef9c', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 14:41:48', '', 0, '', '', '', ''),
(21, '1970-01-01', 'shankar', 'rao', 'shankar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 16:00:45', '', 0, '', '', '', ''),
(22, '1970-01-01', 'James', 'James', 'James@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 16:13:52', '', 0, '', '', '', ''),
(19, '1970-01-01', 'praveen', 'n', 'praveen@equipsociety.org', 'e16505be66870f2c0a5a58d282d82d63', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 14:40:26', '', 0, '', '', '', ''),
(18, '1970-01-01', 'John', 'David', 'jd@equipsociety.org', '58c2bd8a8be6198468412a24a56acf0b', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 14:39:44', '', 0, '', '', '', '');

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
(8, 30, '2019-01-11 14:28:30', 1, 0, 8),
(9, 36, '2019-01-11 16:19:17', 1, 0, 10),
(10, 37, '2019-01-11 17:20:39', 1, 0, 9),
(11, 30, '2019-01-12 07:21:39', 1, 0, 8),
(12, 30, '2019-01-12 10:46:05', 1, 0, 8),
(13, 30, '2019-01-12 14:05:28', 1, 0, 8),
(14, 30, '2019-01-12 16:17:52', 1, 0, 8),
(15, 30, '2019-01-12 16:39:10', 1, 0, 8),
(16, 30, '2019-01-12 18:41:52', 1, 0, 8),
(17, 30, '2019-01-12 18:51:34', 1, 0, 8),
(18, 30, '2019-01-12 18:52:00', 1, 0, 8),
(19, 30, '2019-01-12 18:53:03', 1, 0, 8),
(20, 30, '2019-01-12 18:53:40', 1, 0, 8);

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
(3, 123, -33, 'http://www.yesinteriors.online/goodlf/uploads/programs/l1MEyBvQ.jpg', 30, 4, 8, 156, 8, 0),
(4, 123, -33, 'http://www.yesinteriors.online/goodlf/uploads/programs/QgCEGaPp.jpg', 30, 4, 8, 156, 8, 0),
(5, 123, -33, 'http://www.yesinteriors.online/goodlf/uploads/programs/8VldMkiK.jpg', 30, 4, 8, 156, 8, 0),
(6, 6000, 2000, 'http://www.yesinteriors.online/goodlf/uploads/programs/86NlLnJq.jpg', 31, 4, 8, 4000, 8, 0),
(7, 12345, 12220, 'http://www.yesinteriors.online/goodlf/uploads/programs/a2S86BtX.jpg', 30, 4, 8, 125, 8, 0),
(8, 10000, 9850, 'http://www.yesinteriors.online/goodlf/uploads/programs/KRCUpDAy.jpg', 30, 4, 8, 150, 8, 0),
(9, 20000, -1000, 'http://www.yesinteriors.online/goodlf/uploads/programs/JT8R4teX.jpg', 37, 6, 10, 21000, 9, 0),
(10, 553, 498, 'http://www.yesinteriors.online/goodlf/uploads/programs/74zOFUfj.jpg', 30, 4, 8, 55, 8, 0),
(11, 886, 430, 'http://www.yesinteriors.online/goodlf/uploads/programs/yL4vkKpl.jpg', 30, 11, 15, 456, 8, 0);

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
(15, 30, 3, 'vsh', 48, 84, 84, 48, 'bd', '2019-11-01'),
(16, 31, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(17, 31, 0, 'vzbz', 78, 7887, 7070, 78, 'xvvx', '2019-08-01'),
(18, 31, 0, 'bzbz', 87879, 87878, 8787, 87887, 'vxvx', '2019-09-01'),
(19, 32, 1, 'bsh', 949, 848, 848, 848, 'bsb', '2019-11-01'),
(20, 33, 1, 'vah', 848, 848, 848, 848, 'bsb', '2019-11-01'),
(21, 34, 1, 'gzh', 848, 6, 5, 5, 'bdb', '2019-11-01'),
(22, 35, 1, 'bs', 48, 84, 4, 84, 'bad. vd', '2019-11-01'),
(23, 36, 4, '', 0, 10, 10, 40, '', '1970-01-01'),
(24, 37, 2, 'kcr', 5888880, 1, 0, 0, 'trs', '1970-01-01'),
(25, 37, 2, '', 0, 10, 5, 20, '', '1970-01-01'),
(26, 38, 6, 'fffgg', 2580, 1, 0, 0, '', '1970-01-01'),
(27, 38, 6, '', 0, 200, 100, 300, '', '1970-01-01'),
(28, 39, 1, 'dd', 55, 54, 55, 84, 'fd', '2019-12-01'),
(29, 40, 1, 'fgh', 88, 88, 88, 88, 'vv', '2019-12-01'),
(30, 41, 1, 'hsh', 9494, 848, 848, 848, 'vdb', '2019-12-01'),
(31, 43, 1, 'hsh', 845, 455, 455, 455, 'hsh', '2019-12-01'),
(32, 45, 1, 'hs', 848, 548, 548, 84, 'bsb', '2019-12-01'),
(33, 46, 1, 'bsh', 848, 848, 848, 848, 'bdb', '2019-12-01'),
(34, 47, 1, 'fhj', 885, 88, 88, 88, 'vv', '2019-12-01'),
(35, 48, 1, 'vdbd', 848, 848878, 949, 848, 'bdb', '2019-12-01'),
(36, 49, 1, 'gh', 88, 55, 85, 88, 'xf', '2019-12-01');

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
  `phone` varchar(250) NOT NULL,
  `success_story` text NOT NULL,
  `image` text NOT NULL,
  `implemented_by` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progam_success_stories`
--

INSERT INTO `progam_success_stories` (`success_stories_id`, `phone`, `success_story`, `image`, `implemented_by`, `created_on`, `program_id`, `location_id`, `email`) VALUES
(0, 'test@gmail.com', 'fasdfasdfsafasdsd', 'http://localhost/goodlife/uploads/programs/qeo4NlMk.jpg', 0, 0, 12, 8, ''),
(0, 'vb', 'vvn', 'http://www.yesinteriors.online/goodlf/uploads/programs/iw45vdse.jpg', 0, 2019, 30, 8, 'xv'),
(0, 'gdhd', 'vdv', 'http://www.yesinteriors.online/goodlf/uploads/programs/ZeOvw2Gt.jpg', 0, 2019, 30, 8, 'shsh'),
(0, 'fgy', 'vjk', 'http://www.yesinteriors.online/goodlf/uploads/programs/9y2XfVuo.jpg', 0, 2019, 30, 8, 'fdg');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `location_id` int(11) NOT NULL,
  `program_aim` text NOT NULL,
  `implemented_by` varchar(20) NOT NULL,
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
(30, '', 8, 'aim', '0', 1, 0, 0, 0, '2019-01-11 11:24:38', '2019-01-11 20:48:42'),
(31, '2', 4, 'progarm aimmmm2', '0', 0, 0, 0, 0, '2019-01-11 12:01:46', '0000-00-00 00:00:00'),
(32, '1', 8, 'aimmmm', '0', 0, 0, 0, 0, '2019-01-11 12:21:34', '2019-01-11 16:30:19'),
(33, '3', 8, 'csbsn', '0', 0, 0, 0, 0, '2019-01-11 12:24:05', '0000-00-00 00:00:00'),
(34, '', 8, 'aim', '0', 0, 0, 0, 0, '2019-01-11 13:16:51', '2019-01-11 16:30:16'),
(35, '', 8, 'sai', '0', 0, 0, 0, 1, '2019-01-11 14:03:07', '2019-01-11 16:17:35'),
(36, '', 10, 'to see children smile', '0', 0, 0, 0, 0, '2019-01-11 16:16:23', '2019-01-11 16:30:15'),
(37, '', 9, 'shdudjdjdid', '0', 0, 0, 0, 0, '2019-01-11 16:55:43', '0000-00-00 00:00:00'),
(38, '', 9, 'ajaajsnn', '0', 0, 0, 0, 0, '2019-01-11 17:15:52', '0000-00-00 00:00:00'),
(39, '', 8, 'cc', '0', 0, 0, 0, 0, '2019-01-12 07:20:24', '0000-00-00 00:00:00'),
(40, '', 19, 'baha', '0', 0, 0, 0, 0, '2019-01-12 13:40:45', '0000-00-00 00:00:00'),
(41, '', 8, 'fasak', '0', 0, 0, 0, 0, '2019-01-12 13:49:17', '0000-00-00 00:00:00'),
(42, '', 3, 'progarm eight', '22', 0, 0, 0, 0, '2019-01-12 13:53:04', '0000-00-00 00:00:00'),
(43, '', 8, 'sghs', '0', 0, 0, 0, 0, '2019-01-12 13:54:01', '0000-00-00 00:00:00'),
(44, '', 3, 'progarm eight', '22', 0, 0, 0, 0, '2019-01-12 13:56:47', '0000-00-00 00:00:00'),
(45, '', 8, 'hsbs', '0', 0, 0, 0, 0, '2019-01-12 13:58:03', '0000-00-00 00:00:00'),
(46, '', 8, 'whhs', '0', 0, 0, 0, 0, '2019-01-12 14:00:55', '0000-00-00 00:00:00'),
(47, '', 8, 'fgj', '', 0, 0, 0, 0, '2019-01-12 14:06:09', '0000-00-00 00:00:00'),
(48, '', 8, 'ahsh', '', 0, 0, 0, 0, '2019-01-12 16:16:41', '0000-00-00 00:00:00'),
(49, '', 8, 'chh', '', 0, 0, 0, 0, '2019-01-12 16:38:47', '0000-00-00 00:00:00');

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
(1, 'http://localhost/goodlife/uploads/programs/U2vcVhdt.jpg', 31, 4, 0, '2019-11-01', '', ''),
(2, 'http://localhost/goodlife/uploads/programs/w4JXbGkU.jpg', 31, 4, 0, '2019-11-01', '', ''),
(3, 'http://localhost/goodlife/uploads/programs/C0pg4nEb.jpg', 31, 4, 0, '2019-11-01', '', ''),
(4, 'http://www.yesinteriors.online/goodlf/uploads/programs/m0fjTEM9.jpg', 31, 4, 0, '2019-11-01', 'categ', ''),
(5, 'http://www.yesinteriors.online/goodlf/uploads/programs/bQ9ryCtO.jpg', 31, 4, 0, '2019-11-01', 'categ', ''),
(6, 'http://www.yesinteriors.online/goodlf/uploads/programs/KkE4hqdW.jpg', 31, 4, 0, '2019-11-01', 'categ', ''),
(7, 'http://www.yesinteriors.online/goodlf/uploads/programs/sQaCzXTL.jpg', 32, 4, 0, '2019-11-01', 'categ', ''),
(8, 'http://www.yesinteriors.online/goodlf/uploads/programs/1IrPGTvk.jpg', 32, 4, 0, '2019-11-01', 'categ', ''),
(9, 'http://www.yesinteriors.online/goodlf/uploads/programs/rhYmaSpt.jpg', 32, 4, 0, '2019-11-01', 'categ', ''),
(10, 'http://www.yesinteriors.online/goodlf/uploads/programs/Moa9vFP8.jpg', 30, 8, 0, '2019-11-01', 'General session-stage', ''),
(11, 'http://www.yesinteriors.online/goodlf/uploads/programs/JmVtMb2C.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(12, 'http://www.yesinteriors.online/goodlf/uploads/programs/iYqwWCL1.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(13, 'http://www.yesinteriors.online/goodlf/uploads/programs/tbj7rHKv.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(14, 'http://www.yesinteriors.online/goodlf/uploads/programs/agPkj6bT.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(15, 'http://www.yesinteriors.online/goodlf/uploads/programs/yCXSaOKL.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(16, 'http://www.yesinteriors.online/goodlf/uploads/programs/b2BcwH6G.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(17, 'http://www.yesinteriors.online/goodlf/uploads/programs/ts4cLUA3.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(18, 'http://www.yesinteriors.online/goodlf/uploads/programs/LPXdzF4l.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(19, 'http://www.yesinteriors.online/goodlf/uploads/programs/SDxOu2AL.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(20, 'http://www.yesinteriors.online/goodlf/uploads/programs/3oKbkZxS.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(21, 'http://www.yesinteriors.online/goodlf/uploads/programs/EwKjx1tO.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(22, 'http://www.yesinteriors.online/goodlf/uploads/programs/J9yqU6YF.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(23, 'http://www.yesinteriors.online/goodlf/uploads/programs/ZRIy5whx.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(24, 'http://www.yesinteriors.online/goodlf/uploads/programs/nJXapKLQ.jpg', 30, 8, 0, '1970-01-01', 'Select Category', ''),
(25, 'http://www.yesinteriors.online/goodlf/uploads/programs/41Xwv9R8.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(26, 'http://www.yesinteriors.online/goodlf/uploads/programs/QdGY4CK1.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(27, 'http://www.yesinteriors.online/goodlf/uploads/programs/Wle5rbo3.jpg', 30, 8, 0, '2019-12-01', 'Children', ''),
(28, 'http://www.yesinteriors.online/goodlf/uploads/programs/Ir8BKz4U.jpg', 30, 8, 0, '2019-12-01', 'Children', ''),
(29, 'http://www.yesinteriors.online/goodlf/uploads/programs/dbDEyGWI.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(30, 'http://www.yesinteriors.online/goodlf/uploads/programs/1xme6AY3.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(31, 'http://www.yesinteriors.online/goodlf/uploads/programs/VUx7yC2F.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(32, 'http://www.yesinteriors.online/goodlf/uploads/programs/UIJwKREd.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(33, 'http://www.yesinteriors.online/goodlf/uploads/programs/0QqiTNAd.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(34, 'http://www.yesinteriors.online/goodlf/uploads/programs/c7tP1LxZ.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(35, 'http://www.yesinteriors.online/goodlf/uploads/programs/H5oiKEFw.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(36, 'http://www.yesinteriors.online/goodlf/uploads/programs/H43riX6s.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(37, 'http://www.yesinteriors.online/goodlf/uploads/programs/FGZKmLRI.jpg', 30, 8, 0, '2019-12-01', 'General session-stage', ''),
(38, 'http://www.yesinteriors.online/goodlf/uploads/programs/Xm1ND50w.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/P4DH6hNf.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/5D49H1KC.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/5xirbjdS.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(39, 'http://www.yesinteriors.online/goodlf/uploads/programs/gW24ZMuX.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/jqp95bfs.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/yaWdETYq.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(40, 'http://www.yesinteriors.online/goodlf/uploads/programs/928akUBg.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/wLSD8qgt.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/8iseOXdN.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(41, 'http://www.yesinteriors.online/goodlf/uploads/programs/jaMvwJLX.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/2V6Thj5s.jpg', 30, 8, 0, '2019-12-01', 'Class time', ''),
(42, 'http://www.yesinteriors.online/goodlf/uploads/programs/jXMrL2xY.jpg', 30, 8, 0, '2019-12-01', 'Parents/Adults', 'cgh');

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
(2, 'test1', '2019-01-11 12:01:46'),
(3, 'test2', '2019-01-11 12:24:05');

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
  `review_category` varchar(250) NOT NULL,
  `implemented_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_review`
--

INSERT INTO `program_review` (`program_review_id`, `program_id`, `phone`, `review`, `image`, `created_on`, `email`, `location_id`, `review_category`, `implemented_by`) VALUES
(2, 30, '123456', 'hello', 'http://www.yesinteriors.online/goodlf/uploads/programs/pLYJ5VKl.jpg', '0000-00-00', 'sai', 8, '', 0),
(3, 30, '7778899', 'fhioolll', 'http://www.yesinteriors.online/goodlf/uploads/programs/fu9HsvOB.jpg', '0000-00-00', 'fghhh', 8, '', 0),
(4, 30, '7778899', 'fhioolll', 'http://www.yesinteriors.online/goodlf/uploads/programs/JPYaeruB.jpg', '0000-00-00', 'fghhh', 8, '', 0),
(5, 30, '678899', 'thank u sir but it was the best thing to happen 6AM for the first few days of the day and the first thing that was happening is the student was in a position of a talk and I will not have website that we would be ', 'http://www.yesinteriors.online/goodlf/uploads/programs/utWhR8PL.jpg', '0000-00-00', 'dhhjk', 8, '', 0),
(6, 30, '34689', 'This is a great aap to have and just hoping to go further with the ministry updates on a regular basis ', 'http://www.yesinteriors.online/goodlf/uploads/programs/kv0Rte63.jpg', '0000-00-00', 'Dfhhtyu', 8, '', 0),
(7, 37, '0999666788', 'shhhsjjkskjzkjzk', 'http://www.yesinteriors.online/goodlf/uploads/programs/uaWwCGVn.jpg', '0000-00-00', 'dghj', 9, '', 0),
(8, 30, 'snns', 'bsb', 'http://www.yesinteriors.online/goodlf/uploads/programs/i7VERUfA.jpg', '2019-01-12', 'sbb', 8, 'Testimonials', 0),
(9, 30, 'ffg', 'xcf', 'http://www.yesinteriors.online/goodlf/uploads/programs/pfKuBJaI.jpg', '2019-01-12', 'fsf', 8, 'Testimonials', 0);

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
(43, '2019-11-01', '10am', '12am', 30),
(44, '2019-08-01', '8am', '7am', 31),
(45, '2019-08-01', '8am', '7am', 31),
(46, '2019-09-01', '10am', '11am', 31),
(47, '2019-11-01', '11am', '11am', 32),
(48, '2019-11-01', '11am', '12am', 33),
(49, '2019-11-01', '8am', '10am', 34),
(50, '2019-11-01', '8am', '7am', 35),
(51, '1970-01-01', '9am', '11am', 36),
(52, '1970-01-01', '9am', '12am', 37),
(53, '1970-01-01', '9am', '12am', 38),
(54, '2019-12-01', '9am', '9am', 39),
(55, '2019-12-01', '6am', '11am', 40),
(56, '2019-12-01', '5am', '5am', 41),
(57, '2019-12-01', '6am', '11am', 43),
(58, '2019-12-01', '7am', '10am', 45),
(59, '2019-12-01', '7am', '5am', 46),
(60, '2019-12-01', '10am', '8am', 47),
(61, '2019-12-01', '5am', '6am', 48),
(62, '2019-12-01', '8am', '7am', 49);

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
(3, 30, 'afh', 'fgh', 'gjj', 'fv', '556', 'Madill, OK, USA', 'Jagadguru Dr. Gangadhar Nagar, Ghataprabha Tq: Gokak, State Highway 73, Ghatprabha, Karnataka, India', '2453.52325Km', '86', 0, 8),
(4, 37, 'auto', 'aahhhh', 'shshshs', 'agasvsvsv', '10', 'Good Life Academy, PV Narasimha Rao Expressway, Naidu Colony, Upparpally, Hyderabad, Telangana, India', 'Toilets Secunderabad Railway Station, Platform 1, Railway Officer Colony, Botiguda, Bhoiguda, Secunderabad, Telangana, India', '9.453236328125Km', '20', 0, 9),
(5, 30, 'fgh', 'hj', 'hj', 'jh', '85', 'Good Life Academy, PV Narasimha Rao Expressway, Naidu Colony, Upparpally, Hyderabad, Telangana, India', 'Secunderabad Railway Station Bus Stop, Regimental Bazaar, Shivaji Nagar, Secunderabad, Telangana', '9.337443359375Km', '85', 0, 8),
(6, 30, 'fh', 'hh', 'fg', 'vv', '85', 'Good Life Academy, PV Narasimha Rao Expressway, Naidu Colony, Upparpally, Hyderabad, Telangana, India', 'Secunderabad Railway Station Bus Stop, Regimental Bazaar, Shivaji Nagar, Secunderabad, Telangana', '9.337443359375Km', '55', 0, 8),
(7, 30, 'ff', 'ds', 'dd', 'dd', '69', 'Madhya Pradesh, India', 'hawfngH?? Hàng Than, Nguy?n Trung Tr?c, Ba ?ình, Hanoi, Vietnam', '17051.826Km', '44', 0, 8),
(8, 30, 'fgh', 'vvj', 'vvh', 'cv', '78', 'CVNRA 22, CV Nagar Venchavodu Road, Chavadimukku, Sreekariyam, Thiruvananthapuram, Kerala, India', 'GD-338, 1st Cross Road, GD Block, Sector III, Salt Lake City, Bidhannagar, West Bengal, India', '1288.543Km', '55', 0, 8),
(9, 30, 'hehs', 'brb', 'brb', 'bfbbtb', '828', 'BTV, Airport Circle, South Burlington, VT, USA', 'B. T. Road Crossing -, Bagbazar Street, Bag Bazar Colony, Baghbazar, Calcutta, West Bengal, India', '18294.382Km', '828', 0, 8),
(10, 36, 'fgj', 'hjj', 'hj', 'hhj', '566', 'madhavnagar road, Sangli - Tasgaon Road, Ghanshyam Nagar, Kala Nagar, Sangli, Maharashtra, India', 'Jalan Kasuari No.HD8A25, Pondok Pucung, South Tangerang City, Banten, Indonesia', '16560.001Km', '663', 0, 10);

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
(4, 'df', 'yy', '55', '553', 1, 'Cheque', '55', 'hh', 'http://www.yesinteriors.online/goodlf/uploads/programs/gQ9mGxd3.jpg', 'fh', 8, '', ''),
(5, 'ghhh', 'gggh', '6666676666', '10000', 1, 'Cheque', '2222233', 'sdfhhhj', 'http://www.yesinteriors.online/goodlf/uploads/programs/Z5kGm1tI.jpg', 'for tent', 9, '', ''),
(6, 'lokash tent', 'Upparapally, Telangana, India', '784888555', '20000', 1, 'Cash', '4848885', 'sssggv', 'http://www.yesinteriors.online/goodlf/uploads/programs/VQOJKW52.jpg', 'shsbbh', 10, '', ''),
(7, 'fd', 'cc', '55', '54', 1, 'Cheque', '54', 'fd', 'http://www.yesinteriors.online/goodlf/uploads/programs/AFHuzIBd.jpg', 'ff', 11, '', ''),
(8, 'sai', 'Maddilapalem, Visakhapatnam, Andhra Pradesh, India', '123456', '12345', 6, 'Cheque', '4664', 'bfn', 'http://www.yesinteriors.online/goodlf/uploads/programs/zih8PjwD.jpg', 'sai', 12, '', ''),
(9, 'bbn', 'cv', '88', '78', 1, 'Cheque', '75', 'cvb', 'http://www.yesinteriors.online/goodlf/uploads/programs/dJpTPfYV.jpg', 'fgh', 13, 'cv', ''),
(10, 'bfb', ' g ', '288', '88', 7, 'Cheque', '288828', 'ybv', 'http://www.yesinteriors.online/goodlf/uploads/programs/17veRQ5X.jpg', 'fhh', 14, 'byb', ''),
(11, 'vhh', 'vbh', '855', '886', 1, 'Cheque', '755', 'vv', 'http://www.yesinteriors.online/goodlf/uploads/programs/ASrWH2oa.jpg', 'ghh', 15, 'vbb', ''),
(12, 'dghs', 'HDJS Gascon Ent Ltee, Lajoie Street, Lefaivre, ON, Canada', '4664', '436', 1, 'Cheque', '616', 'hj', 'http://www.yesinteriors.online/goodlf/uploads/programs/ud3czanX.jpg', 'sbns', 16, 'jrj', ''),
(13, 'bzb', 'bdn', '979', '878', 1, 'Cheque', '878', 'bdb', 'http://www.yesinteriors.online/goodlf/uploads/programs/sbP6RmW4.jpg', 'sbbs', 20, 'bxb', 'sound and lighting');

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
  MODIFY `daywise_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `finance_report`
--
ALTER TABLE `finance_report`
  MODIFY `finance_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `participant_type`
--
ALTER TABLE `participant_type`
  MODIFY `participant_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `program_images`
--
ALTER TABLE `program_images`
  MODIFY `program_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `program_names`
--
ALTER TABLE `program_names`
  MODIFY `program_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_review`
--
ALTER TABLE `program_review`
  MODIFY `program_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `program_staff`
--
ALTER TABLE `program_staff`
  MODIFY `program_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_times`
--
ALTER TABLE `program_times`
  MODIFY `program_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
