-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 08:42 AM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `jobtype` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `type` set('0','1') NOT NULL DEFAULT '0',
  `available_for` set('part-time','full-time','both') NOT NULL DEFAULT 'both',
  `points` int(11) DEFAULT NULL,
  `status` set('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `nid`, `file`, `cv`, `jobtype`, `location`, `dob`, `type`, `available_for`, `points`, `status`, `created_at`, `updated_at`) VALUES
(1, 15, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'both', 100, '1', '2024-06-11 21:17:47', '2024-06-11 21:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_post`
--

CREATE TABLE `applicant_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` set('applied','short list','under review','interview','accepted','rejected','hired') NOT NULL DEFAULT 'applied',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_post_types`
--

CREATE TABLE `applicant_post_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level` set('primary','secondary','higher secondary','diploma','bachelor','master','phd','other') DEFAULT NULL,
  `institute` varchar(255) NOT NULL,
  `board` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `grade_out_of` varchar(255) DEFAULT NULL,
  `passing_year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `licence_no` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `founded` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `type` set('new','regular','premium') NOT NULL DEFAULT 'regular',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `user_id`, `name`, `address`, `website`, `licence_no`, `contact_person`, `contact_phone`, `contact_email`, `logo`, `description`, `founded`, `linkedin`, `facebook`, `twitter`, `instagram`, `points`, `type`, `created_at`, `updated_at`) VALUES
(1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'regular', '2024-06-11 21:12:46', '2024-06-11 21:12:46'),
(2, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'regular', '2024-06-11 21:20:37', '2024-06-11 21:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `from` date NOT NULL,
  `to` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `applicant_id`, `company`, `address`, `phone`, `position`, `department`, `description`, `from`, `to`, `created_at`, `updated_at`) VALUES
(2, 1, 'IsDB1', 'Agargaon Dhaka, Bangladesh', '01831587760', 'trainee', 'WDPF', 'HTML, CSS, JS, PHP, Lavavel', '2024-06-01', '2024-06-12', '2024-06-11 22:15:03', '2024-06-11 22:29:12');

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
-- Table structure for table `functionals`
--

CREATE TABLE `functionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` set('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `functionals`
--

INSERT INTO `functionals` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accounting/Finance', 'bi bi-funnel-fill', '1', '2024-06-11 02:26:45', '2024-06-11 02:26:45'),
(2, 'Production/Operation nur', 'bi bi-funnel-fill', '1', '2024-06-11 02:27:34', '2024-06-11 02:54:58'),
(3, 'Agro (Plant/Animal/Fisheries)', 'bi bi-funnel-fill', '1', '2024-06-11 02:28:37', '2024-06-11 02:28:37'),
(4, 'Bank/ Non-Bank Fin. Institution', 'bi bi-funnel-fill', '1', '2024-06-11 03:30:31', '2024-06-11 03:30:31'),
(5, 'Hospitality/ Travel/ Tourism', 'bi bi-funnel-fill', '1', '2024-06-11 03:47:11', '2024-06-11 03:47:11'),
(6, 'NGO/Development', 'bi bi-funnel-fill', '1', '2024-06-11 03:52:30', '2024-06-11 03:52:30'),
(7, 'Supply Chain/ Procurement', 'bi bi-funnel-fill', '1', '2024-06-11 03:54:07', '2024-06-11 03:54:07'),
(8, 'Commercial', 'bi bi-funnel-fill', '1', '2024-06-11 04:48:25', '2024-06-11 04:48:25'),
(9, 'Research/Consultancy', 'bi bi-funnel-fill', '1', '2024-06-11 04:48:46', '2024-06-11 04:48:46'),
(10, 'Education/Training', 'bi bi-funnel-fill', '1', '2024-06-11 04:49:18', '2024-06-11 04:49:18'),
(11, 'Beauty Care/ Health & Fitness', 'bi bi-funnel-fill', '1', '2024-06-11 04:49:58', '2024-06-11 04:49:58'),
(13, 'Receptionist/ PS', 'bi bi-filter', '1', '2024-06-11 21:48:47', '2024-06-11 21:48:47'),
(14, 'Engineer/Architects', 'bi bi-filter', '1', '2024-06-11 21:49:23', '2024-06-11 21:49:23'),
(15, 'IT & Telecommunication', 'bi bi-filter', '1', '2024-06-11 21:49:45', '2024-06-11 21:49:45'),
(16, 'Data Entry/Operator/BPO', 'bi bi-filter', '1', '2024-06-11 21:50:09', '2024-06-11 21:50:09'),
(17, 'Garments/Textile', 'bi bi-filter', '1', '2024-06-11 21:50:35', '2024-06-11 21:50:35'),
(18, 'Marketing/Sales', 'bi bi-filter', '1', '2024-06-11 21:51:18', '2024-06-11 21:51:18'),
(19, 'Driving/Motor Technician', 'bi bi-filter', '1', '2024-06-11 21:51:35', '2024-06-11 21:51:35'),
(20, 'HR/Org. Development', 'bi bi-filter', '1', '2024-06-11 21:51:59', '2024-06-11 21:51:59'),
(21, 'Customer Service/Call Centre', 'bi bi-filter', '1', '2024-06-11 21:52:20', '2024-06-11 21:52:20'),
(22, 'Security/Support Service', 'bi bi-filter', '1', '2024-06-11 21:52:41', '2024-06-11 21:52:41'),
(23, 'Gen Mgt/Admin', 'bi bi-filter', '1', '2024-06-11 21:53:06', '2024-06-11 21:53:06'),
(24, 'Media/Ad./Event Mgt.', 'bi bi-filter', '1', '2024-06-11 21:53:25', '2024-06-11 21:53:25'),
(25, 'Law/Legal', 'bi bi-filter', '1', '2024-06-11 21:53:50', '2024-06-11 21:53:50'),
(26, 'Design/Creative', 'bi bi-filter', '1', '2024-06-11 21:54:08', '2024-06-11 21:54:08'),
(27, 'Medical/Pharma', 'bi bi-filter', '1', '2024-06-11 21:54:25', '2024-06-11 21:54:25'),
(28, 'Company Secretary/Regulatory affairs', 'bi bi-filter', '1', '2024-06-11 21:54:45', '2024-06-11 21:54:45'),
(29, 'Electrician/Construction/Repair', 'bi bi-filter', '1', '2024-06-11 21:55:11', '2024-06-11 21:55:11'),
(30, 'Others', 'bi bi-filter', '1', '2024-06-11 21:55:49', '2024-06-11 21:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `industrials`
--

CREATE TABLE `industrials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` set('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industrials`
--

INSERT INTO `industrials` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Agro based Industry', 'bi bi-briefcase-fill', '1', '2024-06-11 21:59:25', '2024-06-11 22:02:48'),
(3, 'Pharmaceuticals', 'bi bi-briefcase-fill', '1', '2024-06-11 22:03:20', '2024-06-11 22:03:20'),
(4, 'Media / Advertising/ Event Mgt.', 'bi bi-briefcase-fill', '1', '2024-06-11 22:03:45', '2024-06-11 22:03:45'),
(5, 'Archi./Engg./Construction', 'bi bi-briefcase-fill', '1', '2024-06-11 22:10:09', '2024-06-11 22:10:09'),
(6, 'Hospital/ Diagnostic Center', 'bi bi-briefcase-fill', '1', '2024-06-11 22:10:32', '2024-06-11 22:10:32'),
(7, 'NGO/Development', 'bi bi-briefcase-fill', '1', '2024-06-11 22:11:11', '2024-06-11 22:11:11'),
(8, 'Automobile/Industrial Machine', 'bi bi-briefcase-fill', '1', '2024-06-11 22:11:46', '2024-06-11 22:11:46'),
(9, 'Airline/ Travel/ Tourism', 'bi bi-briefcase-fill', '1', '2024-06-11 22:13:18', '2024-06-11 22:13:18'),
(10, 'Real Estate/Development', 'bi bi-briefcase-fill', '1', '2024-06-11 22:13:35', '2024-06-11 22:13:35'),
(11, 'Bank/Non-Bank Fin. Institution', 'bi bi-briefcase-fill', '1', '2024-06-11 22:13:56', '2024-06-11 22:13:56'),
(12, 'Manufacturing (Light Industry)', 'bi bi-briefcase-fill', '1', '2024-06-11 22:14:17', '2024-06-11 22:14:17'),
(13, 'Wholesale/ Retail/ Export-Import', 'bi bi-briefcase-fill', '1', '2024-06-11 22:14:35', '2024-06-11 22:14:35'),
(14, 'Education', 'bi bi-briefcase-fill', '1', '2024-06-11 22:14:54', '2024-06-11 22:14:54'),
(15, 'Manufacturing (Heavy Industry)', 'bi bi-briefcase-fill', '1', '2024-06-11 22:15:13', '2024-06-11 22:15:13'),
(16, 'Telecommunication', 'bi bi-briefcase-fill', '1', '2024-06-11 22:15:32', '2024-06-11 22:15:32'),
(17, 'Electronics/Consumer Durables', 'bi bi-briefcase-fill', '1', '2024-06-11 22:15:52', '2024-06-11 22:15:52'),
(18, 'Hotel/Restaurant', 'bi bi-briefcase-fill', '1', '2024-06-11 22:16:52', '2024-06-11 22:16:52'),
(19, 'Food & Beverage Industry', 'bi bi-briefcase-fill', '1', '2024-06-11 22:17:45', '2024-06-11 22:17:45'),
(20, 'Energy/Power/Fuel', 'bi bi-briefcase-fill', '1', '2024-06-11 22:18:05', '2024-06-11 22:18:05'),
(21, 'nformation Technology (IT)', 'bi bi-briefcase-fill', '1', '2024-06-11 22:18:35', '2024-06-11 22:18:35'),
(22, 'Security Service', 'bi bi-briefcase-fill', '1', '2024-06-11 22:19:25', '2024-06-11 22:19:25'),
(23, 'Garments/Textile', 'bi bi-briefcase-fill', '1', '2024-06-11 22:19:47', '2024-06-11 22:19:47'),
(24, 'Logistics/ Transportation', 'bi bi-briefcase-fill', '1', '2024-06-11 22:20:30', '2024-06-11 22:20:30'),
(25, 'Fire, Safety & Protection', 'bi bi-briefcase-fill', '1', '2024-06-11 22:20:57', '2024-06-11 22:20:57'),
(26, 'Govt./Semi-Govt./Autonomous', 'bi bi-briefcase-fill', '1', '2024-06-11 22:21:16', '2024-06-11 22:21:16'),
(27, 'Entertainment/ Recreation', 'bi bi-briefcase-fill', '1', '2024-06-11 22:22:21', '2024-06-11 22:22:21'),
(28, 'E-Commerce/ F-Commerce', 'bi bi-briefcase-fill', '1', '2024-06-11 22:22:43', '2024-06-11 22:22:43'),
(29, 'Others', 'bi bi-briefcase-fill', '1', '2024-06-11 22:23:00', '2024-06-11 22:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `level` set('beginner','intermediate','advanced') NOT NULL,
  `type` set('read','write','speak') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `receiver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_09_064525_create_applicants_table', 1),
(5, '2024_06_09_065332_create_post_types_table', 1),
(6, '2024_06_09_065613_create_applicant_post_types_table', 1),
(7, '2024_06_09_070026_create_skill_types_table', 1),
(8, '2024_06_09_070027_create_skills_table', 1),
(9, '2024_06_09_070050_create_experiences_table', 1),
(10, '2024_06_09_070110_create_education_table', 1),
(11, '2024_06_09_070217_create_references_table', 1),
(12, '2024_06_09_070234_create_projects_table', 1),
(13, '2024_06_09_070235_create_languages_table', 1),
(14, '2024_06_09_070305_create_links_table', 1),
(15, '2024_06_09_070328_create_employers_table', 1),
(16, '2024_06_09_070411_create_industrials_table', 1),
(17, '2024_06_09_070421_create_functionals_table', 1),
(18, '2024_06_09_070441_create_specials_table', 1),
(19, '2024_06_09_070514_create_countries_table', 1),
(20, '2024_06_09_070515_create_states_table', 1),
(21, '2024_06_09_070516_create_posts_table', 1),
(22, '2024_06_09_070802_create_applicant_post_table', 1),
(23, '2024_06_09_070852_create_messages_table', 1),
(24, '2024_06_09_070958_create_save_posts_table', 1),
(25, '2024_06_09_071047_create_reviews_table', 1),
(26, '2024_06_10_185947_create_settings_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `functional_id` bigint(20) UNSIGNED DEFAULT NULL,
  `industrial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `special_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_type` set('Full-time','Part-time','Contract','Internship','Freelance') NOT NULL,
  `job_status` set('Open','Closed','Cancelled') NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `experience` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `expires` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` set('complete','continue','upcoming','cancelled') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `rating` set('1','2','3','4','5') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_posts`
--

CREATE TABLE `save_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `applied` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9GmQLmydgtGtuhTOpU3CIv7twu22KuKxLUOiVE1I', 15, '192.168.54.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUFJWbFlUVW5NNmpiaGk1ZmVkclBQNjJOSFlYWWFLbnJ4OGpsVTZTZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xOTIuMTY4LjU0LjY3L2pvYi1wb3J0YWwvcHVibGljL2FwcGxpY2FudC9wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTU7fQ==', 1718173222),
('kdGoBxdPElnk5MEo52BSsavTX6srcQTynZjBFaV1', 16, '192.168.54.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZDYydGUxbDJXSmxvTmI0RlJreXVROHpJVUJDV0gxeG9HVGhVSkdINiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly8xOTIuMTY4LjU0LjY3L2pvYi1wb3J0YWwvcHVibGljL2FkbWluL3NwZWNpYWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxNjt9', 1718167576),
('M7iMo1ezGRdxXYs7OWdpZrEppefSONQ0DYoZGLie', 15, '192.168.54.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2dTM3V1c0ZVZWdOOXI2bmNXUHB3ZUFOOE83bHlpVkNDQkxpOVR1VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xOTIuMTY4LjU0LjY3L2pvYi1wb3J0YWwvcHVibGljL2FwcGxpY2FudC9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTU7fQ==', 1718169687),
('XLE0D4OH9ny43cx9YjSEGBhYTjTs13bp4SRC7L3g', 15, '192.168.54.64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYm4yZ2plU1JjU253UHlVRzVqc3BhdWQySXlydTNwNVB4a2hqd2VoeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly8xOTIuMTY4LjU0LjY3L2pvYi1wb3J0YWwvcHVibGljL2FwcGxpY2FudC9leHBlcmllbmNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTU7fQ==', 1718166694);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skill_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill_types`
--

CREATE TABLE `skill_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` set('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ডাটা এন্ট্রি/কম্পিউটার অপারেটর', 'bi bi-tools', '1', '2024-06-11 22:26:45', '2024-06-11 22:26:45'),
(3, 'ইলেকট্রিশিয়ান/ইলেকট্রনিকস্ টেক.', 'bi bi-tools', '1', '2024-06-11 22:28:56', '2024-06-11 22:28:56'),
(4, 'প্যাথলজিস্ট/ল্যাব সহকারী', 'bi bi-tools', '1', '2024-06-11 22:29:21', '2024-06-11 22:29:21'),
(5, 'মেকানিক/টেকনিশিয়ান', 'bi bi-tools', '1', '2024-06-11 22:30:08', '2024-06-11 22:30:08'),
(6, 'ড্রাইভার', 'bi bi-tools', '1', '2024-06-11 22:30:42', '2024-06-11 22:30:42'),
(7, 'সিকিউরিটি গার্ড', 'bi bi-tools', '1', '2024-06-11 22:31:12', '2024-06-11 22:31:12'),
(8, 'নার্স', 'bi bi-tools', '1', '2024-06-11 22:31:39', '2024-06-11 22:31:39'),
(9, 'শেফ/বাবুর্চী', 'bi bi-tools', '1', '2024-06-11 22:32:05', '2024-06-11 22:32:05'),
(10, 'ওয়েটার/ওয়েট্রেস', 'bi bi-tools', '1', '2024-06-11 22:33:32', '2024-06-11 22:33:32'),
(11, 'ডেলিভারী ম্যান', 'bi bi-tools', '1', '2024-06-11 22:33:59', '2024-06-11 22:33:59'),
(12, 'পিয়ন', 'bi bi-tools', '1', '2024-06-11 22:34:20', '2024-06-11 22:34:20'),
(13, 'শো-রুম সহকারী/সেলসম্যান', 'bi bi-tools', '1', '2024-06-11 22:35:37', '2024-06-11 22:35:37'),
(14, 'গ্রাফিক্স ডিজাইনার', 'bi bi-tools', '1', '2024-06-11 22:35:58', '2024-06-11 22:35:58'),
(15, 'সেলস রিপ্রেজেন্টেটিভ/বিক্রয় প্রতিনিধি', 'bi bi-tools', '1', '2024-06-11 22:36:18', '2024-06-11 22:36:18'),
(16, 'গার্মেন্টস টেকনিশিয়ান', 'bi bi-tools', '1', '2024-06-11 22:36:34', '2024-06-11 22:36:34'),
(17, 'CAD অপারেটর', 'bi bi-tools', '1', '2024-06-11 22:37:48', '2024-06-11 22:37:48'),
(18, 'কেয়ারগিভার/ন্যানী', 'bi bi-tools', '1', '2024-06-11 22:38:09', '2024-06-11 22:38:09'),
(19, 'ওয়েল্ডার', 'bi bi-tools', '1', '2024-06-11 22:38:31', '2024-06-11 22:38:31'),
(20, 'প্লাম্বার/পাইপফিটিং', 'bi bi-tools', '1', '2024-06-11 22:38:55', '2024-06-11 22:38:55'),
(21, 'হাউজকিপার', 'bi bi-tools', '1', '2024-06-11 22:39:27', '2024-06-11 22:39:27'),
(22, 'অন্যান্য', 'bi bi-tools', '1', '2024-06-11 22:40:39', '2024-06-11 22:40:39'),
(23, 'রাজমিস্ত্রি/নির্মাণ কর্মী', 'bi bi-tools', '1', '2024-06-11 22:41:10', '2024-06-11 22:41:10'),
(24, 'স্যুইং মেশিন অপারেটর', 'bi bi-tools', '1', '2024-06-11 22:41:30', '2024-06-11 22:41:30'),
(25, 'ক্লিনার', 'bi bi-tools', '1', '2024-06-11 22:41:50', '2024-06-11 22:41:50'),
(26, 'মালী', 'bi bi-tools', '1', '2024-06-11 22:42:15', '2024-06-11 22:42:15'),
(27, 'জিম/ ফিটনেস ট্রেইনার', 'bi bi-tools', '1', '2024-06-11 22:42:39', '2024-06-11 22:42:39'),
(28, 'বিউটিশিয়ান/ সেলুন', 'bi bi-tools', '1', '2024-06-11 22:43:44', '2024-06-11 22:43:44'),
(29, 'ইমাম/ খতিব/ মুয়াজ্জিন', 'bi bi-briefcase-fill', '1', '2024-06-11 22:44:06', '2024-06-11 22:46:16'),
(30, 'ইন্টারপ্রিটার/ দোভাষী', 'bi bi-tools', '1', '2024-06-11 22:44:41', '2024-06-11 22:44:41'),
(31, 'ফায়ার সেফটি/ ফায়ারফাইটার', 'bi bi-tools', '1', '2024-06-11 22:45:05', '2024-06-11 22:45:05'),
(32, 'বয়লার অপারেটর', 'bi bi-tools', '1', '2024-06-11 22:45:25', '2024-06-11 22:45:25'),
(33, 'কার্পেন্টার', 'bi bi-tools', '1', '2024-06-11 22:45:50', '2024-06-11 22:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roles` enum('employer','applicant','admin') NOT NULL DEFAULT 'applicant',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'employer', '', 'employer@gmail.com', NULL, '$2y$12$ZOhg0IzmPiE5ztGHYgrSnevxaCd5PEl3rgx7xBoPWr6Q8.7Vp5qRa', 'employer', NULL, '2024-06-11 21:12:46', '2024-06-11 21:12:46'),
(15, 'applicant', 'img/1718173222.png', 'applicant@gmail.com', NULL, '$2y$12$/J4HtSF46mI6lzBnpWaIvuN/vhkmfKkdlB5l6h5nGHQ1IHy06uWSG', 'applicant', 'qljBEgZcbp0eKYeYfEL3jqvOBWJKqSm8JF7iV70LgHweLfG2csBzGXvjlvnp', '2024-06-11 21:17:47', '2024-06-12 00:20:22'),
(16, 'admin', '', 'admin@gmail.com', NULL, '$2y$12$/Fb.DUxdVFgFQQAl6fThcuWMkqh9N9MFfaKfa/K8ZlwJEZpoghZ/i', 'admin', 'yM7dL0lccRpjQPFk7IGPDy3dryA8bMi0axf9YM7KT25lgHBV4HT4SSgse243', '2024-06-11 21:20:37', '2024-06-11 21:20:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_user_id_foreign` (`user_id`);

--
-- Indexes for table `applicant_post`
--
ALTER TABLE `applicant_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_post_post_id_foreign` (`post_id`),
  ADD KEY `applicant_post_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `applicant_post_types`
--
ALTER TABLE `applicant_post_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_post_types_applicant_id_foreign` (`applicant_id`),
  ADD KEY `applicant_post_types_post_type_id_foreign` (`post_type_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employers_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `functionals`
--
ALTER TABLE `functionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrials`
--
ALTER TABLE `industrials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`),
  ADD KEY `messages_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_employer_id_foreign` (`employer_id`),
  ADD KEY `posts_functional_id_foreign` (`functional_id`),
  ADD KEY `posts_industrial_id_foreign` (`industrial_id`),
  ADD KEY `posts_special_id_foreign` (`special_id`),
  ADD KEY `posts_country_id_foreign` (`country_id`),
  ADD KEY `posts_state_id_foreign` (`state_id`);

--
-- Indexes for table `post_types`
--
ALTER TABLE `post_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `references_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_employer_id_foreign` (`employer_id`),
  ADD KEY `reviews_applicant_id_foreign` (`applicant_id`);

--
-- Indexes for table `save_posts`
--
ALTER TABLE `save_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_posts_applicant_id_foreign` (`applicant_id`),
  ADD KEY `save_posts_post_id_foreign` (`post_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_applicant_id_foreign` (`applicant_id`),
  ADD KEY `skills_skill_type_id_foreign` (`skill_type_id`);

--
-- Indexes for table `skill_types`
--
ALTER TABLE `skill_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_post`
--
ALTER TABLE `applicant_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_post_types`
--
ALTER TABLE `applicant_post_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `functionals`
--
ALTER TABLE `functionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `industrials`
--
ALTER TABLE `industrials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `save_posts`
--
ALTER TABLE `save_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill_types`
--
ALTER TABLE `skill_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applicant_post`
--
ALTER TABLE `applicant_post`
  ADD CONSTRAINT `applicant_post_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applicant_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applicant_post_types`
--
ALTER TABLE `applicant_post_types`
  ADD CONSTRAINT `applicant_post_types_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applicant_post_types_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `employers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_functional_id_foreign` FOREIGN KEY (`functional_id`) REFERENCES `functionals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_industrial_id_foreign` FOREIGN KEY (`industrial_id`) REFERENCES `industrials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_special_id_foreign` FOREIGN KEY (`special_id`) REFERENCES `specials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `references_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `save_posts`
--
ALTER TABLE `save_posts`
  ADD CONSTRAINT `save_posts_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `save_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_applicant_id_foreign` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skills_skill_type_id_foreign` FOREIGN KEY (`skill_type_id`) REFERENCES `skill_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
