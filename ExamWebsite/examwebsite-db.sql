-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 08:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examwebsite-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbanswer`
--

CREATE TABLE `tbanswer` (
  `clAsID` int(9) UNSIGNED NOT NULL,
  `clQsID` int(9) UNSIGNED NOT NULL,
  `clAsBody` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbanswer`
--

INSERT INTO `tbanswer` (`clAsID`, `clQsID`, `clAsBody`) VALUES
(1, 1, 'View'),
(1, 3, 'thppppppp;'),
(2, 1, 'Function'),
(2, 3, 'hu?'),
(3, 1, 'Index'),
(3, 3, 'o:'),
(4, 1, 'Stored procedure'),
(5, 1, 'Trigger'),
(6, 2, 'TESTANSWERHERE');

-- --------------------------------------------------------

--
-- Table structure for table `tbexam`
--

CREATE TABLE `tbexam` (
  `clExID` int(9) UNSIGNED NOT NULL,
  `clExName` varchar(500) NOT NULL,
  `clExDescription` varchar(2000) NOT NULL,
  `clExInstructions` varchar(3000) NOT NULL,
  `clExPublish` int(1) UNSIGNED NOT NULL,
  `clExLastEditedBy` int(9) UNSIGNED NOT NULL,
  `clExPublishedBy` int(9) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbexam`
--

INSERT INTO `tbexam` (`clExID`, `clExName`, `clExDescription`, `clExInstructions`, `clExPublish`, `clExLastEditedBy`, `clExPublishedBy`) VALUES
(1, 'Data Structures', 'A basic exam about Data Structures and its concepts', 'Answer the questions.', 1, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbquestion`
--

CREATE TABLE `tbquestion` (
  `clQsID` int(9) UNSIGNED NOT NULL,
  `clExID` int(9) UNSIGNED NOT NULL,
  `clQsBody` varchar(3000) NOT NULL,
  `clQsType` int(1) UNSIGNED NOT NULL,
  `clQsCorrectAnswer` varchar(7000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbquestion`
--

INSERT INTO `tbquestion` (`clQsID`, `clExID`, `clQsBody`, `clQsType`, `clQsCorrectAnswer`) VALUES
(1, 1, 'The terms \"bitmap,\" \"b-tree,\" and \"hash\" refer to which type of database structure?', 1, '3,4'),
(2, 1, 'TEST ______?', 0, '6'),
(3, 1, 'iopp?', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbuseranswer`
--

CREATE TABLE `tbuseranswer` (
  `clUeID` int(9) UNSIGNED NOT NULL,
  `clUaQuestionID` int(9) UNSIGNED NOT NULL,
  `clUaAnswer` varchar(7000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbuseranswer`
--

INSERT INTO `tbuseranswer` (`clUeID`, `clUaQuestionID`, `clUaAnswer`) VALUES
(1, 1, '3,4'),
(1, 2, 'ThisIsMyAnswer');

-- --------------------------------------------------------

--
-- Table structure for table `tbuserexam`
--

CREATE TABLE `tbuserexam` (
  `clUeID` int(9) UNSIGNED NOT NULL,
  `clUrID` int(9) UNSIGNED NOT NULL,
  `clExID` int(9) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbuserexam`
--

INSERT INTO `tbuserexam` (`clUeID`, `clUrID`, `clExID`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `clUrID` int(9) UNSIGNED NOT NULL,
  `clUrFirstname` varchar(25) NOT NULL,
  `clUrLastname` varchar(25) NOT NULL,
  `clUrUsername` varchar(25) NOT NULL,
  `clUrPassword` text NOT NULL,
  `clUrLevel` tinyint(1) NOT NULL DEFAULT 1,
  `clUrdate_added` datetime NOT NULL DEFAULT current_timestamp(),
  `clUrcontact_num` varchar(12) DEFAULT NULL,
  `clUremail` varchar(45) DEFAULT NULL,
  `clUraddress` varchar(45) DEFAULT NULL,
  `clUrStatus` int(11) NOT NULL DEFAULT 1,
  `clUrDateDeleted` datetime DEFAULT NULL,
  `clUrLastlogin` datetime NOT NULL DEFAULT current_timestamp(),
  `clUrPhoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`clUrID`, `clUrFirstname`, `clUrLastname`, `clUrUsername`, `clUrPassword`, `clUrLevel`, `clUrdate_added`, `clUrcontact_num`, `clUremail`, `clUraddress`, `clUrStatus`, `clUrDateDeleted`, `clUrLastlogin`, `clUrPhoto`) VALUES
(2, 'Client', 'Test', 'clienttest', 'client', 1, '2022-09-16 09:56:22', '09900000001', 'clienttest@test.com', 'client city', 2, NULL, '2023-03-05 17:41:55', NULL),
(3, 'Keith', 'Test', 'KeithTest', 'client', 1, '2022-10-04 15:48:12', '09900000002', 'keithtest@test.com', 'client city', 1, NULL, '2023-03-04 11:12:40', NULL),
(4, 'Ken', 'Test', 'KenTest', 'client', 1, '2022-10-04 15:49:27', '09900000003', 'kentest@test.com', 'client city', 1, NULL, '2023-03-04 11:12:40', NULL),
(5, 'Jhonny', 'Admin', 'jhonnyAdmin', 'admin', 0, '2022-10-04 15:49:27', '09990009998', 'jhonnytest@test.com', 'admin city', 1, NULL, '2023-03-04 17:03:21', NULL),
(277, 'Angge', 'Agcaoili', 'ANGELICA123', 'ANGELICA123', 0, '2023-03-03 10:46:46', '0321', 'NALA@GMAIL.COM', 'CAINTA', 1, NULL, '2023-03-07 15:27:15', '277_Untitleddesign.png'),
(286, 'admin', 'admintest', 'admintest', 'admin', 0, '2023-03-07 15:30:12', 'adminno', 'admin@gmail.com', 'admin address', 1, NULL, '2023-03-07 15:32:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbanswer`
--
ALTER TABLE `tbanswer`
  ADD PRIMARY KEY (`clAsID`,`clQsID`),
  ADD KEY `fkAs_clQsID` (`clQsID`);

--
-- Indexes for table `tbexam`
--
ALTER TABLE `tbexam`
  ADD PRIMARY KEY (`clExID`);

--
-- Indexes for table `tbquestion`
--
ALTER TABLE `tbquestion`
  ADD PRIMARY KEY (`clQsID`,`clExID`),
  ADD KEY `fkQs_clExID` (`clExID`);

--
-- Indexes for table `tbuseranswer`
--
ALTER TABLE `tbuseranswer`
  ADD PRIMARY KEY (`clUeID`,`clUaQuestionID`);

--
-- Indexes for table `tbuserexam`
--
ALTER TABLE `tbuserexam`
  ADD PRIMARY KEY (`clUeID`),
  ADD KEY `fkUe_clUrID` (`clUrID`),
  ADD KEY `fkUe_clExID` (`clExID`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`clUrID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `clUrID` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbanswer`
--
ALTER TABLE `tbanswer`
  ADD CONSTRAINT `fkAs_clQsID` FOREIGN KEY (`clQsID`) REFERENCES `tbquestion` (`clQsID`);

--
-- Constraints for table `tbquestion`
--
ALTER TABLE `tbquestion`
  ADD CONSTRAINT `fkQs_clExID` FOREIGN KEY (`clExID`) REFERENCES `tbexam` (`clExID`);

--
-- Constraints for table `tbuseranswer`
--
ALTER TABLE `tbuseranswer`
  ADD CONSTRAINT `fkUa_clUeID` FOREIGN KEY (`clUeID`) REFERENCES `tbuserexam` (`clUeID`);

--
-- Constraints for table `tbuserexam`
--
ALTER TABLE `tbuserexam`
  ADD CONSTRAINT `fkUe_clExID` FOREIGN KEY (`clExID`) REFERENCES `tbexam` (`clExID`),
  ADD CONSTRAINT `fkUe_clUrID` FOREIGN KEY (`clUrID`) REFERENCES `tbusers` (`clUrID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
