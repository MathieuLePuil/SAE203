<?php
require("debut.php");
?>
<title>ATP Tennis | Recherche</title>

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
            <li><a href="listing.php" class="anav">l'ATP</a></li>
            <li><a href="admin/admin.php" class="anav" target="_blank">Administrateur</a></li>
            <li><a href="form_recherche.php" class="active anav">Recherche</a></li>
        </ul>
    </nav>
</header>

<main>
    <?php
    require 'lib_crud.inc.php';
    $co=connexionBD();
    $player=$_POST['player'];
    if (strpos($player, " ") !== false) {
        echo '<div class="titre-section"><h2 class="text-white">Résultats</h2></div>';
        echo '<div class="classement">';
        $parts=explode(" ", $player);
        afficherResultatRechercheNom($co, $parts[0], $parts[1]);
    } else {
        echo '<div class="titre-section"><h2 class="text-white">Résultats</h2></div>';
        echo '<div class="classement">';
        afficherResultatRechercheNom($co, $player, "");
        echo '<div class="classement">';
        afficherResultatRechercheNom($co, "", $player);
    }

    deconnexionBD($co);
    ?>
</main>

<?php
require("footer.php");
require("fin.php");
?>
