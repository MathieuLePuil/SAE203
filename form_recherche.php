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
        <h2 class="text-white h2">Rechercher un joueur</h2>
        <div class="form_search">
        <p>
            <form action="form_recherche.php" data-parsley-validate>
                <label for="real">Nom :</label>
                <input type="search" list="tennis_players" id="player" name="player" />
                <datalist id="tennis_players">
                    <option value="Medvedev">
                    <option value="Djokovic">
                    <option value="Zverev">
                    <option value="Nadal">
                    <option value="Tsitsipas">
                    <option value="Berrettini">
                    <option value="Rublev">
                    <option value="Ruud">
                    <option value="Auger-Aliassime">
                    <option value="Sinner">
                </datalist>
                <label for="point_mini"> Âge : </label>
                <input type="number" id="age" name="age" value="25" data-parsley-length="[1, 40]" data-parsley-type="integer">
                <label for="point_mini">Classement ATP : </label>
                <input type="number" id="classement" name="classement" value="1" data-parsley-length="[1, 50]" data-parsley-type="integer">
                <label for="point_mini">Point ATP : </label>
                <input type="number" id="atp_point" name="atp_point" value="1000" data-parsley-length="[1, 10000]" data-parsley-type="integer">
                <input class="btn btn-primary" type="submit" value="Rechercher" id="submit">
            </form>
        </p>
        </div>
    </main>

<?php
    require("footer.php");
    require("fin.php");
?>
