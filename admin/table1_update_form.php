<?php
require '../debut.php';
?>
<title>ATP Tennis | Administrateur</title>
<link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
    <div class="logotxt logo">
        <img src="../assets/LOGO.png" alt="Logo de l'ATP" id="logohg" width="50" height="50">
    </div>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <a href="https://mmi21b12.sae203.ovh/index.php">
            <label class="logo">Tennis</label></a>
        <ul>
            <li><a href="../index.php" class="anav">Accueil</a></li>
            <li><a href="../listing.php" class="anav">l'ATP</a></li>
            <li><a href="admin.php" class="active anav" target="_blank">Administrateur</a></li>
            <li><a href="../form_recherche.php" class="anav">Recherche</a></li>
        </ul>
    </nav>
</header>
<main>
    <a class="back-gestion" href="admin.php">< Revenir à la page de gestion</a>
    <div class="titre-section"><h2 class="text-white">Modifier un joueur</h2></div>
    <div class="form_new_form1">
        <?php
            require '../lib_crud.inc.php';

            $id=$_GET['num'];
            $co=connexionBD();
            $joueur=getJoueur($co, $id);
            deconnexionBD($co);
        ?>
        <form class="form_addplayer" action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
            <div class="haut_form"></div>
            <input type="hidden" name="num" value="<?= $id; ?>" />
            Prénom : <input type="text" name="prenom" value="<?= $joueur['player_firstname']; ?>" required /><br />
            Nom : <input type="text" name="nom" value="<?= $joueur['player_lastname'] ?>" required /><br />
            Nationalité : <input type="text" name="nation" value="<?= $joueur['player_nation'] ?>" required /><br />
            Âge : <input type="number" name="age" min="0" max="100" step="1" value="<?= $joueur['player_age'] ?>" required /><br />
            Taille : <input type="text" name="taille" value="<?= $joueur['player_height'] ?>" required><br />
            Classement : <input type="number" name="classement" min="0" max="1000" step="1" value="<?= $joueur['player_atprank'] ?>" required /><br />
            Points ATP : <input type="number" name="point" min="0" max="15000" step="1" value="<?= $joueur['player_atppoint'] ?>" required /><br />
            Image : <input type="file" name="photo" value="../img/bds/<?= $joueur['image_name'] ?>" required /><br />
            <input type="submit" value="Modifier" class="button_add" />
        </form>
    </div>
</body>
</html>