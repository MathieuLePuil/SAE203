<!DOCTYPE html>
<html>
<head>
    <title>SAE203</title>
</head>
<body>
<a href="../index.php">Accueil</a>
<hr />
<h1>Gestion des données</h1>

<p><a href="table2_new_form.php">Ajouter un tournoi</a></p>
<?php
require '../lib_crud.inc.php';
$co=connexionBD();
afficherListeTournoi($co);
deconnexionBD($co);
?>
</body>
</html>