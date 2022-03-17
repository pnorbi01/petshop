-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 05:45 PM
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
-- Table structure for table `animal_specie`
--

CREATE TABLE `animal_specie` (
  `animal_id` int(11) DEFAULT NULL,
  `specie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `animal_specie`
--

INSERT INTO `animal_specie` (`animal_id`, `specie_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'Hamuszürke Perzsa Macska', 'A pihe puha perzsa macska a legkedveltebb macskafajták egyike.', 'persian.jpg', 200),
(2, 'Brit Rövidszőrű Macska', 'Nyugodt és kiegyensúlyozott természetű.', 'brit.jpg', 250),
(3, 'Bengáli Macska', 'Egy igazi “házi tigris macska” hiszen vadmacska vér is csörgedezik az ereiben', 'bengal.jpg', 320),
(4, 'Ragdoll', 'Rongybaba macska', 'ragdoll.jpg', 380),
(5, 'Sziámi', 'Egyik legrégebbi és legismertebb macskafajta.', 'siamese.jpg', 220),
(6, 'Német Juhászkutya', 'Okos, kedves, játékos kutya, és mindemellett hűséges társ. Gyakran alkalmazzák nyomozó-, mentő- és vakvezető kutyaként.', 'german-shepherd.jpg', 230),
(7, 'Szibériai Husky', 'Sugárzóan kék szemek és a tipikus szőrzetmintázat.', 'siberian-husky.jpg', 410),
(8, 'Golden Retriever', 'Gyakran alkalmazzák segítőkutyaként, kedves, barátságos természete van', 'golden-retriever.jpg', 250),
(9, 'Shiba Inu', 'Bundája plüsshatású és könnyen kezelhető.', 'shiba-inu.png', 380);

-- --------------------------------------------------------

--
-- Table structure for table `pet_specie`
--

CREATE TABLE `pet_specie` (
  `specie_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `pet_specie`
--

INSERT INTO `pet_specie` (`specie_id`, `pet_id`) VALUES
(1, 5),
(2, 1),
(3, 8),
(4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `name`, `image`) VALUES
(1, 'Sziámi', 'questionmark.png'),
(2, 'Perzsa', 'questionmark.png'),
(3, 'Labrador', 'questionmark.png'),
(4, 'Shiba Inu', 'questionmark.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_specie`
--
ALTER TABLE `animal_specie`
  ADD KEY `animal_specie_ibfk_1` (`animal_id`),
  ADD KEY `animal_specie_ibfk_2` (`specie_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_specie`
--
ALTER TABLE `pet_specie`
  ADD KEY `pet_specie_ibfk_1` (`specie_id`),
  ADD KEY `pet_specie_ibfk_2` (`pet_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal_specie`
--
ALTER TABLE `animal_specie`
  ADD CONSTRAINT `animal_specie_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`),
  ADD CONSTRAINT `animal_specie_ibfk_2` FOREIGN KEY (`specie_id`) REFERENCES `species` (`id`);

--
-- Constraints for table `pet_specie`
--
ALTER TABLE `pet_specie`
  ADD CONSTRAINT `pet_specie_ibfk_1` FOREIGN KEY (`specie_id`) REFERENCES `species` (`id`),
  ADD CONSTRAINT `pet_specie_ibfk_2` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
