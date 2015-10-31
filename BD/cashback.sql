-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Octobre 2015 à 17:10
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cashback`
--
CREATE DATABASE IF NOT EXISTS `cashback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cashback`;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(10) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `id_membre` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date`, `id_membre`) VALUES
(99, '2015-10-09 01:52:11', 3),
(100, '2015-10-09 01:53:23', 3),
(101, '2015-10-09 01:55:02', 3),
(102, '2015-10-09 01:56:18', 3),
(103, '2015-10-09 01:56:36', 3),
(104, '2015-10-09 01:57:29', 3),
(105, '2015-10-09 01:57:54', 3),
(106, '2015-10-09 01:58:30', 3),
(107, '2015-10-09 01:59:29', 3),
(108, '2015-10-09 01:59:44', 3),
(109, '2015-10-09 01:59:58', 3),
(110, '2015-10-09 02:00:11', 3),
(111, '2015-10-09 02:00:24', 3),
(112, '2015-10-09 02:02:38', 3),
(113, '2015-10-09 02:05:50', 3),
(135, '2015-10-09 10:06:55', 2),
(136, '2015-10-09 10:07:04', 2),
(137, '2015-10-09 10:10:39', 3),
(138, '2015-10-09 10:18:05', 1),
(139, '2015-10-09 10:20:02', 1),
(140, '2015-10-09 10:25:06', 1),
(141, '2015-10-09 10:25:31', 1),
(142, '2015-10-09 10:26:18', 1),
(143, '2015-10-09 10:27:56', 1),
(144, '2015-10-09 10:28:56', 1),
(145, '2015-10-09 10:31:41', 1),
(146, '2015-10-09 10:32:15', 1),
(147, '2015-10-09 10:32:21', 1),
(148, '2015-10-09 10:44:20', 2);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id_commande` int(10) NOT NULL,
  `id_produit` int(10) NOT NULL,
  `quantite` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_commande`, `id_produit`, `quantite`) VALUES
(100, 3, 3),
(100, 3, 3),
(100, 1, 1),
(100, 5, 5),
(101, 1, 1),
(102, 1, 2),
(103, 1, 2),
(106, 1, 0),
(111, 1, 1),
(111, 3, 3),
(111, 2, 2),
(113, 1, 1),
(135, 1, 5),
(136, 2, 4),
(139, 22, 1),
(139, 24, 3),
(141, 2, 1),
(141, 2, 3),
(141, 2, 1),
(142, 2, 1),
(142, 2, 3),
(142, 2, 1),
(143, 1, 1),
(143, 2, 2),
(144, 1, 1),
(144, 2, 2),
(148, 1, 1),
(148, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(10) NOT NULL,
  `nom_membre` varchar(255) DEFAULT NULL,
  `prenom_membre` varchar(255) DEFAULT NULL,
  `motDepasse_membre` varchar(255) DEFAULT NULL,
  `email_membre` varchar(255) DEFAULT NULL,
  `adresse_membre` varchar(255) DEFAULT NULL,
  `telephone_membre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom_membre`, `prenom_membre`, `motDepasse_membre`, `email_membre`, `adresse_membre`, `telephone_membre`) VALUES
(1, 'Serrari', 'Nasreddine', '1234', 'serrari.nasreddine@gmail.com', '1839 Rue Saint Christophe Montreal', '514-629 3918'),
(2, 'Benzerraouia', 'Noura', '1234', 'benzerraouia-noura@hotmail.com', '123 rue whatzup Montreal', '514-222-3659'),
(3, 'ghailan', 'hicham', '1234', 'hicham.ghailan@gmail.com', '222, 8e rue laval', '514 321 8163');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `section`, `titre`) VALUES
(1, 'index', 'Accueil'),
(2, 'equipe', 'Notre equipe'),
(3, 'realisations', 'Realisations'),
(5, 'partenaires', 'Partenaires'),
(7, 'how', 'Comment ca marche?'),
(8, 'faq', 'FAQ'),
(9, 'contact', 'Contact'),
(11, 'apropos', 'A propos '),
(12, 'produits', 'Les produits de la semaine'),
(13, 'login', 'Login'),
(15, 'commande', ' '),
(16, 'validationCommande', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(10) NOT NULL,
  `nom_produit` varchar(255) DEFAULT NULL,
  `rabais_produit` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `rabais_produit`, `image`) VALUES
(1, 'Ashanti 250 mg', '1.50', '1.jpg'),
(2, 'Astro Original Cappuccino', '0.50', '2.jpg'),
(3, 'Salade Sante THQ', '1.75', '3.jpg'),
(4, 'Belsoy Choclate', '0.95', '4.jpeg'),
(5, 'Casi Di Mama Pizza', '0.60', '5.png'),
(6, 'Wishes Ice-cream', '1.20', '6.png'),
(7, 'Haggen-Dazs Camarel Ice-cream', '2.00', '7.jpg'),
(8, 'Huggies Weaper', '0.90', '8.png'),
(9, 'Huggies Diapers', '1.45', '9.png'),
(10, 'Krisda Tea/Coffee', '2.50', '10.jpg'),
(11, 'Nature''s Patin-Barre energetique', '3.00', '11.jpg'),
(12, 'Naya- Water', '1.80', '12.png'),
(13, 'Peldge- Floor Care', '1.00', '13.png'),
(14, 'Nutella', '0.50', '14.jpg'),
(15, 'OFF!', '2.20', '15.png'),
(16, 'Delissio-Pizza', '1.00', '16.png'),
(17, 'Planters-Nuts', '0.75', '17.png'),
(18, 'Primo', '2.25', '18.jpg'),
(19, 'Que Pasa', '1.50', '19.jpg'),
(20, 'Que Pasa-Sauce', '0.80', '20.png'),
(21, 'Arride-Salade', '2.30', '21.png'),
(22, 'St-Michel Biscuit', '1.60', '22.jpg'),
(23, 'Tabasco- Kalamata', '1.00', '23.jpg'),
(24, 'VH-Sauce', '0.50', '24.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`), ADD KEY `id_membre` (`id_membre`), ADD KEY `id_membre_2` (`id_membre`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD KEY `id_commande` (`id_commande`), ADD KEY `id_produit` (`id_produit`), ADD KEY `id_produit_2` (`id_produit`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
ADD CONSTRAINT `FK_Membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
ADD CONSTRAINT `FK_Commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_Produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
