-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 26 déc. 2020 à 22:03
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `codeigniter`
--

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL,
  `e_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `e_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`e_id`, `e_date`, `e_name`, `e_email`, `e_phone`, `e_job`) VALUES
(1, '2020-10-01 15:21:02', 'ala', 'ala@yahoo.fr', '51147940', 'graphique designer'),
(2, '2020-10-01 15:32:23', 'ala', 'ala@12563', '8798456', 'web developer'),
(4, '2020-10-01 15:37:12', 'youssef', 'youssef@gmail', '8963364', 'graphique designer'),
(6, '2020-10-01 15:39:12', 'amin', 'amin@yahoo', '8971', 'graphique designer');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(11) NOT NULL,
  `j_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `j_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`j_id`, `j_name`, `j_date`) VALUES
(1, 'web developer', '2020-09-12 18:32:25'),
(2, 'graphique designer', '2020-09-20 11:08:44'),
(3, 'box', '2020-10-01 15:39:41'),
(4, 'baney', '2020-12-11 14:36:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `inscrit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `inscrit_date`, `u_email`, `u_name`, `u_pass`) VALUES
(3, '2020-09-01 13:48:25', 'youssef24@gmail.com', 'youssef', '1234'),
(6, '2020-11-24 21:38:23', 'youssef24@gmail.com', 'amin', '12'),
(7, '2020-11-24 21:43:19', 'estala27@yahoo.fr', 'saif', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
