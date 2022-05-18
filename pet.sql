-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 09:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `image`) VALUES
(1, 'Macskák', 'cats.jpg'),
(2, 'Kutyák', 'dogs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `specieId` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `specieId`, `name`, `description`, `image`, `gender`, `age`) VALUES
(1, 2, 'Főnök', 'A pihe puha perzsa macska a legkedveltebb macskafajták egyike.', 'persian.png', 'Fiú', 2),
(2, 3, 'Cirmi', 'Nyugodt és kiegyensúlyozott természetű.', 'brit.jpg', 'Lány', 1),
(3, 4, 'Simba', 'Egy igazi “házi tigris macska” hiszen vadmacska vér is csörgedezik az ereiben.', 'bengal.jpg', 'Fiú', 4),
(4, 5, 'Tomi', 'Rongybaba macska', 'ragdoll.png', 'Fiú', 3),
(5, 1, 'Lola', 'Egyik legrégebbi és legismertebb macskafajta.', 'siamese.png', 'Lány', 1),
(6, 8, 'Parázs', 'Okos, kedves, játékos kutya, és mindemellett hűséges társ. Gyakran alkalmazzák nyomozó-, mentő- és vakvezető kutyaként.', 'german-shepherd.jpg', 'Fiú', 1),
(7, 9, 'Maja', 'Sugárzóan kék szemek és a tipikus szőrzetmintázat.', 'siberian-husky.jpg', 'Lány', 2),
(8, 6, 'Hamu', 'Gyakran alkalmazzák segítőkutyaként, kedves, barátságos természete van.', 'golden-retriever.png', 'Fiú', 1),
(9, 7, 'Pepe', 'Bundája plüsshatású és könnyen kezelhető.', 'shiba-inu.png', 'Fiú', 1);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `animalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `name`, `image`, `animalId`) VALUES
(1, 'Sziámi', 'cat-image.png', 1),
(2, 'Perzsa', 'cat-image.png', 1),
(3, 'Brit', 'cat-image.png', 1),
(4, 'Bengáli', 'cat-image.png', 1),
(5, 'Ragdoll', 'cat-image.png', 1),
(6, 'Golden retriever', 'dog-image.png', 2),
(7, 'Shiba Inu', 'dog-image.png', 2),
(8, 'Németjuhász', 'dog-image.png', 2),
(9, 'Husky', 'dog-image.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `new_password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code_password` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `new_password_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_web`
--

CREATE TABLE `users_web` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `code_password` char(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `new_password_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `users_web`
--

INSERT INTO `users_web` (`id_user`, `username`, `firstname`, `lastname`, `password`, `email`, `token`, `registration_expires`, `active`, `code_password`, `new_password_expires`) VALUES
(0, 'teszt', 'teszt', 'teszt', '$2y$10$DDoOZnu.a7jD9Mq4v3xI5.rmg7d9L5NGBrbTmJ19rvbM6CsaGE4CK', 'teszt@asd.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'teszt1', 'teszt1', 'teszt1', '$2y$10$KdRMgz2AWOMMXQtECgGYOe1Kwq8kd5luvwgjB5bv/7vLk3MJEmV6W', 'teszt1@asd.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'teszt2', 'teszt2', 'teszt2', '$2y$10$G5xgjvUlINihwxo2ncBGHu9odqJP/9Nar4d2KXhcM2uB7m.s5.O8W', 'teszt2@asd.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'tesztelek', 'tesztelek', 'tesztelek', '$2y$10$6ueik5JkGOspzisvgeQTHOUSsZ6Q20VKFXgpK0MefEkZx5kNqm4Su', 'tesztelek@gml.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'teszt123', 'teszt123', 'teszt123', '$2y$10$cRQd4J/SPYwiRlltFXMwj.5Fq.5kQMP9JyEoIBbJbVZQZPyWRsolS', 'teszt123@gmail.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'teszt66', 'teszt66', 'teszt66', '$2y$10$AGlxhffTq8nPXfIX9fH1g.DJXjhFiIBIXWJRfy660.kt4X0nefwf.', 'teszt66@asd.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00'),
(0, 'asdasdasd', 'asdasdasd', 'asdasdasd', '$2y$10$TM5sFFLhnb1bUVGpcULPauKi0lRPov8EnJQ1INyiBN4Vd4yM4N6uy', 'asdasdasd@gmail.com', 'VimubLjtbsQsgckRgqlsVejmzMliegMiejyWzeoe', '2022-05-19 20:29:34', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_failure`
--

CREATE TABLE `user_email_failure` (
  `id_user_email_failure` int(11) NOT NULL,
  `id_user_web` int(11) NOT NULL,
  `date_time_added` datetime NOT NULL,
  `date_time_tried` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `user_email_failure`
--

INSERT INTO `user_email_failure` (`id_user_email_failure`, `id_user_web`, `date_time_added`, `date_time_tried`) VALUES
(0, 0, '2022-05-18 17:22:52', '0000-00-00 00:00:00'),
(0, 0, '2022-05-18 19:07:54', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_specie_ibfk_1` (`specieId`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animalId` (`animalId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pet_specie_ibfk_1` FOREIGN KEY (`specieId`) REFERENCES `species` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_ibfk_1` FOREIGN KEY (`animalId`) REFERENCES `animals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
