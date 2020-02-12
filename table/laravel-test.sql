-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 12:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_models`
--

CREATE TABLE `auth_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_models`
--

INSERT INTO `auth_models` (`id`, `firstname`, `lastname`, `email`, `password`, `status`, `gender`, `dob`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'umair', 'ansari', 'umair23@gmail.com', 'Umair@2308', 'A', 'm', '2020-01-24', NULL, '2020-01-30 05:37:52', '2020-01-30 05:37:52'),
(2, 'Tarun', 'gariya', 'tarun@gariya.com', 'Tarun@2310', 'A', 'm', '2020-01-18', '2020-01-30 05:39:08', '2020-01-30 05:38:23', '2020-01-30 05:39:08'),
(3, 'Tarunaa', 'gariya', 'tarun@gariya.com', 'Umair@2308', 'A', 'm', '2020-01-09', NULL, '2020-01-30 05:53:08', '2020-02-03 04:17:00'),
(4, 'shahruk', 'ansari', 'rajaansari12@gmail.com', 'Raja@11', 'A', 'm', '2020-02-14', NULL, '2020-02-03 04:58:07', '2020-02-03 04:58:07'),
(5, 'dfsd', 'gariya', 'umair2377@gmail.com', 'Dfds@11', 'A', 'm', '2020-01-31', NULL, '2020-02-03 04:58:44', '2020-02-03 04:58:44'),
(6, 'shahruk', 'ansari', 'etesa@gmail.com', 'Shahrukh@11', 'A', 'm', '2020-02-21', NULL, '2020-02-03 04:59:29', '2020-02-03 04:59:29'),
(7, 'fds', 'fdg', 'tarun@gariya.com', 'Fds@11', 'A', 'm', '2020-02-12', '2020-02-03 05:05:00', '2020-02-03 05:00:32', '2020-02-03 05:05:00'),
(8, 'Tarun', 'ansariaaa', 'tarun@gariya.com', 'Tarun@2310', 'A', 'm', '2020-02-07', NULL, '2020-02-03 05:08:11', '2020-02-03 05:08:11'),
(9, 'test', '2', 'test2@gmail.com', '1234', 'A', 'm', '2020-02-21', NULL, '2020-02-04 22:56:06', '2020-02-04 22:56:06'),
(10, 'test', '2', 'test2@gmail.com', '1234', 'A', 'm', '2020-02-07', '2020-02-04 23:18:50', '2020-02-04 22:57:19', '2020-02-04 23:18:50'),
(11, 'test', '2', 'test2@gmail.com', '1234', 'A', 'm', '2020-02-07', '2020-02-04 23:18:41', '2020-02-04 23:02:21', '2020-02-04 23:18:41'),
(12, 'test', '2', 'test2@gmail.com', '1234', 'A', 'm', '2020-02-07', '2020-02-04 23:18:33', '2020-02-04 23:15:04', '2020-02-04 23:18:33'),
(13, 'test', '3', 'test3@gamil.com', 'Umair@2308', 'A', 'm', '2020-02-14', NULL, '2020-02-04 23:26:58', '2020-02-04 23:26:58'),
(14, 'test', '3', 'test3@gamil.com', 'Umair@2308', 'A', 'm', '2020-02-14', NULL, '2020-02-04 23:32:07', '2020-02-04 23:32:07'),
(15, 'test', '3', 'test3@gamil.com', 'Umair@2308', 'A', 'm', '2020-02-14', NULL, '2020-02-04 23:33:17', '2020-02-04 23:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_models`
--

CREATE TABLE `file_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_models`
--

