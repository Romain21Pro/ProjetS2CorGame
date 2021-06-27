-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Juin 2021 à 09:24
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
  `fk_pseudoUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `pseudo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`noPartie`),
  ADD KEY `fk_pseudoUser` (`fk_pseudoUser`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `parties`
--
ALTER TABLE `parties`
  MODIFY `noPartie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--

-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `parties`
--
ALTER TABLE `parties`
  ADD CONSTRAINT `parties_ibfk_1` FOREIGN KEY (`fk_pseudoUser`) REFERENCES `utilisateurs` (`pseudo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `utilisateurs` (`pseudo`) VALUES ('Luca'), ('Emilien'), ('Albert'), ('Georgia'), ('Brendan'), ('Heloise'), ('Emilie'), ('Esma'), ('Clarisse'), ('Audrey'), ('Samuel'), ('Allan'), ('Albin'), ('Gaetan'), ('Rodolf');

INSERT INTO `parties` (`noPartie`, `score`, `fk_pseudoUser`) VALUES (NULL, '389', 'Albert'), (NULL, '146', 'Albin'), (NULL, '320', 'Allan'), (NULL, '359', 'Audrey'), (NULL, '229', 'Brendan'), (NULL, '84', 'Clarisse'), (NULL, '13', 'Emilie'), (NULL, '38', 'Emilien'), (NULL, '397', 'Esma'), (NULL, '69', 'Gaetan'), (NULL, '86', 'Georgia'), (NULL, '24', 'Heloise'), (NULL, '379', 'Luca'), (NULL, '377', 'Rodolf'), (NULL, '4', 'Samuel');
