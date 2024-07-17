-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;




-- Dumping structure for table school_management.admissions
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.admissions: ~1 rows (approximately)
INSERT INTO `admissions` (`id`, `name`, `email`, `mobile`, `class`, `created_at`, `updated_at`) VALUES
	(1, 'yilosa', 'yilosa5225@cartep.com', '8678657867', 'Class-07', '2024-07-15 03:28:15', '2024-07-15 03:28:15'),
	(2, 'Leela', 'lee@gmail.com', '7454565464', 'Class-09', '2024-07-17 00:33:25', '2024-07-17 00:33:25');

-- Dumping structure for table school_management.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.banners: ~4 rows (approximately)
INSERT INTO `banners` (`id`, `image`, `time`, `created_at`, `updated_at`) VALUES
	(1, '1721022590.jpg', '3000', '2024-07-15 00:19:50', '2024-07-15 00:19:50'),
	(2, '1721023219.avif', '3000', '2024-07-15 00:30:19', '2024-07-15 00:30:19'),
	(3, '1721023253.avif', '3000', '2024-07-15 00:30:53', '2024-07-15 00:30:53');

-- Dumping structure for table school_management.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table school_management.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.migrations: ~11 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2024_07_13_074505_create_quotes_table', 1),
	(7, '2024_07_13_082107_create_teachers_table', 1),
	(8, '2024_07_13_084102_create_standards_table', 1),
	(9, '2024_07_15_052237_create_banners_table', 1),
	(10, '2024_07_15_084111_create_admissions_table', 2),
	(11, '2024_07_15_102821_create_news_table', 3),
	(12, '2024_07_15_115758_create_students_table', 4);

-- Dumping structure for table school_management.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.news: ~1 rows (approximately)
INSERT INTO `news` (`id`, `news`, `created_at`, `updated_at`) VALUES
	(3, '7th Annual Sports Meet - 2024 - 2025 ( Theme - Universum) on 14th October 2024 - Saturday @ 10:00 AM.', '2024-07-17 00:50:40', '2024-07-17 00:50:40');

-- Dumping structure for table school_management.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.password_resets: ~0 rows (approximately)

-- Dumping structure for table school_management.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table school_management.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table school_management.quotes
CREATE TABLE IF NOT EXISTS `quotes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.quotes: ~0 rows (approximately)
INSERT INTO `quotes` (`id`, `name`, `author`, `created_at`, `updated_at`) VALUES
	(1, 'The biggest adventure you can take is to live the life of your dreams', NULL, '2024-07-15 01:29:20', '2024-07-16 03:56:53');

-- Dumping structure for table school_management.standards
CREATE TABLE IF NOT EXISTS `standards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.standards: ~5 rows (approximately)
INSERT INTO `standards` (`id`, `class`, `std`, `cc`, `year`, `created_at`, `updated_at`) VALUES
	(1, 'Class-09', 'IX', '4', '2024-25', '2024-07-13 07:17:09', '2024-07-16 23:33:53'),
	(2, 'Class-10', 'X', '2', '2024-25', '2024-07-13 07:17:40', '2024-07-13 07:17:40'),
	(3, 'Class-11', 'XI', '3', '2024-25', '2024-07-13 07:17:56', '2024-07-13 07:17:56'),
	(4, 'Class-12', 'XII', '7', '2024-25', '2024-07-13 07:18:11', '2024-07-13 07:18:11');

