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
    }
else if ($page === "/api/jeux")
    try {
        $controller->ListerAPIJeux();
    } catch (Exception $e) {
    }
else if ($page === "/api/consoles")
    try {
        $controller->ListerAPIConsoles();
    } catch (Exception $e) {
    }
else if ($page === "/consultation/jeux")
    try {
        $controller->DisplayConsultationJeux();
    } catch (Exception $e) {
    }
else if ($page === "/consultation/consoles")
    try {
        $controller->DisplayConsultationConsoles();
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
