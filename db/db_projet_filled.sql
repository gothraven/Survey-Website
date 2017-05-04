-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 03:06 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_db`
--
CREATE DATABASE IF NOT EXISTS `projet_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet_db`;

-- --------------------------------------------------------

--
-- Table structure for table `champs`
--

CREATE TABLE `champs` (
  `cid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `champs`
--

INSERT INTO `champs` (`cid`, `qid`, `nom`, `type`, `ordre`) VALUES
(1, 1, 'What is your name?', 'lText', 1),
(2, 1, 'How old are you?', 'Number', 2),
(3, 1, 'did you like our chocolate?', 'Yes/No', 3),
(4, 1, 'Any Comments?', 'bText', 4),
(5, 1, 'When was the last time you bought one?', 'Date', 5),
(6, 1, 'Which of these you like most?', '["Nutella","Kinder","Milk Chocolate","Others"]', 6),
(7, 1, 'From 1 to 10 rate our company', 'Range', 7),
(8, 2, 'What is your full name?', 'lText', 1),
(9, 2, 'When you will be here?', 'Date', 2),
(10, 2, 'What is your email?', 'Email', 3),
(11, 2, 'Which kind of room you like?', '["ROOM","T1","T2","LUXURY"]', 4),
(12, 2, 'Any Comments?', 'bText', 5);

-- --------------------------------------------------------

--
-- Table structure for table `donnees`
--

CREATE TABLE `donnees` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `valeur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donnees`
--

INSERT INTO `donnees` (`sid`, `cid`, `valeur`) VALUES
(1, 1, 'Jeff Mark'),
(1, 2, '20'),
(1, 3, 'No'),
(1, 4, 'I\'m testing the website '),
(1, 5, '2017-05-11'),
(1, 6, 'Kinder'),
(1, 7, '5'),
(2, 8, 'Mark Jeff'),
(2, 9, '2017-05-20'),
(2, 10, 'test@email.com'),
(2, 11, 'ROOM'),
(2, 12, 'I would like a room in the first floor'),
(3, 1, 'Tester Test'),
(3, 2, '50'),
(3, 3, 'Yes'),
(3, 4, 'No comment'),
(3, 5, '2017-05-05'),
(3, 6, 'Others'),
(3, 7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `qid` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionnaires`
--

INSERT INTO `questionnaires` (`qid`, `intitule`, `uid`) VALUES
(1, 'Questionaire de chocolate', 1),
(2, 'Questionnaire d\'hotel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saisie`
--

CREATE TABLE `saisie` (
  `sid` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saisie`
--

INSERT INTO `saisie` (`sid`, `reference`) VALUES
(1, 'e8hzb9cyxit74rtud9rw'),
(2, '7xh1joornecgs8jynk3l'),
(3, 'lmz1u8msd0vl21oua45d');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `nom`, `prenom`, `login`, `mdp`, `role`) VALUES
(1, 'Admin', 'User', 'admin', '$2y$10$WUXmfWOTO3gf.QIwxuHH0ecG51cmEsgW5YmHbQaAHcYL6wV11GgOm', 'admin'),
(2, 'Test', 'User', 'test', '$2y$10$rwE2jgPjPrw1i8DBi5xgY.aZuqV..6w9ZEFQmiYAy1G3slnJpKFVy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `champs`
--
ALTER TABLE `champs`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `qid` (`qid`) USING BTREE;

--
-- Indexes for table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`sid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `saisie`
--
ALTER TABLE `saisie`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `champs`
--
ALTER TABLE `champs`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `saisie`
--
ALTER TABLE `saisie`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `champs`
--
ALTER TABLE `champs`
  ADD CONSTRAINT `champs_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `questionnaires` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donnees`
--
ALTER TABLE `donnees`
  ADD CONSTRAINT `donnees_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `saisie` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donnees_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `champs` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD CONSTRAINT `questionnaires_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
