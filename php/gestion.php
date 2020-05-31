<?php 
include '../inc/connect.php'; 

// restriction d'accès, si l'utilisateur n'est pas admin on le redirige sur accueil
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:../index.php');
} elseif(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] != 2) {
    header('location:../index.php');
}

?>

<?php include '../inc/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/gestion.css">
    <title>Admin</title>
</head>
<body>
    <div class="content">
        <div id="navbar">
            <a href="#contact">Demandes de contact</a>
            <a href="#membres">Membres</a>
            <a href="../index.php">Accueil</a>
            <p>Connecté en tant que : <?php echo $_SESSION['membre']['pseudo'] ?></p>
        </div>

        <h1 id="contact">Demandes de contact :</h1>

<?php

        //on affiche la liste des messages que les gens nous ont envoye

        $requete = $database->prepare( //initialisation de la requete, elle est contenue dans la variable $requete
            "SELECT * FROM contact ORDER BY date DESC" //La requete est une selection de l'ensemble (*) des colonnes de la table 
        );

        $requete->execute();//on execute la requete

        $list_article = $requete->fetchAll(PDO::FETCH_ASSOC);
        //on créé une variable qui sera un tableau qui sera créé avec le fetchAll() le paramètre permet un meilleur affichage


        ?>

        <?php foreach($list_article as $valeur) { ?> <!-- on sélectionne 1 par 1 les contenues de la liste $list_article -->
            <div class="single">

            <p class="pseudo"><span>Reçu de : </span><?php echo $valeur['pseudo']; ?></p>
            <p class="date"><span>Le : </span><?php echo $valeur['date']; ?></p>
            <p class="txt"><span>Email : </span><?php echo $valeur['email']; ?></p>
            <p class="date"><span>Contenu : </span><?php echo $valeur['texte']; ?></p>
            <br>

            </div>
        <?php } ?>

        <h1 id="membres">Liste des membres inscrits : </h1>

        <?php
        //on affiche la liste des membres inscrits en precisant toutes leurs infos, dont leur statut
        $requete2 = $database->prepare(
            "SELECT * FROM membre" 
        );

        $requete2->execute();

        $list_article2 = $requete2->fetchAll(PDO::FETCH_ASSOC);


        ?>

        <?php foreach($list_article2 as $valeur2) { ?>
            <div class="single">

            <p class="pseudo"><span>Pseudo : </span><?php echo $valeur2['pseudo']; ?></p>
            <p class="date"><span>Infos : </span><?php echo $valeur2['prenom'];?> <?php echo $valeur2['nom']; ?></p>
            <p class="txt"><span>Email : </span><?php echo $valeur2['email']; ?></p>
            <?php 
                if($valeur2['statut'] == 2){?>
                    <span class="statut">Statut : Admin</span>
                <?php }else if($valeur2['statut'] == 1){?>
                    <span class="statut">Statut : Membre</span>
                <?php } ?>
            <br>

            </div>
        <?php } ?>


    
    
    </div>

    <script src="../js/admin.js"></script>
</body>
</html>

        
