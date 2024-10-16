-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 oct. 2024 à 13:20
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ifri_aspect`
--

-- --------------------------------------------------------

--
-- Structure de la table `adhesion`
--

CREATE TABLE `adhesion` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `naissance` date NOT NULL,
  `telephone` int(15) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `mail` text NOT NULL,
  `profession` text DEFAULT NULL,
  `interet` text DEFAULT NULL,
  `niveau` text NOT NULL,
  `motivations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adhesion`
--

INSERT INTO `adhesion` (`id`, `nom`, `prenom`, `naissance`, `telephone`, `adresse`, `mail`, `profession`, `interet`, `niveau`, `motivations`) VALUES
(1, 'GBASSI', 'Jules-christ', '2024-09-05', 0, NULL, '', NULL, NULL, '', NULL),
(17, 'Pierre', 'NANA', '2024-09-22', 5787898, 'Pierre', 'gbassi@gmail.com', 'Autres', 'Musique,', 'Intermédiaire', 'zeze'),
(18, 'GBASSI', 'Jules-christ', '2024-09-05', 54470002, 'JULES', 'juleschristgbassi9@gmail.com', 'Employé', 'Technologie,', 'Débutant', 'vcvc'),
(19, 'GBASSI', 'Jules-christ', '2024-09-28', 54470002, 'JULES', 'juleschristgbassi9@gmail.com', 'Entrepreneur', ',Sports,,Technologie,,Musique,', 'Avancé', 'SALUT LES GARS'),
(20, 'tonton', 'fofo', '2024-09-06', 4787547, 'tonton', 'gbassi@gmail.com', 'Étudiant', 'Sports,', 'Débutant', 'Je viens de commencer'),
(21, 'Joli', 'Florence', '2024-09-22', 47875789, 'Joli de cotonou', 'gbassi@gmail.com', 'Autres', ',Échecs,Sports', 'Débutant', 'Je viens de commencer');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `langue` varchar(100) NOT NULL,
  `competence` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `nom`, `prenom`, `langue`, `competence`, `age`, `matricule`) VALUES
(1, 'GBASSI', 'Jules-christ', ' ,Français,Yoruba', ' ,HTML,CSS,JS', 22, '10000624'),
(2, 'Tonton', 'Julien', ' ,Espayol', ' ,HTML,CSS', 19, '10000636'),
(3, 'AKIROKO', 'Pierre', ' ,Anglais,Lantin', ' ,JS,PHP', 18, '10000787'),
(4, 'hello', 'boy', ' ,Espayol,Lantin', ' ,JS,PHP', 14, '1478');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mail`, `password`) VALUES
(11, 'GBASSI', 'juleschristgbassi9@gmail.com', 'cc'),
(12, 'Florrent', 'florent@gmail.com', 'ss'),
(16, 'koko', 'koko@gmail.com', 'cc'),
(17, 'zackarie', 'zackarie@gmail.com', 'zz'),
(18, 'KIKE Nadia', 'nadia@gmail.com', 'nadia'),
(19, 'pp', 'gbassi@gmail.com', 'pp'),
(20, 'HOUSMAN', 'zackari@gmail.com', 'CC'),
(21, 'tata', 'tata@gmail.com', 'tt');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adhesion`
--
ALTER TABLE `adhesion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adhesion`
--
ALTER TABLE `adhesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
