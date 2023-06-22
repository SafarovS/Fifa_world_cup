-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2023 г., 15:02
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fifa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `allteams`
--

CREATE TABLE `allteams` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `couter` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `allteams`
--

INSERT INTO `allteams` (`id`, `name`, `couter`, `flag`) VALUES
(1, 'Uzbekistan', 'Asia', 'uz.png'),
(2, 'Japan', 'Asia', 'jap.png'),
(3, 'United Stats ', 'North Amerca', 'usa.png'),
(4, 'Belguim', 'Europe', 'bel.png'),
(5, 'Spain', 'Europe', 'esp.png'),
(6, 'Germany', 'Europe', 'ger.png'),
(7, 'Urugvay', 'South Amerca', 'urg.png'),
(8, 'Marocco', 'Africa', 'mar.png'),
(9, 'New Zelland', 'Oceania', 'nzl.png'),
(10, 'Portugal', 'Europe', 'por.png'),
(11, 'Italy', 'Europe', 'ita.png'),
(12, 'South Korea', 'Asia', 'kor.png'),
(13, 'Australia', 'Asia', 'aus.png'),
(14, 'Saudi Arabian', 'Asia', 'ksa.png'),
(15, 'Ir Iran', 'Asia', 'irn.png'),
(16, 'Iraq', 'Asia', 'irq.png'),
(17, 'India', 'Asia', 'ind.png'),
(18, 'Syria', 'Asia', 'syr.png'),
(19, 'Pakistan', 'Asia', 'pak.png'),
(20, 'France', 'Europe', 'fra.png'),
(21, 'England', 'Europe', 'eng.png'),
(22, 'Crotia', 'Europe', 'cro.png'),
(23, 'Chexia', 'Europe', 'chex.png'),
(24, 'Argentina', 'South Amerca', 'arg.png'),
(25, 'Qatar', 'Asia', 'qat.png');

-- --------------------------------------------------------

--
-- Структура таблицы `groupname`
--

CREATE TABLE `groupname` (
  `id` int(4) NOT NULL,
  `name` varchar(4) NOT NULL,
  `positon` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `couter` varchar(255) NOT NULL,
  `group_name` varchar(4) NOT NULL,
  `grp_positon` varchar(4) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `couter`, `group_name`, `grp_positon`, `flag`) VALUES
(1, 'England', 'Europe', 'B', 'B4', 'eng.png'),
(2, 'France', 'Europe', 'F', 'F2', 'fra.png'),
(3, 'Poland', 'Europe', 'A', 'A1', 'pol.png'),
(4, 'Germany', 'Europe', 'E', 'E3', 'ger.png'),
(5, 'Belguim', 'Europe', 'C', 'C2', 'bel.png'),
(6, 'Spain', 'Europe', 'D', 'D1', 'esp.png'),
(7, 'Australia', 'Asia', 'E', 'E2', 'aus.png'),
(8, 'Japan', 'Asia', 'D', 'D4', 'jap.png'),
(9, 'SouthKorea', 'Asia', 'B', 'B1', 'kor.png'),
(10, 'Uzbekisat', 'Asia', 'A', 'A4', 'uz.png'),
(11, 'Paraguay', 'Asia', 'F', 'F3', 'par.png'),
(12, 'Cameroon', 'Afrika', 'C', 'C3', 'cam.png'),
(13, 'NewZelland', 'Afrika', 'B', 'B2', 'nzl.png'),
(14, 'Code duar', 'Afrika', 'F', 'F1', 'cod.png'),
(15, 'Tunisa', 'Afrika', 'E', 'E1', 'tun.png'),
(16, 'Portugal', 'south America', 'A', 'A3', 'por.png'),
(17, 'Italy', 'south America', 'C', 'C1', 'ita.png'),
(18, 'Brasil', 'south America', 'B', 'B3', 'bra.png'),
(19, 'Argentina', 'south America', 'E', 'E4', 'arg.png'),
(20, 'Columbia', 'south America', 'D', 'D3', 'col.png'),
(21, 'Canada', 'North America', 'F', 'F4', 'can.png'),
(22, 'CostaRica', 'North America', 'C', 'C4', 'cos.png'),
(23, 'UnitedStaes', 'North America', 'D', 'D2', 'usa.png'),
(24, 'Mexico', 'North America', 'A', 'A2', 'mex.png'),
(25, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `couter` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allteams`
--
ALTER TABLE `allteams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groupname`
--
ALTER TABLE `groupname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allteams`
--
ALTER TABLE `allteams`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `groupname`
--
ALTER TABLE `groupname`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
