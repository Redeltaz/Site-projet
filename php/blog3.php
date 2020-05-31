<?php include '../inc/connect.php'; ?>
<?php include '../inc/header.php'; ?>
    <title>Blog</title>
    <link rel="stylesheet" href="../css/blog.css">
</head>

<body>

<section class="article-list">

    <div class="page-title">
        <h1>BLOG : Partie 8</h1>
    </div>

    <?php

    $requete2 = $database->prepare( //initialisation de la requete, elle est contenue dans la variable $requete2
        "SELECT * FROM troisarticle ORDER BY date DESC" //La requete est une selection de l'ensemble (*) des colonnes de la table 
    );

    $requete2->execute();//on execute la requete

    $list_article = $requete2->fetchAll(PDO::FETCH_ASSOC);
    //on créé une variable qui sera un tableau qui sera créé avec le fetchAll() le paramètre permet un meilleur affichage


    ?>

    <?php foreach($list_article as $valeur) { ?> <!-- on sélectionne 1 par 1 les contenues de la liste $list_article -->
        <div class="single">

            <?php include '../inc/contentBlog.php'?> <!-- lien vers un fichier php qui permet d'éviter les répétitions-->

        </div>
    <?php } ?>
    
</body>
</html>