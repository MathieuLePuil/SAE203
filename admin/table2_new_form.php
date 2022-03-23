<?php
    require '../debut.php';
?>
<title>ATP Tennis | Administrateur</title>
<link rel="stylesheet" href="../style/style.css">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/LOGO.png">
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
    <div class="titre-section"><h2 class="text-white">Ajouter un tournoi</h2></div>
    <div class="form_new_form1">
        <form class="form_addplayer" action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
            <div class="haut_form"></div>
            Pays du tournoi : <input type="text" name="pays" required /><br />
            Ville du tournoi : <input type="text" name="ville" required /><br />
            Date du tournoi : <input type="text" name="date" required /><br />
            Type de tournoi : <select name="type" required>
                <option value="ATP 250">ATP 250</option>
                <option value="ATP 500">ATP 500</option>
                <option value="Masters 1000">Masters 1000</option>
                <option value="Grand Chelem">Grand Chelem</option>
                <option value="Next Gen Finals">Next Gen Finals</option>
                <option value="Masters">Masters</option>
            </select><br />
            Vainqueur : <select name="gagnant" required>
                <?php
                require '../lib_crud.inc.php';
                    $co=connexionBD();
                    afficherJoueurOptions($co);
                    deconnexionBD($co);
                ?>
            </select><br />
            Image : <input type="file" name="photo" required /><br />
            <input type="submit" value="Ajouter" class="button_add" />
        </form>
    </div>
</main>
</body>
</html>