-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 05:13 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susara_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `billNo` int(10) UNSIGNED NOT NULL,
  `instrumentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrumentNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_ex`
--

CREATE TABLE `bill_ex` (
  `billNo` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalAmount` double NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts_customers`
--

CREATE TABLE `carts_customers` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `cashierId` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `active_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `fname`, `lname`, `no`, `street`, `city`, `phoneNo`, `nic`, `email`, `password`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`, `active`, `active_token`) VALUES
(34, 'user', '01', '43', 'badulla', 'bandarawela', '1234567890', '1234567890', 'user01@gmail.com', '$2y$10$PntkaQk3bdoHLtxVOnJqYeYQ5eF93oosKZG8haDKEX5IOYHStmcfq', NULL, '2019-06-20 23:18:58', '2019-06-20 17:48:58', '2019-06-20 17:48:58', 0, 'UFitV6aLt05hMAvukfsT');

-- --------------------------------------------------------

--
-- Table structure for table `customers_lessons`
--

CREATE TABLE `customers_lessons` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `instrumentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruments_customers`
--

CREATE TABLE `instruments_customers` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruments_ex`
--

CREATE TABLE `instruments_ex` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adminId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons_ex`
--

CREATE TABLE `lessons_ex` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adminId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual_payments`
--

CREATE TABLE `manual_payments` (
  `mPaymentId` int(10) UNSIGNED NOT NULL,
  `itmeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual_payments_ex`
--

CREATE TABLE `manual_payments_ex` (
  `mPyamentId` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2019_06_04_053453_create_users_table', 1),
(2, '2019_06_04_053540_create_users_user_roles_table', 1),
(3, '2019_06_04_053639_create_admins_table', 1),
(4, '2019_06_04_053724_create_cashiers_table', 1),
(5, '2019_06_04_053838_create_customers_table', 1),
(6, '2019_06_04_054010_create_new_items_table', 1),
(7, '2019_06_04_054048_create_new_items_categories_table', 1),
(8, '2019_06_04_054321_create_stocks_table', 1),
(9, '2019_06_04_054346_create_stock_ex_table', 1),
(10, '2019_06_04_055236_create_manual_payments_table', 1),
(11, '2019_06_04_055340_create_manual_payments_ex_table', 1),
(12, '2019_06_04_055539_create_online_payments_table', 1),
(13, '2019_06_04_055952_create_instruments_table', 1),
(14, '2019_06_04_060054_create_online_payments_ex_table', 1),
(15, '2019_06_04_060307_create_online_payments_ex2_table', 1),
(16, '2019_06_04_060413_create_lessons_table', 1),
(17, '2019_06_04_060500_create_lessons_ex_table', 1),
(18, '2019_06_04_060547_create_carts_table', 1),
(19, '2019_06_04_060651_create_bills_table', 1),
(20, '2019_06_04_060729_create_bills-ex_table', 1),
(21, '2019_06_04_060835_create_instruments_ex_table', 1),
(22, '2019_06_04_060944_create_instruments_customers_table', 1),
(23, '2019_06_04_061044_create_carts_customers_table', 1),
(24, '2019_06_04_061137_create_customers_lessons_table', 1),
(25, '2019_06_04_061223_create_song_details_table', 1),
(26, '2019_06_04_061255_create_song_details_ex_table', 1),
(27, '2019_06_04_061409_create_song_details_customers_table', 1),
(28, '2019_06_04_061456_create_tune_instruments_table', 1),
(29, '2019_06_04_061532_create_tune_instruments_ex_table', 1),
(30, '2019_06_04_061716_create_tune_instruments_customers_table', 1),
(31, '2019_06_08_165835_create_orders_table', 1),
(32, '2019_06_16_070336_create_user_activation_table', 1),
(33, '2019_06_18_130217_add_active_to_customers', 2),
(34, '2019_06_18_131052_add_active_to_customers', 3);

-- --------------------------------------------------------

--
-- Table structure for table `new_items`
--

CREATE TABLE `new_items` (
  `itemNo` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_items_categories`
