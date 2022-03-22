<?php
    require 'debut.php';
?>
    <title>ATP Tennis | Classement et Tournois</title>
</head>
<body>
    <header>
        <div class="logotxt logo">
            <img src="assets/LOGO.png" alt="Logo de l'ATP" id="logohg" width="50" height="50">
        </div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="https://mmi21b12.sae203.ovh/index.php">
                <label class="logo">Tennis</label></a>
            <ul>
                <li><a href="index.php" class="anav">Accueil</a></li>
                <li><a href="listing.php" class="active anav">l'ATP</a></li>
                <li><a href="admin/admin.php" class="anav" target="_blank">Administrateur</a></li>
                <li><a href="form_recherche.php" class="anav">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="atptour">
            <img src="assets/BANNER.png" alt="Image ATP Tour" id="atptour">
        </div>
        <?php
            require 'lib_crud.inc.php';
            $co=connexionBD();
            afficherJoueur($co);
            afficherTournoi($co);
            deconnexionBD($co); // fermer la connexion
        ?>
    </main>




<?php
    require("footer.php");
    require("fin.php");
?>
