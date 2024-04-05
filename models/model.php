<?php
/**
 * Le modèle pour la base de données.
 *
 * Ce fichier est le modèle permettant d'agir avec la base de données avec des requêtes SQL.
 *
 * @author Shansky
 * @date 03/19/2024
 */

/**
 * Fonction de connexion avec la base de données.
 * Nécessaire pour agir avec la base via d'autres fonctions.
 * @return PDO Renvoie les paramètres de connexion à la base de données.
 * @throws Exception Si il y a une erreur lors de la connexion à la base de données.
 */
function DbConnexion(){
    try{
        $db = new PDO('mysql:host=localhost;port=3306;dbname=tp_js;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(PDOException $e) {
        throw new Exception("Une erreur est survenue lors de la connexion à la base de données.");
}
    catch(Exception $e){
        throw new Exception("Une erreur est survenue lors de la connexion à la base de données.");
    }
}

/**
 * Fonction d'affichage de toute la base de données.
 * Nécessaire pour la page de consultation.
 * @return array Renvoie un tableau de tableau contenant tous les tuples de la base de données.
 * @throws Exception Si une erreur survient lors de l'affichage des livres.
 */
function DbAfficher() {
    try {
        $db = DbConnexion();
        $sql = "SELECT * FROM games";
        $statement = $db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage des livres.");
    }
}

/**
 * Fonction d'ajout d'un livre dans la base de données.
 * La fonction a besoin de plusieurs variables pour ajouter le livre.
 * @param string $titre Le titre du livre.
 * @param string $auteur L'auteur du livre.
 * @param string $annee La date de publication du livre.
 * @param string $resume Le résumé du livre.
 * @return void Redirige vers la page de consultation.
 * @throws Exception Si une erreur survient lors de l'ajout d'un livre.
 */
function ajouterLivre($titre, $auteur, $annee, $resume) {
    try {
        $db = DbConnexion();
        $sql = "INSERT INTO games (name, author, year, summary) VALUES (:titre, :auteur, :annee, :resume)";
        $statement = $db->prepare($sql);
        $statement->bindParam(':titre', $titre, PDO::PARAM_STR);
        $statement->bindParam(':auteur', $auteur, PDO::PARAM_STR);
        $statement->bindParam(':annee', $annee, PDO::PARAM_INT);
        $statement->bindParam(':resume', $resume, PDO::PARAM_STR);
        $statement->execute();
        header("location:..\index.php?page=consultation");
    } catch (PDOException $e) {
        throw new Exception("Une erreur est survenue lors de l'ajout du livre.");
    }
}

/**
 * Fonction de supression d'un livre dans la base de données.
 * La fonction a simplement besoin de l'id du livre dans la base de données.
 * @param int $id L'identifiant du livre.
 * @return void Redirige vers la page de consultation.
 * @throws Exception Si une erreur survient lors de la supression d'un livre.
 */
function supprId($id) {
    try {
        $db = DbConnexion();
        $sql = "DELETE FROM games WHERE id=:id";
        $statement = $db->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        header("location:..\index.php?page=consultation");
    } catch (PDOException $e) {
        throw new Exception("Une erreur est survenue lors de la suppression du livre.");
    }
}

/**
 * Fonction de supression d'un livre dans la base de données.
 * La fonction a simplement besoin de l'id du livre dans la base de données.
 * @param int $id L'identifiant du livre.
 * @return void Redirige vers la page de consultation.
 * @throws Exception Si une erreur survient lors de la supression d'un livre.
 */
function afficherLivre($id) {
    $db = DbConnexion();
    $sql = "SELECT * FROM games WHERE id=:id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function modifierLivre($id, $titre, $auteur, $annee, $resume) {
    try {
        $db = DbConnexion();
        $sql = "UPDATE games SET name = :titre, author = :auteur, year = :annee, summary = :resume WHERE id = :id";
        $statement = $db->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':titre', $titre, PDO::PARAM_STR);
        $statement->bindParam(':auteur', $auteur, PDO::PARAM_STR);
        $statement->bindParam(':annee', $annee, PDO::PARAM_INT);
        $statement->bindParam(':resume', $resume, PDO::PARAM_STR);
        $statement->execute();
        header("location:..\index.php?page=consultation");
    } catch (PDOException $e) {
        echo "Erreur lors de la modification du livre : " . $e->getMessage();
    }
}

function rechercherLivre($mot) {
    $db = DbConnexion();
    $res_rech = array();
    $sql_name = "SELECT * FROM games WHERE name LIKE :mot";
    $sql_author = "SELECT * FROM games WHERE author LIKE :mot";
    $statement_name = $db->prepare($sql_name);
    $statement_author = $db->prepare($sql_author);
    $mot_like = "%$mot%";
    $statement_name->bindParam(':mot', $mot_like, PDO::PARAM_STR);
    $statement_author->bindParam(':mot', $mot_like, PDO::PARAM_STR);
    $statement_name->execute();
    $statement_author->execute();
    $res_rech['titre'] = $statement_name->fetchAll(PDO::FETCH_ASSOC);
    $res_rech['auteur'] = $statement_author->fetchAll(PDO::FETCH_ASSOC);
    return $res_rech;
}