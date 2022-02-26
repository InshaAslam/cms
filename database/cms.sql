-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 05, 2021 at 06:16 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactnumbers`
--

DROP TABLE IF EXISTS `contactnumbers`;
CREATE TABLE IF NOT EXISTS `contactnumbers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `visibility` enum('public','private') COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('mobile','home','work','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contactnumbers_contact_id_foreign` (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactnumbers`
--

INSERT INTO `contactnumbers` (`id`, `contact_id`, `visibility`, `number`, `type`, `created_at`, `updated_at`) VALUES
(4, 4, 'private', '3572563563533', 'mobile', '2021-08-26 01:23:55', '2021-08-26 01:23:55'),
(7, 7, 'private', '652342342234', 'other', '2021-08-26 01:27:36', '2021-08-26 01:27:36'),
(8, 8, 'private', '36345346999', 'home', '2021-08-26 01:30:07', '2021-09-03 06:13:30'),
(13, 13, 'private', '9689665489', 'other', '2021-09-08 10:33:28', '2021-09-08 10:33:28'),
(20, 21, 'public', '01942455130', 'other', '2021-10-26 12:42:56', '2021-10-26 12:42:56'),
(22, 23, 'public', '911942401013', 'other', '2021-10-31 07:56:34', '2021-10-31 07:56:34'),
(23, 24, 'public', '01942459153', 'other', '2021-10-31 08:09:18', '2021-10-31 08:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` bigint(20) DEFAULT NULL,
  `instagram_id` bigint(20) DEFAULT NULL,
  `youtube_id` bigint(20) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `address`, `city`, `state`, `country`, `facebook_id`, `instagram_id`, `youtube_id`, `image`, `views`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hamid', 'beigh', '4-2-9099', 'Handwara', 'Sgr', 'J&K', 'India', 967979, 5868, 76587, '1629917338.jpg', 0, '2021-10-31 08:28:54', '2021-08-25 13:18:58', '2021-10-31 08:28:54'),
(2, 1, 'firstname', 'lstnme', '4-2-9091', 'address1', 'city', 'state', 'India', 33, 23838, 123, '1630844632.jpg', 0, '2021-10-31 08:27:52', '2021-08-25 13:23:04', '2021-10-31 08:27:52'),
(3, 2, 'Abcd', 'bbcc', '4-2-9091', 'address1', 'city', 'state', 'India', 23, 32, 987, '1629960728.jpg', 0, '2021-08-26 02:35:42', '2021-08-26 01:22:09', '2021-08-26 02:35:42'),
(4, 2, 'Jozia', 'Parveen', '21-4-2000', 'Magam', 'Sgr', 'J&K', 'India', 34578, 23838, 76745, '1629960835.jpg', 0, NULL, '2021-08-26 01:23:55', '2021-08-26 01:23:55'),
(5, 2, 'Farhat', 'Gani', '21-4-2000', 'Handwara', 'Sgr', 'J&K', 'India', 776, 23838, 76745, '1629960925.jpg', 0, '2021-08-26 02:36:00', '2021-08-26 01:25:25', '2021-08-26 02:36:00'),
(6, 2, 'Farhat', 'Gani', '21-4-2000', 'address1', 'city', 'state', 'India', 3656, 6575, 47567, '1629960984.jpg', 0, '2021-10-31 08:30:22', '2021-08-26 01:26:24', '2021-10-31 08:30:22'),
(7, 2, 'Aqeela', 'Mehraj', '21-4-2000', 'lalbazar', 'Sgr', 'J&K', 'India', 7655, 564534, 5456, '1629961056.jpg', 0, NULL, '2021-08-26 01:27:36', '2021-08-26 01:27:36'),
(8, 1, 'Nawaz', 'beigh', '4-2-9091', 'Handwara', 'Sgr', 'J&K', 'India', 364563, 3646, 546346, '1630844861.jpg', 0, NULL, '2021-08-26 01:30:07', '2021-09-05 06:57:41'),
(9, 1, 'Adil', 'Mughal', '11-3-2021', 'address1', 'city', 'state', 'India', 785645, 65675, 78545, '1629961277.jpg', 0, '2021-08-26 02:33:46', '2021-08-26 01:31:17', '2021-08-26 02:33:46'),
(10, 1, 'Ahmad', 'Aahaq', '4-2-9091', 'address1', 'city', 'state', 'India', 877, 8999, 8669, '1630347756.jpg', 0, '2021-10-31 08:28:43', '2021-08-30 12:52:37', '2021-10-31 08:28:43'),
(11, 1, 'Ahad', 'AAdd', '4-2-9091', 'Handwara', 'Sgr', 'J&K', 'India', 987, 5763, 8957, '1630348384.png', 0, '2021-10-31 08:28:01', '2021-08-30 13:03:04', '2021-10-31 08:28:01'),
(12, 1, 'aassdd', 'asda', '11-3-2021', 'werter', 'grgdfg', 'dsfd', 'sfdg', 876, 463, 6545, '1630837125.jpg', 0, '2021-10-31 08:32:28', '2021-09-05 04:48:45', '2021-10-31 08:32:28'),
(13, 2, 'Frnd', 'Saira', '4-2-9091', 'Handwara', 'Sgr', 'J&K', 'India', 776, 2345, 76745, '1631117007.jpg', 0, NULL, '2021-09-08 10:33:27', '2021-09-08 10:33:27'),
(14, 3, 'Hamid', 'beigh', '4-2-9091', 'Handwara', 'Sgr', 'J&K', 'India', 5664, 456, 456, '1632121314.jpg', 0, '2021-10-31 08:26:58', '2021-09-20 01:31:54', '2021-10-31 08:26:58'),
(15, 2, '34567', '45678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1632163457.jpg', 0, '2021-10-31 08:29:27', '2021-09-20 13:14:17', '2021-10-31 08:29:27'),
(16, 2, '3456', 'wertyu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1632163552.jpg', 0, '2021-10-31 08:29:36', '2021-09-20 13:15:52', '2021-10-31 08:29:36'),
(17, 2, '3456', 'wertyu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1632163553.jpg', 0, '2021-10-31 08:29:44', '2021-09-20 13:15:53', '2021-10-31 08:29:44'),
(18, 1, '1234', 'beigh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1632302656.jpg', 0, '2021-10-26 12:50:12', '2021-09-22 03:54:16', '2021-10-26 12:50:12'),
(19, 1, '1234', 'beigh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1632302681.jpg', 0, '2021-10-31 08:28:10', '2021-09-22 03:54:41', '2021-10-31 08:28:10'),
(20, 3, 'first name', 'last name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1633543201.jpg', 0, '2021-10-31 08:27:08', '2021-10-06 12:30:01', '2021-10-31 08:27:08'),
(21, 1, 'Khyber', 'Medical Institute', NULL, 'Khayam Chowk Nowpora', 'Srinagar', 'J&K', 'India', NULL, NULL, NULL, '1635271974.png', 0, NULL, '2021-10-26 12:42:54', '2021-10-26 12:42:54'),
(22, 1, 'Khyber', 'Medical Institute', NULL, 'Khayam Chowk Nowpora', 'Srinagar', 'J&K', 'India', NULL, NULL, NULL, '1635272018.png', 0, '2021-10-26 12:50:00', '2021-10-26 12:43:38', '2021-10-26 12:50:00'),
(23, 3, 'SKIMS', 'Medical Institute', NULL, 'SKIMS Main Rd Soura', 'Srinagar', 'Jammu and Kashmir', 'India', NULL, NULL, NULL, '1635686792.jpg', 0, NULL, '2021-10-31 07:56:33', '2021-10-31 07:56:33'),
(24, 3, 'CASET College of', 'Computer Science and Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1635687558.jpg', 0, NULL, '2021-10-31 08:09:18', '2021-10-31 08:09:18'),
(25, 2, 'first name', 'last name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1636130946.jpg', 0, NULL, '2021-11-05 11:19:06', '2021-11-05 11:19:06'),
(26, 2, 'first name', 'last name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1636131064.jpg', 0, NULL, '2021-11-05 11:21:04', '2021-11-05 11:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 2),
(46, '2021_06_23_093747_create_contacts_table', 3),
(47, '2021_06_29_054549_create_contactnumbers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mehak@gmail.com', '$2y$10$SnW45X9WlTYquIXTMC1PT.mbgUT3ACpxz0wftF5srCIxCAB539xvO', '2021-09-07 05:04:36'),
('hamid@gmail.com', '$2y$10$z36GV40QfcSm2g3D2kehh.T.IUThOgqbjh8C7jIB2tubp3mVM2X8S', '2021-09-11 09:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `access_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamid beigh', 'hamid@gmail.com', NULL, '$2y$10$UEhKshnermgH5I/ujmKT..hOUroY9St.VdWA8GaMHWPgYbChID2AW', 'admin', NULL, '2021-07-13 01:01:08', '2021-07-13 01:01:08'),
(2, 'Insha', 'insha@gmail.com', NULL, '$2y$10$4JozOR4trBF44rHkXpARZu./XAcdUhb1lAWoAaCUdRNlKew9RdFR.', 'admin', NULL, '2021-07-13 01:40:40', '2021-07-13 01:40:40'),
(3, 'Mehak', 'mehak@gmail.com', NULL, '$2y$10$MEQU9ETh65PMTNORZW.jVeLY4qnJHmdr.hqkjXW4/9FH.xBhrv51G', 'admin', 'RGfGbLoiW3tkonb2SESt86IKIglTZBij11Ebz79c01pgjmjbzi6DGi8YTb7Q', '2021-07-23 06:15:51', '2021-07-23 06:15:51'),
(5, 'Aqeela', 'aqeela@gmail.com', NULL, '$2y$10$0nzIFfZkfHTQZFBWf9BrHuq.ouEppvgHM67xgB.wHGuef5AvYYujK', 'admin', NULL, '2021-07-26 06:52:57', '2021-07-26 06:52:57'),
(6, 'Abab', 'ab@gmail.com', NULL, '$2y$10$TK3hel9oklzXZR7NR4z/3eSuxVHqAgZittZa3ozwLTcKsp6sVCe0W', 'admin', NULL, '2021-09-09 10:28:28', '2021-09-09 10:28:28'),
(7, '1234', '123@gmail.com', NULL, '$2y$10$qpiCIG8qir46wAqWRMnz9Op2VvKspsDW6Nw9YUAY2MnmnuWGGu5a6', 'admin', NULL, '2021-10-05 09:34:11', '2021-10-05 09:34:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
