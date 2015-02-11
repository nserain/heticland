-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Février 2015 à 19:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `heticland`
--

-- --------------------------------------------------------

--
-- Structure de la table `attaks`
--

CREATE TABLE IF NOT EXISTS `attaks` (
  `idAttak` int(11) NOT NULL AUTO_INCREMENT,
  `nameAttak` varchar(100) CHARACTER SET latin1 NOT NULL,
  `damage` int(11) NOT NULL,
  `heal` int(50) NOT NULL,
  `speed` int(11) NOT NULL,
  PRIMARY KEY (`idAttak`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `attaks`
--

INSERT INTO `attaks` (`idAttak`, `nameAttak`, `damage`, `heal`, `speed`) VALUES
(1, 'YieldManagment', -50, 0, 0),
(2, 'Freemium ', 20, 0, 0),
(3, 'attaque1', -100, 0, 0),
(4, 'attaque2', 50, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `backgrounds`
--

CREATE TABLE IF NOT EXISTS `backgrounds` (
  `idBackground` int(11) NOT NULL AUTO_INCREMENT,
  `nameBackground` varchar(100) CHARACTER SET latin1 NOT NULL,
  `imgBackground` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idBackground`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `idCharacter` int(11) NOT NULL AUTO_INCREMENT,
  `nameCharacter` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pnj` tinyint(1) NOT NULL,
  `idRoom` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idAttak` int(11) NOT NULL,
  `moyenne` int(11) NOT NULL,
  PRIMARY KEY (`idCharacter`),
  KEY `room` (`idRoom`),
  KEY `idUser` (`idUser`),
  KEY `idAttak` (`idAttak`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `characters`
--

INSERT INTO `characters` (`idCharacter`, `nameCharacter`, `pnj`, `idRoom`, `hp`, `idUser`, `idAttak`, `moyenne`) VALUES
(3, 'Test', 0, 1, 600, 1, 2, 0),
(6, 'Carlier', 1, 1, 400, 2, 1, 0),
(8, 'Hero', 0, 1, 500, 3, 1, 0),
(9, 'qqq', 0, 1, 500, 7, 1, 0),
(10, 'qsd', 0, 1, 500, 8, 1, 0),
(11, 'www', 0, 1, 500, 9, 1, 0),
(12, 'realTest', 0, 1, 500, 10, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `nameItem` varchar(100) CHARACTER SET latin1 NOT NULL,
  `imgItem` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `idRoom` int(11) NOT NULL AUTO_INCREMENT,
  `nameRoom` varchar(100) CHARACTER SET latin1 NOT NULL,
  `question` varchar(255) CHARACTER SET latin1 NOT NULL,
  `answer` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idRoom`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`idRoom`, `nameRoom`, `question`, `answer`) VALUES
(1, 'salle1', 'Quelles sont les balises d''''ouverture et de fermeture en PHP ?', '<?php ?>'),
(3, 'salle1', 'Comment déclare-t-on une variable en PHP ?', '$'),
(4, 'salle1', 'Comment on crée un tableau en PHP ?', '$tableau=[]'),
(5, 'salle2', 'Quelles sont les balises d''ouverture et de fermeture en JavaScript ?', '<script></script>'),
(6, 'salle2', 'Quelle est la variable pour créer une fenêtre pop-up en JavaScript?', 'alert(!)'),
(7, 'salle2', 'Comment crée-t-on une boucle en JavaScript ?', 'for(){}'),
(8, 'salle3', 'Par quoi doit-on commencer un document HTML ? ', '!DOCTYPE html'),
(9, 'salle3', 'Quelle est la propriété css pour mettre un texte en majuscule ?', 'text-transform : uppercase'),
(10, 'salle3', 'Quelle est la propriété css qui transforme la sélection lorsqu''on la survole ? ', 'hover'),
(11, 'salle4', 'Quel est le nombre d''or en Photoshop ? ', ''),
(12, 'salle4', 'Quel est le format d''un gif ?', '.gif'),
(13, 'salle4', 'Quel est le raccourci clavier pour intervertir la sélection en Photoshop ?', 'ctrl+i'),
(14, 'salle4', 'Quel est le raccourci clavier pour fusionner ses calques en Photoshop ?', 'ctrl+e'),
(15, 'salle5', 'Citez un modèle économique ', 'freemium'),
(16, 'salle5', 'Quelle l''année de création de la presse mono-source ?', ''),
(17, 'salle5', 'Quel est le sigle économique pour le commerce de société à société ', 'BtoB'),
(18, 'salle6', 'Les constantes se déclarent-elles avant ou après les variables ?', 'avant'),
(19, 'salle6', 'Citez le premier mot de la structure répéter en algorithmie', 'POUR');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `nameUser`, `password`) VALUES
(1, 'test', 'test'),
(2, 'aaa', 'bbb'),
(3, 'aa', 'zz'),
(4, 'azeeaz', 'aze'),
(5, '', 'hero2'),
(6, 'hero2', 'hero2'),
(7, 'poi', 'poi'),
(8, 'qsd', 'qsd'),
(9, 'www', 'www'),
(10, 'realTest', '1234');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`idRoom`) REFERENCES `rooms` (`idRoom`),
  ADD CONSTRAINT `characters_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `characters_ibfk_3` FOREIGN KEY (`idAttak`) REFERENCES `attaks` (`idAttak`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
