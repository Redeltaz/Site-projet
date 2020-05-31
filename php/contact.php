<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php'; ?>
    <title>Poster</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>

<?php 
        $ajout = ""; //declaration de la variable en lien avec la ligne 50, pour éviter qu'une erreur disant que la variable n'a pas été déclarée apparaisse

        //isset permet de vérifier l'existence de quelque chose
        if( isset($_POST['pseudo']) && $_POST['pseudo'] != '' && isset($_POST['texte']) && $_POST['texte'] != ''
        && isset($_POST['texte']) && $_POST['texte'] != '' ){

            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $texte = $_POST['texte'];
            //Mise en place de variable correspondantes aux contenu des cadres de texte

            $requete = $database->prepare( //initialisation de la requete dans la variable $requete (prepare est un lexique sql)
                "INSERT INTO contact (pseudo, email, texte) VALUES (?, ?, ?)"
                //la requete est INSERT, on insert du contenu dans la table article aux colonnes pseudo et texte
            );
            
            $ajout = $requete->execute(array($pseudo, $email, $texte));
            /*la variable $requete contenant la requete demandée est exécutée avec pour 
            paramètre un tableau ayant pour paramètre les contenus des cadres de texte*/
    
        }
    ?>

<body>

    <div class="content">
        <p class="forum">CONTACTEZ NOUS</p>
        <br>

        <div class="poste">
            <form action="contact.php" method="POST">
                <label class="pseudo"><input type="text" name="pseudo" placeholder="Pseudo" class="nom"></label>
                <label class="email"><input type="text" name="email" placeholder="Email" class="email"></label>
                <br>
                <br>
                <br>
                <textarea class="text" name="texte" placeholder="Ecrivez le contenu de votre article"></textarea>
                <br>
                <button class="add">Poster</button>

                <?php if($ajout){
                    echo '<p class="echoLien">votre message a été posté, <a href="../index.php" class="lien">Retourner à la page d\'accueil</a></p>';
                } ?>
            </form>
        </div>
    </div>

    
</body>
</html>