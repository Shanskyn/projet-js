<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <link rel="stylesheet" href="../assets/css/consultation.css">
</head>
<body>

<?php
require("menu.html")
?>

<div id="container">
    <h1>Liste des Jeux</h1>
    <div id="jeux-container">
        <!-- Les cartes de jeux seront injectées par JavaScript -->
    </div>
    <script src="../assets/js/consultation.js"></script>
</div>
</body>
<?php
require("footer.html")
?>
</html>