-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2019 at 08:48 AM
-- Server version: 5.6.42
-- PHP Version: 5.6.38

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
(10, 63, '1970-01-01', 93, 65, 237, 324, 'Brundavan Gardens', 'Stories,Songs Dance', 'Be with in God', 'Reached targets of first day', 'To gather more children', 19, 0),
(11, 65, '1970-01-01', 38, 20, 226, 269, 'daroor open place', 'stories,songs,dance', 'spiritual life of children', 'fulfilled by God\'s help', 'gather more souls for god', 20, 0),
(12, 62, '1970-01-01', 63, 6, 218, 320, 'Side to Corner Stone church,balgera', 'successfully done,without any disturbance ', 'Attended children to reach Heavenly Father through this year\'s THEME.', 'hundreds of smiles in children faces', 'One of our team mate\'s wife and his daughter is not at all ok,her wife\'s  had problem with blood pressure and her daughter with strain in leg ankle,this occurred this afternoon only,so please pray for sudhakar\'s family.', 11, 0),
(13, 56, '1970-01-01', 6, 5, 227, 245, 'Rajoli', 'two new songs,eternity devotion,one part biography,groups lessons,book activity,colouring and craft work', 'pray for tomorrow programme', 'Good co-operation by teachers and vallenters', ' ---', 13, 0),
(14, 62, '1970-01-01', 40, 10, 360, 300, 'balgera', 'successfully completed by the grace of God,many of the children were very interested to every song,actions,..egg and today we played a skit about the eternity life and that was best one for today,many of the volunteers and church youth members were participated and every children enjoyed a lot through that skit and main thing is balgera touch church members were very cooperative and helped very much as they can,and they showed interest about this vbs program.', 'For eternity life,toadys stories,lessons,songs,actions,skit,everything should be useful to them for ', 'God\'s word is entered into the hearts of children and they are very eager to hear new songs,skits,etc... many of the youth members were attended and helped us ,(for example they are cleanings all the surroundings of our program and cleaning it as their own work,)really I was very much happy to see them like that,they were so active than yesterday,church elders and some villagers also attended today,when we are leaving from hundreds of hands were giving send off to us,God helped us today and toady 1 new song and two lessons were completed,food is sufficiently served,.', 'pray for spiritual lives of children, ', 11, 0),
(15, 53, '1970-01-01', 56, 38, 426, 312, 'nandinee', 'we have don very successfully 2day program ', 'one kid is suffring with fever,and pray for kids should know about Christmas more and more', 'we reached many ungodly people and kids', 'here we found many rss people and people disciples.', 22, 0),
(16, 69, '1970-01-01', 40, 20, 320, 443, 'alampur', '15-1-2019', '    ', '    ', '    ', 16, 0),
(17, 67, '1970-01-01', 63, 31, 214, 213, 'kothakota', 'excellent  devotion ', 'for increase children ', 'we reached many childrens ', 'none', 25, 0),
(18, 61, '1970-01-01', 10, 5, 295, 276, 'Itikyala', 'General singing, New song and action, Devotion, class division, crafting,missionary biography ', 'God\'s leading, safe journey, ', 'good strength ', '-', 14, 0),
(19, 58, '1970-01-01', 30, 40, 431, 405, 'mudumala ', 'singing, devotion, classes ,book activiti , biography, magics , colouring,craft work,', 'God\'s leading', 'more childrens', 'By God\'s grace no challenginges', 15, 0),
(20, 53, '1970-01-01', 53, 46, 483, 379, 'nandinee', 'we are successfully completed 3rd day program and we reached some new places.', 'one auto driver came to Christ through this camps pray for his salvation. ', 'we found improvement in kids life', 'we want to do more for his kingdom extenuating. ', 22, 0),
(21, 58, '1970-01-01', 40, 40, 473, 441, '16/1/2019 vbs in Mudumala center', 'singing, devotion,groups,book activity, colouring&craft,song sheet distribution,book distribution, celender distribution,feedbacks, encouraging about final day vbs in ieeja', 'safe journey', 'some children accepted.', 'By God\'s grace no challenges', 15, 0),
(22, 56, '1970-01-01', 5, 7, 250, 270, 'Rajoli', '15.01.2019 total strength and two songs ,bible lessons,craft,samuellito story,magical.', '---', '----', '----', 13, 0),
(23, 56, '1970-01-01', 12, 9, 240, 253, 'Rajoli', '16.01.2019 children strength and one song ,devotion,magics,testimonies,Samuel lito', '-----', '---', '---', 13, 0);

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
(26, '1970-01-01', 'Anil kumar', 'M', 'anil4jesus9618@gmail.com', '9812e1fa54867d31f7e4eea166350853', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:05:53', '', 0, '', '', '', ''),
(21, '1970-01-01', 'shankar', 'rao', 'shankar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-11 16:00:45', '', 0, '', '', '', ''),
(25, '1970-01-01', 'Thimothy', 'A', 'thimothyglm@gmail.vom', '86caa83a106acefd50e93bf1042450ca', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:00:58', '', 0, '', '', '', ''),
(23, '1970-01-01', 'david', 'paul', 'mohanpaul1435@gmail.com', '1f3202d820180a39f736f20fce790de8', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 19:54:19', '', 0, '', '', '', ''),
(24, '1970-01-01', 'livingstonne', 'n', 'livingstone1020@gmail.com', '1837158c5ff9b84bf85824ce36606416', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 19:58:27', '', 0, '', '', '', ''),
(27, '1970-01-01', 'benjamin', 'kasa', 'benzfriends65@gmail.com', 'a70fd3c12f278c44ea1628ea4ada89ac', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:09:04', '', 0, '', '', '', ''),
(28, '1970-01-01', 'suprasad', 'kadirikota', 'karunaprasad0@gmail.com', 'dd2f5ca02c7e56b414d32e1aa5287651', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:10:34', '', 0, '', '', '', ''),
(29, '1970-01-01', 'praveen', 'kumar', 'praveenkumar96@gmail.com', '06ad5d7ccf9718a0f8fd87c6bc065752', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:11:50', '', 0, '', '', '', ''),
(30, '1970-01-01', 'ramprasad', 'k', 'ramkebby@gmail.com', '72000b217b0fe1033abdf10ac926d2e0', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:13:42', '', 0, '', '', '', ''),
(38, '1970-01-01', 'jdp', 'king', 'jdpking89@gmail.com', '2d51b6b5a771b02e837a7797569c1d43', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:54:49', '', 0, '', '', '', ''),
(32, '1970-01-01', 'shalemraju', 'y', 'shalemshines@gmail.com', '46b36ed617ea6b2379cfe6507ce5e300', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:20:10', '', 0, '', '', '', ''),
(33, '1970-01-01', 'naveenpaul', 'ch', 'naveenpaul58364@gmail.com', '5a71a77a49acae697bf6126a00ce0f90', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:21:32', '', 0, '', '', '', ''),
(34, '1970-01-01', 'rajkumar', 'g', 'rjkmr1165@gmail.com', '9121dcccc480159b432a63563603deb3', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:23:26', '', 0, '', '', '', ''),
(35, '1970-01-01', 'ivans', 'bablu', 'ivansbablu@gmail.com', '961b79bebfcea7f02f1cce30388dac93', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:24:57', '', 0, '', '', '', ''),
(36, '1970-01-01', 'john', 'sundar', 'johnsundar.eu@gmail.com', '099d092c265f3f86c68aea38a7632ebb', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:26:36', '', 0, '', '', '', ''),
(37, '1970-01-01', 'nehemiah', 'm', 'nehemiahmarapatla123@gmail.com', 'bcc62db8e086ef89ad8bde7d69089ac5', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:34:05', '', 0, '', '', '', ''),
(39, '1970-01-01', 'manohar', 'k', 'ashishkesanakurthi@gmail.com', '948877dabac613218a879c7ce67b0639', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 20:56:11', '', 0, '', '', '', ''),
(40, '1970-01-01', 'john', 'manohar', 'johnmanohar023@gmail.com', '1729ce198ede5d010db06d1d533cbaac', 'M', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', 5, 1, '2019-01-13 21:38:44', '', 0, '', '', '', ''),
(41, '1983-12-06', 'Benjamin Simon', 'Devarampalli', 'devarampallisimon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'M', '0000-00-00', 'Chennaiah', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 1, '2019-01-14 16:36:55', '', 0, '', '', '', '');

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
(22, 52, '2019-01-13 12:51:46', 1, 0, 26),
(23, 52, '2019-01-13 17:23:07', 1, 0, 26);

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
(13, 1000, -100, 'http://www.yesinteriors.online/goodlf/uploads/programs/103m2IOl.jpg', 52, 16, 23, 1100, 26, 0),
(14, 866896, -33104, 'http://www.yesinteriors.online/goodlf/uploads/programs/WJT8bsw0.jpg', 52, 15, 22, 900000, 26, 0);

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
(8, '', 'Ieeja', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Tanagala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Kottapalli', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 'Balgera\r\n', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', 'Shanthinagar', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', 'Rajoli', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', 'Itikyala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 'Mudumala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', 'Alampur \'X\' Roads', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', 'Erravalli \'X\' Roads', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '', 'Panchalingala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '', 'Gadwal', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '', 'Dharoor', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '', 'Amaravai', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '', 'Nandinne', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '', 'Nettempadu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', 'Amarchinta', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', 'Kothakota', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
(36, 49, 1, 'gh', 88, 55, 85, 88, 'xf', '2019-12-01'),
(37, 51, 1, 'hzh', 848, 848, 878, 878, 'vsv', '2019-12-01'),
(38, 52, 1, '', 0, 10, 20, 10, '', '1970-01-01'),
(39, 53, 6, '', 0, 100, 300, 500, '', '1970-01-01'),
(40, 54, 7, '', 0, 500, 300, 100, '', '1970-01-01'),
(41, 54, 7, '', 0, 10, 5, 0, '', '1970-01-01'),
(42, 55, 6, '', 0, 50, 50, 1000, '', '1970-01-01'),
(43, 56, 6, '', 0, 25, 35, 700, '', '1970-01-01'),
(44, 57, 6, '', 0, 105, 28, 900, '', '1970-01-01'),
(45, 58, 1, '', 0, 100, 200, 100, '', '1970-01-01'),
(46, 59, 6, '', 0, 300, 400, 800, '', '1970-01-01'),
(47, 60, 1, '', 0, 6, 2, 650, '', '1970-01-01'),
(48, 61, 6, '', 0, 30, 25, 800, '', '1970-01-01'),
(49, 62, 6, '', 0, 48, 30, 700, '', '1970-01-01'),
(50, 63, 6, '', 0, 6, 5, 200, '', '1970-01-01'),
(51, 64, 7, '', 0, 40, 20, 750, '', '1970-01-01'),
(52, 65, 6, '', 0, 8, 6, 200, '', '1970-01-01'),
(53, 66, 6, '', 0, 5, 10, 1000, '', '1970-01-01'),
(54, 66, 6, '', 0, 10, 20, 800, '', '1970-01-01'),
(55, 67, 6, '', 0, 23, 20, 150, '', '1970-01-01'),
(56, 68, 1, '', 0, 8, 8, 5, '', '1970-01-01'),
(57, 69, 2, '       ', 0, 20, 10, 764, '    ', '1970-01-01');

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
(0, 'fgy', 'vjk', 'http://www.yesinteriors.online/goodlf/uploads/programs/9y2XfVuo.jpg', 0, 2019, 30, 8, 'fdg'),
(0, 'hdh', 'hdb', 'http://www.yesinteriors.online/goodlf/uploads/programs/qhnauJ1m.jpg', 0, 2019, 30, 8, 'sbh');

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
(52, '', 26, 'to control every location', '', 0, 0, 0, 0, '2019-01-13 10:50:16', '0000-00-00 00:00:00'),
(53, '', 22, 'we are so happy to be in this praogram.', '', 0, 0, 0, 0, '2019-01-13 21:14:29', '0000-00-00 00:00:00'),
(54, '', 21, 'to lead children towards god', '', 0, 0, 0, 0, '2019-01-13 21:14:48', '0000-00-00 00:00:00'),
(55, '', 12, 'good life working for next generation ', '', 0, 0, 0, 0, '2019-01-13 21:14:51', '0000-00-00 00:00:00'),
(56, '', 13, ' To prepare good children ', '', 0, 0, 0, 0, '2019-01-13 21:14:59', '0000-00-00 00:00:00'),
(57, '', 9, 'for children\'s bright Feature ', '', 0, 0, 0, 0, '2019-01-13 21:15:35', '0000-00-00 00:00:00'),
(58, '', 15, 'to ', '', 0, 0, 0, 0, '2019-01-13 21:15:53', '0000-00-00 00:00:00'),
(59, '', 17, 'To lead the children towards our God', '', 0, 0, 0, 0, '2019-01-13 21:16:04', '0000-00-00 00:00:00'),
(60, '', 23, 'children smile ', '', 0, 0, 0, 0, '2019-01-13 21:16:37', '0000-00-00 00:00:00'),
(61, '', 14, 'children smiles ', '', 0, 0, 0, 0, '2019-01-13 21:17:18', '0000-00-00 00:00:00'),
(62, '', 11, 'To Praise God', '', 0, 0, 0, 0, '2019-01-13 21:20:14', '0000-00-00 00:00:00'),
(63, '', 19, 'vbs programme', '', 0, 0, 0, 0, '2019-01-13 21:21:25', '0000-00-00 00:00:00'),
(64, '', 18, 'first day cab camp ', '', 0, 0, 0, 0, '2019-01-13 21:21:48', '0000-00-00 00:00:00'),
(65, '', 20, 'vbs programme', '', 0, 0, 0, 0, '2019-01-13 21:22:57', '0000-00-00 00:00:00'),
(66, '', 10, 'awesome ', '', 0, 0, 0, 0, '2019-01-13 21:35:04', '0000-00-00 00:00:00'),
(67, '', 25, 'to see the smile on children faces ', '', 1, 0, 0, 0, '2019-01-13 21:41:38', '2019-03-14 10:31:03'),
(68, '', 8, 'hi', '', 0, 0, 0, 0, '2019-01-14 12:39:24', '0000-00-00 00:00:00'),
(69, '', 16, 'TO SEE HAPPYNESS IN CHILDREN  FACES', '', 0, 0, 0, 0, '2019-01-15 19:38:20', '2019-03-14 10:31:01');

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
(60, 'http://www.yesinteriors.online/goodlf/uploads/programs/RufNKGkE.jpg', 58, 15, 0, '1970-01-01', 'General', 'we are going to mudumala first day camp - nehemiah'),
(62, 'http://www.yesinteriors.online/goodlf/uploads/programs/poDOQLZk.jpg', 58, 15, 0, '1970-01-01', 'General', 'we are going to mudumala first day camp - nehemiah'),
(65, 'http://www.yesinteriors.online/goodlf/uploads/programs/n48B2eXD.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/di6jCnlP.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/KaSdTf5k.jpg', 68, 8, 0, '1970-01-01', 'General session-stage', 'sam sir session'),
(73, 'http://www.yesinteriors.online/goodlf/uploads/programs/TDvknWE2.jpg', 52, 26, 0, '1970-01-01', 'General session-stage', 'General gathering images'),
(74, 'http://www.yesinteriors.online/goodlf/uploads/programs/FMNDtmpf.jpg', 68, 8, 0, '1970-01-01', 'General session-stage', 'General gathering images'),
(75, 'http://www.yesinteriors.online/goodlf/uploads/programs/xAIDlnPS.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/MiVqvFNW.jpg', 57, 9, 0, '1970-01-01', 'Parents/Adults', 'our children\'s are Better than Before comes to VBS'),
(76, 'http://www.yesinteriors.online/goodlf/uploads/programs/UsZmwvEI.jpg', 65, 20, 0, '1970-01-01', 'Class time', 'doing their activity'),
(77, 'http://www.yesinteriors.online/goodlf/uploads/programs/uxMJCLQ3.jpg', 68, 8, 0, '1970-01-01', 'General session-stage', 'devotion time'),
(78, 'http://www.yesinteriors.online/goodlf/uploads/programs/seR1mZrO.jpg', 59, 17, 0, '1970-01-01', 'Prayer/Decision', 'starting prayer with local pastor james garu'),
(79, 'http://www.yesinteriors.online/goodlf/uploads/programs/maTUOMcR.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/sL5cQrZ0.jpg', 53, 22, 0, '1970-01-01', 'Children', 'gathering of kids. '),
(80, 'http://www.yesinteriors.online/goodlf/uploads/programs/qYFi9bZR.jpg', 59, 17, 0, '1970-01-01', 'Prayer/Decision', 'starting prayer with local pastor james garu'),
(81, 'http://www.yesinteriors.online/goodlf/uploads/programs/JECfq4Nm.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/rekUzDyo.jpg', 62, 11, 0, '1970-01-01', 'Children', 'Children enjoyed a lot today,everyone loved tge songs,mainly they attracted towards actions and games,everything  done well by the grace of god.'),
(82, 'http://www.yesinteriors.online/goodlf/uploads/programs/tCMiaOKZ.jpg', 62, 11, 0, '1970-01-01', 'General session-stage', 'Children enjoyed a lot today,everyone loved tge songs,mainly they attracted towards actions and games,everything  done well by the grace of god.'),
(83, 'http://www.yesinteriors.online/goodlf/uploads/programs/NZFx6GDf.jpg,http://www.yesinteriors.online/goodlf/uploads/programs/mJFTLYj9.jpg', 62, 11, 0, '1970-01-01', 'General session-stage', 'Children enjoyed a lot today,everyone loved tge songs,mainly they attracted towards actions and games,everything  done well by the grace of god.'),
(84, 'http://www.yesinteriors.online/goodlf/uploads/programs/oO6WPBr7.jpg', 62, 11, 0, '1970-01-01', 'Children', 'children enjoyed a lot,glory to Jesus'),
(85, 'http://www.yesinteriors.online/goodlf/uploads/programs/ngBZf5h1.jpg', 62, 11, 0, '1970-01-01', 'Class time', 'children were so exited during craft work.'),
(86, 'http://www.yesinteriors.online/goodlf/uploads/programs/hoJH0Ia1.jpg', 61, 14, 0, '1970-01-01', 'General session-stage', 'sgsgshh'),
(87, 'http://www.yesinteriors.online/goodlf/uploads/programs/qCG6TBHy.jpg', 52, 26, 0, '1970-01-01', 'Children', 'holy hearts '),
(88, 'http://www.yesinteriors.online/goodlf/uploads/programs/3ouy7Rjm.jpg', 58, 15, 0, '1970-01-01', 'General session-stage', 'general session'),
(89, 'http://www.yesinteriors.online/goodlf/uploads/programs/CKhRxrFn.jpg', 63, 19, 0, '1970-01-01', 'Class time', 'Class by G.B.Praveen kumar.'),
(90, 'http://www.yesinteriors.online/goodlf/uploads/programs/gOirH8Bo.jpg', 56, 13, 0, '1970-01-01', 'Class time', 'class time'),
(91, 'http://www.yesinteriors.online/goodlf/uploads/programs/J4EQUSje.jpg', 53, 22, 0, '1970-01-01', 'Children', 'last day update ');

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
(17, 62, '9951230032', 'children enjoyed a lot today and many new children were attended,many children showed interest to  stories,songs,actions,games..\nwe founded hundreds of smiles in children faces.\n', 'http://www.yesinteriors.online/goodlf/uploads/programs/msEpf5Dt.jpg', '2019-01-14', 'livingstone1020@gmail.com', 11, 'Individual/Children', 0),
(18, 52, '9392762909', 'testing for living ston', 'http://www.yesinteriors.online/goodlf/uploads/programs/qUl1CSLn.jpg', '2019-01-14', 'testing', 26, 'Others', 0),
(19, 62, '9951230032', 'Everything went on successfully by the grace of god,hundreds of smiling faces were danced with their hearts,they forgotten everything and heated the stories,and many new children were attended in this year by the grace of god.', 'http://www.yesinteriors.online/goodlf/uploads/programs/fo83p0O2.jpg', '2019-01-14', 'livingstone1020@gmail.com ', 11, 'Teachers impression', 0),
(20, 62, '9951230032', 'Everything went on successfully by the grace of god,hundreds of smiling faces were danced with their hearts,they forgotten everything and heared the stories,and many new children were attended in this year by the grace of god.', 'http://www.yesinteriors.online/goodlf/uploads/programs/6a7OywuX.jpg', '2019-01-14', 'livingstone1020@gmail.com ', 11, 'Teachers impression', 0);

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
(64, '1970-01-01', '1am', '11pm', 52),
(65, '1970-01-01', '9am', '5pm', 53),
(66, '1970-01-01', '9am', '6pm', 54),
(67, '1970-01-01', '9am', '4am', 55),
(68, '1970-01-01', '9am', '4pm', 56),
(69, '1970-01-01', '9am', '5pm', 57),
(70, '1970-01-01', '9am', '4pm', 58),
(71, '1970-01-01', '9am', '4pm', 59),
(72, '1970-01-01', '9am', '4pm', 60),
(73, '1970-01-01', '9am', '4pm', 61),
(74, '1970-01-01', '9am', '5pm', 62),
(75, '1970-01-01', '8am', '6pm', 63),
(76, '1970-01-01', '10am', '5pm', 64),
(77, '1970-01-01', '8am', '6pm', 65),
(78, '1970-01-01', '9am', '5pm', 66),
(79, '1970-01-01', '9am', '5pm', 67),
(80, '1970-01-01', '9am', '6pm', 68),
(81, '1970-01-01', '9am', '4pm', 69),
(82, '1970-01-01', '9am', '4pm', 69),
(83, '1970-01-01', '8am', '4pm', 69);

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
(15, 'bggg', 'fykhcbcv', '668689', '866896', 1, 'Cheque', '6886886', 'hcccnjv', 'http://www.yesinteriors.online/goodlf/uploads/programs/AHoTJtyl.jpg', 'soundvdvdbxh', 22, 'fhhfhgv', 'sound and lighting'),
(16, 'Joseph', 'Shanthinagar ', '9010775089', '1000', 1, 'Cash', '', '', 'http://www.yesinteriors.online/goodlf/uploads/programs/FRpsZ1hy.jpg', 'Praveen ', 23, 'Joseph ', 'VBS Gas');

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
  MODIFY `daywise_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `finance_report`
--
ALTER TABLE `finance_report`
  MODIFY `finance_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `participant_type`
--
ALTER TABLE `participant_type`
  MODIFY `participant_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `program_images`
--
ALTER TABLE `program_images`
  MODIFY `program_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `program_names`
--
ALTER TABLE `program_names`
  MODIFY `program_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_review`
--
ALTER TABLE `program_review`
  MODIFY `program_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `program_staff`
--
ALTER TABLE `program_staff`
  MODIFY `program_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_times`
--
ALTER TABLE `program_times`
  MODIFY `program_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`finance_id`) REFERENCES `finance` (`finance_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
