<!--ssh mmi21b12@mmi21b12.mmi-troyes.fr ./pullrequest.sh-->

<?php
    require("debut.php");
?>
    <title>ATP Tennis | Home</title>
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
                <label class="logo">TEST</label></a>
            <ul>
                <li><a href="index.php" class="active anav">Accueil</a></li>
                <li><a href="listing.php" class="anav">l'ATP</a></li>
                <li><a href="admin.php" class="anav" target="_blank">Administrateur</a></li>
                <li><a href="form_recherche.php" class="anav">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="atptour">
            <img src="assets/BANNER.png" alt="Image ATP Tour" id="atptour">
        </div>
        <section id="what-atp">
            <div class="titre-section"><h2 class="text-white h2">ATP Tennis</h2></div>
            <h3 class="text-white h3">Qu'est-ce que l'ATP ?</h3>
            <div class="text-white" id="what-atp-div">
                <p>L'Association of Tennis Professionals (ATP) est créée en septembre 1972 par les joueurs de tennis Donald Dell, Jack Kramer et Cliff Drysdale dans le but de défendre les intérêts des joueurs de tennis professionnels masculins. En 1973, elle met en place le classement des joueurs professionnels, souvent nommé Classement ATP. Depuis 1990, l'association organise le circuit mondial des tournois de tennis pour hommes, en remplacement des tournois précédemment connus sous le nom de Grand Prix tennis circuit et World Championship Tennis (WCT). Le nom du circuit est alors lié au nom de l'organisation. En 1990, l’organisation s'appelait ATP Tour, elle est renommée en 2001 simplement ATP et c'est le circuit qui prend alors le nom de ATP Tour. En 2009, le nom de ce dernier est changé à nouveau et s'appelle désormais ATP World Tour. <br /><br /> Le siège mondial de l'ATP se trouve à Londres, au Royaume-Uni. ATP Americas est basé à Ponte Vedra Beach, aux États-Unis ; le siège d'ATP Europe est à Monaco et ATP International, qui couvre l'Afrique, l'Asie et l'Australasie, est basé à Sydney, en Australie.<br /><br /> La Women's Tennis Association (WTA) est l'organisation homologue pour le tennis professionnel féminin.</p>
            </div>
            <h3 class="text-white h3">L'ATP Tour</h3>
            <div class="text-white" id="what-atp-div">
                <p>L'ATP Tour (anciennement connu sous le nom d'ATP World Tour entre 2009 et 2018) est le principal circuit international de tennis masculin. Son équivalent féminin est le WTA Tour. Organisé par l'Association of Tennis Professionals, il a été créé en 1990 en remplacement du Grand Prix tennis circuit. Le circuit secondaire est l'ATP Challenger Tour et le troisième niveau est l'ITF Men's World Tennis Tour.</p>
            </div>
            <h3 class="text-white h3">Les catégories de tournoi ATP</h3>
            <div class="text-white" id="what-atp-div">
                <p>L'ATP Tour est composé de tournois de plusieurs catégories, chacune caractérisée par des dotations et des gains en points spécifiques. Le calendrier du circuit principal débute la première semaine de janvier et se termine à la fin du mois de novembre. En voici le détail par ordre décroissant d'importance : <br /><br /> • <bold>Grand Chelem</bold> : au nombre de quatre (Open d'Australie, Internationaux de France, Wimbledon et US Open), les tournois du Grand Chelem attribuent des points ATP mais sont organisés par la Fédération internationale de tennis (ITF) et les fédérations nationales concernées. <br /> • <bold>Masters</bold> : il constitue le dernier tournoi majeur de la saison tennistique depuis 1970. Organisé à Turin depuis 2021, il met aux prises les huit meilleurs joueurs et les huit meilleures équipes du monde. <br /> • <bold>Masters</bold> 1000 : série de neuf tournois qui se déroulent en Europe, en Asie, en Amérique, mis en place en 1990 pour réunir les meilleurs joueurs sur différents types de surfaces. Moins prestigieux que les Grands Chelems, ils constituent la deuxième catégorie dans la « hiérarchie » des tournois. <br /> • <bold>ATP 500</bold> : 13 tournois sont classés dans cette catégorie qui est moins prestigieuse que les Masters 1000 mais plus importante que les ATP 250. <br /> • <bold>ATP 250</bold> : cette catégorie comprend chaque année environ 40 tournois. Ce sont les moins prestigieux dans la hiérarchie de l'ATP Tour.</p>
            </div>


        </section>
    </main>



<?php
    require("footer.php");
    require("fin.php");
?>