-- Dumping structure for table school_management.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` bigint unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_std_id_foreign` (`std_id`),
  CONSTRAINT `students_std_id_foreign` FOREIGN KEY (`std_id`) REFERENCES `standards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.students: ~95 rows (approximately)
INSERT INTO `students` (`id`, `name`, `gender`, `std_id`, `email`, `mobile`, `year`, `created_at`, `updated_at`) VALUES
	(1, 'Aakash C', 'Male', 2, 'cedoxe7987@sablecc.com', '234234234', '2024-25', '2024-07-15 06:57:06', '2024-07-15 06:57:06'),
	(3, 'Monish S', 'Male', 2, 'delfina28@example.net', '9293722664', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(4, 'Praveen D', 'Male', 2, 'cledner@example.org', '7741020268', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(5, 'Chelsea Emmerich', 'Female', 2, 'tmarvin@example.com', '8337495348', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(6, 'Roma Murazik DDS', 'Female', 2, 'walter.marcia@example.org', '9287873125', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(7, 'Robbie Fay', 'Female', 2, 'shanie.wintheiser@example.net', '8396252267', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(8, 'Juliet Kuhic', 'Female', 2, 'pnitzsche@example.com', '9818995576', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(9, 'Prof. Dennis Becker MD', 'Female', 2, 'sberge@example.org', '8996515436', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(10, 'Katelin Lindgren', 'Male', 2, 'maverick.collier@example.com', '8039402746', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(11, 'Shaina Crona', 'Female', 2, 'mbins@example.net', '8370863012', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(12, 'Mrs. River Hoeger I', 'Female', 2, 'torp.elton@example.org', '9498254286', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(13, 'Ransom Runte', 'Male', 2, 'zhoeger@example.org', '8582638655', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(14, 'Jacky Stokes', 'Male', 2, 'manuela.smitham@example.org', '8402456390', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(15, 'Marcella Tremblay', 'Female', 2, 'gaetano.krajcik@example.com', '9774969513', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(16, 'April Swift', 'Female', 2, 'gabriel01@example.com', '9093245843', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(17, 'Tressie Wolff IV', 'Female', 2, 'oconnell.reginald@example.com', '8529191129', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(18, 'Pamela Langworth', 'Female', 2, 'lemke.duncan@example.net', '9323453279', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(19, 'Ms. Jacquelyn Lueilwitz Jr.', 'Female', 2, 'hyatt.mandy@example.net', '7933830345', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(20, 'Miguel Hettinger', 'Male', 2, 'ekirlin@example.org', '7274027465', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(21, 'Mrs. Wendy Mraz', 'Female', 2, 'waters.lloyd@example.com', '9317820808', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(22, 'Birdie Cruickshank', 'Male', 2, 'qwalsh@example.org', '9429963954', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(23, 'Dr. Wilbert Langworth I', 'Male', 2, 'emory.shanahan@example.net', '8686771354', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(24, 'Dejah Beer', 'Male', 2, 'ansley73@example.com', '7030715116', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(25, 'Norwood Olson', 'Male', 2, 'bartoletti.katrine@example.com', '7743388844', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(26, 'Prof. Jessy Zboncak', 'Female', 2, 'pkulas@example.com', '9014962286', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(27, 'Prof. Jarred Gottlieb III', 'Female', 2, 'yfranecki@example.net', '7792756125', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(28, 'Charlotte Kihn', 'Female', 2, 'epredovic@example.net', '8864868118', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(29, 'Manley Greenholt', 'Male', 2, 'bernadine.feeney@example.org', '7577242861', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(30, 'Prof. Will Ferry Jr.', 'Female', 2, 'kattie.labadie@example.org', '9246826394', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(31, 'Dr. Freeman Okuneva IV', 'Female', 2, 'gregory.macejkovic@example.net', '8244014343', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(32, 'Nigel Hirthe', 'Male', 2, 'xkonopelski@example.com', '8065628467', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(33, 'Dr. Ernesto Reilly Jr.', 'Female', 2, 'esawayn@example.org', '7162785439', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(34, 'Mrs. Alvera Brown V', 'Female', 2, 'garland.strosin@example.org', '8654289794', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(35, 'Dr. Audreanne Gutkowski', 'Female', 2, 'bheidenreich@example.com', '8486688614', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(36, 'Trevor Denesik', 'Male', 2, 'clementine.wuckert@example.com', '9661785702', '2024-25', '2024-07-16 04:27:36', '2024-07-16 04:27:36'),
	(37, 'Prof. Saige Raynor', 'Male', 3, 'ferry.eugene@example.net', '7900220440', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(38, 'Barrett Braun', 'Male', 3, 'anibal.bergnaum@example.org', '9882528811', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(39, 'Deven Rice', 'Male', 3, 'reffertz@example.com', '9933077288', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(40, 'Roman Koss III', 'Male', 3, 'ypaucek@example.org', '9957838936', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(41, 'Joanne Bode', 'Male', 3, 'cydney22@example.com', '7358471353', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(42, 'Dr. Clara Smith', 'Male', 3, 'vmiller@example.com', '7712618595', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(43, 'Linwood Dibbert', 'Male', 3, 'darlene63@example.net', '9382578959', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(44, 'Pattie Hill', 'Female', 3, 'candice.rowe@example.com', '9293671803', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(45, 'Graham Swift III', 'Male', 3, 'lavon26@example.com', '7779576725', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(46, 'Raheem Douglas IV', 'Male', 3, 'considine.barrett@example.com', '7815075225', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(47, 'Dr. Ephraim Quigley', 'Male', 3, 'vprohaska@example.net', '9366154696', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(48, 'Prof. Jedediah Hegmann', 'Male', 3, 'tkutch@example.net', '7979911370', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(49, 'Roma Heidenreich', 'Male', 3, 'natasha89@example.com', '8491517010', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(50, 'Dr. Roman Funk', 'Female', 3, 'blanda.jason@example.net', '9596781846', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(51, 'Veda Kling', 'Female', 3, 'bartoletti.zachery@example.net', '9463047183', '2024-25', '2024-07-16 04:27:54', '2024-07-16 04:27:54'),
	(52, 'Bertram Douglas', 'Female', 4, 'fadel.eve@example.net', '9143567205', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(53, 'Justyn Senger', 'Female', 4, 'ghodkiewicz@example.net', '9475623410', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(54, 'Albertha Friesen', 'Male', 4, 'caleb.ferry@example.com', '9570539829', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(55, 'Darwin Crona', 'Female', 4, 'lemke.rosalyn@example.net', '7452736754', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(56, 'Mr. Victor Reichel II', 'Female', 4, 'zhermann@example.com', '9746767072', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(57, 'Marquise Torp', 'Male', 4, 'mccullough.riley@example.org', '7240707328', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(58, 'Verla Smitham', 'Female', 4, 'bednar.clare@example.com', '7759519973', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(59, 'Agustina Prohaska', 'Male', 4, 'gaylord.branson@example.org', '8099200165', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(60, 'Antonetta Dare Sr.', 'Female', 4, 'rkertzmann@example.org', '9354130569', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(61, 'Ms. Alexandra Jerde', 'Female', 4, 'roberts.fernando@example.org', '8174519945', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(62, 'Mr. Keagan Stroman Jr.', 'Male', 4, 'goyette.jerod@example.org', '9831566733', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(63, 'Miss Verdie Gaylord', 'Male', 4, 'alvis.lubowitz@example.com', '9727970891', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(64, 'Salvatore Bergnaum', 'Male', 4, 'bauch.maritza@example.net', '9050926351', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(65, 'America Watsica', 'Male', 4, 'jbrakus@example.org', '7264178487', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(66, 'Iva Wehner MD', 'Male', 4, 'bernita.schulist@example.com', '9694073831', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(67, 'Dr. Archibald Nienow', 'Female', 4, 'wmayer@example.com', '8539945841', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(68, 'Mr. Chadrick Mante', 'Female', 4, 'scrooks@example.net', '8068721436', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(69, 'Watson Kilback PhD', 'Male', 4, 'tavares.wilderman@example.com', '8504131099', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(70, 'Dessie Dach III', 'Female', 4, 'alford.osinski@example.org', '7363942772', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(71, 'Layla Olson', 'Female', 4, 'rheathcote@example.org', '9225206734', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(72, 'Filiberto Lindgren', 'Female', 4, 'reed20@example.org', '9270965415', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(73, 'Stanton Greenholt', 'Male', 4, 'angus59@example.net', '8540166440', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(74, 'Gino Kunze', 'Male', 4, 'dicki.fausto@example.com', '9068460425', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(75, 'Mr. Judge Thompson DDS', 'Male', 4, 'pagac.laney@example.com', '8697090078', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(76, 'Connie McKenzie MD', 'Female', 4, 'myriam.abbott@example.org', '9485177046', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(77, 'Wilfredo Muller', 'Male', 4, 'delfina45@example.com', '9272664929', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(78, 'Thea Connelly V', 'Female', 4, 'lulu78@example.com', '9310249429', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(79, 'Dolores Cassin V', 'Female', 4, 'schmeler.claudine@example.com', '8728215017', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(80, 'Linwood Sanford DVM', 'Male', 4, 'ona.schamberger@example.net', '9127126242', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(81, 'Josue Champlin', 'Male', 4, 'kerluke.leonel@example.com', '7398613310', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(82, 'Loraine Johns', 'Male', 4, 'kenya.waters@example.org', '7704264203', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(83, 'Ms. Myrna Mayert', 'Female', 4, 'aylin79@example.com', '9553289512', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(84, 'Dejuan Nicolas PhD', 'Female', 4, 'gabe.schmitt@example.com', '7390140274', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(85, 'Dr. Maud Hudson IV', 'Male', 4, 'keaton.cormier@example.net', '9095568980', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(86, 'Carmela Lebsack DDS', 'Female', 4, 'jazmin.schultz@example.com', '8224144678', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(87, 'Daphne Hayes', 'Male', 4, 'keeling.santino@example.org', '8307457588', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(88, 'Miss Magali Berge IV', 'Male', 4, 'katelyn69@example.org', '7851995478', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(89, 'Enoch Dach II', 'Male', 4, 'warren.harber@example.net', '8894639911', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(90, 'Freda Swift', 'Male', 4, 'iemard@example.org', '9391089483', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(91, 'Miss Renee Botsford II', 'Female', 4, 'utowne@example.org', '8702714993', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(92, 'Ms. Karina Heathcote', 'Male', 4, 'dicki.amya@example.net', '9172573349', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(93, 'Dee Feil', 'Male', 4, 'istreich@example.net', '8594242485', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(94, 'Mr. Vito Waters III', 'Male', 4, 'diana.rempel@example.org', '7793975096', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(95, 'Eldora Sipes', 'Female', 4, 'ajenkins@example.org', '7066666214', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21'),
	(96, 'Prof. Mazie Heller III', 'Female', 4, 'ppollich@example.org', '8632030095', '2024-25', '2024-07-16 04:28:21', '2024-07-16 04:28:21');

-- Dumping structure for table school_management.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.teachers: ~8 rows (approximately)
INSERT INTO `teachers` (`id`, `name`, `gender`, `role`, `joined_at`, `created_at`, `updated_at`) VALUES
	(1, 'Srinivasan', 'Male', 'English', '2017-02-13', '2024-07-13 05:42:48', '2024-07-16 23:22:28'),
	(2, 'Chellammal', 'Female', 'Science', '2012-07-13', '2024-07-13 05:43:31', '2024-07-13 05:43:31'),
	(3, 'Sita Raman', 'Female', 'Chemistry', '2022-02-13', '2024-07-13 05:43:58', '2024-07-16 23:34:18'),
	(4, 'Ezhumalai', 'Male', 'Maths', '2015-11-18', '2024-07-13 05:44:23', '2024-07-13 05:44:23'),
	(5, 'Balamurugan', 'Male', 'Tamil', '2023-06-13', '2024-07-13 05:45:21', '2024-07-13 05:45:21'),
	(6, 'Santhanam', 'Female', 'Social', '2009-06-13', '2024-07-13 05:46:19', '2024-07-13 05:46:19'),
	(7, 'Rajaeshwari', 'Female', 'Physics', '2017-06-13', '2024-07-13 06:32:26', '2024-07-13 06:32:26'),
	(8, 'Santhosh R', 'Male', 'Yoga', '2024-02-09', '2024-07-16 03:57:31', '2024-07-16 03:57:31');

-- Dumping structure for table school_management.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table school_management.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Moni', 'cedoxe7987@sablecc.com', NULL, '$2y$12$CvUi3aMgjwLCJm0RiS7ABOU2QiZoSfY.O8aHYHTitUJxSjKMEwA2S', NULL, '2024-07-17 01:35:21', '2024-07-17 01:35:21');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
