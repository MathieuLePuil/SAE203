<?php
// LIBRAIRIE "lib_crud.inc.php"
// 2022 - BUT MMI - IUT Troyes - URCA
// JL

// insertion des dépendances
require 'secretxyz123.inc.php';

// connexion à la base de données
function connexionBD()
{
    // on initialise la variable de connexion à null
    // $mabd = null;
    try {
        // on essaie de se connecter
        // le port et le dbname ci-dessous sont À ADAPTER à vos données
        $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
                dbname=sae203;charset=UTF8;',
            LUTILISATEUR, LEMOTDEPASSE);
        // on passe le codage en utf-8
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // on retourne la variable de connexion
    return $mabd;
}

// déconnexion de la base de données
function deconnexionBD(&$mabd) {
    // on se déconnecte en mettant la variable de connexion à null
    $mabd=null;
}

function afficherJoueur($mabd)
{
    $req = "SELECT * FROM atp_player";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    $lignes_resultat = $resultat->rowCount();
    if ($lignes_resultat > 0) { // y a-t-il des résultats ?
        // oui : pour chaque résultat : afficher
        echo '<div class="titre-section"><h2 class="text-white">Classement ATP</h2></div>';
        echo '<div class="classement">';
        while ($ligne = $resultat->fetch()) {
            echo '<div class="fiche_player">';
            echo '<img src="img/bds/' . $ligne['image_name'] . '" alt="' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '" height="200" width="200">';
            echo '<h4>' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '</h4>';
            echo '<p>Pays : ' . $ligne['player_nation'] . ' <br /> Âge : ' . $ligne['player_age'] . ' <br /> Taille : ' . $ligne['player_height'] . ' <br /> Classement ATP : ' . $ligne['player_atprank'] . ' <br /> Point ATP : ' . $ligne['player_atppoint'] . '</p></div>';
        }
    } else {
        echo '<p>Pas de résultat !</p>';
    }
    echo '</div>';
}

function afficherTournoi($mabd) {
    $tournament = "SELECT `tournoi_city`, `player_firstname`, `image_name_tournament`, `tournoi_countrie`, `tournoi_day`, `tournoi_type`, `player_lastname`  FROM `atp_tournament` INNER JOIN atp_player ON atp_tournament.winner_id = atp_player.player_id";
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
        echo '<div class="titre-section"><h2 class="text-white mgtoptournoi h2">Tournois ATP</h2></div>';
        echo '<div class="classement">';
        while($ligne = $resultat->fetch()) {
            echo '<div class="fiche_player">';
            echo '<img src="img/bds/'.$ligne['image_name_tournament'].'" alt="'.$ligne['tournoi_city'].' '.$ligne['tournoi_countrie'].'" height="112" width="200">';
            echo '<h4>'.$ligne['tournoi_city'].', '.$ligne['tournoi_countrie'].'</h4>';
            echo '<p>Date : '.$ligne['tournoi_day'].' <br /> Type : '.$ligne['tournoi_type'].'</p>';
            echo '<h4> 🏆'.$ligne['player_firstname'].' '.$ligne['player_lastname'].'</h4></div>';
        }
    } else {
        echo '<p>Pas de résultat !</p>';
    }
    echo '</div>';
}

function afficherListeJoueur($mabd) {
        $req = "SELECT * FROM atp_player";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat > 0) { // y a-t-il des résultats ?
            // oui : pour chaque résultat : afficher
            echo '<div class="titre-section"><h2 class="text-white">Liste des joueurs</h2></div>';
            echo '<div class="classement">';
            while ($ligne = $resultat->fetch()) {
                echo '<div class="fiche_player">';
                echo '<img src="../img/bds/' . $ligne['image_name'] . '" alt="' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '" height="200" width="200">';
                echo '<h4>' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '</h4>';
                echo '<p>Pays : ' . $ligne['player_nation'] . ' <br /> Âge : ' . $ligne['player_age'] . ' <br /> Taille : ' . $ligne['player_height'] . ' <br /> Classement ATP : ' . $ligne['player_atprank'] . ' <br /> Point ATP : ' . $ligne['player_atppoint'] . ' <br /> <a href="table1_update_form.php?num='.$ligne['player_id'].'">Modifier</a> <br /> <a href="table1_delete.php?num=' .$ligne['player_id'].'">Supprimer</a> </p></div>';
            }
        } else {
            echo '<p>Pas de résultat !</p>';
        }
        echo '</div>';
}

