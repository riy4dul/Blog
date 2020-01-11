-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 08:24 PM
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
-- Database: `ef-2lr-crud-task-riyadul`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Birthday Party', 'birthday-party', '2019-04-24 01:19:49', '2019-04-24 01:19:49'),
(6, 'Wedding', 'wedding', '2019-04-24 01:20:54', '2019-04-24 01:20:54'),
(7, 'Concert', 'concert', '2019-04-24 01:21:16', '2019-04-24 01:21:16'),
(8, 'Corporate', 'corporate', '2019-04-24 01:21:32', '2019-04-24 01:21:32');

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
(3, '2019_04_23_103010_create_posts_table', 2),
(4, '2019_04_23_103110_create_categories_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(24, 5, 'An Elegant Breakfast At Home', NULL, 'an-elegant-breakfast-at-home-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:11:59', '2019-04-24 12:11:59'),
(25, 6, 'While Watching The Rain', NULL, 'while-watching-the-rain-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:12:55', '2019-04-24 12:12:55'),
(26, 7, 'Fashion In The Country', NULL, 'fashion-in-the-country-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:13:45', '2019-04-24 12:13:45'),
(27, 7, 'Favorite New York Bars', NULL, 'favorite-new-york-bars-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:14:48', '2019-04-24 12:14:48'),
(28, 8, 'We Work Together For Fun', NULL, 'we-work-together-for-fun-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:15:57', '2019-04-24 12:15:57'),
(29, 8, 'While Watching The Rain', NULL, 'while-watching-the-rain-2019-04-24.jpg', 'Lorem ipsum dolor sites amet, conse ctetur adipis cing elit. Cras vitae nibhe nisl. Cras et meauris egets lorem ultr icies fermentum a in diam. Morbi mollis pellentesque aug ueso nec rhoncus. Nam utbs orci augue....', 1, '2019-04-24 12:16:31', '2019-04-24 12:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riyadul', 'riyadul@gmail.com', NULL, '$2y$10$ex0j.YLXo1BaRxJzRHOBr.lhdZqdrmhJgi1hMpTE3WO2nMLejIdxK', NULL, '2019-04-23 00:09:27', '2019-04-23 00:09:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
