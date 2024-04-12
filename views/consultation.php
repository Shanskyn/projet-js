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
                <form action="../index.php?action=submitForm" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="delete_id" value="<?php echo $tab['id']; ?>">
                    <button type="submit">Supprimer</button>
                </form>
                 <a class="open-modal" href="./?page=modification&id=<?php echo $tab['id']; ?>">Modifier</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
<?php
require("footer.html")
?>
</html>
