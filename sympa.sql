-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 fév. 2021 à 13:02
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sympa`
--

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `id_professeur` int(11) NOT NULL,
  PRIMARY KEY (`id_matiere`),
  KEY `id_professeur` (`id_professeur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom`, `id_professeur`) VALUES
(1, 'francais', 8),
(2, 'Malagasy', 8),
(3, 'politique publique', 9);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `id_professeur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id_professeur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id_professeur`, `nom`, `prenom`, `mdp`) VALUES
(1, 'RAKOTO', 'Be', 'rakoto'),
(3, 'RABE', 'Koto', 'rabe');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) DEFAULT NULL,
  `contenu` varchar(2048) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `categorie` varchar(250) NOT NULL DEFAULT 'cours',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_professeur` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_professeur` (`id_professeur`),
  KEY `id_matiere` (`id_matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `contenu`, `photo`, `categorie`, `date`, `id_professeur`, `id_matiere`) VALUES
(11, '1.RAKOTO publication', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, mollitia nam. Totam sequi dolores, quam a porro odit eos enim id accusamus aut iure minima unde architecto aperiam exercitationem perspiciatis eveniet placeat dicta nam. Reiciendis ratione totam nesciunt dolore repudiandae optio delectus adipisci earum sequi laborum cum ipsam saepe nisi corrupti ab voluptas, vero maiores doloribus quas? Qui nulla vel aspernatur, id ratione nostrum alias. Repudiandae quisquam, repellat vitae harum reiciendis ut iure, perspiciatis neque optio provident aliquid consectetur unde facilis praesentium. Magnam unde amet, adipisci illo ipsam sed. Iusto ipsam consequatur minima esse placeat, nisi sit dolores reprehenderit doloremque iste ad dolor quam modi corrupti. Rerum quibusdam qui voluptates, nostrum dolorem cum corrupti tempore soluta accusamus quaerat officiis ad, nihil odio et neque quia! Corporis ab iure, qui culpa, veritatis ad vitae ipsam veniam laudantium vero necessitatibus blanditiis placeat molestias minima corrupti deleniti sit amet. Nam, optio consequatur vel quam commodi nostrum provident illo magnam ipsum. Animi odit dicta eius? Beatae officiis commodi laudantium soluta, adipisci eius cum minus perferendis magni rem harum! Beatae laudantium dolorum non facere adipisci nostrum impedit, alias quas aliquid molestias! Nihil, cupiditate quis. Hic suscipit incidunt inventore excepturi explicabo doloremque optio accusamus quisquam sit!\r\n', 'FR-wp6.jpg', 'cours', '2020-12-19 07:00:32', 1, 2),
(12, '2.titre2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestias cupiditate explicabo repellat nulla magni numquam sit, obcaecati quibusdam rem, a dolor error incidunt temporibus et dolorum laborum tempore enim totam aut adipisci corrupti. Deserunt illo beatae cumque aut voluptatibus nostrum expedita, at in eius et, nemo voluptates debitis aliquam sunt, adipisci autem nihil? Beatae repudiandae voluptatem vero incidunt. Totam sequi dolor corrupti similique explicabo optio consectetur, iusto aspernatur excepturi aperiam magni officiis eius minima voluptatibus magnam dignissimos illo inventore recusandae neque modi. Eaque numquam ipsa laboriosam facere dolore labore provident nesciunt, voluptas impedit! Reiciendis modi omnis adipisci, molestiae quaerat cupiditate rerum amet exercitationem laudantium aut unde ratione error. Pariatur quae accusamus officia sit architecto repudiandae consequuntur suscipit omnis nemo id dolor perspiciatis voluptatibus, maxime quos distinctio aliquid minima. Sequi numquam quis voluptates magnam, corporis dolorem debitis incidunt tempore facilis consequuntur aut, similique voluptatibus impedit id molestias maiores! Porro, impedit.', 'FR-wp3.jpg', 'exercice', '2020-12-21 08:48:30', 1, 2),
(13, 'rabe franÃ§ais', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestias cupiditate explicabo repellat nulla magni numquam sit, obcaecati quibusdam rem, a dolor error incidunt temporibus et dolorum laborum tempore enim totam aut adipisci corrupti. Deserunt illo beatae cumque aut voluptatibus nostrum expedita, at in eius et, nemo voluptates debitis aliquam sunt, adipisci autem nihil? Beatae repudiandae voluptatem vero incidunt. Totam sequi dolor corrupti similique explicabo optio consectetur, iusto aspernatur excepturi aperiam magni officiis eius minima voluptatibus magnam dignissimos illo inventore recusandae neque modi. Eaque numquam ipsa laboriosam facere dolore labore provident nesciunt, voluptas impedit! Reiciendis modi omnis adipisci, molestiae quaerat cupiditate rerum amet exercitationem laudantium aut unde ratione error. Pariatur quae accusamus officia sit architecto repudiandae consequuntur suscipit omnis nemo id dolor perspiciatis voluptatibus, maxime quos distinctio aliquid minima. Sequi numquam quis voluptates magnam, corporis dolorem debitis incidunt tempore facilis consequuntur aut, similique voluptatibus impedit id molestias maiores! Porro, impedit.', 'FR-wp1.jpg', 'cours', '2021-01-28 13:11:18', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pass`, `mail`, `state`) VALUES
(1, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
