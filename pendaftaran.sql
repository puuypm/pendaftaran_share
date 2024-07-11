-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 09:51 AM
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
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('santi@gmail.com|127.0.0.1', 'i:1;', 1719368297),
('santi@gmail.com|127.0.0.1:timer', 'i:1719368297;', 1719368297);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_p_participants`
--

CREATE TABLE `c_p_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) DEFAULT NULL,
  `id_gelombang` bigint(20) DEFAULT NULL,
  `nama_lengkap` varchar(45) DEFAULT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_p_participants`
--

INSERT INTO `c_p_participants` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `kartu_keluarga`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 'Toni Ricardo S.H', '1718902337_UJIKOM JUNIOR WEB PROGRAMMING - SOAL Point Of Sales.docx', 'toni@gmail.com', 0, '2024-06-20 08:35:31', '2024-06-20 18:11:50'),
(3, 1, 3, 'halo haloo', '1718932103_UJIKOM JUNIOR WEB PROGRAMMING - SOAL Point Of Sales.docx', 'saa@gmail.com', 0, '2024-06-20 18:08:23', '2024-06-20 18:08:39');

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
-- Table structure for table `gelombangs`
--

CREATE TABLE `gelombangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(45) DEFAULT NULL,
  `aktif` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelombangs`
--

INSERT INTO `gelombangs` (`id`, `nama_gelombang`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'Gelombang 1', 1, '2024-06-17 06:21:18', '2024-06-18 04:49:48'),
(2, 'Gelombang 2', 0, '2024-06-17 06:21:18', '2024-06-20 05:38:57'),
(3, 'Gelombang 3', 0, '2024-06-17 06:21:18', '2024-06-19 18:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Operator Komputer', '2024-06-18 01:55:44', NULL),
(2, 'Bahasa Inggris', '2024-06-18 01:55:44', NULL),
(3, 'Desain Grafis', '2024-06-18 01:55:44', NULL),
(4, 'Tata Boga', '2024-06-18 01:55:44', NULL),
(5, 'Tata Busana', '2024-06-18 01:55:44', NULL),
(6, 'Tata Graha', '2024-06-18 01:55:44', NULL),
(7, 'Teknik Pendingin', '2024-06-18 01:55:44', NULL),
(8, 'Teknik Komputer', '2024-06-18 01:55:44', NULL),
(9, 'Otomotif Sepeda Motor', '2024-06-18 01:55:44', NULL),
(10, 'Jaringan Komputer', '2024-06-18 01:55:44', NULL),
(11, 'Barista', '2024-06-18 01:55:44', NULL),
(12, 'Bahasa Korea', '2024-06-18 01:55:44', NULL),
(13, 'Make Up Artist', '2024-06-18 01:55:44', NULL),
(14, 'Video Editor', '2024-06-18 01:55:44', NULL),
(15, 'Content Creator', '2024-06-18 01:55:44', NULL),
(16, 'Web Programming', '2024-06-18 01:55:44', NULL);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_06_15_124815_create_participants_table', 5),
(12, '2024_06_15_130524_create_gelombangs_table', 6),
(13, '2024_06_15_130356_create_jurusans_table', 7),
(16, '2024_06_20_142808_create_cpparticipants_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) DEFAULT NULL,
  `id_gelombang` bigint(20) DEFAULT NULL,
  `nama_lengkap` varchar(45) DEFAULT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  `nama_sekolah` varchar(45) DEFAULT NULL,
  `kejuruan` varchar(45) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `aktivitas_saat_ini` varchar(150) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `kejuruan`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'Sami', '9485345', '1718548896_UJIKOM JUNIOR WEB PROGRAMMING.docx', 'Laki-laki', 'Jakarta', '2024-06-05', 'sd', 'SMK AL', 'TKJ', '8453456', 'adhy2@gmail.com', 'santai Aja Dirumah', 2, '2025-06-17 07:41:36', '2024-06-19 00:50:40'),
(2, 11, 2, 'Tri Adhy Yulianto', '9485345', '1718635404_UJIKOM JUNIOR WEB PROGRAMMING.docx', 'Laki-laki', 'Jakarta', '2024-06-04', 'sd', 'SMK AL', 'TKJ', '8453456', 'adhy1@gmail.com', 'santai', 0, '2024-06-17 07:43:24', '2024-06-17 07:43:24'),
(4, 16, 1, 'Soni', '45677888', '1718639106_UJIKOM JUNIOR WEB PROGRAMMING.docx', 'Laki-laki', 'Jakarta', '2024-06-05', 'sd', 'SMK AL', 'TKJ', '8453456', 'adhy15@gmail.com', 'santai', 0, '2024-06-17 08:45:06', '2024-06-17 08:45:06'),
(5, 7, 3, 'sana', '45677888', '1718639743_UJIKOM JUNIOR WEB PROGRAMMING.docx', 'Laki-laki', 'Jakarta', '2024-06-12', 'sd', 'SMK AL', 'TKJ', '8453456', 'adhy21@gmail.com', 'santai', 0, '2024-06-17 08:55:43', '2024-06-17 08:55:43'),
(6, 6, 3, 'Tri Adhy Yulianto', '9485345', '1718639845_UJIKOM JUNIOR WEB PROGRAMMING.docx', 'Laki-laki', 'Jakarta', '2024-06-04', 'sd', 'SMK AL', 'TKJ', '8453456', 'adhy33@gmail.com', 'santai', 0, '2024-06-17 08:57:25', '2024-06-17 08:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('adhy@gmail.com', '$2y$12$9X/PDkzlwyynfjGPZU0oT.r.0rpgHdrkAYJufhA0UKh4bYv5CBEkK', '2024-06-15 01:02:53'),
('dani@gmail.com', '$2y$12$oM4DRSFjHbQlILzhiMRocu2/wv/bI788LmgLCL4SpGLN2ttr5Mc7y', '2024-06-15 01:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BY79d5lweyeOcvAk3sajPBawAxJ1vzvuhdkw5BCa', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidVJQcEFRNkE5Qm1Ccm4xOXZ2SDkwcUZyWXp1cVJzV25HV3ozcHFFMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jcGluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1718902947),
('dsXR8dqqNnf8mNebmrekm1ohRbGMtpK90AG5lkga', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUkpmbVBsTXluMW1TRGZ1aU5mWHFlTXc1b2pYV2FxazhjU2ZXTGRVbCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1897359287),
('fVqC62yE3CRT0oQAlFjkAnBWPZ0JbnplKQPkfhLg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU05JSmNHZmNTQmdZRHc3cGZWaDlVYUdZdVZzcVdGOFZOR3ZrRndLcSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1907988797),
('PYn9b3Y7BKbXPXXt6T91VP8nbqUpE4Rrj8Y1FVnQ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiam1zZ01vQ01RaTFneUNDSFR6UVo0MGNINHdFeXFtNEtNcWl0QmFCcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1719368300),
('q10NCddJqDqz2eubeOFZYudZuKXjDmUoE206e8rO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1NPRjFwWU5Obk5UNzhqeWNFQlFXQXM4aEV6ZnFyb2xtVHROYXB5NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1718932372),
('qX263mWSvjoKD8iUBedceV6eibGkrQLoG02wQ2iV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWVlNRVNsTnNaRk1OcE95Y3ZacmlTZEJNZ2VJUnBVYU5CRUtaUEpnSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1750222083),
('RtLKfQwVYGKsbz8LiukBgs1BvFvHeneoyulpRbgv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ0piOWFZeldpZHJTOTJacDczSEJhOFF0eTVZMkJzVUl5amozQktHZiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1736914447),
('ZXRr2eKi5QEXJDVA7ZUxq75yUl2QkHLLbd68qoQG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRFpQZU55VEtVT2R3VjVhRkNpTlVHdndma2lBQUZ3YkluNjZFWFZjZyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvc2V0dGluZ3MvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1750220508);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tri Adhy Yulianto', 'adhy@gmail.com', 'user', NULL, '$2y$12$xBrrUhtpRmCMRjEpqAGQD.uftYEtih8NhPH.m7Ynajg3AEfXb7UES', NULL, '2024-06-14 22:14:40', '2024-06-14 22:14:40'),
(2, 'admin', 'dani@gmail.com', 'admin', NULL, '$2y$12$ZucZocFdLNiHazA.BMxrkuUFdc2AQmzj48nnhds2KGli6kmfytzAW', '0p6mSWG9Z8pNj1jseahjLXggLoMkYP9qktABkb92ysgbpuE5GVtoCT7Zcd2P', '2024-06-14 22:16:41', '2024-06-14 22:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `c_p_participants`
--
ALTER TABLE `c_p_participants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `c_p_participants_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gelombangs`
--
ALTER TABLE `gelombangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `participants_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `c_p_participants`
--
ALTER TABLE `c_p_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gelombangs`
--
ALTER TABLE `gelombangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
