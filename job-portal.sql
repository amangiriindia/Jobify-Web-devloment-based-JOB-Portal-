-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 10:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_password`, `admin_username`, `phone`) VALUES
(11, 'amangiri381@gmail.com', '202cb962ac59075b964b07152d234b70', 'Aman Giri', '7070099770'),
(12, 'amangiri381@gmail.com', '202cb962ac59075b964b07152d234b70', 'test', '7070099770');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `sort_description` longtext NOT NULL,
  `category` varchar(250) NOT NULL,
  `tag` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `recent` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `day`, `month`, `year`, `sort_description`, `category`, `tag`, `image`, `description`, `recent`) VALUES
(3, 0, 'dfgh', 'sdg', 'sdfg', '445556', 'sdfghjkl', 'com_logo638.png', 'sdfg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_img` varchar(250) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_img`, `total`) VALUES
(6, 'Software Engineer', 'category_img33.jpg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `subject` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `description`) VALUES
(22, 'Aman Giri', 'amangiri381@gmail.com', 'sdfghjkl', 'dsfghnm,nbvcxc'),
(23, 'Aman Giri', 'amangiri381@gmail.com', 'testing', 'test'),
(24, 'Aman Giri', 'amangiri381@gmail.com', 'dfghj', 'rytrtjkjhghfgdf'),
(27, 'Aman Giri', 'amangiri381@gmail.com', 'dfghj', 'wey '),
(28, 'Aman Giri', 'amangiri381@gmail.com', 'dfghj', 'wertyui'),
(33, 'Akriti', 'Akritikumari67@gmail.com', 'wertykl', 'df'),
(34, 'Akriti', 'Akritikumari67@gmail.com', 'wertykl', 'df'),
(35, 'Akriti', 'Akritikumari67@gmail.com', 'wertykl', 'df'),
(36, 'Akriti', 'Akritikumari67@gmail.com', 'wertykl', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(200) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `com_logo` varchar(255) NOT NULL,
  `com_name` varchar(250) NOT NULL,
  `job_location` varchar(250) NOT NULL,
  `salry` varchar(250) NOT NULL,
  `job_type` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `category_name`, `com_logo`, `com_name`, `job_location`, `salry`, `job_type`, `experience`) VALUES
(10, 'Software Engineer', 'com_logo953.png', 'Amzood', 'America', '$6999', 'Intership', '6 Month'),
(11, 'Digital Marketing', 'com_logo693.png', 'Jobify', 'India', '$3343 - $5000', 'Full Time', '1 Year'),
(12, 'Testing Engineer', 'com_logo24.png', 'Rostal', 'United State', '$4446  -$6090', 'Part Time', '2 year'),
(13, 'Software Engineer', 'com_logo433.png', 'Veola', 'United State', '$5000', 'Work From Home', '2 year');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_deatail`
--

CREATE TABLE `tbl_job_deatail` (
  `id` int(250) NOT NULL,
  `job_id` int(250) NOT NULL,
  `vacancy` varchar(250) NOT NULL,
  `application_date` date NOT NULL,
  `curr_date` date NOT NULL,
  `job_description` longtext NOT NULL,
  `skill_requrird` longtext NOT NULL,
  `education_exprence` longtext NOT NULL,
  `apply_link` longtext NOT NULL,
  `compny_des` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_deatail`
--

INSERT INTO `tbl_job_deatail` (`id`, `job_id`, `vacancy`, `application_date`, `curr_date`, `job_description`, `skill_requrird`, `education_exprence`, `apply_link`, `compny_des`) VALUES
(5, 10, '38', '2022-11-06', '2022-10-28', 'It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.', ' <li>System Software Development</li>\r\n                                   <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>\r\n                                   <li>Research and code , libraries, APIs and frameworks</li>\r\n                                   <li>Strong knowledge on software development life cycle</li>\r\n                                   <li>Strong problem solving and debugging skills</li>', ' <li>3 or more years of professional design experience</li>\r\n                                   <li>Direct response email experience</li>\r\n                                   <li>Ecommerce website design experience</li>\r\n                                   <li>Familiarity with mobile and web apps preferred</li>\r\n                                   <li>Experience using Invision a plus</li>', 'https://www.tensorflow.org/', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `phone_number`, `password`) VALUES
(1, 'Aman Giri', 'amangiri381@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(2, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(3, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(4, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', 'c20ad4d76fe97759aa27a0c99bff6710'),
(5, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(6, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(7, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(8, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(9, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(12, 'Aman Giri', 'amangiri381@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(13, ' script  alert( your account is hacces ) /script ', 'amangiri3851@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(14, '\" script  alert( Password     drtyuifd  dfghjhgfd Did Not Match ) /script ', 'amangiri344481@gmail.com', '7070099770', '202cb962ac59075b964b07152d234b70'),
(15, ' script  alert( account ;:hacced ) /script ', 'amangiri444381@gmail.com', '7070099770', '338721d76cb1e1e379473ad75cacdaa4'),
(16, 'Ankit', 'ankitkr2137@gmail.com', '7256832187', '202cb962ac59075b964b07152d234b70'),
(17, 'Ankit', 'amangiri381@gmail.com', '7256832187', '202cb962ac59075b964b07152d234b70'),
(18, 'Akriti', 'Akritikumari67@gmail.com', '7889201624', '11b9d2244810244f2a785752c243a86a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_deatail`
--
ALTER TABLE `tbl_job_deatail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_job_deatail`
--
ALTER TABLE `tbl_job_deatail`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
