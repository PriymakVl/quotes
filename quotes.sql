-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 29 2019 г., 17:01
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quotes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `patronymic`, `surname`, `date_birth`, `status`) VALUES
(1, 'Джером', 'Джером', '', 'Джером К. Джером', '', 1),
(2, 'TEst', 'test', 'test', 'dddd', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `description` text NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `id_author`, `id_cat`, `description`, `state`, `rating`, `status`) VALUES
(1, 'Трое в лодке, не считая собаки', 1, 0, '', 0, 4, 1),
(2, 'Трое в лодке, не считая собаки', 2, 0, '', 2, 7, 1),
(3, 'Красная таблетка', 1, 0, 'психология', 1, 3, 1),
(4, 'ыыыы', 1, 17, 'ввввввввввв', 0, 1, 1),
(5, 'Красная таблетка2', 1, 3, 'психология', 0, 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_parent`, `status`) VALUES
(1, 'Счастье', 0, 1),
(2, 'Работа', 0, 1),
(3, 'Дом', 0, 1),
(4, 'Семья', 0, 1),
(5, 'Увлечения', 0, 1),
(6, 'Дети', 0, 1),
(7, 'Смысл жизни', 0, 1),
(8, 'Разное', 0, 1),
(9, 'Здоровье', 0, 1),
(10, 'Давление', 9, 1),
(14, 'футбол', 5, 1),
(15, 'хозяйство', 3, 1),
(16, 'територия', 3, 1),
(17, 'Не задана', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `id_quote` int(11) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id`, `id_quote`, `status`) VALUES
(1, 1, 0),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `id_author` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_cat` int(11) NOT NULL,
  `rating` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `quotes`
--

INSERT INTO `quotes` (`id`, `text`, `id_author`, `id_book`, `id_cat`, `rating`, `status`) VALUES
(1, 'Сарказм и юмор между собой не связаны. Юмор проявление любви, сарказм – ненависти', 0, 0, 1, 3, 1),
(2, 'Решение экономических проблем не приносит счастье', 0, 0, 0, 7, 1),
(3, 'Правда в том, что нас имеют остальное детали', 0, 0, 0, 0, 1),
(4, 'Спешить медленно', 0, 0, 0, 0, 1),
(7, 'Несчастные люди не созидатели', 0, 0, 0, 0, 1),
(5, 'История слуга действующей власти', 0, 0, 0, 9, 1),
(6, 'Многим важнее казаться, чем быть', 0, 0, 0, 5, 1),
(8, 'Если конкуренты закрыты, ты должен быть открытым', 0, 0, 0, 0, 1),
(9, 'Тюремщик в тюрьме тоже не свободен\r\n', 0, 0, 0, 0, 1),
(10, 'Любая идея опасна если она не имеет здравого смысла\r\n', 0, 0, 0, 0, 1),
(11, 'Свобода и вседозволенность разные понятия\r\n', 0, 0, 0, 0, 1),
(12, 'Хороша та семья в которой дети и родители имеют равные права\r\n', 0, 0, 0, 0, 1),
(13, 'Хорошие привычки можно развить в любом возрасте\r\n', 0, 0, 0, 0, 1),
(14, 'Когда ребенок достаточно рано обретает свободу, ему не приходится проживать стадию неискренности и притворства\r\n', 0, 0, 0, 0, 1),
(15, 'Больше всего в детях поражает абсолютная искренность\r\n', 0, 0, 0, 0, 1),
(16, 'Если вы искренне, остальное придет само\r\n', 0, 0, 0, 0, 1),
(17, 'Тюремщик в тюрьме тоже не свободен\r\n', 0, 0, 0, 0, 1),
(18, 'Любая идея опасна если она не имеет здравого смысла\r\n', 0, 0, 0, 0, 1),
(19, 'Свобода и вседозволенность разные понятия\r\n', 0, 0, 0, 0, 1),
(20, 'Хороша та семья в которой дети и родители имеют равные права\r\n', 0, 0, 0, 0, 1),
(21, 'Хорошие привычки можно развить в любом возрасте\r\n', 0, 0, 0, 0, 1),
(22, 'Когда ребенок достаточно рано обретает свободу, ему не приходится проживать стадию неискренности и притворства\r\n', 0, 0, 0, 0, 0),
(23, 'Больше всего в детях поражает абсолютная искренность\r\n', 0, 0, 0, 0, 1),
(24, 'Если вы искренне, остальное придет само\r\n', 0, 0, 0, 0, 0),
(25, 'Чтобы стать умным, достаточно прочитать 10 книг, но, чтобы найти их, нужно прочитать тысячи', 0, 0, 0, 0, 0),
(26, 'test quote', 0, 0, 15, 0, 1),
(27, 'test 2', 0, 0, 15, 0, 1),
(28, 'test 3', 0, 0, 15, 0, 1),
(29, 'Тюремщик в тюрьме тоже не свободен\r\n', 0, 0, 0, 0, 1),
(30, 'Любая идея опасна если она не имеет здравого смысла\r\n', 0, 0, 0, 0, 1),
(31, 'Свобода и вседозволенность разные понятия\r\n', 0, 0, 0, 0, 1),
(32, 'Хороша та семья в которой дети и родители имеют равные права\r\n', 0, 0, 0, 0, 1),
(33, 'Хорошие привычки можно развить в любом возрасте\r\n', 0, 0, 0, 0, 1),
(34, 'Когда ребенок достаточно рано обретает свободу, ему не приходится проживать стадию неискренности и притворства\r\n', 0, 0, 0, 0, 1),
(35, 'Больше всего в детях поражает абсолютная искренность\r\n', 0, 0, 0, 0, 1),
(36, 'Если вы искренне, остальное придет само\r\n', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `quote_tags`
--

CREATE TABLE `quote_tags` (
  `id` int(11) NOT NULL,
  `id_quote` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quote_tags`
--
ALTER TABLE `quote_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `quote_tags`
--
ALTER TABLE `quote_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
