-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 07:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21725095_book_rent`

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'PG001', 'Pemrograman Games Dengan Unity', 'Pemrograman Games Dengan Unity-1701264521-jpg', 'unity-untuk-pengambangan-android', ' in stock', '2023-10-10 04:43:12', '2023-12-16 01:19:57', '2023-12-16 01:19:57'),
(28, 'MTK001', 'Aljabar dan Kalkulus', 'Aljabar dan Kalkulus-1701264752-jpg', 'aljabar-dan-kalkulus', ' in stock', '2023-10-10 04:44:55', '2023-12-16 01:20:08', '2023-12-16 01:20:08'),
(29, 'MTK002', 'Matematika Diskrit revisi Ketujuh', 'Matematika Diskrit revisi Ketujuh-1701264783-jpg', 'matematika-diskrit-revisi-ketujuh', 'in stock', '2023-10-10 04:45:52', '2023-12-16 01:20:14', '2023-12-16 01:20:14'),
(30, 'P002', 'Pemrograman visual dengan C#', 'Pemrograman visual dengan C#-1701266337-jpg', 'java-2-weekend-crash-course', 'in stock', '2023-11-26 10:57:16', '2023-11-29 06:59:23', '2023-11-29 06:59:23'),
(32, 'CM001', 'Nakayoshi volume 5', 'Nakayoshi volume 5-1701265129-jpg', 'nakayoshi-volume-5', 'in stock', '2023-11-26 11:22:50', '2023-12-27 02:24:24', NULL),
(33, 'CM002', 'Second Summer, Never See You Again 2', 'Second Summer, Never See You Again 2-1701265155-jpg', 'second-summer-never-see-you-again-2', ' not available', '2023-11-26 11:56:49', '2023-12-27 02:40:09', NULL),
(34, 'CM003', 'Digimon Season 2 Volume 16', 'Digimon Season 2 Volume 16-1701265193-jpg', 'digimon-season-2-volume-16', ' not available', '2023-11-26 12:01:55', '2023-12-27 02:40:49', NULL),
(35, 'CM004', 'Battle Game in 5 Seconds volume 10', 'Battle Game in 5 Seconds volume 10-1701265237-jpg', 'battle-game-in-5-seconds-volume-10', ' not available', '2023-11-26 12:04:20', '2023-12-27 02:29:28', NULL),
(36, 'P002', 'Pemrograman visual C#', 'Pemrograman visual C#-1701265258-jpeg', 'pemrograman-visual-c', 'in stock', '2023-11-29 06:15:00', '2023-11-29 06:43:21', '2023-11-29 06:43:21'),
(37, 'PG002', 'Pemrograman dengan visual c#', 'Pemrograman dengan visual c#-1701265514-jpeg', 'pemrograman-dengan-visual-c', 'in stock', '2023-11-29 06:45:14', '2023-11-29 06:48:19', '2023-11-29 06:48:19'),
(38, 'Java01', 'Java Crash course', 'Java Crash course-1701266013-jpg', 'java-crash-course', ' not available', '2023-11-29 06:53:33', '2023-12-27 02:41:15', NULL),
(39, 'Java02', 'Soal,kasus dan penyelesaian java', 'Soal,kasus dan penyelesaian java-1701267245-jpeg', 'soal-kasus-dan-penyelesaian-java', ' not available', '2023-11-29 07:01:35', '2023-12-27 02:41:28', NULL),
(40, 'Mjlh01', 'Majalah Bobo Tahun 2023', 'Majalah Bobo Tahun 2023-1701268425-jpg', 'majalah-bobo-tahun-2023', 'in stock', '2023-11-29 07:33:45', '2023-11-29 07:33:45', NULL),
(41, 'c#001', 'Kumpulan Program Latihan VB.net', 'Kumpulan Program Latihan VB.net-1701271066-jpeg', 'pemrograman-visual-c', 'in stock', '2023-11-29 08:13:55', '2023-11-29 08:17:46', NULL),
(42, 'Diskrit001', 'Matematika Diskrit', 'Matematika Diskrit-1702715621-jpg', 'matematika-diskrit', 'in stock', '2023-12-16 01:33:42', '2023-12-16 01:33:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(45, 32, 34, NULL, NULL),
(46, 33, 34, NULL, NULL),
(48, 28, 22, NULL, NULL),
(49, 28, 30, NULL, NULL),
(50, 29, 22, NULL, NULL),
(51, 29, 30, NULL, NULL),
(55, 27, 21, NULL, NULL),
(56, 27, 22, NULL, NULL),
(60, 33, 35, NULL, NULL),
(61, 37, 21, NULL, NULL),
(62, 37, 22, NULL, NULL),
(65, 38, 21, NULL, NULL),
(66, 38, 22, NULL, NULL),
(71, 40, 35, NULL, NULL),
(73, 41, 21, NULL, NULL),
(75, 42, 30, NULL, NULL),
(76, 42, 22, NULL, NULL),
(77, 34, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 'Programming', 'programming', '2023-10-03 23:09:25', '2023-10-03 23:09:25', NULL),
(22, 'Technology Information', 'technology-information', '2023-10-03 23:09:57', '2023-11-18 10:40:00', NULL),
(30, 'Mathematics', 'mathematics', '2023-10-04 01:08:30', '2023-10-04 02:31:53', NULL),
(34, 'Comic', 'comic', '2023-10-04 04:28:24', '2023-10-10 05:56:48', NULL),
(35, 'Magazine', 'magazine', '2023-10-04 11:04:56', '2023-10-04 11:04:56', NULL),
(36, 'Encyclopedia', 'encyclopedia', '2023-10-06 18:39:56', '2023-10-06 18:39:56', NULL),
(37, 'Fiction', 'fiction', '2023-11-29 05:08:25', '2023-11-29 05:08:25', NULL),
(38, 'Novel', 'novel', '2023-11-29 05:08:32', '2023-11-29 05:08:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_10_04_031525_create_roles_table', 1),
(10, '2023_10_04_031751_create_users_table', 1),
(12, '2023_10_04_032527_add_role_id_column_to_users_table', 2),
(13, '2023_10_04_033333_create_books_table', 2),
(14, '2023_09_21_120149_create_categories_table', 3),
(15, '2023_10_04_034746_create_book_category_table', 4),
(16, '2023_10_04_035010_create_rent_logs_table', 5),
(17, '2023_10_04_044929_add_slug_column_to_categories_table', 6),
(18, '2023_10_04_054505_change_slug_column_into_nullable_in_categories_table', 7),
(19, '2023_10_04_060023_change_slug_column_into_nullable_in_categories_table', 8),
(20, '2023_10_04_093650_add_soft_delete_column_to_categories_table', 9),
(21, '2023_10_04_094203_add_soft_delete_column_to_categories_table', 10),
(22, '2023_10_04_120147_add_slug_cover_column_to_books_table', 10),
(23, '2023_10_10_055332_add_soft_delete_to_books_table', 11),
(24, '2023_11_26_141712_add_slug_to_users_table', 12),
(25, '2023_11_26_154359_add_soft_delete_to_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_logs`
--

