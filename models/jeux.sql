-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 avr. 2024 à 13:00
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `annee` int NOT NULL,
  `sommaire` text NOT NULL,
  `studio` varchar(100) NOT NULL,
  `editeur` varchar(100) NOT NULL,
  `support` varchar(20) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `titre`, `annee`, `sommaire`, `studio`, `editeur`, `support`, `genre`) VALUES
(1, 'Shadow of the Colossus', 2005, 'Shadow of the Colossus est un jeu d\'action-aventure où le joueur incarne Wander, un jeune homme en quête de réveiller une jeune fille nommée Mono. Pour ce faire, il doit vaincre seize colosses gigantesques dispersés dans un monde ouvert, utilisant sa ruse et sa détermination pour surmonter ces immenses adversaires.', 'Team Ico', 'Sony Computer Entertainment', 'PS2', 'Action, Aventure'),
(2, 'Pokémon Emerald', 2004, 'Pokémon Emerald est un jeu de rôle où les joueurs deviennent des dresseurs Pokémon et entreprennent un voyage à travers la région de Hoenn pour devenir le meilleur dresseur Pokémon. Ils capturent et entraînent divers Pokémon, affrontent d\'autres dresseurs et tentent d\'arrêter les plans maléfiques de la Team Aqua et de la Team Magma.', 'Game Freak', 'Nintendo', 'GBA', 'RPG'),
(3, 'Super Mario 64', 1996, 'Super Mario 64 est un jeu de plateforme révolutionnaire qui a marqué la transition de Mario vers la 3D. Les joueurs explorent le château de la princesse Peach et sautent à travers des peintures magiques pour entrer dans divers mondes, collectant des étoiles pour vaincre Bowser et sauver la princesse.', 'Nintendo EAD', 'Nintendo', 'N64', 'Plateforme'),
(4, 'Sonic the Hedgehog 2', 1847, 'Sonic the Hedgehog 2 est un jeu de plateforme rapide mettant en vedette Sonic, le hérisson bleu rapide, et son fidèle compagnon Tails. Ensemble, ils doivent contrecarrer les plans du diabolique Dr. Robotnik en traversant des niveaux remplis d\'obstacles, en collectant des anneaux et en affrontant des ennemis.', 'Sonic Team', 'Sega', 'Genesis', 'Plateforme'),
(5, 'Super Mario World', 1990, 'Super Mario World est un jeu de plateforme classique où le joueur contrôle Mario ou Luigi à travers le Royaume Champignon pour sauver la Princesse Peach des griffes de Bowser. Avec son gameplay fluide, ses niveaux ingénieux et son design charmant, Super Mario World est souvent considéré comme l\'un des meilleurs jeux de tous les temps.', 'Nintendo EAD', 'Nintendo', 'SNES', 'Plateforme'),
(6, 'Final Fantasy VII', 1997, 'Final Fantasy VII est un jeu de rôle épique se déroulant dans un monde de science-fiction et de fantasy. Les joueurs suivent Cloud Strife, un ancien soldat devenu mercenaire, alors qu\'il se joint à un groupe de rebelles pour contrecarrer les plans d\'une méga-corporation maléfique. Le jeu est célèbre pour son histoire complexe, ses personnages mémorables et ses cinématiques révolutionnaires.', 'Square Enix', 'Sony Computer Entertainment', 'PS1', 'RPG'),
(7, 'The Legend of Zelda', 1986, 'Dans ce jeu d\'aventure emblématique, le joueur incarne Link, un jeune héros chargé de sauver le royaume de Hyrule en récupérant huit fragments de Triforce dispersés. Armé d\'une épée et d\'un bouclier, Link explore des donjons, combat des monstres et résout des énigmes pour vaincre Ganon et sauver la princesse Zelda.', 'Nintendo EAD', 'Nintendo', 'NES', 'Aventure'),
(8, 'The Legend of Zelda: The Wind Waker', 2002, 'The Legend of Zelda: The Wind Waker suit Link dans une aventure maritime où il doit sauver sa sœur et empêcher le roi des mers, Ganondorf, de s\'emparer du royaume de Hyrule. Avec un style graphique distinctif et un monde ouvert à explorer, le jeu offre une expérience Zelda unique.', 'Nintendo EAD', 'Nintendo', 'GameCube', 'Aventure'),
(9, 'Pokémon HeartGold/SoulSilver', 2009, 'Pokémon HeartGold/SoulSilver est un remake des jeux Pokémon Gold et Silver, où les joueurs explorent la région de Johto tout en cherchant à devenir le meilleur dresseur Pokémon. Avec de nouvelles fonctionnalités telles que le suivi du Pokémon et les événements quotidiens, ces jeux offrent une expérience Pokémon riche et immersive.', 'Game Freak', 'Nintendo', 'DS', 'RPG'),
(10, 'God of War: Chains of Olympus', 2008, 'Dans God of War: Chains of Olympus, les joueurs reprennent le rôle de Kratos, le guerrier spartiate devenu dieu de la guerre. L\'histoire se déroule avant les événements du premier jeu, et les joueurs affrontent divers monstres mythologiques tout en cherchant à sauver la ville d\'Attica de la destruction.', 'Ready at Dawn, SCE Santa Monica Studio', 'Sony Computer Entertainment', 'PSP', 'Action, Aventure');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
