-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 05:50 AM
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
-- Database: `kamarkosong`
--

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
-- Table structure for table `kosans`
--

CREATE TABLE `kosans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `luas_kamar` varchar(255) NOT NULL,
  `ket_biaya_lain` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `NoWa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kosans`
--

INSERT INTO `kosans` (`id`, `nama_kos`, `fasilitas`, `luas_kamar`, `ket_biaya_lain`, `alamat`, `NoWa`, `jumlah`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Dapa', 'Laundri,Listrik', '1 x 1', 'sudah termasuk listrik', 'sukapura', 8754621, 8, 1000000, 'post-images/3iXI0Z3E2LSSGLOj7qWZQyBSw9hBZeabcKNJ8zFj.jpg', '2023-12-29 03:41:20', '2023-12-29 03:41:20'),
(4, 'Real Kost', 'Laundri,Keamanan 24 Jam,PDAM,Penjaga Kos 24 Jam,WiFi', '3 x 4', 'sudah termasuk listrik', 'JL. mengger no 4 , Sukapura', 8754621, 8, 1000000, 'post-images/s5UMD71n6xQGU30MyxAVEiv2L2rkK6oRYYS42BSr.jpg', '2023-12-29 03:41:49', '2023-12-29 03:41:49'),
(10, 'Aileen Dormitory', 'PDAM,Penjaga Kos 24 Jam,WiFi', '3 x 4', 'sudah termasuk listrik', 'Ciganitri', 8754621, 10, 1500000, 'post-images/LG9n9FSuU4PAq0af7cokEVKURI1IpZwZ2Jof5TBe.jpg', '2023-12-29 10:25:02', '2023-12-29 10:25:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_29_082109_create_kosans_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','pemilikkost') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'User@gmail.com', NULL, '$2y$12$bbgXZ90LudvKimmvWyGCmePwrBlvHqWPYTXOF4wIKWU/Pp/7QHdo6', 'user', NULL, '2023-12-21 05:43:54', '2023-12-21 05:43:54'),
(2, 'Pemilik Kost', 'PemilikKost@gmail.com', NULL, '$2y$12$Mf9uHtYTJdTevM3VCjSchOtd4x26znqthGMVfdjDQplWPLxtIP0.a', 'pemilikkost', NULL, '2023-12-21 05:43:54', '2023-12-21 05:43:54'),
(3, 'Nopal', 'nopal@gmail.com', NULL, '$2y$12$4D9CgRl/GWOCSNVZ3lofaeGVpbxzFUxmnOF2/0LKbjWowM0P8QrdG', 'user', NULL, '2023-12-28 06:29:23', '2023-12-28 06:29:23'),
(4, 'dapa', 'dapa@gmail.com', NULL, '$2y$12$3tr4dhuBzXFIhURKJrMUyulBpF1dCn/aQFtn0cIyxJ5mrsR6RHcC.', 'pemilikkost', NULL, '2023-12-28 06:33:32', '2023-12-28 06:33:32'),
(6, 'rapi', 'rapi@kamarkosong.com', NULL, '$2y$12$Kr/Xe/PTCCtpn0hmX9fYDe.W195KW03uH89I0KAKKUQHFX/A.wFfu', 'pemilikkost', NULL, '2023-12-28 09:06:06', '2023-12-28 09:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kosans`
--
ALTER TABLE `kosans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kosans`
--
ALTER TABLE `kosans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
