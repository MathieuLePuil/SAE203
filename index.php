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
            <a href="http://www.mmi21b12.sae203.ovh/">
                <label class="logo">Tennis</label></a>
            <ul>
                <li><a href="index.php" class="active anav">Accueil</a></li>
                <li><a href="atp.php" class="anav">l'ATP</a></li>
                <li><a href="admin.php" class="anav" target="_blank">Administrateur</a></li>
                <li><a href="recherche.php" class="anav">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <h1>ATP Tennis</h1>
    <h3>Le site du classement et des tournois de l'ATP</h3>

<?php
    require("fin.php");
?>