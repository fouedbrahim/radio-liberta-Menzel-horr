-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 31 Juillet 2014 à 12:14
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `liberta`
--

-- --------------------------------------------------------

--
-- Structure de la table `affluence`
--

CREATE TABLE IF NOT EXISTS `affluence` (
  `heure` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `visites` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `affluence`
--

INSERT INTO `affluence` (`heure`, `date`, `visites`) VALUES
('2', '2014-07-30', 2);

-- --------------------------------------------------------

--
-- Structure de la table `articles blog`
--

CREATE TABLE IF NOT EXISTS `articles blog` (
  `id_article` int(5) NOT NULL AUTO_INCREMENT,
  `para1` text NOT NULL,
  `titre` text NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `articles blog`
--

INSERT INTO `articles blog` (`id_article`, `para1`, `titre`, `auteur`, `date`, `type`) VALUES
(6, '<p>ØªØªÙ…ÙŠØ² Ø¬Ù‡Ø© Ø§Ù„ÙˆØ·Ù† Ø§Ù„Ù‚Ø¨Ù„ÙŠ Ø¨ØªÙ†ÙˆØ¹ Ù…Ù†ØªÙˆØ¬Ø§ØªÙ‡Ø§ Ù…Ù† Ø§Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØ© Ø§Ù„ØªÙŠ Ø³Ø§Ù‡Ù…Øª Ø¨Ø¯Ø±Ø¬Ø© ÙƒØ¨ÙŠØ±Ø© ÙÙŠ Ø§Ù„ØªØ¹Ø±ÙŠÙ Ø¨Ø§Ù„Ø¬Ù‡Ø© ÙÙŠ Ø§Ù„Ø¯Ø§Ø®Ù„ ÙˆØ§Ù„Ø®Ø§Ø±Ø¬ ÙˆØ§Ø³ØªÙ‚Ø·Ø§Ø¨ Ø§Ù„Ø³ÙŠØ§Ø­ ÙˆØªÙ†Ø´ÙŠØ· Ø§Ù„Ø­Ø±ÙƒØ© Ø§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ù„ÙƒÙ† Ø§Ù„Ø­Ø§Ù„ ØªØºÙŠØ± Ø§Ù„ÙŠÙˆÙ… ÙˆÙ„Ù… ØªØµÙ…Ø¯ Ø£ØºÙ„Ø¨ Ù‡Ø°Ù‡ Ø§Ù„Ù…Ù†ØªÙˆØ¬Ø§Øª ÙÙ…Ù†Ù‡Ø§ Ù…Ø§ Ø§Ù†Ø¯Ø«Ø± Ø¹Ù„Ù‰ ØºØ±Ø§Ø± Ø§Ù„Ø­Ø¯Ø§Ø¯Ø© Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØ© ÙˆØµÙ†Ø§Ø¹Ø© Ø§Ù„Ù„ÙØ© Ø§Ù„ØªÙŠ ØªØ´Ù…Ù„ Ø§Ù„Ø¨Ø·Ø§Ù†ÙŠØ© ÙˆØ§Ù„Ø¨Ø±Ù†Ø³ ÙˆØ§Ù„Ù‚Ø´Ø§Ø¨ÙŠØ© ÙˆØ§Ù„Ø¬Ø¨Ø© ÙˆÙ†Ø¬Ø§Ø±Ø© Ø§Ù„Ø®Ø´Ø¨ Ø§Ù„ØªÙŠ ØªÙ‡ØªÙ… Ø¨ØµÙ†Ø§Ø¹Ø© Ø§Ù„Ù…Ø­Ø±Ø§Ø« Ø§Ù„Ø¹Ø±Ø¨ÙŠ ÙˆØ§Ù„ÙƒØ±ÙŠØ·Ø© ÙˆÙ…Ù‡Ø±Ø§Ø³ Ø§Ù„Ø­Ø·Ø¨ ÙˆÙ…Ù†Ù‡Ø§ Ù…Ø§ Ù‡Ùˆ Ø¨ØµØ¯Ø¯ Ø§Ù„Ø§Ù†Ø¯Ø«Ø§Ø± Ù…Ø«Ù„ ØµÙ†Ø§Ø¹Ø© Ø§Ù„Ø¨Ù„ØºØ© ÙˆØ§Ù„Ø­ØµÙŠØ± ÙˆØ§Ù„ÙØ®Ø§Ø± Ø§Ù„Ø¹Ø±Ø¨ÙŠ. ÙˆÙ„Ù… ÙŠØ¨Ù‚ Ù…Ø§ ÙŠÙ…ÙŠØ² Ø§Ù„Ù…Ù†Ø·Ù‚Ø© Ù…Ù† Ù‡Ø°Ù‡ Ø§Ù„Ø­Ø±Ù Ø³ÙˆÙ‰ ØµÙ†Ø§Ø¹Ø© Ø§Ù„ÙØ®Ø§Ø± Ø§Ù„Ø¹ØµØ±ÙŠ ÙˆÙŠØ·Ù„Ù‚ Ø¹Ù„ÙŠÙ‡ Ø§Ø³Ù… Ø§Ù„ÙØ®Ø§Ø± Ø§Ù„Ù…Ø·Ù„ÙŠ Ø£Ùˆ Ø§Ù„Ù…ØºØ·Ø³ Ø­Ø³Ø¨ Ø§Ù„Ù…ØµØ·Ù„Ø­ Ø§Ù„Ù…ØªØ¯Ø§ÙˆÙ„.<br />ÙÙŠ Ø£Ù†Ù‡Ø¬ Ø®Ù„ÙÙŠØ© ÙˆØ£Ø²Ù‚Ø© Ø¨Ù…Ø¯ÙŠÙ†Ø© Ù†Ø§Ø¨Ù„ ÙŠÙ†Ø´Ø· Ø­Ø±ÙÙŠÙˆÙ† ÙŠØµÙ†Ø¹ÙˆÙ† Ù…Ù†ØªÙˆØ¬Ø§Øª ØªÙ‚Ù„ÙŠØ¯ÙŠØ© ÙˆÙ„Ø¦Ù† ÙƒØ§Ù†Øª Ù‡Ø°Ù‡ Ø§Ù„Ù…Ø­Ù„Ø§Øª ØªØ¹Ø¯ Ø¨Ø§Ù„Ù…Ø¦Ø§Øª Ø®Ù„Ø§Ù„ Ø³ØªÙŠÙ†Ø§Øª ÙˆØ³Ø¨Ø¹ÙŠÙ†Ø§Øª ÙˆØ«Ù…Ø§Ù†ÙŠÙ†Ø§Øª Ø§Ù„Ù‚Ø±Ù† Ø§Ù„Ù…Ø§Ø¶ÙŠ ÙØ¥Ù†Ù‡Ø§ Ø§Ù„ÙŠÙˆÙ… Ø£ØµØ¨Ø­Øª ØªØ¹Ø¯ Ø¹Ù„Ù‰ Ø£ØµØ§Ø¨Ø¹ Ø§Ù„ÙŠØ¯ Ø§Ù„ÙˆØ§Ø­Ø¯Ø©. ÙˆÙƒÙ„ ØµØ§Ø­Ø¨ ØµÙ†Ø¹Ø© ÙŠØªÙˆÙÙ‰ Ø¥Ù„Ø§ ÙˆÙŠØºÙ„Ù‚ Ø§Ù„Ù…Ø­Ù„ Ù…Ù† Ø¨Ø¹Ø¯Ù‡ ÙˆÙŠØªØ­ÙˆÙ„ Ø¥Ù„Ù‰ Ù†Ø´Ø§Ø· ØªØ¬Ø§Ø±ÙŠ Ø¢Ø®Ø±.&nbsp;<br />Ø§Ù„Ø³ÙŠØ¯ Ø®Ø§Ù„Ø¯ Ø¨Ù† Ø±Ø¬Ø¨ Ø­Ø±ÙÙŠ ÙÙŠ ØµÙ†Ø§Ø¹Ø© Ø§Ù„Ø­ØµÙŠØ± Ø£Ø±Ø¬Ø¹ Ø£Ø³Ø¨Ø§Ø¨ Ø§Ù†Ø¯Ø«Ø§Ø± Ø¨Ø¹Ø¶ Ø£Ù†ÙˆØ§Ø¹ Ø§Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØ© Ø¥Ù„Ù‰ Ø±ÙØ¶ Ø§Ù„Ø¬ÙŠÙ„ Ø§Ù„Ø­Ø§Ù„ÙŠ ÙˆØ§Ù„Ø¬ÙŠÙ„ Ø§Ù„Ø°ÙŠ Ø³Ø¨Ù‚Ù‡ ØªØ¹Ù„Ù… ØµÙ†Ø¹Ø© Ø§Ù„Ø¬Ø¯ÙˆØ¯ Ø¹Ù„Ù‰ Ø­Ø¯ Ù‚ÙˆÙ„Ù‡ Ø¨Ø³Ø¨Ø¨ Ø¹Ø¯Ù… Ù…Ø±Ø¯ÙˆØ¯ÙŠØªÙ‡Ø§ Ø§Ù„Ù…Ø§Ù„ÙŠØ© ÙˆØ£Ø¶Ø§Ù Ø£Ù† Ù‡Ø°Ù‡ Ø§Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù†Ø¯Ø«Ø±Øª Ø¨Ù…ÙˆØª Ø£ØµØ­Ø§Ø¨Ù‡Ø§ ÙˆÙ„Ù… ÙŠØ¹Ø¯ Ù„Ù‡Ø§ ÙˆØ¬ÙˆØ¯ ÙˆØªÙˆÙ‚Ø¹ Ø§Ù„Ø³ÙŠØ¯ Ø®Ø§Ù„Ø¯ Ø¨Ù† Ø±Ø¬Ø¨ Ø§Ù†Ø¯Ø«Ø§Ø± ØµÙ†Ø§Ø¹Ø© Ø§Ù„Ø­ØµÙŠØ± Ø®Ù„Ø§Ù„ Ø§Ù„Ø¹Ø´Ø±ÙŠØªÙŠÙ† Ø§Ù„Ù‚Ø§Ø¯Ù…ØªÙŠÙ† Ø¹Ù„Ù‰ Ø£Ù‚ØµÙ‰ ØªÙ‚Ø¯ÙŠØ± ÙˆØ­Ù…Ù„ Ø§Ù„Ø³ÙŠØ¯ Ø®Ø§Ù„Ø¯ Ø§Ù„Ø¯ÙŠÙˆØ§Ù† Ø§Ù„ÙˆØ·Ù†ÙŠ Ù„Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØ© Ù…Ø³Ø¤ÙˆÙ„ÙŠØ© Ø°Ù„Ùƒ ÙˆØ·Ø§Ù„Ø¨Ù‡ Ø¨Ø§ÙŠØ¬Ø§Ø¯ Ø­Ù„ÙˆÙ„ Ø¬Ø°Ø±ÙŠØ© Ù„Ø¥Ù†Ù‚Ø§Ø° Ù…Ø§ ØªØ¨Ù‚Ù‰ Ù…Ù† Ù‡Ø°Ù‡ Ø§Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù„ØªÙ‚Ù„ÙŠØ¯ÙŠØ© ÙˆÙ„Ù… Ù„Ø§ Ø¥Ø¹Ø§Ø¯Ø© Ø§Ø­ÙŠØ§Ø¡ Ø§Ù„ØµÙ†Ø§Ø¹Ø§Øª Ø§Ù„Ø£Ø®Ø±Ù‰ Ø§Ù„ØªÙŠ Ø§Ù†Ø¯Ø«Ø±Øª Ù„Ø£Ù†Ù‡Ø§ ØªØ¹ØªØ¨Ø± Ø¬Ø²Ø¡Ø§ Ù…Ù† Ø°Ø§ÙƒØ±Ø© Ù‡Ø°Ù‡ Ø§Ù„Ù…Ù†Ø·Ù‚Ø© ÙˆØ°Ù„Ùƒ Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ø¨Ø¹Ø« Ù…Ø±Ø§ÙƒØ² ØªÙƒÙˆÙŠÙ† ÙˆØ§Ù„Ø§Ø¨ØªØ¹Ø§Ø¯ Ø¹Ù† Ø§Ù„Ø­Ù„ÙˆÙ„ Ø§Ù„Ù…Ø¤Ù‚ØªØ© Ø§Ù„ØªÙŠ Ø£Ø¶Ø±Øª Ø¨Ø§Ù„Ù‚Ø·Ø§Ø¹ Ù…Ø«Ù„ Ù…Ù†Ø­ Ø§Ù„Ù‚Ø±ÙˆØ¶ Ø§Ù„ØµØºØ±Ù‰ Ù„Ù„Ø­Ø±ÙÙŠÙŠÙ† Ù…Ù‚Ø§Ø¨Ù„ Ø¹Ø¯Ù… ØªÙˆÙÙŠØ± Ø£Ø³ÙˆØ§Ù‚ Ø¯Ø§Ø®Ù„ÙŠØ© Ø£Ùˆ Ø®Ø§Ø±Ø¬ÙŠØ© Ù„ØªØ³ÙˆÙŠÙ‚ Ù…Ù†ØªÙˆØ¬Ø§ØªÙ‡Ù… Ø¨Ø£Ø³Ø¹Ø§Ø± ØªØ¶Ù…Ù† Ù„Ù‡Ù… Ø£Ø±Ø¨Ø§Ø­Ø§ ØªÙ…ÙƒÙ†Ù‡Ù… Ù…Ù† Ø§Ù„Ø¹ÙŠØ´ Ø§Ù„ÙƒØ±ÙŠÙ… Ø®Ø§ØµØ© Ø£Ù…Ø§Ù… Ø§Ø±ØªÙØ§Ø¹ Ø£Ø³Ø¹Ø§Ø± Ø§Ù„Ù…ÙˆØ§Ø¯ Ø§Ù„Ø£ÙˆÙ„ÙŠØ©. ÙˆÙ‚Ø¯ Ø³Ø§Ù‡Ù…Øª Ù‡Ø°Ù‡ Ø§Ù„Ù‚Ø±ÙˆØ¶ Ø­Ø³Ø¨ Ù‚ÙˆÙ„ Ø§Ù„Ø³ÙŠØ¯ Ø®Ø§Ù„Ø¯ ÙÙŠ ØªØ¹Ù…ÙŠÙ‚ Ø£Ø²Ù…Ø© Ø§Ù„Ø­Ø±ÙÙŠÙŠÙ† Ø§Ù„Ø°ÙŠÙ† Ø¹Ø¬Ø²ÙˆØ§ Ø¹Ù† ØªØ³Ø¯ÙŠØ¯ Ø¯ÙŠÙˆÙ†Ù‡Ù… ÙØªØ®Ù„ÙˆØ§ Ø¹Ù† ØµÙ†Ø§Ø¹ØªÙ‡Ù… ÙˆÙØ¶Ù„ÙˆØ§ ØªØ¹Ø§Ø·ÙŠ Ø£Ù†ÙˆØ§Ø¹ Ø£Ø®Ø±Ù‰ Ù…Ù† Ø§Ù„ØªØ¬Ø§Ø±Ø© Ø§Ù„ØªÙŠ ØªØ¶Ù…Ù† Ù„Ù‡Ù… Ø¯Ø®Ù„Ø§ ÙŠÙˆÙ…ÙŠØ§.</p>', 'Ø§Ù„ÙˆØ·Ù† Ø§Ù„Ù‚Ø¨Ù„ÙŠ: ØµÙ†Ø§Ø¹Ø§Øª ØªÙ‚Ù„ÙŠØ¯ÙŠØ© Ø§Ù†Ø¯Ø«Ø±Øª ÙˆØ§Ù„ÙØ®Ø§Ø± Ø§Ù„Ø¹ØµØ±ÙŠ Ù…Ø§Ø²Ø§Ù„ ØµØ§Ù…Ø¯Ø§', 'Ø¹Ù…Ø§Ø¯ Ø®Ø±ÙŠØ¨ÙŠØ´', '2014-07-09', 'culture'),
(13, '<p dir="rtl"><em><strong>ØªÙ…ÙŠØ² Ù†Ø´Ø§Ø· Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø¨Ø§Ù„Ù…Ø´Ø§Ø±ÙƒØ© Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø© ÙÙŠ Ø§Ù„Ø¨Ø·ÙˆÙ„Ø© Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ù„Ø£ØµÙ†Ø§Ù Ø§Ù„Ø´Ø¨Ø§Ù† Ø®Ù„Ø§Ù„ Ø§Ù„Ù…ÙˆØ§Ø³Ù… Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ© Ùˆ ØªÙ…ÙƒÙ†Øª Ù…Ù† ØªØ­Ù‚ÙŠÙ‚ Ù†ØªØ§Ø¦Ø¬ Ù…Ø´Ø¬Ø¹Ø©<br />\r\nÙ†Ø°ÙƒØ± Ù…Ù† Ø¨ÙŠÙ†Ù‡Ø§:<br />\r\n1. ) ØªØ±Ø´Ø­ Ù…Ø±ÙƒØ² Ø§Ù„Ù†Ù‡ÙˆØ¶ Ù„ÙƒØ±Ø© Ø§Ù„ÙŠØ¯ Ù„Ù„Ø£Ø¯ÙˆØ§Ø± Ø§Ù„Ù†Ù‡Ø§Ø¦ÙŠØ© Ù…ÙˆØ³Ù… 2008-2009<br />\r\n2. )Ù…Ø´Ø§Ø±ÙƒØ© ØµÙ†Ù Ø§Ù„Ù…Ø¯Ø§Ø±Ø³ ÙÙŠ Ù†Ù‡Ø§Ø¦ÙŠ Ø§Ù„Ø¨Ø·ÙˆÙ„Ø© Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ù…ÙˆØ³Ù…<br />\r\n2010-2011<br />\r\n3 ) Ø³Ø¬Ù„Øª Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø­Ø¶ÙˆØ±Ù‡Ø§ ÙÙŠ Ø§Ù„Ù…Ù†ØªØ®Ø¨Ø§Øª Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ø¨Ø¨Ø¹Ø¶ Ø§Ù„Ø¹Ù†Ø§ØµØ±<br />\r\nØ§Ù„Ù…ØªØ£Ù„Ù‚Ø©<br />\r\nÙƒÙ…Ø§ Ø´Ù‡Ø¯Øª Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø¨Ø¹Ø« ØµÙ†Ù Ø£ÙƒØ§Ø¨Ø± Ù…ÙˆØ³Ù… 2006-2007 ÙˆÙ„Ù… ÙŠÙ‚Ø¯Ø±&nbsp;<br />\r\nÙ„Ù‡ Ø§Ù„Ø§Ø³ØªÙ…Ø±Ø§Ø± Ù„Ø£Ø³Ø¨Ø§Ø¨ Ù…Ø§Ø¯ÙŠØ© Ø±ØºÙ… Ø§Ù„Ù…Ø´Ø§Ø±ÙƒØ© Ø§Ù„Ø§ÙŠØ¬Ø§Ø¨ÙŠØ©&nbsp;<br />\r\n4)Ø­Ø±Øµ Ø£Ø¹Ø¶Ø§Ø¡ Ø§Ù„Ù‡ÙŠØ¦Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ø¹Ù„Ù‰ Ø£Ù† ØªÙƒÙˆÙ† Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ù…Ø¯Ø±Ø³Ø© ÙˆØ£Ø®Ù„Ø§Ù‚ ÙˆÙÙŠ Ù‡Ø°Ø§ Ø§Ù„Ø¥Ø·Ø§Ø± ØªÙ…Ù‘ Ø¨Ø¹Ø« Ù†ÙˆØ§Ø© Ù„Ø¯Ø±ÙˆØ³ Ù„Ù„ØªØ¯Ø§Ø±Ùƒ Ù„Ø£Ø¨Ù†Ø§Ø¡ Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ù…Ù†Ù‡Ù… Ø¶Ø¹Ø§Ù Ø§Ù„Ø­Ø§Ù„ ÙˆÙ‚Ø¯ ØªÙ…Ù‘ ÙÙŠ Ø§Ù„ØºØ±Ø¶ Ø§Ù„Ø§Ù„ØªØ¬Ø§Ø¡ Ø¥Ù„Ù‰ Ø£Ø¨Ù†Ø§Ø¡ Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø§Ù„Ù‚Ø¯Ù…Ø§Ø¡ Ø§Ù„Ø°ÙŠÙ† Ø£ØµØ¨Ø­ÙˆØ§ Ø§Ù„ÙŠÙˆÙ… ØªØ§Ø¨Ø¹ÙŠÙ† Ù„Ø³Ù„Ùƒ Ø§Ù„ØªØ¹Ù„ÙŠÙ… Ù…Ù† Ø£Ø³Ø§ØªØ°Ø© ÙˆÙ…Ø¹Ù„Ù…ÙŠÙ† ÙˆÙ‡Ø°Ø§ Ø§Ù„Ø¹Ù…Ù„ ÙˆØ¬ÙˆØ¨Ø§ Ù…Ù† Ø¨Ø§Ø¨ Ø§Ù„ØªØ·ÙˆØ¹&nbsp;<br />\r\n<br />\r\n5)Ø£Ù…Ø§ ÙÙŠ Ø§Ù„Ø´Ø£Ù† Ø§Ù„ØµØ­ÙŠ Ø­Ø±ØµØª Ø§Ù„Ù‡ÙŠØ£Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ø¹Ù„Ù‰ Ù…ØªØ§Ø¨Ø¹Ø© Ø§Ù„Ù„Ø§Ø¹Ø¨ÙŠÙ† Ø¨Ø¥Ø±Ø³Ø§Ø¡ Ù…Ù„Ù ØµØ­ÙŠ Ù„ÙƒÙ„ Ù„Ø§Ø¹Ø¨ ÙˆØ§Ù†ØªØ¯Ø§Ø¨ Ù…Ù…Ø±Ø¶ Ù‚Ø§Ø± ØªØ·ÙˆØ¹Ø§ Ù„Ù…ÙˆØ§ÙƒØ¨Ø© ÙƒÙ„ ÙƒØ¨ÙŠØ±Ø© ÙˆØµØºÙŠØ±Ø© Ù…Ù† Ø£ÙˆÙ„ Ø§Ù„Ù…ÙˆØ³Ù…&nbsp;<br />\r\n<br />\r\n6)ÙˆÙÙŠ Ø´Ø£Ù† ØªØ¹ØµÙŠØ± Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø¯Ø§Ø®Ù„ Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© ÙˆØ­Ø±ØµØ§ Ù…Ù† Ø§Ù„Ù‡ÙŠØ£Ø© Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ«ÙŠÙ‚ ÙˆØ§Ù„Ù…Ø±Ø§Ø³Ù„Ø© ØªÙ…Ù‘ Ø§Ù†ØªØ¯Ø§Ø¨ ÙƒØ§ØªØ¨ Ù‚Ø§Ø± Ù„Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø©&nbsp;<br />\r\n<br />\r\n7) Ø­Ø±ØµØ§ Ø£ÙŠØ¶Ø§ Ù…Ù† Ø§Ù„Ù‡ÙŠØ£Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ù„Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø¹Ù„Ù‰ Ø£Ù† ØªÙƒÙˆÙ† Ø§Ù„Ø¬Ù…Ø§Ù‡ÙŠØ± Ø§Ù„Ù…Ø³Ø§Ù†Ø¯Ø© Ù„ÙØ±ÙŠÙ‚Ù‡Ø§ ÙˆÙ…Ø³Ø§Ù„Ù…Ø© ØªÙ…Ù‘ Ø¨Ø¹Ø« Ù„Ø¬Ù†Ø© Ø£Ø­Ø¨Ø§Ø¡ Ù…ØªÙƒÙˆÙ†Ø© Ù…Ù† 6 Ø£Ø¹Ø¶Ø§Ø¡&nbsp;<br />\r\nØ¹Ù„Ù…Ø§ Ø£Ù† Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø§Ù„Ø³Ù‡Ù… Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠ Ø¨Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ Ù…Ù† 1966 Ø¥Ù„Ù‰ 2012 Ø¶Ù…Øª 1200 Ù…Ø¬Ø§Ø² Ù…Ù† Ø¶Ù…Ù† 4650 Ø³Ø§ÙƒÙ† ÙˆÙ‡Ø°Ø§ Ø¯Ù„ÙŠÙ„ Ø¹Ù„Ù‰ Ø£Ù† Ø£Ø¨Ù†Ø§Ø¡ Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ ÙŠØªÙ†ÙØ³ÙˆÙ† ÙƒØ±Ø© Ø§Ù„ÙŠØ¯ ÙˆÙÙŠ Ø¯Ø¹Ù…ÙƒÙ… Ù„Ù†Ø§ ÙˆÙ„ÙØª Ù†Ø¸Ø±ÙƒÙ… Ø¯ÙØ¹ Ù„Ù‡Ø°Ø§ Ø§Ù„Ù…ØªÙ†ÙØ³ Ø§Ù„ÙˆØ­ÙŠØ¯ Ù„Ø£Ø¨Ù†Ø§Ø¡ Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ ÙˆÙ„Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ø«ÙˆØ±Ø©&nbsp;</strong></em></p>\r\n', 'Ø¬Ù…Ø¹ÙŠØ© Ø§Ù„Ø³Ù‡Ù… Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠ Ø§Ù„Ø­Ø±ÙŠ Ù„ÙƒØ±Ø© Ø§Ù„ÙŠØ¯', 'http://fsmh.info/', '2014-07-09', 'sport'),
(14, '<p dir="rtl"><em><strong>ØªÙ…ÙŠØ² Ù†Ø´Ø§Ø· Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø¨Ø§Ù„Ù…Ø´Ø§Ø±ÙƒØ© Ø§Ù„Ù…Ù†ØªØ¸Ù…Ø© ÙÙŠ Ø§Ù„Ø¨Ø·ÙˆÙ„Ø© Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ù„Ø£ØµÙ†Ø§Ù Ø§Ù„Ø´Ø¨Ø§Ù† Ø®Ù„Ø§Ù„ Ø§Ù„Ù…ÙˆØ§Ø³Ù… Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ© Ùˆ ØªÙ…ÙƒÙ†Øª Ù…Ù† ØªØ­Ù‚ÙŠÙ‚ Ù†ØªØ§Ø¦Ø¬ Ù…Ø´Ø¬Ø¹Ø©<br />\r\nÙ†Ø°ÙƒØ± Ù…Ù† Ø¨ÙŠÙ†Ù‡Ø§:<br />\r\n1. ) ØªØ±Ø´Ø­ Ù…Ø±ÙƒØ² Ø§Ù„Ù†Ù‡ÙˆØ¶ Ù„ÙƒØ±Ø© Ø§Ù„ÙŠØ¯ Ù„Ù„Ø£Ø¯ÙˆØ§Ø± Ø§Ù„Ù†Ù‡Ø§Ø¦ÙŠØ© Ù…ÙˆØ³Ù… 2008-2009<br />\r\n2. )Ù…Ø´Ø§Ø±ÙƒØ© ØµÙ†Ù Ø§Ù„Ù…Ø¯Ø§Ø±Ø³ ÙÙŠ Ù†Ù‡Ø§Ø¦ÙŠ Ø§Ù„Ø¨Ø·ÙˆÙ„Ø© Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ù…ÙˆØ³Ù…<br />\r\n2010-2011<br />\r\n3 ) Ø³Ø¬Ù„Øª Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø­Ø¶ÙˆØ±Ù‡Ø§ ÙÙŠ Ø§Ù„Ù…Ù†ØªØ®Ø¨Ø§Øª Ø§Ù„Ø¬Ù‡ÙˆÙŠØ© Ø¨Ø¨Ø¹Ø¶ Ø§Ù„Ø¹Ù†Ø§ØµØ±<br />\r\nØ§Ù„Ù…ØªØ£Ù„Ù‚Ø©<br />\r\nÙƒÙ…Ø§ Ø´Ù‡Ø¯Øª Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ø¨Ø¹Ø« ØµÙ†Ù Ø£ÙƒØ§Ø¨Ø± Ù…ÙˆØ³Ù… 2006-2007 ÙˆÙ„Ù… ÙŠÙ‚Ø¯Ø±&nbsp;<br />\r\nÙ„Ù‡ Ø§Ù„Ø§Ø³ØªÙ…Ø±Ø§Ø± Ù„Ø£Ø³Ø¨Ø§Ø¨ Ù…Ø§Ø¯ÙŠØ© Ø±ØºÙ… Ø§Ù„Ù…Ø´Ø§Ø±ÙƒØ© Ø§Ù„Ø§ÙŠØ¬Ø§Ø¨ÙŠØ©&nbsp;<br />\r\n4)Ø­Ø±Øµ Ø£Ø¹Ø¶Ø§Ø¡ Ø§Ù„Ù‡ÙŠØ¦Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ø¹Ù„Ù‰ Ø£Ù† ØªÙƒÙˆÙ† Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ù…Ø¯Ø±Ø³Ø© ÙˆØ£Ø®Ù„Ø§Ù‚ ÙˆÙÙŠ Ù‡Ø°Ø§ Ø§Ù„Ø¥Ø·Ø§Ø± ØªÙ…Ù‘ Ø¨Ø¹Ø« Ù†ÙˆØ§Ø© Ù„Ø¯Ø±ÙˆØ³ Ù„Ù„ØªØ¯Ø§Ø±Ùƒ Ù„Ø£Ø¨Ù†Ø§Ø¡ Ø§Ù„Ø¬Ù…Ø¹ÙŠØ© Ù…Ù†Ù‡Ù… Ø¶Ø¹Ø§Ù Ø§Ù„Ø­Ø§Ù„ ÙˆÙ‚Ø¯ ØªÙ…Ù‘ ÙÙŠ Ø§Ù„ØºØ±Ø¶ Ø§Ù„Ø§Ù„ØªØ¬Ø§Ø¡ Ø¥Ù„Ù‰ Ø£Ø¨Ù†Ø§Ø¡ Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø§Ù„Ù‚Ø¯Ù…Ø§Ø¡ Ø§Ù„Ø°ÙŠÙ† Ø£ØµØ¨Ø­ÙˆØ§ Ø§Ù„ÙŠÙˆÙ… ØªØ§Ø¨Ø¹ÙŠÙ† Ù„Ø³Ù„Ùƒ Ø§Ù„ØªØ¹Ù„ÙŠÙ… Ù…Ù† Ø£Ø³Ø§ØªØ°Ø© ÙˆÙ…Ø¹Ù„Ù…ÙŠÙ† ÙˆÙ‡Ø°Ø§ Ø§Ù„Ø¹Ù…Ù„ ÙˆØ¬ÙˆØ¨Ø§ Ù…Ù† Ø¨Ø§Ø¨ Ø§Ù„ØªØ·ÙˆØ¹&nbsp;<br />\r\n<br />\r\n5)Ø£Ù…Ø§ ÙÙŠ Ø§Ù„Ø´Ø£Ù† Ø§Ù„ØµØ­ÙŠ Ø­Ø±ØµØª Ø§Ù„Ù‡ÙŠØ£Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ø¹Ù„Ù‰ Ù…ØªØ§Ø¨Ø¹Ø© Ø§Ù„Ù„Ø§Ø¹Ø¨ÙŠÙ† Ø¨Ø¥Ø±Ø³Ø§Ø¡ Ù…Ù„Ù ØµØ­ÙŠ Ù„ÙƒÙ„ Ù„Ø§Ø¹Ø¨ ÙˆØ§Ù†ØªØ¯Ø§Ø¨ Ù…Ù…Ø±Ø¶ Ù‚Ø§Ø± ØªØ·ÙˆØ¹Ø§ Ù„Ù…ÙˆØ§ÙƒØ¨Ø© ÙƒÙ„ ÙƒØ¨ÙŠØ±Ø© ÙˆØµØºÙŠØ±Ø© Ù…Ù† Ø£ÙˆÙ„ Ø§Ù„Ù…ÙˆØ³Ù…&nbsp;<br />\r\n<br />\r\n6)ÙˆÙÙŠ Ø´Ø£Ù† ØªØ¹ØµÙŠØ± Ø§Ù„Ø¥Ø¯Ø§Ø±Ø© Ø¯Ø§Ø®Ù„ Ø§Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© ÙˆØ­Ø±ØµØ§ Ù…Ù† Ø§Ù„Ù‡ÙŠØ£Ø© Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ«ÙŠÙ‚ ÙˆØ§Ù„Ù…Ø±Ø§Ø³Ù„Ø© ØªÙ…Ù‘ Ø§Ù†ØªØ¯Ø§Ø¨ ÙƒØ§ØªØ¨ Ù‚Ø§Ø± Ù„Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø©&nbsp;<br />\r\n<br />\r\n7) Ø­Ø±ØµØ§ Ø£ÙŠØ¶Ø§ Ù…Ù† Ø§Ù„Ù‡ÙŠØ£Ø© Ø§Ù„Ù…Ø¯ÙŠØ±Ø© Ù„Ù„Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø¹Ù„Ù‰ Ø£Ù† ØªÙƒÙˆÙ† Ø§Ù„Ø¬Ù…Ø§Ù‡ÙŠØ± Ø§Ù„Ù…Ø³Ø§Ù†Ø¯Ø© Ù„ÙØ±ÙŠÙ‚Ù‡Ø§ ÙˆÙ…Ø³Ø§Ù„Ù…Ø© ØªÙ…Ù‘ Ø¨Ø¹Ø« Ù„Ø¬Ù†Ø© Ø£Ø­Ø¨Ø§Ø¡ Ù…ØªÙƒÙˆÙ†Ø© Ù…Ù† 6 Ø£Ø¹Ø¶Ø§Ø¡&nbsp;<br />\r\nØ¹Ù„Ù…Ø§ Ø£Ù† Ø¬Ù…Ø¹ÙŠÙ‘Ø© Ø§Ù„Ø³Ù‡Ù… Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠ Ø¨Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ Ù…Ù† 1966 Ø¥Ù„Ù‰ 2012 Ø¶Ù…Øª 1200 Ù…Ø¬Ø§Ø² Ù…Ù† Ø¶Ù…Ù† 4650 Ø³Ø§ÙƒÙ† ÙˆÙ‡Ø°Ø§ Ø¯Ù„ÙŠÙ„ Ø¹Ù„Ù‰ Ø£Ù† Ø£Ø¨Ù†Ø§Ø¡ Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ ÙŠØªÙ†ÙØ³ÙˆÙ† ÙƒØ±Ø© Ø§Ù„ÙŠØ¯ ÙˆÙÙŠ Ø¯Ø¹Ù…ÙƒÙ… Ù„Ù†Ø§ ÙˆÙ„ÙØª Ù†Ø¸Ø±ÙƒÙ… Ø¯ÙØ¹ Ù„Ù‡Ø°Ø§ Ø§Ù„Ù…ØªÙ†ÙØ³ Ø§Ù„ÙˆØ­ÙŠØ¯ Ù„Ø£Ø¨Ù†Ø§Ø¡ Ù…Ù†Ø²Ù„ Ø­Ø±Ù‘ ÙˆÙ„Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ù„Ø«ÙˆØ±Ø©</strong></em></p>\r\n', 'eeeeeeeeeeee', 'zzzzzzzz', '2014-07-03', 'culture');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(6) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `position`) VALUES
(1, 'le probleme de chomage a menzel horr', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE IF NOT EXISTS `connectes` (
  `ip` int(12) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contacte`
--

CREATE TABLE IF NOT EXISTS `contacte` (
  `nom` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contacte`
--

INSERT INTO `contacte` (`nom`, `tel`, `mail`, `msg`) VALUES
('', '', '', ''),
('nom', 'Telephone', 'c@e.d', 'Message'),
('nom', 'Telephone', 'Email@j.j', 'Message'),
('nomdsq', 'Telephone', 'Emaildd@d.dddd', 'Message'),
('nom', 'Telephone', 'Emailfjh@dd.j', 'Messagenn'),
('qsdq', 'Telephodqsdqne', 'Emailqddq@dd.ddd', 'Messagedqsdqsdqsdqsd'),
('foued', '2229990', 'f@zz.e', 'liberta '),
('foued', '22220998', 'foued@ee.rr', 'rien  rien rien rien ');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `cin` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`cin`, `nom`, `role`) VALUES
(0, 'bilel ben zahou', 'animateur'),
(2, 'ben brahim foued', 'responsable informatique'),
(91, 'nidhal el mouldi', 'animateur'),
(99, 'mohamed b.h maaouia', 'animateur');

-- --------------------------------------------------------

--
-- Structure de la table `forum_reponses`
--

CREATE TABLE IF NOT EXISTS `forum_reponses` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date_reponse` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `correspondance_sujet` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `forum_reponses`
--

INSERT INTO `forum_reponses` (`id`, `auteur`, `message`, `date_reponse`, `correspondance_sujet`) VALUES
(32, 'admin admin', 'bienvenu ;)', '2014-07-23 03:33:54', 18);

-- --------------------------------------------------------

--
-- Structure de la table `forum_sujets`
--

CREATE TABLE IF NOT EXISTS `forum_sujets` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` text NOT NULL,
  `date_derniere_reponse` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `forum_sujets`
--

INSERT INTO `forum_sujets` (`id`, `auteur`, `titre`, `date_derniere_reponse`) VALUES
(18, 'admin admin', 'deposer vos sujets ici', '2014-07-23 03:33:54');

-- --------------------------------------------------------

--
-- Structure de la table `gallerie`
--

CREATE TABLE IF NOT EXISTS `gallerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `commentaire` varchar(26) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `gallerie`
--

INSERT INTO `gallerie` (`id`, `photo`, `commentaire`, `type`) VALUES
(7, 'page1-img6.jpg', 'x', 'sport'),
(8, 'page1-img7.jpg', 'hj', 'sport'),
(9, '1957557_10152148750491597_1398764551_n.jpg', 'kk', 'evennement'),
(10, '2.jpg', 'h', 'sport'),
(11, 'American-Audio-HP-700-Headset-icon.png', 'nnnnnnnnnnnnnnnnnnnnnnnnnn', 'interview');

-- --------------------------------------------------------

--
-- Structure de la table `lien radio`
--

CREATE TABLE IF NOT EXISTS `lien radio` (
  `lien_radio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lien radio`
--

INSERT INTO `lien radio` (`lien_radio`) VALUES
('index.php');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(3, 'foued@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `jour` varchar(10) NOT NULL,
  `prog1` varchar(30) NOT NULL,
  `prog2` varchar(30) NOT NULL,
  `prog 3` varchar(30) NOT NULL,
  `prog 4` varchar(30) NOT NULL,
  PRIMARY KEY (`jour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`jour`, `prog1`, `prog2`, `prog 3`, `prog 4`) VALUES
('lundi', 'ddlll', 'kmkkm)o))))_ujp', 'kkkkkkkkkkkkkk', 'ddddnnnnnnnnnnnnnnnnnnn'),
('mardi', 'oooiiijjjjhh', 'dd', 'kkkkkkkkkkkkkk', 'ddddnnnnnnnnnnnnnnnnnnn'),
('mercredi', 'jjj', 'pmp', 'ppp', '');

-- --------------------------------------------------------

--
-- Structure de la table `provenance`
--

CREATE TABLE IF NOT EXISTS `provenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(12) NOT NULL,
  `http_referer` text NOT NULL,
  `heure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(16) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `pass`) VALUES
