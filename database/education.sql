-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 05:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(5, 'Junagadh'),
(6, 'Rajkot'),
(7, 'Ahemdabad'),
(8, 'Gandhinagar'),
(9, 'Surat'),
(10, 'Anand'),
(11, 'Vadodra'),
(12, 'Dhoraji'),
(13, 'Jetpur'),
(14, 'Jamnagar'),
(15, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `unversity_name` varchar(100) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `city`, `contact_no`, `contact_person`, `email`, `unversity_name`, `courses`, `image`) VALUES
(6, 'DSTC', 'Junagadh', '12345', 'Mr', 'dstc@gmail.com', 'Narshingh', 'M.C.A.,M.Sc(IT),M.B.A', 'DSTC.jpg'),
(7, 'Shree Patel Kelavni Mandal', 'Junagadh', '123456789', 'Mr.Upadhyay', 'pkm@gmail.com', 'Narshingh', 'B.C.A.,B.Com,B.B.A.', 'pkm.jpg'),
(8, 'Marwadi', 'Rajkot', '12345', 'Mr.Upadhyay', '@marwadiuniversity', 'Narshingh', 'B.C.A.,B.Com,B.Sc(IT)', 'mu.jpeg'),
(10, 'Bk Modi Pharmacy College', 'Surat', '23456788', 'Mr Mital', 'bkmodi@gmail.com', 'Narshingh Maheta University', 'B.C.A.,B.Com', 'bk modi s.jpg'),
(11, 'I.I.I.T (Indian Institute Of Information Technology)', 'Surat', '8887776665', 'Mr.Maheta', 'iiit@gmail.com', 'I.I.I.T', 'B.C.A.,B.Sc(IT),M.C.A.,M.Sc(IT),M.B.A,B.Tech,B.Sc,M.tech', 'iiit surat.jpg'),
(12, 'Atmiya University', 'Rajkot', '9876543211', 'Mr. Xyz', 'atmiya@gmail.com', 'AU', 'B.C.A.,B.B.A.,B.Sc(IT),M.C.A.,M.B.A,B.Tech,B.Sc,B.pharma,M.tech', 'au.jpg'),
(13, 'Anand Institute Of Management (AIM)', 'Anand', '5555566666', 'Mr.Abc', 'aim@gmail.com', 'AIM', 'M.C.A.,M.B.A', 'AIM.jpg'),
(14, 'Anand Agricultural University (AAU)', 'Anand', '8888866666', 'Mr.Patel', 'aau123@gmail.com', 'AAU', 'B.Arch.,B.A', 'AAU.jpg'),
(15, 'Shri K.O. SHAH Municipal Arts & Commerce College', 'Dhoraji', '4444433333', 'Mr.Shah', 'shriko@gmail.com', 'Shri K.O. SHAH Municipal Arts & Commerce College', 'B.Com,B.A,M.com', 'dhoraji.jpg'),
(16, 'Parul University', 'Vadodra', '9999988888', 'Mr.JD Sir', 'paruluniv@gmail.com', 'Parul', 'B.C.A.,B.Com,B.B.A.,M.C.A.,M.Sc(IT),M.B.A,B.pharma,B.A+L.L.B,M.com', 'parul.jpg'),
(17, 'Institute Of Hotel Management (IHM)', 'Gandhinagar', '9797979797', 'Mr. Parekh', 'ihm2gandhinagar@gmail.com', 'IHM', 'B.Com,B.B.A.,M.B.A,B.A,M.com,BHM', 'hm gandhinagar.jpg'),
(18, 'Indian Institute Of Management (I.I.M.A)', 'Ahemdabad', '898989865', 'Mr. Parmar', 'iima@gmail.com', 'I.I.M.A', 'B.B.A.,M.B.A,B.pharma,B.A+L.L.B,B.A', 'iim.jpg'),
(19, 'M.P. Shah Medical College', 'Jamnagar', '969669995', 'Mr. Shaikh', 'mpmedicalcollege@gmail.com', 'Government Medical', 'B.Sc(IT),B.pharma,B.ds (Bachelor of Dental Surgery)', 'jamnagar.2.jpg'),
(20, 'Shree G.K. & C.K. BOSAMIA Arts & Commerce College', 'Jetpur', '8787878765', 'Mrs.Ghodasara', 'bosamia@gmail.com', 'Gujrat University', 'B.Com,B.Arch.,B.A,M.com,FHW', 'jetpur.jpg'),
(21, 'Shree Vallabhbhai National Institute Of Technology(SVNIT)', 'Surat', '8787989897', 'Mr. Jadav', 'shreevallabhbhaiit@gmail.com', 'SVNIT', 'B.C.A.,B.Sc(IT),M.C.A.,M.Sc(IT),B.Tech,B.pharma,M.tech', 'svnit surat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `intact_cap` varchar(500) NOT NULL,
  `stream` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `name`, `duration`, `eligibility`, `intact_cap`, `stream`) VALUES
