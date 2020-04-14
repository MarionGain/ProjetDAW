-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 14 avr. 2020 à 10:57
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(50) NOT NULL,
  `MESSAGE` text NOT NULL,
  `COULEUR` varchar(200) NOT NULL DEFAULT 'black',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`ID`, `LOGIN`, `MESSAGE`, `COULEUR`) VALUES
(1, 'Moi', 'Hey ! tu fais quoi ?', 'blue'),
(2, 'Papa', 'CE PROJET ME SORT DES YEUX', 'red'),
(3, 'Testt', 'coucou !', 'yellow'),
(4, 'Mathieu', '1 2 1 2 test test', 'blue'),
(5, 'Mathieu', 'CA MARCHE !!!!', 'blue'),
(6, 'Testt', 'Salut !', 'yellow'),
(7, 'Mathieu', 'Coucou', 'blue');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `LOGIN` varchar(30) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  PRIMARY KEY (`LOGIN`),
  UNIQUE KEY `MAIL` (`MAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`LOGIN`, `PASSWORD`, `MAIL`) VALUES
('trgrr', '5654ce4f03711378051fd4139efb46b7202f1e23', 'efffff@gmail.fr'),
('Ghislain', '8c99f215b3249d88078e8dac81008dbe9449888b', 'Ghislain@gmail.com'),
('Mathieu', '437ec6a7ec9d72cce42ff4c1f4d31be2a8ed1431', 'trevor.verney@gmail.com'),
('Testt', 'f352b7770535ce604d383a76b65450f5241b47bc', 'Test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `tableauattente`
--

DROP TABLE IF EXISTS `tableauattente`;
CREATE TABLE IF NOT EXISTS `tableauattente` (
  `LOGIN` varchar(50) NOT NULL,
  `ROLE` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tableauattente`
--

INSERT INTO `tableauattente` (`LOGIN`, `ROLE`) VALUES
('Mathieu', 'Chef');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
