-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 04:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nazad_palace`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `people` decimal(10,2) NOT NULL,
  `time` time NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` enum('Pending','Confirmed') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `people`, `time`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'abdullahnazad@gmail.com', '019632584233', 6.00, '10:30:00', '07/03/2024', 'Confirmed', '2024-03-12 23:20:23', '2024-03-13 08:11:49'),
(4, 'fdsfsdfs', 'sdfdsfsd@fdf.com', 'dsfdsfdsf', 1.00, '09:00:00', '2024-03-14', 'Pending', '2024-03-13 08:38:32', '2024-03-13 08:38:32'),
(5, 'kayes', 'admin@email.com', '236515546331', 5.00, '11:00:00', '13/03/2024', 'Confirmed', '2024-03-13 09:03:29', '2024-03-13 09:03:57'),
(11, 'Mohammad', 'nazadahammed850@gmail.com', '01580331370', 4.00, '09:00:00', '17/03/2024', 'Pending', '2024-03-16 23:37:38', '2024-03-17 00:59:09'),
(12, 'Nazad', 'nazadahammed850@gmail.com', '01580331370', 3.00, '09:00:00', '17/03/2024', 'Pending', '2024-03-17 01:01:51', '2024-03-17 01:01:51'),
(13, 'Zahid', 'zahid94dc@gmail.com', '1025125', 12.00, '09:00:00', '22/03/2024', 'Pending', '2024-03-18 20:44:08', '2024-03-18 20:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id`, `invoice`, `name`, `units`, `price`, `total`, `date`, `created_at`, `updated_at`) VALUES
(1, '65f849224b2f1', 'milk', 5.00, 120.00, 600.00, '2024-03-18', '2024-03-18 08:18:34', '2024-03-18 08:18:34'),
(2, '65f849224b2f1', 'veg', 10.00, 55.00, 550.00, '2024-03-18', '2024-03-18 08:18:34', '2024-03-18 08:18:34'),
(3, '65f84f4cc275d', 'Rice', 50.00, 75.00, 3750.00, '2024-03-18', '2024-03-18 08:27:41', '2024-03-18 08:27:41'),
(4, '65f8fa83e0d41', 'Milk', 5.00, 98.00, 490.00, '2024-03-19', '2024-03-18 20:42:49', '2024-03-18 20:42:49'),
(5, '65f8fa83e0d41', 'Rice', 20.00, 75.00, 1500.00, '2024-03-19', '2024-03-18 20:42:49', '2024-03-18 20:42:49'),
(6, '65f8fa83e0d41', 'Meat', 5.00, 750.00, 3750.00, '2024-03-19', '2024-03-18 20:42:49', '2024-03-18 20:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Kaylah Padberg II', 'harmstrong@example.org', '2024-03-19 05:57:18', '2024-03-19 05:57:18'),
(2, 'Garth Muller', 'jules.douglas@example.com', '2024-03-19 05:57:18', '2024-03-19 05:57:18'),
(3, 'Isaias Ratke III', 'rice.muhammad@example.net', '2024-03-19 05:57:18', '2024-03-19 05:57:18'),
(4, 'Colin Halvorson', 'kelli64@example.org', '2024-03-19 05:57:18', '2024-03-19 05:57:18'),
(5, 'Kamille Braun', 'koch.hailie@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(6, 'Vinnie Zboncak DVM', 'elyssa.feeney@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(7, 'Miss Alfreda Daniel DVM', 'schumm.jacey@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(8, 'Dr. Eudora Hill', 'jeramie15@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(9, 'Dr. Ashton West', 'igottlieb@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(10, 'Raquel Botsford', 'tamara03@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(11, 'Evie Padberg', 'pwehner@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(12, 'Miss Annetta Farrell Sr.', 'phessel@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(13, 'Autumn Fahey', 'olittle@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(14, 'Muhammad Daniel', 'alejandra.haag@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(15, 'Miss Viviane Ebert', 'ratke.pablo@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(16, 'Keyshawn Streich', 'randall.aufderhar@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(17, 'Orval Bayer', 'qbrakus@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(18, 'Mr. Reid Schroeder PhD', 'corkery.vern@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(19, 'Jackson McLaughlin', 'vernon75@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(20, 'Melyna Barton', 'murphy.stamm@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(21, 'Dr. Randal Muller Jr.', 'carter.esta@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(22, 'Gardner Stokes I', 'wkuphal@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(23, 'Mr. Jedediah Ratke', 'wilkinson.brain@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(24, 'Melody Stamm', 'iberge@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(25, 'Ron Botsford', 'zhaag@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(26, 'Laron Hermann', 'spencer.stamm@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(27, 'Deron Franecki', 'simeon.davis@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(28, 'Andres Jacobi', 'johnathan65@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(29, 'Mr. Lamont Zemlak', 'octavia72@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(30, 'Camille Zemlak', 'blaze.abernathy@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(31, 'Mr. Aron Hauck III', 'ebarrows@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(32, 'Kayden Zulauf I', 'kuhn.shanna@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(33, 'Otto Koss', 'kenny.towne@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(34, 'Jayce Kulas IV', 'jschaefer@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(35, 'Samara Schoen Jr.', 'brook30@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(36, 'Dr. Lesly Zieme', 'patrick59@example.com', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(37, 'Justyn Howe', 'ryan.crona@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(38, 'Anya Nader', 'dominique79@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(39, 'Prof. Maybell Wiegand', 'luella.muller@example.org', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(40, 'Jordyn Hamill', 'claud.hagenes@example.net', '2024-03-19 05:57:19', '2024-03-19 05:57:19'),
(41, 'Roy Ruecker Sr.', 'dalton.kunze@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(42, 'Kyra Cruickshank', 'casey17@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(43, 'Raquel Farrell', 'rippin.ignacio@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(44, 'Mr. Aidan Crona II', 'tstrosin@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(45, 'Mr. Frankie Volkman II', 'earl76@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(46, 'Prof. Muhammad Stiedemann V', 'sskiles@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(47, 'Julien Becker', 'vernie.mertz@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(48, 'Watson VonRueden', 'carolyne.greenfelder@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(49, 'Gonzalo Greenholt DDS', 'heber28@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(50, 'Aidan Ratke', 'kitty.murphy@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(51, 'Miss Priscilla Murphy', 'dhoeger@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(52, 'Ellie Reichert', 'nelson01@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(53, 'Daryl Harber', 'cole.hiram@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(54, 'Trenton VonRueden', 'rbreitenberg@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(55, 'Broderick Metz', 'zboncak.elvera@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(56, 'Marguerite Shields', 'lueilwitz.marquise@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(57, 'Elise Gutkowski', 'lehner.kenyon@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(58, 'Nia Jacobi Sr.', 'marlin01@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(59, 'Georgianna Kozey', 'wiegand.robin@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(60, 'Coleman Rodriguez', 'grace08@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(61, 'Mason Boyle Sr.', 'pwuckert@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(62, 'Tamara Gerhold', 'floyd.farrell@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(63, 'Dr. Dane Wunsch I', 'xboehm@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(64, 'Dillan Roob', 'gaylord.meghan@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(65, 'Linnea Carter', 'omarks@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(66, 'Mr. Kennith Gottlieb MD', 'jovani32@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(67, 'Taryn Vandervort DVM', 'wendell30@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(68, 'Mr. Paolo Baumbach', 'kulas.oliver@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(69, 'Landen Wolf', 'rbraun@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(70, 'Alena Ledner', 'ckessler@example.com', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(71, 'Cristal Mayer', 'cassandre.marvin@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(72, 'Prof. Clyde Konopelski Sr.', 'lowe.tyrell@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(73, 'Elenora Schumm', 'patsy88@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(74, 'Gerson Swaniawski', 'ihill@example.net', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(75, 'Elena Predovic', 'caleigh30@example.org', '2024-03-19 05:57:20', '2024-03-19 05:57:20'),
(76, 'Elvis Lesch', 'graynor@example.net', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(77, 'Jacklyn Johns', 'nolan.amely@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(78, 'Seamus Mann IV', 'waino65@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(79, 'Kacie Douglas Sr.', 'princess.huel@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(80, 'Savanna Kerluke', 'domenico68@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(81, 'Dr. Name Graham II', 'izabella.oconner@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(82, 'Mabel Rau', 'emmy.nikolaus@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(83, 'Prof. Celestine Boyle II', 'spinka.haskell@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(84, 'Mr. Nathanael Rolfson', 'brain63@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(85, 'Mr. Branson Farrell', 'teresa51@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(86, 'Ara Cole', 'fern50@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(87, 'Jayde Prohaska', 'hessel.lera@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(88, 'Bernhard Kuhn', 'pheidenreich@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(89, 'Clarabelle Marks Jr.', 'xprohaska@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(90, 'Gilberto Kris IV', 'ywolf@example.net', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(91, 'Mr. Jeffrey Lowe PhD', 'sigurd07@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(92, 'Mr. Jess Langosh MD', 'deanna.graham@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(93, 'Lewis Franecki', 'eldora11@example.net', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(94, 'Matt Lang II', 'arthur33@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(95, 'Joan Hahn', 'amedhurst@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(96, 'Zola Robel', 'buck01@example.org', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(97, 'Lysanne Howe', 'mfarrell@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(98, 'Lauryn Kerluke DDS', 'nwilderman@example.net', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(99, 'Sim Hauck', 'wjacobson@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21'),
(100, 'Kaylie Goyette', 'ken.kessler@example.com', '2024-03-19 05:57:21', '2024-03-19 05:57:21');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_23_151441_create_sliders_table', 1),
(9, '2024_03_05_025047_create_welcomes_table', 2),
(10, '2024_03_12_033219_create_bookings_table', 2),
(11, '2024_03_11_145003_create_reports_table', 3),
(12, '2024_03_11_153226_create_books_table', 3),
(13, '2024_03_13_150637_create_sing_ups_table', 3),
(14, '2024_03_17_073156_create_buys_table', 4),
(15, '2024_03_19_025923_create_sells_table', 5),
(16, '2024_03_19_114656_create_clients_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`id`, `date`, `invoice`, `name`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, '2024-03-19', '65f90cfa4fbd2', 'Ice-Cream', 2.00, 100.00, 200.00, '2024-03-18 21:58:43', '2024-03-18 21:58:43'),
(2, '2024-03-19', '65f90cfa4fbd2', 'Chips', 10.00, 20.00, 200.00, '2024-03-18 21:58:43', '2024-03-18 21:58:43'),
(3, '2024-03-19', '65f99e66b0d85', 'Birani', 5.00, 150.00, 750.00, '2024-03-19 08:17:33', '2024-03-19 08:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `sing_ups`
--

CREATE TABLE `sing_ups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `details`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Nazad Palace', 'welcome to nazad palace', 'master-slides-08.jpg', '2024-03-04 21:11:26', '2024-03-04 21:11:26'),
(5, 'Abdullah', 'Abdullah\'s-Palace', 'bg-intro-05.jpg', '2024-03-12 22:24:10', '2024-03-12 22:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', NULL, '$2y$10$cR4T4qCHT.6sfOsoDUaiwesfS31eo89rB.r39UBPyQgVoDBtZl7GS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`id`, `name`, `title`, `details`, `photo`, `button`, `created_at`, `updated_at`) VALUES
(1, 'steel', 'import', 'Build a heavy building', 'blog-14.jpg', 'click', '2024-03-13 07:47:21', '2024-03-13 07:47:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sing_ups`
--
ALTER TABLE `sing_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sing_ups`
--
ALTER TABLE `sing_ups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
