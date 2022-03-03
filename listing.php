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
        <div class="atptour">
            <img src="assets/BANNER.png" alt="Image ATP Tour" id="atptour">
        </div>
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
                echo '<div class="titre-section"><h2 class="text-white">Classement ATP</h2></div>';
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



        $tournament = "SELECT `tournoi_city`, `player_firstname`, `image_name_tournament`, `tournoi_countrie`, `tournoi_day`, `tournoi_type`, `player_lastname`  FROM `atp_tournament` 
	                INNER JOIN atp_player
	                ON atp_tournament.winner_id = atp_player.player_id";
        try {
            // exécuter la requête
            $resultat = $mabd->query($tournament);
        } catch (PDOException $e) {
            print "Erreur : ".$e->getMessage().'<br />';
            die();
        }

        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat>0) { // y a-t-il des résultats ?
            // oui : pour chaque résultat : afficher
            echo '<div class="titre-section"><h2 class="text-white h2">Tournois ATP</h2></div>';
            echo '<div class="classement">';
            while($ligne = $resultat->fetch()) {
                echo '<div class="fiche_player">';
                echo '<img src="assets/tournament/'.$ligne['image_name_tournament'].'" alt="'.$ligne['tournoi_city'].' '.$ligne['tournoi_countrie'].'" height="112" width="200">';
                echo '<h4>'.$ligne['tournoi_city'].', '.$ligne['tournoi_countrie'].'</h4>';
                echo '<p>Date : '.$ligne['tournoi_day'].' <br /> Type : '.$ligne['tournoi_type'].'</p>';
                echo '<h4> 🏆'.$ligne['player_firstname'].' '.$ligne['player_lastname'].'</h4></div>';
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
