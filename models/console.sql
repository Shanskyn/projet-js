-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 mai 2024 à 16:57
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
-- Base de données : `db_jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `sortie` int DEFAULT NULL,
  `information` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `console`
--

INSERT INTO `console` (`id`, `nom`, `compagnie`, `sortie`, `information`) VALUES
(1, 'PlayStation 1', 'Sony', 1994, 'La PlayStation 1, également connue sous le nom de PS1, est une console de jeu vidéo de cinquième génération développée et commercialisée par Sony Computer Entertainment. Lancée en 1994, la PlayStation 1 a été l\'une des premières consoles à utiliser des disques optiques pour les jeux, ce qui lui a permis d\'offrir des graphismes et des capacités de jeu avancés pour l\'époque.'),
(2, 'Super NES', 'Nintendo', 1990, 'La Super Nintendo Entertainment System (Super NES ou SNES) est une console de jeu vidéo de quatrième génération développée et commercialisée par Nintendo. Lancée en 1990, la SNES a été la console phare de Nintendo dans les années 90, offrant une bibliothèque de jeux emblématiques tels que Super Mario World, The Legend of Zelda: A Link to the Past et Super Metroid.'),
(3, 'NES', 'Nintendo', 1985, 'La Nintendo Entertainment System (NES) est une console de jeu vidéo de troisième génération développée et commercialisée par Nintendo. Lancée en 1985, la NES a joué un rôle majeur dans la revitalisation de l\'industrie du jeu vidéo après le crash du jeu vidéo de 1983. Elle a introduit des franchises emblématiques telles que Super Mario Bros., The Legend of Zelda et Metroid.'),
(4, 'Gameboy', 'Nintendo', 1989, 'Le Game Boy est une console de jeu portable développée et commercialisée par Nintendo. Lancé en 1989, le Game Boy est devenu l\'une des consoles de jeu portable les plus populaires de tous les temps, offrant une grande bibliothèque de jeux classiques tels que Tetris, Pokémon et The Legend of Zelda: Link\'s Awakening.'),
(5, 'Gameboy Color', 'Nintendo', 1998, 'Le Game Boy Color est une console de jeu portable développée et commercialisée par Nintendo, et est la version colorée de la Game Boy originale. Lancé en 1998, le Game Boy Color a permis aux joueurs de profiter de jeux avec des graphismes en couleur pour la première fois sur une console portable Nintendo.'),
(6, 'Gameboy Advance', 'Nintendo', 2001, 'Le Game Boy Advance (GBA) est une console de jeu portable développée et commercialisée par Nintendo. Lancé en 2001, le GBA a été une avancée majeure par rapport à ses prédécesseurs, offrant des graphismes améliorés et une bibliothèque de jeux étendue comprenant des titres tels que Advance Wars, Pokémon Ruby/Sapphire et The Legend of Zelda: The Minish Cap.'),
(7, 'Gamecube', 'Nintendo', 2001, 'Le Nintendo GameCube est une console de jeu vidéo de sixième génération développée et commercialisée par Nintendo. Lancé en 2001, le GameCube était célèbre pour sa forme compacte et ses manettes innovantes. Il a accueilli des jeux populaires tels que Super Smash Bros. Melee, Luigi\'s Mansion et The Legend of Zelda: The Wind Waker.'),
(8, 'PSP', 'Sony', 2004, 'La PlayStation Portable (PSP) est une console de jeu portable développée et commercialisée par Sony Computer Entertainment. Lancée en 2004, la PSP était la première console de jeu portable à utiliser un support de stockage optique, offrant une expérience de jeu portable immersive avec des graphismes de qualité console.'),
(9, 'Sega Megadrive', 'Sega', 1988, 'La Sega Mega Drive, connue sous le nom de Sega Genesis en Amérique du Nord, est une console de jeu vidéo de quatrième génération développée et commercialisée par Sega. Lancée en 1988, la Mega Drive a été un concurrent majeur de la Super Nintendo Entertainment System (SNES) de Nintendo, offrant des jeux emblématiques tels que Sonic the Hedgehog, Streets of Rage et Golden Axe.'),
(10, 'Nintendo 64', 'Nintendo', 1996, 'La Nintendo 64 (N64) est une console de jeu vidéo de cinquième génération développée et commercialisée par Nintendo. Lancée en 1996, la N64 était célèbre pour ses graphismes 3D révolutionnaires et son contrôleur innovant. Elle a accueilli des jeux classiques tels que Super Mario 64, The Legend of Zelda: Ocarina of Time et Mario Kart 64.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
