-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 30 Août 2016 à 16:28
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
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(63) COLLATE utf8_bin NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `lesson` int(63) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `content`, `date`, `lesson`) VALUES
(2, 'a', 'a', '2016-08-30', 2);

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
  `content` varchar(4095) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Contenu de la table `lessons`
--

INSERT INTO `lessons` (`id`, `lang`, `category`, `date`, `date_last`, `title`, `goal`, `content`) VALUES
(1, 'html', 0, '2016-08-25', '2016-08-30 11:21:59', 'HTML ? C est contagieux ? NEW', 'Comprendre le langage HTML', '<p><strong>Le langage HTML est ... patati patata</strong></p>'),
(2, 'css', 0, '2016-08-25', '2016-08-29 14:19:14', 'Le CSS, c est quoi ?a', 'Commencer a faire des beaux sites', '<p>Le css bla bla bla</p>'),
(3, 'js', 0, '2016-08-25', '2016-08-25 12:34:00', 'le js c est quoi ?', 'js c est cool', 'le js est un langage ... patati patata'),
(4, 'html', 0, '2016-08-25', '2016-08-25 12:35:16', 'html, la pratique', 'découvrir les balises html', 'les balises html sont les suivantes : patati patata'),
(5, 'html', 1, '2016-08-25', '2016-08-25 22:00:00', 'NEW HTML 5, la nouvelle version', 'NEW DÃ©couvrir les nouvelles balises HTML5', '<h1>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</h1>\r\n<p>&nbsp;</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<p>NEW Les balises HTML 5 apporte de nombreuses nouveaut&eacute;s favorisant la structuration de la page et donc la mise en forme ... et patati patata.</p>\r\n<h1>&nbsp;</h1>'),
(6, 'php', 0, '2016-08-26', '2016-08-25 22:00:00', 'NEW PHP 1 titre', 'NEW PHP 1 objectif', '<p>NEW PHP 1 contenu</p>'),
(11, 'css', 3, '2016-08-26', '2016-08-29 14:03:10', 'a', 'a', '<p>a</p>'),
(12, 'php', 0, '2016-08-29', '2016-08-29 14:20:45', 'Nouveau titre', 'CrÃ©er un nouveau cours', '<p>Ceci est un nouveau cours.</p>'),
(13, 'html', 1, '2016-08-30', '2016-08-30 07:24:34', 'Step 1', 'Step 1', '<p>Step 1</p>'),
(14, 'js', 3, '2016-08-30', '2016-08-30 09:43:19', 'step 3', 'obj', '<p>Easy (and free!) You should check out our premium features.</p>'),
(15, 'html', 3, '2016-08-30', '2016-08-30 11:29:41', 'HTML : Tout savoir', 'Tout connaÃ®tre concernant le langage HTML', '<p>Si vous avez suivis les cours pr&eacute;c&eacute;dents, alors nous n''avons plus rien &agrave; vous apprendre.<br />Si vous souhaitez continuer d''apprendre, informez vous par vous-m&ecirc;mes.</p>\r\n<p>Nous, on part en vacances.<br />Bye !</p>'),
(16, 'php', 2, '2016-08-30', '2016-08-30 12:11:43', 'PHP GENERAL !', 'GARDE A VOUS !', 'Rompez.'),
(17, 'js', 3, '2016-08-30', '2016-08-30 12:13:41', 'Alllezzzz plus loiiiiin...', 'Woooohooo', 'Bonjour. =)'),
(18, 'css', 1, '2016-08-30', '2016-08-30 12:19:33', 'Apprendre Ã  marcher.', 'C''est compliquÃ©', '<p>Mais on y arrive tous.</p>\r\n<p>Alors cours !!</p>'),
(19, 'php', 2, '2016-08-30', '2016-08-30 13:18:49', 'test', 'test', '<p>Text normal</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<pre><br /><br />&lt;div class="clearfix"&gt;&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &lt;a href="index.php?page=single&amp;lang=&lt;?= htmlentities($lang) ?&gt;&amp;cat=&lt;?= htmlentities($category) ?&gt;&amp;id=&lt;?= htmlentities($id) ?&gt;" class="linkh"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;div class="box-sc-out"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;p&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;i class="fa fa-code icon-cat" aria-hidden="true"&gt;&lt;/i&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;?= htmlentities($title)?&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/a&gt;<br />&nbsp;&nbsp;&nbsp; &lt;a class="btn-m" href="index.php?page=modif&amp;id=&lt;?= htmlentities($id)?&gt;"&gt;&lt;i class="fa fa-wrench icon-ms" aria-hidden="true"&gt;&lt;/i&gt; Modifier&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp; &lt;a class="btn-s" href="index.php?page=delete&amp;id=&lt;?= htmlentities($id)?&gt;"&gt;&lt;i class="fa fa-trash" aria-hidden="true"&gt;&lt;/i&gt; Supprimer&lt;/a&gt;<br />&lt;/div&gt;</pre>');

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
