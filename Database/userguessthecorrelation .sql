-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Juin 2021 à 13:40
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `userguessthecorrelation`
--

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

CREATE TABLE `parties` (
  `noPartie` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `fk_noUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `parties`
--

INSERT INTO `parties` (`noPartie`, `score`, `fk_noUser`) VALUES
(1, 120, 1),
(2, 130, 2),
(3, 399, 3),
(4, 882, 4),
(5, 201, 5),
(6, 749, 6),
(7, 940, 7),
(8, 707, 8),
(9, 451, 9),
(10, 5, 10),
(11, 199, 11),
(12, 392, 12),
(13, 150, 13),
(14, 691, 14),
(15, 390, 15);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `noUser` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`noUser`, `pseudo`) VALUES
(1, 'Hamilton'),
(2, 'Verstappen'),
(3, 'Bottas'),
(4, 'JeanPaul'),
(5, 'JeanJaque'),
(6, 'Pierre'),
(7, 'Russel'),
(8, 'RomainD'),
(9, 'Cyril'),
(10, 'RomainB'),
(11, 'LilianC'),
(12, 'ReihaneB'),
(13, 'Test'),
(14, 'Guest35'),
(15, 'Pierre2');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`noPartie`),
  ADD KEY `fk_noUser` (`fk_noUser`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`noUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `parties`
--
ALTER TABLE `parties`
  MODIFY `noPartie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `noUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `parties`
--
ALTER TABLE `parties`
  ADD CONSTRAINT `parties_ibfk_1` FOREIGN KEY (`fk_noUser`) REFERENCES `utilisateurs` (`noUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
