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
    <div class="titre-section"><h2 class="text-white">Gestion des données</h2></div>
    <div class="gestion">
    <ul>
        <li>Gestion des <a href="table1_gestion.php">joueurs</a></li>
        <li>Gestion des <a href="table2_gestion.php">tournois</a></li>
    </ul>
    </div>
</main>
</body>
</html>