-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2021 at 02:41 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csmfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityaera`
--

CREATE TABLE `activityaera` (
  `activityareaid` int(11) NOT NULL,
  `activityareaname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activityaera`
--

INSERT INTO `activityaera` (`activityareaid`, `activityareaname`) VALUES
(1, 'web'),
(2, 'resto');

-- --------------------------------------------------------

--
-- Table structure for table `areaskills`
--

CREATE TABLE `areaskills` (
  `buiscardid` int(11) NOT NULL,
  `skillsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `businesscard`
--

CREATE TABLE `businesscard` (
  `buscardid` int(11) NOT NULL,
  `bustitle` varchar(50) NOT NULL,
  `busrom` varchar(6) NOT NULL,
  `busresum` text NOT NULL,
  `busdescript` text NOT NULL,
  `busactivat` tinyint(1) NOT NULL DEFAULT '0',
  `activityareaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businesscard`
--

INSERT INTO `businesscard` (`buscardid`, `bustitle`, `busrom`, `busresum`, `busdescript`, `busactivat`, `activityareaid`) VALUES
(5, 'ZOZO', 'Eerty', '', '', 1, 1),
(6, 'dfghjk', 'Eerty', 'vbn', 'sdfghj', 1, 1),
(7, 'sdfghjklvghjk', '1', 'vbn', 'sdfghj', 1, 1),
(8, 'vghjkl', 'ghjkl', 'bn,jk;', 'bn,;', 1, 2),
(9, 'cvbn', '12233', 'vjsnzkdlzjf', 'xz,ndlkq,mfnq', 1, 1),
(10, 'victoria', '1234', 'erty', 'erty', 1, 1),
(11, 'ZEZE', '1234', 'zerty', 'zerty', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `certificationsid` int(11) NOT NULL,
  `certificationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diplomas`
--

CREATE TABLE `diplomas` (
  `diplomasid` int(11) NOT NULL,
  `diplomasname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `levelsneeds`
--

CREATE TABLE `levelsneeds` (
  `buisinesscardid` int(11) NOT NULL,
  `diplomasid` int(11) NOT NULL,
  `ceritificationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partnersid` int(11) NOT NULL,
  `partnersname` varchar(255) NOT NULL,
  `partnersadress` text NOT NULL,
  `partnersphone` int(10) NOT NULL,
  `partnerswebsite` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `buisinesscardid` int(11) NOT NULL,
  `partnersid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `level`) VALUES
(1, 'Super Admin', 's_admin', 2),
(2, 'Admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillsid` int(11) NOT NULL,
  `skillsname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersid` int(11) NOT NULL,
  `usersname` varchar(100) NOT NULL,
  `usersfname` varchar(100) NOT NULL,
  `usersmail` varchar(255) NOT NULL,
  `userspwd` varchar(255) NOT NULL,
  `usersactiv` tinyint(1) NOT NULL DEFAULT '0',
  `usertypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersid`, `usersname`, `usersfname`, `usersmail`, `userspwd`, `usersactiv`, `usertypeid`) VALUES
(2, 'toto', 'tata', 'subfabio449@hotmail.com', '$2y$12$.EwFDM7TrcVKX3bQ3au1w.B01CuVnUs/5DXwbzdZpHpfyUGCh0OWi', 1, 2),
(3, 'fabrice', 'ZEZE', 'sdfgh@hotmail.com', '$2y$12$xyXzrNqA70aiiJvZ7Kt49O5fKO8RIcf5/Hh0/dZl219WkArOit7A6', 1, 2),
(4, 'fabrice', 'boubou', 'sdfgh@hotmail.com', '256788', 1, 2),
(5, 'toto', 'tata', 'sdfgh@hotmail.com', '$2y$12$8LcE1bkQwOa8CU5A6bMQEeREBxTY9j/n5IBdqJAIyBhrCae2KjZVu', 1, 2),
(7, 'qsdf', 'zer', 'serrr@rtyujk.com', '$2y$12$qAQQrXjBdUapgFIwrmUKN.rGBqry5cCk7VhlmogNJvU8oZvmnf3OK', 1, 1),
(8, 'dfghjk', 'cvbn', 'sdfghjk', '$2y$12$hmCtZ5h11Xp7vKpWfq2DLuF7nm7Ujt4ZHEQWumD5P2qDWqpsYs15W', 1, 1),
(9, 'toto', 'tatattta', 'sdfgh@dfghj', '$2y$12$99tQ6AUSjlY/B5UC5YKtsOZDXTFspS/LgT1F5eIErHRSN7U8puiSy', 1, 1),
(10, 'eve', 'robi', 'eeeeee@rtyu', '$2y$12$PQVn2Y/AkARQKtrjazUOg.HMXndKrjZa4OXm9xNQVclbwTHmEj7I6', 1, 1),
(11, 'totonnnnnnn', 'tata', 'subfabio449@hotmail.com', '$2y$12$7ZbTuDwiH2ZG0jJavLlbYuio/vVVSXFYG7NQ2gN3duBb08jyyDUp6', 1, 2),
(20, 'sube', 'fabrice', 'rockinprod@gmail.com', '$2y$12$a9.E4ZuJIAfkziTbAgvgq.VlEWdlMpDo6V2X8KUhgGIUD/gLdtpE.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userstypes`
--

CREATE TABLE `userstypes` (
  `userstypeid` int(11) NOT NULL,
  `userstypes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstypes`
--

INSERT INTO `userstypes` (`userstypeid`, `userstypes`) VALUES
(1, 'Admin'),
(2, 'SuperAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityaera`
--
ALTER TABLE `activityaera`
  ADD PRIMARY KEY (`activityareaid`);

--
-- Indexes for table `areaskills`
--
ALTER TABLE `areaskills`
  ADD PRIMARY KEY (`buiscardid`,`skillsid`),
  ADD KEY `skillsid` (`skillsid`);

--
-- Indexes for table `businesscard`
--
ALTER TABLE `businesscard`
  ADD PRIMARY KEY (`buscardid`),
  ADD KEY `activityaeraid` (`activityareaid`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`certificationsid`);

--
-- Indexes for table `diplomas`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`diplomasid`);

--
-- Indexes for table `levelsneeds`
--
ALTER TABLE `levelsneeds`
  ADD PRIMARY KEY (`buisinesscardid`,`diplomasid`,`ceritificationid`),
  ADD KEY `diplomasid` (`diplomasid`),
  ADD KEY `certificationsid` (`ceritificationid`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partnersid`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`buisinesscardid`,`partnersid`),
  ADD KEY `partnersid` (`partnersid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersid`),
  ADD KEY `userstypes` (`usertypeid`);

--
-- Indexes for table `userstypes`
--
ALTER TABLE `userstypes`
  ADD PRIMARY KEY (`userstypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityaera`
--
ALTER TABLE `activityaera`
  MODIFY `activityareaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `businesscard`
--
ALTER TABLE `businesscard`
  MODIFY `buscardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `certificationsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diplomas`
--
ALTER TABLE `diplomas`
  MODIFY `diplomasid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partnersid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userstypes`
--
ALTER TABLE `userstypes`
  MODIFY `userstypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areaskills`
--
ALTER TABLE `areaskills`
  ADD CONSTRAINT `buiscardid` FOREIGN KEY (`buiscardid`) REFERENCES `businesscard` (`buscardid`),
  ADD CONSTRAINT `skillsid` FOREIGN KEY (`skillsid`) REFERENCES `skills` (`skillsid`);

--
-- Constraints for table `businesscard`
--
ALTER TABLE `businesscard`
  ADD CONSTRAINT `activityaeraid` FOREIGN KEY (`activityareaid`) REFERENCES `activityaera` (`activityareaid`);

--
-- Constraints for table `levelsneeds`
--
ALTER TABLE `levelsneeds`
  ADD CONSTRAINT `buisinesscardid` FOREIGN KEY (`buisinesscardid`) REFERENCES `businesscard` (`buscardid`),
  ADD CONSTRAINT `certificationsid` FOREIGN KEY (`ceritificationid`) REFERENCES `certifications` (`certificationsid`),
  ADD CONSTRAINT `diplomasid` FOREIGN KEY (`diplomasid`) REFERENCES `diplomas` (`diplomasid`);

--
-- Constraints for table `partnership`
--
ALTER TABLE `partnership`
  ADD CONSTRAINT `buisinesscardsid` FOREIGN KEY (`buisinesscardid`) REFERENCES `businesscard` (`buscardid`),
  ADD CONSTRAINT `partnersid` FOREIGN KEY (`partnersid`) REFERENCES `partners` (`partnersid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userstypes` FOREIGN KEY (`usertypeid`) REFERENCES `userstypes` (`userstypeid`);
