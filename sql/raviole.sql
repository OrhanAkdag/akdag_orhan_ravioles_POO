-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 avr. 2020 à 10:54
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.5-dev

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ravioles`
--

-- --------------------------------------------------------

--
-- Structure de la table `raviole`
--

DROP TABLE IF EXISTS `raviole`;
CREATE TABLE IF NOT EXISTS `raviole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_principal` varchar(250) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `recette` text DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `raviole_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `raviole`
--

INSERT INTO `raviole` (`id`, `ingredient_principal`, `titre`, `recette`, `file`) VALUES
(10, 'langoustines ', 'Ravioles de langoustines', '                        IngrÃ©dients\r\nPour les ravioles\r\n24 feuilles Ã  ravioli (en Ã©picerie asiatique)\r\n24 langoustines fraÃ®ches\r\n2 c. Ã  soupe d\' huile d\'olive\r\n1 c. Ã  cafÃ© de jus de citron\r\nQuelques brins de ciboulette\r\nSel\r\nPour l\'Ã©cume\r\n1 L eau\r\n1 Ã©chalote\r\n1 noix de beurre\r\n15 cl de vin blanc sec\r\n30 cl de crÃ¨me au mascarpone\r\n4 pistils de safran                                ', '5e9989d379492.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
