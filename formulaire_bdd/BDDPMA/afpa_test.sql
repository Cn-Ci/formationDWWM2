-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 29 oct. 2020 à 16:13
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afpa_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `no_emp` int(4) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `emploi` varchar(30) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL,
  `sup` int(4) DEFAULT NULL,
  `noproj` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`no_emp`, `nom`, `prenom`, `emploi`, `embauche`, `sal`, `comm`, `noserv`, `sup`, `noproj`) VALUES
(1000, 'leroy', 'paul', 'president', '1987-10-25', 55005.50, 4.00, 1, NULL, 103),
(1100, 'delpierre', 'dorothee', 'secretaire', '1987-10-25', 12351.20, NULL, 1, 1000, 103),
(1101, 'dumont', 'louis', 'vendeur', '1987-10-25', 9047.90, 0.00, 1, 1300, 103),
(1102, 'minet', 'marc', 'vendeur', '1987-10-25', 8085.81, 17230.00, 1, 1300, 103),
(1104, 'nys', 'etienne', 'technicien', '1987-10-25', 12342.20, NULL, 1, 1200, 103),
(1105, 'denimal', 'jerome', 'comptable', '1987-10-25', 15746.60, NULL, 1, 1600, 103),
(1200, 'lemaire', 'guy', 'directeur', '1987-03-11', 36303.60, NULL, 2, 1000, 103),
(1201, 'martin', 'jean', 'technicien', '1987-06-25', 11235.10, NULL, 2, 1200, 103),
(1202, 'dupont', 'jacques', 'technicien', '1988-10-30', 10313.00, NULL, 2, 1200, 103),
(1300, 'lenoir', 'gerard', 'directeur', '1987-04-02', 31353.10, 13071.00, 3, 1000, 103),
(1301, 'gerard', 'robert', 'vendeur', '1999-04-16', 7694.77, 12430.00, 3, 1300, 103),
(1303, 'masure', 'emile', 'technicien', '1988-06-17', 10451.10, NULL, 3, 1200, 103),
(1355, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(1500, 'dupont', 'jean', 'directeur', '1987-10-23', 28434.80, NULL, 5, 1000, 102),
(1501, 'dupire', 'pierre', 'analyste', '1984-10-24', 23102.30, NULL, 5, 1500, 102),
(1502, 'durand', 'bernard', 'programmeur', '1987-07-30', 13201.30, 465451.00, 5, 1500, 102),
(1503, 'delnatte', 'luc', 'pupiteur', '1999-01-15', 8801.01, NULL, 5, 1500, 102),
(1600, 'lavare', 'paul', 'directeur', '1991-12-13', 31238.10, NULL, 6, 1000, 102),
(1601, 'caron', 'alain', 'comptable', '1985-09-16', 33003.30, NULL, 6, 1600, 102),
(1603, 'morel', 'robert', 'comptable', '1985-07-18', 33003.30, NULL, 6, 1600, 102),
(1604, 'havet', 'alain', 'vendeur', '1991-01-01', 9388.94, 33415.00, 6, 1300, 102),
(1605, 'richard', 'jules', 'comptable', '1985-10-22', 33503.40, NULL, 5, 1600, 102),
(1615, 'duprez', 'jean', 'balayeur', '1998-10-22', 6000.60, NULL, 5, 1000, 102);

-- --------------------------------------------------------

--
-- Structure de la table `employe3`
--

CREATE TABLE `employe3` (
  `no_emp` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `emploi` varchar(30) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe3`
--

INSERT INTO `employe3` (`no_emp`, `nom`, `prenom`, `emploi`, `embauche`, `sal`, `comm`, `noserv`, `sup`) VALUES
(1000, 'leroy', 'paul', 'president', '1987-10-25', 55005.50, NULL, 1, NULL),
(1010, 'moyen', 'toto', 'supérieur', '1999-12-12', 19527.30, NULL, 1000, 1),
(1101, 'dumont', 'louis', 'vendeur', '1987-10-25', 9047.90, 0.00, 1, 1300),
(1102, 'minet', 'marc', 'vendeur', '1987-10-25', 8085.81, 17230.00, 1, 1300),
(1104, 'nys', 'etienne', 'technicien', '1987-10-25', 12342.20, NULL, 1, 1200),
(1202, 'dupont', 'jacques', 'technicien', '1988-10-30', 10313.00, NULL, 2, 1200),
(1300, 'lenoir', 'gerard', 'directeur', '1987-04-02', 31353.10, 13071.00, 3, 1000),
(1500, 'dupont', 'jean', 'directeur', '1987-10-23', 28434.80, NULL, 5, 1000),
(1501, 'dupire', 'pierre', 'analyste', '1984-10-24', 23102.30, NULL, 5, 1500),
(1602, 'dubois', 'jules', 'vendeur', '1990-12-20', 9520.95, 35535.00, 6, 1300),
(1603, 'morel', 'robert', 'comptable', '1985-07-18', 33003.30, NULL, 6, 1600),
(1615, 'duprez', 'jean', 'balayeur', '1998-10-22', 6000.60, NULL, 5, 1000),
(2000, 'Cno', 'Cindy', 'reine', '2020-10-19', 7777777.50, 777777.69, 1, 2001);

-- --------------------------------------------------------

--
-- Structure de la table `proj`
--

CREATE TABLE `proj` (
  `noproj` int(3) DEFAULT NULL,
  `nomproj` varchar(10) DEFAULT NULL,
  `budget` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `proj`
--

INSERT INTO `proj` (`noproj`, `nomproj`, `budget`) VALUES
(101, 'alpha', 250000),
(102, 'beta', 175000),
(103, 'gamma', 1500000),
(101, 'alpha', 250000),
(102, 'beta', 175000),
(103, 'gamma', 950000);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `noserv` int(2) NOT NULL,
  `service` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`noserv`, `service`, `ville`) VALUES
(2, 'Royauté', 'lille'),
(5, 'informatique', 'lille'),
(6, 'comptabilite', 'lille'),
(7, 'technique', 'roubaix'),
(12, 'Presidentielle', 'Monaco');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`no_emp`),
  ADD KEY `sup` (`sup`),
  ADD KEY `noserv` (`noserv`);

--
-- Index pour la table `employe3`
--
ALTER TABLE `employe3`
  ADD PRIMARY KEY (`no_emp`),
  ADD KEY `sup` (`sup`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`noserv`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`sup`) REFERENCES `employe` (`no_emp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