INSERT INTO `rent_logs` (`id`, `book_id`, `user_id`, `rent_date`, `return_date`, `actual_return_date`, `created_at`, `updated_at`) VALUES
(46, 34, 4, '2023-12-27', '2024-01-04', '2024-01-2025', '2023-12-27 02:33:10', '2023-12-27 02:33:10'),
(47, 33, 4, '2023-12-27', '2024-01-03', '2023-12-27', '2023-12-27 02:38:39', '2023-12-27 02:39:10'),
(49, 34, 9, '2023-12-27', '2024-01-03', NULL, '2023-12-27 02:40:49', '2023-12-27 02:40:49'),
(50, 38, 4, '2023-12-27', '2024-01-03', NULL, '2023-12-27 02:41:15', '2023-12-27 02:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(1, 'admin', 'admin', '$2y$10$z2iE1gIkQWC2mo33B1vPbuWEQozH8WixSu.l/Okl/YMyouPr2yqPa', '+62-853-555-636', '', 'active', NULL, NULL, NULL, 1),
(4, 'user2', 'user2', '$2y$10$wI2SPHpO33awPzaA0xDe9eL.ZCzCj4zinQTfTA7CZt2SNcoXKRndO', '+62-838-555-765', 'Bogor', 'active', NULL, NULL, NULL, 2),
(9, 'akuuser', 'akuuser', '$2y$10$St4DpkV7D87OoWHPDaFle.c/Z6VcwAAdaQkV4fhv8eB3.yIdS7p6e', '+7-940-555-0654', 'Jakarta,Indonesia', 'active', '2023-11-29 05:14:42', '2023-11-29 05:16:37', NULL, 2),
(10, 'FWE', 'fwe', '$2y$10$AmBdK5.hyS8O5H53nJtK/OR8a4DLMPjhGcVgvVtF9M5nv3T4t0op6', '+7-940-555-0654', 'SAINT,GERMAN', 'active', '2023-12-08 09:43:16', '2023-12-08 09:45:03', '2023-12-08 09:45:03', 2),
(11, 'user3', 'user3', '$2y$10$rz8Wnc5lnpoAbibLsWnSqOxy91R./MV0UI0fx5aQzIUA3UDcEGNnu', '+7-940-555-0654', 'SAINT,GERMAN', 'inactive', '2023-12-27 01:03:39', '2023-12-27 01:03:39', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_book_id_foreign` (`book_id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
