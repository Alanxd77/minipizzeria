-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:09 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minipizzeria`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pizza` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `create_account` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `pizza`, `rating`, `create_account`) VALUES
(1, 'John Doe', '123 Main St', 'Pepperoni', 4, 0),
(2, 'Alan', 'Lisięcice', 'Margherita', 4, 0),
(3, 'Alan', 'Lisięcice', 'Margherita', 4, 1),
(4, 'alann', '1234', 'Margherita', 4, 0),
(5, 'alann', '1234', 'Margherita', 5, 0),
(6, 'alann', '1234', 'Margherita', 3, 0),
(7, 'Tom', 'podstawowaaa', 'Hawajska', 5, 1),
(8, 'alann', '1234', 'Margherita', 3, 0),
(9, 'alann', '1234', 'Margherita', 5, 0),
(10, 'Tom', 'podstawowaaa', 'Pepperoni', 0, 0),
(11, 'Toma', 'podstawowaaaa', 'Hawajska', 5, 1),
(12, 'Toma', 'podstawowaaaa', 'Hawajska', 4, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
