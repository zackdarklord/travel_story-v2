-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 jan. 2021 à 13:30
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travel_story`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `date_avis` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `text`, `date_avis`) VALUES
(1, 'excellent sevice', '2021-01-06 12:41:36'),
(10, 'got it', '2021-01-06 12:41:36');

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `classe`, `id_vol`, `prix`) VALUES
(2, 'Business', 789, 777),
(3, 'Business', 452, 784);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `daten` date NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `daten`, `sexe`, `tel`, `adresse`, `mail`, `mdp`) VALUES
(2, 'haddad', 'bechir', '2000-09-19', 'homme', 95582541, 'carthage hannibal', 'haddad.bechir@esprit.tn', 'boch'),
(3, 'chelbi', 'zakaria', '2000-12-19', 'homme', 54818626, 'laouina', 'zakaria.chelbi@esprit.tn', 'zak'),
(12, 'msallem', 'mohamed melek', '2000-02-07', 'homme', 11111111, 'laouina', 'msallem.mohaedmelek@esprit.tn', 'malek'),
(13, 'zakhama', 'safwen', '1999-01-07', 'homme', 22222222, 'ariana', 'zakhama.safwen@esprit.tn', 'saf'),
(14, 'hajjem', 'mohamed aziz', '2000-01-14', 'homme', 33333333, 'laouina', 'hajjem.mohamedaziz@esprit.tn', 'aziz');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT current_timestamp(),
  `valable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `image`, `description`, `date_ajout`, `valable`) VALUES
(2, 'dominican republic.png', '-30%', '2021-01-05 11:27:11', 0),
(3, 'offre2', '-30%', '2021-01-05 11:30:10', 1),
(5, 'actualité 1 ', 'Travel Story  a été élu meilleure agence de voyage en Tunisie', '2021-01-05 11:37:45', 1),
(19, 'avatar.jpg', 'jujtrhbfg', '2021-01-05 15:19:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `id` int(11) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `date_depart` date NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date_retour` date NOT NULL,
  `compagnie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `depart`, `date_depart`, `destination`, `date_retour`, `compagnie`) VALUES
(9, 'tunis', '2021-01-21', 'milano', '2021-02-26', 'tunisair'),
(10, 'tunis', '2021-01-07', 'paris', '2021-02-16', 'airfrance');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
