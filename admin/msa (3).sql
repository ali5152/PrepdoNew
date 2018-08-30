-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 02:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msa`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `code` varchar(512) NOT NULL,
  `detail` varchar(2000) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `name`, `code`, `detail`, `course_id`, `chapter_id`, `topic_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', '\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 9, 2, 1, 1, '2018-07-09 06:11:48', '2018-07-05 00:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `chapter_name` varchar(512) NOT NULL,
  `chapter_code` varchar(512) NOT NULL,
  `course_id` int(11) NOT NULL,
  `chapter_detail` varchar(2000) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `chapter_name`, `chapter_code`, `course_id`, `chapter_detail`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Multan', 'TEST', 10, '\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '2018-07-09 05:51:38', '2018-07-05 00:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(512) NOT NULL,
  `course_code` varchar(512) NOT NULL,
  `course_picture` varchar(512) NOT NULL,
  `course_des` varchar(2000) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_code`, `course_picture`, `course_des`, `price`, `status`, `updated_at`, `created_at`) VALUES
(10, 'asd', 'asd', '1530787549.png', '\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 0, 1, '2018-07-09 05:34:10', '2018-07-05 05:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `id` int(11) NOT NULL,
  `first_name` varchar(512) NOT NULL,
  `last_name` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `joining_date` date NOT NULL,
  `designation` varchar(512) NOT NULL,
  `gender` varchar(512) NOT NULL,
  `mobile_phone` varchar(512) NOT NULL,
  `birth_date` date NOT NULL,
  `profile_image` varchar(512) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`id`, `first_name`, `last_name`, `email`, `joining_date`, `designation`, `gender`, `mobile_phone`, `birth_date`, `profile_image`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Taha', 'Shabbir', 'tahaqadi94@gmail.com', '2018-07-05', 'Principal', 'Male', '03326025253', '1999-01-27', 'abdevilliersfbl.jpg', 1, '2018-07-05 07:31:33', '2018-07-05 07:31:33'),
(16, 'Ali', 'Haider', 'alihaider5152@gmail.com', '2018-07-02', 'QueperTec', 'Male', '03326025253', '1992-02-02', 'Indian-cricketer-Ajinkya-Rahane-walks-with-his-equipment-during-a-practice-session-at-the-P.jpg', 1, '2018-07-07 00:38:14', '2018-07-07 00:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(512) NOT NULL,
  `parent_phone` varchar(512) NOT NULL,
  `parent_email` varchar(512) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `parent_name`, `parent_phone`, `parent_email`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Ali Haider', '33260252530', 'hafiz.murtaza5@gmail.com', 1, '2018-07-08 23:38:19', '2018-07-08 23:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(512) NOT NULL,
  `option1` varchar(512) NOT NULL,
  `option2` varchar(512) NOT NULL,
  `option3` varchar(512) NOT NULL,
  `option4` varchar(512) NOT NULL,
  `correct_option` varchar(512) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`, `quiz_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ASD', 'a', 's', 'd', 'f', 'b', 1, 1, '2018-07-09 11:11:12', '2018-07-06 06:37:23'),
(2, 'ASD', 'a', 's', 'd', 'f', 'b', 1, 1, '2018-07-09 11:11:15', '2018-07-06 06:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `code` varchar(512) NOT NULL,
  `detail` varchar(2000) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`id`, `name`, `code`, `detail`, `course_id`, `chapter_id`, `topic_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ali Haider', 'asd', 'asd', 9, 2, 1, 1, '2018-07-05 01:03:03', '2018-07-05 01:03:03'),
