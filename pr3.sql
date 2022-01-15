-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2021 г., 14:24
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pr3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rasta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `client`, `shop`, `rasta`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Xush kelibsiz!', 'Our company has many Years of experience and specializes in manufacturing, salling, serviceing and reparing cardan shafts (cardans) for various vehicies technological equipment,Tractors, Special machinery and agricultural machinery of various domestic and foreign manfacturess fot more infromation please click the button.We inform our upcoming work.', '1640430215detals3.jpg', '1200', '99', '99', 'har kuni ochiqmiz', '2021-12-25 06:03:35', '2021-12-27 00:31:30');

-- --------------------------------------------------------

--
-- Структура таблицы `announs`
--

CREATE TABLE `announs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `announs`
--

INSERT INTO `announs` (`id`, `title`, `description`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432735kraska.jpg', '2021-12-25 06:45:35', '2021-12-25 06:48:29'),
(2, 'item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432759detals1.jpg', '2021-12-25 06:45:59', '2021-12-25 06:45:59'),
(3, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432793detals2.jpg', '2021-12-25 06:46:33', '2021-12-25 06:46:33'),
(4, 'item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432808detals3.jpg', '2021-12-25 06:46:48', '2021-12-25 06:46:48'),
(5, 'item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432827i.jpg', '2021-12-25 06:47:07', '2021-12-25 06:47:07'),
(6, 'item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640432842kraska.jpg', '2021-12-25 06:47:22', '2021-12-25 06:47:22');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'xczcx', 'admin@admin.com', 'xczcx', 'xczcx', '2021-12-28 05:18:30', '2021-12-28 05:18:30'),
(2, 'test', 'test@gmail.com', 'test', 'test', '2021-12-29 05:56:15', '2021-12-29 05:56:15');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `infos`
--

INSERT INTO `infos` (`id`, `address`, `phone`, `email`, `instagram`, `telegram`, `youtube`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'yangi bozor1', '+99891 xxx xx x', 'xxxxx1@gmail.com', 'https://www.instagram.com/', 'https://web.telegram.org/', 'https://www.youtube.com/', 'https://www.facebook.com/', NULL, '2021-12-27 02:38:32');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_24_042658_create_posts_table', 1),
(6, '2021_12_16_064211_create_rastas_table', 1),
(7, '2021_12_16_100428_create_sliders_table', 1),
(8, '2021_12_16_104034_create_abouts_table', 1),
(9, '2021_12_16_110652_create_products_table', 1),
(10, '2021_12_17_085713_create_open_data_table', 1),
(11, '2021_12_17_093548_create_contacts_table', 1),
(12, '2021_12_17_112050_create_announs_table', 1),
(13, '2021_12_27_065011_create_infos_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `open_data`
--

CREATE TABLE `open_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `open_data`
--

INSERT INTO `open_data` (`id`, `title`, `description`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, '1-sarlovha', 'Libero beatae rem rerum impedit repellat fuga ut quisquam, quia soluta autem molestias.', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640585514detals3.jpg', '2021-12-27 01:11:54', '2021-12-27 01:11:54'),
(2, 'sdad', 'sadsa', 'dsadasdsa', '1640586434detals1.jpg', '2021-12-27 01:27:14', '2021-12-27 01:27:14'),
(3, 'lorem', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', 'The image input has many options. By default if you do not specify any options no problem... Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640586450detals3.jpg', '2021-12-27 01:27:30', '2021-12-27 01:27:30'),
(4, 'loerrsdfs', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '. Your image will still be uploaded. But, if you want to resize an image, set the quality of the image, or specify thumbnails for the uploaded image you will need to specify those details.', '1640586469detals2.jpg', '2021-12-27 01:27:49', '2021-12-27 01:27:49');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rasta_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `rasta_id`, `name`, `description`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Item', 'Libero beatae rem rerum impedit repellat the fuga ut quisquam', '20 000 so`m', '1', '1640431262detal4.jpg', '2021-12-25 06:21:02', '2021-12-25 06:21:02'),
(2, 3, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '20 000 so`m', '1', '1640431318detals1.jpg', '2021-12-25 06:21:58', '2021-12-25 06:21:58'),
(3, 1, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '50 000 so`m', '1', '1640431336detals2.jpg', '2021-12-25 06:22:16', '2021-12-25 06:22:16'),
(4, 4, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '80 000 so`m', '1', '1640431353detals3.jpg', '2021-12-25 06:22:33', '2021-12-25 06:22:33'),
(5, 2, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '50 000 so`m', '1', '1640431380i.jpg', '2021-12-25 06:23:00', '2021-12-25 06:23:00'),
(6, 5, 'Item', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '75000 so\'m', '0', '1640431397kraska.jpg', '2021-12-25 06:23:17', '2021-12-25 06:23:17');

-- --------------------------------------------------------

--
-- Структура таблицы `rastas`
--

CREATE TABLE `rastas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rastas`
--

INSERT INTO `rastas` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Qurilishga oid narsalar sotiladigan rasta', 'Libero beatae rem rerum impedit repellat fuga ut quisquam, quia soluta autem', '1640430863detal4.jpg', '2021-12-25 06:14:23', '2021-12-25 06:14:23'),
(2, 'Qurilishga oid narsalar sotiladigan rasta!', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640430891detals1.jpg', '2021-12-25 06:14:51', '2021-12-25 06:14:51'),
(3, 'Qurilishga oid narsalar sotiladiga rasta', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640430915detals2.jpg', '2021-12-25 06:15:15', '2021-12-25 06:15:15'),
(4, 'Qurilishga oid narsalar sotiladiga rasta', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640430928detals3.jpg', '2021-12-25 06:15:28', '2021-12-25 06:15:28'),
(5, 'Qurilishga oid narsalar sotiladiga rasta', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640430940i.jpg', '2021-12-25 06:15:40', '2021-12-25 06:15:40'),
(6, 'Qurilishga oid narsalar sotiladiga rasta', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640430950kraska.jpg', '2021-12-25 06:15:50', '2021-12-25 06:15:50');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'birinchi sarlovha', 'Bozorimizga xush kelibsiz', '1640429679detals2.jpg', '2021-12-25 05:54:39', '2021-12-25 05:54:39'),
(2, '2-sarlovha', 'Libero beatae rem rerum impedit repellat fuga ut quisquam', '1640582103i.jpg', '2021-12-27 00:15:03', '2021-12-27 00:15:03');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'abduhalimabdulkhamidov@gmail.com', NULL, '$2y$10$BRr.uDYuBpcKPhATG/Vm1eqoUwzDn.aHovqNJrJKALcz0q4NOtzoW', 'AjGYT6Q3bABJ2lTcOP48Uusr396Thh7vKXIJe0kTIHDIt3Ibs1Dp8zu9WRNL', '2021-12-25 05:51:36', '2021-12-25 05:51:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `announs`
--
ALTER TABLE `announs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `open_data`
--
ALTER TABLE `open_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rastas`
--
ALTER TABLE `rastas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `announs`
--
ALTER TABLE `announs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `open_data`
--
ALTER TABLE `open_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `rastas`
--
ALTER TABLE `rastas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
