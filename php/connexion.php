<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php'; ?>
        <link rel="stylesheet" href="../css/connexion.css">
        <title>Connexion</title>
    </head>

<?php 
$msg = "";

if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $recup_infos = $database->query("SELECT * FROM membre WHERE pseudo = '$pseudo'");
    //une fois le pseudo et le mdp ecrit on recupere les infos de la bdd qui correspondent a la ligne avec le meme pseudo que celui ecrit

    if($recup_infos->rowCount() > 0) {
    //si le nombre de ligne de $recup_infos est superieur a 0 c est qu il existe bien un utilisateur avec le pseudo ecrit

        $infos_membre = $recup_infos->fetch(PDO::FETCH_ASSOC);
        if(password_verify($mdp, $infos_membre['mdp'])) {//si le mot de passe correspond a celui du profil trouve alors la session prend les caracteristiques suivantes
            $verif = "";
            $_SESSION['membre']['id_membre'] = $infos_membre['id_membre'];
            $_SESSION['membre']['pseudo'] = $infos_membre['pseudo'];
            $_SESSION['membre']['nom'] = $infos_membre['nom'];
            $_SESSION['membre']['prenom'] = $infos_membre['prenom'];
            $_SESSION['membre']['email'] = $infos_membre['email'];
            $_SESSION['membre']['statut'] = $infos_membre['statut'];

        } else {
            //mdp incorrect
            $msg = "<div style='padding: 20px; background-color: red; color: white;'>Mdp incorrect,<br>Veuillez recommencer</div>";
        }

    } else {
        // pseudo incorrect
        $msg = "<div style='padding: 20px; background-color: red; color: white;'>Pseudo incorrect,<br>Veuillez recommencer</div>";
    }


}

?>
    <body>

        <section>
            <div class="content">
                <h1>Connexion</h1><br><br>
                <form method="post" action="connexion.php" class="formulaire">

                    <input type="text" name="pseudo" id="pseudo" placeholder="pseudo"><br><br>


                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"> <br><br>

                    <button type="submit" name="connexion" id="connexion">Se connecter</button><br>
                    <?php 

                        if($_SESSION){ //si $_SESSION existe c est que quelqu un est connecte, on previent que la personne est deja connecte
                            echo '<p class="echoLien">Vous êtes bien connecté, <a href="../index.php" class="lien">Retourner à la page d\'accueil</a></p>';
                        };

                    ?>

                </form>
            </div>
        </section>
    </body>

</html> 
