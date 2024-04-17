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
        $db = new PDO('mysql:host=localhost;port=3306;dbname=db_jeux;charset=utf8', 'root', 'root');
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
 * @return false|string Renvoie un tableau de tableau contenant tous les tuples de la base de données.
 * @throws Exception Si une erreur survient lors de l'affichage des livres.
 */
function DbAfficher() {
    try {
        $db = DbConnexion();
        $sql = "SELECT * FROM games";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    } catch (PDOException $e) {
        throw new Exception("Une erreur est survenue lors de l'affichage des livres.");
    }
}




