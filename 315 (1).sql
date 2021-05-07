-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 09:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `315`
--

-- --------------------------------------------------------

--
-- Table structure for table `co_register`
--

CREATE TABLE `co_register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_register`
--

INSERT INTO `co_register` (`id`, `name`, `username`, `number`, `password`) VALUES
(1, 'Botlhe Tseme', 'admin', 75547635, '202cb962ac59075b964b07152d234b70'),
(2, 'Lesego', 'kb', 75547635, '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Botlhe Tseme', 'admin', 75547635, '202cb962ac59075b964b07152d234b70'),
(4, 'Botlhe Tseme', 'admin', 75547635, '202cb962ac59075b964b07152d234b70'),
(5, 'Botlhe Tseme', 'admin', 75547635, '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'Red Cross', 'admin', 75547635, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `donation` varchar(100) NOT NULL,
  `specify` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `username`, `number`, `type`, `donation`, `specify`, `date`, `status`) VALUES
(10, 'Botlhe Tseme', 'admin', 75547635, '900', 'on', 'Botlhe Tseme', '2021-05-06', 'Approved'),
(11, 'Botlhe Tseme', 'tse02398', 75547635, '79000', 'on', 'Botlhe Tseme', '2021-05-06', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `donor_register`
--

CREATE TABLE `donor_register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_register`
--

INSERT INTO `donor_register` (`id`, `name`, `username`, `password`) VALUES
(1, '', 'tsemester', '0d9095b0d6bbe98ea0c9c02b11b59ee3'),
(2, '', 'lesego23', '25d55ad283aa400af464c76d713c07ad'),
(3, '', '123', '202cb962ac59075b964b07152d234b70'),
(4, '', 'tse02398', '202cb962ac59075b964b07152d234b70'),
(5, '', 'nko00476', '202cb962ac59075b964b07152d234b70'),
(6, '', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `price` int(10) NOT NULL,
  `availability` varchar(2) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `description`, `quantity`, `price`, `availability`, `country`) VALUES
('bag001', 'Bag', 'Make With Italian ', '2', 101, 'Ye', 'Botswana'),
('sho001', 'Shoes ', 'Made with leather', '10', 150, 'No', 'Botswaa'),
('aaa000', 'aaa', 'TV', '2', 45, 'No', 'Botswana'),
('Bag001', 'Bag ', 'Bag ', '1', 20, 'No', 'Botswana ');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `type` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `assign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `username`, `number`, `type`, `location`, `date`, `status`, `assign`) VALUES
(3, 'Botlhe Tseme', 'admin', 75547635, 79000, 'Francistown', '2021-05-06', 'Requested', '79000 '),
(4, 'Botlhe Tseme', 'admin', 75547635, 900, 'Francistown', '2021-05-06', 'Requested', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `id`) VALUES
('tse02398', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co_register`
--
ALTER TABLE `co_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_register`
--
ALTER TABLE `donor_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `co_register`
--
ALTER TABLE `co_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donor_register`
--
ALTER TABLE `donor_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
