-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 17 avr. 2019 à 07:44
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitestage2`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `idCommentaire` int(11) NOT NULL,
  `contenuCommentaire` longtext NOT NULL,
  `noteCommentaire` varchar(10) NOT NULL,
  `statuts` tinyint(1) NOT NULL,
  `dateCommentaire` datetime DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`idCommentaire`, `contenuCommentaire`, `noteCommentaire`, `statuts`, `dateCommentaire`, `idUtilisateur`) VALUES
(4, 'Petit messsage test', '5', 0, NULL, 5),
(5, 'Ceci est un long message de test, pour voir si mes div s\'agrandissent bien, car il faut bien vérifier ça également. Sinon, je pense que ça avance, on verra bien avec la mise en ligne comme ça passe, surtout pour le responsive !!', '4', 0, NULL, 6),
(6, 'Je ne suis pas satisfait du résultat', '1', 1, '2019-04-10 13:53:26', 8),
(7, 'J\'aime toujours autant les messages de test !!', '3', 1, '2019-04-10 14:35:01', 9),
(8, 'petit message test', '3', 1, '2019-04-15 09:41:30', 10);

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `idFormulaire` int(11) NOT NULL,
  `nomContact` varchar(100) NOT NULL,
  `prenomContact` varchar(100) NOT NULL,
  `numeroTelContact` varchar(11) NOT NULL,
  `mailContact` varchar(255) NOT NULL,
  `messageContact` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`idFormulaire`, `nomContact`, `prenomContact`, `numeroTelContact`, `mailContact`, `messageContact`) VALUES
(1, 'Dupond', 'Jacques', '0245893621', 'dupond.jacques@email.fr', 'test'),
(2, 'Dupond', 'Jacques', '0245893621', 'toto@jenesaispas.fr', 'encore un test');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nomRole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `nomRole`) VALUES
(1, 'Admin'),
(2, 'Visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(100) NOT NULL,
  `prenomUtilisateur` varchar(100) NOT NULL,
  `motDePasse` varchar(60) DEFAULT NULL,
  `idRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasse`, `idRole`) VALUES
(1, 'Frakkass', 'Chris', NULL, 2),
(2, 'toto', 'Lycan', '$2y$10$hySyMih9JZeS3JDbPS9FbeIVexxxfvry3ivn/vUqu25Ta0plIJCbK', 1),
(3, 'Beau', 'Lycan', NULL, 2),
(4, 'Frakkass', 'huguette', NULL, 2),
(5, 'Toto', 'Tony', NULL, 2),
(6, 'Dupond', 'Jean', NULL, 2),
(7, 'Pierre', 'Paul', NULL, 2),
(8, 'Pierre', 'Paul', NULL, 2),
(9, 'Lacoule', 'Douce', NULL, 2),
(10, 'tata', 'huguette', NULL, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `commentaires_utilisateurs_fk` (`idUtilisateur`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`idFormulaire`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD KEY `utilisateurs_role_fk` (`idRole`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `idFormulaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_utilisateurs_fk` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_role_fk` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
