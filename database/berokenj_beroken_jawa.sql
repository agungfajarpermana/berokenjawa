-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 06:22 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beroken_jawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `category`, `created_at`, `updated_at`) VALUES
(424, 'berokenjawa_img_1545308484.jpg', 'Others', '2018-12-20 05:21:24', '2018-12-20 05:21:24'),
(428, 'berokenjawa_img_1545308490.jpg', 'Others', '2018-12-20 05:21:30', '2018-12-20 05:21:30'),
(429, 'berokenjawa_img_1545308497.png', 'Others', '2018-12-20 05:21:37', '2018-12-20 05:21:37'),
(430, 'berokenjawa_img_1545571516.jpeg', 'Opening Ceremony', '2018-12-23 06:25:16', '2018-12-23 06:25:16'),
(433, 'berokenjawa_img_1545571858.jpeg', 'Opening Ceremony', '2018-12-23 06:30:58', '2018-12-23 06:30:58');

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
(3, '2018_12_18_020042_create_gallery_table', 1),
(4, '2018_12_25_124546_create_forgot_table', 2);

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
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `job` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `image`, `name`, `job`, `deskripsi`, `url`, `position`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'top', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(2, NULL, 'Bu Ratna', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'top', '2019-02-04 04:21:50', '2019-02-10 01:14:51'),
(3, 'berokenjawa_img_1549777698.png', 'Agung Fajar Permana', 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'top', '2019-02-04 04:21:50', '2019-04-06 14:41:25'),
(4, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'top', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(5, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'top', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(6, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(7, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(8, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(9, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(10, NULL, 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-04 04:21:50'),
(11, 'berokenjawa_img_1549780167.png', 'Ratna Sarumpet', 'Web Programmer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui dicta repellat nobis. Saepe sed', 'http://localhost:8000', 'bottom', '2019-02-04 04:21:50', '2019-02-09 23:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'beroken jawa', 'berokenjawa@gmail.com', NULL, '$2y$10$cYJcqRm9aq4G0QIjDyqp6O6roMQk3VU19m36ZgpsibsA34psx.M7q', 'DTXSVnXbm0IL0G9qgjZ48JO8AkBo7uC3yOUHhGAabmLETuy7jROTJTRD6X3t', NULL, '2018-12-25 10:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
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
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
