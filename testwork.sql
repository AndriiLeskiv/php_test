-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Бер 21 2022 р., 19:22
-- Версія сервера: 10.4.22-MariaDB
-- Версія PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `testwork`
--

-- --------------------------------------------------------

--
-- Структура таблиці `information`
--

CREATE TABLE `information` (
  `id` int(15) NOT NULL,
  `profession` varchar(240) DEFAULT NULL,
  `firstname` varchar(240) DEFAULT NULL,
  `lastname` varchar(240) DEFAULT NULL,
  `email` varchar(240) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `confirm` varchar(120) DEFAULT NULL,
  `school` varchar(240) DEFAULT NULL,
  `currentgrade` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `online_search` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `information`
--

INSERT INTO `information` (`id`, `profession`, `firstname`, `lastname`, `email`, `password`, `confirm`, `school`, `currentgrade`, `date`, `online_search`) VALUES
(21, 'on', 'John', 'Doe', 'andrijleskiv15@gmail.com', '1010', '1010', 'High School1', 'High School Freshman1', '2022-03-02', 'Online_search4');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `information`
--
ALTER TABLE `information`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
