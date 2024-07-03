-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 12:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `agent_location` varchar(50) NOT NULL,
  `agent_photo` varchar(50) NOT NULL,
  `agent_facebook` varchar(200) DEFAULT NULL,
  `agent_instagram` varchar(200) DEFAULT NULL,
  `agent_twitter` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_name`, `agent_location`, `agent_photo`, `agent_facebook`, `agent_instagram`, `agent_twitter`) VALUES
(1, 'swarup palange', 'kolhapur', 'pic-1.png', 'https://facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/'),
(2, 'sangita patil', 'nipani', 'pic-2.png', 'https://facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/'),
(3, 'shubham chougule', 'belgaon', 'pic-3.png', 'https://facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `subject`, `message`) VALUES
(1, 'shubham71020012@gmail.com', 'help', 'dwwddffff'),
(2, 'temp@gmail.com', 'need flats ', 'near kolhapur');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(11) NOT NULL,
  `prop_name` varchar(100) NOT NULL,
  `prop_address` varchar(100) NOT NULL,
  `prop_type` varchar(20) NOT NULL,
  `prop_size` int(10) NOT NULL,
  `prop_beds` int(2) NOT NULL,
  `prop_baths` int(2) NOT NULL,
  `prop_price` int(10) NOT NULL,
  `prop_posted_date` date DEFAULT NULL,
  `prop_imageData` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `prop_name`, `prop_address`, `prop_type`, `prop_size`, `prop_beds`, `prop_baths`, `prop_price`, `prop_posted_date`, `prop_imageData`) VALUES
(1, 'parvati complex', 'shivaji peth, kolhapur 402923', 'For Rent', 4000, 2, 2, 13000, '2022-05-10', 'img-11.jpg'),
(2, 'shanti complex', '13th Lane Rajarampuri kolhapur 419283', 'Flat', 6000, 3, 2, 20000, '2022-05-30', 'img-2.jpg'),
(3, 'Madhura Complex', 'Shiv Shankar nagar, nipani 492222', 'Flat', 9600, 5, 5, 30000, '2022-05-17', 'img-33.jpg'),
(6, 'Pyramid Nest ', 'Pyramid Nest in Mankapur, Nagpur by Pyramid Group Builders is a residential project.', 'Row house', 452, 3, 4, 83839, '2022-05-09', 'img-7.jpg'),
(7, 'Residential Land for Sale', 'in Kagal, Kolhapur, Maharashtra\r\n', 'Land ', 2663, 0, 0, 820000, '2022-05-02', 'img-10.jpg\r\n'),
(11, 'Residential Apartment for Sale', 'in Residential Apartment, Rajendra Nagar, , Kolhapur, Maharashtra', 'Apartment ', 740, 2, 1, 4000000, '2022-04-04', 'img-55.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(4, 'prime_communication2021', 'shubham7102001@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'shubham', 'shubham71020012@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'sssss', 'dwdd@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
