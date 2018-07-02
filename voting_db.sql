-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 12:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_db`
--

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
(3, '2018_06_18_091611_create_presidents_table', 1),
(4, '2018_06_18_091942_create_secretaries_table', 1),
(5, '2018_06_18_092130_create_treasurers_table', 1),
(6, '2018_06_18_092434_create_organisers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisers`
--

CREATE TABLE `organisers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisers`
--

INSERT INTO `organisers` (`id`, `name`, `picture`, `votes`, `created_at`, `updated_at`) VALUES
(1, 'Mercy Lokko', 'baby_1529401125.jpg', 1, '2018-06-19 08:38:45', '2018-06-21 06:52:11'),
(2, 'kojo nkansah', 'obama_1529482470.jpg', 0, '2018-06-20 07:14:30', '2018-06-20 07:14:30'),
(3, 'Mc Lyte', 'sunkwa_1529482508.jpg', 2, '2018-06-20 07:15:08', '2018-06-20 09:12:07'),
(4, 'Akwasi Sarpong', 'blackman_1529482534.jpg', 0, '2018-06-20 07:15:34', '2018-06-20 07:15:34');

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
-- Table structure for table `presidents`
--

CREATE TABLE `presidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presidents`
--

INSERT INTO `presidents` (`id`, `name`, `picture`, `votes`, `created_at`, `updated_at`) VALUES
(2, 'Nana Ntintan', 'james_1529405055.jpg', 0, '2018-06-19 09:44:15', '2018-06-19 09:44:15'),
(3, 'Kwaku Mensah', 'paul_1529405172.jpg', 0, '2018-06-19 09:46:12', '2018-06-19 09:46:12'),
(4, 'Cardi B', 'ama_1529405497.jpg', 3, '2018-06-19 09:51:37', '2018-06-21 06:46:01'),
(5, 'J Lo', 'baby_1529405929.jpg', 1, '2018-06-19 09:58:49', '2018-06-20 06:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secretaries`
--

INSERT INTO `secretaries` (`id`, `name`, `picture`, `votes`, `created_at`, `updated_at`) VALUES
(3, 'Queen Latifah', 'sunkwa_1529406178.jpg', 1, '2018-06-19 10:02:58', '2018-06-20 07:04:54'),
(4, 'Babyface T.J.', 'rasta_1529406281.jpg', 0, '2018-06-19 10:04:41', '2018-06-19 10:04:41'),
(5, 'Joe Thomas', 'joe_1529480794.jpg', 0, '2018-06-20 06:46:35', '2018-06-20 06:46:35'),
(6, 'Master Pee', 'moses_1529480892.jpg', 2, '2018-06-20 06:48:12', '2018-06-21 06:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `treasurers`
--

CREATE TABLE `treasurers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treasurers`
--

INSERT INTO `treasurers` (`id`, `name`, `picture`, `votes`, `created_at`, `updated_at`) VALUES
(1, 'Bob Brady', 'john_1529400255.jpg', 0, '2018-06-19 08:24:15', '2018-06-19 08:24:15'),
(3, 'Steph Curry', 'paul_1529482612.jpg', 2, '2018-06-20 07:16:52', '2018-06-21 06:52:26'),
(4, 'Ama Sarpong', 'queen_1529482632.jpg', 0, '2018-06-20 07:17:12', '2018-06-20 07:17:12'),
(5, 'Yaa Ananse', 'ama_1529482677.jpg', 1, '2018-06-20 07:17:57', '2018-06-20 09:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `president_vote` int(11) NOT NULL DEFAULT '0',
  `secretary_vote` int(11) NOT NULL DEFAULT '0',
  `organiser_vote` int(11) NOT NULL DEFAULT '0',
  `treasurer_vote` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `president_vote`, `secretary_vote`, `organiser_vote`, `treasurer_vote`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yaw ansah', 'ansah@ymail.com', '$2y$10$3VNtm4ybYiP44xc.RHX2AOrB63RnqSc2Qr1itiBpAk5jvK6jdZcRm', 1, 0, 0, 0, 0, 'OqRPTJTK0ZN0NyM9ReRDyn4dmSHmSuTVhzDEuJPg13ZnBSVbwyT4uSa7Njq0', '2018-06-18 09:31:30', '2018-06-18 09:31:30'),
(2, 'donald trump', 'trump@gmail.com', '$2y$10$J7AsB/O3AMxnjMWuBsU.3uU1drTO/RJwhLY9zxDRjRwr1yAOzjZcG', 0, 1, 1, 1, 1, 'YnaubBE51w7IxpEDK06GTvzHNXjzC63Ru2p9eqA2Hd8KpDwLfF2dVXxbC4nG', '2018-06-18 09:33:03', '2018-06-20 07:56:33'),
(3, 'yaa mansa', 'mansah@gmaill.com', '$2y$10$ER7ZE/bciMqbJs.53iDJiugD5CxhFq0aZPRTaKeeHmshaTP1zFMmW', 0, 1, 1, 1, 1, 'Bik4orvtw777ELS3CMcvmEN6hdR2gI1TNNSlfn4QjUQ9IHLvXbMP2n2guHWY', '2018-06-20 08:10:45', '2018-06-20 09:12:17'),
(4, 'lalah hathaway', 'lalah@gmail.com', '$2y$10$ndeDEQxkTRb85p6OZit1F.QKyDv5UGnkljNM.fxtCkvzXz6KnRHc6', 0, 1, 1, 1, 1, 'Jgq4m8VGqKq0wi5efyY8bHuApKy6KrqN8nXOJJT4KzMcjQo8269wjdHCiwDB', '2018-06-21 06:34:02', '2018-06-21 06:52:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisers`
--
ALTER TABLE `organisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `presidents`
--
ALTER TABLE `presidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treasurers`
--
ALTER TABLE `treasurers`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organisers`
--
ALTER TABLE `organisers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presidents`
--
ALTER TABLE `presidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treasurers`
--
ALTER TABLE `treasurers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
