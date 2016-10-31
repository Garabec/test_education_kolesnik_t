-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 30 2016 г., 19:13
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `continent`
--

CREATE TABLE `continent` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `continent`
--

INSERT INTO `continent` (`id`, `name`) VALUES
(1, 'Eurasia'),
(2, 'Africa'),
(3, 'North'),
(4, 'America South'),
(5, 'America Australia'),
(6, 'Antarctica');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `shot_name` char(2) DEFAULT NULL,
  `land_area` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `president` varchar(50) DEFAULT NULL,
  `continent_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `shot_name`, `land_area`, `population`, `president`, `continent_id`) VALUES
(1, 'Botswana', 'BW', 465315, 1445348190, 'Christine King', 1),
(2, 'United States', 'US', 183303, 1290893959, 'Walter Ford', 6),
(3, 'China', 'CN', 859104, 541575054, 'Walter Crawford', 5),
(4, 'Portugal', 'PT', 683546, 4000000, 'Steven Ryan', 1),
(5, 'Japan', 'JP', 174053, 4000000, 'Debra Alvarez', 6),
(6, 'Canada', 'CA', 945176, 1327777007, 'Phyllis Price', 5),
(7, 'Germany', 'DE', 821929, 4000000, 'Johnny Lane', 4),
(9, 'Ukraine', 'UA', 670720, 4000000, 'Petr Poroshenko', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'Mongolian'),
(2, 'Swedish'),
(3, 'Papiamento'),
(4, 'Belarusian'),
(5, 'Nepali'),
(6, 'Burmese'),
(7, 'Bulgarian'),
(8, 'Sotho'),
(9, 'Tok Pisin');

-- --------------------------------------------------------

--
-- Структура таблицы `speaking`
--

CREATE TABLE `speaking` (
  `id` int(11) NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `speaking`
--

INSERT INTO `speaking` (`id`, `language_id`, `country_id`) VALUES
(1, 8, 2),
(2, 5, 7),
(3, 2, 6),
(4, 4, 6),
(5, 2, 5),
(6, 3, 4),
(7, 9, 1),
(8, 6, 4),
(9, 2, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `continent_id` (`continent_id`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `speaking`
--
ALTER TABLE `speaking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `continent`
--
ALTER TABLE `continent`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `speaking`
--
ALTER TABLE `speaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `c_continent_id` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `speaking`
--
ALTER TABLE `speaking`
  ADD CONSTRAINT `c_speaking_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `l_speaking_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
