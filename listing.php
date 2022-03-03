<?php
    require("debut.php");
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
            <a href="http://mmi21b12.sae203.ovh/index.php">
                <label class="logo">Tennis</label></a>
            <ul>
                <li><a href="index.php" class="anav">Accueil</a></li>
                <li><a href="listing.php" class="active anav">l'ATP</a></li>
                <li><a href="admin.php" class="anav" target="_blank">Administrateur</a></li>
                <li><a href="form_recherche.php" class="anav">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            $UTIL='sae203';
            $PASS='Mageek51_';
            try {
                $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
    dbname=sae203;charset=UTF8;', $UTIL, $PASS);
                $mabd->query('SET NAMES utf8;');
            } catch (PDOException $e) {
                print "Erreur : ".$e->getMessage().'<br />';
                die();
            }

            $req = "SELECT * FROM atp_player"; // ou `voitures`
            try {
                // exécuter la requête
                $resultat = $mabd->query($req);
            } catch (PDOException $e) {
                print "Erreur : ".$e->getMessage().'<br />';
                die();
            }

            $lignes_resultat = $resultat->rowCount();
            if ($lignes_resultat>0) { // y a-t-il des résultats ?
                // oui : pour chaque résultat : afficher
                echo '<h2>TEST</h2><ul>';
                echo '<div class="classement">';
                while($ligne = $resultat->fetch()) {
                    echo '<div class="fiche_player">';
                    echo '<img src="assets/player/'.$ligne['image_name'].'" alt="'.$ligne['player_firstname'].' '.$ligne['player_lastname'].'" height="200" width="200">';
                    echo '<h4>'.$ligne['player_firstname'].' '.$ligne['player_lastname'].'</h4>';
                    echo '<p>Pays : '.$ligne['player_nation'].' <br /> Âge : '.$ligne['player_age'].' <br /> Taille : '.$ligne['player_height'].' <br /> Classement ATP : '.$ligne['player_atprank'].' <br /> Point ATP : '.$ligne['player_atppoint'].'</p></div>';
                }
            } else {
                echo '<p>Pas de résultat !</p>';
            }
            echo '</div>';
            $mabd = null; // fermer la connexion

        ?>
    </main>




<?php
    require("fin.php");
?>
