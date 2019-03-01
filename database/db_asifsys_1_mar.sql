-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 12:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asifsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrolments`
--

CREATE TABLE `enrolments` (
  `id` int(10) UNSIGNED NOT NULL,
  `participant_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolments`
--

INSERT INTO `enrolments` (`id`, `participant_id`, `training_id`, `created_at`, `updated_at`) VALUES
(12, 1, 1, '2019-01-28 05:08:49', '2019-01-28 05:08:49'),
(13, 4, 1, '2019-01-28 05:08:49', '2019-01-28 05:08:49'),
(14, 4, 2, '2019-01-28 05:09:14', '2019-01-28 05:09:14'),
(15, 4, 3, '2019-01-28 05:09:52', '2019-01-28 05:09:52'),
(16, 1, 3, '2019-01-28 06:26:18', '2019-01-28 06:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_01_21_064718_create_enrolments_table', 3),
(9, '2019_01_10_063039_create_dashboards_table', 6),
(10, '2019_01_21_120957_create_resource_people_table', 7),
(11, '2019_01_09_192635_create_participants_table', 8),
(16, '2019_01_17_061710_create_trainings_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scale` int(11) NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `first_name`, `last_name`, `gender`, `cnic`, `scale`, `department`, `province`, `cell_number`, `landline`, `email`, `created_at`, `updated_at`) VALUES
(1, 'raheel', 'khan', 'male', '12121212121212', 22, 'asdfd sdaf', 'safasfsadsadas111', '03065007878', NULL, 'aa@aa.cc22', '2019-01-28 02:38:04', '2019-01-28 08:37:50'),
(4, 'sendme', 'khan', 'female', '12121212121212', 4, 'asdfd sdaf', 'safasf', '03065007878', '9233333737372', 'asifa@gmail.com', '2019-01-28 05:05:42', '2019-01-28 05:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource_people`
--

CREATE TABLE `resource_people` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resource_people`
--

INSERT INTO `resource_people` (`id`, `first_name`, `last_name`, `cnic`, `vendor_no`, `bank`, `cell_number`, `email`, `cv`, `created_at`, `updated_at`) VALUES
(2, 'sendme', 'khan', '12123332121233', 'as2232312', '12323d', '03065007878', 'aa@aa.cc', '', '2019-01-28 08:32:04', '2019-01-28 08:32:04'),
(3, 'raheel', 'khan', '12121212121212', 'as2232312', '12323d', '03065007878', 'asifa@gmail.com', '', '2019-01-25 06:29:55', '2019-01-25 06:29:55'),
(4, 'sendme', 'khan', '12121212121210', 'as2232312', '12323d', '03065007878', 'mazhar@gmail.com', '1551435113_Problem-Solved.png', '2019-03-01 05:11:53', '2019-03-01 05:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `resource_person_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `description`, `category`, `status`, `from_date`, `to_date`, `user_id`, `resource_person_id`, `created_at`, `updated_at`) VALUES
(1, 'bs software engineering', 'software requireents engineeering etc', 'development', 'active', '2019-01-09', '2019-01-11', 3, 3, '2019-01-28 03:08:52', '2019-01-28 03:08:52'),
(2, 'bs software engineering', 'software requireents engineeering etc', 'education', 'active', '2019-01-04', '2019-01-18', 1, 2, '2019-01-28 03:18:25', '2019-01-29 07:19:14'),
(3, 'Highcharts Demoaaa', 'software requireents engineeering etc', 'education', 'active', '2022-02-04', '2021-03-03', 1, 2, '2019-01-28 05:09:34', '2019-01-28 08:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cordinator', 'asif', 'asifa@gmail.com', NULL, '$2y$10$SSUZc.v..gfgw3pWyFmR1eV8RvnvFEKS62FItxieRVbaxcANi0Su6', 'k3PUE8LzuTZjS9NOUKZjG1Zm4TVClga758NP14NBtbd8oZaOrxKSFBbnIiBV', '2019-01-10 00:54:37', '2019-01-10 00:54:37'),
(2, 'admin', 'raheel', 'raheel@gmail.com', NULL, '$2y$10$ts1l.VYb4Mpxb1JHUJQdUelzP8FUZNQlimMuR34hPy2c9dIKN/Uuu', 'w4qGDYec5bPrdx4w9ds5mjBlxsxZye7pvF8S12Lto0l0sT7bUOA52Q0fiADn', '2019-01-10 01:57:44', '2019-01-10 01:57:44'),
(3, 'cordinator', 'sdgasf', 'irahilkhan@gmail.com', NULL, '$2y$10$sU6ausFMtAIoi7kz4ZQNkeZu8QkQgJarwtc4i9vDA3KvJCMv9T7uW', NULL, '2019-01-26 02:01:17', '2019-01-26 02:01:17'),
(5, 'admin', 'sdgasf', 'irahilkhaan@gmail.com', NULL, '$2y$10$Nss23uaKHX8CQ5oiVWRMnOZzkQBPwiH/MZWB54B59PPPT1aKDAwG2', NULL, '2019-01-26 02:04:33', '2019-01-26 02:04:33'),
(6, 'cordinator', 'Pashto', 'investadmin@pk.com', NULL, '$2y$10$Rhrrl6Adm1m38lp9Mq1/Ou2rFh9c5u33lssOLrD795h539szcWg.W', NULL, '2019-01-28 08:41:43', '2019-01-28 08:41:43'),
(7, 'cordinator', 'Pashto', 'investadmin@pk.com1', NULL, '$2y$10$FY2g8tgA1LG8jxbLPJH.xudDCFY73Mbe.YcJ5UUSG5tl0OhsDN9Py', NULL, '2019-01-28 08:42:27', '2019-01-28 08:42:27'),
(8, 'cordinator', 'mazhar kokhar', 'ir1ahilkhan@gmail.com', NULL, '$2y$10$tbQze7X7LWHgqQHxzSjsFuWCI.vG2/bVCltUPdum0gsemu2Z4PODq', NULL, '2019-01-28 08:43:15', '2019-01-28 08:43:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolments`
--
ALTER TABLE `enrolments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resource_people`
--
ALTER TABLE `resource_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolments`
--
ALTER TABLE `enrolments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resource_people`
--
ALTER TABLE `resource_people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
