-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 17 Décembre 2020 à 03:41
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tnh3d`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Date_creation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `password`, `Nom`, `Prenom`, `Date_creation`) VALUES
(1, 'hamzaboulman132@gmail.com', 'hamzaboulman132', 'Boulman', 'Hamza', '14/12/2020');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE IF NOT EXISTS `animation` (
  `id_animation` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_animation` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `information` text NOT NULL,
  PRIMARY KEY (`id_animation`),
  KEY `categorie_animation` (`categorie_animation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `animation`
--

INSERT INTO `animation` (`id_animation`, `categorie_animation`, `nom`, `video1`, `video2`, `prix`, `description`, `description2`, `information`) VALUES
(1, 'technologie', 'animation1', 'animation1.mp4', 'animation1.mp4', 20, '<p>description1 pour animation1</p>\r\n', '<p>description2 pour animation1</p>\r\n', ''),
(4, 'education', 'animation2', '5fd96c94751141.91160522.mp4', '5fd96c94751149.04448056.mp4', 400, '<p>description_animation_2</p>\r\n', '<p>description2_animation2</p>\r\n', '<p>info_animation2</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_animation`
--

CREATE TABLE IF NOT EXISTS `categorie_animation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_animation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorie_animation` (`categorie_animation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie_animation`
--

INSERT INTO `categorie_animation` (`id`, `categorie_animation`) VALUES
(1, 'education'),
(2, 'technologie');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `id_categorie_produit` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_produit` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie_produit`),
  UNIQUE KEY `categorie_produit` (`categorie_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `categorie_produit`
--

INSERT INTO `categorie_produit` (`id_categorie_produit`, `categorie_produit`) VALUES
(3, 'Accessoire Holographique'),
(2, 'Hologramme Particulier'),
(1, 'Hologramme Professionnel'),
(4, 'pc'),
(5, 'pc portable'),
(8, 'smartphone'),
(7, 'tablet');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `Nom`, `Email`, `password`, `date_creation`) VALUES
(6, 'hamzaboulman', 'hamzaboulman132@gmail.com', '$2y$10$P9OaH7dSTmPOJnvSkx0JR.JNhLXLmEZZZ2.MOu0r.rberFubL62du', '2020-12-11'),
(7, 'NABIL', 'nabiltlmsani@gmail.com', '$2y$10$FVYRS6R2009Vtc1AtaQwF.v6VwwhzApRIIbZ.jylg8/G6xxCJZuoe', '2020-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `destinataire`
--

CREATE TABLE IF NOT EXISTS `destinataire` (
  `id_destinataire` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `Adresse1` text NOT NULL,
  `Adresse2` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id_destinataire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `destinataire`
--

INSERT INTO `destinataire` (`id_destinataire`, `Nom`, `Prenom`, `Pays`, `ville`, `Adresse1`, `Adresse2`, `Email`, `telephone`, `note`) VALUES
(12, 'BOULMAN', 'HAMZA', 'Maroc', 'FES', 'N 22 rue 207 bis ain kadous Fes', 'jazmbxc ', 'hamzaboulman132@gmail.com', ' 212612119712', 'sdfgsdfg'),
(13, 'BOULMAN', 'HAMZA', 'France', 'FES', 'N 22 rue 207 bis ain kadous Fes', 'sdfgsdfg', 'hamzaboulman132@gmail.com', ' 212612119712', 'dfvdcvxcvbsre'),
(14, 'BOULMAN', 'HAMZA', 'France', 'FES', 'N 22 rue 207 bis ain kadous Fes', 'sdfhsdf', 'hamzaboulman132@gmail.com', ' 212612119712', 'cvbxcbfdx'),
(15, 'BOULMAN', 'HAMZA', 'Maroc', 'FES', 'N 22 rue 207 bis ain kadous Fes', 'hhggggggg', 'hamzaboulman132@gmail.com', ' 212612119712', 'kvjvjhgvg'),
(16, 'TLMSANI', 'NABIL', 'France', 'toulous', 'toulous N34', '', 'nabiltlmsani@gmail.com', ' 212090123456', 'hhhhhhhhhhhhhhh sdfs sdf g sd fg sd f   sdfg sdfgsd fg s df g sdf g sd fg s df v sad fgs df g sd f wre t gwe r fve sdf g sd f sdf g  sd fg sd fg s dfg '),
(17, 'BOULMAN', 'HAMZA', 'Maroc', 'FES', 'N 22 rue 207 bis ain kadous Fes', 'N 22 rue 207 bis ain kadous fes', 'hamzaboulman132@gmail.com', ' 20612119712', 'sdfhdfghdfghdfgn');

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_user` (`id_user`),
  KEY `id_produit` (`id_produit`),
  KEY `id_destinataire` (`id_destinataire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `details`
--

INSERT INTO `details` (`id_detail`, `id_user`, `id_produit`, `id_destinataire`, `quantity`, `status`, `date_creation`) VALUES
(16, 6, 1, 12, 1, 1, '2020-12-14'),
(17, 6, 6, 12, 1, 1, '2020-12-14'),
(18, 6, 8, 13, 1, 0, '2020-12-14'),
(19, 6, 2, 14, 1, 0, '2020-12-14'),
(20, 6, 8, 14, 1, 0, '2020-12-14'),
(21, 6, 6, 15, 1, 0, '2020-12-14'),
(22, 7, 1, 16, 2, 1, '2020-12-14'),
(23, 7, 2, 16, 3, 1, '2020-12-14'),
(24, 6, 1, 17, 3, 0, '2020-12-17');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_produit` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prix` double NOT NULL,
  `TVA` double NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `information` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `counter` int(11) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `categorie_produit` (`categorie_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `categorie_produit`, `Nom`, `Prix`, `TVA`, `description`, `description2`, `information`, `status`, `counter`, `photo1`, `photo2`, `photo3`, `photo4`, `date_creation`) VALUES
(1, 'Hologramme Professionnel', 'holo_pro_1', 200.9, 0, 'description1 pour holo_pro_1', 'description2 pour holo_pro_1', 'information pour holo_pro_1', 1, 14, 'holo_pro_1_1.jpg', 'holo_pro_1_2.jpg', '', 'holo_pro_1_4.jpg', '09/12/2020'),
(2, 'Hologramme Professionnel', 'holo_pro_2', 0.01, 0, 'description1 pour holo_pro_2', 'description2 pour holo_pro_2', 'information pour holo_pro_2', 1, 14, 'holo_pro_2_1.jpg', 'holo_pro_2_2.jpg', 'holo_pro_2_3.jpg', 'holo_pro_2_4.jpg', '09/12/2020'),
(3, 'Hologramme Professionnel', 'holo_pro_3', 1000, 0, '<p>description1 pour holo_pro_3</p>\r\n', '<p>description2 pour holo_pro_3</p>\r\n', '<p>information pour holo_pro_3</p>\r\n', 1, 2, 'holo_pro_3_1.jpg', 'holo_pro_3_2.jpg', 'holo_pro_3_3.jpg', 'holo_pro_3_4.jpg', '09/12/2020'),
(4, 'Hologramme Professionnel', 'holo_pro_4', 2000, 0, 'description1 pour holo_pro_4', 'description2 pour holo_pro_4', 'information pour holo_pro_4', 1, 4, 'holo_pro_4_1.jpg', 'holo_pro_4_2.jpg', 'holo_pro_4_3.jpg', 'holo_pro_4_4.jpg', '09/12/2020'),
(5, 'Hologramme Particulier', 'holo_par_1', 200, 0, '<p>description1 pour holo_par_1</p>\r\n', '<p>description2 pour holo_par_1</p>\r\n', '<p>information pour holo_par_1</p>\r\n', 1, 0, 'holo_par_1_1.jpg', 'holo_par_1_2.jpg', 'holo_par_1_3.jpg', 'holo_par_1_4.jpg', '09/12/2020'),
(6, 'Hologramme Particulier', 'holo_par_2', 100, 2, 'description1 pour holo_par_2', 'description2 pour holo_par_2', 'information pour holo_par_2', 1, 7, 'holo_par_2_1.jpg', 'holo_par_2_2.jpg', 'holo_par_2_3.jpg', 'holo_par_2_4.jpg', '09/12/2020'),
(7, 'Hologramme Particulier', 'holo_par_3', 1000, 0, 'description1 pour holo_par_3', 'description2 pour holo_par_3', 'information pour holo_par_3', 1, 0, 'holo_par_3_1.jpg', 'holo_par_3_2.jpg', 'holo_par_3_3.jpg', 'holo_par_3_4.jpg', '09/12/2020'),
(8, 'Hologramme Particulier', 'holo_par_4', 2000, 0, 'description1 pour holo_par_4', 'description2 pour holo_par_4', 'information pour holo_par_4', 1, 10, 'holo_par_4_1.jpg', 'holo_par_4_2.jpg', 'holo_par_4_3.jpg', 'holo_par_4_4.jpg', '09/12/2020'),
(9, 'Accessoire Holographique', 'pied_1', 10, 0, 'description1 pour pied_1', 'description2 pour pied_1', 'information pour pied_1', 1, 7, 'pied_1_1.jpg', 'pied_1_2.jpg', 'pied_1_3.jpg', 'pied_1_4.jpg', '09/12/2020'),
(10, 'Accessoire Holographique', 'pied_2', 20, 0, 'description1 pour pied_2', 'description2 pour pied_2', 'information pour pied_2', 1, 12, 'pied_2_1.jpg', 'pied_2_2.jpg', 'pied_2_3.jpg', 'pied_2_4.jpg', '09/12/2020'),
(11, 'Accessoire Holographique', 'pied_3', 30, 0, 'description1 pour pied_3', 'description2 pour pied_3', 'information pour pied_3', 1, 0, 'pied_3_1.jpg', 'pied_3_2.jpg', 'pied_3_3.jpg', 'pied_3_4.jpg', '09/12/2020'),
(12, 'Accessoire Holographique', 'pied_4', 40, 0, 'description1 pour pied_4', 'description2 pour pied_4', 'information pour pied_4', 1, 3, 'pied_4_1.jpg', 'pied_4_2.jpg', 'pied_4_3.jpg', 'pied_4_4.jpg', '09/12/2020'),
(14, 'pc portable', 'pc portale', 4000, 0, 'description1 pour pc portable', 'description2 pour pc portable', 'information pour pc portable', 1, 1, 'produit2_1.jpg', 'produit2_2.jpg', 'produit2_3.jpg', 'produit2_4.jpg', '09/12/2020'),
(15, 'tablet', 'tablet', 4000, 0, 'description1 pour tablet', 'description2 pour tablet', 'information pour tablet', 1, 6, 'produit3_1.jpg', 'produit3_2.jpg', 'produit3_3.jpg', 'produit3_4.jpg', '09/12/2020'),
(16, 'pc portable', 'pc portable 2', 3000, 0, '<p>description1 pour pc portable 2</p>\r\n', '<p>description2 pour pc portable 2</p>\r\n', '<p>information pour pc portable 2</p>\r\n', 1, 1, 'produit4_1.jpg', 'produit4_2.jpg', 'produit4_3.jpg', 'produit4_4.jpg', ''),
(17, 'pc', 'pc2', 2500, 0, 'description1 pour pc2', 'description2 pour pc2', 'information pour pc2', 1, 0, 'produit5_1.jpg', 'produit5_2.jpg', 'produit5_3.jpg', 'produit5_4.jpg', '09/12/2020'),
(18, 'tablet', 'tablet2', 1000, 0, 'description1 pour tablet2', 'description2 pour tablet2', 'information pour tablet2', 1, 0, 'produit6_1.jpg', 'produit6_2.jpg', 'produit6_3.jpg', 'produit6_4.jpg', '09/12/2020'),
(19, 'tablet', 'tablet3', 1000, 0, 'description1 pour tablet3', 'description2 pour tablet3', 'information pour tablet3', 1, 0, 'produit7_1.jpg', 'produit7_2.jpg', 'produit7_3.jpg', 'produit7_4.jpg', '09/12/2020'),
(20, 'pc', 'hahahaha', 200, 20, '<p>description hhhhhhhhhhhhhhhhhh</p>\r\n', '<p>Descripytion 2 hhhhhhhhhhhhhhhhh</p>\r\n', '<p>info hhhhhhhhhhhhhhhhhhh</p>\r\n', 1, 1, '5fda97b1baa4c7.96124398.png', '', '', '', '2020-12-17');

-- --------------------------------------------------------

--
-- Structure de la table `telecharger`
--

CREATE TABLE IF NOT EXISTS `telecharger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_animation` int(11) NOT NULL,
  `date_payement` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_animation` (`id_animation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `telecharger`
--

INSERT INTO `telecharger` (`id`, `id_user`, `id_animation`, `date_payement`) VALUES
(3, 7, 1, '2020-12-14');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animation`
--
ALTER TABLE `animation`
  ADD CONSTRAINT `animation_ibfk_1` FOREIGN KEY (`categorie_animation`) REFERENCES `categorie_animation` (`categorie_animation`);

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `details_ibfk_3` FOREIGN KEY (`id_destinataire`) REFERENCES `destinataire` (`id_destinataire`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie_produit`) REFERENCES `categorie_produit` (`categorie_produit`);

--
-- Contraintes pour la table `telecharger`
--
ALTER TABLE `telecharger`
  ADD CONSTRAINT `telecharger_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `telecharger_ibfk_2` FOREIGN KEY (`id_animation`) REFERENCES `animation` (`id_animation`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
