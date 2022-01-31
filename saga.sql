-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 05:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saga`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `order_id`, `user_id`, `billing_address`, `billing_phone`, `billing_email`, `shipping_address`, `shipping_phone`, `shipping_email`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Khushal Singh Rao, 62/63 A, G.P COLONY, NEW SANGANER ROAD,, , Jaipur, RAJASTHAN, 302020, India', '9602151363', 'mr.khushalrao@gmail.com', 'Khushal Singh Rao, 62/63 A, G.P COLONY, NEW SANGANER ROAD,, , Jaipur, RAJASTHAN, 302020, India', '9602151363', 'mr.khushalrao@gmail.com', '2020-04-22 01:43:06', '2020-04-22 01:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Melba Moore DVM', 'ksrao0701@gmail.com', '2020-04-21 08:18:10', '$2y$10$zBI4Nl8BnzbtO.O9BTZdoukJ6OUR5qotxgUlztzUFrQzD5UG6cQnK', 'X1uBDXY5sp', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(2, 'Chaz O\'Hara I', 'virusubram@gmail.com', '2020-04-21 08:18:10', '$2y$10$0h6Y02rqbcNw/fvaKisvpOKpCsiaopeadTl6sPpdhFJIiYfyObUaO', '2dZfo8zxVi', '2020-04-21 08:18:10', '2020-04-21 08:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 1, 3, 1, '2020-04-22 02:09:18', '2020-04-22 02:09:18'),
(13, 1, 5, 1, '2020-04-22 02:09:30', '2020-04-22 02:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(1, 'Indian Starter', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(2, 'Desert', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(3, 'Indian Breads', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(4, 'Beverage', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(5, 'Rice', '2020-04-21 08:18:10', '2020-04-21 08:18:10'),
(6, 'Indian Cuisine', '2020-04-21 08:18:10', '2020-04-21 08:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `url`, `size`, `extension`, `created_at`, `updated_at`) VALUES
(1, 1, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/1/1.jpg', 's', 'jpg', '2020-04-21 08:19:00', '2020-04-21 08:19:00'),
(2, 1, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/1/1.jpg', 'm', 'jpg', '2020-04-21 08:19:00', '2020-04-21 08:19:00'),
(3, 1, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/1/1.jpg', 'l', 'jpg', '2020-04-21 08:19:00', '2020-04-21 08:19:00'),
(4, 2, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/2/1.jpg', 's', 'jpg', '2020-04-21 08:19:51', '2020-04-21 08:19:51'),
(5, 2, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/2/1.jpg', 'm', 'jpg', '2020-04-21 08:19:51', '2020-04-21 08:19:51'),
(6, 2, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/2/1.jpg', 'l', 'jpg', '2020-04-21 08:19:51', '2020-04-21 08:19:51'),
(7, 3, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/3/1.jpg', 's', 'jpg', '2020-04-21 08:42:42', '2020-04-21 08:42:42'),
(8, 3, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/3/1.jpg', 'm', 'jpg', '2020-04-21 08:42:42', '2020-04-21 08:42:42'),
(9, 3, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/3/1.jpg', 'l', 'jpg', '2020-04-21 08:42:42', '2020-04-21 08:42:42'),
(10, 4, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/4/1.jpg', 's', 'jpg', '2020-04-21 08:43:34', '2020-04-21 08:43:34'),
(11, 4, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/4/1.jpg', 'm', 'jpg', '2020-04-21 08:43:35', '2020-04-21 08:43:35'),
(12, 4, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/4/1.jpg', 'l', 'jpg', '2020-04-21 08:43:35', '2020-04-21 08:43:35'),
(13, 5, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/5/1.jpg', 's', 'jpg', '2020-04-21 08:44:18', '2020-04-21 08:44:18'),
(14, 5, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/5/1.jpg', 'm', 'jpg', '2020-04-21 08:44:18', '2020-04-21 08:44:18'),
(15, 5, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/5/1.jpg', 'l', 'jpg', '2020-04-21 08:44:18', '2020-04-21 08:44:18'),
(16, 6, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/6/1.jpg', 's', 'jpg', '2020-04-21 08:44:52', '2020-04-21 08:44:52'),
(17, 6, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/6/1.jpg', 'm', 'jpg', '2020-04-21 08:44:52', '2020-04-21 08:44:52'),
(18, 6, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/6/1.jpg', 'l', 'jpg', '2020-04-21 08:44:52', '2020-04-21 08:44:52'),
(19, 7, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/7/1.jpg', 's', 'jpg', '2020-04-21 08:45:39', '2020-04-21 08:45:39'),
(20, 7, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/7/1.jpg', 'm', 'jpg', '2020-04-21 08:45:39', '2020-04-21 08:45:39'),
(21, 7, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/7/1.jpg', 'l', 'jpg', '2020-04-21 08:45:39', '2020-04-21 08:45:39'),
(22, 8, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/8/1.jpg', 's', 'jpg', '2020-04-21 08:46:36', '2020-04-21 08:46:36'),
(23, 8, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/8/1.jpg', 'm', 'jpg', '2020-04-21 08:46:36', '2020-04-21 08:46:36'),
(24, 8, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/8/1.jpg', 'l', 'jpg', '2020-04-21 08:46:36', '2020-04-21 08:46:36'),
(25, 9, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/9/1.jpg', 's', 'jpg', '2020-04-21 08:47:32', '2020-04-21 08:47:32'),
(26, 9, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/9/1.jpg', 'm', 'jpg', '2020-04-21 08:47:32', '2020-04-21 08:47:32'),
(27, 9, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/9/1.jpg', 'l', 'jpg', '2020-04-21 08:47:32', '2020-04-21 08:47:32'),
(28, 10, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/10/1.jpg', 's', 'jpg', '2020-04-21 08:49:10', '2020-04-21 08:49:10'),
(29, 10, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/10/1.jpg', 'm', 'jpg', '2020-04-21 08:49:10', '2020-04-21 08:49:10'),
(30, 10, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/10/1.jpg', 'l', 'jpg', '2020-04-21 08:49:10', '2020-04-21 08:49:10'),
(31, 11, 'D:\\Project\\WebD\\saga\\public/images/product/small-size/11/1.jpg', 's', 'jpg', '2020-04-21 08:49:53', '2020-04-21 08:49:53'),
(32, 11, 'D:\\Project\\WebD\\saga\\public/images/product/medium-size/11/1.jpg', 'm', 'jpg', '2020-04-21 08:49:53', '2020-04-21 08:49:53'),
(33, 11, 'D:\\Project\\WebD\\saga\\public/images/product/large-size/11/1.jpg', 'l', 'jpg', '2020-04-21 08:49:53', '2020-04-21 08:49:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_07_081823_create_admins_table', 1),
(5, '2020_02_08_142648_product', 1),
(6, '2020_04_20_013316_create_wishlists_table', 1),
(7, '2020_04_20_013914_create_carts_table', 1),
(8, '2020_04_20_014507_create_orders_table', 1),
(9, '2020_04_20_015904_create_payments_table', 1),
(10, '2020_04_20_142440_create_addresses_table', 1),
(11, '2020_04_21_150622_create_carts_table', 2),
(12, '2020_04_21_203931_create_order_details_table', 3),
(13, '2020_04_21_205305_create_addresses_table', 4),
(14, '2020_04_21_212851_create_payments_table', 5),
(15, '2020_04_21_214403_create_payments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE `new_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, ' ', ' ', '2020-04-21 16:03:12', '2020-04-21 16:03:12'),
(2, 1, ' ', ' ', '2020-04-21 16:07:59', '2020-04-21 16:07:59'),
(3, 1, ' ', ' ', '2020-04-21 16:15:14', '2020-04-21 16:15:14'),
(4, 1, ' ', ' ', '2020-04-21 16:16:50', '2020-04-21 16:16:50'),
(5, 1, ' ', ' ', '2020-04-21 16:22:07', '2020-04-21 16:22:07'),
(8, 1, ' ', ' ', '2020-04-22 01:38:54', '2020-04-22 01:38:54'),
(9, 1, ' ', ' ', '2020-04-22 01:40:23', '2020-04-22 01:40:23'),
(10, 1, ' ', ' ', '2020-04-22 01:43:06', '2020-04-22 01:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `prepared` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `quantity`, `total_price`, `prepared`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Mughlai Chicken Biryani', 2, 1061.1, 0, '2020-04-22 01:43:06', '2020-04-22 01:43:06'),
(2, 10, 2, 'Lemon Chicken Biryani', 1, 491.31, 0, '2020-04-22 01:43:06', '2020-04-22 01:43:06');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transaction_id`, `order_id`, `user_id`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 'ch_1GaTvaGuBVqtZPPlMuA6X1xk', 4, 1, 1552.41, '2020-04-21 16:16:50', '2020-04-21 16:16:50'),
(2, 'ch_1GaU0hGuBVqtZPPlnRJCM2na', 5, 1, 1552.41, '2020-04-21 16:22:07', '2020-04-21 16:22:07'),
(5, 'ch_1GachVGuBVqtZPPlnArvTmbJ', 8, 1, 1552.41, '2020-04-22 01:38:54', '2020-04-22 01:38:54'),
(6, 'ch_1GaciwGuBVqtZPPlKjqSNouq', 9, 1, 1552.41, '2020-04-22 01:40:23', '2020-04-22 01:40:23'),
(7, 'ch_1GaclZGuBVqtZPPlX4vk2bVu', 10, 1, 1552.41, '2020-04-22 01:43:06', '2020-04-22 01:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `price`, `discount`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mughlai Chicken Biryani', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 589.5, 10, NULL, '2020-04-21 08:19:00', '2020-04-21 08:19:00'),
(2, 'Lemon Chicken Biryani', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 545.9, 10, NULL, '2020-04-21 08:19:50', '2020-04-21 08:19:50'),
(3, 'Palak Paneer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 275, 10, NULL, '2020-04-21 08:42:40', '2020-04-21 08:42:40'),
(4, 'Kadhai Paneer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 285.9, 10, NULL, '2020-04-21 08:43:34', '2020-04-21 08:43:34'),
(5, 'Tawa Roti', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 30, NULL, NULL, '2020-04-21 08:44:17', '2020-04-21 08:44:17'),
(6, 'Butter Naan', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 20, NULL, NULL, '2020-04-21 08:44:51', '2020-04-21 08:44:51'),
(7, 'Kadhi Chawal', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 394.5, 5, NULL, '2020-04-21 08:45:38', '2020-04-21 08:45:38'),
(8, 'Vodka Martini', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 369.69, 10, NULL, '2020-04-21 08:46:36', '2020-04-21 08:46:36'),
(9, 'Strawberry Ice Cream Cone', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 98.3, NULL, NULL, '2020-04-21 08:47:32', '2020-04-21 08:47:32'),
(10, 'Dahi Vada', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 125, 5, NULL, '2020-04-21 08:49:09', '2020-04-21 08:49:09'),
(11, 'Vegetable Manchurian', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 218, 10, NULL, '2020-04-21 08:49:52', '2020-04-21 08:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `products_catagories`
--

CREATE TABLE `products_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_catagories`
--

INSERT INTO `products_catagories` (`id`, `product_id`, `catagory_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2020-04-21 08:19:00', '2020-04-21 08:19:00'),
(2, 2, 5, '2020-04-21 08:19:50', '2020-04-21 08:19:50'),
(3, 3, 6, '2020-04-21 08:42:40', '2020-04-21 08:42:40'),
(4, 4, 6, '2020-04-21 08:43:34', '2020-04-21 08:43:34'),
(5, 5, 3, '2020-04-21 08:44:17', '2020-04-21 08:44:17'),
(6, 6, 3, '2020-04-21 08:44:51', '2020-04-21 08:44:51'),
(7, 7, 5, '2020-04-21 08:45:38', '2020-04-21 08:45:38'),
(8, 8, 4, '2020-04-21 08:46:36', '2020-04-21 08:46:36'),
(9, 9, 2, '2020-04-21 08:47:32', '2020-04-21 08:47:32'),
(10, 10, 1, '2020-04-21 08:49:09', '2020-04-21 08:49:09'),
(11, 11, 1, '2020-04-21 08:49:52', '2020-04-21 08:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Khushal Rao', 'mr.khushalrao@gmail.com', NULL, '$2y$10$K0v9wq7sqVGAwCMM6/wLNuGdgznOXnsjoHQTkvhG35yOmzHcb58Fy', NULL, '2020-04-21 08:58:06', '2020-04-21 08:58:06'),
(3, 'Viru', 'virusubram@gmail.com', NULL, '$2y$10$RRBHPn1lKYe6coiKsWkhLOGNSoWF2DGJ4LneV9PUIQIaf5DjC2PWW', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carts_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_details_order_id_product_id_unique` (`order_id`,`product_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_product_name_foreign` (`product_name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_order_id_user_id_unique` (`order_id`,`user_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `products_catagories`
--
ALTER TABLE `products_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_catagories_product_id_catagory_id_unique` (`product_id`,`catagory_id`),
  ADD KEY `products_catagories_catagory_id_foreign` (`catagory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wishlists_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `new_products`
--
ALTER TABLE `new_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_catagories`
--
ALTER TABLE `products_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `new_products`
--
ALTER TABLE `new_products`
  ADD CONSTRAINT `new_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_name_foreign` FOREIGN KEY (`product_name`) REFERENCES `products` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_catagories`
--
ALTER TABLE `products_catagories`
  ADD CONSTRAINT `products_catagories_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_catagories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
