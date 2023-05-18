-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2023 at 04:01 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merit_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnewdocuments`
--

DROP TABLE IF EXISTS `addnewdocuments`;
CREATE TABLE IF NOT EXISTS `addnewdocuments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `addnew_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addnewdocuments`
--

INSERT INTO `addnewdocuments` (`id`, `addnew_id`, `docname`, `upd`, `created_at`, `updated_at`) VALUES
(19, '31', 'Election Card', 'images/New-valuation/nv50801681464907.jpeg', '2023-03-24 00:21:00', '2023-03-24 00:21:00'),
(18, '30', 'Adhar card', 'C:\\wamp64\\tmp\\phpE9A.tmp', '2023-03-24 00:14:11', '2023-03-24 00:14:11'),
(17, '29', 'Adhar card', 'C:\\wamp64\\tmp\\phpF959.tmp', '2023-03-24 00:10:49', '2023-03-24 00:10:49'),
(15, '27', 'Election Card', 'C:\\wamp64\\tmp\\php8800.tmp', '2023-03-23 07:19:59', '2023-03-23 07:19:59'),
(10, '22', 'xwsxwsx', 'C:\\wamp64\\tmp\\phpBE17.tmp', '2023-03-23 06:44:10', '2023-03-23 06:44:10'),
(11, '23', 'sdfc', 'C:\\wamp64\\tmp\\php8AB3.tmp', '2023-03-23 06:59:14', '2023-03-23 06:59:14'),
(12, '24', 'Pan Card', 'C:\\wamp64\\tmp\\php9DC3.tmp', '2023-03-23 07:05:52', '2023-03-23 07:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

DROP TABLE IF EXISTS `add_news`;
CREATE TABLE IF NOT EXISTS `add_news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middelname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valuation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `associatesbanks_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_executive_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assistant_valuer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_manager_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_head_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_cont_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `valuation_id` (`valuation_id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_news`
--

INSERT INTO `add_news` (`id`, `firstname`, `middelname`, `lastname`, `valuation_id`, `associatesbanks_id`, `product_id`, `location_id`, `area_id`, `field_executive_id`, `assistant_valuer_id`, `technical_manager_id`, `technical_head_id`, `contact_no`, `alt_cont_no`, `address`, `city`, `state`, `document_name`, `pincode`, `longitude`, `latitute`, `tags`, `date`, `comment`, `status`, `image`, `created_at`, `updated_at`) VALUES
(31, 'Shree', 'harish', 'Jadhav', '1104', '16', '21', '13', '24', '37', 'Select Assistant Valuer', '23', 'Select Technical Head', '86567567567', '567567567567', 'OldBypass road behind meher baba center , Amravati', 'Amravati', 'Maharashtra', NULL, '444606', '77.125', '23.1256', 'near temple', '2023-03-29', 'complete till 29 feb', 'ongoing', '[\"ne35201683381990.png\"]', '2023-03-24 00:21:00', '2023-05-09 00:46:38'),
(67, 'Mohin', 'Riley Keith', 'Khan', '10001', '16', '20', '14', '20', '46', 'Select Assistant Valuer', '56', '57', 'Nam voluptas aperiam', 'In fugiat et occaeca', 'Id labore voluptate', 'Et est molestias qu', 'Dolores vel ducimus', '[\"demo\"]', 'Illo nulla ea eum in', 'Aut sit ex velit de', 'Perspiciatis pariat', 'Enim illo proident', '1985-09-04', 'Aliqua Dolor aut do', 'ongoing', '[\"ne35201683381990.png\"]', '2023-05-06 08:36:30', '2023-05-06 08:36:30'),
(68, 'Sanjana', 'Wesley Meyers', 'Sheikh', '99999', '19', '21', '14', '20', '27', 'Select Assistant Valuer', '56', '57', '1245236589', '4521365896', 'Laboris nihil deseru', 'Nagpur', 'ANDAMAN AND NICOBAR ISLANDS', '[\"Test\",\"Demo\"]', '444601', 'Itaque ad laborum S', 'Placeat est aliqua', 'Beatae neque molesti', '1980-07-13', 'all document', 'ongoing', '[\"ne2601683565558.png\",\"ne61811683565558.jpeg\"]', '2023-05-08 11:35:58', '2023-05-08 11:35:58'),
(69, 'Herrod', 'Cassandra Tran', 'Hicks', '14011', '16', '20', '13', '23', '27', '68', '69', '59', 'Ullam distinctio Vo', 'Iusto sunt eiusmod a', 'Excepturi cillum qui', 'Ipsum sed quod aperi', 'Et ut est aliquam e', '[\"Reiciendis voluptati\"]', 'Odit sed inventore i', 'Modi laborum Archit', 'Illum et ea mollit', 'Alias repudiandae au', '2006-01-24', 'Sunt consectetur ex', 'ongoing', '[\"ne25801684406244.png\"]', '2023-05-18 05:07:24', '2023-05-18 05:21:02'),
(70, 'Neve', 'Octavius Pace', 'Rose', '101010', '20', 'Select Product', '13', '23', '63', '68', '69', '59', 'Est temporibus quib', 'Porro pariatur Sit', 'Sint laborum Cupidi', 'Ipsum nostrum except', 'Veritatis minim sit', NULL, 'Ipsa nihil porro de', 'Consequuntur dicta c', 'Commodi facere molli', 'Tempora est dolores', '2021-12-01', 'Mollitia ullam deser', 'Select', '[]', '2023-05-18 10:17:53', '2023-05-18 10:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `location_id`, `area`, `created_at`, `updated_at`) VALUES
(25, 17, 'near aiyappa temple', '2023-03-24 03:34:59', '2023-03-24 03:34:59'),
(24, 13, 'Rajapeth', '2023-03-23 21:11:41', '2023-03-23 21:11:41'),
(23, 13, 'oldbypass', '2023-03-23 21:11:34', '2023-03-23 21:11:34'),
(22, 15, 'Dharampeth', '2023-03-23 11:25:27', '2023-03-23 11:25:27'),
(21, 15, 'Jaripatka', '2023-03-23 11:25:12', '2023-03-23 11:25:12'),
(20, 14, 'Street line', '2023-03-23 11:11:49', '2023-03-23 11:11:49'),
(28, 14, 'Fashion street', '2023-04-14 04:02:42', '2023-04-14 04:02:42'),
(48, 15, 'near aiyappa temple', '2023-04-29 02:45:16', '2023-04-29 02:45:16'),
(61, 17, 'Thane', '2023-05-08 11:16:02', '2023-05-08 11:16:02'),
(85, 13, 'belpura', '2023-05-12 07:21:43', '2023-05-12 07:21:43'),
(86, 17, 'haji-ali', '2023-05-15 04:39:22', '2023-05-15 04:39:22'),
(83, 15, 'Taj-Baag', '2023-05-12 05:33:21', '2023-05-12 05:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `associatesbanks`
--

DROP TABLE IF EXISTS `associatesbanks`;
CREATE TABLE IF NOT EXISTS `associatesbanks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankbranch` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_no` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associatesbanks`
--

INSERT INTO `associatesbanks` (`id`, `bankname`, `contactperson`, `mobile`, `email`, `bankaddress`, `bankbranch`, `gst_no`, `city`, `state`, `pincode`, `userid`, `password`, `created_at`, `updated_at`) VALUES
(17, 'YesBank', 'Pooja', '6564657788', 'shiya@gmail.com', 'OldBypass road behind meher baba center , Amravati', 'Rukiminigaar', '7889', 'Amravati', 'Maharashtra', '444606', '103', '$2y$10$wLciJ5LBZwRElCUcEoeg7Ouih/HSnSI9BqAlOF0CvKv9NTejftW5e', '2023-03-23 10:50:25', '2023-03-23 10:59:07'),
(18, 'YesBank', 'Shree', '6564657788', 'shree@gmail.com', 'OldBypass road behind meher baba center , Amravati', 'Rukiminigaar', '7889', 'Yavatmal', 'Maharashtra', '444606', '102', '$2y$10$ESSxIdSMHqLU0DjP9en9ouSP8U1tEx.r4HzrVVmHmUhRFyZSBig7u', '2023-03-23 10:52:16', '2023-03-23 10:52:16'),
(19, 'YesBank', 'Shiya', '6564657788', 'shiya@gmail.com', 'OldBypass road behind meher baba center , Amravati', 'Rukiminigaar', '7889', 'Amravati', 'Maharashtra', '444606', '105', '$2y$10$ckBC2RzPHCsmCBRjuTspB.JlYMdFV5T/okPMUbCZZKx9.lCxqvyGO', '2023-03-23 10:53:28', '2023-03-23 10:53:28'),
(16, 'HDFC', 'Ram Yadav', '8899000098', 'ram@gmail.com', 'Rajkamal Chowk, Amravati', 'ShyamChock', '8990', 'Amravati', 'Maharashtra', '444606', '104', '$2y$10$o8yXyNDYFXTEjhcSddEBJevTHJS9n5sW00JNvAXkRZL7/LlLJtXPW', '2023-03-23 10:49:12', '2023-03-23 10:49:12'),
(20, 'roddetaniya@gmail.com', 'TANIYA Umesh RODDE', '07620183685', 'roddetaniya@gmail.com', 'OldBypass road behind meher baba center , Amravati', 'Rukiminigaar', '76767', 'Amravati', 'Maharashtra', '444606', '145', '$2y$10$psuP/BWVBAYBKgcSrAzqguCIFhqv0JYNjbeE6/iS4hMolbrL9xQSa', '2023-04-15 07:06:02', '2023-04-15 07:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

DROP TABLE IF EXISTS `branchs`;
CREATE TABLE IF NOT EXISTS `branchs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`id`, `branch_name`, `prefix`, `location_id`, `area_id`, `created_at`, `updated_at`) VALUES
(14, 'Maharashtra', 'MH', '13', '[\"24\",\"23\"]', '2023-03-23 21:11:59', '2023-03-24 01:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Interior', '2023-03-17 06:34:59', '2023-03-17 06:34:59'),
(3, 'Exteriors', '2023-03-18 00:51:37', '2023-03-23 12:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'YES bank', '2023-03-11 02:30:50', '2023-03-11 02:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `employee_registraions`
--

DROP TABLE IF EXISTS `employee_registraions`;
CREATE TABLE IF NOT EXISTS `employee_registraions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `area_id` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adhar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_registraions`
--

INSERT INTO `employee_registraions` (`id`, `user_id`, `role_name_id`, `name`, `contact`, `email`, `bankname`, `ifsc_code`, `account_no`, `location_id`, `area_id`, `user_name`, `password`, `adhar`, `pan`, `photo`, `other`, `created_at`, `updated_at`) VALUES
(23, '0', 0, 'Nehal Yadav', '7564545545', 'nehal@gmail.com', 'SBI', 'SBIN0074456', '3453453453', 13, '24', '0', '', '1679636902.pdf', '1679636902.pdf', '1679636902.jpeg', '1679636902.png', '2023-03-24 00:18:22', '2023-03-24 00:18:22'),
(22, '0', 7, 'Ram', '9876373833', 'ram@gmail.com', 'YesBank', 'YES9887', '97765556778', 14, '20', '0', '', '1679636065.pdf', '1679636065.pdf', '1679636065.jpeg', '1679636065.jpeg', '2023-03-24 00:04:25', '2023-03-24 00:04:25'),
(21, '0', 0, 'Sinba', '9767546456', 'pooja@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '21', '0', '', '1679635996.pdf', '1679635996.pdf', '1679635996.pdf', '1679635996.jpeg', '2023-03-24 00:03:16', '2023-03-24 00:03:16'),
(19, '0', 0, 'Rishi', '7620183695', 'rishi@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '20', '0', '', '1679626307.pdf', '1679626307.jpeg', '1679626307.pdf', '1679626307.pdf', '2023-03-23 21:21:47', '2023-03-23 21:21:47'),
(20, '0', 0, 'Priya', '7620183695', 'priya@gmail.com', 'YesBank', 'YES9887', '97765556778', 14, '20', '0', '', '1679635941.pdf', '1679635941.pdf', '1679635941.pdf', '1679635941.pdf', '2023-03-24 00:02:21', '2023-03-24 00:02:21'),
(24, '0', 0, 'Hector', 'Carl', 'mijoqifyw@mailinator.com', 'Dillon', 'Rhoda', 'Quinn', 14, '20', '0', '', '1681714885.jpeg', '1681714885.jpeg', '1681714885.png', '1681714885.jpeg', '2023-04-17 01:31:25', '2023-04-17 01:31:25'),
(25, '0', 0, 'donur', 'bijuby', 'boji@mailinator.com', 'gygin', '789', '9987', 15, '20', '0', '', '1681722364.pdf', '1681722364.jpeg', '1681722364.jpeg', '1681722364.jpeg', '2023-04-17 03:36:04', '2023-04-17 03:36:04'),
(26, '0', 0, 'kyfidep', 'fenohelud', 'nikato@mailinator.com', 'veguduj', 'gyjesyne', 'heseve', 15, '28', 'kyfidep123', '$2y$10$ivDzFBb3KdCpt.Sr4d1PyOQKfF.FZ6iGdLMTwV9yD8600fm45qtb.', '1681722798.jpeg', '1681722798.jpeg', '1681722798.pdf', '1681722798.pdf', '2023-04-17 03:43:18', '2023-04-17 03:43:18'),
(27, '0', 6, 'taniya', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'YES9887', '97765556778', 13, '25', 'opera123', '$2y$10$.CCKdIWd1lJfLSaVmQVLpeBMVGPrEf8M/53j9WwjPMPS01wj3aRHe', '1681806798.jpeg', '1681806798.jpeg', '1681806798.png', '1681806798.png', '2023-04-18 03:03:18', '2023-04-18 03:03:18'),
(28, '110', 6, 'xexig', 'xuwacep', 'hyxezyzap@mailinator.com', 'jorabasora', 'tuqapam', 'padenivo', 14, '29', '', '', '1681828239.jpeg', '1681828239.pdf', '1681828239.jpeg', '1681828239.png', '2023-04-18 09:00:39', '2023-04-18 09:00:39'),
(29, '110', 6, 'xexig', 'xuwacep', 'hyxezyzap@mailinator.com', 'jorabasora', 'tuqapam', 'padenivo', 14, '29', '', '', '1681828280.jpeg', '1681828280.pdf', '1681828280.jpeg', '1681828280.png', '2023-04-18 09:01:20', '2023-04-18 09:01:20'),
(30, '111', 6, 'pooja', 'zuhypiga', 'wopyzedate@mailinator.com', 'tyxysibafu', 'fuhaxymi', 'fytofipin', 15, '22', '', '', '1681829271.jpeg', '1681829271.jpeg', '1681829271.jpeg', '1681829271.jpeg', '2023-04-18 09:17:51', '2023-04-18 09:17:51'),
(31, '112', 6, 'Ridhima', 'novyg', 'syrixudu@mailinator.com', 'hetufufu', 'sijehij', 'lohicapat', 17, '19', '', '', '1681829559.jpeg', '1681829559.jpeg', '1681829559.jpeg', '1681829559.pdf', '2023-04-18 09:22:39', '2023-04-18 09:22:39'),
(32, '112', 6, 'Ridhima', 'novyg', 'syrixudu@mailinator.com', 'hetufufu', 'sijehij', 'lohicapat', 13, '21', '', '', '1681829616.jpeg', '1681829616.jpeg', '1681829616.jpeg', '1681829616.pdf', '2023-04-18 09:23:36', '2023-04-18 09:23:36'),
(33, '114', 6, 'Riya', 'qowej', 'byge@mailinator.com', 'kytezuk', 'jocefox', 'gyxomudyc', 14, '19', '', '', '1681830043.pdf', '1681830043.pdf', '1681830043.png', '1681830043.jpeg', '2023-04-18 09:30:43', '2023-04-18 09:30:43'),
(34, '777', 9, 'Navin', '7620183695', 'jutokibosi@mailinator.com', 'katajonumi', 'doqoxa', 'sujylo', 17, '25', '', '', '1681915370.jpeg', '1681915370.jpeg', '1681915370.jpeg', '1681915370.pdf', '2023-04-19 09:12:50', '2023-04-19 09:12:50'),
(43, '34556', 14, 'Rucha', '77676768768', 'rucha@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '20', 'Rucha123', '$2y$10$l1D8NWL7uND.bTe4Kxfq/eOi.33o8DK6yMe7lpb3ko8NjD4Dzany6', '1682761880.jpg', '1682761880.jpg', '1682761880.jpg', '1682761880.jpg', '2023-04-29 04:21:20', '2023-04-29 04:21:20'),
(38, '123', 14, 'Aditya', '8769543456', 'aditya@gmail.com', 'YesBank', 'SBIN0076757', '97765556778', 14, '20', '', '', '1682760759.jpg', '1682760759.jpg', '1682760759.jpg', '1682760759.jpg', '2023-04-29 04:02:39', '2023-04-29 04:02:39'),
(39, '1233', 15, 'Mobofityd', '99887777678', 'malazaqipo@mailinator.com', 'jopygo', 'dizuzinak', 'waguq', 14, '20', '', '', '1682760898.jpg', '1682760898.jpg', '1682760898.jpg', '1682760898.jpg', '2023-04-29 04:04:58', '2023-04-29 04:04:58'),
(40, '9877', 16, 'Saqazo', '7665667888', 'hozazuru@mailinator.com', 'danywase', 'vywyz', 'sepis', 14, '20', '', '', '1682761005.jpg', '1682761005.jpg', '1682761005.jpg', '1682761005.jpg', '2023-04-29 04:06:45', '2023-04-29 04:06:45'),
(41, '9877', 17, 'Hoqywab', '765754745635', 'vojex@mailinator.com', 'pogese', 'gelaf', '453453454353', 17, '30', '', '', '1682761079.jpg', '1682761079.jpg', '1682761079.jpg', '1682761079.jpg', '2023-04-29 04:07:59', '2023-04-29 04:07:59'),
(42, '765745', 18, 'Preet', '98675756454', 'preet@gmail.com', 'SBI', '896576878', '878687', 13, '20', '', '', '1682761182.jpg', '1682761182.jpg', '1682761182.jpg', '1682761182.jpg', '2023-04-29 04:09:42', '2023-04-29 04:09:42'),
(44, '112', 14, 'Priya', '7620183695', 'priya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '20', 'Priya123', '$2y$10$yf1z.epAmG68xGeTqa6gieGPAuVSh2dHyIoXD4Y9tyytKgRI8h3o2', '1682763219.jpg', '1682763219.jpg', '1682763219.jpg', '1682763219.jpg', '2023-04-29 04:43:39', '2023-04-29 04:43:39'),
(45, '123', 20, 'Jay', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '23', 'admin123', '$2y$10$wipJ.PF8trf0px6nA7y5Z.tRuR9k2M3ka1BklLKxSGMI/bNUgeuOy', '1682767789.jpg', '1682767789.jpg', '1682767789.jpg', '1682767789.jpg', '2023-04-29 05:59:49', '2023-04-29 05:59:49'),
(46, '112', 27, 'Shri', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 13, '20', 'Shri123', '$2y$10$73kUFhNa5elZbMY55xuBoejCq2Q1mtTi1XCx.1AChoDK1lAc/pEEK', '1682772588.jpg', '1682772588.jpg', '1682772588.jpg', '1682772588.jpg', '2023-04-29 07:19:48', '2023-04-29 07:19:48'),
(47, '112', 27, 'Riya', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 13, '24', 'Riya123', '$2y$10$h1D5wqJtCyYlQIGc5LCrBOSp8fmd/mKvk5it.bjVoyj6tglHqYrLi', '1682779618.jpg', '1682779618.jpg', '1682779618.jpg', '1682779618.jpg', '2023-04-29 09:16:58', '2023-04-29 09:16:58'),
(48, '112', 32, 'Preet', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 13, '20', 'Preet123', '$2y$10$O2xTrSEDrAsRGACtPbeKYO1DYY71Ljo2WcY9cRlMoj8CoaBGctUFu', '1682853041.jpg', '1682853041.jpg', '1682853041.jpg', '1682853041.jpg', '2023-04-30 05:40:41', '2023-04-30 05:40:41'),
(49, '110', 32, 'Hayri', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '20', 'Hayri123', '$2y$10$rAfC7sQf4e4q6WnE58RVhOGOYND258A/5cXMxcHrW/91hTpB1wfFm', '1682853238.jpg', '1682853238.jpg', '1682853238.jpg', '1682853238.jpg', '2023-04-30 05:43:58', '2023-04-30 05:43:58'),
(50, '898989', 31, 'gayri', '787989809', 'hazumefasi@mailinator.com', 'SBI', 'SBIN0076757', '978674563452', 13, '20', 'gayri123', '$2y$10$a9iLySy19gFjKPPp/uZMMeEMH684/g223orjSAqYkwDfHssF4hgW6', '1682853630.jpg', '1682853630.jpg', '1682853630.jpg', '1682853630.jpg', '2023-04-30 05:50:30', '2023-05-12 06:27:20'),
(51, '112', 29, 'Game', '7620183695', 'roddetaniya@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 13, '30', 'Game123', '$2y$10$xTbMC245dAQ7tWNRPii6PO0vwpv7IBUwnXVblPCnDYH5Qtc21NAQC', '1682853990.jpg', '1682853990.jpg', '1682853990.jpg', '1682853990.jpg', '2023-04-30 05:56:30', '2023-04-30 05:56:30'),
(52, '123', 26, 'Rahul', '7865432345', 'rahul@gmail.com', 'YesBank', 'SBIN0076757', '97765556778', 15, '24', 'Rahul123', '$2y$10$wnNDB6Z/HZA9djiu9aL.M.SlPNdnlPuXPzUgbeAnfFuggKLvl7obW', '1683178316.jpeg', '1683178316.pdf', '1683178316.pdf', '1683178316.png', '2023-05-04 00:01:56', '2023-05-04 00:01:56'),
(53, '112', 29, 'Joy', '7620183695', 'joy@gmail.com', 'YesBank', 'YES0076757', '97765556778', 15, '24', 'Joy123', '$2y$10$xILhZoj9amuL05v90FtD9e4NB/9wxIapQXA87FnY0Y4pYrBESF7.i', '1683178474.jpeg', '1683178474.jpeg', '1683178474.jpeg', '1683178474.jpeg', '2023-05-04 00:04:34', '2023-05-04 00:04:34'),
(54, '110', 30, 'Aditi', '7620183695', 'aditi@gmail.com', 'SBI', 'SBIN0076757', '977655567778', 15, '24', 'Aditi123', '$2y$10$X8j.Ew4WGWULa6rELADYauafoLaoCvv6gC5Qrls.OJ6zhsdf1YnmC', '1683178652.jpeg', '1683178652.jpeg', '1683178652.jpeg', '1683178652.png', '2023-05-04 00:07:32', '2023-05-04 00:07:32'),
(55, '123', 31, 'Ram', '7620183695', 'ram@gnail.com', 'SBI', 'SBIN00767567', '97765556778', 15, '24', 'Ram123', '$2y$10$rLJianxjdrK.kacS2eDzl.3SduDkT85qXhON7oH0u.2Vugjo4Ks3u', '1683178764.jpeg', '1683178764.jpeg', '1683178764.png', '1683178764.jpeg', '2023-05-04 00:09:24', '2023-05-04 00:09:24'),
(56, '123', 29, 'Pooja123', '7865432344', 'pooja@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 15, '20', 'Pooja123', '$2y$10$sxqzcnn4d608JVhCcMDOC.KcgvCuTmSr2nrEIJSv4rDFJk3euKY3m', '1683179434.jpeg', '1683179434.jpeg', '1683179434.jpeg', '1683179434.jpeg', '2023-05-04 00:20:34', '2023-05-04 00:20:34'),
(57, '123', 27, 'Neha', '7620183695', 'neha@gmail.com', 'SBI', 'SBIN0076757', '97765556778', 14, '20', 'Neha123', '$2y$10$mXgkOVLI5PTn4J2Dt2i7mORPNYsTWSefSumLkIQ5uRafEhFxor3d2', '1683892535.jpeg', '1683179853.jpeg', '1683179853.jpeg', '1683179853.jpeg', '2023-05-04 00:27:33', '2023-05-12 06:27:08'),
(58, 'rocywiqav', 27, 'pyxavibeza', '1234567895', 'ceqiveda@mailinator.com', 'sebapi', 'betihuq', 'taholi', 14, '83', 'mujus', '$2y$10$5nNuJORBrpoB0.HKCEs5F.jp5p9Kk9Lc/NPlaGfNGsp4SjJf.W3.2', NULL, NULL, NULL, NULL, '2023-05-12 05:59:26', '2023-05-12 05:59:26'),
(59, 'zyfavufaru', 31, 'zamyc', '1225632415', 'zizoxyxam@mailinator.com', 'goramoca', 'zyxon', 'dukasaxyq', 13, '23', 'dafykulyd', '$2y$10$Wo7bxm0JnGkgJFIG757hv.gsZ0Gg/6tKdsl.0pfBIU.IEaek1f8da', NULL, NULL, NULL, NULL, '2023-05-12 06:03:59', '2023-05-12 06:03:59'),
(60, 'SS001', 25, 'Sharique Sheikh', '9579915551', 'xuqefulub@mailinator.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', '0001', '$2y$10$gKEjAQBmCm0K5hUOobzydeqRqXU5NRO0vvWEH6PELxI64CltfaJkq', NULL, NULL, NULL, NULL, '2023-05-17 00:01:09', '2023-05-17 00:01:09'),
(61, 'pypiwi', 25, 'mumico', 'kuhutako', 'datecote@mailinator.com', 'vepuni', 'gimimabyji', 'duzep', 17, '86', 'fikytylup', '$2y$10$K5iPRA8OsYoK9COBhVw6leTHct09wG09ffpP/63hNcKxF1uXjEEHK', NULL, NULL, NULL, NULL, '2023-05-17 06:52:45', '2023-05-17 06:52:45'),
(62, 'pypiwi', 25, 'mumico', 'kuhutako', 'datecote@mailinator.com', 'vepuni', 'gimimabyji', 'duzep', 17, '86', 'fikytylup', '$2y$10$85KZR91L5tBl/QhJx6WniuuQAfROkDGNx5kB3yEvWU6NI2bYlYBOu', NULL, NULL, NULL, NULL, '2023-05-17 06:53:35', '2023-05-17 06:53:35'),
(63, 'mm1001', 27, 'mohin khan', '9579915551', 'mm@gmail.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', 'mm1001', '$2y$10$E1OfvNtpy0S4h1nLeaVSbemS/yZykcYYvlNcLlCtqzmz9AfaWx6b.', NULL, NULL, NULL, NULL, '2023-05-17 06:58:34', '2023-05-17 06:58:34'),
(64, 'mm1001', 27, 'mohin khan', '9579915551', 'mm@gmail.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', 'mm1001', '$2y$10$VnzPIHsrt2P1pTlzN/xLheA8SXH0wo5RF6vWXG0UC1mRB/TOAInhG', NULL, NULL, NULL, NULL, '2023-05-17 06:58:53', '2023-05-17 06:58:53'),
(65, 'zogew', 27, 'ponocutej', 'joxijahuq', 'nedux@mailinator.com', 'pakyj', 'kavyzyl', 'zujowa', 14, '28', 'fapicujehi', '$2y$10$IThWUDo6vS/yENKvmNd2cu7IrtRv9vL27orJAh0heJ3dthATRSXDi', NULL, NULL, NULL, NULL, '2023-05-17 07:02:09', '2023-05-17 07:02:09'),
(66, 'admin', 26, 'admin', '1234567895', 'admin@gmail.com', 'SBI', 'SBIN00012', '123456789987', 13, '24', 'admin', '$2y$10$iLKl4jVp83JKtpBXDK2h0uMDDh9PBk9.mXQ7.qBhL3U6htsu7yoPu', NULL, NULL, NULL, NULL, '2023-05-17 07:40:18', '2023-05-17 07:40:18'),
(67, 'rr001', 29, 'Rishi', '9579915551', 'xuqefulub@mailinator.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', 'rr0001', '$2y$10$40qVFL0qy6uoqgGnIqrnhuK8ikhqGgThs2q9Khlk2b0oFh8o85tpm', NULL, NULL, NULL, NULL, '2023-05-17 10:19:02', '2023-05-17 10:19:02'),
(68, 'sh001', 29, 'shabnam', '9579915551', 'xuqefulub@mailinator.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', 'sh0001', '$2y$10$x1VcdLe9niBxU69dQw02/ObqayKzGRXq39tplUDMvcOZSEEJDhmeK', NULL, NULL, NULL, NULL, '2023-05-17 23:23:02', '2023-05-17 23:23:02'),
(69, 'tt0001', 30, 'taniya', '9579915551', 'xuqefulub@mailinator.com', 'SBI', 'SBIN00012', '123456789987', 13, '23', 'tt0001', '$2y$10$KqCryw0Ze8HvOz6Czn/SPO6r11BWhSJqm6pPmLF87hbEVWYQQGYNm', NULL, NULL, NULL, NULL, '2023-05-17 23:28:19', '2023-05-17 23:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `field_executives`
--

DROP TABLE IF EXISTS `field_executives`;
CREATE TABLE IF NOT EXISTS `field_executives` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `field_executives`
--

INSERT INTO `field_executives` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Taniya Rodde', '2023-03-11 04:41:55', '2023-03-11 04:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

DROP TABLE IF EXISTS `floors`;
CREATE TABLE IF NOT EXISTS `floors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floor`, `created_at`, `updated_at`) VALUES
(5, 'Second Floor', '2023-03-17 05:53:01', '2023-03-17 05:53:01'),
(7, 'Top Floor', '2023-03-17 06:18:58', '2023-03-23 12:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `locations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `locations`, `created_at`, `updated_at`) VALUES
(13, 'Amravati', '2023-03-17 01:53:01', '2023-03-17 01:53:01'),
(14, 'Pune', '2023-03-22 04:55:04', '2023-03-22 04:55:04'),
(15, 'Nagpur', '2023-03-22 04:55:43', '2023-03-22 04:55:43'),
(17, 'Mumbai', '2023-03-23 11:03:45', '2023-03-23 11:03:45');

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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_03_06_082036_create_products_table', 1),
(3, '2023_03_06_115113_create-locations-table', 2),
(4, '2023_03_09_064907_create_associatesbanks_table', 3),
(6, '2023_03_09_102137_create-areas-table', 4),
(7, '2023_03_09_121322_create-employee_registraions', 5),
(8, '2023_03_11_052754_create-propertys-table', 6),
(9, '2023_03_11_070451_create-clients-table', 7),
(10, '2023_03_11_080519_create-field_excecutives-table', 8),
(11, '2023_03_11_102114_create-technical_heads-table', 9),
(13, '2023_03_16_160953_create-branchs-table', 10),
(14, '2023_03_17_092330_create-floors-table', 11),
(15, '2023_03_17_102709_create-categorys-table', 12),
(16, '2023_03_17_162600_create-setting-tsble', 13),
(17, '2023_03_18_055924_create-tags-table', 14),
(19, '2023_03_18_093839_create-status-table', 15),
(20, '2023_03_20_122919_create-empdocuments-table', 16),
(21, '2023_03_27_072724_create_new_valuer_table', 17),
(22, '2023_04_17_093346_create-user_roles-table', 18),
(24, '2023_05_15_114258_create_user_permission_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `new_valuer`
--

DROP TABLE IF EXISTS `new_valuer`;
CREATE TABLE IF NOT EXISTS `new_valuer` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `valuation_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `property_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colony` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meter_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plot_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupancy_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupied_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `four_borders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whether_boundaries_matching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plot_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_width_in_feet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_structure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_on_boundaries_matching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `construction_stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_marginal_distance_in_feet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discription_of_property` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_met_at_site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_with_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_on_property` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deviation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_referenace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_visit` date DEFAULT NULL,
  `name_of_FE_visited_the_property_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_updated_by` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `valuation_id` (`valuation_id`),
  UNIQUE KEY `valuation_id_2` (`valuation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_valuer`
--

INSERT INTO `new_valuer` (`id`, `valuation_id`, `name`, `contact_no`, `property_type_id`, `property_address`, `address`, `road_name`, `colony`, `pin_code`, `landmark`, `meter_no`, `plot_area`, `up_area`, `GF`, `FF`, `SF`, `TF`, `occupancy_status`, `occupied_by`, `four_borders`, `whether_boundaries_matching`, `rate_range`, `plot_range`, `road_type`, `road_width_in_feet`, `type_of_structure`, `remark_on_boundaries_matching`, `lat`, `long`, `construction_stage`, `side_marginal_distance_in_feet`, `discription_of_property`, `person_met_at_site`, `relation_with_owner`, `remark_on_property`, `deviation`, `rate_referenace`, `date_of_visit`, `name_of_FE_visited_the_property_id`, `location_id`, `category_id`, `tag_id`, `file_name`, `file`, `image`, `status`, `reason`, `last_updated_by`, `created_at`, `updated_at`) VALUES
(62, 1104, 'Shree Jadhav', '86567567567', 10, NULL, 'OldBypass road behind meher baba center , Amravati', 'raiway station road', 'rukhniminagar', '444601', 'temple', '451265', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, 'N.A', 'cSelf + Tenant', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"3\",\"2\"]', '[\"15\",\"7\"]', '[\"ssss\",\"vvvvvv\"]', '[\"av21301683543060.pdf\",\"av82511683543060.pdf\"]', '[\"fe16701683546713.png\",\"fe14111683541814.png\"]', 'completed', 'All Perfect', 'Select', '2023-05-07 23:26:28', '2023-05-08 06:21:53'),
(67, 10001, 'Mohin Khan', 'Nam voluptas aperiam', 6, NULL, 'Id labore voluptate', 'raiway station road', 'rukhniminagar', '444601', 'temple', '451265', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, 'N.A', 'cSelf + Tenant', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', '[\"2\"]', '[\"6\"]', '[\"ss\"]', '[\"av74401683618910.pdf\"]', '[\"fe53101683541814.jpeg\",\"fe14111683541814.png\"]', 'ongoing', 'fffff', 'Select', '2023-05-08 05:00:14', '2023-05-09 02:26:37'),
(68, 99999, 'Sanjana Sheikh', '1245236589', 6, NULL, 'Laboris nihil deseru', 'raiway station road', 'rukhniminagar', '444601', 'temple', '451265', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, 'Occupied', 'Tenant Occupied', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', '[\"2\",\"3\",\"2\"]', '[\"6\",\"15\",\"17\"]', '[\"test\"]', '[\"av88801683721897.pdf\"]', '[\"fe51201683565962.png\",\"fe011683565962.jpeg\",\"fe8721683565963.jpeg\"]', 'completed', 'all ok', 'Select', '2023-05-08 11:42:43', '2023-05-10 07:01:37'),
(70, 14011, 'Herrod Hicks', '1236547896', 6, NULL, 'Excepturi cillum qui', 'raiway station road', 'rukhniminagar', '444601', 'temple', '451265', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, 'N.A', 'cSelf + Tenant', '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[null,null,null,null]', '[null,null,null,null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13', '[\"2\",\"3\"]', '[\"17\",\"7\"]', NULL, NULL, '[\"fe92501684407107.png\",\"fe66211684407107.jpeg\"]', 'ongoing', 'ok', 'Select', '2023-05-18 05:21:47', '2023-05-18 05:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `associatesbanks_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products`, `created_at`, `updated_at`, `associatesbanks_id`) VALUES
(21, 'Personal Loan', '2023-03-23 20:56:42', '2023-03-23 20:56:42', 18),
(20, 'HL-Constructions', '2023-03-23 20:54:38', '2023-03-23 20:59:53', 17);

-- --------------------------------------------------------

--
-- Table structure for table `propertys`
--

DROP TABLE IF EXISTS `propertys`;
CREATE TABLE IF NOT EXISTS `propertys` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertys`
--

INSERT INTO `propertys` (`id`, `property`, `created_at`, `updated_at`) VALUES
(6, '2BHK', '2023-03-16 10:15:08', '2023-03-17 10:35:16'),
(9, '1BHks', '2023-03-23 12:07:49', '2023-03-23 12:07:57'),
(10, 'House', '2023-03-28 01:57:48', '2023-03-28 01:57:48'),
(11, 'Amravati', '2023-04-21 00:45:53', '2023-04-21 00:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `documentation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_vist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant_valuer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_prepareation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `documentation`, `field_vist`, `assistant_valuer`, `report_prepareation`, `technical_head`, `bank`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2', '2', '1', '1', '2023-03-17 11:20:07', '2023-03-17 11:20:07'),
(2, 'ee', 'yess', 'yes', 'No', 'yes', 'Yes BAnk', '2023-04-14 04:31:15', '2023-04-14 04:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name_id` int(11) NOT NULL,
  `statu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `role_name_id`, `statu`, `created_at`, `updated_at`) VALUES
(6, 27, 'Processing', '2023-05-12 07:10:37', '2023-05-12 07:10:37'),
(7, 25, 'Ongoing', '2023-05-15 04:42:03', '2023-05-15 04:42:03'),
(8, 26, 'Processing', '2023-05-18 04:10:52', '2023-05-18 04:10:52'),
(9, 26, 'Ongoing', '2023-05-18 04:32:30', '2023-05-18 04:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `category_id`, `tag`, `created_at`, `updated_at`) VALUES
(16, 3, 'near hall', '2023-03-23 12:10:10', '2023-03-23 12:10:10'),
(7, 2, 'near window', '2023-03-18 02:52:29', '2023-03-18 02:52:29'),
(6, 3, 'near tree', '2023-03-18 02:46:55', '2023-03-18 02:46:55'),
(15, 2, 'near table', '2023-03-18 03:42:06', '2023-03-18 04:03:45'),
(17, 2, 'Hall', '2023-03-29 02:43:47', '2023-03-29 02:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `technical_heads`
--

DROP TABLE IF EXISTS `technical_heads`;
CREATE TABLE IF NOT EXISTS `technical_heads` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'unique user id',
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `role_name_id`, `user_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '112', 'Ridhima', '6', 'Ridhima123', 'syrixudu@mailinator.com', NULL, '$2y$10$ecoP9K/bHYeUp6gxX.DjAuuMOomIJWPqhNxtw5MDfHtnvATpqWVI.', NULL, '2023-04-18 09:23:37', '2023-04-18 09:23:37'),
(5, '113', 'Joy', '6', 'Joy123', 'qezuzyq@mailinator.com', NULL, '$2y$10$Jq3f8wILNZOLt39hJ8ezteQmM.EdSL6BkOP0FkmflAlKOEoeLu3de', NULL, '2023-04-18 09:27:56', '2023-04-18 09:27:56'),
(6, '114', 'Riya', '6', 'Riya123', 'byge@mailinator.com', NULL, '$2y$10$yFMPqaflUOOYXckPOxFJfO8EH19NbDZ/oLR2a9iYVRc9gMrldJj7O', NULL, '2023-04-18 09:30:43', '2023-04-18 09:30:43'),
(7, '777', 'Navin', '9', 'Navin123', 'jutokibosi@mailinator.com', NULL, '$2y$10$5bOxkod/3CMUDVjv.DpwvOvmWh7c8ZVwWK2iZLI5nEp0MU9ylNU3W', NULL, '2023-04-19 09:12:51', '2023-04-19 09:12:51'),
(8, '112', 'Prem', '9', 'Taniya', 'roddetaniya@gmail.com', NULL, '$2y$10$NBQRjvyx62dc4p34FtDA..RxcMdjExI4MKjPDe8dLAF427doYt8oW', NULL, '2023-04-21 00:52:23', '2023-04-21 00:52:23'),
(9, '909', 'mukupoqiqi', '12', 'mydebo', 'piduzyj@mailinator.com', NULL, '$2y$10$OebJ/gkzpISlEBxNjgA1suL4RHwu2A3Bt9ORhx0nDyFu48PphISha', NULL, '2023-04-21 01:08:25', '2023-04-21 01:08:25'),
(10, '112', 'Rucha', '27', 'Rucha123', 'ruch@gmail.com', NULL, '$2y$10$SihB3BllOjikGyg065wRQeGi.TB63Z1Mwm993sQSfALie7H.y2.S2', NULL, '2023-04-29 02:37:07', '2023-04-29 07:34:18'),
(11, '123', 'Aditya', '14', 'Aditya123', 'aditya@gmail.com', NULL, '$2y$10$ULwvXJLXlssrbeKlCivtV.63u3EIevwMkTGE0erBog.E6L9bhCflq', NULL, '2023-04-29 04:02:39', '2023-04-29 04:02:39'),
(12, '1233', 'Mobofityd', '15', 'Mobofityd123', 'malazaqipo@mailinator.com', NULL, '$2y$10$xktkqnjkh4SGfCl84lLvmuHtJwbjtNCuLomzwTBE.rlcYdWcWQaPa', NULL, '2023-04-29 04:04:58', '2023-04-29 04:04:58'),
(13, '9877', 'Saqazo', '16', 'Saqazo123', 'hozazuru@mailinator.com', NULL, '$2y$10$EvdITE7ve3mEdhqRdrFbhe46GVHcUOd3JaFvbOy3/IiU4kAhAbJwS', NULL, '2023-04-29 04:06:46', '2023-04-29 04:06:46'),
(14, '9877', 'Hoqywab', '17', 'Hoqywab123', 'vojex@mailinator.com', NULL, '$2y$10$EwZ.emi.kdO4gad2H0m0kuridq4E9xZJq8Az2UfWBktk7kIPVLNCO', NULL, '2023-04-29 04:07:59', '2023-04-29 04:07:59'),
(15, '765745', 'Preet', '18', 'Preet123', 'preet@gmail.com', NULL, '$2y$10$xDVSYxRS14G68Xi8KfaKmOeXv3OaolCMT.tyhfcQlq66whjQVcfxK', NULL, '2023-04-29 04:09:42', '2023-04-29 04:09:42'),
(16, '34556', 'Rucha', '14', 'Rucha123', 'rucha@gmail.com', NULL, '$2y$10$0JXJZl9S7awbg9Y38ACVUe6MCklRymJOcPih4IrjQWzTZz3E5Kcze', NULL, '2023-04-29 04:21:20', '2023-04-29 04:21:20'),
(17, '112', 'Priya', '14', 'Priya123', 'priya@gmail.com', NULL, '$2y$10$2TyKS0UAzGfCCBAq5175COttrFdt.Sgp1uK0TvOgWlm7gXCzlwXqu', NULL, '2023-04-29 04:43:39', '2023-04-29 04:43:39'),
(18, '123', 'Jay', '26', 'admin123', 'roddetaniya@gmail.com', NULL, '$2y$10$uOehqXMkUC48NqEcJnXRvu9IeYzOgGQQ/K9EvJZtLugi2UPo5jxsK', NULL, '2023-04-29 05:59:49', '2023-04-29 05:59:49'),
(19, '112', 'Shri', '27', 'Shri123', 'roddetaniya@gmail.com', NULL, '$2y$10$eDsUVSS5.bdo5mKmK8Ule.to/TuU/PACmbXTKkXMDd3y80c07ahX6', NULL, '2023-04-29 07:19:48', '2023-04-29 07:19:48'),
(20, '112', 'Riya', '27', 'Riya123', 'roddetaniya@gmail.com', NULL, '$2y$10$At49R.LLeJE9fHl/Cls39.bG9GuDOjpyC1jnSc9P4qcCZCXR3ntFi', NULL, '2023-04-29 09:16:58', '2023-04-29 09:16:58'),
(21, '112', 'Preet', '32', 'Preet123', 'roddetaniya@gmail.com', NULL, '$2y$10$l9YDXRXbMBweMyMOrv0ybufKyrKUrIcZ1a.MYt2hw4Mn1sz6xesBq', NULL, '2023-04-30 05:40:41', '2023-04-30 05:40:41'),
(22, '110', 'Hayri', '32', 'Hayri123', 'roddetaniya@gmail.com', NULL, '$2y$10$C80J6BBbtaE1CvZgPScVyOCXXolVQsA2PsEwui3.EalwfupI0dNxC', NULL, '2023-04-30 05:43:58', '2023-04-30 05:43:58'),
(23, '898989', 'gayri', '32', 'gayri123', 'hazumefasi@mailinator.com', NULL, '$2y$10$ZIaHQErj3uXu0CAAak7.5OuAivNO6kDJjtk0I.z3./pae0fSkucvu', NULL, '2023-04-30 05:50:30', '2023-04-30 05:50:30'),
(24, '112', 'Game', '29', 'Game123', 'roddetaniya@gmail.com', NULL, '$2y$10$hR6MLOH2R8ZTOMYiHNjbPOH8lR78Urqk7Kmxp7R/B3RL.zg4eo87O', NULL, '2023-04-30 05:56:30', '2023-04-30 05:56:30'),
(25, '123', 'Rahul', '26', 'Rahul123', 'rahul@gmail.com', NULL, '$2y$10$vV8LoLJtG1LN66qYHIdQ4OleY3DI9jxE.RmugoxCualPxl6Esbwu6', NULL, '2023-05-04 00:01:56', '2023-05-04 00:01:56'),
(26, '112', 'Joy', '29', 'Joy123', 'joy@gmail.com', NULL, '$2y$10$rnA661MTsDfsbWX9Q7sW/ecqcWeJj.XGS2e099O4bkIjQ2p.JHAY.', NULL, '2023-05-04 00:04:34', '2023-05-04 00:04:34'),
(27, '110', 'Aditi', '30', 'Aditi123', 'aditi@gmail.com', NULL, '$2y$10$QXFprGP9K9GFVf0La0LgtOepXnhkaLnt76Bpowh4hCMhW/GpSkPXC', NULL, '2023-05-04 00:07:32', '2023-05-04 00:07:32'),
(28, '123', 'Ram', '31', 'Ram123', 'ram@gnail.com', NULL, '$2y$10$OECWrtEqTm8kixNGcRPZfe9O2LOYckntueoZBfxZwkdzmbXJtFJQ6', NULL, '2023-05-04 00:09:24', '2023-05-04 00:09:24'),
(29, '123', 'Pooja123', '29', 'Pooja123', 'pooja@gmail.com', NULL, '$2y$10$pMeDxd4KiulteDpluGFQo.yz3/e/48PtLym.3hO37mpdGDOuG.8gK', NULL, '2023-05-04 00:20:35', '2023-05-04 00:20:35'),
(30, '123', 'Neha', '30', 'Neha123', 'neha@gmail.com', NULL, '$2y$10$oI3GG2uMsKJRZ06cSve8hOXxijh4n8BCr2ym/pgkq8varFldjTJKq', NULL, '2023-05-04 00:27:33', '2023-05-04 00:27:33'),
(31, 'zyfavufaru', 'zamyc', '31', 'dafykulyd', 'zizoxyxam@mailinator.com', NULL, '$2y$10$geSYP7h1Vo4x9.TPr9IJ3e5Ofwxz7WKK3.U94l3tjFzbHJcuC/pfC', NULL, '2023-05-12 06:03:59', '2023-05-12 06:03:59'),
(32, '123', 'Neha', '27', 'Neha123', 'neha@gmail.com', NULL, '$2y$10$aI5n0y2s9a6HTDDmYEcdu.RujuNzNjqo3Twj/YTAGC2S7zDdRP.hW', NULL, '2023-05-12 06:27:08', '2023-05-12 06:27:08'),
(33, '898989', 'gayri', '25', 'gayri123', 'hazumefasi@mailinator.com', NULL, '$2y$10$yz9csSh7QRQu3mycj4JvJetIbN8OqEyqE7fD4L1ccBQRKhNVwc696', NULL, '2023-05-12 06:27:20', '2023-05-12 06:27:20'),
(34, 'SS001', 'Sharique Sheikh', '25', '0001', 'xuqefulub@mailinator.com', NULL, '$2y$10$8iRITCZlRFMNW3xH5TMxZO9MAVzZlanIoAujBqrOSCEzfcxdLXu2a', NULL, '2023-05-17 00:01:09', '2023-05-17 00:01:09'),
(35, 'pypiwi', 'mumico', '25', 'fikytylup', 'datecote@mailinator.com', NULL, '$2y$10$Jb7ielmJW5OIbI8UA2boLOtK0HAiETVRdXPshQcv7juiaOu8T6lkm', NULL, '2023-05-17 06:52:45', '2023-05-17 06:52:45'),
(36, 'pypiwi', 'mumico', '25', 'fikytylup', 'datecote@mailinator.com', NULL, '$2y$10$xX7ofc6ao4nuKsgwf2jEde2KLdtyjUw5ptr/q7PwGPSrE85EB20F2', NULL, '2023-05-17 06:53:35', '2023-05-17 06:53:35'),
(37, 'mm1001', 'mohin khan', '27', 'mm1001', 'mm@gmail.com', NULL, '$2y$10$nzATHTyuri9fpXfDokLAm.bmnYZcoHdzeblKlCUXD.RlYOGXiRTFa', NULL, '2023-05-17 06:58:34', '2023-05-17 06:58:34'),
(40, 'admin', 'admin', '26', 'admin', 'admin@gmail.com', NULL, '$2y$10$nzATHTyuri9fpXfDokLAm.bmnYZcoHdzeblKlCUXD.RlYOGXiRTFa', NULL, '2023-05-17 07:40:18', '2023-05-17 07:40:18'),
(39, 'zogew', 'ponocutej', '27', 'fapicujehi', 'nedux@mailinator.com', NULL, '$2y$10$5a5GCQUI3MM6YXQzMhhicO/ZGaRJJDXHbpaX3BVOpHxz/i6FamG3C', NULL, '2023-05-17 07:02:09', '2023-05-17 07:02:09'),
(41, 'rr001', 'Rishi', '29', 'rr0001', 'xuqefulub@mailinator.com', NULL, '$2y$10$ZATqJ4ji1aUDaHYE1XJD6OnSng.KDO6AaCL3H1m1uIoQrTCoEC/6S', NULL, '2023-05-17 10:19:02', '2023-05-17 10:19:02'),
(42, 'sh001', 'shabnam', '29', 'sh0001', 'xuqefulub@mailinator.com', NULL, '$2y$10$8WVxpktQ7LdKEoG6kuTe1O992v9Nb3jDjfyS3TaPv7qTJqULLDJ0m', NULL, '2023-05-17 23:23:02', '2023-05-17 23:23:02'),
(43, 'tt0001', 'taniya', '30', 'tt0001', 'xuqefulub@mailinator.com', NULL, '$2y$10$ZztsmY/9Z4CODWHj3PrMBuWaUhrXgfioQwKg097667lXY.9p.97z2', NULL, '2023-05-17 23:28:19', '2023-05-17 23:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

DROP TABLE IF EXISTS `user_permission`;
CREATE TABLE IF NOT EXISTS `user_permission` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 5, '[\"26\",\"25\",\"27\"]', '2023-05-15 06:41:41', '2023-05-15 07:21:57'),
(3, 37, '[\"27\"]', '2023-05-15 07:19:35', '2023-05-15 07:19:35'),
(4, 34, '[\"25\"]', '2023-05-17 00:20:27', '2023-05-17 03:55:23'),
(8, 19, '[\"27\"]', '2023-05-17 07:02:09', '2023-05-17 07:02:09'),
(9, 40, '[\"26\"]', '2023-05-17 07:40:18', '2023-05-17 07:40:18'),
(10, 41, '[\"29\"]', '2023-05-17 10:19:02', '2023-05-17 10:19:02'),
(11, 42, '[\"29\"]', '2023-05-17 23:23:02', '2023-05-17 23:23:02'),
(12, 43, '[\"30\"]', '2023-05-17 23:28:19', '2023-05-17 23:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `page_name`, `order_no`, `created_at`, `updated_at`) VALUES
(31, 'Technical Head', '[\"technicalhead_report\",\"technicalhead_edit\",\"tech_head_update\"]', 6, '2023-04-30 03:25:06', '2023-04-30 03:25:06'),
(27, 'Field Executive', '[\"FE.new\",\"FE.create\",\"FE.ongoingmodel\",\"FE.delete\",\"FE.edit\",\"FE.update\",\"FE.ongoingmodel\",\"FE.ongoingmodelvalue\"]', 3, '2023-04-29 06:17:43', '2023-04-29 06:17:43'),
(29, 'Assistant Valuer', '[\"Av.new\",\"AV.ongoingmodel\",\"assist_edit\",\"assit_update\"]', 4, '2023-04-30 03:24:50', '2023-04-30 03:24:50'),
(30, 'Technical Manager', '[\"technicalmanager_report\",\"technicalmanager_edit\",\"tech_manager_update\"]', 5, '2023-04-30 03:24:58', '2023-04-30 03:24:58'),
(25, 'Operator', '[\"addnew\",\"addnewinsert\",\"addnewdelete\",\"addnewedit\",\"addnewupdate\",\"addnewarea\",\"ongoingmodel\",\"ongoingmodelvalue\"]', 2, '2023-04-29 06:10:35', '2023-04-29 06:10:35'),
(26, 'Admin', '[\"all\"]', 1, '2023-04-29 06:10:40', '2023-04-29 06:10:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
