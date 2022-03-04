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
        <a href="http://mmi21b12.sae203.ovh/index.php">
            <label class="logo">Tennis</label></a>
        <ul>
            <li><a href="index.php" class="anav">Accueil</a></li>
            <li><a href="listing.php" class="anav">l'ATP</a></li>
            <li><a href="admin.php" class="anav" target="_blank">Administrateur</a></li>
            <li><a href="form_recherche.php" class="active anav">Recherche</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2 class="text-white h2">Réponse de la recherche</h2>

</main>

<?php
require("footer.php");
require("fin.php");
?>
