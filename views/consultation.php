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
    <h1>Consultations des jeux</h1>
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
            <th>Nom</th>
            <th>Studio</th>
            <th>Support</th>
            <th>Année</th>
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
