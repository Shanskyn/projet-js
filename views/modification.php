<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre - Site Vitrine</title>
    <link rel="stylesheet" href="../assets/css/modification.css">
</head>
<body>

<header>
    <h1>Modification d'un Titre</h1>
</header>

<nav>
    <ul>
        <li><a href="?page=accueil">Accueil</a></li>
        <li><a href="?page=ajout">Ajouter</a></li>
        <li><a href="?page=consultation">Consultation</a></li>
    </ul>
</nav>

<div class="container">
    <h2>Modifier un livre</h2>
    <form action="index.php?action=submitForm" method="post">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="book_id" value="<?php echo $book['id']; ?>">
        <label for="title">Titre:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $book['name']; ?>" required><br>
        <label for="author">Auteur:</label><br>
        <input type="text" id="author" name="author" value="<?php echo $book['author']; ?>" required><br>
        <label for="year">Année:</label><br>
        <input type="text" id="year" name="year" value="<?php echo $book['year']; ?>" title="Entrez une année valide"><br>
        <label for="summary">Résumé:</label><br>
        <textarea id="summary" name="summary" ><?php echo $book['summary']; ?></textarea><br>
        <button type="submit">Enregistrer</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Mon Site Vitrine. Tous droits réservés.</p>
</footer>

</body>
</html>