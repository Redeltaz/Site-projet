<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php'; ?>

    <title>Déconnexion</title>
    <link rel="stylesheet" href="../css/connexion.css">
</head>

<body>
    <div class="content">
        <p class="deconnect">Vous vous êtes bien deconnectés !</p><br>

        <a href="../index.php" class="deconnectLink">
            <p class="deconnect">Retourner sur la page d'accueil</p>
        </a>
    </div>

<?php session_destroy(); ?> <!-- session_destroy pour permettre a l utilisateur de se deconnecter -->

</body>

</html>