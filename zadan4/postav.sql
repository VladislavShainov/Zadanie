-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2024 г., 10:47
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
-- Структура таблицы `postav`
--

DROP TABLE IF EXISTS `postav`;
CREATE TABLE IF NOT EXISTS `postav` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nem_del` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `postavhik` varchar(30) NOT NULL,
  `proizvod` varchar(30) NOT NULL,
  `kod_det` varchar(30) NOT NULL,
  `operator` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `postav`
--

INSERT INTO `postav` (`id`, `nem_del`, `date`, `postavhik`, `proizvod`, `kod_det`, `operator`, `price`) VALUES
(1, 'подшипник', '2024-01-18', 'серпухов', 'ООО\"Запчасти\"', '12345', '1', '1500'),
(2, 'подшипник', '2024-01-18', 'серпухов', 'ООО\"Запчасти\"', '12345', '1', '1500'),
(3, 'подшипник', '2024-01-18', 'серпухов', 'ООО\"Запчасти\"', '12345', '1', '1500'),
(4, 'подшипник', '2024-01-18', 'серпухов', 'ООО\"Запчасти\"', '12345', '1', '1500'),
(5, '', '0000-00-00', '', '', '', '', '20000'),
(11, 'двигатель', '2024-01-12', 'Чехов', 'ООО', '54321', '2', '20000'),
(6, 'двигатель', '2024-01-13', 'Чехов', 'ООО\"Все для бибики\"', '54321', '2', '20000'),
(7, 'двигатель', '2024-01-24', 'Чехов', 'ООО\"Все для бибики\"', '54321', '2', '20000'),
(8, 'двигатель', '2024-01-24', 'Чехов', 'ООО\"Все для бибики\"', '54321', '2', '20000'),
(9, 'двигатель', '2024-01-24', 'Чехов', 'ООО\"Все для бибики\"', '54321', '2', '20000'),
(10, 'двигатель', '2024-01-24', 'Чехов', 'ООО\"Все для бибики\"', '54321', '2', '20000'),
(12, 'двигатель', '2024-01-12', 'Чехов', 'ООО', '54321', '2', '20000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
