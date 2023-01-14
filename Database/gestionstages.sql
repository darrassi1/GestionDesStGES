-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 jan. 2023 à 20:42
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionstages`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `idAdmin` int(11) NOT NULL,
  `FirstName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Birth` date NOT NULL,
  `EmailAddress` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ZipCode` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `administrationa`
--

CREATE TABLE `administrationa` (
  `idAdmin` int(11) NOT NULL,
  `FirstName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Birth` date NOT NULL,
  `EmailAddress` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ZipCode` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `administrationa`
--

INSERT INTO `administrationa` (`idAdmin`, `FirstName`, `LastName`, `Birth`, `EmailAddress`, `Phone`, `Gender`, `ZipCode`, `City`, `img_src`, `idUser`) VALUES
(1, 'younes', 'darrassi', '2017-01-01', 'younes.darrassi@usmba.ac.ma', '0629419616', 'male', '30000', 'fes', '/Backoffice/assets/images/default-user.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `Id_Departement` int(11) NOT NULL,
  `Departement` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departementa`
--

CREATE TABLE `departementa` (
  `Id_Departement` int(11) NOT NULL,
  `Departement` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `departementa`
--

INSERT INTO `departementa` (`Id_Departement`, `Departement`) VALUES
(1, 'Ingenieur'),
(2, 'Sante'),
(3, 'Management');

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `Id_Document` int(11) NOT NULL,
  `Nom_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Chemin_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date__Document` date NOT NULL,
  `Id_typeDocument` int(11) DEFAULT NULL,
  `NCINET` int(11) DEFAULT NULL,
  `NCINED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `documenta`
--

CREATE TABLE `documenta` (
  `Id_Document` int(11) NOT NULL,
  `Nom_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Chemin_Document` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date__Document` date NOT NULL,
  `NCINED` int(11) DEFAULT NULL,
  `NCINET` int(11) DEFAULT NULL,
  `Id_typeDocument` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `documenta`
--

INSERT INTO `documenta` (`Id_Document`, `Nom_Document`, `Chemin_Document`, `Date__Document`, `NCINED`, `NCINET`, `Id_typeDocument`) VALUES
(1, 'gestion de location des voiture', 'uploads/Documents/citation-361473814 (1).txt', '2021-01-01', 1, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `encadreur`
--

CREATE TABLE `encadreur` (
  `NCIN` int(11) NOT NULL,
  `Nom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Adresse_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadreura`
--

CREATE TABLE `encadreura` (
  `NCIN` int(11) NOT NULL,
  `Nom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Adresse_Encadreur` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadreur_externe`
--

CREATE TABLE `encadreur_externe` (
  `Id_encadreurE` int(11) NOT NULL,
  `Poste` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Societe` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadreur_externea`
--

CREATE TABLE `encadreur_externea` (
  `Id_encadreurE` int(11) NOT NULL,
  `Poste` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Societe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadreur_interne`
--

CREATE TABLE `encadreur_interne` (
  `Id_encadreurI` int(11) NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadreur_internea`
--

CREATE TABLE `encadreur_internea` (
  `Id_encadreurI` int(11) NOT NULL,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `NCIN` int(11) NOT NULL,
  `Nom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Etudiant` int(11) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Nationalite_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Niveau_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_Specialite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudianta`
--

CREATE TABLE `etudianta` (
  `NCIN` int(11) NOT NULL,
  `Nom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Etudiant` int(11) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Nationalite_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Niveau_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse_Etudiant` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_Specialite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `Id_Societe` int(11) NOT NULL,
  `Nom_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Descption_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Local_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Societe` int(11) NOT NULL,
  `Mail_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `SiteWeb_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `societea`
--

CREATE TABLE `societea` (
  `Id_Societe` int(11) NOT NULL,
  `Nom_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Descption_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Local_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Societe` int(11) NOT NULL,
  `Mail_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `SiteWeb_Societe` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `soutanance`
--

CREATE TABLE `soutanance` (
  `Id_Soutenance` int(11) NOT NULL,
  `Date_Soutenance` datetime NOT NULL,
  `Salle_Soutenance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Stage` int(11) DEFAULT NULL,
  `Id_TypeSoutenance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `soutanancea`
--

CREATE TABLE `soutanancea` (
  `Id_Soutenance` int(11) NOT NULL,
  `Date_Soutenance` datetime NOT NULL,
  `Salle_Soutenance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Id_TypeSoutenance` int(11) DEFAULT NULL,
  `Id_Stage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `soutanancea`
--

INSERT INTO `soutanancea` (`Id_Soutenance`, `Date_Soutenance`, `Salle_Soutenance`, `Id_TypeSoutenance`, `Id_Stage`) VALUES
(2, '2022-12-01 00:00:00', '1', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `Id_Specialite` int(11) NOT NULL,
  `Specialite` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Diplome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `specialitea`
--

CREATE TABLE `specialitea` (
  `Id_Specialite` int(11) NOT NULL,
  `Specialite` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Diplome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `specialitea`
--

INSERT INTO `specialitea` (`Id_Specialite`, `Specialite`, `Diplome`, `Id_Departement`) VALUES
(1, 'teacher', 'phd', 1);

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `Id_Stage` int(11) NOT NULL,
  `Sujet_Stage` text COLLATE utf8_unicode_ci NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `affect` int(11) NOT NULL,
  `Id_technologie` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_TypeStage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stagea`
--

CREATE TABLE `stagea` (
  `Id_Stage` int(11) NOT NULL,
  `Sujet_Stage` text COLLATE utf8_unicode_ci NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `affect` int(11) NOT NULL,
  `Id_technologie` int(11) DEFAULT NULL,
  `Id_Departement` int(11) DEFAULT NULL,
  `Id_TypeStage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `stagea`
--

INSERT INTO `stagea` (`Id_Stage`, `Sujet_Stage`, `Date_Debut`, `Date_Fin`, `affect`, `Id_technologie`, `Id_Departement`, `Id_TypeStage`) VALUES
(1, 'Aut delectus et laborum eaque non dolore fugiat amet repellendus Quia quo est tempore quis', '2017-04-16', '2019-12-18', 0, 1, 1, 1),
(2, 'stage ban bmce', '2017-01-01', '2020-01-01', 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `stage_jury`
--

CREATE TABLE `stage_jury` (
  `id_StageJury` int(11) NOT NULL,
  `Role_Membre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Soutenance` int(11) DEFAULT NULL,
  `NCIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stage_jurya`
--

CREATE TABLE `stage_jurya` (
  `id_StageJury` int(11) NOT NULL,
  `Role_Membre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `NCIN` int(11) DEFAULT NULL,
  `Id_Soutenance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE `technologie` (
  `Id_Technologie` int(11) NOT NULL,
  `Type_Technologie` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `technologiea`
--

CREATE TABLE `technologiea` (
  `Id_Technologie` int(11) NOT NULL,
  `Type_Technologie` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `technologiea`
--

INSERT INTO `technologiea` (`Id_Technologie`, `Type_Technologie`) VALUES
(1, 'C#'),
(2, 'asp');

-- --------------------------------------------------------

--
-- Structure de la table `tuto_user`
--

CREATE TABLE `tuto_user` (
  `id` int(11) NOT NULL,
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
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tuto_usera`
--

CREATE TABLE `tuto_usera` (
  `id` int(11) NOT NULL,
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
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tuto_usera`
--

INSERT INTO `tuto_usera` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'admin@admin.tn', 'admin@admin.tn', 1, 'eSRFiNfH7wcF3NMRjBjYDaQeWabJAqu4xqEUcCufsBw', '5WPW9vONmKAU4tq6xS3f1n5XKeFqPryqWAy7NHrTyIblC5v6MQIXOP7ZV2FNjJWsh/LTrF3DlHGlNBKHADlhoQ==', '2023-01-12 21:25:43', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),
(2, 'user', 'user', 'user@user.tn', 'user@user.tn', 1, '4NtLjsinQvTFgUt1Uge/1xrAmF.F0ZCDCICBdBddYkc', 'iOYmMjLv+S1UuvLkRrwCpu4y94zrPzm74DfZeuIQBmR6qBCJU38oiOJKZcFAnmj/xuq3v3KgaQRsDmbQPEebQw==', '2022-12-29 13:49:41', NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_STUD\";}'),
(3, 'younes', 'younes', 'younes.darrassi@usmba.ac.ma', 'younes.darrassi@usmba.ac.ma', 1, 'T8W/DVlYx27IFmPr6FBsfO6t.IOx446IjvNG/g3GtJg', 'b7BLEIjSGyulzCOkXbcnyibonEyggoA4jA+giurC/aOjt+hPNsHEHu20b5rwV2XjYXiTM8S0H3/280cvl18htQ==', '2022-11-15 21:24:22', NULL, NULL, 'a:0:{}'),
(4, 'youness', 'youness', 'alayoubi0000@gmail.com', 'alayoubi0000@gmail.com', 1, 'o/Oxd8dS8m4XoyNNvNjxMKeIOHe5ijW/UeLOmJBvcDc', 'qcaHsAe5u2Hd11Mw3nLjOauTvDN5uMnsuMFh9Mxu6XolBQ7GTc4Pkt7pfYf6Z1xRj464vahR2Kg16mr32WNZSw==', '2022-11-15 21:45:44', NULL, NULL, 'a:0:{}'),
(5, 'admin2', 'admin2', 'admin123@gmail.com', 'admin123@gmail.com', 1, 'XhiKiRjMhtCiZhpYvpRB/Tr2M98RJXBM2rRJQJY.q4A', 'ymtC+Y8DtfrhifFeWuRQor7S6As1lEhYa3TaZhyr4inFUsHvDU6VNu30at32HGfUcsIrwSdHdB+E2glKOjmllQ==', NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(6, 'admin45', 'admin45', 'admin123456@gmail.com', 'admin123456@gmail.com', 1, '/eZHD0wc4QoFjTQarT9ie95HohN0yrj8oupnzoeBLX0', 'Ao3MmFK1JxyUBEjv8+gXJW0tp/NAtzM/TKhEsEvgLA+ibdiRO7MBXlKG2QBqKEbyf0nta9I8TNplUbqI3Jcl9w==', NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(7, 'admin234', 'admin234', 'admin1234d56@gmail.com', 'admin1234d56@gmail.com', 1, 'iv/iMRPRL3HgedUPm6Va3ltucEKE1qBHzl0IHdPE3dM', 'WTzvEAr+a2/hWLpClTTstV4NFcsKjO7kKKQLJJl3cj95AXM3WRDHAYmpOqi4z/WJOiYrvfx70OgJbvb4GgKZvA==', NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');

-- --------------------------------------------------------

--
-- Structure de la table `type_document`
--

CREATE TABLE `type_document` (
  `Id_typeDocument` int(11) NOT NULL,
  `typeDocument` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_document`
--

INSERT INTO `type_document` (`Id_typeDocument`, `typeDocument`) VALUES
(1, 'pdf'),
(2, 'docx'),
(3, 'jpg');

-- --------------------------------------------------------

--
-- Structure de la table `type_documenta`
--

CREATE TABLE `type_documenta` (
  `Id_typeDocument` int(11) NOT NULL,
  `typeDocument` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_documenta`
--

INSERT INTO `type_documenta` (`Id_typeDocument`, `typeDocument`) VALUES
(1, 'pdf'),
(2, 'docx'),
(3, 'jpg'),
(4, 'txt');

-- --------------------------------------------------------

--
-- Structure de la table `type_soutanance`
--

CREATE TABLE `type_soutanance` (
  `Id_TypeSoutenance` int(11) NOT NULL,
  `Type_Soutenance` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_soutanance`
--

INSERT INTO `type_soutanance` (`Id_TypeSoutenance`, `Type_Soutenance`) VALUES
(1, 'intern'),
(2, 'extern');

-- --------------------------------------------------------

--
-- Structure de la table `type_soutanancea`
--

CREATE TABLE `type_soutanancea` (
  `Id_TypeSoutenance` int(11) NOT NULL,
  `Type_Soutenance` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_soutanancea`
--

INSERT INTO `type_soutanancea` (`Id_TypeSoutenance`, `Type_Soutenance`) VALUES
(1, 'intern'),
(2, 'extern');

-- --------------------------------------------------------

--
-- Structure de la table `type_stage`
--

CREATE TABLE `type_stage` (
  `Id_TypeStage` int(11) NOT NULL,
  `Type_Stage` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_stagea`
--

CREATE TABLE `type_stagea` (
  `Id_TypeStage` int(11) NOT NULL,
  `Type_Stage` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_stagea`
--

INSERT INTO `type_stagea` (`Id_TypeStage`, `Type_Stage`) VALUES
(1, 'interne'),
(2, 'externe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `administrationa`
--
ALTER TABLE `administrationa`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`Id_Departement`);

--
-- Index pour la table `departementa`
--
ALTER TABLE `departementa`
  ADD PRIMARY KEY (`Id_Departement`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`Id_Document`),
  ADD KEY `NCINET` (`NCINET`,`NCINED`),
  ADD KEY `NCINED` (`NCINED`),
  ADD KEY `Id_typeDocument` (`Id_typeDocument`),
  ADD KEY `IDX_D8698A76E6D371F6` (`NCINET`);

--
-- Index pour la table `documenta`
--
ALTER TABLE `documenta`
  ADD PRIMARY KEY (`Id_Document`),
  ADD KEY `NCINET` (`NCINET`,`NCINED`),
  ADD KEY `NCINED` (`NCINED`),
  ADD KEY `Id_typeDocument` (`Id_typeDocument`),
  ADD KEY `IDX_D8698A76E6D371F6` (`NCINET`);

--
-- Index pour la table `encadreur`
--
ALTER TABLE `encadreur`
  ADD PRIMARY KEY (`NCIN`);

--
-- Index pour la table `encadreura`
--
ALTER TABLE `encadreura`
  ADD PRIMARY KEY (`NCIN`);

--
-- Index pour la table `encadreur_externe`
--
ALTER TABLE `encadreur_externe`
  ADD PRIMARY KEY (`Id_encadreurE`),
  ADD KEY `Id_Societe` (`Id_Societe`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `encadreur_externea`
--
ALTER TABLE `encadreur_externea`
  ADD PRIMARY KEY (`Id_encadreurE`),
  ADD KEY `Id_Societe` (`Id_Societe`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `encadreur_interne`
--
ALTER TABLE `encadreur_interne`
  ADD PRIMARY KEY (`Id_encadreurI`),
  ADD KEY `Id_Departement` (`Id_Departement`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `encadreur_internea`
--
ALTER TABLE `encadreur_internea`
  ADD PRIMARY KEY (`Id_encadreurI`),
  ADD KEY `Id_Departement` (`Id_Departement`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`NCIN`),
  ADD KEY `Id_Departement` (`Id_Departement`),
  ADD KEY `Id_Specialite` (`Id_Specialite`);

--
-- Index pour la table `etudianta`
--
ALTER TABLE `etudianta`
  ADD PRIMARY KEY (`NCIN`),
  ADD KEY `Id_Departement` (`Id_Departement`),
  ADD KEY `Id_Specialite` (`Id_Specialite`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`Id_Societe`);

--
-- Index pour la table `societea`
--
ALTER TABLE `societea`
  ADD PRIMARY KEY (`Id_Societe`);

--
-- Index pour la table `soutanance`
--
ALTER TABLE `soutanance`
  ADD PRIMARY KEY (`Id_Soutenance`),
  ADD KEY `Id_TypeSoutenance` (`Id_TypeSoutenance`),
  ADD KEY `Id_Stage` (`Id_Stage`);

--
-- Index pour la table `soutanancea`
--
ALTER TABLE `soutanancea`
  ADD PRIMARY KEY (`Id_Soutenance`),
  ADD KEY `Id_TypeSoutenance` (`Id_TypeSoutenance`),
  ADD KEY `Id_Stage` (`Id_Stage`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`Id_Specialite`),
  ADD KEY `Id_Departement` (`Id_Departement`);

--
-- Index pour la table `specialitea`
--
ALTER TABLE `specialitea`
  ADD PRIMARY KEY (`Id_Specialite`),
  ADD KEY `Id_Departement` (`Id_Departement`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`Id_Stage`),
  ADD KEY `Id_technologie` (`Id_technologie`),
  ADD KEY `Id_TypeStage` (`Id_TypeStage`),
  ADD KEY `Id_Departement` (`Id_Departement`);

--
-- Index pour la table `stagea`
--
ALTER TABLE `stagea`
  ADD PRIMARY KEY (`Id_Stage`),
  ADD KEY `Id_technologie` (`Id_technologie`),
  ADD KEY `Id_TypeStage` (`Id_TypeStage`),
  ADD KEY `Id_Departement` (`Id_Departement`);

--
-- Index pour la table `stage_jury`
--
ALTER TABLE `stage_jury`
  ADD PRIMARY KEY (`id_StageJury`),
  ADD KEY `Id_Soutenance` (`Id_Soutenance`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `stage_jurya`
--
ALTER TABLE `stage_jurya`
  ADD PRIMARY KEY (`id_StageJury`),
  ADD KEY `Id_Soutenance` (`Id_Soutenance`),
  ADD KEY `NCIN` (`NCIN`);

--
-- Index pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`Id_Technologie`);

--
-- Index pour la table `technologiea`
--
ALTER TABLE `technologiea`
  ADD PRIMARY KEY (`Id_Technologie`);

--
-- Index pour la table `tuto_user`
--
ALTER TABLE `tuto_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_58E7017B92FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_58E7017BA0D96FBF` (`email_canonical`);

--
-- Index pour la table `tuto_usera`
--
ALTER TABLE `tuto_usera`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2F38F1F692FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_2F38F1F6A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_2F38F1F6C05FB297` (`confirmation_token`);

--
-- Index pour la table `type_document`
--
ALTER TABLE `type_document`
  ADD PRIMARY KEY (`Id_typeDocument`);

--
-- Index pour la table `type_documenta`
--
ALTER TABLE `type_documenta`
  ADD PRIMARY KEY (`Id_typeDocument`);

--
-- Index pour la table `type_soutanance`
--
ALTER TABLE `type_soutanance`
  ADD PRIMARY KEY (`Id_TypeSoutenance`);

--
-- Index pour la table `type_soutanancea`
--
ALTER TABLE `type_soutanancea`
  ADD PRIMARY KEY (`Id_TypeSoutenance`);

--
-- Index pour la table `type_stage`
--
ALTER TABLE `type_stage`
  ADD PRIMARY KEY (`Id_TypeStage`);

--
-- Index pour la table `type_stagea`
--
ALTER TABLE `type_stagea`
  ADD PRIMARY KEY (`Id_TypeStage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `administrationa`
--
ALTER TABLE `administrationa`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `Id_Departement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departementa`
--
ALTER TABLE `departementa`
  MODIFY `Id_Departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `Id_Document` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `documenta`
--
ALTER TABLE `documenta`
  MODIFY `Id_Document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `encadreur`
--
ALTER TABLE `encadreur`
  MODIFY `NCIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadreura`
--
ALTER TABLE `encadreura`
  MODIFY `NCIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadreur_externe`
--
ALTER TABLE `encadreur_externe`
  MODIFY `Id_encadreurE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadreur_externea`
--
ALTER TABLE `encadreur_externea`
  MODIFY `Id_encadreurE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadreur_interne`
--
ALTER TABLE `encadreur_interne`
  MODIFY `Id_encadreurI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadreur_internea`
--
ALTER TABLE `encadreur_internea`
  MODIFY `Id_encadreurI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `NCIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudianta`
--
ALTER TABLE `etudianta`
  MODIFY `NCIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `Id_Societe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `societea`
--
ALTER TABLE `societea`
  MODIFY `Id_Societe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `soutanance`
--
ALTER TABLE `soutanance`
  MODIFY `Id_Soutenance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `soutanancea`
--
ALTER TABLE `soutanancea`
  MODIFY `Id_Soutenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `Id_Specialite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialitea`
--
ALTER TABLE `specialitea`
  MODIFY `Id_Specialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `Id_Stage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stagea`
--
ALTER TABLE `stagea`
  MODIFY `Id_Stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stage_jury`
--
ALTER TABLE `stage_jury`
  MODIFY `id_StageJury` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stage_jurya`
--
ALTER TABLE `stage_jurya`
  MODIFY `id_StageJury` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `Id_Technologie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `technologiea`
--
ALTER TABLE `technologiea`
  MODIFY `Id_Technologie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tuto_user`
--
ALTER TABLE `tuto_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tuto_usera`
--
ALTER TABLE `tuto_usera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_document`
--
ALTER TABLE `type_document`
  MODIFY `Id_typeDocument` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_documenta`
--
ALTER TABLE `type_documenta`
  MODIFY `Id_typeDocument` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_soutanance`
--
ALTER TABLE `type_soutanance`
  MODIFY `Id_TypeSoutenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_soutanancea`
--
ALTER TABLE `type_soutanancea`
  MODIFY `Id_TypeSoutenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_stage`
--
ALTER TABLE `type_stage`
  MODIFY `Id_TypeStage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_stagea`
--
ALTER TABLE `type_stagea`
  MODIFY `Id_TypeStage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administration`
--
ALTER TABLE `administration`
  ADD CONSTRAINT `FK_9FDD0D18FE6E88D7` FOREIGN KEY (`idUser`) REFERENCES `tuto_user` (`id`);

--
-- Contraintes pour la table `administrationa`
--
ALTER TABLE `administrationa`
  ADD CONSTRAINT `FK_FB44FB18FE6E88D7` FOREIGN KEY (`idUser`) REFERENCES `tuto_usera` (`id`);

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_D8698A76D6722D44` FOREIGN KEY (`Id_typeDocument`) REFERENCES `type_document` (`Id_typeDocument`),
  ADD CONSTRAINT `FK_D8698A76E6D371F6` FOREIGN KEY (`NCINET`) REFERENCES `tuto_user` (`id`),
  ADD CONSTRAINT `FK_D8698A76FB646192` FOREIGN KEY (`NCINED`) REFERENCES `tuto_user` (`id`);

--
-- Contraintes pour la table `documenta`
--
ALTER TABLE `documenta`
  ADD CONSTRAINT `FK_510903C0D6722D44` FOREIGN KEY (`Id_typeDocument`) REFERENCES `type_documenta` (`Id_typeDocument`),
  ADD CONSTRAINT `FK_510903C0E6D371F6` FOREIGN KEY (`NCINET`) REFERENCES `tuto_usera` (`id`),
  ADD CONSTRAINT `FK_510903C0FB646192` FOREIGN KEY (`NCINED`) REFERENCES `tuto_usera` (`id`);

--
-- Contraintes pour la table `encadreur_externe`
--
ALTER TABLE `encadreur_externe`
  ADD CONSTRAINT `FK_DFFB63FA4718AE81` FOREIGN KEY (`Id_Societe`) REFERENCES `societe` (`Id_Societe`),
  ADD CONSTRAINT `FK_DFFB63FA988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`);

--
-- Contraintes pour la table `encadreur_externea`
--
ALTER TABLE `encadreur_externea`
  ADD CONSTRAINT `FK_B5005E224718AE81` FOREIGN KEY (`Id_Societe`) REFERENCES `societea` (`Id_Societe`),
  ADD CONSTRAINT `FK_B5005E22988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);

--
-- Contraintes pour la table `encadreur_interne`
--
ALTER TABLE `encadreur_interne`
  ADD CONSTRAINT `FK_CDD4E808929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`),
  ADD CONSTRAINT `FK_CDD4E808988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`);

--
-- Contraintes pour la table `encadreur_internea`
--
ALTER TABLE `encadreur_internea`
  ADD CONSTRAINT `FK_E6A1E299929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`),
  ADD CONSTRAINT `FK_E6A1E299988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_717E22E3929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`),
  ADD CONSTRAINT `FK_717E22E3BE7F3433` FOREIGN KEY (`Id_Specialite`) REFERENCES `specialite` (`Id_Specialite`);

--
-- Contraintes pour la table `etudianta`
--
ALTER TABLE `etudianta`
  ADD CONSTRAINT `FK_D1C573A3929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`),
  ADD CONSTRAINT `FK_D1C573A3BE7F3433` FOREIGN KEY (`Id_Specialite`) REFERENCES `specialitea` (`Id_Specialite`);

--
-- Contraintes pour la table `soutanance`
--
ALTER TABLE `soutanance`
  ADD CONSTRAINT `FK_D6C8BD78144E9F0B` FOREIGN KEY (`Id_Stage`) REFERENCES `stage` (`Id_Stage`),
  ADD CONSTRAINT `FK_D6C8BD7825FFEB97` FOREIGN KEY (`Id_TypeSoutenance`) REFERENCES `type_soutanance` (`Id_TypeSoutenance`);

--
-- Contraintes pour la table `soutanancea`
--
ALTER TABLE `soutanancea`
  ADD CONSTRAINT `FK_B6BF8FF0144E9F0B` FOREIGN KEY (`Id_Stage`) REFERENCES `stagea` (`Id_Stage`),
  ADD CONSTRAINT `FK_B6BF8FF025FFEB97` FOREIGN KEY (`Id_TypeSoutenance`) REFERENCES `type_soutanancea` (`Id_TypeSoutenance`);

--
-- Contraintes pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `FK_E7D6FCC1929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`);

--
-- Contraintes pour la table `specialitea`
--
ALTER TABLE `specialitea`
  ADD CONSTRAINT `FK_4339A99929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_C27C936978F7835B` FOREIGN KEY (`Id_technologie`) REFERENCES `technologie` (`Id_Technologie`),
  ADD CONSTRAINT `FK_C27C9369929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departement` (`Id_Departement`),
  ADD CONSTRAINT `FK_C27C93699362EC02` FOREIGN KEY (`Id_TypeStage`) REFERENCES `type_stage` (`Id_TypeStage`);

--
-- Contraintes pour la table `stagea`
--
ALTER TABLE `stagea`
  ADD CONSTRAINT `FK_DC1B1B2C78F7835B` FOREIGN KEY (`Id_technologie`) REFERENCES `technologiea` (`Id_Technologie`),
  ADD CONSTRAINT `FK_DC1B1B2C929C619B` FOREIGN KEY (`Id_Departement`) REFERENCES `departementa` (`Id_Departement`),
  ADD CONSTRAINT `FK_DC1B1B2C9362EC02` FOREIGN KEY (`Id_TypeStage`) REFERENCES `type_stagea` (`Id_TypeStage`);

--
-- Contraintes pour la table `stage_jury`
--
ALTER TABLE `stage_jury`
  ADD CONSTRAINT `FK_D1E0BFB914F0379C` FOREIGN KEY (`Id_Soutenance`) REFERENCES `soutanance` (`Id_Soutenance`),
  ADD CONSTRAINT `FK_D1E0BFB9988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreur` (`NCIN`);

--
-- Contraintes pour la table `stage_jurya`
--
ALTER TABLE `stage_jurya`
  ADD CONSTRAINT `FK_5ADB55D414F0379C` FOREIGN KEY (`Id_Soutenance`) REFERENCES `soutanancea` (`Id_Soutenance`),
  ADD CONSTRAINT `FK_5ADB55D4988C5B50` FOREIGN KEY (`NCIN`) REFERENCES `encadreura` (`NCIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
