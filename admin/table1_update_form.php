<!DOCTYPE html>
<html>
<head>
    <title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
<a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
<hr>
<h1>Modifier une bande dessinée</h1>
<hr />
<?php
require '../lib_crud.inc.php';

$id=$_GET['num'];
$co=connexionBD();
$joueur=getJoueur($co, $id);
var_dump($joueur);
deconnexionBD($co);
?>
<form action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="num" value="<?= $id; ?>" />
    Prénom : <input type="text" name="prenom" value="<?= $joueur['player_firstname']; ?>" required /><br />
    Nom : <input type="text" name="nom" value="<?= $joueur['player_lastname'] ?>" required /><br />
    Nationalité : <input type="text" name="nation" value="<?= $joueur['player_nation'] ?>" required /><br />
    Âge : <input type="number" name="age" min="0" max="100" step="1" value="<?= $joueur['player_age'] ?>" required /><br />
    Taille : <input type="text" name="taille" value="<?= $joueur['player_height'] ?>" required><br />
    Classement : <input type="number" name="classement" min="0" max="1000" step="1" value="<?= $joueur['player_atprank'] ?>" required /><br />
    Points ATP : <input type="number" name="point" min="0" max="15000" step="1" value="<?= $joueur['player_atppoint'] ?>" required /><br />
    <p><?= $joueur['image_name'] ?></p>
    Image : <input type="file" name="photo" value="../img/bds/<?= $joueur['image_name'] ?>" required /><br />
    <input type="submit" value="Modifier" />
</form>
</body>
</html>