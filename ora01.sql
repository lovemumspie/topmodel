-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 22 2019 г., 20:56
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ora01`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `created_at`, `updated_at`) VALUES
(1, 'krygina', 'Елена Крыгина — топ-визажист и beauty-эксперт, автор одноименного блога на YouTube канале, насчитывающего более 800 тысяч подписчиков, основательница семплингового сервиса Krygina Box, студий красоты в Москве Krygina Studio, интернет-магазина косметики Krygina Beauty Store, ежегодного фестиваля красоты Beauty Day, автор книги «Макияж» и основатель собственного бренда косметики Krygina Cosmetics.\r\n\r\nЛена выступает ведущим визажистом на модных показах и съемках, дает мастер-классы во всех крупных городах России, ведет колонку о  beauty-новинках в журнале Glamour.\r\n\r\nАудитория Елены выходит далеко за пределы России: ее всегда рады видеть в Нью-Йорке, Лондоне, Берлине и других крупных городах мира.', 'krygina_com', NULL, NULL),
(2, 'Ольга ТОМИНА', 'PROFESSIONAL MAKE-UP School by Olga Tomina\r\nANATOMIA Студия макияжа  ', 'tomina_studio', NULL, NULL),
(4, 'slava-chaika', 'Official Makeup Artist L\'Oreal Paris Ukraine\r\nИНДИВИДУАЛЬНОЕ ОБУЧЕНИЕ МАКИЯЖУ +380973209555(whatsapp)\r\nwww.facebook.com/slava.chaika', 'slavachaika', NULL, NULL),
(5, 'Инна Леута', 'Инна Леута 💟 Обучение Макияж\r\nАрт-директор @academie_stilya \r\nСоздатель линейки @academic.brushes \r\n🔥15 лет в сфере красоты \r\n🔥мои выпускники - самые известные мастера ', 'innaleuta', NULL, NULL),
(6, 'Рина Скутова', 'Рина Скутова Визажист\r\nMAKE•UP•ARTIST\r\n🏆Make Up Artist of the Year VklybeTv Awards\'17\r\nСотрудничество 👉🏻\r\n+375445786617\r\n#высшаяонлайншколавизажа\r\nБесплатный онлайн мастер-класс👇\r\nkurs-visagist.ru/tap', 'skutova_rina', NULL, NULL),
(7, 'Contacts', 'Phone: 80447800998\r\nemail: geroi.minsk@gmail.com\r\nskype: tanyakruzhaeva', 'tanyakruzhaeva', NULL, NULL),
(8, 'About', 'You heard it here first, Mmmmitchell is back with another game-changing drop. Say hello to his all new glitter eyeliner toppers, available in three shimmering shades. All three liners are super-fast drying and can be used anywhere on your face you feel needs some extra sparkle: your eyes, your lips or your cheeks. Trust us, you don’t want to miss these.', 'aboutmmmmitchel', NULL, NULL);

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
(4, '2019_10_22_153820_create_maintexts_table', 2);

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
(1, 'Tanya', 'geroi.minsk@gmail.com', NULL, '$2y$10$UnqqPygHujD/Q93LIYvsgOj4/kyPiDm7xu8ofTSaveblJ1DuHYgRC', NULL, '2019-10-17 12:46:44', '2019-10-17 12:46:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
