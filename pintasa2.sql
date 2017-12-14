-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2017 at 10:21 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pintasa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `life-cycle` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service-type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `country`, `category`, `life-cycle`, `service`, `service-type`, `price`) VALUES
(1, 'Malaysia', 'Patent', 'Pre-Filing', 'Searching', 'Patentbility', '300'),
(2, 'Malaysia', 'Patent', 'Pre-Filing', 'Searching', 'FTO', '500'),
(3, 'Malaysia', 'Patent', 'Pre-Filing', 'Searching', 'Infirngement opinion', '600'),
(4, 'Malaysia', 'Patent', 'Pre-Filing', 'Searching', 'validity', '500'),
(5, 'Malaysia', 'Patent', 'Pre-Filing', 'Drafting', '', '2000'),
(6, 'Malaysia', 'Patent', 'Filing', 'Provisional filing/Utility', '', '800'),
(7, 'Malaysia', 'Patent', 'Filing', 'PCT', '', '2800'),
(8, 'Malaysia', 'Patent', 'Post-Filing', 'Examination', '', '1000'),
(9, 'Malaysia', 'Patent', 'Post-Filing', 'OA Response', '', '800'),
(10, 'Malaysia', 'Patent', 'Post-Filing', 'Allowance', '', '300'),
(11, 'Malaysia', 'Trademark', 'Pre-Filing', 'Searching', '', '500'),
(12, 'Malaysia', 'Trademark', 'Filing', 'per one class', '', '1200'),
(13, 'Malaysia', 'Trademark', 'Filing', 'Marid protocol', '', '2000'),
(14, 'Malaysia', 'Trademark', 'Post-Filing', 'Examination', '', '1000'),
(15, 'Malaysia', 'Trademark', 'Post-Filing', 'Written response', '', '500'),
(16, 'Malaysia', 'Trademark', 'Post-Filing', 'Registration', '', '1000'),
(17, 'Malaysia', 'Industrial Design', 'Pre-Filing', 'Drawings/design', '', '800'),
(18, 'Malaysia', 'Industrial Design', 'Filing', 'Filing', '', '1000'),
(19, 'Malaysia', 'Industrial Design', 'Filing', 'Filing-PCT', '', '2000'),
(20, 'Malaysia', 'Industrial Design', 'Post-Filing', 'Examination', '', '700'),
(21, 'Malaysia', 'Industrial Design', 'Post-Filing', 'OA response', '', '500'),
(22, 'Malaysia', 'Industrial Design', 'Post-Filing', 'Allowance', '', '900'),
(23, 'Malaysia', 'Copyright', 'Registration', 'Registration', '', '500'),
(24, 'China', 'Patent', 'Pre-Filing', 'Searching', 'Patentbility', '300'),
(25, 'China', 'Patent', 'Pre-Filing', 'Searching', 'FTO', '500'),
(26, 'China', 'Patent', 'Pre-Filing', 'Searching', 'Infirngement opinion', '600'),
(27, 'China', 'Patent', 'Pre-Filing', 'Searching', 'validity', '500'),
(28, 'China', 'Patent', 'Pre-Filing', 'Drafting', '', '2000'),
(29, 'China', 'Patent', 'Filing', 'Provisional filing/Utility', '', '800'),
(30, 'China', 'Patent', 'Filing', 'PCT', '', '2800'),
(31, 'China', 'Patent', 'Post-Filing', 'Examination', '', '1000'),
(32, 'China', 'Patent', 'Post-Filing', 'OA Response', '', '800'),
(33, 'China', 'Patent', 'Post-Filing', 'Allowance', '', '300'),
(34, 'China', 'Trademark', 'Pre-Filing', 'Searching', '', '500'),
(35, 'China', 'Trademark', 'Filing', 'per one class', '', '1200'),
(36, 'China', 'Trademark', 'Filing', 'Marid protocol', '', '2000'),
(37, 'China', 'Trademark', 'Post-Filing', 'Examination', '', '1000'),
(38, 'China', 'Trademark', 'Post-Filing', 'Written response', '', '500'),
(39, 'China', 'Trademark', 'Post-Filing', 'Registration', '', '1000'),
(40, 'China', 'Industrial Design', 'Pre-Filing', 'Drawings/design', '', '800'),
(41, 'China', 'Industrial Design', 'Filing', 'Filing', '', '1000'),
(42, 'China', 'Industrial Design', 'Filing', 'Filing-PCT', '', '2000'),
(43, 'China', 'Industrial Design', 'Post-Filing', 'Examination', '', '700'),
(44, 'China', 'Industrial Design', 'Post-Filing', 'OA response', '', '500'),
(45, 'China', 'Industrial Design', 'Post-Filing', 'Allowance', '', '900'),
(46, 'China', 'Copyright', 'Registration', 'Registration', '', '500');

-- --------------------------------------------------------

--
-- Table structure for table `select_category`
--