--

CREATE TABLE `new_items_categories` (
  `itemNo` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adminId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments`
--

CREATE TABLE `online_payments` (
  `oPaymentId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments_ex`
--

CREATE TABLE `online_payments_ex` (
  `oPyamentId` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  `instrumentId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments_ex2`
--

CREATE TABLE `online_payments_ex2` (
  `oPaymentId` int(10) UNSIGNED NOT NULL,
  `creditCardNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details`
--

CREATE TABLE `song_details` (
  `songId` int(10) UNSIGNED NOT NULL,
  `songName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lyrics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details-ex`
--

CREATE TABLE `song_details-ex` (
  `songId` int(10) UNSIGNED NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adminId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details_customers`
--

CREATE TABLE `song_details_customers` (
  `songId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `sItemNo` int(10) UNSIGNED NOT NULL,
  `sItemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_ex`
--

CREATE TABLE `stock_ex` (
  `sItemNo` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instruments`
--

CREATE TABLE `tune_instruments` (
  `instrumentNo` int(10) UNSIGNED NOT NULL,
  `instrumentname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instruments_customers`
--

CREATE TABLE `tune_instruments_customers` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instrument_ex`
--

CREATE TABLE `tune_instrument_ex` (
  `instrumentNo` int(10) UNSIGNED NOT NULL,
  `inpiutFrequency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `predefinedFrequency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$VR68l6ak6IjPcrETrCtju.bE9hczm9FuOv.UVi2fSoPcoiIMfHjGW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_activations`
--

CREATE TABLE `users_activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `userId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_user_roles`
--

CREATE TABLE `users_user_roles` (
  `userId` int(10) UNSIGNED NOT NULL,
  `userRole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_userid_foreign` (`userId`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`billNo`);

--
-- Indexes for table `bill_ex`
--
ALTER TABLE `bill_ex`
  ADD PRIMARY KEY (`billNo`),
  ADD KEY `bill_ex_cashierid_foreign` (`cashierId`),
  ADD KEY `bill_ex_customerid_foreign` (`customerId`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `carts_cashierid_foreign` (`cashierId`),
  ADD KEY `carts_adminid_foreign` (`adminId`);

--
-- Indexes for table `carts_customers`
--
ALTER TABLE `carts_customers`
  ADD KEY `carts_customers_cartid_foreign` (`cartId`),
  ADD KEY `carts_customers_customerid_foreign` (`customerId`);

--
-- Indexes for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`cashierId`),
  ADD UNIQUE KEY `cashiers_email_unique` (`email`),
  ADD KEY `cashiers_userid_foreign` (`userId`),
  ADD KEY `cashiers_adminid_foreign` (`adminId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customers_lessons`
--
ALTER TABLE `customers_lessons`
  ADD KEY `customers_lessons_lessonno_foreign` (`lessonNo`),
  ADD KEY `customers_lessons_customerid_foreign` (`customerId`);

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`instrumentId`);

--
-- Indexes for table `instruments_customers`
--
ALTER TABLE `instruments_customers`
  ADD KEY `instruments_customers_instrumentid_foreign` (`instrumentId`),
  ADD KEY `instruments_customers_customerid_foreign` (`customerId`);

--
-- Indexes for table `instruments_ex`
--
ALTER TABLE `instruments_ex`
  ADD PRIMARY KEY (`instrumentId`),
  ADD KEY `instruments_ex_adminid_foreign` (`adminId`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonNo`);

--
-- Indexes for table `lessons_ex`
--
ALTER TABLE `lessons_ex`
  ADD PRIMARY KEY (`lessonNo`),
  ADD KEY `lessons_ex_adminid_foreign` (`adminId`);

--
-- Indexes for table `manual_payments`
--
ALTER TABLE `manual_payments`
  ADD PRIMARY KEY (`mPaymentId`);

--
-- Indexes for table `manual_payments_ex`
--
ALTER TABLE `manual_payments_ex`
  ADD PRIMARY KEY (`mPyamentId`),
  ADD KEY `manual_payments_ex_cashierid_foreign` (`cashierId`),
  ADD KEY `manual_payments_ex_adminid_foreign` (`adminId`),
  ADD KEY `manual_payments_ex_customerid_foreign` (`customerId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_items`
--
ALTER TABLE `new_items`
  ADD PRIMARY KEY (`itemNo`);

--
-- Indexes for table `new_items_categories`
--
ALTER TABLE `new_items_categories`
  ADD PRIMARY KEY (`itemNo`),
  ADD KEY `new_items_categories_adminid_foreign` (`adminId`);

--
-- Indexes for table `online_payments`
--
ALTER TABLE `online_payments`
  ADD PRIMARY KEY (`oPaymentId`);

--
-- Indexes for table `online_payments_ex`
--
ALTER TABLE `online_payments_ex`
  ADD PRIMARY KEY (`oPyamentId`),
  ADD KEY `online_payments_ex_cashierid_foreign` (`cashierId`),
  ADD KEY `online_payments_ex_adminid_foreign` (`adminId`),
  ADD KEY `online_payments_ex_customerid_foreign` (`customerId`),
  ADD KEY `online_payments_ex_instrumentid_foreign` (`instrumentId`);

--
-- Indexes for table `online_payments_ex2`
--
ALTER TABLE `online_payments_ex2`
  ADD PRIMARY KEY (`oPaymentId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_details`
--
ALTER TABLE `song_details`
  ADD PRIMARY KEY (`songId`);

--
-- Indexes for table `song_details-ex`
--
ALTER TABLE `song_details-ex`
  ADD PRIMARY KEY (`songId`),
  ADD KEY `song_details_ex_adminid_foreign` (`adminId`);

--
-- Indexes for table `song_details_customers`
--
ALTER TABLE `song_details_customers`
  ADD KEY `song_details_customers_songid_foreign` (`songId`),
  ADD KEY `song_details_customers_customerid_foreign` (`customerId`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`sItemNo`);

--
-- Indexes for table `stock_ex`
--
ALTER TABLE `stock_ex`
  ADD PRIMARY KEY (`sItemNo`);

--
-- Indexes for table `tune_instruments`
--
ALTER TABLE `tune_instruments`
  ADD PRIMARY KEY (`instrumentNo`);

--
-- Indexes for table `tune_instruments_customers`
--
ALTER TABLE `tune_instruments_customers`
  ADD KEY `tune_instruments_customers_instrumentid_foreign` (`instrumentId`),
  ADD KEY `tune_instruments_customers_customerid_foreign` (`customerId`);

--
-- Indexes for table `tune_instrument_ex`
--
ALTER TABLE `tune_instrument_ex`
  ADD PRIMARY KEY (`instrumentNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users_activations`
--
ALTER TABLE `users_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_activations_userid_foreign` (`userId`);

--
-- Indexes for table `users_user_roles`
--
ALTER TABLE `users_user_roles`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `cashierId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lessonNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons_ex`
--
ALTER TABLE `lessons_ex`
  MODIFY `lessonNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manual_payments`
--
ALTER TABLE `manual_payments`
  MODIFY `mPaymentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manual_payments_ex`
--
ALTER TABLE `manual_payments_ex`
  MODIFY `mPyamentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `new_items`
--
ALTER TABLE `new_items`
  MODIFY `itemNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_items_categories`
--
ALTER TABLE `new_items_categories`
  MODIFY `itemNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `song_details`
--
ALTER TABLE `song_details`
  MODIFY `songId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `song_details-ex`
--
ALTER TABLE `song_details-ex`
  MODIFY `songId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `sItemNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_ex`
--
ALTER TABLE `stock_ex`
  MODIFY `sItemNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_activations`
--
ALTER TABLE `users_activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_user_roles`
--
ALTER TABLE `users_user_roles`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `bill_ex`
--
ALTER TABLE `bill_ex`
  ADD CONSTRAINT `bill_ex_cashierid_foreign` FOREIGN KEY (`cashierId`) REFERENCES `cashiers` (`cashierId`),
  ADD CONSTRAINT `bill_ex_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`),
  ADD CONSTRAINT `carts_cashierid_foreign` FOREIGN KEY (`cashierId`) REFERENCES `cashiers` (`cashierId`);

--
-- Constraints for table `carts_customers`
--
ALTER TABLE `carts_customers`
  ADD CONSTRAINT `carts_customers_cartid_foreign` FOREIGN KEY (`cartId`) REFERENCES `carts` (`cartId`),
  ADD CONSTRAINT `carts_customers_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`);

--
-- Constraints for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD CONSTRAINT `cashiers_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`) ON DELETE CASCADE,
  ADD CONSTRAINT `cashiers_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `customers_lessons`
--
ALTER TABLE `customers_lessons`
  ADD CONSTRAINT `customers_lessons_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `customers_lessons_lessonno_foreign` FOREIGN KEY (`lessonNo`) REFERENCES `lessons` (`lessonNo`);

--
-- Constraints for table `instruments_customers`
--
ALTER TABLE `instruments_customers`
  ADD CONSTRAINT `instruments_customers_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `instruments_customers_instrumentid_foreign` FOREIGN KEY (`instrumentId`) REFERENCES `instruments` (`instrumentId`);

--
-- Constraints for table `instruments_ex`
--
ALTER TABLE `instruments_ex`
  ADD CONSTRAINT `instruments_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`);

--
-- Constraints for table `lessons_ex`
--
ALTER TABLE `lessons_ex`
  ADD CONSTRAINT `lessons_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`);

--
-- Constraints for table `manual_payments_ex`
--
ALTER TABLE `manual_payments_ex`
  ADD CONSTRAINT `manual_payments_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`),
  ADD CONSTRAINT `manual_payments_ex_cashierid_foreign` FOREIGN KEY (`cashierId`) REFERENCES `cashiers` (`cashierId`),
  ADD CONSTRAINT `manual_payments_ex_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`) ON DELETE CASCADE;

--
-- Constraints for table `new_items_categories`
--
ALTER TABLE `new_items_categories`
  ADD CONSTRAINT `new_items_categories_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`);

--
-- Constraints for table `online_payments_ex`
--
ALTER TABLE `online_payments_ex`
  ADD CONSTRAINT `online_payments_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`),
  ADD CONSTRAINT `online_payments_ex_cashierid_foreign` FOREIGN KEY (`cashierId`) REFERENCES `cashiers` (`cashierId`),
  ADD CONSTRAINT `online_payments_ex_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `online_payments_ex_instrumentid_foreign` FOREIGN KEY (`instrumentId`) REFERENCES `instruments` (`instrumentId`);

--
-- Constraints for table `song_details-ex`
--
ALTER TABLE `song_details-ex`
  ADD CONSTRAINT `song_details_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`);

--
-- Constraints for table `song_details_customers`
--
ALTER TABLE `song_details_customers`
  ADD CONSTRAINT `song_details_customers_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `song_details_customers_songid_foreign` FOREIGN KEY (`songId`) REFERENCES `song_details` (`songId`);

--
-- Constraints for table `tune_instruments_customers`
--
ALTER TABLE `tune_instruments_customers`
  ADD CONSTRAINT `tune_instruments_customers_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `tune_instruments_customers_instrumentid_foreign` FOREIGN KEY (`instrumentId`) REFERENCES `instruments` (`instrumentId`);

--
-- Constraints for table `users_activations`
--
ALTER TABLE `users_activations`
  ADD CONSTRAINT `users_activations_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
