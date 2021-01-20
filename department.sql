-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 01:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `name`, `description`) VALUES
(1, 'Science Department', 'The mission of the Science Department is to present science as a rational and systematic observation, identification, description, experimental investigation, and theoretical explanation of natural phenomena.'),
(2, 'Physical Sciences Department', 'Physical Sciences provides the foundation courses needed to transfer into four-year programs in chemistry, engineering, earth and planetary science or physics. Studies in the physical sciences also lead to life science programs such as medicine, dentistry, physical therapy and pharmacy, as well as astronomy, meteorology, geology, and environmental chemistry.'),
(3, 'Marketing Department', 'A marketing department promotes your business and drives sales of its products or services. It provides the necessary research to identify your target customers and other audiences. Depending on the company’s hierarchical organization, a marketing director, manager or vice president of marketing might be at the helm. In some businesses, a vice president of sales and marketing oversees both the marketing and sales departments with a strong manager leading each department.'),
(4, 'Finance department', 'Finance is one of the major pillars of any organisation and an essential ingredient to a successful business. Nowadays, a finance department has a broad range of roles to carry out within or outside an organization. The performance and success of any company greatly depend on how well the finance is handled. Keeping a close watch on the financing function is very important for the smooth operation of a company.'),
(5, 'Electrical department', 'Electrical engineers design, develop, and test electrical devices and equipment, including communications systems, power generators, motors and navigation systems, and electrical systems for automobiles and aircraft. They also oversee the manufacture of these devices, systems, and equipment.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `name`, `password`, `registration_date`) VALUES
(1, 'elhariryomar2@gmail.com', 'Omar', '566695fc666829ffc3ceb06e59157055', '2020-12-25 20:48:02'),
(2, 'ihabelhariry@gmail.com', 'Ihab', '6d297ae02757263a9d55abe664325ce5', '2020-12-25 20:49:46'),
(3, 'ahmedhariry@gmail.com', 'ahmed', '9193ce3b31332b03f7d8af056c692b84', '2020-12-25 20:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