CREATE TABLE IF NOT EXISTS `select_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `select_category`
--

INSERT INTO `select_category` (`id`, `cat_name`) VALUES
(1, 'Trademark'),
(2, 'Patent'),
(3, 'Industrial Design'),
(4, 'Copyright');

-- --------------------------------------------------------

--
-- Table structure for table `select_country`
--

CREATE TABLE IF NOT EXISTS `select_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `select_country`
--

INSERT INTO `select_country` (`id`, `cou_name`) VALUES
(1, 'Malaysia'),
(2, 'Singapore'),
(3, 'Brunie'),
(4, 'Indonesia'),
(5, 'Philippines'),
(6, 'Thailand'),
(7, 'Vietnam'),
(8, 'Cambodia'),
(9, 'Laos'),
(10, 'Myanmar'),
(11, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `select_cycle`
--

CREATE TABLE IF NOT EXISTS `select_cycle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cyc_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `select_cycle`
--

INSERT INTO `select_cycle` (`id`, `cyc_name`) VALUES
(1, 'Pre-Filing'),
(2, 'Filing'),
(3, 'Post-Filing'),
(4, 'Registration');

-- --------------------------------------------------------

--
-- Table structure for table `select_service`
--

CREATE TABLE IF NOT EXISTS `select_service` (
  `id` int(11) NOT NULL,
  `ser_name` varchar(50) NOT NULL,
  `ser_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `select_service`
--

INSERT INTO `select_service` (`id`, `ser_name`, `ser_category`) VALUES
(0, 'per one class', 1),
(1, 'Searching', 1),
(2, 'Drafting', 1),
(3, 'Patent Filing', 2),
(4, 'Prosecution', 3),
(5, 'Grant', 3),
(6, 'Annuity', 3),
(7, 'Renewal', 3),
(8, 'PCT', 1),
(9, 'Drafting', 1),
(10, 'Examination', 1),
(11, 'OA Response', 1),
(12, 'Allowance', 1),
(13, 'Marid protocol', 1),
(15, 'Written response', 1),
(16, 'Drawings/design', 1),
(17, 'Filing', 1),
(18, 'Filing-PCT', 1),
(19, 'Registration', 1),
(20, 'Provisional filing/Utility', 1),
(21, 'per one class', 1);

-- --------------------------------------------------------

--
-- Table structure for table `select_service_type`
--

CREATE TABLE IF NOT EXISTS `select_service_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `select_service_type`
--

INSERT INTO `select_service_type` (`id`, `service_type`) VALUES
(1, 'Patentbility'),
(2, 'FTO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hilmi', 'hilmi@gmail.com', '$2y$10$yX/f.q9TMawTmOu5z6WxD./EFR1Q0yaYtt6W05B4G62AetuA7roFq', 'f1oUbLUpS6SkIbCNTwxKdDEf6WDwJOO60gmhPeSyUn9B4TOEefQYfP9S2jIS', '2017-11-06 00:14:22', '2017-11-06 00:14:22'),
(2, 'aziah aziz', 'aziah@gmail.com', '$2y$10$thpQtc28EMufas07HgEfOu6bL22w20EjEKmNRlhQCXCjJycDQIcZ2', 'xDHtTY5Hneihe3WDxCVb2trmeKtdcR41EsKQCubqkvEHxiq0PoNDut5ugIZi', '2017-11-06 20:17:56', '2017-11-06 20:17:56'),
(3, 'test', 'test@gmail.com', '$2y$10$AVmaNhH7QmMw/m9m7S0Kquf3hEFzsNq5coJcBB7xvy0VISA4aJ9N.', 'sN7AKMuDFojFzKIWIiEwzDzdZtUoNSIxJhP0M79C03RZSgQGzk6ZM8kbwhSv', '2017-11-06 21:33:07', '2017-11-06 21:33:07'),
(4, 'justin', 'justin@gmail.com', '$2y$10$JMSGWqnzdtuJyKrPZVeOuOIWhbf2pvNFAI4cPb5H6Dter4JtTL68S', 'lBRh7BuQ0Wk8onaqxurWUCODSO2Tntd5VejpaP4VU8mcNSzPzFHUGX0814LP', '2017-11-07 22:22:55', '2017-11-07 22:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE IF NOT EXISTS `user_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `data`, `user_id`) VALUES
(7, 'a:7:{s:6:"_token";s:40:"h5tEMHcJLCaXu1DibnlKQ8M5JooqJgBFgrE8CgIT";s:7:"country";a:1:{i:1;a:1:{i:0;s:8:"Malaysia";}}s:8:"category";a:1:{i:1;a:1:{i:0;s:6:"Patent";}}s:4:"life";a:1:{i:1;a:1:{i:0;s:6:"Filing";}}s:7:"service";a:1:{i:1;a:1:{i:0;s:26:"Provisional filing/Utility";}}s:10:"servicesub";a:1:{i:1;a:1:{i:0;s:3:"FTO";}}s:5:"price";a:1:{i:1;a:1:{i:0;s:3:"800";}}}', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