INSERT INTO `file_models` (`id`, `photo`, `phone`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '15803824721580382472.jpg', '9891078797', NULL, '2020-01-30 05:37:52', '2020-01-30 05:37:52'),
(2, '15803825031580382503.jpg', '9899016005', '2020-01-30 05:39:08', '2020-01-30 05:38:23', '2020-01-30 05:39:08'),
(3, '15803833881580383388.jpg', '9899016005', NULL, '2020-01-30 05:53:08', '2020-01-30 05:53:08'),
(4, '15807256871580725687.jpg', '9891078797', NULL, '2020-02-03 04:58:08', '2020-02-03 04:58:08'),
(5, '15807257241580725724.jpg', '9891078797', NULL, '2020-02-03 04:58:44', '2020-02-03 04:58:44'),
(6, '15807257691580725769.jpg', '9891078797', NULL, '2020-02-03 04:59:29', '2020-02-03 04:59:29'),
(7, '15807258321580725832.jpg', '9891078797', '2020-02-03 05:05:00', '2020-02-03 05:00:33', '2020-02-03 05:05:00'),
(8, '15807262911580726291.jpg', '9891078797', NULL, '2020-02-03 05:08:11', '2020-02-03 05:08:11'),
(9, '15808767661580876766.jpg', '9818235808', NULL, '2020-02-04 22:56:06', '2020-02-04 22:56:06'),
(10, '15808768391580876839.jpg', '9891078797', '2020-02-04 23:18:50', '2020-02-04 22:57:19', '2020-02-04 23:18:50'),
(11, '15808771411580877141.jpg', '9891078797', '2020-02-04 23:18:41', '2020-02-04 23:02:21', '2020-02-04 23:18:41'),
(12, '15808779041580877904.jpg', '9891078797', '2020-02-04 23:18:33', '2020-02-04 23:15:04', '2020-02-04 23:18:33'),
(13, '15808786181580878618.jpg', '9818235808', NULL, '2020-02-04 23:26:58', '2020-02-04 23:26:58'),
(14, '15808789271580878927.jpg', '9818235808', NULL, '2020-02-04 23:32:07', '2020-02-04 23:32:07'),
(15, '15808789971580878997.jpg', '9818235808', NULL, '2020-02-04 23:33:17', '2020-02-04 23:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `galleryimages`
--

CREATE TABLE `galleryimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_models`
--

CREATE TABLE `gallery_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_models`
--

INSERT INTO `gallery_models` (`id`, `image_category`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ct1', NULL, '2020-02-03 03:50:42', '2020-02-03 03:50:42'),
(2, 'ct2', NULL, '2020-02-03 03:50:56', '2020-02-03 03:50:56'),
(3, 'ct1', NULL, '2020-02-03 03:53:15', '2020-02-03 03:53:15'),
(4, 'ct2', NULL, '2020-02-03 03:53:29', '2020-02-03 03:53:29'),
(5, 'ct1', NULL, '2020-02-03 03:53:39', '2020-02-03 03:53:39'),
(6, 'ct1', NULL, '2020-02-03 03:56:17', '2020-02-03 03:56:17'),
(7, 'ct1', NULL, '2020-02-03 03:56:43', '2020-02-03 03:56:43'),
(8, 'ct1', NULL, '2020-02-03 03:57:36', '2020-02-03 03:57:36'),
(9, 'ct1', NULL, '2020-02-03 03:58:43', '2020-02-03 03:58:43'),
(10, 'ct1', NULL, '2020-02-03 04:00:47', '2020-02-03 04:00:47'),
(11, 'ct1', NULL, '2020-02-03 04:02:08', '2020-02-03 04:02:08'),
(12, 'ct1', NULL, '2020-02-03 04:02:21', '2020-02-03 04:02:21'),
(13, 'ct1', NULL, '2020-02-03 04:03:40', '2020-02-03 04:03:40'),
(14, 'ct1', NULL, '2020-02-03 04:08:57', '2020-02-03 04:08:57'),
(15, 'ct1', NULL, '2020-02-03 04:09:22', '2020-02-03 04:09:22'),
(16, 'ct1', NULL, '2020-02-03 04:09:50', '2020-02-03 04:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `galler_image_models`
--

CREATE TABLE `galler_image_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galler_image_models`
--

INSERT INTO `galler_image_models` (`id`, `image`, `image_category`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '15807216421580721642.jpg', 'ct1', NULL, '2020-02-03 03:50:42', '2020-02-03 03:50:42'),
(2, '15807216561580721656.jpg', 'ct2', NULL, '2020-02-03 03:50:56', '2020-02-03 03:50:56'),
(3, '15807217951580721795.jpg', 'ct1', NULL, '2020-02-03 03:53:15', '2020-02-03 03:53:15'),
(4, '15807218081580721808.jpg', 'ct2', NULL, '2020-02-03 03:53:29', '2020-02-03 03:53:29'),
(5, '15807218181580721818.jpg', 'ct1', NULL, '2020-02-03 03:53:39', '2020-02-03 03:53:39'),
(6, '15807219771580721977.jpg', 'ct1', NULL, '2020-02-03 03:56:17', '2020-02-03 03:56:17'),
(7, '15807220031580722003.jpg', 'ct1', NULL, '2020-02-03 03:56:43', '2020-02-03 03:56:43'),
(8, '15807220551580722055.jpg', 'ct1', NULL, '2020-02-03 03:57:36', '2020-02-03 03:57:36'),
(9, '15807221221580722122.jpg', 'ct1', NULL, '2020-02-03 03:58:43', '2020-02-03 03:58:43'),
(10, '15807222461580722246.jpg', 'ct1', NULL, '2020-02-03 04:00:47', '2020-02-03 04:00:47'),
(11, '15807223281580722328.jpg', 'ct1', NULL, '2020-02-03 04:02:08', '2020-02-03 04:02:08'),
(12, '15807223411580722341.jpg', 'ct1', NULL, '2020-02-03 04:02:21', '2020-02-03 04:02:21'),
(13, '15807224201580722420.jpg', 'ct1', NULL, '2020-02-03 04:03:40', '2020-02-03 04:03:40'),
(14, '15807227371580722737.jpg', 'ct1', NULL, '2020-02-03 04:08:57', '2020-02-03 04:08:57'),
(15, '15807227611580722761.jpg', 'ct1', NULL, '2020-02-03 04:09:22', '2020-02-03 04:09:22'),
(16, '15807227901580722790.jpg', 'ct1', NULL, '2020-02-03 04:09:50', '2020-02-03 04:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_21_093304_create_tests_table', 1),
(5, '2020_01_23_044209_create_checks_table', 2),
(6, '2020_01_23_060813_create_samples_table', 3),
(7, '2020_01_23_090548_add_pass_to_samples', 4),
(8, '2020_01_23_121009_del__col', 5),
(10, '2020_01_23_121612_del__col_pass', 6),
(26, '2020_01_27_053214_create_auth_models_table', 7),
(27, '2020_01_27_054204_create_file_models_table', 7),
(40, '2020_01_31_061114_create_gallery_models_table', 8),
(41, '2020_02_03_050657_create_galleryimages_table', 8),
(42, '2020_02_03_071750_create_galler_image_models_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'umair', '2020-01-23 06:55:02', '2020-01-24 00:21:11'),
(4, 'umair', '2020-01-23 23:48:30', '2020-01-24 00:21:30'),
(6, 'raja', '2020-01-23 23:53:52', '2020-01-23 23:53:52'),
(7, 'rajaadfsf', '2020-01-23 23:56:22', '2020-01-23 23:56:22'),
(8, 'umair', '2020-01-23 23:57:16', '2020-01-23 23:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'umair23@gmail.com', '1234567', '2020-01-21 06:59:47', '2020-01-21 06:59:47'),
(2, 'umair23@gmail.com', '1234', '2020-01-21 22:59:01', '2020-01-21 22:59:01'),
(3, 'umair23@gmail.com', '123', '2020-01-21 23:56:03', '2020-01-21 23:56:03'),
(4, 'umair23@gmail.com', '123456', '2020-01-22 00:03:42', '2020-01-22 00:03:42'),
(5, 'etesa@gmail.com', '12345', '2020-01-22 00:06:19', '2020-01-22 00:06:19'),
(6, 'etesa@gmail.com', '1234', '2020-01-22 00:07:42', '2020-01-22 00:07:42'),
(7, 'umair23@gmail.com', '123456', '2020-01-22 00:08:29', '2020-01-22 00:08:29'),
(8, 'etesa@gmail.com', '1234', '2020-01-22 00:09:06', '2020-01-22 00:09:06'),
(9, 'etesa@gmail.com', '1234', '2020-01-22 00:21:51', '2020-01-22 00:21:51'),
(10, 'umair23@gmail.com', '1234', '2020-01-22 00:50:16', '2020-01-22 00:50:16'),
(11, 'umair23@gmail.com', '1234', '2020-01-22 00:51:05', '2020-01-22 00:51:05'),
(12, 'etesa@gmail.com', '1234', '2020-01-22 00:55:35', '2020-01-22 00:55:35'),
(13, 'etesa@gmail.com', '1234', '2020-01-22 00:56:27', '2020-01-22 00:56:27'),
(14, 'etesa@gmail.com', '1234', '2020-01-22 00:56:50', '2020-01-22 00:56:50'),
(15, 'umair23@gmail.com', '12345', '2020-01-22 00:57:04', '2020-01-22 00:57:04'),
(16, 'umair23@gmail.com', '4567', '2020-01-22 01:03:06', '2020-01-22 01:03:06'),
(17, 'retr', '24523566', '2020-01-22 01:03:57', '2020-01-22 01:03:57'),
(18, 'umair23@gmail.com', '1234', '2020-01-22 01:09:42', '2020-01-22 01:09:42'),
(19, 'umair23@gmail.com', '12321', '2020-01-22 01:11:49', '2020-01-22 01:11:49'),
(20, 'umair23@gmail.com', '12344', '2020-01-22 01:13:11', '2020-01-22 01:13:11'),
(21, 'retr', '3112423', '2020-01-22 01:13:49', '2020-01-22 01:13:49'),
(22, 'dfgdsg', '24312432', '2020-01-22 01:13:58', '2020-01-22 01:13:58'),
(23, 'umair23@gmail.com', '1234', '2020-01-22 01:50:37', '2020-01-22 01:50:37'),
(24, 'umair2377@gmail.com', '1243567', '2020-01-22 04:38:08', '2020-01-22 04:38:08'),
(25, 'retraa', '1234', '2020-01-22 04:39:46', '2020-01-22 04:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_models`
--
ALTER TABLE `auth_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_models`
--
ALTER TABLE `file_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryimages`
--
ALTER TABLE `galleryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_models`
--
ALTER TABLE `gallery_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galler_image_models`
--
ALTER TABLE `galler_image_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `auth_models`
--
ALTER TABLE `auth_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_models`
--
ALTER TABLE `file_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galleryimages`
--
ALTER TABLE `galleryimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_models`
--
ALTER TABLE `gallery_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `galler_image_models`
--
ALTER TABLE `galler_image_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
