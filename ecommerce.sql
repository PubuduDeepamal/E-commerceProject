-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 06:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_09_010737_create_sessions_table', 1),
(7, '2023_08_10_083839_create_products_table', 2),
(8, '2023_08_12_071959_create_carts_table', 3),
(9, '2023_08_14_215459_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `product_name`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(7, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Tuna Sandwiches', '1', '1500.00', 'Delivered', '2023-08-14 17:16:58', '2023-08-14 23:05:04'),
(8, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Tuna Sandwiches', '10', '1500.00', 'Delivered', '2023-08-14 17:16:58', '2023-08-14 23:14:32'),
(9, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Tuna Sandwiches', '1', '1500.00', 'Delivered', '2023-08-14 17:17:36', '2023-08-14 23:14:33'),
(10, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Tuna Sandwiches', '10', '1500.00', 'Delivered', '2023-08-14 17:17:36', '2023-08-14 23:14:34'),
(11, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '1', '2500.00', 'Delivered', '2023-08-14 17:22:15', '2023-08-14 23:45:06'),
(12, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '10', '2500.00', 'Delivered', '2023-08-14 23:11:51', '2023-08-14 23:14:36'),
(13, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '4', '2500.00', 'Delivered', '2023-08-15 17:57:24', '2023-08-17 09:05:53'),
(14, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '3', '800.00', 'Delivered', '2023-08-15 18:00:54', '2023-08-22 06:13:05'),
(15, 'nimesh pahasara', '0768767856', 'pubududeepamal2@gmail.com', 'Chocolate Drops', '3', '800.00', 'not delivered', '2023-08-15 22:15:55', '2023-08-15 22:15:55'),
(16, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-08-17 08:38:13', '2023-08-17 08:38:13'),
(17, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-08-17 08:38:13', '2023-08-17 08:38:13'),
(18, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Cat Crispy Pouches', '1', '840.00', 'not delivered', '2023-08-17 09:05:02', '2023-08-17 09:05:02'),
(19, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '6', '800.00', 'not delivered', '2023-08-17 09:05:18', '2023-08-17 09:05:18'),
(20, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-08-21 10:43:51', '2023-08-21 10:43:51'),
(21, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-08-22 06:12:11', '2023-08-22 06:12:11'),
(22, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '4', '2500.00', 'Delivered', '2023-08-23 17:10:48', '2023-08-23 17:11:25'),
(23, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'Delivered', '2023-09-12 22:20:30', '2023-09-14 02:00:13'),
(24, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '1', '2500.00', 'not delivered', '2023-09-14 00:53:18', '2023-09-14 00:53:18'),
(25, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-09-14 01:59:39', '2023-09-14 01:59:39'),
(26, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '4', '800.00', 'not delivered', '2023-09-17 23:28:15', '2023-09-17 23:28:15'),
(27, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Cat Crispy Pouches', '5', '850.00', 'not delivered', '2023-09-17 23:28:15', '2023-09-17 23:28:15'),
(28, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chocolate Drops', '1', '800.00', 'not delivered', '2023-09-17 23:28:38', '2023-09-17 23:28:38'),
(29, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '200', '2500.00', 'not delivered', '2023-09-23 18:09:39', '2023-09-23 18:09:39'),
(30, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '1', '2500.00', 'not delivered', '2023-09-23 18:33:30', '2023-09-23 18:33:30'),
(31, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Omega Stripes', '230', '2500.00', 'Delivered', '2023-09-23 23:10:23', '2023-09-23 23:12:58'),
(32, 'pubudu Deepamal', '0765678765', 'pubududeepamal98@gmail.com', 'Chicken With Peas Broth And Gravy', '3', '450', 'not delivered', '2023-09-23 23:10:23', '2023-09-23 23:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Omega Stripes', '2500.00', 'Dog food', '100', '1691746383.webp', '2023-08-11 04:03:04', '2023-08-12 03:38:48'),
(10, 'Chocolate Drops', '800.00', 'Dog food', '75', '1691746541.webp', '2023-08-11 04:05:41', '2023-08-12 03:39:18'),
(11, 'Tuna Sandwiches', '1500.00', 'Cat food', '100', '1691746627.webp', '2023-08-11 04:07:07', '2023-08-12 03:39:33'),
(18, 'Chicken With Peas Broth And Gravy', '550', 'Cat Food', '100', '1695469124.jpg', '2023-09-23 06:08:44', '2023-09-23 23:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jfrdKClpce423QluwDxxYsKW7ZZhVwTc8o6bOw4E', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36 Edg/117.0.2045.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZm5rZXdGQ0ZIWWhMbW1DZTRQcE43SzBiWDUyeTVmbXhMY3o0QUt0UiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1695530736);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'pubudu Deepamal', 'pubududeepamal98@gmail.com', '0', '0765678765', 'pubududeepamal98@gmail.com', NULL, '$2y$10$yNjHGUjc/fNgR33QY78mkOTJiE88KWhyDBpXekdG0v15Mum.BrQkO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 19:57:56', '2023-08-08 19:57:56'),
(2, 'Admin', 'admin@gmail.com', '1', '0765678909', 'admin', NULL, '$2y$10$mbyQbiGqgnAwVVF6kva0U.j3JWBE6GSuEy0tY5YPlFvjnS2DuVeI.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 20:00:29', '2023-08-08 20:00:29'),
(3, 'nimesh pahasara', 'pubududeepamal2@gmail.com', '0', '0768767856', 'pubududeepamal2@gmail.com', NULL, '$2y$10$zcclF8MX6UuWuXGK3l02z.h8afICGI7d47R.B4IiGth8K2zJhCZnq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-15 22:15:44', '2023-08-15 22:15:44'),
(4, 'Selani alwis', 'Selanialwis@gmail.com', '0', '0765678765', 'Selanialwis@gmail.com', NULL, '$2y$10$LTUO3QHaOYAMA3MJghrOR.tcLkDzKpLE2ez4VY0pUuxS/mQ7/RSHa', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-15 22:20:42', '2023-08-15 22:20:42'),
(5, 'Pubudu Deepamal', 'pubududeepamal8@gmail.com', '0', '123456789', 'pubududeepamal8@gmail.com', NULL, '$2y$10$Y4QGRRHwCEKOxPFZd1PSae24lvsl/inCehlmHsm21b5lPsuSB3YWK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-23 04:27:52', '2023-09-23 04:27:52'),
(6, 'nimesh pahasara', 'pubududeepamal23@gmail.com', '0', '11111111', 'pubududeepamal23@gmail.com', NULL, '$2y$10$fX2gu.uE9IeeBaIwSAwWVuxJmzoD8IOGzZVzSwCBpPU22uXjKUBPe', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-23 04:28:45', '2023-09-23 04:28:45'),
(7, 'Thisath', 'Thisath@gmail.com', '0', '1234567890', 'Thisath@gmail.com', NULL, '$2y$10$n/LaZ3rzdkFzzRZ1Jm7A8elG26PSKQQmMEUd/6bbqgnRdTDdZ/rbq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-23 23:11:06', '2023-09-23 23:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
