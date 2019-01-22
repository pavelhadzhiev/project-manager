-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2019 at 11:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FMI`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`name`) VALUES
('C4C Extension Service'),
('Project Management'),
('Story Builder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `type` enum('feature','bug','improvement','research') NOT NULL,
  `priority` enum('critical','high','medium','low') NOT NULL,
  `projectName` varchar(64) NOT NULL,
  `status` enum('toDo','inProgress','forReview','done') NOT NULL,
  `description` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `type`, `priority`, `projectName`, `status`, `description`) VALUES
(3, 'Implement Task Dragging', 'feature', 'medium', 'Project Management', 'inProgress', 'It will be nice to be able to drag tasks across columns to update their status.'),
(4, 'Vendor Dependencies', 'bug', 'critical', 'Story Builder', 'toDo', 'In Golang, you have to vendor your dependencies, so you don\'t end up relying on backwards-compatibility of used libraries.'),
(16, 'Initial Implementation', 'feature', 'critical', 'Project Management', 'done', 'Provide core features like authentication and project and task creation.'),
(18, 'Improve Form Validation', 'improvement', 'medium', 'Project Management', 'forReview', 'Use better validation error output methods than basic JS alert method.'),
(19, 'Create Documentation', 'feature', 'critical', 'Project Management', 'toDo', 'Check out requirements in moodle and provide appropriate documentation.'),
(20, 'Add Screenshots to README.md', 'improvement', 'medium', 'Project Management', 'inProgress', 'bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
