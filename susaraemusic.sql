-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2019 at 06:58 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susaraemusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
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
  `userId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`adminId`),
  UNIQUE KEY `admins_email_unique` (`email`),
  KEY `admins_userid_foreign` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `billNo` int(10) UNSIGNED NOT NULL,
  `instrumentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrumentNo` int(11) NOT NULL,
  PRIMARY KEY (`billNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_ex`
--

DROP TABLE IF EXISTS `bill_ex`;
CREATE TABLE IF NOT EXISTS `bill_ex` (
  `billNo` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`billNo`),
  KEY `bill_ex_cashierid_foreign` (`cashierId`),
  KEY `bill_ex_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalAmount` double NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`cartId`),
  KEY `carts_cashierid_foreign` (`cashierId`),
  KEY `carts_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts_customers`
--

DROP TABLE IF EXISTS `carts_customers`;
CREATE TABLE IF NOT EXISTS `carts_customers` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  KEY `carts_customers_cartid_foreign` (`cartId`),
  KEY `carts_customers_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

DROP TABLE IF EXISTS `cashiers`;
CREATE TABLE IF NOT EXISTS `cashiers` (
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
  `userId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`cashierId`),
  UNIQUE KEY `cashiers_email_unique` (`email`),
  KEY `cashiers_userid_foreign` (`userId`),
  KEY `cashiers_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerId` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_lessons`
--

DROP TABLE IF EXISTS `customers_lessons`;
CREATE TABLE IF NOT EXISTS `customers_lessons` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  KEY `customers_lessons_lessonno_foreign` (`lessonNo`),
  KEY `customers_lessons_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_phone_nos`
--

DROP TABLE IF EXISTS `customers_phone_nos`;
CREATE TABLE IF NOT EXISTS `customers_phone_nos` (
  `customerId` int(10) UNSIGNED NOT NULL,
  `phoneNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`customerId`),
  KEY `customers_phone_nos_userid_foreign` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
CREATE TABLE IF NOT EXISTS `instruments` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `instrumentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`instrumentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`instrumentId`, `instrumentName`, `description`, `imagepath`, `created_at`, `updated_at`) VALUES
(61, 'DD-65', 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.', 'dist/img/percussion-img/percussion-product-1.jpg', '2019-06-05 02:11:44', '2019-06-05 02:11:44'),
(62, 'DD-65', 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.', 'dist/img/percussion-img/percussion-product-1.jpg', '2019-06-05 02:11:44', '2019-06-05 02:11:44'),
(63, 'GM2FS', 'Gigmaker drum sets are available in two basic configurations and a range of colorful sparkle finishes that you can choose to match your musical and visual style.', 'dist/img/percussion-img/percussion-product-3.jpg', '2019-06-05 02:11:44', '2019-06-05 02:11:44'),
(64, 'DTX400K', 'The DTX400K features 10 legendary drum kits and training functions plus newly developed drum pads, large cymbals and new silent kick unit.', 'dist/img/percussion-img/percussion-product-2.jpg', '2019-06-05 02:11:44', '2019-06-05 02:11:44'),
(65, 'DD-65', 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.', 'dist/img/percussion-img/percussion-product-1.jpg', '2019-06-05 02:11:44', '2019-06-05 02:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `instruments_customers`
--

DROP TABLE IF EXISTS `instruments_customers`;
CREATE TABLE IF NOT EXISTS `instruments_customers` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  KEY `instruments_customers_instrumentid_foreign` (`instrumentId`),
  KEY `instruments_customers_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruments_ex`
--

DROP TABLE IF EXISTS `instruments_ex`;
CREATE TABLE IF NOT EXISTS `instruments_ex` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`instrumentId`),
  KEY `instrument_ex_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`lessonNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons_ex`
--

DROP TABLE IF EXISTS `lessons_ex`;
CREATE TABLE IF NOT EXISTS `lessons_ex` (
  `lessonNo` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`lessonNo`),
  KEY `lessons_ex_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual_payments`
--

DROP TABLE IF EXISTS `manual_payments`;
CREATE TABLE IF NOT EXISTS `manual_payments` (
  `mPaymentId` int(10) UNSIGNED NOT NULL,
  `itmeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual_payments_ex`
--

DROP TABLE IF EXISTS `manual_payments_ex`;
CREATE TABLE IF NOT EXISTS `manual_payments_ex` (
  `mPyamentId` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`mPyamentId`),
  KEY `manual_payments_ex_cashierid_foreign` (`cashierId`),
  KEY `manual_payments_ex_adminid_foreign` (`adminId`),
  KEY `manual_payments_ex_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_04_053453_create_users_table', 1),
(2, '2019_06_04_053540_create_users_user_roles_table', 1),
(3, '2019_06_04_053639_create_admins_table', 1),
(4, '2019_06_04_053724_create_cashiers_table', 1),
(5, '2019_06_04_053838_create_customers_table', 1),
(6, '2019_06_04_053917_create_customers_phone_nos_table', 1),
(7, '2019_06_04_054010_create_new_items_table', 1),
(8, '2019_06_04_054048_create_new_items_categories_table', 1),
(9, '2019_06_04_054321_create_stocks_table', 1),
(10, '2019_06_04_054346_create_stock_ex_table', 1),
(11, '2019_06_04_055236_create_manual_payments_table', 1),
(12, '2019_06_04_055340_create_manual_payments_ex_table', 1),
(13, '2019_06_04_055539_create_online_payments_table', 1),
(14, '2019_06_04_055952_create_instruments_table', 1),
(15, '2019_06_04_060054_create_online_payments_ex_table', 1),
(16, '2019_06_04_060307_create_online_payments_ex2_table', 1),
(17, '2019_06_04_060413_create_lessons_table', 1),
(18, '2019_06_04_060500_create_lessons_ex_table', 1),
(19, '2019_06_04_060547_create_carts_table', 1),
(20, '2019_06_04_060651_create_bills_table', 1),
(21, '2019_06_04_060729_create_bills-ex_table', 1),
(22, '2019_06_04_060835_create_instruments_ex_table', 1),
(23, '2019_06_04_060944_create_instruments_customers_table', 1),
(24, '2019_06_04_061044_create_carts_customers_table', 1),
(25, '2019_06_04_061137_create_customers_lessons_table', 1),
(26, '2019_06_04_061223_create_song_details_table', 1),
(27, '2019_06_04_061255_create_song_details_ex_table', 1),
(28, '2019_06_04_061409_create_song_details_customers_table', 1),
(29, '2019_06_04_061456_create_tune_instruments_table', 1),
(30, '2019_06_04_061532_create_tune_instruments_ex_table', 1),
(31, '2019_06_04_061716_create_tune_instruments_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_items`
--

DROP TABLE IF EXISTS `new_items`;
CREATE TABLE IF NOT EXISTS `new_items` (
  `itemNo` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_items_categories`
--

DROP TABLE IF EXISTS `new_items_categories`;
CREATE TABLE IF NOT EXISTS `new_items_categories` (
  `itemNo` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`itemNo`),
  KEY `new_items_categories_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments`
--

DROP TABLE IF EXISTS `online_payments`;
CREATE TABLE IF NOT EXISTS `online_payments` (
  `oPaymentId` int(10) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  PRIMARY KEY (`oPaymentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments_ex`
--

DROP TABLE IF EXISTS `online_payments_ex`;
CREATE TABLE IF NOT EXISTS `online_payments_ex` (
  `oPyamentId` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `cashierId` int(10) UNSIGNED NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  `instrumentId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`oPyamentId`),
  KEY `online_payments_ex_cashierid_foreign` (`cashierId`),
  KEY `online_payments_ex_adminid_foreign` (`adminId`),
  KEY `online_payments_ex_customerid_foreign` (`customerId`),
  KEY `online_payments_ex_instrumentid_foreign` (`instrumentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_payments_ex2`
--

DROP TABLE IF EXISTS `online_payments_ex2`;
CREATE TABLE IF NOT EXISTS `online_payments_ex2` (
  `oPaymentId` int(10) UNSIGNED NOT NULL,
  `creditCardNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderId` int(11) NOT NULL,
  PRIMARY KEY (`oPaymentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details`
--

DROP TABLE IF EXISTS `song_details`;
CREATE TABLE IF NOT EXISTS `song_details` (
  `songId` int(10) UNSIGNED NOT NULL,
  `songName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lyrics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`songId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details-ex`
--

DROP TABLE IF EXISTS `song_details-ex`;
CREATE TABLE IF NOT EXISTS `song_details-ex` (
  `songId` int(10) UNSIGNED NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminId` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`songId`),
  KEY `song_details_ex_adminid_foreign` (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `song_details_customers`
--

DROP TABLE IF EXISTS `song_details_customers`;
CREATE TABLE IF NOT EXISTS `song_details_customers` (
  `songId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  KEY `song_details_customers_songid_foreign` (`songId`),
  KEY `song_details_customers_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `sItemNo` int(10) UNSIGNED NOT NULL,
  `sItemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`sItemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_ex`
--

DROP TABLE IF EXISTS `stock_ex`;
CREATE TABLE IF NOT EXISTS `stock_ex` (
  `sItemNo` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`sItemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instruments`
--

DROP TABLE IF EXISTS `tune_instruments`;
CREATE TABLE IF NOT EXISTS `tune_instruments` (
  `instrumentNo` int(10) UNSIGNED NOT NULL,
  `instrumentname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`instrumentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instruments_customers`
--

DROP TABLE IF EXISTS `tune_instruments_customers`;
CREATE TABLE IF NOT EXISTS `tune_instruments_customers` (
  `instrumentId` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  KEY `tune_instruments_customers_instrumentid_foreign` (`instrumentId`),
  KEY `tune_instruments_customers_customerid_foreign` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tune_instrument_ex`
--

DROP TABLE IF EXISTS `tune_instrument_ex`;
CREATE TABLE IF NOT EXISTS `tune_instrument_ex` (
  `instrumentNo` int(10) UNSIGNED NOT NULL,
  `inpiutFrequency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `predefinedFrequency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`instrumentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_user_roles`
--

DROP TABLE IF EXISTS `users_user_roles`;
CREATE TABLE IF NOT EXISTS `users_user_roles` (
  `userId` int(10) UNSIGNED NOT NULL,
  `userRole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Constraints for table `customers_phone_nos`
--
ALTER TABLE `customers_phone_nos`
  ADD CONSTRAINT `customers_phone_nos_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `instrument_ex_adminid_foreign` FOREIGN KEY (`adminId`) REFERENCES `admins` (`adminId`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
