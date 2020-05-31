<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php';  $ajout = "";?>
    <title>Poster</title>
    <link rel="stylesheet" href="../css/post.css">
</head>


<body>

<div class="content">
    <p class="forum">AJOUTER UN POSTE à Manga</p>
    <br>

    <?php if(empty($_SESSION['membre'])) { ?><!--si $_SESSION existe pas c est que personne est connecte, on previent donc que la personne doit d abord se connecter -->
            <p class="connect"><a href="connexion.php">Connectez vous</a> pour poster un article</p>
    <?php } else{?>
        <form action="post2.php" method="post" enctype="multipart/form-data" >
        <?php include '../inc/contentPost.php'?>
    <?php } ?>

</form>

<?php 
    if(isset($_POST["submit"]) && isset($_POST['texte']) && $_POST['texte'] != '' && $_FILES['fichier']['error'] !== UPLOAD_ERR_NO_FILE) {
        //$_FILES['fichier']['error'] !== UPLOAD_ERR_NO_FILE permet de vérifier si l input de type file est remplis ou pas pour savoir s'il y a une image 

        $chemin = basename($_FILES["fichier"]["name"]);
        $imageFileType = strtolower(pathinfo($chemin,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fichier"]["tmp_name"]);
        $pseudo = $_SESSION['membre']['pseudo']; //on recupere le pseudo de la personne actuellement connectee pour l'enregistrer
        $path = "../img/".$chemin;
        $texte = $_POST['texte'];

        if($check !== false) {
            //$check permet de verifier que l utilisateur a bien mit une image et pas un autre fichier
            $requete = $database->prepare(
                "INSERT INTO deuxarticle (pseudo, texte, img) VALUES (?, ?, ?)"
            );
            $ajout = $requete->execute(array($pseudo, $texte, $chemin));
            move_uploaded_file($_FILES['fichier']['tmp_name'],$path);
            if($ajout){
                echo '<p class="echoLien">votre message a été posté, <a href="forum.php" class="lien">Retourner aux forums</a></p>';
            }
        } else {
            echo "Seules les images sont acceptées.";
        }
    } else if(isset($_POST['texte']) && $_POST['texte'] != '' && $_FILES['fichier']['error'] == UPLOAD_ERR_NO_FILE){
        //$_FILES['fichier']['error'] == UPLOAD_ERR_NO_FILE est verifie ça veut dire qu il n y aura pas d image a envoyer a la bdd
        $pseudo = $_SESSION['membre']['pseudo'];
        $texte = $_POST['texte'];

        $requete = $database->prepare(
            "INSERT INTO deuxarticle (pseudo, texte) VALUES (?, ?)"
        );

        $ajout = $requete->execute(array($pseudo, $texte));

        if($ajout){
            echo '<p class="echoLien">votre message a été posté, <a href="forum.php" class="lien">Retourner aux forums</a></p>';
        }
    }

?>

<script src="../ckeditor/ckeditor.js"></script>

    
</body>
</html>