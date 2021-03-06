-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 12:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advanceecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_bn`, `brand_slug_en`, `brand_slug_bn`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'সামসং', 'samsung', 'সামসং', 'uploads/brand/20210129153150.png', '2021-01-29 09:31:51', NULL),
(2, 'Dell', 'ডেল', 'dell', 'ডেল', 'uploads/brand/20210129153209.png', '2021-01-29 09:32:09', NULL),
(3, 'pran', 'প্রাণ', 'pran', 'প্রাণ', 'uploads/brand/20210129153224.png', '2021-01-29 09:32:24', NULL),
(4, 'walton', 'ওয়ালটন', 'walton', 'ওয়ালটন', 'uploads/brand/20210129153243.png', '2021-01-29 09:32:43', NULL),
(5, 'rfl', 'আরএফএল', 'rfl', 'আরএফএল', 'uploads/brand/20210129153409.jpg', '2021-01-29 09:34:09', NULL),
(6, 'realme', 'রিয়েলমি', 'realme', 'রিয়েলমি', 'uploads/brand/20210129153809.png', '2021-01-29 09:38:09', NULL),
(7, 'apple', 'আপেল', 'apple', 'আপেল', 'uploads/brand/20210129153855.png', '2021-01-29 09:38:55', NULL),
(8, 'lenovo', 'লেনোভো', 'lenovo', 'লেনোভো', 'uploads/brand/20210130125811.png', '2021-01-30 06:58:11', NULL),
(9, 'dorjighor', 'দরজিঘড়', 'dorjighor', 'দরজিঘড়', 'uploads/brand/20210130130405.jpg', '2021-01-30 07:04:05', NULL),
(10, 'Shoes world', 'সুজ ওয়াল্ড', 'shoes-world', 'সুজ-ওয়াল্ড', 'uploads/brand/20210130140218.jpg', '2021-01-30 08:02:20', NULL),
(11, 'bata', 'বাটা', 'bata', 'বাটা', 'uploads/brand/20210130141648.jpg', '2021-01-30 08:16:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_bn`, `category_slug_en`, `category_slug_bn`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'electronics', 'ইলেক্টনিক্স', 'electronics', 'ইলেক্টনিক্স', 'fa fa-laptop', '2021-01-29 09:39:44', '2021-01-29 09:39:44'),
(2, 'clothing', 'জামা-কাপড়', 'clothing', 'জামা-কাপড়', 'fa fa-shopping-bag', '2021-01-29 09:40:52', '2021-01-29 09:40:52'),
(3, 'shoes', 'জুতা', 'shoes', 'জুতা', 'fa fa-paw', '2021-01-29 09:41:52', '2021-01-29 09:41:52'),
(4, 'Watches', 'ঘড়ি', 'watches', 'ঘড়ি', 'fa fa-clock-o', '2021-01-29 09:48:02', '2021-01-29 09:48:02'),
(5, 'health and beauty', 'স্বাস্থ্য এবং সৌন্দর্য', 'health-and-beauty', 'স্বাস্থ্য-এবং-সৌন্দর্য', 'fa fa-heartbeat', '2021-01-29 09:49:26', '2021-01-29 09:49:26'),
(6, 'kids and babies', 'বাচ্চা এবং বাচ্চা', 'kids-and-babies', 'বাচ্চা-এবং-বাচ্চা', 'fa fa-paper-plane', '2021-01-29 09:51:05', '2021-01-29 09:51:05'),
(7, 'sports', 'খেলাধুলা', 'sports', 'খেলাধুলা', 'fa fa-futbol-o', '2021-01-29 09:52:14', '2021-01-29 09:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(2, 'NEW YEAR', 30, '2021-02-13', 1, '2021-02-04 07:08:45', '2021-02-04 07:10:22'),
(3, 'NEW YEAR OFFER', 25, '2021-02-20', 1, '2021-02-04 07:10:06', '2021-02-04 07:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_21_090052_create_roles_table', 1),
(5, '2021_01_23_144412_create_brands_table', 1),
(6, '2021_01_24_145301_create_categories_table', 1),
(7, '2021_01_25_101123_create_subcategories_table', 1),
(8, '2021_01_26_083719_create_subsubcategories_table', 1),
(9, '2021_01_27_080154_create_products_table', 1),
(10, '2021_01_27_082253_create_multiimgs_table', 1),
(11, '2021_01_28_174157_create_silders_table', 1),
(12, '2021_02_03_044606_create_wishlists_table', 2),
(13, '2021_02_04_091120_create_coupons_table', 3),
(14, '2021_02_04_135746_create_ship_divisions_table', 4),
(15, '2021_02_04_135920_create_ship_districts_table', 4),
(16, '2021_02_04_135947_create_ship_states_table', 4),
(18, '2021_02_08_142055_create_orders_table', 5),
(19, '2021_02_08_142151_create_order_items_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `multiimgs`
--

CREATE TABLE `multiimgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiimgs`
--

INSERT INTO `multiimgs` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/product/multiimg/60155691577ef.png', '2021-01-30 06:52:33', '2021-01-30 06:52:33'),
(2, 1, 'uploads/product/multiimg/60155691c1b53.png', '2021-01-30 06:52:34', '2021-01-30 06:52:34'),
(3, 2, 'uploads/product/multiimg/6015578d4bf86.png', '2021-01-30 06:56:45', '2021-01-30 06:56:45'),
(4, 2, 'uploads/product/multiimg/6015578da71ff.png', '2021-01-30 06:56:45', '2021-01-30 06:56:45'),
(5, 3, 'uploads/product/multiimg/601558e4253b4.png', '2021-01-30 07:02:28', '2021-01-30 07:02:28'),
(6, 3, 'uploads/product/multiimg/601558e4abe77.png', '2021-01-30 07:02:28', '2021-01-30 07:02:28'),
(7, 4, 'uploads/product/multiimg/60155b21d39ee.jpg', '2021-01-30 07:12:02', '2021-01-30 07:12:02'),
(8, 4, 'uploads/product/multiimg/60155b22307e2.jpg', '2021-01-30 07:12:02', '2021-01-30 07:12:02'),
(9, 5, 'uploads/product/multiimg/60155d5576165.jpg', '2021-01-30 07:21:25', '2021-01-30 07:21:25'),
(10, 5, 'uploads/product/multiimg/60155d55aa6e1.jpg', '2021-01-30 07:21:25', '2021-01-30 07:21:25'),
(11, 6, 'uploads/product/multiimg/601561d3d247b.jpg', '2021-01-30 07:40:36', '2021-01-30 07:40:36'),
(12, 6, 'uploads/product/multiimg/601561d42071d.jpg', '2021-01-30 07:40:36', '2021-01-30 07:40:36'),
(15, 8, 'uploads/product/multiimg/601569569c545.jpg', '2021-01-30 08:12:38', '2021-01-30 08:12:38'),
(16, 8, 'uploads/product/multiimg/60156956e1315.jpg', '2021-01-30 08:12:39', '2021-01-30 08:12:39'),
(17, 9, 'uploads/product/multiimg/60156b1a5efb9.jpg', '2021-01-30 08:20:10', '2021-01-30 08:20:10'),
(18, 9, 'uploads/product/multiimg/60156b1adeb65.jpg', '2021-01-30 08:20:11', '2021-01-30 08:20:11'),
(19, 10, 'uploads/product/multiimg/60156c30ed144.jpg', '2021-01-30 08:24:49', '2021-01-30 08:24:49'),
(20, 10, 'uploads/product/multiimg/60156c3132aed.jpg', '2021-01-30 08:24:49', '2021-01-30 08:24:49'),
(25, 7, 'uploads/product/multiimg/6016771d36868.jpg', '2021-01-31 03:23:41', '2021-01-31 03:23:41'),
(26, 7, 'uploads/product/multiimg/6016771d72eb3.jpg', '2021-01-31 03:23:41', '2021-01-31 03:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(33, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 778895, 'notessss', 'SSl Payment', 'SSl Payment', '6022c804efc1b', 'BDT', 30580.00, '6022c804efc1b', 'SPM22503509', '09 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirmed', '2021-02-09 11:36:06', '2021-02-13 11:51:52'),
(34, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 77885, 'notess', 'SSl Payment', 'SSl Payment', '6022cccc2baba', 'BDT', 22935.00, '6022cccc2baba', 'SPM96030403', '09 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-09 11:56:28', NULL),
(35, 2, 1, 3, 3, 'nasim', 'nasim@gmail.com', '01866936562', 85572, 'happy shopping', 'SSl Payment', 'SSl Payment', '6022cda9d4d44', 'BDT', 3900.00, '6022cda9d4d44', 'SPM10196480', '09 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-09 12:00:09', NULL),
(36, 2, 1, 3, 3, 'nasim', 'ashanur@gmail.com', '01866936562', 77885, 'nasim', 'Stripe', 'Stripe', 'txn_1IJ0g7KzalqmeBim1URGFEaf', 'usd', 4950.00, '6022d03e45025', 'SPM67591823', '09 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-02-09 12:11:17', NULL),
(37, 2, 1, 6, 1, 'shohel rana', 'shohel@gmail.com', '01866936562', 778899, 'notes', 'SSl Payment', 'SSl Payment', '6023950602cb2', 'BDT', 2800.00, '6023950602cb2', 'SPM72500228', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 02:10:46', NULL),
(38, 2, 1, 3, 3, 'Rubel', 'rubel@gmail.com', '01866936562', 77885, 'notes', 'SSl Payment', 'SSl Payment', '6023a18f2e3ac', 'BDT', 25980.00, '6023a18f2e3ac', 'SPM80978842', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 03:04:15', NULL),
(39, 2, 1, 6, 1, 'shobuj', 'shobuj@gmail.com', '01866936562', 77700, 'happy shopping', 'SSl Payment', 'SSl Payment', '6023a2c0bc940', 'BDT', 1575.00, '6023a2c0bc940', 'SPM76451196', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 03:09:20', NULL),
(40, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 7785, 'notes', 'SSl Payment', 'SSl Payment', '6023d62a69725', 'BDT', 1050.00, '6023d62a69725', 'SPM67073733', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-02-10 06:48:42', NULL),
(41, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 235466, 'fdsf', 'SSl Payment', 'SSl Payment', '6023d6fa1e51a', 'BDT', 12990.00, '6023d6fa1e51a', 'SPM43023846', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirmed', '2021-02-10 06:52:10', '2021-02-13 11:58:31'),
(42, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 23543, 'sgdhrgfd', 'SSl Payment', 'SSl Payment', '6023d8250373d', 'BDT', 2300.00, '6023d8250373d', 'SPM68839373', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 06:57:09', NULL),
(43, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 77785, 'notes', 'SSl Payment', 'SSl Payment', '6023d8ec464fe', 'BDT', 25980.00, '6023d8ec464fe', 'SPM27336842', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 07:00:28', NULL),
(44, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 78548, 'notes', 'Stripe', 'Stripe', 'txn_1IJIw1KzalqmeBimyCPyXFMA', 'usd', 12990.00, '6023e25d6b684', 'SPM44014735', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirmed', '2021-02-10 07:40:54', '2021-02-13 11:42:17'),
(45, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 78548, 'notes', 'Stripe', 'Stripe', 'txn_1IJIxNKzalqmeBimJHWjXxkK', 'usd', 12990.00, '6023e2b44a623', 'SPM91170437', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirmed', '2021-02-10 07:42:13', '2021-02-13 11:39:08'),
(46, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 78548, 'notes', 'Stripe', 'Stripe', 'txn_1IJJ0WKzalqmeBimntk9m393', 'usd', 12990.00, '6023e377aee24', 'SPM43276964', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 07:45:29', '2021-02-13 11:12:11'),
(47, 2, 1, 3, 3, 'Md.Ashanaur Rahman', 'ashanur@gmail.com', '01866936562', 78548, 'notes', 'Stripe', 'Stripe', 'txn_1IJJLAKzalqmeBim8jp3sfIJ', 'usd', 12990.00, '6023e87791bd0', 'SPM65556226', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 08:06:49', '2021-02-13 11:11:42'),
(48, 2, 1, 3, 3, 'Rubel', 'rubel@gmail.com', '01866936562', 77885, 'notes', 'Stripe', 'Stripe', 'txn_1IJJUIKzalqmeBimUaCXsv2g', 'usd', 25980.00, '6023eaacc7ae9', 'SPM49516497', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 08:16:15', '2021-02-13 10:40:48'),
(49, 2, 1, 3, 3, 'shobuj', 'shobuj@gmail.com', '01866936562', 77458, 'happy', 'Stripe', 'Stripe', 'txn_1IJJcuKzalqmeBim0f1Xx51l', 'usd', 3300.00, '6023ecc319285', 'SPM85566254', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Processing', '2021-02-10 08:25:08', '2021-02-13 10:39:04'),
(50, 2, 1, 3, 3, 'shobuj', 'shobuj@gmail.com', '01866936562', 77458, 'happy', 'Stripe', 'Stripe', 'txn_1IJJdnKzalqmeBimpzI6jlOP', 'usd', 3300.00, '6023ecf936400', 'SPM91509354', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Picked', '2021-02-10 08:26:05', '2021-02-13 11:12:18'),
(51, 2, 1, 3, 3, 'nasim', 'nasim@gmail.com', '01866936562', 7785, 'happy', 'SSl Payment', 'SSl Payment', '6023f4df82fa6', 'BDT', 2100.00, '6023f4df82fa6', 'SPM70271429', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Delivered', '2021-02-10 08:59:43', '2021-02-14 11:18:22'),
(52, 2, 1, 3, 3, 'shohel rana', 'shobuj@gmail.com', '01866936562', 77854, 'happy', 'SSl Payment', 'SSl Payment', '6023f5657adcf', 'BDT', 3450.00, '6023f5657adcf', 'SPM36266243', '10 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '14 February 2021', 'false product', 'Delivered', '2021-02-10 09:01:57', '2021-02-14 11:08:40'),
(53, 3, 1, 6, 1, 'Rasel', 'raseloo9@gmail.com', '01866936562', 77889, 'happy shopping', 'SSl Payment', 'SSl Payment', '6025437446f2e', 'BDT', 57075.00, '6025437446f2e', 'SPM24189219', '11 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Delivered', '2021-02-11 08:47:16', '2021-02-13 11:10:55'),
(54, 2, 1, 3, 3, 'nasim', 'nasim@gmail.com', '01866936562', 77855, 'happy', 'Stripe', 'Stripe', 'txn_1IKSVmKzalqmeBimLP04IXFw', 'usd', 3150.00, '60281523c644e', 'SPM64501275', '13 February 2021', 'February', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-02-13 12:06:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(23, 33, 10, 'green', '6.3', '2', 12990.00, '2021-02-09 11:36:06', NULL),
(24, 33, 9, 'black', '41', '2', 2300.00, '2021-02-09 11:36:06', NULL),
(25, 34, 10, 'green', '6.3', '2', 12990.00, '2021-02-09 11:56:28', NULL),
(26, 34, 9, 'black', '41', '2', 2300.00, '2021-02-09 11:56:28', NULL),
(27, 35, 8, 'black', '53', '4', 250.00, '2021-02-09 12:00:10', NULL),
(28, 35, 7, 'black', '40', '4', 1050.00, '2021-02-09 12:00:10', NULL),
(29, 36, 5, 'black', '40', '3', 1650.00, '2021-02-09 12:11:17', NULL),
(30, 37, 4, 'red', '40', '2', 1400.00, '2021-02-10 02:10:56', NULL),
(31, 38, 10, 'green', '6.3', '2', 12990.00, '2021-02-10 03:04:15', NULL),
(32, 39, 7, 'black', '40', '2', 1050.00, '2021-02-10 03:09:20', NULL),
(33, 40, 7, 'black', '40', '1', 1050.00, '2021-02-10 06:48:43', NULL),
(34, 41, 10, 'green', '6.3', '1', 12990.00, '2021-02-10 06:52:10', NULL),
(35, 42, 9, 'black', '41', '1', 2300.00, '2021-02-10 06:57:09', NULL),
(36, 43, 10, 'green', '6.3', '2', 12990.00, '2021-02-10 07:00:28', NULL),
(37, 47, 10, 'green', '6.3', '1', 12990.00, '2021-02-10 08:06:58', NULL),
(38, 48, 10, 'green', '6.3', '2', 12990.00, '2021-02-10 08:16:23', NULL),
(39, 50, 5, 'black', '40', '2', 1650.00, '2021-02-10 08:26:17', NULL),
(40, 51, 7, 'black', '40', '2', 1050.00, '2021-02-10 08:59:44', NULL),
(41, 52, 9, 'black', '41', '2', 2300.00, '2021-02-10 09:01:57', NULL),
(42, 53, 7, 'black', '40', '2', 1050.00, '2021-02-11 08:47:16', NULL),
(43, 53, 3, 'silver', '14', '2', 37000.00, '2021-02-11 08:47:16', NULL),
(44, 54, 7, 'black', '40', '3', 1050.00, '2021-02-13 12:07:03', NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_tag_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tag_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_bn`, `product_slug_en`, `product_slug_bn`, `product_code`, `product_qty`, `product_tag_en`, `product_tag_bn`, `product_size_en`, `product_size_bn`, `product_color_en`, `product_color_bn`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_bn`, `long_descp_en`, `long_descp_bn`, `product_thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 8, 6, 'iphone 10', 'আই ফোন ১০', 'iphone-10', 'আই-ফোন-১০', 'pp-০1', 50, 'smart phone', 'স্মার্ট ফোন', '5', '৫', 'red,green,bule', 'লাল,সবুজ,নীল', '90000', '88000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/6015569090e8f.png', 1, NULL, 1, NULL, 1, '2021-01-30 06:52:33', '2021-01-30 11:07:32'),
(2, 1, 1, 8, 7, 'samsung a31', 'সামসাং এ ৩১', 'samsung-a31', 'সামসাং-এ-৩১', 'pp-02', 40, 'smart phone', 'স্মার্ট ফোন', '5.5', '৫.৫', 'red,green', 'লাল,সবুজ', '20990', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/6015578ce3e2a.png', NULL, 1, NULL, 1, 1, '2021-01-30 06:56:45', '2021-01-30 06:56:45'),
(3, 8, 1, 5, 1, 'ideapad', 'আইডিয়া পেড', 'ideapad', 'আইডিয়া-পেড', 'pp-03', 60, 'laptop', 'ল্যাপটপ', '14', '১৪', 'silver,black', 'সিল্ভার,কালো', '39000', '37000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/601558e3583a1.png', 1, 1, NULL, NULL, 1, '2021-01-30 07:02:28', '2021-01-30 11:07:05'),
(4, 9, 2, 1, 14, 'staylis panjabi', 'স্টায়লিস পাঞ্জাবি', 'staylis-panjabi', 'স্টায়লিস-পাঞ্জাবি', 'pp-04', 60, 'men', 'পুরুশ', '40,42,44', '৪০,৪২,৪৪', 'red,green,blue', 'লাল,সবুজ,নীল', '1500', '1400', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/60155b2167fd1.jpg', 1, 1, 1, 1, 1, '2021-01-30 07:12:01', '2021-01-30 11:06:43'),
(5, 9, 2, 2, 18, 'black plain burkha', 'কালো বোরখা', 'black-plain-burkha', 'কালো-বোরখা', 'pp-05', 20, 'burkha', 'বোরখা', '40,42', '৪০,৪২', 'black', 'কালো', '1700', '1650', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/60155d5522c10.jpg', 1, 1, 1, 1, 1, '2021-01-30 07:21:25', '2021-01-30 11:06:16'),
(6, 9, 2, 3, 20, 'staylis jeans', 'স্টায়লিস জিন্স', 'staylis-jeans', 'স্টায়লিস-জিন্স', 'pp-06', 30, 'pant', 'প্যান্ট', '28,29', '28,29', 'red,black', 'লাল,কালো', '1200', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/601561d3629fc.jpg', 1, 1, NULL, NULL, 1, '2021-01-30 07:40:35', '2021-01-30 08:07:17'),
(7, 10, 3, 11, 30, 'staylis shoes', 'স্টায়লিস সু', 'staylis-shoes', 'স্টায়লিস-সু', 'pp-07', 26, 'shoe', 'জুতা', '40,42', '৪০,৪২', 'black,white', 'কালো,সাদা', '1050', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/601567f342603.jpg', 1, NULL, 1, NULL, 1, '2021-01-30 08:06:43', '2021-01-31 03:23:40'),
(8, 10, 3, 12, 27, 'slipar', 'স্লিপার', 'slipar', 'স্লিপার', 'pp-08', 35, 'slipar', 'স্লিপার', '53,54', '৫৩,৫৪', 'black,white', 'কালো,সাদা', '300', '250', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/6015695648c51.jpg', 1, NULL, NULL, NULL, 1, '2021-01-30 08:12:38', '2021-01-30 11:05:33'),
(9, 11, 3, 12, 32, 'styllis hill', 'স্টায়লিস হিল', 'styllis-hill', 'স্টায়লিস-হিল', 'pp-09', 45, 'hill', 'হিল', '41,42', '৪১,৪২', 'black,red', 'কালো,লাল', '2500', '2300', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', '<span style=\"background-color: rgb(255, 255, 0);\">                                            আমার</span> বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/60156b19d2cf4.jpg', NULL, 1, NULL, 1, 1, '2021-01-30 08:20:10', '2021-01-31 03:33:10'),
(10, 6, 1, 8, 8, 'realme 5i', 'রিয়েলমি ৫ আই', 'realme-5i', 'রিয়েলমি-৫-আই', 'pp-10', 40, 'phone', 'ফোন', '6.3', '৬.৩', 'green,blue', 'সবুজ,নীল', '12990', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?\r\n                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।\r\n\r\nবাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।', 'uploads/product/thumbnail/60156c3093930.jpg', NULL, 1, NULL, 1, 1, '2021-01-30 08:24:48', '2021-01-30 08:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(3, 1, 'rajbari', '2021-02-04 09:07:14', '2021-02-04 09:07:14'),
(4, 3, 'potuyakhali', '2021-02-04 09:07:38', '2021-02-04 09:07:38'),
(5, 1, 'manikgonj', '2021-02-04 09:08:29', '2021-02-04 09:08:29'),
(6, 1, 'faridpur', '2021-02-04 09:08:45', '2021-02-04 09:08:45'),
(7, 1, 'tangail', '2021-02-04 09:09:01', '2021-02-04 09:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'dhaka', '2021-02-04 08:16:37', '2021-02-04 08:16:37'),
(3, 'barisal', '2021-02-04 09:02:09', '2021-02-04 09:02:09'),
(4, 'rangpur', '2021-02-04 09:02:14', '2021-02-04 09:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'shadarpur', '2021-02-04 09:37:37', '2021-02-04 09:57:20'),
(3, 1, 3, 'baliyakandi', '2021-02-04 09:57:38', '2021-02-04 09:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `silders`
--

CREATE TABLE `silders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_bn` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `silders`
--

INSERT INTO `silders` (`id`, `title_en`, `title_bn`, `description_en`, `description_bn`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'new collection', 'নতুন কালেকশন', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'লোরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য।', 'uploads/slider/60142a1c46a0a.jpg', 1, '2021-01-29 09:30:36', NULL),
(2, 'women fashion', 'মহিলাদের ফ্যাশন', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'লোরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য।', 'uploads/slider/60142a2999607.jpg', 1, '2021-01-29 09:30:49', NULL),
(3, NULL, NULL, NULL, NULL, 'uploads/slider/601534110c4ac.jpg', 1, '2021-01-30 04:25:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_bn`, `subcategory_slug_en`, `subcategory_slug_bn`, `created_at`, `updated_at`) VALUES
(1, 2, 'Men', 'পুরুষ', 'men', 'পুরুষ', '2021-01-29 09:53:15', '2021-01-29 09:53:15'),
(2, 2, 'women', 'মহিলা', 'women', 'মহিলা', '2021-01-29 09:53:49', '2021-01-29 09:53:49'),
(3, 2, 'boyes', 'ছেলে', 'boyes', 'ছেলে', '2021-01-29 09:54:22', '2021-01-29 09:54:22'),
(4, 2, 'girls', 'মেয়ে', 'girls', 'মেয়ে', '2021-01-29 09:54:43', '2021-01-29 09:54:43'),
(5, 1, 'laptop', 'ল্যাপটপ', 'laptop', 'ল্যাপটপ', '2021-01-29 09:55:31', '2021-01-29 09:55:31'),
(6, 1, 'desktop', 'ডেক্সটপ', 'desktop', 'ডেক্সটপ', '2021-01-29 09:55:57', '2021-01-29 09:55:57'),
(7, 1, 'camere', 'ক্যামেরা', 'camere', 'ক্যামেরা', '2021-01-29 09:56:31', '2021-01-29 09:56:31'),
(8, 1, 'mobile', 'মোবাইল', 'mobile', 'মোবাইল', '2021-01-29 09:57:02', '2021-01-29 09:57:02'),
(9, 3, 'men', 'পুরুষ', 'men', 'পুরুষ', '2021-01-30 07:50:48', '2021-01-30 07:50:48'),
(10, 3, 'boys', 'ছেলে', 'boys', 'ছেলে', '2021-01-30 07:51:12', '2021-01-30 07:51:12'),
(11, 3, 'girls', 'মেয়ে', 'girls', 'মেয়ে', '2021-01-30 07:51:50', '2021-01-30 07:51:50'),
(12, 3, 'women', 'মহিলা', 'women', 'মহিলা', '2021-01-30 07:52:18', '2021-01-30 07:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `subsubcategories`
--

CREATE TABLE `subsubcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subsubcategories`
--

INSERT INTO `subsubcategories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name_en`, `subsubcategory_name_bn`, `subsubcategory_slug_en`, `subsubcategory_slug_bn`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'gaming', 'গেমিং', 'gaming', 'গেমিং', '2021-01-29 10:06:15', '2021-01-29 10:06:15'),
(2, 1, 5, 'apple', 'অ্যাপল', 'apple', 'অ্যাপল', '2021-01-29 10:06:59', '2021-01-29 10:06:59'),
(3, 1, 5, 'dell', 'ডেল', 'dell', 'ডেল', '2021-01-29 10:07:20', '2021-01-29 10:07:20'),
(4, 1, 5, 'lenovo', 'লেনোভো', 'lenovo', 'লেনোভো', '2021-01-29 10:08:02', '2021-01-29 10:08:02'),
(5, 1, 5, 'asus', 'আসুস', 'asus', 'আসুস', '2021-01-29 10:09:34', '2021-01-29 10:09:34'),
(6, 1, 8, 'apple', 'অ্যাপল', 'apple', 'অ্যাপল', '2021-01-29 10:11:16', '2021-01-29 10:11:16'),
(7, 1, 8, 'samsung', 'সামসং', 'samsung', 'সামসং', '2021-01-29 10:12:20', '2021-01-29 10:12:20'),
(8, 1, 8, 'realme', 'রিয়েলমি', 'realme', 'রিয়েলমি', '2021-01-29 10:13:12', '2021-01-29 10:13:12'),
(9, 1, 8, 'vivo', 'ভিভো', 'vivo', 'ভিভো', '2021-01-29 10:13:41', '2021-01-29 10:13:41'),
(10, 1, 6, 'router and modem', 'রাউটার এবং মডেম', 'router-and-modem', 'রাউটার-এবং-মডেম', '2021-01-29 10:16:47', '2021-01-29 10:16:47'),
(11, 1, 6, 'cpu and processor', 'সিপিইউ এবং প্রসেসর', 'cpu-and-processor', 'সিপিইউ-এবং-প্রসেসর', '2021-01-29 10:17:38', '2021-01-29 10:17:38'),
(12, 1, 7, 'lens', 'লেন্স', 'lens', 'লেন্স', '2021-01-29 10:18:12', '2021-01-29 10:18:12'),
(13, 1, 7, 'flim and camera', 'ফিল্ম ক্যামেরা', 'flim-and-camera', 'ফিল্ম-ক্যামেরা', '2021-01-29 10:19:23', '2021-01-29 10:19:23'),
(14, 2, 1, 'panjabi', 'পাঞ্জাবি', 'panjabi', 'পাঞ্জাবি', '2021-01-29 10:20:02', '2021-01-29 10:20:02'),
(15, 2, 1, 'shirt', 'শার্ট', 'shirt', 'শার্ট', '2021-01-29 10:20:30', '2021-01-29 10:20:30'),
(16, 2, 1, 'pant', 'প্যান্ট', 'pant', 'প্যান্ট', '2021-01-29 10:20:56', '2021-01-29 10:20:56'),
(17, 2, 2, 'handbag', 'হ্যান্ডব্যাগ', 'handbag', 'হ্যান্ডব্যাগ', '2021-01-29 10:21:40', '2021-01-29 10:21:40'),
(18, 2, 2, 'borkha', 'বোরখা', 'borkha', 'বোরখা', '2021-01-29 10:22:30', '2021-01-29 10:22:30'),
(19, 2, 3, 'toys and gemes', 'খেলনা এবং গেম', 'toys-and-gemes', 'খেলনা-এবং-গেম', '2021-01-29 10:24:03', '2021-01-29 10:24:03'),
(20, 2, 3, 'jeans', 'জিন্স', 'jeans', 'জিন্স', '2021-01-29 10:24:52', '2021-01-29 10:24:52'),
(21, 2, 4, 'shorts', 'শর্টস', 'shorts', 'শর্টস', '2021-01-29 10:26:00', '2021-01-29 10:26:00'),
(22, 2, 4, 'bags', 'ব্যাগ', 'bags', 'ব্যাগ', '2021-01-29 10:26:53', '2021-01-29 10:26:53'),
(23, 2, 4, 'sandals', 'স্যান্ডেল', 'sandals', 'স্যান্ডেল', '2021-01-29 10:27:29', '2021-01-29 10:27:29'),
(24, 3, 9, 'sendal', 'সেন্ডাল', 'sendal', 'সেন্ডাল', '2021-01-30 07:54:24', '2021-01-30 07:54:24'),
(25, 3, 10, 'sandals', 'সেন্ডাল', 'sandals', 'সেন্ডাল', '2021-01-30 07:54:57', '2021-01-30 07:54:57'),
(26, 3, 11, 'sandals', 'সেন্ডাল', 'sandals', 'সেন্ডাল', '2021-01-30 07:55:24', '2021-01-30 07:55:24'),
(27, 3, 12, 'sandals', 'সেন্ডাল', 'sandals', 'সেন্ডাল', '2021-01-30 07:55:36', '2021-01-30 07:55:36'),
(28, 3, 9, 'kets', 'কেটস', 'kets', 'কেটস', '2021-01-30 07:56:24', '2021-01-30 07:56:24'),
(29, 3, 10, 'kets', 'কেটস', 'kets', 'কেটস', '2021-01-30 07:56:48', '2021-01-30 07:56:48'),
(30, 3, 11, 'kets', 'কেটস', 'kets', 'কেটস', '2021-01-30 07:56:58', '2021-01-30 07:56:58'),
(31, 3, 12, 'kets', 'কেটস', 'kets', 'কেটস', '2021-01-30 07:57:11', '2021-01-30 07:57:11'),
(32, 3, 12, 'hill', 'হিল', 'hill', 'হিল', '2021-01-30 08:17:36', '2021-01-30 08:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `isban` tinyint(4) NOT NULL DEFAULT '0',
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `isban`, `last_seen`, `email`, `phone`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md.Ashanur Rahman', 1, 0, NULL, 'ashanour009@gmail.com', '01866936562', 'uploads/admin_images/20210129152423.jpg', NULL, '$2y$10$NJ3atdXHEKvnTU9kcaSste0XPapAKQ7nbd6wTUDnhSBbUBLmqH2o.', 'jTyovjVgSyaqORf8B3MIPAS2eH1dQLAeBxfccEUTX9uYzbaaA22Vn8xrtCzB', '2021-01-29 09:20:06', '2021-02-10 05:55:45'),
(2, 'Md.Nasim', 2, 0, '2021-03-03 18:38:02', 'nasim009@gmail.com', '01866936562', 'uploads/users_images/20210211133330.jpg', NULL, '$2y$10$YzUsseBX4VjwZSuOAPZSNe6sOicmfJ7Z2eRB26NNZ7h7S2DCixWQe', 'QNGXmGo4MsXaMdnEeHp4DoeonreDWHuzBE8KE0kampklQa7IpxnmbHdAjAAq', '2021-02-02 23:21:41', '2021-03-03 12:38:02'),
(3, 'Md.Rasel Hossian', 2, 0, NULL, 'rasel009@gmail.com', '01866936562', NULL, NULL, '$2y$10$0lSJHJAG7EF4fGt.2gqv3OG.fJMVwlO.i6dncD8MQm3q5vDxx0GVa', NULL, '2021-02-11 08:45:49', '2021-03-03 11:40:04');

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
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(13, 2, 6, '2021-02-03 03:17:29', NULL),
(14, 2, 2, '2021-02-03 07:58:52', NULL),
(15, 2, 9, '2021-02-05 10:53:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `multiimgs`
--
ALTER TABLE `multiimgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `silders`
--
ALTER TABLE `silders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `multiimgs`
--
ALTER TABLE `multiimgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `silders`
--
ALTER TABLE `silders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
