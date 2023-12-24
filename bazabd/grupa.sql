-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 24 2023 г., 12:07
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `development`
--

-- --------------------------------------------------------

--
-- Структура таблицы `grupa`
--

DROP TABLE IF EXISTS `grupa`;
CREATE TABLE IF NOT EXISTS `grupa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_group` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `grupa`
--

INSERT INTO `grupa` (`id`, `name_group`, `date`) VALUES
(6, 'Фотографы', '2023-12-10'),
(3, 'Инженеры', '2023-12-01'),
(4, 'Сварщики', '2023-12-06'),
(5, 'Повара', '2023-12-15'),
(7, 'Логисты', '2023-12-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
