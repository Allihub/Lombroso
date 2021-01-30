-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 30 jan. 2021 à 15:06
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
-- Base de données :  `lombroso`
--

-- --------------------------------------------------------

--
-- Structure de la table `blacklist`
--

DROP TABLE IF EXISTS `blacklist`;
CREATE TABLE IF NOT EXISTS `blacklist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `Numero_Capteur` int(11) NOT NULL,
  `Norme` double NOT NULL,
  `Nom` varchar(55) NOT NULL,
  PRIMARY KEY (`Numero_Capteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `collecter`
--

DROP TABLE IF EXISTS `collecter`;
CREATE TABLE IF NOT EXISTS `collecter` (
  `Id_User` int(11) NOT NULL,
  `Numero_Capteur` int(11) NOT NULL,
  KEY `Numero_Capteur` (`Numero_Capteur`),
  KEY `Id_User` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `Numero_Question` int(11) NOT NULL,
  `Intitule` text NOT NULL,
  `Contenu` text NOT NULL,
  `Id_User` int(11) NOT NULL,
  PRIMARY KEY (`Numero_Question`),
  KEY `Id_User` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fc`
--

DROP TABLE IF EXISTS `fc`;
CREATE TABLE IF NOT EXISTS `fc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Id_User` int(11) NOT NULL,
  `idTest` int(11) NOT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `idTest` (`idTest`),
  KEY `Id_User` (`Id_User`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `Numero_Test` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Question1` int(11) DEFAULT NULL,
  `Question2` int(11) DEFAULT NULL,
  `Question3` int(11) DEFAULT NULL,
  `Question4` int(11) DEFAULT NULL,
  `Question5` int(11) DEFAULT NULL,
  `Question6` int(11) DEFAULT NULL,
  `Question7` int(11) DEFAULT NULL,
  `Question8` int(11) DEFAULT NULL,
  `Question9` int(11) DEFAULT NULL,
  `Question10` int(11) DEFAULT NULL,
  PRIMARY KEY (`Numero_Test`),
  KEY `Id_User` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(55) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(55) CHARACTER SET utf8 NOT NULL,
  `Age` int(11) NOT NULL,
  `Sexe` varchar(55) CHARACTER SET utf8 NOT NULL,
  `Mot_De_Passe` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Type` varchar(55) CHARACTER SET utf8 NOT NULL,
  `email` varchar(55) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=1238 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_User`, `Nom`, `Prenom`, `Age`, `Sexe`, `Mot_De_Passe`, `Type`, `email`) VALUES
(0, 'Chetouia', 'Rayhan', 20, 'M', '0000', 'admin', 'rayhan.chetouia@gmail.com'),
(3, 'Chetouia', 'Rayhan', 20, 'M', '0000', 'admin', 'rayhan.chetouia@gmail.com'),
(7, 'Lib', 'Alex', 20, 'M', '7', 'admin', 'alexandreliban92@gmail.com'),
(777, 'Libb', 'Alex', 20, 'M', '777', 'admin', 'alexandre.liban92@gmail.com'),
(1111, 'Liban', 'Alexandre', 19, 'M', '5678', 'user', 'alexandre.liban@gmail.com'),
(1234, 'konate', 'emma', 25, 'F', '1234', 'admin', 'emma.konate@gmail.com'),
(1235, 'Alaoui', 'Sabrine', 20, 'F', '$2y$10$Ovhn2ITVIvpnH/XtvY4h1.On8/kMlyjpTE41ZX.B1EK8CbKVv49r.', 'user', 'sabrine.alaoui@gmail.com'),
(1236, 'Nael', 'Kraim', 20, 'M', '$2y$10$cOaXrLhJ0oppD.2cMwIXourEibaqsqkEZW/XcPLxHJrigyfnX2qw6', 'admin', 'nael.alaoui@gmail.com'),
(1237, 'alex', 'Rayhan', 20, 'M', '$2y$10$hcbXx4bN.5/tEzQIJpJ3ce.2kDZhWuUJAh3tKLZjDbWtonofCKyEq', 'administrateur', 'nael.kraim@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collecter`
--
ALTER TABLE `collecter`
  ADD CONSTRAINT `collecter_ibfk_1` FOREIGN KEY (`Numero_Capteur`) REFERENCES `capteur` (`Numero_Capteur`),
  ADD CONSTRAINT `collecter_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `utilisateur` (`Id_User`);

--
-- Contraintes pour la table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `utilisateur` (`Id_User`);

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `utilisateur` (`Id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
