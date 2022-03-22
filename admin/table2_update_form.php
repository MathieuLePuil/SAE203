<!DOCTYPE html>
<html>
<head>
    <title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
<a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
<hr>
<h1>Modifier un tournoi</h1>
<hr />
<?php
require '../lib_crud.inc.php';

$id=$_GET['num'];
$co=connexionBD();
$tournoi=getTournoi($co, $id);
var_dump($tournoi);
?>
<form action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="num" value="<?= $id; ?>" />
    Pays du tournoi : <input type="text" name="pays" value="<?= $tournoi['tournoi_countrie'] ?>" required /><br />
    Ville du tournoi : <input type="text" name="ville"  value="<?= $tournoi['tournoi_city'] ?>" required /><br />
    Date du tournoi : <input type="text" name="date" value="<?= $tournoi['tournoi_day'] ?>" required /><br />
    Type de tournoi : <input type="text" name="type"  value="<?= $tournoi['tournoi_type'] ?>" required /><br />
    Vainqueur : <select name="gagnant" required>
        <?php
        afficherJoueurOptions($co);
        deconnexionBD($co);
        ?>
    </select><br />
    Image : <input type="file" name="photo" required /><br />
    <input type="submit" value="Ajouter" />
</form>
</body>
</html>