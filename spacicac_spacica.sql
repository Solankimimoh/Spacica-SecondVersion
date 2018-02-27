-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2018 at 04:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spacicac_spacica`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'sartwork4');

-- --------------------------------------------------------

--
-- Table structure for table `imageinfo`
--

CREATE TABLE `imageinfo` (
  `imgid` int(5) NOT NULL,
  `imgname` varchar(300) NOT NULL,
  `imgtype` varchar(400) NOT NULL,
  `imgsize` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imageinfo`
--

INSERT INTO `imageinfo` (`imgid`, `imgname`, `imgtype`, `imgsize`) VALUES
(1, '8-B.jpg', 'image/jpeg', '368479'),
(2, '4-1 (1).JPG', 'image/jpeg', '375427'),
(6, '12-B.JPG', 'image/jpeg', '524716'),
(7, '8-Corten Steel Wall caldding.JPG', 'image/jpeg', '298239'),
(8, '2.jpg', 'image/jpeg', '614214'),
(11, '1.jpg', 'image/jpeg', '595682'),
(12, '7-B.jpg', 'image/jpeg', '505132'),
(13, 'IMG_2124.JPG', 'image/jpeg', '40701'),
(14, '879UERWQ (20).jpg', 'image/jpeg', '2539523'),
(15, 'Mural (41).jpg', 'image/jpeg', '880233'),
(16, '870FCIMC (42).jpg', 'image/jpeg', '125897'),
(18, 'IMG_2745.JPG', 'image/jpeg', '1373433'),
(20, 'IMG_2765.JPG', 'image/jpeg', '1852874'),
(22, 'IMG_4986.JPG', 'image/jpeg', '330120'),
(23, 'IMG_4990.JPG', 'image/jpeg', '954340'),
(24, 'IMG_5007.JPG', 'image/jpeg', '2411166'),
(25, 'IMG_5672.JPG', 'image/jpeg', '2387000'),
(28, 'IMG_6711.JPG', 'image/jpeg', '1522840'),
(29, 'IMG_6717.JPG', 'image/jpeg', '1487168'),
(30, 'IMG_6996.JPG', 'image/jpeg', '142146'),
(32, '89_02.jpg', 'image/jpeg', '808755'),
(36, '2012-01-09 11.08.54.jpg', 'image/jpeg', '121388'),
(37, '2012-01-09 11.06.25.jpg', 'image/jpeg', '110320'),
(38, '2012-01-09 11.11.34.jpg', 'image/jpeg', '125246'),
(39, '2012-01-09 11.19.57.jpg', 'image/jpeg', '140538'),
(40, '2012-01-10 17.18.33.jpg', 'image/jpeg', '93512'),
(41, 'IMG_2764.JPG', 'image/jpeg', '864292');

-- --------------------------------------------------------

--
-- Table structure for table `parentimginfo`
--

CREATE TABLE `parentimginfo` (
  `userid` int(11) NOT NULL,
  `image-title` varchar(50) NOT NULL,
  `image-desc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentimginfo`
--

INSERT INTO `parentimginfo` (`userid`, `image-title`, `image-desc`) VALUES
(10, 'grocery', 'grocery'),
(11, 'Hitik roshan', 'demo hr'),
(12, 'SRK', 'demo srk'),
(13, 'SK', 'demo sk'),
(14, 'AKKI', 'demo aki'),
(15, 'Varun', 'demo varun'),
(16, 'aamir kham', 'demo aamir'),
(19, 'hello', 'demo'),
(20, 'Baby', 'gon \r\nndnfoe\r\nnjofnoiehj \r\nojnofeqojnf\r\nnjofjqoefjpoqfjoa');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(25) NOT NULL,
  `s_img` varchar(500) NOT NULL,
  `s_img_type` varchar(600) NOT NULL,
  `s_img_size` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_img`, `s_img_type`, `s_img_size`) VALUES
(1, '2.JPG', 'image/jpeg', '738740'),
(2, '4.JPG', 'image/jpeg', '796130'),
(5, '10.jpg', 'image/jpeg', '336209'),
(6, '6-B.jpg', 'image/jpeg', '291252'),
(7, 'IMG_3169.jpg', 'image/jpeg', '247053'),
(8, 'children room1.jpg', 'image/jpeg', '615565'),
(10, 'DSC00548.jpg', 'image/jpeg', '734963'),
(11, 'DSC09588.JPG', 'image/jpeg', '898813'),
(13, 'Elevation.JPG', 'image/jpeg', '2167932');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imageinfo`
--
ALTER TABLE `imageinfo`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `parentimginfo`
--
ALTER TABLE `parentimginfo`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imageinfo`
--
ALTER TABLE `imageinfo`
  MODIFY `imgid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `parentimginfo`
--
ALTER TABLE `parentimginfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
