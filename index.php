<?php

/**
 * Redirection des requêtes du site
 *
 * Ce fichier est le routeur redirigeant les différentes requêtes du site, permettant la navigation
 *
 * @author Shansky
 * @date 03/19/2024
 */

require __DIR__ . '/vendor/autoload.php';
use App\Controllers\controller;
$controller = new controller();

<<<<<<< HEAD
require("controllers/controller.php");
/**
 * Ces conditions analysent les variables en GET, c'est via "menu.html" que c'est essentiellement utilisé
 * Si elle existe et qu'elle n'est pas vide, elle redirige vers une fonction de "controller.php" selon sa valeur
 * Sinon elle redirige vers l'acceuil
 */
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = htmlspecialchars($_GET["page"]);
    if($page == "accueil"){
        DisplayAccueil();
    }else if($page == "consultation"){
        DisplayConsultation();
    }else if($page == "modification"){
        DisplayModification();
    }else if($page == "phpinfo") {
        DisplayInfoPHP();
    }else if($page == "ajout"){
        DisplayAjouter();
    }else if($page == "404"){
        Display404();
=======
$page = $_SERVER['REQUEST_URI'] ?? '/';
$serverMethod = $_SERVER["REQUEST_METHOD"];

/*if ($serverMethod === "DELETE"){Z
    header("Content-Type: application/json");
    echo json_encode([
        "key" => "value"
    ]);
    die();
}*/

if ($page === "/")
    try {
        $controller->DisplayAccueil();
    } catch (Exception $e) {
>>>>>>> 3597d04884e1c3250a117e186084c6d01af15751
    }
else if ($page === "/api/games")
    try {
        $controller->GameListAPI();
    } catch (Exception $e) {
    }
else if ($page === "/consultation")
    try {
        $controller->DisplayConsultation();
    } catch (Exception $e) {
    }
else if ($page === "/accueil")
    try {
        $controller->DisplayAccueil();
    } catch (Exception $e) {
    }
else if ($page === "/test")
    try {
        $controller->DisplayTest();
    } catch (Exception $e) {
    }
else if ($page === "/snake")
    try {
        $controller->DisplaySnake();
    } catch (Exception $e) {
    }
else if ($page === "/404")
    try {
        $controller->Display404();
    } catch (Exception $e) {
    }
else
    try {
        $controller->Display404();
    } catch (Exception $e) {
    }

die();
