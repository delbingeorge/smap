-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 07:05 PM
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
-- Database: `smap`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_forms`
--

CREATE TABLE `feedback_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `field1` varchar(255) NOT NULL,
  `field2` varchar(255) NOT NULL,
  `field3` varchar(255) NOT NULL,
  `field4` varchar(255) NOT NULL,
  `field5` varchar(255) NOT NULL,
  `field6` varchar(255) NOT NULL,
  `field7` varchar(255) NOT NULL,
  `field8` varchar(255) NOT NULL,
  `field9` varchar(255) NOT NULL,
  `field10` varchar(255) NOT NULL,
  `field11` varchar(255) NOT NULL,
  `field12` varchar(255) NOT NULL,
  `field13` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_forms`
--

INSERT INTO `feedback_forms` (`id`, `form_number`, `student_id`, `semester`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `created_at`, `updated_at`) VALUES
(1, 1, 'nnm23mc028', 1, 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'ai, ml, ecommerce', '2024-04-03 10:52:11', '2024-04-03 10:52:11'),
(2, 2, 'nnm23mc028', 1, 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'Eatables, Student connect, Eccommerce', '2024-04-06 19:13:25', '2024-04-06 19:13:25'),
(3, 3, 'nnm23mc028', 1, 'nil3', 'nil3', 'Solved', 'nil3', 'nil3', 'Solved', 'nil3', 'nil3', 'Solved', 'nil3', 'nil3', 'Solved', 'pro1, pro2 , pro3', '2024-04-06 19:14:41', '2024-04-06 19:14:41'),
(10, 1, 'nnm23mc028', 2, 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'nil', 'nil', 'Not Solved', 'nil', '2024-04-25 12:43:09', '2024-04-25 12:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE `mentorship` (
  `mentor_id` varchar(255) NOT NULL,
  `mentee_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`mentor_id`, `mentee_id`, `created_at`, `updated_at`) VALUES
