-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 01:43 PM
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
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pizza` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_account` tinyint(1) NOT NULL DEFAULT 0,
  `rating` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `name`, `address`, `pizza`, `order_date`, `create_account`, `rating`) VALUES
(1, NULL, 'Alan', '123455', 'Margherita', '2023-12-18 09:46:52', 0, 0),
(2, NULL, 'Alan', 'Dupa', 'Diavola', '2023-12-18 09:55:46', 0, 0),
(3, NULL, 'Alan', 'Dupa', 'Diavola', '2023-12-18 09:55:51', 1, 0),
(4, NULL, 'Alan', 'dupablada', 'Diavola', '2023-12-18 09:56:54', 0, 0),
(5, NULL, 'Alan', 'dupablada', 'Quattro Formaggi', '2023-12-18 09:58:03', 0, 0),
(6, NULL, 'Alan', 'dupablada', 'Quattro Formaggi', '2023-12-18 09:59:18', 0, 0),
(7, NULL, 'Alan', 'dupablada', 'Quattro Formaggi', '2023-12-18 09:59:51', 0, 0),
(8, NULL, 'Tom', 'Lisięcice', 'Margherita', '2023-12-18 10:00:11', 1, 0),
(9, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:01:42', 0, 0),
(10, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:03:02', 0, 0),
(11, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:04:53', 0, 0),
(12, NULL, 'Alan', '2t4rjghsethb', 'Margherita', '2023-12-18 10:05:03', 0, 0),
(13, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:10:03', 0, 0),
(14, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:10:24', 0, 0),
(15, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:12:13', 0, 0),
(16, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:17:16', 0, 0),
(17, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:17:20', 0, 0),
(18, 1, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:18:25', 0, 0),
(19, NULL, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:18:25', 0, 0),
(20, 1, 'Toma', 'uwe', 'Margherita', '2023-12-18 10:50:25', 0, 0),
(21, 1, 'Alan', 'uwe', 'Margherita', '2023-12-18 10:50:41', 0, 0),
(22, 1, 'Alanek', 'wadadad', 'Margherita', '2023-12-18 10:50:54', 0, 0),
(30, 1, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:55:19', 0, 0),
(31, 1, 'Alan', 'Lisięcice', 'Margherita', '2023-12-18 10:56:05', 0, 0),
(38, 1, 'Alan', '123412d', 'Vegetariana', '2023-12-18 11:11:26', 0, 0),
(39, 1, 'Alan', 'dfdsdsvas', 'Margherita', '2023-12-18 11:12:58', 0, 0),
(41, 1, 'Alan', 'sdadasdsddas', 'Margherita', '2023-12-18 11:18:12', 0, 0),
(46, 1, 'Alan', 'dsasdads', 'Margherita', '2023-12-18 11:32:26', 0, 0),
(47, 1, 'Alan', 'dasasdasdad', 'Margherita', '2023-12-18 11:35:34', 0, 0),
(48, 1, 'Alan', 'sdsasdsdsda', 'Margherita', '2023-12-18 11:35:44', 0, 0),
(49, 1, 'Alan', 'sdsasdsdsda', 'Margherita', '2023-12-18 11:36:43', 0, 0),
(50, 1, 'Alan', 'dsasdadda', 'Margherita', '2023-12-18 11:38:38', 0, 0),
(51, NULL, 'Alan', 'dsasdadda', 'Margherita', '2023-12-18 11:38:38', 0, 0),
(58, 1, 'Alan', 'dasdadasdasd', 'Margherita', '2023-12-18 11:56:21', 0, 0),
(59, NULL, 'Alan', 'dasdadasdasd', 'Margherita', '2023-12-18 11:56:21', 0, 0),
(60, 1, 'Alan', 'dasdadasdasd', 'Capricciosa', '2023-12-18 11:56:47', 0, 0),
(61, NULL, 'Alan', 'dasdadasdasd', 'Capricciosa', '2023-12-18 11:56:47', 0, 0),
(62, 1, 'Alan', 'dasdadasdasd', 'Margherita', '2023-12-18 11:56:55', 0, 0),
(63, NULL, 'Alan', 'dasdadasdasd', 'Margherita', '2023-12-18 11:56:55', 0, 0),
(64, 1, 'Alan', 'sdaadasdasd', 'Margherita', '2023-12-18 12:16:47', 0, 0),
(65, NULL, 'Alan', 'sdaadasdasd', 'Margherita', '2023-12-18 12:16:47', 0, 0),
(67, 1, 'Alan', 'sdadas', 'Margherita', '2023-12-18 12:29:05', 0, 0),
(68, 1, 'Alan', 'sdadas', 'Margherita', '2023-12-18 12:30:58', 0, 0),
(69, NULL, 'Alan', 'sdadas', 'Margherita', '2023-12-18 12:30:58', 0, 0),
(71, 3, 'sdadsd', 'sdasddss', 'Margherita', '2023-12-18 12:40:23', 0, 0),
(72, NULL, 'sdadsd', 'sdasddss', 'Margherita', '2023-12-18 12:40:23', 0, 0),
(73, 3, 'sdkgjfsdbhJ', 'AAAAAAADSDDSDS', 'Diavola', '2023-12-18 12:41:26', 0, 0),
(74, NULL, 'sdkgjfsdbhJ', 'AAAAAAADSDDSDS', 'Diavola', '2023-12-18 12:41:26', 0, 0),
(75, 1, 'Alan', 'AAAAAAADSDDSDS', 'Quattro Formaggi', '2023-12-18 12:42:31', 0, 0),
(76, NULL, 'Alan', 'AAAAAAADSDDSDS', 'Quattro Formaggi', '2023-12-18 12:42:31', 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizza_menu`
--

CREATE TABLE `pizza_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza_menu`
--

INSERT INTO `pizza_menu` (`id`, `name`, `price`) VALUES
(1, 'Margherita', 25.00),
(2, 'Pepperoni', 30.00),
(3, 'Hawajska', 28.00),
(4, 'Capricciosa', 32.00),
(5, 'Vegetariana', 27.00),
(6, 'Quattro Formaggi', 35.00),
(7, 'Diavola', 31.00),
(8, 'Prosciutto e Funghi', 29.00);

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
(1, 'Alan', '$2y$10$A/.vD6bHdxVmywv2Qcvy2Od6efmb1hiqFSkWIiH5Aex2LzIgU312e', '', '2023-12-18 09:47:38'),
(2, 'marcel', '$2y$10$2lCmjpp/lQMBweVVlchhgeu1VNS5Y9RM/Nh8LkG8VcB/APz4gSgxy', '', '2023-12-18 12:06:07'),
(3, 'Guest', 'guest_password', '', '2023-12-18 12:37:50');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pizza_menu`
--
ALTER TABLE `pizza_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
