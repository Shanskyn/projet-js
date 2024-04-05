<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification - Site Vitrine</title>
    <link rel="stylesheet" href="../assets/css/ajout.css">
</head>
<body>

<header>
    <h1>Ajout d'un Titre</h1>
</header>

<nav>
    <ul>
        <li><a href="?page=accueil">Accueil</a></li>
        <li><a href="?page=consultation">Consultation</a></li>
    </ul>
</nav>

<form action="index.php?action=submitForm" method="post">
    <!-- Champs pour les informations du livre -->
    <label for="title">Titre:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="author">Auteur:</label>
    <input type="text" id="author" name="author" required><br>

    <label for="year">Année:</label>
    <input type="number" id="year" name="year" required><br>

    <label for="summary">Résumé:</label>
    <textarea id="summary" name="summary" ></textarea><br>

    <!-- Boutons pour les actions -->
    <button type="submit" name="action" value="add">Ajouter</button>
</form>



<footer>
    <p>&copy; 2024 Mon Site Vitrine. Tous droits réservés.</p>
</footer>

</body>
</html>