(1, 'B.C.A.', '3 Years', '10+2 with any stream from a recognized board', '240', 'IT'),
(2, 'B.Com', '3 Years', 'Class 12th with Commerce subjects', '240', 'Commerce'),
(3, 'B.B.A.', '3 Years', 'Must have scored 50% and above in class 12th', '240', 'Commerce'),
(4, 'B.Sc(IT)', '3 Years', '12th Science PCM with minimum 55 per cent marks', '240', 'IT'),
(5, 'M.C.A.', '3 Years Or 2 Years(For B.C.A)', 'B.C.A', '240', 'IT'),
(6, 'M.Sc(IT)', '2 Years', 'Bachelorâ€™s degree in a relevant discipline from a recognized university.', '240', 'IT'),
(7, 'M.B.A', 'Full Time MBA 2 Years and Integrated MBA: 5 Years ', '50% in Graduation', '240', 'Management'),
(8, 'B.Tech', '4 Years', 'Should have completed 10+2 in PCM or PCB from a recognized institute/board', '240', 'Engineering'),
(9, 'B.Arch.', '5 Years', '12th Science PCM with minimum 55 per cent marks', '240', 'Science'),
(10, 'B.Sc', '4 Years', 'Candidates must have passed 10+2 in Physics, Chemistry, and Biology (PCB).', '240', 'Science'),
(11, 'B.pharma', '4 Years', '10+2 with minimum 50% aggregate marks in Physics, Chemistry and Biology/Math', '240', 'Science'),
(12, 'B.ds', '5 Years', 'Mathematics or any other elective subject with English as prescribed by the NCERT.', '120', 'Science'),
(14, 'B.A+L.L.B', '5 Years', 'Must be passed in 12th exams', '240', 'Commerce'),
(15, 'B.A', '3 Years', '10+2 with any stream from a recognized board', '240', 'Arts'),
(17, 'M.tech', '2 Years', 'GATE/ JEE Advanced passed', '120', 'Engineering'),
(18, 'M.com', '2 Years', '50% in Graduation', '240', 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL,
  `answers` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cno` int(12) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `cno`, `message`) VALUES
(6, 'FF10321', 'rupareleducation@gmail.com', 123456, 'Very Nice'),
(8, 'Tisha kadecha', 'tishakadecha@gmail.com', 87878787, 'very nice'),
(11, 'Tisha kadecha', 'tishakadecha@gmail.com', 2147483647, 'Very Usefull...');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `cnm` varchar(200) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `usernm` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `cnm`, `course_name`, `usernm`, `email`, `mno`, `status`) VALUES
(1, 'Marwadi', 'B.Com', 'Gada Dhruvi', 'dhruvi@gmail.com', '9876543210', 'Confirm'),
(2, 'Shree Patel Kelavni Mandal', 'B.Com', 'Tisha Kadecha', 'tishakadecha@gmail.com', '87878787', 'pending'),
(3, 'DSTC', 'M.C.A.', 'Tisha', 'tishakadecha@gmail.com', '87878787', 'pending'),
(4, 'Shree Patel Kelavni Mandal', 'B.C.A.', 'Tisha', 'tishakadecha@gmail.com', '87878787', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `user_type` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `mobile_no`, `password`, `gender`, `education`, `dob`, `photo`, `user_type`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456789', '123', NULL, NULL, NULL, NULL, 'admin'),
(3, 'Tisha', 'tishakadecha@gmail.com', '87878787', '1234', 'female', 'B.C.A.', '2003-06-08', 't1.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
