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
    }
    else if($page == "snake"){
        DisplaySnake();
    }
    else {
        Display404();
    }

/**
 * Ces conditions analysent des variables en POST ou en GET, et ont des conditions plus spécifiques
 * Si elle existe et qu'elle n'est pas vide, elle redirige vers une fonction de "controller.php" selon sa valeur
 * Sinon elle redirige vers l'acceuil
 */
}else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['isAjout']) && $_POST['isAjout'] && isset($_POST['Livre']) && !empty($_POST['Livre'])) {
    $livre = $_POST['Livre'];
    Ajouter($livre);

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['isSuppr']) && $_POST['isSuppr'] && isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    SupprLivre($id);

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['isModif1']) && $_POST['isModif1'] && isset($_POST['idLivre']) && !empty($_POST['idLivre'])) {
    $id = $_POST['idLivre'];
    DisplayModif2($id);

}else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['isModif2']) && $_POST['isModif2'] && isset($_POST['Livre']) && !empty($_POST['Livre'])) {
    $livre = $_POST['Livre'];
    Modifier($livre);

}else if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['res_rech']) && !empty($_GET['res_rech'])){
    $mot = $_GET['res_rech'];
    DisplayRechercher($mot);

}else{
    DisplayAccueil();
}
