-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2021 at 07:49 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
AUTOCOMMIT = 0;
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs`
(
    `id`         bigint UNSIGNED NOT NULL,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations`
(
    `id`        int UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int                                     NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES (1, '2014_10_12_000000_create_users_table', 1),
       (2, '2014_10_12_100000_create_password_resets_table', 1),
       (3, '2019_08_19_000000_create_failed_jobs_table', 1),
       (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
       (5, '2021_12_10_095720_create_vaccine_table', 1),
       (6, '2021_12_10_095737_create_patient_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients`
(
    `id`         bigint UNSIGNED NOT NULL,
    `vaccine_id` bigint UNSIGNED NOT NULL,
    `name`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `nik`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `alamat`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `image_ktp`  varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `no_hp`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `vaccine_id`, `name`, `nik`, `alamat`, `image_ktp`, `no_hp`, `created_at`, `updated_at`)
VALUES (1, 8, 'Rachel Latika Yulianti', '1801224408057301', 'Kpg. Nangka No. 482, Gorontalo 18469, Kalsel',
        'https://source.unsplash.com/350x200/?smile', '027 3437 659', '2021-12-12 05:48:58', '2021-12-12 05:48:58'),
       (2, 7, 'Wawan Akarsana Prayoga M.Kom.', '3201916205168477',
        'Kpg. Tambak No. 41, Administrasi Jakarta Selatan 87078, DIY', 'https://source.unsplash.com/350x200/?smile',
        '(+62) 708 8365 376', '2021-12-12 05:48:58', '2021-12-12 05:48:58'),
       (3, 9, 'Utama Hardana Simanjuntak', '3371664312099912', 'Jr. Banceng Pondok No. 28, Kendari 46061, Malut',
        'https://source.unsplash.com/350x200/?smile', '(+62) 954 9418 810', '2021-12-12 05:48:58',
        '2021-12-12 05:48:58'),
       (4, 3, 'Endah Kuswandari S.Gz', '5202193010064395', 'Jr. Rumah Sakit No. 228, Bogor 87608, Kaltim',
        'https://source.unsplash.com/350x200/?smile', '0327 9317 483', '2021-12-12 05:48:58', '2021-12-12 05:48:58'),
       (5, 8, 'Bajragin Ramadan', '5319935907149334', 'Psr. B.Agam Dlm No. 717, Magelang 37887, DKI',
        'https://source.unsplash.com/350x200/?smile', '(+62) 264 3777 7522', '2021-12-12 05:48:58',
        '2021-12-12 05:48:58'),
       (6, 9, 'Asirwanda Gaiman Natsir', '9107584602003525', 'Jln. Gatot Subroto No. 14, Tegal 45757, NTB',
        'https://source.unsplash.com/350x200/?smile', '(+62) 894 857 004', '2021-12-12 05:48:58',
        '2021-12-12 05:48:58'),
       (7, 6, 'Titi Siska Yuniar', '1112675808933853', 'Psr. Juanda No. 678, Kediri 80947, Sulsel',
        'https://source.unsplash.com/350x200/?smile', '0236 5765 0346', '2021-12-12 05:48:58', '2021-12-12 05:48:58'),
       (8, 9, 'Sabar Tarihoran', '7402220603084554', 'Kpg. Rajawali Barat No. 621, Tangerang 20790, Babel',
        'https://source.unsplash.com/350x200/?smile', '0940 6082 7405', '2021-12-12 05:48:58', '2021-12-12 05:48:58'),
       (9, 2, 'Hairyanto Megantara', '3375212709156485', 'Kpg. Moch. Yamin No. 461, Pematangsiantar 28552, Bengkulu',
        'https://source.unsplash.com/350x200/?smile', '(+62) 684 1931 7279', '2021-12-12 05:48:58',
        '2021-12-12 05:48:58'),
       (10, 7, 'Gangsa Darmana Nababan', '5308701506009011', 'Ds. Pasirkoja No. 23, Tual 38537, Gorontalo',
        'https://source.unsplash.com/350x200/?smile', '(+62) 489 0990 599', '2021-12-12 05:48:58',
        '2021-12-12 05:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens`
(
    `id`             bigint UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint UNSIGNED NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci,
    `last_used_at`   timestamp NULL DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `id`                bigint UNSIGNED NOT NULL,
    `name`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines`
(
    `id`          bigint UNSIGNED NOT NULL,
    `name`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `price`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `image`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `price`, `description`, `image`)
VALUES (1, 'Janssen', '193190',
        'Facere laborum corporis ut quia. At sed consequuntur qui qui aut. Sed reprehenderit qui possimus et. Vel consequatur consequatur est qui sit ut ipsam.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (2, 'Bio Farma', '222469',
        'Et a veniam aut necessitatibus voluptates quidem. A et ad eveniet quia et rem. Deleniti ad quia est optio sit qui sapiente ut.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (3, 'Sinopharm', '270853',
        'Consequuntur rerum dolorem voluptate delectus. Repellat nihil et sint hic et consequuntur et. Omnis sint modi a praesentium. Porro ab voluptatem ut nobis est et.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (4, 'Moderna', '203683',
        'Exercitationem consequatur voluptatem officiis et enim et. Qui porro vero in natus. Tenetur vel quo ut et consequatur quae. Rem et sapiente vel quis.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (5, 'AstraZeneca', '180152',
        'Pariatur minima ut eaque saepe tenetur voluptatem. Nisi aliquid dolorem dolores inventore dolores est doloribus. Consequatur amet dolores nisi eos nihil sit aut.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (6, 'Pfizer', '161362',
        'Qui a dolore voluptatem sit quia accusantium. Nisi sint corporis rerum natus itaque. Quis eligendi minima numquam qui minima provident blanditiis.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (7, 'Sinovac', '174031', 'Aut mollitia ea autem officiis. Dolore placeat et et omnis.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (8, 'Convidecia', '154908',
        'Nam ut est quasi commodi in. Sed est sequi in. Aut voluptatibus nostrum tenetur voluptatem aut. Expedita mollitia esse repudiandae autem.',
        'https://source.unsplash.com/350x200/?vaccines'),
       (9, 'Sputnik V', '282213',
        'Et eos dolorem consequatur eum voluptas dolor possimus rerum. Ut consequatur quod sit distinctio ratione qui quidem. Reiciendis nesciunt placeat voluptas quos perspiciatis. Dolorum quo at sunt voluptas qui rem.',
        'https://source.unsplash.com/350x200/?vaccines');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
    ADD PRIMARY KEY (`id`),
  ADD KEY `patients_vaccine_id_foreign` (`vaccine_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
    MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
    ADD CONSTRAINT `patients_vaccine_id_foreign` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
