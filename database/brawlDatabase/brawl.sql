-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 nov 2024 om 11:48
-- Serverversie: 9.0.1
-- PHP-versie: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS brawl;
CREATE DATABASE brawl;
USE brawl;


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brawlers`
--

DROP TABLE IF EXISTS `brawlers`;
CREATE TABLE IF NOT EXISTS `brawlers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `brawlers`
--

INSERT INTO `brawlers` (`id`, `name`, `rarity`, `role`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Shelly', 'Starter', 'Damage Dealer', '/images/brawlers/shelly.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(2, 'Nita', 'Trophy road', 'Damage dealer', '/images/brawlers/nita.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(3, 'Colt', 'Trophy road', 'Damage Dealer', '/images/brawlers/colt.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(4, 'Bull', 'Trophy road', 'Tank', '/images/brawlers/bull.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(5, 'Jessie', 'Trophy road', 'Controller', '/images/brawlers/jessie.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(6, 'Brock', 'Trophy road', 'Marksman', '/images/brawlers/brock.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(7, 'Dynamike', 'Trophy road', 'Artillery', '/images/brawlers/dynamike.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(8, 'Bo', 'Trophy road', 'Controller', '/images/brawlers/bo.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(9, 'El Primo', 'Rare', 'Tank', '/images/brawlers/primo.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(10, 'Barley', 'Rare', 'Artillery', '/images/brawlers/barley.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(11, 'Poco', 'Rare', 'Support', '/images/brawlers/poco.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(12, 'Darryl', 'Super Rare', 'Tank', '/images/brawlers/darryl.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(13, 'Penny', 'Super Rare', 'Artilerry', '/images/brawlers/penny.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(14, 'Rico', 'Super Rare', 'Damage Dealer', '/images/brawlers/rico.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(15, 'Frank', 'Epic', 'Tank', '/images/brawlers/frank.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(16, 'Pam', 'Epic', 'Support', '/images/brawlers/pam.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(17, 'Piper', 'Epic', 'Marksman', '/images/brawlers/piper.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(18, 'Tara', 'Mythic', 'Damage Dealer', '/images/brawlers/tara.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(19, 'Mortis', 'Mythic', 'Assassin', '/images/brawlers/mortis.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(20, 'Crow', 'Legendary', 'Assassin', '/images/brawlers/crow.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(21, 'Spike', 'Legendary', 'Damage Dealer', '/images/brawlers/spike.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38'),
(22, 'Leon', 'Legendary', 'Assassin', '/images/brawlers/leon.png', '2024-11-18 10:34:38', '2024-11-18 10:34:38');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '0001_01_01_000000_create_users_table', 1),
(52, '0001_01_01_000001_create_cache_table', 1),
(53, '0001_01_01_000002_create_jobs_table', 1),
(54, '2024_11_17_162853_create_brawlers_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3lKSuzM372LwthiE0YRJXNnjcSoHVxkmKrPF1Fiz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXFzdlJsTTdNTUdXcTN6WG5id1FDWVJtRVd5b3ZYVDVDZUF3YUs5QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9icmF3bC9icmF3bGVycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732005346),
('IFChlFZqnpoKVXsIUEAOgJIS0KZC6bhslgTVKdGj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienlKNVBIeElCbm5hTFVSVmtHdER6M1VWZ3JFdGlDc3VQUjFWWng1TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731954613),
('uG6eX0OtrK0MImB6RlfmVY9pI6Opp6Mwvs8dV1RA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWxHOWpjRUUwVk1oZmNRQzYySHdNZnFRQnhLbE9HUHJCZDVvSmtMWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9icmF3bCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731970585);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-11-18 10:34:35', '$2y$12$mqSz21EqwyjI7RNZXcMQIep5.srxbHcjuPcG466.bfVXJTEjYhGWe', 'DFQKrxWCD7', '2024-11-18 10:34:35', '2024-11-18 10:34:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
