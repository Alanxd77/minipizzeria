-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 09:00 AM
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
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pizza` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rating` int(11) DEFAULT NULL,
  `drink` varchar(255) NOT NULL DEFAULT 'none',
  `create_account` tinyint(1) NOT NULL DEFAULT 0,
  `size` varchar(255) NOT NULL,
  `thickness` varchar(255) NOT NULL,
  `sauce` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `crust` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name`, `address`, `pizza`, `order_date`, `rating`, `drink`, `create_account`, `size`, `thickness`, `sauce`, `price`, `delivery`, `crust`) VALUES
(6, 0, 'sasa', 'sasa', 'Margherita', '2023-12-19 08:23:45', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(7, 0, 'sas', 'soso', 'Hawajska', '2023-12-19 08:23:45', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(8, 0, 'Sylwia', 'soso', 'Hawajska', '2023-12-19 08:23:45', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(9, 0, 'sdadadsd', 'ddsdsdsdsd', 'Pepperoni', '2023-12-19 08:23:45', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(10, 3, 'Alan', 'ddasdasd', 'Margherita', '2023-12-19 08:23:45', 4, 'none', 0, '', '', '', 0.00, '', NULL),
(11, 0, 'weqweqwe', 'qweeqwqwewq', 'Vegetariana', '2023-12-19 08:27:49', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(12, 6, 'penis', 'rgerweewef', 'Diavola', '2023-12-19 08:30:31', 2, 'none', 0, '', '', '', 0.00, '', NULL),
(13, 6, 'penis', 'rgerweewefaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Diavola', '2023-12-19 08:33:13', 5, 'none', 0, '', '', '', 0.00, '', NULL),
(14, 6, 'penis', 'rhgh', 'Diavola', '2023-12-19 08:49:22', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(15, 7, 'burnoutbb', 'baboruw', 'Hawajska', '2023-12-19 08:51:56', 4, 'none', 0, '', '', '', 0.00, '', NULL),
(16, 0, 'sdsdaasd', 'dasdsdsd', 'Margherita', '2023-12-19 08:53:42', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(17, 0, 'sdaasd', 'sdasdsd', 'Margherita', '2023-12-19 08:55:30', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(18, 0, 'sdasdsd', 'sdsdsdsda', 'Margherita', '2023-12-19 08:57:36', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(19, 0, 'sdasdsd', 'sdsdsdsda', 'Margherita', '2023-12-19 09:03:33', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(20, 0, 'sdasdsd', 'sdsdsdsda', 'Margherita', '2023-12-19 09:03:51', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(21, 3, 'Alan', 'sdsdsdsda', 'Margherita', '2023-12-19 09:04:22', 5, 'none', 0, '', '', '', 0.00, '', NULL),
(22, 3, 'Alan', 'sdsdsdsda', 'Margherita', '2023-12-19 09:04:25', 2, 'none', 0, '', '', '', 0.00, '', NULL),
(23, 3, 'Alan', 'sdsdsdsda', 'Margherita', '2023-12-19 09:04:28', 3, 'none', 0, '', '', '', 0.00, '', NULL),
(24, 0, 'dasdasasdasd', 'dsasdasdsdas', 'Margherita', '2023-12-19 09:30:59', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(25, 0, 'dasdasasdasd', 'dsasdasdsdas', 'Margherita', '2023-12-19 09:31:01', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(26, 3, 'Alan', 'dsasdasdsdas', 'Margherita', '2023-12-19 09:31:29', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(27, 3, 'Alan', 'dsasdasdsdas', 'Margherita', '2023-12-19 09:31:30', 3, 'none', 0, '', '', '', 0.00, '', NULL),
(28, 7, 'burnoutbb', 'djhdgiouhsgishgsiuhgiuogoisghdjhdgiouhsgishgsiuhgi', 'Margherita', '2023-12-19 09:33:36', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(29, 0, 'd', 'd', 'Margherita', '2023-12-19 10:04:34', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(30, 0, 'dsdaasd', 'dsdsd', 'Margherita', '2023-12-19 10:24:57', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(31, 0, 'dsdaasd', 'dsdsd', 'Margherita', '2023-12-19 10:25:27', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(32, 0, 'sdasd', 'dasddas', 'Margherita', '2023-12-19 10:33:10', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(33, 0, 'ddass', 'dasddas', '', '2023-12-19 10:43:29', NULL, '', 0, '', '', '', 0.00, '', NULL),
(34, 0, 'ddass', 'dasddas', 'Margherita', '2023-12-19 10:45:50', NULL, 'none', 0, 'small', 'thin', 'cream', 0.00, 'delivery', NULL),
(35, 0, 'ddass', 'dasddas', 'Margherita', '2023-12-19 10:46:10', NULL, 'none', 0, 'small', 'thick', 'bbq', 0.00, 'delivery', NULL),
(36, 0, 'ddass', 'dasddas', 'Margherita', '2023-12-19 10:46:33', NULL, 'orange', 0, 'small', 'thick', 'tomato', 0.00, 'delivery', NULL),
(37, 0, 'ddass', 'dasddas', 'Margherita', '2023-12-19 10:53:04', NULL, 'orange', 1, 'small', 'thick', 'tomato', 0.00, 'delivery', NULL),
(38, 0, 'dasdas', 'dasddas', 'Margherita', '2023-12-19 10:58:25', NULL, 'none', 1, 'small', 'thin', 'tomato', 0.00, 'delivery', NULL),
(39, 0, 'dasdsa', 'dasddas', 'Margherita', '2023-12-19 10:59:44', NULL, 'none', 1, 'small', 'thin', 'tomato', 0.00, 'delivery', NULL),
(40, 0, 'dasdasd', 'dasddas', 'Margherita', '2023-12-19 11:47:20', NULL, 'water', 0, 'medium', 'thick', 'bbq', 0.00, 'takeaway', NULL),
(41, 0, '', '', 'Margherita', '2023-12-20 07:38:55', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(42, 0, '', '', 'Margherita', '2023-12-20 07:42:56', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(43, 0, '', '', 'Margherita', '2023-12-20 07:43:01', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(44, 0, '', '', 'Margherita', '2023-12-20 07:43:46', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(45, 0, 'Alan', '1232dsasda', 'Margherita', '2023-12-20 07:51:16', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(46, 0, 'Alan', '1232dsasda', 'Margherita', '2023-12-20 07:51:23', NULL, 'none', 0, '', '', '', 0.00, '', NULL),
(47, 0, 'das', 'sdddaa', 'Margherita', '2023-12-20 08:00:55', NULL, 'none', 0, 'Mała', '', 'Czosnkowy', 0.00, 'Dostawa', 'Klasyczne'),
(48, 3, 'Alan', 'sdddaa', 'Margherita', '2023-12-20 08:07:43', NULL, 'none', 0, '', '', '', 0.00, '', ''),
(49, 3, 'Alan', 'hgghggg', 'Margherita', '2023-12-20 08:12:51', NULL, 'none', 0, 'Mała', '', 'Czosnkowy', 0.00, 'Dostawa', 'Klasyczne'),
(50, 3, 'Alan', 'dasdad', 'Margherita', '2023-12-20 08:43:49', NULL, 'none', 0, 'Mała', '', 'Czosnkowy', 0.00, 'Dostawa', 'Klasyczne'),
(51, 0, 'saddsasd', 'sdasds', 'Margherita', '2023-12-20 09:16:10', NULL, 'none', 0, 'Mała', '', 'Mieszany', 0.00, 'Dostawa', 'Grube'),
(52, 0, 'xzczzxc', 'zxccxzxc', 'Margherita', '2023-12-21 08:02:07', NULL, 'none', 0, 'Mała', '', 'Czosnkowy', 0.00, 'Dostawa', 'Klasyczne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizza_menu`
--

