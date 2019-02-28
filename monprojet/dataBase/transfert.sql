-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  lund  fevrier  2019 à 22:14


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `transfert`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
   NOT NULL AUTO_INCREMENT,
  `id_expediteur` int(11) NOT NULL AUTO_INCREMENT,
  `ìd_client` varchar(25) DEFAULT NULL,
  `montant_deposer`int(11) DEFAULT NULL,
  `frais_depot` int(11) DEFAULT NULL,
   `date_depot` date DEFAULT NULL,
  PRIMARY KEY (`id_expediteur`,`id_client`),
  KEY `FK_utilisateur_id_expediteur` (`id_expediteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_expediteur`,`id_client`, `date_depot`,`frais_depot`,`montant_deposer`) VALUES
(1, 'mariko',  '2018-03-22',1000 ,500000),
(3, 'keita' , '2018-09-21',50000,3000);

-- --------------------------------------------------------

--
--

--
-- Structure de la table `client `
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_destinataire` int(11) NOT NULL AUTO_INCREMENT,
  `nom_destinataire` varchar(50) DEFAULT NULL,
  `prenom_destinataire` varchar(50) DEFAULT NULL,
  `code_secret_destinataire` int(11) DEFAULT NULL,
  `telephone_destinataire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_destinataire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
--
-- Contenu de la table `client`
--

INSERT INTO `destinataire` (`id_destinataire`, `nom_destinataire`, `prenom_destinataire`, `telephone_destinataire`, `code_secret_destinataire`) VALUES
(, 'sylla', 'thierno', 06183277, 7045),
(2, 'baldé', 'diallo', 345667, , 9023),
(3, 'bangooura', 'gasim',  49444 , 100),
(4, 'diallo', 'thierno',  , 33444415, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `expediteur`
--

CREATE TABLE IF NOT EXISTS `expediteur` (
  `id_expediteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_expediteur` varchar(50) DEFAULT NULL,
  `prenom_expediteur` varchar(50) DEFAULT NULL,
  `telephone_expediteur` int(11) DEFAULT NULL,
  
  PRIMARY KEY (`id_expediteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `expediteur`
--

INSERT INTO `expediteur` (`id_expediteur`, `nom_expediteur`, `prenom_expediteur`, `telephone_expediteur`) VALUES
(1, 'diallo', 'thierno',  '6649904433')
(2, 'barry', 'hawa', '626457891');

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

CREATE TABLE IF NOT EXISTS `traitement` (
  `id_nom_du_client` varchar(25) NOT NULL AUTO_INCREMENT,
  `date_de_retrait` date,
  `frais_de_retrait` int(11) DEFAULT NULL,
  
  PRIMARY KEY (`id_nom_du_client`),
  KEY `FK_TRAITEMENT_destinataire_id_destinataire` (`destinataire_id_destinataire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `traitement`
--

INSERT INTO `traitement` (`id_nom_du_client`, `date_de_retrait`, `frais_depot`) VALUES
(1,  '2018-03-22',  500, ),
('sidibe sam', '2018-03-22', '2018-03-22', 50000,);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `consulte`
--
ALTER TABLE `consulte`
  ADD CONSTRAINT `FK_consulte_id_malade` FOREIGN KEY (`id_malade`) REFERENCES `malade` (`id_malade`),
  ADD CONSTRAINT `FK_consulte_id_medecins` FOREIGN KEY (`id_medecins`) REFERENCES `medecins` (`id_medecins`);

--

--
-- Contraintes pour la table `traitement`
--
ALTER TABLE `traitement`
  ADD CONSTRAINT `FK_TRAITEMENT_malade_id_malade` FOREIGN KEY (`malade_id_malade`) REFERENCES `malade` (`id_malade`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
