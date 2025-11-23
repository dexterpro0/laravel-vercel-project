-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senene`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salary_date` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `balance`, `name`, `photo`, `email`, `email_verified_at`, `password`, `salary_date`, `type`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0.00, 'Md Admin', '/public/admin/assets/images/profile/1706650015HOx.png', 'admin@gmail.com', '2023-11-29 18:37:08', '$2y$10$rDYxzXhMvZmuXPmdcnIrsuKOnhIH90i/1yYaMnGvydOACQEbEbIja', '2024-02-15', 'admin', '01600000000', 'sd', '58goSADNpnlrWtEOFFiTIRQqiXBZbRK7xz972FoGviFJMNOGzhCNdDQlBZOr', '2023-11-28 11:11:57', '2024-02-15 03:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ledgers`
--

CREATE TABLE `admin_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bonus_name` varchar(255) NOT NULL,
  `counter` int(11) DEFAULT 0 COMMENT 'user get service count',
  `set_service_counter` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `winner` int(11) DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `bonus_name`, `counter`, `set_service_counter`, `code`, `winner`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIP Bonus', 7, 100, '123456', 1, 5, 'inactive', '2023-11-15 12:39:25', '2024-02-13 20:57:41'),
(9, 'ClrApp', 100, 100, 'gf67xzaq', 1, 3, 'active', '2024-02-13 20:57:37', '2024-02-14 13:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `bonus_ledgers`
--

CREATE TABLE `bonus_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bonus_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `bonus_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `token` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `trx` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL COMMENT 'User Deposit Amount',
  `date` varchar(255) NOT NULL,
  `status` enum('pending','rejected','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `method_name`, `trx`, `address`, `photo`, `amount`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'USDT', NULL, NULL, '/public/upload/payment/1708806368ikT.jpg', '800', '25-02-2024 02:26:08', 'approved', '2024-02-25 02:26:08', '2024-02-25 02:26:14'),
(2, 1, 'USDT', NULL, NULL, NULL, '800', '02-04-2024 00:20:08', 'pending', '2024-04-01 23:20:08', '2024-04-01 23:20:08'),
(3, 1, 'USDT', NULL, NULL, NULL, '800', '04-04-2024 04:29:56', 'pending', '2024-04-04 03:29:56', '2024-04-04 03:29:56'),
(4, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', NULL, NULL, NULL, '800', '04-05-2024 22:01:10', 'pending', '2024-05-04 21:01:10', '2024-05-04 21:01:10'),
(5, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', 'asasasasasa', NULL, NULL, '10.00', '04-05-2024 22:07:18', 'pending', '2024-05-04 21:07:18', '2024-05-04 21:07:18'),
(6, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', 'sdsdsdsd', NULL, NULL, '10.00', '04-05-2024 22:08:12', 'pending', '2024-05-04 21:08:12', '2024-05-04 21:08:12'),
(7, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', 'sdsdsdsdsd', 'wR3n0eiBt6K0.762zDlPObfawXru/QRK/HtA.', NULL, '10.00', '04-05-2024 22:09:07', 'pending', '2024-05-04 21:09:07', '2024-05-04 21:09:07'),
(8, 4, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '0171111111111', '86687635', NULL, '800', '04-05-2024 23:13:55', 'pending', '2024-05-04 22:13:55', '2024-05-04 22:13:55'),
(9, 4, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '01979709415', '86687635', NULL, '10000', '04-05-2024 23:14:11', 'pending', '2024-05-04 22:14:11', '2024-05-04 22:14:11'),
(10, 4, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '0171111111111', '86687635', NULL, '20000', '04-05-2024 23:23:41', 'pending', '2024-05-04 22:23:41', '2024-05-04 22:23:41'),
(11, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', NULL, NULL, NULL, '800', '04-05-2024 23:52:07', 'pending', '2024-05-04 22:52:07', '2024-05-04 22:52:07'),
(12, 3, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', 'dfdf', 'BOOQ3AXgvZylEAK9WPfp2IKZ53OkHa/G5K', NULL, '10.00', '04-05-2024 23:55:10', 'pending', '2024-05-04 22:55:10', '2024-05-04 22:55:10'),
(13, 6, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '12345678', '12345678', NULL, '800', '05-05-2024 21:46:30', 'pending', '2024-05-05 20:46:30', '2024-05-05 20:46:30'),
(14, 6, 'UDDTD::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '12345678', '12345678', NULL, '5000', '05-05-2024 21:46:45', 'pending', '2024-05-05 20:46:45', '2024-05-05 20:46:45'),
(15, 6, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '0171111111111', '86687635', NULL, '800', '05-05-2024 22:07:49', 'approved', '2024-05-05 20:07:49', '2024-05-05 20:08:36'),
(16, 7, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '54444', '12333', NULL, '2200', '07-05-2024 13:46:59', 'approved', '2024-05-07 11:46:59', '2024-05-07 11:47:13'),
(17, 6, 'USDT::3PlfJM2enIx.Zw8Z8ZXs1RJIozjDH7R3C3Er3Fe', '54433', '86687635', NULL, '20000', '07-05-2024 14:32:22', 'pending', '2024-05-07 12:32:22', '2024-05-07 12:32:22');

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
-- Table structure for table `lucky_ledgers`
--

CREATE TABLE `lucky_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `draw_id` bigint(20) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `current_date` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_074227_create_admins_table', 1),
(6, '2023_03_17_123007_create_packages_table', 2),
(8, '2023_03_27_103153_create_payment_methods_table', 3),
(10, '2023_03_28_074201_create_deposits_table', 4),
(11, '2023_03_28_142734_create_user_ledgers_table', 5),
(12, '2023_03_28_142802_create_admin_ledgers_table', 6),
(13, '2023_03_30_071745_create_vip_sliders_table', 7),
(14, '2023_03_30_150139_create_settings_table', 8),
(15, '2023_04_01_185541_create_bonuses_table', 9),
(16, '2023_04_01_205009_create_bonus_ledgers_table', 10),
(17, '2023_04_05_203304_create_purchases_table', 11),
(18, '2023_04_09_200835_create_minings_table', 12),
(19, '2023_05_05_092841_create_drows_table', 13),
(20, '2023_05_05_111428_create_lucky_ledgers_table', 14),
(21, '2023_05_05_161904_create_icons_table', 15),
(22, '2023_05_09_214610_create_hiru_notices_table', 16),
(23, '2023_06_06_210226_create_funds_table', 17),
(24, '2023_06_06_222047_create_fund_invests_table', 18),
(25, '2023_06_11_113547_create_checkins_table', 19),
(26, '2023_06_23_193458_create_improvments_table', 20),
(27, '2023_06_24_083626_create_commissions_table', 21),
(28, '2023_12_14_221116_create_tasks_table', 22),
(29, '2024_01_31_034808_create_rebates_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `validity` varchar(255) NOT NULL COMMENT 'count days',
  `commission_with_avg_amount` double NOT NULL DEFAULT 0 COMMENT 'user get average amount after validity',
  `first_ref` double NOT NULL DEFAULT 0,
  `second_ref` double NOT NULL DEFAULT 0,
  `third_ref` double NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `is_default` enum('1','0') NOT NULL DEFAULT '0',
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `title`, `photo`, `price`, `validity`, `commission_with_avg_amount`, `first_ref`, `second_ref`, `third_ref`, `status`, `is_default`, `desc`, `created_at`, `updated_at`) VALUES
(4, 'Oil drilling platform', 'Select equipment which you prefer! You can share the equipment income bonus every day!', '/public/upload/package/1707170108LQe.jpeg', 250, '10', 500, 10, 4, 2, 'active', '0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,', '2023-04-08 09:46:00', '2024-02-15 01:58:57'),
(13, 'Oil rigs', 'Select equipment which you prefer! You can share the equipment income bonus every day!', '/public/upload/package/1707170130JhD.jpeg', 800, '41', 2460, 10, 4, 2, 'active', '0', NULL, '2023-11-02 11:16:42', '2024-02-15 02:00:38'),
(21, 'Fractionation Tower', 'Select equipment which you prefer! You can share the equipment income bonus every day!', '/public/upload/package/1707170179VMg.jpeg', 1400, '41', 4428, 10, 6, 2, 'active', '0', NULL, '2023-12-01 14:46:27', '2024-02-15 02:06:33'),
(24, 'CLR', 'Energy', '/public/upload/package/1707941938l8O.jpg', 5000, '45', 18765, 0, 0, 0, 'active', '0', NULL, '2024-02-15 02:18:59', '2024-02-15 02:18:59'),
(29, 'Oil rigs 2', 'Select equipment which you prefer! You can share the equipment income bonus every day!', '/public/upload/package/1715067846ap9.jpg', 2000, '60', 2400, 0, 0, 0, 'active', '0', NULL, '2024-05-07 11:44:06', '2024-05-07 11:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(33, 'USDT', '/public/upload/photo/1708644111oev.jpg', '3PlfJM2enIx.Zw8Z8Z1RJIozjDH7R3C3Er3Fe', 'active', '2023-07-05 20:17:41', '2024-05-22 12:58:09'),
(41, 'UDDTD', '/public/upload/photo/1708644144yXR.jpg', '3PlfJM2enIx.Zw8Zs1RJIozjDH7R3C3Er3Fe', 'active', '2023-12-19 16:08:18', '2024-05-22 12:58:16');

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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `daily_income` double(20,2) NOT NULL DEFAULT 0.00,
  `hourly` decimal(20,4) NOT NULL DEFAULT 0.0000,
  `date` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `status` enum('active','inactive','pending') NOT NULL DEFAULT 'pending',
  `validity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `package_id`, `amount`, `daily_income`, `hourly`, `date`, `note`, `status`, `validity`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 250, 50.00, 2.0833, '2024-05-06 22:10:05', NULL, 'inactive', '2024-04-14 03:33:17', '2024-04-04 02:33:17', '2024-05-05 20:15:06'),
(2, 6, 4, 250, 50.00, 2.0833, '2024-05-07 22:10:06', NULL, 'active', '2024-05-15 22:08:55', '2024-05-05 20:08:55', '2024-05-06 20:10:06'),
(3, 7, 13, 800, 60.00, 2.5000, '2024-05-08 13:47:32', NULL, 'active', '2024-06-17 13:47:32', '2024-05-07 11:47:32', '2024-05-07 11:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `rebates`
--

CREATE TABLE `rebates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_commission1` double NOT NULL,
  `team_commission2` double NOT NULL,
  `team_commission3` double NOT NULL,
  `interest_commission1` double NOT NULL,
  `interest_commission2` double NOT NULL,
  `interest_commission3` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rebates`
--

INSERT INTO `rebates` (`id`, `team_commission1`, `team_commission2`, `team_commission3`, `interest_commission1`, `interest_commission2`, `interest_commission3`, `created_at`, `updated_at`) VALUES
(1, 20, 2, 1, 6, 3, 1, NULL, '2024-02-15 02:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minimum_deposit` double(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_charge` int(11) NOT NULL DEFAULT 0 COMMENT 'percent',
  `minimum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `maximum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `w_time_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `registration_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `total_member_register_reword` int(11) NOT NULL DEFAULT 0,
  `total_member_register_reword_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `channel` varchar(255) DEFAULT NULL,
  `telegram_group` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `minimum_deposit`, `withdraw_charge`, `minimum_withdraw`, `maximum_withdraw`, `w_time_status`, `checkin`, `registration_bonus`, `total_member_register_reword`, `total_member_register_reword_amount`, `channel`, `telegram_group`, `created_at`, `updated_at`) VALUES
(1, 10.00, 5, 200.00, 25000.00, 'active', 5.00, 0.00, 30, 2.00, 'https://t.me/Dev_Roki', 'https://t.me/Dev_Roki', '2022-01-18 11:03:22', '2024-08-06 08:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_by` varchar(255) DEFAULT NULL,
  `ref_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `phone_code` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `receive_able_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `reword_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `photo` varchar(255) DEFAULT NULL,
  `gateway_method` varchar(50) DEFAULT NULL,
  `gateway_number` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `ban_unban` enum('ban','unban') NOT NULL DEFAULT 'unban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_by`, `ref_id`, `name`, `realname`, `phone_code`, `phone`, `ip`, `username`, `email`, `email_verified_at`, `password`, `type`, `balance`, `receive_able_amount`, `checkin`, `reword_balance`, `invest_cumulative_balance_received`, `invest_cumulative_balance`, `interest_cumulative_balance_received`, `interest_cumulative_balance`, `photo`, `gateway_method`, `gateway_number`, `remember_token`, `status`, `ban_unban`, `created_at`, `updated_at`) VALUES
(8, '34718347', '377nc8u144', 'User89', NULL, '+880', '01700000000', '235235325', 'uname01700000000', 'user877711716360805@gmail.com', NULL, '$2y$10$MTGjM.Z9dMUtNVZF6xt6P.yC9shc1rwmWLkb8klui6HV/fS9TvExG', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-05-22 12:53:25', '2024-05-22 12:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_ledgers`
--

CREATE TABLE `user_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `get_balance_from_user_id` bigint(20) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `step` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ledgers`
--

INSERT INTO `user_ledgers` (`id`, `user_id`, `get_balance_from_user_id`, `reason`, `perticulation`, `amount`, `debit`, `credit`, `status`, `date`, `step`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-02-25', NULL, '2024-02-25 02:26:08', '2024-02-25 02:26:08'),
(2, 1, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our CLR', 800, 800, 0, 'approved', '25-02-2024 02:26', NULL, '2024-02-25 02:26:14', '2024-02-25 02:26:14'),
(3, 1, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-04-02', NULL, '2024-04-01 23:20:08', '2024-04-01 23:20:08'),
(4, 1, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-04-04', NULL, '2024-04-04 03:29:56', '2024-04-04 03:29:56'),
(5, 3, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-05-04', NULL, '2024-05-04 21:01:10', '2024-05-04 21:01:10'),
(6, 3, NULL, 'user_deposit', 'user deposit using externals', 10, 10, 0, 'pending', '24-05-04', NULL, '2024-05-04 21:08:12', '2024-05-04 21:08:12'),
(7, 3, NULL, 'user_deposit', 'user deposit using externals', 10, 10, 0, 'pending', '24-05-04', NULL, '2024-05-04 21:09:07', '2024-05-04 21:09:07'),
(8, 4, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-05-04', NULL, '2024-05-04 22:13:55', '2024-05-04 22:13:55'),
(9, 4, NULL, 'user_deposit', 'user deposit using externals', 10000, 10000, 0, 'pending', '24-05-04', NULL, '2024-05-04 22:14:11', '2024-05-04 22:14:11'),
(10, 4, NULL, 'user_deposit', 'user deposit using externals', 20000, 20000, 0, 'pending', '24-05-04', NULL, '2024-05-04 22:23:41', '2024-05-04 22:23:41'),
(11, 3, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-05-04', NULL, '2024-05-04 22:52:07', '2024-05-04 22:52:07'),
(12, 3, NULL, 'user_deposit', 'user deposit using externals', 10, 10, 0, 'pending', '24-05-04', NULL, '2024-05-04 22:55:10', '2024-05-04 22:55:10'),
(13, 6, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-05-05', NULL, '2024-05-05 20:46:30', '2024-05-05 20:46:30'),
(14, 6, NULL, 'user_deposit', 'user deposit using externals', 5000, 5000, 0, 'pending', '24-05-05', NULL, '2024-05-05 20:46:45', '2024-05-05 20:46:45'),
(15, 6, NULL, 'user_deposit', 'user deposit using externals', 800, 800, 0, 'pending', '24-05-05', NULL, '2024-05-05 20:07:49', '2024-05-05 20:07:49'),
(16, 6, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our CLR', 800, 800, 0, 'approved', '05-05-2024 22:08', NULL, '2024-05-05 20:08:36', '2024-05-05 20:08:36'),
(17, 7, NULL, 'user_deposit', 'user deposit using externals', 2200, 2200, 0, 'pending', '24-05-07', NULL, '2024-05-07 11:46:59', '2024-05-07 11:46:59'),
(18, 7, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our CLR', 2200, 2200, 0, 'approved', '07-05-2024 13:47', NULL, '2024-05-07 11:47:13', '2024-05-07 11:47:13'),
(19, 6, 7, 'commission', 'First Level Commission Received', 160, 160, 0, 'approved', '07-05-2024 13:47', 'first', '2024-05-07 11:47:32', '2024-05-07 11:47:32'),
(20, 6, NULL, 'reword', 'Invest commission received.', 160, 160, 0, 'approved', '07-05-2024 13:48', NULL, '2024-05-07 11:48:37', '2024-05-07 11:48:37'),
(21, 6, NULL, 'user_deposit', 'user deposit using externals', 20000, 20000, 0, 'pending', '24-05-07', NULL, '2024-05-07 12:32:22', '2024-05-07 12:32:22'),
(22, 6, NULL, 'withdraw_request', 'withdraw request status is pending', 200, 190, 0, 'pending', '07-05-2024 14:33', NULL, '2024-05-07 12:33:06', '2024-05-07 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `vip_sliders`
--

CREATE TABLE `vip_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `page_type` enum('home_page','vip_page') NOT NULL DEFAULT 'home_page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vip_sliders`
--

INSERT INTO `vip_sliders` (`id`, `photo`, `status`, `page_type`, `created_at`, `updated_at`) VALUES
(11, '/public/upload/slider/1688711605xsK.jpg', 'active', 'home_page', '2023-07-05 01:06:16', '2023-07-07 04:33:25'),
(12, '/public/upload/slider/1688711639ObA.jpg', 'active', 'home_page', '2023-07-05 01:06:35', '2023-07-07 04:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `method_name` varchar(255) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(40) NOT NULL,
  `rate` decimal(20,2) NOT NULL DEFAULT 0.00,
  `charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `trx` varchar(40) DEFAULT NULL,
  `final_amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `after_charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_information` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending' COMMENT '1=>success, 2=>pending, 3=>cancel,  ',
  `admin_feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `method_name`, `oid`, `number`, `amount`, `currency`, `rate`, `charge`, `trx`, `final_amount`, `after_charge`, `withdraw_information`, `status`, `admin_feedback`, `created_at`, `updated_at`) VALUES
(1, 6, 'UDDTD', 'W-674867869827418358', 'TTG5vgtuvVQEFJApxT5vJ9KzY9XxDo64Eo', 200.00, 'Bangladesh', 0.00, 10.00, NULL, 190.00, 0.00, NULL, 'pending', NULL, '2024-05-07 12:33:06', '2024-05-07 12:33:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkins_user_id_foreign` (`user_id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lucky_ledgers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_package_id_foreign` (`package_id`);

--
-- Indexes for table `rebates`
--
ALTER TABLE `rebates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rebates`
--
ALTER TABLE `rebates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkins`
--
ALTER TABLE `checkins`
  ADD CONSTRAINT `checkins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD CONSTRAINT `lucky_ledgers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
