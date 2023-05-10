-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2023 г., 22:48
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `usersID` varchar(500) NOT NULL,
  `sumPrice` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`usersID`, `sumPrice`, `date`) VALUES
('44', '650 ₽', '10.05.2023, 22:50:39');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `usersID` varchar(500) NOT NULL,
  `id` varchar(100) NOT NULL,
  `title` varchar(600) NOT NULL,
  `weight` varchar(500) NOT NULL,
  `price` varchar(400) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`usersID`, `id`, `title`, `weight`, `price`, `counter`, `date`) VALUES
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 21:54:51'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:02:43'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:03:03'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:20:25'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:26:40'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:26:54'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:27:11'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:29:04'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:34:58'),
('44', '3', 'Coffea canephora', '200 г', '400 ₽', '1', '10.05.2023, 22:37:36'),
('44', '4', 'Coffea liberica', '200 г', '450 ₽', '1', '10.05.2023, 22:39:10'),
('44', '3', 'Coffea canephora', '200 г', '400 ₽', '1', '10.05.2023, 22:39:10'),
('44', '', '', '', '', '', '10.05.2023, 22:39:10'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:40:49'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:40:49'),
('44', '3', 'Coffea canephora', '200 г', '400 ₽', '1', '10.05.2023, 22:40:49'),
('44', '4', 'Coffea liberica', '200 г', '450 ₽', '1', '10.05.2023, 22:40:49'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:47:49'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:47:49'),
('44', '3', 'Coffea canephora', '200 г', '400 ₽', '1', '10.05.2023, 22:47:49'),
('44', '4', 'Coffea liberica', '200 г', '450 ₽', '1', '10.05.2023, 22:47:49'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:48:36'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:48:36'),
('44', '3', 'Coffea canephora', '200 г', '400 ₽', '1', '10.05.2023, 22:48:36'),
('44', '4', 'Coffea liberica', '200 г', '450 ₽', '1', '10.05.2023, 22:48:36'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:50:00'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:50:00'),
('44', '1', 'Bruno Brazilia', '200 г', '300 ₽', '1', '10.05.2023, 22:50:39'),
('44', '2', 'Cofféa arábica', '200 г', '350 ₽', '1', '10.05.2023, 22:50:39');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(242) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adress` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `adress`, `phone`) VALUES
(27, 'aaaaae@ae.ru', '$2y$10$FGzUgoDhMcfcVy/IzP4aoOgyjXobhLaozknv20K3gDoosJgMoXLIy', 'dfdf', 'fdfd', '+7(888) 888-88-88'),
(26, 'aaaae@ae.ru', '$2y$10$9o.RCAUCgyZ4V7rCRM6TzuJXtbeLQMFzTF6rnIutDRy5plZz.gETO', 'dfdf', 'fdfd', '+7(888) 888-88-88'),
(25, 'aaae@ae.ru', '$2y$10$7x1/fkkpBoFY6J1w0FPsMu8/MCHVIPWPtbgtc9hO4nTTNYjKlQFnO', 'dfdf', 'fdfd', '+7(888) 888-88-88'),
(24, 'aae@ae.ru', '$2y$10$JpwtZyjPi23X1uGKf07KnOSIZy2BXHCa7V5vDPGTChwppcRfa7aUy', 'dfdf', 'fdfd', '+7(888) 888-88-88'),
(23, 'ae@ae.ru', '$2y$10$ef7HhbLQl/f38ARWhmNV6uuKR1GzLHrs4EmPehUK77RNoMjeR7bsS', 'dfdf', 'fdfd', '+7(888) 888-88-88'),
(22, 'artem@artem.ru', '$2y$10$zXvF9L.IJC3bpTDdMDJL1uzOhzsHk.NA414yXlH.hk.RdKJbBlPci', 'Artem', 'Южная 17', '+7(937) 870-85-63'),
(28, 'aafaaae@ae.ru', '$2y$10$CouVOgBEtjLInrFs6/L6IuxAIXDgsHABmAQ7ZrBRJnxLpZ8Pgyqfm', 'sddas', 'dsadsa', '+7(111) 111-11-11'),
(29, 'ftf@ae.ru', '$2y$10$YjE7bGS3qx/7W7qiZhpote8odfUnDWn4gLZdaUA2/S4NkOsGzxGY6', 'sdadsadsa', 'dsadsa', '+7(111) 111-11-11'),
(30, '', '$2y$10$HXDF1dRJOOM2MuS.YqcZXudp6tazHzvh8peL.xOhn6cuwfJ5du2Gu', '', '', ''),
(31, 'ahe@ae.ru', '$2y$10$R0gs/gAXCht.nNCi43p7DOs.JGcUggYAoKN1orRNqOr94AF7b5GQi', 'sdadsa', 'dsadsa', '+7(888) 888-88-88'),
(32, 'qw@qw.wq', '$2y$10$TMrxtoCIYFqbHT29Mm6dduKuFdZCDUL46CQXqcWjwZo6ptXJilJ52', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(33, 'qsw@qw.wq', '$2y$10$cLlsOLR9B/Mzy.BkaSeoj.bim43jNT.gLINT9fMaxBvL2JoyePcS2', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(34, 'aqsw@qw.wq', '$2y$10$q1d9.yfYWFrEyDcGCX5VIOvVChfiXc1THRa9KbC0qh2SjLm837smu', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(35, 'adsffsw@qw.wq', '$2y$10$ZJjfsncxPpg5gWs72kx81.LP.c4uLGwiwLln5FR9KhS0BZK.4z33a', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(36, 'adassffsw@qw.wq', '$2y$10$.TZU56GOlvFmC8Hor4H0bedODOBu8Q5dJUTBnTcLck43XT4ihupOS', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(37, 'aasadsassffsw@qw.wq', '$2y$10$uS4MWEUTZjLR6P1f4Pbo4.X0VQZMzYduS0FWBXR2Trw0kPEWZeDJq', 'Artem', 'asdsda', '+7(937) 870-85-62'),
(38, 'asd@asd.ru', '$2y$10$LyIc1u6./LRaXFNjCw3/OuybGMUJRpEXKFrQUZxck8djxnikRwbN.', 'Artem', 'dsadjsaklj', '+7(937) 870-85-62'),
(39, 'qwe@qwe.ri', '$2y$10$L8o/olrx6f1OLEl5Gq0jkOb.B0K9dMHazhhknZOg/KYuCYMxx.Ym6', 'Artem', 'dsadsa', '+7(937) 870-85-62'),
(40, 'qawe@qwe.ri', '$2y$10$PiZjJcJyHZ2xo9lP1Sika.M2GIuCw.019bzKtq0Jl31rUs81UOizm', 'Artem', 'dsadsa', '+7(937) 870-85-62'),
(41, 'adssas@as', '$2y$10$bNA/HsVPhGC1IsbzF1mUi.cawxAQjgb2HEJxgGBMLKlDRttJwApHS', 'Artem', 'sdadsa', '+7(888) 888-88-88'),
(42, 'sad@asa', '$2y$10$b2XCDpVG4sbrxNK77alOzeLOPsKVOeUao7lFtDuuyLydSKFpqhaUG', 'Artem', 'asdas', '+7(937) 870-85-62'),
(44, 'lukinartem2016@mail.ru', '$2y$10$2pcDuH7Hq9MHV27AwZM/KOBIdsVc9OOMKmi7AnQcnncUe9KzhOrGW', 'Lukin Artem', 'г. Ульяновск, ул. Южная 17, кв. 63', '+7(937) 870-85-63');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD KEY `usersID` (`usersID`,`date`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD KEY `usersID` (`usersID`,`date`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