(2, 'Ali Haider', 'asd', 'asd', 9, 2, 1, 1, '2018-07-05 01:03:03', '2018-07-05 01:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_attempts`
--

CREATE TABLE `quiz_attempts` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `correct_answers` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_attempts`
--

INSERT INTO `quiz_attempts` (`id`, `quiz_id`, `student_id`, `total_questions`, `correct_answers`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 4, 2, 2, 1, '2018-07-09 11:55:30', '2018-07-09 11:11:46'),
(10, 1, 4, 2, 2, 1, '2018-07-09 11:55:33', '2018-07-09 11:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `first_name` varchar(512) NOT NULL,
  `last_name` varchar(512) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `email` varchar(512) NOT NULL,
  `joining_date` date NOT NULL,
  `designation` varchar(512) NOT NULL,
  `gender` varchar(512) NOT NULL,
  `mobile_phone` varchar(512) NOT NULL,
  `birth_date` date NOT NULL,
  `profile_image` varchar(512) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `parent_id`, `first_name`, `last_name`, `roll_no`, `email`, `joining_date`, `designation`, `gender`, `mobile_phone`, `birth_date`, `profile_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 9, 'Test', 'Queper', 123, 'alihaider5152@gmail.com', '2018-07-09', 'NA', 'Male', '03326025253', '2018-07-09', 'abdevilliersfbl.jpg', 1, '2018-07-08 23:38:23', '2018-07-08 23:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `system_files`
--

CREATE TABLE `system_files` (
  `id` int(11) NOT NULL,
  `filename` varchar(512) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_files`
--

INSERT INTO `system_files` (`id`, `filename`, `course_id`, `chapter_id`, `topic_id`, `assignment_id`, `quiz_id`, `status`, `updated_at`, `created_at`) VALUES
(1, '15307260000.pdf', 9, NULL, NULL, NULL, NULL, 1, '2018-07-04 12:40:00', '2018-07-04 12:40:00'),
(2, '15307260001.pdf', 9, NULL, NULL, NULL, NULL, 1, '2018-07-04 12:40:00', '2018-07-04 12:40:00'),
(3, '15307260002.pdf', 9, NULL, NULL, NULL, NULL, 1, '2018-07-04 12:40:00', '2018-07-04 12:40:00'),
(5, '15307683751.pdf', NULL, 2, NULL, NULL, NULL, 1, '2018-07-05 00:26:15', '2018-07-05 00:26:15'),
(6, '15307683752.pdf', NULL, 2, NULL, NULL, NULL, 1, '2018-07-05 00:26:15', '2018-07-05 00:26:15'),
(7, '15307690740.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:37:54', '2018-07-05 00:37:54'),
(8, '15307690741.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:37:54', '2018-07-05 00:37:54'),
(10, '15307690743.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:37:54', '2018-07-05 00:37:54'),
(11, '15307699790.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:52:59', '2018-07-05 00:52:59'),
(12, '15307699791.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:52:59', '2018-07-05 00:52:59'),
(13, '15307699792.pdf', NULL, NULL, 1, NULL, NULL, 1, '2018-07-05 00:52:59', '2018-07-05 00:52:59'),
(14, '15307705830.pdf', NULL, NULL, NULL, NULL, 1, 1, '2018-07-05 01:03:03', '2018-07-05 01:03:03'),
(15, '15307705831.pdf', NULL, NULL, NULL, NULL, 1, 1, '2018-07-05 01:03:03', '2018-07-05 01:03:03'),
(16, '15307705832.pdf', NULL, NULL, NULL, NULL, 1, 1, '2018-07-05 01:03:03', '2018-07-05 01:03:03'),
(20, '15307906520.pdf', 11, NULL, NULL, NULL, NULL, 1, '2018-07-05 06:37:32', '2018-07-05 06:37:32'),
(26, 'DatingProposal-Updated.pdf', 10, NULL, NULL, NULL, NULL, 1, '2018-07-05 07:17:29', '2018-07-05 07:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `code` varchar(512) NOT NULL,
  `detail` varchar(2000) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `code`, `detail`, `course_id`, `chapter_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ASD', 'ASD124', '\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 9, 2, 1, '2018-07-09 05:58:05', '2018-07-05 00:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `educator_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `roles` varchar(512) DEFAULT NULL,
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `resetpass` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `educator_id`, `student_id`, `parent_id`, `roles`, `username`, `password`, `resetpass`, `status`, `created_at`, `updated_at`) VALUES
(19, 15, NULL, NULL, NULL, 'tahaqadi94@gmail.com', '$2y$10$IAYlxapJ/9sbYSg3DN7m8uehVj/rtlRggnen23RQv5F9aE7Y4sBaa', 0, 1, '2018-07-05 07:31:33', '2018-07-05 07:31:33'),
(21, NULL, NULL, 9, NULL, 'hafiz.murtaza5@gmail.com', '$2y$10$MENLISk3PsH9CbA1wrRhXee.PVs4s0K.G9.z6mLQkx7h5947q7XTm', NULL, 1, '2018-07-08 23:38:20', '2018-07-08 23:38:20'),
(22, NULL, 4, NULL, NULL, 'alihaider5152@gmail.com', '$2y$10$2F2lHg9vVN/K6wjPqPHcte8nfXQjNAgsO94H6QX0zFGQaUVpHsSVy', 0, 1, '2018-07-09 12:08:20', '2018-07-09 07:08:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_files`
--
ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_attempts`
--
ALTER TABLE `quiz_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_files`
--
ALTER TABLE `system_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
