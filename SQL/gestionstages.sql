-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 08:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestionstages`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Birth` date NOT NULL,
  `EmailAddress` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ZipCode` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `administrationa`
--

CREATE TABLE IF NOT EXISTS `administrationa` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Birth` date NOT NULL,
  `EmailAddress` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ZipCode` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `Id_Departement` int(11) NOT NULL AUTO_INCREMENT,
  `Departement` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departementa`
--

CREATE TABLE IF NOT EXISTS `departementa` (
  `Id_Departement` int(11) NOT NULL AUTO_INCREMENT,
  `Departement` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Departement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departementa`
--

INSERT INTO `departementa` (`Id_Departement`, `Departement`) VALUES
(1, 'info'),
(2, 'phy');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `Id_Document` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Chemin_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date__Document` date NOT NULL,
  `Id_typeDocument` int(11) DEFAULT NULL,
  `NCINET` int(11) DEFAULT NULL,
  `NCINED` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Document`),
  KEY `NCINET` (`NCINET`,`NCINED`),
  KEY `NCINED` (`NCINED`),
  KEY `Id_typeDocument` (`Id_typeDocument`),
  KEY `IDX_D8698A76E6D371F6` (`NCINET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `documenta`
--

CREATE TABLE IF NOT EXISTS `documenta` (
  `Id_Document` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Chemin_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date__Document` date NOT NULL,
  `NCINED` int(11) DEFAULT NULL,
  `NCINET` int(11) DEFAULT NULL,
  `Id_typeDocument` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Document`),
  KEY `NCINET` (`NCINET`,`NCINED`),
  KEY `NCINED` (`NCINED`),
  KEY `Id_typeDocument` (`Id_typeDocument`),
  KEY `IDX_D8698A76E6D371F6` (`NCINET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreur`
--

CREATE TABLE IF NOT EXISTS `encadreur` (
  `NCIN` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Adresse_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreura`
--

CREATE TABLE IF NOT EXISTS `encadreura` (
  `NCIN` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Adresse_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreur_externe`
--

CREATE TABLE IF NOT EXISTS `encadreur_externe` (
  `Id_encadreurE` int(11) NOT NULL AUTO_INCREMENT,
  `Poste` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Societe` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_encadreurE`),
  KEY `Id_Societe` (`Id_Societe`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreur_externea`
--

CREATE TABLE IF NOT EXISTS `encadreur_externea` (
  `Id_encadreurE` int(11) NOT NULL AUTO_INCREMENT,
  `Poste` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Societe` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_encadreurE`),
  KEY `Id_Societe` (`Id_Societe`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreur_interne`
--

CREATE TABLE IF NOT EXISTS `encadreur_interne` (
  `Id_encadreurI` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Departement` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_encadreurI`),
  KEY `Id_Departement` (`Id_Departement`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `encadreur_internea`
--

CREATE TABLE IF NOT EXISTS `encadreur_internea` (
  `Id_encadreurI` int(11) NOT NULL AUTO_INCREMENT,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_encadreurI`),
  KEY `Id_Departement` (`Id_Departement`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `NCIN` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Etudiant` int(11) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Nationalite_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Niveau_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_Specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`NCIN`),
  KEY `Id_Departement` (`Id_Departement`),
  KEY `Id_Specialite` (`Id_Specialite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `etudianta`
--

CREATE TABLE IF NOT EXISTS `etudianta` (
  `NCIN` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Etudiant` int(11) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Nationalite_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Niveau_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_Specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`NCIN`),
  KEY `Id_Departement` (`Id_Departement`),
  KEY `Id_Specialite` (`Id_Specialite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE IF NOT EXISTS `societe` (
  `Id_Societe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Descption_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Local_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Societe` int(11) NOT NULL,
  `Mail_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `SiteWeb_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Societe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `societea`
--

CREATE TABLE IF NOT EXISTS `societea` (
  `Id_Societe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Descption_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Local_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Societe` int(11) NOT NULL,
  `Mail_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `SiteWeb_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Societe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `soutanance`
--

CREATE TABLE IF NOT EXISTS `soutanance` (
  `Id_Soutenance` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Soutenance` datetime NOT NULL,
  `Salle_Soutenance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Stage` int(11) DEFAULT NULL,
  `Id_TypeSoutenance` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Soutenance`),
  KEY `Id_TypeSoutenance` (`Id_TypeSoutenance`),
  KEY `Id_Stage` (`Id_Stage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `soutanancea`
--

CREATE TABLE IF NOT EXISTS `soutanancea` (
  `Id_Soutenance` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Soutenance` datetime NOT NULL,
  `Salle_Soutenance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Id_TypeSoutenance` int(11) DEFAULT NULL,
  `Id_Stage` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Soutenance`),
  KEY `Id_TypeSoutenance` (`Id_TypeSoutenance`),
  KEY `Id_Stage` (`Id_Stage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `soutanancea`
--

INSERT INTO `soutanancea` (`Id_Soutenance`, `Date_Soutenance`, `Salle_Soutenance`, `Id_TypeSoutenance`, `Id_Stage`) VALUES
(1, '2013-01-01 00:00:00', '2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `Id_Specialite` int(11) NOT NULL AUTO_INCREMENT,
  `Specialite` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Diplome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Specialite`),
  KEY `Id_Departement` (`Id_Departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `specialitea`
--

CREATE TABLE IF NOT EXISTS `specialitea` (
  `Id_Specialite` int(11) NOT NULL AUTO_INCREMENT,
  `Specialite` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Diplome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Specialite`),
  KEY `Id_Departement` (`Id_Departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `Id_Stage` int(11) NOT NULL AUTO_INCREMENT,
  `Sujet_Stage` text COLLATE utf8_unicode_ci NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `affect` int(11) NOT NULL,
  `Id_technologie` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_TypeStage` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Stage`),
  KEY `Id_technologie` (`Id_technologie`),
  KEY `Id_TypeStage` (`Id_TypeStage`),
  KEY `Id_Departement` (`Id_Departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stagea`
--

CREATE TABLE IF NOT EXISTS `stagea` (
  `Id_Stage` int(11) NOT NULL AUTO_INCREMENT,
  `Sujet_Stage` text COLLATE utf8_unicode_ci NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `affect` int(11) NOT NULL,
  `Id_technologie` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_TypeStage` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Stage`),
  KEY `Id_technologie` (`Id_technologie`),
  KEY `Id_TypeStage` (`Id_TypeStage`),
  KEY `Id_Departement` (`Id_Departement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stagea`
--

INSERT INTO `stagea` (`Id_Stage`, `Sujet_Stage`, `Date_Debut`, `Date_Fin`, `affect`, `Id_technologie`, `Id_Departement`, `Id_TypeStage`) VALUES
(1, 'Aut delectus et laborum eaque non dolore fugiat amet repellendus Quia quo est tempore quis', '2015-04-16', '2019-12-18', 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stage_jury`
--

CREATE TABLE IF NOT EXISTS `stage_jury` (
  `id_StageJury` int(11) NOT NULL AUTO_INCREMENT,
  `Role_Membre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Soutenance` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_StageJury`),
  KEY `Id_Soutenance` (`Id_Soutenance`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stage_jurya`
--

CREATE TABLE IF NOT EXISTS `stage_jurya` (
  `id_StageJury` int(11) NOT NULL AUTO_INCREMENT,
  `Role_Membre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Soutenance` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_StageJury`),
  KEY `Id_Soutenance` (`Id_Soutenance`),
  KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technologie`
--

CREATE TABLE IF NOT EXISTS `technologie` (
  `Id_Technologie` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Technologie` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Technologie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technologiea`
--

CREATE TABLE IF NOT EXISTS `technologiea` (
  `Id_Technologie` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Technologie` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Technologie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `technologiea`
--

INSERT INTO `technologiea` (`Id_Technologie`, `Type_Technologie`) VALUES
(1, 'C#'),
(2, 'asp');

-- --------------------------------------------------------

--
-- Table structure for table `tuto_user`
--

CREATE TABLE IF NOT EXISTS `tuto_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_58E7017B92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_58E7017BA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tuto_usera`
--

CREATE TABLE IF NOT EXISTS `tuto_usera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2F38F1F692FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2F38F1F6A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_2F38F1F6C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tuto_usera`
--

INSERT INTO `tuto_usera` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'admin@admin.tn', 'admin@admin.tn', 1, 'eSRFiNfH7wcF3NMRjBjYDaQeWabJAqu4xqEUcCufsBw', '5WPW9vONmKAU4tq6xS3f1n5XKeFqPryqWAy7NHrTyIblC5v6MQIXOP7ZV2FNjJWsh/LTrF3DlHGlNBKHADlhoQ==', '2018-05-29 08:40:49', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}'),
(2, 'user', 'user', 'user@user.tn', 'user@user.tn', 1, '4NtLjsinQvTFgUt1Uge/1xrAmF.F0ZCDCICBdBddYkc', 'iOYmMjLv+S1UuvLkRrwCpu4y94zrPzm74DfZeuIQBmR6qBCJU38oiOJKZcFAnmj/xuq3v3KgaQRsDmbQPEebQw==', '2018-05-29 08:49:00', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_STUD";}');

-- --------------------------------------------------------

--
-- Table structure for table `type_document`
--

CREATE TABLE IF NOT EXISTS `type_document` (
  `Id_typeDocument` int(11) NOT NULL AUTO_INCREMENT,
  `typeDocument` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_typeDocument`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_documenta`
--

CREATE TABLE IF NOT EXISTS `type_documenta` (
  `Id_typeDocument` int(11) NOT NULL AUTO_INCREMENT,
  `typeDocument` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_typeDocument`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_soutanance`
--

CREATE TABLE IF NOT EXISTS `type_soutanance` (
  `Id_TypeSoutenance` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Soutenance` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_TypeSoutenance`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_soutanance`
--

INSERT INTO `type_soutanance` (`Id_TypeSoutenance`, `Type_Soutenance`) VALUES
(1, 'intern'),
(2, 'extern');

-- --------------------------------------------------------

--
-- Table structure for table `type_soutanancea`
--

CREATE TABLE IF NOT EXISTS `type_soutanancea` (
  `Id_TypeSoutenance` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Soutenance` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_TypeSoutenance`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_soutanancea`
--

INSERT INTO `type_soutanancea` (`Id_TypeSoutenance`, `Type_Soutenance`) VALUES
(1, 'intern'),
(2, 'extern');

-- --------------------------------------------------------

--
-- Table structure for table `type_stage`
--

CREATE TABLE IF NOT EXISTS `type_stage` (
  `Id_TypeStage` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Stage` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_TypeStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_stagea`
--

CREATE TABLE IF NOT EXISTS `type_stagea` (
  `Id_TypeStage` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Stage` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_TypeStage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_stagea`
--

INSERT INTO `type_stagea` (`Id_TypeStage`, `Type_Stage`) VALUES
(1, 'interne'),
(2, 'externe');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administration`
--
ALTER TABLE `administration`
  ADD CONSTRAINT `FK_9FDD0D18FE6E88D7` FOREIGN KEY (`idUser`) REFERENCES `tuto_user` (`id`);

--
-- Constraints for table `administrationa`
--
ALTER TABLE `administrationa`
  ADD CONSTRAINT `FK_FB44FB18FE6E88D7` FOREIGN KEY (`idUser`) REFERENCES `tuto_usera` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_D8698A76FB646192` FOREIGN KEY (`NCINED`) REFERENCES `tuto_user` (`id`),
  ADD CONSTRAINT `FK_D8698A76D6722D44` FOREIGN KEY (`Id_typeDocument`) REFERENCES `type_document` (`Id_typeDocument`),
  ADD CONSTRAINT `FK_D8698A76E6D371F6` FOREIGN KEY (`NCINET`) REFERENCES `tuto_user` (`id`);

--
-- Constraints for table `documenta`
--
ALTER TABLE `documenta`
  ADD CONSTRAINT `FK_510903C0D6722D44` FOREIGN KEY (`Id_typeDocument`) REFERENCES `type_documenta` (`Id_typeDocument`),
  ADD CONSTRAINT `FK_510903C0E6D371F6` FOREIGN KEY (`NCINET`) REFERENCES `tuto_usera` (`id`),
  ADD CONSTRAINT `FK_510903C0FB646192` FOREIGN KEY (`NCINED`) REFERENCES `tuto_usera` (`id`);

--
-- Constraints for table `encadreur_externe`
--
ALTER TABLE `encadreur_externe`
  ADD CONSTRAINT `FK_DFFB63FA988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`),
  ADD CONSTRAINT `FK_DFFB63FA4718AE81` FOREIGN KEY (`Id_Societe`) REFERENCES `societe` (`Id_Societe`);

--
-- Constraints for table `encadreur_externea`
--
ALTER TABLE `encadreur_externea`
  ADD CONSTRAINT `FK_B5005E224718AE81` FOREIGN KEY (`Id_Societe`) REFERENCES `societea` (`Id_Societe`),
  ADD CONSTRAINT `FK_B5005E22988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);

--
-- Constraints for table `encadreur_interne`
--
ALTER TABLE `encadreur_interne`
  ADD CONSTRAINT `FK_CDD4E808988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`),
  ADD CONSTRAINT `FK_CDD4E808929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`);

--
-- Constraints for table `encadreur_internea`
--
ALTER TABLE `encadreur_internea`
  ADD CONSTRAINT `FK_E6A1E299929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`),
  ADD CONSTRAINT `FK_E6A1E299988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_717E22E3BE7F3433` FOREIGN KEY (`Id_Specialite`) REFERENCES `specialite` (`Id_Specialite`),
  ADD CONSTRAINT `FK_717E22E3929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`);

--
-- Constraints for table `etudianta`
--
ALTER TABLE `etudianta`
  ADD CONSTRAINT `FK_D1C573A3BE7F3433` FOREIGN KEY (`Id_Specialite`) REFERENCES `specialitea` (`Id_Specialite`),
  ADD CONSTRAINT `FK_D1C573A3929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`);

--
-- Constraints for table `soutanance`
--
ALTER TABLE `soutanance`
  ADD CONSTRAINT `FK_D6C8BD7825FFEB97` FOREIGN KEY (`Id_TypeSoutenance`) REFERENCES `type_soutanance` (`Id_TypeSoutenance`),
  ADD CONSTRAINT `FK_D6C8BD78144E9F0B` FOREIGN KEY (`Id_Stage`) REFERENCES `stage` (`Id_Stage`);

--
-- Constraints for table `soutanancea`
--
ALTER TABLE `soutanancea`
  ADD CONSTRAINT `FK_B6BF8FF0144E9F0B` FOREIGN KEY (`Id_Stage`) REFERENCES `stagea` (`Id_Stage`),
  ADD CONSTRAINT `FK_B6BF8FF025FFEB97` FOREIGN KEY (`Id_TypeSoutenance`) REFERENCES `type_soutanancea` (`Id_TypeSoutenance`);

--
-- Constraints for table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `FK_E7D6FCC1929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`);

--
-- Constraints for table `specialitea`
--
ALTER TABLE `specialitea`
  ADD CONSTRAINT `FK_4339A99929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`);

--
-- Constraints for table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_C27C93699362EC02` FOREIGN KEY (`Id_TypeStage`) REFERENCES `type_stage` (`Id_TypeStage`),
  ADD CONSTRAINT `FK_C27C936978F7835B` FOREIGN KEY (`Id_technologie`) REFERENCES `technologie` (`Id_Technologie`),
  ADD CONSTRAINT `FK_C27C9369929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`);

--
-- Constraints for table `stagea`
--
ALTER TABLE `stagea`
  ADD CONSTRAINT `FK_DC1B1B2C9362EC02` FOREIGN KEY (`Id_TypeStage`) REFERENCES `type_stagea` (`Id_TypeStage`),
  ADD CONSTRAINT `FK_DC1B1B2C78F7835B` FOREIGN KEY (`Id_technologie`) REFERENCES `technologiea` (`Id_Technologie`),
  ADD CONSTRAINT `FK_DC1B1B2C929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`);

--
-- Constraints for table `stage_jury`
--
ALTER TABLE `stage_jury`
  ADD CONSTRAINT `FK_D1E0BFB9988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`),
  ADD CONSTRAINT `FK_D1E0BFB914F0379C` FOREIGN KEY (`Id_Soutenance`) REFERENCES `soutanance` (`Id_Soutenance`);

--
-- Constraints for table `stage_jurya`
--
ALTER TABLE `stage_jurya`
  ADD CONSTRAINT `FK_5ADB55D414F0379C` FOREIGN KEY (`Id_Soutenance`) REFERENCES `soutanancea` (`Id_Soutenance`),
  ADD CONSTRAINT `FK_5ADB55D4988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
