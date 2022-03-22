<!DOCTYPE html>
<html>
<head>
    <title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
<a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
<hr />
<h1>Ajouter un tournoi</h1>
<hr />
<form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="num" value="<?= $id; ?>" />
    Pays du tournoi : <input type="text" name="pays" required /><br />
    Ville du tournoi : <input type="text" name="ville" required /><br />
    Date du tournoi : <input type="text" name="date" required /><br />
    Type de tournoi : <input type="text" name="type" required /><br />
    Vainqueur : <select name="gagnant" required>
        <?php
        require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherJoueurOptions($co);
            deconnexionBD($co);
        ?>
    </select><br />
    Image : <input type="file" name="photo" required /><br />
    <input type="submit" value="Ajouter" />
</form>
</body>
</html>