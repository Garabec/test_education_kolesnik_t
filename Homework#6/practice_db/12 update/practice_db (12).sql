-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 30 2016 г., 17:08
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
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `shot_name` char(2) DEFAULT NULL,
  `land_area` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `continent` varchar(15) DEFAULT NULL,
  `president` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `shot_name`, `land_area`, `population`, `continent`, `president`) VALUES
(1, 'Botswana', 'BW', 465315, 1445348190, 'Africa', 'Christine King'),
(2, 'United States', 'US', 183303, 1290893959, 'North America', 'Walter Ford'),
(3, 'China', 'CN', 859104, 541575054, 'Asia', 'Walter Crawford'),
(4, 'Portugal', 'PT', 683546, 4000000, 'Eurasia', 'Steven Ryan'),
(5, 'Japan', 'JP', 174053, 4000000, 'Eurasia', 'Debra Alvarez'),
(6, 'Canada', 'CA', 945176, 1327777007, 'North America', 'Phyllis Price'),
(7, 'Germany', 'DE', 821929, 4000000, 'Eurasia', 'Johnny Lane'),
(8, 'China', 'CN', 416295, 4000000, 'Eurasia', 'Theresa Lopez'),
(9, 'Ukraine', 'UA', 670720, 4000000, 'Eurasia', 'Petr Poroshenko'),
(10, 'China', 'CN', 685682, 4000000, 'Eurasia', 'Bobby Hunter');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
