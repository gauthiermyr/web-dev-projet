-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 17 nov. 2021 à 17:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `IDActu` int(255) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DatePublication` date NOT NULL,
  `Publique` tinyint(1) NOT NULL,
  `DateSaisie` date NOT NULL,
  `IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL,
  `IDUtilisateur` int(255) NOT NULL,
  PRIMARY KEY (`IDActu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `IDUtilisateur0` int(255) NOT NULL,
  `IDUtilisateur1` int(255) NOT NULL,
  PRIMARY KEY (`IDUtilisateur0`,`IDUtilisateur1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `IDEntreprise` int(255) NOT NULL AUTO_INCREMENT,
  `RaisonSocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SIREN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SIRET` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDUtilisateur` int(255) NOT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteWeb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EmailDeContact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDEntreprise`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `IDutilisateur` int(255) NOT NULL,
  `RaisonSocialEntreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `CommentairePublic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDTypeExperience` int(255) NOT NULL,
  `DateSaisie` date NOT NULL,
  `IPSaisie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logconnexions`
--

DROP TABLE IF EXISTS `logconnexions`;
CREATE TABLE IF NOT EXISTS `logconnexions` (
  `utilisateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ConnexionOKouPAS` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `IDUtilisateurEmetteur` int(255) NOT NULL,
  `IDUtilisateurDestinataire` int(255) NOT NULL,
  `Message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `DateDEnvoi` date NOT NULL,
  `DateDeLecture` date NOT NULL,
  `IPDEnvoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateServerEnvoi` date NOT NULL,
  `IPDeLecture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateServerLecture` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offresdemploie`
--

DROP TABLE IF EXISTS `offresdemploie`;
CREATE TABLE IF NOT EXISTS `offresdemploie` (
  `IDOffre` int(255) NOT NULL AUTO_INCREMENT,
  `IDEntreprise` int(255) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DatePublication` date NOT NULL,
  `IDTypeContact` int(255) NOT NULL,
  `Salaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDUtilisateurAvantSaisie` int(255) NOT NULL,
  `IPSaisie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateDeSaisie` date NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDOffre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pagedusite`
--

DROP TABLE IF EXISTS `pagedusite`;
CREATE TABLE IF NOT EXISTS `pagedusite` (
  `ID` int(255) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publicites`
--

DROP TABLE IF EXISTS `publicites`;
CREATE TABLE IF NOT EXISTS `publicites` (
  `IDutilisateur` int(255) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `texte` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IPsaisie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DateSaisie` date NOT NULL,
  `ValideeParModerateur` tinyint(1) NOT NULL,
  `MoyenDePamentUtilise` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typedecontrat`
--

DROP TABLE IF EXISTS `typedecontrat`;
CREATE TABLE IF NOT EXISTS `typedecontrat` (
  `IDContrat` int(255) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDContrat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typedutilisateurs`
--

DROP TABLE IF EXISTS `typedutilisateurs`;
CREATE TABLE IF NOT EXISTS `typedutilisateurs` (
  `IDTypeutilisateur` int(255) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDTypeutilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typesdexperiences`
--

DROP TABLE IF EXISTS `typesdexperiences`;
CREATE TABLE IF NOT EXISTS `typesdexperiences` (
  `IDTypeExp` int(255) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDTypeExp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDUtilisateur` int(255) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateDeNaissance` date NOT NULL,
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `2FA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` int(10) NOT NULL,
  `IDTypeUtilisateur` int(255) NOT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
