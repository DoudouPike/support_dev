-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 25 Août 2016 à 14:36
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `support_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(63) COLLATE utf8_bin NOT NULL,
  `category` int(63) NOT NULL,
  `date` date NOT NULL,
  `date_last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(63) COLLATE utf8_bin NOT NULL,
  `goal` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `lessons`
--

INSERT INTO `lessons` (`id`, `lang`, `category`, `date`, `date_last`, `title`, `goal`, `content`) VALUES
(1, 'html', 0, '2016-08-25', '2016-08-25 12:24:17', 'HTML ? C est contagieux ?', 'Comprendre le langage HTML', 'Le langage HTML est ... patati patata'),
(2, 'css', 0, '2016-08-25', '2016-08-25 12:32:42', 'Le CSS, c est quoi ?', 'Commencer a faire des beaux sites', 'Le css bla bla bla'),
(3, 'js', 0, '2016-08-25', '2016-08-25 12:34:00', 'le js c est quoi ?', 'js c est cool', 'le js est un langage ... patati patata'),
(4, 'html', 0, '2016-08-25', '2016-08-25 12:35:16', 'html, la pratique', 'découvrir les balises html', 'les balises html sont les suivantes : patati patata'),
(5, 'html', 1, '2016-08-25', '2016-08-25 12:35:58', 'html 5', 'aller plus loin avec html', 'html 5 a apporté de nouvelles balises.. patati patata');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(63) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
