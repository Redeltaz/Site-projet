<?php include "inc/persos.php"; ?> 
<!-- On include un fichier qui va permettre de generer les informations de la page selon le parametre perso grace a $_GET 
toutes ces informations seront affichee ici avec les echo des variables-->
<!DOCTYPE html>
<html>

<head>
    <title>Perso</title>
    <link rel="stylesheet" type="text/css" href="css/personnages.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon-96x96.png" />
</head>


<body>
    <style> 
    body{background-image: url(<?php echo $backgroundImage?>);}
    .title-block{background-color: <?php echo $couleur?>;}
    .bloc-fin{background-color: <?php echo $couleur?>;}
    </style>

    <div class="accueil">
        <a href="index.php">Accueil</a>
    </div>

    <div id="space">

        <div class="title-block">

            <p class="txt-title"><?php echo $nom ?></p>
            <hr class="underline-title">

        </div>

        <div id="presentation">
            <h1 class="presentation-title">Personnage</h1>
            <p class="presentation-txt"><img class="tete" src="img/<?php echo $headImage?>"
                    alt="HirohikoAraki Piture"><?php echo $textePresentation ?></p>
        </div>

        <hr class="line">

        <div id="partie">
            <h1 class="partie-title"><?php echo $part?></h1>
            <img src="img/<?php echo $partImage?>.jpg" class="imgJojobro">
            <br>

            <p class="partie-txt"><?php echo $textePartie ?></p>
        </div>
    </div>

    <div class="bloc-fin">
        <p class="txt-fin">"<?php echo $citation?>"</p>
        <hr class="line-fin">
        <p class="txt-fin-fin">© 2020 - Projet final</p>
    </div>

</body>

</html>


