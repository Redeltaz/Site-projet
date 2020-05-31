<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php'; ?>

    <link rel="stylesheet" type="text/css" href="../css/galerie.css">
    <title>Galerie</title>
</head>

<body>

    <div class="content">

    <h1>Galerie Photo</h1>

    <?php if(empty($_SESSION['membre'])) { ?>
            <p class="connect"><a href="connexion.php">Connectez vous</a> pour poster une image</p>
    <?php } else{?>
        <form action="galerie.php" method="post" enctype="multipart/form-data" >
        <input type="file" name="fichier" id="fileToUpload" class="bouton">
        <input type="submit" value="uploader une image" name="submit" class="bouton">
        <p class="lien">Retourner à <a href="../index.php">l'accueil</a></p>
    <?php } ?>

</form>

<?php 

    if(isset($_POST["submit"]) ) {

        $chemin = basename($_FILES["fichier"]["name"]);
        $imageFileType = strtolower(pathinfo($chemin,PATHINFO_EXTENSION));//on met le chemin en minuscule pour eviter les potentiels problemes de syntaxe
        $check = getimagesize($_FILES["fichier"]["tmp_name"]);//permet de recuperer la taille de l image dans l eventualite de rajouter un systeme de limitation de taille dans le futur
        $pseudo = $_SESSION['membre']['pseudo']; //on recupere le pseudo de la personne actuellement connectee pour l'enregistrer
        $path = "../img/".$chemin;

        if($check !== false) {//condition valide, cela veut dire que c est bien une image et non un autre fichier
            $requete = $database->prepare(
                "INSERT INTO galerie (pseudo, img) VALUES (?, ?)"
            );
            $requete->execute(array($pseudo, $chemin));
            move_uploaded_file($_FILES['fichier']['tmp_name'],$path);//cela permet de deplacer l image choisie dans le dossier du site pour pouvoir afficher les images qui ne sont pas de base dans le dossier
        } else {
            echo "Seules les images sont acceptées.";
        }
    }

    $requete = $database->prepare(
        "SELECT * FROM galerie"
    );

    $requete->execute();

    $images = $requete->fetchAll();

?>
    <div class="single">
    <?php foreach($images as $valeur) { ?>

        <figure class="figure-protagoniste">
            <img src="../img/<?php echo $valeur['img'] ?>" class="image" alt="image : <?php echo $valeur['img'] ?>">
            <figcaption class="figcaption-img">Posté par : <?php echo $valeur['pseudo']?></figcaption>
        </figure>


    <?php } ?>
    </div>

    </div>
    
</body>
</html>