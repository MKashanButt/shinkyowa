-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 07:33 PM
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
-- Database: `squadautoslondon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1711561944),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1711561944;', 1711561944),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:5;', 1711555386),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1711555386;', 1711555386);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_26_160326_create_vehicles_table', 1),
(5, '2024_03_26_201541_create_vehicle_infos_table', 1),
(6, '2024_03_26_201542_create_vehicle_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fuMHRJC8wr7RDTJtQDVYCUvFqd7QN4SlgB18UhbH', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV1hHbFdwWE56clVseEJnZE9xOU1qZXNxRGxsUHI3QWEwb3JaZFJOTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdG9jayI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRaUGZvS2hMYzFzeUxDanFsNmNCczl1Y3BqNlA0cERPcXQ5WEc2SnM4SEpDUUZ3WlpMakVheSI7fQ==', 1711564266);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-03-26 15:18:37', '$2y$12$Ul44PaTULe63xnKSwzNwIeDwARnNpeeUZxzX3xqO2FOTaLF.EpyRO', '1uy4rpuDTl', '2024-03-26 15:18:38', '2024-03-26 15:18:38'),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$12$ZPfoKhLc1syLCjql6cBs9ucpj6P4pDOqt9XG6Js8HJCQFwZZLjEay', NULL, '2024-03-26 15:21:51', '2024-03-26 15:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `fob` int(11) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make`, `model`, `year`, `fob`, `currency`, `created_at`, `updated_at`) VALUES
(14144, 'BMW', '3 Series', 2011, 4475, '£', '2024-03-26 15:24:00', '2024-03-26 15:24:00'),
(14145, 'BMW', '3 Series', 2009, 3000, '£', '2024-03-26 15:34:01', '2024-03-26 15:34:01'),
(14146, 'BMW', '5 Series', 2018, 16995, '£', '2024-03-26 15:39:53', '2024-03-26 15:39:53'),
(14147, 'BMW', '2 Series', 2020, 16698, '£', '2024-03-26 15:46:33', '2024-03-26 15:46:33'),
(14148, 'BMW', 'X1', 2018, 14950, '£', '2024-03-26 15:58:34', '2024-03-26 15:58:34'),
(14149, 'BMW', '3 Series', 2018, 12995, '£', '2024-03-26 16:03:17', '2024-03-26 16:04:03'),
(14150, 'BMW', '3 Series', 2016, 14700, '£', '2024-03-26 16:10:11', '2024-03-26 16:10:11'),
(14151, 'BMW', '4 Series', 2014, 5650, '£', '2024-03-26 16:17:04', '2024-03-26 16:17:04'),
(14152, 'BMW', '4 Series', 2015, 6500, '£', '2024-03-26 16:27:05', '2024-03-26 16:27:05'),
(14153, 'BMW', '4 Series', 2014, 6700, '£', '2024-03-26 16:31:59', '2024-03-26 16:31:59'),
(14154, 'BMW', '4 Series', 2014, 6995, '£', '2024-03-27 10:57:14', '2024-03-27 10:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE `vehicle_images` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_images`
--

INSERT INTO `vehicle_images` (`id`, `thumbnail`, `url`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, '01HSY7CVH5BA3F0B2CR2WZ4TQ6.jpg', '[\"01HSY7CVH5BA3F0B2CR2WZ4TQ6.jpg\",\"01HSY7CVH9K85PJXM7XRS3Q5HV.jpg\",\"01HSY7CVHD0Z14KD59SE7E0ES5.jpg\",\"01HSY7CVHHV41DSQ9BYNQ1G7TN.jpg\"]', 14144, '2024-03-26 15:32:00', '2024-03-26 15:32:00'),
(2, '01HSY7R9JNBRK1JX0FE7TAW14W.jpg', '[\"01HSY7R9JNBRK1JX0FE7TAW14W.jpg\",\"01HSY7R9JTEV4XWR9RX9YMGZF6.jpg\",\"01HSY7R9JX34HNZJN4JRBN6QTS.jpg\",\"01HSY7R9K1R0ZDEFHDTQCM5V7S.jpg\"]', 14145, '2024-03-26 15:38:14', '2024-03-26 15:38:14'),
(3, '01HSY83JRM9FN76QGJTYZQ46YR.jpg', '[\"01HSY83JRM9FN76QGJTYZQ46YR.jpg\",\"01HSY83JRS4C0W429E2XA3HGVZ.jpg\",\"01HSY83JRXFHMNK6CZ951NPCK5.jpg\",\"01HSY83JS0R8GVVKVSV2MQBAMK.jpg\"]', 14146, '2024-03-26 15:44:24', '2024-03-26 15:44:24'),
(4, '01HSY8DR4M03MDB17GW00WPN1K.jpg', '[\"01HSY8DR4M03MDB17GW00WPN1K.jpg\",\"01HSY8DR4RKM3JX8XCPZ09MCQT.jpg\",\"01HSY8DR4WT79EFAK7VMW4PRXS.jpg\",\"01HSY8DR4ZZETSQSW475VJZJ1N.jpg\"]', 14147, '2024-03-26 15:49:57', '2024-03-26 15:49:57'),
(5, '01HSY93VAFPHM8DJSDAS0AS3GV.jpg', '[\"01HSY93VAFPHM8DJSDAS0AS3GV.jpg\",\"01HSY93VAKQD2V9KZHWXDT9ERP.jpg\",\"01HSY93VAQ18MJ3S1P3EMP49Y7.jpg\",\"01HSY93VATGA3YKV2HT4238KPH.jpg\"]', 14148, '2024-03-26 16:02:02', '2024-03-26 16:02:02'),
(6, '01HSY9DGK9JMJWADP3R89W56X4.jpg', '[\"01HSY9DGK9JMJWADP3R89W56X4.jpg\",\"01HSY9DGKE1RYG4MBWTDNVPH58.jpg\",\"01HSY9DGKJTAEM9GJYYHAA0H4M.jpg\"]', 14149, '2024-03-26 16:07:18', '2024-03-26 16:07:18'),
(7, '01HSY9TT5A51Q5ZA8A4YFBKNYC.jpg', '[\"01HSY9TT5A51Q5ZA8A4YFBKNYC.jpg\",\"01HSY9TT5ETD4CN8S2ASSNEBAG.jpg\",\"01HSY9TT5JWW61N1N4QP1GQGKD.jpg\",\"01HSY9TT5N1C73ZCTP514NRF7P.jpg\"]', 14150, '2024-03-26 16:14:34', '2024-03-26 16:14:34'),
(8, '01HSYA66VSMJQT2DDC4W9A43MV.jpg', '[\"01HSYA66VSMJQT2DDC4W9A43MV.jpg\",\"01HSYA66VX4ESTD8WYGD2092NZ.jpg\",\"01HSYA66W1RE6H4SK6QNAZFNXH.jpg\",\"01HSYA66W5FCHVP59BE6P73CJB.jpg\"]', 14151, '2024-03-26 16:20:48', '2024-03-26 16:20:48'),
(9, '01HSYAQQHDDS73PG4F49DHFKHN.jpg', '[\"01HSYAQQHDDS73PG4F49DHFKHN.jpg\",\"01HSYAQQHH6K207GCWHDZBCDXB.jpg\",\"01HSYAQQHMZ484X7VG7XTVHZGN.jpg\",\"01HSYAQQHRTDRYQ8B09DV07AWX.jpg\"]', 14152, '2024-03-26 16:30:22', '2024-03-26 16:30:22'),
(10, '01HSYB0Y084PQMVQXK3MDY0DH6.jpg', '[\"01HSYB0Y084PQMVQXK3MDY0DH6.jpg\",\"01HSYB0Y0DW651T316QHES3H36.jpg\",\"01HSYB0Y0HP2STEXZBHN6TVCQ4.jpg\",\"01HSYB0Y0N6XDYHKCMS4FPWCMV.jpg\"]', 14153, '2024-03-26 16:35:23', '2024-03-26 16:35:23'),
(11, '01HT0AC5GBZ3J3ZM8QDPFCK780.jpg', '[\"01HT0AC5GGDNQ01CJJ99JY9RGF.jpg\",\"01HT0AC5GMF34DKTXT4WW28GNW.jpg\",\"01HT0AC5GRY1XE25Y30DN934XZ.jpg\",\"01HT0AC5GZR6WTF2Y4VY41N2T2.jpg\"]', 14154, '2024-03-27 11:02:32', '2024-03-27 11:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_infos`
--

CREATE TABLE `vehicle_infos` (
  `id` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `doors` varchar(255) NOT NULL,
  `transmission` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `extras` text NOT NULL,
  `buy_link` varchar(200) NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_infos`
--

INSERT INTO `vehicle_infos` (`id`, `mileage`, `engine`, `doors`, `transmission`, `type`, `fuel`, `extras`, `buy_link`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 116054, '2.0L', '4', 'Manual', 'Saloon', 'Petrol', 'These are in addition to what this car typically comes with as standard:\nDoor Mirrors - Electric Folding\nDoor Mirrors - Folding - Automatically Dimming\nPDC - Park Distance Control - Front and Rear\nRain Sensor with Automatic Headlight Activation\nSeats - Front Heated\nUSB Audio Interface\nDakota Leather - Black with Royal Blue Stitching', 'https://www.autotrader.co.uk/car-details/202403157628368?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&fromsra&refresh=true', 14144, '2024-03-26 15:27:27', '2024-03-26 15:27:27'),
(2, 89644, '2.0L', '2', 'Manual', 'Coupe', 'Petrol', '-', 'https://www.autotrader.co.uk/car-details/202307300225458?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&fromsra', 14145, '2024-03-26 15:36:04', '2024-03-26 15:36:04'),
(3, 60516, '2.0L', '4', 'Automatic', 'Saloon', 'Petrol', 'These are in addition to what this car typically comes with as standard:\nSun Protection Glazing\nRemote Services\nDakota Leather with Exclusive Stitching - Ivory White with Black Interior', 'https://www.autotrader.co.uk/car-details/202308030379138?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&year-from=2018&year-to=2022&fromsra', 14146, '2024-03-26 15:41:56', '2024-03-26 15:41:56'),
(4, 31729, '1.5L', '2', 'Automatic', 'Coupe', 'Petrol', '-', 'https://www.autotrader.co.uk/car-details/202403257950198?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&year-from=2018&year-to=2022&fromsra', 14147, '2024-03-26 15:47:54', '2024-03-26 15:47:54'),
(5, 46620, '1.5L', '5', 'Automatic', 'SUV', 'Petrol', 'These are in addition to what this car typically comes with as standard:\nExterior Mirrors - Electrically Folding with Anti Dazzle\nExterior Mirrors - Folding\nGrid Cloth - Anthracite', 'https://www.autotrader.co.uk/car-details/202403217829257?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&year-from=2018&year-to=2022&fromsra', 14148, '2024-03-26 16:00:00', '2024-03-26 16:00:00'),
(6, 69090, '2.0L', '4', 'Manual', 'Saloon', 'Petrol', 'These are in addition to what this car typically comes with as standard:\nPDC - Park Distance Control - Front and Rear\nSeat Heating for Driver and Front Passenger\nHead Restraints - Rear and Folding\nDakota Leather - Black with Black Interior', 'https://www.autotrader.co.uk/car-details/202403187703519?sort=relevance&advertising-location=at_cars&fuel-type=Petrol&make=BMW&postcode=tw197th&year-from=2018&year-to=2022&fromsra', 14149, '2024-03-26 16:05:24', '2024-03-26 16:05:24'),
(7, 82324, '2.0L', '5', 'Automatic', 'Estate', 'Diesel', 'These are in addition to what this car typically comes with as standard:\nArmrest front, sliding\nBrushed Aluminium trim finishers with Black high-gloss highlight\nBrushed Aluminium trim finishers with Black high-gloss highlight\nDakota leather\nExtended lighting\nExterior mirrors – electrically folding with anti-dazzle\nFull black panel display\nHeadlining, Anthracite\nHigh-gloss Shadowline\nLED foglights, front\nLED headlights\nMetallic paint\nPark Distance Control (PDC), front and rear\nSport seats, front\nSun protection glass', 'https://www.autotrader.co.uk/car-details/202402196720761?journey=FEATURED_LISTING_JOURNEY&sort=price-asc&advertising-location=at_cars&make=BMW&model=3%20Series&postcode=tw197th&fromsra', 14150, '2024-03-26 16:12:02', '2024-03-26 16:12:02'),
(8, 145000, '2.0L', '2', 'Manual', 'Coupe', 'Diesel', 'These are in addition to what this car typically comes with as standard:\nElectric windows\nAir conditioning\nParking aid\nCD player\nBluetooth\nLeather trim\nHeated seats\nHeight adjustable driver\'s seat\nHeight adjustable passenger seat\nFolding rear seats\nMetallic paint\n17\" Alloy Wheels\nPower steering\nCruise control\nTraction control\nAlarm\nImmobiliser\nDriver\'s airbags\nSide airbags\nPassenger airbags', 'https://www.autotrader.co.uk/car-details/202212052275844?sort=price-asc&advertising-location=at_cars&make=BMW&model=4%20Series&postcode=tw197th&fromsra', 14151, '2024-03-26 16:18:22', '2024-03-26 16:18:22'),
(9, 136000, '2.0L', '2', 'Manual', 'Coupe', 'Diesel', '-', 'https://www.autotrader.co.uk/car-details/202206247137738?sort=price-asc&advertising-location=at_cars&make=BMW&model=4%20Series&postcode=tw197th&fromsra', 14152, '2024-03-26 16:28:15', '2024-03-26 16:28:15'),
(10, 132900, '3.0L', '2', 'Automatic', 'Coupe', 'Diesel', '-', 'https://www.autotrader.co.uk/car-details/202402016106357?sort=price-asc&advertising-location=at_cars&make=BMW&model=4%20Series&postcode=tw197th&fromsra', 14153, '2024-03-26 16:33:00', '2024-03-26 16:33:00'),
(11, 133204, '2.0L', '2', 'Automatic', 'Coupe', 'Diesel', 'These are in addition to what this car typically comes with as standard:\n18in Alloy Wheels - V Spoke - 398\nAlpine White\nDakota Leather - Black\nEnhanced Bluetooth Telephone Preparation with USB Audio Interface', 'https://www.autotrader.co.uk/car-details/202402287019777?sort=price-asc&advertising-location=at_cars&make=BMW&model=4%20Series&postcode=tw197th&fromsra', 14154, '2024-03-27 10:58:42', '2024-03-27 10:58:42');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_infos`
--
ALTER TABLE `vehicle_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle_infos`
--
ALTER TABLE `vehicle_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
