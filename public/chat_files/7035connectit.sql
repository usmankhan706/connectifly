-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 11:32 AM
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
-- Database: `connectit`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `porfolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `service_id`, `email`, `phone`, `description`, `size`, `porfolio`, `website`, `country`, `city`, `logo`, `cover`, `password`, `created_at`, `updated_at`) VALUES
(6, 'Dane Suarez', 8, 'zexywehuw@mailinator.com', '+1 (254) 922-3418', 'Dolor magni recusand', 7, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$aEnAV9M53Ean70hmKPenReuU1FfyvVvBxeZsbKdpeYpUS2bGFgZ2y', '2021-11-05 10:02:53', '2021-11-05 10:02:53'),
(7, 'Chase Kramer', 6, 'syqixirys@mailinator.com', '+1 (786) 942-7975', 'Dolorem nihil proide', 78, NULL, 'https://www.nexa.us', 'Molestiae accusamus', 'Porro et odit nemo l', '1636189841.png', NULL, '$2y$10$olQ0.UNHo/gabuW9yW874u9AHjpizEgb6iBQml6mS7VVL87uEr30a', '2021-11-06 03:40:03', '2021-11-06 04:10:41'),
(8, 'google', 8, 'noqi@mailinator.com', '+1 (426) 568-5655', 'Sunt earum vero eaqu', 37, NULL, 'https://www.gekuk.info', 'Quod eaque veritatis', 'Sed commodi vel est', '1636278243.png', NULL, '$2y$10$1zzkrrlPCP7IiwLZYJioSuIDsjiBkfDxC/wVrZKJFkW3v9GkVrlhm', '2021-11-07 03:26:15', '2021-11-07 04:57:24'),
(9, 'Channing Frazier', 9, 'foqelyto@mailinator.com', '+1 (382) 783-5825', 'Voluptate est iure m', 84, NULL, 'https://www.hygyxazulaz.co.uk', 'Maxime reprehenderit', 'Hic ducimus qui deb', '1636297273.png', NULL, '$2y$10$unaaiA5jAx5BZKdPg7ai8.GXbfAjvxUiQO2oc.2CVBM4gVjtEgbLC', '2021-11-07 10:00:09', '2021-11-07 10:01:13'),
(10, 'googler', 3, 'abidnoman888@gmail.com', '+18369084166', 'Odio est rerum nisi', 65, NULL, 'https://www.nydedo.cm', 'peru', 'st. mont', '1636312697.png', NULL, '$2y$10$lFrwPq1G5fH7dDvgc1Qi9.LY5ob0XZpjkz1KehtN4pAizKXhwq8ZW', '2021-11-07 14:17:27', '2021-11-07 14:18:17'),
(11, 'Rylee Blanchard', 9, 'bigahe@mailinator.com', '+1 (204) 795-2996', 'Quo in fuga Et reru', 81, NULL, NULL, NULL, NULL, '1636363425.png', '1636363088.png', '$2y$10$CFLjAovE4TEnEwfqG5VU3OgHBepTZ4Gr7buqTLdXRMd8DJlTnLmP6', '2021-11-08 04:11:46', '2021-11-08 04:23:45'),
(12, 'Ursa Michael', 3, 'picak@mailinator.com', '+1 (842) 342-2557', 'Porro sint ipsum f', 80, NULL, 'https://www.xosovodoka.cc', 'Beatae esse quo ab', 'Ipsum tempora volupt', NULL, NULL, '$2y$10$G.m69Gt0RSRnB2xlndEiReg72.mULT.sb/vdCksl5.uPjUWfQPJNG', '2021-11-10 03:21:26', '2021-11-10 03:21:40'),
(13, 'Anthony Guerra', 2, 'gywacuda@mailinator.com', '+1 (639) 702-6872', 'Rerum veritatis offi', 86, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$e93d4i9.htSRfTIQF3YfduaYO9bEmvb0e/.WL06Zv/H3PVDaTDI/C', '2021-11-10 03:21:58', '2021-11-10 03:21:58'),
(14, 'Brynn Talley', 7, 'a@a.com', '+1 (724) 113-1667', 'Eu voluptatem Unde', 3, NULL, NULL, NULL, NULL, '1636532708.png', NULL, '$2y$10$lLjOWBuAbrS1xFzPQQUTpuO6lfTBAL2UaGYIUYovcpIHqGWa.a8.q', '2021-11-10 03:22:41', '2021-11-10 03:25:08'),
(15, 'Kyla Kent', 1, 'syjaceke@mailinator.com', '+1 (331) 858-9506', 'Dignissimos sed veli', 1, NULL, 'https://www.jokypiwubipetoj.biz', 'France', 'Paris', NULL, NULL, '$2y$10$1LSpUPRUaYEI3xnyEIje7.8wm6bM9TQaZgHyKPgg4VM2T3.R8ceGy', '2021-11-10 07:04:24', '2021-11-10 07:38:17'),
(16, 'Urielle Baldwin', 5, 'qoqy@mailinator.com', '+1 (205) 438-6727', 'Aute vitae deserunt', 29, NULL, 'https://www.kywofogy.org.uk', 'russia', 'moscow', NULL, NULL, '$2y$10$LvqCirre8tiHp9VTw1YTxOR0O3eZNDX6tubXs8aNuPNCHAkACARVW', '2021-11-11 03:27:28', '2021-11-11 03:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_id`, `company_id`, `sender`, `message`, `file`, `job_id`, `status`, `read`, `created_at`, `updated_at`) VALUES
(52, 40, 10, 'user', 'Hi what is the price\\', NULL, 15, NULL, NULL, '2021-12-08 09:43:20', '2021-12-08 09:43:20'),
(53, 40, 10, 'company', 'good one', NULL, NULL, NULL, NULL, '2021-12-08 09:43:43', '2021-12-08 09:43:43'),
(54, 40, 10, 'user', 'okay', NULL, NULL, NULL, NULL, '2021-12-08 09:44:14', '2021-12-08 09:44:14'),
(55, 40, 10, 'user', 'okay', NULL, NULL, NULL, NULL, '2021-12-08 09:44:16', '2021-12-08 09:44:16'),
(56, 40, 10, 'company', 'good', NULL, NULL, NULL, NULL, '2021-12-08 09:44:22', '2021-12-08 09:44:22'),
(57, 40, 10, 'company', 'goodok', NULL, NULL, NULL, NULL, '2021-12-08 09:44:24', '2021-12-08 09:44:24'),
(58, 40, 10, 'company', NULL, NULL, NULL, NULL, NULL, '2021-12-08 09:44:26', '2021-12-08 09:44:26'),
(59, 40, 10, 'company', 'sfd', NULL, NULL, NULL, NULL, '2021-12-08 09:44:28', '2021-12-08 09:44:28'),
(60, 40, 10, 'company', 'dcdscdc', NULL, NULL, NULL, NULL, '2021-12-08 09:44:36', '2021-12-08 09:44:36'),
(61, 40, 10, 'user', 'ok]', NULL, NULL, NULL, NULL, '2021-12-08 09:45:20', '2021-12-08 09:45:20'),
(62, 40, 10, 'user', 'hi', NULL, NULL, NULL, NULL, '2021-12-08 09:45:32', '2021-12-08 09:45:32'),
(63, 40, 10, 'user', 'jo', NULL, NULL, NULL, NULL, '2021-12-08 09:45:45', '2021-12-08 09:45:45'),
(64, 40, 10, 'user', 'hi no i dont need', NULL, NULL, NULL, NULL, '2021-12-08 09:46:14', '2021-12-08 09:46:14'),
(65, 40, 10, 'user', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:46:37', '2021-12-08 09:46:37'),
(66, 40, 10, 'user', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:46:47', '2021-12-08 09:46:47'),
(67, 40, 10, 'user', 'vc', NULL, NULL, NULL, NULL, '2021-12-08 09:46:57', '2021-12-08 09:46:57'),
(68, 40, 10, 'user', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:47:18', '2021-12-08 09:47:18'),
(69, 40, 10, 'user', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:47:40', '2021-12-08 09:47:40'),
(70, 40, 10, 'user', 'okcxvxcv', NULL, NULL, NULL, NULL, '2021-12-08 09:48:16', '2021-12-08 09:48:16'),
(71, 40, 10, 'user', 'dfsdfsd', NULL, NULL, NULL, NULL, '2021-12-08 09:48:26', '2021-12-08 09:48:26'),
(72, 40, 10, 'user', 'fsdfosdjk', NULL, NULL, NULL, NULL, '2021-12-08 09:48:46', '2021-12-08 09:48:46'),
(73, 40, 10, 'user', 'fdsfsdf', NULL, NULL, NULL, NULL, '2021-12-08 09:49:03', '2021-12-08 09:49:03'),
(74, 40, 10, 'user', 'fdsfsdfvcv', NULL, NULL, NULL, NULL, '2021-12-08 09:49:06', '2021-12-08 09:49:06'),
(75, 40, 10, 'user', 'fdsfsdfvcvcv', NULL, NULL, NULL, NULL, '2021-12-08 09:49:07', '2021-12-08 09:49:07'),
(76, 40, 10, 'user', 'fdsfsdfvcvcvxc', NULL, NULL, NULL, NULL, '2021-12-08 09:49:07', '2021-12-08 09:49:07'),
(77, 40, 10, 'user', 'fdsfsdfvcvcvxcvxc', NULL, NULL, NULL, NULL, '2021-12-08 09:49:08', '2021-12-08 09:49:08'),
(78, 40, 10, 'user', 'fdsfsdfvcvcvxcvxcv', NULL, NULL, NULL, NULL, '2021-12-08 09:49:08', '2021-12-08 09:49:08'),
(79, 40, 10, 'user', 'fdsfsdfvcvcvxcvxcvxcv', NULL, NULL, NULL, NULL, '2021-12-08 09:49:09', '2021-12-08 09:49:09'),
(80, 40, 10, 'user', 'asd', NULL, NULL, NULL, NULL, '2021-12-08 09:49:25', '2021-12-08 09:49:25'),
(81, 40, 10, 'user', 'asdasd', NULL, NULL, NULL, NULL, '2021-12-08 09:49:27', '2021-12-08 09:49:27'),
(82, 40, 10, 'user', 'asdasddasd', NULL, NULL, NULL, NULL, '2021-12-08 09:49:28', '2021-12-08 09:49:28'),
(83, 40, 10, 'user', 'dsa', NULL, NULL, NULL, NULL, '2021-12-08 09:49:33', '2021-12-08 09:49:33'),
(84, 40, 10, 'user', 'dsa', NULL, NULL, NULL, NULL, '2021-12-08 09:49:36', '2021-12-08 09:49:36'),
(85, 40, 10, 'company', 'dvddc', NULL, NULL, NULL, NULL, '2021-12-08 09:55:13', '2021-12-08 09:55:13'),
(86, 40, 10, 'company', 'cdcsdcs', NULL, NULL, NULL, NULL, '2021-12-08 09:56:39', '2021-12-08 09:56:39'),
(87, 40, 10, 'company', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:57:20', '2021-12-08 09:57:20'),
(88, 40, 10, 'company', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 09:59:26', '2021-12-08 09:59:26'),
(89, 40, 10, 'company', 'ok', NULL, NULL, NULL, NULL, '2021-12-08 10:00:05', '2021-12-08 10:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined` date NOT NULL,
  `left` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `job_title`, `company`, `joined`, `left`, `created_at`, `updated_at`) VALUES
(1, 16, 'Eius non dolore ea e', 'Mueller and Alvarado LLC', '2015-08-15', '2021-11-08', '2021-11-08 03:29:55', '2021-11-08 03:29:55'),
(2, 17, 'Laravel developer', 'google', '2019-02-10', '2021-11-05', '2021-11-08 04:49:36', '2021-11-08 04:49:36'),
(3, 18, 'Consequatur quae vel', 'Summers and Jacobson Trading', '2017-06-10', NULL, '2021-11-09 04:45:15', '2021-11-09 04:45:15'),
(4, 24, 'manager', 'google', '2021-11-09', NULL, '2021-11-10 09:21:14', '2021-11-10 09:21:14');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 8, 'Est praesentium dolo', 'Ea sunt veritatis do', '2021-11-07 04:04:49', '2021-11-07 04:04:49'),
(3, 8, 'laravel', 'Mollit nesciunt und', '2021-11-07 04:34:30', '2021-11-07 04:34:30'),
(4, 8, 'laravel', 'Aspernatur eaque duc', '2021-11-07 05:18:34', '2021-11-07 05:18:34'),
(5, 8, 'Obcaecati dolore imp', 'Aspernatur eaque duc', '2021-11-07 05:18:53', '2021-11-07 05:18:53'),
(6, 9, 'laravel', 'Ut lorem modi sint', '2021-11-07 10:01:02', '2021-11-07 10:01:02'),
(7, 11, 'seo', 'ddfavsdvdvdsf', '2021-11-08 04:12:07', '2021-11-08 04:12:07'),
(8, 11, 'Quis et adipisicing', 'Harum veritatis aut', '2021-11-08 04:32:02', '2021-11-08 04:32:02'),
(9, 14, 'Seo', 'Ut ratione aute quae', '2021-11-10 03:24:30', '2021-11-10 03:24:30'),
(10, 15, 'Perferendis facilis', 'In eu eaque optio e', '2021-11-10 08:23:41', '2021-11-10 08:23:41'),
(11, 16, 'Culpa pariatur Dis', 'Proident aliquid es', '2021-11-11 03:31:31', '2021-11-11 03:31:31'),
(12, 16, 'Culpa pariatur Dis', 'Proident aliquid es', '2021-11-11 03:32:44', '2021-11-11 03:32:44'),
(13, 10, 'laravel', 'dvsdvsDVSV', '2021-11-12 06:49:22', '2021-11-12 06:49:22'),
(14, 10, 'seo', 'sdvsdvsdv', '2021-11-12 06:59:19', '2021-11-12 06:59:19'),
(15, 10, 'c++', 'dvdvavvas', '2021-11-12 08:04:00', '2021-11-12 08:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_requests`
--

CREATE TABLE `job_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_requests`
--

INSERT INTO `job_requests` (`id`, `job_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 5, 28, 'adbsbfsd vdvsd', '2021-11-12 06:48:13', '2021-11-12 06:48:13'),
(2, 13, 28, 'SDVSDVSDVDVS', '2021-11-12 06:49:42', '2021-11-12 06:49:42'),
(3, 14, 28, 'sdvsdvsv', '2021-11-12 06:59:44', '2021-11-12 06:59:44'),
(4, 14, 29, 'sdbsbsdbsd', '2021-11-12 07:57:41', '2021-11-12 07:57:41'),
(5, 13, 29, 'sdvsdvsdvs', '2021-11-12 08:03:31', '2021-11-12 08:03:31'),
(6, 15, 29, 'sdvdvsd', '2021-11-12 08:04:29', '2021-11-12 08:04:29'),
(7, 12, 29, 'dvsdvs', '2021-11-12 08:12:49', '2021-11-12 08:12:49'),
(9, 11, 30, 'ewgvsdvsdvs', '2021-11-12 08:27:23', '2021-11-12 08:27:23');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_11_02_102644_create_experiences_table', 1),
(14, '2021_11_02_131646_create_skills_table', 1),
(15, '2021_11_05_121803_create_services_table', 1),
(16, '2021_11_05_125842_create_companies_table', 1),
(17, '2021_11_07_082843_create_jobs_table', 2),
(18, '2021_11_12_111157_create_requests_table', 3),
(19, '2021_11_12_113329_create_job_requests_table', 4),
(22, '2021_11_12_115052_create_conversations_table', 5);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `created_at`, `updated_at`) VALUES
(1, 'Dena Hartmann', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(2, 'Ms. Kamille Kling III', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(3, 'Hollie Howe', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(4, 'Maynard Kunze', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(5, 'Wilson Quigley III', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(6, 'Abe Waters', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(7, 'Dr. Luz Howe', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(8, 'Sherman Howe', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(9, 'Mohammad Connelly', '2021-11-05 08:02:12', '2021-11-05 08:02:12'),
(10, 'Thurman Stark', '2021-11-05 08:02:12', '2021-11-05 08:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratings` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill`, `ratings`, `created_at`, `updated_at`) VALUES
(2, 17, 'laravel', 5, '2021-11-08 04:48:55', '2021-11-08 04:48:55'),
(3, 18, 'laravel', 4, '2021-11-09 04:44:54', '2021-11-09 04:44:54'),
(6, 24, 'java', 4, '2021-11-10 09:21:30', '2021-11-10 09:21:30'),
(7, 24, 'Core Java', 4, '2021-11-10 09:48:50', '2021-11-10 09:48:50'),
(8, 24, 'laravel', 1, '2021-11-10 09:49:25', '2021-11-10 09:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `email_verified_at`, `password`, `profile`, `cover`, `about`, `title`, `country`, `city`, `company`, `website`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Hamilton', 'Contreras', 'cykuviv@mailinator.com', '+1 (551) 887-1862', NULL, '$2y$10$Xge80ZdMJpgvAYY7dPgnROwV7wJJ1qqByBVKpgbYscrPJVdfgkvMq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 09:21:06', '2021-11-05 09:21:06'),
(9, 'Signe', 'Hobbs', 'rigabe@mailinator.com', '+1 (104) 475-9285', NULL, '$2y$10$aduO.eU/3pTHG/60KIPPtObDj.cfAiuvzQSnkbdz8kl99v8.MGfya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 09:28:47', '2021-11-05 09:28:47'),
(10, 'Benjamin', 'Wooten', 'daxyren@mailinator.com', '+1 (183) 419-8966', NULL, '$2y$10$UNIMi18dYDIAKUoGDTwneOXpme4TmuyE9tLM5f0wU1fRvwHo0W6ku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 09:53:16', '2021-11-05 09:53:16'),
(11, 'Dolan', 'Merrill', 'zarap@mailinator.com', '+1 (385) 597-6849', NULL, '$2y$10$Uk2vSofya3RKTrZZUCw5/uxvTMPLg//Al8zyWatIK1cAKulGZ4G86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-07 03:23:36', '2021-11-07 03:23:36'),
(12, 'Eleanor', 'Buckley', 'cizemut@mailinator.com', '+1 (403) 425-2678', NULL, '$2y$10$yDceO1i.Nou3KCiATyazUuGNiUyvmIbu9vLvQH04x8WeMf.aKHMrq', NULL, NULL, NULL, 'Ea qui illo amet ev', 'Culpa beatae dolor e', 'Molestiae nihil iure', 'Shannon and Harper Associates', 'https://www.xadinerezakuxy.info', NULL, '2021-11-07 03:25:17', '2021-11-07 03:25:22'),
(13, 'Deacon', 'Michael', 'sodulox@mailinator.com', '+1 (201) 367-4229', NULL, '$2y$10$O8J4KumsrgxwRnzBE29vj.FebO/0AN41wmfIb8z31zmz7BfUasdIq', NULL, NULL, NULL, 'Amet aut quos quibu', 'Veniam nisi eiusmod', 'Anim hic cupidatat f', 'Blanchard Jacobson Co', 'https://www.sucufotycumil.cm', NULL, '2021-11-07 09:44:41', '2021-11-07 09:44:47'),
(14, 'Regan', 'Levine', 'wiguzeguku@mailinator.com', '+1 (899) 892-5749', NULL, '$2y$10$i.F1uNvNbObeWt7DXEz38OxSJCUR9QJYpN6g3.0uNwlZgH.uPtp4u', '1636311828.png', NULL, 'fbfdbfdbdfbdfb', 'Laravel', 'pakistan', 'lahore', 'youtube', 'https://www.subulykyduron.org', NULL, '2021-11-07 10:47:34', '2021-11-07 15:15:44'),
(15, 'Stacey', 'Cline', 'guqyram@mailinator.com', '+1 (653) 872-1072', NULL, '$2y$10$WF8lZu/MHbgSRCikjIO6Lu6.7r25MlOcyZvG8JsMdYTKP2D8YiQvW', NULL, NULL, NULL, 'Mollit consequatur', 'Proident impedit q', 'Omnis duis deserunt', 'Jacobson House Inc', 'https://www.gevetexa.co.uk', NULL, '2021-11-07 15:18:25', '2021-11-07 15:18:29'),
(16, 'Cyrus', 'Haley', 'qizix@mailinator.com', '+1 (978) 289-6526', NULL, '$2y$10$y1k1P8uQRQhMrazfxXdMo.dgU7jjOnJTBkM6js7UYnweL3tYCkwyW', NULL, NULL, 'sdcsdcdsvsdvsdvsdvsdvsdvsvdvvsv', 'SEO developer', 'Brazil', 'Rio', 'google', 'https://www.behytivyloh.cm', NULL, '2021-11-08 03:18:04', '2021-11-08 03:21:49'),
(17, 'Justin', 'Miles', 'dacora@mailinator.com', '+1 (961) 899-4396', NULL, '$2y$10$z.bVTNoTe4nR0c9y2YViz.BOnR68oF9gkqZPgoQBaBWDRkPsQiQFK', NULL, NULL, 'dfbdfbdfbfgbdfbsfbf', 'Laravel Developer', 'Guyana', 'St Lucia', 'Chase Kramer', NULL, NULL, '2021-11-08 04:47:51', '2021-11-08 04:48:41'),
(18, 'Marah', 'Alexander', 'diqyjeviwe@mailinator.com', '+1 (894) 419-3852', NULL, '$2y$10$dwIJ29L3Cz08pCr5NemH5ekxSjTMOwRNjAwzdnc9fPfwb4mou9rCO', '1636451068.png', '1636451084.png', NULL, 'Est dolore sit est', 'Omnis blanditiis dol', 'Itaque deserunt dist', 'Ramirez and Dunlap Plc', 'https://www.vexil.me.uk', NULL, '2021-11-09 04:43:40', '2021-11-09 04:44:44'),
(19, 'Caldwell', 'Todd', 'sujeb@mailinator.com', '+1 (137) 193-5762', NULL, '$2y$10$CA0uV6uUFSwlnpt9rOttpeTbSl1rzBguvkWiYFyn42m09fs.JHlru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-10 06:56:12', '2021-11-10 06:56:12'),
(20, 'Gisela', 'Swanson', 'cudumuguje@mailinator.com', '+1 (573) 823-1119', NULL, '$2y$10$Gsw6Ylo6EzoOFPM1ONr5beIP6hLEwf5LdJjDE9Il7okY8q0daGsFW', NULL, NULL, NULL, 'Et in possimus itaq', 'Rerum quam qui ipsa', 'Atque quibusdam erro', 'Yang and Nixon Inc', 'https://www.kodezyhuc.org.au', NULL, '2021-11-10 07:03:02', '2021-11-10 07:03:07'),
(21, 'Blaine', 'Hopkins', 'dumyvyme@mailinator.com', '+1 (411) 767-2102', NULL, '$2y$10$Bzh7HJ5jYVmnNnwl3PAEbel52sU9ZJRksEZOD7OKF3nMUbHaz2DpO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-10 08:42:53', '2021-11-10 08:42:53'),
(22, 'Danielle', 'Horne', 'gizyjawa@mailinator.com', '+1 (378) 774-3427', NULL, '$2y$10$6QMjAu4EcMb9QXk4IsM/CenYQv96MT0BExGI8TUbPw24Kx9hMhs1m', NULL, NULL, 'Ab blanditiis est en', 'Enim modi commodo di', 'pakistan', 'Lahore', 'Meadows and Downs Traders', NULL, NULL, '2021-11-10 08:54:46', '2021-11-10 08:55:26'),
(23, 'Sasha', 'Wall', 'xetizejazy@mailinator.com', '+1 (699) 312-7913', NULL, '$2y$10$A2p3.0MQmMDg5g/1s.FRZe5l4uZr4LllJYO3TjDgdwmSptJhBx4u2', NULL, NULL, 'Dolores cupiditate i', 'Quis minima nostrum', 'Placeat ut accusant', 'Dolore sapiente adip', 'Nunez Owens Associates', NULL, NULL, '2021-11-10 09:00:57', '2021-11-10 09:13:06'),
(24, 'Astra', 'Blair', 'cycoz@mailinator.com', '+1 (308) 611-3755', NULL, '$2y$10$es8zC84KGicKKi9hex4lRu9YISMGxbgHssYWG85TvZp1KpopFMD1m', NULL, NULL, 'dcv sdvsdcscsdcdscsdc', 'Manager', 'italy', 'venus', 'Channing Frazier', NULL, NULL, '2021-11-10 09:14:43', '2021-11-10 09:58:07'),
(26, 'Scarlett', 'Caldwell', 'kefi@mailinator.com', '+1 (519) 905-6798', NULL, '$2y$10$colJiCriPNyk1rxGAEBlBeGwG2QLGhnY7Cijl2txaYWHciTAC0LHW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 03:17:15', '2021-11-11 03:17:15'),
(27, 'Cairo', 'Hussain', 'qyrokuk@mailinator.com', '+1 (301) 906-5161', NULL, '$2y$10$y8W2gRUjYTb0gEuBs8PO0OkMSS1z/PKelC1xtmVzspOJQUmsa3dzO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 03:33:30', '2021-11-11 04:51:29'),
(28, 'Castor', 'Warren', 'jorubybomo@mailinator.com', '+1 (905) 235-1452', NULL, '$2y$10$jD8X5q37tnGb4x7sJ6W3YOXa8N1oyUHzrXJqG2fx0Md8n8VUhx4Xu', '1636727203.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 04:23:09', '2021-11-12 09:26:43'),
(29, 'Phyllis', 'Acevedo', 'rosa@mailinator.com', '+1 (665) 855-2751', NULL, '$2y$10$Ppy9O4vipjMKZR4UZosgpuyvZN8Ao5itlKeIiRaQlbueZhqL4PUN6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 07:57:26', '2021-11-12 07:57:26'),
(30, 'steve', 'smith', 'as@as.com', '075343453453', NULL, '$2y$10$LK9l1dtkpCNXLlbhIkcHEO3W.c7mplfYetz9lRPpo3CWadlxpXZRy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 08:26:01', '2021-11-12 08:26:01'),
(31, 'Phyllis', 'Noel', 'supatybepo@mailinator.com', '+1 (305) 589-6922', NULL, '$2y$10$CxNOjRs90miuekNY4JWrDOm1xtzaXoauktP1t1pQwX3JjWS0tJZu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-12 15:06:10', '2021-11-12 15:06:10'),
(32, 'Clare', 'Schneider', 'xyda@mailinator.com', '+1 (797) 686-7413', NULL, '$2y$10$y57sFs8DyNjwg7XVepGqb.LNsd69MOh5zz1oHDV1qEKpefAMm0Xdu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-13 09:27:55', '2021-11-13 09:27:55'),
(33, 'Brennan', 'Boyer', 'qysymasewe@mailinator.com', '+1 (795) 509-4027', NULL, '$2y$10$Y.mSTPdoMNAARK9SVtOzfeBxQ7N4eoEt/fcuUpdbNtxv1yQNgWIjm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-13 13:44:03', '2021-11-13 13:44:03'),
(34, 'Brock', 'Gilbert', 'lajodoryn@mailinator.com', '+1 (393) 445-1588', NULL, '$2y$10$17VkZuvf4vs4TgWyU2qQWu2C1c0LpKxzWkGIoeAhb2wBvuuu7RWk.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-14 11:28:41', '2021-11-14 11:28:41'),
(37, 'Laurel', 'Henry', 'abidnoman888@gmail.com', '+1 (788) 193-5802', NULL, '$2y$10$zXbAHZEkgYfi5Htsh5ymz.YGZ2/iZWU./x.PPuwzw9UBtU5D85F/O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-14 11:57:17', '2021-11-14 11:57:17'),
(38, 'Sanders', 'Ayers', 'a@a.com', '17029882439', NULL, '$2y$10$D526UXeFCuOuAxdrGf9wbOvpvIjXnNHE04.OV.4iRvxL9/4e9nwSC', '1637831172.png', NULL, NULL, 'manager', NULL, NULL, 'google', NULL, NULL, '2021-11-24 09:16:03', '2021-12-06 09:13:05'),
(39, 'Damian', 'Rocha', 'borun@mailinator.com', '+1 (574) 808-9673', NULL, '$2y$10$nk75NyaFTiPJ8oW1BJb4T.NONUkBxt1Jh93JNFyUjZzsnj5RSQL.e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 09:30:31', '2021-11-24 09:30:31'),
(40, 'Francesca', 'Carney', 'favahu@mailinator.com', '+1 (638) 479-6533', NULL, '$2y$10$M282BuVdGIdc00uhIC91Xu3epp6NeSTBLlzdhPk2LWz7PNddGQyue', '1638974414.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-08 09:39:53', '2021-12-08 09:40:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`),
  ADD UNIQUE KEY `companies_website_unique` (`website`),
  ADD KEY `companies_service_id_foreign` (`service_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_user_id_foreign` (`user_id`),
  ADD KEY `conversations_company_id_foreign` (`company_id`),
  ADD KEY `conversations_job_id_foreign` (`job_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

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
  ADD KEY `jobs_company_id_foreign` (`company_id`);

--
-- Indexes for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_requests_job_id_foreign` (`job_id`),
  ADD KEY `job_requests_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_service_unique` (`service`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_requests`
--
ALTER TABLE `job_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conversations_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_requests`
--
ALTER TABLE `job_requests`
  ADD CONSTRAINT `job_requests_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