CREATE TABLE `pizza_menu` (
  `pizza_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(20) NOT NULL,
  `thickness` varchar(20) NOT NULL,
  `sauce` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza_menu`
--

INSERT INTO `pizza_menu` (`pizza_id`, `name`, `size`, `thickness`, `sauce`, `price`) VALUES
(4, 'Margherita', 'Small', 'Thin', '', 20.00),
(10, 'Pepperoni', 'Small', 'Thin', '', 22.00),
(16, 'Vegetariana', 'Small', 'Thin', '', 21.00),
(22, 'Capricciosa', 'Duża', '', 'Mieszany', 27.50),
(23, 'Hawaiian', 'Średnia', '', 'Czosnkowy', 31.99),
(24, 'Quattro Formaggi', 'Duża', '', 'Mieszany', 29.50),
(25, 'Funghi', 'Mała', '', 'Pomidorowy', 25.99),
(26, 'Diavola', 'Średnia', '', 'Czosnkowy', 28.99),
(27, 'Calzone', 'Duża', '', 'Mieszany', 30.50),
(28, 'Prosciutto e Funghi', 'Mała', '', 'Pomidorowy', 27.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `registration_date`) VALUES
(1, 'Sylwia', '$2y$10$jRPWLZwwZlS4Vs3vl/tNs.JbSX2zwuY3XCVIUrSFXjl6WTkXzrTpq', '', '2023-12-19 07:55:41'),
(3, 'Alan', '$2y$10$IZCGW3Y5nlE/Kr1rU8NEu.ZcKoD7Jtn.UDAHvE0x0jjYSwDaQWh6S', '', '2023-12-19 08:12:23'),
(4, '1234', '$2y$10$ou5W3ySvsCO7wYuP4sy9mO2D4uVOeHkH6gNEsMsqBqYMNYmav4xou', '', '2023-12-19 08:13:34'),
(6, 'penis', '$2y$10$IDQPjH7YdZbNOolz3xCs6OLM40HMzuKHNECi35Jnnrgy2p82F3U/i', '', '2023-12-19 08:29:23'),
(7, 'burnoutbb', '$2y$10$4GrK2cKn3APUD4CejCUR3eZgc/Ct0W9BXcfD8b8Tqy6cQjHtoApjW', '', '2023-12-19 08:51:26'),
(14, '', '', '', '2023-12-21 08:02:07');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `pizza_menu`
--
ALTER TABLE `pizza_menu`
  ADD PRIMARY KEY (`pizza_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pizza_menu`
--
ALTER TABLE `pizza_menu`
  MODIFY `pizza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
