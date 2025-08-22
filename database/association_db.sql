-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2025 at 09:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `association_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `achievement_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `achievement_name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `achievement_date` date NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievement_id`, `student_id`, `achievement_name`, `description`, `achievement_date`, `position`, `created_at`) VALUES
(1, 1, 'Hackathon Winner', 'Secured 1st place in a National Level Hackathon organized by IIT.', '2024-03-15', '1st Place', '2025-08-22 05:14:59'),
(2, 1, 'Paper Presentation', 'Presented a research paper on Blockchain Security at Anna University.', '2023-12-10', 'Participant', '2025-08-22 05:14:59'),
(3, 2, 'Coding Contest', 'Won 2nd place in a CodeChef Long Challenge.', '2024-02-05', '2nd Place', '2025-08-22 05:14:59'),
(4, 2, 'App Development', 'Developed a Flutter-based Quiz App for the department fest.', '2023-11-20', 'Best Project', '2025-08-22 05:14:59'),
(5, 3, 'Sports Achievement', 'Represented college in Inter-college Football Tournament.', '2024-01-18', 'Semi-Finalist', '2025-08-22 05:14:59'),
(6, 3, 'Quiz Competition', 'Participated in a National Level IT Quiz.', '2023-09-12', 'Finalist', '2025-08-22 05:14:59'),
(7, 4, 'Workshop on AI/ML', 'Attended a 3-day workshop on Artificial Intelligence & Machine Learning.', '2024-04-02', 'Certificate of Participation', '2025-08-22 05:14:59'),
(8, 4, 'Poster Presentation', 'Presented a poster on Cybersecurity Awareness.', '2023-08-28', '3rd Place', '2025-08-22 05:14:59'),
(9, 5, 'Internship', 'Completed internship at TCS in Web Development domain.', '2023-12-01', 'Completion Certificate', '2025-08-22 05:14:59'),
(10, 5, 'Hackathon', 'Participated in SIH 2023 Hackathon with the college team.', '2023-10-15', 'Finalist', '2025-08-22 05:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `year` enum('1','2','3','4') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `reg_no`, `email`, `photo`, `department`, `year`, `created_at`) VALUES
(1, 'Arjun Kumar', 'IT2023001', 'arjun.kumar@nscet.edu', 'photos/arjun.jpg', 'IT', '3', '2025-08-22 05:12:59'),
(2, 'Meera Nair', 'IT2023002', 'meera.nair@nscet.edu', 'photos/meera.jpg', 'IT', '2', '2025-08-22 05:12:59'),
(3, 'Vikram Singh', 'IT2023003', 'vikram.singh@nscet.edu', 'photos/vikram.jpg', 'IT', '4', '2025-08-22 05:12:59'),
(4, 'Ananya Reddy', 'IT2023004', 'ananya.reddy@nscet.edu', 'photos/ananya.jpg', 'IT', '1', '2025-08-22 05:12:59'),
(5, 'Rahul Menon', 'IT2023005', 'rahul.menon@nscet.edu', 'photos/rahul.jpg', 'IT', '3', '2025-08-22 05:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`achievement_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
