-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2020 г., 17:40
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `datadb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `hair_color` varchar(50) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `programming_lang` varchar(150) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `years_experience` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `interview`
--

INSERT INTO `interview` (`id`, `hair_color`, `age`, `programming_lang`, `birthday`, `years_experience`) VALUES
(1, 'Брюнет', 34, ' PASCAL', '1985-12-17', 12),
(2, 'Брюнет', 34, ' PASCAL, BASIC', '1985-12-18', 12),
(3, 'Лысый', 34, ' PASCAL', '1986-12-17', 12),
(4, 'Блондин', 34, ' FORTRAN, PASCAL', '2020-08-02', 21),
(13, 'Брюнет', 35, ' PASCAL, BASIC', '1990-07-31', 15),
(14, 'Брюнет', 44, ' FORTRAN, PASCAL, BASIC', '2020-08-03', 13),
(15, 'Брюнет', 54, ' FORTRAN, ADA', '2020-08-02', 13),
(16, 'Брюнет', 33, ' FORTRAN, PASCAL, BASIC', '2020-08-10', 15),
(17, 'Брюнет', 22, ' FORTRAN, PASCAL, BASIC', '2020-08-03', 17);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
