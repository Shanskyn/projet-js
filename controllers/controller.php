<?php
/**
 * Controlleur des requêtes du site
 *
 * Ce fichier est le controller contenant toutes les fonctions permettant de naviguer sur le site et d'effectuer diverses actions.
 *
 * @author Shansky
 * @date 03/19/2024
 */

/**
 * Affiche l'accueil.
 * @return void
 * @throws Exception Si il y a une erreur lors de l'affichage de l'accueil.
 */
function DisplayAccueil() {
    try {
        require("views/accueil.php");
    } catch (Exception $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage de l'accueil.");
    }
}

function DisplaySnake() {
    try {
        require("views/snake.html");
    } catch (Exception $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage de l'accueil.");
    }
}

/**
 * Affiche la page consultation.
 * La fonction requiert l'utilisation de la base de données.
 * @return void
 * @throws Exception Si il y a une erreur lors de l'affichage de l'accueil
 */
function DisplayConsultation() {
    try {
        require("models/model.php");
        $data = DbAfficher();
        require("views/consultation.php");
    } catch (Exception $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage de la page de consultation.");
    }
}

/**
 * Affiche la page modification.
 * La fonction requiert l'utilisation de la base de données.
 * @return void
 * @throws Exception Si il y a une erreur lors de l'affichage de l'accueil
 */
function DisplayModification() {
    try {
        require("models/model.php");
        $data = DbAfficher();
        require("views/modification.php");
    } catch (Exception $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage de la page de modification");
    }
}

/**
 * Une page secrète.
 * Permet d'afficher les différents information de l'interpréteur PHP à des fins de débogage.
 */
function DisplayInfoPHP() {
    require("views/menu.html");
    phpinfo();
}

/**
 * Affiche la page d'ajout de livre.
 */
function DisplayAjouter(){
    require("views/ajout.php");
}

/**
 * Affiche la page de résultat de recherche.
 * La fonction requiert l'utilisation de la base de données.
 * @param string $mot La fonction doit avoir un mot en paramètre pour effectuer une recherche dans la base.
 */
function DisplayRechercher($mot){
    require("models/model.php");
    $data = rechercherLivre($mot);
    require("views/rechercher.php");
}

/**
 * Fonction de suppression de livre.
 * La fonction requiert l'utilisation de la base de données.
 * @param int $id La fonction doit avoir un id sur lequel se référer afin de le supprimer dans la base.
 * @return void Elle redirige vers la page de consultation.
 */
function SupprLivre($id) {
    require("models/model.php");
    supprId($id);
    header("location:../index.php?page=consultation");
}

/**
 * Fonction d'ajout de livre.
 * @param array $livre La fonction doit avoir un tableau contenant les différentes informations du livre en paramètres
 * La fonction requiert l'utilisation de la base de données.
 * Elle redirige vers la page de consultation.
 */
function Ajouter($livre) {
    $titre = $livre['titre'];
    $auteur = $livre['auteur'];
    $annee = $livre['annee'];
    $resume = $livre['resume'];
    require("models/model.php");
    ajouterLivre($titre, $auteur, $annee, $resume);
    header("location:../index.php?page=consultation");
}

/**
 * Affiche la page de modification d'un livre.
 * La fonction requiert l'utilisation de la base de données.
 * @param int $id La fonction doit avoir un id sur lequel se référer afin d'afficher les information du livre
 */
function DisplayModif2($id) {
    require("models/model.php");
    $livre = afficherLivre($id);
    require("views/modification2.php");
}

function Display404(){
    require("views/404.php");
}

/**
 * Fonction de modification d'un livre.
 * La fonction requiert l'utilisation de la base de données.
 * @param array $livre La fonction doit avoir en paramètre un tableau contenant les informations modifiées du livre.
 */
function Modifier($livre) {
    require("models/model.php");
    $id = $livre['id'];
    $titre = $livre['titre'];
    $auteur = $livre['auteur'];
    $annee = $livre['annee'];
    $resume = $livre['resume'];
    modifierLivre($id, $titre, $auteur, $annee, $resume);
}