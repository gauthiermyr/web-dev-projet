-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 nov. 2021 à 19:17
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
  `IDUtilisateur` int(255) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Commentaire` varchar(255) NOT NULL,
  `DatePublication` varchar(255) NOT NULL,
  `PubliqueOuPrive` varchar(255) NOT NULL,
  `DateSaisie` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `ValideePa!r:Moderateur O/N` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `UtilisateurDontCEsUnContact` varchar(1) NOT NULL,
  `SonContact` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `IDEntreprise` int(255) NOT NULL,
  `RaisonSocial` varchar(255) NOT NULL,
  `SIREN` varchar(255) NOT NULL,
  `SIRET` varchar(255) NOT NULL,
  `IDUtilisateurResponsableSaisie` int(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Commentaire` varchar(255) NOT NULL,
  `SiteWeb` varchar(255) NOT NULL,
  `EmailDeContact` varchar(255) NOT NULL,
  `Logo(image)` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `IDutilisateur` int(255) NOT NULL,
  `RaisonSocialEntreprise` int(255) NOT NULL,
  `DateDebut` varchar(255) NOT NULL,
  `DateFin` text NOT NULL,
  `TitreDeLEperience` varchar(100) NOT NULL,
  `CommentairePublic` varchar(255) NOT NULL,
  `IDTypeExperience` int(255) NOT NULL,
  `DateSaisie` varchar(255) NOT NULL,
  `IPSaisie` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logconnexions`
--

DROP TABLE IF EXISTS `logconnexions`;
CREATE TABLE IF NOT EXISTS `logconnexions` (
  `utilisateur` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ConnexionOKouPAS` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `UtilisateurEmetteur` int(255) NOT NULL,
  `UtilisateurDestinataire` int(255) NOT NULL,
  `Message` text NOT NULL,
  `DateDEnvoi` varchar(100) NOT NULL,
  `DateDeLecture` varchar(100) NOT NULL,
  `IPDEnvoi` varchar(255) NOT NULL,
  `DateServerEnvoi` varchar(100) NOT NULL,
  `IPDeLecture` varchar(255) NOT NULL,
  `DateServerLecture` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offresdemploie`
--

DROP TABLE IF EXISTS `offresdemploie`;
CREATE TABLE IF NOT EXISTS `offresdemploie` (
  `IDEntreprise` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `DatePublication` varchar(255) NOT NULL,
  `IDTypeContact` int(255) NOT NULL,
  `Salaire` varchar(255) NOT NULL,
  `IDUtilisateurAvantSaisie` int(255) NOT NULL,
  `IPSaisie` varchar(255) NOT NULL,
  `DateDeSaisie` varchar(255) NOT NULL,
  `ValideeParModerateur` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pagedusite`
--

DROP TABLE IF EXISTS `pagedusite`;
CREATE TABLE IF NOT EXISTS `pagedusite` (
  `ID` int(255) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `publicites`
--

DROP TABLE IF EXISTS `publicites`;
CREATE TABLE IF NOT EXISTS `publicites` (
  `IDutilisateur` int(255) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `IPsaisie` varchar(100) NOT NULL,
  `DateSaisie` varchar(111) NOT NULL,
  `ValideeParModerateur` varchar(2550) NOT NULL,
  `MoyenDePamentUtilise` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typedecontacts`
--

DROP TABLE IF EXISTS `typedecontacts`;
CREATE TABLE IF NOT EXISTS `typedecontacts` (
  `ID` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typedutilisateurs`
--

DROP TABLE IF EXISTS `typedutilisateurs`;
CREATE TABLE IF NOT EXISTS `typedutilisateurs` (
  `ID` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typesdexperiences`
--

DROP TABLE IF EXISTS `typesdexperiences`;
CREATE TABLE IF NOT EXISTS `typesdexperiences` (
  `ID` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(255) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `DateDeNaissance` varchar(10) NOT NULL,
  `User` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `2FA` varchar(100) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `IDTypeUtilisateur` int(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
