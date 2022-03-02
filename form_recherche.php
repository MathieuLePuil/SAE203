<?php
require("debut.php");
?>
    <title>ATP Tennis | Home</title>

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
                <li><a href="atp.php" class="anav">l'ATP</a></li>
                <li><a href="admin.php" class="anav" target="_blank">Administrateur</a></li>
                <li><a href="form_recherche.php" class="active anav">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <p>
            <form action="form_recherche.php" data-parsley-validate>
                <label for="real">Entrez un nom de joueur de tennis :</label>
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
                    <option value="SInner">
                </datalist>
                <label for="point_mini">Point ATP minimum</label>
                <input type="number" id="point_mini" name="point_mini" value="1000" data-parsley-length="[1000, 9000]" data-parsley-type="integer">
                <input class="btn btn-primary" type="submit" value="Rechercher" id="submit">
            </form>
        </p>
    </main>



<?php
    require("fin.php");
?>
