-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 30 Août 2016 à 16:24
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
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(63) COLLATE utf8_bin NOT NULL,
  `email` varchar(63) COLLATE utf8_bin NOT NULL,
  `password` varchar(63) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.admin', '21232f297a57a5a743894a0e4a801fc3'),
(18, 'aze', 'aze@aze.aze', '0a5b3913cbc9a9092311630e869b4442'),
(19, 'qsd', 'aze@aze.azeqsd', '511e33b4b0fe4bf75aa3bbac63311e5a'),
(20, 'wxc', 'a@a.awxc', '1fd3c4ef39f3723f137fb9f778be8bef'),
(21, 'pseudo', 'pseudo@a.a', 'pseudo'),
(22, '321', '321321@321.321', '321'),
(23, '987', '987@987.987', 'df6d2338b2b8fce1ec2f6dda0a630eb0'),
(24, 'cc', 'a@a.a', 'e0323a9039add2978bf5b49550572c7c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
