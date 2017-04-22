-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 10:15 PM
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
  `type` varchar(20) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `champs`
--

INSERT INTO `champs` (`cid`, `qid`, `nom`, `type`, `ordre`) VALUES
(1, 8, 'How are you?', 'Text', 1),
(2, 8, 'What is your age?', 'Number', 4),
(3, 8, 'What do you like from this list?', '["Mary","Peter"]', 3),
(4, 8, 'What is your email?', 'Email', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donnees`
--

CREATE TABLE `donnees` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `valeur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(8, 'Questionaire de football', 1),
(12, 'Questionaire d\'un autre truc', 1),
(13, 'Questionaire de de', 1),
(14, 'Questionaire de test', 1),
(15, 'Questionaire de voila', 1),
(50, 'Questionaire de chocolate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saisie`
--

CREATE TABLE `saisie` (
  `sid` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `saisie`
--
ALTER TABLE `saisie`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
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