('brahim', 'foued', 'foued@esprit.tn', 'liberta2014'),
('admin', 'admin', 'Radio.liberta1@gmail.com', 'admin.liberta');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `lien` varchar(200) NOT NULL DEFAULT '',
  `commentaire` varchar(26) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`lien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`lien`, `commentaire`, `type`) VALUES
('//www.youtube.com/embed/lnnQv8bcQVw', 'zzzzzzzzzzzzzzzzzzzzzzzzzz', 'sport'),
('//www.youtube.com/embed/lnnQv8bcQVwd', 'qdqsdsqqscqndlqndlqndncc c', 'culture'),
('//www.youtube.com/embed/lnnQv8bcQVwdsz', 'qsdqsdqazdajzdapzdjpujdpqs', 'emission'),
('//www.youtube.com/embed/lnnQv8bcQVwdszd', 'dddddddddddddddd', 'sport'),
('//www.youtube.com/embed/lnnQv8bcQVweee', 'hhhhhhhhhhhhhhhhhhhhhhhhhh', 'interview');

-- --------------------------------------------------------

--
-- Structure de la table `visites_jour`
--

CREATE TABLE IF NOT EXISTS `visites_jour` (
  `visites` mediumint(9) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE IF NOT EXISTS `visiteur` (
  `ip` varchar(20) NOT NULL,
  `type` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`ip`, `type`) VALUES
('127.0.0.1', '2014-07-04 05:38:40');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `vote`
--

INSERT INTO `vote` (`id`, `reponse`) VALUES
(1, 'bien'),
(2, 'assez bien'),
(3, 'mauvais'),
(4, 'assez bien'),
(5, 'mauvais'),
(6, 'bien'),
(7, 'assez bien'),
(8, 'assez bien'),
(9, 'bien'),
(10, 'mauvais'),
(11, 'bien'),
(12, 'bien'),
(13, ''),
(14, 'assez bien'),
(15, 'mauvais'),
(16, 'bien'),
(17, 'bien'),
(18, 'assez bien'),
(19, 'assez bien'),
(20, 'assez bien'),
(21, 'bien'),
(22, 'bien'),
(23, 'assez bien'),
(24, 'bien'),
(25, 'assez bien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
