<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link rel="stylesheet" href="../assets/css/consultation.css">
</head>
<body>

<header>
    <a href="http://projet/?page=accueil">
        <img src="../assets/img/logo.png" alt="TimeWarp">
    </a>
  <h1 class="titre">Profitez du passé avec la modernité du futur</h1>
  <label class="switch">
    <input type="checkbox" id="logSwitch">
    <span class="slider"></span>
  </label>
</header>

<?php
require("menu.html")
?>

<div id="container">
    <h1>Liste des Jeux</h1>
    <input type="text" id="inputRecherche" placeholder="Rechercher...">
    <button id="boutonRechercher">Rechercher</button>
    <label for="selectFiltre">Filtre :
        <select id="selectFiltre">
            <option value="Nom">Nom</option>
            <option value="Editeur">Editeur</option>
            <option value="Studio">Studio</option>
        </select>
    </label>
    <table id="jeux-liste">
        <thead>
        <tr>
            <th id="titre">Titre</th>
            <th id="studio">Studio</th>
            <th id="editeur">Editeur</th>
            <th id="annee">Année</th>
            <th id="sommaire">Sommaire</th>
            <th id="genre">Genre</th>
            <th id="support">Support</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <script src="../assets/js/consultation.js"></script>
</div>
</body>
<?php
require("footer.html")
?>
</html>
