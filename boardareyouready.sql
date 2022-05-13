-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 05:09 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boardareyouready`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_all`
--

CREATE TABLE `member_all` (
  `pk` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_all`
--

INSERT INTO `member_all` (`pk`, `username`, `password`, `status`, `img`) VALUES
(2, 'test', '1234', 'M', 'i1792wallpaperflare.com_wallpaper.jpg'),
(3, 'test2', '1234', 'M', 'u1.png'),
(4, 'test3', '1234', 'M', 'u2.png');

-- --------------------------------------------------------

--
-- Table structure for table `postdata`
--

CREATE TABLE `postdata` (
  `pk` int(11) NOT NULL,
  `member` text NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `create_date` text NOT NULL,
  `create_date2` text NOT NULL,
  `create_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postdata`
--

INSERT INTO `postdata` (`pk`, `member`, `title`, `detail`, `create_date`, `create_date2`, `create_time`) VALUES
(2, '2', 'หาเพื่อนเล่นเกม', 'หาเพื่อนเล่นเกม', '22-04-2022', '2022-04-22', '12:04'),
(3, '3', 'หาเพื่อนเล่นเกม', 'Eternal Rerutn : Black Survival', '22-04-2022', '2022-04-22', '12:04'),
(4, '4', 'หาเพื่อนเล่น lol EUW - EUNE', 'เพิ่งเริ่มเล่นครับ', '22-04-2022', '2022-04-22', '12:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_all`
--
ALTER TABLE `member_all`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `postdata`
--
ALTER TABLE `postdata`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_all`
--
ALTER TABLE `member_all`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `postdata`
--
ALTER TABLE `postdata`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
