-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2023 at 09:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopirehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `transaction_id`, `item_id`, `product_name`, `created_at`, `updated_at`) VALUES
(1, 68, 1, 'Cappuccino', '2023-12-31 18:32:20', '2023-12-31 18:32:20'),
(2, 68, 2, 'Americano', '2023-12-31 18:32:20', '2023-12-31 18:32:20'),
(3, 69, 1, 'Cappuccino', '2023-12-31 18:33:33', '2023-12-31 18:33:33'),
(4, 69, 2, 'Americano', '2023-12-31 18:33:33', '2023-12-31 18:33:33'),
(5, 70, 1, 'Cappuccino', '2023-12-31 19:15:23', '2023-12-31 19:15:23'),
(6, 71, 1, 'Cappuccino', '2023-12-31 19:19:48', '2023-12-31 19:19:48'),
(7, 71, 2, 'Americano', '2023-12-31 19:19:48', '2023-12-31 19:19:48'),
(8, 72, 2, 'Americano', '2023-12-31 19:21:45', '2023-12-31 19:21:45'),
(9, 72, 3, 'cocoa', '2023-12-31 19:21:45', '2023-12-31 19:21:45'),
(10, 73, 2, 'Americano', '2023-12-31 19:23:12', '2023-12-31 19:23:12'),
(11, 73, 3, 'cocoa', '2023-12-31 19:23:12', '2023-12-31 19:23:12'),
(12, 74, 2, 'Americano', '2023-12-31 19:26:11', '2023-12-31 19:26:11'),
(13, 74, 1, 'Cappuccino', '2023-12-31 19:26:11', '2023-12-31 19:26:11'),
(14, 75, 2, 'Americano', '2023-12-31 19:28:21', '2023-12-31 19:28:21'),
(15, 75, 1, 'Cappuccino', '2023-12-31 19:28:21', '2023-12-31 19:28:21'),
(16, 76, 1, 'Cappuccino', '2023-12-31 19:28:32', '2023-12-31 19:28:32'),
(17, 76, 2, 'Americano', '2023-12-31 19:28:32', '2023-12-31 19:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `name`, `email`, `amount`, `phone`) VALUES
(1, 'aku', 'aku@gmail.com', 15000, '29389'),
(2, 'saya', 'saya@gmail.com', 15000, '2939'),
(3, 'hei', 'hei@gmail.com', 15000, '9239'),
(4, 'saia', 'saia@gmail.com', 15000, '928392'),
(5, 'saia', 'saia@gmail.com', 15000, '928392'),
(6, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(7, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(8, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(9, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(10, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(11, 'asdakjdkj', 'asiudia@jkd.com', 15000, '28329839'),
(12, 'aji', 'aji@gmail.com', 15000, '928398293829'),
(13, 'aku', 'aku@gmail.com', 15000, '8989232'),
(14, 'siap', 'siap@gmail.com', 15000, '98938'),
(15, '', '', 15000, ''),
(16, '', '', 15000, ''),
(17, '', '', 15000, ''),
(18, '', '', 15000, ''),
(19, '', '', 15000, ''),
(20, '', '', 15000, ''),
(21, 'aji', 'ajsij@hji.com', 15000, '898932'),
(22, 'siapa', 'aji@h.c', 15000, '28392'),
(23, 'aku aja ', 'emailsiapa@gmail.com', 15000, '081929192'),
(24, 'aji', 'aji@hmail.com', 15000, '3943989'),
(25, 'asep', 'komar@gmail.com', 15000, '29839283928'),
(26, 'aji', 'kiikikk@klk.com', 15000, '928932'),
(27, 'aaaaaaa', 'aaa@jkjk.bom', 15000, '989898'),
(28, 'asep test', 'test@gmail.com', 60000, '085159794070'),
(31, 'aku', 'aku@gmail.com', 40000, '084108081'),
(33, '', '', 40000, ''),
(34, '', '', 40000, ''),
(35, '', '', 40000, ''),
(36, '', '', 40000, ''),
(37, '', '', 40000, ''),
(38, '', '', 40000, ''),
(39, '', '', 40000, ''),
(40, '', '', 20000, ''),
(44, '', '', 20000, ''),
(45, '', '', 20000, ''),
(68, '', '', 40000, ''),
(69, 'saya ', 'saya@gmail.com', 40000, '98934'),
(70, '', '', 20000, ''),
(71, 'asep', 'mahfud@gmail.com', 40000, '0808032'),
(72, 'ajijai', 'ajij@i.cm', 40000, '029032'),
(73, 'aku ', 'aku@jc', 40000, '298392'),
(74, 'sjdnsjn', 'sjn@j.ckm', 40000, '283293'),
(75, 'sjdnsjn', 'sjn@j.ckm', 40000, '283293'),
(76, '', '', 40000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'angga kamal', 'angga12@example.com', '7592628bce37dd14e0b36ea66d5ba847', 'admin'),
(2, 'akang', 'anggatest@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'akang123', 'akang123@example.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(4, 'adji ', 'aji@gmail.com', '8d045450ae16dc81213a75b725ee2760', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
