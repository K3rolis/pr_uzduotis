-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 08:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzduotis`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` date NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `name`, `comment`, `created_at`, `parent_id`) VALUES
(1, 'asdasd@gp.lt', 'Testas', 'Lorem ipsum dolor sit amet, et mel probatus complectitur, vel debet alterum luptatum an. Id qui oratio iuvaret, sea suas voluptua ut, eu pri paulo sententiae. Scaevola sensibus ut has, at idque malis iudico usu, cu vel partem urbanitas. Eam te invenire antiopam euripidis.\r\n\r\nEt sit agam facilisi, vim aliquid albucius inimicus ei, mei at debitis propriae argumentum. Eu eum modus simul argumentum, partiendo tincidunt omittantur est ad, no mei probatus omittantur intellegebat. Mea in graeci regione. Solet lobortis deseruisse eos ex. Mea oratio possim salutandi cu, ne quem ludus appellantur usu, vide ferri graece in qui. In duo phaedrum necessitatibus, te velit mazim offendit per. Ad his alii molestie constituto.\r\n\r\nEi alia esse deleniti pro, utinam adipisci eu pro. Cetero interpretaris an vis, alia aliquip molestie per at, mundi oratio prompta nec et. Omittam officiis assentior nec ei. Eos feugiat fastidii eu, nec cu omnis causae facilis, nam alii tale incorrupte eu. Mei in mutat posse debet, ut impetus detracto forensibus his.\r\n\r\nQuem adolescens in sit. Porro deleniti contentiones eum ad, at pro etiam appellantur. Ei discere fabulas phaedrum mel, facete equidem te per. Everti dissentiunt sea ut, an mel dico tantas electram, ad mea aliquip integre gubergren.\r\n\r\nId per mundi praesent, quo minim mucius invidunt no. Eirmod liberavisse cu nec, ea tamquam lucilius his. Ut graeci recteque sea. Vis utroque persecuti ne. No cum aliquid eloquentiam, dicta fabulas duo cu. Liber evertitur contentiones mel ea, ex qui tincidunt dissentias liberavisse.', '2022-05-07', 0),
(2, 'sad@sad.lt', 'Sad', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-05-07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
