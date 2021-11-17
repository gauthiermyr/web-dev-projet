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
-- Structure de la table `typedutilisateurs`
--

DROP TABLE IF EXISTS `typedutilisateurs`;
CREATE TABLE IF NOT EXISTS `typedutilisateurs` (
  `IDTypeutilisateur` int(255) AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IDTypeutilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------


--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDUtilisateur` int(255) AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci,
  `DateDeNaissance` date,
  `User` varchar(255) COLLATE utf8_unicode_ci,
  `Password` varchar(255) COLLATE utf8_unicode_ci,
  `Email` varchar(255) COLLATE utf8_unicode_ci,
  `2FA` varchar(100) COLLATE utf8_unicode_ci,
  `Telephone` int(10),
  `IDTypeUtilisateur` int(255),
  `Photo` varchar(255) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IDUtilisateur`),
  FOREIGN KEY(IDTypeutilisateur) references typedutilisateurs(IDTypeutilisateur) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `IDActu` int(255) AUTO_INCREMENT,
  `Titre` varchar(255) COLLATE utf8_unicode_ci,
  `Commentaire` varchar(255) COLLATE utf8_unicode_ci,
  `DatePublication` date,
  `Publique` tinyint(1),
  `DateSaisie` date,
  `IP` varchar(255) COLLATE utf8_unicode_ci,
  `ValideeParModerateur` tinyint(1),
  `IDUtilisateur` int(255),
  PRIMARY KEY (`IDActu`),
  FOREIGN KEY(IDUtilisateur) references utilisateurs(IDUtilisateur) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `IDUtilisateur0` int(255),
  `IDUtilisateur1` int(255),
  PRIMARY KEY (`IDUtilisateur0`,`IDUtilisateur1`),
  FOREIGN KEY(IDUtilisateur0) references utilisateurs(IDUtilisateur) ON DELETE CASCADE,
  FOREIGN KEY(IDUtilisateur1) references utilisateurs(IDUtilisateur) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `IDEntreprise` int(255) AUTO_INCREMENT,
  `RaisonSocial` varchar(255) COLLATE utf8_unicode_ci,
  `SIREN` varchar(255) COLLATE utf8_unicode_ci,
  `SIRET` varchar(255) COLLATE utf8_unicode_ci,
  `IDUtilisateur` int(255),
  `Adresse` varchar(255) COLLATE utf8_unicode_ci,
  `Commentaire` varchar(255) COLLATE utf8_unicode_ci,
  `SiteWeb` varchar(255) COLLATE utf8_unicode_ci,
  `EmailDeContact` varchar(255) COLLATE utf8_unicode_ci,
  `Logo` varchar(255) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IDEntreprise`),
  FOREIGN KEY(IDUtilisateur) references utilisateurs(IDUtilisateur) ON DELETE CASCADE

) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `typesdexperiences`
--

DROP TABLE IF EXISTS `typesdexperiences`;
CREATE TABLE IF NOT EXISTS `typesdexperiences` (
  `IDTypeExperience` int(255) AUTO_INCREMENT,
  `Type` varchar(255) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IDTypeExp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `IDutilisateur` int(255),
  `RaisonSocialEntreprise` varchar(255) COLLATE utf8_unicode_ci,
  `DateDebut` date,
  `DateFin` date,
  `CommentairePublic` varchar(255) COLLATE utf8_unicode_ci,
  `IDTypeExperience` int(255),
  `DateSaisie` date,
  `IPSaisie` varchar(255) COLLATE utf8_unicode_ci,
  FOREIGN KEY(IDUtilisateur) references utilisateurs(IDUtilisateur) ON DELETE CASCADE,
  FOREIGN KEY(IDTypeExperience) references typesdexperiences(IDTypeExperience) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logconnexions`
--

DROP TABLE IF EXISTS `logconnexions`;
CREATE TABLE IF NOT EXISTS `logconnexions` (
  `utilisateur` varchar(255) COLLATE utf8_unicode_ci,
  `IP` varchar(255) COLLATE utf8_unicode_ci,
  `date` varchar(255) COLLATE utf8_unicode_ci,
  `ConnexionOKouPAS` varchar(255) COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `IDUtilisateurEmetteur` int(255),
  `IDUtilisateurDestinataire` int(255),
  `Message` mediumtext COLLATE utf8_unicode_ci,
  `DateDEnvoi` date,
  `DateDeLecture` date,
  `IPDEnvoi` varchar(255) COLLATE utf8_unicode_ci,
  `DateServerEnvoi` date,
  `IPDeLecture` varchar(255) COLLATE utf8_unicode_ci,
  `DateServerLecture` date,
  FOREIGN KEY(IDUtilisateurEmetteur) references utilisateurs(IDUtilisateur) ON DELETE CASCADE,
  FOREIGN KEY(IDUtilisateurDestinataire) references utilisateurs(IDUtilisateur) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typedecontrat`
--

DROP TABLE IF EXISTS `typedecontrat`;
CREATE TABLE IF NOT EXISTS `typedecontrat` (
  `IDTypeContrat` int(255) AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IDContrat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offresdemploie`
--

DROP TABLE IF EXISTS `offresdemploie`;
CREATE TABLE IF NOT EXISTS `offresdemploie` (
  `IDOffre` int(255) AUTO_INCREMENT,
  `IDEntreprise` int(255),
  `titre` varchar(255) COLLATE utf8_unicode_ci,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci,
  `DatePublication` date,
  `IDTypeContrat` int(255),
  `Salaire` varchar(255) COLLATE utf8_unicode_ci,
  `IDUtilisateurAvantSaisie` int(255),
  `IPSaisie` varchar(255) COLLATE utf8_unicode_ci,
  `DateDeSaisie` date,
  `ValideeParModerateur` tinyint(1),
  PRIMARY KEY (`IDOffre`),
  FOREIGN KEY(IDEntreprise) references entreprise(IDEntreprise) ON DELETE CASCADE,
  FOREIGN KEY(IDTypeContrat) references typedecontrat(IDTypeContrat) ON DELETE CASCADE,
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pagedusite`
--

DROP TABLE IF EXISTS `pagedusite`;
CREATE TABLE IF NOT EXISTS `pagedusite` (
  `ID` int(255),
  `titre` varchar(100) COLLATE utf8_unicode_ci,
  `contenu` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publicites`
--

DROP TABLE IF EXISTS `publicites`;
CREATE TABLE IF NOT EXISTS `publicites` (
  `IDutilisateur` int(255),
  `titre` varchar(100) COLLATE utf8_unicode_ci,
  `texte` mediumtext COLLATE utf8_unicode_ci,
  `photo` varchar(100) COLLATE utf8_unicode_ci,
  `IPsaisie` varchar(100) COLLATE utf8_unicode_ci,
  `DateSaisie` date,
  `ValideeParModerateur` tinyint(1),
  `MoyenDePamentUtilise` varchar(255) COLLATE utf8_unicode_ci,
  FOREIGN KEY(IDUtilisateur) references utilisateurs(IDUtilisateur) ON DELETE CASCADE,
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
