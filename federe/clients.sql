-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : jeu. 21 avr. 2022 à 14:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(40) NOT NULL,
  `Motdepasse` text NOT NULL,
  `Solde` text NOT NULL,
  `DateP` text NOT NULL,
  `MontantP` text NOT NULL,
  `DateP2` text NOT NULL,
  `MontantP2` text NOT NULL,
  `DateP3` text NOT NULL,
  `MontantP3` text NOT NULL,
  `DateP4` text NOT NULL,
  `MontantP4` text NOT NULL,
  `DateP5` text NOT NULL,
  `MontantP5` text NOT NULL,
  `DateP6` text NOT NULL,
  `MontantP6` text NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bank`
--

INSERT INTO `bank` (`id`, `Login`, `Motdepasse`, `Solde`, `DateP`, `MontantP`, `DateP2`, `MontantP2`, `DateP3`, `MontantP3`, `DateP4`, `MontantP4`, `DateP5`, `MontantP5`, `DateP6`, `MontantP6`) VALUES
(1, 'bochra', 'bochra123', '5 160 000 DT', '24/04/2022', '580 000 DT', '10/04/2022', '275 000 DT', '09/04/2022', '690 000 DT', '06/04/2022', '1 500 000 DT', '02/04/2022', '50 000 DT', '25/03/2022', '330 000 DT'),
(2, 'lina', 'abir123', '2 590 000 DT', '05/01/2022', '360 000 DT', '09/01/2022', '690 000 DT', '14/12/2021', '8 750 DT', '16/11/2021', '960 000 DT', '06/11/2021', '50 800 DT', '07/10/2021', '450 000 DT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
