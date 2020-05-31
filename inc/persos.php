<?php include "connect.php";

// on recupere le parametre perso avec $_GET et selon sa valeur on stock les informations, image, texte, couleur... dans des variables qu'on appelera directement dans le fichier personnage.php

if ($_GET['perso'] == "jonathan"){
    
    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Jonathan Joestar' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }

}else if ($_GET['perso'] == "joseph"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Joseph Joestar' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "jotaro"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Jotaro Kujo' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "josuke"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Josuke Higashikata' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "giorno"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Giorno Giovanna' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "jolyne"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Jolyne Kujo' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "johnny"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Johnny Joestar' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
}else if ($_GET['perso'] == "josuke8"){

    $requete = $database->prepare(
        "SELECT * FROM persos WHERE nom = 'Josuke Higashikata 8' "
    );

    $requete->execute();

    $info = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $valeur){
        $nom = $valeur['nom'];
        $backgroundImage = "img/fond-perso/".$valeur['backgroundImage'];
        $headImage = $valeur['tete'];
        $textePresentation = $valeur['textePresentation'];
        $part = $valeur['part'];
        $partImage = $valeur['imagePartie'];
        $textePartie = $valeur['textePartie'];
        $citation = $valeur['citation'];
        $couleur = $valeur['couleur'];
    }
};

