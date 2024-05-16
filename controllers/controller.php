<?php
/**
 * Controlleur des requêtes du site
 *
 * Ce fichier est le controller contenant toutes les fonctions permettant de naviguer sur le site et d'effectuer diverses actions.
 *
 * @author Shansky
 * @date 03/19/2024
 */
namespace App\Controllers;
use Exception;

class controller
{
    /**
     * Affiche l'accueil.
     * @return void
     * @throws Exception Si il y a une erreur lors de l'affichage de l'accueil.
     */
    function DisplayAccueil(): void
    {
        try {
            require("views/accueil.php");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de l'accueil.");
        }
    }

    /**
     * Affiche une page test
     * @return void
     * @throws Exception Si il y a une erreur lors de l'affichage de l'accueil.
     */
    function DisplayTest(): void
    {
        try {
            require("views/test.php");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage du test.");
        }
    }

    /**
     * Affiche le jeu Snake après avoir tapé le Konami Code
     * @return void
     * @throws Exception Si il y a une erreur lors de l'affichage du jeu Snake
     */
    function DisplaySnake(): void
    {
        try {
            require("views/snake.html");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage du jeu Snake.");
        }
    }

    /**
     * Affiche la page consultation les jeux.
     * La fonction requiert l'utilisation de la base de données.
     * @return void
     * @throws Exception Si il y a une erreur lors de l'affichage de consultation
     */
    function DisplayConsultationJeux(): void
    {
        try {
            require("models/model.php");
            require("views/consultation-jeux.php");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de la page de consultation.");
        }
    }

    /**
     * Affiche la page consultation pour les consoles.
     * La fonction requiert l'utilisation de la base de données.
     * @return void
     * @throws Exception Si il y a une erreur lors de l'affichage de consulation-console
     */
    function DisplayConsultationConsoles(): void
    {
        try {
            require("models/model.php");
            require("views/consultation-consoles.php");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de la page de consultation-console.");
        }
    }

    /**
     * Renvoie le Json qui contient tous les jeux.
     * La fonction requiert l'utilisation de la base de données.
     * @return void
     * @throws Exception En cas d'erreur lors de l'affichage de la liste des jeux.
     */
    function ListerAPIJeux(): void
    {
        try {
            require("models/model.php");
            $data = DbAPIjeux();
            header('Content-Type: application/json');
            echo $data;
            die();
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de la liste des jeux en Json..");
        }
    }

    /**
     * Renvoie le Json qui contient toutes les consoles.
     * La fonction requiert l'utilisation de la base de données.
     * @return void
     * @throws Exception En cas d'erreur lors de l'affichage de la liste des consoles.
     */
    function ListerAPIConsoles(): void
    {
        try {
            require("models/model.php");
            $data = DbAPIconsoles();
            header('Content-Type: application/json');
            echo $data;
            die();
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de la liste des consoles en Json..");
        }
    }


    /**
     * Une page secrète.
     * @return void
     * Permet d'afficher les différents information de l'interpréteur PHP à des fins de débogage.
     */
    function DisplayInfoPHP(): void
    {
        require("views/menu.html");
        phpinfo();
    }

    /**
     * Affiche la page 404, qui apparaît quand on demande une page inconnue au routeur.
     * @return void
     * @throws Exception En cas d'erreur d'affichage pour la page 404.
     */
    function Display404(): void
    {
        try {
            require("views/404.php");
        } catch (Exception $e) {
            throw new Exception("Une erreur est survenue lors de l'affichage de la page 404.");
        }
    }
}