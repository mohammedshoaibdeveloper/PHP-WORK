-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 05:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `text` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `text`, `link`) VALUES
(1, 'Google', 'https://www.google.com/'),
(2, 'facebook', 'https://www.youtube.com/'),
(4, 'brothers', 'http://brothers-company.com/index.html'),
(5, 'privilage', 'http://www.privilegecommunication.com/hr.html'),
(6, 'xsens', 'https://www.xsens.com/products/'),
(7, 'mouser', 'https://www.mouser.co.uk/ProductDetail/Google-AIY/G950-00865-01?qs=sGAEpiMZZMuLtVtGHP2pB8ro5wXumK0NVhy%2F36yWLelE3PXSR9Jqiw=='),
(8, 'w3school', 'https://www.w3schools.com/'),
(9, 'gmail', 'https://www.fiverr.com/florin_alex/do-any-photoshop-editing-you-need?context_referrer=search_gigs&source=top-bar&ref_ctx_id=5bfd4a6f-be02-4c8e-b864-b05c4610f06f&pckg_id=1&pos=1&context_type=auto&funnel=556ba572-9a29-4a0b-adf8-7f353c2b15f7'),
(10, 'Excel', 'https://www.microsoft.com/en-us/learning/exam-77-729.aspx');

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `PASSWORD` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`ID`, `NAME`, `PASSWORD`) VALUES
(1, 'shakeeb', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `password`, `number`, `image`, `gender`, `role`) VALUES
(28, 'hassan', 'hassan@gmail.com', '12345', '03482102017', '32130353_177669723057856_7048991353732071424_n.jpg', 'Male', 'publisher'),
(29, 'sania', 'sania@gmail.com', '12345', '034565765', 'download.jfif', 'Male', 'admin'),
(30, 'shahzaib', 'shahzaib@gmail.com', '12345', '03453456765', '15697687_1701866933438483_3858439754225510292_n.jpg', 'Male', 'publisher'),
(31, 'sarfaraz', 'sarfaraz@gmail.com', '12345', '0345346755', 'download.jfif', 'Male', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(9, 'admin', '$2y$10$Hk4FmUDA3LbmHpU9YVqdq.yws.3wviCWAoBXleAR.CVAmJWE2Qaf6'),
(10, 'shakeeb', '$2y$10$ylG8GBTUolL8u/nkh9U3GuYAoNEmI1IQ0HnfS4lpvMS6GlIp4HNzi'),
(14, 'osama', '123456'),
(15, 'shakeeb', '123456'),
(16, 'safdar', '1234556'),
(17, 'safdar', '46546'),
(18, 'sami', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(20) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `text`) VALUES
(1, 'Hello every one.'),
(2, 'shakeeb'),
(3, 'hassan'),
(4, 'HELLO WHATS UP'),
(5, 'HYEEE'),
(6, 'HYEEE shakeeb'),
(7, 'My name is shakeeb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `role`) VALUES
(1, 'shakeeb', '12345', 'admin'),
(2, 'hassan', '12345', 'publisher'),
(3, 'sameer', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(4, 'sami', '107030ca685076c0ed5e054e2c3ed940', 'publisher'),
(5, 'hassan ', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(6, 'shakiba', '827ccb0eea8a706c4c34a16891f84e7b', 'publisher'),
(7, 'tayyab', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(8, 'shahla', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(9, 'kanwal', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(10, 'ali', '827ccb0eea8a706c4c34a16891f84e7b', 'publisher'),
(11, 'javed', '$2y$10$rFNrfKNnvLBy5P1PT44SCOOonvzxYXPwntET8gv8eoI4XgmWFxDXa', 'Admin'),
(13, 'shakeeb anwar', '$2y$10$acyRP1KaXILSsS7y90yk4.JkPSkQQspDOl9qS6ZLAmMm7yZyWV7Ra', 'Publisher'),
(14, 'kashaf', '$2y$10$oXXZ25BVPjf2puu65UFn2ulbiLVSZdudfqBh8bF.8sTu4rCi2TXPe', 'Admin'),
(15, 'shahid', '$2y$10$FbNAlmFRYjrqGzHKZvOoMOJiNBFCl0OAowE.53QbzFWjcBVs2h2i.', 'Admin'),
(16, 'kamil', '$2y$10$/YHXYM/d0gy4azyJ9NdrbuExTdUPI2ExK0raYz3ytrmk26WacDLaW', 'Publisher'),
(17, '', '$2y$10$XwoCJV47KR5zVPMqa3JEP./biuMoh1bKyCv2.tQHR8sQ/srL4HqF6', ''),
(18, '', '$2y$10$2KiwPajlM2upFG32HDgE.OoWCvFxjCUv.SG5ehEJa.9rBBWG03mUO', ''),
(19, '', '$2y$10$vTK4hQIui07140109nyfSeMQoQIVgZTMKtVxKXvX3tNNmXX.NkCCC', ''),
(20, '', '$2y$10$vZ0qgzXljXxYRm.SSP3b/eTbO75hZ44fic.ptnShXf3ovNdXFVCxi', ''),
(21, 'shahbaz', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(22, 'shakeeb', '1234567', 'admin'),
(23, 'moiz', '12345', 'admin'),
(24, 'komal', '123456', ''),
(25, 'hassan', 'shakeeb@345', 'user'),
(26, 'shakeeba', '123456', 'admin'),
(27, '', '$2y$10$oKlP7NHg9iAh2Rojwv1DLuTlqhAMQxgx8aqahqwst9DRKtCPLKb9C', ''),
(28, 'shakeeb', '12345', 'admin'),
(29, 'sami', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(30, 'shoaib', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(31, 'shakir', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(32, 'shakira', '123445', 'admin'),
(33, 'shahzaib', '123456', 'admin'),
(34, 'shahzaib', '123456', 'publisher'),
(35, 'anwar', '12345', 'admin'),
(36, 'shoaib', 'khan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
