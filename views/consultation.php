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

<nav>
    <ul>
        <li><a href="?page=accueil">Accueil</a></li>
        <li><a href="?page=ajout">Ajouter</a></li>
    </ul>
</nav>

<div class="container">
    <h2>Liste des jeux</br></h2>
    <div class="recherche">
        <form>
            <label for="rechercher">Rechercher :
            <input type="text" name="rechercher"></label>
        </form>
    </div>


    <table border="1">
    <tr>
        <th>Année</th>
        <th>Titre</th>
        <th>Studio</th>
        <th>Résumé</th>
        <th>Options</th>
    </tr>
    <?php foreach ($data as $tab): ?>
    <tr>
        <td><?php echo $tab['year']; ?></td>
        <td><?php echo $tab['name']; ?></td>
        <td><?php echo $tab['author']; ?></td>
        <td><?php echo $tab['summary']; ?></td>
        <td>
                <!-- Bouton de suppression pour chaque livre -->
                <form action="index.php?action=submitForm" method="post">
                    <!-- Champs cachés pour l'identifiant du livre à supprimer -->
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="delete_id" value="<?php echo $tab['id']; ?>">
                    <button type="submit">Supprimer</button>
                </form>
                 <!-- Bouton "Modifier" qui ouvre une pop-up -->
                 <a class="open-modal" href="./?page=modification&id=<?php echo $tab['id']; ?>">Modifier</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>

<footer>
    <p>&copy; 2024 TimeWarp. Tous droits réservés.</p>
</footer>

</body>
</html>