function afficherJoueurOptions($mabd) {
    // on sélectionne tous les auteurs de la table auteurs
    $req = "SELECT * FROM atp_player";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // pour chaque auteur, on met son id, son prénom et son nom
    // dans une balise <option>
    foreach ($resultat as $value) {
        echo '<option value="'.$value['player_id'].'">'; // id de l'auteur
            echo $value['player_firstname'].' '.$value['player_lastname']; // prénom espace nom
            echo '</option>'."\n";
        }
}

function ajouterJoueur($mabd, $prenom, $nom, $nation, $age, $taille, $classement, $point, $image)
{
    $req = "INSERT INTO atp_player (player_id, player_firstname, player_lastname, player_nation, player_age, player_height, player_atprank, player_atppoint, image_name) VALUES ('".$classement."' ,'".$prenom."', '".$nom."', '".$nation."', '".$age."', '".$taille."', '".$classement."', '".$point."', '".$image."')";
    // echo '<p>' . $req . '</p>' . "\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>Le joueur ' . $prenom . ' '. $nom . ' a été ajoutée au catalogue.</p>' . "\n";
    } else {
        echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
        die();
    }
}

function effaceJoueur($mabd, $id) {
    $req = "DELETE FROM `atp_player` WHERE player_id=".$id;
    echo '<p>'.$req.'</p>'."\n";
    try{
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount()==1) {
        echo '<p>Le joueur '.$id.' a été supprimé du catalogue.</p>'."\n";
    } else {
        echo '<p>Erreur lors de la suppression.</p>'."\n";
        die();
    }
}

// fonction de récupération des informations d'une BD
function getJoueur($mabd, $idJoueur) {
    $req = "SELECT * FROM `atp_player` WHERE player_id = ".$idJoueur;
    echo '<p>GetJoueur() : '.$req.'</p>'."\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // la fonction retourne le tableau associatif
    // contenant les champs et leurs valeurs
    return $resultat->fetch();
}

function modifierJoueur($mabd, $id, $prenom, $nom, $nation, $age, $taille, $classement, $point, $image)
{
    $req = "UPDATE `atp_player` SET `player_id` = '".$classement."', `player_firstname` = '".$prenom."', `player_lastname` = '".$nom."', `player_nation` = '".$nation."', `player_age` = '".$age."', `player_height` = '".$taille."', `player_atprank` = '".$classement."', `player_atppoint` = '".$point."', `image_name` = '".$image."', WHERE `atp_player`.`player_id` =".$id;
    echo '<p>' . $req . '</p>' . "\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>Le joueur ' . $nom . ' a été modifié.</p>' . "\n";
    } else {
        echo '<p>Erreur lors de la modification.</p>' . "\n";
        die();
    }
}

// Tournois

function afficherTournoiOptions($mabd) {
    // on sélectionne tous les auteurs de la table auteurs
    $req = "SELECT * FROM atp_tournament";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // pour chaque auteur, on met son id, son prénom et son nom
    // dans une balise <option>
    foreach ($resultat as $value) {
        echo '<option value="'.$value['tournoi_id'].'">'; // id de l'auteur
        echo $value['tournoi_countrie'].' '.$value['tournoi_city']; // prénom espace nom
        echo '</option>'."\n";
    }
}

function ajouterTournoi($mabd, $countrie, $city, $date, $type, $gagnant, $image)
{
    $req = "INSERT INTO atp_tournament (tournoi_countrie,tournoi_city, tournoi_day, winner_id, tournoi_type, image_name_tournament) VALUES ('".$countrie."' ,'".$city."', '".$date."', '".$gagnant."', '".$type."', '".$image."')";
    // echo '<p>' . $req . '</p>' . "\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>Le joueur ' . $countrie . ', '. $city . ' a été ajoutée au catalogue.</p>' . "\n";
    } else {
        echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
        die();
    }
}

function effaceTournoi($mabd, $id) {
    $req = "DELETE FROM `atp_tournament` WHERE tournoi_id=".$id;
    echo '<p>'.$req.'</p>'."\n";
    try{
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount()==1) {
        echo '<p>Le joueur '.$id.' a été supprimé du catalogue.</p>'."\n";
    } else {
        echo '<p>Erreur lors de la suppression.</p>'."\n";
        die();
    }
}

