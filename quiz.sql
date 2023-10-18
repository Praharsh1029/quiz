-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 03:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(33, 'satyapriyavanacharla@gmail.com', 76441, 1685423830),
(34, 'satyapriyavanacharla@gmail.com', 19926, 1685427042),
(35, 'tarunchintu92@gmail.com', 22856, 1685429855),
(36, 'tarunchintu92@gmail.com', 80133, 1685429968),
(37, 'tarunchintu92@gmail.com', 14084, 1686858031),
(38, 'tarunchintu92@gmail.com', 69089, 1686858074),
(39, 'tarunchintu92@gmail.com', 47609, 1686858093),
(40, 'vvsatyapriya01@gmail.com', 75611, 1686895851),
(41, 'vvsatyapriya01@gmail.com', 49739, 1686895856),
(42, 'vvsatyapriya01@gmail.com', 76695, 1686895861);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `QUIZ_ID` int(11) NOT NULL,
  `TOPIC_NAME` varchar(30) DEFAULT NULL,
  `SUB_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`QUIZ_ID`, `TOPIC_NAME`, `SUB_ID`) VALUES
(1, 'PAGING', 1),
(2, 'SCHEDULING', 1),
(3, 'STACKS', 4),
(4, 'PAGING', 1),
(5, 'SCHEDULING', 1),
(6, 'DEADLOCKS', 1),
(7, 'DEADLOCKS', 1),
(8, 'STACKS', 4),
(9, 'TIME COMPLEXITY', 4),
(10, 'TREES', 4),
(11, 'TREES', 4),
(12, 'GRAPHS', 4),
(13, 'GRAPHS', 4),
(14, 'ABSTRACTION', 5),
(15, 'ENCAPSULATION', 5),
(16, 'INHERITANCE', 5),
(17, 'POLYMORPHISM', 5),
(18, 'INHERITANCE', 5),
(19, 'CLASS AND OBJECTS', 5),
(20, 'JAVASCRIPT', 2),
(21, 'JAVASCRIPT', 2),
(22, 'HTML', 2),
(23, 'CSS', 2),
(24, 'HTML', 2),
(25, 'CSS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `userid` int(11) NOT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `q18` int(11) DEFAULT NULL,
  `q19` int(11) DEFAULT NULL,
  `q20` int(11) DEFAULT NULL,
  `q21` int(11) DEFAULT NULL,
  `q22` int(11) DEFAULT NULL,
  `q23` int(11) DEFAULT NULL,
  `q24` int(11) DEFAULT NULL,
  `q25` int(11) DEFAULT NULL,
  `num_quizzes` int(11) DEFAULT NULL,
  `totalscore` int(11) DEFAULT NULL,
  `accuracy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`userid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `num_quizzes`, `totalscore`, `accuracy`) VALUES
(34, 3, 0, 6, 2, 3, 1, 6, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, 10, 29, 48),
(35, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, 25),
(36, 2, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 5, 42),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SUB_ID` int(11) NOT NULL,
  `SUB_N` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SUB_ID`, `SUB_N`) VALUES
(1, 'Operating System'),
(2, 'Web Development'),
(3, 'Networks'),
(4, 'Data Structures'),
(5, 'OBJECT ORIENTED PROGRAMMING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` int(255) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `username`, `email`, `email_verified`, `password`, `date`) VALUES
(34, 0, 20, 'tarunmeka', 'tarunchintu92@gmail.com', 'tarunchintu92@gmail.com', '9e69e7e29351ad837503c44a5971edebc9b7e6d8601c89c284b1b59bf37afa80', '2023-06-14 15:28:12'),
(35, 0, 20, 'tarunn', 'tarunmeka31@gmail.com', 'tarunmeka31@gmail.com', '88b1cca59060320e5e5662a7da636884eb7580f4dc7e22cfb6f88b8f99045a71', '2023-06-14 15:38:09'),
(36, 0, 21, 'satyapriya', 'satyapriyavanacharla@gmail.com', NULL, 'e0a952e93b37ff45121e2c9b7f7f81b7e82dc15209f5992825456c7933078ef4', '2023-06-14 19:03:20'),
(37, 0, 20, 'tarunn', 'tar@gmail.com', NULL, '0585ecb318af83c000f5ad8b5d84c9a109a1896f9429d0dc08148c4407036a20', '2023-06-15 19:47:22'),
(38, 0, 21, 'satya', 'vvsatyapriya01@gmail.com', NULL, 'e45d90957eec7387726c6a1b174da7b566a24ff4cb060dcbcdfebb931a93ffe3', '2023-06-16 08:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `expires` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `code`, `expires`, `email`) VALUES
(19, 93297, 1685424245, 'satyapriyavanacharla@gmail.com'),
(20, 86087, 1685430330, 'tarunchintu92@gmail.com'),
(21, 51616, 1686233809, 'tarunchintu92@gmail.com'),
(22, 90250, 1686233891, 'tarunchintu92@gmail.com'),
(23, 58206, 1686682611, 'tarunchintu92@gmail.com'),
(24, 87483, 1686738501, 'tarunchintu92@gmail.com'),
(25, 43836, 1686749307, 'tarunchintu92@gmail.com'),
(26, 35635, 1686749896, 'tarunchintu92@gmail.com'),
(27, 19656, 1686750510, 'tarunmeka31@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`QUIZ_ID`),
  ADD KEY `SUB_ID` (`SUB_ID`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SUB_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`),
  ADD KEY `name` (`name`),
  ADD KEY `age` (`age`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expires`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `QUIZ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `SUB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`SUB_ID`) REFERENCES `subjects` (`SUB_ID`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
