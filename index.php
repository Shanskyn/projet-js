<?php

/**
 * Redirection des requêtes du site
 *
 * Ce fichier est le routeur redirigeant les différentes requêtes du site, permettant la navigation
 *
 * @author Shansky
 * @date 03/19/2024
 */

require("controllers/controller.php");

$page = $_SERVER['REQUEST_URI'] ?? '/';
$serverMethod = $_SERVER["REQUEST_METHOD"];

/*if ($serverMethod === "DELETE"){
    header("Content-Type: application/json");
    echo json_encode([
        "key" => "value"
    ]);
    die();
}*/

if ($page === "/")
    try {
        DisplayAccueil();
    } catch (Exception $e) {
    }
else if ($page === "/api/games")
    try {
        GameListAPI();
    } catch (Exception $e) {
    }
else if ($page === "/consultation")
    try {
        DisplayConsultation();
    } catch (Exception $e) {
    }
else if ($page === "/test")
    try {
        DisplayTest();
    } catch (Exception $e) {
    }
else if ($page === "/snake")
    try {
        DisplaySnake();
    } catch (Exception $e) {
    }
else if ($page === "/404")
    try {
        Display404();
    } catch (Exception $e) {
    }
else
    try {
        Display404();
    } catch (Exception $e) {
    }

die();
