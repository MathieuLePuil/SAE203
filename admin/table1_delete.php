<!DOCTYPE html>
<html>
<head>
    <title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
<a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
<hr />
<h1>Supprimer un joueur</h1>
<hr />
<?php
require '../lib_crud.inc.php';

$id=$_GET['num'];

$co=connexionBD();
effaceJoueur($co, $id);
deconnexionBD($co);
?>
</body>
</html>