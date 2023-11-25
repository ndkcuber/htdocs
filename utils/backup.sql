-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 04:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `ID` int(255) NOT NULL,
  `bookname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ID`, `bookname`) VALUES
(1, 'Saigon Shadows - Linh Nguyen'),
(2, 'Hanoi Serenade - Minh Tran'),
(3, 'Mekong Whispers - Mai Le'),
(4, 'Hue Harmony - Quang Nguyen'),
(5, 'Sapa Dreams - Thuy Vuong'),
(6, 'Ha Long Horizon - Quyen Pham'),
(7, 'Dalat Dusk - Anh Hoang'),
(8, 'Red River Rhapsody - Bao Nguyen'),
(9, 'Nha Trang Nocturne - Lan Huynh'),
(10, 'Ho Chi Minh Mirage - Nam Vo'),
(11, 'Vietnam Velvet - Hanh Pham'),
(12, 'Danang Destiny - Tuan Nguyen'),
(13, 'Pho Fantasy - Huong Tran'),
(14, 'Cu Chi Chronicles - Van Nguyen'),
(15, 'Hoi An Harmony - Tuyet Lam'),
(16, 'Vinh Vision - Thanh Tran'),
(17, 'Delta Dreams - Quoc Le'),
(18, 'Vietnamese Vista - Kieu Do'),
(19, 'Halong Bay Horizon - Dinh Pham'),
(20, 'Cao Bang Canvas - My Hoang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
