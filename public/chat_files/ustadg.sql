-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 12:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustadg`
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

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2021_08_04_122932_create_providers_table', 1),
(31, '2014_10_12_000000_create_users_table', 2),
(32, '2014_10_12_100000_create_password_resets_table', 2),
(33, '2019_08_19_000000_create_failed_jobs_table', 2),
(34, '2021_08_04_120936_create_roles_table', 2),
(35, '2021_08_04_131503_add_profile_image_to_users_table', 2),
(36, '2021_08_04_142920_add_role_image_to_roles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `sch_date` date NOT NULL,
  `sch_time` time NOT NULL,
  `message` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `address_detail` varchar(500) NOT NULL,
  `additional_phone` varchar(25) NOT NULL,
  `payment` varchar(25) NOT NULL,
  `completed` varchar(11) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `provider`, `user_email`, `order_id`, `sch_date`, `sch_time`, `message`, `address`, `address_detail`, `additional_phone`, `payment`, `completed`) VALUES
(9, 'ali@ali.com', 'abidnoman888@gmail.com', '0d560998512b861020ec39bf6f8f34fc', '2021-09-12', '20:43:00', 'Repudiandae veniam ', 'Est dolores in tenet', 'Aliquam autem aut en', '0348-1717171', 'paid', 'yes'),
(7, 'abidnoman777@gmail.com', 'abidnoman888@gmail.com', 'af1e2857d93de637dcb69078668c54e0', '2021-09-10', '16:45:00', '', 'Ducimus est dolor ', 'Sunt aliquip iure re', '0348-1817379', 'not', 'no'),
(8, 'ali@ali.com', 'abidnoman888@gmail.com', 'cb8a25c366f0cb8768e38823163240fd', '2021-09-12', '20:43:00', 'Repudiandae veniam ', 'Eu enim sint nemo ad', 'Pariatur Non earum ', '0348-1817229', 'not', 'no');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `order_id`, `provider`, `user`, `ratings`) VALUES
(20, '0d560998512b861020ec39bf6f8f34fc', 'ali@ali.com', 'abidnoman888@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`, `role_image`) VALUES
(1, 'ac repair', NULL, NULL, 'maintenance.svg'),
(2, 'carpenter', NULL, NULL, 'carpenter.svg'),
(3, 'electrician', NULL, NULL, 'electrician.svg'),
(4, 'painter', NULL, NULL, 'painter1.svg'),
(5, 'home cleaning', NULL, NULL, 'maid.svg'),
(6, 'construction', NULL, NULL, 'construction-worker.svg'),
(7, 'plumber', NULL, NULL, 'plumber.svg'),
(8, 'carwash', NULL, NULL, 'clean-car.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `package` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `requested` int(11) NOT NULL DEFAULT 0,
  `subscribed` int(11) NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic_front` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic_back` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `dob`, `address`, `zip`, `role_id`, `package`, `nic`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `requested`, `subscribed`, `profile_image`, `nic_front`, `nic_back`) VALUES
(9, 'noman', 'nomi', 'abidnoman777@gmail.com', '034818-17229', NULL, 'Soluta voluptatem i', 0, '1', NULL, NULL, '2021-08-21 06:52:09', '$2y$10$KLqcWooTRG7rlZbXOJng4eVYV733QAEYx7TAZhRSLD5dK6sSbeYJC', '1E3wpLHh9wjJIKY1HYjSHsGKQW3GfYaKvfF8GxxXILFjsZOioemAv89qjoXO', '2021-08-21 06:26:47', '2021-08-21 07:30:01', 0, 0, '1629545207.jpg', '0', ''),
(12, 'ali', 'ali', 'abidnoman@gmail.com', '', NULL, 'Facere irure amet v', 0, '1', NULL, NULL, '2021-08-21 09:16:06', '$2y$10$5Yv5U.xPWEXV6Oe.BLkW4eIGqqklNi1.0VzLubXfFZzeWSjMvxV/a', NULL, '2021-08-21 09:15:15', '2021-08-21 09:16:31', 0, 0, '1629555315.jpg', '0', ''),
(26, 'steve', 'xagul', 'user@user.com', '', NULL, NULL, 0, '1', NULL, NULL, NULL, '$2y$10$d42Z8q7tv7paurmOa7c0a.095Z/ZyEEavZ.DqBoWRsjEMZ5UClQna', NULL, NULL, NULL, 0, 0, '2480186abid.jpeg', '0', ''),
(27, 'nomi', 'cemahuqi', 'admin@admin.com', '', NULL, NULL, 0, '1', NULL, NULL, NULL, '$2y$10$xREdm6whRLcDzRYG23Tq9.QZaEK7QzdGcJ4vEzRU.iIgRu4rzc99m', NULL, NULL, NULL, 0, 0, '1898533ali.jpeg', '0', ''),
(28, 'Macey', 'rajeqoniga', '1@1.com', '', NULL, NULL, 0, '0', NULL, NULL, NULL, '$2y$10$/OYbjuSi606Zz/IbZkVh.O/Q97e9hqouVS8KwW3GEg2G0gcozuocq', NULL, NULL, NULL, 0, 0, '9608734abid.jpeg', '0', ''),
(29, 'Noman Malik', 'steve', 'bapukiza@mailinator.com', '', NULL, NULL, NULL, '0', NULL, NULL, NULL, '$2y$10$5juF1ZVq34qIMsV.jEATgObTWKVqKjAn16MhYeUtmjRe5dHXeG6ru', NULL, NULL, NULL, 0, 0, '7825690Antigen.jpeg', NULL, NULL),
(30, 'ali asghar', 'patwari', 'ali@ali.com', '', '1982-09-02', 'In est at officia e', 22445, '6', 'premium', '11111-1111111-1', NULL, '$2y$10$FGk.LPRJ87bdsVwK8IZalOIkt9EOQe0H2hw8cD27ghBhPrG5IyvBa', NULL, NULL, NULL, 1, 0, '85834951629551085.jpg', '53822499943793hotgen.png', '79540369718917hotgen.png'),
(31, '', '', 'xequfokifo@mailinator.com', '', NULL, NULL, NULL, '6', NULL, NULL, NULL, '', NULL, '2021-09-03 20:48:12', NULL, 0, 1, '', NULL, NULL),
(36, 'abid noman', 'st', 'abidnoman888@gmail.com', '0348-1817229', '1991-02-08', 'Culpa nisi eos exce', 69932, '6', 'premium', '35202-7752254-7', '2021-08-21 09:16:06', '$2y$10$XrTkzIMKILzL5D3v462u0OdQ3CmTIk5K3NnmtHWXP344hxUBbvDiq', NULL, '2021-09-05 19:26:09', NULL, 2, 0, '9936291iran_nurse.jpg', '711400avatar5.png', '3859377avatar5.png'),
(37, 'Dylan s', 'jiteminuda', 'boqaqi@mailinator.com', '', NULL, NULL, NULL, '0', NULL, NULL, NULL, '$2y$10$KLqcWooTRG7rlZbXOJng4eVYV733QAEYx7TAZhRSLD5dK6sSbeYJC', NULL, '2021-09-09 19:33:15', NULL, 0, 0, '7236432avatar2.png', NULL, NULL);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_unique` (`role`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
