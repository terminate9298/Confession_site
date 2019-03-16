-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2019 at 06:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confession`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `conn_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_comm` datetime NOT NULL,
  `comm_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`conn_id`, `time_comm`, `comm_id`, `comments`, `username`) VALUES
('daf2aa90595bc3cbe4ffdfab1e0aa032', '2019-03-16 22:39:02', '0d2f435065293d5ac1473914c07b6f21', 'sample', 'Hey'),
('f5ed72a200d6d448e6335e678641d428', '2018-12-24 13:31:21', '53152b72e629a7e18b587edf58ee3f2e', 'love', 'hey'),
('f5ed72a200d6d448e6335e678641d428', '2018-12-24 13:31:37', 'a8b9742be90e07957afa0827ae36934b', 'love', 'hey'),
('f5ed72a200d6d448e6335e678641d428', '2018-12-24 13:31:29', 'd13fd74484d1503ac0ba8cd1ee8e05f6', 'love', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `confess`
--

CREATE TABLE `confess` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conn_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confession` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_conn` datetime NOT NULL,
  `year` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeling` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confess`
--

INSERT INTO `confess` (`username`, `conn_id`, `confession`, `time_conn`, `year`, `feeling`) VALUES
('dsadsadsa', '02386f94da0d504a4a86043a49be0deb', 's ad dsa sda  sda ds dsa  sd s', '2018-12-24 00:29:41', '1', '3'),
('sample', '5e8ff9bf55ba3508199d22e984129be6', 'sample', '2018-12-24 13:36:47', '1', '1'),
('Sample', 'daf2aa90595bc3cbe4ffdfab1e0aa032', 'Anything', '2019-03-16 22:38:46', '3', '4'),
('💻 👍👍💻 👍👍', 'f5ed72a200d6d448e6335e678641d428', '💻 👍👍💻 👍👍💻 👍👍💻 👍👍', '2018-12-24 01:20:02', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `confess`
--
ALTER TABLE `confess`
  ADD PRIMARY KEY (`conn_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
