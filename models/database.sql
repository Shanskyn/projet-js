-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 mars 2024 à 14:06
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `year` int NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `name`, `author`, `year`, `summary`) VALUES
(1, 'Shadow of the Colossus', 'Team Ico', 2005, 'Shadow of the Colossus est un jeu d&#039;action-aventure où le joueur incarne Wander, un jeune homme en quête de réveiller une jeune fille nommée Mono. Pour ce faire, il doit vaincre seize colosses gigantesques dispersés dans un monde ouvert, utilisant sa ruse et sa détermination pour surmonter ces immenses adversaires.'),
(2, 'Pokémon Emerald', 'Game Freak', 2004, 'Pokémon Emerald est un jeu de rôle où les joueurs deviennent des dresseurs Pokémon et entreprennent un voyage à travers la région de Hoenn pour devenir le meilleur dresseur Pokémon. Ils capturent et entraînent divers Pokémon, affrontent d&#039;autres dresseurs et tentent d&#039;arrêter les plans maléfiques de la Team Aqua et de la Team Magma.'),
(3, 'Super Mario 64', 'Nintendo EAD', 1996, 'Super Mario 64 est un jeu de plateforme révolutionnaire qui a marqué la transition de Mario vers la 3D. Les joueurs explorent le château de la princesse Peach et sautent à travers des peintures magiques pour entrer dans divers mondes, collectant des étoiles pour vaincre Bowser et sauver la princesse.'),
(4, 'Sonic the Hedgehog 2', 'Sonic Team', 1847, 'Sonic the Hedgehog 2 est un jeu de plateforme rapide mettant en vedette Sonic, le hérisson bleu rapide, et son fidèle compagnon Tails. Ensemble, ils doivent contrecarrer les plans du diabolique Dr. Robotnik en traversant des niveaux remplis d&#039;obstacles, en collectant des anneaux et en affrontant des ennemis.'),
(5, 'Super Mario World', 'Nintendo EAD', 1990, 'Super Mario World est un jeu de plateforme classique où le joueur contrôle Mario ou Luigi à travers le Royaume Champignon pour sauver la Princesse Peach des griffes de Bowser. Avec son gameplay fluide, ses niveaux ingénieux et son design charmant, Super Mario World est souvent considéré comme l&#039;un des meilleurs jeux de tous les temps.'),
(6, 'Final Fantasy VII', 'Square Enix', 1997, 'Final Fantasy VII est un jeu de rôle épique se déroulant dans un monde de science-fiction et de fantasy. Les joueurs suivent Cloud Strife, un ancien soldat devenu mercenaire, alors qu&#039;il se joint à un groupe de rebelles pour contrecarrer les plans d&#039;une méga-corporation maléfique. Le jeu est célèbre pour son histoire complexe, ses personnages mémorables et ses cinématiques révolutionnaires.'),
(7, 'The Legend of Zelda', 'Nintendo EAD', 1986, 'Dans ce jeu d&#039;aventure emblématique, le joueur incarne Link, un jeune héros chargé de sauver le royaume de Hyrule en récupérant huit fragments de Triforce dispersés. Armé d&#039;une épée et d&#039;un bouclier, Link explore des donjons, combat des monstres et résout des énigmes pour vaincre Ganon et sauver la princesse Zelda.'),
(8, 'The Legend of Zelda: The Wind Waker', 'Nintendo EAD', 2002, 'The Legend of Zelda: The Wind Waker suit Link dans une aventure maritime où il doit sauver sa sœur et empêcher le roi des mers, Ganondorf, de s&#039;emparer du royaume de Hyrule. Avec un style graphique distinctif et un monde ouvert à explorer, le jeu offre une expérience Zelda unique.'),
(9, 'Pokémon HeartGold/SoulSilver', 'Game Freak', 2009, 'Pokémon HeartGold/SoulSilver est un remake des jeux Pokémon Gold et Silver, où les joueurs explorent la région de Johto tout en cherchant à devenir le meilleur dresseur Pokémon. Avec de nouvelles fonctionnalités telles que le suivi du Pokémon et les événements quotidiens, ces jeux offrent une expérience Pokémon riche et immersive.'),
(10, 'God of War: Chains of Olympus', 'Ready at Dawn, SCE Santa Monica Studio', 2008, 'Dans God of War: Chains of Olympus, les joueurs reprennent le rôle de Kratos, le guerrier spartiate devenu dieu de la guerre. L&#039;histoire se déroule avant les événements du premier jeu, et les joueurs affrontent divers monstres mythologiques tout en cherchant à sauver la ville d&#039;Attica de la destruction.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