('1001', 'nnm23mc007', '2024-05-17 11:33:43', '2024-05-17 11:33:43'),
('hod23mca', 'nnm23mc028', '2024-04-03 08:53:02', '2024-04-03 08:53:02'),
('hod23mca', 'nnm23mc036', '2024-04-03 08:53:31', '2024-04-03 08:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_12_05_171001_create_semesters_table', 1),
(22, '2023_12_05_171010_create_subjects_table', 1),
(23, '2023_12_05_171019_create_teachers_table', 1),
(24, '2023_12_05_171049_create_students_table', 1),
(25, '2023_12_05_171051_create_students_table', 1),
(26, '2023_12_05_171123_create_feedback_forms_table', 1),
(27, '2024_02_08_154730_create_sem_1_attendance_table', 1),
(28, '2024_02_08_154822_create_sem_2_attendance_table', 1),
(29, '2024_02_08_154915_create_sem_3_attendance_table', 1),
(30, '2024_02_08_160444_create_sem_4_attendance_table', 1),
(31, '2024_02_09_171124_create_sem_1_mse_table', 1),
(32, '2024_02_09_171418_create_sem_2_mse_table', 1),
(33, '2024_02_09_171501_create_sem_3_mse_table', 1),
(34, '2024_02_09_171529_create_sem_4_mse_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sem_1_attendance`
--

CREATE TABLE `sem_1_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA101` varchar(255) NOT NULL,
  `22MCA102` varchar(255) NOT NULL,
  `22MCA103` varchar(255) NOT NULL,
  `22MCA104` varchar(255) NOT NULL,
  `22MCA105` varchar(255) NOT NULL,
  `22MCA106` varchar(255) NOT NULL,
  `22MCA107` varchar(255) NOT NULL,
  `22MCA108` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_1_attendance`
--

INSERT INTO `sem_1_attendance` (`form_number`, `student_id`, `22MCA101`, `22MCA102`, `22MCA103`, `22MCA104`, `22MCA105`, `22MCA106`, `22MCA107`, `22MCA108`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', '90', '90', '90', '90', '90', '90', '90', '90', '2024-04-03 10:52:11', '2024-04-03 10:52:11'),
(2, 'nnm23mc028', '50', '50', '50', '50', '50', '50', '50', '50', '2024-04-06 19:13:25', '2024-04-06 19:13:25'),
(3, 'nnm23mc028', '51', '51', '51', '51', '51', '51', '51', '51', '2024-04-06 19:14:41', '2024-04-06 19:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `sem_1_mse`
--

CREATE TABLE `sem_1_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA101` varchar(255) NOT NULL,
  `22MCA102` varchar(255) NOT NULL,
  `22MCA103` varchar(255) NOT NULL,
  `22MCA104` varchar(255) NOT NULL,
  `22MCA105` varchar(255) NOT NULL,
  `22MCA106` varchar(255) NOT NULL,
  `22MCA107` varchar(255) NOT NULL,
  `22MCA108` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_1_mse`
--

INSERT INTO `sem_1_mse` (`mse_number`, `student_id`, `22MCA101`, `22MCA102`, `22MCA103`, `22MCA104`, `22MCA105`, `22MCA106`, `22MCA107`, `22MCA108`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', '80', '80', '80', '80', '80', '80', '80', '80', '2024-04-03 21:37:48', '2024-04-03 21:37:48'),
(2, 'nnm23mc028', '91', '91', '91', '91', '91', '91', '91', '91', '2024-04-06 19:15:44', '2024-04-06 19:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2_attendance`
--

CREATE TABLE `sem_2_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `22MCA202` varchar(255) NOT NULL,
  `22MCA203` varchar(255) NOT NULL,
  `22MCA204` varchar(255) NOT NULL,
  `22MCA205` varchar(255) NOT NULL,
  `22MCA206` varchar(255) NOT NULL,
  `22MCA207` varchar(255) NOT NULL,
  `22MCA208` varchar(255) NOT NULL,
  `22MCA209` varchar(255) NOT NULL,
  `22MCA211` varchar(255) DEFAULT NULL,
  `22MCA213` varchar(255) DEFAULT NULL,
  `22MCA222` varchar(255) DEFAULT NULL,
  `22MCA225` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_2_attendance`
--

INSERT INTO `sem_2_attendance` (`form_number`, `student_id`, `22MCA201`, `22MCA202`, `22MCA203`, `22MCA204`, `22MCA205`, `22MCA206`, `22MCA207`, `22MCA208`, `22MCA209`, `22MCA211`, `22MCA213`, `22MCA222`, `22MCA225`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', 'null', 'null', '100', '2024-04-25 12:43:09', '2024-04-25 12:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2_mse`
--

CREATE TABLE `sem_2_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `22MCA202` varchar(255) NOT NULL,
  `22MCA203` varchar(255) NOT NULL,
  `22MCA204` varchar(255) NOT NULL,
  `22MCA205` varchar(255) NOT NULL,
  `22MCA206` varchar(255) NOT NULL,
  `22MCA207` varchar(255) NOT NULL,
  `22MCA208` varchar(255) NOT NULL,
  `22MCA209` varchar(255) NOT NULL,
  `22MCA211` varchar(255) DEFAULT NULL,
  `22MCA213` varchar(255) DEFAULT NULL,
  `22MCA222` varchar(255) DEFAULT NULL,
  `22MCA225` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_2_mse`
--

INSERT INTO `sem_2_mse` (`mse_number`, `student_id`, `22MCA201`, `22MCA202`, `22MCA203`, `22MCA204`, `22MCA205`, `22MCA206`, `22MCA207`, `22MCA208`, `22MCA209`, `22MCA211`, `22MCA213`, `22MCA222`, `22MCA225`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', 'null', 'null', '99', '2024-04-25 12:41:47', '2024-04-25 12:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `sem_3_attendance`
--

CREATE TABLE `sem_3_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_3_mse`
--

CREATE TABLE `sem_3_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_4_attendance`
--

CREATE TABLE `sem_4_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_4_mse`
--

CREATE TABLE `sem_4_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `projects` varchar(255) DEFAULT NULL,
  `feedback_filled` varchar(10) NOT NULL DEFAULT 'true',
  `mse_filled` varchar(10) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `fullname`, `email`, `contact`, `semester`, `about`, `skills`, `projects`, `feedback_filled`, `mse_filled`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', 'Darshan Dinesh MP', 'darshan@gmail.com', '7865940321', 2, 'Developer helloooo', 'java, c', 'Ecommerce, AI, Project 5, project 6', 'true', 'true', '2024-04-03 08:53:02', '2024-04-25 12:43:09'),
(2, 'nnm23mc036', 'Delbin', 'delbin@gmail.com', '9087654321', 3, NULL, NULL, NULL, 'false', 'false', '2024-04-03 08:53:31', '2024-04-25 12:30:45'),
(3, 'nnm23mc007', 'Ronaldo', 'ronaldo@gmail.com', '9435834952', 1, NULL, NULL, NULL, 'true', 'true', '2024-05-17 11:33:43', '2024-05-17 11:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_number` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `semester_number`, `subject_code`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, '1', '22MCA101', 'Data Structures with Algorithms', NULL, NULL),
(2, '1', '22MCA102', 'Advanced Database Systems', NULL, NULL),
(3, '1', '22MCA103', 'Computer Organization and Architecture', NULL, NULL),
(4, '1', '22MCA104', 'Mathematical Foundation for Computer Applications', NULL, NULL),
(5, '1', '22MCA105', 'Software Engineering and Testing', NULL, NULL),
(6, '1', '22MCA106', 'Research Methodology and Publication Ethics', NULL, NULL),
(7, '1', '22MCA107', 'Data Structures with Algorithms Lab', NULL, NULL),
(8, '1', '22MCA108', 'Advanced Database Systems Lab', NULL, NULL),
(9, '2', '22MCA201', 'Data Communication and Networks', NULL, NULL),
(10, '2', '22MCA202', 'Enterprise Java', NULL, NULL),
(11, '2', '22MCA203', 'Operating Systems with UNIX', NULL, NULL),
(12, '2', '22MCA204', 'Data Warehousing and Data Mining', NULL, NULL),
(13, '2', '22MCA205', 'Professional Communication and Ethics', NULL, NULL),
(14, '2', '22MCA206', 'Data Communication and Networks Lab', NULL, NULL),
(15, '2', '22MCA207', 'Enterprise Java Lab', NULL, NULL),
(16, '2', '22MCA208', 'Operating Systems with Unix Lab', NULL, NULL),
(17, '2', '22MCA209', 'Technical Seminar and Report Writing', NULL, NULL),
(18, '2', '22MCA211', 'Digital Image Processing and Pattern Recognition', NULL, NULL),
(19, '2', '22MCA213', 'Soft Computing', NULL, NULL),
(20, '2', '22MCA222', 'Health Care Analytics', NULL, NULL),
(21, '2', '22MCA225', '.Net Framework and C#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `emp_id`, `fullname`, `designation`, `email`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'hod23mca', 'Mamatha Balipa', 'Professor', 'hod@example.com', '9087654326', NULL, '2024-04-06 19:48:51'),
(2, '1001', 'Ananth Murthy', 'Professor', 'faculty1@gmail.com', '9092544545', '2024-05-17 07:48:07', '2024-05-17 07:48:07'),
(6, '1002', 'Lionel Messi', 'Physical Trainer', 'faculty2@gmail.com', '8675645342', '2024-05-17 09:10:16', '2024-05-17 09:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','hod','teacher','student') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin23mca', 'admin@example.com', '$2y$10$6THNTgZZWjlsEcalaxpJkePNey7tQrYh10MhWIsalUEqUc0.lzpJq', 'admin', NULL, NULL),
(2, 'hod23mca', 'hod@example.com', '$2y$10$fovEXUDe/d4X.gHhSydyuOWY3Fx5XcAuAsW6NkB/xlkk4/tnmIU4m', 'hod', NULL, NULL),
(3, 'nnm23mc028', 'darshan@gmail.com', '$2y$10$Ldcb8HRGYrdRWAHhf0twAOphc8Ru5hiJC/QnS9TYm1CGl7vCstNX2', 'student', '2024-04-03 08:53:02', '2024-04-03 08:53:02'),
(4, 'nnm23mc036', 'delbin@gmail.com', '$2y$10$rZUhEaMakzh3pFS2kQWFNOH6UJSkQXTYekeunVAVk7EOZGjnl37oK', 'student', '2024-04-03 08:53:31', '2024-04-03 08:53:31'),
(5, '1001', 'faculty1@gmail.com', '$2y$10$5PO.7lBd6WLHGjiFKZfSAeBq9oB3.TqGnzrp6ZBn7iGmgtg0ca1ra', 'teacher', '2024-05-17 07:48:07', '2024-05-17 07:48:07'),
(11, '1002', 'faculty2@gmail.com', '$2y$10$JRijyDT1pNwZ72GA5ORHBu6/8xj47n6V36EvT36HVdA3o.vUKZx6m', 'teacher', '2024-05-17 09:10:16', '2024-05-17 09:10:16'),
(12, 'nnm23mc007', 'ronaldo@gmail.com', '$2y$10$jmFSWVF.A26a.z2Ej2e9mep3.bfUe.bJF0lZyPTRIwYIDhjsHR.Du', 'student', '2024-05-17 11:33:43', '2024-05-17 11:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_forms`
--
ALTER TABLE `feedback_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD PRIMARY KEY (`mentor_id`,`mentee_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semesters_semester_number_unique` (`semester_number`);

--
-- Indexes for table `sem_1_attendance`
--
ALTER TABLE `sem_1_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_1_mse`
--
ALTER TABLE `sem_1_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_2_attendance`
--
ALTER TABLE `sem_2_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_2_mse`
--
ALTER TABLE `sem_2_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_3_attendance`
--
ALTER TABLE `sem_3_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_3_mse`
--
ALTER TABLE `sem_3_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_4_attendance`
--
ALTER TABLE `sem_4_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_4_mse`
--
ALTER TABLE `sem_4_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_semester_foreign` (`semester`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_subject_code_unique` (`subject_code`),
  ADD UNIQUE KEY `subjects_subject_name_unique` (`subject_name`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_emp_id_unique` (`emp_id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_forms`
--
ALTER TABLE `feedback_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_semester_foreign` FOREIGN KEY (`semester`) REFERENCES `semesters` (`semester_number`),
  ADD CONSTRAINT `students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
