-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 02:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcihcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'MiiRna MouRad', 'mirnamourad-fci@hotmail.com', NULL, '$2y$10$0TKChO4LgbH7.eBl3G1iS.5yaE7a98LBIDCDPiCEDy3kNvOD7ViuO', 'l1061vnPK4bBkZrtY7iMWoZhMk7nqQwERjnFCF9eKbdIfJdXjUjo2D8j1mjV', '2019-03-13 17:12:13', '2019-03-13 17:12:13'),
(3, 'Mayar Mostafa', 'maiar@gmail.com', NULL, '$2y$10$X8my9RQqPd4LIWf4rE504OXkb5RHzkKsDSxAe7m8VrRp7IOKr7yrS', 'yV4I8qDJ6hR3LJKYqNyw7by901p95K3kux8toHbnu9bZlHn3XX0P5OcDHgev', '2019-03-13 17:27:16', '2019-03-13 17:27:16'),
(4, 'Hassan Abdel-Raof', 'hassan@gmail.com', NULL, '$2y$10$riZhe8y6NtzI4EXKgGZ.m.eM3L6ip.qn4OzwKH4kJ9NBn1o1wO0Qi', 'WuLmpN9ZH3UVILSwtQDgiQMb095SYSPnT8IoulQi00gfMGddkLz4EJbiLcIO', '2019-03-13 19:20:45', '2019-03-13 19:20:45'),
(5, 'Ahmed Syaed', 'ahmed@gmail.com', NULL, '$2y$10$hvHH.ECDPpVenGbAiEJgDOZtMV3KpvaBFm5tdnCw3KXHtScLDZlHy', 'aIzSnVMluLK5B45SqniajLmCSfaKQeh5e1PKabZTzcGROEriHbmn4CgoqaNY', '2019-03-13 19:54:19', '2019-03-13 19:54:19'),
(6, 'Hazem Khaled', 'hazem@gmail.com', NULL, '$2y$10$RQeMMYKQOgMAn08P6qeXH.JFQRIGkpPrak0kOOeLjhlYKj6.XyuTy', 'XiXIJS0ooWTDdbQF1Rgx572dRM887cPo2UG6uEDn70E0SAtPh7ErN9GDZzOo', '2019-03-14 11:00:03', '2019-03-14 11:00:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
