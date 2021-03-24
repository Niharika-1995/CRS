-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 02:49 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `crsapplicant`
--

CREATE TABLE `crsapplicant` (
  `ApplicantID` int(10) NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gender` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dob` date NOT NULL,
  `mrStatus` int(1) NOT NULL,
  `Nationality` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(12) NOT NULL,
  `Email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Qualification` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Skills` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Interests` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Experience` int(5) NOT NULL,
  `eStatus` int(1) NOT NULL,
  `eEmployer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ref` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IsNotified` int(1) NOT NULL,
  `JobID` int(10) NOT NULL,
  `UserID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crsapplicant`
--

INSERT INTO `crsapplicant` (`ApplicantID`, `Name`, `Gender`, `Dob`, `mrStatus`, `Nationality`, `Phone`, `Email`, `Address`, `Qualification`, `Skills`, `Interests`, `Experience`, `eStatus`, `eEmployer`, `Ref`, `IsNotified`, `JobID`, `UserID`) VALUES
(3, 'pooja', 'Female', '1996-08-07', 0, 'Indian', 2147483647, 'pooja@gmail.com', 'Bbsr', 'B.Sc', 'php', 'Travelling', 1, 0, '0', '0', 0, 0, 'pooja'),
(6, 'Niha', 'Female', '2021-01-23', 0, 'ind', 789645, 'a@gmail.com', 'bbsr', 'B.Sc', 'hjj', 'i', 1, 0, '0', '0', 0, 0, 'niha'),
(7, 'ram', 'Male', '2021-01-01', 0, 'indian', 4585, 'abc@gmail.com', 'chennai', 'B.Sc', 'php', 'cooking', 2, 0, '0', '0', 0, 0, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `crsinterview`
--

CREATE TABLE `crsinterview` (
  `JobID` int(10) NOT NULL,
  `intdate` date NOT NULL,
  `inttime` time NOT NULL,
  `place` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crsinterview`
--

INSERT INTO `crsinterview` (`JobID`, `intdate`, `inttime`, `place`, `note`) VALUES
(1, '2021-01-22', '10:57:00', 'sbp', 'come with cv'),
(2, '2020-12-31', '05:46:00', 'sbp', 'cv'),
(6, '2020-12-30', '14:14:00', 'bbsr', 'come with cv'),
(21, '2021-04-16', '17:15:00', 'bbsr', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `crsjobsopen`
--

CREATE TABLE `crsjobsopen` (
  `JobID` int(10) NOT NULL,
  `Title` text NOT NULL,
  `Category` text NOT NULL,
  `Qualification` text NOT NULL,
  `Skills` text NOT NULL,
  `Experience` text NOT NULL,
  `Place` text NOT NULL,
  `Salary` text NOT NULL,
  `nVacant` int(3) NOT NULL,
  `IsScheduled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crsjobsopen`
--

INSERT INTO `crsjobsopen` (`JobID`, `Title`, `Category`, `Qualification`, `Skills`, `Experience`, `Place`, `Salary`, `nVacant`, `IsScheduled`) VALUES
(1, 'Developer', 'Software', 'BA', 'c++', '1', 'bbsr', '20k', 2, 0),
(6, 'Engineer', 'Software', 'MCA', 'c,java', '9', 'chennai', '1000000', 5, 0),
(7, 'Teacher', 'Software', 'BBA', 'management', '1', 'bbsr', '20k', 3, 0),
(15, 'HR ', 'Software', 'MBA', 'hr', '10', 'bbsr', '10k', 2, 0),
(16, 'Manager', 'Hardware', 'MBA', 'HR', '2', 'sbp', '9k', 10, 0),
(19, 'Java Developer', 'Software', 'BCA', 'Java', '1', 'Dhenkanal', '6k', 4, 0),
(20, 'officer', 'Software', 'MCA', 'it', '1', 'bbsr', '10000', 10, 0),
(21, 'php developer', 'Software', 'B.Sc', 'php', '3', 'bbsr', '10k', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crsresumes`
--

CREATE TABLE `crsresumes` (
  `ApplicantID` int(10) NOT NULL,
  `Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crsresumes`
--

INSERT INTO `crsresumes` (`ApplicantID`, `Title`) VALUES
(7, 'Niharika Panda.pdf'),
(6, 'Niharika Panda.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `ApplicantID` text NOT NULL,
  `JobID` int(10) NOT NULL,
  `IsSelected` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ApplicantID`, `JobID`, `IsSelected`) VALUES
('pooja', 16, 0),
('niha', 1, 0),
('niha', 6, 0),
('niha', 19, 0),
('niha', 16, 0),
('pooja', 15, 0),
('niha', 20, 1),
('ram', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Passwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Role` int(1) NOT NULL,
  `Status` int(1) NOT NULL,
  `LastLogin` date NOT NULL,
  `SecQues` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SecAns` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Passwd`, `Role`, `Status`, `LastLogin`, `SecQues`, `SecAns`) VALUES
('admin', '751cb3f4aa17c36186f4856c8982bf27', 1, 1, '2021-03-13', '', ''),
('niha', 'c80179abb57ab6f1ec157a8c02a1764e', 0, 0, '2021-01-07', 'What is your childhood fantasy  ?', 'dance'),
('pooja', '10f5c827653c15265a63d2f69ccbc75c', 0, 0, '2021-01-07', 'What is your fathers name ?', 'jiban'),
('ram', '99f207448dd9ca75cd2751bb314c8e37', 0, 0, '2021-01-07', 'What is your fav horror movie ?', 'haunted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crsapplicant`
--
ALTER TABLE `crsapplicant`
  ADD PRIMARY KEY (`ApplicantID`);

--
-- Indexes for table `crsinterview`
--
ALTER TABLE `crsinterview`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `crsjobsopen`
--
ALTER TABLE `crsjobsopen`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crsapplicant`
--
ALTER TABLE `crsapplicant`
  MODIFY `ApplicantID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crsjobsopen`
--
ALTER TABLE `crsjobsopen`
  MODIFY `JobID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
