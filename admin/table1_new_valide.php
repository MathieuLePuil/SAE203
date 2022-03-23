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
    <a class="back-gestion" href="admin.php">< Revenir à la page de gestion</a>
    <div class="titre-section"><h2 class="text-white">Ajout d'un joueur</h2></div>
    <?php
    require '../lib_crud.inc.php';

    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $nation=$_POST['nation'];
    $age=$_POST['age'];
    $taille=$_POST['taille'];
    $classement=$_POST['classement'];
    $point=$_POST['point'];
    // var_dump($_POST);
    // var_dump($_FILES);

    $imageType=$_FILES["photo"]["type"];
    if ( ($imageType != "image/png") &&
        ($imageType != "image/jpg") &&
        ($imageType != "image/jpeg") &&
        ($imageType != "image/webp") ) {
        echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
        echo 'Seuls les formats PNG, Webp et JPEG sont autorisés.</p>'."\n";
        die();
    }

    $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];

    if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
        if(!move_uploaded_file($_FILES["photo"]["tmp_name"],
            "../images/uploads/".$nouvelleImage)) {
            echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
            die();
        }
    } else {
        echo '<p>Problème : image non chargée...</p>'."\n";
        die();
    }

    $co=connexionBD();
    ajouterJoueur($co, $prenom, $nom, $nation,
        $age, $taille, $classement, $point, $nouvelleImage);
    deconnexionBD($co);
    ?>
</main>
</body>
</html>