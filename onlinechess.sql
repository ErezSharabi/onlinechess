-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2020 at 04:35 PM
-- Server version: 5.6.34
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinechess`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `opp1` int(11) NOT NULL,
  `opp2` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `who` int(11) NOT NULL,
  `switch` int(11) NOT NULL,
  `newgame` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `opp1`, `opp2`, `status`, `who`, `switch`, `newgame`, `time`) VALUES
(1, 1, 2, 0, 2, 0, 0, '2020-10-03 22:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `location` text COLLATE utf8_bin NOT NULL,
  `current` int(11) NOT NULL,
  `old` int(11) NOT NULL,
  `new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `gameid`, `location`, `current`, `old`, `new`) VALUES
(1, 1, 'a1', 1, 0, 0),
(2, 1, 'a2', 2, 0, 0),
(3, 1, 'a3', 3, 0, 0),
(4, 1, 'a4', 4, 0, 0),
(5, 1, 'a5', 5, 0, 0),
(6, 1, 'a6', 3, 0, 0),
(7, 1, 'a7', 2, 0, 0),
(8, 1, 'a8', 1, 0, 0),
(9, 1, 'b1', 6, 0, 0),
(10, 1, 'b2', 6, 0, 0),
(11, 1, 'b3', 6, 0, 0),
(12, 1, 'b4', 0, 0, 0),
(13, 1, 'b5', 6, 0, 0),
(14, 1, 'b6', 6, 0, 0),
(15, 1, 'b7', 6, 0, 0),
(16, 1, 'b8', 6, 0, 0),
(17, 1, 'c1', 0, 0, 0),
(18, 1, 'c2', 0, 0, 0),
(19, 1, 'c3', 0, 0, 0),
(20, 1, 'c4', 0, 0, 0),
(21, 1, 'c5', 0, 0, 0),
(22, 1, 'c6', 0, 0, 0),
(23, 1, 'c7', 0, 0, 0),
(24, 1, 'c8', 0, 0, 0),
(25, 1, 'd1', 0, 0, 0),
(26, 1, 'd2', 0, 0, 0),
(27, 1, 'd3', 0, 0, 0),
(28, 1, 'd4', 6, 0, 0),
(29, 1, 'd5', 0, 0, 0),
(30, 1, 'd6', 0, 0, 0),
(31, 1, 'd7', 0, 0, 0),
(32, 1, 'd8', 0, 0, 0),
(33, 1, 'e1', 0, 0, 0),
(34, 1, 'e2', 0, 0, 0),
(35, 1, 'e3', 0, 0, 0),
(36, 1, 'e4', 0, 0, 0),
(37, 1, 'e5', 0, 0, 0),
(38, 1, 'e6', 0, 0, 0),
(39, 1, 'e7', 0, 0, 0),
(40, 1, 'e8', 0, 0, 0),
(41, 1, 'f1', 0, 0, 0),
(42, 1, 'f2', 0, 0, 0),
(43, 1, 'f3', 0, 0, 0),
(44, 1, 'f4', 0, 0, 0),
(45, 1, 'f5', 0, 0, 0),
(46, 1, 'f6', 0, 0, 0),
(47, 1, 'f7', 0, 0, 0),
(48, 1, 'f8', 0, 0, 0),
(49, 1, 'g1', 16, 0, 0),
(50, 1, 'g2', 16, 0, 0),
(51, 1, 'g3', 16, 0, 0),
(52, 1, 'g4', 16, 0, 0),
(53, 1, 'g5', 16, 0, 0),
(54, 1, 'g6', 16, 0, 0),
(55, 1, 'g7', 16, 0, 0),
(56, 1, 'g8', 16, 0, 0),
(57, 1, 'h1', 11, 0, 0),
(58, 1, 'h2', 12, 0, 0),
(59, 1, 'h3', 13, 0, 0),
(60, 1, 'h4', 15, 0, 0),
(61, 1, 'h5', 15, 0, 0),
(62, 1, 'h6', 13, 0, 0),
(63, 1, 'h7', 12, 0, 0),
(64, 1, 'h8', 11, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `image_choose` text NOT NULL,
  `image_move` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `image`, `image_choose`, `image_move`) VALUES
(1, 'tsariah white', 'tsariah_w.svg', 'tsariah_w_c.svg', 'tsariah_w_m.svg'),
(2, 'Parash White', 'parash_w.svg', 'parash_w_c.svg', 'parash_w_m.svg'),
(3, 'Rats White', 'rats_w.svg', 'rats_w_c.svg', 'rats_w_m.svg'),
(4, 'Queen White', 'queen_w.svg', 'queen_w_c.svg', 'queen_w_m.svg'),
(5, 'King White', 'king_w.svg', 'king_w_c.svg', 'king_w_m.svg'),
(6, 'Solider White', 'solider_w.svg', 'solider_w_c.svg', 'solider_w_m.svg'),
(7, '', '', '', ''),
(8, 'grey', 'grey.svg', '', ''),
(9, 'white', 'white.svg', '', ''),
(10, '', '', '', ''),
(11, 'Tsariah Black', 'tsariah_b.svg', 'tsariah_b_c.svg', 'tsariah_b_m.svg'),
(12, 'Parash Black', 'parash_b.svg', 'parash_b_c.svg', 'parash_b_m.svg'),
(13, 'Rats Black', 'rats_b.svg', 'rats_b_c.svg', 'rats_b_m.svg'),
(14, 'Queen Black', 'queen_b.svg', 'queen_b_c.svg', 'queen_b_m.svg'),
(15, 'King Black', 'king_b.svg', 'king_b_c.svg', 'king_b_m.svg'),
(16, 'Solider Black', 'solider_b.svg', 'solider_b_c.svg', 'solider_b_m.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `pw` text COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pw`, `time`) VALUES
(1, 'eliron', '1234', '2020-10-03 21:34:07'),
(2, 'erez', '1234', '2020-10-03 21:34:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
