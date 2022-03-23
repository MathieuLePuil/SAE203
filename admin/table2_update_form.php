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
    <div class="titre-section"><h2 class="text-white">Modifier un tournoi</h2></div>
    <div class="form_new_form1">
        <?php
            require '../lib_crud.inc.php';

            $id=$_GET['num'];
            $co=connexionBD();
            $tournoi=getTournoi($co, $id);
        ?>
        <form class="form_addplayer" action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
            <div class="haut_form"></div>
            <input type="hidden" name="num" value="<?= $id; ?>" />
            Pays du tournoi : <input type="text" name="pays" value="<?= $tournoi['tournoi_countrie'] ?>" required /><br />
            Ville du tournoi : <input type="text" name="ville"  value="<?= $tournoi['tournoi_city'] ?>" required /><br />
            Date du tournoi : <input type="text" name="date" value="<?= $tournoi['tournoi_day'] ?>" required /><br />
            Type de tournoi : <select name="type" value="<?= $tournoi['tournoi_type'] ?>" required>
                <?php
                    if ($tournoi['tournoi_type'] == 'ATP 250') {
                        echo '<option value="ATP 250" selected>ATP 250</option><option value="ATP 500">ATP 500</option><option value="Masters 1000">Masters 1000</option><option value="Grand Chelem">Grand Chelem</option><option value="Next Gen Finals">Next Gen Finals</option><option value="Masters">Masters</option>';
                    } if ($tournoi['tournoi_type'] == 'ATP 500') {
                        echo '<option value="ATP 250">ATP 250</option><option value="ATP 500" selected>ATP 500</option><option value="Masters 1000">Masters 1000</option><option value="Grand Chelem">Grand Chelem</option><option value="Next Gen Finals">Next Gen Finals</option><option value="Masters">Masters</option>';
                    } if ($tournoi['tournoi_type'] == 'Masters 1000') {
                        echo '<option value="ATP 250">ATP 250</option><option value="ATP 500">ATP 500</option><option value="Masters 1000" selected>Masters 1000</option><option value="Grand Chelem">Grand Chelem</option><option value="Next Gen Finals">Next Gen Finals</option><option value="Masters">Masters</option>';
                    } if ($tournoi['tournoi_type'] == 'Grand Chelem') {
                        echo '<option value="ATP 250">ATP 250</option><option value="ATP 500">ATP 500</option><option value="Masters 1000">Masters 1000</option><option value="Grand Chelem" selected>Grand Chelem</option><option value="Next Gen Finals">Next Gen Finals</option><option value="Masters">Masters</option>';
                    } if ($tournoi['tournoi_type'] == 'Next Gen Finals') {
                        echo '<option value="ATP 250">ATP 250</option><option value="ATP 500">ATP 500</option><option value="Masters 1000">Masters 1000</option><option value="Grand Chelem">Grand Chelem</option><option value="Next Gen Finals" selected>Next Gen Finals</option><option value="Masters">Masters</option>';
                    } if ($tournoi['tournoi_type'] == 'Masters') {
                        echo '<option value="ATP 250">ATP 250</option><option value="ATP 500">ATP 500</option><option value="Masters 1000">Masters 1000</option><option value="Grand Chelem">Grand Chelem</option><option value="Next Gen Finals">Next Gen Finals</option><option value="Masters" selected>Masters</option>';
                    }
                ?>
            </select><br />
            Vainqueur : <select name="gagnant" required>
                <?php
                    afficherJoueurOptionsSelectionne($co, $tournoi['winner_id']);
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