// fonction de récupération des informations d'une BD
function getTournoi($mabd, $idTournoi) {
    $req = "SELECT * FROM `atp_tournament` WHERE tournoi_id = ".$idTournoi;
    echo '<p>GetJoueur() : '.$req.'</p>'."\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // la fonction retourne le tableau associatif
    // contenant les champs et leurs valeurs
    return $resultat->fetch();
}

function modifierTournoi($mabd, $id, $countrie, $city, $date, $type, $gagnant, $image)
{
    $req = "UPDATE `atp_tournament` SET `tournoi_countrie` = '".$countrie."', `tournoi_city` = '".$city."', `tournoi_day` = '".$date."', `winner_id` = '".$gagnant."', `tournoi_type` = '".$type."', `image_name_tournament` = '".$image."' WHERE tournoi_id =".$id;
    echo '<p>' . $req . '</p>' . "\n";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        echo '<p>Le tournoi de ' . $city . ' a été modifié.</p>' . "\n";
    } else {
        echo '<p>Erreur lors de la modification.</p>' . "\n";
        die();
    }
}

function afficherListeTournoi($mabd) {
    $tournament = "SELECT `tournoi_city`, `player_firstname`, `image_name_tournament`, `tournoi_countrie`, `tournoi_day`, `tournoi_type`, `player_lastname`, `tournoi_id`  FROM `atp_tournament` INNER JOIN atp_player ON atp_tournament.winner_id = atp_player.player_id";
    try {
        // exécuter la requête
        $resultat = $mabd->query($tournament);
    } catch (PDOException $e) {
        print "Erreur : ".$e->getMessage().'<br />';
        die();
    }


    echo '</div>';
    echo '<table>'."\n";
    echo '<thead><tr><th>Image</th><th>Pays</th><th>Ville</th><th>Date</th><th>Vaiqueur</th><th>Type</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
    echo '<tbody>'."\n";
    foreach ($resultat as $value) {
        echo '<tr>'."\n";
        echo '<td><img class="photo" src="../img/bds/'.$value['image_name_tournament'].'" width="50" height="50" alt="image_'.$value['tournoi_id'].'" /></td>'."\n";
        echo '<td>'.$value['tournoi_countrie'].'</td>'."\n";
        echo '<td>'.$value['tournoi_city'].'</td>'."\n";
        echo '<td>'.$value['tournoi_day'].'</td>'."\n";
        echo '<td>'.$value['player_firstname'].' '.$value['player_lastname'].'</td>'."\n";
        echo '<td>'.$value['tournoi_type'].'</td>'."\n";
        echo '<td><a href="table2_update_form.php?num='.$value['tournoi_id'].'">Modifier</a></td>'."\n";
        echo '<td><a href="table2_delete.php?num=' .$value['tournoi_id'].'">Supprimer</a></td>'."\n";
        echo '</tr>'."\n";
    }
    echo '</tbody>'."\n";
    echo '</table>'."\n";
}

function genererDatalistJoueur($mabd) {
    // on sélectionne le nom et prénom de tous les auteurs de la table auteurs
    $req = "SELECT player_firstname, player_lastname FROM atp_player";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // pour chaque auteur, on met son nom et prénom dans une balise <option>
    foreach ($resultat as $value) {
        echo '<option value="'. $value['player_firstname'] .' '. $value['player_lastname'] .'">';
    }
}

function afficherResultatRechercheNom($mabd, $prenom, $nom)
{
    $req = "SELECT * FROM atp_player WHERE player_firstname LIKE '%" .$prenom."%' AND player_lastname LIKE '%" .$nom."%'";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    $lignes_resultat = $resultat->rowCount();
    if ($lignes_resultat > 0) { // y a-t-il des résultats ?
        // oui : pour chaque résultat : afficher
        while ($ligne = $resultat->fetch()) {
            echo '<div class="fiche_player">';
            echo '<img src="img/bds/' . $ligne['image_name'] . '" alt="' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '" height="200" width="200">';
            echo '<h4>' . $ligne['player_firstname'] . ' ' . $ligne['player_lastname'] . '</h4>';
            echo '<p>Pays : ' . $ligne['player_nation'] . ' <br /> Âge : ' . $ligne['player_age'] . ' <br /> Taille : ' . $ligne['player_height'] . ' <br /> Classement ATP : ' . $ligne['player_atprank'] . ' <br /> Point ATP : ' . $ligne['player_atppoint'] . '</p></div>';
        }
    } else {
        return;
    }
    echo '</div>';
}