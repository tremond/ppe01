INSERT INTO Question (enonce, corrige, idExercice) VALUES ("Affichez tous les produits dont le prix est supérieur à 3", "SELECT * FROM PRODUIT WHERE pxProd > 3;", 1);
INSERT INTO Question (enonce, corrige, idExercice) VALUES ("Affichez les produits dont le prix est compris entre 10 et 22", "SELECT * FROM PRODUIT WHERE pxProd BETWEEN 10 AND 22;", 1);
INSERT INTO Question (enonce, corrige, idExercice) VALUES ("Affichez les noms et prénoms des clients dont le prénom commence par Jean et finit par Pierre", "SELECT nomCli, prenomCli FROM CLIENT WHERE prenomCli LIKE 'Jean%Pierre';", 1);

INSERT INTO Exercice (script, date, idUtilisateur) VALUES ("-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  192.168.153.10:3306
-- Généré le :  Dim 09 Septembre 2018 à 11:07
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00\';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `201819_base01_bdufour`
--

-- --------------------------------------------------------

--
-- Structure de la table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `numCli` int(11) NOT NULL,
  `nomCli` varchar(64) NOT NULL,
  `prenomCli` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `CLIENT`
--

INSERT INTO `CLIENT` (`numCli`, `nomCli`, `prenomCli`) VALUES
(1, 'Doom', 'Jean-Pierre'),
(2, 'Kirool', 'Jean-Claude-Pierre'),
(3, 'Jacques', 'Jean-Pierre-Paul'),
(4, 'Tamarre', 'Quentin'),
(5, 'Tin', 'Quentin'),
(6, 'De la Salle', 'JB'),
(7, 'Tiss', 'Arnault'),
(8, 'Finnguelsematters', 'Arnault'),
(9, 'Bruel', 'Patoche'),
(10, 'Veste', 'Myriam'),
(11, 'Leponj', 'Bob');

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `numComm` int(11) NOT NULL,
  `dateComm` date NOT NULL,
  `client_numCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `COMMANDE`
--

INSERT INTO `COMMANDE` (`numComm`, `dateComm`, `client_numCli`) VALUES
(1, '2018-09-04', 5),
(2, '2018-04-01', 2),
(3, '2018-09-06', 6),
(4, '0000-00-00', 3),
(5, '2018-02-14', 9),
(6, '2014-01-02', 2),
(7, '0000-00-00', 3),
(8, '2018-06-11', 2),
(9, '2018-08-31', 4),
(10, '0000-00-00', 2),
(11, '2018-02-21', 5),
(12, '2015-01-20', 2);

-- --------------------------------------------------------

--
-- Structure de la table `CONTIENT`
--

CREATE TABLE `CONTIENT` (
  `commande_numComm` int(11) NOT NULL,
  `produit_numProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `CONTIENT`
--

INSERT INTO `CONTIENT` (`commande_numComm`, `produit_numProd`) VALUES
(1, 2),
(1, 4),
(2, 2),
(5, 1),
(5, 2),
(3, 1),
(4, 5),
(4, 7),
(5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `PRODUIT`
--

CREATE TABLE `PRODUIT` (
  `numProd` int(11) NOT NULL,
  `libProd` varchar(64) NOT NULL,
  `pxProd` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `PRODUIT`
--

INSERT INTO `PRODUIT` (`numProd`, `libProd`, `pxProd`) VALUES
(1, 'boursin', 3),
(2, 'emmental', 3),
(3, 'bresse bleu', 11),
(4, 'roquefort', 12),
(5, 'saint nectaire', 20),
(6, 'camembert', 20),
(7, 'comté', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`numCli`);

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`numComm`),
  ADD KEY `client_numCli` (`client_numCli`);

--
-- Index pour la table `CONTIENT`
--
ALTER TABLE `CONTIENT`
  ADD PRIMARY KEY (`commande_numComm`,`produit_numProd`),
  ADD KEY `produit_numProd` (`produit_numProd`);

--
-- Index pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  ADD PRIMARY KEY (`numProd`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  MODIFY `numCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  MODIFY `numComm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  MODIFY `numProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `client_numCli` FOREIGN KEY (`client_numCli`) REFERENCES `CLIENT` (`numCli`);

--
-- Contraintes pour la table `CONTIENT`
--
ALTER TABLE `CONTIENT`
  ADD CONSTRAINT `commande_numComm` FOREIGN KEY (`commande_numComm`) REFERENCES `COMMANDE` (`numComm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_numProd` FOREIGN KEY (`produit_numProd`) REFERENCES `PRODUIT` (`numProd`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;", "2000-04-02", 1);