-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 22 Μαρ 2023 στις 09:13:19
-- Έκδοση διακομιστή: 10.4.27-MariaDB
-- Έκδοση PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `hr`
--
DROP DATABASE IF EXISTS `hr`;
CREATE DATABASE IF NOT EXISTS `hr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hr`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `RegNO` int(50) NOT NULL,
  `UserType` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`Username`, `Password`, `FirstName`, `LastName`, `RegNO`, `UserType`) VALUES
('k.martzikos', 'k.martzikos', 'Kostas', 'Martzikos', 44556, 'Moderator'),
('a.thodos', 'a.thodos', 'Antonios', 'Thodos', 99008, 'Admin'),
('d.kallioras', 'd.kallioras', 'Dimitris', 'Kallioras', 114455, 'User');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`RegNO`),
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
