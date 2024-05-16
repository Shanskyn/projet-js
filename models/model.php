<?php
/**
 * Le modèle pour la base de données.
 *
 * Ce fichier est le modèle permettant d'agir avec la base de données avec des requêtes SQL.
 *
 * @author Shansky
 * @date 03/19/2024
 */

require __DIR__ . '/../vendor/autoload.php';

/**
 * Fonction de connexion avec la base de données.
 * Nécessaire pour agir avec la base via d'autres fonctions.
 * @return PDO Renvoie les paramètres de connexion à la base de données.
 * @throws Exception Si il y a une erreur lors de la connexion à la base de données.
 */
function DbConnexion(): PDO
{
    try{
        return new PDO('mysql:host=localhost;port=3306;dbname=db_jeux;charset=utf8', 'root', 'root');
    }
    catch(PDOException|Exception $e) {
        throw new Exception("Une erreur est survenue lors de la connexion à la base de données.");
}
}

/**
 * Fonction d'affichage de toute la base de données.
 * Nécessaire pour la page de consultation.
 * @return false|string Renvoie un tableau de tableau contenant tous les tuples de la base de données.
 * @throws Exception Si une erreur survient lors de l'affichage des jeux.
 */
function DbAPIjeux(): false|string
{
    try {
        $db = DbConnexion();
        $sql = "SELECT * FROM jeux";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    } catch (PDOException|Exception $e) {
        throw new Exception("Une erreur est survenue lors du renvoi des jeux en .json.");
    }
}

/**
 * Fonction d'affichage de toute la base de données.
 * Nécessaire pour la page de consultation.
 * @return false|string Renvoie un tableau de tableau contenant tous les tuples de la base de données.
 * @throws Exception Si une erreur survient lors de l'affichage des consoles.
 */
function DbAPIconsoles(): false|string
{
    try {
        $db = DbConnexion();
        $sql = "SELECT * FROM console";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    } catch (PDOException|Exception $e) {
        throw new Exception("Une erreur est survenue lors du renvoi des consoles en .json.");
    }
}




